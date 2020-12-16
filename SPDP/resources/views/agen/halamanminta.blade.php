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
            <input type="hidden" id="id_agen" name="id_agen" value=" {{ Auth::user()->id }} ">
            <input type="hidden" id="nama_agen" name="nama_agen" value=" {{ Auth::user()->name }} ">
            <div class="form-group">
                <label for="nama_pupuk">Nama Pupuk</label>
                <select class="form-control" id="nama_pupuk" name="nama_pupuk">
                @foreach ($pupuks as $pupuk)
                    <option> {{ $pupuk->nama_pupuk }} </option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pupuk_diminta">Jumlah pupuk yang diminta</label>
                <input required type="number" class="form-control" id="pupuk_diminta" name="pupuk_diminta" placeholder="Masukkkan jumlah pupuk yang diinginkan" min="0"
                oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null"
                oninvalid="this.setCustomValidity('Jumlah pupuk yang diminta wajib diisi')">
            </div>
            <input type="submit" name="" id="" value="Tambah" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection