<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\User;

use App\UserRegistration;

use Auth;
use Illuminate\Support\Facades\DB;

class ManageMemberController extends Controller
{
    public function list_member()
    {
        $data = User::all();
        $data = DB::table('users')->whereNotNull('sponser_id')->get();
        $data = DB::table('users')->select('users.user_id', 'users.name', 'users.sponser_id', 'users.sign_up_plan', 'users.phone_no', 'users.created_at')->whereNotNull('sponser_id')->get();
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
        $data = DB::table('users')->whereNotNull('sponser_id')->get();
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
        $status = 'activate';
        echo $user_id;
        $activate = User::where('user_id', $user_id)->update(['login_status' => $status]);
        if ($activate) {
            return redirect('admin/blocked_member');
        }
    }
}
