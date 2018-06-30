@section('style')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@stop
<div class="isotope-grid isodata category-items cols-3 mb-2">
	<div class="gutter-sizer"></div>
	<div class="grid-sizer"></div>

	@foreach($sdata as $data)
		<div class="isoitem grid-item 
            		{{$data->slugIt($data->catty->slug)}} 
            		{{$data->slugIt($data->subCat->sub_category)}} 
            		{{$data->slugIt($data->loca->lga)}} 
            		{{$data->slugIt($data->loca->state->state)}}"
        >
    		<div class="product-card mybox">
    			<div class="product-badge text-primary text-bold">{{-- {{$data->catty->category}} --}}</div><br>
    			<div class="text-right"><small class=" text-black">{{-- {{$data->loca->state->state}} --}}</small></div>
    			<a 
    				class="product-thumb" 
    				href=" {{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
    				<img src="{{ $data->getImages() }}" alt="{{$data->serviceTitle()}}" style="width: max; height: 200px !important;">
    			</a>
    			<h4 class="product-title">
                    <a href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
                        {{ title_case($data->serviceTitle()) }}
                    </a>
                </h4>
    			{{-- <h4 class="product-price">&#8358;49.99</h4> --}}
    			<div class="product-buttons">
    			</div>
    		</div>
		</div>
	@endforeach
</div>
{{-- <nav class="pagination"> --}}
        {{ $sdata->render() }}
{{-- </nav> --}}