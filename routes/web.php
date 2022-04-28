<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryUserController;
use App\Http\Controllers\TagUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostCommentController;



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
Route::get('/article/{slug}', [ArticlesController::class, 'show'])->name('articles.single');
Route::get('/category/{slug}', [CategoryUserController::class, 'show'])->name('categories.single');
Route::get('/tag/{slug}', [TagUserController::class, 'show'])->name('tags.single');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::resource('/postcomment', PostCommentController::class);

Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function(){
  Route::get('/', [MainController::class, 'index'])->name('admin.index');
  Route::resource('/categories', CategoryController::class);
  Route::resource('/tags', TagController::class);
  Route::resource('/posts', PostController::class);
  Route::resource('/comments', CommentController::class);
});
Route::group(['middleware'=>'guest'], function(){
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login',  [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login',  [UserController::class, 'login'])->name('login');
});

Route::get('/logout',  [UserController::class, 'logout'])->name('logout')->middleware('auth');

