<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!--META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- seo meta tags -->
    <meta name="description" content="Building modern responsive website with html5, css3, jQuery & bootstrap framework">
    <meta name="keywords" content="HTML5, CSS3, jQuery, Bootstrap, Web Design, Web Development, Responsive website, Modern website">

    <!--TITLE TAGS-->
    <title>NANOCODES</title>

    <!--FAV ICON-->
    <link rel="shortcut icon" href="img/FAVICON.jpg">

    <!--GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!--bootstrap FOR CSS-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!--CSS Animation lib-->
    <link rel="stylesheet" href="css/animate/animate.css">

    <!--CSS MAGNIFY POPUP-->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">

    <!-- OWL CAROUSEL CSS-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

    <!--css style-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">
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
                            @if(Session::has('user'))
							<li><a  href="/logout">Logout</a></li>
                            @else
                            <li><a  href="/login">Join Online Class</a></li>
                            @endif
						</ul>

					</div>

				</div>

			</div>

		</nav>
	  

	</header>
    @yield('content')
</body>

</html>