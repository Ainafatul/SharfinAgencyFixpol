<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 7,
                'name' => 'Ainafatul Nur Muslikah',
                'picture' => 'storage/image/users/nafa.png',
                'created_at' => '2020-06-28 18:25:07',
                'updated_at' => '2020-06-28 18:25:07',
            ),
            1 => 
            array (
                'id' => 35,
                'name' => 'Thoriq Romi',
                'picture' => 'storage/image/users/1598724489.jpeg',
                'created_at' => '2020-08-29 18:08:09',
                'updated_at' => '2020-08-29 18:08:09',
            ),
        ));
        
        
    }
}