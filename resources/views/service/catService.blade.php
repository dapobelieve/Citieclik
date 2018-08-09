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
              <li><a href="{{ route('home') }}">Home</a>
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
            <div class="isotope-grid isodata cols-3 mb-2">
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
                            <a class="product-thumb" 
                                href=" {{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
                                    {!! $data->getImages() !!}
                                    {{-- <img src="https://res.cloudinary.com/citieclik/image/upload/w_150,h_100,c_fill/v1529923725/services/ffwsh3t8uxlzkqpsmspq.jpg" alt=""> --}}
                            </a>
                            <h4 class="product-title" style="margin-bottom: 0px !important">
                                <a href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
                                </a>
                            </h4>
                            <div class="details">
                                <h6 class="ser-title">
                                {{ str_limit(title_case($data->serviceTitle()), 33) }}
                                </h6>
                                <span style="color: #2bd519" class="price">
                                    @if(!$data->price == 0)
                                    <span> 
                                        &#x20A6</span>{{  number_format($data->price) }}
                                    </span>
                                    @endif
                            </div>
                            {{-- <h4 class="product-price">&#8358;49.99</h4> --}}
                            <div class="product-buttons">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4 pull-xl-9 pull-lg-8">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Widget Categories-->
                           
              <section class="widget subCatWid">
                <h3 class="sideTexts widget-title">Sub Categories</h3>
                <span class="subTexts2" id="subCatz">
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