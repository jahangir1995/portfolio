<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jahangir Blog</title>
  <link rel="icon" href="frontend/images/jahangir.jpg" sizes="32x32" type="image/png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  	<link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
	

</head>

<body>
	<section class="header-top">
		<div class="container box_1170">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<a href="index.html" class="logo">
						<img src="{{asset('frontend/images/blog/logo.png')}}" alt="">
					</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 search-trigger">
					<a href="#" class="search">
						<i class="lnr lnr-magnifier" id="search"></i></a>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End header top Area =================-->

	<!-- Start header Area -->
	<header id="header">
		<div class="container box_1170 main-menu">
			<div class="row align-items-center justify-content-center d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="{{route('index')}}">Home</a></li>
					
						<li><a href="{{route('blog')}}">blog Home</a></li>
						<li class="menu-has-children"><a href="">Book</a>
							<ul>
								<li><a href="elements.html">Novel</a></li>
								<li><a href="elements.html">Academic</a></li>
							
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Category</a>
							<ul>
								<?php 
							$category = DB::table('categories')->get();
							foreach($category as $categories){?>
								<li><a href="blog-details.html">{{$categories->category_name}}</a></li>
								<?php }?>
								
							</ul>
						</li>
						<li><a href="{{ route('contact')}}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="search_input" id="search_input_box">
			<div class="container box_1170">
				<form method="GET" action="{{route('search')}}" class="d-flex justify-content-between">
					<input type="text" name="query " class="form-control" id="search_input" placeholder="Search Here">
					{{-- <input type="submit" name="submit" value="search"> --}}
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End header Area -->
	@yield('postslider')


      	<!-- Start main body Area -->
	<div class="main-body section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					
				@yield('blog_content');




					<!-- Start Post Area -->
				</div>


				<div class="col-lg-4 sidebar">
					<div class="single-widget protfolio-widget">
						<img class="img-fluid" src="frontend/images/blog/user2.png" alt="">
						<a href="#">
							<h4>Md jahangir Alam</h4>
						</a>
						<p class="p-text">
							Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend
							money on boot camp whenyou can get. Boot camps have itssuppor ters andits detractors.
						</p>
						<ul class="social-links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
						<img src="frontend/images/blog/sign.png" alt="">
					</div>

					
					<div class="single-widget category-widget">
						<h4 class="title">Post Categories</h4>
						<ul>
							<?php 
							$category = DB::table('categories')->get();
							foreach($category as $categories){?>
							<li>
								<a href="#" class="justify-content-between align-items-center d-flex">
									<p><img src="frontend/images/blog/bullet.png" alt="">{{$categories->category_name}}</p>
								</a>
							</li>
							<?php }?>
							
						</ul>
					</div>

					<div class="single-widget tags-widget">
						<h4 class="title">Post Tags</h4>
						<ul>
							<?php 
							$tag =DB::table('tags')->get();
							foreach($tag as $tags){ ?>
							<li><a href="#">{{$tags->name}}</a></li>
							<?php }?>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Start main body Area -->
    

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">Newsletter</h6>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li><img src="frontend/images/blog/i1.jpg" alt=""></li>
							<li><img src="frontend/images/blog/i2.jpg" alt=""></li>
							<li><img src="frontend/images/blog/i3.jpg" alt=""></li>
							<li><img src="frontend/images/blog/i4.jpg" alt=""></li>
							<li><img src="frontend/images/blog/i5.jpg" alt=""></li>
							<li><img src="frontend/images/blog/i6.jpg" alt=""></li>
							<li><img src="frontend/images/blog/i7.jpg" alt=""></li>
							<li><img src="frontend/images/blog/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="frontend/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{asset('frontend/js/easing.min.js')}}"></script>
	<script src="{{asset('frontend/js/hoverIntent.js')}}"></script>
	<script src="{{asset('frontend/js/superfish.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.tabs.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/js/mail-script.js')}}"></script>
	<script src="{{asset('frontend/js/main.js')}}"></script>

	
 

</body>
</html>