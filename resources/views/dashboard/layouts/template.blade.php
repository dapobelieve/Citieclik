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
</head>
<body>

	<div class="theme-loader">
		<div class="loader-track">
			<div class="loader-bar"></div>
		</div>
	</div>

<div id="pcoded" class="pcoded">
	<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
	@include('dashboard.layouts.navbar-header')

	<div id="sidebar" class="users p-chat-user showChat">
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
	</div>

	<div class="showChat_inner">
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
	</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
	@include('dashboard.layouts.sidenav')
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">

<div class="col-md-6 col-xl-3">
<div class="card bg-c-blue order-card">
<div class="card-block">
<h6 class="m-b-20">Orders Received</h6>
<h2 class="text-right"><i class="ti-shopping-cart f-left"></i><span>486</span></h2>
<p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card bg-c-green order-card">
<div class="card-block">
<h6 class="m-b-20">Total Sales</h6>
<h2 class="text-right"><i class="ti-tag f-left"></i><span>1641</span></h2>
<p class="m-b-0">This Month<span class="f-right">213</span></p>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card bg-c-yellow order-card">
<div class="card-block">
<h6 class="m-b-20">Revenue</h6>
<h2 class="text-right"><i class="ti-reload f-left"></i><span>$42,562</span></h2>
<p class="m-b-0">This Month<span class="f-right">$5,032</span></p>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card bg-c-pink order-card">
<div class="card-block">
<h6 class="m-b-20">Total Profit</h6>
<h2 class="text-right"><i class="ti-wallet f-left"></i><span>$9,562</span></h2>
<p class="m-b-0">This Month<span class="f-right">$542</span></p>
</div>
</div>
</div>


<div class="col-lg-8 col-md-12">
<div class="card">
<div class="card-header">
<h5>Statistics</h5>
<span class="text-muted">Get 15% Off on <a href="https://www.amcharts.com/" target="_blank">amCharts</a> licences. Use code "codedthemes" and get the discount.</span>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li><i class="fa fa-chevron-left"></i></li>
<li><i class="fa fa-window-maximize full-card"></i></li>
<li><i class="fa fa-minus minimize-card"></i></li>
<li><i class="fa fa-refresh reload-card"></i></li>
<li><i class="fa fa-times close-card"></i></li>
</ul>
</div>
</div>
<div class="card-block">
<div id="Statistics-chart" style="height:200px"></div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="card">
<div class="card-header">
<h5>Customer Feedback</h5>
</div>
<div class="card-block">
<span class="d-block text-c-blue f-24 f-w-600 text-center">365247</span>
<canvas id="feedback-chart" height="100"></canvas>
<div class="row justify-content-center m-t-15">
<div class="col-auto b-r-default m-t-5 m-b-5">
<h4>83%</h4>
<p class="text-success m-b-0"><i class="ti-hand-point-up m-r-5"></i>Positive</p>
</div>
<div class="col-auto m-t-5 m-b-5">
<h4>17%</h4>
<p class="text-danger m-b-0"><i class="ti-hand-point-down m-r-5"></i>Negative</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-6 col-xl-3">
<div class="card seo-card">
<div class="card-block seo-statustic">
<i class="ti-server text-c-green"></i>
<h5>65%</h5>
<p>Memory</p>
</div>
<div class="seo-chart">
<canvas id="seo-card1"></canvas>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card seo-card">
<div class="card-block seo-statustic">
<i class="ti-reload text-c-blue"></i>
<h5>$46,845</h5>
<p>Revenue</p>
</div>
<div class="seo-chart">
<canvas id="seo-card2"></canvas>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card seo-card">
<img src="/assets2/images/widget/seoimg2.jpg" alt="seo bg" class="img-fluid">
<div class="overlay-bg"></div>
<div class="card-block seo-content">
<h6>New Users</h6>
<p class="m-b-5 m-t-30"><i class="fa fa-caret-up text-c-green m-r-10"></i> +52%</p>
<p class="m-b-0">Calculated in 7 days</p>
</div>
</div>
</div>
<div class="col-md-6 col-xl-3">
<div class="card seo-card">
<img src="/assets2/images/widget/seoimg3.jpg" alt="seo bg" class="img-fluid">
<div class="overlay-bg"></div>
<div class="card-block seo-content">
<h6>Bounce Rate</h6>
<p class="m-b-5 m-t-30"><i class="fa fa-caret-down text-c-pink m-r-10"></i> -82%</p>
<p class="m-b-0">Calculated in 7 days</p>
</div>
</div>
</div>


