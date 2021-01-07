<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function leave()
    {
        $takes = Auth::user()->students->takes;
        return view('student_leave', [
            'takes' => $takes,
        ]);
    }
}
