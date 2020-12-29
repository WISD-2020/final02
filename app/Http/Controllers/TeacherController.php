<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    //+
    public function record()
    {
           $courses=Auth::user()->teachers->courses;
        return view('teacher_record',[
            'courses' => $courses,
        ]);
//        return view('teacher',[
//            'teacher' => $teacher,
//            'courses' => $courses,
//        ]);
    }
}
