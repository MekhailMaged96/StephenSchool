<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Album;
use Storage;
use Image;
class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::with('photos')->get();
        return view('admin.albums.index')->with('albums',$albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.albums.create');
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
      
            'cover_image' =>'required|image|max:1999',
        ));
        if($request->hasfile('cover_image'))
        {
            /*
            $image = $request->file('cover_image');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('cover_image')->storeAs('public/album_covers',$filename);
*/
            $image = $request->file('cover_image');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/album_covers/'.$filename);
            Image::make($image)->resize(1200,800)->save( $location);
           
        }

        $album = new Album;

        $album->name=$request->name;
        $album->description=$request->description;
        $album->cover_image=$filename;
        $album->save();

        return redirect(route('album.index'))->with('success','Album Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::with('photos')->find($id);
        return view('admin.albums.show')->with('album',$album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::find($id);
        return view('admin.albums.edit')->with('album',$album);
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
            'name' =>'required|max:199',
      
            'cover_image' =>'image|max:1999',
        ));
        $album = Album::find($id);
        $album->name=$request->name;
        $album->description=$request->description;

      
        if($request->hasfile('cover_image'))
        {
            /*
            $image = $request->file('cover_image');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('cover_image')->storeAs('public/album_covers',$filename);
*/
            $image = $request->file('cover_image');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/album_covers/'.$filename);
            Image::make($image)->resize(1200,800)->save( $location);
            
            $oldfile=$album->cover_image;
            $album->cover_image= $filename;
            Storage::delete('public/album_covers'.$oldfile);
           
        }

        $album->save();

        return redirect(route('album.index'))->with('success','Album Edited Successfully');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);
     
        $album->delete();
        Storage::delete('public/album_covers/'.$album->cover_image);
        return $id;
          
        
        
    }
}
