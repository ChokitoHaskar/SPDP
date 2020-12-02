@extends('layouts.app')

@section('title', 'Stok Pupuk')

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
@endsection