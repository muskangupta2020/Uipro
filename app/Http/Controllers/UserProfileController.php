<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\User;
use Auth;
class UserProfileController extends Controller
{
    public function reset_password()
    {
      return view('user.reset_password');
     }
     public function old_password(Request $request)
     {
      $email = User::all();
       $e = $request->email;
      return view('user.old_password',compact('email','e'));
     }
    public function check(Request $request)
    {
    echo  $email = $request->input('email');
    echo  $password = $request->input('password');
      $user = User::where('email', $request->email)->where('password',$request->password)->first();
      echo "<pre/>";
    print_r($user);
     // if ($user == null)
     //  {
     //    return redirect('user/reset_password')->with('notmessage','Login Fail please check email id & password');
     // }
     
     // else{
     //    $e = $request->email;
     //    return view('user.old_password',compact('e'));
     //  }
  }
  public function new_password(Request $p)
  {
     $email=$p->input('email');
     $password = $p->input('password');
     // echo $password;
    $data = User::where('email',$email)->update(['password' => $password]);
    return redirect('user/old_password')->with('message',' Password Reset Successfully');
        
  }

}
