<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Teacher;
use App\Team;
use App\User;
class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:teacher');
    }
    public function myclass() {

        $id=Auth::guard('teacher')->user()->id;
        $teacher=Teacher::find($id);
        return view('teacher.myclass')->withTeacher($teacher);
    }
    public function studentsheet($id) {
        $team = Team::find($id);
        return view('teacher.studentsheet')->withTeam($team);;
    }
    public function subjects($id) {

        $team = Team::find($id);
        return view('teacher.subjects')->withTeam($team);
    }
    public function studentgrades($id) {
        $team = Team::find($id);
        return view('teacher.studentgrades')->withTeam($team);
    }
    public function allattend($id){

        $users = User::where('team_id',$id)->get();

       return $users;    
    
    }
    public function addattend(Request $request ,$userid)
    {
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    $user=User::find($userid);

    $user->attendance=$request->attend;
  
    $user->save();
  
     return  $user->attendance; 
    }

}
