@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form action="{{ route('Post.store')}}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" >
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="title">Body</label>
                            <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection