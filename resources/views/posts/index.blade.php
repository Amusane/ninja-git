@extends('layouts.app')

@section('content')

    <ul>
        @foreach($posts as $post)
            <div class="image-container">
                <img height="100" src="{{$post->path}}" alt="">
            </div>
            <li>Post Title: <a href="{{route('posts.show', $post->id)}}"> {{$post->title}}</a>    *** Post Content: {{$post->content}} <a href="{{route('posts.edit', $post->id)}}">edit</a></li>
        @endforeach
    </ul>


@endsection