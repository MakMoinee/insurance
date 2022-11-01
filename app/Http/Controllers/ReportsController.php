<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
            // dd($request);
            if ($request['btnWhole'] == true || $request['btnWhole'] == "true") {
                $queryResult = DB::table('vwcollectionreport')
                    ->where([
                        'addressprovince' => $request['province'],
                        'addresscity' => $request['city'],
                        'addressbrgy' => $request['brgy']
                    ])
                    ->get();
                $report = json_decode($queryResult, true);
                $count = count($report);
                $cMonth = $request['cmonth'];
                $totalC = 0;
                $address = "";
                $today = date('Y-m-d', strtotime(now()));
                $currentYear = date('Y', strtotime(now()));
                $tReport = array();
                $totalPrevious = 0.0;
                $dateSet = array();
                $dateSetById = array();
                $prevSetById = array();
                $totalSetById = array();
                foreach ($report as $r) {
                    $det =  date('M', strtotime($r['ordate']));
                    $yer = date('Y', strtotime($r['ordate']));


                    if (!array_key_exists($r['memberID'], $prevSetById)) {
                        $totalPrevious = 0;
                    } else {
                        $totalPrevious = $prevSetById[$r['memberID']];
                    }


                    if (array_key_exists($r['memberID'], $totalSetById)) {
                        $totalSetById[$r['memberID']] += $r['amountpaid'];
                    } else {
                        $totalSetById[$r['memberID']] = $r['amountpaid'];
                    }

                    if ((int)$yer < (int)$currentYear) {
                        $totalPrevious += $r['amountpaid'];
                        $prevSetById[$r['memberID']] = $totalPrevious;
                        continue;
                    }

                    if (array_key_exists($r['memberID'], $dateSetById)) {
                        if (array_key_exists($det, $dateSetById[$r['memberID']])) {
                            $dateSetById[$r['memberID']][$det] += +$r['amountpaid'];
                        } else {
                            $dateSetById[$r['memberID']][$det] = $r['amountpaid'];
                        }
                    } else {
                        if (array_key_exists($det, $dateSet)) {
                            $dateSet[$det] += $r['amountpaid'];
                        } else {
                            $dateSet[$det] = $r['amountpaid'];
                        }

                        $dateSetById[$r['memberID']] = $dateSet;
                        $dateSet = array();
                    }



                    // if ($det != $request['cmonth'] || $yer != $request['cyear']) {
                    //     continue;
                    // }

                    $address = $r['addressbrgy'] . ' ' . $r['addresscity'] . ' ' . $r['addressprovince'];
                    $tCount = sizeof($tReport);

                    if (array_key_exists($r['memberID'], $tReport)) {
                        $mData = $tReport[$r['memberID']];
                        $tmpTotal = $mData['amountpaid'] + $r['amountpaid'];
                        $r['amountpaid'] = $tmpTotal;
                        $tReport[$r['memberID']] = $r;
                    } else {
                        $tReport[$r['memberID']] = $r;
                    }
                }

                // dd([
                //     'address' => $address,
                //     'total' => $totalC,
                //     'totalSet' => $totalSetById,
                //     'today' => $today,
                //     'report' => $tReport,
                //     'month' => $cMonth,
                //     'year' => $request['cyear'],
                //     'prev' => $prevSetById,
                //     'dateSet' => $dateSetById
                // ]);

                if ($count > 0 && sizeof($tReport) > 0) {
                    return view('reports4', [
                        'address' => $address,
                        'total' => $totalC,
                        'totalSet' => $totalSetById,
                        'today' => $today,
                        'report' => $tReport,
                        'month' => $cMonth,
                        'year' => $request['cyear'],
                        'prev' => $prevSetById,
                        'dateSet' => $dateSetById
                    ]);
                } else {
                    session()->put('errorEmptyBrgy', true);
                }
            } else if ($request['brgy'] != "" || $request['brgy'] != null) {
                $queryResult = DB::table('vwcollectionreport')
                    ->where([
                        'addressprovince' => $request['province'],
                        'addresscity' => $request['city'],
                        'addressbrgy' => $request['brgy']
                    ])
                    ->get();
                $report = json_decode($queryResult, true);
                $count = count($report);
                $cMonth = $request['cmonth'];
                $totalC = 0;
                $address = "";
                $today = date('Y-m-d', strtotime(now()));
                $tReport = array();
                foreach ($report as $r) {
                    $det =  date('m', strtotime($r['ordate']));
                    $yer = date('Y', strtotime($r['ordate']));
                    if ($det != $request['cmonth'] || $yer != $request['cyear']) {
                        continue;
                    }
                    $totalC += $r['amountpaid'];
                    $address = $r['addressbrgy'] . ' ' . $r['addresscity'] . ' ' . $r['addressprovince'];
                    $tCount = sizeof($tReport);
                    if ($tCount > 0) {
                        $exist = false;
                        foreach ($tReport as $t) {
                            if ($r['memberID'] == $t['memberID']) {
                                $exist = true;
                                break;
                            }
                        }
                        if ($exist) {
                            $mData = $tReport[$r['memberID']];
                            $tmpTotal = $mData['amountpaid'] + $r['amountpaid'];
                            $r['amountpaid'] = $tmpTotal;
                            $tReport[$r['memberID']] = $r;
                        } else {
                            $tReport[$r['memberID']] = $r;
                        }
                    } else {
                        $tReport[$r['memberID']] = $r;
                    }
                }

                if ($count > 0 && sizeof($tReport) > 0) {
                    return view('reports3', ['address' => $address, 'total' => $totalC, 'today' => $today, 'report' => $tReport, 'month' => $cMonth, 'year' => $request['cyear']]);
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
                    $det =  date('m', strtotime($r['ordate']));
                    $yer = date('Y', strtotime($r['ordate']));
                    if ($det != $request['cmonth'] || $yer != $request['cyear']) {
                        continue;
                    }
                    $totalC += $r['amountpaid'];
                    $address = $r['addresscity'] . ' ' . $r['addressprovince'];

                    $tCount = sizeof($tReport);
                    if ($tCount > 0) {
                        $exist = false;
                        foreach ($tReport as $t) {
                            if ($r['memberID'] == $t['memberID']) {
                                $exist = true;
                                break;
                            }
                        }
                        if ($exist) {
                            $mData = $tReport[$r['memberID']];
                            $tmpTotal = $mData['amountpaid'] + $r['amountpaid'];
                            $r['amountpaid'] = $tmpTotal;
                            $tReport[$r['memberID']] = $r;
                        } else {
                            $tReport[$r['memberID']] = $r;
                        }
                    } else {
                        $tReport[$r['memberID']] = $r;
                    }
                }
                if ($count > 0 && sizeof($tReport) > 0) {
                    return view('reports3', ['address' => $address, 'total' => $totalC, 'today' => $today, 'report' => $tReport, 'month' => $request['cmonth'], 'year' => $request['cyear']]);
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
