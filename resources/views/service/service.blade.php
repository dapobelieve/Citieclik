@extends('layout.template')

@section('title')
Services | Citieclik
@endsection

@section('content')
<!-- Page Title-->
	  <div class="page-title">
		<div class="container">
		  <div class="column">
			<h1>Listed Services</h1>
		  </div>
		  <div class="column">
			<ul class="breadcrumbs">
			  <li><a href="#">Home</a>
			  </li>
			  <li class="separator">&nbsp;</li>
			  <li>Listed Services</li>
			</ul>
		  </div>
		</div>
	  </div>

	  <!-- Page Content-->
	  <div class="container padding-bottom-3x mb-1">
		<div class="row hereIt">
		  <!-- Products-->
		  <div class="">
			<!-- Shop Toolbar-->
			<div class="shop-toolbar padding-bottom-1x mb-2">
			  <div class="column">
				@include('service.layout.state-filter')
			  </div>
			  <div class="column">
				  {{--  --}}
			  </div>
			</div>
			<!-- Products Grid-->
			@include('service.layout.feeds')
		  </div>
		  <!-- Sidebar          -->
		  <div class="col-xl-3 col-lg-4 pull-xl-9 pull-lg-8">
			@include('service.layout.cat-filter')
		  </div>
		</div>
	  </div>
@endsection

@section('script')
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/isotope.js"></script>
<script>
  var url1 = "service/state/location/";
  // var url2 = "service/category/getscat/";
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
  // console.log(event.target.value);
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