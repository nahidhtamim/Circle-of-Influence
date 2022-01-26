<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Influencer;
use App\Models\Selection;
use App\Models\Influencer_Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('frontend.index');
    }

    
    public function pickInfluencer()
    {
        $types = Influencer_Type::all();
        $users = User::all()->WHERE('role_as', '0')->WHERE('id','!=', Auth::id());
        return view('frontend.pick_influencers', compact('users', 'types'));
    }

    public function saveInfluencers(Request $request)
    {
        $selection = new Selection();
        $selection->activity_name = date('Ymd', time()).Auth::user()->username;
        $selection->save();

        // $user_id = Auth::id();
        $type_id = $request->type_id;
        $influencer_id = $request->influencer_id;
        $influencer_note = $request->influencer_note;
        // $selection_id = $$selection->id;
        $influencer_no = $request->influencer_no;

        for($i = 0; $i < count($influencer_id); $i++){
            $datasave = [
                'user_id' => Auth::id(),
                'type_id' => $type_id[$i],
                'influencer_id' => $influencer_id[$i],
                'influencer_note' => $influencer_note[$i],
                'selection_id' => $selection->id,
                'influencer_no' => $i,
            ];
            DB::table('influencers')->insert($datasave);
        }

        return redirect('/')->with('status', 'Data has been submitted Successfully');

    }

    public function influencer_history()
    {
        $influencers = Influencer::where('user_id', Auth::id())->get();

        return view('frontend.history', compact('influencers'));

    }
}
