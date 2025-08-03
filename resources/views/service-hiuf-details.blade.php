@extends('layouts.master')

@section('content')
    <style>
        .site-breadcrumb {
            padding: 40px 0;
        }

        .fade-gallery-wrapper {
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 8px;
            position: relative;
        }

        .fade-gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
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
            margin: 30px 0;
        }

        .service-title {
            font-size: 26px;
            font-weight: 600;
        }

        .nav-tabs {
            justify-content: center;
            border-bottom: 1px solid #ddd;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #888;
            font-weight: 500;
            padding: 14px 20px;
        }

        .nav-tabs .nav-link.active {
            color: #000;
            font-weight: 600;
            border-bottom: 2px solid #000;
        }

        .tab-content {
            padding-top: 30px;
        }

        .service-sidebar .widget-title {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .category-list a {
            display: block;
            padding: 5px 0;
            color: #555;
        }

        .category-list a:hover {
            color: #000;
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
                                        <img src="{{ asset('storage/services/images/' . $service->image) }}"
                                            class="fade-gallery-img active" alt="{{ $service->name }}">
                                    </div>
                                @endif

                                <div class="service-summary">
                                    <div class="service-title">{{ $service->name }}</div>
                                </div>

                                {{-- <ul class="nav nav-tabs" id="bookingTabs" role="tablist">
                                <li class="nav-item">
                                    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab">OVERVIEW</button>
                                </li>
                            </ul> --}}

                                <div class="">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                        <div>
                                            {!! $service->overview !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4">
                            <div class="service-sidebar">
                                <div class="widget category">
                                    <h4 class="widget-title">All Services</h4>
                                    <div class="category-list">
                                        @foreach (\App\Models\Service::whereHas('midCategory.topCategory', function ($q) {
                                                $q->where('top_categories.name', 'HIUF');
                                            })->get() as $s)
                                            <a href="{{ route('service.detail', Str::slug($s->name)) }}">
                                                <i class="far fa-angle-double-right"></i> {{ $s->name }}
                                            </a>
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
        // Optional: Auto-rotate images if you add more in future
        let current = 0;
        const slides = document.querySelectorAll('.fade-gallery-img');

        setInterval(() => {
            if (slides.length > 1) {
                slides[current].classList.remove('active');
                current = (current + 1) % slides.length;
                slides[current].classList.add('active');
            }
        }, 3000);
    </script>
@endsection
