<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Influencer_Type;

class InfluencerTypeController extends Controller
{
    public function index()
    {
        $influencer_types = Influencer_Type::all();
        return view('admin.influencer_types.index', compact('influencer_types'));
    }

    public function addInfluencerType()
    {
        return view('admin.influencer_types.addInfluencerType');

    } 

    public function saveInfluencerType(Request $request)
    {
        $influencer_types = new Influencer_Type();
        $influencer_types->influencer_type = $request->input('influencer_type');
        $influencer_types->type_status = $request->input('type_status') == TRUE ? '1':'0';
        $influencer_types->save();
        return redirect('/influencer-types')->with('status', 'Influencer Type Added Successfully');
    }

    public function editInfluencerType($id)
    {
        $influencer_type = Influencer_Type::find($id);
        return view('admin.influencer_types.editInfluencerType',compact('influencer_type'));
    }

    public function updateInfluencerType($id, Request $request)
    {
        $influencer_type = Influencer_Type::find($id);
        $influencer_type->influencer_type = $request->input('influencer_type');
        $influencer_type->type_status = $request->input('type_status') == TRUE ? '1':'0';
        $influencer_type->update();
        return redirect('/influencer-types')->with('status', 'Influencer Type Updated Successfully');
    }

    public function deleteInfluencerType($id)
    {
        $influencer_type = Influencer_Type::find($id);
        $influencer_type->delete();
        return redirect('/influencer-types')->with('status', 'Influencer Type Deleted Successfully');
    }
}
