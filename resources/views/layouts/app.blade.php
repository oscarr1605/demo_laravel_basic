<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Demo Laravel') }} | @yield('title')</title>

    <!-- Font Awesome -->
    <script defer src="{{ asset('js/all.js') }}" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <main class="container">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
