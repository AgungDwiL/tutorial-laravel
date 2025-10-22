{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', 'Home')

{{-- Mengisi @yield('content') --}}
@section('content')
    Welcome to the Home Page
@endsection