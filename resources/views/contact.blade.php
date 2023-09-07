@extends('layouts.app')

@section('content')

    <header>
        <h1>Contact Us</h1>
    </header>
<center>
    <section class="contact-container">
        <div class="contact-info">
            <h2>Contact Information</h2><br>
            <p><i class="fas fa-map-marker-alt" style='font-size:25px;padding:10px;'></i>Amman - Khalda in Salem abu Hdaid complex</p><br>
            <p><i class="fas fa-phone-alt" style='font-size:25px;padding-right:10px;'></i>0791107772</p><br>
            <p><i class="fas fa-envelope" style='font-size:25px;padding-right:10px;'></i>sales@fraij-agency.com</p><br>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2> <br>
            <form action="{{ route('contactus') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <input type="text" name="phone" placeholder="phone Number">
{{--                <input type="text" name="subject" placeholder="Subject">--}}
                <textarea name="message" placeholder="Your Message" rows="4"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
</center>
@endsection
