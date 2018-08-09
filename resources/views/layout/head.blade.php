<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="citieclik.com">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="citieclik.com">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/assets/css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="/assets/css/styles.min.css">
    <link rel="stylesheet" media="screen" href="/assets/css/mine.css">
    <link rel="stylesheet" media="screen" href="/assets/css/sweetalert.css">
   

    @yield('style')

    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="/assets/customizer/customizer.min.css">
    <!-- Google Tag Manager-->
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
    <!-- Modernizr-->
    <script src="/assets/js/modernizr.min.js"></script>
  </head>