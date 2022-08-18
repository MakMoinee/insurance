<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function update($request)
    {
        if (session()->exists('users')) {
            dd($request);
        } else {
            return redirect('/');
        }
    }
}
