<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Order;
class OrderController extends Controller
{
    public function pending_order()
    {
        $po = DB::table('checkouts')->join('orders','checkouts.order_id','=','orders.order_id')->select('checkouts.*','orders.*')->where('order_status','=','pending')->get();
        return view('admin.pending_order',compact('po'));
    }
    public function delivered_order()
    {
        $do = DB::table('checkouts')->join('orders','checkouts.order_id','=','orders.order_id')->select('checkouts.*','orders.*')->where('order_status','=','processing')->get();
        return view('admin.delivered_order',compact('do'));
    }
    public function completed_order()
    {
        $co = DB::table('checkouts')->join('orders','checkouts.order_id','=','orders.order_id')->select('checkouts.*','orders.*')->where('order_status','=','completed')->get();
        return view('admin.completed_order',compact('co'));
    }
    public function all_order()
    {
        $ao = DB::table('checkouts')->join('orders','checkouts.order_id','=','orders.order_id')->select('checkouts.*','orders.*')->get();
        return view('admin.all_order',compact('ao'));
    }
    public function delete_pending_order($id)
    {
        $delete = Order::find($id);
        $d = $delete->delete();
        if($d)
        {
            return redirect('admin/pending_order')->with('message','Deleted Successfully');
        }
    }
    public function delete_delivered_order($id)
    {
        $delete = Order::find($id);
        $d = $delete->delete();
        if($d)
        {
            return redirect('admin/delivered_order')->with('message','Deleted Successfully');
        }
    }
    public function delete_completed_order($id)
    {
        $delete = Order::find($id);
        $d = $delete->delete();
        if($d)
        {
            return redirect('admin/completed_order')->with('message','Deleted Successfully');
        }
    }
    public function delete_all_order($id)
    {
        $delete = Order::find($id);
        $d = $delete->delete();
        if($d)
        {
            return redirect('admin/all_order')->with('message','Deleted Successfully');
        }
    }
}
