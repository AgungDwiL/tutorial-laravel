{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', 'Login')

{{-- Mengisi @yield('content') --}}
@section('content')
    <div class="container">
        <h2>Login Page</h2>
    </div>
@endsection