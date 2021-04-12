<?php

namespace Database\Seeders;

use App\Models\Admin\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'admin_id' => '1',
            'category_id' => '16',
            'is_active' => true,
            'title' => 'Get more with our 10th Anniversary sale guide!',
            'description' => 'Celebrate our birthday with deals over 50% off, money-saving games, and a trip down memory lane to relive your journey with AliExpress.',
            'content' => "
            AliExpress is 10 years young this year, and we couldn’t be more grateful to YOU for making it happen. So let’s celebrate this extra special occasion at our 10th Anniversary sale, with 10 million more reasons to shop!<br>
            <br>
            Before you jump in, check out this comprehensive guide. There’s gonna be lots of fun & games involved, and you don’t want to miss a thing! You can start engaging in money-saving activities from Mar 16 PT onwards and start shopping the sale between Mar 27-31 PT. <br>
            <br>
            Here’s everything you need to know to get the most out of our once-every-decade epic birthday bash! <br>
            <br>
            (Stay tuned as we update this article with more sale hacks in the upcoming days.)<br>
            Mar 18-31 PT<br>
            Get your personal AliExpress Time Capsule<br>
            Come and discover the AliExpress Time Capsule, an interactive compilation of all your fun AliExpress shopping stats! Do you remember your first order? How about how frequently you shop here? Go back in time and you’ll be surprised at what you might find.<br>
            Plus, you get a special birthday coupon at the end of this memory lane too. These coupons are given on a first come first served basis, so go try out the AliExpress Time Capsule before they run out!<br>
            Mar 20-25 PT<br>
            Play Funbox & win a share of US $500,000 in coupons<br>
            <br>
            Funbox, our virtual board game, is back by popular demand! It’s super easy to play and you’re sure to win a little something. (Warning: potentially addictive too.) All you have to do is roll a dice to move forward on the board, and you can earn more chances to advance in the game by visiting the stores you see within the game.<br>
            <br>
            You can earn extra AliExpress Coupons by participating in quirky mini-games peppered throughout the journey, and each player who completes the board can also win a share of the final US $500,000 prize in AliExpress Coupons.<br>
            <br>
            Be sure to use any coupons won during this game for the 10th Anniversary sale, as they’re only valid from Mar 27-31 PT.<br>
            Mar 20-26 PT<br>
            Collect coupons to use during the sale<br>
            We’re giving out tons of coupons for our birthday! You can find them at various spots around among the sale pages, and all you’ve got to do is click and collect them. Here’s an easy one: go get a Select Coupon on our main 10th Anniversary page! Then head to our Coupon Center to get another Select Coupon, and collect Store Coupons from your favorite brands. <br>
            <br>
            New Select Coupons are available each day, so remember to visit daily to get them all! Remember to use them to shop for our 10th Anniversary celebration (Mar 27-31 PT) as they expire after.<br>
            <br>
            Another way to shop smarter is by only browsing items that can be discounted with Select Coupons. You can find these items at Shop With Select Coupons, or by using our search filter for Select Coupon and 10th Anniversary items.<br>
            <br>
            <br>
            Different types of coupons:<br>
            <br>
            1. AliExpress Coupon<br>
            <br>
            Can be used in any store on AliExpress.<br>
            You can use AliExpress Coupons on combined orders from different stores, but you can only use one AliExpress coupon per order.<br>
            You can get AliExpress Coupons while playing games or by exchanging your coins for coupons.<br>
            <br>
            2. Select Coupon<br>
            <br>
            Can only be used in selected stores.<br>
            Check your item's product detail page to see if you can use a Select Coupon.<br>
            You can also filter your search results to view products which accept Select Coupons for the sale.<br>
            Depending on the store rules, you can use one or more coupons per order.<br>
            You can get Select Coupons on sale pages, by playing games or by exchanging your coins for coupons.<br>
            <br>
            3. Store Coupon<br>
            <br>
            Can only be used in the specific store that issued them.<br>
            One coupon can be used per order.<br>
            You can get Store Coupons for free on the store page or product detail page, or by exchanging your coins for coupons.<br>
            Mar 20-26 PT<br>
            Browse sale items & add to cart<br>
            We meant it when we said it was going to be an epic party. Just look at the number of items going on sale during our 10th birhtday! See if your favorite brands are on discount, discover new items, or add that one thing you’ve lusted over for so long to cart. <br>
            <br>
            You can’t buy these items on discount just yet, but you can add them to the cart to earn some coins (ends Mar 26 PT). Once you’ve collected enough coins, they can be exchanged into coupons.<br>
            <br>
            Can’t decide what to browse? Let these curated pages guide you better.<br>
            <br>
            Bestsellers – Top-selling must-haves<br>
            Big Clearance Discounts – Value for money buys<br>
            New Arrivals – Latest items<br>
            Must-Haves– Popular & top-rated items<br>
            Top Selection – Outstanding quality & service<br>
            <br>
            <br>
            <br>
            Mar 27-31 PT<br>
            Shop epic deals & get more savings<br>
            Our 10th Anniversary party has officially begun! There are more deals, more fun, and more discounts than you can ever imagine, so let’s start shopping!<br>
            <br>
            Automobiles — up to 60% off<br>
            Beauty & Health — up to 70% off<br>
            Computer & Office — up to 60% off<br>
            Consumer Electronics — up to 60% off<br>
            Fashion Accessories — up to 70% off<br>
            Hair Extensions & Wigs — up to 50% off<br>
            Home & Garden — up to 60% off<br>
            Home Appliances — up to 50% off<br>
            Jewelry & Watches — up to 60% off<br>
            Luggage & Bags — up to 70% off<br>
            Men's Clothing — Up to 70% off<br>
            Mother & Kids — up to 50% off<br>
            Phones & Accessories — up to 60% off<br>
            Security & Protection — up to 60% off<br>
            Shoes — up to 70% off<br>
            Sports & Entertainment — up to 60% off<br>
            Tools & Home Improvement — up to 60% off<br>
            Toys & Hobbies — up to 30% off<br>
            Underwear & Exotic Apparel — up to 70% off<br>
            Women's Clothing & Wedding — up to 70% off<br>
            <br>
            * reserves the right to amend these promotional rules as well as to vary or terminate any of the offers without prior notice. In the event of disputes, the decision of the Promoter shall be final and binding.<br>
            "
        ]);
        // Post::create([
        //     'admin_id' => '1',
        //     'category_id' => '16',
        //     'is_active' => true,
        //     'title' => '',
        //     'description' => '',
        //     'content' => "

        //     "
        // ]);
    }
}
