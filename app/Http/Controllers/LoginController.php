<?php

namespace App\Http\Controllers;

use App\Models\IUsers;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $un = $request->username;
        $pw = $request->password;

        if ($un != "" && $pw != "") {
            // $hotelList = Hotel::where([['Status', '=', 1]])->skip(0)->take(3)->get();
            $users = IUsers::where([['username', '=', $un], ['password', '=', $pw]])->take(1)->get();
            $musers = IUsers::where([['username', '=', $un], ['password', '=', $pw]])->take(1)->first();
            $count = $users->count();
            if ($count > 0) {

                Session::push("users", $musers);
                $members = Members::all();
                $membersCount = $members->count();
                $newMembers = DB::table('vwtotalnewmembers')->first();
                $total = $newMembers->TotalNewMembers;
                $userType = $musers->uType;
                $collection = DB::table('vwtotalcollections')->first();
                $ctotal = $collection->TotalCollections;
                return view('dashboard', ['totalMembers' => $membersCount, 'totalNewMembers' => $total, 'utype' => $userType, 'ctotal' => $ctotal]);
            } else {
                Session::flush();
                return view('home');
            }
        } else {
            Session::flush();
            return view('home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
