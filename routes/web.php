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

/* home */

Route::get('/','PagesController@home')->name('home'); 
Route::get('/home','PagesController@home')->name('home'); 


/* gallary */
Route::get('/gallary','PagesController@gallary');
Route::get('/album/{id}','PagesController@showAlbum')->name("albums.show");

/* contact */
Route::get('/contact','PagesController@contact');
Route::post('/contact','PagesController@postContact')->name('contact');

/** news **/
Route::get('/news/school/{id}','PagesController@schoolnews')->name('school.news');
Route::get('/news/church/{id}','PagesController@churchnews')->name('church.news');

/*** school ****/
Route::get('/school/system','PagesController@system')->name('school.system');
Route::get('/school/history','PagesController@history')->name('school.history');
Route::get('/school/enrollment','PagesController@enrollment')->name('school.enrollment');
Route::get('/school/schedules','PagesController@schedules')->name('school.schedules');
Route::get('/school/chorus','PagesController@chorus')->name('school.chorus');



/* student */

Route::get('/subject','PagesController@mysubject')->middleware('auth:web')->name('studentsubject');
Route::get('/myresult','PagesController@myresult')->middleware('auth:web')->name('studentresult');

/* roles */
/*
1 : كل الصلاحيات
2 : كشف الطلاب والغياب 
3 : كل جديد و الاخبار و المدرسة
4 : المواد والفصول
5 : درجات الطلاب
6 : super_hero

*/

/* admin */
Route::group(['prefix' => 'admin',  'middleware' => 'auth:admin'], function(){
    Route::get('/panel','admin\AdminController@panel')->name('admin.panel');
    Route::resource('/student','admin\StudentController')->middleware('adminRole:1|6');
    Route::resource('/subject','admin\SubjectController')->middleware('adminRole:1|6|4');

  
    //Route::resource('/class','admin\ClassController');
    /* classes  */
    Route::get('/class','admin\ClassController@index')->name('class.index')->middleware('adminRole:1|6|2|4');
    Route::get('/class/create','admin\ClassController@create')->name('class.create')->middleware('adminRole:1|6|4');
    Route::post('/class','admin\ClassController@store')->name('class.store')->middleware('adminRole:1|6|4');
    Route::get('/class/{id}','admin\ClassController@show')->name('class.show')->middleware('adminRole:1|6|2|4');
    Route::get('/class/{id}/edit','admin\ClassController@edit')->name('class.edit')->middleware('adminRole:1|6|4');
    Route::put('/class/{id}','admin\ClassController@update')->name('class.update')->middleware('adminRole:1|6|4');
    Route::delete('/class/{id}','admin\ClassController@destroy')->name('class.destroy')->middleware('adminRole:1|6|4');

    Route::resource('/teacher','admin\TeacherController')->middleware('adminRole:1|6');
    Route::resource('/readings','admin\ReadingsController');
    Route::resource('/posts','admin\PostController')->middleware('adminRole:1|3|6');
    Route::resource('/gallery','admin\GalleryController')->middleware('adminRole:1|3|6');
  //  Route::resource('/grade','admin\GradeController');
    Route::resource('/year','admin\ResultYearController');
    
    Route::resource('/news/church','admin\ChurchNewsController',['names'=>'news.church'])->middleware('adminRole:1|3|6');
    Route::resource('/news/school','admin\SchoolNewsController',['names'=>'news.school'])->middleware('adminRole:1|3|6');
    Route::resource('/school/settings','admin\SchoolController',['names'=>'school.settings'])->middleware('adminRole:1|3|6');
    Route::resource('/album','admin\AlbumsController')->middleware('adminRole:1|3|6');
    Route::get('/photos/create/{id}','admin\PhotosController@create')->name('photo.create')->middleware('adminRole:1|3|6');
    Route::post('/photos/store','admin\PhotosController@store')->name('photo.store')->middleware('adminRole:1|3|6');
    Route::get('/photos/show/{id}','admin\PhotosController@show')->name('photo.show')->middleware('adminRole:1|3|6');
    Route::post('/photos/destroy/{id}','admin\PhotosController@destroy')->name('photo.destroy')->middleware('adminRole:1|3|6');
    Route::post('/posts/destroy/{id}','admin\PostController@destroy')->name('post.destroy')->middleware('adminRole:1|3|6');
    Route::post('/albums/destroy/{id}','admin\AlbumsController@destroy')->name('album.destroy')->middleware('adminRole:1|3|6');

    //Route::get('/grade/create/{id}','admin\GradeController@create')->name('grade.create');
  
    /* attendance */
    Route::get('/allattend/{id}','admin\ClassController@allattend')->middleware('adminRole:1|2|6');
    Route::post('/addattend/{id}','admin\ClassController@addattend')->middleware('adminRole:1|2|6');

    Route::get('/result/allclasses','admin\GradeController@allclasses')->name('grade.allclasses')->middleware('adminRole:1|5|6');
    Route::get('/result/class/{teamid}','admin\GradeController@index')->name('grade.index')->middleware('adminRole:1|5|6');;
    Route::get('/result/create/class/{teamid}','admin\GradeController@create')->name('grade.create')->middleware('adminRole:1|5|6');
    Route::post('/result/create','admin\GradeController@store')->name('grade.store')->middleware('adminRole:1|5|6');

    Route::resource('/admins/settings','admin\AdminController',['names'=>'admin.settings'])->middleware('adminRole:1|6');

});

/* teacher */

Route::group(['prefix' => 'teacher',  'middleware' => 'auth:teacher'], function(){
 
    Route::get('/myclass','TeacherController@myclass')->name('teacher.myclass');
    Route::get('/studentsheet/{id}','TeacherController@studentsheet')->name('teacher.studentsheet');
    Route::get('/subjects/{id}','TeacherController@subjects')->name('teacher.subjects'); 
    Route::get('/studentgrades/{id}','TeacherController@studentgrades')->name('teacher.studentgrades'); 
    Route::get('/allattend/{id}','TeacherController@allattend');
    Route::post('/addattend/{id}','TeacherController@addattend');
});