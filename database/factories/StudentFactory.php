<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'class' => 'class-' . $this->faker->numberBetween(1, 10),
            'name' => $this->faker->firstName() ." ".$this->faker->lastName(),
            'status' => $this->faker->numberBetween(1, 3),
            'email'=>$this->faker->safeEmail(),
            'contract_number'=> $this->faker->phoneNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
