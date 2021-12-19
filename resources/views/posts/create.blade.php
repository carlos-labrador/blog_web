@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1
                        class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        Create Post
                    </h1>
                </div>

                <div class="card-body">
                    @include('layouts.shared.messages')
                    <p class="text-lg mt-2 text-gray-600">Start crafting your new post below.</p>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('posts.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="block text-sm font-medium text-gray-700">Post Title</label>
                            <input type="text" name="title" class="form-control">

                        </div>


                        <div class="mb-3">
                            <label for="body" class="fomr-label">Post Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                            <div class="form-text">Add the body for your post.</div>
                        </div>

                        <div class="mb-3">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection