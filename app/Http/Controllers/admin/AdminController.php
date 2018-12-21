<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function panel(){
        return view('admin.panel');
    }
    public function users() {
        return view('admin.allstudents');
    }
    public function addstudent() {
        return view('admin.addstudent');
    }
    public function editstudent() {
        return view('admin.editstudent');
    }
}
