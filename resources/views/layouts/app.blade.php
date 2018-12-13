<!DOCTYPE html>
<html lang="ko">
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="navbar w-100">
            @if (Route::has('login'))
                <ul class="w-100">
                    @auth
                        <li class="links left">
                            <a href="{{ url('/home') }}">
                                <img src="/images/icon.png" width="30" height="30" alt="">
                            </a>
                        </li>
                        <li class="links right">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('로그아웃') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @else
                        <li class="links left">
                            <a href="{{ url('/') }}">처음으로</a>
                        </li>
                        <li class="links right">
                            <a href="{{ route('login') }}">로그인</a>
                        </li>
                        <li class="links right">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">회원가입</a>
                            @endif
                        </li>
                    @endauth
                </ul>
            @endif
        </div>
        <main class="py-4  h-95">
            @yield('content')
        </main>
    </div>
</body>
</html>
