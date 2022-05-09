<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    @notifyCss
    @notifyJs

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    @yield('styles')
</head>

<body>
    <div id="app">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    @if (auth()->user())
                        @if (auth()->user()->level == 'ADMIN')
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        @else
                            <a href="{{ route('jadwal') }}" class="nav-link">Home</a>
                        @endif
                    @endif

                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#drop" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div id="drop" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </li>
            </ul>
        </nav>
        @guest
        @else
            <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
                <!-- Brand Logo -->
                <a href="#" class="brand-link" style="text-decoration: none">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/img/logo.jpeg') }}" width="450" alt="">
                        </div>
                        <div class="col">
                            <span class=" font-weight-light"> RUMAH SAKIT</span>
                        </div>
                    </div>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="info text-white">


                            {{ Auth::user()->name }}
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            @if (auth()->user()->level == 'ADMIN')

                                <li class="nav-item">
                                    <a href="{{ route('home') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Dashboard
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#maps-r"
                                        class="nav-link btn bg-transparent text-white text-start w-100"
                                        aria-controls="manajemen" role="button" aria-expanded="true">
                                        <i class="nav-icon fa-solid fa-map"></i>
                                        Maps
                                        <i class="fas fa-sort-down float-end"></i>
                                    </a>

                                    <div class="collapse {{ in_array(request()->route()->getName(),['maps', 'map puskesmas', 'rute rumahsakit'])? 'show': '' }}"
                                        id="maps-r" style="">
                                        <ul class="nav ms-4 ps-3">
                                            <li class="nav-item w-100 ">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'maps'? 'text-white bg-info': '' }}"
                                                    href="{{ route('maps') }}">Rumah Sakit</a>
                                            </li>
                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'map puskesmas'? 'text-white bg-info': '' }}"
                                                    href="{{ route('map puskesmas') }}">
                                                    Puskesmas</a>
                                            </li>
                                            <li class="nav-item  w-100 ">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'rute rumahsakit'? 'text-white bg-info': '' }}"
                                                    href="{{ route('rute rumahsakit') }}">Rute</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="collapse" href="#data-r"
                                        class="nav-link btn bg-transparent text-white text-start w-100"
                                        aria-controls="manajemen" role="button" aria-expanded="true">
                                        <i class="nav-icon fa-solid fa-database"></i>
                                        Data
                                        <i class="fas fa-sort-down float-end"></i>
                                    </a>

                                    <div class="collapse {{ in_array(request()->route()->getName(),['halaman data', 'puskesmas', 'halaman tematik', 'rumah sakit'])? 'show': '' }}"
                                        id="data-r" style="">
                                        <ul class="nav ms-4 ps-3">
                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'halaman data'? 'text-white bg-info': '' }}"
                                                    href="{{ route('halaman data') }}">Data Lokasi
                                                    Rumah Sakit</a>
                                            </li>

                                            <li class="nav-item w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'puskesmas'? 'text-white bg-info': '' }}"
                                                    href="{{ route('puskesmas') }}">Data Lokasi Rawat Inap</a>
                                            </li>
                                            <li class="nav-item  w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'halaman tematik'? 'text-white bg-info': '' }}"
                                                    href="{{ route('halaman tematik') }}">Data Tematik</a>
                                            </li>
                                            <li class="nav-item  w-100">
                                                <a class="dropdown-item {{ request()->route()->getName() == 'rumah sakit'? 'text-white bg-info': '' }}"
                                                    href="{{ route('rumah sakit') }}">Rumah
                                                    Sakit</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('maps') }}" class="nav-link">
                                        <i class="nav-icon fa-solid fa-book"></i>
                                        <p>
                                            Panduan
                                        </p>
                                    </a>
                                </li>
                            @elseif(auth()->user()->level == 'RS')
                                <li class="nav-item">
                                    <a href="{{ route('jadwal') }}" class="nav-link">
                                        <i class="nav-icon fas fa-th"></i>
                                        <p>
                                            Jadwal
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('halaman data2') }}" class="nav-link">
                                        <p>Data Dokter</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ruangan') }}" class="nav-link">
                                        <p>Ruangan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('saran') }}" class="nav-link">
                                        <p>Saran</p>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            @endif
            @guest
                <main class="mt-4">
                @else
                    <main class="content-wrapper mt-4">
                        @endif
                        @yield('content')
                    </main>
            </div>
            <script src="{{ asset('js/app.js') }}"></script>
            @stack('DataTables')
            @stack('scripts')
        </body>

        </html>
