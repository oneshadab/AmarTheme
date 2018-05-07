<?php

use Illuminate\Database\Seeder;

class ActualDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            ['product_id' => 1,'product_name' => "80's MOD",
                'product_category' => 'HTML',
                'product_description' => '80\'s Mod is the finest, totally research-based theme on the niche of a modern online shop.
 It is integrated with the bulk of such advanced features which make online shopping so attractive and convenient.
 The theme has six novel and fresh homepages to cater to your taste for a specific look and feel. 
The backend gives you surplus power to personalize the homepages through Visual Composer. 
There is also the facility of frontend editing, which is so easy, fast and enjoyable. 
For shopping, youâ€™ll get the great features like YITH WooCommerce Ajax Product Filtration,
 Ajax based Wishlist, Product Zoom Magnifier (as found on Amazon) and much more.
 For clients, it has a fully managed and comprehensive cart, checkout, and account management system.
 80â€™s Mod comes with all the possible variants for blog, supporting full width, left sidebar, right sidebar,
 Standard, Gallery, Image, Vimeo Video, YouTube Video, DailyMotion video, and so on.',
                'product_type' => 'E-Commerce', 'product_price' => 5, 'developer_id' => 1]

        );
        DB::table('images')->insert(
            ['link' => 'http://i67.tinypic.com/6h8ec9.jpg','product_id'=>1]

        );
        DB::table('ratings')->insert(
            ['rating'=>"3",'product_id' => 1,'user_id' => 2]
        );
        DB::table('products')->insert(
            ['product_id' => 2,'product_name' => "Bootshop",
                'product_category' => 'HTML',
                'product_description' => 'Bootshop is a fully responsive layout bootstrap eCommerce html5 template. 
Bootshop has a multi page include and easy customize and color combination.
Bootshop has a file include and easy customize and color combination',
                'product_type' => 'E-Commerce', 'product_price' => 10, 'developer_id' => 1]

        );

        DB::table('images')->insert(
            ['link' => 'http://i66.tinypic.com/2najjw4.jpg','product_id'=>2]

        );
        DB::table('ratings')->insert(
            ['rating'=>"5",'product_id' => 2,'user_id' => 2]
        );
        DB::table('products')->insert(
            ['product_id' => 3,'product_name' => "MayaShop",
                'product_category' => 'WORDPRESS',
                'product_description' => 'MayaShop is a fresh WordPress theme that utilises the powerful WooCommerce plugins to create a versatile
 Wordpress powered shop, with unlimited layout options and unlimited skins. Make this theme your own.

Mix up content on the homepage with widgets and shortcodes, set the layout full width or boxed style,
 choose your background color or set one of the 50+ custom backgrounds, set your header color,
 change the style of your products, chose from 8 different sliders.. a theme so versatile that you 
can customize it to suit your business by simply changing a few settings. With MayaShop you can sell everything!',
                'product_type' => 'E-Commerce', 'product_price' => 9.99, 'developer_id' => 1]

        );
        DB::table('images')->insert(
            ['link' => 'http://i64.tinypic.com/110c3m9.jpg','product_id'=>3]

        );
        DB::table('ratings')->insert(
            ['rating'=>"2",'product_id' => 3,'user_id' => 2]
        );
        DB::table('products')->insert(
            ['product_id' => 4,'product_name' => "MyEvents",
                'product_category' => 'WORDPRESS',
                'product_description' => 'Fully Responsive layout
Page Weight optimized for mobile devices
Mobile Optimised Menu
Child Theme support
Eventbrite integration
Awesome animated homepage built with our Frontpage template
10 page templates (agenda,events lists, events list with pictures, event, fullwidth, frontpage, speaker, speakers listing, sponsor, sponsor listings)
MyEvents, sponsors and speakers based on custom fields from posts.
Agenda shortcode for displaying events.
Support for Post Formats
6 suggested color styles with option to choose own colors
Auto-sized Post Thumbnails (WP-powered)
All Theme Options available in Theme Customizer with live preview
3 recommended widgets (news show pro, tabs, widget rules)
Translatable, includes .mo and .po files
Support for Social Network',
                'product_type' => 'E-Commerce', 'product_price' =>15.50, 'developer_id' => 1]

        );
        DB::table('images')->insert(
            ['link' => 'http://i64.tinypic.com/110c3m9.jpg','product_id'=>4]

        );
        DB::table('ratings')->insert(
            ['rating'=>"2",'product_id' => 4,'user_id' => 2]
        );
        DB::table('products')->insert(
            ['product_id' => 5,'product_name' => "Titanium",
                'product_category' => 'WORDPRESS',
                'product_description' => 'Titanium is a contemporary, one page, responsive HTML template design ideal for any Titanium,
 conference, meet up, summit, camp and many more. With Titanium, your next conference website could be world-class.
Itâ€™s designed to provide useful information about your Titanium. This template comes in 10 yummy colors, 
but possibilities are unlimited.',
                'product_type' => 'E-Commerce', 'product_price' => 9.99, 'developer_id' => 1]

        );
        DB::table('images')->insert(
            ['link' => 'http://i63.tinypic.com/2czes6g.jpg','product_id'=>5]

        );
        DB::table('ratings')->insert(
            ['rating'=>"2",'product_id' => 5,'user_id' => 2]
        );
        DB::table('products')->insert(
            ['product_id' => 6,'product_name' => "Time",
                'product_category' => 'WORDPRESS',
                'product_description' =>'Time is a HTML template for conference, meeting and   websites. 
It is a highly suitable template for companies that plan meetings as well as   management websites.
 It has purpose oriented design, responsive layout and special features like appointment forms, services,   planner,
 schedules, pricing plans and other pages',
                'product_type' => 'E-Commerce', 'product_price' => 9.99, 'developer_id' => 1]

        );
        DB::table('images')->insert(
            ['link' => 'http://i67.tinypic.com/4qpv1e.jpg','product_id'=>6]

        );
        DB::table('ratings')->insert(
            ['rating'=>"2",'product_id' => 6,'user_id' => 2]
        );


    }
}
