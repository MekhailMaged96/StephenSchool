<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact() {

        return view('pages.contact');
    }
    public function gallary() {

        return view('pages.gallary');
    }
    public function home() {
        return view('pages.home');
    }
    public function mysubject() {

        return view('pages.subjects');
    }
    public function myresult() {

        return view('pages.myresult');
    }
}
