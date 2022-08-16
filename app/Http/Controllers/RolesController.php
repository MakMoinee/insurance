<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\UserTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (session()->exists('users')) {
            $userType = session('users')[0]->uType;

            $queryResult = DB::table('vwroles')->get();
            $roles = json_decode($queryResult, true);

            return view('roles', ['roles' => $roles,  'utype' => $userType]);
        } else {
            return redirect('/');
        }
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
        if (session()->exists('users')) {
            $userType = session('users')[0]->uType;
            if ($userType == 1) {
                $checkmembers = 0;
                $checkcollections = 0;
                $checkplans = 0;
                if ($request['checkmember'] == 'on') {
                    $checkmembers = 1;
                }
                if ($request['checkcollections'] == 'on') {
                    $checkcollections = 1;
                }
                if ($request['checkplans'] == 'on') {
                    $checkplans = 1;
                }

                $roles = new UserTypes();
                $roles->description = $request['roledesc'];
                $roles->members = $checkmembers;
                $roles->plans = $checkplans;
                $roles->collections = $checkcollections;

                $isSave = $roles->save();
                if ($isSave) {
                    session()->put('successRoleAdd', true);
                } else {
                    session()->put('errorAddRole', true);
                }
            } else {
                session()->put('errorType', true);
            }
            return redirect('/user_roles');
        } else {
            return redirect('/');
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
    public function update(Request $request)
    {
        //
        if (session()->exists('users')) {
            $userType = session('users')[0]->uType;
            if ($userType == 1) {
                $checkmembers = 0;
                $checkcollections = 0;
                $checkplans = 0;
                if ($request['checkmember'] == 'on') {
                    $checkmembers = 1;
                }
                if ($request['checkcollections'] == 'on') {
                    $checkcollections = 1;
                }
                if ($request['checkplans'] == 'on') {
                    $checkplans = 1;
                }
                // TODO
                // $affectedRow = DB::table('user_roles')
                // ->where('')
            } else {
                session()->put('errorType', true);
            }
        } else {
            return redirect('/');
        }
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
        if (session()->exists('users')) {
            $affectedRow = DB::table('user_types')
                ->where(['uType' => $id])
                ->delete();
            if ($affectedRow > 0) {
                session()->put('successDeleteRole', true);
            }else{
                session()->put('errorDeleteRole', true);
            }
            return redirect('/user_roles');
        } else {
            return redirect('/');
        }
    }
}
