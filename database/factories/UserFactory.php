<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'avatar' => fake()->word(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'username' => fake()->userName(),
            'trial_ends_at' => fake()->dateTime(),
            'verification_code' => fake()->word(),
            'verified' => fake()->numberBetween(-8, 8),
            'phone' => fake()->phoneNumber(),
            'address1' => fake()->streetAddress(),
            'address2' => fake()->secondaryAddress(),
            'zip' => fake()->postcode(),
            'city' => fake()->city(),
            'country' => fake()->country(),
            'state' => fake()->word(),
            'language' => fake()->word(),
            'timezone' => fake()->word(),
            'currency' => fake()->word(),
            'stripe_id' => fake()->word(),
            'card_brand' => fake()->word(),
            'card_last_four' => fake()->word(),
            'role' => fake()->randomElement(["admin","lab","doctor","patient"]),
            'lab_id' => fake()->randomNumber(),
            'doctor_id' => fake()->randomNumber(),
            'patient_number' => fake()->word(),
            'birthdate' => fake()->date(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
