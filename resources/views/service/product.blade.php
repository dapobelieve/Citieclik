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
			           @include('service.layout.feeds')

			            <div class="pt-2">
			                <!-- Pagination-->
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
	var inclusives = [];
	// inclusive filters from checkboxes
	checkboxes.each( function( i, elem ) {
		// if checkbox, use value if checked
		if ( elem.checked ) {
			inclusives.push( elem.value );
		}
	});

		var filterValue = inclusives.length ? inclusives.join(', ') : '*';
		isotopeIts(filterValue);
	})
</script>
@stop