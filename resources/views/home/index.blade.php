@extends('layouts.app')

@section('content')
<div class="bg-light p-5 rounded">
    @auth
    {{-- <h1>Dashboard</h1>
    <p class="lead">Welcome to Amazing Blog Spot.</p>
    <a class="btn btn-lg btn-primary" href="{{route('posts.index')}}" role="button">View blogs
        &raquo;</a> --}}
    @endauth

    @guest
    <h1>Homepage</h1>
    <p class="lead">Please login or Sign up to create amazing posts.</p>
    @endguest
</div>
<div class="container mx-auto p-5">
    <h1
        class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
        Welcome to Blog Spot
    </h1>

    <div class="mt-10 max-w-xl mx-auto">
        @foreach(\App\Models\Post::all() as $post)
        <div class="border-b mb-5 pb-5 border-gray-200">
            <a href="/post/{{ $post->slug }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
            <p>{{ Str::limit($post->body, 100) }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection