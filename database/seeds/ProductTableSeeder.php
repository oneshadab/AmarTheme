<?php

use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert(
                ['product_name' => "Product $i",
                    'product_category' => 'HTML', 'product_description' => 'Best Product Ever $i',
                    'product_status' => 'available', 'product_price' => 100, 'developer_id' => 1]

            );

        }
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert(
                ['product_name' => "Product $i",
                    'product_category' => 'WORDPRESS', 'product_description' => 'Best Product Ever $i',
                    'product_status' => 'available', 'product_price' => 100, 'developer_id' => 1]

            );

        }
    }
}
