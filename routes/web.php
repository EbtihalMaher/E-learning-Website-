<?php

use App\Models\Course;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/courses', function () {
    $courses = Course::latest()->simplepaginate(6);
    return view('courses.index',[
        'courses' => $courses
    ]);
});

Route::get('/courses/{id}', function ($id) {
    $course = Course::find($id);
    return view('courses.show',['course' => $course]);
});

Route::post('/contact',function (){
    request()->validate([
        'name' => ['required','string','max:255','min:3'],
        'email' => ['required','email'],
        'message' => ['required','string','min:3'],
    ]);
    ContactMessage::create([
        'name' => request('name'),
        'email' => request('email'),
        'message' => request('message')
    ]);
    return redirect('/contact');
});

Route::get('/contact', function () {
    return view('contact');
});
