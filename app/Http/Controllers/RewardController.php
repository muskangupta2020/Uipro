<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reward;

class RewardController extends Controller
{
    public function pay_reward()
    {
        return view('admin/pay_reward');
    }
     public function search_reward()
    {
        return view('admin/search_reward');
    }
     public function reward_setting()
    {
        return view('admin/reward_setting');
    }
     public function rank_setting()
    {
        return view('admin/rank_setting');
    }
}
