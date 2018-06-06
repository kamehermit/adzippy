<!DOCTYPE html>
<html lang="en">
<head>
	<title>Driver</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/driver.css')}}">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="header">
		<div class="opacity-layer">
			<div class="navbar">
				<div class="container-fluid">
					<a href="{{ URL::asset('/') }}" class="logo" style="text-decoration: none;">
						<div class="block">
							<div class="letter">
								adzippy
							</div>
						</div>
					</a>
					<div class="menu">
						<a type="button" onclick="openNav()">
							&#9776;	
						</a>					
					</div>
				</div>
			</div>
			<div class="header-content">
				<div class="container">
					<div class="page-title">
						Driver
						<p>
							<a href="https://play.google.com/store/apps/details?id=com.dubey.sanjeev.adzippy" class="btn download-app" download><i class="fab fa-google-play"></i> Download App</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="works">
		<div class="container-fluid">
			<div class="works-title">
				
				How it works
			</div>
			<div class="section1">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<div class="image">
							<img src="{{URL::asset('/images/install-01.png')}}" class="img-responsive">
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<div class="text">
							<h1>Join Us</h1>
							<p>Download the App on your Android device.</p>
							<p>Follow a few simple steps to complete your registration.</p>
							<p></p>
						</div>
					</div>
				</div>
			</div>
			<div class="section2">
				<div class="row">
					<div class="col-md-6">
						<div class="image">
							<img src="{{URL::asset('/images/campaign-01.png')}}" class="img-responsive">
						</div>
					</div>
					<div class="col-md-6">
						<div class="text">
							<h1>Drive</h1>
							<p>Fire up the app before driving.</p>
							<p>Choose an ongoing campaign.</p>
							<p>Click on 'Start'</p>
						</div>
					</div>
				</div>
			</div>
			<div class="section3">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<div class="image">
							<img src="{{URL::asset('/images/earn-01.png')}}" class="img-responsive">
						</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						
						<div class="text">
							<h1>Earn</h1>
							<p>Keep the app running while you drive.</p>
							<p>Earn cash while you are driving or stuck in traffic.</p>
							<p>Get paid at the end of the campaign.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="blue-banner">
		<br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<a href="https://play.google.com/store/apps/details?id=com.dubey.sanjeev.adzippy" class="btn download-app-dwn" download> <i class="fab fa-google-play"></i> Download App</a>
				</div>
			</div>
		</div>
		<br>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="title">
						<b>RESOURCES</b>	
					</div>
					<div class="links">
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Get Started</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="title">
						<b>ABOUT</b>	
					</div>
					<div class="links">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Our Team</a></li>
							<li><a href="#">What is Adzippy</a></li>
							<li><a href="#">Our Customers</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Partners</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="title">
						<b>SUPPORT</b>	
					</div>
					<div class="links">
						<ul>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Premium Support</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="title">
						Subscribe to our monthly newsletter
					</div>
					<br>
					<div class="input-group">
				      <input type="text" class="form-control" placeholder="Email">
				      <span class="input-group-btn">
				        <button class="btn btn-default btn-block" type="button">Go!</button>
				      </span>
				    </div><!-- /input-group -->
				    <hr>
				    <div class="social">
				    	<ul>
				    		<li><a href="#"><img src="{{URL::asset('/images/facebook.svg')}}"></a>&nbsp;&nbsp;</li>
				    		<li><a href="#"><img src="{{URL::asset('/images/twitter.svg')}}"></a>&nbsp;&nbsp;</li>
				    		<li><a href="#"><img src="{{URL::asset('/images/linkedin.svg')}}"></a>&nbsp;&nbsp;</li>
				    		<li><a href="#"><img src="{{URL::asset('/images/rss.svg')}}"></a>&nbsp;&nbsp;</li>
				    	</ul>
				    </div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12" align="right">
					<a href="#">Terms of Service</a>
					&nbsp;&nbsp;
					<a href="#">Privacy</a>
					&nbsp;&nbsp;
					<a href="#">Cookies</a>
					&nbsp;&nbsp;
			            ©
			            2017
			            Adzippy.com
          
				</div>
			</div>
		</div>
	</div>

	<!-- The overlay Menu-->
	<div id="myNav" class="overlay">

		<div class="navbar">
			<div class="container-fluid">
				<div class="logo_w">
					<div class="block_w">
						<div class="letter_w">
							adzippy
						</div>
					</div>
				</div>
				<div class="menu">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>					
				</div>
			</div>
		</div>

	  <!-- Button to close the overlay navigation
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		 -->
	  <!-- Overlay content -->
	  <div class="container-fluid">
	  	<div class="row">
	  		<div class="col-md-6">
	  			<div class="overlay-content">
				    <a href="{{ url('advertiser') }}" id="advertiser">Advertiser</a>
				    <a href="{{ url('/driver') }}" id="driver">Driver</a>
				    <a href="{{ url('about') }}" id="about">About Us</a>
				    <a href="{{ url('contact') }}" id="contactus">Contact Us</a>
				    <a href="{{ url('faq') }}" id="faqs">FAQs</a>
				    <a href="{{ url('blog') }}" id="about">Blog</a>
				</div>
	  		</div>
	  		<div class="col-md-6 hidden-sm hidden-xs">
	  			<div class="overlay-block">
	  				<img src="#" class="img-responsive" id="overlay-block-img" align="center">
	  			</div>
	  		</div>
	  	</div>
	  	<!--<div class="row">
	  		<div class="col-md-12">
	  			<div class="overlay-footer">
	  				<a href="#">Login/Sign up &rarr;</a>	
	  			</div>
	  		</div>
	  	</div>-->
	  
	  </div>

	</div>

<script type="text/javascript">
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

$( "#driver" )
.mouseout(function(e) {
	$('#overlay-block-img').fadeOut(200,function(){
		$('#overlay-block-img').attr('src', "#");
	});
})
.mouseover(function(e) {
	$('#overlay-block-img').fadeIn(100,function(){
		$('#overlay-block-img').attr('src', "{{URL::asset('/images/driver-01.png')}}");
	});
});

$( "#advertiser" )
.mouseout(function(e) {
	$('#overlay-block-img').fadeOut(200,function(){
		$('#overlay-block-img').attr('src', "#");
	});
})
.mouseover(function(e) {
	$('#overlay-block-img').fadeIn(100,function(){
		$('#overlay-block-img').attr('src', "{{URL::asset('/images/advertiser-01.png')}}");
	});
});

$( "#contactus" )
.mouseout(function(e) {
	$('#overlay-block-img').fadeOut(200,function(){
		$('#overlay-block-img').attr('src', "#");
	});
})
.mouseover(function(e) {
	$('#overlay-block-img').fadeIn(100,function(){
		$('#overlay-block-img').attr('src', "{{URL::asset('/images/contact-01.png')}}");
	});
});

$( "#about" )
.mouseout(function(e) {
	$('#overlay-block-img').fadeOut(200,function(){
		$('#overlay-block-img').attr('src', "#");
	});
})
.mouseover(function(e) {
	$('#overlay-block-img').fadeIn(100,function(){
		$('#overlay-block-img').attr('src', "{{URL::asset('/images/about-01.png')}}");
	});
});


</script>
</body>
</html>