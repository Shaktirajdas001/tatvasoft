<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('dashboard');
Route::get('/user-profile', [App\Http\Controllers\HomeController::class, 'userDashboard'])->name('user-profile');
Route::resource('users', UserController::class);
Route::get('edit/{id}', [App\Http\Controllers\UserController::class, 'userEdit'])->name('edit');
Route::put('update/{id}', [App\Http\Controllers\UserController::class, 'userUpdate'])->name('update');
Route::get('destroy/{id}', [App\Http\Controllers\UserController::class, 'userDestroy'])->name('destroy');
