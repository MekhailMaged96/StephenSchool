<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request) {
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'min:6|required',
        ]);
        if(Auth::guard('admin')->attempt(['email'=>request('email'),'password' =>request('password')],$request->remember))
        {
            return redirect()->intended(route('home'));
        } else if(Auth::guard('web')->attempt(['email'=>request('email'),'password' =>request('password')],$request->remember))
        {

            return redirect()->intended(route('home'));
        }else if(Auth::guard('teacher')->attempt(['email'=>request('email'),'password' =>request('password')],$request->remember)) {
            return redirect()->intended(route('home'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
        
        
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:teacher')->except('logout');
    }
  
}
