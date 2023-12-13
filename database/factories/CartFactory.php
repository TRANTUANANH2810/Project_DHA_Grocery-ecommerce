<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Cart::class;

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
            'user_id' => function () {
                // You may modify this logic to get a valid user_id
                return \App\Models\User::factory()->create()->id;
            },
            'total_price' => $this->faker->randomFloat(2, 10, 500), // Example: Random price between 10 and 500 with 2 decimal places
            'qty' => $this->faker->numberBetween(1, 10), // Example: Random quantity between 1 and 10
            'comment' => $this->faker->text, // You may customize this to generate comments
            'is_active' => $this->faker->boolean,
        ];
    }
}
