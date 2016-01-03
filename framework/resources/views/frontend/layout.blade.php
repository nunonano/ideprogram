<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>@yield('webTitle', $webSettings->web_title)</title>
		<meta name="description" content="EXCEPTION – Responsive Business HTML Template">
		<meta name="author" content="EXCEPTION">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		@yield('meta')
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="images/favicon.ico">
		    	
		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/prettyPhoto.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

		<!-- Custom CSS StyleSheets -->
		<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="css/ie.css">
	    	<script type="text/javascript" src="js/html5.js"></script>
	    <![endif]-->

		
		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}">
	
	</head>
	<body>
	    
	    <!-- site preloader start -->
	    <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div>
	    <!-- site preloader end -->
	    
	    <div class="pageWrapper">
		    
		    <!-- login box start -->
			<div class="login-box">
				<a class="close-login" href="#"><i class="fa fa-times"></i></a>
				<form>
					<div class="container">
						<p>Login Administrator</p>
						<div class="login-controls">
							<div class="skew-25 input-box left">
								<input type="text" class="txt-box skew25" placeholder="User name Or Email" />
							</div>
							<div class="skew-25 input-box left">
								<input type="password" class="txt-box skew25" placeholder="Password" />
							</div>
							<div class="left skew-25 main-bg">
								<input type="submit" class="btn skew25" value="Login" />
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- login box End -->

			<!-- Header Start -->
			<div id="headWrapper" class="clearfix">
		    	
		    	<!-- top bar start -->
		    	<div class="top-bar">
				    <div class="container">
						<div class="row">
							<div class="cell-5">
							    <ul>
								    <li><a href="{{ route('blog.index') }}"><i class="fa fa-envelope"></i>wisnu-saputra@outlook.com</a></li>
								    <!-- <li><span><i class="fa fa-phone"></i> Call Us: +1 (888) 000-0000</span></li> -->
							    </ul>
							</div>
							<div class="cell-7 right-bar">
					    		<ul class="right">
						    	    <!-- <li><a href="cart.html"><i class="fa fa-shopping-cart"></i>0 item(s) - $0.00</a></li>
						    	    <li><a href="siteMap.html"><i class="fa fa-sitemap"></i>Site Map</a></li>
						    	    <li><a href="register.html"><i class="fa fa-user"></i>Register</a></li>
						    	    <li><a href="#" class="login-btn"><i class="fa fa-unlock-alt"></i> Login</a></li> -->
						        </ul>
							</div>
						</div>
				    </div>
			    </div>
			    <!-- top bar end -->
			    
			    <header class="top-head" data-sticky="true">
				    <div class="container">
					    <div class="row">
					    	<div class="logo cell-3">
						    	<a href="{{ route('blog.index') }}" style="font-size: 32px;font-weight: bold;">ideProgram</a>
						    </div>
						    <div class="cell-9 top-menu">
							    
							    <!-- # letak Sidebar -->
						    	{{-- @include('frontend.menu') --}}
							    							    
							    <!-- top search start -->
							    <div class="top-search">
						    		<a href="#"><span class="fa fa-search"></span></a>
							    	<div class="search-box">
							    		<div class="input-box left">
							    			<input type="text" name="t" id="t-search" class="txt-box" placeHolder="Enter search keyword here..." />
							    		</div>
							    		<div class="left">
							    			<input type="submit" id="b-search" class="btn main-bg" value="GO" />
							    		</div>
							    	</div>
							    </div>
							    <!-- top search end -->

							</div>
					    </div>
				    </div>
			    </header>
			</div>
			<!-- Header End -->
			
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<!-- <h1 class="fx" data-animate="fadeInLeft">Blog <span>Thumbnails</span></h1> -->
								@yield('breadcrumb')
								
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
							<div class="cell-9 blog-thumbs">	

								<!-- # letak konten posting -->
								@yield('main')
							
							</div>

						    <!-- # letak Sidebar -->
						    @include('frontend.sidebar')

			    		</div>
					</div>
				</div>
				
			</div>
			<!-- Content End -->
			
			<!-- # letak Footer -->
			@include('frontend.footer')	

			<!-- # Script tambahan -->
			@yield('foot')		
		    
		    <!-- Back to top Link -->
	    	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
	    
	    </div>


	    <!-- Load JS siles -->	
 		<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	    
	    <!-- Waypoints script -->
		<script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script>
		
		<!-- SLIDER REVOLUTION SCRIPTS  -->
		<script type="text/javascript" src="{{ asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
		
		<!-- slick slider carousel -->
		<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
		
		<!-- Animate numbers increment -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
		
		<!-- PrettyPhoto script -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
		
		<!-- Share post plugin script -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.sharrre.min.js') }}"></script>
		
		<!-- Product images zoom plugin -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>
		
		<!-- Input placeholder plugin -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.placeholder.js') }}"></script>
		
		<!-- Tweeter API plugin -->
		<!--<script type="text/javascript" src="{{ asset('assets/js/twitterfeed.js') }}"></script>-->
		
		<!-- Flickr API plugin -->
		<script type="text/javascript" src="{{ asset('assets/js/jflickrfeed.min.js') }}"></script>

		<!-- MailChimp plugin -->
		<script type="text/javascript" src="{{ asset('assets/js/mailChimp.js') }}"></script>
		
		<!-- NiceScroll plugin -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
		
		<!-- general script file -->
		<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
	</body>
</html>