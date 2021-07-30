<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Network;
use App\User;
use Auth;
class NetworkController extends Controller
{
    public function user_tree()
    { 
           $data = [
            'sponsr' => User::where('user_sponser_id', '=', null)->get(),
            'sponsrs'=>User::pluck('name','id')->all(),
            'sponsrss'=>User::all(),
        ];
        // $data = User::whereNotNull('sponser_id')->get();
        return view('admin.user_tree',$data);
    }
    public function referred_member()
    {
        $data = User::all();
        return view('admin.referred_member',compact('data'));
    }
    public function downline_tree()
    {
        $user_id=Auth::user()->user_id;
        $query = Auth::user()->where('user_id',$user_id)->get();
        $data = [
            'sponsr' => User::where('sponser_id', '=', Auth::user()->sponser_id)->get(),
            'sponsrs'=>User::pluck('name','id')->all(),
            'sponsrss'=>User::all(),
        ];
    // echo "<pre/>";
     // print_r($data['sponsr']);
       return view('user.mydownline_tree',$data);
}
    public function direct_referrer_list()
    {
        $user_id=Auth::user()->user_id;
        $query = Auth::user()->where('user_id',$user_id)->where('sponser_id',Auth::user()->sponser_id)->get();
        return view('user.direct_referrer_list',compact('query'));
    }
}
