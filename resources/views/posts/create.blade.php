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
                    <br>
                    <p class="text-lg mt-2 text-gray-600">Start crafting your new post below.</p>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('posts.store')}}" method="post">
                        @csrf
                        <x-forms.input name="title" required />
                        <x-forms.textarea name="body" required />
                        <x-forms.input name="slug" required />
                        <x-forms.input type="date" name="published_at" label="publish at" min="{{ date('mm/dd/yyyy') }}"
                            required />
                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        <x-forms.submit-button>Save</x-form.button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection