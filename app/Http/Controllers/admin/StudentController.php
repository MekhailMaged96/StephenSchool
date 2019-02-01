<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Team;
use Hash;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        $teams = Team::all();
      
        return view('admin.students.index')->with('users',$users)->with('teams',$teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('admin.students.create')->with('teams',$teams);
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
            
            'rank' =>'string|max:255',
            'address'=>'string',
            'phone'=>'regex:/(01)[0-9]{9}/',

        ));
        $user = new User; 
        $user->name=$request->name;
        $user->email=$request->email;
        if($user->password){
            $user->password=Hash::make($request->password);
        }else {

            $user->password=Hash::make('123456');
        }
      
        $user->rank=$request->rank;
        $user->address=$request->address;
        $user->phone=$request->phone;
        $user->team_id=$request->class;

        $user->save();
        session()->flash('success', '! تم انشاء بيانات الطالب بنجاح ');
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.students.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $teams = Team::all();
        return view('admin.students.edit')->with('user',$user)->with('teams',$teams);
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
           
            'rank' =>'string|max:255',
            'address'=>'string',
            'phone'=>'regex:/(01)[0-9]{9}/',

        ));
        $user = User::find($id); 
       
      
        

        $user->name=$request->name;
        $user->email=$request->email;

    
        if($user->password){
            $user->password=Hash::make($request->password);
        }else {

            $user->password=$user->password;
        }
      
        $user->rank=$request->rank;
        $user->address=$request->address;
        $user->phone=$request->phone;
     
        $user->team_id=$request->class;

        $user->save();
        session()->flash('success', '! تم  تعديل بيانات الطالب بنجاح ');
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::find($id);

        $user->delete();
        return "deleted";
    }
}
