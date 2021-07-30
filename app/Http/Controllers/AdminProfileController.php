<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminProfile;
use App\AdminRegister;
use DB;
class AdminProfileController extends Controller
{
    public function reset_password_login()
    {
      return view('admin.reset_password_login');
     }
     public function reset_password(Request $request)
     {
      $email = AdminRegister::all();
      return view('admin.reset_password',compact('email'));
     }
    public function check(Request $request)
    {
     $email = $request->input('email');
     $password = $request->input('password');
      $user = AdminRegister::where('email', request('email'))->where('password',request('password'))->first();
     if ($user == null)
      {
        return redirect('admin/reset_password_login')->with('notmessage','Login Fail please check email id & password');
     }
     
     else{
        $e = $request->email;
        return view('admin.reset_password',compact('e'));
      }
  }
  public function new_password(Request $p)
  {
     $email=$p->input('email');
     $password = $p->input('password');
     // echo $password;
    $data = AdminRegister::where('email',$email)->update(['password' => $password]);
    return redirect('admin/reset_password')->with('message',' Password Reset Successfully');
        
  }

}                                                  
