<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.index');
    }
    public function logout()
    {
        Auth::logout();

        return redirect(route('login'));
    }
    public function register()
    {
        return view('user.registration');
    }
    public function vendor()
    {
        return view('user.vendor');
    }
}