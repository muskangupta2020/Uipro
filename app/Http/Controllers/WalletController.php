<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;

class WalletController extends Controller
{
    public function view_wallet()
    {
        $wallet = Wallet::all();
        return view('admin.view_wallet',compact('wallet'));
    }
    public function topup_wallet(Request $r)
    {
        $wallet = new Wallet;
        return view('admin.topup_wallet',compact('wallet'));
    }
    public function transfer_fund()
    {
        return view('admin.transfer_fund');
    }
    public function withdraw_fund()
    {
        return view('admin.withdraw_fund');
    }
    public function wallet_transaction()
    {
        return view('admin.wallet_transaction');
    }
}
