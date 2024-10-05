<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
        @include('layouts.front')

<main>
        @yield('content')
</main>
        @include('layouts.nav')

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>