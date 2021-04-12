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
        'category_id' => $this->faker->word,
        'is_active' => $this->faker->word,
        'admin_id' => $this->faker->word,
        'price' => $this->faker->randomDigitNotNull,
        'discount' => $this->faker->randomDigitNotNull,
        'short_description' => $this->faker->word,
        'long_description' => $this->faker->word,
        'specification' => $this->faker->word,
        'is_available' => $this->faker->word,
        'views' => $this->faker->word,
        'stock' => $this->faker->randomDigitNotNull,
        'rate' => $this->faker->randomDigitNotNull,
        'produce_date' => $this->faker->word,
        'brand' => $this->faker->word,
        'model' => $this->faker->word,
        'color' => $this->faker->word,
        'size' => $this->faker->word,
        'material' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
