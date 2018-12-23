<!DOCTYPE html>
<html lang="KO">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="topnav">
        <div class="navbrand">
            <a  href="/">
                <img src="/images/icon.png" width="25" height="25" alt="">
                <strong class="align-middle"> {{ __('심심한 하루') }} </strong>        
            </a>
        </div>
        <div class="navMenu">
            <ul>
                <li><a href="#"><img src="/images/play.png" width="25" height="25" alt="Music Play"></a></li>
                <li class="ml-3">
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <img src="/images/logout-sketch.png" width="25" height="25" alt="Logout">
                        {{-- {{ __('Logout') }} --}}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="icon">
                <strong> <a href="/home">{{ Auth::user()->name }}</a> </strong>
                <i class="fas fa-bars" id="sidebarCollapse"></i>
            </div>
            <ul class="list-unstyled components">   
                <li>
                    <router-link to="/">
                        <i class="fas fa-home"></i>
                        Home
                    </router-link>
                </li>
            </ul>
        </nav>
        <div id="content">            
            <div id="container">
                <router-view></router-view>
            </div>
        </div>
    </div>
</div>
</body>
</html>
