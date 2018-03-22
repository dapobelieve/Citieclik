@extends('layout.template')

@section('title')
Products | Citieclik
@endsection

@section('content')
<!-- Page Title-->
			<div class="page-title">
				<div class="container">
					<div class="column">
						<h1>Listed Products</h1>
					</div>
					<div class="column">
						<ul class="breadcrumbs">
							<li><a href="#">Home</a>
							</li>
							<li class="separator">&nbsp;</li>
							<li>Listed Products</li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Page Content-->
			<div class="container padding-bottom-3x mb-1">
			    <div class="row hereIt">
			        <!-- Products-->
			        <div class="col-xl-9 col-lg-8">
			            <!-- Shop Toolbar-->
			            <div class="shop-toolbar padding-bottom-1x mb-2">
			                <div class="column">
			                   @include('service.layout.state-filter')
			                </div>
			                <div class="column">
							</div>
			            </div>
			            <!-- Product-->
			            @foreach($sdata as $data)
			            <div class="product-card product-list"><a class="product-thumb" href="shop-single.html">
			                    <div class="product-badge text-danger">50% Off</div><img src="img/shop/products/01.jpg" alt="Product"></a>
				                <div class="product-info">
				                    <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
				                    <h4 class="product-price">
				                        <del>$99.99</del>$49.99
				                    </h4>
				                    <p class="hidden-xs-down">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore odit officiis illo perferendis deserunt, ipsam dolor ad dolorem eaque veritatis harum facilis aliquid id doloribus incidunt quam beatae, soluta magni alori sedum quanto.</p>
				                    <div class="product-buttons">
				                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
				                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
				                    </div>
				                </div>
			            </div>
			            @endforeach

			            <div class="pt-2">
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
			        </div>
			        <!-- Sidebar          -->
			        <div class="col-xl-3 col-lg-4">
			            @include('service.layout.cat-filter')
			        </div>
			    </div>
			</div>

			
			<!-- Page Content Ends -->
			
@endsection

@section('script')
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/isotope.js"></script>
<script>
	var url1 = "service/state/location/";
	var url2 = "service/category/getscat/";
</script>
<script src="/assets/js/service.js"></script>
<script type="text/javascript">

function isotopeIts(theValue)
{
	$grid.isotope({ filter: theValue });
}


	var checkboxes = $('.subCatWid');
	checkboxes.on("change",".dcheck", function(event) {
	// map input values to an array
	console.log(event.target.value);
	var inclusives = [];
	// inclusive filters from checkboxes
	checkboxes.each( function( i, elem ) {
		// if checkbox, use value if checked
		if ( elem.checked ) {
			inclusives.push( elem.value );
		}
	});
	// console.log(inclusives);

		// var filterValue = inclusives.length ? inclusives.join(', ') : '*';
		// console.log(filterValue); 
		// isotopeIts(filterValue);
	})
</script>
@stop