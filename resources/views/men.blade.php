@extends('layouts.master')

@section('title', 'Aesthetic Skincare for Men')

@section('content')

<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">Men Aesthetic Skincare Category</h2>
            <ul class="breadcrumb-menu">
                <li><a href="/">Home</a></li>
                <li class="active">Aesthetic Skincare</li>
            </ul>
        </div>
    </div>

    <div class="team-area pt-4">
        <div class="container">

            {{-- Single Tab Heading --}}
            {{-- <h3 class="text-center mb-4">Aesthetic Skincare Services</h3> --}}

            {{-- Services Grid --}}
            <div class="row justify-content-center">
                @foreach ($topCategories as $topCat)
                    @foreach ($topCat->midCategories as $midCat)
                        <div class="col-6 col-md-6 col-lg-2 mb-4">
                            <a href="{{ route('services', ['gender' => strtolower($midCat->topCategory->gender->name), 'mid' => Str::slug($midCat->name)]) }}">
                                <div class="card h-100 text-center">
                                    <img src="{{ asset('storage/uploads/mid_categories/' . $midCat->image) }}"
                                         alt="{{ $midCat->name }}" class="img-fluid mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $midCat->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </div>

</main>

@endsection
