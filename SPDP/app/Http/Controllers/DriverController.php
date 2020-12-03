<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiPengiriman;

class DriverController extends Controller
{
    public function Liat_Pengiriman()
    {
        $pengirimans = TransaksiPengiriman::all();
        return view('driver/Pengiriman', compact('pengirimans'));
    }
}
