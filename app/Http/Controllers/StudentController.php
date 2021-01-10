<?php

namespace App\Http\Controllers;

use App\Models\Attend;
use App\Models\Course;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function leave()
    {
        $student = Auth::user()->students;
        $takes = $student->takes;

        return view('student_leave', [
            'students' => $student,
            'takes' => $takes,
        ]);
    }

    public function record()
    {
        $student = Auth::user()->students;
        return view('student_record', [
            'students' => $student,
        ]);
    }

    public function period_show(Request $request)
    {
        $student = Auth::user()->students;
        $course = Course::where('id', $request->course)->first();
        $classes = $course->classes;
        $takes = Auth::user()->students->takes;
        return view('student_leave', [
            'students' => $student,
            'classes' => $classes,
            'takes' => $takes,
        ]);
    }

    public function store(Request $request)
    {
        $student = Auth::user()->students;
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

    public function attend($course, $time)
    {
        $student = Auth::user()->students;
        $course = Course::where('name', $course)->first();
        $class = $course->classes->where('time', '=', $time)->where('date', '=', date("Y-m-d"))->first();
        Attend::where('classes_id', '=', $class->id)->where('student_id', '=', $student->id)->delete();
        return redirect(route('user'));
    }
}
