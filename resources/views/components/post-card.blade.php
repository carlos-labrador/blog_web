@props(['post'])

<article class="post-preview">

    <h2 class="post-title">
        <a href="{{route('posts.slug',['post' => $post->slug])}}" class="text-2xl font-bold mb-2">{{
            $post->title }}</a>
    </h2>
    <h3 class="post-subtitle">{{ Str::limit($post->body, 100) }}</h3>
    <p class="post-meta">
        Posted by {{$post->user->username}} on {{$post->published_at->diffForHumans()}}
    </p>

</article>