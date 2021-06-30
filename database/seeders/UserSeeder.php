<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Dandy Bagus Prasetyo',
            'nik'       => '123456789',
            'position'       => 'Anggota',
            'email'     => 'dandybagusprasetyo@gmail.com',
            'password'  => Hash::make('dandyp@ssw0rd123'),
            'role'      => '1',
        ]);
    }
}
