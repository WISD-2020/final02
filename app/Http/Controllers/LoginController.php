<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function index()
    {
        //
 //       return Auth::user()->name."'s Home!";
        $user=Auth::user();
        return view('teacher',[
            'user' => $user,
        ]);
   }
    public function logout()
    {
        //
        Auth::logout();
        return redirect('login');
    }

}
