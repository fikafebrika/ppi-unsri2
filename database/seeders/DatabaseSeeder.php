<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Paul Rio Marolop',
            'nikmhs' => '09031381924000',
            'nokta' => '112233',
            'profesiutama' => 'Dosen',
            'email' => 'paul@gmail.com',
            'password' => bcrypt('paul123')
        ]);
    }
}
