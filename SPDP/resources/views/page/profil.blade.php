@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="modal-content w-50 mx-auto" style="background-color: rgba(250, 255, 253, 0.6)">
        @foreach ($profiles as $profile)
        <div class="modal-header text-light" style=" background-color: #342E37">
            <h4 class="modal-title" id="myModalLabel">Profil</h4>
            </div>
        <div class="modal-body p-0 px-5 py-4">
            <p class="text-left"><strong>Nama: </strong><br>
                {{ $profile->name }}
            </p>
            <p class="text-left"><strong>E-mail: </strong><br>
                {{ $profile->email }}
            </p>
            <p class="text-left"><strong>Role: </strong><br>
                {{ $profile->role }}
            </p>
            @can('isAgen')
            <p class="text-left mb-4"><strong>Alamat: </strong><br>
                {{ $profile->alamat }}
            </p>
            @endcan
        </div>
        @endforeach
        @can('isManager')
        <div class="modal-footer">
            <center>
                <a href=" {{ Route('manager.editprofile') }} " type="button" class="btn btn-dark">Ubah</a>
            </center>
        </div>
        @endcan
    </div>
@endsection