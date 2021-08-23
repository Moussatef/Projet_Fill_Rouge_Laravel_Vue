<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ImageController;
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

//admin login
Route::post('/admin/login', [AuthController::class, 'adminLogin']);
//get campus
Route::get('/campus', [CampusController::class, 'index']);
Route::get('/categorie', [CategorieController::class, 'index']);


// Check posts

//upload file
Route::post('/user/upload', [FileUploadController::class, 'upload']);



// Protected routes
Route::group(['middleware' => ['auth:sanctum', 'type.user']], function () {

    Route::get('/personne/index', [PersonneController::class, 'index']);
    Route::get('/personne/id/{id}', [PersonneController::class, 'show'])->whereNumber('id');
    Route::get('/personne/fullname/id/{id}', [PersonneController::class, 'show_n'])->whereNumber('id');
    Route::post('/personne/update/{id}', [PersonneController::class, 'update'])->whereNumber('id');
    Route::post('/personne/update/img/both/{id}', [PersonneController::class, 'updateImg'])->whereNumber('id');
    Route::post('/personne/update/img/profile/{id}', [PersonneController::class, 'updateImgProfile'])->whereNumber('id');
    Route::post('/personne/update/img/cover/{id}', [PersonneController::class, 'updateImgCover'])->whereNumber('id');
    Route::post('/logout', [AuthController::class, 'logout']);
    //update info personne
    Route::post('/personne/update/infoSoc', [PersonneController::class, 'updateInfoSoc']);
    Route::post('/personne/update/info', [PersonneController::class, 'updateInfo']);
    Route::post('/personne/update/password', [PersonneController::class, 'updatePassword']);


    //test get personne with al info likes and also comments
    Route::get('/personne/test/id/{id}', [PersonneController::class, 'test'])->whereNumber('id');

    //Route ApprenantController
    Route::get('/apprenant/id/{id}', [ApprenantController::class, 'show']);
    Route::post('/apprenant/update', [ApprenantController::class, 'update'])->whereNumber('id');
    Route::post('/apprenant/delete', [ApprenantController::class, 'destroy'])->whereNumber('id');


    //get posts personne authenticate
    Route::get('/profile/post', [PostController::class, 'getPostProfile']);
    Route::get('/problem/post', [PostController::class, 'getPostProblem']);
    //add new post profile
    Route::post('/profile/post/add', [PostController::class, 'storeProfile']);
    //add new post problem
    Route::post('/problem/post/add', [PostController::class, 'storeProblem']);
    //show photos
    Route::post('/profile/image', [ImageController::class, 'show']);
    //comment save
    Route::post('/comment/store', [CommentController::class, 'store']);
    //add like
    Route::post('/like/store', [PostLikeController::class, 'store']);
    Route::get('/like/getInfo/{id}', [PostLikeController::class, 'getLikeInfo']);

    Route::get('/like/getInfo', [PostLikeController::class, 'index']);

    //delete like
    Route::delete('/like/destroy', [PostLikeController::class, 'destroy']);
    //update post info
    Route::post('/profile/post/update/{id}', [PostController::class, 'update']);
    //delete post
    Route::post('/profile/post/delete/{id}', [PostController::class, 'destroy']);
    Route::post('/problem/post/delete/{id}', [PostController::class, 'destroyProblem']);
    //delete comment
    Route::post('/profile/post/comment/delete', [CommentController::class, 'destroy']);
    //get all posts
    Route::get('/home/post/all', [PostController::class, 'index']);
    Route::get('/problem/post/all', [PostController::class, 'indexProblem']);

    //get statistic
    Route::get('/profile/static/{id}', [PostController::class, 'getTotals']);

    Route::get('/categories', [\App\Http\Controllers\CategorieController::class, 'index']);
});



//Admin route
Route::group(['middleware' => ['auth:sanctum', 'type.admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('info', [AdminController::class, 'getAdminInfo']);
        Route::post('update', [AdminController::class, 'updateAdminInfo']);
        Route::post('update_password', [AdminController::class, 'updateAdminPassword']);
        Route::get('apprenant', [AdminController::class, 'getApprenantInfo']);
        Route::get('statistic', [AdminController::class, 'statistic']);
        Route::get('posts', [AdminController::class, 'getAllPosts']);
        Route::post('validate', [AdminController::class, 'validateApprenant']);
        Route::post('delete', [AdminController::class, 'destroy']);
        Route::get('/categories', [\App\Http\Controllers\CategorieController::class, 'index']);
        Route::post('/categorie', [\App\Http\Controllers\CategorieController::class, 'store']);
        Route::post('/categorie/{id}', [\App\Http\Controllers\CategorieController::class, 'update']);
        Route::delete('/categorie/{id}', [\App\Http\Controllers\CategorieController::class, 'destroy']);
        Route::delete('/personne/delete/{id}', [PersonneController::class, 'destroy'])->whereNumber('id');
        Route::post('/personne/block/{id}', [AdminController::class, 'block_apprenant'])->whereNumber('id');
    });
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
