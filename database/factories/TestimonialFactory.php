<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'testimonial'=>$this->faker->paragraph(),
            'course_id'=>Course::factory(),
            'rating'=>$this->faker->numberBetween(1,5),
        ];
    }
}
