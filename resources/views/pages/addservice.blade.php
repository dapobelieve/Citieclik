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
@if($tdata == 'p')
	Post Product | Citieclik
@elseif($tdata == 's')
	Add service | Citieclik
@endif
@endsection

@section('content')
	<div class="page-title">
        <div class="container">
          <div class="column">
          	@if($tdata == 'p')
          		<h1>Post Product Details</h1>
          	@elseif($tdata == 's')
            	<h1>Add New Service </h1>
            @endif
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              {{-- <li><a href="index-2.html">Home</a> --}}
              </li>
              <li class="separator">&nbsp;</li>
              <li>Add Service </li>
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
		            @if($tdata == 'p')
		          		<h4>Product Details</h4>
		          	@elseif($tdata == 's')
		            	<h4>Add New Service </h4>
		            @endif
		            <hr>
		            <hr class="padding-bottom-1x">
		            <form class="" role="form" method="POST" enctype="multipart/form-data" action="{{route('addservice')}}">
			            <div class="row" style="margin-top: 20px;">
			              	<div class="col-sm-12">
				                <div class="form-group {{ $errors->has('serTitle') ? ' has-error' : '' }}">
				                  	<label for="checkout-fn">
				                  		@if($tdata == 'p')
				                  			Product Name
				                  		@else
				                  			Service Title
				                  		@endif
				                  	</label>
				                  	<input class="form-control" name="serTitle"  type="text" placeholder="" value="{{ Request::old('serTitle') ?: '' }}" >
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
					                    @if($tdata == 'p')
					                    	@foreach($cats->where('type', 'p') as $cat)
					                        	<option value="{{$cat->id}}">{{$cat->category}}</option>
					                    	@endforeach
					                    @elseif($tdata == 's')
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
				                  	<select class="form-control" name="serState" id="serState" value="{{ Request::old('serState') ?: ''  }}">
				                    	<option>Choose a State</option>
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
					                <select class="form-control" name="location" disabled id="location" value="{{ Request::old('location') ?: ''  }}">
					                    <option>Choose Location</option>
					                    
					                </select>
			                  		@if ($errors->has('location'))
										<p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('location') }}</p>
				                	@endif
				                </div>
			              	</div>
			            </div>
			            <div class="row">
			            	<div class="col-md-6">
				            	<div class="form-group">
					              	<label class="col-form-label">Select Image</label>
					              	<div class="">
						                <div class="custom-file">
						                  	<input class="custom-file-input form-control-file" name="serImg[]" type="file" accept="image/*" onchange="preview_image(event)" multiple><span class="custom-file-control"></span>
						                </div>
						            </div>
					            </div>
				            </div>
				            <div class="col-md-6">
				            	<div class="form-group">
				            		<label class="col-form-label" for="file-preview">Image Preview</label>
				            		<img style="width:150px; height:auto " class="d-block mx-auto img-thumbnail mb-3" id="output_image"/>
				            	</div>
				            </div>
			            </div>
			            @if($tdata == 'p')
			            <div class="col-sm-12">
			                <div class="form-group {{ $errors->has('serTitle') ? ' has-error' : '' }}">
			                  	<label for="checkout-fn">
			                  			Product Price
			                  	</label>
			                  	<input class="form-control" name="serPrice" type="number" placeholder="Price " value="{{ Request::old('serPrice') ?: '' }}" >
			                  	@if ($errors->has('serPrice'))
									<p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('serPrice') }}</p>
			                	@endif
			                </div>
		              	</div>
		              	@endif		            
			            <div class="row padding-bottom-1x">
			            	<div class="col-sm-12">
			            		<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
				            		<label for="checkout-description">Description</label>
				            		<textarea class="my-editor" name="description" value="{{ Request::old('description') ?: ''  }}" placeholder="detailed description goes here..."></textarea>
			                  		@if ($errors->has('description'))
										<p class="help-block text-danger"><i class="icon-circle-cross"></i>&nbsp;{{ $errors->first('description') }}</p>
				                	@endif
			            		</div>
			            	</div>
			            </div>
			            @if($tdata == 'p')
			            	<input type="hidden" name="typo" value="p">
			            @elseif($tdata == 's')
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
		            <aside class="sidebar">
		            </aside>
	          	</div>
	        </div>
      	</div>
  	<!--Page Content-->
@endsection

@section('script')


<script src="/dist/trumbowyg.min.js"></script>
<script src="/assets/js/addservice.js"></script>


<script type="text/javascript">
	$('.my-editor').trumbowyg({
		// prefix: 'modern-ui',
		imageWidthModalEdit: true,
		autogrow: true,
	 	btns: [
	        // ['viewHTML'],
	        ['formatting'],
            'btnGrp-semantic',
            ['superscript', 'subscript'],
            // ['link'],
            'btnGrp-justify',
            'btnGrp-lists',
            ['horizontalRule'],
            // ['removeformat'],
            ['backColor'],
	    ]
	});
</script>

@endsection