<div class="col-sm-12">
<div class="card tabs-card">
<div class="card-block p-0">

<ul class="nav nav-tabs md-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#home3" role="tab"><i class="fa fa-home"></i>Home</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><i class="fa fa-key"></i>Security</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#messages3" role="tab"><i class="fa fa-play-circle"></i>Entertainment</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#settings3" role="tab"><i class="fa fa-database"></i>Big Data</a>
<div class="slide"></div>
</li>
</ul>

<div class="tab-content card-block">
<div class="tab-pane active" id="home3" role="tabpanel">
<div class="table-responsive">
<table class="table">
<tr>
<th>Image</th>
<th>Product Code</th>
<th>Customer</th>
<th>Purchased On</th>
<th>Status</th>
<th>Transaction ID</th>
</tr>
<tr>
<td><img src="/assets2/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002344</td>
<td>John Deo</td>
<td>05-01-2017</td>
<td><span class="label label-danger">Failed</span></td>
<td>#7234486</td>
</tr>
<tr>
<td><img src="/assets2/images/product/prod3.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002653</td>
<td>Eugine Turner</td>
<td>04-01-2017</td>
<td><span class="label label-success">Delivered</span></td>
<td>#7234417</td>
</tr>
<tr>
<td><img src="/assets2/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002156</td>
<td>Jacqueline Howell</td>
<td>03-01-2017</td>
<td><span class="label label-warning">Pending</span></td>
<td>#7234454</td>
</tr>
</table>
</div>
<div class="text-center">
<button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
</div>
</div>
<div class="tab-pane" id="profile3" role="tabpanel">
<div class="table-responsive">
<table class="table">
<tr>
<th>Image</th>
<th>Product Code</th>
<th>Customer</th>
<th>Purchased On</th>
<th>Status</th>
<th>Transaction ID</th>
</tr>
<tr>
<td><img src="/assets2/images/product/prod3.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002653</td>
<td>Eugine Turner</td>
<td>04-01-2017</td>
<td><span class="label label-success">Delivered</span></td>
<td>#7234417</td>
</tr>
<tr>
<td><img src="/assets2/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002156</td>
<td>Jacqueline Howell</td>
<td>03-01-2017</td>
<td><span class="label label-warning">Pending</span></td>
<td>#7234454</td>
</tr>
</table>
</div>
<div class="text-center">
<button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
</div>
</div>
<div class="tab-pane" id="messages3" role="tabpanel">
<div class="table-responsive">
<table class="table">
<tr>
<th>Image</th>
<th>Product Code</th>
<th>Customer</th>
<th>Purchased On</th>
<th>Status</th>
<th>Transaction ID</th>
</tr>
<tr>
<td><img src="/assets2/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002413</td>
<td>Jane Elliott</td>
<td>06-01-2017</td>
<td><span class="label label-primary">Shipping</span></td>
<td>#7234421</td>
</tr>
<tr>
<td><img src="/assets2/images/product/prod4.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002156</td>
<td>Jacqueline Howell</td>
<td>03-01-2017</td>
<td><span class="label label-warning">Pending</span></td>
<td>#7234454</td>
</tr>
</table>
</div>
<div class="text-center">
<button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
</div>
</div>
<div class="tab-pane" id="settings3" role="tabpanel">
<div class="table-responsive">
<table class="table">
<tr>
<th>Image</th>
<th>Product Code</th>
<th>Customer</th>
<th>Purchased On</th>
<th>Status</th>
<th>Transaction ID</th>
</tr>
<tr>
<td><img src="/assets2/images/product/prod1.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002413</td>
<td>Jane Elliott</td>
<td>06-01-2017</td>
<td><span class="label label-primary">Shipping</span></td>
<td>#7234421</td>
</tr>
<tr>
<td><img src="/assets2/images/product/prod2.jpg" alt="prod img" class="img-fluid"></td>
<td>PNG002344</td>
<td>John Deo</td>
<td>05-01-2017</td>
<td><span class="label label-danger">Failed</span></td>
<td>#7234486</td>
</tr>
</table>
</div>
<div class="text-center">
<button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-12 col-lg-4">
<div class="card">
<div class="card-block text-center">
<i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
<h4 class="m-t-20"><span class="text-c-blue">8.62k</span> Subscribers</h4>
<p class="m-b-20">Your main list is growing</p>
<button class="btn btn-primary btn-sm btn-round">Manage List</button>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="card">
<div class="card-block text-center">
<i class="fa fa-twitter text-c-green d-block f-40"></i>
<h4 class="m-t-20"><span class="text-c-blgreenue">+40</span> Followers</h4>
<p class="m-b-20">Your main list is growing</p>
<button class="btn btn-success btn-sm btn-round">Check them out</button>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="card">
<div class="card-block text-center">
<i class="fa fa-puzzle-piece text-c-pink d-block f-40"></i>
<h4 class="m-t-20">Business Plan</h4>
<p class="m-b-20">This is your current active plan</p>
<button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
</div>
</div>
</div>


