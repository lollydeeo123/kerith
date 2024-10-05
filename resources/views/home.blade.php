@extends('layouts.app')

@section('content')


        <!-- Carousel Start -->
        <div class="container-fluid p-2 mb-2" >
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative" style="height: 450px;">
                    <img class="img-fluid" src="{{asset('images/carousel-2.png')}}" alt="building blocks image">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Home lesson with a difference</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Unlock your child's potential</p>
                                    <a href="#learnmore" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="{{ url('/book-a-class') }}" style="background-color:mediumorchid;border-color:mediumorchid" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 animated slideInRight">Book a free class</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="owl-carousel-item position-relative" style="height: 400px;">
                    <img class="img-fluid" src="{{asset('images/carousel-1.png')}}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Make A Brighter Future For Your Child</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                                    <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  -->
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Facilities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our promise to you</h1>
                    <p>We are dedicated to providing an educational advantage by ensuring deep learning takes place and boosting your child's confidence through interactive materials and activities.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-primary">
                                <span class="bg-primary"></span>
                                <i class="fa fa-bus-alt fa-3x text-primary"></i>
                                <span class="bg-primary"></span>
                            </div>
                            <div class="facility-text bg-primary">
                                <h3 class="text-primary mb-3">We are driven!</h3>
                                <p class="mb-0">Our interactive learning materials and activities keep students engaged and motivated to learn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-futbol fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Learn by Playing</h3>
                                <p class="mb-0">Boosting your child's confidence through interactive materials and activities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">In your home</h3>
                                <p class="mb-0">We offer high-quality online education using 21st century teaching practices
