<nav class="offcanvas-menu">
        <ul class="menu">
              <li class="{{ Request::is( '/' ) ? ' active' : ''  }}"><a href="/"><span>Home</span></a>
              </li>
              
              <li class=""><span><a href="{{ route('service')}}">Services</a><span class="sub-menu-toggle"></span></span>
              </li>
              <li class=""><span><a href="{{ route('product')}}">Products</a><span class="sub-menu-toggle"></span></span>
              </li>
              <li class="sub-menu-separator"></li>
              @if(Auth::check())
                <li><a href="{{route('profile.index', ['slug' =>Auth::User()->slug ])}}">Dashboard</a></li>
                <li><a href="{{ route('auth.signout') }}"><span>Logout</span></a></li>
              @endif
              
              @if(Auth::check() && Auth::User()->isAdmin())
                 <li><a href="{{ route('admin.home') }}">Admin</a></li>
              @endif
              <li>
                    <a href="{{ route('addproduct') }}" class="postBtn">Post Ad</a>
              </li>
        </ul>
</nav>