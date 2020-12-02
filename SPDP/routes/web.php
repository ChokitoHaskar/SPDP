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
    // Pengelolaan permintaan Agen
    Route::get('/PermintaanPupuk', 'AdminController@Transaksi_Permintaan')->name('permintaan');
    Route::get('/DetailPermintaan/{id}', 'AdminController@Verifikasi')->name('verifikasi');
    Route::post('update', 'AdminController@Update_Verifikasi')->name('updating');
    Route::get('/RiwayatPupuk', 'AdminController@Rekap_Permintaan')->name('rekap');
    // Pengelolaan stok Pupuk
    Route::get('/StokPupuk', 'AdminController@Stok_Pupuk')->name('stok');
    Route::get('/TambahStok', 'AdminController@Tambah_Stok')->name('tambahstok');
    Route::post('UpdatingStok', 'AdminController@Tambah')->name('updatingstok');
});

// Agen
Route::middleware('can:isAgen')->prefix('agen')->name('agen.')->group(function() {
    // Pengelolaan meminta pupuk
    Route::get('/RiwayatMinta', 'AgenController@Rekap_Meminta')->name('rekap');
    Route::get('/MemintaLagi', 'AgenController@Minta_Lagi')->name('tambah');
    Route::post('create', 'AgenController@Tambah')->name('creating');
    // Melihat stok pupuk
    Route::get('/LiatStok', 'AgenController@Stok_Pupuk')->name('stok');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
