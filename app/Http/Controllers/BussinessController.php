<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bussiness;
use App\User;

class BussinessController extends Controller
{
    public function welcome_letter()
    {

        $data = User::all();
        
        return view('admin.welcome_letter',compact('data'));
    }
    public function show_letter()
    {
        return view('user.show_letter');
    }
    // public function display_letter($id)
    // {
    //     $view = User::find($id);
    //     return redirect('user/show_letter',compact('view'));
    // }
       public function insert(Request $c)
   {
    //print_r($c->all());
      $data=new User;
      $data->name=$c->name;
      $data->user_id=$c->user_id;
      $data->sponser_id=$c->sponser_id;
      $data->save();
      if ($data)
    {
        return redirect('user/show_letter');
    }
}
    public function payout_setting()
    {
        return view('admin.payout_setting');
    }
}
