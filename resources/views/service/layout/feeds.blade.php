<div class="isotope-grid isodata cols-3 mb-2">
	<div class="gutter-sizer"></div>
	<div class="grid-sizer"></div>
	<!-- Product-->
    {{-- {{ dd($sdata->first()->images()->first()) }} --}}
	@foreach($sdata as $data)
		<div class="isoitem grid-item 
		{{$data->slugIt($data->catty->slug)}} 
		{{$data->slugIt($data->subCat->sub_category)}} 
		{{$data->slugIt($data->loca->lga)}} 
		{{$data->slugIt($data->loca->state->state)}}">
					<div class="product-card mybox">
						<div class="product-badge text-primary text-bold">{{-- {{$data->catty->category}} --}}</div><br>
						<div class="text-right"><small class=" text-black">{{-- {{$data->loca->state->state}} --}}</small></div>
						<a 
							class="product-thumb" 
							href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
							<img src="{{ $data->getImages() }}" alt="{{$data->serviceTitle()}}" style="width: max; height: 200px !important;">
						</a>
						<h3 class="product-title"><a href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">{{$data->serviceTitle()}}</a></h3>
						{{-- <h4 class="product-price">&#8358;49.99</h4> --}}
						<div class="product-buttons">
							{{-- <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button> --}}
							{{-- <a href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}" class="btn btn-outline-primary btn-sm">Details</a> --}}
						</div>
					</div>
		</div>
	@endforeach
</div>