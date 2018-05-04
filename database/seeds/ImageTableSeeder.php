<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=22;$i++)
        {
            DB::table('images')->insert(
                ['link' => 'http://i68.tinypic.com/124j41d.png','product_id'=>$i]

            );
        }
    }
}
