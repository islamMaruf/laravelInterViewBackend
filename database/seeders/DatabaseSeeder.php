<?php

namespace Database\Seeders;

use App\Models\Institution;
use App\Models\Student;
use App\Models\StudentAttribute;
use Database\Factories\InstitutionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Institution::factory(5)
            ->has(Student::factory(20))
            ->has(StudentAttribute::factory(20))->create();

        $students = Student::where('institution_id', 1)->get();
        $attributes = StudentAttribute::where('institution_id', 1)->get();
        foreach ($students as $student) {
            $student->studentAttribute()->attach($attributes->random(), ['value' => 'random_value-' . rand(1, 500)]);
        }

    }
}
