<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupan;
use App\AdvanceCoupan;
use DB;
use validate;
class CoupanController extends Controller
{
    public function coupan()
    {

        $coupan = Coupan::all();
        return view('admin.coupan',compact('coupan'));
    }
    public function insert_coupan(Request $r)
    {     $r->validate([
        'start_date' => 'date_format:Y-m-d',
        'expiry_date' => 'date_format:Y-m-d|after:start_date'
    ]);
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $code= substr(str_shuffle($str_result),0, 12);
        $coupan = new coupan;
        $coupan->coupan_code=$code;
        $coupan->discount_percent=$r->discount_percent;
        $coupan->expiry_date=$r->expiry_date;
        $coupan->start_date=$r->start_date;
        $data=$coupan->save();
        if($data)
        {
           
            return redirect('admin/coupan')->with('message','Data Inserted in Database');
        }
    }
    public function edit($id)
    {
        $edit = Coupan::find($id);
        return view('admin.edit_coupan',compact('edit'));

    }
    public function delete($id)
    {
        $data = Coupan::find($id);
        $delete = $data->delete();
        return redirect('admin/coupan')->with('message','Data Deleted');


    }
    public function update(Request $r)
    {
        $update = Coupan::find($r->id);
        $update->discount_percent=$r->discount_percent;
        $coupan->expiry_date=$r->expiry_date;
        $coupan->start_date=$r->start_date;
        $data = $update->save();
        if($data)
        {
            return redirect('admin/coupan')->with('message','Data Updated');
        }
    }
     public function getAmount(Request $request){
        $coupon['data']=Coupan::where('coupan_code',$request->coupan)->get();
        return json_encode($coupon);
     }
     public function advance_coupan()
     {
        $advancecoupan = AdvanceCoupan::all();
        return view('admin.advance_coupan',compact('advancecoupan'));
     }
     public function insert_advancecoupan(Request $r)
    {   
        $r->validate([
        'start_date' => 'date_format:Y-m-d',
        'expiry_date' => 'date_format:Y-m-d|after:start_date'
    ]);
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $code= substr(str_shuffle($str_result),0, 12);
        $advancecoupan = new AdvanceCoupan;
        $advancecoupan->advance_coupan_code=$code;
        $advancecoupan->advance_discount_percent=$r->advance_discount_percent;
        $advancecoupan->advance_expiry_date=$r->advance_expiry_date;
        $advancecoupan->advance_start_date=$r->advance_start_date;
        $data=$advancecoupan->save();
        if($data)
        {
            return redirect('admin/advance_coupan')->with('message','Data Inserted in Database');
        }
    }
    public function advance_delete($id)
    {
        $data = AdvanceCoupan::find($id);
        $delete = $data->delete();
        return redirect('admin/advance_coupan')->with('message','Data Deleted');


    }

}
