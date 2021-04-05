<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'category_id' => $this->faker->randomDigitNotNull,
        'user_id' => $this->faker->randomDigitNotNull,
        'price' => $this->faker->randomDigitNotNull,
        'discount' => $this->faker->randomDigitNotNull,
        'short_description' => $this->faker->word,
        'long_description' => $this->faker->word,
        'specification' => $this->faker->word,
        'is_available' => $this->faker->word,
        'stock' => $this->faker->randomDigitNotNull,
        'rate' => $this->faker->randomDigitNotNull,
        'produce_date' => $this->faker->date('Y-m-d H:i:s'),
        'brand' => $this->faker->word,
        'model' => $this->faker->word,
        'color' => $this->faker->word,
        'size' => $this->faker->word,
        'material' => $this->faker->word,
        'group' => $this->faker->randomElement(]),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
