<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('accounts')->delete();
        
        \DB::table('accounts')->insert(array (
            0 => 
            array (
                'id' => 5,
                'email' => 'KevinOctavianus@agent.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$91hrKWMmqMl6Ft4Y8VWNZ.GgdGmwLF4/k/nNmd5vx9LLKf/v6rByi',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:22:05',
                'updated_at' => '2020-06-28 18:22:05',
            ),
            1 => 
            array (
                'id' => 7,
                'email' => 'ainafatul@admin.com',
                'role' => 'Admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UCnbDXCSyCOhmI6HtJpFFuRJRod9EYs3ftlK6HwpIOp6V/jqsR9w6',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:25:07',
                'updated_at' => '2020-06-28 18:25:07',
            ),
            2 => 
            array (
                'id' => 16,
                'email' => 'Erysa@agent.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e2/LuuuUH2CBSKspeE7vGOCtbsJu.GoG.wYC2Z5uBzyeS3rmKh9Um',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 21:30:51',
                'updated_at' => '2020-06-28 21:30:51',
            ),
        ));
        
        
    }
}