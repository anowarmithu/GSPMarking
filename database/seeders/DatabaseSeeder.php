<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Solaiman',
            'email' => 'solaiman@gmail.com',
            'password' => bcrypt('solaiman@gmail.com')
        ]);
        User::create([
            'name' => 'Anowar',
            'email' => 'anowar@gmail.com',
            'password' => bcrypt('anowar@gmail.com')
        ]);
    }
}
