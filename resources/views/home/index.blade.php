@extends('layouts.app')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    <h1>Dashboard</h1>
    <p class="lead">Welcome to Amazing Blog Spot.</p>
    <a class="btn btn-lg btn-primary" href="{{route('posts.index')}}" role="button">View blogs
        &raquo;</a>
    @endauth

    @guest
    <h1>Homepage</h1>
    <p class="lead">Please login or Sign up to create amazing posts.</p>
    @endguest
</div>
@endsection