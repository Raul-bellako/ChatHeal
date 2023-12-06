<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

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

Route::get('/', 'InicioController@inicio');
Route::get('/about', 'InicioController@about');
Route::get('/features', 'InicioController@features');
Route::get('/contact', 'InicioController@contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('index');

Route::get('/users/create',[App\Http\Controllers\UsersController::class, 'createUser'])->name('users.createUsers');
Route::post('/users/create/add',[App\Http\Controllers\UsersController::class, 'store'])->name('users.store');

Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');