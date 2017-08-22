<nav class="offcanvas-menu">
        <ul class="menu">
          <li class="active"><a href="index-2.html"><span>Home</span></a>
          </li>
          {{-- <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="shop-categories.html">Shop Categories</a></li>
              <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="shop-list-ls.html"><span>Shop List</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </li> --}}
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
        </ul>
      </nav>