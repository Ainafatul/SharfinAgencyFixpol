<?php

use Illuminate\Database\Seeder;

class PropertySellsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_sells')->delete();
        
        \DB::table('property_sells')->insert(array (
            0 => 
            array (
                'id' => 1,
                'price' => 2500000000.0,
                'created_at' => '2020-07-17 05:57:35',
                'updated_at' => '2020-07-17 05:57:44',
            ),
            1 => 
            array (
                'id' => 2,
                'price' => 14000000000.0,
                'created_at' => '2020-07-17 05:57:47',
                'updated_at' => '2020-07-17 05:57:50',
            ),
            2 => 
            array (
                'id' => 3,
                'price' => 980000000.0,
                'created_at' => '2020-07-17 05:57:53',
                'updated_at' => '2020-07-17 05:57:56',
            ),
            3 => 
            array (
                'id' => 4,
                'price' => 760000000.0,
                'created_at' => '2020-07-17 05:57:59',
                'updated_at' => '2020-07-17 05:58:01',
            ),
            4 => 
            array (
                'id' => 5,
                'price' => 1200000000.0,
                'created_at' => '2020-07-17 05:58:03',
                'updated_at' => '2020-07-17 05:58:06',
            ),
            5 => 
            array (
                'id' => 6,
                'price' => 5200000000.0,
                'created_at' => '2020-07-17 05:58:08',
                'updated_at' => '2020-07-17 05:58:10',
            ),
        ));
        
        
    }
}