<?php

use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
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
Route::post('/personne/register', [AuthController::class, 'register']);
Route::post('/user/registerU', [AuthController::class, 'registerU']);
Route::post('/personne/login', [AuthController::class, 'login']);
Route::post('/user/loginU', [AuthController::class, 'loginU']);
Route::post('/apprenant/register', [ApprenantController::class, 'store']);

// Check posts

//upload file
Route::post('/user/upload', [FileUploadController::class, 'upload']);



// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::get('/index', [PersonneController::class, 'index']);
    Route::get('/personne/id/{id}', [PersonneController::class, 'show'])->whereNumber('id');
    Route::get('/personne/fullname/id/{id}', [PersonneController::class, 'show_n'])->whereNumber('id');
    Route::put('/personne/update/{id}', [PersonneController::class, 'update'])->whereNumber('id');
    Route::post('/personne/delete', [PersonneController::class, 'destroy'])->whereNumber('id');
    Route::post('/logout', [AuthController::class, 'logout']);

    //Route ApprenantController
    Route::get('/apprenant/id/{id}', [ApprenantController::class, 'show']);
    Route::post('/apprenant/update', [ApprenantController::class, 'update'])->whereNumber('id');
    Route::post('/apprenant/delete', [ApprenantController::class, 'destroy'])->whereNumber('id');



    //get posts personne authenticate
    Route::get('/profile/post/{id}', [PostController::class, 'getPostProfile']);
    //comment save
    Route::post('/comment/store', [CommentController::class, 'store']);
    //add like
    Route::post('/like/store', [PostLikeController::class, 'store']);
    //delete like
    Route::delete('/like/destroy', [PostLikeController::class, 'destroy']);

});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
