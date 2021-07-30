<?php

namespace App\Http\Controllers;

use App\Requestepin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Earning;
use Auth;
use App\Wallet;
use App\ManagePlan;
use App\User;
use Illuminate\Support\Facades\DB;

class UserRegistrationController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function register()
    {
        $sponsor_id = DB::table('users')->selectRaw('count(*) as sponsor_count')->get();


        return view('user.registration');
    }
    public function display()
    {
        $sponsor_count = DB::table('users')->selectRaw('count(*) as sponsor_id')->get();
        $data = User::all();
        return view('user.registration', compact('sponsor_count'));
    }
    public function save(Request $s)
    {
        $string = "123456789";
        $data = new User;
        $data->name = $s->name;
        $data->email = $s->email;
        $data->user_id = mt_rand(1000000000, 9999999999);
        $data->placement_id = $s->placement_id;
        $data->sign_up_plan = $s->sign_up_plan;
        $data->user_sponser_id = $s->user_sponser_id;
        $data->states = $s->states;
        $data->street_address = $s->street_address;

        $data->phone_no = $s->phone_no;
        $data->position = $s->position;
        $data->e_pin = $s->e_pin;
        $data->city = $s->city;
        $data->pay = $s->pay;
        $data->zipcode = $s->zipcode;
        $data->password = $s->password;
        $data->save();
        if ($data) {
            return redirect('user/registration')->with('message','User Added Successfully');
        }
    }
    public function vendor()
    {
        // $id=Auth::user()->sponser_id;
        // echo $id;
        $plan = ManagePlan::all();
        return view('user.vendor',compact('plan'));
    }
    public function membersave(Request $s)
    {
    //    echo  $s->sponser_id;
        $check = User::whereNotNull('sponser_id')->where('user_sponser_id', $s->sponser_id)->count();
        // echo $check;
        // if ($check <= 2) {
        //     echo "yes";
        // } else {
        //     echo "no";
        // }
        $user_id=mt_rand(100000, 999999);
        echo $check;
        if ($check < 2) {
            // $states=User::whereNotNull('sponser_id')->where('user_sponser_id', $s->user_sponser_id)->where('position',$s->position)->first();
            // $position=$states->position;
            // if (is_null($states) || $states->position != '') {
            $sponser = random_int(100000, 999999);
            $data = new User;
            $data->name = $s->name;
            $data->email = $s->email;
            $data->user_id = $user_id;
            $data->placement_id = $s->placement_id;
            $data->sign_up_plan = $s->sign_up_plan;
            $data->user_sponser_id = $s->user_sponser_id;
            $data->states = $s->states;
            $data->street_address = $s->street_address;
            $data->sponser_id = $sponser;
            $data->phone_no = $s->phone_no;
            $data->position = $s->position;
            $data->city = $s->city;
            $data->pay = $s->pay;
            $data->zipcode = $s->zipcode;
            $data->password = Hash::make($s->password);
            $epin = new Requestepin;
            $epin->epin_id = random_int(100000, 999999);
            $epin->epin_amount = $s->e_pin;
            $epin->sign_up_plan = $s->sign_up_plan;
            $epin->user_name = $s->name;
            $epin->sponser_id = $sponser;
            $epin->epin_status = 'requested';
            $wallet = new Wallet;
            $wallet->wallet_id=mt_rand(100000,999999);
            $wallet->user_id=$user_id;
            $wallet->user_name=$s->name;
            $wallet->wallet_balance=0;
            $wallet->wallet_status=$s->wallet_status;
            $wallet->topup_balance=50;
            $earning = new Earning;
            $earning->ref_id=$s->sponser_id;
            $earning->user_id=$user_id;
            $earning->user_name=$s->name;
            $earning->earning_amount=0;
            $earning->save();
            $user=$data->save();
            if($user){
                $user_id=Auth::user()->user_id;
                echo $user_id;
                $earingupdate=Earning::where('user_id',$user_id)->first();
                $amount=$earingupdate->earning_amount + 100;
                $udate=Earning::where('user_id',$user_id)->update(['earning_amount'=> $amount]);
                $save=$epin->save();
                if($save){
                    $done=$wallet->save();
                    if($done)
                    {
                    return redirect('user/vendor');
                   }
                   else{
                return redirect('user/vendor')->with('notmessage','Wallet Data Not Saved');
            }
                }
                else{
                return redirect('user/vendor')->with('notmessage','Epin Data Not Saved');
            }
            }
            else{
                return redirect('user/vendor')->with('notmessage','User Data Not Saved');
            }



        }
        // else{
        //      return redirect('user/vendor')->with('notmessage','You have a member on position ');
        // }
         else {
            return redirect('user/vendor')->with('notmessage','You allready have two member');
        }
    }
}
