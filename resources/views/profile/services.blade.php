@extends('profile.layout.template')


  @section('title')
  Services | Citieclik
  @endsection
  @section('profileContent')
            <div class="col-lg-8">
              <div class="padding-top-2x mt-2 hidden-lg-up"></div>
              <!-- Wishlist Table-->
              <div class="table-responsive wishlist-table margin-bottom-none">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Services</th>
                      <th class="text-center"><a class="btn btn-sm btn-outline-primary" href="{{route('addservice')}}">Add new service</a></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($user->getUserServices() as $servy) 
                    <tr>
                      <td>
                        <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/cart/01.jpg" alt="Product"></a>
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
                    @endforeach
                  </tbody>
                </table>
              </div>
              <hr class="mb-4">
              <label class="custom-control custom-checkbox d-block">
                <a class="btn btn-sm btn-outline-danger" href="{{route('addservice')}}">Add new service</a>
              </label>
            </div>      
  @endsection