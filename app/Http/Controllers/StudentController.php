<?php

namespace App\Http\Controllers;


use App\Models\Attend;
use App\Models\Classes;
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
        $date=$request->leave_date;
        $course=Course::where('id',$request->course)->first();
        $classes=$course->classes->where('date','=',$request->leave_date);

        $takes = Auth::user()->students->takes;
        return view('student_leave', [
            'students' => $student,
            'classes' => $classes,
            'takes' => $takes,
            'course'=>$course,
            'date'=>$date,
        ]);
    }

    public function store(Request $request)
    {

        $student = Auth::user()->students;
        $take = $student->takes;


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

    public function attend($course, $time)
    {
        $student = Auth::user()->students;
        $course = Course::where('name', $course)->first();
        $class = $course->classes->where('time', '=', $time)->where('date', '=', date("Y-m-d"))->first();
        Attend::where('classes_id', '=', $class->id)->where('student_id', '=', $student->id)->delete();
        return redirect(route('user'));
    }
}
