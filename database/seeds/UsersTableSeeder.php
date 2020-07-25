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
            3 => 
            array (
                'id' => 17,
                'name' => 'Ainafatul Nur Muslikah',
                'birth_date' => '1996-12-30',
                'gender' => 0,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1594978877.jpeg',
                'created_at' => '2020-07-17 09:41:17',
                'updated_at' => '2020-07-17 09:41:17',
            ),
            4 => 
            array (
                'id' => 18,
                'name' => 'Dafa Wiratama',
                'birth_date' => '1988-02-01',
                'gender' => 1,
                'address' => 'Geneng',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595051592.jpeg',
                'created_at' => '2020-07-18 05:53:12',
                'updated_at' => '2020-07-18 05:53:12',
            ),
            5 => 
            array (
                'id' => 19,
                'name' => 'Caca',
                'birth_date' => '1995-01-31',
                'gender' => 0,
                'address' => 'Gwneng',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595056847.jpeg',
                'created_at' => '2020-07-18 07:20:47',
                'updated_at' => '2020-07-18 07:20:47',
            ),
            6 => 
            array (
                'id' => 23,
                'name' => 'User1',
                'birth_date' => '1995-01-31',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595587635.jpeg',
                'created_at' => '2020-07-24 10:47:15',
                'updated_at' => '2020-07-24 10:47:15',
            ),
            7 => 
            array (
                'id' => 24,
                'name' => 'user2',
                'birth_date' => '1996-11-14',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595587698.jpeg',
                'created_at' => '2020-07-24 10:48:18',
                'updated_at' => '2020-07-24 10:48:18',
            ),
            8 => 
            array (
                'id' => 25,
                'name' => 'User3',
                'birth_date' => '1997-02-04',
                'gender' => 1,
                'address' => 'Malang',
                'phone' => '085735782195',
                'picture' => 'storage/image/users/1595587755.jpeg',
                'created_at' => '2020-07-24 10:49:15',
                'updated_at' => '2020-07-24 10:49:15',
            ),
        ));
        
        
    }
}