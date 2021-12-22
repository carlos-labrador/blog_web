@auth

<div class="bg-light p-2">
    <form action="{{route('comment.store',['post' => $post->id])}}" method="POST">
        @csrf
        <div class="d-flex flex-row align-items-start">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                class="rounded-circle mr-2">
            <textarea name="note" class="form-control ms-2 shadow-none textarea"></textarea>
            @error('note')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2 text-right">
            <button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button>
            {{-- <x-forms.submit-button> Post comment </x-forms.submit-button> --}}
            <button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button>
        </div>
    </form>
</div>
{{-- <div class='border border-gray-200 p-6 rounded-xl'>
    <div class="card-header">
        <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">

        <h2 class="ml-4">Want to participate?</h2>
    </div>
    <div class="card-body">
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf



            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                placeholder="Quick, thing of something to say!" required></textarea>

            @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

            <x-forms.textarea name="body" required></x-forms.textarea>


            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-forms.submit-button>Submit</x-forms.submit-button>
            </div>
        </form>
    </div>

</div> --}}
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline">Register</a> or
    <a href="/login" class="hover:underline">log in</a> to leave a comment.
</p>
@endauth