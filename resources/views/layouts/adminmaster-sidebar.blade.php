<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('admin.index') }}">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-grid-alt"></i>
                        <span key="t-categories">Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('top-categories.index') }}" key="t-top-category">Top Category</a></li>
                        <li><a href="{{ route('mid-categories.index') }}" key="t-mid-category">Mid Category</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('services.index') }}" class="waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-services">Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('doctor_details.index') }}" class="waves-effect">
                        <i class="bx bx-user-circle"></i> {{-- You can use bx-user, bx-id-card, or bx-stethoscope if available --}}
                        <span key="t-doctors">Doctors</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cart"></i>
                        <span key="t-orders-section">Orders</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-orders.html" key="t-orders">Orders</a></li>
                        <li><a href="ecommerce-cart.html" key="t-cart">Cart</a></li>
                        <li><a href="ecommerce-checkout.html" key="t-checkout">Checkout</a></li>
                        <li><a href="ecommerce-shops.html" key="t-shops">Shops</a></li>
                    </ul>
                </li>




                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                        <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Blog</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('blogs.index') }}">All Blogs</a></li>
                        <li><a href="{{ route('blogs.create') }}">Add Blog</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect has-arrow">
                        <i class="bx bx-briefcase-alt"></i>
                        <span key="t-jobs">Jobs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="job-list.html" key="t-job-list">Job List</a></li>
                        <li><a href="job-grid.html" key="t-job-grid">Job Grid</a></li>
                        <li><a href="job-apply.html" key="t-apply-job">Apply Job</a></li>
                        <li><a href="job-details.html" key="t-job-details">Job Details</a></li>
                        <li><a href="job-categories.html" key="t-Jobs-categories">Jobs Categories</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Candidate</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="candidate-list.html" key="t-list">List</a></li>
                                <li><a href="candidate-overview.html" key="t-overview">Overview</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html" key="t-login">Login</a></li>

                        <li><a href="auth-register.html" key="t-register">Register</a></li>

                        <li><a href="auth-recoverpw.html" key="t-recover-password">Recover Password</a></li>

                        <li><a href="auth-lock-screen.html" key="t-lock-screen">Lock Screen</a></li>

                        <li><a href="auth-confirm-mail.html" key="t-confirm-mail">Confirm Email</a></li>

                        <li><a href="auth-email-verification.html" key="t-email-verification">Email
                                verification</a></li>

                        <li><a href="auth-two-step-verification.html" key="t-two-step-verification">Two Step
                                Verification</a></li>

                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
