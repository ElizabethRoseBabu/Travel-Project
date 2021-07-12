<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[TravelController::class,'index']);
Route::get('signUp',[TravelController::class,'registration']);
Route::get('register',[TravelController::class,'signup_action']);
Route::get('signIn',[TravelController::class,'signIn']);
Route::get('login',[TravelController::class,'login']);
Route::get('location',[TravelController::class,'location']);
Route::get('addlocation',[TravelController::class,'add_location']);
Route::get('admin',[AdminController::class,'adminhome']);
Route::get('user',[TravelController::class,'userhome']);
Route::get('view',[AdminController::class,'show']);
Route::get("update/{id}",[AdminController::class,'edit']);
Route::get("updatevehicle",[AdminController::class,'update']);
Route::get('userview',[TravelController::class,'usershow']);
Route::get('insertbooking',[TravelController::class,'insertbooking']);