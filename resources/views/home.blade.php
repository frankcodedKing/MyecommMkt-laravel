@extends('layout')

@section('content')

	
	<!-- HOME -->

	<section id="home">
		<div id="home-cover" class="bg-parallax  animated fadeIn">
			<div id="home-content-box">
				<div id="home-inner-content" class="text-center">
					<div id="home-heading" class="animated zoomIn">
						<h1>NANOCODES<br>PROGRAMMING</h1>

					</div>
					<div id="home-btn" class="animated zoomIn">
						<a class="btn btn-lg btn-general btn-white" href="/login" role="button">Learn to code</a>

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

	<!-- ABOUT -->

	<section id="about">
		<!--diagonal image on about page-->
		<div id="about-bg-diagonal" class="bg-parallax">

		</div>
		<!--about content on left of image-->
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div id="about-content-box">
						<div id="about-content-box-outer">
							<div id="about-content-box-inner">
								<div class="content-title wow animated fadeInDown" data-wow-duration="1s"
									data-wow-delay="0.5s">
									<h1> ABOUT us </h1>
									<div class="content-title-underline"></div>
								</div>
								<div id="about-item-content">
									<p class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
										We create awesome websites and softwares for schools,
										companies, government parastatals and individuals and also offer web support and maintenance services.

									</p>

								</div>
								<div id="about-btn" class="wow animated fadeInUp" data-wow-duration="1s"
									data-wow-delay="0.5s">
									<!-- <a class="btn btn-lg btn-general btn-blue" href="#work">
										our Work
									</a> -->

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

   
	<!--TEAM SECTION-->

	<!-- <section id="team">
		<div class="content-box">
			<div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
				<h1>TEAM</h1>
				<div class="content-title-underline"></div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-members" class="owl-carousel owl-theme wow animated fadeInUp"
							data-wow-duration="1s" data-wow-delay="0.5s">
							<div class="team-member">
								<img src="img/team/team-1.jpg" class="img-responsive" alt="team member">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Larry Odogwu</h4>
									<h4 class="team-member-role">CEO</h4>
									<ul class="social-icon-list">
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i
													class="fa fa-google-plus"></i></a></li>
									</ul>

								</div>
							</div>
							
							<div class="team-member">
								<img src="img/team/nan.jpg" class="img-responsive" alt="team member">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Ozioko Harrison</h4>
									<h4 class="team-member-role">CEO/Sr. Developer </h4>
									<ul class="social-icon-list">
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i
													class="fa fa-google-plus"></i></a></li>
									</ul>

								</div>
							</div>
							<div class="team-member">
								<img src="img/team/frank.png" class="img-responsive" alt="team member">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Franklin</h4>
									<h4 class="team-member-role">Developer</h4>
									<ul class="social-icon-list">
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i
													class="fa fa-google-plus"></i></a></li>
									</ul>

								</div>
							</div>
							<div class="team-member">
								<img src="img/team/amaka.jpg" class="img-responsive" alt="team member">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Faith Chiamaka</h4>
									<h4 class="team-member-role">Secretary/Digital Marketer</h4>
									<ul class="social-icon-list">
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#" class="social-icon icon-gray"><i
													class="fa fa-google-plus"></i></a></li>
									</ul>

							 </div>
							</div>


						</div>

					</div>

				</div>

			</div>
		</div>
	</section> -->

   
	<!--STATS-->

	<section id="stat">
		<div id="stat-cover" class="bg-parallax">

			<div class="content-box">
				<div class="content-title content-title-white h1 wow animated fadeInDown" data-wow-duration="1s"
					data-wow-delay="0.5s">
					<h1> WE KEEP IMPROVING </h1>
					<div class="content-title-underline"></div>
				</div>

				<div class="container">
					<div class="row text-center  wow animated bounceInLeft" data-wow-duration="1s"
						data-wow-delay="0.5s">

						<div class="col-md-3">
							<div class="stat-item">
								<i class="fa fa-cloud-download fa-5x"></i>
								<h2> <span class="counter"> 500 </span> <span>+</span></h2>
								<p>Clients</p>
							</div>

						</div>
						<div class="col-md-3">
							<div class="stat-item">
								<i class="fa fa-star-o fa-5x"></i>
								<h2> <span class="counter"> 50 </span> <span>+</span></h2>
								<p>Awards</p>
							</div>

						</div>

						<div class="col-md-3">
							<div class="stat-item">
								<i class="fa fa-check fa-5x"></i>
								<h2> <span class="counter"> 1000 </span> <span>+</span></h2>
								<p>Recommendations</p>
							</div>

						</div>
						<div class="col-md-3">
							<div class="stat-item">
								<i class="fa fa-heart-o fa-5x"></i>
								<h2> <span class="counter"> 19000 </span> <span>+</span></h2>
								<p>Likes</p>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>

	</section>

	

	<!--CONTACT -->

	<footer>
		<div id="contact">   
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div id="left">
				   <h3> NANOCODES </h3>

				   <p> We believe in <strong>Simple</strong>, <strong>Clean</strong> and 
					<strong>Modern</strong> design standards with a responsive approach.</p>
					<div id="address-info">
				   <address>
					   <strong>Headquaters:</strong>
					   <p>Shop BO7 Patsyl Plaza Opp Kenechukwu Microfinance Bank Nsukka<br>Enugu</p>

				   </address>
				   <div id="phone-email">
					   <p><strong> Phone: </strong> (+234)8124946594 <br>                       
						<strong> Email: </strong> info@nanocodes.com.ng</p>

				   </div>
			
					</div>
				   
							<ul class="social-icon-list">
									<li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#" class="social-icon icon-white"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#" class="social-icon icon-white"><i class="fa fa-google-plus"></i></a>
									</li>
									<li><a href="#" class="social-icon icon-white"><i
													class="fa fa-youtube-play"></i></a></li>
								</ul>
			
				</div>
				


			</div>


			<div class="col-md-6">
					<div id="right">
				   <h3> CONTACT US </h3>
				   <form action="" method="POST" >
				   @csrf
					   <input name="name" value="" type="text" placeholder="Enter Name" class="form-control"><br>
					   <input name="email" value="" type="text" placeholder="Email address" class="form-control"><br>
					   <input name="phone" value="" type="text" placeholder="Phone Number" class="form-control"><br>
					  <textarea name="message" value="" cols="30" rows="5" class="form-control" placeholder="Send us a message..."></textarea>
					  <!-- <button id="send-btn" type="submit" class="btn btn-lg btn-general btn-white"> -->
					  <div id="send-btn">
					   <button type="submit" name="submit" class="btn btn-lg btn-general btn-blue " role="button">Send</button>

				   </div>
					   
				   </form>
				 
 
			 </div>

		</div>
		
		</div>
	</div> 
		</div>

		<!-- googleMap -->
		<div id="map">   
			<div class="container">
				<div class="row">
						<div class="col-md-12">
							<div id="left">
						   <h3>Locate Us</h3>
						   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.332127796608!2d7.387118469775384!3d6.850623600000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044e94d0e2cf20d%3A0x9eebd527c8e73fb3!2sNANOCODES%20PROGRAMING!5e0!3m2!1sen!2sng!4v1618642038242!5m2!1sen!2sng" width="1135" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

						</div>
					</div>
	  
				</div>

				
			</div>
		</div>

<!-- google mapend -->
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
