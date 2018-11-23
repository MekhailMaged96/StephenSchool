<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Auth;
use App\Admin;
use App\Teacher;
use Request;
use Password;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function broker()
    {
        $admin = Admin::where('email',request('email'))->first();
        $teacher = Teacher::where('email',request('email'))->first();
        if(isset($admin->email)) {
            return Password::broker('admins');

        }elseif(isset($teacher->email)) {
            return Password::broker('teachers');

        }else {
            return Password::broker('users');
        } 

      
  
     
    }
   protected function guard()
    {
        $admin = Admin::where('email',request('email'))->first();
        $teacher = Teacher::where('email',request('email'))->first();
        if(isset($admin->email)) {
            return Auth::guard('admin');

        }elseif(isset($teacher->email)) {
            return Auth::guard('teacher');

        }else {
            return Auth::guard('web');
        }
      
    }
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:teacher');
    }
}
