<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'employee_no' => fake()->randomNumber(),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'date_of_birth' => fake()->date('Y-m-d', 'now'),
            'place_of_birth' => fake()->city(),
            'gender' => fake()->randomElement(['male', 'female']),
            'marital_status' => fake()->randomElement(['single','married','single-parent']),
            'religion' => fake()->randomElement(['moslem','catholic','christian','budhist','hindu','konghucu']),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'permanent_address' => fake()->address(),
            'city_permanent_address' => fake()->city(),
            'correspondence_address' => fake()->address(),
            'city_correspondence_address' => fake()->city(),
            'id_no' => fake()->randomNumber(),
            'passport_no' => fake()->randomNumber(),
            'jamsostek_no' => fake()->randomNumber(),
            'tax_status' => fake()->randomElement(['tk0','tk1','tk2','tk3','k0','k1','k2','k3']),
            'bank_name' => 'mandiri',
            'bank_address' => fake()->city(),
            'bank_account' => fake()->randomNumber(),
            'bank_account_name' => fake()->name(),
            'bank_code' => 35,
        ];
    }
}
