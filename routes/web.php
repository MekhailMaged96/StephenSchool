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
Route::get('/album/{id}','PagesController@showAlbum')->name("albums.show");
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
    Route::resource('/grade','admin\GradeController');
    
    Route::resource('/news/church','admin\ChurchNewsController',['names'=>'news.church']);
    Route::resource('/news/school','admin\SchoolNewsController',['names'=>'news.school']);
    Route::resource('/album','admin\AlbumsController');
    Route::get('/photos/create/{id}','admin\PhotosController@create')->name('photo.create');
    Route::post('/photos/store','admin\PhotosController@store')->name('photo.store');
    Route::get('/photos/show/{id}','admin\PhotosController@show')->name('photo.show');
    Route::post('/photos/destroy/{id}','admin\PhotosController@destroy')->name('photo.destroy');
    Route::post('/posts/destroy/{id}','admin\PostController@destroy')->name('post.destroy');
    Route::post('/albums/destroy/{id}','admin\AlbumsController@destroy')->name('album.destroy');

    Route::get('/grade/create/{id}','admin\GradeController@create')->name('grade.create');

    Route::get('/allattend/{id}','admin\ClassController@allattend');
    Route::post('/addattend/{id}','admin\ClassController@addattend');


});
Route::prefix('teacher')->group(function() {
 
    Route::get('/myclass','TeacherController@myclass')->name('teacher.myclass');
    Route::get('/studentsheet/{id}','TeacherController@studentsheet')->name('teacher.studentsheet');
    Route::get('/subjects/{id}','TeacherController@subjects')->name('teacher.subjects'); 
    Route::get('/studentgrades/{id}','TeacherController@studentgrades')->name('teacher.studentgrades'); 
    Route::get('/allattend/{id}','TeacherController@allattend');
    Route::post('/addattend/{id}','TeacherController@addattend');
});
