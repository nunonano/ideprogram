						
							<aside class="cell-3 right-sidebar">
								<ul class="sidebar_widgets">
									<!-- <li class="widget search-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Blog Search</h3>
										<div class="widget-content">
											<form action="#" method="get">
										    	<input type="text" name="t" id="t2-search" class="txt-box" placeholder="Enter search keyword..." />
										    	<button type="submit" class="btn"><i class="fa fa-search"></i></button>
											</form>
										</div>
									</li> -->
									
									<li class="widget r-posts-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Recent Posts</h3>
										<div class="widget-content">
											<ul>
												@foreach($recentPosts as $post)
												<li>
													<div class="post-img">
														<img src="{{ asset('assets/images/people/1.jpg') }}" alt="">
													</div>
													<div class="widget-post-info">
														<h4>
															<a href="{{ route('blog.show', $post->slug) }}">
																{{ $post->title }}
															</a>
														</h4>
														<div class="meta">
															<span><i class="fa fa-clock-o"></i>Dec 28, 2013,</span><a href="blog-single.html"><i class="fa fa-comments"></i>15</a>
														</div>
													</div>
												</li>
												@endforeach
											</ul>
										</div>
									</li>
									
									<!-- <li class="widget blog-cat-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Blog Categories</h3>
										<div class="widget-content">
											<ul class="list list-ok alt">
												<li><a href="blog-single.html">Corporate news</a><span>[12]</span></li>
												<li><a href="blog-single.html">Information technology</a><span>[5]</span></li>
												<li><a href="blog-single.html">Web development</a><span>[3]</span></li>
												<li><a href="blog-single.html">Sports News</a><span>[25]</span></li>
											</ul>
										</div>
									</li>
									
									<li class="widget r-comments-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Recent Comments</h3>
										<div class="widget-content">
											<ul>
												<li>
													<div class="left"><i class="fa fa-comments"></i></div>
													<h5>admin on <a href="blog-single.html">Blog Post with Video</a></h5>
													<span><i class="fa fa-clock-o"></i>Dec 28, 2013</span>
												</li>
												<li>
													<div class="left"><i class="fa fa-comments"></i></div>
													<h5>admin on <a href="blog-single.html">Blog post title with Image</a></h5>
													<span><i class="fa fa-clock-o"></i>Dec 24, 2013</span>
												</li>
												<li>
													<div class="left"><i class="fa fa-comments"></i></div>
													<h5>admin on <a href="blog-single.html">Blog post title with Image</a></h5>
													<span><i class="fa fa-clock-o"></i>Dec 22, 2013</span>
												</li>
											</ul>
										</div>
									</li> -->
									
									<li class="widget tags-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Tag Cloud</h3>
										<div class="widget-content">
											<div class="tags">
												@foreach($tags as $tag)
												<a href="{{ route('blog.tag', $tag->slug) }}" style="font-size:{{ $tag->post->count() + 12 }}px">{{ $tag->name }}</a>
										    	@endforeach
										    </div>
										</div>
									</li>
									
									<!-- <li class="widget flickr-stream-w fx" data-animate="fadeInRight">
										<h3 class="widget-head">Flickr Stream</h3>
										<div class="widget-content">
											<ul id="flickrFeed-inner"></ul>
										</div>
									</li> -->
								</ul>
							</aside>
