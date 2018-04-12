<!DOCTYPE html>
<html lang="en">
<head>
	<title>Adzippy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap Stylesheet-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Custom Stylesheet-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/advertiser-signup.css') }}">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<div class="header">
		<div class="navbar" style="margin-bottom: 0px; position:relative;">
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
		<div class="signup">
			<div class="container">
				<div class="row">
					<div class="col-md-4 graphics">
						<div class="title">
							Ready to lift off...
						</div>
						<div class="image" align="center">
							<img src="{{ URL::asset('/images/launch-01.png') }}" class="img-responsive">
						</div>
						<div class="sub-title">
							
						</div>
					</div>
					<div class="col-md-8">
						<div class="signup-form">
							<div class="title">
								Sign Up
							</div>
							<hr>
							@if($errors)
								@if(count($errors))
									@foreach($errors->all() as $error)
										<div class="alert alert-info alert-dismissible" role="alert">
											<font style="font-size: 12px; padding: 0px; margin : 0px;">
												{{ $error }}
												</font>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												
											</button>
										</div>
									@endforeach
								@endif
							@endif
							{!! Form::open(array('route' => 'loginAuth','method'=>'POST')) !!}
								<div class="form-group">
									<label for="name">Organization Name :</label>
									{!! Form::text('name', null, array('class' => 'form-control','placeholder'=>'Name','id'=>'name')) !!}
								</div>
								<div class="form-group">
									<label for="email">Email Address :</label>
									{!! Form::text('email', null, array('class' => 'form-control','placeholder'=>'Email','id'=>'email')) !!}
								</div>
								<div class="form-group">
									<label for="budget">Advertisement Budget:</label>
									{!! Form::text('budget', null, array('class' => 'form-control','placeholder'=>'Advertisement Budget','id'=>'budget')) !!}
								</div>
								<div class="form-group">
								    <label for="duration">Advertisement Duration:</label>
								    {!! Form::text('duration', null, array('class' => 'form-control','placeholder'=>'Advertisement Duration','id'=>'duration')) !!}
								  </div>
								{!! app('captcha')->render(); !!}
									
  								{!! Form::submit('&nbsp;Submit&nbsp;', array('class' => 'btn btn-primary','name'=>'submit','id'=>'submit')) !!}

  									
  							{!! Form::close() !!}
							<!-- <form action="#">
								<div class="form-group">
								    <label for="email">Organization Name :</label>
								    <input type="email" class="form-control" id="email">
								  </div>
								  <div class="form-group">
								    <label for="email">Email address :</label>
								    <input type="email" class="form-control" id="email">
								  </div>
								  <div class="form-group">
								    <label for="email">Advertisement Budget:</label>
								    <input type="email" class="form-control" id="email">
								  </div>
								  <div class="form-group">
								    <label for="email">Advertisement Duration:</label>
								    <input type="email" class="form-control" id="email">
								  </div>
								  <button type="submit" class="btn btn-primary">Submit</button>
							</form> -->
						</div>
					</div>
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