<x-site-layout>
    <div class="container">
        <a href="/blog">&larr; Back</a>
    </div>
    <article class="container">
        <h1>{{ $post->title }}</h1>

        <p class="text-muted">{{ $post->date->format('l, j F Y') }}</p>

        {{ $post->contents }}

        @if($post->cta_text)
        <section class="container callout primary margin-start-6xl">
            <p>{{ $post->cta_text }}</p>

            <a class="btn primary size-xl" href="/contact">{{ $post->cta_btn_text ?? "Get in touch and let's discuss what you need." }} &rarr;</a>
        </section>
        @endif
    </article>
</x-site-layout>
