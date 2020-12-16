<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TransaksiPengiriman;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function Liat_Pengiriman()
    {
        $pengirimans = TransaksiPengiriman::all();
        return view('driver/Pengiriman', compact('pengirimans'));
    }

    public function Show_Profile()
    {
        $profiles = User::where('id', Auth::user()->id)->get();
        return view('page/profil', compact('profiles'));
    }
}
