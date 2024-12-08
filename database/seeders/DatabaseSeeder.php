<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use App\Models\Course;
use App\Models\Faq;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\UserCourse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create users
        $users = User::factory(5)->create();

        // Create courses
        $courses = Course::factory(5)->create();

        // Create testimonials
        Testimonial::factory(5)->create();

        // Create FAQs
        Faq::factory(5)->create();

        // Create contact messages
        ContactMessage::factory(5)->create();

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
