@extends('layouts.master')

@section('title', 'Myraluxa Aesthetic Pvt Ltd')

@section('content')

<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Our Pricing</h2>
            <ul class="breadcrumb-menu">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Our Pricing</li>
            </ul>
        </div>
    </div>


    <div class="pricing-area py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="package-card">
                        <div class="package-label">Fixed Package</div>
                        <div class="package-title">Hair Free Care Free Skin</div>

                        <div class="price-section">
                            <span class="old-price">₹ 70,800</span>
                            <span class="price">₹ 51,000</span>
                        </div>

                        <ul class="services">
                            <li>Full Body Laser Hair Reduction - Female (6 sessions)</li>
                            <li>Full Body Laser Hair Reduction - Male (6 sessions)</li>
                        </ul>

                        <div class="package-bottom">
                            <button class="add-to-cart">ADD TO CART</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="package-card">
                        <div class="package-label">Fixed Package</div>
                        <div class="package-title">Say Hello to Stronger Hair - Male</div>

                        <div class="price-section">
                            <span class="old-price">₹ 30,600</span>
                            <span class="price">₹ 24,000</span>
                        </div>

                        <ul class="services">
                            <li>VitHair Trichology - Male (3 sessions)</li>
                            <li>Hair PRP - Male (3 sessions)</li>
                        </ul>

                        <div class="package-bottom">
                            <button class="add-to-cart">ADD TO CART</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="package-card">
                        <div class="package-label">Fixed Package</div>
                        <div class="package-title">Say Hello to Stronger Hair - Female</div>

                        <div class="price-section">
                            <span class="old-price">₹ 30,600</span>
                            <span class="price">₹ 24,000</span>
                        </div>

                        <ul class="services">
                            <li>VitHair Trichology - Female (3 sessions)</li>
                            <li>Hair PRP - Female (3 sessions)</li>
                        </ul>

                        <div class="package-bottom">
                            <button class="add-to-cart">ADD TO CART</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="package-card">
                        <div class="package-label">Fixed Package</div>
                        <div class="package-title">Ultimate body slimming package - Male</div>

                        <div class="price-section">
                            <span class="old-price">₹ 1,02,560</span>
                            <span class="price">₹ 70,000</span>
                        </div>

                        <ul class="services">
                            <li>Upper Body Slimming (Arms, Love Handles, Abdomen) - Male (6 sessions)</li>
                            <li>Lower Body Slimming (Hips and Thighs) - Male (6 sessions)</li>
                            <li>Fat Burn Injections - Male (4 sessions)</li>
                        </ul>

                        <div class="package-bottom">
                            <button class="add-to-cart">ADD TO CART</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="package-card">
                        <div class="package-label">Fixed Package</div>
                        <div class="package-title">Ultimate body slimming package - Female</div>

                        <div class="price-section">
                            <span class="old-price">₹ 1,02,560</span>
                            <span class="price">₹ 70,000</span>
                        </div>

                        <ul class="services">
                            <li>Upper Body Slimming (Arms, Love Handles, Abdomen) - Female (6 sessions)</li>
                            <li>Lower Body Slimming (Hips and Thighs) - Female (6 sessions)</li>
                            <li>Fat Burn Injections - Female (4 sessions)</li>
                        </ul>

                        <div class="package-bottom">
                            <button class="add-to-cart">ADD TO CART</button>

                        </div>
                    </div>

                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="package-card">
                        <div class="package-label">Fixed Package</div>
                        <div class="package-title">Smooth skin & Hair rejuvenation - Male</div>

                        <div class="price-section">
                            <span class="old-price">₹ 88,525</span>
                            <span class="price">₹ 58,000</span>
                        </div>

                        <ul class="services">
                            <li>Full Body Laser Hair Reduction - Male (6 sessions)</li>
                            <li>Hair PRP - Male (3 sessions)</li>
                            <li>Face GFC Treatment - Male (4 sessions)</li>
                        </ul>

                        <div class="package-bottom">
                            <button class="add-to-cart">ADD TO CART</button>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</main>
<style>
    .package-card {
        background: #fff;
        max-width: 600px;
        height: 440px;
        margin: 20px auto;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        position: relative;
        overflow: hidden;
    }

    .package-label {
        background: #e0e0e0;
        color: #333;
        display: inline-block;
        padding: 6px 14px;
        border-radius: 10px;
        font-weight: 500;
        font-size: 14px;
    }

    .package-title {
     font-size: 18px;
    font-weight: 500;
    margin: 10px 0 20px;
    }

    .price {
        font-size: 26px;
        color: #000;
        font-weight: 600;
    }

    .old-price {
        text-decoration: line-through;
        color: #c00;
        font-size: 18px;
        margin-right: 10px;
    }

    .services {
        margin: 20px 0;
        padding: 0;
    }

    .services li {
        list-style: none;
    margin: 10px 0;
    position: relative;
    padding-left: 30px;
    font-size: 14px;
    }

    .services li::before {
        content: "✓";
        position: absolute;
        left: 0;
        top: 0;
        color: #f28c28;
        font-weight: bold;
    }

    .add-to-cart {
        background: #000;
        color: #fff;
        padding: 12px 25px;
        font-size: 16px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .add-to-cart:hover {
        background: #333;
    }

    .package-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .person-img {
        height: 180px;
        max-width: 100%;
        margin-left: 20px;
    }

    /* ✅ MOBILE RESPONSIVENESS */
    @media (max-width: 768px) {
        .package-card {
            padding: 20px;
        }

        .package-title {
            font-size: 20px;
        }

        .price {
            font-size: 22px;
        }

        .old-price {
            font-size: 16px;
        }

        .services li {
            font-size: 15px;
            padding-left: 26px;
        }

        .add-to-cart {
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }

        .package-bottom {
            flex-direction: column-reverse;
            align-items: flex-start;
        }

        .person-img {
            margin: 0 auto;
            display: none;
            height: auto;
            width: 100%;
            max-width: 250px;
        }
        .package-card {
        
        height: auto;
        
    }
    }
</style>


@endsection