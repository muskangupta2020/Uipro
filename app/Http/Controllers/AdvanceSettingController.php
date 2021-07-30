<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdvanceSetting;

class AdvanceSettingController extends Controller
{
    public function advancesetting()
    {
        return view('admin.advance_setting');
    }    
}
