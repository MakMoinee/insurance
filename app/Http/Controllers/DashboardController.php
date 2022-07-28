<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //
    function index()
    {
        if (session()->exists('users')) {
            return view('dashboard');
        } else {
            return redirect('/');
        }
    }
}
