@extends('layout.template')

@section('title')
{{$catName}} Services
@endsection

@section('content')
<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Services | {{$catName}}</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index-2.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Services</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row hereIt">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 push-xl-3 push-lg-4">
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
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Widget Categories-->
                           
              <section class="widget subCatWid">
                <h3 class="widget-title">Sub Categories</h3>
                <span id="subCatz">
                @foreach($subCats as $subCat)
                    <label class="custom-control custom-checkbox d-block">
                           <input class="custom-control-input" type="checkbox" value=".{{$subCat->slug}}">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">{{$subCat->sub_category}}&nbsp;
                            {{-- <span class="text-muted">(254)</span></span> --}}
                    </label>
                @endforeach
                </span>
              </section>
              <!-- Widget Size Filter-->
              {{-- <section class="widget">
                <h3 class="widget-title">Filter by Size</h3>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">XL&nbsp;<span class="text-muted">(208)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">L&nbsp;<span class="text-muted">(311)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">M&nbsp;<span class="text-muted">(485)</span></span>
                </label>
                <label class="custom-control custom-checkbox d-block">
                  <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">S&nbsp;<span class="text-muted">(213)</span></span>
                </label>
              </section> --}}
              <!-- Promo Banner-->
              <section class="promo-box" style="background-image: url(/assets/img/banners/02.jpg);">
                <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                  <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                  <h3 class="text-bold text-light text-shadow">Sunglassess</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
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
  var url1 = "category-h/state/";
</script>
<script src="/assets/js/service.js"></script>
<script type="text/javascript">

function isotopeIts(theValue)
{
  $grid.isotope({ filter: theValue });
}


  var checkboxes = $('#subCatz input');
  checkboxes.change( function() {
  // map input values to an array
  var inclusives = [];
  // inclusive filters from checkboxes
  checkboxes.each( function( i, elem ) {
    // if checkbox, use value if checked
    if ( elem.checked ) {
      inclusives.push( elem.value );
    }
  });
    var filterValue = inclusives.length ? inclusives.join(', ') : '*';
    // console.log(filterValue);
    isotopeIts(filterValue);
  })
</script>

@stop