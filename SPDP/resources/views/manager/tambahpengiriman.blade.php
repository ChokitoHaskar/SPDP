@extends('layouts.app')

@section('title', 'Tambah Pengiriman    ')

@section('content')
    <div class="mx-3">
        <div class="border mx-auto w-75 my-2 py-3 bg-light">
            <form action=" {{route('manager.menambahpengiriman')}} " method="POST" class="w-75 mx-auto">
                {{ csrf_field() }}
                <div class="form-group py-2">
                    <label for="nama_pupuk">Masukkan nama pupuk yang ingin dikirimkan</label>
                    <select class="form-control" id="nama_pupuk" name="nama_pupuk">
                        @foreach ($pupuks as $pupuk)
                            <option value=" {{ $pupuk->nama_pupuk }} "> {{ $pupuk->nama_pupuk }} </option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group py-2">
                    <label for="jumlah_pupuk">Masukkan jumlah pupuk yang ingin dikirimkan</label>
                    <input type="number" id="jumlah_pupuk" name="jumlah_pupuk" class="form-control" required min="0"
                    oninput="this.value = !!this.value && Math.abs(this.value) >= 1 ? Math.abs(this.value) : null"
                    oninvalid="this.setCustomValidity('Jumlah stok wajib diisi')"
                    >
                </div>
                <div class="form-group py-2">
                    <label class="control-label" for="date">Masukkan tanggal pengiriman</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" required>
                </div>
                <div class="form-group py-2">
                    <label for="nama_pupuk">Masukkan nama driver</label>
                    <select class="form-control" id="nama_driver" name="nama_driver">
                      @foreach ($drivers as $driver)
                          <option value=" {{ $driver->name }} "> {{ $driver->name }} </option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group py-2">
                    <label class="control-label" for="address">Masukkan alamat agen</label>
                    <input class="form-control" id="adress" name="address" placeholder="" type="text" required>
                </div>
                <div class="py-4">
                    <input type="submit" value="Tambah" class="btn btn-sm btn-dark w-25">
                </div>
            </form>
        </div>
    </div>
@endsection