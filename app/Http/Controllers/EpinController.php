<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Requestepin;

use App\Epin;
use App\User;
use DB;

class EpinController extends Controller
{
    public function create()
    {
        $data = User::whereNotNull('sponser_id')->get();
        return view('admin.generate_epin', compact('data'));
    }
    public function request()
    {
        $data = Requestepin::all();
        return view('admin.request_epin', compact('data'));
    }
    public function unused_epin()
    {
        $data = Epin::all();
        return view('admin.unused_epin', compact('data'));
    }
    public function used_epin()
    {
        $data = Epin::all();
        return view('admin.used_epin', compact('data'));
    }
    public function transfer()
    {
        $data = Epin::all();
        return view('admin.transfer_epin', compact('data'));
    }
    public function ByPlan(Request $request)
    {
        $epin = new Epin;
        $epin->epin_id = random_int(100000, 999999);
        $epin->epin_no = $request->epin_no;
        $epin->epin_type = $request->epin_type;
        $epin->generated_by = 'admin';
        $epin->epin_amount = $request->epin_amount;
        $epin->mode_of_epin = 'by plan';
        $epin->epin_status = 'accepted';
        $epin->user_id = $request->user_id;
        $s =  $epin->save();
        if ($s) {
            return redirect('admin/unused_epin');
        }
    }
    public function ByAmount(Request $request)
    {
        $epin = new Epin;
        $epin->epin_id = mt_rand(1000000, 9999999);
        $epin->epin_no = $request->epin_no;
        $epin->epin_type = $request->epin_type;
        $epin->generated_by = 'admin';
        $epin->epin_amount = $request->epin_amount;
        $epin->mode_of_epin = 'By Amount';
        $epin->epin_status = 'accepted';
        $epin->user_id = $request->user_id;
        $s =  $epin->save();
        if ($s) {
            return redirect('admin/unused_epin');
        }
    }
    public function transfer_save(Request $t)
    {
        $data = DB::table('epins')->where('user_id', $t->user_id)->first();
        if ($data->epin_no <= $t->epin_no) {
            // print_r($data);
        
        $total_epin = $data->epin_no - $t->epin_no;
        if ($total_epin >= 0) {
            $transfer = DB::table('epins')->where('user_id', $t->user_id)->update(['epin_no' => $total_epin]);
            if ($transfer) {
                $epin = new Epin;
                $epin->epin_id = random_int(100000, 999999);
                $epin->epin_no = $total_epin;
                $epin->epin_type = 'single';
                $epin->generated_by = 'admin';
                $epin->epin_amount = $t->epin_amount;
                $epin->mode_of_epin = 'by plan';
                $epin->epin_status = 'transfer';
                $epin->user_id = $t->to_user_id;
                $s =  $epin->save();
                if ($s) {
                  
                }
            }
            // return redirect('admin/transfer_epin')->with('message','Epin Transfer Successfully');
        }
          return redirect('admin/transfer_epin')->with('message','Epin Transfer Successfully'); 
    }else {
            echo "again fill epin_no";
        }


        // $data = DB::table('epins')
    }
}