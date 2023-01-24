<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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
    return view('posts.layout');
});

Route::resource('products', ProductController::class);

Route::resource('profiles', ProfileController::class);

Route::resource('posts', PostController::class);

// Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
