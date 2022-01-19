<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tenant;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $tenants = Tenant::all()->where('tenant_status', '!=', 0);
        return view('admin.user.index', compact('users', 'tenants'));
    }

    public function updateUserTenant($id, Request $request)
    {
        $user_tenant = User::find($id);
        $user_tenant->tenant_id = $request->input('tenant_id');
        $user_tenant->update();
        return redirect('/users')->with('status', 'User Tenant Updated Successfully');
    }
}
