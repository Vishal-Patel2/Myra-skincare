@extends('layouts.master')

@section('content')
    <style>
        .site-breadcrumb {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .fade-gallery-wrapper {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 8px;
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
        }

        .fade-gallery-img.active {
            opacity: 1;
            z-index: 1;
        }

        .service-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            gap: 20px;
            flex-wrap: wrap;
        }

        .info-left {
            flex: 1;
        }

        .service-title {
            font-size: 22px;
            font-weight: 600;
        }

        .rating {
            font-size: 15px;
            color: #999;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .rating .star {
            color: #0a0a23;
            font-size: 18px;
        }

        .price-time {
            font-size: 16px;
            font-weight: bold;
        }

        .add-to-cart {
            background-color: #000;
            color: #fff;
            padding: 10px 25px;
            border: none;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .nav-tabs {
            display: flex;
            justify-content: center;
            border-bottom: 1px solid #ccc;
            gap: 10px;
        }

        .nav-tabs .nav-link {
            color: #888;
            padding: 10px 20px;
            border: none;
            border-bottom: 2px solid transparent;
        }

        .nav-tabs .nav-link.active {
            color: #000;
            font-weight: 600;
            border-bottom: 2px solid #000;
        }

        .tab-content {
            padding-top: 30px;
        }

        .tab-content table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        .tab-content th,
        .tab-content td {
            border: 1px solid #ddd;
            padding: 8px 10px;
        }

        .tab-content thead {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        @media (max-width: 768px) {
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
        }
    </style>

    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">{{ $service->midCategory->name ?? 'Mid Category' }}</h2>

                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">{{ $service->name }}</li>
                </ul>
            </div>
        </div>

        <div class="service-single-area py-5">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-xl-8 col-lg-8">
                        <div class="service-details">
                            @if ($service->image)
                                <div class="fade-gallery-wrapper">
                                    <img src="{{ asset('storage/services/images/' . $service->image) }}" class="fade-gallery-img active" alt="{{ $service->name }}">
                                    @if ($service->video)
                                        <img src="{{ asset('storage/services/images/' . $service->video) }}" class="fade-gallery-img" alt="video preview">
                                    @endif
                                </div>
                            @endif

                            <div class="service-summary">
                                <div class="info-left">
                                    <div class="service-title">{{ $service->name }}</div>
                                    
                                    <div class="rating">
                                        <span class="star">&#9733;</span>
                                        <span>{{ $service->rating ?? '4.85' }}</span>
                                    </div>
                                    
                                    <div class="price-time">
                                        ₹{{ number_format($service->price) }}/- per session &nbsp; | &nbsp;
                                        <i class="far fa-clock"></i> {{ $service->duration }} mins
                                    </div>
                            
                                    @if($service->packages)
                                        <div class="package-price" style="margin-top: 6px; color: #6B7280; font-size: 0.95rem;">
                                            <!--<i class="fas fa-star" style="color: #FFD700; margin-right: 6px;"></i>-->
                                            <strong>Package (6 sessions):</strong> ₹{{ number_format($service->packages) }}/-
                                        </div>
                                    @endif
                                </div>
                            
                                <button class="add-to-cart" data-id="{{ $service->id }}">ADD TO CART</button>
                            </div>


                            <ul class="nav nav-tabs" id="serviceTabs" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">Overview</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="results-tab" data-bs-toggle="tab" data-bs-target="#expected-results" type="button" role="tab">Expected Results</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="why-tab" data-bs-toggle="tab" data-bs-target="#why-choose" type="button" role="tab">Why Choose Us</button>
                                </li>
                            </ul>

                            <div class="tab-content pt-4">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                    <div>{!! $service->overview !!}</div>
                                </div>

                                <div class="tab-pane fade" id="expected-results" role="tabpanel">
                                    <div>
                                        @if (Str::contains($service->expected_results, '<table>'))
                                            {!! $service->expected_results !!}
                                        @else
                                            {!! $service->expected_results !!}
                                        @endif
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="why-choose" role="tabpanel">
                                    <div>{!! $service->why_choose !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- SIDEBAR --}}
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-sidebar">
                            <div class="widget category">
                                <h4 class="widget-title">All Services</h4>
                                <div class="category-list">
                                    @php
                                        $topCategoryId = $service->midCategory->topCategory->id ?? null;
                                        $relatedServices = \App\Models\Service::whereHas('midCategory', function ($query) use ($topCategoryId) {
                                            $query->where('top_category_id', $topCategoryId);
                                        })->get();
                                    @endphp

                                    @foreach ($relatedServices as $related)
                                        @php
                                            $gender = strtolower(optional($related->midCategory->topCategory->gender)->name);
                                            $slug = \Illuminate\Support\Str::slug($related->name);
                                        @endphp
                                        @if ($gender && $slug)
                                            <a href="{{ route('service.detail', ['gender' => $gender, 'slug' => $slug]) }}" class="d-block mb-2">
                                                {{ $related->name }}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <style>
        h2 {
    font-size: 25px;
      }
    </style>

    <script>
        const slides = document.querySelectorAll('.fade-gallery-img');
        let current = 0;
        setInterval(() => {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
        }, 3000);
    </script>
@endsection
