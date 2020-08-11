@extends('layouts/layout')

@section('content')

<section class="hero is-info welcome is-small">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Create User.
            </h1>
            <h2 class="subtitle">
                Create Your New User Below!
            </h2>
        </div>
    </div>
</section>
<section class="section">
    <form action="/add-user" method="POST">
        @csrf
        <div class="field">
            <label class="label" for="username">Username:</label>
                <div class="control">
                    <input type="text" name="username">

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
        </div>
        <div class="field">
            <label class="label" for="email">Email:</label>
                <div class="control">
                    <input type="email" name="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
        </div>
        <div class="field">
            <label class="label" for="start-date">Password:</label>
                <div class="control">
                    <input type="password" name="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
        </div>
        <div class="control">
                <button class="button is-link">Submit</button>
        </div>

    </form>
</section>

@endsection