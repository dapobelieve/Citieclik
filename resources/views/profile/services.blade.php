@extends('profile.layout.template')


@section('title')
Services | Citieclik
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/assets/css/slimscroll.css">
<script type="text/javascript" src="/assets/js/slim.js"></script>
@stop



  @section('profileContent')
            <div class="col-lg-8">
              <div class="padding-top-2x mt-2 hidden-lg-up"></div>
              <!-- Wishlist Table-->
              <div class="table-responsive wishlist-table  margin-bottom-none">
              <div class="slimScroll">
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
                            <h4 class="product-title"><a href="shop-single.html">{{$servy->title}}</a></h4>
                            <div class="text-lg text-medium text-muted">Category: {{$servy->catty->category}}</div>
                            <div>Posted:
                              <div class="d-inline text-success">{{$servy->created_at->diffForHumans()}}</div>
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
              </div>
              <hr class="mb-4">
              <label class="custom-control custom-checkbox d-block">
                <a class="btn btn-sm btn-outline-danger" href="{{route('addservice')}}">Add new service</a>
              </label>
            </div>      
  @endsection

@section('script')
<script type="text/javascript" src="/assets/js/slimscroll.min.js"></script>
@stop