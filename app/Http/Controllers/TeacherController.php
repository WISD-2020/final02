<?php

namespace App\Http\Controllers;

use App\Models\Attend;
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
