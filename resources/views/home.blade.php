@extends('layout.template')

@section('title')
Welcome | Citieclik
@endsection

@section('content')
  	<!-- Main Slider-->
  	<section class="hero-slider text-center" style="background-image: url(assets/img/hero-slider/lagos.jpg); color: #fff !important; ">
      <div class="container padding-top-6x">
        <div id="carouselContent" class="carousel slide bg-chrome item" data-ride="carousel">
          <h1 class="" style="color: #fff !important; text-shadow: 0px 0px 6px rgba(0,0,0,0.4); font-weight: 600;">Find the perfect Link on Citieclik</h1>
          <div class="carousel-inner text-white align-items-center" role="listbox">
              <div class="row align-items-center carousel-item align-items-center flex-column p-4 text-center">
                  <form class="form-inline text-center padding-bottom-2x">
                    <div class="form-group text-center">
                      <label class="sr-only" for="inlineFormInputGroupUsername2">What are you looking for?</label>
                      <div class="input-group mb-2 mr-sm-2 mb-sm-0" style="margin-right: 0px !important;">
                        <div class="input-group-addon">?</div>
                        <input type="text" class="form-control form-control-square form-control-lg" id="inlineFormInputGroupUsername2" placeholder="What are you looking for">
                      </div>
                      <div class="input-group form-group" method="get" style="margin-right: 0px !important;">
                        <span class="input-group-btn">
                          {{-- <button type="submit"><i class="icon-search"></i></button> --}}
                        </span>
                        <select class="form-control form-control-square form-control-lg" id="select-input">
                          <option>Choose option...</option>
                          <option>Option item 1</option>
                          <option>Option item 2</option>
                          <option>Option item 3</option>
                        </select>
                        {{-- <input class="form-control form-control-square form-control-lg" type="email" placeholder="Location"> --}}
                      </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary btn-lg btn-square"><i class="icon-search"></i> Search</button>
                          </div>
                    </div>
                    {{-- <button type="submit" class="btn btn-square btn-primary">Submit</button> --}}
                  </form>
                  <form class="form-inline text-center">
                    <div class="col-xs-12 form-group">
                      <div class="col-xs-6"><button class="btn btn-danger">Request Service</button></div>
                      <div class="col-xs-6"><button class="btn btn-primary">View Request</button></div>
                    </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
  	</section>
      <!-- Top Categories-->
      <section class="container padding-top-3x text-center">
        <h3 class="text-center mb-30">Top Categories</h3>
        <div class="row text-center">
          
          @foreach($cats as $cat)
            <div class="col-md-3 col-sm-6">
              <div class="card mb-30 mybox"><a class="card-img-tiles" href="#">
                  <div class="inner">
                    <div class="main-img"><img src="/assets/img/category/{{$cat->image}}" alt="Category"></div>
                    {{-- <div class="thumblist"><img src="assets/img/shop/categories/pcvro2.jpg" alt="Category"><img src="assets/img/shop/categories/pro3.jpg" alt="Category"></div> --}}
                  </div></a>
                <div class="card-block text-center">
                  <h6 class="card-title">{{$cat->category}}</h6>
                  {{-- <p class="text-muted">Starting from $27.00</p> --}}
                  <a class="" href="#">View Category</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        {{-- <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="category">All Categories</a></div> --}}
      </section>

      <section class="container-fluid padding-top-3x padding-bottom-2x" id="particles-js">
        <div class="row" style="color: #fff !important;">
          <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block mx-auto mb-4" src="assets/img/icons/step1.png" alt="Register">
            <h3 style="color: #00aeef;">01 Steps</h3>
            <h4 style="color: #fff !important; ">Register and Account</h4>
            <p class="text-muted margin-bottom-none" style="color: #fff !important;">Create your free account to get started</p>
          </div>
          <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block mx-auto mb-4" src="assets/img/icons/step2.png" alt="Verify">
            <h3 style="color: #00aeef;">02 Steps</h3>
            <h4 style="color: #fff !important; ">Verify Your Account</h4>
            <p class="text-muted margin-bottom-none" style="color: #fff !important;">Verify your account for full access to the main features</p>
          </div>
          <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block mx-auto mb-4" src="assets/img/icons/step3.png" alt="Add / Request">
            <h3 style="color: #00aeef;">03 Steps</h3>
            <h4 style="color: #fff !important; ">Add Services & Request</h4>
            <p class="text-muted margin-bottom-none" style="color: #fff !important;">Add your own services or apply to requests</p>
          </div>
        </div>
      </section>
      <!-- Featured Products Carousel-->
      <section class="container padding-top-3x padding-bottom-3x">
        <h3 class="text-center mb-30">Featured Services</h3>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/products/09.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Rocket Dog</a></h3>
              <h4 class="product-price">
                <del>$44.95</del>$34.99
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/products/03.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
              <h4 class="product-price">$155.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/products/12.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Vented Straw Fedora</a></h3>
              <h4 class="product-price">$49.50</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/products/11.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
              <h4 class="product-price">$90.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/products/04.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
              <h4 class="product-price">$47.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/products/01.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
              <h4 class="product-price">
                <del>$99.99</del>$49.99
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Product Widgets-->
      <section class="container padding-bottom-2x">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Top Sellers</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/01.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/03.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/04.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">New Arrivals</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/05.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Union Park</a></h4><span class="entry-meta">$49.99</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/06.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Cole Haan Crossbody</a></h4><span class="entry-meta">$200.00</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/07.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Skagen Holst Watch</a></h4><span class="entry-meta">$145.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-featured-products">
              <h3 class="widget-title">Best Rated</h3>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/08.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Jordan's City Hoodie</a></h4><span class="entry-meta">$65.00</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/09.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Palace Shell Track Jacket</a></h4><span class="entry-meta">$36.99</span>
                </div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="assets/img/shop/widget/10.jpg" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Off the Shoulder Top</a></h4><span class="entry-meta">$128.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Popular Brands-->
     {{--  <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="assets/img/brands/01.png" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="assets/img/brands/02.png" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="assets/img/brands/03.png" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="assets/img/brands/04.png" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="assets/img/brands/05.png" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="assets/img/brands/06.png" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="assets/img/brands/07.png" alt="Dior"></div>
        </div>
      </section> --}}
      <!-- Services-->
      
@endsection