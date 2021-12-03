@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <p class="quote">Blog</p>
    </div>
</div>
@foreach($posts as $post)
<div class="row" style="background-image: linear-gradient(to right, rgb(224, 224, 224), rgb(192, 192, 192));">
    <div class="col-md-12 text-center">
        <h1 class="post-title">{{ $post->title }}</h1>
        <p style="font-weight: bold; color: #F4645F;">
            @foreach($post->tags as $tag)
            - {{ $tag->name }} -
            @endforeach
        </p>
        <p>{{ substr($post->content, 0,200) }}...</p>
        <p><a href="{{ route('blog.post', ['id' => $post->id]) }}">Read more...</a></p>
    </div>
</div>
<hr>
@endforeach
<div class="row" style="padding: 2rem 2rem 2rem 2rem;">
    <div class="col-md-12 text-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection