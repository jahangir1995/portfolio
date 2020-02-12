<div class="single-widget popular-posts-widget">
						<div class="jq-tab-wrapper" id="horizontalTab">
							<div class="jq-tab-menu">
								<div class="jq-tab-title active" data-tab="1">Popular</div>
								<div class="jq-tab-title" data-tab="2">Latest</div>
							</div>
							<div class="jq-tab-content-wrapper">
								<div class="jq-tab-content active" data-tab="1">
								
									@foreach($posts as $post)
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="frontend/images/blog/posts/carousel/stories3.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">{{$post->title}} <br>
													</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									@endforeach
								
									
								</div>

								<div class="jq-tab-content active" data-tab="2">
									@foreach($posts as $post)									
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" src="frontend/images/blog/posts/carousel/stories4.jpg" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="">{{$post->title}} <br>
													</a></h6>
											<p>September 14, 2018</p>
										</div>
									</div>
									@endforeach()

								
								</div>
							</div>
						</div>
					</div>
