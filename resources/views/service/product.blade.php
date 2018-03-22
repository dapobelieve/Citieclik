@extends('layout.template')

@section('title')
Services | Citieclik
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
    <div class="row">
        <!-- Products-->
        <div class="col-xl-9 col-lg-8">
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
                <div class="column">
                    <div class="shop-sorting">
                        <label for="sorting">Sort by:</label>
                        <select class="form-control" id="sorting">
                            <option>Popularity</option>
                            <option>Low - High Price</option>
                            <option>High - Low Price</option>
                            <option>Avarage Rating</option>
                            <option>A - Z Order</option>
                            <option>Z - A Order</option>
                        </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
                    </div>
                </div>
                <div class="column">
				</div>
            </div>
            <!-- Product-->
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
            <aside class="sidebar">
                <div class="padding-top-2x hidden-lg-up"></div>
                <!-- Widget Categories-->
                <section class="widget widget-categories">
                    <h3 class="widget-title">Shop Categories</h3>
                    <ul>
                        <li class="has-children expanded"><a href="#">Shoes</a><span>(1138)</span>
                            <ul>
                                <li><a href="#">Women's</a><span>(508)</span>
                                    <ul>
                                        <li><a href="#">Sneakers</a></li>
                                        <li><a href="#">Heels</a></li>
                                        <li><a href="#">Loafers</a></li>
                                        <li><a href="#">Sandals</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Men's</a><span>(423)</span>
                                    <ul>
                                        <li><a href="#">Boots</a></li>
                                        <li><a href="#">Oxfords</a></li>
                                        <li><a href="#">Loafers</a></li>
                                        <li><a href="#">Sandals</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Boy's Shoes</a><span>(97)</span></li>
                                <li><a href="#">Girl's Shoes</a><span>(110)</span></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#">Clothing</a><span>(2356)</span>
                            <ul>
                                <li><a href="#">Women's</a><span>(1032)</span>
                                    <ul>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Shirts &amp; Tops</a></li>
                                        <li><a href="#">Swimwear</a></li>
                                        <li><a href="#">Shorts</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Men's</a><span>(937)</span>
                                    <ul>
                                        <li><a href="#">Shirts &amp; Tops</a></li>
                                        <li><a href="#">Shorts</a></li>
                                        <li><a href="#">Swimwear</a></li>
                                        <li><a href="#">Pants</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kid's Clothing</a><span>(386)</span></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#">Bags</a><span>(420)</span>
                            <ul>
                                <li><a href="#">Handbags</a><span>(180)</span></li>
                                <li><a href="#">Backpacks</a><span>(132)</span></li>
                                <li><a href="#">Wallets &amp; Accessories</a><span>(47)</span></li>
                                <li><a href="#">Luggage</a><span>(61)</span></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#">Accessories</a><span>(874)</span>
                            <ul>
                                <li><a href="#">Sunglasses</a><span>(211)</span></li>
                                <li><a href="#">Hats</a><span>(195)</span></li>
                                <li><a href="#">Watches</a><span>(159)</span></li>
                                <li><a href="#">Jewelry</a><span>(203)</span></li>
                                <li><a href="#">Belts</a><span>(106)</span></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
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