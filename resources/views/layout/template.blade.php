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
      @include('layout.footer')
    </div>
    <a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
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