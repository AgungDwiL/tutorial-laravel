<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: bisque;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    <div>
        @yield('content')
    </div>
</body>
</html>