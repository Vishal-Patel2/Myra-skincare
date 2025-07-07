@extends('layouts.master')

@section('title', 'Myraluxa Aesthetic Pvt Ltd')

@section('content')
<main class="main">
    <div class="video_container">
        <video autoplay="" muted="" loop="" playsinline="" class="video_window" id="bgVideo">
            <source src="assets/img/slider/slider.mp4" type="video/mp4">

        </video>
    </div>


    <!-- SKIN CONCERN -->
     <section class="py-5" style="background: white;">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="site-title pt-3">SHOP BY SKIN CONCERN</h2>
        </div>

        <!-- Nav Pills -->
        <ul class="nav nav-pills justify-content-center mb-4" id="skinConcernTabs1" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="female-tab1" data-bs-toggle="pill" data-bs-target="#female1" type="button" role="tab">
                    Female
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="male-tab1" data-bs-toggle="pill" data-bs-target="#male1" type="button" role="tab">
                    Male
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="skinConcernTabsContent1">
            <!-- Female Tab -->
            <div class="tab-pane fade show active" id="female1" role="tabpanel">
                <div class="row">
                    @foreach($femaleServices as $service)
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <a href="">
                                        <h5 class="card-title">{{ $service->name }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Male Tab -->
            <div class="tab-pane fade" id="male1" role="tabpanel">
                <div class="row">
                    @foreach($maleServices as $service)
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="{{ asset('storage/' . $service->image) }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <a href="">
                                        <h5 class="card-title">{{ $service->name }}</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- end  SKIN CONCERN -->

    <!--  SHOP BY TREATMENTS -->
    <section class="bg py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="site-title pt-3">SHOP BY TREATMENTS</h2>
            </div>

            <!-- Nav Pills -->
            <ul class="nav nav-pills justify-content-center mb-4" id="skinConcernTabs" role="tablist">
                 <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="female-tab" data-bs-toggle="pill" data-bs-target="#female" type="button" role="tab"
                        style="font-family: rubik, sans-serif;font-weight: 500;color:#000000;font-size:16px;">Female</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="male-tab" data-bs-toggle="pill" data-bs-target="#male" type="button" role="tab"
                        style="font-family: rubik, sans-serif;font-weight: 400;color:#000000;font-size:16px;">Male</button>
                </li>
               
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="skinConcernTabsContent">
                <!-- Female Tab -->
                <div class="tab-pane fade  show active" id="female" role="tabpanel">
                    <div class="row">
                        <!-- Repeat for each Female item -->
                        <!-- You had 13 female items -->
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin1.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Unwanted Hair</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin2.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Pigmentation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin3.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Acne</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin4.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Dull Skin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin5.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Stubborn Fat</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin6.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Anti-Aging</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin7.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Tanning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin8.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Oily Skin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin9.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Hair Fall</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin10.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Double Chin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin11.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Scars</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/fskin12.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Dark Circles</h5>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- Male Tab -->
                <div class="tab-pane fade" id="male" role="tabpanel">
                    <div class="row">
                        <!-- Repeat for each Male item -->
                        <!-- You had 13 male items -->
                        <!-- Item -->
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin1.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Unwanted Hair</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin2.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Hair Fall</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin3.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Stubborn Fat</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin4.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Dull Skin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin5.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Acne</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin6.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Anti-Aging</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin7.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Tanning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin8.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Oily Skin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin9.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Double Chin</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin10.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Pigmentation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin11.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Scars</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin12.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Dark Circles</h5>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-lg-2 mb-4">
                            <div class="card h-100 text-center">
                                <img src="./assets/img/skin/skin13.webp" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">Dark Underarms</h5>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <!--end  SHOP BY TREATMENTS -->
    <!-- Best Selling Deals -->
    <section class="py-5">
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
    </section>

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

        <!-- Scrollable Carousel -->
        <div id="doctorScroll" class="carousel-container">
            <div class="carousel">
                <!-- Doctor Cards -->
                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/01.jpg" alt="Dr. Malissa Fierro" />
                        <div class="team-content">
                            <h5><a href="doctor-details.php">Dr. Malissa Fierro</a></h5>
                            <span>Cardiology Specialist</span>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/02.jpg" alt="Dr. Arron Rodri" />
                        <div class="team-content">
                            <h5><a href="doctor-details.php">Dr. Arron Rodri</a></h5>
                            <span>Surgeon, Proctologist</span>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/03.jpg" alt="Dr. Chad Smith" />
                        <div class="team-content">
                            <h5><a href="doctor-details.php">Dr. Chad Smith</a></h5>
                            <span>Orthopedic Surgeon</span>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/04.jpg" alt="Dr. Tony Pinto" />
                        <div class="team-content">
                            <h5><a href="doctor-details.php">Dr. Tony Pinto</a></h5>
                            <span>Emergency Physician</span>
                        </div>
                    </div>
                </div>

                <!-- Duplicate Cards for Smooth Loop -->
                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/01.jpg" alt="Dr. Malissa Fierro" />
                        <div class="team-content">
                            <h5><a href="doctor-details.php">Dr. Malissa Fierro</a></h5>
                            <span>Cardiology Specialist</span>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/02.jpg" alt="Dr. Arron Rodri" />
                        <div class="team-content">
                            <h5><a href="doctor-details.php">Dr. Arron Rodri</a></h5>
                            <span>Surgeon, Proctologist</span>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/03.jpg" alt="Dr. Chad Smith" />
                        <div class="team-content">
                            <h5><a href="#">Dr. Chad Smith</a></h5>
                            <span>Orthopedic Surgeon</span>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-item">
                        <img src="assets/img/team/04.jpg" alt="Dr. Tony Pinto" />
                        <div class="team-content">
                            <h5><a href="#">Dr. Tony Pinto</a></h5>
                            <span>Emergency Physician</span>
                        </div>
                    </div>
                </div>
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

                        <h2 class="site-title">Why MYRALUXA</h2>

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

                        <h2 class="site-title">CLIENT DIARIES</h2>

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
                        <h2 class="site-title">Client Feedback</h2>
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
                        <!-- <span class="site-title-tagline">Our Blog</span> -->
                        <h2 class="site-title">News & Blog</h2>
                        <!-- <p>It is a long established fact that a reader will be distracted</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/01.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <h4 class="blog-title">
                                <a href="#">There are many variates of passages alteration</a>
                            </h4>
                            <div class="blog-item-meta">

                            </div>
                            <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                            <a class="blog-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/02.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <h4 class="blog-title">
                                <a href="#">There are many variates of passages alteration</a>
                            </h4>
                            <div class="blog-item-meta">

                            </div>
                            <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                            <a class="blog-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-item-img">
                            <img src="assets/img/blog/03.jpg" alt="Thumb">
                        </div>
                        <div class="blog-item-info">
                            <h4 class="blog-title">
                                <a href="#">There are many variates of passages alteration</a>
                            </h4>
                            <div class="blog-item-meta">

                            </div>
                            <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                            <a class="blog-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end blog -->


    <!-- <div class="partner-area">
        <div class="container">
            <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                <img src="assets/img/partner/01.jpg" alt="thumb">
                <img src="assets/img/partner/02.jpg" alt="thumb">
                <img src="assets/img/partner/03.jpg" alt="thumb">
                <img src="assets/img/partner/04.jpg" alt="thumb">
                <img src="assets/img/partner/01.jpg" alt="thumb">
                <img src="assets/img/partner/02.jpg" alt="thumb">
                <img src="assets/img/partner/03.jpg" alt="thumb">
            </div>
        </div>
    </div> -->

</main>
@endsection
