@extends('layout.template')
@section('style')
	 {{-- Summer Note --}}
  {{-- <link href="/assets/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="/dist/ui/trumbowyg.min.css" rel="stylesheet">
  {{-- <link rel="stylesheet" href="../css/nice-select.css"> --}}

@endsection

@section('title')
Add service | Citieclik
@endsection

@section('content')
	<div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Request Details</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Request Detail</li>
            </ul>
          </div>
        </div>
      </div>
		<!-- Page Content-->
      	<div class="container padding-bottom-3x mb-2">
	        <div class="row">
	          <!-- Checkout Adress-->
	          	<div class="col-xl-9 col-lg-8">
		          @if(count($errors) > 0)
		            <div class="alert alert-danger alert-dismissible fade show margin-bottom-1x">
			            <span class="alert-close" data-dismiss="alert"></span><i class="icon-ban"></i>&nbsp;&nbsp;
			            <strong>Error alert:</strong>
				            <ul>
								@foreach($errors->all() as $error)
									<li> {{ $error }} </li>
								@endforeach
							</ul>
		            </div>
		          @endif
		            <h4>This is the details of the request</h4>
		            <hr>
		            <hr class="padding-bottom-1x">
		            
	          	</div>
	          	<!-- Sidebar          -->
	          	<div class="col-xl-3 col-lg-4">
		            <aside class="sidebar">
		              	<div class="padding-top-2x hidden-lg-up"></div>
		              	<section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
		                	<div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
		                  		<h4 class="text-light text-thin text-shadow">New Collection of</h4>
		                  		<h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="#">Shop Now</a>
		                	</div>
		              	</section>
		              	<div class="clearfix mb-30"></div>
		              	<section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
		                	<div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
		                  		<h4 class="text-light text-thin text-shadow">New Collection of</h4>
		                  		<h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="#">Shop Now</a>
		                	</div>
		              	</section>
		            </aside>
	          	</div>
	        </div>
      	</div>
  	<!--Page Content-->
@endsection

@section('script')
{{-- <script src="path/to/jquery.js"></script>  --}}

{{-- <script src="/dist/summernote.min.js"></script> --}}
{{-- <script src="/dist/summernoteinit.js"></script> --}}

<script src="/dist/trumbowyg.min.js"></script>
<script type="text/javascript">
//script to auto change states and its lgas
	$('#serState').change(function(){
		$.ajax({
			url: "state/location/"+$(this).val(),
			method: 'GET',
		})
		.done(function(data) {
			$location = $('#location');
			$location.removeAttr('disabled');//enable
			$location.children().remove();//clear the select tag first
			var dee = JSON.parse(data); //convert the json data to array here
			$.each(dee,function(index, value){
				$location.append("<option value='"+value.id+"' >"+ value.lga +"</option>");
			})
		});
	})

	//same logic as above but for
	$('#serCat').change(function(){
		$.ajax({
			url: "category/getscat/"+$(this).val(),
			method: 'GET',
		})
		.done(function(data) {
			$location = $('#subCat');
			$location.removeAttr('disabled');//enable
			$location.children().remove();//clear the kids of the select tag first
			var dee = JSON.parse(data); //convert the json data to array here
			$.each(dee,function(index, value){
				$location.append("<option value='"+value.id+"' >"+ value.sub_category +"</option>");
			})
		});
	})
</script>


<script type="text/javascript">
	$('select').selectize(options);
</script>

@endsection