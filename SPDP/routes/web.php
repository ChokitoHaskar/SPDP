<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@Index');


// Admin
Route::middleware('can:isManager')->prefix('manager')->name('manager.')->group(function (){
    Route::get('/PermintaanPupuk', 'AdminController@Transaksi_Permintaan')->name('permintaan');
    Route::get('/DetailPermintaan/{id}', 'AdminController@Verifikasi')->name('verifikasi');
    Route::post('update', 'AdminController@Update_Verifikasi')->name('updating');
    Route::get('/RiwayatPupuk', 'AdminController@Rekap_Permintaan')->name('rekap');
    Route::get('/StokPupuk', 'AdminController@Stok_Pupuk')->name('stok');
});

// Agen
Route::middleware('can:isAgen')->prefix('agen')->name('agen.')->group(function() {
    Route::get('/RiwayatMinta', 'AgenController@Rekap_Meminta')->name('rekap');
    Route::get('/MemintaLagi', 'AgenController@Minta_Lagi')->name('tambah');
    Route::post('create', 'AgenController@Tambah')->name('creating');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
