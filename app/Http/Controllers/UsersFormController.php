<?php

namespace App\Http\Controllers;

use App\Models\IUsers;
use App\Models\UserTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersFormController extends Controller
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

            $queryResult = DB::table('vwuserswithroles')->get();
            $roles = json_decode($queryResult, true);

            $hasAccess = $userType == 1;
            $userTypes = UserTypes::all();

            $hasAccessMember = false;
            $hasAccessPlans = false;
            $hasAccessCollection = false;
            $userRoleDesc = "";

            $queryResult = DB::table('vwuserswithroles')
                ->where(['uType' => $userType])
                ->get();

            $result = json_decode($queryResult, true);

            foreach ($result as $r) {
                $userRoleDesc = $r['description'];
                if ($r['members'] == 1) {
                    $hasAccessMember = true;
                }
                if ($r['plans'] == 1) {
                    $hasAccessPlans = true;
                }
                if ($r['collections'] == 1) {
                    $hasAccessCollection = true;
                }
                break;
            }



            return view('users', [
                'roles' => $roles,
                'utype' => $userType,
                'userTypes' => $userTypes,
                'hasAccess' => $hasAccess,
                'hasAccessMember' => $hasAccessMember,
                'hasAccessPlans' => $hasAccessPlans,
                'hasAccessCollections' => $hasAccessCollection,
                'loginAs' => $userRoleDesc
            ]);
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

            if ($request['password'] == $request['cpassword']) {
                $queryResult = DB::table('iusers')
                    ->where(['username' => $request['username'], 'password' => $request['password']])
                    ->get();
                $users = json_decode($queryResult, true);
                $userCount = count($users);
                if ($userCount == 0) {

                    $newUser = new IUsers();
                    $newUser->username = $request['username'];
                    $newUser->password = $request['password'];
                    $newUser->uType = $request['utype'];
                    $affectedRow = $newUser->save();
                    if ($affectedRow > 0) {
                        session()->put('successSaveUser', true);
                    } else {
                        session()->put('errorSaveUser', true);
                    }
                } else {
                    session()->put('userExist', true);
                }
            } else {
                session()->put('errorPwNotMatch', true);
            }
            return redirect('/users');
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
