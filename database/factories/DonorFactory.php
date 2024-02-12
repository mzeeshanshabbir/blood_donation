<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donor>
 */
class DonorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'date_of_birth' => fake()->date(),
            'gender' => fake()->boolean(),
            'contact_number' => fake()->e164PhoneNumber(),
            'email' => fake()->unique()->safeEmail() ,
            'blood_type_id' => fake()->uuid(),
            'last_donation_date' => fake()->date(),
            'address' => fake()->address(),
        ];
    }
}
