<?php

namespace Database\Seeders;

use App\Models\Admin\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "About us",
            'content' => "
            We enable businesses to transform the way they market, sell and operate and improve their efficiencies. We provide the technology infrastructure and marketing reach to help merchants, brands and other businesses to leverage the power of new technology to engage with their users and customers and operate in a more efficient way.<br>
            <br>
            Our businesses are comprised of core commerce, cloud computing, digital media and entertainment, and innovation initiatives. In addition, Ant Group, an unconsolidated related party, provides payment services and offers financial services for consumers and merchants on our platforms. An ecosystem has developed around our platforms and businesses that consists of consumers, merchants, brands, retailers, third-party service providers, strategic alliance partners and other businesses.<br>
            <br>
            The Alibaba ecosystem generated RMB7.3 trillion in GMV in the 12 months ended June 30, 2020, which mainly included GMV transacted through our China retail marketplaces, as well as GMV transacted through our international retail marketplaces and local consumer services. As of June 30, 2020, Alibaba Group had a user reach of over 1 billion global annual active consumers, including 807 million consumers in China and 194 million consumers outside China.<br>
            OUR VISION<br>
            We do not pursue size or power; we aspire to be a good company that will last for 102 years. We aim to build the future infrastructure of commerce. We envision that our customers will meet, work and live at Alibaba.<br>
            <br>
            102 Years<br>
            For a company that was founded in 1999, lasting 102 years means we will have spanned three centuries, an achievement that few companies can claim. Our culture, business models and systems are built to last, so that we can achieve sustainability in the long run. Alibaba’s ultimate goal is to create value for society and help find solutions for society’s challenges. We want to convert Alibaba’s resources into fuel for small and medium businesses, which will in turn support the advancement of the whole society.<br>
            <br>
            Meet @ Alibaba<br>
            We enable commercial and social interactions among hundreds of millions of users, between consumers and merchants, and among businesses every day.<br>
            <br>
            Work @ Alibaba<br>
            We empower our customers with the fundamental infrastructure for commerce and new technology, so that they can build businesses and create value that can be shared among our ecosystem participants.<br>
            <br>
            Live @ Alibaba<br>
            We strive to expand our products and services to become central to the everyday lives of our customers.<br>
            <br>
            As we continue to expand our businesses from commerce to cloud computing, digital media and entertainment, among other sectors, Alibaba has evolved into an ecosystem that is unique, energetic and innovative. We have set five-year goals to serve over 1 billion annual active consumers and achieve over RMB10 trillion in annual consumption through our China consumer business by the end of fiscal year 2024 as we continue on the path of globalization. We believe the five-year goals put us closer to achieving our vision for 2036: to serve 2 billion global consumers, enable 10 million businesses to become profitable and create 100 million jobs.<br>
            <br>
            ALIBABA GROUP WAS FOUNDED IN 1999 BY 18 PEOPLE LED BY JACK MA, a former English teacher from Hangzhou, China. Our founders started our company to champion small businesses, in the belief that the Internet would level the playing field by enabling small enterprises to leverage innovation and technology to grow and compete more effectively in domestic and global economies. We believe that concentrating on customer needs and solving their problems – whether those customers are consumers, merchants or enterprises – ultimately will lead to the best outcome for our business.<br>
            "
        ]);

        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "Contact us",
            'content' => "
            OUR LOCATIONS
            You can reach us at our corporate campus in Hangzhou:<br>
            <br>
            <br>
            Alibaba Group Corporate Campus<br>
            969 West Wen Yi Road<br>
            Yu Hang District<br>
            Hangzhou 311121<br>
            Zhejiang Province<br>
            China<br>
            Tel: (+86) 571-8502-2088<br>
            Fax: (+86) 571-8526-9066<br>
            <br>
            You can also reach us in various locations around the world, including:<br>
            <br>
            Hangzhou (Binjiang District):<br>
            699 Wang Shang Road<br>
            Binjiang District<br>
            Hangzhou 310052<br>
            Zhejiang Province<br>
            China<br>
            Tel: (+86) 571-8502-2088<br>
            Fax: (+86) 571-8981-5505<br>
            <br>
            Hong Kong:<br>
            26/F Tower One, Times Square<br>
            1 Matheson Street, Causeway Bay<br>
            Hong Kong, China<br>
            Tel: (+852) 2215-5100<br>
            Fax: (+852) 2215-5200<br>
            <br>
            Taipei City:<br>
            11/F, No. 188, Sec. 5<br>
            Nanjing E. Road, Songshan District<br>
            Taipei City 10571<br>
            Taiwan, China<br>
            Tel: (+886) 2-6602-9888<br>
            Fax: (+886) 2-6600-8818<br>
            <br>
            U.S.:<br>
            400 South El Camino Real<br>
            Suite 400<br>
            San Mateo, CA 94402<br>
            United States<br>
            Tel: (+1) 408-785-5580<br>
            Fax: (+1) 408-748-1218<br>
            <br>
            U.K. (for U.K., Ireland and Nordics):<br>
            8th Floor, Millbank Tower<br>
            21-24 Millbank<br>
            London SW1P 4QP<br>
            United Kingdom<br>
            <br>
            Italy (for Italy, Spain, Portugal and Greece):<br>
            Corso Europa, 13<br>
            20122 Milan<br>
            Italy<br>
            <br>
            France (for France, Israel, Middle East and North Africa regions):<br>
            6th Floor<br>
            6 rue Ménars<br>
            75002 Paris<br>
            France<br>
            <br>
            Germany (for Germany, Austria, Switzerland, Turkey and Eastern Europe):<br>
            1st Floor, Viktualienmarkt 8<br>
            80331 Munich<br>
            Germany<br>
            <br>
            The Netherlands (for the Netherlands, Belgium and Luxembourg):<br>
            Herengracht 450<br>
            Amsterdam, 1017 CA<br>
            The Netherlands<br>
            <br>
            Japan:<br>
            27F Kyobashi Edogrand<br>
            2-2-1 Kyobashi, Chuo-ku<br>
            Tokyo 1040031<br>
            Japan<br>
            <br>
            India:<br>
            Units 203, 204 & 205, 2nd Floor,<br>
            Inspire BKC Plot No.10,<br>
            Bharat Nagar, G Block,<br>
            BKC Main Road,<br>
            Bandra Kurla Complex,<br>
            Mumbai 400051, India<br>
            Tel: (+91) 22-4233-5233<br>
            <br>
            Australia and New Zealand:<br>
            Level 2, 411 Collins Street,<br>
            Melbourne, Victoria,<br>
            VIC 3000<br>
            Australia<br>


            "
        ]);
        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "",
            'content' => "
            "
        ]);
        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "",
            'content' => "
            "
        ]);
        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "",
            'content' => "
            "
        ]);
        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "",
            'content' => "
            "
        ]);
        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "",
            'content' => "
            "
        ]);
        Page::create([
            'is_active' => true,
            'admin_id' => 1,
            'title' => "",
            'content' => "
            "
        ]);
    }
}
