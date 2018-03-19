<nav class="offcanvas-menu">
        <ul class="menu">
              <li class="{{ Request::is( '/' ) ? ' active' : ''  }}"><a href="/"><span>Home</span></a>
              </li>
              
              <li class=""><span><a href="{{ route('service')}}">Serfvices</a><span class="sub-menu-toggle"></span></span>
              </li>
              <li class="sub-menu-separator"></li>
              @if(Auth::check())
                <li><a href="{{route('profile.index', ['slug' =>Auth::User()->slug ])}}">Dashboard</a></li>
                <li><a href="{{ route('auth.signout') }}"><span>Logout</span></a></li>
              @endif
        </ul>
</nav>