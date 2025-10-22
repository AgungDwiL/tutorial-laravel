{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', 'About')

{{-- Mengisi @yield('content') --}}
@section('content')
    <div class="container">
        <h2>About Us</h2>
        <p>This is the about page of our Laravel application.<
    </div>
@endsection