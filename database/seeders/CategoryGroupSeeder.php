<?php

namespace Database\Seeders;

use App\Models\Admin\CategoryGroup;
use Illuminate\Database\Seeder;

class CategoryGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryGroup::create([
            'name'=> 'Screen Size',
            'category_id' => 1,
            'parent_id' => null
        ]);
        CategoryGroup::create([
            'name' => '6"',
            'category_id' => 1,
            'parent_id' => 1
        ]);
        CategoryGroup::create([
            'name' => '6.5"',
            'category_id' => 1,
            'parent_id' => 1
        ]);
        CategoryGroup::create([
            'name' => '6.8"',
            'category_id' => 1,
            'parent_id' => 1
        ]);
        CategoryGroup::create([
            'name' => '7"',
            'category_id' => 1,
            'parent_id' => 1
        ]);
    }
}
