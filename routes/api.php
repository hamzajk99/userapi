<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\CustomUserController;
use App\Http\Controllers\DashboardController;
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


// Track Visit Endpoint
Route::get('/track-visit/{externalId}', [VisitController::class, 'trackVisit']);

// Update User Stage Endpoint
Route::post('/update-stage', [CustomUserController::class, 'updateUserStage']);

// Dashboard Endpoint
Route::get('/dashboard', [DashboardController::class, 'index']);
