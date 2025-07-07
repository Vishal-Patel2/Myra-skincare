
     <header class="header">

         <div class="main-navigation">
             <nav class="navbar navbar-expand-lg">
                 <div class="container">
                     <a class="navbar-brand" href="index.php">
                         <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                     </a>
                     <div class="mobile-menu-right">
                         <a href="#" class="mobile-search-btn search-box-outer">
                             <i class="far fa-search"></i>
                         </a>
                         <a href="#" class="shop-cart-btn">
                             <i class="fas fa-shopping-cart"></i>
                         </a>
                         <a href="#" class="wallet-btn">
                             <i class="fas fa-wallet"></i>
                         </a>
                         <a href="#" class="user-btn">
                             <i class="fa fa-user"></i>
                         </a>
                         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                             data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                             <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                         </button>
                     </div>
                     <div class="collapse navbar-collapse" id="main_nav">
                         <ul class="navbar-nav ms-auto">
                             <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('men')}}">Men</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('women')}}">Women</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('packages')}}">Packages</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('career')}}">Carrer</a></li>
                             <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>


                         </ul>
                         <div class="header-nav-right">
                             <div class="header-nav-search">
                                 <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>

                                 <a href="cart.php" class="cart-icon-wrapper">
                                     <i class="fas fa-shopping-cart"></i>
                                     <span class="count-box" id="cart-count">0</span>
                                 </a>

                                 <a href="wallet.php" class=""><i class="fas fa-wallet"></i></a>
                                 <div class="user-dropdown">
                                     <a href="#" class="user-icon" id="userIcon"><i class="fa fa-user"></i></a>

                                     <div class="profile-menu" id="profileMenu">
                                         <div class="menu-item"><a href="edit-profile.php"
                                                 style="color: black;font-size:15px;"> Edit Profile </a><span
                                                 class="arrow">›</span></div>
                                         <div class="menu-item"><a href="booking.php"
                                                 style="color: black;font-size:15px;">My Bookings </a><span
                                                 class="arrow">›</span></div>
                                         <div class="menu-item"><a href="manage-address.php"
                                                 style="color: black;font-size:15px;">Manage Address </a><span
                                                 class="arrow">›</span></div>
                                         <div class="menu-item">Logout <span class="arrow">›</span></div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </nav>
         </div>
     </header>
     <div class="profile-menu">
         <div class="menu-item">
             Edit Profile
             <span class="arrow">›</span>
         </div>
         <div class="menu-item">
             My Bookings
             <span class="arrow">›</span>
         </div>
         <div class="menu-item">
             Manage Address
             <span class="arrow">›</span>
         </div>
         <div class="menu-item">
             Logout
             <span class="arrow">›</span>
         </div>
     </div>
     <style>
     .user-icon {
         font-size: 24px;
         background: #fff;
         padding: 10px 14px;
         border-radius: 50%;
         /* box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); */
         cursor: pointer;
         position: relative;
         display: inline-block;
     }

     /* Profile Menu Dropdown */
     .profile-menu {
         position: absolute;
         top: 60px;
         right: 0;
         width: 230px;
         background: #fff;
         border-radius: 8px;
         box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
         overflow: hidden;
         display: none;
         z-index: 999;
     }

     .menu-item {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 7px 25px;
         border-bottom: 1px solid #eee;
         color: #111;
         font-weight: 600;
         font-size: 16px;
         cursor: pointer;
         transition: background 0.2s;
     }

     .menu-item:hover {
         background-color: #f9f9f9;
     }

     .menu-item:last-child {
         border-bottom: none;
     }

     .arrow {
         font-size: 18px;
         color: #999;
     }

     /* Container to position icon and dropdown */
     .user-dropdown {
         position: relative;
         display: inline-block;
     }

     @media (max-width: 500px) {
         .profile-menu {
             width: 90vw;
             right: 5%;
         }

         .menu-item {
             font-size: 15px;
             padding: 14px 16px;
         }

         .arrow {
             font-size: 16px;
         }
     }
     </style>

     <div class="search-popup">
         <button class="close-search"><span class="far fa-times"></span></button>
         <form action="#">
             <div class="form-group">
                 <input type="search" name="search-field" placeholder="Search Here..." required>
                 <button type="submit"><i class="far fa-search"></i></button>
             </div>
         </form>
     </div>
     <script>
     // Toggle dropdown visibility
     document.getElementById('userIcon').addEventListener('click', function(e) {
         e.preventDefault();
         const menu = document.getElementById('profileMenu');
         menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
     });

     // Optional: hide dropdown if clicked outside
     document.addEventListener('click', function(event) {
         const menu = document.getElementById('profileMenu');
         const icon = document.getElementById('userIcon');
         if (!icon.contains(event.target) && !menu.contains(event.target)) {
             menu.style.display = 'none';
         }
     });
     </script>