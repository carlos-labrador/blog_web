@extends('layouts.app')

@section('content')

<div class="container mx-auto p-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1
                class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                Welcome to Blog Spot
            </h1>

            <div class="mt-10 max-w-xl mx-auto">
                @foreach($blog as $post)
                <div class="border-b mb-5 pb-5 border-gray-200">
                    <a href="{{route('posts.slug',['slug' => $post->slug])}}" class="text-2xl font-bold mb-2">{{
                        $post->title }}</a>
                    <p>{{ Str::limit($post->body, 100) }}</p>
                    <figcaption class="blockquote-footer">
                        {{-- Someone famous in <cite title="Source Title">Source Title</cite> --}}

                        Posted by <cite title="Source Title">{{$post->user->username}}</cite> on
                        {{$post->published_at->format('F j, Y')}}
                    </figcaption>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection