<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
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

Route::get('/', function ()
{
    return view('home');
});
Route::get('/allPosts', [PostController::class, 'getAllPosts'])->name('post.index');
Route::get('/postDetails/{id}', [PostController::class, 'getPostById']);
Route::get('/post/create',[PostController::class, 'create'])->name('post.create');
Route::post('/post/store',[PostController::class, 'store'])->name('post.store');

Route::get('/post/update/{post}',[PostController::class, 'update'])->name('post.update');
Route::put('/post/edit/{id}',[PostController::class, 'edit'])->name('product.edit');
Route::delete('/post/delete/{post}',[PostController::class, 'destroy'])->name('post.destroy');
