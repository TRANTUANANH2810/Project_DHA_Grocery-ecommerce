<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryAttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\CategoryAttribute::class;

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
            'category_id' => function () {
                // You may modify this logic to get a valid category_id
                return \App\Models\Category::factory()->create()->id;
            },
            'seller_id' => function () {
                // You may modify this logic to get a valid seller_id
                return \App\Models\Seller::factory()->create()->id;
            },
            'name' => $this->faker->word, // You may customize this to generate attribute names
            'display_name' => $this->faker->word,
            'is_active' => $this->faker->boolean,
        ];
    }
}
