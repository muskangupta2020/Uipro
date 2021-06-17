<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;

class WalletController extends Controller
{
    public function view_wallet()
    {
        return view('admin.view_wallet');
    }
    public function topup_wallet()
    {
        return view('admin.topup_wallet');
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
