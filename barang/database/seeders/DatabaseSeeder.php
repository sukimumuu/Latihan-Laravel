<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Power1Admin',
            'email' => 'Power1Admin@gmail.com',
            'password' => bcrypt('poweradmin333'),
            'level' => 'Admin'
        ]);
    }
}
