@extends('layouts/layout')

@section('content')

                <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Weekly Reports.
                            </h1>
                            <h2 class="subtitle">
                                Enter Your Weekly Reports Below!
                            </h2>
                        </div>
                    </div>
                </section>

                <!-- add form validation -->
               <section class="section">
                <form method="POST" action="/reports">

                @if(count($errors))
                    <div class="notification is-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <br/>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <div class="field">
                <label class="label" for="start-date">Week Start Date:</label>
                    <div class="control">
                        <input class="input" type="date" name="startdate" required>
                    </div>
                </div>

                <div class="field">
                <label class="label" for="end-date">Week End Date:</label>
                    <div class="control">
                        <input class="input" type="date" name="enddate" required>
                    </div>
                </div>
                <div class="field">
                        <label class="label">Last Week's Wins:</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Enter your wins" name="lastweek" required></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">This Week's Goals:</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Enter your goals" name="thisweek" required></textarea>
                        </div>
                    </div>

                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    
                </form>
                </section>

@endsection