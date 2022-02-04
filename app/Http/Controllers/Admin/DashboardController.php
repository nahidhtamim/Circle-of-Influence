<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Influencer;
use App\Models\User;
use App\Models\Influencer_Type;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = User::all()->where('role_as', '!=', '1');
        $influencers = Influencer::all();

        if(count($users) != 0){
            foreach ($users as $user) {
            $name = $user['last_name'].' '.$user['first_name'];
                $nodes[] = array(
                    "id" => $name,
                );
            };
        }
        else{
            $nodes = 0;
        }
        


        if(count($influencers) != 0){
            foreach ($influencers as $influencer) {
                $src = $influencer->user_inf->last_name.' '.$influencer->user_inf->first_name;
                $tgt = $influencer->influencer->last_name.' '.$influencer->influencer->first_name;
                $links[] = array(
                    "source" => $src,
                    "target" => $tgt,
                    "types"  => "influencer",
                );
            };
        }
        elseif(count($users) != 0){
            foreach ($users as $user) {
                $name = $user['last_name'].' '.$user['first_name'];
                $links[] = array(
                    "source" => $name,
                    "target" => $name,
                    "types"  => "influencer",
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
