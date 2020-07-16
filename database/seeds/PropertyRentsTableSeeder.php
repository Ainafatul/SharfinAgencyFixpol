<?php

use Illuminate\Database\Seeder;

class PropertyRentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('property_rents')->delete();
        
        \DB::table('property_rents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'price' => 35000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            1 => 
            array (
                'id' => 2,
                'price' => 28000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            2 => 
            array (
                'id' => 3,
                'price' => 24000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            3 => 
            array (
                'id' => 4,
                'price' => 1200000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            4 => 
            array (
                'id' => 5,
                'price' => 1800000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            5 => 
            array (
                'id' => 6,
                'price' => 2000000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            6 => 
            array (
                'id' => 7,
                'price' => 42000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            7 => 
            array (
                'id' => 8,
                'price' => 45000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            8 => 
            array (
                'id' => 9,
                'price' => 52000000.0,
                'minRent' => 1,
                'timeType' => 'tahun',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            9 => 
            array (
                'id' => 10,
                'price' => 2400000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            10 => 
            array (
                'id' => 11,
                'price' => 1000000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
            11 => 
            array (
                'id' => 12,
                'price' => 1250000.0,
                'minRent' => 1,
                'timeType' => 'bulan',
                'created_at' => '2020-07-17 05:39:41',
                'updated_at' => '2020-07-17 05:39:41',
            ),
        ));
        
        
    }
}