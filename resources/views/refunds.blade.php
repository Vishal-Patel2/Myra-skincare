@extends('layouts.master')

@section('content')
    <main class="main">

        <!-- Breadcrumb Section -->
        <div class="site-breadcrumb" style="background: url('{{ asset('assets/img/breadcrumb/01.jpg') }}')">
            <div class="container">
                <h2 class="breadcrumb-title">Refunds & Cancellations</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active">Refunds & Cancellations</li>
                </ul>
            </div>
        </div>

        <!-- Policy Content Section -->
        <div class="department-single-area py-5">
            <div class="container">
                <div class="department-single-wrapper">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="department-details">

                                <h4 class="mb-4">Refunds & Cancellations Policy</h4>

                                <p>We strive to provide excellent service at <strong>MyraLuxe Aesthetic Private Ltd.</strong>. To maintain fairness and transparency, we have set clear guidelines for cancellations and refunds.</p>

                                <h5 class="mt-4">Cancellation & Rescheduling</h5>
                                <ul>
                                    <li>A minimum <strong>24-hour prior notice</strong> is required for cancelling or rescheduling appointments.</li>
                                    <li>Any cancellations made within 24 hours of the appointment may be marked as a no-show.</li>
                                    <li>No-shows are <strong>not eligible</strong> for refunds or rescheduling.</li>
                                </ul>

                                <h5 class="mt-4">Refund Policy</h5>
                                <ul>
                                    <li><strong>No refunds</strong> are issued for completed or initiated procedures.</li>
                                    <li>Refunds will be considered only in <strong>special documented cases</strong> and require internal approval.</li>
                                    <li>Clients must submit appropriate documentation (e.g., medical proof) for refund requests.</li>
                                </ul>

                                <h5 class="mt-4">Payment Gateway & EMI Charges</h5>
                                <ul>
                                    <li>If payment was made using EMI or third-party gateways, refund amounts may be subject to deductions.</li>
                                    <li>These deductions may include transaction charges, gateway service fees, or applicable taxes.</li>
                                </ul>

                                <h5 class="mt-4">Non-Transferable Services</h5>
                                <p>Treatment sessions, packages, and offers are strictly <strong>non-transferable</strong> and non-refundable once booked.</p>

                                <h5 class="mt-4">Dispute Resolution</h5>
                                <p>All disputes arising out of refund or cancellation matters will fall under the jurisdiction of <strong>Jaipur, Rajasthan</strong>.</p>

                                <p class="mt-4">By scheduling a service with MyraLuxe, you agree to comply with the above terms and conditions. For any queries, please contact our customer support.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
