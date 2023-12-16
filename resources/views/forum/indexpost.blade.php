@extends('layouts.app1')

@include('inc.navbarforum')

@section('content')

    <div class="parallax-container">
      <div class="parallax"><img src="img/pro.jpg"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="3" style="font-size: 30px; color: brown;">Forums</th>
                        </tr>
                        <tr>
                            <th>Posted by</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Replies</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($posts->isEmpty())
                            <tr>
                                <td colspan="3">No posts found.</td>
                            </tr>
                        @else
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->posted_by }}</td>
                                    <td>{{ Str::limit($post->title, 20) }}</td>
                                    <td>{{ Str::limit($post->content, 30) }}</td>
                                    <td class="waves-effect white btn">
                                        <a href="{{ route('forum.show', $post->id) }}">
                                            View Replies ({{ $post->replies->count() ?? 0 }})
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.parallax').parallax();
  });
</script>
