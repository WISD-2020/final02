<?php

namespace App\Http\Controllers;


use App\Models\Classes;
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
        $date=$request->leave_date;
        $course=Course::where('id',$request->course)->first();
        $classes=$course->classes->where('date','=',$request->leave_date);
        $takes = Auth::user()->students->takes;
        return view('student_leave', [
            'classes' => $classes,
            'takes' => $takes,
            'course'=>$course,
            'date'=>$date,
        ]);
    }

    public function store(Request $request)
    {
        $course=Course::where('name',$request->course)->first();
        $class=Classes::where('time',$request->period)->where('date',$request->date)->first();
        $student=Auth::user()->students;
        $leaves = new Leave;
        $leaves->student_id = $student->id;
        $leaves->teacher_id = $course->teacher->id;
        $leaves->classes_id = $class->id;
        $leaves->reason = $request->reason;
        $leaves->type = $request->type;
        $leaves->leave_date = $request->date;
        $leaves->result = '未審核';
        $leaves->save();

        return redirect()->route('student.record');
    }
}
