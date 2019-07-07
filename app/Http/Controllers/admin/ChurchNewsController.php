<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChurchNews;
use Image;
use Storage;
class ChurchNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $churchnews = ChurchNews::all();
        return view('admin.churchnews.index')->with('churchnews',$churchnews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.churchnews.create');
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
        $new= new ChurchNews;

        $new->title = $request->title;
        $new->body = $request->body;
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/news/church/'.$filename);
            Image::make($image)->resize(800,400)->save( $location);
            $new->img=$filename;
        } 


      $new->save();

      return redirect()->route('news.church.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $churchnews = ChurchNews::find($id);
        return view('admin.churchnews.show')->with('churchnews',$churchnews);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $churchnews = ChurchNews::find($id);
        return view('admin.churchnews.edit')->with('churchnews',$churchnews);
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
        $new = ChurchNews::find($id);
        $new->title=$request->title;
        $new->body =$request->body;
        
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/news/church/'.$filename);
            Image::make($image)->resize(800,400)->save( $location);
            // get the old file name 
            $oldfile = $new->img;

            //update the database 
            $new->img= $filename;
          
         
            if($oldfile){
                unlink(public_path('storage/news/church/'.$oldfile));
            }
            //delete the image
     
            //Storage::delete(public_path('storage/news/school/'.$oldfile));
        }
        $new->save();
        session()->flash('success', 'New Successfully Updated!');
        return redirect()->route('news.church.show',$new->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = ChurchNews::find($id);
        if($new->img){

            unlink(public_path('storage/news/church/'.$new->img));
        }
       
        $new->delete();
        
        return "deleted";


    }
}
