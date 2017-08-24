@extends('layout.template')

@section('title')
Category | Citieclik
@endsection

@section('content')
<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>All Categories</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>All Categories</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-2x mb-2">
        <div class="row">
          <!-- Categories-->
          <div class="col-xl-12 col-lg-12 ">
            <!-- Promo banner-->
            <div class="alert alert-image-bg alert-dismissible fade show text-center mb-3" style="background-image: url(assets/img/banners/alert-bg.jpg);"><span class="alert-close text-white" data-dismiss="alert"></span>
              <div class="h3 text-medium text-white padding-top-1x padding-bottom-1x"><i class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i>&nbsp;&nbsp;Check our Limited Offers. Save up to 50%&nbsp;&nbsp;&nbsp;
                <div class="mt-3 hidden-xl-up"></div><a class="btn btn-primary" href="#">View Offers</a>
              </div>
            </div>
            <div class="row">
            	@foreach($cats as $cat)
	              	<div class="col-md-4 col-sm-6">
			            <div class="card mb-30"><a class="card-img-tiles" href="#">
			                <div class="inner">
			                  <div class="main-img"><img src="assets/img/shop/categories/fashion.jpg" alt="Category"></div>
			                  <div class="thumblist"><img src="assets/img/shop/categories/suit.jpg" alt="Category"><img src="assets/img/shop/categories/makeup.jpg" alt="Category"></div>
			                </div></a>
			              <div class="card-block text-center">
			                <h4 class="card-title">{{$cat->category}}</h4>
			                <a class="btn btn-outline-primary btn-sm" href="#">View Category</a>
			              </div>
			            </div>
		          	</div>
		        @endforeach
            </div>
          </div>
          <!-- Sidebar          -->
          {{-- <div class="col-xl-3 col-lg-4 pull-xl-9 pull-lg-8">
	            <aside class="sidebar">
	              <div class="padding-top-2x hidden-lg-up"></div>
	              <section class="widget widget-categories">
	                <h3 class="widget-title">Popular Brands</h3>
	                <ul>
	                  <li><a href="#">Adidas</a><span>(254)</span></li>
	                  <li><a href="#">Bilabong</a><span>(39)</span></li>
	                  <li><a href="#">Brooks</a><span>(205)</span></li>
	                  <li><a href="#">Calvin Klein</a><span>(128)</span></li>
	                  <li><a href="#">Cole Haan</a><span>(104)</span></li>
	                  <li><a href="#">Columbia</a><span>(217)</span></li>
	                  <li><a href="#">New Balance</a><span>(95)</span></li>
	                  <li><a href="#">Nike</a><span>(310)</span></li>
	                  <li><a href="#">Nine West</a><span>(134)</span></li>
	                  <li><a href="#">Oakley</a><span>(73)</span></li>
	                  <li><a href="#">Puma</a><span>(446)</span></li>
	                  <li><a href="#">Scechers</a><span>(87)</span></li>
	                  <li><a href="#">Tommy Bahama</a><span>(42)</span></li>
	                  <li><a href="#">Tommy Hilfiger</a><span>(289)</span></li>
	                  <li><a href="#">Valentino</a><span>(68)</span></li>
	                </ul>
	              </section>
	            </aside>
          </div> --}}
        </div>
      </div>
@endsection