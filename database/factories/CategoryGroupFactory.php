<?php

namespace Database\Factories\Admin;

use App\Models\Admin\CategoryGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryGroup::class;

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
        'parent_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
