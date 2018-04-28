<!DOCTYPE html>
<html lang="en">

@include('layout.head')



  <!-- Body-->
  <body>
    @yield('request-modal')
    
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu">
      <a class="account-link" href="account-orders.html">@if(Auth::check())
        <i class="icon-head"></i><span>Hello</span>, {{Auth::User()->first_name}} @endif</a>
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
          <div class="lang-currency-switcher">
            <span class="language"><img alt="English" src="/assets/img/flags/NG.jpg"></span><span class="currency">&#8358; NGN</span>
          </div>
          {{-- <div class="dropdown-menu">
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
          </div> --}}
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
          <li class="{{ Request::is('/products') ? 'active' : '' }}"><a href="{{route('product')}}"><span>Products</span></a>
          </li>
          <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('service')}}"><span>Services</span></a>
          </li>
          {{-- <li><a href="#"><span>Account</span></a> --}}
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
    <div id="app" class="offcanvas-wrapper">
      <!-- Page Content-->
      @yield('content')
      <!-- Site Footer-->
      <footer class="site-footer mybg">
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
                  <li><a href="/terms">Terms &amp; Conditions</a></li>
                  <li><a href="/about">About Citiclik</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="/service">Services</a></li>
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
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/assets/js/vendor.min.js"></script>
    <script src="/assets/js/scripts.min.js"></script>
    <script src="/assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <!-- Customizer scripts-->
    <script src="/assets/customizer/customizer.min.js"></script>  
    @yield('script')    
  </body>

</html>