<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentExtracurricular>
 */
class StudentExtracurricularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id'=> $this->faker->numberBetween(1, 100),
            'extracurricular_id'=> $this->faker->numberBetween(1, 5),
            'satpam_id'=> $this->faker->numberBetween(1, 100),
        ];
    }
}
