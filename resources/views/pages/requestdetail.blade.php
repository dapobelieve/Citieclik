@extends('layout.template')
@section('style')
	 {{-- Summer Note --}}
  {{-- <link href="/assets/css/bootstrap.min.css" rel="stylesheet"> --}}
   <link href="/dist/ui/trumbowyg.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/dist/plugins/colors/ui/trumbowyg.colors.css"">
  {{-- <link rel="stylesheet" href="../css/nice-select.css"> --}}

@endsection

@section('title')
Request Details | Citieclik
@endsection

@section('content')
	<div class="page-title">
		<div class="container">
		<div class="column">
		<h1>{{ $requestData->serviceTitle() }}</h1>
		</div>
		<div class="column">
		<ul class="breadcrumbs">
		<li><a href="index-2.html">Home</a>
		</li>
		<li class="separator">&nbsp;</li>
		<li>Request</li>
		</ul>
		</div>
		</div>
	</div>
	<!-- Page Content-->
	<div class="container padding-bottom-3x mb-2">
		<div class="row"> 
		  <!-- Content-->
		  <div class="col-lg-10 offset-lg-1">
		    <!-- Post-->
		    <div class="single-post-meta">
		      <div class="column">
		        <div class="meta-link"><span>by</span>{{ $requestData->userz->getFullName() }}</div>
		        <div class="meta-link"><span>in</span><a href="#">Fashion,&nbsp;</a><a href="#">Travel</a></div>
		      </div>
		      {{-- <div class="column">
		        <div class="meta-link"><a href="#"><i class="icon-clock"></i>Feb 11, 2017</a></div>
		        <div class="meta-link"><a class="scroll-to" href="#comments"><i class="icon-speech-bubble"></i>3</a></div>
		      </div> --}}
		    </div>
		    <h2 class="padding-top-2x">{{ $requestData->serviceTitle() }}</h2>
		    <p class="my-editor">
		    	{{ $requestData->serviceDesc() }}
		    </p>
		    	

		    <div class="single-post-footer">
		      <div class="column"><a class="sp-tag" href="#">#design,</a><a class="sp-tag" href="#">&nbsp;#fashion,</a><a class="sp-tag" href="#">&nbsp;#travelling</a></div>
		      {{-- <div class="column">
		        <div class="entry-share"><span class="text-muted">Share post:</span>
		          <div class="share-links"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
		        </div>
		      </div> --}}
		    </div>
		  </div>
		</div>
	</div>

  	<!--Page Content-->
@endsection

@section('script')

<script src="/dist/trumbowyg.js"></script>
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
<script>
	/<script src="/dist/trumbowyg.min.js"></script>
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


<script type="text/javascript">
	$('select').selectize(options);
</script>

@endsection