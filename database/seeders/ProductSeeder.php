<?php

namespace Database\Seeders;

use App\Models\Admin\CategoryGroup;
use App\Models\Admin\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => 'Galay S21+ Ultra',
            'category_id' => 1,
            'price' => 230,
            'discount' => 10,
            'short_description' => 'Galay S21+ Ultra 7.2 Inch Smartphone 5800mAh Unlock Global Version 4G 5G Android 10.0 16MP+32MP 12GB+512GB Celulares Smartphone',
            'long_description' => "
            - 7.2inch Full Display<br>
            The Phone delivers the viewingexperience you always wanted, With a massive 86%screen-to-body ratio on a 7.2inch screen<br>
            <br>
            - 16MP Front CameraClear and Stylish Selfies<br>
            The  Phone world-leading 16MP front camera turnsyour every selfe into a work of art Experience greaterbrightness, color vibrancy, clarity and dynamic range.even in the dimmest light, Whenever you needit. your Phone is right there with you, capturing everymoment with crystal-clear precision, Turn your selfiesinto masterpieces and shine in every photo<br>
            <br>
            - Rear HD camera<br>
            The  Phone features a 32MP camera combination. The main camera sportsa large f/1.8 aperture and 1.28um pixels, This strong combination boosts photosensitibityin backlight or low light, Just point and shoot, and Phone will makesure your pictures remain clear and bright<br>
            <br>
            - Powerful Performance<br>
            The MTK6899 mobile platform with 7mm process technology makesyoung people who love the young and stiand other popular games.The game ison and lower<br>
            <br>
            - Android 10.0<br>
            The new interactive design makes the operation simple and simple, the use of themobile Phone is so simple and straightforward, everything is handy<br>
            <br>
            - Dual SIM card + TF card<br>
            Dual card dual standby, card slot does notdistinguish between the main and the deputy, supporting the worlds 50 major communication carrier networks<br>
            <br>
            Specification:Factory direct sales, better quality but lower price is our target and mission!<br>
            <br>
            CPU: MTK6899 Deca Core (Latest 10 Core)<br>
            SIM/TF: 2 SIM Card Slots (Nano SIM) + 1 TF Card Slots (Maximum support extension 256GB)<br>
            Screen: 7.2 Inch 2K Screen<br>
            Resolution :1440*3200<br>
            Camera: Front Camera 16MP+ Rear Camera 32MP<br>
            Memory: 8GB RAM+128GB/256GB/512GB ROM<br>
            System: Android 10.0 System<br>
            Battery: 5000mAh High Density Lithium-ion battery<br>
            Unique Back Cover: Hot Bend 3D Plating Gradient Glass Back Cover. It is art, it is also technology!<br>
            Net-Work: GSM850/900/1800/1900MHz, 3G: WCDMA850/1900/2100MHz, 4G,5G<br>
            Vibration:Support<br>
            Multi Media: MP3/MP4/3GP/FM Radio/Bluetooth<br>
            Multi Function: Full screen, Face recognition,Screen finger print, Dual SIM, Wifi, GPS, Gravity Sensor, Alarm ,Calendar,Calculator,Audio recorder ,Video recorder, WAP/MMS/GPR, Image viewer,E-Book,World clock<br>
            Languages: Multi-language support<br>
            <br>
            Attention:<br>
            Due to the difference in light, the actual color of the Phone may be slightly different from the screen and the picture. Color names are only used to distinguish between individual SKUs. Please understand that. Thank you.<br>
            <br>
            The battery capacity is typical of the factory laboratory, the specific charging speed, the length of use and other data, the actual situation will be slightly different due to the power cord, power adapter, ambient temperature. When the Phone is completely out of power and automatically shuts down, you need to charge your Phone for more than 10 minutes to boot. It is recommended to charge when the battery is less than 20% charged.<br>
            <br>
            Available memory capacity is subject to preloaded software <br>
            <br>
            Product images and models, data, functions, performance, specifications, etc. are for reference only.We may improve the above contents. For details, please refer to the product and product description. Unless otherwise stated, the data contained in this website are our internal test results, and the comparisons are compared with our products.<br>
            <br>
            The mobile Phone does not support the telecom CDMA 2G 3G network.<br>
            <br>
            Package Included:<br>
            1 x Smartphone,<br>
            1 x Charger Adapter,<br>
            1 x Headphones,<br>
            1 x User Manual,<br>
            1 x Phone Case,<br>
            1 x Protection Film<br>
            ",
            'specification' => '
            <ul class="product-specs-list util-clearfix" data-spm-anchor-id="a2g0o.detail.0.i21.5de63f13wFOcTw"><li class="product-prop line-limit-length"><span class="property-title" data-spm-anchor-id="a2g0o.detail.0.i11.5de63f13wFOcTw">Brand Name:&nbsp;</span><span class="property-desc line-limit-length" title="W&amp;O">W&amp;O</span></li><li class="product-prop line-limit-length"><span class="property-title">Battery Type:&nbsp;</span><span class="property-desc line-limit-length" title="Not Detachable">Not Detachable</span></li><li class="product-prop line-limit-length"><span class="property-title">ROM:&nbsp;</span><span class="property-desc line-limit-length" title="512G">512G</span></li><li class="product-prop line-limit-length"><span class="property-title">Charging Power:&nbsp;</span><span class="property-desc line-limit-length" title="120W">120W</span></li><li class="product-prop line-limit-length"><span class="property-title">Origin:&nbsp;</span><span class="property-desc line-limit-length" title="CN(Origin)">CN(Origin)</span></li><li class="product-prop line-limit-length"><span class="property-title">Item Condition:&nbsp;</span><span class="property-desc line-limit-length" title="New">New</span></li><li class="product-prop line-limit-length"><span class="property-title">Operation System:&nbsp;</span><span class="property-desc line-limit-length" title="Android">Android</span></li><li class="product-prop line-limit-length"><span class="property-title">Biometrics Technology:&nbsp;</span><span class="property-desc line-limit-length" title="In-Screen Fingerprint Recognition">In-Screen Fingerprint Recognition</span></li><li class="product-prop line-limit-length"><span class="property-title">Biometrics Technology:&nbsp;</span><span class="property-desc line-limit-length" title="Fingerprint Recognition">Fingerprint Recognition</span></li><li class="product-prop line-limit-length"><span class="property-title">Biometrics Technology:&nbsp;</span><span class="property-desc line-limit-length" title="Face Recognition">Face Recognition</span></li><li class="product-prop line-limit-length"><span class="property-title">Front Camera Quantity:&nbsp;</span><span class="property-desc line-limit-length" title="1">1</span></li><li class="product-prop line-limit-length"><span class="property-title">Rear Camera Pixel:&nbsp;</span><span class="property-desc line-limit-length" title="16MP">16MP</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i17.5de63f13wFOcTw"><span class="property-title">Battery Capacity(mAh):&nbsp;</span><span class="property-desc line-limit-length" title="5000">5000</span></li><li class="product-prop line-limit-length"><span class="property-title">Touch Screen:&nbsp;</span><span class="property-desc line-limit-length" title="Yes">Yes</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i14.5de63f13wFOcTw"><span class="property-title" data-spm-anchor-id="a2g0o.detail.0.i19.5de63f13wFOcTw">Fast Charging:&nbsp;</span><span class="property-desc line-limit-length" title="Nonsupport" data-spm-anchor-id="a2g0o.detail.0.i20.5de63f13wFOcTw">Nonsupport</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="english">english</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i16.5de63f13wFOcTw"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Russian">Russian</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="German">German</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i15.5de63f13wFOcTw"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="French">French</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Spanish">Spanish</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="POLISH">POLISH</span></li><li class="product-prop line-limit-length"><span class="property-title" data-spm-anchor-id="a2g0o.detail.0.i13.5de63f13wFOcTw">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Portuguese">Portuguese</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i18.5de63f13wFOcTw"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Italian">Italian</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Turkish">Turkish</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Norwegian">Norwegian</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Arabic">Arabic</span></li><li class="product-prop line-limit-length"><span class="property-title">Display Resolution:&nbsp;</span><span class="property-desc line-limit-length" title="3120×1440">3120×1440</span></li><li class="product-prop line-limit-length"><span class="property-title">RAM:&nbsp;</span><span class="property-desc line-limit-length" title="12GB">12GB</span></li><li class="product-prop line-limit-length"><span class="property-title">Rear Camera Quantity:&nbsp;</span><span class="property-desc line-limit-length" title="4">4</span></li><li class="product-prop line-limit-length"><span class="property-title">Certification:&nbsp;</span><span class="property-desc line-limit-length" title="CE">CE</span></li><li class="product-prop line-limit-length"><span class="property-title">Charging Interface Type:&nbsp;</span><span class="property-desc line-limit-length" title="TYPE-C">TYPE-C</span></li><li class="product-prop line-limit-length"><span class="property-title">Front Camera Pixel:&nbsp;</span><span class="property-desc line-limit-length" title="16MP">16MP</span></li><li class="product-prop line-limit-length"><span class="property-title">Wireless Charging:&nbsp;</span><span class="property-desc line-limit-length" title="NO">NO</span></li><li class="product-prop line-limit-length"><span class="property-title">Design:&nbsp;</span><span class="property-desc line-limit-length" title="Flip">Flip</span></li><li class="product-prop line-limit-length"><span class="property-title">SIM Card Quantity:&nbsp;</span><span class="property-desc line-limit-length" title="2 SIM Card">2 SIM Card</span></li><li class="product-prop line-limit-length"><span class="property-title">Display Size:&nbsp;</span><span class="property-desc line-limit-length" title="7.2\'\'">7.2\'\'</span></li><li class="product-prop line-limit-length"><span class="property-title">3.5mm Headphone Port:&nbsp;</span><span class="property-desc line-limit-length" title="YES">YES</span></li><li class="product-prop line-limit-length"><span class="property-title">Screen Type:&nbsp;</span><span class="property-desc line-limit-length" title="Fullview Display" data-spm-anchor-id="a2g0o.detail.0.i12.5de63f13wFOcTw">Fullview Display</span></li></ul>
            ',
            'admin_id' => 1,
            'is_active' => true,
            'is_available' => true,
            'stock' => 100,
            'rate' => 0,
            'produce_date' => '2021',
            'brand' => '',
            'model' => '',
            'color' => '',
            'size' => '',
            'material' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product->category_groups()->sync(4);

        $product = Product::create([
            'name' => 'OnePlus 7 Pro',
            'category_id' => 1,
            'price' => 210,
            'discount' => 5,
            'short_description' => 'OnePlus 7 Pro Smartphone 5800mAh Unlock Global Version 4G 5G Android 10.0 16MP+32MP 12GB+512GB Celulares Smartphone',
            'long_description' => "
            - 7.2inch Full Display<br>
            The Phone delivers the viewingexperience you always wanted, With a massive 86%screen-to-body ratio on a 7.2inch screen<br>
            <br>
            - 16MP Front CameraClear and Stylish Selfies<br>
            The  Phone world-leading 16MP front camera turnsyour every selfe into a work of art Experience greaterbrightness, color vibrancy, clarity and dynamic range.even in the dimmest light, Whenever you needit. your Phone is right there with you, capturing everymoment with crystal-clear precision, Turn your selfiesinto masterpieces and shine in every photo<br>
            <br>
            - Rear HD camera<br>
            The  Phone features a 32MP camera combination. The main camera sportsa large f/1.8 aperture and 1.28um pixels, This strong combination boosts photosensitibityin backlight or low light, Just point and shoot, and Phone will makesure your pictures remain clear and bright<br>
            <br>
            - Powerful Performance<br>
            The MTK6899 mobile platform with 7mm process technology makesyoung people who love the young and stiand other popular games.The game ison and lower<br>
            <br>
            - Android 10.0<br>
            The new interactive design makes the operation simple and simple, the use of themobile Phone is so simple and straightforward, everything is handy<br>
            <br>
            - Dual SIM card + TF card<br>
            Dual card dual standby, card slot does notdistinguish between the main and the deputy, supporting the worlds 50 major communication carrier networks<br>
            <br>
            Specification:Factory direct sales, better quality but lower price is our target and mission!<br>
            <br>
            CPU: MTK6899 Deca Core (Latest 10 Core)<br>
            SIM/TF: 2 SIM Card Slots (Nano SIM) + 1 TF Card Slots (Maximum support extension 256GB)<br>
            Screen: 7.2 Inch 2K Screen<br>
            Resolution :1440*3200<br>
            Camera: Front Camera 16MP+ Rear Camera 32MP<br>
            Memory: 8GB RAM+128GB/256GB/512GB ROM<br>
            System: Android 10.0 System<br>
            Battery: 5000mAh High Density Lithium-ion battery<br>
            Unique Back Cover: Hot Bend 3D Plating Gradient Glass Back Cover. It is art, it is also technology!<br>
            Net-Work: GSM850/900/1800/1900MHz, 3G: WCDMA850/1900/2100MHz, 4G,5G<br>
            Vibration:Support<br>
            Multi Media: MP3/MP4/3GP/FM Radio/Bluetooth<br>
            Multi Function: Full screen, Face recognition,Screen finger print, Dual SIM, Wifi, GPS, Gravity Sensor, Alarm ,Calendar,Calculator,Audio recorder ,Video recorder, WAP/MMS/GPR, Image viewer,E-Book,World clock<br>
            Languages: Multi-language support<br>
            <br>
            Attention:<br>
            Due to the difference in light, the actual color of the Phone may be slightly different from the screen and the picture. Color names are only used to distinguish between individual SKUs. Please understand that. Thank you.<br>
            <br>
            The battery capacity is typical of the factory laboratory, the specific charging speed, the length of use and other data, the actual situation will be slightly different due to the power cord, power adapter, ambient temperature. When the Phone is completely out of power and automatically shuts down, you need to charge your Phone for more than 10 minutes to boot. It is recommended to charge when the battery is less than 20% charged.<br>
            <br>
            Available memory capacity is subject to preloaded software <br>
            <br>
            Product images and models, data, functions, performance, specifications, etc. are for reference only.We may improve the above contents. For details, please refer to the product and product description. Unless otherwise stated, the data contained in this website are our internal test results, and the comparisons are compared with our products.<br>
            <br>
            The mobile Phone does not support the telecom CDMA 2G 3G network.<br>
            <br>
            Package Included:<br>
            1 x Smartphone,<br>
            1 x Charger Adapter,<br>
            1 x Headphones,<br>
            1 x User Manual,<br>
            1 x Phone Case,<br>
            1 x Protection Film<br>
            ",
                'specification' => '
            <ul class="product-specs-list util-clearfix" data-spm-anchor-id="a2g0o.detail.0.i21.5de63f13wFOcTw"><li class="product-prop line-limit-length"><span class="property-title" data-spm-anchor-id="a2g0o.detail.0.i11.5de63f13wFOcTw">Brand Name:&nbsp;</span><span class="property-desc line-limit-length" title="W&amp;O">W&amp;O</span></li><li class="product-prop line-limit-length"><span class="property-title">Battery Type:&nbsp;</span><span class="property-desc line-limit-length" title="Not Detachable">Not Detachable</span></li><li class="product-prop line-limit-length"><span class="property-title">ROM:&nbsp;</span><span class="property-desc line-limit-length" title="512G">512G</span></li><li class="product-prop line-limit-length"><span class="property-title">Charging Power:&nbsp;</span><span class="property-desc line-limit-length" title="120W">120W</span></li><li class="product-prop line-limit-length"><span class="property-title">Origin:&nbsp;</span><span class="property-desc line-limit-length" title="CN(Origin)">CN(Origin)</span></li><li class="product-prop line-limit-length"><span class="property-title">Item Condition:&nbsp;</span><span class="property-desc line-limit-length" title="New">New</span></li><li class="product-prop line-limit-length"><span class="property-title">Operation System:&nbsp;</span><span class="property-desc line-limit-length" title="Android">Android</span></li><li class="product-prop line-limit-length"><span class="property-title">Biometrics Technology:&nbsp;</span><span class="property-desc line-limit-length" title="In-Screen Fingerprint Recognition">In-Screen Fingerprint Recognition</span></li><li class="product-prop line-limit-length"><span class="property-title">Biometrics Technology:&nbsp;</span><span class="property-desc line-limit-length" title="Fingerprint Recognition">Fingerprint Recognition</span></li><li class="product-prop line-limit-length"><span class="property-title">Biometrics Technology:&nbsp;</span><span class="property-desc line-limit-length" title="Face Recognition">Face Recognition</span></li><li class="product-prop line-limit-length"><span class="property-title">Front Camera Quantity:&nbsp;</span><span class="property-desc line-limit-length" title="1">1</span></li><li class="product-prop line-limit-length"><span class="property-title">Rear Camera Pixel:&nbsp;</span><span class="property-desc line-limit-length" title="16MP">16MP</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i17.5de63f13wFOcTw"><span class="property-title">Battery Capacity(mAh):&nbsp;</span><span class="property-desc line-limit-length" title="5000">5000</span></li><li class="product-prop line-limit-length"><span class="property-title">Touch Screen:&nbsp;</span><span class="property-desc line-limit-length" title="Yes">Yes</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i14.5de63f13wFOcTw"><span class="property-title" data-spm-anchor-id="a2g0o.detail.0.i19.5de63f13wFOcTw">Fast Charging:&nbsp;</span><span class="property-desc line-limit-length" title="Nonsupport" data-spm-anchor-id="a2g0o.detail.0.i20.5de63f13wFOcTw">Nonsupport</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="english">english</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i16.5de63f13wFOcTw"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Russian">Russian</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="German">German</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i15.5de63f13wFOcTw"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="French">French</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Spanish">Spanish</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="POLISH">POLISH</span></li><li class="product-prop line-limit-length"><span class="property-title" data-spm-anchor-id="a2g0o.detail.0.i13.5de63f13wFOcTw">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Portuguese">Portuguese</span></li><li class="product-prop line-limit-length" data-spm-anchor-id="a2g0o.detail.0.i18.5de63f13wFOcTw"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Italian">Italian</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Turkish">Turkish</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Norwegian">Norwegian</span></li><li class="product-prop line-limit-length"><span class="property-title">Language:&nbsp;</span><span class="property-desc line-limit-length" title="Arabic">Arabic</span></li><li class="product-prop line-limit-length"><span class="property-title">Display Resolution:&nbsp;</span><span class="property-desc line-limit-length" title="3120×1440">3120×1440</span></li><li class="product-prop line-limit-length"><span class="property-title">RAM:&nbsp;</span><span class="property-desc line-limit-length" title="12GB">12GB</span></li><li class="product-prop line-limit-length"><span class="property-title">Rear Camera Quantity:&nbsp;</span><span class="property-desc line-limit-length" title="4">4</span></li><li class="product-prop line-limit-length"><span class="property-title">Certification:&nbsp;</span><span class="property-desc line-limit-length" title="CE">CE</span></li><li class="product-prop line-limit-length"><span class="property-title">Charging Interface Type:&nbsp;</span><span class="property-desc line-limit-length" title="TYPE-C">TYPE-C</span></li><li class="product-prop line-limit-length"><span class="property-title">Front Camera Pixel:&nbsp;</span><span class="property-desc line-limit-length" title="16MP">16MP</span></li><li class="product-prop line-limit-length"><span class="property-title">Wireless Charging:&nbsp;</span><span class="property-desc line-limit-length" title="NO">NO</span></li><li class="product-prop line-limit-length"><span class="property-title">Design:&nbsp;</span><span class="property-desc line-limit-length" title="Flip">Flip</span></li><li class="product-prop line-limit-length"><span class="property-title">SIM Card Quantity:&nbsp;</span><span class="property-desc line-limit-length" title="2 SIM Card">2 SIM Card</span></li><li class="product-prop line-limit-length"><span class="property-title">Display Size:&nbsp;</span><span class="property-desc line-limit-length" title="7.2\'\'">7.2\'\'</span></li><li class="product-prop line-limit-length"><span class="property-title">3.5mm Headphone Port:&nbsp;</span><span class="property-desc line-limit-length" title="YES">YES</span></li><li class="product-prop line-limit-length"><span class="property-title">Screen Type:&nbsp;</span><span class="property-desc line-limit-length" title="Fullview Display" data-spm-anchor-id="a2g0o.detail.0.i12.5de63f13wFOcTw">Fullview Display</span></li></ul>
            ',
            'admin_id' => 1,
            'is_active' => true,
            'is_available' => true,
            'stock' => 100,
            'rate' => 0,
            'produce_date' => '2021',
            'brand' => '',
            'model' => '',
            'color' => '',
            'size' => '',
            'material' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $product->category_groups()->sync(3);

        // Product::create([
        //     'name' => '',
        //     'category_id' => 1,
        //     'price' => 300,
        //     'discount' => 50,
        //     'short_description' => '',
        //     'long_description' => '',
        //     'specification' => '',
        //     'admin_id' => 1,
        //     'is_active' => true,
        //     'is_available' => true,
        //     'stock' => 100,
        //     'rate' => 0,
        //     'produce_date' => '',
        //     'brand' => '',
        //     'model' => '',
        //     'color' => '',
        //     'size' => '',
        //     'material' => '',
        //     'group' => '',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }
}
