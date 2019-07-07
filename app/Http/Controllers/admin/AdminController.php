<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Teacher;
use App\Team;
use App\User;
use App\SchoolNews;
use App\ChurchNews;
use App\Role;
use App\Admin;
use Hash;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function panel()
    {
        $posts=Post::all();
        $teachers=Teacher::all();
        $students=User::all();
        $classes=Team::all();
        $schoolnews = SchoolNews::all();
        $churchnews = ChurchNews::all();
        return view('admin.panel')->withPosts($posts)->withTeachers($teachers)->withStudents($students)->withClasses($classes)->withSchoolnews($schoolnews)->withChurchnews($churchnews);
    }

    public function users()
     {
        return view('admin.allstudents');
    }

    public function addstudent() 
    {
        return view('admin.addstudent');
    }

    public function editstudent() 
    {
        return view('admin.editstudent');
    }

    public function index()
    {
        $admins = Admin::where('role_id','!=',6)->get()->all();
        return view('admin.admins.index')->withAdmins($admins);
    }

    public function create()
    {
        $roles = Role::where('id','!=',6)->get();
        return view('admin.admins.create')->withRoles($roles);
    }
 
    public function store(Request $request)
    {
     
        $this->validate($request,array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'role_id'=>'required',
        ));
        $admin = new Admin; 
        $admin->name=$request->name;
        $admin->email=$request->email;
        if($admin->password){
            $admin->password=Hash::make($request->password);
        }else {

            $admin->password=Hash::make('stephe@123');
        }

     
         $admin->role_id=$request->role_id;
         $admin->save();       
        return  redirect()->route('admin.settings.index');
    }


    public function edit($id)
    {
        $admin = Admin::find($id);
        if($admin->id!=1){
         return abort(404);
        }
        $roles = Role::where('id','!=',6)->get();
        return  view('admin.admins.edit')->withAdmin($admin)->withRoles($roles);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,array(
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,'.$id,
            'role_id'=>'required',
         //   'phone'=>'regex:/(01)[0-9]{9}/',

        ));
        $admin = Admin::find($id); 
       
      
        

        $admin->name=$request->name;
        $admin->email=$request->email;

    
        if($admin->password){
            $admin->password=Hash::make($request->password);
        }else {

            $admin->password=$admin->password;
        }
     
        $admin->role_id=$request->role_id;

        $admin->save();
 

        
        session()->flash('success', '! تم  تعديل بيانات الادمن بنجاح ');
        return  redirect()->route('admin.settings.index');
    }
}
