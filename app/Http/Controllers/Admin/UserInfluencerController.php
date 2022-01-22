<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Models\User_Influencer;
use App\Exports\InfluencersExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\userInfluencerExport;





class UserInfluencerController extends Controller
{
    public function personalInfluencers(){
        $users = User::all();
        // $users = User::with('user_tenant')->get();
        $tenants = Tenant::all()->where('tenant_status', '!=', 0);
        return view('admin.user.index', compact('users', 'tenants'));
    }




    public function exportCsvPerosnal(){
        return Excel::download(new InfluencersExport, 'personal_influencers.csv');
    }

    public function exportCsvProfessional(){
        return Excel::download(new InfluencersExport, 'professional_influencers.csv');
    }
    
}
