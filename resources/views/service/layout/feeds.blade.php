<div class="isotope-grid isodata cols-3 mb-2">
                  <div class="gutter-sizer"></div>
                  <div class="grid-sizer"></div>
                  <!-- Product-->
                  @foreach($sdata as $data)
                  <div class="isoitem grid-item {{$data->slugIt($data->catty->category)}} {{$data->slugIt($data->subCat->sub_category)}} {{$data->slugIt($data->loca->lga)}} {{$data->slugIt($data->loca->state->state)}}">
                        <div class="product-card mybox">
                          <div class="product-badge text-primary text-bold">{{$data->catty->category}}</div><br>
                          <div class="text-right"><small class=" text-black">{{$data->loca->state->state}}</small></div>
                          <a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/01.jpg" alt="Product"></a>
                          <h3 class="product-title"><a href="shop-single.html">{{$data->title}}</a></h3>
                          <h4 class="product-price">&#8358;49.99</h4>
                          <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                            <a href="{{route('service.detail', ['username' => $data->userz->username,'slug' => $data->slug])}}" class="btn btn-outline-primary btn-sm">Details</a>
                          </div>
                        </div>
                  </div>
                  @endforeach
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