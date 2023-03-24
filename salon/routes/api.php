<?php

use App\Http\Controllers\FrizerController;
use App\Http\Controllers\TerminController;
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
Route::get('frizer', [FrizerController::class, 'index']);

Route::get('frizer/{frizer}', [FrizerController::class, 'show']);

Route::put('frizer/{frizer}', [FrizerController::class, 'update']);

Route::delete('frizer/{frizer}', [FrizerController::class, 'destroy']);


Route::get('termin', [TerminController::class, 'index']);

Route::get('termin/{termin}', [TerminController::class, 'show']);

Route::delete('termin/{termin}', [TerminController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
