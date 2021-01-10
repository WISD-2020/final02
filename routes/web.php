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
    return view('Auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('teacher/record', [\App\Http\Controllers\TeacherController::class, 'record'])->name('teacher.record');
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave', [\App\Http\Controllers\TeacherController::class, 'leave'])->name('teacher.leave');

Route::middleware(['auth:sanctum', 'verified'])->get('student/leave', [\App\Http\Controllers\StudentController::class, 'leave'])->name('student.leave');
Route::middleware(['auth:sanctum', 'verified'])->get('student/record', [\App\Http\Controllers\StudentController::class, 'record'])->name('student.record');
Route::middleware(['auth:sanctum', 'verified'])->post('student/leave/apply', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::middleware(['auth:sanctum', 'verified'])->get('student/attend/{course}/{time}', [\App\Http\Controllers\StudentController::class, 'attend'])->name('student.attend');
Route::middleware(['auth:sanctum', 'verified'])->get('student/period/search',[\App\Http\Controllers\StudentController::class, 'period_show'])->name('student.period.show');


Route::middleware(['auth:sanctum', 'verified'])->get('teacher/attend/{course}/{time}', [\App\Http\Controllers\TeacherController::class, 'attend'])->name('teacher.attend');
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave/pass/{leave}',[\App\Http\Controllers\TeacherController::class,'pass'])->name('teacher.leave.pass');
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave/fail/{leave}',[\App\Http\Controllers\TeacherController::class,'fail'])->name('teacher.leave.fail');
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/record/search/{id}',[\App\Http\Controllers\TeacherController::class, 'record_show'])->name('teacher.record.show');

//Route::middleware(['auth:sanctum', 'verified'])->get('/home',[\App\Http\Controllers\LoginController::class,'index'])->name('login');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [\App\Http\Controllers\LoginController::class, 'index'])->name('user');

Route::get('/home/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('user.logout');

