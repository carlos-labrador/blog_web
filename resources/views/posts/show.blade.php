@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
                <h1>{{ $post->title }}</h1>
                <p>{!! $post->body !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection