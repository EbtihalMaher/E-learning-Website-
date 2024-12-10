<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            UserCourseSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            ContactMessageSeeder::class,
        ]);
    }
}
