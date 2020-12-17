@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="modal-content w-50 mx-auto" style="background-color: rgba(250, 255, 253, 0.6)">
        @foreach ($profiles as $profile)
        <div class="modal-header text-light" style=" background-color: #342E37">
            <h4 class="modal-title" id="myModalLabel">Profil</h4>
            </div>
            <div class="modal-body p-0 px-5 py-4">
            <form action=" {{ Route('manager.updatedprofile') }} " method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name" class=" form-label font-weight-bold">Nama: </label>
                    <input type="text" class=" form-control" id="name" name="name" placeholder=" {{ Auth::user()->name }} " required>
                </div>
                <div class="mb-3">
                    <label for="email" class=" form-label font-weight-bold">Email: </label>
                    <input type="email" class=" form-control" id="email" name="email" placeholder=" {{ Auth::user()->email }} " required>
                </div>
                <div class="py-3">
                    <input type="submit" class="btn btn-success" value="Simpan Data">
                </div>
            </form>
            @can('isAgen')
            <p class="text-left mb-4"><strong>Alamat: </strong><br>
                {{ $profile->alamat }}
            </p>
            @endcan
        </div>
        @endforeach
    </div>
@endsection