<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;
use Storage;
class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        return view('admin.photos.create')->with('album_id',$id);
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
            'name' =>'required|max:199',
            'photo' =>'required|image|max:1999',
        ));

        if($request->hasfile('photo'))
        {
            $image = $request->file('photo');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('photo')->storeAs('public/photos/'.$request->album_id,$filename);

         }
         $photo = new Photo;
       
         $photo->name=$request->name;
         $photo->description=$request->description;
         $photo->size=$request->file('photo')->getClientSize();
         $photo->photo=$filename;
         $photo->album_id=$request->album_id;
         $photo->save();

         return redirect(route('album.show',$request->album_id))->with('success','Photo Uploaded Successfully');
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
        
   
        
        $photo =Photo::find($id);
    
        if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo))
        {
            $photo->delete();
          
        }
        
      
       
     
    }
}
