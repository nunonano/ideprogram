			<!-- Footer start -->
		    <footer id="footWrapper">
		    	<div class="footer-top">
				    <div class="container">
					    <div class="row">
					    	<!-- main menu footer cell start -->
						    <div class="cell-3">
							    <h3 class="block-head">Main Menu</h3>
							    <ul class="footer-menu">
								    <li><a href="ideprogram.xyz">Home Page</a></li>
								    <li><a href="#">About Me</a></li>
								    <li><a href="wisnusaputra.xyz">My Portfolio</a></li>
								    <!-- <li><a href="FAQ.html">FAQ</a></li> -->
							    </ul>
						    </div>
						    <!-- main menu footer cell start -->
						    
						    <!-- Tags Cloud footer cell start -->
						    <div class="cell-3">
							    <h3 class="block-head">Tag Cloud</h3>
							    <div class="tags">
							    	@foreach($tags as $tag)
										<a href="{{ route('blog.tag', $tag->slug) }}" style="font-size:{{ $tag->post->count() + 12 }}px">{{ $tag->name }}</a>
									@endforeach
							    </div>
						    </div>
						    <!-- Tags Cloud footer cell start -->
						    

						    
						    <!-- contact us footer cell start -->
					    	<div class="cell-3">
							    <h3 class="block-head">Keep in Touch</h3>
							    <ul>
								    <li class="footer-contact"><i class="fa fa-home"></i><span>Jakarta Utara, Indonesian.</span></li>
								    <li class="footer-contact"><i class="fa fa-globe"></i><span><a href="#">wisnu-saputra@outlook.com</a></span></li>
								    <li class="footer-contact"><i class="fa fa-phone"></i><span>+62 8788 88X XX77</span></li>
								    <!-- <li class="footer-contact"><i class="fa fa-map-marker"></i><span><a href="contact.html#map_canvas">View our map</a></span></li> -->
							    </ul>
						    </div>
						    <!-- contact us footer cell end -->
						    
						    
						    
						    <!-- latest tweets footer cell start -->
						    <div class="cell-3">
						    	<h3 class="block-head">Latest Tweets</h3>
						    	<div id="twitter-feed" class="tweet"></div>
						    </div>
						    <!-- latest tweets footer cell start -->
						    
						    
					    </div>
				    </div>	
			    </div>
			    
			    <!-- footer bottom bar start -->
			    <div class="footer-bottom">
				    <div class="container">
			    		<div class="row">
				    		<!-- footer copyrights left cell -->
				    		<div class="copyrights cell-5">&copy; Copyrights <b>ideProgram</b> 2016.</div>
				    		
				    		<!-- footer social links right cell start -->
						    <div class="cell-7">
							    <ul class="social-list right">								    
								    <li class="skew-25"><a href="#" data-title="facebook" data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="linkedin" data-tooltip="true"><span class="fa fa-linkedin skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="skype" data-tooltip="true"><span class="fa fa-skype skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="twitter" data-tooltip="true"><span class="fa fa-twitter skew25"></span></a></li>
								    <!-- <li class="skew-25"><a href="#" data-title="YouTube" data-tooltip="true"><span class="fa fa-youtube skew25"></span></a></li> -->
							    </ul>
						    </div>
						    <!-- footer social links right cell end -->
						    
			    		</div>
				    </div>
			    </div>
			    <!-- footer bottom bar end -->			    
		    </footer>
		    <!-- Footer end -->