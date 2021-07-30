<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Support;
use Auth;
use DB;
class TicketController extends Controller
{
    public function unsolved_ticket()
    {
        $data = Support::all();
        return view('admin.unsolved_ticket',compact('data'));
    }
    public function resolved_ticket()
    {
        $data=Support::where('ticket_status', '=', 'Solved')->get();
        return view('admin.resolved_ticket',compact('data'));
    }
    public function my_support()
    {
         $userId = Auth::user()->user_id;
         $user_name = Auth::user()->name;
        $data = Support::where('user_id',$userId)->where('user_name',$user_name)->get();
        return view('user.my_support',compact('data'));
    }
    public function my_support_insert(Request $r)
    {
        $data = new Support;
        $data->ticket_subject=$r->ticket_subject;
        $data->user_id=$r->user_id;
        $data->ticket_status=$r->ticket_status;
        $data->user_name=$r->user_name;
        $d = $data->save();
        if($d)
        {
            return redirect('user/my_support')->with('message','Done');
        }
    }
    public function delete($id)
    {
        $data = Support::find($id);
        $delete = $data->delete();
        if($delete)
        {
            return redirect('user/my_support')->with('message','Data Delete');

        }
    }
    public function unsolve_status(Request $request)
    {
         $hold = 'Hold';
       echo $request->id;
        $rejected = DB::table('supports')->where('id', $request->id)->update(['ticket_status' => $hold]);
        if ($rejected) {
            return redirect('admin/unsolved_ticket')->with('message','Hold');
        }
    }
    public function solve_status(Request $request)
    {
         $solve = 'Solved';
        // $request->id;
        $rejected = DB::table('supports')->where('id', $request->id)->update(['ticket_status' => $solve]);
        if ($rejected) {
            return redirect('admin/unsolved_ticket')->with('message','solved');
        }
    }
}
