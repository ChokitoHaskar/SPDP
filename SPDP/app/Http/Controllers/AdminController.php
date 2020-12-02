<?php

namespace App\Http\Controllers;

use App\Models\StokPupuk;
use App\Models\TransaksiPermintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function Transaksi_Permintaan()
    {
        $permintaans = TransaksiPermintaan::where('status_verifikasi', 'Belum Diverifikasi')->get();
        return view('manager.mintapupuk', ['permintaans' => $permintaans]);
    }

    public function Verifikasi($id)
    {
        $permintaans = TransaksiPermintaan::where('id_transaksi', $id)->get();
        return view('manager.detail', ['permintaans' => $permintaans]);
    }

    public function Update_Verifikasi(Request $request)
    {
        DB::table('transaksi_permintaans')->where('id_transaksi',$request->id)->update([
            'status_verifikasi' => $request->status
        ]);
        return redirect('manager/PermintaanPupuk');
    }

    public function Rekap_Permintaan()
    {
        $permintaans = TransaksiPermintaan::all();
        return view('manager/riwayatminta', ['permintaans' => $permintaans]);
    }

    public function Stok_Pupuk()
    {
        $pupuks = StokPupuk::all();
        return view('manager/stokpupuk', ['pupuks' => $pupuks]);
    }

    public function Tambah_Stok()
    {
        $pupuks = StokPupuk::all();
        return view('manager.tambahpupuk', ['pupuks' => $pupuks]);
    }

    public function Tambah(Request $request)
    {
        DB::table('stok_pupuks')->where('id_pupuk', $request->nama_pupuk)->increment(
            'jumlah_stok', $request->jumlah_pupuk
        );
        return redirect('manager/StokPupuk');
    }
}