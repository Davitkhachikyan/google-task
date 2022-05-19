<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('posts/images', [ImageController::class, 'index'])->name('images-page');
Route::get('post/images/{id}', [ImageController::class, 'postImages'])->name('post-images');
Route::get('/search/query', [SearchController::class, 'query']);


Route::group(['middleware' => ['admin']], function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::get('add-post', [AdminController::class, 'addPost'])->name('add-post-page');
    Route::post('posts/create', [PostController::class, 'create'])->name('add-post');
    Route::get('update-post/{id}', [AdminController::class, 'updatePost'])->name('update-post-page');
    Route::delete('posts/delete{id}', [PostController::class, 'delete'])->name('delete-post');
    Route::put('posts/update/{id}', [PostController::class, 'update'])->name('update');
    Route::post('images/create/{id}', [ImageController::class, 'create'])->name('create-image');
    Route::delete('posts/images/delete/{id}', [ImageController::class, 'delete'])->name('delete-image');
    Route::get('create-page/{id}', [AdminController::class, 'createImage'])->name('create-image-page');
});
