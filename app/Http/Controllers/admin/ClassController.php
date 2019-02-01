<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use App\User;
use App\Subject;


use Carbon\Carbon;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $classes= Team::all();
  

        return view('admin.classes.index')->with('classes',$classes);
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects= Subject::all();
        return view('admin.classes.create')->with('subjects',$subjects);
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
            'name' =>'max:199',
           
       
        ));
        $class = new Team;
        $class->name=$request->name;
        $class->date=$request->date;
        $i=explode(',',$request->subjects);
        $class->save();
        if($request->subjects){
            $class->subjects()->sync($i,false);
        }
       
       
    

        return redirect()->route('class.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);
        return view('admin.classes.show')->with('team',$team);
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
    public function edit($id)
    {

 
        $subjects = Subject::all();
        $team= Team::where('id',$id)->with('subjects')->first();
       // dd($team->subjects->pluck('id'));
        return view('admin.classes.edit')->with('team',$team)->with('subjects',$subjects);
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
            'name' =>'max:199',
           
       
        ));
        $class =Team::find($id);
        $class->name=$request->name;
        $class->date=$request->date;
        $i=explode(',',$request->subjects);
        $class->save();

        if($request->subjects){
            $class->subjects()->sync($i);
        }
        return redirect()->route('class.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        //
    }
}
