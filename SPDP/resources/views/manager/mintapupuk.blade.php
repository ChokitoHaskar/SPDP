@extends('layouts.app')

@section('title', 'Permintaan Pupuk')

@section('content')
<div class="mx-4">
    <table class="table mt-4 mx-auto">
        <thead class="text-center table-dark">
            <tr>
                <th class="col-1">NO</th>
                <th class="border-right border-left col-3">Nama agen</th>
                <th class="border-right border-left col-3">Nama Pupuk</th>
                <th class="col-1">Total</th>
                <th class="border-right border-left col-2">Tanggal Permintaan</th>
                <th class="col-2">Status Verifikasi</th>
                <th class="col-1"></th>
            </tr>
        </thead>
        <?php $rowNum = 1; ?>
        <tbody class="text-center border-bottom">
            @foreach ($permintaans as $permintaan)
                <tr>
                    <td><?php echo $rowNum; $rowNum++ ?></td>
                    <td> {{ $permintaan->nama_agen }} </td>
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