<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('likes')->delete();
        
        \DB::table('likes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property' => 1,
                'user' => 17,
                'created_at' => '2020-07-17 09:41:45',
                'updated_at' => '2020-07-17 09:41:45',
            ),
            1 => 
            array (
                'id' => 2,
                'property' => 11,
                'user' => 17,
                'created_at' => '2020-07-17 09:41:48',
                'updated_at' => '2020-07-17 09:41:48',
            ),
            2 => 
            array (
                'id' => 3,
                'property' => 5,
                'user' => 17,
                'created_at' => '2020-07-17 09:41:52',
                'updated_at' => '2020-07-17 09:41:52',
            ),
            3 => 
            array (
                'id' => 4,
                'property' => 9,
                'user' => 17,
                'created_at' => '2020-07-17 09:41:55',
                'updated_at' => '2020-07-17 09:41:55',
            ),
            4 => 
            array (
                'id' => 5,
                'property' => 1,
                'user' => 18,
                'created_at' => '2020-07-18 05:53:55',
                'updated_at' => '2020-07-18 05:53:55',
            ),
            5 => 
            array (
                'id' => 6,
                'property' => 3,
                'user' => 18,
                'created_at' => '2020-07-18 05:53:58',
                'updated_at' => '2020-07-18 05:53:58',
            ),
            6 => 
            array (
                'id' => 7,
                'property' => 11,
                'user' => 18,
                'created_at' => '2020-07-18 05:54:01',
                'updated_at' => '2020-07-18 05:54:01',
            ),
            7 => 
            array (
                'id' => 8,
                'property' => 5,
                'user' => 18,
                'created_at' => '2020-07-18 05:56:00',
                'updated_at' => '2020-07-18 05:56:00',
            ),
            8 => 
            array (
                'id' => 9,
                'property' => 7,
                'user' => 18,
                'created_at' => '2020-07-18 05:56:03',
                'updated_at' => '2020-07-18 05:56:03',
            ),
            9 => 
            array (
                'id' => 10,
                'property' => 13,
                'user' => 18,
                'created_at' => '2020-07-18 07:03:15',
                'updated_at' => '2020-07-18 07:03:15',
            ),
            10 => 
            array (
                'id' => 11,
                'property' => 11,
                'user' => 19,
                'created_at' => '2020-07-18 07:21:07',
                'updated_at' => '2020-07-18 07:21:07',
            ),
        ));
        
        
    }
}