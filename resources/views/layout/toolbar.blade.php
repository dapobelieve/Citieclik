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
                  <li class="sub-menu-separator"></li>
                  <li><a href="{{ route('auth.signout') }}"> <i class="icon-unlock"></i>Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      @endif

      @if(!Auth::check())
        <div class="toolbar">
          <div class="inner">
            <div class="tools ">
              <a href="{{route('signup')}}" class="sagent">Sign up / Sign in</a>
            </div>
          </div>
        </div>
      @endif