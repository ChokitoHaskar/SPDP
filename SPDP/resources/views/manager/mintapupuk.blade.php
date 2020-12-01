@extends('layouts.app')

@section('title', 'Permintaan Pupuk')

@section('sidebar')
<div class="bg-dark text-light pt-5" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
        <a href=" {{ route('manager.permintaan') }} " class="list-group-item list-group-item-action bg-dark text-light">Transaksi Permintaan</a>
        <a href=" {{ route('manager.stok') }} " class="list-group-item list-group-item-action bg-dark text-light">Stok Pupuk</a>
        <a href=" {{ route('manager.rekap') }} " class="list-group-item list-group-item-action bg-dark text-light">Riwayat Transaksi</a>
    </div>
</div>
@endsection

@section('content')
<div class="mx-4">
    <table class="table mt-4 mx-auto">
        <thead class="text-center table-dark">
            <tr>
                <th class="col-1">ID</th>
                <th class="border-right border-left col-4">Nama Pupuk</th>
                <th class="col-1">Total</th>
                <th class="border-right border-left col-2">Tanggal Permintaan</th>
                <th class="col-2">Status Verifikasi</th>
                <th class="col-1">Action</th>
            </tr>
        </thead>
        <tbody class="text-center border-bottom">
            @foreach ($permintaans as $permintaan)
                <tr>
                    <td> {{ $permintaan->id_transaksi }} </td>
                    <td> {{ $permintaan->nama_pupuk }} </td>
                    <td> {{ $permintaan->jumlah_permintaan }} </td>
                    <td> {{ $permintaan->tanggal_transaksi }} </td>
                    <td> {{ $permintaan->status_verifikasi }} </td>
                    <td>
                        <a href=" {{ route('manager.verifikasi', $permintaan->id_transaksi) }} " class="btn btn-primary">
                            Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection