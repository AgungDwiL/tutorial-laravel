{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', 'The Post')

{{-- Mengisi @yield('content') --}}
@section('content')
    <div class="container">
        <h2>This is my slug {{$slug}}</h2>
    </div>
@endsection