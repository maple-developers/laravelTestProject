<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Teacher_model;

class Teacher_controller extends Controller
{
    function index()
    {
        return view('addTeacherForm');
    }

    function storeTeacher(Request $request)
    {
        print_r($request->post());
        /*  $vali = $request->validate([
            'teacherName' => 'required',
            'teacherEmail' => 'required',
            'teacherPassword' => [
                'required',
                'min:8',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*#?&]/',
            ],
            'teacherRePassword' => 'required|same:teacherPassword',
        ]); */

        $teacherModal = new Teacher_model();
        $teacherModal->teacher_name = $request->teacherName;
        $teacherModal->teacherEmail = $request->teacherEmail;
        $teacherModal->teacherPassword = $request->teacherPassword;
        $teacherModal->save();
        //return redirect('/');
    }
}
