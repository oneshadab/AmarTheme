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



        $this->call(ActualDataSeeder::class);

        DB::table('transactions')->insert(
            ['quantity'=>3,'product_id' => 1,'buyer_id' => 2]

        );
        DB::table('transactions')->insert(
            ['quantity'=>3,'product_id' => 2,'buyer_id' => 2]

        );


    }
}
