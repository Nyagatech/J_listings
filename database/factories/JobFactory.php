<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer; // Make sure to import the Employer model

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),                        // Generate a job title
            'description' => $this->faker->text(),                      // Generate job description
            'salary' => $this->faker->numberBetween(30000, 150000),     // Generate a salary within a range
            'job_type' => $this->faker->randomElement(['full-time', 'part-time', 'contract', 'temporary']), // Generate a random job type
            'location' => $this->faker->city(),                         // Generate a city name for location
            'url' => $this->faker->url(),                               // Generate a random URL
            'featured' => $this->faker->boolean(),                      // Generate a boolean value for featured
            'employer_id' => Employer::factory(),                       // Use the Employer factory to create an employer
        ];
    }
}
