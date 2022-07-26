<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Plans;
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
            $userType = session('users')[0]->uType;
            $queryResult = DB::table('vwactiveplan')->get();
            $plans = json_decode($queryResult, true);
            $startAmount = 0;
            foreach ($plans as $p) {
                $startAmount = $p['amount'];
                break;
            }
            $countPlan = count($plans);
            if ($countPlan == 0) {
                session()->put('errorPlanEmpty', true);
            }

            $hasAccess = $userType == 1;
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
            return view('members', [
                'totalMembers' => $membersCount,
                'totalNewMembers' => $total,
                'members' => $members,
                'civil' => $civil,
                'gend' => $gend,
                'utype' => $userType,
                'plans' => $plans,
                'hasAccess' => $hasAccess,
                'hasAccessMember' => $hasAccessMember,
                'hasAccessPlans' => $hasAccessPlans,
                'hasAccessCollections' => $hasAccessCollection,
                'loginAs' => $userRoleDesc,
                'startAmount' => $startAmount
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
        if ($request->session()->exists('users')) {
            $checkMember = Members::where([['firstName', '=', $request['firstname']], ['middleName', '=', $request['middlename']], ['lastName', '=', $request['lastname']]])->get();
            $checkCount = $checkMember->count();
            if ($checkCount == 1) {
                session()->put('userExist', true);
                return redirect("/members");
            } else {
                $newMembers = new Members();
                $newMembers->firstName = $request['firstname'];
                $newMembers->middleName = $request['middlename'];
                $newMembers->lastName = $request['lastname'];
                $newMembers->addresspurok = str_replace(",", " ", $request['addresspurok']);
                $newMembers->addressbrgy = str_replace(",", " ", $request['addressbrgy']);
                $newMembers->addresscity = str_replace(",", " ", $request['addresscity']);
                $newMembers->addressprovince = str_replace(",", " ", $request['addressprovince']);
                $newMembers->contactNum = $request['contact'];
                $newMembers->birthDate = $request['birthdate'];
                $newMembers->gender = $request['gender'];
                $newMembers->religion = $request['religion'];
                $newMembers->height = $request['height'];
                $newMembers->weight = $request['weight'];
                $newMembers->civilStat = $request['civilstat'];
                $newMembers->birthPlace = $request['bplace'];
                $newMembers->amount = $request['amount'];
                $newMembers->plan = $request['plan'];
                $newMembers->dep1 = $request['dep1'];
                $newMembers->dep2 = $request['dep2'];
                $newMembers->dep3 = $request['dep3'];
                $newMembers->dep4 = $request['dep4'];
                $newMembers->dep5 = $request['dep5'];
                $newMembers->dep6 = $request['dep6'];
                $newMembers->dep7 = $request['dep7'];
                $newMembers->dep8 = $request['dep8'];
                $newMembers->dep9 = $request['dep9'];
                $newMembers->dep10 = $request['dep10'];
                $newMembers->facebookAccount = $request['facebook'];
                $mop = strtolower($request['mop']) == "regular" ? 1 : 2;
                $newMembers->mop = $mop;
                $isSave = $newMembers->save();

                if ($isSave) {
                    session()->put('successAdd', true);
                    return redirect('/members');
                } else {
                    session()->put('errorAdd', true);
                    return redirect('/members');
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
            $newMembers->addresspurok = str_replace(",", " ", $request['addresspurok']);
            $newMembers->addressbrgy = str_replace(",", " ", $request['addressbrgy']);
            $newMembers->addresscity = str_replace(",", " ", $request['addresscity']);
            $newMembers->addressprovince = str_replace(",", " ", $request['addressprovince']);
            $newMembers->contactNum = $request['contact'];
            $newMembers->birthDate = date('Y-m-d', strtotime($request['birthdate']));
            $newMembers->gender = $request['gender'];
            $newMembers->religion = $request['religion'];
            $newMembers->height = $request['height'];
            $newMembers->weight = $request['weight'];
            $newMembers->civilStat = $request['civilstat'];
            $newMembers->birthPlace = $request['bplace'];
            $newMembers->plan = $request['plan'];
            $newMembers->dep1 = $request['dep1'];
            $newMembers->dep2 = $request['dep2'];
            $newMembers->dep3 = $request['dep3'];
            $newMembers->dep4 = $request['dep4'];
            $newMembers->dep5 = $request['dep5'];
            $newMembers->dep6 = $request['dep6'];
            $newMembers->dep7 = $request['dep7'];
            $newMembers->dep8 = $request['dep8'];
            $newMembers->dep9 = $request['dep9'];
            $newMembers->dep10 = $request['dep10'];
            $newMembers->facebookAccount = $request['facebook'];
            $mop = strtolower($request['mop']) == "regular" ? 1 : 2;
            $newMembers->mop = $mop;

            $affectedRow = DB::table('members')
                ->where('memberID', $newMembers->memberID)
                ->update([
                    'firstName' => $newMembers->firstName,
                    'middleName' => $newMembers->middleName,
                    'lastName' => $newMembers->lastName,
                    'contactNum' => $newMembers->contactNum,
                    'birthDate' => $newMembers->birthDate,
                    'addresspurok' => $newMembers->addresspurok,
                    'addressbrgy' => $newMembers->addressbrgy,
                    'addresscity' => $newMembers->addresscity,
                    'addressprovince' => $newMembers->addressprovince,
                    'gender' => $newMembers->gender,
                    'religion' => $newMembers->religion,
                    'height' => $newMembers->height,
                    'weight' => $newMembers->weight,
                    'civilStat' => $newMembers->height,
                    'mop' => $newMembers->mop,
                    'birthPlace' => $newMembers->birthPlace,
                    'plan' => $newMembers->plan,
                    'dep1' => $newMembers->dep1,
                    'dep2' => $newMembers->dep2,
                    'dep3' => $newMembers->dep3,
                    'dep4' => $newMembers->dep4,
                    'dep5' => $newMembers->dep5,
                    'dep6' => $newMembers->dep6,
                    'dep7' => $newMembers->dep7,
                    'dep8' => $newMembers->dep8,
                    'dep9' => $newMembers->dep9,
                    'dep10' => $newMembers->dep10,
                    'facebookAccount' => $newMembers->facebookAccount
                ]);

            if ($affectedRow > 0) {
                session()->put('successUpdate', true);
            } else {
                session()->put('errorUpdate', true);
            }

            return redirect('/members');
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
        if (session()->exists('users')) {
            // $users = array(session('basic_settings.0.users')));
            $userType = session('users')[0]->uType;
            if ($userType == 1) {
                $affectedRow = DB::table('members')->where('memberID', '=', $id)->delete();

                if ($affectedRow > 0) {
                    session()->put('successDelete', true);
                } else {
                    session()->put('errorDelete', true);
                }
                return redirect('/members');
            } else {
                session()->put('errorType', true);
                return redirect('/members');
            }
        } else {
            return response()->json(['message' => 'Unauthorized'], Response::HTTP_FORBIDDEN);
        }
    }
}
