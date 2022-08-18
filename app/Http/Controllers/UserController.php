<?php

namespace App\Http\Controllers;

use App\Models\IUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    function updateme(Request $request)
    {
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
                    $affectedRow = DB::table('iusers')
                        ->where(['id' => $request['id']])
                        ->update([
                            'username' => $newUser->username,
                            'password' => $newUser->password,
                            'uType' => $newUser->uType
                        ]);

                    if ($affectedRow > 0) {
                        session()->put('successUpdateUser', true);
                    } else {
                        session()->put('errorUpdateUser', true);
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
}
