<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\User; 
use DB;
use App\Checkout;
use App\Order;
class InvoiceController extends Controller
{
    public function invoice()
    {
        $data = User::all();
        $invoice = DB::table('invoices')->join('checkouts','invoices.user_id','=','checkouts.user_id')->select('invoices.*','checkouts.order_id')->get();
        $checkout = checkout::where('payment_status','=','Successfull')->get();
        return view('admin.invoice',compact('data','invoice','checkout'));
    }
    public function invoice_insert(Request $r)
    {
      $invoice = new Invoice;
        $invoice->invoice_date=$r->invoice_date;
        $invoice->invoice_name=$r->invoice_name;
        $invoice->user_id=$r->user_id;
        $invoice->order_id=$r->order_id;
        $invoice->payment_mode=$r->payment_mode;
        $invoice->user_type='member';
        $invoice->total=$r->total;
        $invoice->sale_note=$r->sale_note;
        $invoice->invoice_id=mt_rand(100000,999999);
        $done = $invoice ->save();
        if($done)
        {
            return redirect('admin/invoice ')->with('message','Invoice Created Successfully');
        }
        else
        {
            return redirect('admin/invoice ')->with('notmessage','Something went wrong');
        }
        return view('admin.invoice',compact('data'));
    }
     public function delete($id)
    {
        $data = Invoice::where('id',$id)->first();
        $delete = $data->delete();
        return redirect('admin/invoice')->with('message', 'data is deleted from Database');
    }
     public function delete_checkout($id)
    {
        $data = Checkout::where('id',$id)->first();
        $delete = $data->delete();
        return redirect('admin/invoice')->with('message', 'data is deleted from Database');
    }
    public function my_invoice()
    {
        return view('user.my_invoice');
    }    
    public function print($id)
    {
       
         $q = DB::table('invoices')->join('users', 'invoices.user_id', '=', 'users.user_id')->where('invoices.id',$id)->first();
         $product = Order::join('add_products','add_products.id','=','orders.p_id')->where('orders.order_id',$q->order_id)->get();
// echo "<pre/>";
// print_r($invoice);
        return view('admin.print_invoice',compact('q','product'));
    }
    public function complete_status(Request $request)
    {
         $status = 'completed';
        // echo $request->id;
        $complete = Checkout::where('id', $request->id)->update(['order_status' => $status]);
        if ($complete) {
            return redirect('admin/invoice')->with('message','Status Update Completed');
        }
    }
    public function processing_status(Request $request)
    {
         $status = 'processing';
        // echo $request->id;
        $complete = Checkout::where('id', $request->id)->update(['order_status' => $status]);
        if ($complete) {
            return redirect('admin/invoice')->with('message','Status Update Processing');
        }
    }
}
