<?php

use App\Http\Controllers\PersonneController;
use App\Http\Controllers\AuthController;
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

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/registerU', [AuthController::class, 'registerU']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/loginU', [AuthController::class, 'loginU']);


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
