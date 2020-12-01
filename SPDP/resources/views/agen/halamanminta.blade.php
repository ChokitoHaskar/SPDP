@extends('layouts.app')

@section('title', 'Detail Permintaan')

@section('sidebar')
<div class="bg-dark text-light pt-5" id="sidebar-wrapper">
    <div class="list-group list-group-flush">
        <a href=" {{ route('agen.rekap') }} " class="list-group-item list-group-item-action bg-dark text-light">Riwayat Transaksi</a>
    </div>
</div>
@endsection

@section('content')
<div class="mx-4">
    <form action=" {{ route('agen.creating') }} " class="mx-auto w-50" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="id_pengguna" value="2">
            <div class="form-group">
                <label for="nama_pupuk">Nama Pupuk</label>
                <select class="form-control" id="nama_pupuk" name="nama_pupuk">
                  <option>Urea</option>
                  <option>ZA (Zwavelzure Amonium)</option>
                  <option>SP-36 (super phosphate)</option>
                  <option>KCl (Kalium Klorida)</option>
                  <option>NPK (Nitrogen Phospate Kalium)</option>
                  <option>Dolomite (Kapur Karbonat)</option>
                  <option>ZK (Zwavelzure Kali)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pupuk_diminta">Jumlah pupuk yang diminta</label>
                <input required type="number" class="form-control" id="pupuk_diminta" name="pupuk_diminta" aria-describedby="emailHelp" placeholder="Masukkkan jumlah pupuk yang diinginkan">
            </div>
            <input type="submit" name="" id="" value="Tambah" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection