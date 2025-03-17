<?php

namespace Database\Seeders;

use App\Models\Analysis;
use Illuminate\Database\Seeder;

class AnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Analysis::factory()->count(5)->create();
    }
}
