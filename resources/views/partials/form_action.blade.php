@php
    $is_edit = isset($post);
@endphp

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header">{{ $is_edit ? 'Edit Post : ' . $post->title : 'New Post' }}</div>
                <div class="card-body">
                    <form action="{{ $is_edit ? '/posts/' . $post->slug . '/edit' : '/posts/create' }}" method="POST">
                        
                        @if ($is_edit)
                            @method('patch')
                        @endif

                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{ $is_edit ? $post->title : old('title', '') }}" class="form-control @error('title') is-invalid @enderror" >
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="body">Body</label>
                            <textarea name="body" id="body"  class="form-control @error('body') is-invalid @enderror">{{ $is_edit ? $post->body : old('body', '') }}</textarea>
                            @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="{{ $is_edit ? 'btn btn-success' : 'btn btn-primary' }}">{{ $is_edit ? 'Edit' : 'Create'}}</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                        </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>