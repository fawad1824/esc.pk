@extends('layouts.index')
@section('websitepages')
    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('user/img/carousel-1.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Professional</p>
                    <h1 class="animated fadeInLeft">For Your Dream Project</h1>
                    <a class="btn animated fadeInUp" href="/home">Add
                        Contracts</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('user/img/carousel-2.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Professional Builder</p>
                    <h1 class="animated fadeInLeft">We Build Your Home</h1>
                    <a class="btn animated fadeInUp" href="/home">Add
                        Contracts</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('user/img/carousel-3.jpg') }}" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Trusted</p>
                    <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                    <a class="btn animated fadeInUp" href="/home">Add
                        Contracts</a>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

    <!-- Feature Start-->
    <div class="feature wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Expert Worker</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="feature-text">
                            <h3>Quality Work</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="feature-text">
                            <h3>24/7 Support</h3>
                            <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->

    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('user/img/about.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header text-left">
                        <p>Welcome to Builderz</p>
                        <h2>25 Years Experience</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            we are a civil Engineering based e-platform that allows
                            contractors and clients find the best projects and soultions
                            account to theirspecified needs and making a much more competitive
                            enviornment in civil engineering industry
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Start -->
    <div class="fact">
        <div class="container-fluid">
            <div class="row counters">
                <div class="col-md-6 fact-left wow slideInLeft">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">109</h2>
                                <p>Expert Engineers</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">485</h2>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fact-right wow slideInRight">
                    <div class="row">
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-address"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">789</h2>
                                <p>Completed Projects</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="fact-icon">
                                <i class="flaticon-crane"></i>
                            </div>
                            <div class="fact-text">
                                <h2 data-toggle="counter-up">890</h2>
                                <p>Running Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Services</p>
                <h2>We Provide Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('user/img/service-1.jpg') }}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor
                                    id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Building Construction</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('user/img/service-2.jpg') }}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor
                                    id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>House Renovation</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('user/img/service-3.jpg') }}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor
                                    id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Architecture Design</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('user/img/service-4.jpg') }}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor
                                    id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Interior Design</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('user/img/service-5.jpg') }}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor
                                    id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Fixing & Support</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('user/img/service-6.jpg') }}" alt="Image">
                            <div class="service-overlay">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium
                                    mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor
                                    id gravida condimentum, viverra quis sem.
                                </p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3>Painting</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                <h2>Meet Our Contactot</h2>
            </div>
            <div class="row">
                @foreach ($user as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="images/{{ $item->profile }}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{ $item->name }}</h2>
                            </div>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Latest Projects</p>
                <h2>Latest From Projects</h2>
            </div>
            <div class="row">

                @foreach ($userproject as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-title">
                                <h3>{{ $item->name }}</h3>
                            </div>
                            <div class="blog-meta">
                                <p>By<a href="">{{ $item->userName }}</a></p>
                                <p>In<a href="">Construction</a></p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    {{ $item->desc }}
                                </p>
                            </div>
                            <div class="blog-text">
                                <a href="/single/{{ $item->id }}" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $userproject->links('pagination::bootstrap-4') }}
        </div>
    </div>
    <!-- Blog End -->
@endsection
