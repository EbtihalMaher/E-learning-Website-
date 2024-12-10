<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use App\Models\UserCourse;
use Illuminate\Database\Seeder;

class UserCourseSeeder extends Seeder
{
    public function run(): void
    {
        $users=User::all();
        $courses=Course::all();

        // Create user_course
        foreach($users as $user) {
            $userCourses = $courses->random(rand(1, 3));
            foreach($userCourses as $course) {
                UserCourse::factory(1)->create([
                    'user_id' => $user->id,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
}
