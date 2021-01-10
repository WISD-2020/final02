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

//登入頁面
Route::get('/', function () {
    return view('Auth.login');
});
//主頁
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [\App\Http\Controllers\LoginController::class, 'index'])->name('user');

   //老師
//老師查看出缺席頁面
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/record', [\App\Http\Controllers\TeacherController::class, 'record'])->name('teacher.record');
//老師查看某個課堂出缺席狀況
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/record/search/{id}',[\App\Http\Controllers\TeacherController::class, 'record_show'])->name('teacher.record.show');
//老師審核請假
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave', [\App\Http\Controllers\TeacherController::class, 'leave'])->name('teacher.leave');
//請假審核通過
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave/pass/{leave}',[\App\Http\Controllers\TeacherController::class,'pass'])->name('teacher.leave.pass');
//請假審核不通過
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave/fail/{leave}',[\App\Http\Controllers\TeacherController::class,'fail'])->name('teacher.leave.fail');
//老師開啟點名
Route::middleware(['auth:sanctum', 'verified'])->get('teacher/attend/{course}/{time}', [\App\Http\Controllers\TeacherController::class, 'attend'])->name('teacher.attend');

   //學生
//學生點名
Route::middleware(['auth:sanctum', 'verified'])->get('student/attend/{course}/{time}', [\App\Http\Controllers\StudentController::class, 'attend'])->name('student.attend');
//學生請假頁面
Route::middleware(['auth:sanctum', 'verified'])->get('student/leave', [\App\Http\Controllers\StudentController::class, 'leave'])->name('student.leave');
//學生請假查詢
Route::middleware(['auth:sanctum', 'verified'])->get('student/period/search',[\App\Http\Controllers\StudentController::class, 'period_show'])->name('student.period.show');
//學生請假表單送出
Route::middleware(['auth:sanctum', 'verified'])->post('student/leave/apply', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
//學生查看出缺席頁面
Route::middleware(['auth:sanctum', 'verified'])->get('student/record', [\App\Http\Controllers\StudentController::class, 'record'])->name('student.record');

//登出
Route::get('/home/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('user.logout');

