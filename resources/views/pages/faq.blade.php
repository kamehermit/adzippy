<!DOCTYPE html>
<html lang="en">
<head>
	<title>FAQs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/css/faq.css')}}">

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
						FAQs
						<p>
							Driver | Advertiser
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="faq">
	<div class="driver">
		

		<div class="container">
			<h1>Driver</h1>
			 <div class="panel-group" id="accordion">
		        <div class="faqHeader">LET'S GET STARTED</div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What's Adzippy ?</a>
		                </h4>
		            </div>
		            <div id="collapseOne" class="panel-collapse collapse in">
		                <div class="panel-body">
		                    Adzippy provides the drivers an extra way to earn money by advertising in and/or
							outside their cars through removable advertisements and leaflets.
		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Who's eligible ?</a>
		                </h4>
		            </div>
		            <div id="collapseTen" class="panel-collapse collapse">
		                <div class="panel-body">
		                   All interested Drivers
		                   <ul>
		                   	<li>Aged 18+</li>
		                   	<li>Having valid Driver License</li>
		                   	<li>With Clean driving record &</li>
		                   	<li>With a qualified vehicle.</li>
		                   </ul>
		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Is my vehicle qualified ?</a>
		                </h4>
		            </div>
		            <div id="collapseEleven" class="panel-collapse collapse">
		                <div class="panel-body">
		                    All vehicles
		                    <ul>
		                    	<li>Owned or currently leased in the name of concerned entity</li>
		                    	<li>A 20XX​ eligible​ model or newer</li>
		                    	<li>Sound condition with no body or paint damage</li>
		                    	<li>Running minimum 40 kms a day</li>
		                    </ul>
		                </div>
		            </div>
		        </div>

		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">If interested and qualified, How do I register ?</a>
		                </h4>
		            </div>
		            <div id="collapseTwelve" class="panel-collapse collapse">
		                <div class="panel-body">
		                   Our registration process is quick and simple. You can register with us by following 3 simple steps :
		                    <ul>
		                    	<li>Step 1: Visit our website Adzippy.com / Download the Adzippy app, available on the Google Play Store.</li>
		                    	<li>Step 2​: Fill the registration form requiring personal and vehicular details.</li>
		                    	<li>Step 3​: And its done.</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">Any possible exception/relaxation to the eligibility ?</a>
		                </h4>
		            </div>
		            <div id="collapseThirteen" class="panel-collapse collapse">
		                <div class="panel-body">
		                   Sorry, AVPL deals fairly with all and hence believes in providing fair opportunity to all to participate in our campaigns. ​So, no relaxations available.
		                </div>
		            </div>
		        </div>

		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">Is registration free ?</a>
		                </h4>
		            </div>
		            <div id="collapseFourteen" class="panel-collapse collapse">
		                <div class="panel-body">
		                   Registration process is absolutely free and involves no hidden costs.

		                </div>
		            </div>
		        </div>

		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">Can I register multiple cars with single account ?</a>
		                </h4>
		            </div>
		            <div id="collapseFifteen" class="panel-collapse collapse">
		                <div class="panel-body">
		                   Sorry, AVPL believes in SINGLE VEHICLE SINGLE DRIVER policy which restricts the multiple driver registrations with single vehicle as well as multiple vehicle registrations with single driver

		                </div>
		            </div>
		        </div>


		        <div class="faqHeader">LET'S CAMPAIGN</div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Which documents are required prior to participation in Campaign?</a>
		                </h4>
		            </div>
		            <div id="collapseTwo" class="panel-collapse collapse">
		                <div class="panel-body">
		                   It`s a one time process to submit following required documents :
		                   <ul>
		                   	<li>Driving License</li>
		                   	<li>Registration Certificate</li>
		                   	<li>PAN Card</li>
		                   	<li>Adhaar Card</li>
		                   	<li>Lease Documents (applicable for leased vehicles only)</li>
		                   </ul>
		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Am I eligible now for participating in campaigns after registration?</a>
		                </h4>
		            </div>
		            <div id="collapseThree" class="panel-collapse collapse">
		                <div class="panel-body">
		                    After 40 kms. are driven with the app open in the device, drivers become eligible for campaign offers when one becomes available in the driver’s area.

		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Are campaigns guaranteed to me upon registration ?</a>
		                </h4>
		            </div>
		            <div id="collapseFive" class="panel-collapse collapse">
		                <div class="panel-body">
		                    Sorry, AVPL does not guarantee campaign participation to anyone as campaigns availability is subject to presence of active advertisers on the website.

		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">What are wraps made up of ? Are they safe ?</a>
		                </h4>
		            </div>
		            <div id="collapseSix" class="panel-collapse collapse">
		                <div class="panel-body">
		                    The wraps are adhesive, made of vinyl specifically used for cars. The vinyl will not damage your car rather will protect car paint from damage.
		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What will be duration for the campaigns ?</a>
		                </h4>
		            </div>
		            <div id="collapseEight" class="panel-collapse collapse">
		                <div class="panel-body">
		                    Campaigns` duration usually vary and it may range from 1 month to 1 year. Campaign duration will be notified at the inception of campaign in advance.

		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">How long will it take to wrap my vehicle ?</a>
		                </h4>
		            </div>
		            <div id="collapseNine" class="panel-collapse collapse">
		                <div class="panel-body">
		                   A vehicle wrap takes roughly 4-5 hours​ to install.

		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">What are the time slots available for vehicle wraps ?</a>
		                </h4>
		            </div>
		            <div id="collapseSixteen" class="panel-collapse collapse">
		                <div class="panel-body">
		                   Normally, it will range from 10AM to 7PM from monday through saturday. Multiple Time slots for your vehicle will be made available to you from which you can choose one as per your convenience.

		                </div>
		            </div>
		        </div>

		        <div class="faqHeader">LET'S TALK OF REMUNERATION</div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How much can I earn through campaigns ?</a>
		                </h4>
		            </div>
		            <div id="collapseFour" class="panel-collapse collapse">
		                <div class="panel-body">
		                    Depending upon the distance covered by the concerned vehicle and the area of coverage, a driver can earn guaranteed distance based remuneration upto INR 4500/month plus exciting lucky draw bonus remuneration.

		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">When and How the payments will be made ?</a>
		                </h4>
		            </div>
		            <div id="collapseSeven" class="panel-collapse collapse">
		                <div class="panel-body">
		                    Payments will be disbursed within XX​ days of completion of the campaign. In case of long duration campaigns, payments will be disbursed on monthly basis through NEFT and RTGS.

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<br><br>
	<div class="advertiser">
		<div class="container">
			<h1>Advertiser</h1>
			<div class="faqHeader">LET'S GET STARTED</div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen">Why Cabvertising ?</a>
		                </h4>
		            </div>
		            <div id="collapseSeventeen" class="panel-collapse collapse">
		                <div class="panel-body">
		                    Most cost effective OOH Advertising mode
							Dynamic mode of mass appeals
							Round the Clock City wide Reach 


		                </div>
		            </div>
		        </div>
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen">Why Adzippy ?</a>
		                </h4>
		            </div>
		            <div id="collapseEighteen" class="panel-collapse collapse">
		                <div class="panel-body">
		                    Extremely scalable innovative live impression technology 
							Maximum Value at best price in Industry
							Data Analytics for your Impressions  
							Specialised Support Serices


		                </div>
		            </div>
		        </div>

		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty">How does it work ?</a>
		                </h4>
		            </div>
		            <div id="collapseTwenty" class="panel-collapse collapse">
		                <div class="panel-body">
		                    <ul>
		                    	<li>Create your Profile</li>
		                    	<li>Post your Campaign requirements </li>
		                    	<li>Get Campaign designing assistance</li>
		                    	<li>Impressions begin with the Campaign</li>
		                    	<li>Get the results of your campaign</li>
		                    </ul>
		                </div>
		            </div>
		        </div>

		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title">
		                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen">What`s i-LIT ?</a>
		                </h4>
		            </div>
		            <div id="collapseNineteen" class="panel-collapse collapse">
		                <div class="panel-body">
		                    I-LIT is an innovative technolgy which provides best proxy for the volume of impressions for your campaign by overlaying the GPS data collected regularly from every participating car combined with the traffic algorithms and our proprietary anonymized telemetry data of variables used in algorithm or model. 
		                </div>
		            </div>
		        </div>
		</div>
	</div>
	</div>
	<br><Br><br>

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