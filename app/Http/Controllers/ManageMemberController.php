<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Crypt;

use App\User;

use App\UserRegistration;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ManageMemberController extends Controller
{
    public function list_member()
    {
        // $data = User::all();
        $data = DB::table('users')->whereNotNull('sponser_id')->get();
        // $data = DB::table('users')->whereNotNull('sponser_id')
        // ->join('users','users.sponser_id','=','users.user_sponser_id')->select('users.name',
        //     'users.users_id','users.sponser_id','users.user_sign_up_plan','users.phone_no',DB::raw('count(users.id) as count'))->groupBy('users.id')->get();
        // echo "<pre/>";
        // print_r($data);
        return view('admin.list_member', compact('data'));
    }
    public function search_member()
    {
        $data = User::all();
        $data = DB::table('users')->whereNotNull('sponser_id')->get();
        return view('admin.search_member', compact('data'));
    }
    public function blocked_member()
    {
        $data = User::all();
        $data = DB::table('users')->whereNotNull('sponser_id')->get();
        return view('admin.blocked_member', compact('data'));
    }
    public function latest_member()
    {
        $data = User::all();
        return view('admin.latest_member', compact('data'));
    }
    public function display_blocked_member(Request $request)
    {
        $status = 'blocked';
        echo $request->user_id;
        $block = User::where('user_id', $request->user_id)->update(['login_status' => $status]);
        if ($block) {
            return redirect('admin/blocked_member');
        }
    }

    public function display_activate_member($user_id)
    {
        $status = 'activated';
        echo $user_id;
        $activate = User::where('user_id', $user_id)->update(['login_status' => $status]);
        if ($activate) {
            return redirect('admin/blocked_member');
        }
    }
    public function view_member($id)
    {
        $view =  User::find($id);
        // echo "<pre>";
        // print_r($view);
        return view("admin.view_member",compact('view'));
    }
    public function login_mail($id)
    { 
        $data = User::all();
    $user=User::where('id',$id)->first();
    // echo "<pre/>";
    // print_r($user);
    // $decrypt= Crypt::decrypt($user->password);
    // echo $decrypt;
        $email=$user->email;
     $name=$user->name;
         Mail::send('admin.login_mail', $user->toArray(),
          function($message) use ($name, $email) {
         $message->to($email, $name)->subject
            ('Login details');
      });
         
        return view('admin.login_mail');

        
    }
    public function edit_member($id)
    {
        $edit = User::find($id);
        return view('admin/edit_member',compact('edit'));
    }
         public function update_member(Request $r)
    {
                $data =  User::find($r->id);
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
                $data->e_pin=$s->e_pin;
                $data->city = $s->city;
                $data->pay = $s->pay;
                $data->zipcode = $s->zipcode;
                $data->password = Hash::make($s->password);
                $done = $data->save();
                if( $done)
                {
                    return redirect('admin/view_member')->with('message', 'data is updated from Database');
                }
        }

}
