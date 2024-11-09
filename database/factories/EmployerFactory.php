<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),         // Generates a company name
            'email' => $this->faker->unique()->safeEmail(), // Generates a unique safe email
            'logo' => $this->faker->imageUrl(),         // Generates a random image URL
        ];
    }
}
