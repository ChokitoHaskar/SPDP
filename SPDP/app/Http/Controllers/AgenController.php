<?php

namespace App\Http\Controllers;

use App\Models\StokPupuk;
use App\Models\TransaksiPermintaan;
use Illuminate\Http\Request;
use App\Models\TransaksiPengiriman;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AgenController extends Controller
{
    public function Rekap_Meminta()
    {
        $permintaans = TransaksiPermintaan::where('id_agen', Auth::user()->id)->get();
        return view('agen.riwayatminta', compact('permintaans'));
    }

    public function Minta_Lagi()
    {
        $pupuks = StokPupuk::all();
        return view('agen.halamanminta', compact('pupuks'));
    }

    public function Tambah(Request $request)
    {
        DB::table('transaksi_permintaans')->insert(
            [
            'id_agen' => $request->id_agen,
            'nama_agen' => $request->nama_agen,
            'nama_pupuk' => $request->nama_pupuk,
            'jumlah_permintaan' => $request->pupuk_diminta,
            'tanggal_transaksi' => date('Y-m-d H:i:s')
            ]
        );

        return redirect('agen/RiwayatMinta');
    }

    public function Stok_Pupuk()
    {
        $pupuks = StokPupuk::all();
        return view('agen/stokpupuk', compact('pupuks'));
    }

    public function Liat_Pengiriman()
    {
        $pengirimans = TransaksiPengiriman::all();
        return view('agen/Pengiriman', compact('pengirimans'));
    }

    public function Show_Profile()
    {
        $profiles = User::where('id', Auth::user()->id)->get();
        return view('page/profil', compact('profiles'));
    }
}
