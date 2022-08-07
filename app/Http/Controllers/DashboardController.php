<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //
    function index()
    {
        if (session()->exists('users')) {
            $members = Members::all();
            $membersCount = $members->count();
            $newMembers = DB::table('vwtotalnewmembers')->first();
            $total = $newMembers->TotalNewMembers;
            $userType = session('users')[0]->uType;
            return view('dashboard', ['totalMembers' => $membersCount, 'totalNewMembers' => $total, 'uType' => $userType]);
        } else {
            return redirect('/');
        }
    }
}
