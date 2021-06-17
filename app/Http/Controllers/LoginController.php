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
        print_r($credentials);
        if (Auth::attempt($credentials)) {
            $blocked = "blocked";
            $activate = "activated";
            $data = User::where('email', $request->email)->first();
            $r = $data->login_status;
            $re = strcmp($r, $activate);
            echo $re;
            if ($re == 0) {
                echo "yes";
                return redirect('user/index');
            } elseif ($re == 1) {
                echo "no1";
                return redirect('/logout');
            } else {
                echo "no";
                return redirect('/logout');
            }
        } else {
            return redirect(route('login'));
        }
    }
}