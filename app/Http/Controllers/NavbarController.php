<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navbar;
use App\AdvanceCoupan;
class NavbarController extends Controller
{
    public function create()
    {
        $navbar = Navbar::all();
        $advancecoupan = AdvanceCoupan::all();
        return view('admin.navbar',compact('navbar','advancecoupan'));
    }
    public function insert(Request $r)
    {
        $file = $r->file('logo_image');
        $filename = 'logo_image'.time() .'.'. $r->logo_image->extension();
        $file->move("upload/",$filename);
        $nav = new Navbar;
        $nav->logo_image=$filename;
        $nav->contact=$r->contact;
        $nav->offer1=$r->offer1;
        $nav->offer2=$r->offer2;
        $nav->offer3=$r->offer3;
        $nav->offer4=$r->offer4;
        $nav->offer5=$r->offer5;
        $nav->offer6=$r->offer6;
        $nav->offer7=$r->offer7;
        $nav->offer8=$r->offer8;
        $done = $nav->save();
        if($done)
        {
            return redirect('admin/navbar')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/navbar')->with('notmessage','Something went wrong');
        }
    }
    public function edit($id)
    {
        $edit = Navbar::find($id);
        return view('admin.edit_navbar',compact('edit'));
    }
     public function update(Request $r)
    {
        if ($r->hasFile('logo_image')) {
            $file = $r->file('logo_image');
            $filename = 'logo_image'.time() .'.'. $r->logo_image->extension();
            $upload = $file->move("upload/", $filename);

            if ($upload) {
                $update =  Navbar::find($r->id);
                $update->logo_image=$filename;
                $update->contact=$r->contact;
                $update->offer1=$r->offer1;
                $update->offer2=$r->offer2;
                $update->offer3=$r->offer3;
                $update->offer4=$r->offer4;
                $update->offer5=$r->offer5;
                $update->offer6=$r->offer6;
                $update->offer7=$r->offer7;
                $update->offer8=$r->offer8;

                $done = $update->save();
                if ($done) {
                    return redirect('admin/navbar')->with('message', 'data is updated from Database');
                }
            }
        } else {
             $update =  Navbar::find($r->id);
                $update->contact=$r->contact;
                $update->offer1=$r->offer1;
                $update->offer2=$r->offer2;
                $update->offer3=$r->offer3;
                $update->offer4=$r->offer4;
                $update->offer5=$r->offer5;
                $update->offer6=$r->offer6;
                $update->offer7=$r->offer7;
                $update->offer8=$r->offer8;
            $done = $update->save();
            if ($done) {
                return redirect('admin/navbar')->with('message', 'data Inserted in Database');
            }
        }
    }
    public function delete($id)
    {
        $data = Navbar::find($id);
        $delete = $data->delete();
        return redirect('admin/navbar')->with('message', 'data is deleted from Database');
    }
}
