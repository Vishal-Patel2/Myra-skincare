@php
    // Keep only one service per Mid Category
    $uniqueServices = $services->unique(function ($service) {
        return $service->midCategory->id;
    });
@endphp

<div class="card1s-container"> 
    @forelse ($uniqueServices as $service)
        @php
            $midSlug = Str::slug($service->midCategory->name);
            $gender = strtolower(optional($service->midCategory->topCategory->gender)->name);
        @endphp

        @if ($gender && $midSlug)
            <a href="{{ route('services.list', ['gender' => $gender, 'midSlug' => $midSlug]) }}"
                class="card1-link-wrapper">
                <div class="card1">
                    <div class="card1-image">
                        <img src="{{ asset('storage/uploads/mid_categories/' . $service->midCategory->image) }}" 
                             alt="{{ $service->midCategory->name }}">
                    </div>

                    <div class="card1-content">
                        <h3>{{ $service->midCategory->name ?? 'Mid Category' }}</h3>
                        <p>{!! Str::limit(strip_tags(html_entity_decode($service->highlight_points ?? 'No description available.')), 150) !!}</p>
                    </div>
                </div>
            </a>
        @endif
    @empty
        <p>No HIUF services available at the moment.</p>
    @endforelse
</div>




<style>
    .card1-link-wrapper {
        text-decoration: none;
        color: inherit;
        width: 100%;
        max-width: 550px;
    }

    .card1-link-wrapper:hover {
        text-decoration: none;
    }

    .card1s-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 15px;
    }

    .card1 {
        display: flex;
        flex: 1 1 calc(50% - 30px);
        flex-direction: row;
        align-items: center;
        background-color: #fff;
        border-radius: 24px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
        padding: 24px;
        max-width: 550px;
        transition: transform 0.3s ease;
    }

    .card1:hover {
        transform: translateY(-6px);
    }

    .card1-image {
        flex-shrink: 0;
        width: 110px;
        height: 110px;
        border-radius: 50%;
        background: linear-gradient(#fff, #f0f0f0);
        padding: 5px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-right: 20px;
        position: relative;
    }

    .card1-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        display: block;
    }

    .card1-image::after {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 50%;
        background-image: radial-gradient(circle, rgba(255, 255, 255, 0.6) 1px, transparent 1px);
        background-size: 10px 10px;
        pointer-events: none;
    }


    .card1-content {
        flex: 1;
    }

    .card1-content h3 {
        font-size: 20px;
        font-weight: 600;
        margin: 0 0 10px;
        color: #1e1e1e;
    }

    .card1-content p {
        font-size: 15px;
        color: #555;
        margin-bottom: 25px;
    }

    .cta-actions {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .cta-button,
    .add-to-cart {
        background-color: #1d293f;
        color: #fff;
        padding: 8px 14px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 13px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .cta-button:hover,
    .add-to-cart:hover {
        background-color: #0f1a2d;
    }

    @media (max-width: 768px) {
        .card1 {
            flex: 1 1 100%;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .card1-image {
            margin: 0 auto 16px;
        }

        .card1-content h3 {
            font-size: 18px;
        }

        .card1-content p {
            font-size: 14px;
        }

        .cta-actions {
            justify-content: center;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.add-to-cart');
        buttons.forEach(button => {
            button.addEventListener('click', function() {
                const serviceId = this.getAttribute('data-id');

                fetch("{{ route('cart.add') }}", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            service_id: serviceId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            document.getElementById('cart-count').textContent = data
                                .cart_count;
                        }
                    });
            });
        });
    });
</script>
