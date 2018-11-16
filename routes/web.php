<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','PagesController@home'); 
Route::get('/home','PagesController@home'); 
Route::get('/gallary','PagesController@gallary');


Route::get('/subject','PagesController@mysubject')->middleware('auth')->name('studentsubject');
Route::get('/myresult','PagesController@myresult')->middleware('auth')->name('studentresult');


Route::group(['middleware' => ['admin']], function () {
  
    Route::get('/contact','PagesController@contact');
  
});
Route::group(['middleware' => ['teacher']], function () {

});
Auth::routes();