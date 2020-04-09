@extends ('layouts.master')

@section('content')

    <div class="col-sm-8">

        <h1>Sign In</h1>

        <form method="post" action="/login">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

        @include('layouts.errors')

    </div>

@endsection