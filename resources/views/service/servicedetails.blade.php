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
            <h1>{{-- {{$service->serviceTitle()}}  --}}Service Detail</h1>   
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
	            	<div class="product-gallery"><span class="product-badge text-danger"></span>
	              <div class="gallery-wrapper">
	                <div class="gallery-item active"><a href={{$service->servieImage()}} data-hash="one" data-size="1000x667"></a></div>
	                {{-- <div class="gallery-item"><a href="img/shop/single/02.jpg" data-hash="two" data-size="1000x667"></a></div>
	                <div class="gallery-item"><a href="img/shop/single/03.jpg" data-hash="three" data-size="1000x667"></a></div>
	                <div class="gallery-item"><a href="img/shop/single/04.jpg" data-hash="four" data-size="1000x667"></a></div>
	                <div class="gallery-item"><a href="img/shop/single/05.jpg" data-hash="five" data-size="1000x667"></a></div> --}}
	              </div>
	              <div class="product-carousel owl-carousel">
		                <div><img src={{$service->servieImage()}} alt="Product"></div>{{-- 
		                <div data-hash="two"><img src="/assets/img/shop/single/02.jpg" alt="Product"></div>
		                <div data-hash="three"><img src="/assets/img/shop/single/03.jpg" alt="Product"></div>
		                <div data-hash="four"><img src="/assets/img/shop/single/04.jpg" alt="Product"></div>
		                <div data-hash="five"><img src="/assets/img/shop/single/05.jpg" alt="Product"></div> --}}
	              </div>
	              {{-- <ul class="product-thumbnails">
	                <li class="active"><a href="#one"><img src="/assets/img/shop/single/th01.jpg" alt="Product"></a></li>
	                <li><a href="#two"><img src="/assets/img/shop/single/th02.jpg" alt="Product"></a></li>
	                <li><a href="#three"><img src="/assets/img/shop/single/th03.jpg" alt="Product"></a></li>
	                <li><a href="#four"><img src="/assets/img/shop/single/th04.jpg" alt="Product"></a></li>
	                <li><a href="#five"><img src="/assets/img/shop/single/th05.jpg" alt="Product"></a></li>
	              </ul> --}}
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
		        	<div class="">
					    <div class="card-header" role="tab">
					      <h4 style="text-decoration: none;">Description</h4>
					    </div>
			      		<textarea class="my-editor">
			      			{{$service->description }}
			      		</textarea>
					</div>
				  	<!-- Review Form-->
{{-- 		      		<h5 class="mb-30 padding-top-1x">Send a message to the service provider</h5>
			      	<form class="row" method="post">
				        <div class="col-sm-6">
				          <div class="form-group">
				            <label for="review_name">Your Name</label>
				            <input class="form-control" id="review_name" required="" type="text">
				          </div>
				        </div>
				        <div class="col-sm-6">
				          <div class="form-group">
				            <label for="review_email">Your Email</label>
				            <input class="form-control" id="review_email" required="" type="email">
				          </div>
				        </div>
				        <div class="col-sm-6">
				          <div class="form-group">
				            <label for="review_subject">Subject</label>
				            <input class="form-control" id="review_subject" required="" type="text">
				          </div>
				        </div>
				        <div class="col-sm-6">
				          <div class="form-group">
				            <label for="phone">Phone Number</label>
				            <input class="form-control" id="phone" required="" type="text">
				          </div>
				        </div>
				        <div class="col-12">
				          	<div class="form-group">
				            	<label for="review_text">Review </label>
				            	<textarea class="form-control" id="review_text" rows="8" required=""></textarea>
				          	</div>
				        </div>
				        <div class="col-12 text-right">
				          	<button class="btn btn-outline-primary" type="submit">Send</button>
				        </div>
			      	</form> --}}
				</div>
				<div class="col-lg-4 mt-30">
					<aside class="user-info-wrapper">
					    <div class="user-cover" style="background-image: url(/assets/img/account/user-cover-img.jpg);">
					      	<div class="info-label" data-toggle="tooltip" title="" data-original-title="Posted by"><h4>Posted by</h4></div>
					    </div>
					    <div class="user-info">
					      	<div class="user-avatar">
					            <img id="userMainAvatar" src="{{$service->userz->getUserImg()}}" alt="User">
					      	</div>
					      	<div class="user-data">
					        	<h4 class="text-primary text-medium">{{$service->userz->username}}</h4><small class="opacity-60">{{$service->created_at->diffForHumans()}}</small>
					        	<h5>{{$service->userz->phone}}</h5>
					      	</div>
					    </div><br>
				      	<div class="list-group">
				            <div class="list-group-item flex-column align-items-start" style="border: 0px !important;">
			                    <div class="d-flex w-100 justify-content-between">
			                      	<h5 class="text-warning">Please read safety tips</h5>
			                    </div>
			                    <hr class="">
			                    <p>
					            	<ul class="h-list-style-position-inside h-font-13 text-warning">
					                    <li>NEVER PAY BEFORE PURCHASE</li>
					                    <li>Try to meet at a safe, public location</li>
					                    <li>Check the item BEFORE you buy it</li>
					                    <li>Pay only after collecting the item</li>
						            </ul>
			                    </p>
			                    {{-- <small class="opacity-60">Donec id elit non mi porta.</small> --}}
			                </div>
				        </div>
				  	</aside>
				</div>
	        	<!-- Related Products Carousel-->
	        	<h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
	        	<!-- Carousel-->
	        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
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
      		</div>
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