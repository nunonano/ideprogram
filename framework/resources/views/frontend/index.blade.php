@extends('frontend.layout')

@section('menuhome')
class="selected"
@stop

@section('header')
<h1 class="fx" data-animate="fadeInLeft">Home</h1>
@stop		

@section('main')
							
							    <div class="blog-posts">
							    	@forelse ($posts as $post)
							    	<?php 
							    		$tanggal = $post->created_at;
							    	?>
			                		<div class="post-item fx" data-animate="fadeInLeft">
			                		<h2><a class="main-color" href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h2>
										<div class="post-image">
												<a href="{{ asset('images/header_image/'.$post->header_image) }}" title="Full Image" class="zoom" >
													<div class="img-overlay"></div>
													<div class="post-lft-info">
														<div class="main-bg">{{ date('d', strtotime($tanggal)) }}<br />{{ date('M', strtotime($tanggal)) }}<br />{{ date('Y', strtotime($tanggal)) }}</div>
													</div>
													<img src="{{ asset('images/preview_image/'.$post->preview_image) }}" alt="{{ $post->title }}">
												</a>
										</div>
									    <article class="post-content">
									        <div class="post-info-container">
												<div class="post-info">
													
													<ul class="post-meta">
														<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">{{ $post->user->display_name }}</a></li>
														<li class="">Dilihat :{{ $post->view }} x</li>
														<li><!-- <i class="fa fa-folder-open"></i>Category: <a href="#">#</a></li> -->
														<li class="meta-comments"><i class="fa fa-comments"></i>Comments: <a href="blog-single.html">{{ $post->comment->count() }}</a></li>
													</ul>
												</div>
											</div>
											<p>	{!! Markdown::parse(str_limit($post->preview_content, 300)) !!}
												<a class="read-more" href="{{ route('blog.show', $post->slug) }}">Read more</a> 
											</p>
									    </article>
									</div>
									@empty
									<div class="content" style="margin-top: 10px;text-align: center;">
										<div class="alert alert-warning" role="alert" >Belum ada posting</div>
									</div>
									@endforelse
														
									<!-- <div class="pager skew-25">
							    		<ul>
							    			<li><a class="skew25" href="#"><i class="fa fa-angle-left"></i></a></li>
							    			<li class="selected"><span class="skew25">1</span></li>
							    			<li><a class="skew25" href="#">2</a></li>
							    			<li><a class="skew25" href="#">3</a></li>
							    			<li><a class="skew25" href="#">4</a></li>
							    			<li><a class="skew25" href="#">5</a></li>
							    			<li><span class="skew25">...</span></li>
							    			<li><a class="skew25" href="#">10</a></li>
							    			<li><a class="skew25" href="#"><i class="fa fa-angle-right"></i></a></li>
							    		</ul>
						    		</div> -->
			                	</div>
					    	
@stop