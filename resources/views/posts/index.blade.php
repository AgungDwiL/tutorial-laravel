@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            @if(isset($category))
                <h4 class="mb-0 pb-2 border-bottom border-2 border-primary d-inline-block">Category : {{ $category->name }}</h4>
            @endif

            @if(isset($tag))
                <h4 class="mb-0 pb-2 border-bottom border-2 border-primary d-inline-block">Tag : {{ $tag->name }}</h4>
            @endif
            
            @if(!isset($tag) && !isset($category))
                <h4 class="mb-0 pb-2 border-bottom border-2 border-primary d-inline-block">All Posts</h4>
            @endif
        </div>
        <div class="col-md-6 text-right">
            @auth
                <a href="{{ route('posts.create') }}" class="btn btn-primary">New Post</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login to Create New Post</a>
            @endauth
        </div>
    </div>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header font-weight-bold">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        {{ Str::limit($post->body, 100, ' ...') }}
                        <div>
                            <a href="/posts/{{$post->slug}}">Read more</a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            @can('update', $post)
                                <a class="btn btn-success btn-sm" href="/posts/{{ $post->slug }}/edit">Edit</a>
                            @endcan
                            <p class="fw-lighter mb-0" >Published on {{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-cneter">
        {{$posts->links()}}
    </div>
</div>
@endsection