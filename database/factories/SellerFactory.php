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
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'shop_name' => $this->faker->shopName,
            'shop_address' => $this->faker->text,
            'wallet' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
