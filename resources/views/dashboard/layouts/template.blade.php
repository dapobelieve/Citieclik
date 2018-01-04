<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- <title>Gradient Able bootstrap admin template by codedthemes </title> -->
      @yield('title')
      <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Believe and Jerex" />
      <link rel="icon" href="http://html.codedthemes.com/gradient-able/files/assets/images/favicon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="/assets2/bower_components/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="/assets2/icon/themify-icons/themify-icons.css">
      <link rel="stylesheet" type="text/css" href="/assets2/icon/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/assets2/css/jquery.mCustomScrollbar.css">
      <link rel="stylesheet" href="/assets2/pages/chart/radial/css/radial.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="/assets2/css/style.css">
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
      <div id="pcoded" class="pcoded">
         <div class="pcoded-overlay-box"></div>
         <div class="pcoded-container navbar-wrapper">
            @include('dashboard.layouts.navbar-header')
            {{-- <div id="sidebar" class="users p-chat-user showChat">
               <div class="had-container">
                  <div class="card card_main p-fixed users-main">
                     <div class="user-box">
                        <div class="chat-search-box">
                           <a class="back_friendlist">
                           <i class="fa fa-chevron-left"></i>
                           </a>
                           <div class="right-icon-control">
                              <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                              <div class="form-icon">
                                 <i class="fa fa-search"></i>
                              </div>
                           </div>
                        </div>
                        <div class="main-friend-list">
                           <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius img-radius" src="/assets2/images/avatar-3.jpg" alt="Generic placeholder image ">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Josephin Doe</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="/assets2/images/avatar-2.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Lary Doe</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="/assets2/images/avatar-4.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Alice</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="/assets2/images/avatar-3.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Alia</div>
                              </div>
                           </div>
                           <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="/assets2/images/avatar-2.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Suzen</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}
            {{-- <div class="showChat_inner">
               <div class="media chat-inner-header">
                  <a class="back_chatBox">
                  <i class="fa fa-chevron-left"></i> Josephin Doe
                  </a>
               </div>
               <div class="media chat-messages">
                  <a class="media-left photo-table" href="#!">
                  <img class="media-object img-radius img-radius m-t-5" src="/assets2/images/avatar-3.jpg" alt="Generic placeholder image">
                  </a>
                  <div class="media-body chat-menu-content">
                     <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                     </div>
                  </div>
               </div>
               <div class="media chat-messages">
                  <div class="media-body chat-menu-reply">
                     <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                     </div>
                  </div>
                  <div class="media-right photo-table">
                     <a href="#!">
                     <img class="media-object img-radius img-radius m-t-5" src="/assets2/images/avatar-4.jpg" alt="Generic placeholder image">
                     </a>
                  </div>
               </div>
               <div class="chat-reply-box p-b-20">
                  <div class="right-icon-control">
                     <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                     <div class="form-icon">
                        <i class="fa fa-paper-plane"></i>
                     </div>
                  </div>
               </div>
            </div> --}}
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
      
      <script src="/assets2/bower_components/jquery/js/jquery.min.js"></script>
      <script src="/assets2/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
      <script src="/assets2/bower_components/popper.js/js/popper.min.js"></script>
      <script src="/assets2/bower_components/bootstrap/js/bootstrap.min.js"></script>
      <script src="/assets2/pages/widget/excanvas.js"></script>
      <script src="/assets2/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
      <script src="/assets2/bower_components/modernizr/js/modernizr.js"></script>
      <script src="/assets2/js/SmoothScroll.js"></script>
      <script src="/assets2/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/assets2/bower_components/chart.js/js/Chart.js"></script>
      <script src="/assets2/pages/widget/amchart/amcharts.js"></script>
      <script src="/assets2/pages/widget/amchart/serial.js"></script>
      <script src="/assets2/pages/widget/amchart/light.js"></script>
      <script src="/assets2/js/pcoded.min.js"></script>
      <script src="/assets2/js/vertical/vertical-layout.min.js"></script>
      <script src="/assets2/pages/dashboard/custom-dashboard.js"></script>
      <script src="/assets2/js/script.js"></script>
      @yield('admin-scripts')
   </body>
</html>