@extends('layout.main');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Original title:{{ $movie->original_title }}</h5>
                        <p class="card-text">nationality:{{ $movie->nationality }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
