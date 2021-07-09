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

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" style="background-color: rgb(59, 59, 63);" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"style="background-color: rgb(59, 59, 63);" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" style="background-color: rgb(59, 59, 63);" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" style="background-color: rgb(59, 59, 63);" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form></div>
                </main>
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
