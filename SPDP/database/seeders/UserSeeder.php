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
            'name'     => 'Chokito',
            'email'    => 'chokito@gmail.com',
            'password' => Hash::make('choki12345'),
            'role'     => 'manager'
        ]);

        DB::table('users')->insert([
            'name'     => 'Ifan',
            'email'    => 'ifan@gmail.com',
            'password' => Hash::make('ifan12345'),
            'role'     => 'agen'
        ]);

        DB::table('users')->insert([
            'name'     => 'Upit',
            'email'    => 'upit@gmail.com',
            'password' => Hash::make('upit12345'),
            'role'     => 'driver'
        ]);
    }
}
