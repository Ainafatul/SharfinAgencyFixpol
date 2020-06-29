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
                'id' => 1,
                'email' => 'ProsetyoAndiTetuko@user.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zn0wY6kzS3ZQ.ZOZhvaR0eqI.H/lx/6sid3saDeHQOXdMB7UMbS1S',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:16:14',
                'updated_at' => '2020-06-28 18:16:14',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'IsmailRiskyRahmansyah@user.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sBMncAqYAUBo.7ISRa.4SOGJExszheovdhWRMEwX/wWOrkOucjTCi',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:17:18',
                'updated_at' => '2020-06-28 18:17:18',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'MasE@user.com',
                'role' => 'User',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6VmLjOuVlielH9A7unBBQ.BvdN098IH92CxMI97Lmv9iXAtiJj9rG',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:19:18',
                'updated_at' => '2020-06-28 18:19:18',
            ),
            3 => 
            array (
                'id' => 4,
                'email' => 'BeltsazarAprilio@agent.com',
                'role' => 'Agent',
                'email_verified_at' => NULL,
                'password' => '$2y$10$99JopvSK8efZKDhYAM7IkuuJX5XTF5crzMAmuyVSaVaZ6qmG1/J46',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:21:14',
                'updated_at' => '2020-06-28 18:21:14',
            ),
            4 => 
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
            5 => 
            array (
                'id' => 6,
                'email' => 'Dafawiratama13@admin.com',
                'role' => 'Admin',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QZDiHpFGHEd1dj0Q1nEeCOh3yrd.GDtWVutMjLLPf8sXfvUhEp9Sy',
                'remember_token' => NULL,
                'created_at' => '2020-06-28 18:24:30',
                'updated_at' => '2020-06-28 18:24:30',
            ),
            6 => 
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
            7 => 
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