<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advt;
class AdvtController extends Controller
{
    public function create()
    {
        $advt = Advt::all();
        return view('admin.advt',compact('advt'));
    }
    public function save(Request $r)
    {
        $advt = new Advt;
        $advt->title=$r->title;
        $advt->expiry_date=$r->expiry_date;
        $advt->date=$r->date;
        $advt->type=$r->type;
        $advt->description=$r->description;
        $done=$advt->save();
        if($done)
        {
            return redirect('admin/advt')->with('message','Data Inserted Successfully');
        }
    }
    public function edit($id)
    {
        $edit=Advt::find($id);
        return view('admin.edit_advt',compact('edit'));
    }
    public function delete($id)
    {
        $delete=Advt::where('id',$id);
        $done=$delete->delete();
        return redirect('admin/advt')->with('message', 'data is deleted from Database');
    }
    public function update(Request $r)
    {
       $update =  Advt::find($r->id);
        $update->title=$r->title;
        $update->expiry_date=$r->expiry_date;
        $update->date=$r->date;
        $update->type=$r->type;
        $update->description=$r->description;
        $done = $update->save();
        if($done)
        {
            return redirect('admin/advt')->with('message','Data Updated Successfully');
        }
    } 
}
