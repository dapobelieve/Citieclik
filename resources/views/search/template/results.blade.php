@foreach($sdata as $data)
	<div class="card mb-4">
      	<div class="card-header">Category: <span class="badge badge-pill badge-primary">{{$data->catty->category}}</span></div>
      	<div class="card-block">
        	<div class="d-flex"><a class="pr-4 hidden-xs-down" href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}" style="max-width: 225px;"><img src={{$data->getImages()}} alt="Product" height="50" style="height: 150px !important;"></a>
          		<div>
            		<h5><a class="navi-link" href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">{{$data->title}}</a></h5>
		            <h6>
		              {{-- <del class="text-muted">$99.99</del> $49.99 --}}
		            </h6>
            		<div class="product-buttons">
		              <a href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}" style="color: #0da9ef; text-transform: capitalize;" >Details</a>
		            </div>
          		</div>
        	</div>
      	</div>
    </div>
@endforeach