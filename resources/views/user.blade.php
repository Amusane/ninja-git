@extends('layouts.app')

@section('title', 'Users Page')

@section('content')

    <h2>Here is the Body of the page</h2>
    <h3>Your username is: {{$username}} and your password is: {{$password}} although you should not include your password and username li this</h3>

@stop 

@section('footer')

    <h2>Here goes the footer for users page</h2>

@stop