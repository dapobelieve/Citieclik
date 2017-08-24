<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="citieclik.com">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Weinnovate Corp">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/assets/css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="/assets/css/styles.min.css">
    <link id="mainStyles" rel="stylesheet" media="screen" href="/assets/css/styles.min.css">
    <link rel="stylesheet" media="screen" href="/assets/css/mine.css">
   

    @yield('style')

    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="/assets/customizer/customizer.min.css">
    <!-- Google Tag Manager-->
  
    <!-- Modernizr-->
    <script src="/assets/js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html">@if(Auth::check())<i class="icon-head"></i><span>Hello</span>, {{Auth::User()->first_name}} @endif</a>
      @include('layout.nav2')
    </div>
    <!-- Topbar-->
    <div class="topbar">
        <div class="topbar-column">
          <a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@citieclik.com</a>
          <a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a>
          <a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a>
          <a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a>
          <a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a>
          <a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
        </div>
      <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
          <div class="lang-currency-switcher dropdown-toggle">
            <span class="language"><img alt="English" src="/assets/img/flags/NG.jpg"></span><span class="currency">&#8358; NGN</span>
          </div>
          <div class="dropdown-menu">
            <div class="currency-select">
              <select class="form-control form-control-rounded form-control-sm">
                <option value="ngn">&#x20A6; NGN</option>
                <option value="usd">$ USD</option>
                <option value="euro">€ EUR</option>
                <option value="pound">£ UKP</option>
              </select>
            </div>
            <a class="dropdown-item" href="#"><img src="/assets/img/flags/FR.png" alt="Français">Français</a>
            <a class="dropdown-item" href="#"><img src="/assets/img/flags/DE.png" alt="Deutsch">Deutsch</a>
            <a class="dropdown-item" href="#"><img src="/assets/img/flags/IT.png" alt="Italiano">Italiano</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbar-->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
      <!-- Search-->
      <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          {{-- <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a> --}}
          <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          <!-- Site Logo--><a class="site-logo" href="/"><img src="/assets/img/logo/logo_bw.png" alt="Citieclik"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>
          <li class="active"><a href="/"><span>Home</span></a>
          </li>
          <li><a href="#"><span>Shop</span></a>
            <ul class="sub-menu">
              <li><a href="category">Categories</a></li>
              <li class="has-children"><a href="shop-grid-ls.html"><span>Shop Grid</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="shop-list-ls.html"><span>Shop List</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li><a href="cart.html">Cart</a></li>
              <li class="has-children"><a href="checkout-address.html"><span>Checkout</span></a>
                <ul class="sub-menu">             
                    <li><a href="checkout-address.html">Address</a></li>
                    <li><a href="checkout-shipping.html">Shipping</a></li>
                    <li><a href="checkout-payment.html">Payment</a></li>
                    <li><a href="checkout-review.html">Review</a></li>
                    <li><a href="checkout-complete.html">Complete</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><span>Account</span></a>
            <ul class="sub-menu">
                <li><a href="{{route('signup')}}">Login / Register</a></li>
                <li><a href="account-orders.html">Orders List</a></li>
                <li><a href="account-wishlist.html">Wishlist</a></li>
                <li><a href="account-profile.html">Profile Page</a></li>
                <li><a href="account-address.html">Contact / Shipping Address</a></li>
                <li><a href="account-tickets.html">My Tickets</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- Toolbar-->
     @include('layout.toolbar')
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Content-->
      @yield('content')
      <!-- Site Footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <!-- Contact Info-->
              <section class="widget widget-light-skin">
                <img src="/assets/img/logo/Citie Clik 1.png" alt="Citieclik">
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Mobile App Buttons-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Our Mobile App</h3>
                <a class="market-button apple-button mb-light-skin" href="#">
                  <span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span>
                </a>
                <a class="market-button google-button mb-light-skin" href="#">
                  <span class="mb-subtitle">Download on the</span>
                  <span class="mb-title">Google Play</span>
                </a>
                <a class="market-button windows-button mb-light-skin" href="#">
                  <span class="mb-subtitle">Download on the</span>
                  <span class="mb-title">Windows Store</span>
                </a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- About Us-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Jobs</a></li>
                  <li><a href="#">About Citiclik</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Services</a></li>
                </ul>
              </section>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
              <!-- Account / Shipping Info-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">Account &amp; Shipping Info</h3>
                <ul>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Shipping Rates & Policies</a></li>
                  <li><a href="#">Refunds & Replacements</a></li>
                  <li><a href="#">Taxes</a></li>
                  <li><a href="#">Delivery Info</a></li>
                  <li><a href="#">Affiliate Program</a></li>
                </ul>
              </section>
            </div> --}}
          </div>
          <hr class="hr-light mt-2 margin-bottom-1x">
          <div class="row text-center">
          <!-- Copyright-->
          <p class="footer-copyright text-center">&copy; {{ date('Y') }} Citieclik.
          All rights reserved.<br> Made with &nbsp;<i class="icon-heart text-danger"></i><a href="#" target="_blank"> &nbsp;by Believe&trade; &nbsp; &amp; Weinnovate&trade;</a></p>
        </div>
      </footer>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="/assets/js/vendor.min.js"></script>
    <script src="/assets/js/scripts.min.js"></script>
    {{-- Summernote --}}
    <script src="/dist/summernote.min.js"></script>
    {{-- Particles --}}
    <script src="/assets/js/particles.min.js"></script>
    <script src="/assets/js/particles.app.js"></script>
    @yield('script')
    
    <!-- Customizer scripts-->
    <script src="/assets/customizer/customizer.min.js"></script>
  </body>

</html>