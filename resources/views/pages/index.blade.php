<!DOCTYPE html>
<html lang="en">
<head>
	<title>Adzippy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<div class="header">
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
				<div class="row">
					<div class="col-md-6">
						<!--
						<div class="header-image" align="center">
							<img src="./images/header.png" class="img-responsive">	
						</div>
						-->
						 <div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <!-- Indicators -->
						    <ol class="carousel-indicators" style="color:#0071BC">
						      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel" data-slide-to="1"></li>
						      <li data-target="#myCarousel" data-slide-to="2"></li>
						    </ol>

						    <!-- Wrapper for slides -->
						    <div class="carousel-inner">
						      <div class="item active">
						        <img src="{{ URL::asset('/images/header.png') }}" alt="Los Angeles" style="width:100%;">
						      </div>

						      <div class="item">
						        <img src="{{ URL::asset('/images/header2.png')}}" alt="Chicago" style="width:100%;">
						      </div>
						    
						      <div class="item">
						        <img src="{{ URL::asset('/images/header3.png')}}" alt="New york" style="width:100%;">
						      </div>
						    </div>
						  </div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<div class="content">
									<div class="subtitle">
										<b>SUBTITLE</b>
									</div>
									<div class="title">
										TITLE
									</div>
									<div class="text">
										<p>asdkja asdkjasd askjdasd kajsdhaskdj jaksda askjda aksjdasd ajskdasd kajsdad kasjda kasjdhaskdj ajskda aksjdad kjasdakjds kjasdaskjdb kajs kasdj aksjb aksjds kasb kasjd as asdsd jnj joq weie zxc </p>
									</div>	
								</div>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-6" align="center">
								<a href="{{ url('driver') }}" class="btn btn-block driver-btn">
									DRIVER
								</a>
							</div>
							
						</div>
						<br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-6" align="center">
								<a href="{{ url('advertiser') }}" class="btn btn-block advertiser-btn">
									ADVERTISER
								</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about">
		<div class="container-fluid" style="padding: 0px">
			<div class="hero hero--map gps-bg">
				<div class="gps-bg__guts">
					<div class="gps-bg__bg"></div>
					<div class="gps-bg__route"></div>
					<div class="gps-bg__marker"></div>
				</div>
				<div class="gps-bg__fade"></div>

				
				<div class="hero__title">
					<div class="card">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<h1>What is Adzippy?</h1>
									<p>Adzippy provides the drivers an extra way to earn money by advertising in and/or outside their cars through removable advertisements and leaflets.</p>
									<p>
										We also provide a medium through which advertisers could create ad campaigns and reach deeper into
										the specific demographic and location.
									</p>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
								
			</div>
		</div>
		
	</div>

	<div class="works">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="work-text">
						<div class="title">
							<h1>How it all works</h1>
						</div>
						<div class="content">
							<p>
								Advertisers:<br>
								Create your profile.
								Post your Campaign requirements. 
								Get Campaign designing assistance.
								Impressions begin with the Campaign.
								Get the results of your campaign.

							</p>
							<p>
								Drivers:<br>
								Download the App on your Android device and complete the registation process.
								Start the app before driving and choose a campaign.
								Keep the app running while you drive.
								Earn cash while you are driving or stuck in traffic.
								Get paid at the end of the campaign.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="work-image">
						<img src="{{ URL::asset('/images/cloud-ui.png') }}" class="img-responsive" />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="features">
		<div class="container-fluid">
			<div class="title">
				<h1>Innovative features</h1>
			</div>
			<div class="content">
				<div class="row">
					<div class="col-md-4" align="center">
						<img src="{{ URL::asset('/images/eye-01.png')}}" class="img-responsive" >
						<b>Dynamic mode of mass appeals</b>
						<p>adasdasda asdasd asdasdgfg ddfgdfgwe<br> werw tytyr apqw rombn aljf</p>
					</div>
					<div class="col-md-4" align="center">
						<img src="{{URL::asset('/images/time-01.png')}}" class="img-responsive">
						<b>Round the Clock City wide Reach </b>
						<p>adasdasda asdasd asdasdgfg ddfgdfgwe <br>werw tytyr apqw rombn aljf</p>
					</div>
					<div class="col-md-4" align="center">
						<img src="{{ URL::asset('/images/money-01.png')}}" class="img-responsive">
						<b>Maximum Value at best price in Industry</b>
						<p>adasdasda asdasd asdasdgfg ddfgdfgwe <br>werw tytyr apqw rombn aljf</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4" align="center">
						<img src="{{ URL::asset('/images/graph-01.png') }}" class="img-responsive">
						<b>Data Analytics for your Impressions</b>
						<p>asdads sfgsdf asdas SDASF EGGD AASasdas <br> aad 3w wrerg sdvasd qerq</p>	
					</div>
					<div class="col-md-4" align="center">
						<img src="{{ URL::asset('/images/call-01.png') }}" class="img-responsive">
						<b>Specialised Support Serices</b>
						<p>adasdasda asdasd asdasdgfg ddfgdfgwe <br>werw tytyr apqw rombn aljf</p>
					</div>
					<div class="col-md-4" align="center">
						<img src="{{ URL::asset('/images/tech-01.png') }}" class="img-responsive">
						<b>Innovative impression technology </b>
						<p>adasdasda asdasd asdasdgfg ddfgdfgwe <br>werw tytyr apqw rombn aljf</p>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>

	<div class="testimonials"> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h1>Testimonials</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="start-quote">
						<img src="{{URL::asset('/images/start-quote-01.png')}}" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="carousel slide" data-ride="carousel" id="quote-carousel">

				        <!-- Bottom Carousel Indicators -->
				        <ol class="carousel-indicators">
				          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
				          <li data-target="#quote-carousel" data-slide-to="1"></li>
				          <li data-target="#quote-carousel" data-slide-to="2"></li>
				        </ol>

				        <!-- Carousel Slides / Quotes -->
				        <div class="carousel-inner">

				          <!-- Quote 1 -->
				          <div class="item active">
				            <div class="row">
				              <div class="col-sm-12">
				                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non
				                  mi porta gravida at eget metus.&rdquo;</p>
				                <small><strong>Vulputate M., Dolor</strong></small>
				              </div>
				            </div>
				          </div>

				          <!-- Quote 2 -->
				          <div class="item">
				            <div class="row">
				              <div class="col-sm-12">
				                <p>&ldquo;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula
				                  ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. &rdquo;</p>
				                <small><strong>Fringilla A., Vulputate Sit</strong></small>
				              </div>
				            </div>
				          </div>

				          <!-- Quote 3 -->
				          <div class="item">
				            <div class="row">
				              <div class="col-sm-12">
				                <p>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur
				                  purus sit amet fermentum.&rdquo;</p>
				                <small><strong>Aenean A., Justo Cras</strong></small>
				              </div>
				            </div>
				          </div>

				        </div>


			      	</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="end-quote">
						<img src="{{URL::asset('/images/end-quote-01.png')}}" class="img-responsive">
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
				    <a href="{{ url('driver') }}" id="driver">Driver</a>
				    <a href="{{ url('advertiser') }}" id="advertiser">Advertiser</a>
				    <a href="{{ url('about') }}" id="contactus">Contact Us</a>
				    <a href="{{ url('about') }}" id="about">About Us</a>
				    <a href="{{ url('faq') }}" id="faqs">Faqs</a>
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