@extends('layouts.app')

@section('title', 'Tambah Stok Pupuk')

@section('content')
    <div class="mx-3">
        <form action=" {{route('manager.updatingstok')}} " method="POST" class="w-50 mx-auto">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama_pupuk">Masukkan nama pupuk yang ingin ditambah stok</label>
                <select class="form-control" id="nama_pupuk" name="nama_pupuk">
                  @foreach ($pupuks as $pupuk)
                      <option value=" {{ $pupuk->id_pupuk }} "> {{ $pupuk->nama_pupuk }} </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group py-2">
                <label for="jumlah_pupuk">Masukkan jumlah stok yang ditambah</label>
                <input type="number" id="jumlah_pupuk" name="jumlah_pupuk" class="form-control" required min="0"
                oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null"
                oninvalid="this.setCustomValidity('Jumlah stok wajib diisi')"
                >
            </div>
            <div class="py-4">
                <input type="submit" value="Tambah" class="btn btn-sm btn-dark w-25">
                <a href="StokPupuk" class="btn btn-sm btn-dark w-25">Batal</a>
            </div>
        </form>
    </div>
@endsection