 <footer class="footer-area">
     <div class="footer-widget">
         <div class="container pt-60 mb-3">
             <div class="row footer-widget-wrapper">
                 <div class="col-md-6 col-lg-4">
                     <div class="footer-widget-box about-us">
                         <a href="#" class="footer-logo">
                             <img src="assets/img/logo/logo1.png" alt>
                         </a>
                         <p class="mb-20">
                             We are many variations of passages available but the majority have suffered alteration
                             in some form by injected humour or randomised words.
                         </p>

                     </div>
                     <ul class="footer-social">
                         <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                         <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     </ul>

                 </div>
                 <div class="col-md-6 col-lg-2">
                     <div class="footer-widget-box list">
                         <h4 class="footer-widget-title">Quick Links</h4>
                         <ul class="footer-list">
                             <li><a href="about.php"><i class="fas fa-caret-right"></i> About Us</a></li>
                             <li><a href="men.php"><i class="fas fa-caret-right"></i> Men</a></li>
                             <li><a href="women.php"><i class="fas fa-caret-right"></i> Women</a></li>
                             <li><a href="pricing.php"><i class="fas fa-caret-right"></i> Packages</a></li>
                             <li><a href="blog.php"><i class="fas fa-caret-right"></i> Blog</a></li>
                             <li><a href="carrer.php"><i class="fas fa-caret-right"></i> Carrer</a></li>
                             <li><a href="contact.php"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-2">
                     <div class="footer-widget-box list">
                         <h4 class="footer-widget-title">Company</h4>
                         <ul class="footer-list">
                             <li><a href="{{ url('/privacy-policies') }}"><i class="fas fa-caret-right"></i> Privacy &
                                     Policies</a></li>
                             <li><a href="{{ url('/terms') }}"><i class="fas fa-caret-right"></i> Terms & Conditions</a>
                             </li>
                             <li><a href="{{ url('/sitemap') }}"><i class="fas fa-caret-right"></i> Sitemap</a></li>
                             <li><a href="{{ url('/help-support') }}"><i class="fas fa-caret-right"></i> Help and
                                     Support</a></li>

                         </ul>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-4">
                     <div class="footer-widget-box list">
                         <h4 class="footer-widget-title">Contact </h4>
                         <div class="footer-opening">
                             <ul class="footer-contact">
                                 <li><i class="far fa-map-marker-alt"></i>BA-146-B Janak Puri, New Delhi 110058</li>
                                 <li><a href="tel:+21236547898"><i class="far fa-phone"></i>+91 935531766</a></li>
                                 <li><a href=""><i class="far fa-envelope"></i>info@myraluxe.com</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="footer-newsletter">
                         <div class="subscribe-form">
                             <form action="#">
                                 <input type="email" class="form-control" placeholder="Your Email">
                                 <button class="theme-btn" type="submit">
                                     <span class="far fa-paper-plane"></span> Subscribe
                                 </button>
                             </form>
                         </div>
                     </div>


                 </div>
             </div>
         </div>
         <!-- <div class="footer-bottom">
             <div class="container">
                 <div class="row align-items-center">
                     
                     <div class="col-md-6">
                         <div class="footer-newsletter">
                             <div class="subscribe-form">
                                 <form action="#">
                                     <input type="email" class="form-control" placeholder="Your Email">
                                     <button class="theme-btn" type="submit">
                                         <span class="far fa-paper-plane"></span> Subscribe
                                     </button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div> -->
     </div>
     <div class="copyright">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 text-center">
                     <p class="copyright-text">
                         &copy; Copyright <span id="date"></span> <a href="#"> MYRALUXE </a> All Rights
                         Reserved.
                     </p>
                 </div>
                 <div class="col-lg-6 text-center">
                     <p class="copyright-text">
                         Design & Develop <span id="date"></span> <a href="https://wedigitalindia.com/"> Wedigital
                             India </a>
                     </p>
                 </div>


             </div>
         </div>
     </div>
 </footer>
 <style>
     .subscribe-section {
         background-color: #0f1a1f;
         /* dark background */
         padding: 30px 0;
         text-align: center;
     }

     .subscribe-container {
         display: inline-flex;
         border: 1px solid #2e2e2e;
         border-radius: 4px;
         overflow: hidden;
     }

     .subscribe-input {
         padding: 12px 16px;
         font-size: 16px;
         border: none;
         outline: none;
         background-color: #0f1a1f;
         color: #ddd;
         width: 250px;
     }

     .subscribe-input::placeholder {
         color: #aaa;
     }

     .subscribe-button {
         background-color: #a1532c;
         color: #fff;
         padding: 12px 20px;
         border: none;
         cursor: pointer;
         font-weight: bold;
         letter-spacing: 1px;
         transition: background-color 0.3s ease;
     }

     .subscribe-button:hover {
         background-color: #8c4523;
     }
 </style>

 <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


 <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
 <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
 <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
 <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
 <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('assets/js/counter-up.js') }}"></script>
 <script src="{{ asset('assets/js/wow.min.js') }}"></script>
 <script src="{{ asset('assets/js/main.js') }}"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
     const scrollContainers = document.querySelectorAll("#infiniteScroll--left");

     scrollContainers.forEach((container) => {
         const scrollWidth = container.scrollWidth;
         let isScrollingPaused = false;

         window.addEventListener("load", () => {
             setInterval(() => {
                 if (isScrollingPaused) return;

                 const first = container.querySelector("article");
                 if (!isElementInViewport(first)) {
                     container.appendChild(first);
                     container.scrollTo(container.scrollLeft - first.offsetWidth, 0);
                 }
                 container.scrollTo(container.scrollLeft + 1, 0);
             }, 15);
         });

         function isElementInViewport(el) {
             const rect = el.getBoundingClientRect();
             return rect.right > 0;
         }

         function pauseScrolling() {
             isScrollingPaused = true;
         }

         function resumeScrolling() {
             isScrollingPaused = false;
         }

         const allArticles = container.querySelectorAll("article");
         for (let article of allArticles) {
             article.addEventListener("mouseenter", pauseScrolling);
             article.addEventListener("mouseleave", resumeScrolling);
         }
     });
 </script>



 <!-- <script>
     $(document).ready(function() {
         $('.filter-btn').click(function() {
             // Remove active class from all
             $('.filter-btn').removeClass('active');
             // Add active class to clicked one
             $(this).addClass('active');

             var filterValue = $(this).data('filter');

             // Hide all items first
             $('.filter-item').hide();

             // Show only matching items
             $(filterValue).fadeIn(300);
         });

         // Trigger click on first filter by default (Male)
         $('.filter-btn[data-filter=".cat3"]').trigger('click');
     });
 </script> -->

 <script>
document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.add-to-cart');
    buttons.forEach(btn => {
        btn.addEventListener('click', function () {
            const serviceId = btn.getAttribute('data-id');
            fetch("{{ route('cart.add') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ service_id: serviceId })
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message || 'Added to cart');
            });
        });
    });
});
</script>


 </body>


 </html>
