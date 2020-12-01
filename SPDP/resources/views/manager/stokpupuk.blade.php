@extends('layouts.app')

@section('title', 'Stok Pupuk')

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
    <div class="mx-3">
        <table class="table mt-4 mx-auto">
            <thead class="text-center table-dark">
                <tr>
                    <th class="col-1">ID</th>
                    <th class="border-right border-left col-4">Nama Pupuk</th>
                    <th class="col-2">Jumlah Pupuk Tersedia</th>
                </tr>
            </thead>
            <tbody class="text-center border-bottom">
                @foreach ($pupuks as $pupuk)
                    <tr>
                        <td> {{ $pupuk->id_pupuk }} </td>
                        <td> {{ $pupuk->nama_pupuk }} </td>
                        <td> {{ $pupuk->jumlah_stok }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button class="btn btn-dark float-right mr-3 mt-4">
        Tambah Stok
    </button>
@endsection