<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\LoanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get('/listGroups',[GroupController::class,'index']);
// Route::post('/createGroup',[GroupController::class,'store']);
// Route::post('/createLoan',[GroupController::class,'store']);
// Route::get('/viewGroup/{id}',[GroupController::class,'show']);
// Route::put('/updateGroup/{id}',[GroupController::class,'update']);
// Route::put('/delete/{id}',[GroupController::class,'destory']);

Route::resource('groups',GroupController::class);
Route::resource('loans',LoanController::class);
// Route::get('groups/{id}', [GroupController::class, 'getGroupById']);
