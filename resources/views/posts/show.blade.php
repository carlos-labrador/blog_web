@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- max-w-4xl mx-auto py-20 prose lg:prose-xl --}}
            <div class="mx-auto mb-5 mt-6">
                <h1>{{ $post->title }}</h1>
                <p>{{ $post->body }}</p>
            </div>

            @include ('posts.comment-form')

        </div>


        <div class="col-md-8 pb-4 mt-5">
            <h1>Comments</h1>
            @foreach ($post->comments as $comment)
            <x-post-comment :comment="$comment" />
            @endforeach
        </div>


    </div>
</div>
@endsection