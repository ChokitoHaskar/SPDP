@extends('layouts.app')

@section('title', 'Permintaan Pupuk')

@section('content')
<div class="mx-4">
    <table class="table mt-4 mx-auto border">
        <thead class="text-center table-dark">
            <tr>
                <th class="col-1">ID</th>
                <th class="border-right border-left col-4">Nama Pupuk</th>
                <th class="col-1">Total</th>
                <th class="border-right border-left col-2">Tanggal Permintaan</th>
                <th class="col-2">Status Verifikasi</th>
            </tr>
        </thead>
        <?php $rowNum = 1; ?>
        <tbody class="text-center border-bottom">
            @foreach ($permintaans as $permintaan)
                <tr>
                    <td><?php echo $rowNum; $rowNum++ ?></td>
                    <td> {{ $permintaan->nama_pupuk }} </td>
                    <td> {{ $permintaan->jumlah_permintaan }} </td>
                    <td> {{ $permintaan->tanggal_transaksi }} </td>
                    <td> {{ $permintaan->status_verifikasi }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection