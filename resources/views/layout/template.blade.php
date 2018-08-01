<!DOCTYPE html>
<html lang="en">

@include('layout.head')



  <!-- Body-->
  <body>
    @yield('request-modal')
    
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu">
      @if(Auth::check())
      <a class="account-link" href="{{route('profile.index', ['slug' =>Auth::User()->slug ])}}">
        <i class="icon-head"></i>
        <span>Hello</span>, {{Auth::User()->first_name}} 
      </a>
      @endif
      @include('layout.nav2')
    </div>
    <!-- Topbar-->
    
    <!-- Navbar-->
    <!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->
    {{-- <header class="navbar navbar-sticky"> --}}
    <header class="navbar">
      <!-- Search-->
      <form class="site-search" action="{{ route('quick-search') }}" method="get">
        <input type="text" required name="query" placeholder="Quick Search">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          <!-- Site Logo-->
          <a class="site-logo" href="/"><img src="/assets/img/logo/logo_bw.png" alt="Citieclik"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul> 
          <li class="{{ Request::is('/products') ? 'active' : '' }}"><a href="{{route('product')}}"><span>Products</span></a>
          </li>
          <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('service')}}"><span>Services</span></a>
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
    {{-- <div class="site-backdrop"></div> --}}
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