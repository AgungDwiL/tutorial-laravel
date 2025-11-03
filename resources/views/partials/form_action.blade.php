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
                            <label for="category">Category</label>
                            <select type="text" name="category" id="category" class="form-control @error('category') is-invalid @enderror" >
                                @if($is_edit)
                                    @foreach ( $categories as $category )
                                        <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @else
                                        <option selected disabled>Choose a category!</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endif   
                            </select>
                            @error('category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="tags">Tag(s)</label>
                            <select name="tags[]" id="tags" class="form-control select2 @error('tags') is-invalid @enderror" multiple>
                                @if($is_edit)
                                    @foreach ($post->tags as $tag)
                                        <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                    @foreach ($tags->diff($post->tags) as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                @else
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('tags')
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
                            <a href="{{ url()->previous() }}" class="btn btn-warning">Back</a>
                        </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>