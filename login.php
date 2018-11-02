<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lucid Planner | Log-in page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!--<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/magnific-popup.css"> 
	<link rel="shortcut icon" href="favicon.ico">-->
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login/login.css">
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
	<!-- Modernizr JS animation settings-->
	<script src="js/modernizr-2.6.2.min.js"></script>


</head>
<body>
	
	<header role="banner" id="fh5co-header">
			<div class="container"> 
				<nav class="navbar navbar-default">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>	
					<a span class="navbar-brand" href="index.php">Lucid<span class="orangetext">Planner</span></a> 		
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a onclick=window.location.href="index.php" href="javascript:void(0)">Home</a></li>
					</ul>
				</div>
				</nav>
		  </div>
	</header>

	<div class="login-block" >
		<form  method="post" action="login.php">
		<?php include('errors.php'); ?>	
			<h1>Login</h1>
			<h2>Enter your details below to start using Lucid Planner</h2>
			<input type="text" placeholder="Username" id="username" name="username" required/>
			<input type="password" placeholder="Password" id="password" name="password" required />
			<button type="submit" class="btn" name="login_user">Submit</button>			
			<h2><span>Not yet a member? </span> <span class="underline"><a href="register.php"> Sign up here</a></span></h2>
		</form>		
	</div>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="register.php">Sign up</a></li>
                        <li><a href="login.php">Log in</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols social-networks">
                    <h5>Social Media</h5>
                    <ul>
					<div class="social-networks">
                        <a href="https://twitter.com" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
						<a href="https://linkedin.com" class="icon-button linkedin"><i class="icon-linkedin-sign"></i><span></span></a>
                        <a href="https://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
					</div>	
                    </ul>					
				</div>			
			</div>
		</div>

        <div class="footer-bottom">
            <p>Dino Purificacion - 	14036685 </p>
        </div>
    </footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	
</body>