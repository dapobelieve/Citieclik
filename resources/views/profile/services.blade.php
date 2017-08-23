@extends('layout.template')

@section('title')
Services | Citieclik
@endsection
@include('layout.profilepics')
@section('content')
  <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Services</h1>
          </div>
          @include('layout.column')
        </div>
      </div>

      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-2">
        <div class="row">
          @include('layout.profileside')
          <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <!-- Wishlist Table-->
            <div class="table-responsive wishlist-table margin-bottom-none">
              <table class="table">
                <thead>
                  <tr>
                    <th>Service Name</th>
                    <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#">Clear Services</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/cart/01.jpg" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title"><a href="shop-single.html">Unionbay Park</a></h4>
                          <div class="text-lg text-medium text-muted">$43.90</div>
                          <div>Availability:
                            <div class="d-inline text-success">In Stock</div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/cart/02.jpg" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title"><a href="shop-single.html">Daily Fabric Cap</a></h4>
                          <div class="text-lg text-medium text-muted">$24.70</div>
                          <div>Availability:
                            <div class="d-inline text-warning">2 - 3 Weeks</div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="assets/img/shop/cart/03.jpg" alt="Product"></a>
                        <div class="product-info">
                          <h4 class="product-title"><a href="shop-single.html">Cole Haan Crossbody</a></h4>
                          <div class="text-lg text-medium text-muted">$200.00</div>
                          <div>Availability:
                            <div class="d-inline text-success">In Stock</div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr class="mb-4">
            <label class="custom-control custom-checkbox d-block">
              <a class="btn btn-sm btn-outline-primary" href="#">Add new service</a>
            </label>
          </div>
        </div>
      </div>


      
@endsection