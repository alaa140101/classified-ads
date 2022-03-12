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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body dir="rtl" style="text-align: right">
    <div id="app">
        
        @include('partials/navbar')

        <div class="jumbotron text-center bg-secondary">
            @include('partials/searchfrm')
        </div>

        <div class="container">
            @include('partials/categoryNav')
        </div>

        <main class="container">
            @yield('content')
        </main>

        <footer class="jumbotron text-center bg-secondary mt-4 p-3">
            @include('partials/footer')
          </footer>
    </div>
</body>
</html>
