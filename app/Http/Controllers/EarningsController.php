<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Earning;
use App\Withdraw;
use App\KYC;
use Auth;
class EarningsController extends Controller
{
    public function view_earning()
    {
        $Earning = Earning::all();
        return view('admin.view_earning',compact('Earning'));
    }
    public function search_earning()
    {
        return view('admin.search_earning');
    }
    public function fund()
    {
        $withdraw=Withdraw::join('k_y_c_s','withdraws.user_id','=','k_y_c_s.user_id')->select('withdraws.*','k_y_c_s.*','k_y_c_s.id as k_id','withdraws.id as w_id')->get();
        return view('admin.fund_request',compact('withdraw'));
    }
    public function hold_payment()
    {
        return view('admin.hold_payment');
    }
    public function generate_payout()
    {
        return view('admin.generate_payout');
    }
    public function my_earning()
    {
         $userId = Auth::user()->user_id;
        $earning = Earning::where('user_id',$userId)->get();
        
        return view('user.my_earning',compact('earning'));
    }
    public function my_deduction()
    {
        return view('user.my_deduction');
    }
    public function user_search_earning()
    {
        return view('user.search_earning');
    }
    public function my_reward()
    {
        return view('user.reward');
    }
}
