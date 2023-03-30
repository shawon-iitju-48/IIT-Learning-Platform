<?php

namespace App\Http\Controllers;

use DB;
use App\Models\UserModel;

class Management extends Controller
{
    public function home()
    {

        $uid = session('u_id');

        $result = DB::select('select * from user where u_id = ?', [$uid]);
        if ($result[0]->id_type == "Teacher") {
            return view('teacher_dashboard');
        } else {
            return view('student_dashboard');
        }

    }
    public function profile()
    {
        $uid = session('u_id');

        $result = DB::select('select * from user where u_id = ?', [$uid]);
        if ($result[0]->id_type == "Teacher") {
            return view('teacher_dashboard');
        } else {
            $Profileinfo=DB::select("SELECT * FROM user  NATURAL JOIN student  where u_id=$uid");
            return view('student_profile')->with(compact('Profileinfo'));
        }
    }
}
