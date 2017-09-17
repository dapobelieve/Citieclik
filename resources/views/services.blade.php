@extends('layout.template')

@section('title')
Services | Citieclik
@endsection

@section('content')
<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>All Services</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>All Services</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 push-xl-3 push-lg-4">
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
              <div class="column">
                <div class="shop-sorting">
                  <label for="sorting">Filter by State:</label>
                  <select class="form-control" id="serState">
                    @foreach($states as $state)
                        <option value="{{$state->id}}">{{$state->state}}</option>
                    @endforeach
                  </select>
                  <label class="locs" style="display:none" for="sorting">Filter by Location:</label>
                  {{-- <spa --}}
                  <select class="form-control locs" style="display:none" id="location">
                  </select>
                  {{-- </select>
                  <span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span> --}}
                </div>
              </div>
              <div class="column">
                 {{--  <div class="shop-view"><a class="grid-view active" href="shop-grid-ls.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ls.html"><span></span><span></span><span></span></a></div> --}}
              </div>
            </div>
            <!-- Products Grid-->
            <div class="isotope-grid cols-3 mb-2">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                  <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/01.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
                  <h4 class="product-price">
                    <del>$99.99</del>$49.99
                  </h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/02.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Cole Haan Crossbody</a></h3>
                  <h4 class="product-price">$200.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                    </div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/03.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
                  <h4 class="product-price">$155.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                  <div class="product-badge text-muted">Out of stock</div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/08.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Off the Shoulder Top</a></h3>
                  <h4 class="product-price">$128.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button><a class="btn btn-outline-secondary btn-sm" href="shop-single.html">View Details</a>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i><i class="icon-star"></i>
                    </div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/05.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Jordan City Man's Hoodie</a></h3>
                  <h4 class="product-price">$65.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                  <div class="product-badge text-danger">40% Off</div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/06.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Palace Shell Track Jacket</a></h3>
                  <h4 class="product-price">
                    <del>$60.00</del>$36.00
                  </h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/04.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
                  <h4 class="product-price">$47.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/10.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Daily Fabric Cap</a></h3>
                  <h4 class="product-price">$31.99</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/11.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
                  <h4 class="product-price">$90.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/16.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Big Wordmark Tote</a></h3>
                  <h4 class="product-price">$29.99</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/14.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Skagen Holst Watch</a></h3>
                  <h4 class="product-price">$145.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/15.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Metal Star Earings</a></h3>
                  <h4 class="product-price">$90.00</h4>
                  <div class="product-buttons">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Details</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pagination-->
            <nav class="pagination">
              <div class="column">
                <ul class="pages">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>...</li>
                  <li><a href="#">12</a></li>
                </ul>
              </div>
              <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
            </nav>
          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4 pull-xl-9 pull-lg-8">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Widget Categories-->
              <section class="widget widget-categories">
                <h3 class="widget-title">All Categories</h3>
                <ul>
                  @foreach($cats as $cat)
                      <li class=""><a href="#">{{$cat->category}}</a>{{-- <span>(1138)</span> --}}</li>
                  @endforeach
                  
                </ul>
              </section>
              <!-- Widget Price Range-->
             {{--  <section class="widget widget-categories">
                <h3 class="widget-title">Price Range</h3>
                <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                  <div class="ui-range-slider"></div>
                  <footer class="ui-range-slider-footer">
                    <div class="column">
                      <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
                    </div>
                    <div class="column">
                      <div class="ui-range-values">
                        <div class="ui-range-value-min">$<span></span>
                          <input type="hidden">
                        </div>&nbsp;-&nbsp;
                        <div class="ui-range-value-max">$<span></span>
                          <input type="hidden">
                        </div>
                      </div>
                    </div>
                  </footer>
                </form>
              </section> --}}
              <!-- Widget Brand Filter-->
              <section class="widget">
                <h3 class="widget-title">Filter by Sub Category</h3>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Adidas&nbsp;<span class="text-muted">(254)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Bilabong&nbsp;<span class="text-muted">(39)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Calvin Klein&nbsp;<span class="text-muted">(128)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Nike&nbsp;<span class="text-muted">(310)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Tommy Bahama&nbsp;<span class="text-muted">(42)</span></span>
                </label>
              </section>
              <!-- Widget Size Filter-->
              {{-- <section class="widget">
                <h3 class="widget-title">Filter by Size</h3>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">XL&nbsp;<span class="text-muted">(208)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">L&nbsp;<span class="text-muted">(311)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">M&nbsp;<span class="text-muted">(485)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">S&nbsp;<span class="text-muted">(213)</span></span>
                </label>
              </section> --}}
              <!-- Promo Banner-->
              <section class="promo-box" style="background-image: url(/assets/img/banners/02.jpg);">
                <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                  <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                  <h3 class="text-bold text-light text-shadow">Sunglassess</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
                </div>
              </section>
            </aside>
          </div>
        </div>
      </div>
@endsection

@section('script')
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript">
  $('#serState').change(function(event){
    console.log(event);
    // var filterValue = ($this).text;
    // alert(filterValue);
    $('.locs').show();
    $.ajax({
      url: "service/state/location/"+$(this).val(),
      method: 'GET',
    })
    .done(function(data) {
      $location = $('#location');
      $location.removeAttr('disabled');//enable
      $location.children().remove();//clear the select tag first
      var dee = JSON.parse(data); //convert the json data to array here
      $.each(dee,function(index, value){
        $location.append("<option value='"+value.id+"' >"+ value.lga +"</option>");
      })
    });
  })
</script>
@stop