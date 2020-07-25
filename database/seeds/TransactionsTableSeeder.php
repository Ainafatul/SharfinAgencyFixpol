<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'property' => 21,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-01-24 09:21:30',
                'updated_at' => '2020-07-24 09:21:30',
            ),
            1 => 
            array (
                'id' => 2,
                'property' => 22,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-02-24 09:29:28',
                'updated_at' => '2020-07-24 09:29:28',
            ),
            2 => 
            array (
                'id' => 3,
                'property' => 26,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-03-24 09:29:31',
                'updated_at' => '2020-07-24 09:29:31',
            ),
            3 => 
            array (
                'id' => 4,
                'property' => 23,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-04-24 09:29:33',
                'updated_at' => '2020-07-24 09:29:33',
            ),
            4 => 
            array (
                'id' => 5,
                'property' => 9,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-01-24 09:29:38',
                'updated_at' => '2020-07-24 09:29:38',
            ),
            5 => 
            array (
                'id' => 6,
                'property' => 30,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-02-24 09:29:41',
                'updated_at' => '2020-07-24 09:29:41',
            ),
            6 => 
            array (
                'id' => 7,
                'property' => 19,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-03-24 09:29:44',
                'updated_at' => '2020-07-24 09:29:44',
            ),
            7 => 
            array (
                'id' => 8,
                'property' => 16,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-04-24 09:29:47',
                'updated_at' => '2020-07-24 09:29:47',
            ),
            8 => 
            array (
                'id' => 9,
                'property' => 27,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-05-24 09:29:49',
                'updated_at' => '2020-07-24 09:29:49',
            ),
            9 => 
            array (
                'id' => 10,
                'property' => 13,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-06-24 09:29:52',
                'updated_at' => '2020-07-24 09:29:52',
            ),
            10 => 
            array (
                'id' => 11,
                'property' => 25,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-07-24 09:29:55',
                'updated_at' => '2020-07-24 09:29:55',
            ),
            11 => 
            array (
                'id' => 12,
                'property' => 24,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-08-24 09:29:59',
                'updated_at' => '2020-07-24 09:29:59',
            ),
            12 => 
            array (
                'id' => 13,
                'property' => 20,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-09-24 09:30:03',
                'updated_at' => '2020-07-24 09:30:03',
            ),
            13 => 
            array (
                'id' => 14,
                'property' => 42,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-05-24 10:52:42',
                'updated_at' => '2020-07-24 10:52:42',
            ),
            14 => 
            array (
                'id' => 15,
                'property' => 31,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-06-24 10:52:45',
                'updated_at' => '2020-07-24 10:52:45',
            ),
            15 => 
            array (
                'id' => 16,
                'property' => 41,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-07-24 10:52:48',
                'updated_at' => '2020-07-24 10:52:48',
            ),
            16 => 
            array (
                'id' => 17,
                'property' => 36,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-08-24 10:52:50',
                'updated_at' => '2020-07-24 10:52:50',
            ),
            17 => 
            array (
                'id' => 18,
                'property' => 29,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-10-24 10:53:19',
                'updated_at' => '2020-07-24 10:53:19',
            ),
            18 => 
            array (
                'id' => 19,
                'property' => 45,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-11-24 10:53:22',
                'updated_at' => '2020-07-24 10:53:22',
            ),
            19 => 
            array (
                'id' => 20,
                'property' => 15,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-12-24 10:53:25',
                'updated_at' => '2020-07-24 10:53:25',
            ),
            20 => 
            array (
                'id' => 21,
                'property' => 28,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-09-24 11:08:41',
                'updated_at' => '2020-07-24 11:08:41',
            ),
            21 => 
            array (
                'id' => 22,
                'property' => 47,
                'agent' => 5,
                'user' => NULL,
                'created_at' => '2020-10-24 11:08:43',
                'updated_at' => '2020-07-24 11:08:43',
            ),
            22 => 
            array (
                'id' => 23,
                'property' => 11,
                'agent' => 16,
                'user' => NULL,
                'created_at' => '2020-11-24 11:09:17',
                'updated_at' => '2020-07-24 11:09:17',
            ),
            23 => 
            array (
                'id' => 24,
                'property' => 40,
                'agent' => 20,
                'user' => NULL,
                'created_at' => '2020-12-24 11:10:02',
                'updated_at' => '2020-07-24 11:10:02',
            ),
        ));
        
        
    }
}