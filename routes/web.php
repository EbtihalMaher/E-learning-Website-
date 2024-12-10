<?php

use App\Models\Course;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/courses', function () {
    $courses = Course::all();
    return view('courses',[
        'courses' => $courses
    ]);
});

Route::get('courses/{id}', function ($id) {
    $course = Course::find($id);
    return view('course',['course' => $course]);
});

Route::get('/contact', function () {
    return view('contact');
});
