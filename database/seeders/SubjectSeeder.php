<?php

namespace Database\Seeders;
namespace App\Models;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        subject::factory()
        ->count(250)
        ->hasTopics(5)
        ->create();
    }
}
