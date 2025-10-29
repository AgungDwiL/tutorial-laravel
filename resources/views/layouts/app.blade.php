<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel 7'}}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    @yield('head')
</head>
<body>
    @include('layouts.navigation')
    @include('partials.alert')
    <div class="py-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>
</html>