<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
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

            $queryResult = DB::table('vwtotalcollections')->get();
            $totalC = json_decode($queryResult, true);
            $totalCollection = 0;
            foreach ($totalC as $total) {
                $totalCollection = $total['TotalCollections'];
                break;
            }

            $userType = session('users')[0]->uType;


            $queryResult = DB::table('vwfullnames')->get();
            $fullnames = json_decode($queryResult, true);
            $data = [];
            foreach ($fullnames as $fn) {
                array_push($data, $fn['FullName']);
            }
            $idData = [];
            foreach ($members as $member) {
                array_push($idData, $member['memberID']);
            }

            $queryResult = DB::table('vwcollections')->get();
            $collections = json_decode($queryResult, true);

            $hasAccessU = false;
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
                if ($r['uType'] == 1) {
                    $hasAccessU = true;
                }
                break;
            }

            return view('collection', [
                'totalCollections' => $totalCollection,
                'collections' => $collections,
                'utype' => $userType,
                'fullnames' => $data,
                'idData' => $idData,
                'hasAccessU' => $hasAccessU,
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
            $collection = new Collections();
            $collection->or = $request['or'];
            $collection->ordate = $request['ordate'];
            $collection->amountpaid = $request['amountpaid'];
            $collection->collector = $request['collector'];
            $collection->memberID = $request['cid'];
            $isSave = $collection->save();
            if ($isSave) {
                session()->put('successAdd', true);
            } else {
                session()->put('errorAdd', true);
            }
            return redirect('/collection');
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
