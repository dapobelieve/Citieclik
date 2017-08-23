 @if(Auth::check())
        <div class="toolbar">
          <div class="inner">
            <div class="tools">
              <div class="search"><i class="icon-search"></i></div>
              <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
                <ul class="toolbar-dropdown">
                  <li class="sub-menu-title" style="font-size: 12px;"><span>Hello,</span>{{Auth::User()->first_name}}</li>
                    <li><a href="account-profile.html">My Profile</a></li>
                    <li><a href="account-orders.html">Orders List</a></li>
                    <li><a href="account-wishlist.html">Wishlist</a></li>
                  <li class="sub-menu-separator"></li>
                  <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      @endif