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

<body class="bg-gradient-to-b  from-blue-800 via-blue-700 to-blue-200 h-full antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-700 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold uppercase text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base hidden md:block">
                    <a class="no-underline font-bold hover:underline" href="/">HOME</a>
                    <a class="no-underline font-bold hover:underline" href="/pendaftaran">DAFTAR</a>
                    @guest
                    <a class="no-underline hover:underline font-bold" href="{{ route('login') }}">{{ __('ADMIN') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <a class="no-underline font-bold hover:underline" href="/dashboard">DASHBOARD</a>
                    {{-- <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form> --}}
                    @endguest
                </nav>
                <img src="{{ asset('image/web-logo.png') }}" alt="" class="h-20">
            </div>
        </header>

        @yield('content')
    </div>
</body>

</html>
