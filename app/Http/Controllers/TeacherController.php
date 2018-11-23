<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }
    public function myclass() {

        return view('teacher.myclass');
    }
    public function studentsheet() {

        return view('teacher.studentsheet');
    }
    public function subjects() {

        return view('teacher.subjects');
    }


}
