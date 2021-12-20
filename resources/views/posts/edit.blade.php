@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1
                        class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        Edit Post
                    </h1>
                </div>

                <div class="card-body">
                    @include('layouts.shared.messages')
                    <br>
                    <form action="{{route('posts.update',$post->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <x-forms.input name="title" :value="old('title',$post->title)" required />
                        <x-forms.textarea name="body" required>{{ old('body',$post->body) }}</x-forms.textarea>
                        <x-forms.input name="slug" :value="old('slug',$post->slug)" required />
                        <x-forms.input type="date" name="published_at" label="publish at"
                            min="{{$post->published_at->format('Y-m-d')}}"
                            :value="old('published_at',$post->published_at->format('Y-m-d'))" required />
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection