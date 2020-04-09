<header class="blog-header py-3">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/">Posts</a>
            <a class="nav-link" href="/posts/create">Create Post</a>
            @if (!Auth::check())
                <a class="nav-link" href="/register">Register</a>
            @endif

            @if (Auth::check())
                <div class="ml-auto">
                    <a class="nav-link float-left" href="#">{{ Auth::user()->name }}</a>
                    <a class="nav-link float-left" href="/logout">Logout</a>
                </div>

            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
            @endif
        </nav>

    </div>
</header>