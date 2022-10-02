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

//Route::get('/', [App\Http\Controllers\User\UserController::class, 'index']);

          
        Route::get('admin/add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
        Route::post('admin/add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
        Route::get('admin/users',[App\Http\Controllers\Admin\UserController::class, 'index']);
        Route::get('admin/users/{id}',[App\Http\Controllers\Admin\UserController::class, 'edit']);

        Route::get('admin/posts',[App\Http\Controllers\Admin\PostController::class, 'index']);
        Route::get('admin/approved/{id}', [App\Http\Controllers\Admin\PostController::class, 'approved']);
        Route::get('admin/pending/{id}', [App\Http\Controllers\Admin\PostController::class, 'pending']);


Route::get('home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/users/profile', [App\Http\Controllers\User\UserController::class, 'profile'])->name('users.profile');
Route::get('admin/index', [App\Http\Controllers\User\UserController::class, 'index']);
Route::post('admin/index', [App\Http\Controllers\User\UserController::class, 'add_image']);

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', function (){
        return view('admin.index');
   });



      

        Route::get('post/{id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
        Route::put('update-post/{id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
        Route::get('delete-post/{id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);
      

});

// For Navbar
Route::get('/navitem/create',[
    'uses'=>'NavItemController@create',
    'as' =>'navitem.create',
]);

Route::post('/navitem/store',[
    'uses'=>'NavItemController@store',
    'as' =>'navitem.store',
]);

//for sub..
Route::get('/subnavitem/create',[
    'uses'=>'SubNavItemsController@create',
    'as' =>'subnavitem.create',
]);

Route::post('/subnavitem/store',[
    'uses'=>'SubNavItemsController@store',
    'as' =>'subnavitem.store',
]);
//End of Navbar

//Testimonals
Route::get('testimonals/create', [App\Http\Controllers\TestimonalController::class, 'create']);
Route::post('testimonals/store', [App\Http\Controllers\TestimonalController::class, 'store']);
//End of Testimonals
