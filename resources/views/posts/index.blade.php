<x-site-layout>
    <div class="container">
        <h1>Blog</h1>
        @foreach($posts as $post)
            <article class="margin-end-xl">
                <h3 class="margin-end-0"><a href="{{ route('posts.show', $post->slug) }}">{{  $post->title }}</a></h3>
                <p class="text-muted">{{ $post->date->format('l, j F Y') }}</p>
            </article>
        @endforeach
    </div>
</x-site-layout>
