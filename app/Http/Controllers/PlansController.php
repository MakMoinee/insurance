<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlansController extends Controller
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
            $queryResult = DB::table('vwactiveplan')->get();
            $plans = json_decode($queryResult, true);
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
            return view('plans', [
                'utype' => $userType,
                'plans' => $plans,
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
            $plan = new Plans();
            $plan->description = $request['description'];
            $plan->amount = $request['amount'];
            $plan->status = 1;
            $isSave = $plan->save();
            if ($isSave) {
                session()->put('successPlanAdd', true);
            } else {
                session()->put('errorPlanAdd', true);
            }
            return redirect('/plans');
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
            // $users = array(session('basic_settings.0.users')));
            $userType = session('users')[0]->uType;
            if ($userType == 1) {
                $affectedRow = DB::table('plans')
                    ->where('planID', $request['pid'])
                    ->update([
                        'status' => 1,
                        'amount' => $request['amount'],
                        'description' => $request['description']
                    ]);

                if ($affectedRow > 0) {
                    session()->put('successPlanUpdate', true);
                } else {
                    session()->put('errorPlanUpdate', true);
                }
                return redirect('/plans');
            } else {
                session()->put('errorPlanType', true);
                return redirect('/plans');
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
            // $users = array(session('basic_settings.0.users')));
            $userType = session('users')[0]->uType;
            if ($userType == 1) {
                $affectedRow = DB::table('plans')
                    ->where('planID', $id)
                    ->update([
                        'status' => 2
                    ]);

                if ($affectedRow > 0) {
                    session()->put('successPlanDelete', true);
                } else {
                    session()->put('errorPlanDelete', true);
                }
                return redirect('/plans');
            } else {
                session()->put('errorPlanType', true);
                return redirect('/plans');
            }
        } else {
            return redirect('/');
        }
    }
}
