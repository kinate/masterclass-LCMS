<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
  <meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
  <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
  <title>@yield('page_title')</title>
  <!-- Application vendor css url -->
  <link rel="stylesheet" href="/assets/cssbundle/swiper.min.css">
  <link rel="stylesheet" href="/assets/cssbundle/onepage.kit.min.css">
  <!-- project css file  -->
  <link rel="stylesheet" href="/assets/css/luno-style.css">
  <!-- Jquery Core Js -->
  <script src="/assets/js/plugins.js"></script>
</head>

<body class="landing-page bg-card" data-luno="theme-red">
  <!-- Section: Top Bar -->
  <div class="topbar py-2" id="topbar">
    <div class="container">
      <div class="row g-2">
        <div class="col-md-8">
          <div class="text-muted d-flex align-items-center small">
            <a class="me-4 text-muted" href="#"><i class="fa fa-envelope me-2"></i>contact@example.com</a>
            <span><i class="fa fa-phone me-2"></i>+255713807919</span>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-none d-md-flex social-links align-items-center justify-content-end">
            <a href="#" class="text-muted ps-3 ms-1"><i class="fa fa-twitter"></i></a>
            <a href="#" class="text-muted ps-3 ms-1"><i class="fa fa-facebook"></i></a>
            <a href="#" class="text-muted ps-3 ms-1"><i class="fa fa-instagram"></i></a>
            <a href="#" class="text-muted ps-3 ms-1"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
      </div> <!-- .row end -->
    </div>
  </div>
  <!-- Section: Header -->
  <header class="section sticky-top py-0 bg-card">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
      <div class="container">
        <a class="navbar-brand p-0 m-0" href="">
          {{-- <span class="fs-3 fw-bold text-secondary">MasterClass</span> --}}
          <img src="{{ asset('assets/img/masterclass.png') }}" style="width:250px; height:auto;" alt="">
          <small class="text-muted d-flex">Online Learning Platform</small>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-6" id="main_navbar">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item me-2"><a class="nav-link active" href="index.html">Home</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="#about">About Us</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="#services">Courses</a></li>
            <li class="nav-item me-2"><a class="nav-link" href="#departments">Events</a></li>
            <li class="nav-item me-3 dropdown">
              <a class="nav-link text-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pages</a>
              <ul class="dropdown-menu border-0 shadow">
                <li><a class="dropdown-item" href="../index.html">Dashboard</a></li>
                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                <li><a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
                <li><a class="dropdown-item" href="https://themeforest.net/user/wrraptheme/portfolio">Portfolio</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../../auth-signin.html">Sign In</a></li>
                <li><a class="dropdown-item" href="../../onepgae-uikit/onepage.html">Landing Page</a></li>
              </ul>
            </li>
            <li class="nav-item me-3"><a class="nav-link text-secondary" href="../../docs/index.html">Docs</a></li>
          </ul>
          <form class="d-flex ms-4">
            <a class="btn px-4 rounded btn-primary" href="https://themeforest.net/item/luno-bootstrap-5-responsive-admin-dashboard-template/36214125">Download</a>
          </form>
        </div>
      </div>
    </nav>
  </header>

  @yield('page_contents')

  <!-- Section: Footer -->
  <div class="section footer">
    <div class="container">
      <div class="row g-3 mb-4">
        <div class="col-lg-4 col-md-6 col-12">
          <h3 class="mb-1 fw-bold color-900">MasterClass</h3>
          <p>Start building your creative website with our awesome template Massive.</p>
          <ul class="mt-3 fs-6 lh-lg">
            <li><span>Address:</span> 555 Wall Street, NY, USA</li>
            <li><span>Email:</span> example@ttm.com</li>
            <li><span>Call:</span> 123-456-1818</li>
          </ul>
        </div>
        <div class="col-lg-8 col-12">
          <div class="row g-3">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <h5 class="mb-4 color-900">Company</h5>
              <ul class="lh-lg">
                <li><a class="color-600" target="_blank" href="../../index.html">Dashboard</a></li>
                <li><a class="color-600" target="_blank" href="https://www.thememakker.com/about/">About Us</a></li>
                <li><a class="color-600" target="_blank" href="https://www.thememakker.com/services/">Services</a></li>
                <li><a class="color-600" target="_blank" href="https://www.thememakker.com/hire-us/">Hire us</a></li>
                <li><a class="color-600" target="_blank" href="https://www.thememakker.com/all-templates/">Templates</a></li>
                <li><a class="color-600" target="_blank" href="https://www.thememakker.com/licenses/">licenses</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <h5 class="mb-4 color-900">Admin</h5>
              <ul class="lh-lg">
                <li><a class="color-600" href="../../crypto/index.html">Cryptocurrency</a></li>
                <li><a class="color-600" href="../../fitness/index.html">Fitness Analytics</a></li>
                <li><a class="color-600" href="../../hospital/index.html">Hospital Management</a></li>
                <li><a class="color-600" href="../../hrms/index.html">HR & Project</a></li>
                <li><a class="color-600" href="../../restaurant/index.html">Restaurant & Cafe</a></li>
                <li><a class="color-600" href="../index.html">School / University</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-12 col-12">
              <h5 class="mb-4 color-900">Join Our Newsletter</h5>
              <p class="text-muted">Subscribe to get the latest jobs posted, candidates...</p>
              <form>
                <div class="form-floating mb-1">
                  <input type="email" class="form-control rounded" placeholder="name@example.com">
                  <label>Enter email address</label>
                </div>
                <button type="button" class="btn btn-block btn-primary">Subscribe Now!</button>
              </form>
            </div>
          </div>
        </div>
      </div> <!-- .row end -->
      <div class="row g-3 border-top pt-3">
        <div class="col-lg-6 col-md-12 text-center text-lg-start">
          <span>© {{ date('Y') }} <a href="https://www.hellensoft.co.tz/" rel="nofollow" target="_blank">HELLENSoft</a>. All Rights Reserved.</span>
        </div>
        <div class="col-lg-6 col-md-12 text-center text-lg-end">
          <ul class="list-unstyled d-flex justify-content-center justify-content-lg-end mb-0">
            <li><a class="p-2 ms-2" href="#">Facebook</a></li>
            <li><a class="p-2 ms-2" href="#">Instagram</a></li>
            <li><a class="p-2 ms-2" href="#">Github</a></li>
          </ul>
        </div>
      </div> <!-- .row end -->
    </div>
  </div>
  <!-- Modal: Setting -->
  <div class="modal fade" id="SettingsModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-vertical right-side modal-dialog-scrollable">
      <div class="modal-content">
        <div class="px-xl-4 modal-header">
          <h5 class="modal-title">Theme Setting</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="px-xl-4 modal-body custom_scroll">
          <!-- start: color setting -->
          <div class="card fieldset border border-primary p-3 setting-theme mb-4">
            <span class="fieldset-tile text-primary bg-card">Color Settings</span>
            <ul class="list-unstyled d-flex choose-skin mb-0">
              <li data-theme="black">
                <div class="black"></div>
              </li>
              <li data-theme="indigo">
                <div class="indigo"></div>
              </li>
              <li data-theme="blue">
                <div class="blue"></div>
              </li>
              <li data-theme="cyan">
                <div class="cyan"></div>
              </li>
              <li data-theme="green">
                <div class="green"></div>
              </li>
              <li data-theme="orange">
                <div class="orange"></div>
              </li>
              <li data-theme="blush">
                <div class="blush"></div>
              </li>
              <li data-theme="red">
                <div class="red"></div>
              </li>
              <li data-theme="dynamic">
                <div class="dynamic"><i class="fa fa-paint-brush"></i></div>
              </li>
            </ul>
            <!-- Settings: Theme dynamics -->
            <div class="card fieldset border border-primary p-3 dt-setting mt-4">
              <span class="fieldset-tile text-primary bg-card">Dynamic Color Settings</span>
              <div class="row g-3">
                <div class="col-7">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="primaryColorPicker" class="btn bg-primary avatar xs me-2"></button>
                      <label>Primary Color</label>
                    </li>
                    <li>
                      <button id="secondaryColorPicker" class="btn bg-secondary avatar xs me-2"></button>
                      <label>Secondary Color</label>
                    </li>
                    <li>
                      <button id="BodyColorPicker" class="btn btn-outline-secondary bg-body avatar xs me-2"></button>
                      <label>Site Background</label>
                    </li>
                    <li>
                      <button id="CardColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Widget Background</label>
                    </li>
                    <li>
                      <button id="BorderColorPicker" class="btn btn-outline-secondary bg-card avatar xs me-2"></button>
                      <label>Border Color</label>
                    </li>
                  </ul>
                </div>
                <div class="col-5">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <button id="chartColorPicker1" class="btn chart-color1 avatar xs me-2"></button>
                      <label>Chart Color 1</label>
                    </li>
                    <li>
                      <button id="chartColorPicker2" class="btn chart-color2 avatar xs me-2"></button>
                      <label>Chart Color 2</label>
                    </li>
                    <li>
                      <button id="chartColorPicker3" class="btn chart-color3 avatar xs me-2"></button>
                      <label>Chart Color 3</label>
                    </li>
                    <li>
                      <button id="chartColorPicker4" class="btn chart-color4 avatar xs me-2"></button>
                      <label>Chart Color 4</label>
                    </li>
                    <li>
                      <button id="chartColorPicker5" class="btn chart-color5 avatar xs me-2"></button>
                      <label>Chart Color 5</label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- start: Light/dark -->
          <div class="card fieldset border setting-mode mb-4">
            <span class="fieldset-tile bg-card">Light/Dark & Contrast Layout</span>
            <div class="c_radio d-flex text-center">
              <label class="m-1 theme-switch" for="theme-switch">
                <input type="checkbox" id="theme-switch" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/dark-version.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-dark" for="theme-dark">
                <input type="checkbox" id="theme-dark" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/dark-theme.svg" alt="Theme Dark Mode" />
                </span>
              </label>
              <label class="m-1 theme-high-contrast" for="theme-high-contrast">
                <input type="checkbox" id="theme-high-contrast" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/high-version.svg" alt="High Contrast" />
                </span>
              </label>
              <label class="m-1 theme-rtl" for="theme-rtl">
                <input type="checkbox" id="theme-rtl" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/rtl-version.svg" alt="RTL Mode!" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Font setting -->
          <div class="card fieldset border setting-font">
            <span class="fieldset-tile bg-card">Google Font Settings</span>
            <div class="c_radio d-flex text-center font_setting">
              <label class="m-1" for="font-opensans">
                <input type="radio" name="font" id="font-opensans" value="font-opensans" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/font-opensans.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-quicksand">
                <input type="radio" name="font" id="font-quicksand" value="font-quicksand" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/font-quicksand.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-nunito">
                <input type="radio" name="font" id="font-nunito" value="font-nunito" checked="" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/font-nunito.svg" alt="Dark Mode" />
                </span>
              </label>
              <label class="m-1" for="font-raleway">
                <input type="radio" name="font" id="font-raleway" value="font-raleway" />
                <span class="card p-2">
                  <img class="img-fluid" src="/assets/img/font-raleway.svg" alt="Dark Mode" />
                </span>
              </label>
            </div>
          </div>
          <!-- start: Dynamic Font Settings -->
          <div class="m-1 p-3 bg-body rounded-4 mb-4">
            <p>Dynamic Font Settings</p>
            <div class="mb-2">
              <label class="form-label small text-muted mb-0">Enter font URL</label>
              <input id="font_url" type="text" class="form-control" placeholder="http://fonts.cdnfonts.com/css/vonfont">
            </div>
            <div class="mb-3">
              <label class="form-label small text-muted mb-0">Enter font family name</label>
              <input id="font_family" type="text" class="form-control" placeholder="vonfont">
            </div>
            <button id="font_apply" type="submit" class="btn btn-primary">Save Changes</button>
            <button id="font_cancel" type="submit" class="btn btn-secondary">Clear Changes</button>
          </div>
          <!-- start: Extra setting -->
          <div class="setting-more mb-4">
            <h6 class="card-title">More Setting</h6>
            <ul class="list-group list-group-flush list-group-custom fs-6">
              <!-- Settings: Horizontal menu version -->
              <li class="list-group-item">
                <div class="form-check form-switch h-menu-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="h_menu">
                  <label class="form-check-label" for="h_menu">Horizontal Menu Version</label>
                </div>
              </li>
              <!-- Settings: page header top Fix -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader" checked>
                  <label class="form-check-label" for="PageHeader">Page Header Fix</label>
                </div>
              </li>
              <!-- Settings: page header Dark version  -->
              <li class="list-group-item">
                <div class="form-check form-switch pageheader-dark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="PageHeader_dark">
                  <label class="form-check-label" for="PageHeader_dark">Page Header Dark Mode</label>
                </div>
              </li>
              <!-- Settings: Border radius -->
              <li class="list-group-item">
                <div class="form-check form-switch radius-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="BorderRadius">
                  <label class="form-check-label" for="BorderRadius">Border Radius none</label>
                </div>
              </li>
              <!-- Settings: sidebar version 2 -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebar-v2 mb-1">
                  <input class="form-check-input" type="checkbox" id="sidebar_v2">
                  <label class="form-check-label" for="sidebar_v2">Sidebar Version 2</label>
                </div>
              </li>
              <!-- Settings: sidebar dark -->
              <li class="list-group-item">
                <div class="form-check form-switch sidebardark-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="SidebarDark">
                  <label class="form-check-label" for="SidebarDark">Enable Dark! ( Sidebar )</label>
                </div>
              </li>
              <!-- Settings: Sidebar bg image -->
              <li class="list-group-item setting-img">
                <div class="form-check form-switch imagebg-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="CheckImage">
                  <label class="form-check-label" for="CheckImage">Background Image (Sidebar)</label>
                </div>
                <div class="bg-images">
                  <ul class="list-unstyled d-flex">
                    <li class="sidebar-img-1 me-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="/assets/img/sidebar-bg/sidebar-1.jpg" alt="" /></a></li>
                    <li class="sidebar-img-2 me-1"><a class="rounded sidebar-img" id="img-2" href="#"><img src="/assets/img/sidebar-bg/sidebar-2.jpg" alt="" /></a></li>
                    <li class="sidebar-img-3 me-1"><a class="rounded sidebar-img" id="img-3" href="#"><img src="/assets/img/sidebar-bg/sidebar-3.jpg" alt="" /></a></li>
                    <li class="sidebar-img-4 me-1"><a class="rounded sidebar-img" id="img-4" href="#"><img src="/assets/img/sidebar-bg/sidebar-4.jpg" alt="" /></a></li>
                    <li class="sidebar-img-5 me-1"><a class="rounded sidebar-img" id="img-5" href="#"><img src="/assets/img/sidebar-bg/sidebar-5.jpg" alt="" /></a></li>
                  </ul>
                </div>
              </li>
              <!-- Settings: Container Fluid -->
              <li class="list-group-item">
                <div class="form-check form-switch fluid-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="fluidLayout" checked="">
                  <label class="form-check-label" for="fluidLayout">Container Fluid</label>
                </div>
              </li>
              <!-- Settings: Card box shadow  -->
              <li class="list-group-item">
                <div class="form-check form-switch shadow-switch mb-1">
                  <input class="form-check-input" type="checkbox" id="card_shadow">
                  <label class="form-check-label" for="card_shadow">Card Box-Shadow</label>
                </div>
              </li>
            </ul>
          </div>
          <!-- start: Extra link, please do not add in your project -->
          <div class="mb-4">
            <a class="btn lift  btn-outline-secondary" href="">Marketing page</a>
            <a class="btn lift  btn-outline-secondary" href="">Landing page</a>
            <a class="btn lift  btn-outline-secondary" href="">One page Ui Kit Elements</a>
          </div>
        </div>
        <div class="px-xl-4 modal-footer d-flex justify-content-start text-center">
          <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
          <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <a class="page-setting" href="#" title="Settings" data-bs-toggle="modal" data-bs-target="#SettingsModal"><i class="fa fa-gear text-light"></i></a>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>
  <!-- Jquery Page Js -->
  <!-- Jquery Page Js -->
  <script src="/assets/js/theme.js"></script>
  <!-- Plugin Js -->
  <script src="/assets/js/bundle/swiper.bundle.js"></script>
  <!-- Vendor Script -->
</body>
</html>