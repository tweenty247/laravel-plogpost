<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/home', function () {
    return view("home");
})->name("home");

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);


Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/addposts', [PostController::class, 'addpost'])->name('addposts');
Route::post('/posts', [PostController::class, 'store']);

// Route::get('/postlist', function(){
//     return view('post.postlist');
// })->name('postslist');
