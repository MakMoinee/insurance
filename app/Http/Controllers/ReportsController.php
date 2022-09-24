<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
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
            // return redirect('/sales_report');
            return redirect('/sales_report');
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
            if ($request['brgy'] != "" || $request['brgy'] != null) {
                $queryResult = DB::table('vwcollectionreport')
                    ->where([
                        'addressprovince' => $request['province'],
                        'addresscity' => $request['city'],
                        'addressbrgy' => $request['brgy']
                    ])->get();
                $report = json_decode($queryResult, true);
                $count = count($report);
                $totalC = 0;
                $address = "";
                $today = date('Y-m-d', strtotime(now()));
                $tReport = array();
                foreach ($report as $r) {
                    $totalC += $r['amountpaid'];
                    $address = $r['addressbrgy'] . ' ' . $r['addresscity'] . ' ' . $r['addressprovince'];
                    if (sizeof($tReport) > 0 && $tReport[$r['memberID']]) {
                        $mData = $tReport[$r['memberID']];
                        $tmpTotal = $mData['amountpaid'] + $r['amountpaid'];
                        $r['amountpaid'] = $tmpTotal;
                        $tReport[$r['memberID']] = $r;
                    } else {
                        $tReport[$r['memberID']] = $r;
                    }
                }

                if ($count > 0) {
                    return view('reports3', ['address' => $address, 'total' => $totalC, 'today' => $today, 'report' => $tReport]);
                } else {
                    session()->put('errorEmptyBrgy', true);
                }
            } else if ($request['print'] == "true") {
                $queryResult = DB::table('vwcollections')->where(['FullName' => $request['fullname']])->get();
                $statements = json_decode($queryResult, true);
                $countState = count($statements);
                if ($countState > 0) {
                    $memberID = 0;
                    $total = 0;
                    foreach ($statements as $statement) {
                        $memberID = $statement['memberID'];
                        $total += $statement['amountpaid'];
                    }
                    $queryResult = DB::table('vwmemberswithplan')->where(['memberID' => $memberID])->get();
                    $members = json_decode($queryResult, true);
                    $balance = 0;
                    foreach ($members as $member) {
                        $balance = $member['amount'];
                        break;
                    }
                    $outstanding = $balance - $total;
                    return view('reports', ['statements' => $statements, 'members' => $members, 'fullname' => $request['fullname'], 'total' => $total, 'balance' => $balance, 'outstanding' => $outstanding]);
                } else {
                    session()->put('errorNotAvailable', true);
                }
            } else if ($request['city'] != "" && $request['province'] != "") {
                $queryResult = DB::table('vwcollectionreport')
                    ->where([
                        'addressprovince' => $request['province'],
                        'addresscity' => $request['city'],
                    ])->get();
                $report = json_decode($queryResult, true);
                $count = count($report);
                $totalC = 0;
                $address = "";
                $today = date('Y-m-d', strtotime(now()));
                $tReport = array();
                foreach ($report as $r) {
                    $totalC += $r['amountpaid'];
                    $address = $r['addresscity'] . ' ' . $r['addressprovince'];
                    if (sizeof($tReport) > 0 && $tReport[$r['memberID']]) {
                        $mData = $tReport[$r['memberID']];
                        $tmpTotal = $mData['amountpaid'] + $r['amountpaid'];
                        $r['amountpaid'] = $tmpTotal;
                        $tReport[$r['memberID']] = $r;
                    } else {
                        $tReport[$r['memberID']] = $r;
                    }
                }
                if ($count > 0) {
                    return view('reports3', ['address' => $address, 'total' => $totalC, 'today' => $today, 'report' => $tReport]);
                } else {
                    session()->put('errorEmptyCity', true);
                }
            } else {
                session()->put('errorBrgyField', true);
            }
            return redirect('/sales_report');
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

    public function showMe()
    {
        if (session()->exists('users')) {
            return view('reports3');
        } else {
            return redirect('/');
        }
    }
}
