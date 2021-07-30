<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposit;
use DB;
use App\Wallet;
use Session;
use App\AdminRegister;
use App\User;
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
        $x=AdminRegister::where('email', $L->email)->where('password', $L->password)->first();
        print_r($x);
        if($x == null)
        {
            return redirect('admin')->with('notmessage', "Login unsuccessfully");
        }
       else
       {
        Session::put('username',$L->email);
        return redirect('admin/index')->with('message', "Login successfully");  
       }
    }
    public function dashboard()
    {
        $left = User::where('position','=','left')->count();
        $right = User::where('position','=','right')->count();
        $income =DB::table("deposits")->sum('ad_money');
        $activate = User::where('login_status','=','activated')->count();
        $deactivate = User::where('login_status','=','deactivated')->count();
        $wallet = DB::table("wallets")->sum('wallet_balance');
        $latestincome = DB::table("deposits")->latest('updated_at')->sum('ad_money');
        $plana = User::where('sign_up_plan','=','A')->count();
        $planb = User::where('sign_up_plan','=','B')->count();
        $planc = User::where('sign_up_plan','=','C')->count();
        $pland = User::where('sign_up_plan','=','D')->count();
        $data = DB::table('users')->whereNotNull('sponser_id')->latest('created_at')->get();
        return view('admin.index',compact('left','right','income','activate','deactivate','wallet','latestincome','plana','planb','planc','pland','data'))->with('message', "Login successfully");
    }
    public function logout(){
        Session::forget('username');
        return redirect('admin')->with('message', "Logout successfully");
    }
}
