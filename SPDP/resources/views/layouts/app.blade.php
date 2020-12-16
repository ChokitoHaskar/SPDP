<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('./css/app.css')}}" rel="stylesheet">
    {{-- Custom CSS --}}
    <link href="{{asset('./css/simple-sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('./css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('./css/customerror.css')}}" rel="stylesheet">
</head>
<body style="background-color: rgba(0,0,0,0.18)">
    <div id="app">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            @can('isManager')
            <div style="background-color: #3E2F5B" class="text-light" id="sidebar-wrapper">
            <h1 class=" text-center pt-3">Manager</h1>
            <div class="list-group list-group-flush pt-4">
                <a href=" {{ route('manager.permintaan') }} " class="list-group-item list-group-item-action text-light" style="background-color: #3E2F5B">Transaksi Permintaan</a>
                <a href=" {{ route('manager.stok') }} " class="list-group-item list-group-item-action text-light" style="background-color: #3E2F5B">Stok Pupuk</a>
                <a href=" {{ route('manager.pengiriman') }} " class="list-group-item list-group-item-action text-light" style="background-color: #3E2F5B">Transaksi Pengiriman</a>
                <a href=" {{ route('manager.rekap') }} " class="list-group-item list-group-item-action text-light" style="background-color: #3E2F5B">Riwayat Permintaan</a>
                <a href=" {{ route('manager.profile') }} " class="list-group-item list-group-item-action text-light" style="background-color: #3E2F5B">Profil Saya</a>
            </div>
            @elsecan('isAgen')
            <div style="background-color: #0F5257" class="text-light" id="sidebar-wrapper">
            <h1 class=" text-center pt-3">Agen</h1>
            <div class="list-group list-group-flush pt-4">
                <a href=" {{ route('agen.tambah') }} " style="background-color: #0F5257" class="list-group-item list-group-item-action text-light">Transaksi Permintaan</a>
                <a href=" {{ route('agen.rekap') }} " style="background-color: #0F5257" class="list-group-item list-group-item-action text-light">Riwayat Permintaan</a>
                <a href=" {{ route('agen.stok') }} " style="background-color: #0F5257" class="list-group-item list-group-item-action text-light">Stok Pupuk</a>
                <a href=" {{ route('agen.pengiriman') }} " style="background-color: #0F5257" class="list-group-item list-group-item-action text-light">Transaksi Pengiriman Pupuk</a>
                <a href=" {{ route('agen.profile') }} " style="background-color: #0F5257" class="list-group-item list-group-item-action text-light">Profil Saya</a>
            </div>
            @elsecan('isDriver')
            <div style="background-color: #588B8B" class=" text-light" id="sidebar-wrapper">
            <h1 class=" text-center pt-3">Driver</h1>
            <div class="list-group list-group-flush pt-4">
                <a href=" {{ route('driver.pengiriman') }} " style="background-color: #588B8B" class="list-group-item list-group-item-action text-light">Transaksi Pengiriman Pupuk</a>
                <a href=" {{ route('driver.profile') }} " style="background-color: #588B8B" class="list-group-item list-group-item-action text-light">Profil Saya</a>
            </div>
            @endcan
            </div>
            <!-- /#sidebar-wrapper -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #433f9e">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            CV Damai Indah Lestari
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
