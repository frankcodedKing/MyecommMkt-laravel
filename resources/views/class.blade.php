@extends('layout')

@section('content')

	<!--HEADER-->
	<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container-fliud">
				<div class="nav-wrapper">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#home">
							<img src="img/NEWLOGO.png" alt="NANOCODES" style="max-width: 150px;">
						</a>

					</div>
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav">
							<li><a  href="/home">Home</a></li>
							<li><a  href="#services">Services</a></li>
							<li><a  href="#about">About</a></li>
							<!-- <li><a href="#team">Team</a></li> -->
							<li><a  href="#contact">Contact US</a></li>
							<li><a  href="/crypto">Buy/Sell Cryptocurrency</a></li>
							<li><a  href="/livestream">Join online class</a></li>
						</ul>

					</div>

				</div>

			</div>

		</nav>
	  

	</header>
	<!-- HOME -->

	<section id="home">
		<div id="home-cover" class="bg-parallax  animated fadeIn">
			<div id="home-content-box">
				<div id="home-inner-content" class="text-center">
					<div id="home-heading" class="animated zoomIn">
						<h1>Welcome user.name</h1>

					</div>
					<div id="home-btn" class="animated zoomIn">
						<a class="btn btn-lg btn-general btn-white" href="#Work" role="button">The tech hub for all</a>

					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- SERVICES -->

	<section id="services">
		<div class="content-box">
			<div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
				<h1> Services </h1>
				<div class="content-title-underline"></div>
			</div>
			<div class="container wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item-icon">
								<i class="fa fa-laptop fa-3x"></i>
							</div>
							<div class="service-item-title">
								<h1>Web Design and Development</h1>
							</div>
							<div class="service-item-content">
								<p>We offer Web design & development services.
								</p>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item-icon">
								<i class="fa fa-search fa-3x"></i>
							</div>
							<div class="service-item-title">
								<h1>Digital Marketing and SEO optimization</h1>
							</div>

							<div class="service-item-content">
								<p>SEO and digital marketing services for private and public enterprises.
								</p>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item-icon">
								<i class="fa fa-tablet fa-3x"></i>
							</div>
							<div class="service-item-title">
								<h1>MOBILE APPS</h1>
							</div>

							<div class="service-item-content">
								<p>Creating Customised software applications with effective UI/UX design services.
								</p>
							</div>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item-icon">
								<i class="fa fa-code fa-3x"></i>
							</div>
							<div class="service-item-title">
								<h1>PROGRAMMING LANGUAGES</h1>
							</div>

							<div class="service-item-content">
								<p>We offer courses on Web design,Java,Python,<br>Frameworks-Laravel,Django CMS-Wordpress,Jumla etc.
								</p>
							</div>
						</div>
					</div>
				   
					<div class="col-md-4">
						<div class="service-item">
							<div class="service-item-icon">
								<i class="fa fa-btc fa-3x"></i>
							</div>
							<div class="service-item-title">
								<h1>CRYPTOCURRENCY EXCHANGE</h1>
							</div>

							<div class="service-item-content">
								<p>We buy and sell cryptocurrencies such as bitcoin,ethereum etc
								</p>
							</div>
						</div>
					</div>
				</div>




			</div>


		</div>
	</section>

		<div id="footer-bottom">
				<div class="container">
					<div class="row">
						 <div class="col-md-6">
						   <div id="copyrights">
							   <p>Copyrights &copy; 2021 All Rights Reserved by Nanocodes programming</p>
							 </div>
						</div>
						
						<div class="col-md-6">
							<div id="footer-menu">
								<ul>
								<li><a  href="index.html">Home</a>/</li>
								<li><a  href="#services">Services</a>/</li>
								<li><a  href="#about">About</a>/</li>
								<!-- <li><a href="#team">Team</a>/</li>/ -->
								<li><a  href="#contact">Contact US</a>/</li>
								<li><a  href="/crypto">Buy/Sell Cryptocurrency</a></li>
								</ul>
						 
							</div>
					</div>
	
				</div>
				</div>
				</div>
				<a href="#home" title="home" role="button" id="back-top" class="btn btn-sm btn-blue btn-back-top smooth-scroll">
					<i class="fa fa-angle-up"></i>
				</a>
	</footer>

		<!--GOOGLEMAP-->

   
	<!--Jquery lib file-->
	<script src="js/jquery.js"></script>

	<!--OWL CAROUSEL JS-->
	<script src="js/owl-carousel/owl.carousel.min.js"></script>

	<!--BOOTSRTAP FOR JS-->
	<script src="js/bootstrap/bootstrap.min.js"></script>

	<!--MAGNIFY POPUP JS LIB-->
	<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!--WOW JS LIB-->
	<script src="js/wow/wow.min.js"></script>

	<!--counter js-->
	<script src="js/counter/jquery.waypoints.min.js"></script>
	<script src="js/counter/jquery.counterup.min.js"></script>

	<!--JS FILES ie CUSTOM js -->
	<script src="js/custom.js"></script>
@endsection
