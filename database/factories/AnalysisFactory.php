<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Analysis;
use App\Models\User;

class AnalysisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Analysis::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'analysis_number' => fake()->word(),
            'test_name' => fake()->word(),
            'laboratory_number' => fake()->word(),
            'analysis_date' => fake()->date(),
            'evaluation_date' => fake()->date(),
            'patient_id' => fake()->randomNumber(),
            'doctor_id' => fake()->randomNumber(),
            'lab_id' => fake()->randomNumber(),
            'original_values' => fake()->text(),
            'correction' => fake()->text(),
            'result' => fake()->text(),
            'user_id' => User::factory(),
        ];
    }
}
