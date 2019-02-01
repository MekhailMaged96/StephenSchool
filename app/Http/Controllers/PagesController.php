<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Album;
use App\User;
class PagesController extends Controller
{
    public function contact() {

        return view('pages.contact');
    }
    public function gallary() {
        $albums= Album::all();
        return view('pages.albums')->with("albums",$albums);
    }
    public function showAlbum($id){
        $album = Album::with('photos')->find($id);
         return view('pages.showAlbum')->with('album',$album);
    }
    public function home() {

        $posts =Post::all();
        return view('pages.home')->with('posts',$posts);
    }

    public function mysubject() {
        /*
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        */

        $user=User::find(auth('web')->user()->id);
        return view('pages.subjects')->withUser($user);
    }
    public function myresult() {
        $user=User::find(auth('web')->user()->id);
        return view('pages.myresult')->withUser($user);
    }
    
}
