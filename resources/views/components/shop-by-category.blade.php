@php
    use Illuminate\Support\Str;
    use App\Models\MidCategory;

    $categorySlug = Str::slug($top_category); // For tab IDs

    $allowedCategories = ['SKIN CONCERN', 'TREATMENTS'];

    // Female categories
    $femaleMid = MidCategory::with('topCategory.gender')
        ->whereHas('topCategory', function ($query) use ($allowedCategories) {
            $query->whereIn('name', $allowedCategories)->whereHas('gender', function ($genderQuery) {
                $genderQuery->where('name', 'Women');
            });
        })
        ->get();

    // Male categories
    $maleMid = MidCategory::with('topCategory.gender')
        ->whereHas('topCategory', function ($query) use ($allowedCategories) {
            $query->whereIn('name', $allowedCategories)->whereHas('gender', function ($genderQuery) {
                $genderQuery->where('name', 'Men');
            });
        })
        ->get();
@endphp


@if ($femaleMid->count() || $maleMid->count())
    <section class="bg mt-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="site-title pt-3">SHOP BY {{ strtoupper($top_category) }}</h2>
            </div>

            <!-- Nav Pills -->
            <ul class="nav nav-pills justify-content-center mb-4" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="{{ $categorySlug }}-female-tab" data-bs-toggle="pill"
                        data-bs-target="#{{ $categorySlug }}-female" type="button" role="tab" aria-selected="true"
                        style="font-family: rubik, sans-serif;font-weight: 500;color:#000000;font-size:16px;">
                        Female
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="{{ $categorySlug }}-male-tab" data-bs-toggle="pill"
                        data-bs-target="#{{ $categorySlug }}-male" type="button" role="tab" aria-selected="false"
                        tabindex="-1"
                        style="font-family: rubik, sans-serif;font-weight: 400;color:#000000;font-size:16px;">
                        Male
                    </button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Female Tab -->
                <div class="tab-pane fade show active" id="{{ $categorySlug }}-female" role="tabpanel"
                    aria-labelledby="{{ $categorySlug }}-female-tab">

                    <!-- Mobile Horizontal Scroll -->
                    <div class="scroll-wrapper d-lg-none d-flex overflow-auto gap-3 pb-3">
                        @foreach ($femaleMid as $mid)
                            <div class="col-6 col-md-6 col-lg-2 mb-4">
                                <a
                                    href="{{ route('services', ['gender' => strtolower(optional($mid->topCategory->gender)->name), 'mid' => Str::slug($mid->name)]) }}">
                                    <div class="card h-100 text-center">
                                        <img src="{{ asset('storage/uploads/mid_categories/' . $mid->image) }}"
                                            class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 14px;">{{ $mid->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Desktop Scrollable with Prev/Next -->
                    <div class="position-relative d-none d-lg-block">
                        <button class="scroll-btn prev-btn" data-target="female-scroll">&#8592;</button>
                        <button class="scroll-btn next-btn" data-target="female-scroll">&#8594;</button>

                        <div class="scroll-container d-flex gap-3 pb-3 overflow-hidden" id="female-scroll">
                            @foreach ($femaleMid as $mid)
                                <div class="col-lg-2 mb-4 flex-shrink-0">
                                    <a
                                        href="{{ route('services', ['gender' => strtolower(optional($mid->topCategory->gender)->name), 'mid' => Str::slug($mid->name)]) }}">
                                        <div class="card h-100 text-center">
                                            <img src="{{ asset('storage/uploads/mid_categories/' . $mid->image) }}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $mid->name }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <!-- Male Tab -->
                <div class="tab-pane fade" id="{{ $categorySlug }}-male" role="tabpanel"
                    aria-labelledby="{{ $categorySlug }}-male-tab">

                    <!-- Mobile Horizontal Scroll -->
                    <div class="scroll-wrapper d-lg-none d-flex overflow-auto gap-3 pb-3">
                        @foreach ($maleMid as $mid)
                            <div class="col-6 col-md-6 col-lg-2 mb-4">
                                <a
                                    href="{{ route('services', ['gender' => strtolower(optional($mid->topCategory->gender)->name), 'mid' => Str::slug($mid->name)]) }}">
                                    <div class="card h-100 text-center">
                                        <img src="{{ asset('storage/uploads/mid_categories/' . $mid->image) }}"
                                            class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-size: 14px;">{{ $mid->name }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Desktop Scrollable with Prev/Next -->
                    <div class="position-relative d-none d-lg-block">
                        <button class="scroll-btn prev-btn" data-target="male-scroll">&#8592;</button>
                        <button class="scroll-btn next-btn" data-target="male-scroll">&#8594;</button>

                        <div class="scroll-container d-flex gap-3 pb-3 overflow-hidden" id="male-scroll">
                            @foreach ($maleMid as $mid)
                                <div class="col-lg-2 mb-4 flex-shrink-0">
                                    <a
                                        href="{{ route('services', ['gender' => strtolower(optional($mid->topCategory->gender)->name), 'mid' => Str::slug($mid->name)]) }}">
                                        <div class="card h-100 text-center">
                                            <img src="{{ asset('storage/uploads/mid_categories/' . $mid->image) }}"
                                                class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $mid->name }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endif
<style>
    .scroll-container {
        overflow-x: auto;
        scroll-behavior: smooth;
    }

    .scroll-btn {
        position: absolute;
        top: 35%;
        z-index: 10;
        background: #fff;
        border: none;
        font-size: 24px;
        padding: 5px 10px;
        cursor: pointer;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .prev-btn {
        left: -10px;
    }

    .next-btn {
        right: -10px;
    }

    @media (min-width: 992px) {
        .col-lg-2 {
            flex: 0 0 auto;
            width: 15.666667%;
        }
    }
</style>
<script>
    document.querySelectorAll('.scroll-btn').forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.dataset.target;
            const scrollContainer = document.getElementById(targetId);
            const scrollAmount = 300;
            if (button.classList.contains('next-btn')) {
                scrollContainer.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            } else {
                scrollContainer.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
