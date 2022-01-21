<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        // return view('home');
        return view('frontend.index');
    }

    public function pickInfluencer()
    {
        $users = User::all()->WHERE('role_as', '=', '0');
        return view('frontend.pick_influencers', compact('users'));
    }

    
}
