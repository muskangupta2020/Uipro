<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Earning;

class EarningsController extends Controller
{
    public function view_earning()
    {
        return view('admin.view_earning');
    }
    public function search_earning()
    {
        return view('admin.search_earning');
    }
    public function fund()
    {
        return view('admin.fund_request');
    }
    public function hold_payment()
    {
        return view('admin.hold_payment');
    }
    public function generate_payout()
    {
        return view('admin.generate_payout');
    }
}
