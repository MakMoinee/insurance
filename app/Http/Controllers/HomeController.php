<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

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
            $userType = session('users')[0]->uType;
            return view('dashboard', ['totalMembers' => $membersCount, 'totalNewMembers' => $total, 'utype' => $userType]);
        } else {
            return view('home');
        }
    }

    function getToken()
    {
        return response()->json(['token' => csrf_token()], Response::HTTP_OK);
    }
}
