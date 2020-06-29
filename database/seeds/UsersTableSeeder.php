<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Prasetyo Andi Tetuko',
                'birth_date' => '1999-08-14',
                'gender' => 1,
                'address' => 'Geneng, Kabupaten Ngawi, Jawa Timur 63271',
                'phone' => '085123123123',
                'picture' => NULL,
                'created_at' => '2020-06-28 18:16:14',
                'updated_at' => '2020-06-28 18:16:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ismail Risky Rahmansyah',
                'birth_date' => '1999-05-19',
                'gender' => 1,
                'address' => 'Paron Ngawi',
                'phone' => '083123123123',
                'picture' => NULL,
                'created_at' => '2020-06-28 18:17:18',
                'updated_at' => '2020-06-28 18:17:18',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mas e',
                'birth_date' => '1998-02-06',
                'gender' => 1,
                'address' => 'Malang Malang',
                'phone' => '082123123123',
                'picture' => NULL,
                'created_at' => '2020-06-28 18:19:18',
                'updated_at' => '2020-06-28 18:19:18',
            ),
        ));
        
        
    }
}