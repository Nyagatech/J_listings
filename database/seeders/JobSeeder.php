<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        // Specify how many jobs you want to create
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create an employer
        $employer = Employer::create([
            'user_id' => $user->id,
            'company_name' => 'Acme Corporation',
            'company_description' => 'A leading tech company',
        ]);

        // Create jobs
        $jobs = Job::factory()->count(5)->create([
            'employer_id' => $employer->id,
        ]);
    }
}
