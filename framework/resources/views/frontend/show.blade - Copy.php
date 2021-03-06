@extends('frontend.layout')

@section('meta')
<meta name="title" content="{{ $post->title }}">
<meta name="keyword" content="{{ $post->meta_keyword }}">
<meta name="description" content="{{ $post->meta_description }}">
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:type" content="article"/>
<meta property="og:url" content="{{ route('blog.show', $post->slug) }}"/>
<meta property="og:site_name" content="teguhDev"/>
<meta property="og:description" content="{{ $post->meta_description }}"/>
@stop

@section('webTitle')
@if(count($post) > 0)
{{ $post->title }} | {{ $webSettings->web_title }}
@else
Posting tidak ditemukan | {{ $webSettings->web_title }}
@endif
@stop

@section('head')
<link href="{{ asset('res/emoticon/stylesheets/jquery.cssemoticons.css') }}" media="screen" rel="stylesheet" type="text/css" />
<style>
	.content h2 {
		border-bottom: 1px solid #EEEEEE;
		padding-bottom: 20px;
	}

	.content h2 {
		font-family: 'Open Sans', sans-serif;
		font-size: 30px;
		text-decoration: none;
		color: #000000;
		font-weight: 300;
		-o-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-khtml-transition: all 0.2s linear;
		-webkit-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		transition: all 0.2s linear;
	}

	.content h2 a:hover {
		color: #FF9C00;
	}

	.content h5 {
		font-family: 'Open Sans', sans-serif;
		font-weight: 300;
		color: #757575;
	}

	pre {
		background-color: #1B2426 !important;
		color: white !important;
		border: 1px solid #1B2426;
	}
</style>
@stop

@section('main')
@if(count($post) > 0)
<div class="content">
	<h2>{{ $post->title }}</h2>
	<h5>
		<div class="pull-left">
			<div>
				<span class="glyphicon glyphicon-user"></span> Oleh <a href="index.php">{{ $post->user->display_name }}</a>&nbsp;&nbsp; 
				<span class="glyphicon glyphicon-eye-open"></span> Dilihat {{ $post->view }}x
			</div>
		</div>
		
		<div class="pull-right">			
			<div class="btn-group">
			  <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">
			    <span class="glyphicon glyphicon-share"></span> Berbagi <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li><a href="{{ $post->share->gplus }}">Google+</a></li>
			    <li><a href="{{ $post->share->facebook }}">Facebook</a></li>
			    <li><a href="{{ $post->share->twitter }}">Twitter</a></li>
			  </ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</h5>
	<p>
		{!! $post->content !!}
	</p>

	<hr>

	<div style="margin-bottom:50px;">
		<h3>Komentar</h3>

		<form action="{{ route('blog.store_comment', $post->id) }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <div class="form-group">
		        <input name="name" class="form-control" placeholder="Your Name">
		    </div>
		    <div class="form-group">
		        <input name="email" type="email" class="form-control" placeholder="Your Email">
		    </div>
		    <div class="form-group">
		        <input name="website" class="form-control" placeholder="Your Website">
		    </div>
		    <div class="form-group">
		        <textarea name="content" class="form-control"></textarea>
		    </div>
		    <button type="submit" class="btn btn-default">Submit</button>
		</form>

		<hr>

		@forelse($comments as $comment)
		<div class="media">
		    <a class="media-left" href="#">
		    	<img src="holder.js/64x64?random=yes&text={{ strtoupper(substr($comment->name, 0, 1)) }}&size=20">
		    </a>
		    <div class="media-body">
		        <h4 class="media-heading">{{ $comment->name }}</h4>
		        <h5 class="media-heading">Website : {{ $comment->website}}</h5>
		        <p class="comment">{{{ $comment->content }}}</p>
		    </div>
		</div>
		@empty
		No Comment
		@endforelse

	</div>
</div>
@else
<div class="content" style="margin-top: 10px;text-align: center;">
	<div class="alert alert-warning" role="alert" >Posting tidak ditemukan</div>
</div>
@endif
@stop

@section('foot')
		<!-- JavaScript -->

<script src="{{ asset('res/emoticon/javascripts/jquery.cssemoticons.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.comment').emoticonize();

		Holder.addTheme("dark", {
		  background: "#39DBAC",
		  foreground: "#FFFFFF",
		  size: 40,
		  fontweight: "normal"
		});
	});
</script>
@stop