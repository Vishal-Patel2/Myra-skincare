  <!-- Begin page -->
  <div id="layout-wrapper">
      <header id="page-topbar">
          <div class="navbar-header">
              <div class="d-flex">
                  <!-- LOGO -->
                  <div class="navbar-brand-box">   
                      <a href="{{route('index')}}" class="logo logo-dark">
                          <span class="logo-sm">
                              <img src="{{ asset('assets/img/logo/fav.png') }}" alt="" height="40">
                          </span>
                          <span class="logo-lg">
                              <img src="{{ asset('assets/img/logo/logo.png') }}" alt="" height="40">
                          </span>
                      </a>

                      <a href="{{route('index')}}" class="logo logo-light">
                          <span class="logo-sm">
                              <img src="{{ asset('assets/img/logo/fav.png') }}" alt="" height="40">
                          </span>
                          <span class="logo-lg">
                              <img src="{{ asset('assets/img/logo/logo.png') }}" alt="" height="40">
                          </span>
                      </a>
                  </div>

                  <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                      id="vertical-menu-btn">
                      <i class="fa fa-fw fa-bars"></i>
                  </button>

                  <!-- App Search-->
                  <form class="app-search d-none d-lg-block">
                      <div class="position-relative">
                          <input type="text" class="form-control" placeholder="Search...">
                          <span class="bx bx-search-alt"></span>
                      </div>
                  </form>
              </div>

              <div class="d-flex">

                  <div class="dropdown d-inline-block d-lg-none ms-2">
                      <button type="button" class="btn header-item noti-icon waves-effect"
                          id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-magnify"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                          aria-labelledby="page-header-search-dropdown">

                          <form class="p-3">
                              <div class="form-group m-0">
                                  <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Search ..."
                                          aria-label="Recipient's username">
                                      <div class="input-group-append">
                                          <button class="btn btn-primary" type="submit"><i
                                                  class="mdi mdi-magnify"></i></button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

                  <div class="dropdown d-inline-block">
                      <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <img id="header-lang-img" src="{{ asset('assets/dashboard/images/flags/india.png') }}" alt="Header Language" height="35">
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                              <img src="{{ asset('assets/dashboard/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                  class="align-middle">English</span>
                          </a>
                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                              <img src="{{ asset('assets/dashboard/images//flags/spain.jpg') }}" alt="user-image" class="me-1" height="12">
                              <span class="align-middle">Spanish</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                              <img src="{{ asset('assets/dashboard/images//flags/germany.jpg') }}" alt="user-image" class="me-1" height="12">
                              <span class="align-middle">German</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                              <img src="{{ asset('assets/dashboard/images//flags/italy.jpg') }}" alt="user-image" class="me-1" height="12">
                              <span class="align-middle">Italian</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                              <img src="{{ asset('assets/dashboard/images//flags/russia.jpg') }}" alt="user-image" class="me-1" height="12">
                              <span class="align-middle">Russian</span>
                          </a>
                      </div>
                  </div>


                  <div class="dropdown d-none d-lg-inline-block ms-1">
                      <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                          <i class="bx bx-fullscreen"></i>
                      </button>
                  </div>

                  <div class="dropdown d-inline-block">
                      <button type="button" class="btn header-item noti-icon waves-effect"
                          id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">
                          <i class="bx bx-bell bx-tada"></i>
                          <span class="badge bg-danger rounded-pill">3</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                          aria-labelledby="page-header-notifications-dropdown">
                          <div class="p-3">
                              <div class="row align-items-center">
                                  <div class="col">
                                      <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                  </div>
                                  <div class="col-auto">
                                      <a href="#!" class="small" key="t-view-all"> View All</a>
                                  </div>
                              </div>
                          </div>
                          <div data-simplebar style="max-height: 230px;">
                              <a href="javascript: void(0);" class="text-reset notification-item">
                                  <div class="d-flex">
                                      <div class="avatar-xs me-3">
                                          <span class="avatar-title bg-primary rounded-circle font-size-16">
                                              <i class="bx bx-cart"></i>
                                          </span>
                                      </div>
                                      <div class="flex-grow-1">
                                          <h6 class="mb-1" key="t-your-order">Your order is placed</h6>
                                          <div class="font-size-12 text-muted">
                                              <p class="mb-1" key="t-grammer">If several languages coalesce the
                                                  grammar</p>
                                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                      key="t-min-ago">3
                                                      min ago</span></p>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                              <a href="javascript: void(0);" class="text-reset notification-item">
                                  <div class="d-flex">
                                      <img src="{{ asset('assets/dashboard/images//users/avatar-3.jpg') }}" class="me-3 rounded-circle avatar-xs"
                                          alt="user-pic">
                                      <div class="flex-grow-1">
                                          <h6 class="mb-1">James Lemire</h6>
                                          <div class="font-size-12 text-muted">
                                              <p class="mb-1" key="t-simplified">It will seem like simplified English.
                                              </p>
                                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                      key="t-hours-ago">1
                                                      hours ago</span></p>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                              <a href="javascript: void(0);" class="text-reset notification-item">
                                  <div class="d-flex">
                                      <div class="avatar-xs me-3">
                                          <span class="avatar-title bg-success rounded-circle font-size-16">
                                              <i class="bx bx-badge-check"></i>
                                          </span>
                                      </div>
                                      <div class="flex-grow-1">
                                          <h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
                                          <div class="font-size-12 text-muted">
                                              <p class="mb-1" key="t-grammer">If several languages coalesce the
                                                  grammar</p>
                                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                      key="t-min-ago">3
                                                      min ago</span></p>
                                          </div>
                                      </div>
                                  </div>
                              </a>

                              <a href="javascript: void(0);" class="text-reset notification-item">
                                  <div class="d-flex">
                                      <img src="{{ asset('assets/dashboard/images//users/avatar-4.jpg') }}" class="me-3 rounded-circle avatar-xs"
                                          alt="user-pic">
                                      <div class="flex-grow-1">
                                          <h6 class="mb-1">Salena Layfield</h6>
                                          <div class="font-size-12 text-muted">
                                              <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of
                                                  mine occidental.</p>
                                              <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span
                                                      key="t-hours-ago">1
                                                      hours ago</span></p>
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="p-2 border-top d-grid">
                              <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                  <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View
                                      More..</span>
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="dropdown d-inline-block">
                      <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img class="rounded-circle header-profile-user" src="{{ asset('assets/dashboard/images//users/avatar-1.jpg') }}"
                              alt="Header Avatar">
                          <span class="d-none d-xl-inline-block ms-1" key="t-henry">Myra-Skincare</span>
                          <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">
                          <!-- item-->
                          <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                              <span key="t-profile">Profile</span></a>
                          {{-- <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i>
                              <span key="t-my-wallet">My
                                  Wallet</span></a> --}}
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item text-danger" href="#"><i
                                  class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                  key="t-logout">Logout</span></a>
                      </div>
                  </div>

                  <div class="dropdown d-inline-block">
                      <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                          <i class="bx bx-cog bx-spin"></i>
                      </button>
                  </div>

              </div>
          </div>
      </header>