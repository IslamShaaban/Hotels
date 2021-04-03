<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Grand Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ahmed M. Saleh" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'>

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/superfish.css">
	<!-- Owl Slider -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/owl.carousel.css">
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/owl.theme.default.min.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/cs-select.css">
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="{{url('')}}/design/luxe/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{url('')}}/design/luxe/js/modernizr-2.6.2.min.js"></script>

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<a href="">
						<img src="{{url('')}}/design/luxe/images/logo.png" alt="logo" style="height: 50px; margin-top: 10px;">
					</a>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="">Home</a></li>
							<li><a href="#featured-hotel">Feature</a></li>
							<li><a href="#hotel-facilities">Facilities</a></li>
							<li><a href="{{route('dashboard.home')}}" style="color: brown; font-weight: bold;">Book</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url({{url('')}}/design/luxe/images/slider1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Grand Hotel</span></p>
		   						<h2>Reserve Room for Family Vacation</h2>
			   					<p>
			   						<a href="{{route('dashboard.home')}}" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url({{url('')}}/design/luxe/images/slider2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Grand Hotel</span></p>
		   						<h2>Make Your Vacation Comfortable</h2>
			   					<p>
			   						<a href="{{route('dashboard.home')}}" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url({{url('')}}/design/luxe/images/slider3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Grand Hotel</span></p>
		   						<h2>A Best Place To Enjoy Your Life</h2>
			   					<p>
			   						<a href="{{route('dashboard.home')}}" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>

	<div id="featured-hotel" class="fh5co-bg-color" style="margin-top: 50px;">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Featured Hotels</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url({{url('')}}/design/luxe/images/hotel_feture_1.jpg);">
						<div class="descrip text-center">
							<p><small>For as low as</small><span>$100/night</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>Deluxe Hotel</h3>
						<p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac interdum a, pulvinar ac massa. Nullam malesuada congue </p>
						<p><a href="{{route('dashboard.home')}}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url({{url('')}}/design/luxe/images/hotel_feture_2.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$99/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Hotel Bora</h3>
							<p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, 
							in suscipit urna condimentum sed. </p>
							<p><a href="{{route('dashboard.home')}}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url({{url('')}}/design/luxe/images/hotel_feture_3.jpg);">
							<div class="descrip text-center">
								<p><small>For as low as</small><span>$99/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>D’Morvie</h3>
							<p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. </p>
							<p><a href="{{route('dashboard.home')}}" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Hotel Facilities</h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<nav class="tabs-nav">
					<a href="#" class="active" data-tab="tab1">
						<i class="flaticon-restaurant icon"></i>
						<span>Restaurant</span>
					</a>
					<a href="#" data-tab="tab2">
						<i class="flaticon-cup icon"></i>
						<span>Bar</span>
					</a>
					<a href="#" data-tab="tab3">
					
						<i class="flaticon-car icon"></i>
						<span>Pick-up</span>
					</a>
					<a href="#" data-tab="tab4">
						
						<i class="flaticon-swimming icon"></i>
						<span>Swimming Pool</span>
					</a>
					<a href="#" data-tab="tab5">
						
						<i class="flaticon-massage icon"></i>
						<span>Spa</span>
					</a>
					<a href="#" data-tab="tab6">
						
						<i class="flaticon-bicycle icon"></i>
						<span>Gym</span>
					</a>
				</nav>
				<div class="tab-content-container">
					<div class="tab-content active show" data-tab-content="tab1">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="{{url('')}}/design/luxe/images/tab_img_1.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Restaurant</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>24 Hours</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab2">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="{{url('')}}/design/luxe/images/tab_img_2.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Bars</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>24 Hours</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab3">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="{{url('')}}/design/luxe/images/tab_img_3.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Pick Up</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>24 Hours</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab4">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="{{url('')}}/design/luxe/images/tab_img_4.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Swimming Pool</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>24 Hours</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="{{url('')}}/design/luxe/images/tab_img_5.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Spa</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>24 Hours</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab6">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="{{url('')}}/design/luxe/images/tab_img_6.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">World Class</span>
									<h3 class="heading">Gym</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem officiis placeat dignissimos molestias temporibus, in! Minima quod, consequatur neque aliquam.</p>
									<p class="service-hour">
										<span>Service Hours</span>
										<strong>24 Hours</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="">
						<img src="{{url('')}}/design/luxe/images/logo.png" alt="logo" style="height: 75px;">
					</a>
                    <p style="margin-top: 15px;">A Best Place To Enjoy Your Life</p>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="copyright">
						<p>
							<small>
								&copy; 2021 ITI OS 41 <br> All Rights Reserved.
								<br>
								Designed by <a href="" target="_blank">OS41</a> 
							</small>
						</p>
					</div>
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="{{url('')}}/design/luxe/js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="{{url('')}}/design/luxe/js/hoverIntent.js"></script>
	<script src="{{url('')}}/design/luxe/js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="{{url('')}}/design/luxe/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{url('')}}/design/luxe/js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="{{url('')}}/design/luxe/js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{url('')}}/design/luxe/js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="{{url('')}}/design/luxe/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="{{url('')}}/design/luxe/js/classie.js"></script>
	<script src="{{url('')}}/design/luxe/js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="{{url('')}}/design/luxe/js/jquery.flexslider-min.js"></script>

	<script src="{{url('')}}/design/luxe/js/custom.js"></script>

</body>
</html>
