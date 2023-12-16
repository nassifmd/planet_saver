<!-- resources/views/forum/edit.blade.php -->

@extends('layouts.app1')

@section('content')
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('forum.update', $post->id) }}">
                @csrf
                @method('PATCH')

                <!-- Update post content -->
                <textarea name="content" rows="4" placeholder="Edit post content" class="reply-textarea">{{ $post->content }}</textarea>
                <button type="submit" class="btn btn-danger">Update Post</button>
            </form>
@endsection
