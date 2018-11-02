<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lucid Planner | Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
	<!-- Modernizr JS animation settings-->
	<script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
	<section>
		<header role="banner" id="fh5co-header">
				<div class="container"> 
					<!-- <div class="row"> -->
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<!-- Mobile Toggle Menu Button -->
							<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>	
							<a span class="navbar-brand" href="index.php">Lucid<span class="orangetext">Planner</span></a> 
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a onclick=window.location.href="login.html" href="javascript:void(0)">Sign in</a></li>						
								
							</ul>
						</div>
					</nav>
				  <!-- </div> -->
			  </div>
		</header>
	</section>

	
	<section>
	<div id="fh5co-home" data-section="home">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="imageContainerLaptop">
								<img class="to-animate" src="images/laptop2.png">
							</div>
							<h1 class="to-animate">Time flies!</h1>
							<h2 class="to-animate">Organise and never forget important events and tasks!</h2>
							<!--<a class="to-animate" href="Register.php"><button class="btnGS">get started</button></a>-->
							<a class="btnGS btn-block to-animate" href="register.php">get started</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	
	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-calendar"></i>
						<h2>Plan ahead</h2>
						<p>Keep track of daily, weekly, monthly and yearly activities.</p><br>
						<p>Add, delete, edit and highlight important events. </p>
					</div>
				</div>
				<div class="fh5co-block to-animate">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-list"></i>
						<h2>User Friendly</h2>
						<p>Easy to use and set up calendar interface.</p>	<br>
						<p>Write, edit and save notes. </p>	<br>
					</div>
				</div>
				<div class="fh5co-block to-animate">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-cogs"></i>
						<h2>Customise</h2>
						<p>A customizable home window.</p>	 <br>
						<p>Show important or current activity to be completed.</p>
						 <br>
					</div>
				</div>				
			</div>	
		</div>
	</section>
	
	<section>
	<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 myCols">
					<div class=" footer-logo-container">
						<img src="images/Logo-whiteorange.png">
					</div>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Site map</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="register.php">Sign up</a></li>
                        <li><a href="login.php">Log in</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols social-networks">
                    <h5>Social Media</h5>
                    <ul>
					<div class="social-networks">
                        <a href="https://twitter.com" class="icon-button twitter"><i class="icon-twitter-sign"></i><span></span></a>
						<a href="https://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin-sign"></i><span></span></a>
                        <a href="https://facebook.com" class="icon-button facebook"><i class="icon-facebook-sign"></i><span></span></a>
					</div>	
                    </ul>					
				</div>			
			</div>
		</div>

        <div class="footer-bottom">
            <p>Dino Purificacion - 14036685 </p>
        </div>
    </footer>
    </section>

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	
	</body>

</html>

