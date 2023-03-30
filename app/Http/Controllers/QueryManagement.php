<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class QueryManagement extends Controller
{
    public function updateprofile(Request $request)
    {
        $request->validate(
            [
                'email' => 'email',
            ]
        );

        $r = UserModel::find(session('u_id'));
        $s = StudentModel::find(session('u_id'));

        $r->email = $request['email'];
        $r->fname = $request['fname'];
        $r->lname = $request['lname'];

        if ($request['password'] != "") {
            $r->password = Hash::make($request['password']);
        }
        $r->phone = $request['phone'];
        $s->skills = $request['skills'];

        if ($request['bg'] != "Select Your Blood Group") {
            $r->bg = $request['bg'];
        }
        if ($request['gender'] != "") {
            $r->gender = $request['gender'];
        }

        $s->hall = $request['hall'];

        if ($request['semester'] != "Select Your Semester") {
            $s->semester = $request['semester'];
        }

        if (isset($request['dp'])) {
            $r->dp = $request->file('dp')->store('public/dbstorage/images');
        }

        $r->save();
        $s->save();
        return redirect('/profile');

    }
}
