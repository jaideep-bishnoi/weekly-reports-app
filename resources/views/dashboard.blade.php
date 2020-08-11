@extends ('layouts/layout')

@section('content')

                <section class="hero is-info welcome is-small">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Hello, Admin.
                            </h1>
                            <h2 class="subtitle">
                                I hope you are having a great day!
                            </h2>
                        </div>
                    </div>
                </section>
                <section class="section">
                    @foreach ($users as $user)

                    <button class="accordion mb-3 is-capitalized">{{$user->username}}</button>
                        <div class="panel">
                        <!-- I need to figure out how this works follow this answer https://stackoverflow.com/a/41366122 -->
                            @foreach ($user->reports as $report)
                            <p>{{$report->lastweek}}</p>
                            <p>{{$report->thisweek}}</p>
                            @endforeach
                        </div>

                    @endforeach
                </section>
            
@endsection