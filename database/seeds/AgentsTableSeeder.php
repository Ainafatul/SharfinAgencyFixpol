<?php

use Illuminate\Database\Seeder;

class AgentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('agents')->delete();

        \DB::table('agents')->insert(array (
            0 =>
            array (
                'id' => 4,
                'agency' => 'Berdua Bahagia',
                'job' => 'Mahasiswa',
                'name' => 'Beltsazar Aprilio Trisna Prakasa',
                'birth_date' => '1999-04-08',
                'gender' => 1,
                'address' => 'Beran Ngawi',
                'phone' => '087123123123',
                'picture' => 'storage/image/users/belza.png',
                'approve' => NULL,
                'created_at' => '2020-06-28 18:21:14',
                'updated_at' => '2020-06-28 19:32:27',
            ),
            1 =>
            array (
                'id' => 5,
                'agency' => 'Berdua Bahagia',
                'job' => 'Mahasiswa',
                'name' => 'Yeheskiel Kevin Octavianus',
                'birth_date' => '1999-09-29',
                'gender' => 1,
                'address' => 'Geneng, Kabupaten Ngawi, Jawa Timur 63271',
                'phone' => '089123123123',
                'picture' => 'storage/image/users/kevin.png',
                'approve' => '2020-06-29',
                'created_at' => '2020-06-28 18:22:05',
                'updated_at' => '2020-06-28 19:32:31',
            ),
            2 =>
            array (
                'id' => 16,
                'agency' => 'Semen Paron',
                'job' => 'Cabe',
                'name' => 'Erysa Nimastuti',
                'birth_date' => '1413-12-14',
                'gender' => 1,
                'address' => 'SEMEN',
                'phone' => '123412345612',
                'picture' => 'storage/image/users/erysa.png',
                'approve' => NULL,
                'created_at' => '2020-06-28 21:30:51',
                'updated_at' => '2020-06-28 21:35:14',
            ),
        ));


    }
}
