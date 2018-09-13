<!DOCTYPE html>
<html lang="en">

@include('layout.head')
  <!-- Body-->
  <body>
    @yield('request-modal')
    {{--  Mobile MEnu --}}
        <div class="show-navy" id="mySidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            @if(Auth::check())
              <a class="side-link" href="{{route('profile.index', ['slug' =>Auth::User()->slug ])}}">
                <span class="side-link" >Hello</span>, {{Auth::User()->first_name}} 
              </a>
              @endif
            <a class="side-link" href="/"><span>Home</span></a>
            <hr>
            <small style=" margin-left: 33%">Categories</small>
            @foreach($cats as $data)
                <a class="dropdown-btn" href=""><span>{{ $data->name }}</span>
                </a>
                <div class="dropdown-cont">
                    @foreach($data->categories as $layer)
                        <a class="sub-nav-2" href="{{ route('category.index2', [$data->slug, $layer->slug]) }}">
                            {{ $layer->category }}
                        </a>
                    @endforeach
                    <a class="sub-nav-2" href="{{ route('category.index', [$data->slug]) }}">View all</a>
                </div>
            @endforeach
            @if(Auth::check())
                <a class="side-link" href="{{route('profile.index', ['slug' =>Auth::User()->slug ])}}">Dashboard</a>
                <a class="side-link" href="{{ route('auth.signout') }}"><span>Logout</span></a>
            @endif
            @if(Auth::check() && Auth::User()->isAdmin())
                 <a class="side-link" href="{{ route('admin.home') }}">Admin</a>
              @endif
            <a href="{{ route('addproduct') }}" class="postBtn">Post Ad</a>
        </div>
    <header class="navbar fix-header">

      <!-- Search-->
      {{-- <form class="site-search" action="{{ route('quick-search') }}" method="get">
        <input type="text" required name="query" placeholder="Quick Search">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form> --}}
      <div class="site-branding">
        <div class="inner">
            <a class="offcanvas-toggle menu-toggle" onclick="showNav()"></a>
        </div>
      </div>
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
                <div class="top-item">
                    <div class="toolbar">
                        {{-- <div class="search"><i class="icon-search"></i></div> --}}
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
    <script>
        function showNav() {
            document.getElementById("mySidenav").style.display = "block";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.display = "none";
        }

        var dropdown = document.getElementsByClassName('dropdown-btn');
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener('click', function (event) {
                event.preventDefault();
                this.classList.toggle('activedrop')
                var dropcontent = this.nextElementSibling;

                if ( dropcontent.style.display === 'block') {
                    dropcontent.style.display = 'none'
                }else {
                    dropcontent.style.display = 'block'
                }
            })
        }
    </script>
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