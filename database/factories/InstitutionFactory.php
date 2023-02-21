<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class InstitutionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'institute-'.$this->faker->numberBetween(1,100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
