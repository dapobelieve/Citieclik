@extends('layout.template')

@section('title')
Welcome | Citieclik
@endsection

@section('topcat')
{{-- <div class="browse-cat">
    <a href="#">Browse by Category</a>
</div> --}}
    <div class="homecat">
        @foreach($cats as $data)
            <div class="acat">
                <a  href="{{ route('category.index', [$data->slug]) }}">{{ $data->name }}</a>
                <ul class="top-sub-nav">
                    @foreach($data->categories as $layer)
                    <li>
                        <a href="#">{{ $layer->category }}</a>
                    </li>
                    @endforeach
                </ul>  
            </div>
        @endforeach
    </div>
@stop

@section('content')
    <!-- Main Slider-->
    <div class="hero-slider text-center showcase">
      <div class="container padding-top-6x">
        <div id="carouselContent" class="carousel slide bg-chrome item" data-ride="carousel">
          <h1 class="home-text">Connecting the City with a Click</h1>
          <div class="carousel-inner text-white align-items-center" role="listbox">
              <div class="row align-items-center carousel-item align-items-center flex-column p-4 text-center">
                  <form class="form-inline text-center padding-bottom-2x" action="{{ route('search.results') }}">
                    <div class="form-group text-center">
                      {{-- <label class="sr-only" for="inlineFormInputGroupUsername2">What are you looking for?</label> --}}
                      <div class="input-group form-group" style="margin-right: 2px !important;">
                        {{-- <div class="input-group-addon"></div> --}}
                        <input type="text" class="form-control" placeholder="looking for?" name="search" id="">
                      </div>
                      <div class="input-group form-group" style="margin-right: 2px !important;">
                        {{-- <div class="input-group-addon"></div> --}}
                        <span id="sList2"></span>
                        
                      </div>
                      <div class="input-group form-group" method="get" style="margin-right: 0px !important;">
                        <select style="color: #bdadb9" class="form-control " id="select-input" name="state">
                          <option  value="">where?</option>
                          @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->state }}</option>
                          @endforeach
                        </select>
                        {{-- <input class="form-control form-control-square form-control-lg" type="email" placeholder="Location"> --}}
                      </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary transparent "><i class="icon-search"></i> Search</button>
                          </div>
                    </div>
                    {{-- <button type="submit" class="btn btn-square btn-primary">Submit</button> --}}
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Recent Ads Display -->
    <div class="recent_ads">
        @foreach($ads as $data)
            <div class="recent_ads_item">
                <div class="item_image">
                    <a class="img_wrapper" href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
                        {!! $data->getImages() !!}
                    </a>
                </div>
                <div class="item_details ">
                    <div class="ser-title">
                        <a href="{{route('service.detail',['username' => $data->userz->username,'slug' => $data->slug])}}">
                            {{ $data->serviceTitle() }}
                        </a>
                    </div>
                    <div style="font-size: 15px" class="location">
                        {{ $data->state->state }}, {{ $data->loca->lga }}
                    </div>
                    <div class="item_price">
                        <span style="color: #2bd519" class="ser-price">
                        @if(!$data->price == 0)
                        <span> 
                            &#x20A6</span>{{  number_format($data->price) }}
                        </span>
                        @else 
                            Negotiable
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="col-auto more-ads">
            <button style="background-color: green;" type="submit" class="btn btn-primary ">
                More Ads
            </button>
        </div> --}}
    </div>
    <!--Recent Ads ends here -->

      <section class="padding-bottom-none">
            <div class="fw-section   padding-top-4x padding-bottom-4x" style="background-image: url(/assets/img/banners/home02.jpg);"><span class="overlay rounded" style="opacity: .35;"></span>
              <div class="text-center">
                <h3 class="display-4 text-normal text-white text-shadow mb-1">Become a </h3>
                <h2 class="display-2 text-bold text-white text-shadow">SALES AGENT</h2>
                <h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">Earn on CitieClik</h4><br>
                <a class="btn btn-primary btn-lg" style="background-color: #03A9F4" href="{{ route('salesagent.register') }}"><i class="icon-signal"></i>&nbsp;Get Started</a>
              </div>
            </div>
      </section>
        {{-- <br> --}}
      <section class="padding-bottom-none">
          
          <div id="particles-js" class="container-fluid row col-md-12 padding-bottom-2x mybg" style="color: #fff !important; margin-left: 0px !important;">
                <div class="col-md-12 text-center padding-top-2x" style="color: #ffffff !important;">
                  <h1 class="text-center margin-bottom-2x" style="color: #fff;">How it works at Citieclik</h1>
                </div>
              <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block mx-auto mb-4" src="assets/img/icons/step1.png" alt="Register">
                <h3 style="color: #00aeef;">Step 1</h3>
                <h4 style="color: #fff !important; ">Register an Account</h4>
                <p class="text-muted margin-bottom-none" style="color: #fff !important;">Create your free account to get started</p>
              </div>
              <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block mx-auto mb-4" src="assets/img/icons/step2.png" alt="Verify">
                <h3 style="color: #00aeef;">Step 2</h3>
                <h4 style="color: #fff !important; ">Verify Your Account</h4>
                <p class="text-muted margin-bottom-none" style="color: #fff !important;">Verify your account for full access to the main features</p>
              </div>
              <div class="col-md-4 col-sm-6 text-center mb-30"><img class="d-block mx-auto mb-4" src="assets/img/icons/step3.png" alt="Add / Request">
                <h3 style="color: #00aeef;">Step 3</h3>
                <h4 style="color: #fff !important; ">Add Services & Request</h4>
                <p class="text-muted margin-bottom-none" style="color: #fff !important;">Add your own services or make requests</p>
              </div>
          </div>       
        
      </section>
      <!-- Featured Products Carousel-->
      <section class="padding-top-none padding-bottom-none margin-bottom-none">
        <div class="container-fluid row padding-left-none padding-right-none">
          <div class="col-md-5 margin-left-none padding-left-none">
            <img src="/assets/img/banners/jobsearch.jpg">
          </div>
          <div class="col-md-7 text-center padding-top-2x padding-right-none margin-left-none" style="background-color: #e7e7e7;">
            <h3 class="h2 text-normal mb-1">Coming soon!!!</h3>
            <h2 class="display-2 text-bold mb-2">Job Search</h2>
            <h4 class="h3 text-normal mb-4">...on citieclik platform</h4>
          </div>
        </div>
      </section>      
@endsection

@section('script')
<script src="/assets/js/home.js"></script>
<script type="text/javascript">
 @if(Session::has('authMsg'))
  swal({
  title: "Alert",
  text: "{{ Session::get('authMsg')}}",
  type: 'warning'
})
@elseif(Session::has('success'))
  swal({
	title: "{{Session::get('title')}}",
	text:  "{{Session::get('success')}}",
	type: 'info'
  })
@endif
</script>
@stop