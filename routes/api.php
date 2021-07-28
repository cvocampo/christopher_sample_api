<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\InvitationController;
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

Route::post('login', [LoginController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){

    //Routes for authenticated admin accounts
    Route::group(['middleware' => ['role:admin']], function () {
        Route::post('/roles-list',[RoleController::class,'index']);
        Route::post('/invite',[InvitationController::class, 'index']);
    });


    //Routes for authenticated users
    Route::group(['middleware' => ['role:user']], function () {
        //
    });



});
