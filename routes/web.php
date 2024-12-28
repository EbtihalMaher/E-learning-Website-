<?php

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);

//Route::controller(CourseController::class)->group(function () {
//    Route::get('/courses', 'index');
//    Route::get('/courses/{course}', 'show');
//});

Route::resource('courses', CourseController::class, ['only' => ['index', 'show']]);

//Route::controller(ContactMessageController::class)->group(function () {
//    Route::get('/contact-messages/create', 'create');
//    Route::post('/contact-messages', 'store');
//});

Route::resource('contact-messages', ContactMessageController::class, ['only' => ['create', 'store']]);

