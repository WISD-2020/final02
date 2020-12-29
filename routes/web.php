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

//Route::get('/index', function () {
//    return view('index');
//})->name('index');
//Route::get('/', function () {
//    return view('teacher');
//})->name('teacher');
Route::get('/', function () {
    return view('teacher');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/record', [\App\Http\Controllers\LoginController::class, 'record'])->name('teacher.record');


//Route::middleware(['auth:sanctum', 'verified'])->get('/home',[\App\Http\Controllers\LoginController::class,'index'])->name('login');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [\App\Http\Controllers\LoginController::class, 'index'])->name('user');

Route::get('/home/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('user.logout');
