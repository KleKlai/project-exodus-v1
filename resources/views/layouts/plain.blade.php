<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- App favicon -->
            <link rel="shortcut icon" href="{{ asset('/images/nav.ico') }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

            <!-- Styles -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

            {{-- Font --}}
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
