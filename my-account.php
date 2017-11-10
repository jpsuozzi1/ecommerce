<?php

session_start();

if (!$_SESSION['email']) {
	$message = "Please login to view this page.";
	echo "<script type='text/javascript'>alert('$message');
	window.location.href='login.html';
	</script>";
}

?>

<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>My Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="member-home.php">Avocado Emporium</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon fa-home" href="member-home.php"><span>Home</a></li>
									<!-- <li>
										<a href="#" class="icon fa-bar-chart-o"><span>Dropdown</span></a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li> -->
									<li><a class="icon fa-gear" href="my-account.php"><span>My Account</span></a></li>
									<li><a class="icon fa-sign-out" href="logout.php"><span>Logout</span></a></li>
									<li><a class="icon fa-phone" href="member-contact-us.php"><span>Contact Us</span></a></li>
								</ul>
							</nav>

					</div>
				</div>

			<!-- Main -->
			<div id="transparent">
				<div id="main" class="container" style="text-align:center">
					<header style="text-align:center">
						<h2 style="color:#fff">Update Your Account Info</h2>
					</header>
					<div class="row">
						<div class="12u" align="center">
							<section>
								<form method="post" action="update-account.php">
									<div class="row 50%">
										<div class="12u">
											<div class="6u 12u(mobile)">
													<input name="firstname" placeholder="<?php echo $_SESSION['firstname']; ?>" type="text"/>
											</div>
											<br>
											<div class="6u 12u(mobile)">
													<input name="lastname" placeholder="<?php echo $_SESSION['lastname']; ?>" type="text"/>
											</div>
											<br>
											<div class="6u 12u(mobile)">
													<input name="email" placeholder="<?php echo $_SESSION['email']; ?>" type="email"/>
											</div>
											<br>
											<div class="6u 12u(mobile)">
													<h6 style="text-align:left; color:white">Enter new password or leave blank</h6>
													<input name="password" type="password"/>
												<br>
													<h3 style="text-align:center; color:black">***If you would like to update your address, please call the number listed on our contact page to ensure subscriptions are transferred correctly***</h3>
											</div>
										</div>
									</div>
									<!--<div class="row 50%">
										<div class ="12u">
											<div class="6u 12u(mobile)">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
										</div>	
									</div>-->
									<div class="row">
										<div class="12u">
											<!--<a href="#" class="form-button-submit button">Submit</a>-->
											<input type="submit">
										</div>
									</div>
									<br>
								</form>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div id="copyright" class="container">
						<ul class="links">
							<li>Copyright &copy; 1965-2017 Avocado Emporium. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>