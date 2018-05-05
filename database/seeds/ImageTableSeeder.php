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
        for($i=1;$i<=10;$i++)
        {
            DB::table('images')->insert(
                ['link' => 'http://i68.tinypic.com/124j41d.png','product_id'=>$i]

            );
        }for($i=11;$i<=20;$i++)
        {
            DB::table('images')->insert(
                ['link' => 'http://images.easyfreeclipart.com/486/there-is-40-cartoon-bomb-free-cliparts-all-used-for-486754.jpg','product_id'=>$i]

            );
        }
    }
}
