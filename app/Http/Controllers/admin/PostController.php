<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Image;
use Storage;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
            $posts =Post::all();
        return view('admin.posts.index')->with('posts',$posts);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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
        $post = new Post;
        $post->title=$request->title;
        $post->body =$request->body;
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(800,600)->save( $location);
            $post->img= $filename;
        }
        $post->save();
        session()->flash('success', '! تم انشاء كل جديد بنجاح ');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit')->with('post',$post);
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
        $post = Post::find($id);
        $post->title=$request->title;
        $post->body =$request->body;
        
        if($request->hasfile('img'))
        {
            $image = $request->file('img');
            $filename= time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(400,400)->save( $location);
            
            $oldfile = $post->img;
            //update the database 
            $post->img= $filename;
          
            //delete the image
           // Storage::delete($oldfile);
           if($oldfile){
            unlink(public_path('images/'.$oldfile));
           }
          
        }
        $post->save();
        session()->flash('success', '! تم تعديل كل جديد بنجاح ');
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $post = Post::find($id);
        if($post->img){
            unlink(public_path('images/'.$post->img));
        }
   
        
        $post->delete();
       
        return $id;
       
        
    }
}
