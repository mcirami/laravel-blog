<div class="blog-post">

    <h2 class="blog-post-title">
        <a href="http://blog.test/posts/{{ $post->id }}">
            {{ $post->title }}
        </a>
    </h2>

    {{--carbon.nesbot.com for date formatting--}}
    <p class="blog-post-meta">

        {{ $post->user->name }} on

        {{ $post->created_at->toFormattedDateString() }}
    </p>

    <p>{{ $post->body }}</p>

</div><!-- /.blog-post -->