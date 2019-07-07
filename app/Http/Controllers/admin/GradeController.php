<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use App\subject_user;
use Illuminate\Support\Facades\Input;
use App\ResultYears;
class GradeController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allclasses()
    {
        $teams = Team::all();
        return view('admin.grades.allclasses')->withTeams($teams);
    }
    
    public function index($teamid)
    {
        $team = Team::find($teamid);
        return view('admin.grades.index')->withTeam($team);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($teamid)
    {
        $team= Team::find($teamid);
     
        return view('admin.grades.create')->withTeam($team);
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
            'userId' =>'required',
           
       
        ));
        $team_id =$request->teamId;
        $user_id =$request->userId;
        $team =  Team::find($team_id);
        $user = User::find($user_id);

        
        if(count($user->subjects)==0){
        $user->subjects()->sync($team->subjects,false);
        }


        $couresGrade=[];
        $id=0;

        foreach($user->subjects as $course){
        $course->pivot->grade=$request->couresGrade[$id++];
        $course->pivot->save();
       }
        
       
      return redirect()->route('grade.index',$team_id);
       
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
