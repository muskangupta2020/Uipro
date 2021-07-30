<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
class ReportController extends Controller
{
    public function payout_report()
    {
        return view('admin.payout_report');
    }
    public function tax_report()
    {
        return view('admin.tax_report');
    }
    public function product_sale_report()
    {
        return view('admin.product_sale_report');
    }
    public function vendor_sale_report()
    {
        return view('admin.vendor_sale_report');
    }
    public function wallet_transaction()
    {
        return view('user.wallet_transaction');
    }
    public function user_payout_report()
    {
        return view('user.user_payout_report');
    }
}
