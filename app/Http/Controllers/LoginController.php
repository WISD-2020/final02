<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function index()
    {
        //
        $teacher=Auth::user()->teachers;
        if(  isset($teacher)  ){
        return view('teacher',[
            'teacher' => $teacher,

        ]);}
        $student=Auth::user()->students;
        if(  isset($student)  ){
            return view('teacher',[
                'student' => $student,

            ]);}
   }
    public function logout()
    {
        //
        Auth::logout();
        return redirect('login');
    }

}
