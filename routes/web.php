<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController; // Import class
use App\Http\Controllers\DashboardController;

Route::group(['middleware' => 'auth'], function() {

});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

/*

Route::get('/', function () {
    return view('login');
});

Route::view('/', 'index');
Route::view('/users', 'users');
Route::view('/profiles', 'profiles');
Route::view('/dashboard', 'index');


Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('users.index');

Route::get('/users', [UserController::class, 'getUsers']); // In the UserController, there is a function named 'getUsers' inside.
Route::get('/users', [UserController::class, 'createUsers']);
Route::post('/users', [UserController::class, 'storeUsers']);
Route::get('/profiles', [ProfileController::class, 'getProfiles']);
Route::post('/profiles', [ProfileController::class, 'storeProfiles']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);


Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
*/
