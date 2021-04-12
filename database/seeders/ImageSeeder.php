<?php

namespace Database\Seeders;

use App\Models\Admin\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'url' => '//ae01.alicdn.com/kf/H9ed21a150c6540dab18cf802e9735ac2R.png',
            'type' => 'card',
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Post',
            'admin_id' => 1,
        ]);

        Image::create([
            'url' => '//ae01.alicdn.com/kf/U0aec50b4ffe241179d2595d7164a547dq/Galay-S21-Ultra-7-2-Inch-Smartphone-5800mAh-Unlock-Global-Version-4G-5G-Android-10-0.jpg_220x220xz.jpg_.webp',
            'type' => 'card',
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 1,
        ]);

        $rand = random_int(0, 2147483647);
        Image::create([
            'url' => 'https://ae01.alicdn.com/kf/U0aec50b4ffe241179d2595d7164a547dq/Galay-S21-Ultra-7-2-Inch-Smartphone-5800mAh-Unlock-Global-Version-4G-5G-Android-10-0.jpg_50x50.jpg_.webp',
            'type' => 'main-thumbnail-'.$rand,
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 1,
        ]);
        Image::create([
            'url' => 'https://ae01.alicdn.com/kf/Ue1e726334a5a4853b49ae82fec24d033X/Galay-S21-Ultra-7-2-Inch-Smartphone-5800mAh-Unlock-Global-Version-4G-5G-Android-10-0.jpg_Q90.jpg_.webp',
            'type' => 'main-image-'.$rand,
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 1,
        ]);

        $rand = random_int(0, 2147483647);
        Image::create([
            'url' => 'https://ae01.alicdn.com/kf/Uda1ad1e86e5a42afb29d32cc01a14854o/Galay-S21-Ultra-7-2-Inch-Smartphone-5800mAh-Unlock-Global-Version-4G-5G-Android-10-0.jpg_50x50.jpg_.webp',
            'type' => 'other-thumbnail-' . $rand,
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 2,
        ]);
        Image::create([
            'url' => 'https://ae01.alicdn.com/kf/Uda1ad1e86e5a42afb29d32cc01a14854o/Galay-S21-Ultra-7-2-Inch-Smartphone-5800mAh-Unlock-Global-Version-4G-5G-Android-10-0.jpg_Q90.jpg_.webp',
            'type' => 'other-images-' . $rand,
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 3,
        ]);

        $rand = random_int(0, 2147483647);
        Image::create([
            'url' => 'https://ae01.alicdn.com/kf/U79c1acdee06742e4ad2c54635fa086f4g/Galay-S21-Ultra-7-2-Inch-Smartphone-5800mAh-Unlock-Global-Version-4G-5G-Android-10-0.jpg_50x50.jpg_.webp',
            'type' => 'other-thumbnail-' . $rand,
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 3,
        ]);
        Image::create([
            'url' => 'https://ae01.alicdn.com/kf/U79c1acdee06742e4ad2c54635fa086f4g/Galay-S21-Ultra-7-2-Inch-Smartphone-5800mAh-Unlock-Global-Version-4G-5G-Android-10-0.jpg_Q90.jpg_.webp',
            'type' => 'other-images-' . $rand,
            'imageable_id' => 1,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 3,
        ]);

        Image::create([
            'url' => '//ae01.alicdn.com/kf/Haacaebb9be184c9da58925f87ea18ab04/OnePlus-Nord-N10-5G-OnePlus-Official-Store-World-Premiere-Global-Version-6GB-128GB-Snapdragon-690-Smartphone.jpg_220x220xz.jpg_.webp',
            'type' => 'card' ,
            'imageable_id' => 2,
            'imageable_type' => 'App\Models\Admin\Product',
            'admin_id' => 1,
        ]);


        // Image::create([
        //     'url' => '',
        //     'type' => '',
        //     'imageable_id' => 1,
        //     'imageable_type' => '',
        //     'admin_id' => 1,
        // ]);
    }
}
