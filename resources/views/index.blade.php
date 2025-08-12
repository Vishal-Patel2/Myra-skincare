@extends('layouts.master')

@section('title', 'Myraluxa Aesthetic Pvt Ltd')

@section('content')
    <main class="main">
        <div class="video_container">
            <video autoplay="" muted="" loop="" playsinline="" class="video_window" id="bgVideo">
                <source src="assets/img/slider/slider.mp4" type="video/mp4">

            </video>
        </div>

        @include('components.service-cards', ['services' => $services])

        @include('components.shop-by-category', ['top_category' => 'SKIN CONCERN'])

        <!-- Best Selling Deals -->

        {{-- <section class="py-5">
            <div class="site-heading text-center">
                <h2 class="site-title">Best Selling Deals</h2>
            </div>

            <div id="infiniteScroll--left" class="container1">
                <!-- START ITEM -->
                
                <article>
                    <div class="pricing-item">
                        <div class="img">
                            <img src="./assets/img/about/LASEr.png" alt="">
                        </div>
                        <h3 class="service-title mt-2"><a href="#">Full Body Laser Hair Reduction</a></h3>
                        <span>6 Sessions</span><br>
                        <s style="color:#b20407; font-size:14px;">Rs. 70,800</s><br>
                        <span style="font-size:18px; font-weight:bold; color:black;">Rs. 35,400</span>
                        <div class="service-arrow mt-2">
                            <a href="#" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="pricing-item">
                        <div class="img">
                            <img src="./assets/img/about/close.png" alt="">
                        </div>
                        <h3 class="service-title mt-2"><a href="#">Upper Body Slimming</a></h3>
                        <span>6 Sessions</span><br>
                        <s style="color:#b20407; font-size:14px;">Rs. 49,200</s><br>
                        <span style="font-size:18px; font-weight:bold; color:black;">Rs. 39,360</span>
                        <div class="service-arrow mt-2">
                            <a href="#" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </article>
                <article>
                    <div class="pricing-item">
                        <div class="img">
                            <img src="./assets/img/about/close.png" alt="">
                        </div>
                        <h3 class="service-title mt-2"><a href="#">Upper Body Slimming</a></h3>
                        <span>6 Sessions</span><br>
                        <s style="color:#b20407; font-size:14px;">Rs. 49,200</s><br>
                        <span style="font-size:18px; font-weight:bold; color:black;">Rs. 39,360</span>
                        <div class="service-arrow mt-2">
                            <a href="#" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="pricing-item">
                        <div class="img">
                            <img src="./assets/img/about/close.png" alt="">
                        </div>
                        <h3 class="service-title mt-2"><a href="#">Upper Body Slimming</a></h3>
                        <span>6 Sessions</span><br>
                        <s style="color:#b20407; font-size:14px;">Rs. 49,200</s><br>
                        <span style="font-size:18px; font-weight:bold; color:black;">Rs. 39,360</span>
                        <div class="service-arrow mt-2">
                            <a href="#" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="pricing-item">
                        <div class="img">
                            <img src="./assets/img/about/close.png" alt="">
                        </div>
                        <h3 class="service-title mt-2"><a href="#">Upper Body Slimming</a></h3>
                        <span>6 Sessions</span><br>
                        <s style="color:#b20407; font-size:14px;">Rs. 49,200</s><br>
                        <span style="font-size:18px; font-weight:bold; color:black;">Rs. 39,360</span>
                        <div class="service-arrow mt-2">
                            <a href="#" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="pricing-item">
                        <div class="img">
                            <img src="./assets/img/about/close.png" alt="">
                        </div>
                        <h3 class="service-title mt-2"><a href="#">Upper Body Slimming</a></h3>
                        <span>6 Sessions</span><br>
                        <s style="color:#b20407; font-size:14px;">Rs. 49,200</s><br>
                        <span style="font-size:18px; font-weight:bold; color:black;">Rs. 39,360</span>
                        <div class="service-arrow mt-2">
                            <a href="#" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="pricing-item">
                        <div class="img">
                            <img src="./assets/img/about/close.png" alt="">
                        </div>
                        <h3 class="service-title mt-2"><a href="#">Upper Body Slimming</a></h3>
                        <span>7 Sessions</span><br>
                        <s style="color:#b20407; font-size:14px;">Rs. 49,200</s><br>
                        <span style="font-size:18px; font-weight:bold; color:black;">Rs. 39,360</span>
                        <div class="service-arrow mt-2">
                            <a href="#" class="theme-btn">Know More</a>
                        </div>
                    </div>
                </article>



            </div>
        </section> --}}

     @include('components.best_services', ['bestSellers' => $bestSellers])




        <!-- end Best Selling Deals -->
        <!-- VISIBLE RESULTS before/after -->
        <section class="bg py-5">
            <div class="site-heading text-center">
                <h2 class="site-title">VISIBLE RESULTS</h2>
            </div>

            <div id="infiniteScroll--left" class="container1">
                <!-- START ITEM -->
                <article>

                    <div class="img">
                        <img src="./assets/img/about/skin1.jpg" alt="">
                    </div>


                </article>
                <article>

                    <div class="img">
                        <img src="./assets/img/about/skin2.jpg" alt="">
                    </div>


                </article>
                <article>

                    <div class="img">
                        <img src="./assets/img/about/skin3.jpg" alt="">
                    </div>


                </article>

                <article>

                    <div class="img">
                        <img src="./assets/img/about/skin4.jpg" alt="">
                    </div>


                </article>
                <article>

                    <div class="img">
                        <img src="./assets/img/about/skin1.jpg" alt="">
                    </div>


                </article>
                <article>

                    <div class="img">
                        <img src="./assets/img/about/skin2.jpg" alt="">
                    </div>


                </article>





            </div>
        </section>
        <!-- <section class="bg">
                                                <div class="container py-4">
                                                    <div class="site-heading">
                                                        <h2 class="site-title">VISIBLE RESULTS</h2>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-3">
                                                            <img src="./assets/img/about/skin1.jpg" alt="">
                                                        </div>
                                                        <div class="col-lg-3 mb-3">
                                                            <img src="./assets/img/about/skin2.jpg" alt="">
                                                        </div>
                                                        <div class="col-lg-3 mb-3">
                                                            <img src="./assets/img/about/skin3.jpg" alt="">
                                                        </div>
                                                        <div class="col-lg-3 mb-3">
                                                            <img src="./assets/img/about/skin4.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> -->
        <!-- end VISIBLE RESULTS -->
        <!-- PREP FOR AN OCCASION -->
        <div class="service-area py-5">
            <div class="container">

                <div class="col-lg-6 mx-auto">
                    <div class="site-heading text-center">

                        <h2 class="site-title">PREP FOR AN OCCASION</h2>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <img src="./assets/img/about/p1.jpg" alt="">
                                    <h3 class="service-title">
                                        <a href="#">Wedding</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <img src="./assets/img/about/p2.jpg" alt="">
                                    <h3 class="service-title">
                                        <a href="#">Holiday</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <img src="./assets/img/about/p3.jpg" alt="">
                                    <h3 class="service-title">
                                        <a href="#">Rock the Party</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <img src="./assets/img/about/p4.jpg" alt="">
                                    <h3 class="service-title">
                                        <a href="#">Honeymoon</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--  -->
        <!-- team Doctor -->
        <section class="team-area bg py-5">
            <div class="site-heading text-center">
                <h2 class="site-title">MEET OUR DOCTORS</h2>
            </div>
            <div id="doctorScroll" class="carousel-container">
                <div class="carousel d-flex flex-wrap justify-content-center gap-4">
                    @foreach ($doctors as $doctor)
                        <div class="team-card">
                            <a href="{{ route('frontend.doctors.show', $doctor->id) }}"
                                class="text-decoration-none text-dark">
                                <div class="team-item">
                                    <img src="{{ asset('storage/doctors/' . $doctor->image) }}"
                                        alt="{{ $doctor->dr_name }}">
                                    <div class="team-content">
                                        <h5>{{ $doctor->dr_name }}</h5>
                                        <span>{{ $doctor->speciality }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- end team doctor -->

        <!-- why chose use -->
        <div class="service-area py-5 text-center" style="background: white;">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">

                            <h2 class="site-title">Why Myra Luxe Aesthetics</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <img src="./assets/img/icon/icon1.png" alt="">
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">Clinically Proven Skin Transformation</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    87% of clients experienced visible skin improvements,
                                    enhanced texture, and radiance within just 14 days.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <img src="./assets/img/icon/icon2.png" alt="">
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">Results That Definitively Speak for Themselves</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    With 20k+ happy clients, proven results, and state-of-the-art
                                    technology, Avataar is your go-to for flawless skin, body, and
                                    hair care!
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <img src="./assets/img/icon/icon3.png" alt="">
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">AI-Powered Operations and Customer Experience</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    Our state-of-the-art technology streamlines operations,
                                    utilizing AI analyzers and precision monitoring to deliver
                                    personalized treatments and exceptional client satisfaction.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <img src="./assets/img/icon/icon4.png" alt="">
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">100% Safe & Painless Treatments</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    We utilize US FDA-approved equipment and expert therapists with 1,000+
                                    hours of training, ensuring pain-free, effective treatments with no
                                    cuts, needles, minimal downtime.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <img src="./assets/img/icon/icon5.png" alt="">
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">Virtual Access to Top Dermatologists</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    Access top dermatologists through secure virtual consultations,
                                    receiving expert guidance and personalized treatment plans from home.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-content">
                                <div class="service-content-info">
                                    <div class="service-icon">
                                        <img src="./assets/img/icon/icon6.png" alt="">
                                    </div>
                                    <h3 class="service-title">
                                        <a href="#">Convenient At-Home Professional Treatments</a>
                                    </h3>
                                </div>
                                <p class="service-text">
                                    Experience clinic-grade treatments delivered to your doorstep,
                                    ensuring convenience, comfort, and lasting results.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end why -->
        <!-- client diaries -->
        <div class="department-area bg py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center mb-4">

                            <h2 class="site-title">What Our Customers Say!</h2>

                        </div>
                    </div>
                </div>
                <div class="department-slider owl-carousel owl-theme">
                    <div class="department-item">

                        <img src="assets/img/department/01.jpg" alt>
                    </div>
                    <div class="department-item">

                        <img src="assets/img/department/02.jpg" alt>
                    </div>
                    <div class="department-item">

                        <img src="assets/img/department/03.jpg" alt>
                    </div>
                    <div class="department-item">

                        <img src="assets/img/department/04.jpg" alt>
                    </div>
                    <div class="department-item">

                        <img src="assets/img/department/05.jpg" alt>
                    </div>
                    <div class="department-item">

                        <img src="assets/img/department/06.jpg" alt>
                    </div>

                </div>
            </div>
        </div>
        <!-- end clients -->
        <!-- testimonial -->
        <div class="testimonial-area py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <!-- <span class="site-title-tagline">Testimonials</span> -->
                            <h2 class="site-title">GOOGLE REVIEWS</h2>
                            <!-- <p>It is a long established fact that a reader will be distracted</p> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/01.jpg" alt>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Sylvia H Green</h4>

                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/02.jpg" alt>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Gordon D Novak</h4>

                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/03.jpg" alt>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Reid E Butt</h4>

                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fal fa-quote-left"></i></span>
                            <p>
                                There are many variations of passages available but the majority have suffered
                                alteration in some form by injected.
                            </p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/04.jpg" alt>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Parker Jimenez</h4>

                                <div class="testimonial-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end testimonial -->

        <!-- blog -->
        <div class="blog-area bg py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">News & Blog</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @forelse ($blogs as $blog)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item">
                                <div class="blog-item-img">
                                    <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->title }}"
                                        class="img-fluid">
                                </div>
                                <div class="blog-item-info">
                                    <h4 class="blog-title">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p>{!! Str::limit(strip_tags($blog->content), 100, '...') !!}</p>
                                    <a class="blog-btn" href="{{ route('blogs.show', $blog->slug) }}">
                                        Read More <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <p class="text-center">No blogs found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- end blog -->




    </main>
@endsection
