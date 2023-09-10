@extends('layouts.app')

@section('content')
    <center>
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('storage/video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="text-overlay">
            <div class="text1">
                <p class="font1">Unlocking Digital <span class="underlined underline-clip">Success</span></p>
                <p>Your <b>Trusted</b> Partner for Cutting-Edge Marketing, Mobile App Development, and Website Solutions.</p>
            </div>
        </div>
    </div>
    </center>
{{--    <div class="containerSection">--}}
{{--        <div class="left">--}}
{{--            <img src="{{ asset('storage/tech.png') }}" alt="Image" width="400px" height="500px" class="image-on-desktop">--}}
{{--        </div>--}}
{{--        <div class="right">--}}
{{--            <div class="text1">--}}
{{--                <p class="font1">Unlocking Digital <span class="underlined underline-clip">Success</span></p>--}}
{{--                <p>Your <b>Trusted</b> Partner for Cutting-Edge Marketing, Mobile App Development, and Website Solutions.</p>--}}
{{--            </div>--}}
{{--            <br><button class="start-button"> <a href="request"> Start Now >> </a> </button>--}}
{{--        </div>--}}
{{--    </div>--}}


    <section class="why-work-with-us" id="services">
        <div class="containerSection">
            <h3 class="text">Our Comprehensive Services</h3>

        @foreach($services as $service)

            <div class="reason">
                <img src="{{ asset('storage/' . $service->icon) }}" alt="serviceIcon" width="60px" height="60px">
                <h3>{{ $service->name_en }}</h3>
                <p>{{ $service->description_en }}</p>
            </div>
            @endforeach

        </div>
    </section>



    <section id="about" class="about-us">
        <div class="containerSection">
            <div class="left">
                <h2>About Us</h2>
                <p>
                    At Fraij Agency, we are passionate about driving digital innovation and empowering businesses to succeed in today's dynamic landscape. With a team of dedicated professionals, we bring together expertise in web development, mobile app development, and digital marketing to create tailored solutions that transform ideas into reality.
<br>
                    Our journey began with a shared vision: to bridge the gap between technology and business goals. Over the years, we have honed our skills, staying at the forefront of emerging trends and technologies. We understand that in the digital age, every interaction with your audience matters. That's why we are committed to crafting exceptional digital experiences that resonate with your target audience and drive results.

                 </p>
            </div>
            <div class="right">
                <img src="{{ asset('storage/ai.jpg') }}" alt="About Us" width="400" height="400" style="  border-radius: 50px 20px;
">
            </div>
        </div>
    </section>

<section class="why-work-with-us">
    <div class="container">
        <h3 class="text">meet our team</h3>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{asset('storage/person.jpg')}}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{asset('storage/ai.jpg')}}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{asset('storage/ai.jpg')}}">
                    </div>
                    <div class="team-content">
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="why-work-with-us">
        <div class="containerSection">
            <h2 class="text">Why You Should Work with Us</h2>
            <div class="reason">
                <img  src="{{ asset('storage/Expertise.png') }}" alt="Reason 1" width="90px" height="90px">
                <h3>Expertise</h3>
                <p>We bring years of experience and expertise to every project, ensuring top-notch results.</p>
            </div>
            <div class="reason">
                <img src="{{ asset('storage/innovation.png') }}" alt="Reason 2" width="90px" height="90px">
                <h3>Innovation</h3>
                <p>We embrace innovation and stay ahead of industry trends to deliver cutting-edge solutions.</p>
            </div>
            <div class="reason">
                <img src="{{ asset('storage/focus.png') }}" alt="Reason 3" width="90px" height="90px">
                <h3>Customization</h3>
                <p>Our solutions are tailored to your unique needs, ensuring a personalized experience.</p>
            </div>
            <div class="reason">
                <img src="{{ asset('storage/focus.png') }}" alt="Reason 4" width="90px" height="90px">
                <h3>Client-Centric</h3>
                <p>We prioritize your goals and collaborate closely to achieve your desired outcomes.</p>
            </div>
        </div>
    </section>



@endsection
