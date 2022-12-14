<?php

use App\Http\Controllers\master\CustomerRouteController;
use App\Http\Controllers\master\CustomerTeritoryController;
use App\Http\Controllers\master\DashboardController;
use App\Http\Controllers\master\RouteTeritoryController;
use App\Http\Controllers\master\TeritoryController;
use Illuminate\Support\Facades\Route;

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


Route::prefix("master")->group(function () {

Route::resource("/", DashboardController::class);

Route::resource("teritory", TeritoryController::class);

Route::resource("customerTeritory", CustomerTeritoryController::class);

Route::resource("routeTeritory", RouteTeritoryController::class);

Route::resource("customerRoute", CustomerRouteController::class);
});
