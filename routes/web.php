<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kolom1Controller;
use App\Http\Controllers\Kolom2Controller;
use App\Http\Controllers\Kolom3Controller;
use App\Http\Controllers\Kolom4Controller;
use App\Http\Controllers\PagesController;

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


Route::get('/', [PagesController::class,'home']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/dashboard', [PagesController::class,'dashboard']);
Route::get('/gallery', [PagesController::class,'viewgal']);


Route::get('/adminsultan', function () {
    return view('admin/login');
});
//kolom1
Route::get('/kolom1', [Kolom1Controller::class,'index']);
Route::get('/kolom1/create', [Kolom1Controller::class,'create']);
Route::post('/kolom1/create/store', [Kolom1Controller::class,'store']);
Route::get('/kolom1/{kolom1}/delete', [Kolom1Controller::class,'destroy']);

//kolom2
Route::get('/kolom2', [Kolom2Controller::class,'index']);
Route::get('/kolom2/create', [Kolom2Controller::class,'create']);
Route::post('/kolom2/create/store', [Kolom2Controller::class,'store']);
Route::get('/kolom2/{kolom2}/delete', [Kolom2Controller::class,'destroy']);

//kolom3
Route::get('/kolom3', [Kolom3Controller::class,'index']);
Route::get('/kolom3/create', [Kolom3Controller::class,'create']);
Route::post('/kolom3/create/store', [Kolom3Controller::class,'store']);
Route::get('/kolom3/{kolom3}/delete', [Kolom3Controller::class,'destroy']);

//kolom4
Route::get('/kolom4', [Kolom4Controller::class,'index']);
Route::get('/kolom4/create', [Kolom4Controller::class,'create']);
Route::post('/kolom4/create/store', [Kolom4Controller::class,'store']);
Route::get('/kolom4/{kolom4}/delete', [Kolom4Controller::class,'destroy']);