<aside class="sidebar">
              <div class="padding-top-2x hidden-lg-up"></div>
              <!-- Widget Categories-->
              <section class="widget widget-categories">
                @if($type == 's')
                  <h3 class="widget-title">Service Categories</h3>
                @elseif($type == 'p')
                  <h3 class="widget-title">Product Categories</h3>
                @endif
                <ul>
                  @foreach($cats->where('type', $type) as $cat)
                      <li><a href="#" class="catz" data-id="{{$cat->id}}" data-filter="{{$cat->slug}}">{{$cat->category}}</a>{{-- <span>(1138)</span> --}}</li>
                  @endforeach
                  
                </ul>
              </section>
             
              <section class="widget subCatWid" style="display:none" >
                <h3 class="widget-title">Filter by Sub Category</h3>
                <span id="subCatz">
                    
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
              {{-- <section class="promo-box" style="background-image: url(/assets/img/banners/02.jpg);">
                <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                  <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                  <h3 class="text-bold text-light text-shadow">Sunglassess</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
                </div>
              </section> --}}
            </aside>