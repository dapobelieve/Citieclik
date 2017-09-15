<nav class="offcanvas-menu">
        <ul class="menu">
          <li class="{{ Request::is( '/' ) ? ' active' : ''  }}"><a href="/"><span>Home</span></a>
          </li>
          
          <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              @foreach($cats as $cat)
                <li class=""><span><a href="#">{{$cat->category}}</a></span></li>
              @endforeach
              {{-- <li class=""><span><a href="#">Men's Shoes</a></span></li>
              <li class=""><span><a href="#">Women's Shoes</a></span></li>
              <li class=""><span><a href="#">Men's Clothing</a></span></li>
              <li class=""><span><a href="#">Women's Clothing</a></span></li>
              <li class=""><span><a href="#">Bags</a></span></li> --}}
            </ul>
          </li>
          <li class="sub-menu-separator"></li>
          @if(Auth::check())
            <li><a href="{{route('profile.index', ['slug' =>Auth::User()->slug ])}}">Dashboard</a></li>
            <li><a href="{{ route('auth.signout') }}"><span>Logout</span></a></li>
          @endif
        </ul>
        
      </nav>