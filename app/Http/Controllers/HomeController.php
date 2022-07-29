<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    function index()
    {
        if (session()->exists('users')) {
            $members = Members::all();
            $membersCount = $members->count();
            $newMembers = DB::table('vwtotalnewmembers')->first();
            $total = $newMembers->TotalNewMembers;
            return view('dashboard', ['totalMembers' => $membersCount, 'totalNewMembers'=> $total]);
        } else {
            return view('home');
        }
    }
}
