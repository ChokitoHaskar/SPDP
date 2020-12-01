<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransaksiPermintaan;
use DateTime;
use Illuminate\Support\Facades\DB;

class TransaksiPermintaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi_permintaans')->insert([
            'id_pengguna'       => 2,
            'nama_pupuk'        => 'Urea',
            'jumlah_permintaan' => 5,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ]);
        DB::table('transaksi_permintaans')->insert([
            'id_pengguna'       => 2,
            'nama_pupuk'        => 'ZA (Zwavelzure Amonium)',
            'jumlah_permintaan' => 19,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ]);
        DB::table('transaksi_permintaans')->insert([
            'id_pengguna'       => 2,
            'nama_pupuk'        => 'Dolomite (Kapur Karbonat)',
            'jumlah_permintaan' => 6,
            'tanggal_transaksi' => date('Y-m-d H:i:s'),
        ]);
    }
}
