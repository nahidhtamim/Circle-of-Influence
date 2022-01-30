<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Influencer;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all()->where('role_as', '!=', '1');
        $influencers = Influencer::all();

        foreach ($users as $user) {
            
            $nodes[] = array(
                "id" => $user['username'],
            );
        };
        if(count($influencers) != 0){
            foreach ($influencers as $influencer) {
            
                $links[] = array(
                    "source" => $influencer->user_inf->username,
                    "target" => $influencer->influencer->username,
                    "value"  => 1,
                );
            };
        }
        else{
            foreach ($users as $user) {
            
                $links[] = array(
                    "source" => $user->username,
                    "target" => $user->username,
                    "value"  => 1,
                );
            };
        }
        
        return view('admin.index', compact('influencers', 'users'), 
        ["nodes" => json_encode($nodes), "links" => json_encode($links)]);
    }

}
