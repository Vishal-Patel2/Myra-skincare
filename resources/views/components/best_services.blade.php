@php use Illuminate\Support\Str; @endphp

<section class="py-5">
    <div class="site-heading text-center">
        <h2 class="site-title">Best Selling Deals</h2>
    </div>

    <div id="infiniteScroll--left" class="container1">
        <!-- START ITEM -->
        @foreach ($bestSellers as $service)
            <article>
                <div class="pricing-item">
                    <div class="img">
                        <img src="{{ $service->image ? asset('storage/services/images/' . $service->image) : asset('images/default.jpg') }}"
                            alt="">
                    </div>
                    @php
                        // Truncate before dash or en-dash
                        $serviceTitle = Str::contains($service->name, ' – ')
                            ? Str::before($service->name, ' – ')
                            : (Str::contains($service->name, ' - ')
                                ? Str::before($service->name, ' - ')
                                : $service->name);
                    @endphp

                    <h3
                        class="service-title mt-2 font-semibold text-lg text-black break-words whitespace-normal leading-snug w-full">
                        <a
                            href="{{ route('service-detail', ['gender' => strtolower($service->midCategory->topCategory->gender->name), 'slug' => Str::slug($service->name)]) }}">
                            {{ $serviceTitle }}
                        </a>
                    </h3>
                    <style>
                        .service-title {
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            /* Maximum number of lines */
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }
                    </style>



                    <div class="text-left mt-2 text-sm text-black leading-tight">
                        <p><strong>Price:</strong> ₹{{ number_format($service->price, 0) }}/- per session</p>

                        @if ($service->packages)
                            @php
                                $packageText = $service->packages;
                                $firstWord = Str::before($packageText, ' ');
                                $remainingText = Str::after($packageText, ' ');
                            @endphp
                            <p>
                                <strong>{{ $firstWord }}:</strong> {{ $remainingText }}
                            </p>
                        @endif
                    </div>




                    <div class="service-arrow mt-2">
                        <a href="{{ route('service-detail', ['gender' => strtolower($service->midCategory->topCategory->gender->name), 'slug' => Str::slug($service->name)]) }}"
                            class="theme-btn">Know More</a>
                    </div>
                </div>
            </article>
        @endforeach




    </div>
</section>

{{-- <style>
    #infiniteScroll--left::-webkit-scrollbar {
        display: none;
    }
</style> --}}
