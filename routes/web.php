<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;

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
Route::get('/', [PostController::class, 'index'])->name('all_posts');
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
    
    Route::get('/create_post', [PostController::class, 'create'])->name('create_post');
    Route::post('/store_post', [PostController::class, 'store'])->name('store_post');
    Route::get('/get_posts', [PostController::class, 'get_posts'])->name('get_posts');
    Route::get('/get_post/{slug}', [PostController::class, 'show'])->name('get_post');
    
    Route::get('/create_category', [CategoryController::class, 'create'])->name('create_category');
    Route::post('/store_category', [CategoryController::class, 'store'])->name('store_category');
    Route::get('/view_category', [CategoryController::class, 'index'])->name('view_category');
   
    Route::get('/create_tag', [TagController::class, 'create'])->name('create_tag');
    Route::post('/store_tag', [TagController::class, 'store'])->name('store_tag');
    Route::get('/view_tag', [TagController::class, 'index'])->name('view_tag');

});
