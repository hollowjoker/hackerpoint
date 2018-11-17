<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-sticker.png') }}" />
        <title>HackDOG Manila</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script>
            var test = window.location.origin;
        </script>
    </head>
    <body class="front">
        @include('layout.front.header')
        @yield('content')
    </body>

    <script src="{!! asset('js/app.js') !!}"></script>
    @yield('pageJs')
</html>
