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
						<a class="btn btn-lg btn-general btn-white" href="#pricing" role="button">buy or sell crypto</a>

					</div>

				</div>

			</div>

		</div>

	</section>

	<!--CRYPTO PRICING-->

    <section id="pricing">

        <div class="content-box">
            <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1>Cryptocurrency Exchange </h1>
                <div class="content-title-underline"></div>
            </div>
                        <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"></a></div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
              {
              "symbols": [
                {
                  "proName": "FOREXCOM:SPXUSD",
                  "title": "S&P 500"
                },
                {
                  "proName": "FOREXCOM:NSXUSD",
                  "title": "Nasdaq 100"
                },
                {
                  "proName": "FX_IDC:EURUSD",
                  "title": "EUR/USD"
                },
                {
                  "proName": "BITSTAMP:BTCUSD",
                  "title": "BTC/USD"
                },
                {
                  "proName": "BITSTAMP:ETHUSD",
                  "title": "ETH/USD"
                }
              ],
              "showSymbolLogo": true,
              "colorTheme": "light",
              "isTransparent": false,
              "displayMode": "adaptive",
              "locale": "en"
            }
              </script>
            </div>
            <!-- TradingView Widget END -->

            <div class="container">
                <div class="row">

                    <div class="col-md-12 wow animated zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                <div class=" pricing-box text-center">


                        <!-- F0RM F0R CRYPTRO  -->

                        <form action="" method="POST">
                            @csrf
                              <div class="container">
                                <!-- <h1>Register to buy or sell cryptocurrency-</h1> -->
                                <p>Please fill in this form</p>
                                <hr>


                                <input name="name" value="" type="text" placeholder="Enter Name" required><br>
                                <input name="email" value="" type="text" placeholder="Email address" required><br>
                                <input name="phone" value="" type="text" placeholder="Phone Number" required><br>

                                <!-- <label for="psw"><b>Password</b></label> -->
                                <input name="currency" value="" type="text" placeholder="Enter Cryptocurrency eg BTC for Bitcoin" required>

                                <!-- <label for="psw-repeat"><b>Repeat Password</b></label> -->
                                <input name="amount" value="" type="text" placeholder="Enter Amount" required><br>

                                <hr>

                                <!-- <p>By sending this message you agree to our <a href="#">Terms & Privacy</a>.</p> -->
                                <button type="submit" class="registerbtn">Send Order</button>
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
