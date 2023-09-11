@extends('layouts.app')

@section('content')

    <section class="clients-section">
        <div class="container">
            <h2>Our Clients</h2>
            <div class="client-list">
                <div class="client-item">
                    <div class="client-image">
                        <img src="{{asset('storage/logo.jpg') }}" alt="Client 1">
                    </div>
                    <p class="client-name">Client 1</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/client1" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/client1" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.appstore.com/client1" target="_blank"><i class="fab fa-app-store"></i></a>
                        <a href="https://play.google.com/store/apps/details?id=com.client1" target="_blank"><i class="fab fa-google-play"></i></a>
                        <a href="https://www.client1.com" target="_blank"><i class="fas fa-globe"></i></a>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-image">
                        <img src="client2.png" alt="Client 2">
                    </div>
                    <p class="client-name">Client 2</p>
                </div>
                <div class="client-item">
                    <div class="client-image">
                        <img src="client3.png" alt="Client 3">
                    </div>
                    <p class="client-name">Client 3</p>
                </div>
                <!-- Add more clients here -->
            </div>
        </div>
    </section>
    </body>
    </html>

@endsection
