<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(GuideLinesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }
}
