<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('courses', function () {
    return view('courses');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('instructors', function () {
    return view('instructors');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('blog-details', function () {
    return view('blog-details');
});
Route::get('regular-page', function () {
    return view('regular-page');
});

Auth::routes();

Route::get('/showcourses/{id}','CourseController@showCategoryCourses');
Route::get('/single_course/{id}','CourseController@showSingleCourse');
Route::get('blog','CategoryController@show2');
Route::get('/','CourseController@showPopularCourses');
Route::post('/message', 'contactController@store');
Route::post('/single_course/{id}', 'CourseController@courseregister');

Route::middleware(['auth', 'can:is_admin'])->group(function () {

    Route::get('/admin/', function () {
        return view('admin/index');
    });

    Route::get('/regular-page', function () {
        return redirect('/admin/');
    });

    Route::get('/admin/course/courses', 'courseController@index');
    Route::get('/admin/course/add', 'CourseController@create');
    Route::post('/admin/courses', 'courseController@store');
    Route::get('/admin/course/{co}/edit', 'courseController@edit');
    Route::put('/admin/courses/{co}', 'courseController@update');
    Route::get('/admin/course/{co}/delete', 'courseController@delete');


    Route::get('/admin/{con}/curriculum', 'contentController@curriculum');
    Route::get('/admin/curriculum/{co}/add', 'contentController@create');
    Route::post('/admin/add/curriculum/{co}', 'contentController@store');
    Route::get('/admin/curriculum/{con}/edit', 'contentController@edit');
    Route::put('/admin/edit/curriculum/{con}', 'contentController@update');
    Route::get('/admin/curriculum/{con}/delete', 'contentController@delete');

    Route::get('/admin/mailbox', 'contactController@messages');
    Route::get('/admin/mailbox/{con}/delete', 'contactController@delete');

});