</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Positive Learning</h3>
                                <p class="mb-0">Our well-trained teachers deliver engaging and motivating lessons</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facilities End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="learnmore">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-4">Learn More About Our Work</h1>
                        <p>At Kerith Fountain of Learning, our mission is to ensure children are given the necessary 
                            help they need to excel in their studies and school work. Whether the child is gifted or 
                            the child has learning challenges, we are equipped to ensure that deep 
                            learning takes place and the child's potentials are fully explored</p>
                        <p class="mb-4">We strongly believe that success is the greatest motivation 
                            in learning. Our personalized, real-time attention helps the child overcome fears,
                             anxieties, or self-doubt...
                        </p>
                        <div class="row g-4 align-items-center">
                            <div class="col-sm-6">
                                <a class="btn btn-primary rounded-pill py-3 px-5" href="">Read More</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                    <div class="ms-3">
                                        <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                        <small>CEO & Founder</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3" src="{{asset('images/about-1.jpg')}}" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{asset('images/about-2.jpg')}}" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3" src="{{asset('images/about-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="{{asset('images/call-to-action.jpg')}}" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">You can become A Teacher</h1>
                                <p class="mb-4">Are you passionate about teaching young people? 
                                    Do you have what it takes? You can join our family by applying here.
                                </p>
                                <a class="btn btn-primary py-3 px-5" style="background-color:mediumorchid;border-color:mediumorchid" href="">Get Started Now<i class="fa fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->


        <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div id="grouplessons" class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Group Lessons</h1>
                    <p>You can also benefit from our group lessons. All our live classes are <i>Funteractive</i> and synchronous 
                    This means each child gets the immediate feedback they deserve  and at great value.

                </p>
                </div>
                <div class="row g-4">
                    <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('images/classes-1.jpg')}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Writing</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                            <small>Teacher</small>
                                        </div>
                                    </div>
                                    <span class="bg-primary text-white rounded-pill py-2 px-3" href="">$44.99</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Grade:</h6>
                                            <small>Pre K - Kindergarten</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>Mondays 6-7 PM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>6 Children</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('images/classes-1.jpg')}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Writing</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    
                                <!-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                            <small>Teacher</small>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Grade</h6>
                                            <small>Pre K - Kindergarten</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>Mon, Wed, Thu 5 - 6 PM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small> 6 Children</small>
                                        </div>
                                    </div>
                                    <span class="d-block text-center mt-3 mb-3" >$44.99/Month</span>
                                <a class="d-block text-center mt-3 mb-3" href="">
                                     <span class="bg-primary text-white rounded-pill py-2 px-3" href="">Register</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('images/classes-2.jpg')}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Arithmetic</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    
                                <!-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                            <small>Teacher</small>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Grade</h6>
                                            <small>Pre K - Kindergarten</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>Mon, Wed, Thu 6 - 7 PM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>6 Children</small>
                                        </div>
                                    </div>
                                    <span class="d-block text-center mt-3 mb-3" >$44.99/Month</span>
                                <a class="d-block text-center mt-3 mb-3" href="">
                                     <span class="bg-primary text-white rounded-pill py-2 px-3" href="">Register</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('images/classes-3.jpg')}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Reading</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    
                                <!-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                            <small>Teacher</small>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Grade</h6>
                                            <small>Pre K - Kindergarten</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>Mon, Wed, Thu<br> 5 - 6 PM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>6 Children</small>
                                        </div>
                                    </div>
                                    <span class="d-block text-center mt-3 mb-3" >$44.99/Month</span>
                                <a class="d-block text-center mt-3 mb-3" href="">
                                     <span class="bg-primary text-white rounded-pill py-2 px-3" href="">Register</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('images/classes-4.jpg')}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Number Work</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    
                                <!-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                            <small>Teacher</small>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Grade:</h6>
                                            <small>Grade 1 to Grade 10</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>Mon, Wed, Thu<br> 6 - 7 PM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>6 Children</small>
                                        </div>
                                    </div>
                                    <span class="d-block text-center mt-3 mb-3" >$44.99/Month</span>
                                <a class="d-block text-center mt-3 mb-3" href="">
                                     <span class="bg-primary text-white rounded-pill py-2 px-3" href="">Register</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('images/classes-5.jpg')}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">English</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    
                                <!-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                            <small>Teacher</small>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Grade:</h6>
                                            <small>Grade 1 to Grade 10</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>Mon, Wed, Thu<br> 6 - 7 PM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>6 Children</small>
                                        </div>
                                    </div>
                                    <span class="d-block text-center mt-3 mb-3" >$44.99/Month</span>
                                <a class="d-block text-center mt-3 mb-3" href="">
                                     <span class="bg-primary text-white rounded-pill py-2 px-3" href="">Register</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle w-75 mx-auto p-3">
                                <img class="img-fluid rounded-circle" src="{{asset('images/classes-6.jpg')}}" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Mathematics</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    
                                <!-- <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="{{asset('images/user.jpg')}}" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Olubunmi Olanrewaju</h6>
                                            <small>Teacher</small>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Grade:</h6>
                                            <small>Grade 1 to Grade 7</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Time:</h6>
                                            <small>Wednesdays<br> 6 - 7 PM</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Capacity:</h6>
                                            <small>6 Children</small>
                                        </div>
                                    </div>
                                    <span class="d-block text-center mt-3 mb-3" >$44.99/Month</span>
                                <a class="d-block text-center mt-3 mb-3" href="">
                                     <span class="bg-primary text-white rounded-pill py-2 px-3" href="">Register</span>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Classes End -->


        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Have Enquiries?</h1>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="gname" placeholder="Gurdian Name">
                                                <label for="gname">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="gmail" placeholder="Gurdian Email">
                                                <label for="gmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cname" placeholder="Child Name">
                                                <label for="cname">Phone</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="cage" placeholder="Child Age">
                                                <label for="cage">Child Age</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="images/appointment.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Meet our Teachers</h1>
                    <p>Our teachers are qualified to ensure that deep learning takes place in a fun environment. 
                        They are trained to understand the best teaching methods to suit your ward</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-50" src="images/team3.jpg" alt="">
                            <div class="team-text">
                                <h3>Olubunmi</h3>
                                <p> Head Teacher</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-50" src="images/teacher_atirola.jpg" alt="">
                            <div class="team-text">
                                <h3>Atirola</h3>
                                <p>Teacher</p>
                                <!-- <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-50" src="images/team2.jpg" alt="">
                            <div class="team-text">
                                <h3>Dorcas</h3>
                                <p>Teacher</p>
                                <!-- <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p>These are some of the feedback from our clients. You can also join this league of satisfied parents by signing up for a free class</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">I got a report from the school that Isabella is doing well. 
                            She's been scoring high grades.  Thank you for all your support!
                        I thank God for your presence in our journey</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/testimonial-0.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Isabella's Mum</h3>
                                <span>Georgia, USA</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">After we signed up for the home lessons, Ayomipe moved from being an average student to the top 3 in her class! Thank you, Kerith</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/testimonial-1.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Tope Daramola</h3>
                                <span>CEO Aso-Gidi</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <!--  -->
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">My daughter had some challenges with time calculations. After a few lessons with Kerith, she no longer had issues with time calculations</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/testimonial-2.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Olufunmilola Ozoh</h3>
                                <span>Full Stack Developer</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">The satisfaction of seeing my boys finish high school in flying colors! Kerith Fountain of Learning Home lessons is surely the way to go</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="images/randomdad.jpg" style="width: 90px; height: 90px;">
                            <div class="ps-3">
                                <h3 class="mb-1">Coach Femi</h3>
                                <span>Engineer</span>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection
