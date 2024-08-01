<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Clients\App\Http\Controllers\ClientsController;

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

Route::prefix('v1')->name('api.')->group(function () {
    Route::apiResource('clients', 'ClientsController');
    Route::post('clients/restore/{id}',[ClientsController::class , 'restore']);
    Route::delete('clients/force/delete/{id}',[ClientsController::class , 'forceDelete']);
});
