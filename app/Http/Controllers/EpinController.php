<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Requestepin;
use Auth;
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
            return redirect('admin/unused_epin')->with('message', 'Epin Generted By Plan Successfully');
        }
        else
        {
            return redirect('admin/unused_epin')->with('notmessage', 'Something went wrong');
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
        if ($s) 
        {
            return redirect('admin/unused_epin')->with('message', 'Epin Generted By Amount Successfully');
        }
        else
        {
            return redirect('admin/unused_epin')->with('notmessage', 'Something went wrong');

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
    }
    else {
            return redirect('admin/transfer_epin')->with('notmessage','Epin not Transfer Successfully'); 
        }


        // $data = DB::table('epins')
    }
    public function user_unused_epin()
    {
         $userId = Auth::user()->user_id;
         $user_name = Auth::user()->name;
        $data = Epin::where('user_id',$userId)->where('user_name',$user_name)->get();
        $data = Epin::where('user_name',$user_name)->get();
        return view('user.user_unused_epin',compact('data'));
    }
    public function user_used_epin()
    {
        $data = Epin::all();
        return view('user.user_used_epin',compact('data'));
    }
    public function user_transfer_epin()
    {
        $data = Epin::all();
        return view('user.user_transfer_epin',compact('data'));
    }
    public function user_ByPlan(Request $request)
    {
        echo $userId = Auth::user()->user_id;
        $epin=DB::table('epins')->where('user_id',$userId)->first();
        // echo "<pre/>";
        // print_r($epin);
         $epinno=$epin->epin_no;
         $input=$request->epin_no;
         $name=User::where('user_id',$request->to_user_id)->first();
         $name2=$name->name;
        if( $input <= $epinno){
            $no=$epin->epin_no -$request->epin_no;
        $data = new Epin;
        $data->epin_id = mt_rand(100000,999999);
        $data->epin_no = $request->epin_no;
        // $epin->epin_type = $request->epin_type;
        $data->generated_by = 'member';
        $data->epin_amount = $request->epin_amount;
        $data->mode_of_epin = 'By Plan';
        $data->epin_status = 'accepted';
        $data->user_name=$name2;
        $data->user_id = $request->to_user_id;
        $s =  $data->save();
        if ($s) 
        {
            $updateepin=Epin::where('user_id',$userId)->update(['epin_id'=>$no]);
           if($updateepin){ 
            return redirect('user/user_transfer_epin')->with('message', 'Epin Generted By Amount Successfully');
            }
            else{
                 return redirect('user/user_transfer_epin')->with('notmessage', 'Something went wrong1');
            }
        }
        else
        {
            return redirect('user/user_transfer_epin')->with('notmessage', 'Something went wrong');

        }
        }
        else{
            return redirect('user/user_transfer_epin')->with('notmessage', 'You donnot have suficient Epin' );

        }
    }
    public function accept_epin(Request $request)
    {
         $status = 'accept';
        $accept = Requestepin::where('epin_id', $request->epin_id)->update(['epin_status' => $status]);
        if ($accept) {
            return redirect('admin/request_epin')->with('message','accept');
        }
    }
}