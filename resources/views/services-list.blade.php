@extends('layouts.master')

@section('title', $midCategory->name . ' Services')

@section('content')
<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $midCategory->name }} Services</h2>
            <ul class="breadcrumb-menu">
                <li><a href="/">Home</a></li>
                <li class="active">{{ $midCategory->name }}</li>
            </ul>
        </div>
    </div>

    <div class="team-area py-5">
        <div class="container">
            <div class="row">
                @forelse($services as $service)
                <div class="col-6 col-md-6 col-lg-3 mb-4">
                    <div class="team-item text-center">
                        <img src="{{ asset('storage/services/images/' . $service->image) }}" alt="{{ $service->name }}">

                        <div class="team-content">
                            <div class="team-bio">
                                <h5><a href="{{ route('service.detail', Str::slug($service->name)) }}">{{ $service->name }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <p class="text-center">No services found under this category.</p>
                @endforelse
            </div>
        </div>
    </div>

</main>
@endsection
