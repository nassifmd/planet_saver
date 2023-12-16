@extends('layouts.app1')

@include('inc.navbarforum')

@section('content')
<div style="padding: 100px 0" class="container">
    <h1>Edit Reply</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('forum.updateReply', $reply->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="content">Edit Reply Content:</label>
            <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $reply->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Reply</button>
    </form>
</div>
@endsection
