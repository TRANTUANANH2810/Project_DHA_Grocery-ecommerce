<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\CartDetail::class;

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
            'product_id' => function () {
                // You may modify this logic to get a valid product_id
                return \App\Models\Product::factory()->create()->id;
            },
            'price' => $this->faker->randomFloat(2, 5, 200), // Example: Random price between 5 and 200 with 2 decimal places
            'qty' => $this->faker->numberBetween(1, 5), // Example: Random quantity between 1 and 5
        ];
    }
}
