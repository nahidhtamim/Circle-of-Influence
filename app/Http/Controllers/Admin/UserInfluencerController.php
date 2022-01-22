<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Exports\InfluencerExport;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;





class UserInfluencerController extends Controller
{
    public function personalInfluencers(){
        $users = User::all();
        // $users = User::with('user_tenant')->get();
        $tenants = Tenant::all()->where('tenant_status', '!=', 0);
        return view('admin.user.index', compact('users', 'tenants'));
    }




    public function exportCsvPerosnal(){
        return Excel::download(new Tenant, 'personal_influencers.csv');
    }

    public function exportCsvProfessional(){
        return Excel::download(new InfluencerExport, 'professional_influencers.csv');
    }
    
}
