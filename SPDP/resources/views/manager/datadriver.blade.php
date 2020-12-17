@extends('layouts.app')

@section('title', 'Permintaan Pupuk')

@section('content')
<div class="mx-4">
    <table class="table mt-4 mx-auto">
        <thead class="text-center table-dark">
            <tr>
                <th class="col-1">NO</th>
                <th class="border-right border-left col-2">Nama Driver</th>
                <th class="border-left col-2">Id Driver</th>
                <th class="col-1"></th>
            </tr>
        </thead>
        <?php $rowNum = 1; ?>
        <tbody class="text-center border-bottom">
            @foreach ($drivers as $driver)
                <tr>
                    <td><?php echo $rowNum; $rowNum++ ?></td>
                    <td> {{ $driver->name }} </td>
                    <td> {{ $driver->id }} </td>
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