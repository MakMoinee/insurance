<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    //
    function index()
    {
        if (session()->exists('users')) {
            $members = Members::all();
            $membersCount = $members->count();
            $newMembers = DB::table('vwtotalnewmembers')->first();
            $collection = DB::table('vwtotalcollections')->first();
            $ctotal = $collection->TotalCollections;
            $total = $newMembers->TotalNewMembers;
            $userType = session('users')[0]->uType;
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

            return view('dashboard', [
                'totalMembers' => $membersCount,
                'totalNewMembers' => $total,
                'utype' => $userType,
                'ctotal' => $ctotal,
                'hasAccess' => $hasAccess,
                'hasAccessMember' => $hasAccessMember,
                'hasAccessPlans' => $hasAccessPlans,
                'hasAccessCollections' => $hasAccessCollection,
                'loginAs' => $userRoleDesc
            ]);
        } else {
            return view('home');
        }
    }

    function getToken()
    {
        return response()->json(['token' => csrf_token()], Response::HTTP_OK);
    }
}
