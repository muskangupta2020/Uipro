<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LevelCompletionIncome;

class LevelCompletionIncomeController extends Controller
{
    public function create()
    { 
        $data = LevelCompletionIncome::all();
        return view('admin.level_completion_income',compact('data'));
    }
    public function save(Request $s)
    {
        $data = new LevelCompletionIncome;
        $data->plan_id=$s->plan_id;
        $data->plan_commission=$s->plan_commission;
        $data->income_name=$s->income_name;
        $data->level_name=$s->level_name;
        $data->total_member=$s->total_member;
        $data->minimum_direct=$s->minimum_direct;
        $data->earring_amount=$s->earring_amount;
        $data->upgrade_amount=$s->upgrade_amount;
        $data->archieve_duration=$s->archieve_duration;
        $data->create_id=$s->create_id;
        $data->save();
        if($data)
        {
            return redirect('admin/level_completion_income')->with('message', 'data Inserted in Database');
        }
        else
        {
            return redirect('admin/level_completion_income')->with('notmessage', 'something went wrong');
        }

    }
    public function display()
    {
        $data = LevelCompletionIncome::all();

        return view ('admin.level_completion_income',compact('data'));
    }
    public function edit($id)
    {
    $edit= LevelCompletionIncome::find($id);
    return view("admin.edit_level_completion_income",compact('edit'));
    }
    public function update(Request $s)
    {
        $data = LevelCompletionIncome::find($s->id);
        $data->plan_id=$s->plan_id;
        $data->plan_commission=$s->plan_commission;
        $data->income_name=$s->income_name;
        $data->level_name=$s->level_name;
        $data->total_member=$s->total_member;
        $data->minimum_direct=$s->minimum_direct;
        $data->earring_amount=$s->earring_amount;
        $data->upgrade_amount=$s->upgrade_amount;
        $data->archieve_duration=$s->archieve_duration;
        $data->create_id=$s->create_id;
        $data->save();
        if($data)
        {
            return redirect('admin/level_completion_income')->with('message', 'data Updated in Database');;
        }
    }
    public function delete($id)
   {
    $delete = LevelCompletionIncome::find($id);
    $d =$delete->delete();
    if($d)
        {
            return redirect('admin/level_completion_income')->with('message', 'data Deleted in Database');;
        }
   }
}
