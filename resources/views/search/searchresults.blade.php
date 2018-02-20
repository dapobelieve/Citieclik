@extends('layout.template')

@section('title')
Services | Citieclik
@endsection

@section('content')
<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Search Result</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>All Services</li>
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
            {{-- <div class="shop-toolbar padding-bottom-1x mb-2">
              <div class="column">
                @include('service.layout.state-filter')
              </div>
              <div class="column">
              </div>
            </div> --}}
            <!-- Products Grid-->
            @if (!$sdata->count())
              <h4>We could not find any, please search for another</h4>
            @else
              <h4>We found {{ $sdata->count() }} results</h4>
              @include('search.template.results')
            @endif
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
@endsection

@section('script')
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/assets/js/isotope.js"></script>
<script>
  var url1 = "service/state/location/";
  var url2 = "service/category/getscat/";
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
  console.log(event.target.value);
  var inclusives = [];
  // inclusive filters from checkboxes
  checkboxes.each( function( i, elem ) {
    // if checkbox, use value if checked
    if ( elem.checked ) {
      inclusives.push( elem.value );
    }
  });
  // console.log(inclusives);

    // var filterValue = inclusives.length ? inclusives.join(', ') : '*';
    // console.log(filterValue); 
    // isotopeIts(filterValue);
  })
</script>
@stop