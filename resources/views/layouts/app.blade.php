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

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-700 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold uppercase text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                    <a class="no-underline font-bold hover:underline" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline font-bold hover:underline" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                    @endif
                    @else
                    <a class="no-underline font-bold hover:underline" href="/caleg">HASIL PENDAFTARAN</a>
                    <span class="font-bold uppercase">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline font-bold hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('LOGOUT') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>
                <img src="{{ asset('image/web-logo.png') }}" alt="" class="h-20">
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
