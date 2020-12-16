@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        Halo <strong>{{ auth()->user()->name }}</strong>, 
                        Anda berhasil login sebagai
                        @can('isManager')
                            <span class="btn btn-success">Manager</span>
                        @elsecan('isAgen')
                            <span class="btn btn-info">Agen</span>
                        @else
                            <span class="btn btn-warning">Driver</span>
                        @endcan
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
