<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\AttributeValue::class;

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
            'product_id' => function () {
                // You may modify this logic to get a valid product_id
                return \App\Models\Product::factory()->create()->id;
            },
            'attribute_id' => function () {
                // You may modify this logic to get a valid attribute_id
                return \App\Models\CategoryAttribute::factory()->create()->id;
            },
            'value' => $this->faker->text, // You may customize this to generate attribute values
        ];
    }
}
