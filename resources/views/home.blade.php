@extends('layout.template')

@section('title')
Welcome | Citieclik
@endsection

@section('content')
    <!-- Main Slider-->
    <div class="hero-slider text-center" style="background-image: url(/assets/img/hero-slider/c1.jpg); color: #fff !important; ">
      <div class="container padding-top-6x">
        <div id="carouselContent" class="carousel slide bg-chrome item" data-ride="carousel">
          <h1 class="" style="color: #fff !important; text-shadow: 0px 0px 6px rgb(6, 6, 6); font-weight: 600;">Connecting the City with a Click</h1>
          <div class="carousel-inner text-white align-items-center" role="listbox">
              <div class="row align-items-center carousel-item align-items-center flex-column p-4 text-center">
                  <form class="form-inline text-center padding-bottom-2x" action="{{ route('search.results') }}">
                    <div class="form-group text-center">
                      {{-- <label class="sr-only" for="inlineFormInputGroupUsername2">What are you looking for?</label> --}}
                      <div class="input-group form-group" style="margin-right: 2px !important;">
                        {{-- <div class="input-group-addon"></div> --}}
                        <select class="form-control" onchange="getCats(this.value)" id="select-input" name="category">
                                <option>Select a Category</option>
                                <option value="p">Products</option>
                                <option value="s">Services</option>
                        </select>
                      </div>
                      <div class="input-group form-group" style="margin-right: 2px !important;">
                        {{-- <div class="input-group-addon"></div> --}}
                        <span id="sList2"></span>
                        
                      </div>
                      <div class="input-group form-group" method="get" style="margin-right: 0px !important;">
                        <select class="form-control " id="select-input" name="state">
                          <option>Pick a Location</option>
                          @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->state }}</option>
                          @endforeach
                        </select>
                        {{-- <input class="form-control form-control-square form-control-lg" type="email" placeholder="Location"> --}}
                      </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary "><i class="icon-search"></i> Search</button>
                          </div>
                    </div>
                    {{-- <button type="submit" class="btn btn-square btn-primary">Submit</button> --}}
                  </form>

                  <form class="form-inline text-center">
                    {{-- @if(Auth::check()) --}}
                    <div class="col-xs-12 form-group">
                      <div class="col-xs-6"><a href="{{ route('addproduct') }}#" style="background-color: #0da9ef" class="btn btn-danger mybox">Post Product</a></div>
                      <div class="col-xs-6"><a href="{{ route('addservice') }}" class="btn btn-danger mybox">Post Service</a></div>
                      <div class="col-xs-6"><a href="{{ route('request.add') }}" style="background-color: #0da9ef" class="btn btn-primary mybox">Make Request</a></div>
                    </div>
                    {{-- @endif --}}
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Top Categories-->
      <section class="container padding-top-1x text-center">
         <h3 class="text-center mb-30">Explore our top Categories</h3>
        <div class="row justify-content-md-center">
          
          @foreach($cats as $cat)
            <div class="col-md-3 col-sm-6">
              <div class="card mb-30 mybox"><a class="card-img-tiles" href="{{route('category', $cat->slug)}}">
                <div class="inner">
                  <div class="main-img"><img src="/assets/img/category/{{$cat->image}}" alt="Category"></div>
                </div></a>
                <div class="card-block text-center">
                  <h6 class="card-title">{{$cat->category}}</h6>
                  {{-- <a class="" href="{{route('category', $cat->slug)}}">View Category</a> --}}
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>
      <section class="padding-bottom-none">
        {{-- <div class="row">
          <div class=" col-lg-12 "> --}}
            <div class="fw-section   padding-top-4x padding-bottom-4x" style="background-image: url(/assets/img/banners/home02.jpg);"><span class="overlay rounded" style="opacity: .35;"></span>
              <div class="text-center">
                <h3 class="display-4 text-normal text-white text-shadow mb-1">Become a </h3>
                <h2 class="display-2 text-bold text-white text-shadow">SALES AGENT</h2>
                <h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">Earn on CitieClik</h4><br>
                <a class="btn btn-primary btn-lg" style="background-color: #03A9F4" href="{{ route('salesagent.register') }}"><i class="icon-signal"></i>&nbsp;Get Started</a>
              </div>
            </div>
          {{-- </div>
        </div> --}}
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