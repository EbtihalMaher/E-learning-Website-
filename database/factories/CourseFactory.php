<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence('3'),
            'description'=>$this->faker->text(),
            'duration_hours' => $this->faker->randomElement(['4 weeks', '6 weeks', '8 weeks']),
            'level'=>$this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'image_url'=>$this->faker->imageUrl(),
        ];
    }
}
