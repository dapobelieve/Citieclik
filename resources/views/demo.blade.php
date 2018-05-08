<div class="gallery-wrapper">
	@foreach($service->servieImage())
		<div class="gallery-item">
			<a href={{$service->servieImage()}} data-hash="" data-size="1000x667"></a>
		</div>
	@endforeach
</div>

<div class="product-carousel owl-carousel">
	@foreach($service->servieImage())
		<div><img src={{$service->servieImage()}} alt="Product"></div>
	@endforeach
</div>

<ul class="product-thumbnails">
	
</ul>