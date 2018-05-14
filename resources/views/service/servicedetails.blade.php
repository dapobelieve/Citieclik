@extends('layout.template')

@section('title')
{{$service->serviceTitle()}} | Citieclik
@endsection

@section('style')
	<link href="/dist/ui/trumbowyg.min.css" rel="stylesheet">
@endsection

@section('content')
	<div class="page-title">
        <div class="container">
          <div class="column">
          	@if($service->type == 'p')
          	    <h1>Product Details</h1> 
          	@elseif($service->type == 's')
          		<h1>Service Details</h1> 
          	@endif
              
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="/">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>{{$service->serviceTitle()}}</li>
            </ul>
          </div>
        </div>
  	</div>
	<!-- Page Content-->
 	<div class="container padding-bottom-3x mb-1">
        <div class="row">
	          <!-- Poduct Gallery-->
	          	<div class="col-md-6">
	            	<div class="product-gallery">
                        <div class="product-carousel owl-carousel">
                            @forelse($service->images as $image)
                                <div data-hash="{{ $loop->iteration }}">
                                    <div style="padding: 0; margin: 0">
                                        <img style="top: 50%;" class="img-responsive" src="{{ $image->servieImage() }}" alt="">
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>                      
                      <ul class="product-thumbnails">
                        @forelse($service->images as $image)
                            <li  class="">
                                <a href="#{{ $loop->iteration }}">
                                    <img style="width: 75px; height: 75px" src="{{ $image->servieImage() }}" alt="Product">
                                </a>
                            </li>
                        @empty
                        @endforelse
                      </ul>
                    </div>
	          	</div>
	          	<!-- Product Info-->
		        <div class="col-md-6">
		            <div class="padding-top-2x mt-2 hidden-md-up"></div>
	              	<div class="rating-stars">
	              		<i class="icon-star filled"></i>
		              	
		              	{{-- <i class="icon-star filled"></i>
		              	<i class="icon-star filled"></i>
		              	<i class="icon-star filled"></i>
		              	<i class="icon-star"></i> --}}
		              {{-- </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 customer reviews</span> --}}
			            <h2 class="padding-top-1x text-normal">{{$service->serviceTitle() }}</h2>
			            {{-- <span class="h2 d-block">$47.60</span> --}}
			            {{-- {{$service->location }} --}}
			           
			            <br>
			            <br>
			           {{--  <div class="pt-1 mb-2"><span class="text-medium">SKU:</span> #21457832</div> --}}
			            <div class="padding-bottom-1x mb-2">
			            	<p style="font-size: 19px;" class="text-medium">Category:&nbsp;<span><small><a class="navi-link" href="{{route('category', $service->catty->slug)}}">{{$service->catty->category}}</a></small></span>
			            	</p>
			            	<p style="font-size: 19px;" class="text-medium">State:&nbsp;<span><small><a class="navi-link" href="{{route('category', $service->loca->state->state)}}">{{$service->loca->state->state}}</a></small></span>
			            	</p>
			            	<p style="font-size: 19px;" class="text-medium">Location:&nbsp;<span><small><a class="navi-link" href="{{-- {{route('category', $service->loca->lga)}} --}}">{{$service->loca->lga}}</a></small></span>
			            	</p>
			            	<p style="font-size: 19px;" class="text-medium">Posted:&nbsp;<span><small><a class="navi-link" href="">{{$service->created_at->diffForHumans()}}</a></small></span>
			            	</p>
			            </div>
			            <hr class="mb-3">
			            <div class="d-flex flex-wrap justify-content-between">
			              {{-- <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
			                <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
			              </div> --}}
			              <div class="sp-buttons mt-2 mb-2">
			              		
			              </div>
			            </div>
			        </div>
		        </div>
	        
		        <div class="col-lg-8 mt-30">
		            <ul class="nav nav-tabs" role="tablist">
		              <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">Description</a></li>
		              <li class="nav-item"><a class="nav-link " href="#reviews" data-toggle="tab" role="tab">Reviews <span class="badge badge-danger badge-pill">{{ $service->comments->count() }}</span></a></li>
		            </ul>
		            <div class="tab-content">
		              <div class="tab-pane fade show active" id="description" role="tabpanel">
		                {{-- <p>{{ $service->description }}</p> --}}
		                <textarea class="my-editor" name="description" value="{{ old('description') ?: ''  }}" placeholder="Your description goes here...">{{ $service->description }}</textarea>
		              </div>
		              <div class="tab-pane fade " id="reviews" role="tabpanel">
		                	<!-- Review-->
			                <div class="commentz">
			                	@if($service->comments->count())
			                		@foreach($service->comments as $comment)
						                <div class="comment">
						                  <div class="comment-author-ava"><img src="{{$service->userz->getUserImg()}}" alt="Review author"></div>
						                  <div class="comment-body">
						                    <div class="comment-header d-flex flex-wrap justify-content-between">
						                    </div>
						                    <p class="comment-text comment-text">{{ $comment->body }}</p>
						                    <div class="comment-footer">
						                    	<span class="comment-meta">{{ $comment->user->getFullName() }}</span>
						                    </div>
						                  </div>
						                </div>
					                @endforeach
					            @endif
				            </div>

			                <!-- Review Form-->
			                {{-- <h5 class="mb-30 padding-top-1x colored">Leave Review</h5> --}}
			                @if(Auth::check())
				                <form class="row" action="{{ route('comment')}}" method="POST">
				                  <div class="col-12">
				                    <div class="form-group">
				                      <label for="review_text">Drop your Comments </label>
				                      <textarea name="comment" class="form-control form-control-rounded" id="review_text" rows="8"  placeholder="Say Something..."></textarea>
				                      <input type="hidden" name="serviceId" value="{{$service->id}}">
				                    </div>
				                  </div>
				                  <div class="col-12 text-right">
				                    <button class="btn btn-sm btn-outline-primary" type="submit">Submit Review</button>
				                  </div>
				                </form>
				            @else
				            <h5 class="mb-30 padding-top-1x colored">Sign in to Post Comments</h5>
				            @endif
		              </div>
		            </div>
				</div>
				<div class="col-lg-4 mt-30">
					<aside class="user-info-wrapper">
					    <div class="user-cover" style="background-image: url(/assets/img/account/user-cover-img.jpg);">
					      	{{-- <div class="info-label" data-toggle="tooltip" title="" data-original-title="Posted by"><h4>Posted by</h4></div> --}}
					    </div>
					    @if(Auth::check())
                        {{-- user clciking system --}}
                        <div class="user-info">
                            <div class="user-avatar">
                                <img id="userMainAvatar" src="{{ $service->userz->getUserImg() }}"  alt="User">
                            </div>
                            <clicker :service="{{ $service }}"  :user="{{ $service->userz }}"></clicker>
                        </div>
						@endif
					    <br>
				      	<div class="list-group">
				            <div class="list-group-item flex-column align-items-start" style="border: 0px !important;">
			                    <div class="d-flex w-100 justify-content-between">
			                      	<h5 class="text-warning">YOUR <strong>SAFETY</strong> IS OUR PRIORITY</h5>
			                    </div>
			                    <hr class="">
			                    <p>
					            	<ul class="h-list-style-position-inside h-font-13 text-warning">
					                    <li>Always arrange to meet Buyer/Seller in a Public and Open Location</li>
								        <li>Always ask for the Buyer/Seller’s ID</li>
								        <li>Visit the Seller’s Shop/Office if possible</li>
								        <li>Always Inspect the Product Well Before Buying</li>
								        <li>Arrange to Make Payment at the Bank (for large amounts)</li>
						            </ul>
			                    </p>
			                    {{-- <small class="opacity-60">Donec id elit non mi porta.</small> --}}
			                </div>
				        </div>
				  	</aside>
				</div>
	        	<!-- Related Products Carousel-->
	        	{{-- <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3> --}}
	        	<!-- Carousel-->
	        {{-- <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
	          <!-- Product-->
	          	<div class="grid-item">
	            	<div class="product-card">
	              	<div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/09.jpg" alt="Product"></a>
	              		<h3 class="product-title"><a href="shop-single.html">Rockt Dog</a></h3>
	              		<h4 class="product-price">
	                		<del>$44.95</del>$34.99
	              		</h4>
	              		<div class="product-buttons">
	                		<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-hert"></i></button>
	                		<button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
	              		</div>
	            </div>
	          </div>
	          <!-- Product-->
	          <div class="grid-item">
	            <div class="product-card">
	                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star illed"></i><i class="icon-star"></i>
	                </div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/03.jpg" alt="Product"></a>
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
	            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/12.jpg" alt="Product"></a>
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
	                </div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/11.jpg" alt="Product"></a>
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
	            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/04.jpg" alt="Product"></a>
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
	              <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/01.jpg" alt="Product"></a>
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
      		</div> --}}
  		<!--Page Content-->
  		</div>
  	</div>
@endsection

@section('script')
	<script src="/dist/trumbowyg.min.js"></script>
	<script type="text/javascript">
		$('.my-editor').trumbowyg({
			// prefix: 'modern-ui',
			autogrow: true,
			btns: [],
			imageWidthModalEdit: true,
			disabled: true,
			hideButtonTexts: true
		});
	</script>
@endsection