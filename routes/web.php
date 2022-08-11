<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\SalesReportController;
use App\Http\Controllers\SignOutController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/gettoken', [HomeController::class, 'getToken']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/signout', [SignOutController::class, 'index']);
Route::put('/update/members', [MembersController::class, 'update']);
Route::resource('/plans', PlansController::class);
Route::resource('/user_roles', RolesController::class);
Route::resource('/sales_report', SalesReportController::class);
Route::put('/update/user_roles', [RolesController::class, 'update']);
Route::delete('/delete/members/{id}', [MembersController::class, 'destroy'])->name('delete.member');
Route::delete('/delete/plan/{id}', [PlansController::class, 'destroy'])->name('delete.plan');
Route::put('/update/plan', [PlansController::class, 'update']);

Route::resource('/members', MembersController::class);
Route::resource('/collection', CollectionController::class);

Route::resource(
    '/login',
    LoginController::class
);
