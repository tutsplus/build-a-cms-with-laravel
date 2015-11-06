<div class="row">
    <div class="col-md-12" style="background-image: url({{ theme('images/homepage.jpg') }}); background-size: 100%; height: 320px"></div>
</div>

<div class="row">
    @foreach($posts as $post)
        <div class="col-md-4">
            <h2><a href="{{ route('blog.post', [$post->id, $post->slug]) }}">{{ $post->title }}</a></h2>

            <p>
                Posted by {{ $post->author->name }} on {{ $post->published_date }}
            </p>

            {!! $post->excerpt_html or $post->body_html !!}
        </div>
    @endforeach
</div>
