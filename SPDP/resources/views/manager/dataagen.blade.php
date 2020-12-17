@extends('layouts.app')

@section('title', 'Permintaan Pupuk')

@section('content')
<div class="mx-4">
    <table class="table mt-4 mx-auto">
        <thead class="text-center table-dark">
            <tr>
                <th class="border-right border-left col-2">Nama Agen</th>
                <th class="col-1">Id Agen</th>
                <th class="border-left col-2">Alamat</th>
                <th class="col-1"></th>
            </tr>
        </thead>
        <tbody class="text-center border-bottom">
            @foreach ($agens as $agen)
                <tr>
                    <td> {{ $agen->name }} </td>
                    <td> {{ $agen->id }} </td>
                    <td> {{ $agen->alamat }} </td>
                    <td>
                        <a href="  " class="btn btn-primary">
                            Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection