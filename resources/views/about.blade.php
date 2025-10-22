{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', 'About')

{{-- Mengisi @yield('content') --}}
@section('content')
    About Us
@endsection