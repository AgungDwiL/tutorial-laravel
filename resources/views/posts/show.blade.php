{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', $post->title)

{{-- Mengisi @yield('content') --}}
@section('content')
    <div class="container">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>

        <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-success" href="\posts\{{ $post->slug }}\edit">Edit</a>
            <a class="btn btn-warning" href="{{ route('posts.index', ['page' => $page > 1 ? $page : null]) }}">Back</a>
        </div>
    </div>


@endsection