{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', $post->title)

{{-- Mengisi @yield('content') --}}
@section('content')
    <div class="container">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    </div>
@endsection