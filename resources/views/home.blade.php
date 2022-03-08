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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body{
            background-color: #12343b;
            width: 100%;
            height: 100%;
        }

        .content{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-left: 100px;
        }

        .profile{
            width: 15rem;
            height: 5rem;
            margin-top: 1rem;
            background-color: tomato;
            text-align: center;
            padding-top: 1.8rem;
        }

        .profile a{
            color: white;
        }

        .penduduk{
            width: 15rem;
            height: 5rem;
            background-color: tomato;
            margin-top: 4rem;
            text-align: center;
            padding-top: 1.8rem;
        }

        .penduduk a{
            color: white;
        }

        .potensi{
            width: 15rem;
            height: 5rem;
            background-color: tomato;
            margin-top: 4rem;
            text-align: center;
            padding-top: 1.8rem;
        }

        .potensi a{
            color: white;
        }

        .produk{
            width: 15rem;
            height: 5rem;
            background-color: tomato;
            margin-top: 4rem;
            text-align: center;
            padding-top: 1.8rem;
        }

        .produk a{
            color: white;
        }

        .option{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .gambar{
            width: 50rem;
            margin-right: 100px;
            margin-top: 20px;
        }

        .title{
            text-align: left;
            font-size: 3rem;
            margin-bottom: 3rem;
            color: #dddddd;
            margin-top: 50px;
            margin-left: 100px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Lanny Jaya
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <h1 class="title">Admin Page</h1>
        <div class="option">
            <main class="py-4 content">
                <div class="profile">
                    <a href="{{route('profile.edit', 1)}}">Edit Profile</a> <br>
                </div>
                <div class="potensi" >
                    <a href="{{route('potensi.create')}}">Add New Potensi</a> <br>
                </div>
               <div class="penduduk">
                    <a href="{{route('penduduk.create')}}">Add New Penduduk</a> <br>
               </div>
               <div class="produk">
                    <a href="{{route('produk.create')}}">Add Produk</a> <br>
               </div>
            </main>
            <img class="gambar" src="img/Screenshot_22.jpg" alt="">
        </div>
    </div>
</body>
</html>
