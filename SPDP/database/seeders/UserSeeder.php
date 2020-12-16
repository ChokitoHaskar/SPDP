<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
            'name'     => 'Chokito Fararicki Sisi Haskar',
            'email'    => 'chokito@gmail.com',
            'password' => Hash::make('choki12345'),
            'role'     => 'manager'
        ]);

        DB::table('users')->insert([
            'name'     => 'Ifan Rendi',
            'email'    => 'ifan@gmail.com',
            'password' => Hash::make('ifan12345'),
            'role'     => 'agen',
            'alamat'   => 'Jember'
        ]);

        DB::table('users')->insert([
            'name'     => 'Abdul Mufid Efendi',
            'email'    => 'upit@gmail.com',
            'password' => Hash::make('upit12345'),
            'role'     => 'driver'
        ]);

        DB::table('users')->insert([
            'name'     => 'Nur Lailatul Damara Putri',
            'email'    => 'puput@gmail.com',
            'password' => Hash::make('puput12345'),
            'role'     => 'agen',
            'alamat'   => 'Situbondo'
        ]);
    }
}
