 <footer class="footer">
     <div class="container-fluid">
         <div class="row">
             <div class="col-sm-6">
                 <script>
                 document.write(new Date().getFullYear())
                 </script> © Myraluxa Skincare.
             </div>
             <div class="col-sm-6">
                 <div class="text-sm-end d-none d-sm-block">
                     Design & Develop by Wedigital India
                 </div>
             </div>
         </div>
     </div>
 </footer>
 </div>
 <!-- end main content-->

 </div>

 <!-- Right Sidebar -->
 <div class="right-bar">
     <div data-simplebar class="h-100">
         <div class="rightbar-title d-flex align-items-center px-3 py-4">

             <h5 class="m-0 me-2">Settings</h5>

             <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                 <i class="mdi mdi-close noti-icon"></i>
             </a>
         </div>

         <!-- Settings -->
         <hr class="mt-0" />
         <h6 class="text-center mb-0">Choose Layouts</h6>

         <div class="p-4">
             <div class="mb-2">
                 <img src="{{ asset('assets/dashboard/images/layouts/layout-1.jpg') }}" class="img-thumbnail" alt="layout images">
             </div>

             <div class="form-check form-switch mb-3">
                 <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                 <label class="form-check-label" for="light-mode-switch">Light Mode</label>
             </div>

             <div class="mb-2">
                 <img src="{{ asset('assets/dashboard/images/layouts/layout-2.jpg') }}" class="img-thumbnail" alt="layout images">
             </div>
             <div class="form-check form-switch mb-3">
                 <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                 <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
             </div>

         </div>

     </div>
 </div>

 <div class="rightbar-overlay"></div>

 <!-- JAVASCRIPT -->
 <script src="{{ asset('assets/dashboard/libs/jquery/jquery.min.js') }}"></script>
 <script src="{{ asset('assets/dashboard/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/dashboard/libs/metismenu/metisMenu.min.js') }}"></script>
 <script src="{{ asset('assets/dashboard/libs/simplebar/simplebar.min.js') }}"></script>
 <script src="{{ asset('assets/dashboard/libs/node-waves/waves.min.js') }}"></script>

 <!-- apexcharts -->
 <script src="{{ asset('assets/dashboard/libs/apexcharts/apexcharts.min.js') }}"></script>

 <!-- dashboard init -->
 <script src="{{ asset('assets/dashboard/js/pages/dashboard.init.js') }}"></script>

 <!-- App js -->
 <script src="{{ asset('assets/dashboard/js/app.js') }}"></script>
 </body>

 </html>