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

        if(count($users) != 0){
            foreach ($users as $user) {
            
                $nodes[] = array(
                    "id" => $user['username'],
                );
            };
        }
        else{
            $nodes = 0;
        }
        


        if(count($influencers) != 0){
            foreach ($influencers as $influencer) {
            
                $links[] = array(
                    "source" => $influencer->user_inf->username,
                    "target" => $influencer->influencer->username,
                    "value"  => 1,
                );
            };
        }
        elseif(count($users) != 0){
            foreach ($users as $user) {
            
                $links[] = array(
                    "source" => $user->username,
                    "target" => $user->username,
                    "value"  => 1,
                );
            };
        }
        else{
            $links = 0;
        }
        
        return view('admin.index', compact('influencers', 'users'), 
        ["nodes" => json_encode($nodes), "links" => json_encode($links)]);
    }

}
