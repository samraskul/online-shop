<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=> 'Mobile' , 'type' => 'product']);
        Category::create(['name'=> 'Smartphones Accessories' , 'type' => 'product']);
        Category::create(['name'=> 'Electronics' , 'type' => 'product']);
        Category::create(['name'=> 'Computers & Networking' , 'type' => 'product']);
        Category::create(['name'=> 'Car Accessories' , 'type' => 'product']);
        Category::create(['name'=> 'Lights & Lighting' , 'type' => 'product']);
        Category::create(['name'=> 'Home & Office' , 'type' => 'product']);
        Category::create(['name'=> 'Sports & Outdoors' , 'type' => 'product']);
        Category::create(['name'=> 'Apparel & Accessories' , 'type' => 'product']);
        Category::create(['name'=> 'Intimate Apparel' , 'type' => 'product']);
        Category::create(['name'=> 'Health & Beauty' , 'type' => 'product']);
        Category::create(['name'=> 'Toys & Hobbies' , 'type' => 'product']);
        Category::create(['name'=> 'Cameras & Camcorders' , 'type' => 'product']);
        Category::create(['name'=> 'Jewelry & Watches' , 'type' => 'product']);

        Category::create(['name'=>'On trend' , 'type' => 'post']);
        Category::create(['name'=>'Style' , 'type' => 'post']);
        Category::create(['name'=>'Tech' , 'type' => 'post']);
        Category::create(['name'=>'Home' , 'type' => 'post']);
        Category::create(['name'=>'Family' , 'type' => 'post']);
        Category::create(['name'=>'News' , 'type' => 'post']);

    }
}
