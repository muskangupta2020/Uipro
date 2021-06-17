<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pending_order()
    {
        return view('admin.pending_order');
    }
    public function delivered_order()
    {
        return view('admin.delivered_order');
    }
    public function completed_order()
    {
        return view('admin.completed_order');
    }
    public function all_order()
    {
        return view('admin.all_order');
    }
}
