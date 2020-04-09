@extends ('layouts.master')

@section ('content')

    <div class="col-md-8 blog-main">
        <h1>{{ $post->title }}</h1>


        @if (count($post->tags))

            <ul>

                @foreach ($post->tags as $tag)

                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
                    </li>

                @endforeach


            </ul>

        @endif

        <p>{{ $post->body }}</p>

        <hr>

        <div class="comments">

            <ul>
            @foreach ($post->comments as $comment)

                <li class="list-group-item">

                    <strong>

                        {{ $comment->created_at->diffForHumans()}}:

                    </strong>
                    {{ $comment->body }}
                </li>

            @endforeach

            </ul>
        </div>

        <h2>Leave A Comment</h2>

        <form method="post" action="/posts/{{$post->id}}/comments">

            {{ csrf_field() }}

            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Your comment here" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Comment</button>

        </form>

        @include('layouts.errors')

    </div>


@endsection