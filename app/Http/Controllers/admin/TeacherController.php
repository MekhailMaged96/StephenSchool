<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Teacher;
use App\Team;
use Hash;
use DB;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $teachers= Teacher::all();
    
      
        return view('admin.teachers.index')->with('teachers',$teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $teams =Team::all();
        return view('admin.teachers.create')->with('teams',$teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',


        ));
        $teacher = new Teacher; 
        $teacher->name=$request->name;
        $teacher->email=$request->email;
        if($teacher->password){
            $teacher->password=Hash::make($request->password);
        }else {

            $teacher->password=Hash::make('123456');
        }
           
        $teacher->phone=$request->phone;
        $i=explode(',',$request->teams);
        $teacher->save();
        if($request->teams){
            $teacher->teams()->sync($i,false);
        }
  

        
        session()->flash('success', '! تم انشاء بيانات الخادم بنجاح ');
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        //$teacher = Teacher::find($id)->orderBy('created_at','desc')->first()->toarray();
        
       $teacher = Teacher::find($id)->toArray();
        return $teacher;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $teams = Team::all();
        return view('admin.teachers.edit')->with('teacher',$teacher)->with('teams',$teams);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,array(
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
           

        ));
        $teacher = Teacher::find($id); 
       
      
        

        $teacher ->name=$request->name;
        $teacher ->email=$request->email;

    
        if($teacher ->password){
            $teacher ->password=Hash::make($request->password);
        }else {

            $teacher->password=$teacher->password;
        }
        $teacher ->phone=$request->phone;
        
        $i=explode(',',$request->teams);
        $teacher ->save();

        if($request->teams){
            $teacher->teams()->sync($i);
        }

        session()->flash('success', '! تم  تعديل بيانات الخادم بنجاح ');
        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher =Teacher::find($id);

        $teacher->delete();
        return  $id;
    }
}
