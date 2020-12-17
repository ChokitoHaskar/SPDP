@extends('layouts.app')

@section('title', 'Transaksi Pengiriman Pupuk')

@section('content')
<div class="mx-4">
    <div class="mx-3">
        <table class="table mt-4 mx-auto">
            <thead class="text-center table-dark">
                <tr>
                    <th class="border-right border-left col-4">Nama Pupuk</th>
                    <th class="col-2">Jumlah Pengiriman</th>
                    <th class="border-right border-left col-2">Tanggal Permintaan</th>
                    <th class="col-2">Nama Driver</th>
                    <th class="border-right border-left col-2">Alamat Agen</th>
                </tr>
            </thead>
            <tbody class="text-center border-bottom">
                @foreach ($pengirimans as $pengiriman)
                <tr>
                    <td> {{ $pengiriman->nama_pupuk }} </td>
                    <td> {{ $pengiriman->jumlah_pengiriman }} </td>
                    <td> {{ $pengiriman->tanggal_pengiriman }} </td>
                    <td> {{ $pengiriman->nama_driver }} </td>
                    <td> {{ $pengiriman->alamat_pengiriman }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="TambahPengiriman" class="btn btn-dark float-right mr-3 mt-4">
        Tambah Data
    </a>
</div>
@endsection