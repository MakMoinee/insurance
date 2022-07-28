<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    function index()
    {
        if (session()->exists('users')) {
            return view('dashboard');
        } else {
            return view('home');
        }
    }
}
