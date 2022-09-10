<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Https\Middleware\AdminMiddleware;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/users/profile', [App\Http\Controllers\User\UserController::class, 'profile'])->name('users.profile');



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', function (){
        return view('admin.index');
   });



        Route::get('posts',[App\Http\Controllers\Admin\PostController::class, 'index']);
        Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
        Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
        Route::get('post/{id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
        Route::put('update-post/{id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
        Route::get('delete-post/{id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);
        Route::get('users',[App\Http\Controllers\Admin\UserController::class, 'index']);
        Route::get('users/{id}',[App\Http\Controllers\Admin\UserController::class, 'edit']);


});


