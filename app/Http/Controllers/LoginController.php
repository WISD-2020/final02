<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function index()
    {
        //
    $user=Auth::user();
    if($user->type=='1'){
       $teacher=$user->teachers;
       $courses=$teacher->courses;
        return view('teacher',[
            'teacher' => $teacher,
            'courses' => $courses,
        ]);
       }
    else{
        $student=$user->students;
        $takes=$student->takes;
        return view('student',[
            'student' => $student,
            'takes' => $takes,
        ]);
    }
   }
    public function logout()
    {
        //
        Auth::logout();
        return redirect('login');
    }


}
