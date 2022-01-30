<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tenant;
use App\Mail\ContactMail;
use App\Models\Selection;
use App\Models\Influencer;
use Illuminate\Http\Request;
use App\Models\Influencer_Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        $users = User::all()->WHERE('role_as', '0')->WHERE('id','!=', Auth::id())->WHERE('tenant_id','=', Auth::user()->tenant_id);
        return view('frontend.pick_influencers', compact('users', 'types'));
    }

    public function saveInfluencers(Request $request)
    {
        $selection = new Selection();
        $selection->activity_name = date('Ymd.His.', time()).Auth::user()->username;
        $selection->save();

        // $user_id = Auth::id();
        $type_id = $request->type_id;
        $influencer_id = $request->influencer_id;
        $influencer_note = $request->influencer_note;
        // $selection_id = $$selection->id;
        $influencer_no = 1;
        for($i = 0; $i < count($influencer_id); $i++){
            $datasave = [
                'user_id' => Auth::id(),
                'type_id' => $type_id[$i],
                'tenant_id' => Auth::user()->tenant_id,
                'influencer_id' => $influencer_id[$i],
                'influencer_note' => $influencer_note[$i],
                'selection_id' => $selection->id,
                'influencer_no' => $influencer_no,
            ];
            DB::table('influencers')->insert($datasave);
            $influencer_no++;
        }

        return redirect('/')->with('status', 'Data has been submitted Successfully');

    }

    public function influencer_history()
    {
        $influencers = Influencer::where('user_id', Auth::id())->get();

        return view('frontend.history', compact('influencers'));

    }

    public function profile($id)
    {
        $profile = User::find($id);

        return view('frontend.profile', compact('profile'));

    }

    public function updateProfile($id, Request $request)
    {
        $profile = User::find($id);
        $profile->first_name = $request->input('first_name');
        $profile->last_name = $request->input('last_name');
        $profile->mobile = $request->input('mobile');
        $profile->address = $request->input('address');
        $profile->update();
        return redirect('/')->with('status', 'User Updated Successfully');
    }

    public function updatePassword($id, Request $request)
    {
        $profile = User::find($id);
        $profile->password = Hash::make($request->input('password'));
        $profile->update();
        return redirect('/')->with('status', 'User Updated Successfully');
    }


    public function contactMail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to('forfreelaning101@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('status', 'Your Message Has Been Sent Successfully!');
    }
}
