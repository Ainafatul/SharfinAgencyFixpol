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
                'property' => 11,
                'user' => 23,
                'created_at' => '2020-07-24 10:49:45',
                'updated_at' => '2020-07-24 10:49:45',
            ),
            1 => 
            array (
                'id' => 2,
                'property' => 28,
                'user' => 23,
                'created_at' => '2020-07-24 10:49:48',
                'updated_at' => '2020-07-24 10:49:48',
            ),
            2 => 
            array (
                'id' => 3,
                'property' => 42,
                'user' => 23,
                'created_at' => '2020-07-24 10:49:51',
                'updated_at' => '2020-07-24 10:49:51',
            ),
            3 => 
            array (
                'id' => 4,
                'property' => 43,
                'user' => 23,
                'created_at' => '2020-07-24 10:49:57',
                'updated_at' => '2020-07-24 10:49:57',
            ),
            4 => 
            array (
                'id' => 5,
                'property' => 11,
                'user' => 24,
                'created_at' => '2020-07-24 10:50:25',
                'updated_at' => '2020-07-24 10:50:25',
            ),
            5 => 
            array (
                'id' => 6,
                'property' => 11,
                'user' => 25,
                'created_at' => '2020-07-24 10:50:53',
                'updated_at' => '2020-07-24 10:50:53',
            ),
            6 => 
            array (
                'id' => 7,
                'property' => 28,
                'user' => 25,
                'created_at' => '2020-07-24 10:50:56',
                'updated_at' => '2020-07-24 10:50:56',
            ),
            7 => 
            array (
                'id' => 8,
                'property' => 36,
                'user' => 24,
                'created_at' => '2020-07-24 10:51:59',
                'updated_at' => '2020-07-24 10:51:59',
            ),
            8 => 
            array (
                'id' => 9,
                'property' => 44,
                'user' => 24,
                'created_at' => '2020-07-24 10:52:03',
                'updated_at' => '2020-07-24 10:52:03',
            ),
            9 => 
            array (
                'id' => 10,
                'property' => 46,
                'user' => 24,
                'created_at' => '2020-07-24 10:52:06',
                'updated_at' => '2020-07-24 10:52:06',
            ),
            10 => 
            array (
                'id' => 11,
                'property' => 8,
                'user' => 23,
                'created_at' => '2020-07-24 11:10:31',
                'updated_at' => '2020-07-24 11:10:31',
            ),
            11 => 
            array (
                'id' => 12,
                'property' => 48,
                'user' => 23,
                'created_at' => '2020-07-24 11:10:36',
                'updated_at' => '2020-07-24 11:10:36',
            ),
            12 => 
            array (
                'id' => 13,
                'property' => 44,
                'user' => 23,
                'created_at' => '2020-07-24 11:10:42',
                'updated_at' => '2020-07-24 11:10:42',
            ),
            13 => 
            array (
                'id' => 14,
                'property' => 8,
                'user' => 24,
                'created_at' => '2020-07-24 11:11:07',
                'updated_at' => '2020-07-24 11:11:07',
            ),
            14 => 
            array (
                'id' => 15,
                'property' => 48,
                'user' => 24,
                'created_at' => '2020-07-24 11:11:14',
                'updated_at' => '2020-07-24 11:11:14',
            ),
            15 => 
            array (
                'id' => 16,
                'property' => 43,
                'user' => 24,
                'created_at' => '2020-07-24 11:13:00',
                'updated_at' => '2020-07-24 11:13:00',
            ),
            16 => 
            array (
                'id' => 17,
                'property' => 46,
                'user' => 23,
                'created_at' => '2020-07-24 11:14:45',
                'updated_at' => '2020-07-24 11:14:45',
            ),
            17 => 
            array (
                'id' => 18,
                'property' => 8,
                'user' => 25,
                'created_at' => '2020-07-24 11:15:54',
                'updated_at' => '2020-07-24 11:15:54',
            ),
        ));
        
        
    }
}