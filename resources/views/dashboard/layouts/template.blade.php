<!DOCTYPE html>
<html lang="en">
   <head>
      @yield('title')
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="Believe and Jerex" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      
      <link rel="stylesheet" type="text/css" href="/assets2/bower_components/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/assets2/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="/assets2/icon/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/assets2/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" type="text/css" href="/assets2/css/style.css">
      <script>
        window.Laravel = {!!  json_encode([
            'csrf_token' => csrf_token(),
            'user'       => [

                'authenticated' => auth()->check(),
                'id'            => auth()->check() ? auth()->user()->id : null,
                'name'          => auth()->check() ? auth()->user()->getFullName() : null,                
            ],
            'url'       => env('APP_URL')
        ]) !!}
    </script>
      @yield('admin-styles')
   </head>
   <body>
      <div class="theme-loader">
         {{-- 
         <div class="loader-track">
            <div class="loader-bar"></div>
         </div>
         --}}
      </div>
      <div id="app">
          <div id="pcoded" class="pcoded">
             <div class="pcoded-overlay-box"></div>
             <div class="pcoded-container navbar-wrapper">
                @include('dashboard.layouts.navbar-header')
                <div class="pcoded-main-container">
                   <div class="pcoded-wrapper">
                      @include('dashboard.layouts.sidenav')
                      <div class="pcoded-content">
                         <div class="pcoded-inner-content">
                            <div class="main-body">
                               <div class="page-wrapper">
                                  
                                      @yield('admin-content')
                                 
                               </div>
                               {{-- 
                               <div id="styleSelector"> </div>
                               --}}
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
      </div>
      

      <script src="{{ asset('js/app.js') }}"></script>
      <script src="/assets2/bower_components/jquery/js/jquery.min.js"></script>
      {{-- <script src="/assets2/bower_components/jquery-ui/js/jquery-ui.min.js"></script> --}}
      <script src="/assets2/bower_components/popper.js/js/popper.min.js"></script>
      <script src="/assets2/bower_components/bootstrap/js/bootstrap.min.js"></script>
      <script src="/assets2/pages/widget/excanvas.js"></script>
      <script src="/assets2/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
      <script src="/assets2/bower_components/modernizr/js/modernizr.js"></script>
      <script src="/assets2/js/SmoothScroll.js"></script>
      <script src="/assets2/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/assets2/js/pcoded.min.js"></script>
      <script src="/assets2/js/vertical/vertical-layout.min.js"></script>
      <script src="/assets2/pages/dashboard/custom-dashboard.js"></script>
      <script src="/assets2/js/script.js"></script>
      @yield('admin-scripts')
   </body>
</html>