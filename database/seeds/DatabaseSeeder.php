<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert(
            ['user_id' => 1,'user_name'=>'antor','user_type'=>'developer','email' => 'antor@gmail.com' ,
                'password' => bcrypt('1')]

        );
        DB::table('users')->insert(
            ['user_id' => 2,'user_name'=>'shadab','user_type'=>'buyer','email' => 'shadab@gmail.com' ,
                'password' => bcrypt('1')]

        );
        DB::table('products')->insert(
            ['product_id' => 1,'product_name'=>'First Product',
                'product_category'=>'Wordpress','product_description' => 'Worse Product Ever' ,
                'product_status' => 'available','product_price' => 10,'developer_id' => 1]

        );
        DB::table('products')->insert(
            ['product_name'=>'Second Product',
                'product_category'=>'Html','product_description' => 'Best Product Ever' ,
                'product_status' => 'unavailable','product_price' => 100,'developer_id' => 1]

        );
        DB::table('images')->insert(
            ['link' => 'http://oi39.tinypic.com/vzhris.jpg','product_id'=>1]

        );
        DB::table('images')->insert(
            ['link' => 'https://i.ytimg.com/vi/4tdKl-gTpZg/maxresdefault.jpg','product_id'=>1]

        );
        DB::table('ratings')->insert(
            ['rating'=>'3','product_id' => 1,'user_id' => 2]

        );
        DB::table('ratings')->insert(
            ['rating'=>'5','product_id' => 1,'user_id' => 1]

        );
        DB::table('transactions')->insert(
            ['quantity'=>3,'product_id' => 1,'buyer_id' => 2]

        );
        DB::table('transactions')->insert(
            ['quantity'=>3,'product_id' => 2,'buyer_id' => 2]

        );
        DB::table('carts')->insert(
            ['quantity'=>3,'product_id' => 1,'buyer_id' => 2]

        );
        DB::table('carts')->insert(
            ['quantity'=>2,'product_id' => 2,'buyer_id' => 2]

        );
    }
}
