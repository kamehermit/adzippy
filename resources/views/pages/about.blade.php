<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/about.css')}}">

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
						About
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						About Us
					</div>
					<div class="text">
						<p>Adzippy is to enable the Corporate community to promote their brands in an economical and effective manner. We want to create business value to the companies ranging from small scale SMEs to MNCs by generating brand awareness of their offerings in the targeted geographical location. We are basically adding a new dimension to the conventional OOH advertising in the Indian market. We want use cars as the advertising vehicles. We'll be using the advertisement decals on the outer surface of the cabs. Our main partners in creating value for the customers are drivers. By making use of the cab driver services, we are giving them an opportunity to earn additional income at no extra workload. All in all, we are proposing a win-win situation to all the stakeholders in the Startup. In today’s scenario, empirical evaluation of the advertisement effectiveness is a demanding task. In that direction, we are developing a novel technology called I-LIT which provides correct impression rates for our advertising campaigns. What we are offering to the advertisers is an economical and very futuristic alternative way of promotion. We are going to be the forerunner of this change in the advertising industry.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						Contact Us
					</div>
				</div>
			</div>
			<div class="contact-form">
			<div class="row">
				<div class="col-md-6">
					<textarea rows="5" style="width: 100%;" class="form-control" placeholder="Your Message"></textarea>
					<br>
					<input type="email" name="email" class="form-control" placeholder="Your Email" /><br>
					<a href="" class="btn send-btn">Send</a>
				</div>
				<div class="col-md-6">
					<div class="image">
						<img src="{{URL::asset('/images/contact-01.png')}}" class="img-responsive">	
					</div>
					
				</div>
			</div>
			</div>
		</div>
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