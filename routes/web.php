<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\UserController;


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

Route::get('/', [ArticlesController::class, 'index'])->name('home');
Route::get('/articles', [ArticlesController::class, 'show'])->name('articles.single');

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function(){
  Route::get('/', [MainController::class, 'index'])->name('admin.index');
  Route::resource('/categories', CategoryController::class);
  Route::resource('/tags', TagController::class);
  Route::resource('/posts', PostController::class);
});
Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login',  [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login',  [UserController::class, 'login'])->name('login');
});

Route::get('/logout',  [UserController::class, 'logout'])->name('logout')->middleware('auth');

