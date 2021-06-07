@extends('layout')

@section('content')

	
	<!-- HOME -->

	<section id="home">
		<div id="livestream-cover" class="bg-parallax  animated fadeIn">
			<div id="home-content-box">
				<div id="home-inner-content" style="color:white;" class="text-center">
					<div id="home-heading" class="animated zoomIn">
						<h1>JOIN ONLINE CLASSES</h1>

					</div>
					<div class="animated zoomIn">
						<!-- <a class="btn btn-lg btn-general btn-white" href="/signup" role="button">SIGN UP</a>
                        <a class="btn btn-lg btn-general btn-white" href="/login" role="button">LOG IN</a> -->

						<div class="classform">
														
							<div class="container custom-login">
								<div class="row">
									<div class="col-sm-4 col-sm-offset-4" >
									<form action="login" method="POST" class="form-signin">
									@csrf
								<div class="text-center mb-4">
									<!-- <img class="mb-4" src="" alt="" width="72" height="72"> -->
								</div>
								<main>
								<h1 style="color:white;">Login</h1>
								<div class="form-label-group">
								<!-- <label for="inputEmail">Email address</label> -->
									<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
									
								</div>
								<br>

								<div class="form-label-group">
								<!-- <label for="inputPassword">Password</label> -->
									<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
								</div>
								<br>
								<!-- <div class="checkbox mb-3">
									<label>
									<input type="checkbox" value="remember-me"> Remember me
									</label>
								</div> -->
								<button class="btn btn-blue btn-block" type="submit">Login</button><br>
								<p style="color:white;">Not a user yet <a href="/signup" style="color:#34c6d3;">Sign up</a> here </p>
								
								</form>
									</div>
									</main>
								</div>
							</div>
						</div>
					</div>
           
				</div>

			</div>

		</div>

	</section>
	
	<!--CONTACT -->
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
