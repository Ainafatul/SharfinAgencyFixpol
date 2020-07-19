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
            3 => 
            array (
                'id' => 17,
                'email' => 'ainafatul20@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K1yBiEd54HliNLdaytkjGuc7at178TNYjg0RuNXc0JtJI1HbedlMa',
                'remember_token' => NULL,
                'created_at' => '2020-07-17 09:41:17',
                'updated_at' => '2020-07-17 09:41:17',
            ),
            4 => 
            array (
                'id' => 18,
                'email' => 'Dafawiratama13@admin.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XwXM1DBS5QJHD7RLYLmLi.M.jHpFS4LAIFd81DPHFpWxByiEVZhIq',
                'remember_token' => NULL,
                'created_at' => '2020-07-18 05:53:12',
                'updated_at' => '2020-07-18 05:53:12',
            ),
            5 => 
            array (
                'id' => 19,
                'email' => 'caca@gmail.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eJLURuz4uJpek3vYOjFTJ.YmKrZ8uulnHD0BwmqHUsAro/N4e/n86',
                'remember_token' => NULL,
                'created_at' => '2020-07-18 07:20:47',
                'updated_at' => '2020-07-18 07:20:47',
            ),
        ));
        
        
    }
}