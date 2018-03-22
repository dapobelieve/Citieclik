@extends('profile.layout.template')


@section('title')
Services | Citieclik
@endsection

@section('style')

 <style>
        *{margin: 0;padding:0px}

      
        .showLeft{
            text-shadow: none !important;
            color:#fff !important;
        }

        .icons li {
            background: none repeat scroll 0 0 #b5a4a4;
            height: 4px;
            width: 4px;
            line-height: 0;
            list-style: none outside none;
            margin-top: 3px;
            vertical-align: top;
            border-radius:50%;
            pointer-events: none;
        }

        .btn-left, .btn-right {
            position: absolute;
        }

        .dropbtn {
            color: white;
            font-size: 16px;
            border: none;*/
            cursor: pointer;
        }
        .show {display:block;}
</style>
@stop
@section('profileContent')
            <div class="col-lg-8">
              <div class="padding-top-2x mt-2 hidden-lg-up"></div>
              <!-- Wishlist Table-->
              <div class="table-responsive wishlist-table  margin-bottom-none">
                {{-- <table class="table">
                  <thead>
                    <tr>
                      <th>Services</th>
                      <th class="text-center"><a class="btn btn-sm btn-outline-primary" href="{{route('addservice')}}">Add new service</a></th>
                    </tr>
                  </thead>
                </table> --}}
              {{-- <div class="slimScroll"> --}}
                  <div class="container service-list">
                    @if($user->getUserServices('s')->count())
                        @foreach($user->getUserServices('s') as $servy) 
                            <div class="row">
                                <div class="col-sm-6 col-md-9">
                                    <div class="product-item"><a class="product-thumb" href="shop-single.html">
                                        <img src={{$servy->servieImage()}} alt="Service Image"></a>
                                          <div class="product-info">
                                            <h4 class="product-title"><a href="shop-single.html">{{$servy->title}}</a></h4>
                                            <div class="text-lg text-medium text-muted">Category: {{$servy->catty->category}}</div>
                                            <div>Posted:
                                              <div class="d-inline text-success">{{$servy->created_at->diffForHumans()}}</div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3" style="padding-left:100px">
                                     @if(Auth::check() && Auth::user()->id == $user->id)
                                        <span class="dropdown">
                                            <!-- three dots -->
                                            <ul style="cursor:pointer" class="dropbtn icons btn-right showLeft" >
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                             <div class="dropdown-menu  mybox" style="min-width:0rem; margin-top 12rem"  aria-labelledby="dropdownMenuButton dropdown-menu-left">
                                             <form method="GET" action="{{route('service.edit', $servy->id)}}">
                                                 <input class="dropdown-item text-primary" style="cursor:pointer" type="submit" value="Edit">
                                                 {{csrf_field()}}
                                             </form>
                                             <hr>
                                             <form method="POST" class="deletey" action="{{route('service.delete', $servy->id)}}">
                                                 <input class="dropdown-item text-danger" style="cursor:pointer" type="submit" value="Delete">
                                                 {{method_field('DELETE')}}
                                                 {{csrf_field()}}
                                             </form>
                                            </div>
                                        </span>
                                    @endif
                                </div>
                            </div> 
                        @endforeach
                    @else
                        <h2>No Services </h2>
                    @endif
                  </div>
                {{-- </div> --}}
                <br>
                <br>
                <a class="btn btn-sm btn-outline-success" href="{{route('addservice')}}">Add new service</a>
              </div>
             
            </div>      
  @endsection

