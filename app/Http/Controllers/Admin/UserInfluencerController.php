<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\personalInfluencerExport;
use App\Exports\professionalInfluencerExport;





class UserInfluencerController extends Controller
{
    public function personalInfluencers(){
        $users = User::all();
        // $users = User::with('user_tenant')->get();
        $tenants = Tenant::all()->where('tenant_status', '!=', 0);
        return view('admin.user.index', compact('users', 'tenants'));
    }




    public function exportCsvPerosnal(){
        $filename = Carbon::now()->format('Ymd').'-personal_influencers.csv';
        return Excel::download(new personalInfluencerExport, $filename);
    }

    public function exportCsvProfessional(){
        $filename = Carbon::now()->format('Ymd').'-professional_influencers.csv';
        return Excel::download(new professionalInfluencerExport, $filename);
    }
    
}
