@section('head')
    <style>
        .navbar .nav-link.active {
            background-color: transparent !important;
            font-weight: bold !important;
            color: black !important;
        }
    </style> 
@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Laravel7</a>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link{{request()->is('/') ? ' active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{request()->is('contact') ? ' active' : ''}}" href='{{url('contact')}}'>Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{request()->is('about') ? ' active' : ''}}" href='{{url('about')}}'>About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link{{request()->is('login') ? ' active' : ''}}" href='{{url('login')}}'>Login</a>
        </li>
    </ul>
</nav>