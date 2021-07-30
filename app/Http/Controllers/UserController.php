<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManagePlan;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{



    public function index()
    {

        // $userId = Auth::user()->user_id;
        // $data = User::where('user_id',$userId)->get();
        // echo $data;
        return view('user.index')->with('message','Login successfully');
    }
    public function done(){
    // { $user=Auth::user()->user_id;
        // echo $user;

         $left = User::where('position','=','left')->count();
        return view('user.index',compact('left'))->with('message','Login successfully');
    }
    public function logout()
    {
        Auth::logout();

        return redirect(route('login'))->with('message','Logout successfully');
    }
    public function register()
    {

        return view('user.registration');
    }
   public function user_register()
   {
        $plan = ManagePlan::all();
        return view('auth.register',compact('plan'));

   }


}
