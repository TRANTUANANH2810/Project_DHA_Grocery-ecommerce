<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Order::class;

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
            'cart_id' => function () {
                // You may modify this logic to get a valid cart_id
                return \App\Models\Cart::factory()->create()->id;
            },
            'user_id' => function () {
                // You may modify this logic to get a valid user_id
                return \App\Models\User::factory()->create()->id;
            },
            'status' => $this->faker->word, // You may customize this to generate order statuses
            'total_price' => $this->faker->randomFloat(2, 10, 1000), // Example: Random price between 10 and 1000 with 2 decimal places
            'qty' => $this->faker->numberBetween(1, 10), // Example: Random quantity between 1 and 10
        ];
    }
}
