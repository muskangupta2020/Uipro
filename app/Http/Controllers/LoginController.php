<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Str;
use App\User;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Tologin()
    {
        return redirect(route('login'));
    }
    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            $blocked = "blocked";
            $activate = "activated";
            $data = User::where('email', $request->email)->first();
            $r = $data->login_status;
            $re = strcmp($r, $activate);
            echo $re;
            if($data->sponser_id != null){
                // echo "yes34";
            if ($re == 0) {
                // echo "yes";
                return redirect('user/index')->with('message','Login successfully');
            } elseif ($re == 1) {
                // echo "no1";
                Auth::logout();
                return redirect(route('login'))->with('notmessage','Your account is blocked.Please contact to admin');
            } else {
                // echo "no56";
                Auth::logout();
                return redirect(route('login'))->with('notmessage','Your account is blocked.Please contact to admin');
            }
        }
        else{
            // echo "nop";
              Auth::logout();
             return redirect(route('login'))->with('notmessage','You are Not A Member');
          
        }
        } 
        else {
            // echo "no";
            return redirect(route('login'))->with('notmessage','Your account is blocked.Please contact to admin');
        }


}
}
