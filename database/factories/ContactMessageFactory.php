<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactMessageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'email'=>$this->faker->unique()->safeEmail(),
            'message'=>$this->faker->realText(),
            'status'=>$this->faker->randomElement(['unread', 'read']),
        ];
    }
}
