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

Auth::routes();
Route::get('/','PagesController@home')->name('home'); 
Route::get('/home','PagesController@home')->name('home'); 
Route::get('/gallary','PagesController@gallary');
Route::get('/contact','PagesController@contact');

Route::get('/subject','PagesController@mysubject')->middleware('auth:web')->name('studentsubject');
Route::get('/myresult','PagesController@myresult')->middleware('auth:web')->name('studentresult');




Route::prefix('admin')->group(function() {
    Route::get('/panel','admin\AdminController@panel')->name('admin.panel');
    Route::resource('/student','admin\StudentController');
    Route::resource('/subject','admin\SubjectController');
    Route::resource('/class','admin\ClassController');
    Route::resource('/teacher','admin\TeacherController');
    Route::resource('/posts','admin\PostController');
    Route::resource('/readings','admin\ReadingsController');
    Route::resource('/posts','admin\PostController');
    Route::resource('/gallery','admin\GalleryController');
    Route::resource('/news/church','admin\ChurchNewsController',['names'=>'news.church']);
    Route::resource('/news/school','admin\SchoolNewsController',['names'=>'news.school']);
});
Route::prefix('teacher')->group(function() {
 
    Route::get('/myclass','TeacherController@myclass')->name('teacher.myclass');
    Route::get('/studentsheet','TeacherController@studentsheet')->name('teacher.studentsheet');
    Route::get('/subjects','TeacherController@subjects')->name('teacher.subjects'); 
    Route::get('/studentgrades','TeacherController@studentgrades')->name('teacher.studentgrades'); 

});
