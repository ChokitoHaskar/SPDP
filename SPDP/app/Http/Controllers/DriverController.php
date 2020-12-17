<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TransaksiPengiriman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    public function Liat_Pengiriman()
    {
        $pengirimans = TransaksiPengiriman::where('nama_driver', Auth::user()->name)->where('status_pengiriman', 'Belum Dikirim')->get();
        return view('driver/Pengiriman', compact('pengirimans'));
    }

    public function Update_Status(Request $request)
    {
        DB::table('transaksi_pengirimen')->where('id_transaksi', $request->id)->Update(
            [
                'status_pengiriman' => $request->status,
            ]
        );
        return redirect('driver/LiatPengiriman');
    }

    public function Show_Profile()
    {
        $profiles = User::where('id', Auth::user()->id)->get();
        return view('page/profil', compact('profiles'));
    }
}
