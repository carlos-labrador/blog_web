@extends('layouts.app')

@section('content')
<header class="masthead">

    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Welcome to Blog Spot</h1>
                    <span class="subheading">The place where you can be inspired by others </span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container mx-auto p-5">

    <div class="row justify-content-center">
        {{-- <h1
            class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to Blog Spot
        </h1> --}}

        <div class="col-lg-8 col-md-10 mx-auto">
            @if ($blog->count())
            <x-post-grid :blog="$blog" />
            <div class="d-flex">
                {!! $blog->links() !!}
            </div>
            @else
            <p class="text-center">No Posts found yet. Please try it again later.</p>
            @endif
        </div>
    </div>
</div>
@endsection