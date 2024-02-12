<!-- resources/views/forum/create.blade.php -->
@include('inc.navbarforum')
@extends('layouts.app1')

@section('content')
<style>
    form {
        margin: 60px;
    }
</style>

@if(Auth::check())
    <p style="padding-top: 100px; font-size: 30px; text-align: center; color: brown;">Welcome, {{ Auth::user()->name }}. Please ask your question.</p>
@endif
<form method="POST" action="{{ route('forum.store') }}">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="content" rows="4" placeholder="Enter your post content"></textarea>
    <button class="btn btn-danger" type="submit">Create</button>
</form>
@endsection
