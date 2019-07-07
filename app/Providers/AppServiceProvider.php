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

        /* database string length */
        Schema::defaultStringLength(191);

        /* gurads check */
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


        /* admin roles */

        Blade::if('issuper',function (){

            if(Auth::guard('admin')->user()->role->id==1 || Auth::guard('admin')->user()->role->id==6 ){
                return true;
            }
            else {
                return false;
            }
        });

        Blade::if('isattendance',function (){

            if(Auth::guard('admin')->user()->role->id==2 || Auth::guard('admin')->user()->role->id==6 || Auth::guard('admin')->user()->role->id==1){
                return true;
            }
            else {
                return false;
            }
        });

        Blade::if('isposts',function (){

            if(Auth::guard('admin')->user()->role->id==3 || Auth::guard('admin')->user()->role->id==6 || Auth::guard('admin')->user()->role->id==1){
                return true;
            }
            else {
                return false;
            }
        });

        Blade::if('isteams',function (){

            if(Auth::guard('admin')->user()->role->id==4 || Auth::guard('admin')->user()->role->id==6 || Auth::guard('admin')->user()->role->id==1){
                return true;
            }
            else {
                return false;
            }
        });

        Blade::if('isgrades',function (){

            if(Auth::guard('admin')->user()->role->id == 5 || Auth::guard('admin')->user()->role->id==6 || Auth::guard('admin')->user()->role->id==1){
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
