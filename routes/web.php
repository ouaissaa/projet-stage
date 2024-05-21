<?php

// use App\Http\Controllers\MoviesController;

use App\Http\Controllers\MoviesController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [MoviesController::class , 'index'])->name('index')->middleware("auth");
Route::post('/login', [userController::class , 'authenticate'])->name('authenticate');
Route::get('/login', [userController::class , 'login'])->name('login');
Route::get('/logout', [userController::class , 'logout'])->name('logout')->middleware("auth");
Route::get('/profile', [MoviesController::class , 'profile'])->name('profile')->middleware("auth");
Route::get('/register', [userController::class , 'register'])->name('register');
Route::post('/user/store', [userController::class , 'store'])->name('user.store');
Route::get('/movies/{movie}', [MoviesController::class , 'show'])->name('movie.show')->middleware("auth");


// Route::get('/', [HomeController::class , 'index'])->name('home');
// Route::get('/movies/{movie}', 'MoviesController@index')->name('movies.show');

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/movie', function () {
//     return view('show');
// });
