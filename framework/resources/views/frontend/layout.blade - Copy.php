<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Teguh Arifianto">
		@yield('meta')
		<title>@yield('webTitle', $webSettings->web_title)</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('res/bootstrap-3.3.4/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('res/bootstrap-3.3.4/css/bootstrap-theme.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('res/frontend/blog-home.css') }}">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="{{ asset('res/magnific-popup/dist/magnific-popup.css') }}">
		<style>
			body {
				margin: 0px;
				padding: 0px;
			}

			.bs-docs-header {
				position: relative;
				padding: 30px 15px;
				color: #CDBFE3;
				text-align: center;
				text-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
				background-color: #6F5499;
				background-image: linear-gradient(to bottom, #563D7C 0px, #6F5499 100%);
				background-repeat: repeat-x;
				margin-bottom: 10px;
			}

			.bs-docs-header h1 a {
				color: #FFFFFF;
				text-decoration: none;
			}

			.bs-docs-header h1 a:hover {
				color: #CDBFE3;
			}

			#content {
				margin-top: 80px;
				border-top: 1px solid #EEEEEE;
			}
			
			#sidebar {
				font-family: 'Open Sans', sans-serif;
				font-weight: 300;
			}
			
			#sidebar #recent-post ul {
				padding: 0;
				list-style: none;
			}
			
			#sidebar #recent-post a {
				text-decoration: none;
				color: #000000;
				-o-transition: all 0.2s linear;
				-moz-transition: all 0.2s linear;
				-khtml-transition: all 0.2s linear;
				-webkit-transition: all 0.2s linear;
				-ms-transition: all 0.2s linear;
				transition: all 0.2s linear;
			}
			
			#sidebar #recent-post a:hover {
				color: #FF9C00;
			}

			.navbar {
				font-family: 'Open Sans', sans-serif;
				font-weight: 300;
			}

			.navbar-brand {
				color: #FF9C00 !important;
			}

			.navbar-brand h1 {
				font-size: 18px;
				margin: 0px;
				padding: 0px;
			}

			.navbar-brand:hover {
				color: #FFFFFF !important;
			}
			
			#sidebarCategories {
				font-family: 'Open Sans', sans-serif;
			}

			.tags ul {
				font-family: 'Open Sans', sans-serif;
				padding: .5em 0px;
			}
			.tags li {
				margin: 0;
				padding: 0;
				list-style: none;
				display: inline;
			}
			.tags li a {
				text-decoration: none;
				color: #000000;
				padding: 0 2px;
			}
			.tags li a:hover {
				color: #FF9C00;
			}
			
			.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
				background-color: #FF9C00;
			}
			
			.navbar-fixed-top {
				border-bottom: 0px;
			}

			.btn-orange {
			    background-color: #FFB772;
			    border-color: #FFB772;
			    color: white;
			}

			img.lazy {
				cursor:zoom-in !important;
			}

		</style>
		<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
		@yield('head')
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ route('blog.index') }}"><h1>ideProgram</h1></a>
				</div>
				<div class="collapse navbar-collapse">
					<form action="{{ route('blog.search') }}" method="GET" class="navbar-form navbar-right">
						<div class="input-group">
				        	<input placeholder="Cari tulisan" name="q" value="{{ Input::get('q') }}" class="form-control" type="text">
				        	<span class="input-group-btn">
				        		<button type="submit" class="btn btn-orange" type="button"><span class="glyphicon glyphicon-search"></span></button>
				        	</span>
				        </div>
					</form>
					<ul class="nav navbar-nav">
						<li @if(URL::current() == route('blog.index')) class="active" @endif>
							<a href="{{ route('blog.index') }}">Beranda</a>
						</li>
						@if(Auth::check())
						@foreach($categories->where('tag', 'header')->get() as $category)
						<li {{ URL::current() == route('blog.category', $category->slug)?'class=active':'' }}>
							<a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
						</li>
						@endforeach
						@else
						@foreach($categories->where('tag', 'header')->get() as $category)
						<li {{ URL::current() == route('blog.category', $category->slug)?'class=active':'' }}>
							<a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a>
						</li>
						@endforeach
						@endif
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>

		<div class="container" id="content">
			<div class="row">
				<div class="col-lg-9">
					<div id="main-content">
						@yield('main')
					</div>
				</div>
				<div id="sidebar" class="col-lg-3" style="border-left: 1px solid #EEEEEE;">
					<div id="recent-post" class="content">
						<h4>Tulisan Terakhir</h4>
						@foreach($recentPosts as $post)
						<ul>
							<li><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></li>
						</ul>
						@endforeach
					</div>
					<hr>
					<div class="content">
						<h4>Daftar Tag</h4>
						<div class="tags">
							<ul>
								<li class="tag1">
									@foreach($tags as $tag)
									<a href="{{ route('blog.tag', $tag->slug) }}" style="font-size:{{ $tag->post->count() + 12 }}px">{{ $tag->name }}</a>
									@endforeach
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
		<!-- JavaScript -->
		<script type="text/javascript" src="{{ asset('res/jquery-2.1.3/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('res/bootstrap-3.3.4/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('res/tagclouds/js/tinysort.js') }}"></script>
		<script type="text/javascript" src="{{ asset('res/jquery_lazyload/jquery.lazyload.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('res/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('res/holderjs/holder.min.js') }}"></script>
		<script>
			$(window).load(function(){
				$("#main-content").show();
			});
			$(document).ready(function() {
				$("#main-content").hide();		
				$("img.lazy").lazyload({
					effect : "fadeIn"
				});
				$('img.lazy').magnificPopup({
					type:'image',
					closeBtnInside: false,
					zoom: {
					    enabled: true, // By default it's false, so don't forget to enable it
					    duration: 300, // duration of the effect, in milliseconds
					    easing: 'ease-in-out', // CSS transition easing function 
					  }
				});
				/*jQuery("img.lazy").lazy({
					effect: "fadeIn", 
					effectTime: "normal"
				});*/
			});
		</script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-55967791-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
		<!-- Histats.com  START (hidden counter)-->
		<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
		<a href="http://www.histats.com" target="_blank" title="free web hit counter" ><script  type="text/javascript" >
		try {Histats.start(1,3040165,4,0,0,0,"");
		Histats.track_hits();} catch(err){};
		</script></a>
		<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3040165&101" alt="free web hit counter" border="0"></a></noscript>
		<!-- Histats.com  END  -->
		@yield('foot')
	</body>
</html>