<?php

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

Route::get('/', [App\Http\Controllers\NamedayController::class, 'index']);
Route::get('/table', [App\Http\Controllers\TableController::class, 'index']);
Route::get('/profile/detail/{name}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/search', [App\Http\Controllers\ProfileController::class, 'search'])->name('profile.search');
