@extends('layout.template')

@section('title')
Services | Citieclik
@endsection

@section('content')
<!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>All Services</h1>
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
          <div class="col-xl-9 col-lg-8 push-xl-3 push-lg-4">
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
              <div class="column">
                <div class="shop-sorting">
                  <label for="sorting">Filter by State:</label>
                  <select class="form-control" id="serState">
                    @foreach($states as $state)
                        <option sname="{{$state->state}}" value="{{$state->id}}">{{$state->state}}</option>
                    @endforeach
                  </select> 
                  <label class="locs" style="display:none" for="sorting">Filter by Location:</label>
                  {{-- <spa --}}
                  <select class="form-control locs" style="display:none" id="location">
                  </select>
                  {{-- </select>
                  <span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span> --}}
                </div>
              </div>
              <div class="column">
                  {{--  --}}
              </div>
            </div>
            <!-- Products Grid-->
            <div class="isotope-grid isodata cols-3 mb-2">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              <!-- Product-->
              @foreach($sdata as $data)
              <div 
                    class="isoitem grid-item 
                          {{$data->catty->slug}}
                          {{$data->slugIt($data->loca->lga)}} 
                          {{$data->slugIt($data->loca->state->state)}}
                    ">
                    <div class="product-card">
                      <div class="product-badge text-danger">{{$data->catty->slug}}, <small>{{$data->loca->state->state}}</small></div><a class="product-thumb" href="shop-single.html"><img src="/assets/img/shop/products/01.jpg" alt="Product"></a>
                      <h3 class="product-title"><a href="shop-single.html">{{$data->title}}</a></h3>
                      <h4 class="product-price">
                        {{-- <del>$99.99</del> --}}$49.99
                      </h4>
                      <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm">Details</button>
                      </div>
                    </div>
              </div>
              @endforeach
            </div>
            <!-- Pagination-->
            <nav class="pagination">
              <div class="column">
                <ul class="pages">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>...</li>
                  <li><a href="#">12</a></li>
                </ul>
              </div>
              <div class="column text-right hidden-xs-down"><a class="btn btn-outline-secondary btn-sm" href="#">Next&nbsp;<i class="icon-arrow-right"></i></a></div>
            </nav>
          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4 pull-xl-9 pull-lg-8">
            <aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Widget Categories-->
              <section class="widget widget-categories">
                <h3 class="widget-title">All Categories</h3>
                <ul>
                  @foreach($cats as $cat)
                      <li><a href="#" class="catz" data-filter="{{$cat->slug}}">{{$cat->category}}</a>{{-- <span>(1138)</span> --}}</li>
                  @endforeach
                  
                </ul>
              </section>
              <!-- Widget Price Range-->
             {{--  <section class="widget widget-categories">
                <h3 class="widget-title">Price Range</h3>
                <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                  <div class="ui-range-slider"></div>
                  <footer class="ui-range-slider-footer">
                    <div class="column">
                      <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
                    </div>
                    <div class="column">
                      <div class="ui-range-values">
                        <div class="ui-range-value-min">$<span></span>
                          <input type="hidden">
                        </div>&nbsp;-&nbsp;
                        <div class="ui-range-value-max">$<span></span>
                          <input type="hidden">
                        </div>
                      </div>
                    </div>
                  </footer>
                </form>
              </section> --}}
              <!-- Widget Brand Filter-->
              <section class="widget">
                <h3 class="widget-title">Filter by Sub Category</h3>
                <span id="subCatz">
                    <label class="custom-control custom-checkbox d-block">
                      <input class="custom-control-input" type="checkbox"><span class="custom-control-indicator"></span><span class="custom-control-description">Adidas&nbsp;<span class="text-muted">(254)</span></span>
                    </label>
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
<script type="text/javascript">
//js version of slug
    function slugIt(string) {
      return string
        .toString()
        .trim()
        .toLowerCase()
        .replace(/\s+/g, "-")
        .replace(/[^\w\-]+/g, "")
        .replace(/\-\-+/g, "-")
        .replace(/^-+/, "")
        .replace(/-+$/, "");
    }

    function isotopeIt(theValue)
    {
      $grid.isotope({ filter: "."+theValue });
    }

    //initialize isotope
    $grid = $('.isodata').isotope({
      itemSelector: '.isoitem',
      layoutMode: 'fitRows',
      fitRows: {
        gutter: 30
      },
      stagger: 30,
    });

    // filter based on the selected state
    $('.hereIt').on('change','#serState',function(event){
      //get value of currently selected option
        var filterValue = slugIt(this.options[this.selectedIndex].text);

        // console.log(filterValue);   
        //load lgas ajaxically       
        $('.locs').show();
        $.ajax({
          url: "service/state/location/"+$(this).val(),
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

        isotopeIt(filterValue);
     })

    //filter based on location aka lgas
    $('.hereIt').on('change','#location', function(event){
      var filterValue = slugIt(this.options[this.selectedIndex].text);
      isotopeIt(filterValue);
    })
// ==================Categories Section============================
$('.hereIt').on('click','.catz',function(event){
      event.preventDefault();
      //get value of currently clicked option
        var filterValueCat =  slugIt($(this).data('filter'));
        console.log(filterValueCat);   
        //load lgas ajaxically       
        // $('.locs').show();
        // $.ajax({
        //   url: "service/state/location/"+$(this).val(),
        //   method: 'GET',
        // })
        // .done(function(data) {
        //   $location = $('#location');
        //   $location.removeAttr('disabled');//enable
        //   $location.children().remove();//clear the select tag first
        //   var dee = JSON.parse(data); //convert the json data to array here
        //   $.each(dee,function(index, value){
        //     $location.append("<option value='"+value.id+"' >"+ value.lga +"</option>");
        //   })
        // });

        isotopeIt('fashion-beauty');
     })




</script>
@stop