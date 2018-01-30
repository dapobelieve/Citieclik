@extends('layout.template')

@section('title')
Citieclik | Terms and Condition
@endsection

@section('style')
<style type="text/css">
	body {
		font-family: 'Proxima';
		font-size: 1rem;
		color: hsl(0, 0, 37%);
		line-height: 1.5;
		margin-bottom: 2.25rem;
	}
	p {
		font-size: 1rem !important;
		/*text-align: justify;*/
	}
	li {
		line-height: 1.5;
		margin-bottom: 2.25rem;
	}
	.m-head {
		text-transform: uppercase !important;
	}
	.strong {
		font-weight: bold !important;
	}
</style>
@endsection

@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    <!-- Page Title-->
  	<div class="page-title">
        <div class="container">
          	<div class="column">
            	<h1 class="strong" style="text-transform: uppercase;">About Us</h1>
          	</div>
          	<div class="column">
            	<ul class="breadcrumbs">
	              	<li><a href="/">Home</a>
	              	</li>
	              	<li class="separator">&nbsp;</li>
	              	<li>About Us</li>
            	</ul>
          	</div>
        </div>
  	</div>
  	<!-- Page Content-->
  	<div class="container padding-bottom-3x mb-2">
        <div class="row"> 
          	<!-- Content-->
          	<div class="col-lg-10 offset-lg-1">
            	{{-- <h1 class="m-head strong">Terms and Conditions</h1><br> --}}
            	<h2><strong>About Us</strong></h2>
            	<p><strong>VISION:</strong></p>
				<p>To be the safest, most convenient and lowest-priced 'one stop' online platform to Trade, Connect People and Grow Businesses in Nigeria and the rest of Africa.</p>
				<p><strong>MISSION:</strong></p>
				<p>To create an excellent online platform that makes life&nbsp;'easier'&nbsp;and 'cheaper' for people who want to buy, sell or rent any product or service 'quickly' and 'safely'.</p>
				<p>To connect people who <strong>need</strong>, with people who <strong>have</strong>.</p>
				<p>To catalyze the growth of small businesses in Nigeria through widespread and affordable online advertising.</p>
				<p><strong>CORE VALUES:</strong></p>
				<p>1. &nbsp;Delivering the &lsquo;WOW&rsquo; factor to customers</p>
				<p>2. &nbsp;Passionate and Determined</p>
				<p>3. &nbsp;Security and Safety focused</p>
				<p>4. &nbsp;Honesty and Respect to all customers</p>
				<p>5. &nbsp;Customer Engagement through Uniqueness &amp; Creativity</p>
				<p>6. &nbsp;Innovative and Progressive</p>
				<p><strong>BOARD OF DIRECTORS:</strong></p>
				<p>1.<strong> Charles Victor E. &ndash; </strong>CEO and&nbsp;Managing Director</p>
				<p>2. <strong>Peter Bikom &ndash; </strong>Co Founder,&nbsp;Marketing &amp; Business Development Director</p>
				<p>3.<strong> Abel Wilson &ndash;</strong> Design Director</p>
				<p>4.<strong> Joe Essien &ndash; </strong>Customer&nbsp;Relations &nbsp;Director</p>                    
          	</div>
        </div>
  	</div>
</div>
@endsection