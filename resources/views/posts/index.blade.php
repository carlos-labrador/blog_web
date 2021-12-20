@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">

                    <h1
                        class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        Manage your posts
                    </h1>
                    <div class="float-end">
                        <a href="posts/create" class="btn btn-primary mb-2">
                            <i class="bi bi-journal-plus"></i>
                            <span>Create Post</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @include('layouts.shared.messages')
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Published At</th>
                                <th>Created at</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                                <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                                <td>
                                    <x-forms.view-button href="{{ route('posts.show', $post->id) }}" />
                                    <x-forms.edit-button href="{{ route('posts.edit', $post->id) }}" />
                                    <x-forms.delete-button action="{{route('posts.destroy',['post' => $post->id])}}" />
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection