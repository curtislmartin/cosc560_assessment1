@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Create Post</h2>
        <a href="{{ url('/all') }}" class="btn btn-outline-secondary">&larr; Back to Posts</a>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            New Post
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('/save') }}">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea id="content" name="content" rows="6"
                              class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ url('/all') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
