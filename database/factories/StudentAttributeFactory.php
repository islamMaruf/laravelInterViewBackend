<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StudentAttributeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => 'attribute-'.$this->faker->numberBetween(1,100),
            'type' => $this->faker->numberBetween(1,4),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
