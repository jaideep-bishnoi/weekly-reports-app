@extends('layouts/layout')

@section('content')

    <section class="hero is-info welcome is-small">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Your Profile.
                </h1>
                <h2 class="subtitle">
                    Update Your Profile Below!
                </h2>
            </div>
        </div>
    </section>
    <section class="section">
        <form action="/profile" method="POST">
        @csrf
            
            <div class="field">
                <label class="label" for="username">Username:</label>
                    <div class="control">
                        <input type="text" name="username" value="{{ old('username', auth()->user()->username) }}"> 
                        <!-- prepopulate fields -->
                    </div>
            </div>
            <div class="field">
            <label class="label" for="email">Email:</label>
                <div class="control">
                    <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}">
                </div>
        </div>
        <div class="field">
            <label class="label" for="start-date">Old Password:</label>
                <div class="control">
                    <input type="password" name="password">
                </div>
        </div>
        <div class="field">
            <label class="label" for="start-date">New Password:</label>
                <div class="control">
                    <input type="password" name="password">
                </div>
        </div>
        <div class="control">
                <button class="button is-link">Update</button>
        </div>
        
        </form>
    </section>

@endsection