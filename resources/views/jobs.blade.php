@extends('layouts.app')

@section('content')
<body>
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
                        </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>


    @foreach($employees as $employee)
        <h2>{{ $employee->name_en }}</h2>
        <h3>{{ $employee->position_en }}</h3>
        @if($employee->employeeReview)
            <p>Review: {{ $employee->employeeReview->review }}</p>
        @else
            <p>No review available.</p>
        @endif
    @endforeach

</body>

@endsection
