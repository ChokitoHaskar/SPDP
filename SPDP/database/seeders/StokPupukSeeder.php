<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StokPupuk;
use Illuminate\Support\Facades\DB;

class StokPupukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stok_pupuks')->insert([
            'id_pupuk'      => '1',
            'nama_pupuk'    => 'Urea',
            'jumlah_stok'   => '80'
        ]);

        DB::table('stok_pupuks')->insert([
            'id_pupuk'      => '2',
            'nama_pupuk'    => 'ZA (Zwavelzure Amonium)',
            'jumlah_stok'   => '60'
        ]);

        DB::table('stok_pupuks')->insert([
            'id_pupuk'      => '3',
            'nama_pupuk'    => 'SP-36 (super phosphate)',
            'jumlah_stok'   => '56'
        ]);

        DB::table('stok_pupuks')->insert([
            'id_pupuk'      => '4',
            'nama_pupuk'    => 'KCl (Kalium Klorida)',
            'jumlah_stok'   => '34'
        ]);

        DB::table('stok_pupuks')->insert([
            'id_pupuk'      => '5',
            'nama_pupuk'    => 'NPK (Nitrogen Phospate Kalium)',
            'jumlah_stok'   => '46'
        ]);

        DB::table('stok_pupuks')->insert([
            'id_pupuk'      => '6',
            'nama_pupuk'    => 'Dolomite (Kapur Karbonat)',
            'jumlah_stok'   => '58'
        ]);

        DB::table('stok_pupuks')->insert([
            'id_pupuk'      => '7',
            'nama_pupuk'    => 'ZK (Zwavelzure Kali)',
            'jumlah_stok'   => '80'
        ]);
    }
}
