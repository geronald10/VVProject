
<!DOCTYPE html>
<html class="no-js">
	<head>
		<title>VV - Recommendation List - Smartphone Auto Recommendation</title>
		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">
		<!-- Bootstrap Core CSS -->
	    <!-- <link href="{{ URL::to('/assets/main/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
	    <!-- Grayscal min CSS -->
	    <!-- <link href="{{ URL::to('/assets/main/css/grayscale.min.css') }}"> -->
		<!-- Google Webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Animate.css -->
		<link rel="stylesheet" href="{{ URL::to('/assets/hydrogen/css/animate.css') }}">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="{{ URL::to('/assets/hydrogen/css/icomoon.css') }}">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ URL::to('/assets/hydrogen/css/magnific-popup.css') }}">
		<!-- Salvattore -->
		<link rel="stylesheet" href="{{ URL::to('/assets/hydrogen/css/salvattore.css') }}">
		<!-- Theme Style -->
		<link rel="stylesheet" href="{{ URL::to('/assets/hydrogen/css/style.css') }}">
		<!-- Modernizr JS -->
		<script src="{{ URL::to('/assets/hydrogen/js/modernizr-2.6.2.min.js') }}"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

	<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll">
                    <span class="light">VV</span>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="get-recommendation-nav-button" href="{{ url('/') }}">GET RECOMMENDATION</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
			
	<div id="fh5co-main">
		<div class="container">
		<div class="row">
		<h3 class="row-title">Recommendation Result:</h3>
		<div class="col-md-12 label-caption">Categories :
			<span class="label label-primary-caption">Video and Photography</span>
			<span class="label label-primary-caption">Games</span>
			<span class="label label-primary-caption">Utilities</span>
		</div>

        <div id="fh5co-board" data-columns>
        	<div class="item">
        		<a href="about.html">
	        		<div class="animate-box">
		        		<img src="/assets/hydrogen/images/apple-iphone-7.jpg" alt="filtered smartphone">
	        		</div>
	        		<!-- <div class="fh5co-item-title animate-box">Iphone 7 128GB</div> -->
	    			<div class="fh5co-desc">Iphone 7 128GB</div>
    			</a>
        	</div>
        	<div class="item">
     			<a href="about.html">
	        		<div class="animate-box">
	        			<img src="/assets/hydrogen/images/lenovo-a7010-hero.png" alt="filtered smartphone">
	        		</div>
	        		<div class="fh5co-desc">Lenovo A7010 Hero</div>
        		</a>
        	</div>
        	<div class="item">
        		<a href="about.html">
	        		<div class="animate-box">
		        		<img src="/assets/hydrogen/images/apple-iphone-7.jpg" alt="filtered smartphone">
	        		</div>
	        		<!-- <div class="fh5co-item-title animate-box">Iphone 7 128GB</div> -->
	    			<div class="fh5co-desc">Iphone 7 128GB</div>
    			</a>
        	</div>
        	<div class="item">
     			<a href="about.html">
	        		<div class="animate-box">
	        			<img src="/assets/hydrogen/images/lenovo-a7010-hero.png" alt="filtered smartphone">
	        		</div>
	        		<div class="fh5co-desc">Lenovo A7010 Hero</div>
        		</a>
        	</div>
        	<div class="item">
        		<a href="about.html">
	        		<div class="animate-box">
		        		<img src="/assets/hydrogen/images/apple-iphone-7.jpg" alt="filtered smartphone">
	        		</div>
	        		<!-- <div class="fh5co-item-title animate-box">Iphone 7 128GB</div> -->
	    			<div class="fh5co-desc">Iphone 7 128GB</div>
    			</a>
        	</div>
        	<div class="item">
     			<a href="about.html">
	        		<div class="animate-box">
	        			<img src="/assets/hydrogen/images/lenovo-a7010-hero.png" alt="filtered smartphone">
	        		</div>
	        		<div class="fh5co-desc">Lenovo A7010 Hero</div>
        		</a>
        	</div>
        </div>
        </div>
       </div>
	</div>

	<footer id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p><small>&copy; Hydrogen Free HTML5 Template. All Rights Reserved. <br>Designed by: <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> | Images by: <a href="http://pexels.com" target="_blank">Pexels</a> </small></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- jQuery -->
	<script src="{{ URL::to('/assets/hydrogen/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::to('/assets/hydrogen/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::to('/assets/hydrogen/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ URL::to('/assets/hydrogen/js/jquery.waypoints.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ URL::to('/assets/hydrogen/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Salvattore -->
	<script src="{{ URL::to('/assets/hydrogen/js/salvattore.min.js') }}"></script>
	<!-- Main JS -->
	<script src="{{ URL::to('/assets/hydrogen/js/main.js') }}"></script>
	</body>
</html>
