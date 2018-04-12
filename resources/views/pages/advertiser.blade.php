<!DOCTYPE html>
<html lang="en">
<head>
	<title>Advertiser</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/advertiser.css')}}">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

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
					<a href="{{ url('/') }}" class="logo" style="text-decoration: none;">
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
						Advertiser
						<p>
							<a href="{{ url('advertiser/register') }}" class="btn dashboard-btn">Get Started</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><Br>
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="why1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6">
					<div class="image">
						<img src="{{URL::asset('/images/outdoors.png')}}" class="img-responsive">	
					</div>
				</div>
				<div class="col-md-6 col-md-pull-6">
					
					<div class="content">
						<div class="title">
							Why Cabvertising ?
						</div>
						<hr>
						<div class="text">
							<p>
							Most cost effective OOH Advertising mode<br>
							Dynamic mode of mass appeals<br>
							Round the Clock City wide Reach 
							</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="why2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="{{URL::asset('/images/cloud-ui.png')}}" class="img-responsive">
				</div>
				<div class="col-md-6">
					<div class="content">
						<div class="title">
							Why Adzippy ?
						</div>
						<hr>
						<div class="text">
							<p>
								Extremely scalable innovative live impression technology <br>
								Maximum Value at best price in Industry<br>
								Data Analytics for your Impressions  <br>
								Specialised Support Serices<Br>

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><Br>
	<div class="works">
		<div class="container-fluid">
			<div class="works-title">
				How it works
			</div>
			<div class="section1">
				<div class="row">
					<div class="col-md-6">
						<div class="image">
							<img src="{{URL::asset('/images/advertiser-01.png')}}" class="img-responsive">	
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="title">
							
						</div>
						<div class="text">
							<p>
								Create your Profile<br>
								Post your Campaign requirements <br>
								Get Campaign designing assistance<Br>
								Impressions begin with the Campaign<Br>
								Get the results of your campaign <Br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ilit">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6">
					<div class="image">
						<img src="{{URL::asset('/images/gps.png')}}" class="img-responsive">
					</div>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="content">
						<div class="title">
							What's i-LIT ?
						</div>
						<hr>
						<div class="text">
							<p>I-LIT is an innovative technolgy which provides best proxy for the volume of impressions for your campaign by overlaying the GPS data collected regularly from every participating car combined with the traffic algorithms and our proprietary anonymized telemetry data of variables used in algorithm or model. </p>
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
					<a href="{{ url('advertiser/register') }}" class="btn download-app-dwn">Get Started</a>
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
				    		<<li><a href="#"><img src="{{URL::asset('/images/facebook.svg')}}"></a>&nbsp;&nbsp;</li>
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