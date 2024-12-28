<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::latest()->simplepaginate(6);
        return view('courses.index',[
            'courses' => $courses
        ]);
    }

    public function show(Course $course){
        return view('courses.show',['course' => $course]);
    }
}
