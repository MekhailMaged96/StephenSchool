<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\School;
use Illuminate\Support\Facades\Storage;
use Session;
use Purifier;
use Image;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools= School::all();
        return view('admin.school.index')->withSchools($schools);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.school.create');
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
            'title' =>'max:199',
            'type'  =>'required',
            'img'=>'image',
        ));
        $school= new School;

        $school->title = $request->title;
        $school->body = $request->body;
        $school->type = $request->type;
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/school/'.$filename);
            Image::make($image)->resize(800,400)->save( $location);
            $school->img=$filename;
        } 

       
        $school->save();

        return redirect()->route('school.settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::find($id);
        return view('admin.school.show')->withSchool($school);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);
        return view('admin.school.edit')->withSchool($school);
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
            'title' =>'max:199',
            'type'  =>'required',
            'img'=>'image',
        ));
        $school = School::find($id);
        $school->title=$request->title;
        $school->body =$request->body;
        $school->type =$request->type;
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/school/'.$filename);
            Image::make($image)->resize(800,400)->save( $location);
            
            $oldfile = $school->img;
            //update the database 
            $school->img= $filename;
          
            if($oldfile){
                //delete the image
            unlink(public_path('storage/school/'.$oldfile));
            }
        
        
            //Storage::delete(public_path('storage/news/school/'.$oldfile));
        }
        $school->save();
        session()->flash('success', 'New Successfully Updated!');
        return redirect()->route('school.settings.show',$school->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);


        if($school->img){
            unlink(public_path('storage/school/'.$school->img));
        }
        $school->delete();
        return "deleted";
    }
}
