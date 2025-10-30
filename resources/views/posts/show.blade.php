{{-- Memanggil halaman app.blade.php --}}
@extends('layouts.app')

{{-- Mengisi @yield('page-title') --}}
@section('page-title', $post->title)

{{-- Mengisi @yield('content') --}}
@section('content')
    <div class="container">
        <h2>{{$post->title}}</h2>
        <div class="text-secondary">
            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-primary" style="transition: opacity 0.3s;" onmouseover="this.style.opacity='0.6'" onmouseout="this.style.opacity='1'">
            {{ $post->category->name }}</a> &middot; {{ $post->created_at->format("d F, Y") }}
            <br>
            @foreach ($post->tags as $tag)
                <span class="badge bg-info border">
                    <a href="/tags/{{ $tag->slug }}" class="text-dark text-decoration-none" style="transition: opacity 0.3s;" onmouseover="this.style.opacity='0.6'" onmouseout="this.style.opacity='1'">{{ $tag->name }}</a>
                </span>
            @endforeach
        </div>
        <hr>
        <p>{{$post->body}}</p>

        <div class="d-flex justify-content-between align-items-center">
            {{-- anchor hanya menangani metode HTTP method : "GET", oleh karena itu perlu pakai form --}}
            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
            <a class="btn btn-success" href="\posts\{{ $post->slug }}\edit">Edit</a>
            <a class="btn btn-warning" href="{{ route('posts.index', ['page' => $page > 1 ? $page : null]) }}">Back</a>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                Are you sure you want to delete this post?
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancel</button>
                    <form action="\posts\{{ $post->slug }}\delete" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection