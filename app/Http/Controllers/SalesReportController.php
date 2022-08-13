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
            $provinces = [];
            $cities = [];
            $brgy = [];
            foreach ($addresses as $addr) {
                array_push($provinces, $addr['addressprovince']);
                array_push($cities, $addr['addresscity']);
                array_push($brgy, $addr['addressbrgy']);
            }
            $queryResult = DB::table('vwfullnames')->get();
            $ccollect = json_decode($queryResult, true);
            $fullName = [];
            foreach ($ccollect as $c) {
                array_push($fullName, $c['FullName']);
            }
            
            return view('sales', ['utype' => $userType, 'addrs' => $addresses, 'year' => $year, 'provinces' => $provinces, 'cities' => $cities, 'brgy' => $brgy, 'mon' => $mon, 'fullName' => $fullName]);
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
