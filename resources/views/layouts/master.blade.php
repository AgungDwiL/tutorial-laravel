<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-page')</title>
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css') }}">
    
    {{-- For add specialized 'head' each page --}}
    @yield('head-page') 
</head>

<body>
    @include('layouts.navbar')

    {{-- Inpun content here --}}
    @yield('content')

    {{-- @include('footer') --}}

    {{-- For add specialized 'scripts' each page --}}
    @yield('scripts-page')

</body>
</html>