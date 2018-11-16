<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{!! asset('bootstrap-4.1.1-dist/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-sticker.png') }}" />
        <title>VapersPoint</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class="fixed-nav bg-dark" id="page-top">
        @include('layout.header')
        {{-- @yield('content') --}}
    </body>

    <script src="{!! asset('js/app.js') !!}"></script>
    @yield('pageJs')
</html>
