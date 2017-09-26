@extends('profile.layout.template')


@section('title')
Services | Citieclik
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/assets/css/slimscroll.css">
<script type="text/javascript" src="/assets/js/slim.js"></script>
<style>
  *{margin: 0;padding:0px}

  .header{
      width: 100%;
      background-color: #0d77b6 !important;
      height: 60px;
  }

  .showLeft{
      background-color: #0d77b6 !important;
      border:1px solid #0d77b6 !important;
      text-shadow: none !important;
      color:#fff !important;
      padding:10px;
  }

  .icons li {
      background: none repeat scroll 0 0 #fff;
      height: 7px;
      width: 7px;
      line-height: 0;
      list-style: none outside none;
      margin-right: 15px;
      margin-top: 3px;
      vertical-align: top;
      border-radius:50%;
      pointer-events: none;
  }

  .btn-left {
      left: 0.4em;
  }

  .btn-right {
      right: 0.4em;
  }

  .btn-left, .btn-right {
      position: absolute;
      /*top: 0.24em;*/
  }

  .dropbtn {
      background-color: #4CAF50;
      /*position: fixed;*/
      color: white;
      font-size: 16px;
      border: none;
      cursor: pointer;
  }

  .dropbtn:hover, .dropbtn:focus {
      background-color: #3e8e41;
  }

  /*.dropdown {
      position: absolute;
      display: inline-block;
      right: 0.4em;
  }*/

  .dropdown-content {
      display: none;
      position: relative;
      margin-top: 60px;
      background-color: #f9f9f9;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .dropdown a:hover {background-color: #f1f1f1}

  .show {display:block;}
</style>
<script>
  function changeLanguage(language) {
      var element = document.getElementById("url");
      element.value = language;
      element.innerHTML = language;
  }

  function showDropdown() {
      document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                  openDropdown.classList.remove('show');
              }
          }
      }
  }
</script>
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
                <table class="table">
                  <thead>
                    <tr>
                      <th>Services</th>
                      <th class="text-center"><a class="btn btn-sm btn-outline-primary" href="{{route('addservice')}}">Add new service</a></th>
                    </tr>
                  </thead>
                </table>
              <div class="slimScroll">
                <div class="container">
                    @foreach($user->getUserServices() as $servy) 
                        <div class="row">
                            <div class="col-sm-6 col-md-9">
                                <div class="product-item"><a class="product-thumb" href="shop-single.html">
                                    <img src="/assets/img/shop/cart/01.jpg" alt="Product"></a>
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
                                         <form method="POST" action="{{route('service.delete', $servy->id)}}">
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
                  </div>
                </div>
              </div>
              <hr class="mb-4">
              <label class="custom-control custom-checkbox d-block">
                <a class="btn btn-sm btn-outline-danger" href="{{route('addservice')}}">Add new service</a>
              </label>
            </div>      
  @endsection

@section('script')
<script type="text/javascript" src="/assets/js/slimscroll.min.js"></script>
@stop