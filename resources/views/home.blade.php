{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', 'Home')

{{-- Mengisi @yield('content') --}}
@section('content')
    <div class="container">
        <h2>My name is {{$name}}</h2>
    </div>
@endsection