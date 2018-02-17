<!DOCTYPE html>
<html lang="en">
<head>
	<title>Adzippy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/blog.css') }}">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
						Blog
						<p>
							<a href="" class="btn dashboard-btn">Subscribe</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-xs-2">
							<div class="dateblock">
						<div class="date">
							15
						</div>
						<div class="month">
							Feb	<br> 2018					
						</div>

					</div>
						</div>
						<div class="col-xs-10">
							<div class="blog-title">
								<div class="title">
								First Blog Post
							</div>
							<div class="subtitle">
								- Adzippy Team
							</div>
							</div>
							
						</div>
					</div>
					
				</div>
				
			</div>
			<div class="post">
			<div class="row">
				<div class="col-md-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempor scelerisque sem, non ornare dolor hendrerit eu. Morbi sit amet sapien vestibulum, molestie elit ultricies, luctus augue. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras cursus nulla at orci sodales suscipit. Sed diam augue, gravida eu aliquam molestie, congue at turpis. Suspendisse facilisis, velit quis condimentum placerat, dolor tellus volutpat est, eget rutrum urna arcu et est. Suspendisse quis finibus arcu. </p>
					<p>
					Vivamus faucibus dui sit amet sem sollicitudin efficitur. Phasellus eget rutrum ipsum. Sed consectetur erat vel sollicitudin elementum. Pellentesque egestas volutpat viverra. Proin a mauris vehicula, dignissim tellus quis, blandit leo. Suspendisse bibendum felis in dignissim vehicula. Quisque iaculis sem at massa interdum iaculis. Curabitur eu neque id orci dignissim tempus ac in massa. 
					</p>
					<p>Donec faucibus lectus ut dolor sagittis aliquet. Vestibulum maximus non est vitae iaculis. Nulla eu tellus lobortis, mollis lorem sit amet, pretium sem. Aenean consectetur elit ac scelerisque dictum. In placerat augue metus, et placerat nibh iaculis at. Donec nec rutrum ligula. Aenean sit amet nisl vel leo rutrum efficitur mollis at tellus. Maecenas tincidunt tortor quis dui fermentum, eget facilisis eros consequat. Ut elementum consequat venenatis. Nullam dictum ligula purus, nec elementum metus ultrices nec. Sed vel arcu a justo vehicula aliquet. Mauris rutrum pharetra laoreet. Maecenas lacinia auctor hendrerit. Etiam ornare nisi ut interdum volutpat. Curabitur nec erat lectus. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="post-footer">
						<button class="btn btn-danger"><i class="fa fa-heart"></i> Like</button>
						<button class="btn btn-primary"><i class="fa fa-share"></i> Share</button>
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
				    		<li><a href="#"><img src="./images/facebook.svg"></a>&nbsp;&nbsp;</li>
				    		<li><a href="#"><img src="./images/twitter.svg"></a>&nbsp;&nbsp;</li>
				    		<li><a href="#"><img src="./images/linkedin.svg"></a>&nbsp;&nbsp;</li>
				    		<li><a href="#"><img src="./images/rss.svg"></a>&nbsp;&nbsp;</li>
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
		$('#overlay-block-img').attr('src', "./images/driver-01.png");
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
		$('#overlay-block-img').attr('src', "./images/advertiser-01.png");
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
		$('#overlay-block-img').attr('src', "./images/contact-01.png");
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
		$('#overlay-block-img').attr('src', "./images/about-01.png");
	});
});


</script>

</body>
</html>