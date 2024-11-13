<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        // Specify how many jobs you want to create
        Job::factory()->count(50)->create(); // This will create 50 fake jobs
    }
}
