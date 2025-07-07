@extends('layouts.master')

@section('title', 'Myraluxa Aesthetic Pvt Ltd')

@section('content')



<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Our Carrer</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Our Carrer</li>
            </ul>
        </div>
    </div>

    <div class="contact-area py-5">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="contact-form">
                            <div class="contact-form-header text-center">
                                <h2>Explore Career Opportunities</h2>

                            </div>
                            <form method="post" action="" id="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone"
                                                placeholder="Your Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="location"
                                                placeholder="Your location" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="profile"
                                                placeholder="What job profile are you looking for?" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" cols="30" rows="4" class="form-control"
                                                placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="theme-btn mt-3"> <i class="far fa-paper-plane"></i> Send
                                    Message</button>
                                <div class="col-md-12 mt-3">
                                    <div class="form-messege text-success"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</main>
@endsection