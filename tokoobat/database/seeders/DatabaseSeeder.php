<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Administrator 1',
            'email' => 'admini@admin.com',
            'level' => 'admin',
            'password' => bcrypt('root123'),
        ]);
    }
}
