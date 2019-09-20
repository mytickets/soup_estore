<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'site title') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/site.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

        <!-- Styles -->
        <link href="{{ asset('css/site.css') }}" rel="stylesheet">

        <script src="/soup2_files/jquery.min.js"></script>

    </head>
    <body>
        <header>
            @yield('sidebar')
        </header>
        
        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div id="site"></div>
        </footer>
    </body>
</html>
