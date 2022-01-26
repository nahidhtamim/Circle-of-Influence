<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenant;
use App\Models\User_Influencer;
use App\Models\Influencer_Type;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }
    // public function contact()
    // {
    //     return view('frontend.contact');
    // }

    
    public function pickInfluencer()
    {
        $types = Influencer_Type::all();
        $users = User::all()->WHERE('role_as', '0')->WHERE('id','!=', Auth::id());
        return view('frontend.pick_influencers', compact('users', 'types'));
    }

    public function saveInfluencers(Request $request)
    {
        
            return redirect('/')->with('status', 'Data has been submitted Successfully');

    }

    public function influencer_history()
    {
        $influencers = User_Influencer::where('user_id', Auth::id())->get();

        return view('frontend.history', compact('influencers'));

    }
}
