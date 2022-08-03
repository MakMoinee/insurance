<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class MembersController extends Controller
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
            $members = Members::all();
            $membersCount = $members->count();
            $newMembers = DB::table('vwtotalnewmembers')->first();
            $total = $newMembers->TotalNewMembers;
            $civil = ['Single', 'Married', 'Widow', 'Separated', 'Divorced'];
            $gend = ['Male', 'Female'];
            return view('members', ['totalMembers' => $membersCount, 'totalNewMembers' => $total, 'members' => $members, 'civil' => $civil, 'gend' => $gend]);
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
        if ($request->session()->exists('users')) {
            $checkMember = Members::where([['firstName', '=', $request['firstname']], ['middleName', '=', $request['middlename']], ['lastName', '=', $request['lastname']]])->get();
            $checkCount = $checkMember->count();
            if ($checkCount == 1) {
                return response()->json(['message' => 'Failed to Add Member. Member already in database'], Response::HTTP_INTERNAL_SERVER_ERROR);
            } else {
                $newMembers = new Members();
                $newMembers->firstName = $request['firstname'];
                $newMembers->middleName = $request['middlename'];
                $newMembers->lastName = $request['lastname'];
                $newMembers->address = str_replace(",", " ", $request['address']);
                $newMembers->contactNum = $request['contact'];
                $newMembers->birthDate = $request['birthdate'];
                $newMembers->gender = $request['gender'];
                $newMembers->religion = $request['religion'];
                $newMembers->height = $request['height'];
                $newMembers->weight = $request['weight'];
                $newMembers->civilStat = $request['civilstat'];
                $newMembers->birthPlace = $request['bplace'];
                $mop = strtolower($request['mop']) == "regular" ? 1 : 2;
                $newMembers->mop = $mop;
                $isSave = $newMembers->save();
                if ($isSave) {
                    return response()->json(['message' => 'Successfully Added Member'], Response::HTTP_OK);
                } else {
                    return response()->json(['message' => 'Failed to Add Member'], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
            }
        } else {
            return response()->json(['message' => 'Unauthorized'], Response::HTTP_FORBIDDEN);
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
        if ($request->session()->exists('users')) {
            $newMembers = new Members();
            $newMembers->memberID = $request['id'];
            $newMembers->firstName = $request['firstname'];
            $newMembers->middleName = $request['middlename'];
            $newMembers->lastName = $request['lastname'];
            $newMembers->address = str_replace(",", " ", $request['address']);
            $newMembers->contactNum = $request['contact'];
            $newMembers->birthDate = date('Y-m-d', strtotime($request['birthdate']));
            $newMembers->gender = $request['gender'];
            $newMembers->religion = $request['religion'];
            $newMembers->height = $request['height'];
            $newMembers->weight = $request['weight'];
            $newMembers->civilStat = $request['civilstat'];
            $newMembers->birthPlace = $request['bplace'];
            $mop = strtolower($request['mop']) == "regular" ? 1 : 2;
            $newMembers->mop = $mop;
            $arr1 = [
                'firstName',
                'middleName',
                'lastName',
                'address',
                'contactNum',
                'birthDate',
                'gender',
                'religion',
                'height',
                'weight',
                'civilStat',
                'mop',
                'birthPlace',
                'memberID'
            ];
            $arr2 = [
                $newMembers->firstName,
                $newMembers->middleName,
                $newMembers->lastName,
                $newMembers->address,
                $newMembers->contactNum,
                $newMembers->birthDate,
                $newMembers->gender,
                $newMembers->religion,
                $newMembers->height,
                $newMembers->weight,
                $newMembers->civilStat,
                $newMembers->mop,
                $newMembers->birthPlace,
                $newMembers->memberID
            ];
            // $isSave = Members::updateate($arr1, $arr2);
            // $isSave = Members::update([
            //     [
            //         'weight' => $newMembers->weight,
            //         'memberID' => $newMembers->memberID
            //     ]
            // ], ['memberID']);
            $affectedRow =  DB::update(
                'update members set  firstName="?", middleName="?", lastName="?", address="?", contactNum="?", birthDate="?", gender="?", religion="?", height=?, weight=?, civilStat="?", mop=?, birthPlace="?" WHERE memberID=?',
                [
                    $newMembers->firstName,
                    $newMembers->middleName,
                    $newMembers->lastName,
                    $newMembers->address,
                    $newMembers->contactNum,
                    $newMembers->birthDate,
                    $newMembers->gender,
                    $newMembers->religion,
                    $newMembers->height,
                    $newMembers->weight,
                    $newMembers->civilStat,
                    $newMembers->mop,
                    $newMembers->birthPlace,
                    $newMembers->memberID
                ]
            );
            dd($affectedRow);
            // if ($affectedRow > 0) {
            //     return response()->json(['message' => 'Successfully Updated Member'], Response::HTTP_OK);
            // } else {
            //     return response()->json(['message' => 'Failed to Update Member'], Response::HTTP_INTERNAL_SERVER_ERROR);
            // }
        } else {
            return response()->json(['message' => 'Unauthorized'], Response::HTTP_FORBIDDEN);
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
    }
}
