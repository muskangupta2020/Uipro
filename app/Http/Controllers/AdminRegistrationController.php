<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\AdminRegister;

class AdminRegistrationController extends Controller
{
    public function create()
    {
        return view('admin.register');
    }
    public function save(Request $r)
    {
        $data = new AdminRegister;
        $data->first_name=$r->first_name;
        $data->last_name=$r->last_name;
        $data->email=$r->email;
        $data->password=$r->password;
        $data->country=$r->country;
        $data->save();
        if($data)
        {
            return redirect("admin/login")->with('message',"Register successfully");
        }
    }
}
