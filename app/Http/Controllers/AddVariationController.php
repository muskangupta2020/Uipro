<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AddVariation;

class AddVariationController extends Controller
{
    public function create()
    {   
        $data = AddVariation::all();
        return view('admin.add_variation',compact('data'));
    }
    public function save(Request $s)
    {
        $data = new AddVariation;
        $data->var_name=$s->var_name;
        $data->var_value=$s->var_value;
        $data->save();
        if($data)
        {
            return redirect('admin/add_variation');
        }
    }
    public function display()
    {
        $data = AddVariation::all();
        return view('admin.add_variation',compact('data'));
    }
    public function edit($id)
    {
        $edit=AddVariation::find($id);
        return view("admin.edit_variation",compact('edit'));
    }
    public function delete($id)
    {
        $delete = AddVariation::find($id);
        $d = $delete->delete();
        if($d)
        {
            return redirect('admin/add_variation');
        }
    }
    public function variation_update(Request $u)
    {
        $data = AddVariation::find($u->id);
        $data->var_name=$u->var_name;
        $data->var_value=$u->var_value;
        $data->save();
        if($data)
        {
            return redirect('admin/add_variation');
        }
    }
}
