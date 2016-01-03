@extends('Frontend/layout')	

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

@section('breadcrumb')
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="{{ route('blog.index') }}">Home</a><span class="line-separate">/</span>
									<span>Articles</span>
								</div>
@stop

@section('webTitle')
@if(count($post) > 0)
{{ $post->title }} | {{ $webSettings->web_title }}
@else
Posting tidak ditemukan | {{ $webSettings->web_title }}
@endif
@stop

@section('main')
@if(count($post) > 0)
<?php 
	$tanggal = $post->created_at;	
?>					
								<div class="blog-posts">
			                		<div class="post-item fx" data-animate="fadeInLeft">
										<div class="details-img">
											<div class="post-lft-info">
												<div class="main-bg">{{ date('d M Y', strtotime($tanggal)) }}<span class="tri-col"></span></div>
											</div>
											<img src="{{ asset('assets/images/blog/1.jpg') }}" alt="Our Blog post image goes here">
										</div>
									    <article class="post-content">
									        <div class="post-info-container">
												<h1 class="main-color">{{ $post->title }}</h1>
												
												<div class="post-info">
													<ul class="post-meta">
														<li class="meta-user"><i class="fa fa-user"></i>By: {{ $post->user->display_name }}</li>
														<li class="">Dilihat :{{ $post->view }} x</li>
														<!-- <li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li> -->
														<!-- <li class="meta-comments"><i class="fa fa-comments"></i>Comments: <a href="blog-single.html">5</a></li> -->
													</ul>
												</div>
												<div class="pull-right">			
												<!-- <div class="btn-group">
												  <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">
												    <span class="glyphicon glyphicon-share"></span> Berbagi <span class="caret"></span>
												  </button>
												  <ul class="dropdown-menu" role="menu">
												    <li><a href="{{ $post->share->gplus }}">Google+</a></li>
												    <li><a href="{{ $post->share->facebook }}">Facebook</a></li>
												    <li><a href="{{ $post->share->twitter }}">Twitter</a></li>
												  </ul>
												</div> -->		
											</div>
											<p>
											{!! $post->content !!}
											</p>
											<!-- <div class="post-tags">
												<i class="fa fa-tags"></i><span>Tags: </span><a href="#">Responsive</a>,<a> Business</a>,<a href="#"> HTML</a>,<a> Design</a>,<a> WordPress</a>
											</div>
											<div class="share-post">
					                            <span class="sh">Share this post on:</span>
					                            <div id="shareme" data-text="Share this post"></div>
					                        </div> -->
									    </article>
									</div><!-- .post-item end -->
									<div class="comments">
										<h3 class="block-head">Comments</h3>
										<p class="hint marginBottom bold">There are <span class="main-color">{{ $post->comment->count() }}</span> comments on this post</p>
									    <ul class="comment-list">
									        <!--<li>
									             <article class="comment">
									                <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                <div class="comment-content">
									                    <h5 class="comment-author skew-25">
									                        <span class="author-name skew25">John Martin</span>
									                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
									                        <span class="comment-date skew25">Jan 15, 2014</span>
									                    </h5>
									                    <p>Lorem ipsum dolor sit amet, 
														consectetur adipisicing elit. 
														Corporis accusamus alias doloribus 
														aliquam voluptas cupiditate animi 
														officia temporibus dicta iure.</p>
									                </div>
									            </article> -->
									            <!-- End .comment -->
									            <!-- <ul class="child-comment">
									                <li>
									                    <article class="comment">
									                        <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                        <div class="comment-content">
											                    <h5 class="comment-author skew-25">
											                        <span class="author-name skew25">John Martin</span>
											                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
											                        <span class="comment-date skew25">Jan 15, 2014</span>
											                    </h5>
											                    <p>Lorem ipsum dolor sit amet, 
																consectetur adipisicing elit. 
																Corporis accusamus alias doloribus 
																aliquam voluptas cupiditate animi 
																officia temporibus dicta iure.</p>
											                </div>
									                    </article>
									                </li>
									                <li>
									                    <article class="comment">
									                        <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                        <div class="comment-content">
											                    <h5 class="comment-author skew-25">
											                        <span class="author-name skew25">John Martin</span>
											                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
											                        <span class="comment-date skew25">Jan 15, 2014</span>
											                    </h5>
											                    <p>Lorem ipsum dolor sit amet, 
																consectetur adipisicing elit. 
																Corporis accusamus alias doloribus 
																aliquam voluptas cupiditate animi 
																officia temporibus dicta iure.</p>
											                </div>
									                    </article>
									                </li>
									                <li>
									                    <article class="comment">
									                        <img src="images/people/1.jpg" alt="avatar" class="comment-avatar">
									                        <div class="comment-content">
											                    <h5 class="comment-author skew-25">
											                        <span class="author-name skew25">John Martin</span>
											                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
											                        <span class="comment-date skew25">Jan 15, 2014</span>
											                    </h5>
											                    <p>Lorem ipsum dolor sit amet, 
																consectetur adipisicing elit. 
																Corporis accusamus alias doloribus 
																aliquam voluptas cupiditate animi 
																officia temporibus dicta iure.</p>
											                </div>
									                    </article>
									                </li>
									            </ul>
									        </li> --><!-- End .child-comment -->
									        @forelse($comments as $comment)
									        <li>
									            <article class="comment">
									                <img src="holder.js/64x64?random=yes&text={{ strtoupper(substr($comment->name, 0, 1)) }}&size=20" style="margin-left: 9px;">
									                <div class="comment-content">
									                    <h5 class="comment-author skew-25">
									                        <span class="author-name skew25">{{ $comment->name }}</span>
									                        <a href="#" class="comment-reply main-bg"><span class="skew25"><i class="fa fa-comment"></i>reply</span></a>
									                        <span class="comment-date skew25">{{ $comment->created_at }}</span>
									                    </h5>
									                    <p>{{{ $comment->content }}}</p>
									                </div>
									            </article><!-- End .comment -->
									        </li>		
											@empty
											No Comment
											@endforelse
									        			        
									    </ul><!-- End .comment-list -->
									</div>
									<form  action="{{ route('blog.store_comment', $post->id) }}" method="POST" class="leave-comment contact-form">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
									    <h3 class="block-head">Leave A Comment</h3>
				    					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet purus quis metus imperdiet fermentum. Suspendisse hendrerit id lacus id lobortis. Morbi accumsan nulla ac urna elementum dapibus. Phasellus eu felis orci, sit amet placerat eros. Sed aliquet iaculis nisi id convallis. Quisque nec ligula ut felis hendrerit iaculis quis sed neque.</p> -->
				    					<div class="row">
					    					<div class="cell-6">
						    					<div class="form-input">
						    						<input type="text" placeholder="Your Name" name="name" required>
						    					</div>
					    					</div>
					    					<div class="cell-6">
					    						<div class="form-input">
						    						<input type="email" placeholder="Your Email" name="email" required>
						    					</div>
					    					</div>
					    					<div class="cell-12">
						    					<div class="form-input">
						    						<textarea class="txt-box textArea" name="content" cols="40" rows="7" id="messageTxt"  placeholder="Message" spellcheck="true" required></textarea>
						    					</div>
					    					</div>
					    					<div class="cell-12">
					    						<input type="submit" class="btn btn-large main-bg" value="Comment">
					    					</div>
				    					</div>
									</form>
			                	</div>
@else
<div class="content" style="margin-top: 10px;text-align: center;">
	<div class="alert alert-warning" role="alert" >Posting tidak ditemukan</div>
</div>
@endif
@stop

@section('foot')
<script type="text/javascript" src="{{ asset('res/holderjs/holder.min.js') }}"></script>
@stop