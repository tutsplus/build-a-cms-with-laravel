<article>
    <h2>{{ $post->title }}</h2>
    <p>
        Posted by {{ $post->author->name }} on {{ $post->published_date }}
    </p>

    {!! $post->body_html !!}
</article>
