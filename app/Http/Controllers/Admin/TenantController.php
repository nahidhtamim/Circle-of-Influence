<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenant;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return view('admin.tenant.index', compact('tenants'));
    }

    public function addTenant()
    {
        return view('admin.tenant.addTenant');

    } 

    public function saveTenant(Request $request)
    {
        $tenant = new Tenant();
        $tenant->tenant_name = $request->input('tenant_name');
        $tenant->tenant_desc = $request->input('tenant_desc');
        $tenant->tenant_status = $request->input('tenant_status') == TRUE ? '1':'0';
        $tenant->meta_tenant_title = $request->input('meta_tenant_title');
        $tenant->meta_tenant_keywords = $request->input('meta_tenant_keywords');
        $tenant->save();
        return redirect('/tenants')->with('status', 'Tenant Added Successfully');
    }

    public function editTenant($id)
    {
        $tenant = Tenant::find($id);
        return view('admin.tenant.editTenant',compact('tenant'));
    }

    public function updateTenant($id, Request $request)
    {
        $tenant = Tenant::find($id);
        $tenant->tenant_name = $request->input('tenant_name');
        $tenant->tenant_desc = $request->input('tenant_desc');
        $tenant->tenant_status = $request->input('tenant_status') == TRUE ? '1':'0';
        $tenant->meta_tenant_title = $request->input('meta_tenant_title');
        $tenant->meta_tenant_keywords = $request->input('meta_tenant_keywords');
        $tenant->update();
        return redirect('/tenants')->with('status', 'Tenant Updated Successfully');
    }

    public function deleteTenant($id)
    {
        $tenant = Tenant::find($id);
        $tenant->delete();
        return redirect('/tenants')->with('status', 'Tenant Deleted Successfully');
    }
}
