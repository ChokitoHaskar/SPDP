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
    <link href="{{asset('./css/customerror.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-dark text-light" id="sidebar-wrapper">
            @can('isManager')
            <h1 class=" text-center pt-3">Manager</h1>
            <div class="list-group list-group-flush pt-4">
                <a href=" {{ route('manager.permintaan') }} " class="list-group-item list-group-item-action bg-dark text-light">Transaksi Permintaan</a>
                <a href=" {{ route('manager.stok') }} " class="list-group-item list-group-item-action bg-dark text-light">Stok Pupuk</a>
                <a href=" {{ route('manager.rekap') }} " class="list-group-item list-group-item-action bg-dark text-light">Riwayat Transaksi</a>
            </div>
            @elsecan('isAgen')
            <h1 class=" text-center pt-3">Agen</h1>
            <div class="list-group list-group-flush pt-4">
                <a href=" {{ route('agen.tambah') }} " class="list-group-item list-group-item-action bg-dark text-light">Transaksi Permintaan</a>
                <a href=" {{ route('agen.rekap') }} " class="list-group-item list-group-item-action bg-dark text-light">Riwayat Permintaan</a>
                <a href=" {{ route('agen.stok') }} " class="list-group-item list-group-item-action bg-dark text-light">Stok Pupuk</a>
            </div>
            @endcan
            </div>
            <!-- /#sidebar-wrapper -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            SPDP
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
