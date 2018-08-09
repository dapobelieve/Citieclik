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
    <header class="navbar fix-header">
      <!-- Search-->
      <form class="site-search" action="{{ route('quick-search') }}" method="get">
        <input type="text" required name="query" placeholder="Quick Search">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
            <a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      {{-- <div class="site-menu">
        <ul> 
            <li class="{{ Request::is('/products') ? 'active' : '' }}"><a href="{{route('product')}}"><span></span></a>
            </li>
            <li class="{{ Request::is('service') ? 'active' : '' }}"><a href="{{route('service')}}"><span></span></a>
            </li>
            
        </ul>
      </div> --}}
        {{-- <li class="nav-right"> --}}
            <div class="top-nav">
                <!-- Site Logo-->
                <div class="top-item item-a">
                    <a class="site-logo" href="/"><img src="/assets/img/logo/citilogo.png" alt="Citieclik"></a>
                </div>
                <div class="top-item item-b">
                    <a href="{{ route('addproduct') }}" class="postBtn top-item-link">
                        Post Ad
                    </a>
                </div>
                @if(!Auth::check())
                    <div class="top-item item-c">
                        <a href="{{route('signup')}}" class="top-item-link">Login</a>
                    </div>
                @endif   
                @if(Auth::check())
                    <div class="toolbar">
                      <div class="inner">
                        <div class="tools">
                            <div class="search"><i class="icon-search"></i></div>
                            <div class="account"><a href="#"></a><i class="icon-head"></i>
                                <ul class="toolbar-dropdown pull-left">
                                      <li class="sub-menu-title" style="font-size: 12px;"><span>Dear,</span>{{Auth::User()->first_name}}</li>
                                        <li><a href="{{route('profile.index', ['slug' =>Auth::User()->slug ])}}">Dashboard</a></li>
                                        <li><a href="{{route('profile.service', ['slug' =>Auth::User()->slug ])}}">My Services</a></li>
                                        <li><a href="{{route('profile.products', ['slug' =>Auth::User()->slug ])}}">My Products</a></li>
                                        <li><a href="{{ route('profile.request', ['slug' =>Auth::User()->slug ]) }}">My Requests</a></li>
                                        @if(Auth::User()->isAdmin())
                                            <li><a href="{{ route('admin.home') }}">Admin</a></li>
                                        @endif
                                      <li class="sub-menu-separator"></li>
                                      
                                      <li><a href="{{ route('auth.signout') }}"> <i class="icon-unlock"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                      </div>
                    </div>
                @endif    
            </div>     
    </header>
    @yield('topcat')
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