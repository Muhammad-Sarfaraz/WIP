<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Worker\JobsController;
use App\Http\Controllers\Worker\SettingController;
use App\Http\Controllers\Worker\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});


//client
Route::get('/w/dashboard',[DashboardController::class, 'c']);

//Dashboard

//worker

Route::get('/w/dashboard',[DashboardController::class, 'w']);

Route::get('/w/jobs',[JobsController::class, 'index']);
Route::get('/w/job/001',[JobsController::class, 'view']);
Route::get('/w/jobs/history',[JobsController::class, 'history']);

Route::get('/w/settings',[SettingController::class, 'index']);

Route::get('/w/payment',[PaymentController::class, 'index']);
Route::get('/w/payment/settings',[SettingController::class, 'paymentSetting']);

Route::get('/c/dashboard',[DashboardController::class, 'c']);
Route::get('/a/dashboard',[DashboardController::class, 'a']);
