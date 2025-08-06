@extends('layouts.master')

@section('content')

    <style>
        .site-breadcrumb {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        /* ==== Fade Gallery Slider ==== */
        .fade-gallery-wrapper {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 8px;
        }

        .fade-gallery-slider {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .fade-gallery-img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            z-index: 0;
        }

        .fade-gallery-img.active {
            opacity: 1;
            z-index: 1;
        }

        /* ==== Service Summary ==== */
        .service-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            max-width: 1000px;
            /* margin: 20px auto; */
            background-color: #fff;
            gap: 20px;
            flex-wrap: wrap;
        }

        .info-left {
            display: flex;
            flex-direction: column;
            /* gap: 10px; */
            flex: 1;
        }

        .service-title {
            font-size: 20px;
            font-weight: 600;
        }

        .price-time {
            display: flex;
            align-items: center;
            font-size: 16px;
            font-weight: bold;
            flex-wrap: wrap;
        }

        .price-time i {
            margin: 0 8px;
            font-style: normal;
            font-weight: normal;
            color: #888;
        }

        .duration {
            font-weight: normal;
            color: #999;
        }

        .rating {
            display: flex;
            align-items: center;
            font-size: 15px;
            color: #999;
            gap: 6px;
            flex-wrap: wrap;
        }

        .rating .star {
            color: #0a0a23;
            font-size: 18px;
        }

        .add-to-cart {
            background-color: #000;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
            white-space: nowrap;
        }

        .add-to-cart:hover {
            background-color: #333;
        }

        /* ==== Tabs Styling ==== */
        .nav-tabs {
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #ccc;
            gap: 10px;
            flex-wrap: wrap;
        }

        .nav-tabs .nav-link {
            color: #888;
            font-weight: 500;
            padding: 10px 20px;
            border: none;
            border-bottom: 2px solid transparent;
            transition: 0.3s ease;
        }

        .nav-tabs .nav-link:hover {
            color: #000;
            background-color: transparent;
        }

        .nav-tabs .nav-link.active {
            color: #000;
            font-weight: 600;
            border-bottom: 2px solid #000;
        }

        .tab-content {
            padding-top: 40px;
        }

        .tab-pane img {
            /* width: 120px; */
            margin-bottom: 20px;
        }

        .tab-pane h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .tab-pane p {
            font-size: 15px;
            /* margin-bottom: 10px; */
            color: black;
        }

        .tab-pane .btn {
            font-size: 14px;
            font-weight: 500;
            padding: 10px 25px;
            border-radius: 25px;
            transition: 0.3s ease;
        }

        /* =================== MOBILE VIEW =================== */
        @media (max-width: 991px) {
            .site-breadcrumb {
                padding-top: 85px;
            }

            .fade-gallery-wrapper {
                height: 200px;
            }

            .service-summary {
                flex-direction: column;
                align-items: flex-start;
                text-align: left;
                gap: 15px;
            }

            .add-to-cart {
                width: 100%;
                text-align: center;
            }

            .price-time,
            .rating {
                font-size: 14px;
            }

            .service-title {
                font-size: 18px;
            }

            .fade-gallery-img {
                object-position: center;
            }
        }

        @media (max-width: 768px) {
            .nav-tabs {
                flex-direction: row;
                align-items: center;
            }

            .nav-tabs .nav-link {
                width: 100%;
                text-align: center;
            }

            .tab-content {
                padding: 20px 10px;
            }

            .tab-pane .btn {
                width: 100%;
                max-width: 250px;
            }

            .tab-pane img {
                width: 100px;
            }

            .service-summary {
                padding: 15px;
            }

            .tab-pane p {
                font-size: 14px;
            }
        }
    </style>
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">
                    {{ $service->midCategory->topCategory->name ?? 'Top Category' }}
                </h2>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">{{ $service->name }}</li>
                </ul>
            </div>
        </div>

        <div class="service-single-area py-5">
            <div class="container">
                <div class="service-single-wrapper">
                    <div class="row flex-row-reverse">
                        <div class="col-xl-8 col-lg-8">
                            <div class="service-details">
                                @if ($service->image)
                                    <div class="fade-gallery-wrapper">
                                        <div class="fade-gallery-slider">
                                            <img src="{{ asset('storage/services/images/' . $service->image) }}"
                                                class="fade-gallery-img active" alt="gallery">
                                            @if ($service->video)
                                                <img src="{{ asset('storage/services/images/' . $service->video) }}"
                                                    class="fade-gallery-img" alt="gallery">
                                            @endif
                                        </div>
                                    </div>
                                @endif
                                <div class="service-summary d-flex justify-content-between align-items-start flex-wrap">
                                    <div class="info-left">
                                        <!-- Service Name -->
                                        <div class="service-title mb-2" style="font-size: 1.3rem; font-weight: 600; color: #2d2d2d;">
                                            {{ $service->name }}
                                        </div>
                                
                                        <!-- Rating -->
                                        <div class="rating d-flex align-items-center mb-2" style="color: #6B7280; font-size: 0.95rem;">
                                            <span class="star" style="color: #FFD700; font-size: 1.1rem; margin-right: 6px;">&#9733;</span>
                                            <span>{{ $service->rating ?? '4.85' }}</span>
                                        </div>
                                
                                        <!-- Price & Duration -->
                                        <div class="price-time d-flex align-items-center mb-2" style="color: #6B7280; font-size: 0.95rem;">
                                            <strong style="margin-right: 4px;">Price:</strong> ₹{{ number_format($service->price) }}/- per session
                                            <span class="mx-2">|</span>
                                            <i class="far fa-clock me-1"></i> {{ $service->duration }} mins
                                        </div>
                                
                                        <!-- Package Price -->
                                        @if($service->packages)
                                            <div class="package-price d-flex align-items-center" style="color: #6B7280; font-size: 0.95rem;">
                                                <!--<i class="fas fa-star" style="color: #FFD700; margin-right: 6px;"></i>-->
                                                <strong>Package (6 sessions):</strong>&nbsp;₹{{ number_format($service->packages) }}/-
                                            </div>
                                        @endif
                                    </div>
                                
                                    <!-- Add to Cart Button -->
                                    <button class="add-to-cart btn btn-dark rounded-pill px-4 py-2 text-uppercase mt-2 mt-md-0"
                                        data-id="{{ $service->id }}"
                                        style="font-size: 13px; font-weight: 500; letter-spacing: 0.5px;">
                                        ADD TO CART
                                    </button>
                                </div>

                               <style>
                                   .service-summary {
                                        padding: 15px 0;
                                        /*border-bottom: 1px solid #eee;*/
                                    }
                                    
                                    .service-title {
                                        font-size: 1.3rem;
                                        font-weight: 600;
                                        color: #2d2d2d;
                                    }
                                    
                                    .rating,
                                    .price-time,
                                    .package-price {
                                        font-size: 0.95rem;
                                        color: #6B7280;
                                    }
                                    
                                    .star {
                                        color: #FFD700;
                                        font-size: 1.1rem;
                                        margin-right: 6px;
                                    }
                                    
                                    .add-to-cart {
                                        background-color: #000;
                                        color: #fff;
                                        border: none;
                                        border-radius: 50px;
                                        padding: 8px 20px;
                                        font-size: 13px;
                                        font-weight: 500;
                                        text-transform: uppercase;
                                        cursor: pointer;
                                        transition: background-color 0.3s ease;
                                    }
                                    
                                    .add-to-cart:hover {
                                        background-color: #333;
                                    }

                               </style>
                                <ul class="nav nav-tabs justify-content-center" id="bookingTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab"
                                            data-bs-target="#overview" type="button" role="tab">Overview</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="results-tab" data-bs-toggle="tab"
                                            data-bs-target="#expected-results" type="button" role="tab">Expected
                                            Results</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="why-choose-tab" data-bs-toggle="tab"
                                            data-bs-target="#why-choose" type="button" role="tab">Why Choose Myra Luxe
                                            Aesthetics?</button>
                                    </li>
                                </ul>

                                <div class="tab-content py-4">

                                    {{-- OVERVIEW --}}
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                        <div style="padding-left: 20px;">
                                            {!! $service->overview !!}
                                        </div>
                                    </div>

                                    {{-- EXPECTED RESULTS --}}
                                    <div class="tab-pane fade" id="expected-results" role="tabpanel">
                                        <div style="padding-left: 20px;">
                                            @if (Str::contains($service->expected_results, '<table>'))
                                                {!! $service->expected_results !!}
                                            @else
                                                <p>{!! nl2br(e($service->expected_results)) !!}</p>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- WHY CHOOSE --}}
                                    <div class="tab-pane fade" id="why-choose" role="tabpanel">
                                        <div style="padding-left: 20px;">
                                            {!! $service->why_choose !!}
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                        <style>
                            .tab-content table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-top: 1rem;
                            }

                            .tab-content th,
                            .tab-content td {
                                border: 1px solid #ddd;
                                padding: 8px 10px;
                                vertical-align: top;
                            }

                            .tab-content thead {
                                background-color: #f8f9fa;
                                font-weight: bold;
                            }
                        </style>
                        @php
                            // Get current top category
                            $currentTopCategoryId = $service->midCategory->topCategory->id ?? null;

                            // Fetch all services under the same top category
                            $relatedServices = \App\Models\Service::whereHas('midCategory', function ($query) use (
                                $currentTopCategoryId,
                            ) {
                                $query->where('top_category_id', $currentTopCategoryId);
                            })
                                ->take(8)
                                ->get();
                        @endphp

                        <div class="col-xl-4 col-lg-4">
                            <div class="service-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">All Services</h4>
                                    <div class="category-list">
                                        @foreach ($relatedServices as $relatedService)
                                            @php
                                                $gender = strtolower(
                                                    optional($relatedService->midCategory->topCategory->gender)->name,
                                                );
                                                $slug = \Illuminate\Support\Str::slug($relatedService->name);
                                            @endphp

                                            @if ($gender && $slug)
                                                <a href="{{ route('service.detail', ['gender' => $gender, 'slug' => $slug]) }}"
                                                    class="cta-button d-block mb-2">
                                                    {{ $relatedService->name }}
                                                </a>
                                            @else
                                                <span class="text-danger d-block mb-2">Missing gender or service name</span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // JavaScript to rotate images every 3 seconds
        let current = 0;
        const slides = document.querySelectorAll('.fade-gallery-img');

        setInterval(() => {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
        }, 3000);
    </script>
    <!-- end slider -->

@endsection
