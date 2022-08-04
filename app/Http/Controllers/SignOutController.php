<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignOutController extends Controller
{
    //
    function index()
    {
        if (session()->exists('users')) {
            Session::flush();
            session()->forget('users');
        }
        return redirect('/');
    }
}
