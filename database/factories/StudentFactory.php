<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'nickname' => fake()->userName,
            'grade_number' => fake()->numberBetween(1, 12),
            'phone' => fake()->phoneNumber,
            'sosmed' => fake()->userName,
            'email' => fake()->unique()->safeEmail,
            'password' => bcrypt('password'), // You should hash passwords appropriately in a real application
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'birthdate' => fake()->date,
            'nationality' => fake()->country,
            'address' => fake()->streetAddress,
            'city' => fake()->city,
            'province' => fake()->state,
            'country' => fake()->country,
            'postcode' => fake()->postcode,
            'photo' => 'default.jpg', // Provide a default image file name
            'note' => fake()->sentence,
            'extracurricular_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
