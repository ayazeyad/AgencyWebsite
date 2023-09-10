@extends('layouts.app')

@section('content')
<main>
    <div class="container">
        <header>
            <h1>Featured Jobs</h1>
        </header>
        <div class="row mt-4">
            @foreach ($jobs as $job)
                <div class="col-md-4">
                    <div class="card mb-4 job-card">
                        <a href="{{ route('jobs.show', ['job' => $job->id]) }}">
                        <div class="card-body">
                            <small class="job-small"> job title </small>
                            <h2 class="card-title">{{ $job->title }}</h2>
                            <small class="job-small"> job level </small>
                            <p class="card-text"><strong>Level:</strong> {{ $job->level }}</p>
{{--                            <p class="card-text">{{ $job->description }}</p>--}}
                        </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>

<div class="container">
    <h1 class="mt-5">Employee Reviews</h1>

    <div id="employeeReviewsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($reviews as $key => $review)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="card-text">{{ $review->review }}</p>
                            <!-- Add other review details here -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#employeeReviewsCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#employeeReviewsCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>


@endsection
