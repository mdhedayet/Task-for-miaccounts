<?php

use App\Http\Controllers\ReportOneController;
use App\Http\Controllers\ReportTwoController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/report/one/data', [ReportOneController::class, 'index']);
Route::get('/report/two/data', [ReportTwoController::class, 'index']);
