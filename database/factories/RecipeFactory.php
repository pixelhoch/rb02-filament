<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Recipe;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'subtitle' => fake()->word(),
            'serving' => fake()->numberBetween(-10000, 10000),
            'language' => fake()->word(),
            'images' => '{}',
            'description' => fake()->text(),
            'difficulty' => fake()->randomElement(["einfach","mittel","schwierig"]),
            'diet' => fake()->randomElement(["vegan","vegetarisch"]),
            'time' => fake()->randomElement(["Bis 30 Minuten","Bis 60 Minuten","Bis 2 Stunden","Mehr als 2 Stunden"]),
        ];
    }
}
