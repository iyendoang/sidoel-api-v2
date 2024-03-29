<?php

use App\Http\Controllers\Api\SchoolController;
use App\Http\Controllers\Api\UpdateSchoolLastLoginController;
use App\Http\Controllers\APi\YearController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('/schools', SchoolController::class);
Route::post('/logged-in/{npsn}', UpdateSchoolLastLoginController::class);
Route::apiResource('/years', YearController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
