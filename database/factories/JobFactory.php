<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employer;
use App\Models\Job;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'Employer_id' => Employer::factory(),
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'salary' => $this->faker->word(),
            'job_type' => $this->faker->word(),
            'location' => $this->faker->word(),
            'company' => $this->faker->company(),
            'url' => $this->faker->url(),
            'employer_id' => Employer::factory(),
        ];
    }
}
