@props(['comment'])

<div class="p-3 mb-2 border border-light text-dark">
    <article class="d-inline-flex">
        <div class="p-2">
            <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="60" height="60" class="rounded-xl">
        </div>

        <div class="p-2">
            <div class="mb-4 ">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>

                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at->diffForHumans() }}</time>
                </p>
            </div>

            <p>
                {{ $comment->note }}
            </p>
        </div>
    </article>
</div>
