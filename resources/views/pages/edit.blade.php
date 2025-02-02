@extends('layout.template')
@section('style')
	 {{-- Summer Note --}}
  {{-- <link href="/assets/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="/dist/ui/trumbowyg.min.css" rel="stylesheet">
  {{-- <link rel="stylesheet" href="../css/nice-select.css"> --}}
  <script type='text/javascript'>
	
	function preview_image(event) 
	{
	 var reader = new FileReader();
	 reader.onload = function()
	 {
	  var output = document.getElementById('output_image');
	  output.src = reader.result;
	 }
	 reader.readAsDataURL(event.target.files[0]);
	}
	</script>
@endsection

@section('title')
Edit service | Citieclik
@endsection

@section('content')
	<div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Edit</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Edit</li>
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
		            <h4>Edit Service</h4>
		            <hr>
		            <hr class="padding-bottom-1x">
		            <form 
		            	class="" 
		            	role="form" 
		            	method="POST" 
		            	enctype="multipart/form-data" 
		            	action="{{route('service.edit', $sdata->id)}}">

		            {{-- {{method_field('PUT')}} --}}
			            <div class="row" style="margin-top: 20px;">
			              	<div class="col-sm-12">
				                <div class="form-group {{ $errors->has('serTitle') ? ' has-error' : '' }}">
				                  	<label for="checkout-fn">Service Title</label>
				                  	<input class="form-control" name="serTitle" type="text" placeholder="name of your service programmer, hair stylist, barber etc" value="{{ old('serTitle') ?: $sdata->title }}" required>
				                  	@if ($errors->has('serTitle'))
										<p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('serTitle') }}</p>
					                	{{-- <span class="help-block"> </span> --}}
				                	@endif
				                </div>
			              	</div>
			            </div>
			            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group {{ $errors->has('serCat') ? ' has-error' : '' }}">
                                    <label for="checkout-country">Category</label>
                                    <select class="form-control" onchange="getSubCat(this.value)" name="serCat" id="serCat" value="{{ Request::old('serCat') ?: ''  }}">
                                        <option>Choose a Category</option>
                                        @if($sdata->type == 'p')
                                            @foreach($cats->where('type', 'p') as $cat)
                                                <option value="{{$cat->id}}">{{$cat->category}}</option>
                                            @endforeach
                                        @elseif($sdata->type == 's')
                                            @foreach($cats->where('type', 's') as $cat)
                                                <option value="{{$cat->id}}">{{$cat->category}}</option>
                                            @endforeach
                                        @endif
                                        
                                    </select>
                                    @if ($errors->has('serCat'))
                                        <p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('serCat') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span id="subcatty"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <span id="subcatty2"></span>
                                </div>
                            </div>

                        </div>
			            <div class="row">
			              	<div class="col-sm-6">
				                <div class="form-group {{ $errors->has('serState') ? ' has-error' : '' }}">
				                  	<label for="checkout-country">State</label>
				                  	<select class="form-control" name="serState" id="serState" value="{{ old('serState') ?: ''  }}">
				                    	<option value="{{$sdata->state->id}}">{{$sdata->state->state}}</option>
					                    @foreach($states as $state)
					                        <option value="{{$state->id}}">{{$state->state}}</option>
					                    @endforeach
				                  	</select>
				                  	@if ($errors->has('serState'))
										<p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('serState') }}</p>
				                	@endif
				                </div>
			              	</div>
			              	<div class="col-sm-6">
				                <div class="form-group {{ $errors->has('location') ? ' has-error' : '' }}">
				                  	<label for="checkout-country">Location</label>
					                <select class="form-control" name="location"  id="location" value="{{ Request::old('location') ?: ''  }}">
					                    <option value="{{$sdata->loca->id}}">{{$sdata->loca->lga}}</option>
					                    
					                </select>
			                  		@if ($errors->has('location'))
										<p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('location') }}</p>
				                	@endif
				                </div>
			              	</div>
			            </div>
			            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Select Image(s) *only jpg, jpeg & png formats allowed. Max size allowed is 2mb.</label>
                                    <div class="">
                                        <div class="custom-file">
                                            <input type="file" name="image[]" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>			            
			            <div class="row padding-bottom-1x">
			            	<div class="col-sm-12">
			            		<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
				            		<label for="checkout-description">Description</label>
				            		<textarea class="my-editor" name="description" value="{{ old('description') ?: ''  }}" placeholder="Your description goes here...">{{$sdata->description}}</textarea>
			                  		@if ($errors->has('description'))
										<p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('description') }}</p>
				                	@endif
			            		</div>
			            	</div>
			            </div>
			             @if($sdata->type == 'p')
			            	<input type="hidden" name="typo" value="p">
			            @elseif($sdata->type == 's')
			            	<input type="hidden" name="typo" value="s">
			            @endif
			            <div class="form-group">
			            	<button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
			            </div>
			            {{csrf_field()}}
			        </form>
	          	</div>
	          	<!-- Sidebar          -->
	          	<div class="col-xl-3 col-lg-4">
		            {{-- <aside class="sidebar">
		              	<div class="padding-top-2x hidden-lg-up"></div>
		              	<!-- Order Summary Widget-->
		              	<section class="widget widget-order-summary">
		                	<h3 class="widget-title">Order Summary</h3>
		                	<table class="table">
				                <tr>
				                    <td>Cart Subtotal:</td>
				                    <td class="text-medium">$289.68</td>
				                </tr>
				                <tr>
				                    <td>Shipping:</td>
				                    <td class="text-medium">$22.50</td>
				                </tr>
				                <tr>
				                    <td>Estimated tax:</td>
				                    <td class="text-medium">$3.42</td>
				                </tr>
				                <tr>
				                    <td></td>
				                    <td class="text-lg text-medium">$315.60</td>
				                </tr>
		                	</table>
		              	</section>
		              <!-- Featured Products Widget-->
		              	<section class="widget widget-featured-products">
		                	<h3 class="widget-title">Recently Viewed</h3>
			                <!-- Entry-->
			                <div class="entry">
			                  	<div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/01.jpg" alt="Product"></a></div>
			                  	<div class="entry-content">
			                    	<h4 class="entry-title"><a href="shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>
			                  	</div>
			                </div>
		                	<!-- Entry-->
			                <div class="entry">
			                  	<div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/02.jpg" alt="Product"></a></div>
			                  	<div class="entry-content">
			                    	<h4 class="entry-title"><a href="shop-single.html">Top-Sider Fathom</a></h4><span class="entry-meta">$90.00</span>
			                  	</div>
			                </div>
		                	<!-- Entry-->
		                	<div class="entry">
		                  		<div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/03.jpg" alt="Product"></a></div>
		                  		<div class="entry-content">
		                    		<h4 class="entry-title"><a href="shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>
		                  		</div>
		                	</div>
		                	<!-- Entry-->
		                	<div class="entry">
		                  		<div class="entry-thumb"><a href="shop-single.html"><img src="img/shop/widget/04.jpg" alt="Product"></a></div>
		                 		<div class="entry-content">
		                    		<h4 class="entry-title"><a href="shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>
		                  		</div>
		                	</div>
		              	</section>
		              	<!-- Promo Banner-->
		              	<section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
		                	<div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
		                  		<h4 class="text-light text-thin text-shadow">New Collection of</h4>
		                  		<h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="shop-grid-ls.html">Shop Now</a>
		                	</div>
		              	</section>
		            </aside> --}}
	          	</div>
	        </div>
      	</div>
  	<!--Page Content-->
@endsection

@section('script')

<script type="text/javascript" src="/js/jquery.min.js"></script>
<script src="/dist/trumbowyg.min.js"></script>
<script type="text/javascript">
//script to auto change states and its lgas
	$('#serState').change(function(){
		$.ajax({
			url: "state/"+$(this).val(),
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
</script>
<script src="/assets/js/addservice.js"></script>
<script type="text/javascript">
	$('.my-editor').trumbowyg({
		autogrow: true,
	 	btns: [
	        // ['viewHTML'],
	        ['formatting'],
	        'btnGrp-semantic',
	        ['superscript', 'subscript'],
	        ['link'],
	        'btnGrp-justify',
	        'btnGrp-lists',
	        ['horizontalRule'],
	        ['removeformat'],
	    ]
	});   
</script>

@endsection