<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\AdminRegister;

class AdminloginController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }

    public function adminlogin(Request $L)
    {
        echo "<pre>";
        $r = $L->all();
        print_r($r);
        if (AdminRegister::where('email', $L->email)->where('password', $L->password)) {
            // $r = AdminRegister::where('email', $L->email)->where('password', $L->password)->select('*')->first();

            // $session_id = Session::get('s_id',$r->id);
            // echo $session_id;
            return redirect('admin/index')->with('message', "Login successfully");
            // return $this->dashboard($r);
        }
    }
    public function dashboard()
    {

        return view('admin.index');
    }
}
