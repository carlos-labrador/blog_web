@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <h5 class="text-center">
                Hi {{ Auth::user()->username }} Welcome to Blog spot
            </h5>
            <hr>

            <div class="card ">
                <div class="card-body ">
                    <p class="lead">Click on the button below to start creating amazing blogs.</p>
                    <a class="btn btn-lg btn-primary" href="{{route('posts.index')}}" role="button">Create blogs
                        &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="bg-light p-5 rounded">
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
</div> --}}


@endsection