@extends('layouts.app1')

@include('inc.navbarforum')

@section('content')
<style>
    .post {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .post h1 {
        font-size: 24px;
        margin: 100px 0 10px 0;
    }

    .post-content {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .post-author {
        font-size: 14px;
        color: #666666;
    }

    .replies {
        margin-top: 30px;

    }

    .reply {
        background-color: #f5f5f5;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 15px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .reply-content {
        font-size: 14px;
    }

    .reply-author {
        font-size: 12px;
        color: #888888;
    }

    .add-reply {
        margin-top: 30px;
    }

    .reply-textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: vertical;
    }

</style>
    <div class="container">
    <div class="post">
        <h1>{{ $post->title }}</h1>
        <p class="post-content">{{ $post->content }}</p>
        <p class="post-author">Posted by: {{ $post->posted_by }}</p>
        @if(auth()->check() && auth()->user()->name === $post->posted_by)
            <a style="margin-bottom: 20px;" class="btn btn-danger" href="{{ route('forum.edit', $post->id) }}">Edit Post</a>

            <form method="POST" action="{{ route('forum.destroy', $post->id) }}" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger red">Delete Post</button>
            </form>
        @endif
    </div>

    <div class="replies">
        <h2>Replies</h2>
        @foreach($post->replies as $reply)
            <div class="reply">
                <p class="reply-content">{{ $reply->content }}</p>
                <p class="reply-author">Posted by: {{ $reply->posted_by }}</p>
                @if(auth()->check() && auth()->user()->name === $reply->posted_by)
                    <div class="reply-actions">
                        <a style="margin-bottom: 20px;" class="btn btn-danger" href="{{ route('forum.editReply', $reply->id) }}">Edit Reply</a>
                        <form method="POST" action="{{ route('forum.destroyReply', $reply->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger red" type="submit">Delete</button>
                        </form>
                    </div>
                @endif
            </div>
        @endforeach

    </div>

    <div class="add-reply">
        <h2>Add Reply</h2>
        <form method="POST" action="{{ route('forum.reply', $post->id) }}">
            @csrf
            <textarea name="content" rows="4" placeholder="Enter your reply" class="reply-textarea"></textarea>
            <button type="submit" class="btn btn-danger">Reply</button>
        </form>
    </div>
    </div>

    
@endsection
