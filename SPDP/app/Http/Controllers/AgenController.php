<?php

namespace App\Http\Controllers;
use App\Models\TransaksiPermintaan;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function Tambah()
    {
        # code...
    }
}
