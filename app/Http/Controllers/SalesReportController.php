<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesReportController extends Controller
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
            $queryResult = DB::table('vwaddress')->get();
            $year =  date('Y', strtotime(now()));
            $mon =  date('m', strtotime(now()));
            $addresses = json_decode($queryResult, true);
            $provinces = array();
            $cities = [];
            $brgy = [];
            foreach ($addresses as $addr) {

                if (array_key_exists($addr['addressprovince'], $provinces)) {
                    continue;
                } else {

                    array_push($provinces, $addr['addressprovince']);
                }
                if (array_key_exists($addr['addresscity'], $cities)) {
                    continue;
                } else {
                    array_push($cities, $addr['addresscity']);
                }
                if (array_key_exists($addr['addressbrgy'], $brgy)) {
                    continue;
                } else {
                    array_push($brgy, $addr['addressbrgy']);
                }
            }
            $queryResult = DB::table('vwfullnames')->get();
            $ccollect = json_decode($queryResult, true);
            $fullName = [];
            foreach ($ccollect as $c) {
                array_push($fullName, $c['FullName']);
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

            return view('sales', [
                'utype' => $userType,
                'addrs' => $addresses,
                'year' => $year,
                'provinces' => $provinces,
                'cities' => $cities,
                'brgy' => $brgy,
                'mon' => $mon,
                'fullName' => $fullName,
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
