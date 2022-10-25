@extends('layouts.app')

@section('content')

    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\PostsController@update', $post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Content:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Update') !!}
        
    {!! Form::close() !!}
       
    {!! form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\PostsController@destroy', $post->id]])!!}
        {!! Form::submit('Delete Post') !!}
    {!! Form::close() !!}


@endsection