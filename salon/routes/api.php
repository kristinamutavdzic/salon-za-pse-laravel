<?php

use App\Http\Controllers\FrizerController;
use App\Http\Controllers\TerminController;
use App\Http\Controllers\AuthController;
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

Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::get('frizer', [FrizerController::class, 'index']);

Route::get('frizer/{frizer}', [FrizerController::class, 'show']);

Route::get('termin', [TerminController::class, 'index']);

Route::get('termin/{termin}', [TerminController::class, 'show']);


Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::put('frizer/{frizer}', [FrizerController::class, 'update']);

    Route::delete('frizer/{frizer}', [FrizerController::class, 'destroy']);

    Route::delete('termin/{termin}', [TerminController::class, 'destroy']);

    Route::post('logout', [AuthController::class, 'logout']);
});
