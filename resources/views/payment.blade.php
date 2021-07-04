@extends('layout')

@section('content')


	<!--CRYPTO PRICING-->

    <section id="pricing">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1>EnrolL Now</h1>
                <div class="content-title-underline"></div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-12 wow animated zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class=" pricing-box text-center">


                        <!-- F0RM F0R paystack payment  -->

                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                  <p>Get course title</p>
                   <p>Price</p>
                </div>
            </p>
            <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="3">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

            <p>
                <button class="btn btn-blue btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </p>
        </div>
    </div>
</form>




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
						   <iframe class="mapcontrol" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15845.332127796608!2d7.387118469775384!3d6.850623600000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044e94d0e2cf20d%3A0x9eebd527c8e73fb3!2sNANOCODES%20PROGRAMING!5e0!3m2!1sen!2sng!4v1618642038242!5m2!1sen!2sng" width="1135" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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
