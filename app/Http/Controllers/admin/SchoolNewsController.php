<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SchoolNews;
use Illuminate\Support\Facades\Storage;
use Session;
use Purifier;
use Image;

class SchoolNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolnews = SchoolNews::all();
        return view('admin.schoolnews.index')->with('schoolnews',$schoolnews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.schoolnews.create');
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
            'title' =>'required|max:199',
            'body'  =>'required',
            'img'=>'image',
        ));
        $new= new SchoolNews;

        $new->title = $request->title;
        $new->body = $request->body;
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/news/school/'.$filename);
            Image::make($image)->resize(800,400)->save( $location);
            $new->img=$filename;
        } 

  
      $new->save();

      return redirect()->route('news.school.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schoolnews = SchoolNews::find($id);
        return view('admin.schoolnews.show')->with('schoolnews',$schoolnews);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schoolnews = SchoolNews::find($id);
        return view('admin.schoolnews.edit')->with('schoolnews',$schoolnews);
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
            'title' =>'required|max:199',
            'body'  =>'required',
            'img'=>'image',
        ));
        $new = SchoolNews::find($id);
        $new->title=$request->title;
        $new->body =$request->body;
        
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/news/school/'.$filename);
            Image::make($image)->resize(800,400)->save( $location);
            
            $oldfile = $new->img;
            //update the database 
            $new->img= $filename;

       
            if($oldfile){
                unlink(public_path('storage/news/school/'.$oldfile));
            }
            //delete the image
        
            //Storage::delete(public_path('storage/news/school/'.$oldfile));
        }
        $new->save();
        session()->flash('success', 'New Successfully Updated!');
        return redirect()->route('news.school.show',$new->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $new = SchoolNews::find($id);
        if($new->img){
            unlink(public_path('storage/news/school/'.$new->img));
        }
       
        $new->delete();
       
        return "deleted";
    }
}
