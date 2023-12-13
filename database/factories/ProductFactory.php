<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Product::class;

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
            'name' => $this->faker->word, // You may customize this to generate product names
            'image' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 10, 1000), // Example: Random price between 10 and 1000 with 2 decimal places
            'description' => $this->faker->paragraph,
            'is_active' => $this->faker->boolean,
            'qty' => $this->faker->numberBetween(1, 100), // Example: Random quantity between 1 and 100
        ];
    }
}
