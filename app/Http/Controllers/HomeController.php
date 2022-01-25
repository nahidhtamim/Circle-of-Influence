<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenant;
use App\Models\User_Influencer;
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
        $users = User::all()->WHERE('role_as', '0')->WHERE('id','!=', Auth::id());
        return view('frontend.pick_influencers', compact('users'));
    }

    public function saveInfluencers(Request $request)
    {
        if(Auth::check()){
            $user_influencers = new User_Influencer();
            $user_influencers->user_id = Auth::id();
            $user_influencers->first_per_influencer = $request->input('first_per_influencer');
            $user_influencers->first_per_influencer_note = $request->input('first_per_influencer_note');
            $user_influencers->second_per_influencer = $request->input('second_per_influencer');
            $user_influencers->second_per_influencer_note = $request->input('second_per_influencer_note');
            $user_influencers->third_per_influencer = $request->input('third_per_influencer');
            $user_influencers->third_per_influencer_note = $request->input('third_per_influencer_note');
            $user_influencers->first_pro_influencer = $request->input('first_pro_influencer');
            $user_influencers->first_pro_influencer_note = $request->input('first_pro_influencer_note');
            $user_influencers->second_pro_influencer = $request->input('second_pro_influencer');
            $user_influencers->second_pro_influencer_note = $request->input('second_pro_influencer_note');
            $user_influencers->third_pro_influencer = $request->input('third_pro_influencer');
            $user_influencers->third_pro_influencer_note = $request->input('third_pro_influencer_note');
 
            $user_influencers->save();
            return redirect('/')->with('status', 'Data has been submitted Successfully');
        }

    }

    public function influencer_history()
    {
        $influencers = User_Influencer::where('user_id', Auth::id())->get();

        return view('frontend.history', compact('influencers'));

    }
}
