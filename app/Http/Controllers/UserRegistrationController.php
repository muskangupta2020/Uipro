<?php

namespace App\Http\Controllers;

use App\Requestepin;
use Illuminate\Http\Request;

use Auth;


use App\User;
use Illuminate\Support\Facades\DB;

class UserRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            return redirect('admin/list_member');
        }
    }
    public function vendor()
    {
        return view('user.vendor');
    }
    public function membersave(Request $s)
    {
        $check = User::whereNotNull('sponser_id')->where('user_sponser_id', $s->user_sponser_id)->count();
        echo $check;
        // if ($check <= 2) {
        //     echo "yes";
        // } else {
        //     echo "no";
        // }
        if ($check <= 2) {
            $sponser = random_int(100000, 999999);
            $data = new User;
            $data->name = $s->name;
            $data->email = $s->email;
            $data->user_id = mt_rand(100000, 999999);
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
            $data->password = $s->password;
            $user = $data->save();
            if ($user) {
                $epin = new Requestepin;
                $epin->epin_id = random_int(100000, 999999);
                $epin->epin_amount = $s->e_pin;
                $epin->sign_up_plan = $s->sign_up_plan;
                $epin->user_name = $s->name;
                $epin->sponser_id = $sponser;
                $epin->epin_status = 'requested';
                $save = $epin->save();
                if ($save) {
                    return redirect('user/vendor');
                }
                return redirect('user/vendor');
            }
        } else {
            return redirect('user/index');
        }
    }
}
