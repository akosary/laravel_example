<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacebookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function ()
// {
//     return view('home');
// });

// post routes
Route::get('/allPosts', [PostController::class, 'getAllPosts'])->name('post.index')->middleware('auth');
Route::get('/postDetails/{id}', [PostController::class, 'getPostById']);

Route::delete('/post/delete/{id}',[PostController::class, 'destroy'])->name('post.destroy');

Route::get('/post/create',[PostController::class, 'create'])->name('post.create');
Route::post('/post/store',[PostController::class, 'store'])->name('post.store');

Route::get('/post/update/{post}',[PostController::class, 'update'])->name('post.update');
Route::put('/post/edit/{id}',[PostController::class, 'edit'])->name('product.edit');

// user routes
Route::get('/user/index',[UserController::class, 'index'])->name('user.index');
Route::get('/user/show/{id}',[UserController::class, 'show'])->name('user.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Third party login
Route::controller(FacebookController::class)->group(function(){
    Route::get('/auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('/auth/facebook/callback', 'handleFacebookCallback');
});
