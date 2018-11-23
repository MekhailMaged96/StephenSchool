<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::if('isadmin',function (){
            if(Auth::guard('admin')->check()){
                return true;
            }
            else {
                return false;
            }
        });
        Blade::if('isstudent',function (){
            if(Auth::guard('web')->check()){
                return true;
            }
            else {
                return false;
            }
        });
        Blade::if('isteacher',function (){
            if(Auth::guard('teacher')->check()){
                return true;
            }
            else {
                return false;
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
