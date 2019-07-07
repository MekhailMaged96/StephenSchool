<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Album;
use App\User;
use App\SchoolNews;
use App\ChurchNews;
use App\School;
use Mail;
class PagesController extends Controller
{
    public function contact() {

        return view('pages.contact');
    }
    public function schoolnews($id) {

        $schoolnew = SchoolNews::find($id);
        return view('pages.news.school')->with('schoolnew',$schoolnew);
    }
    public function churchnews($id) {

        $churchnew = ChurchNews::find($id);
        return view('pages.news.church')->with('churchnew',$churchnew);
    }
    public function gallary() {
        $albums = Album::with('photos')->orderBy('id', 'DESC')->get();
        return view('pages.albums')->with("albums",$albums);
    }
    public function showAlbum($id){
        $album = Album::with('photos')->find($id);
         return view('pages.showAlbum')->with('album',$album);
    }
    public function home() {

        $posts =Post::all();
        $schoolnews =SchoolNews::all();
        $churchnews =ChurchNews::all();
        return view('pages.home')->with('posts',$posts)->with('schoolnews',$schoolnews)->with('churchnews',$churchnews);
    }
    public function system(){
        $schools = School::where('type',"system")->get();

    
       return view('pages.school.system')->withSchools($schools);
    }
    public function history(){
        $schools = School::where('type',"history")->get();
        return view('pages.school.history')->withSchools($schools);
    }
    public function enrollment(){
        $schools = School::where('type',"enrollment")->get();
        return view('pages.school.enrollment')->withSchools($schools);;
    }
    public function schedules (){
        $schools = School::where('type',"schedules")->get();
        return view('pages.school.schedules')->withSchools($schools);
    }
    public function  chorus () {
        return view('pages.school.chorus');
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
    public function postContact(Request $request) {
      
        $data = array(
            'email' =>$request->email,
            'messageBody' =>$request->message,
            'subject' =>$request->subject
        );
        Mail::send('email.contact',$data,function($messsage) use ($data)
        {
            $messsage->from($data['email']);
            $messsage->to('mekhailmaged@gmail.com');
            $messsage->subject($data['subject']);
        });
       return redirect('/');
    }
    
}
