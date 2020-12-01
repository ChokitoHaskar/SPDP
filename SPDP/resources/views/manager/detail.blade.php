@extends('layouts.app')

@section('title', 'Detail Permintaan')

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
    @foreach ($permintaans as $permintaan)
    <div class="card mx-auto w-50">
        <div class="card-body">
            <h2 class="text-center font-weight-bold">DETAIL</h2>
            <p>Nama Pupuk : {{ $permintaan->nama_pupuk}} </p>
            <p>Total : {{ $permintaan->jumlah_permintaan}} karung </p>
            <p>Tanggal : {{ $permintaan->tanggal_transaksi}} </p>
            <div class=" dropdown-divider"></div>
            <form action=" {{ route('manager.updating') }} " class="mt-4" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name='id' value="{{ $permintaan->id_transaksi}}">
                <input type="submit" class="btn btn-sm btn-success w-25"    name="status"   value="Disetujui">
                <input type="submit" class="btn btn-sm btn-danger w-25"     name="status"   value="Ditolak">
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection