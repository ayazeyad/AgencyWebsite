@extends('layouts.app')

@section('content')
    <header>
        <h1>Request a Service</h1>
    </header>
    <main>
        <div class="request_container">
            <form action="{{ route('service') }}"  method="POST">
                @csrf
                <label for="service">Select Service:</label>
                <select id="service" name="service" required>
                    @foreach($services as $service)
                    <option value="{{$service->id}}"> {{$service->name_en}}</option>
                    @endforeach
                </select>

                <label for="description">Describe Your Request:</label>
                <textarea id="description" name="description" rows="4"></textarea>

                <button type="submit" class="contact-form">Submit</button>
            </form>
        </div>
    </main>
@endsection
