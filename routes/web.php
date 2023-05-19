<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('login/post', [LoginController::class, 'post'])->name('login-post');
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('register/post', [RegisterController::class, 'post'] )->name('register-post');
Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function() {
     Route::post('logout', [LoginController::class, 'logout'])->name('logout');
     Route::post('book/post', [BookController::class, 'post'])->name('book-post');

     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
     Route::get('add-book', [BookController::class, 'add'])->name('add-book');
     Route::get('book', [BookController::class, 'index'])->name('book');

     Route::get('book/delete/{id}', [BookController::class, 'delete'])->name('book-delete');
     Route::get('book/edit/{id}', [BookController::class, 'edit'])->name('book-edit');
     Route::post('book/edit/update/{id}', [BookController::class, 'update'])->name('book-update');
});