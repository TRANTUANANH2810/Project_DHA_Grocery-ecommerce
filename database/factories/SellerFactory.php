<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class SellerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Seller::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'user_name' => $this->faker->userName,
            'password_hash' => Hash::make('password'), // You may want to generate a secure password using Hash::make
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->text,
            'phone' => $this->faker->phoneNumber,
            'image' => $this->faker->text,
        ];
    }
}
