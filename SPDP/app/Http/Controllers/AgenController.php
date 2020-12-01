<?php

namespace App\Http\Controllers;
use App\Models\TransaksiPermintaan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AgenController extends Controller
{
    public function Rekap_Meminta()
    {
        $permintaans = TransaksiPermintaan::all();
        return view('agen.riwayatminta', compact('permintaans'));
    }

    public function Minta_Lagi()
    {
        return view('agen.halamanminta');
    }

    public function Tambah(Request $request)
    {
        DB::table('transaksi_permintaans')->insert(
            [
            'id_pengguna' => $request->id_pengguna,
            'nama_pupuk' => $request->nama_pupuk,
            'jumlah_permintaan' => $request->pupuk_diminta,
            'tanggal_transaksi' => date('Y-m-d H:i:s')
            ]
        );

        return redirect('agen/RiwayatMinta');
    }
}
