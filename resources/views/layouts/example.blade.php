<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Home') | {{ config('app.name') }}</title>
</head>
<body>
    @hasSection('header')
        <h1>This page has a header</h1>
        @yield('header')
    @endif

    @yield('content')

    <footer>
        @section('linksFooter')
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
        @show
    </footer>
</body>
</html>