<div class="col-lg-4 col-md-12">
<div class="card user-card">
<div class="card-header">
<h5>Profile</h5>
</div>
<div class="card-block">
<div class="usre-image">
<img src="/assets2/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
</div>
<h6 class="f-w-600 m-t-25 m-b-10">Alessa Robert</h6>
<p class="text-muted">Active | Male | Born 23.05.1992</p>
<hr />
<p class="text-muted m-t-15">Activity Level: 87%</p>
<ul class="list-unstyled activity-leval">
<li class="active"></li>
<li class="active"></li>
<li class="active"></li>
<li></li>
 <li></li>
</ul>
<div class="bg-c-blue counter-block m-t-10 p-20">
<div class="row">
<div class="col-4">
<i class="ti-comments"></i>
<p>1256</p>
</div>
<div class="col-4">
<i class="ti-user"></i>
<p>8562</p>
</div>
<div class="col-4">
<i class="ti-bag"></i>
<p>189</p>
</div>
</div>
</div>
<p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<hr />
<div class="row justify-content-center user-social-link">
<div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
<div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
<div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
</div>
</div>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div class="card">
<div class="card-header">
<h5>Activity Feed</h5>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li><i class="fa fa-chevron-left"></i></li>
<li><i class="fa fa-window-maximize full-card"></i></li>
<li><i class="fa fa-minus minimize-card"></i></li>
<li><i class="fa fa-refresh reload-card"></i></li>
<li><i class="fa fa-times close-card"></i></li>
</ul>
</div>
</div>
<div class="card-block">
<ul class="feed-blog">
<li class="active-feed">
<div class="feed-user-img">
<img src="/assets2/images/avatar-3.jpg" class="img-radius " alt="User-Profile-Image">
</div>
<h6><span class="label label-danger">File</span> Eddie uploaded new files: <small class="text-muted">2 hours ago</small></h6>
<p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<div class="row">
<div class="col-auto text-center">
<img src="/assets2/images/blog/blog-r-1.jpg" alt="img" class="img-fluid img-100">
<h6 class="m-t-15 m-b-0">Old Scooter</h6>
<p class="text-muted m-b-0"><small>PNG-100KB</small></p>
</div>
<div class="col-auto text-center">
<img src="/assets2/images/blog/blog-r-2.jpg" alt="img" class="img-fluid img-100">
<h6 class="m-t-15 m-b-0">Wall Art</h6>
<p class="text-muted m-b-0"><small>PNG-150KB</small></p>
</div>
<div class="col-auto text-center">
<img src="/assets2/images/blog/blog-r-3.jpg" alt="img" class="img-fluid img-100">
<h6 class="m-t-15 m-b-0">Microphone</h6>
<p class="text-muted m-b-0"><small>PNG-150KB</small></p>
</div>
</div>
</li>
<li class="diactive-feed">
<div class="feed-user-img">
<img src="/assets2/images/avatar-4.jpg" class="img-radius " alt="User-Profile-Image">
</div>
<h6><span class="label label-success">Task</span>Sarah marked the Pending Review: <span class="text-c-green"> Trash Can Icon Design</span><small class="text-muted">2 hours ago</small></h6>
</li>
<li class="diactive-feed">
<div class="feed-user-img">
<img src="/assets2/images/avatar-2.jpg" class="img-radius " alt="User-Profile-Image">
</div>
<h6><span class="label label-primary">comment</span> abc posted a task: <span class="text-c-green">Design a new Homepage</span> <small class="text-muted">6 hours ago</small></h6>
<p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</li>
<li class="active-feed">
<div class="feed-user-img">
<img src="/assets2/images/avatar-3.jpg" class="img-radius " alt="User-Profile-Image">
</div>
<h6><span class="label label-warning">Task</span>Sarah marked : <span class="text-c-green"> do Icon Design</span><small class="text-muted">10 hours ago</small></h6>
</li>
</ul>
</div>
</div>
</div>

</div>
</div>

</div>
{{-- <div id="styleSelector"> </div> --}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]><![endif]-->



<!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="/assets2/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="/assets2/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="/assets2/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="/assets2/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="/assets2/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->

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
</body>

</html>
