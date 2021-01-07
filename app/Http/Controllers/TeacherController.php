<?php

namespace App\Http\Controllers;

use App\Models\Attend;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Leave;
use BaconQrCode\Common\ReedSolomonCodec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    //
    public function record()
    {
           $courses=Auth::user()->teachers->courses;

        return view('teacher_record',[
            'courses' => $courses,
        ]);
    }
                           //要跟前面route對齊
    public function attend($course,$time)
    {
        $course=Auth::user()->teachers->courses->where('name','=',$course)->first();
      $class=$course->classes->where('time','=',$time)->where('date','=',date("Y-m-d"))->first();
    foreach ($course->takes as $take){
        $attend=new Attend;
     $attend->student_id= $take->student->id;
     $attend->classes_id=$class->id;
     $attend->truant='曠課';
     $attend->save();
    }
        return  redirect (route('user'));
    }
    public function leave()
    {
        $leaves=Auth::user()->teachers->leaves;
 return view('teacher_leave',[
     'leaves' => $leaves,
 ]);
    }
    public function record_show(Request $request,$id)
    {
        if(isset($request->course)) {
            session(['course' => $request->course]);
        }
        $value = session('course');
        $course=Auth::user()->teachers->courses->where('id','=',$value)->first();
        $classes=$course->classes;
      $courses=Auth::user()->teachers->courses;
        return view('teacher_record',[
            'courses'=>$courses,
            'classes' => $classes,
            'id'=>$id,
        ]);

    }
    public function pass(Leave $leave)
    {
        $leave->result='通過';
        $leave->save();
      Attend::where('student_id',$leave->student->id)->where('classes_id',$leave->classes->id)->update(['truant' => $leave->type]);
     return  redirect (route('teacher.leave'));
    }
    public function fail(Leave $leave)
    {
        $leave->result='不通過';
        $leave->save();
        return  redirect (route('teacher.leave'));
    }
}
