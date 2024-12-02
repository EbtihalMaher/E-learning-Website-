<?php

use App\Models\Course;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/courses', function () {
    return view('courses',[
        'courses' => Course::all()
    ]);
});

Route::get('courses/{id}', function ($id) {
    $course = Course::find($id);
    return view('course',['course' => $course]);
});

Route::get('/contact', function () {
    return view('contact');
});
