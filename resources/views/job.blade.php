@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="job-details">
            <h1 class="job-title">{{ $job->title }}</h1>
            <p class="job-level"><strong>Level:</strong> {{ $job->level }}</p>
            <div class="job-description">
                <p>{{ $job->description }}</p>
            </div>
        </div>
    </div>
@endsection
