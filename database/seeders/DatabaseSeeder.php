<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        // User::create([
        //     'name' => 'Paul Rio Marolop',
        //     'username' => 'paulllll',
        //     'nikmhs' => '09031381924000',
        //     'nokta' => '112233',
        //     'profesiutama' => 'Dosen',
        //     'email' => 'paul@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);

        Admin::create([
            'nama_lengkap' => 'Admin',
            'nomor_induk_pegawai' => '123456',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => '1'
        ]);
    }
}
