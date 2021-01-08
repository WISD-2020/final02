<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Leave;
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

    public function record()
    {
        $student=Auth::user()->students;
        return view('student_record', [
            'students' => $student,
        ]);
    }

    public function period_show(Request $request)
    {
        $course=Course::where('id',$request->course)->first();
        $classes=$course->classes;
        $takes = Auth::user()->students->takes;
        return view('student_leave', [
            'classes' => $classes,
            'takes' => $takes,
        ]);
    }

    public function store(Request $request)
    {
        $student=Auth::user()->students;
        $take = $student->takes;

        $leaves = new Leave;
        $leaves->student_id = $student->id;
        $leaves->teacher_id = '1';
        $leaves->classes_id = '1';
        $leaves->reason = $request->reason;
        $leaves->type = $request->type;
        $leaves->leave_date = $request->leave_date;
        $leaves->result = '未審核';
        $leaves->save();

        return redirect()->route('student.record');
    }
}
