<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KYC;
use DB;
use Auth;

class KYCController extends Controller
{
    public function kyc()
    {
          $userId = Auth::user()->user_id;
        $data = KYC::where('user_id',$userId)->get();
        
        return view('user.kyc_document',compact('data'));
    }
    public function save_kyc(Request $s)
    {
        $file1=$s->file('pan_image');
        $filename1 = 'pan_image'. time().'.'. $s->pan_image->extension();
        $file2=$s->file('cheque_leaf');
        $filename2 = 'cheque_leaf'. time().'.'. $s->cheque_leaf->extension();
        $file1->move("/upload",$filename1);
        $file2->move("/upload",$filename2);
        $data = new KYC;
        $data->user_id=$s->user_id;
        $data->user_name=$s->name;
        $data->pan_no=$s->pan_no;
        $data->bank_account_no=$s->bank_account_no;
        $data->bank_ifsc=$s->bank_ifsc;
        $data->bank_name=$s->bank_name;
        $data->bank_branch=$s->bank_branch;
        $data->pan_image=$filename1;
        $data->cheque_leaf=$filename2;
        $done=$data->save();
        if($done)
        {
            return redirect('user/kyc_document')->with('message','data Inserted in Database');
        }
        else 
        {
            return redirect('user/kyc_document')->with('notmessage','Something went wrong');
        }
    }
    public function display()
    {
        $userId = Auth::user()->user_id;
        $data = KYC::where('user_id', $userId)->get();
        return redirect('user/kyc_document',compact('data'));
    }
    public function kyc_delete($id)
    {
        $delete = KYC::find($id);
        $d = $delete->delete();
        if($d)
        {
        return redirect('user/kyc_document')->with('message','Data Deleted Successfully');
    }
    else
    {
        return redirect('user/kyc_document')->with('notmessage','Data NOT Deleted');

    }
    }
    public function kyc_edit($id)
    {
        $edit = KYC::find($id);
        return view('user/edit_kyc',compact('edit'));
    }
    public function update_kyc(Request $u)
    {
        // print_r($u->all());
        $file1 = $u->file('pan_image');
      
        $filename1 = 'pan_image'. time().'.'.$u->pan_image->extension();
      
        $file1->move("upload/",$filename1);

        $file2 = $u->file('cheque_leaf');
      
        $filename2 = 'cheque_leaf'. time().'.'.$u->cheque_leaf->extension();
      
        $file2->move("upload/",$filename2);
        $kyc_id = $u->input('id');
        $data = KYC::find($kyc_id);
        $data->pan_no=$u->pan_no;
        $data->bank_account_no=$u->bank_account_no;
        $data->bank_ifsc=$u->bank_ifsc;
        $data->bank_name=$u->bank_name;
        $data->bank_branch=$u->bank_branch;
        $data->pan_image=$filename1;
        $data->cheque_leaf=$filename2;
        $done=$data->save();
        if($done)
        {
            return redirect('user/kyc_document')->with('message','data Updated in Database');
        }
        else 
        {
            return redirect('user/kyc_document')->with('notmessage','Something went wrong');
        }
    } 
    public function pending()
    {
        $pending=KYC::all();
        return view('admin.pending_kyc',compact('pending'));
    }
    public function pending_status(Request $request)
    {
         $status = 'rejected';
        echo $request->user_id;
        $rejected = KYC::where('user_id', $request->user_id)->update(['status' => $status]);
        if ($rejected) {
            return redirect('admin/pending_kyc')->with('message','Rejected');
        }
    }
    public function approve()
    {
        $pending=KYC::where('status', '=', 'approve')->get();
        return view('admin.approve_kyc',compact('pending'));
    }
    public function approve_status(Request $request)
    {
        $status = 'approve';
        $approve = KYC::where('user_id',$request->user_id)->update(['status' => $status]);
        if($approve)
        {
            return redirect('admin/pending_kyc')->with('message','Aprroved');
        }
        echo "no";  
    }
    public function rejected()
    {
        $pending=KYC::where('status', '=', 'rejected')->get();
        return view('admin.rejected_kyc',compact('pending'));
    }
}
