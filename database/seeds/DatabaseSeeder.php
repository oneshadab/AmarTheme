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
        //$this->call(ProductTableSeeder::class);

        for($i=0;$i<10;$i++)
        {
            DB::table('products')->insert(
                ['product_name'=>"HTML Product $i",
                    'product_category'=>'HTML','product_description' => 'Best Product Ever' ,
                    'product_status' => 'available','product_price' => 100,'developer_id' => 1]

            );
        }
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert(
                ['product_name' => "WP Product $i",
                    'product_category' => 'WORDPRESS', 'product_description' => 'Best Product Ever $i',
                    'product_status' => 'available', 'product_price' => 100, 'developer_id' => 1]

            );

        }

        for($i=1;$i<=20;$i++)
        {
            $r=($i%5)+1;
            DB::table('ratings')->insert(
                ['rating'=>"$r",'product_id' => $i,'user_id' => 2]

            );
        }



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
        $this->call(ImageTableSeeder::class);
    }
}
