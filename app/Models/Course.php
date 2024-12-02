<?php

namespace App\Models;

use Illuminate\Support\Arr;
use phpDocumentor\Reflection\Types\Static_;

class Course
{
    public static function all():array
    {
        return [
            [
                'id' => 1,
                'title' => 'AI for Beginners',
                'duration' => '4 weeks',
                'instructor' => 'Dr. John Smith',
                'price' => '99$'
            ],
            [
                'id' => 2,
                'title' => 'Advanced AI Techniques',
                'duration' => '6 weeks',
                'instructor' => 'Dr. Jane Doe',
                'price' => '149$'
            ],
            [
                'id' => 3,
                'title' => 'AI for Data Science',
                'duration' => '5 weeks',
                'instructor' => 'Prof. Alan Turing',
                'price' => '129$'
            ]
        ];
    }

    public static function find(int $id):array{
        $course = Arr::first( Static::all(), fn($course) => $course['id'] == $id);
        if (!$course) {
            abort(404, 'Course not found');
        }
        else{
            return $course;
        }
    }
}
