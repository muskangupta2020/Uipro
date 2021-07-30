<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ManagePlan;

use DB;

class ManagePlanController extends Controller
{
    public function create()
    {
        return view('admin.create_plan');
    }
    public function save(Request $c)
    {
        $file=$c->file('image');
        $filename = 'image'. time() .'.'. $c->image->extension();
        $file->move("upload",$filename);
        $data = new ManagePlan;
        $data->plan_type=$c->plan_type;
        $data->plan_name=$c->plan_name;
        $data->joining_fee=$c->joining_fee;
        $data->gst_tax=$c->gst_tax;
        $data->direct_referral_comission=$c->direct_referral_comission;
        $data->sponsor_matching_commission=$c->sponsor_matching_commission;
        $data->first_pair=$c->first_pair;
        $data->second_pair=$c->second_pair;
        $data->firstpair_matching_commission=$c->firstpair_matching_commission;
        $data->secondpair_matching_commission=$c->secondpair_matching_commission;
        $data->capping_period_weekly=$c->capping_period_weekly;
        $data->weak_leg=$c->weak_leg;
        $data->capping_period_limit=$c->capping_period_limit;
        $data->sponsor_pair_matching=$c->sponsor_pair_matching;
        $data->configure_commission=$c->configure_commission;
        $data->select_product_purchase_commission=$c->select_product_purchase_commission;
        $data->level_1 =$c->level_1;
        $data->level_2 =$c->level_2;
        $data->level_3 =$c->level_3;
        $data->level_4 =$c->level_4;
        $data->level_5 =$c->level_5;
        $data->level_6 =$c->level_6;
        $data->level_7 =$c->level_7;
        $data->level_8 =$c->level_8;
        $data->level_9 =$c->level_9;
        $data->level_10=$c->level_10;
        $data->level_11=$c->level_11;
        $data->level_12=$c->level_12;
        $data->level_13=$c->level_13;
        $data->level_14=$c->level_14;
        $data->level_15=$c->level_15;
        $data->level_completion_income=$c->level_completion_income;
        $data->show_plan=$c->show_plan;
        $data->invoice=$c->invoice;
        $data->description=$c->description;
        $data->image=$filename;
        $data->save();
        if($data)
        {
            return redirect('admin/display_plan')->with('message','Successfully Plan Create');
        }

    }
    public function display()
    {
        $data = ManagePlan::all();

        return view ('admin.display_plan',compact('data'));
    }
    public function edit($id)
    {

    $edit= ManagePlan::find($id);
    return view("admin.edit_plan",compact('edit'));
    }
    public function update(Request $c)
   {
         $file = $c->file('image');
      
        $filename = 'image'. time().'.'.$c->image->extension();
      
        $file->move("upload/",$filename);
        $data = ManagePlan::find($c->id);
        $data->plan_type=$c->plan_type;
        $data->plan_name=$c->plan_name;
        $data->joining_fee=$c->joining_fee;
        $data->gst_tax=$c->gst_tax;
        $data->direct_referral_comission=$c->direct_referral_comission;
        $data->sponsor_matching_commission=$c->sponsor_matching_commission;
        $data->first_pair=$c->first_pair;
        $data->second_pair=$c->second_pair;
        $data->firstpair_matching_commission=$c->firstpair_matching_commission;
        $data->secondpair_matching_commission=$c->secondpair_matching_commission;
        $data->capping_period_weekly=$c->capping_period_weekly;
        $data->weak_leg=$c->weak_leg;
        $data->capping_period_limit=$c->capping_period_limit;
        $data->sponsor_pair_matching=$c->sponsor_pair_matching;
        $data->configure_commission=$c->configure_commission;
        $data->select_product_purchase_commission=$c->select_product_purchase_commission;
        $data->level_1=$c->level_1;
        $data->level_2=$c->level_2;
        $data->level_3=$c->level_3;
        $data->level_4=$c->level_4;
        $data->level_5=$c->level_5;
        $data->level_6=$c->level_6;
        $data->level_7=$c->level_7;
        $data->level_8=$c->level_8;
        $data->level_9=$c->level_9;
        $data->level_10=$c->level_10;
        $data->level_11=$c->level_11;
        $data->level_12=$c->level_12;
        $data->level_13=$c->level_13;
        $data->level_14=$c->level_15;
        $data->level_completion_income=$c->level_completion_income;
        $data->show_plan=$c->show_plan;
        $data->invoice=$c->invoice;
        $data->description=$c->description;
        $data->image=$filename;
        $data->save();
        if($data){
            return redirect('admin/display_plan')->with('message','Data Updated Successfully');;
        }
    }
    public function delete($id)
   {
    $delete = ManagePlan::find($id);
    $d =$delete->delete();
    if($d)
        {
            return redirect('admin/display_plan')->with('message','Data deleted Successfully'); 
        }
   }
   public function view($id)
   {
    $view =  ManagePlan::find($id);
        //echo "<pre>";
        //print_r($data);
        return view("admin.view_plan",compact('view'));
   }
   
}
