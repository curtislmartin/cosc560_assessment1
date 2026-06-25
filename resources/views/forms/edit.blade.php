@extends('layouts.app')

@section('title', 'Edit Posts')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Edit</h2>
        {{-- <a href="#" class="btn btn-primary">+ Create New Post</a> --}}
    </div>
    <form method='POST' action='/save'>
        @csrf

        {{-- Tells save() which post to update --}}
        <input type='hidden' name='id' value='{{ $post->id }}'>

        <input name='title' value='{{ old('title', $post->title) }}'>
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror

        <input name='content' value='{{ old('content', $post->content) }}'>
        @error('content') <span class="text-danger">{{ $message }}</span> @enderror

        <button type='submit'>Submit</button>
    </form>
@endsection
