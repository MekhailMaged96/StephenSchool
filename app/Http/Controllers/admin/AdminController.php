<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Teacher;
use App\Team;
use App\User;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function panel(){
        $posts=Post::all();
        $teachers=Teacher::all();
        $students=User::all();
        $classes=Team::all();
        return view('admin.panel')->withPosts($posts)->withTeachers($teachers)->withStudents($students)->withClasses($classes);
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
