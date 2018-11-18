<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-sticker.png') }}" />
        <title>HackDOG Manila</title>
        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        {{-- Stylesheets --}}
        <link rel="stylesheet" href="{!! asset('bootstrap-4.1.1-dist/css/bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('css/app.css') !!}">
        <script>
            var URL = window.location.origin;
        </script>
    </head>
    <body class="admin">
        <div class="app app--template-sidebar">
            @include('layout.admin.parts.header-admin')
            @include('layout.admin.parts.sidebar-admin')
            <main class="app-content">
                @yield('content')
            </main>
        </div>
        
        {{-- Scripts --}}
        <script src="{!! asset('js/app.js') !!}"></script>
        @yield('pageJs')
    </body>
</html>