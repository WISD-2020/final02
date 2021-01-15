#系統擷取畫面
## 老師
### 老師首頁
* 老師查看課表及做點名的動作
<p align="center"><img src="https://i.imgur.com/oC8gqNz.jpg"></p>

### 老師查看出缺席
* 查看課程學生出缺席狀況及學生請假狀狀況
<p align="center"><img src=https://i.imgur.com/APxOhhj.jpg"></p>

### 老師審核請假
* 老師可以選擇要讓學生請假通過或不通過
<p align="center"><img src="https://i.imgur.com/060ANy3.jpg"></p>

## 學生
### 學生首頁
* 學生查看課表及做點名的動作
<p align="center"><img src="https://i.imgur.com/uf8c3XQ.jpg"></p>

### 學生出缺席狀況
* 學生查看自己出缺席狀況和請假狀況
<p align="center"><img src="https://i.imgur.com/9v3bYfX.jpg"></p>

### 學生請假
* 學生申請請假和查看申請紀錄
<p align="center"><img src="https://i.imgur.com/2VOShyj.jpg"></p>

# 系統的名稱及作用
*學生點名系統*
* 學生和老師可以查看自己的課表和做點名的動作
* 學生可以查看自己的課堂上出缺席和請假狀況
* 老師可以查看學生的出缺席和請假狀況
* 學生可以申請請假和查看請假紀錄
* 老師可以審核學生的請假是否給予通過
# 系統的主要功能
##老師　[3A732038 巫宇哲](http://github.com/3A732038)
* //老師查看出缺席頁面
  * Route::middleware(['auth:sanctum', 'verified'])->get('teacher/record', [\App\Http\Controllers\TeacherController::class, 'record'])->name('teacher.record');
* //老師查看某個課堂出缺席狀況
  * Route::middleware(['auth:sanctum', 'verified'])->get('teacher/record/search/{id}',[\App\Http\Controllers\TeacherController::class, 'record_show'])->name('teacher.record.show');
* //老師審核請假
  * Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave', [\App\Http\Controllers\TeacherController::class, 'leave'])->name('teacher.leave');
* //請假審核通過
  * Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave/pass/{leave}',[\App\Http\Controllers\TeacherController::class,'pass'])->name('teacher.leave.pass');
* //請假審核不通過
  * Route::middleware(['auth:sanctum', 'verified'])->get('teacher/leave/fail/{leave}',[\App\Http\Controllers\TeacherController::class,'fail'])->name('teacher.leave.fail');
* //老師開啟點名
  * Route::middleware(['auth:sanctum', 'verified'])->get('teacher/attend/{course}/{time}', [\App\Http\Controllers\TeacherController::class, 'attend'])->name('teacher.attend');
### 登入頁面
  * Route::get('/', function () { return view('Auth.login');});
### 主頁
  * Route::middleware(['auth:sanctum', 'verified'])->get('/home', [\App\Http\Controllers\LoginController::class, 'index'])->name('user');
### 登出
　*　Route::get('/home/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('user.logout');
##學生　[3A732007 蕭凱夫](http://github.com/3A732007)
* //學生點名
  * Route::middleware(['auth:sanctum', 'verified'])->get('student/attend/{course}/{time}', [\App\Http\Controllers\StudentController::class, 'attend'])->name('student.attend');
* //學生請假頁面
  * Route::middleware(['auth:sanctum', 'verified'])->get('student/leave', [\App\Http\Controllers\StudentController::class, 'leave'])->name('student.leave');
* //學生請假查詢
  * Route::middleware(['auth:sanctum', 'verified'])->get('student/period/search',[\App\Http\Controllers\StudentController::class, 'period_show'])->name('student.period.show');
* //學生請假表單送出
  * Route::middleware(['auth:sanctum', 'verified'])->post('student/leave/apply', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
* //學生查看出缺席頁面
  * Route::middleware(['auth:sanctum', 'verified'])->get('student/record', [\App\Http\Controllers\StudentController::class, 'record'])->name('student.record');
#初始專案與DB負責的同學
* 初始專案、資料庫及資料表建立 [3A732038 巫宇哲](http://github.com/3A732038)
* 資料表關連 [3A732007 蕭凱夫](http://github.com/3A732007)
#額外使用的樣板
* 老師和學生的所有頁面- [RAMAYANA FREE CSS TEMPLATE](https://www.free-css.com/free-css-templates/page260/ramayana)
#系統使用者測試帳號
##老師
* 帳號： a@gmail.com
* 密碼： aaaaaaaa
* 帳號： b@gmail.com
* 密碼： bbbbbbbb
##學生
* 帳號： c@gmail.com
* 密碼： cccccccc
* 帳號： d@gmail.com
* 密碼： dddddddd
#測試檔案存放位置
* final資料夾底下的final02.sql
#系統開發人員與工作分配
##[3A732038 巫宇哲](http://github.com/3A732038)
老師
* 老師主頁包含個人資料，課表和點名
* 老師查學生看出缺席和請假狀況
* 老師審核請假　　
##[3A732007 蕭凱夫](http://github.com/3A732007)
學生
* 學生主頁包含個人資料，課表和點名
* 學生查看出缺席和請假狀況
* 學生申請請假和申請紀錄　　
