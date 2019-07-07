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
            'rank' =>'max:255',
            'address'=>'max:255',
        

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

    
        if($request->class){
            $team = Team::find($request->class);
            if($team->subjects){
                $user->subjects()->sync($team->subjects,false);
            }
        }

     

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
            'rank' =>'max:255',
            'address'=>'max:255',
         

        ));
        $user = User::find($id); 
        $Team_id= $user->team_id;
      
        

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
        if($request->class){
            $team = Team::find($request->class);
            if($team->subjects){
                $user->subjects()->sync($team->subjects,true);
            }else {
                $user->subjects()->sync(array());
            }
        }
        if(is_null($request->class)){
       
                if($user->subjects){
                    $user->subjects()->detach();
                }else {
                    $user->subjects()->sync(array());
                }
            
          
        }

        
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
        $user->subjects()->detach();
        $user->delete();
        
        return "deleted";
    }
}
