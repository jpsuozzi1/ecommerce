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
		<title>Avocado Emporium</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Avocado Emporium</a></h1>
							<p>Welcome, <?php echo $_SESSION['firstname'] ?>! Look below to see our subscription packages.</p>

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

			<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2>Choose your plan!</h2>
						</header>
						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a class="image featured"><img src="images/avocado2.png" alt="" /></a>
										<header>
											<h3>Starter ($10/month)</h3>
										</header>
										<p>The starter pack gets you one avocado a week (four per month!), each from a different region. The weekly region is determined by ripeness and supply.</p>
									</section>
									<form action="https://test.bitpay.com/checkout" method="post" >
										<input type="hidden" name="action" value="checkout" />
										<input type="hidden" name="posData" value="" />
										<input type="hidden" name="data" value="eKH0j0sYXbTiSddl+h3PMxh2yaYuj0Aj7i8XzT9bYLYwcT9/U7jebphc9ZM/C2isWyFCFpkKw5RaWO8wNcZMQt4jeEylXKcdKSvPTV6w6Ib8Gm5HjvPCF3MkZYh2POh1mLSXuAJ8qgc9v9oUu3nMqw==" />
										<input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
									</form>
									<p id="tenDollarBTC">Loading BTC Exchange rate...</p>
									
							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a class="image featured"><img src="images/avocado1.png" alt="" /></a>
										<header>
											<h3>Variety ($18/month)</h3>
										</header>
										<p>If one avo a week isn't enough for you, the variety pack is a great option. We'll send you two avocados a week. That's eight avocados a month!</p>
									</section>
									<form action="https://test.bitpay.com/checkout" method="post" >
										<input type="hidden" name="action" value="checkout" />
										<input type="hidden" name="posData" value="" />
										<input type="hidden" name="data" value="eKH0j0sYXbTiSddl+h3PMxh2yaYuj0Aj7i8XzT9bYLYwcT9/U7jebphc9ZM/C2ismADek9ALTUcPh6im2R2KYM/LB9Ej0vak7zAFjb2EcFHKUYhVtK+36uvVUEVI0UQZhgvsNaZ8LXz9zohzehHSPQ==" />
										<input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
									</form>
									<p id="eighteenDollarBTC">Loading BTC Exchange rate...</p>
									<h3 id="btcRate">Loading BTC Exchange rate...</h3>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a class="image featured"><img src="images/avocado3.png" alt="" /></a>
										<header>
											<h3>All the Avos ($20/month)</h3>
										</header>
										<p>With the "All the Avos" subscription, you'll never run out of your favorite fruit. With this package you get three avocados per week, totaling twelve a month!</p>
									</section>
									<form action="https://test.bitpay.com/checkout" method="post" >
										<input type="hidden" name="action" value="checkout" />
										<input type="hidden" name="posData" value="" />
										<input type="hidden" name="data" value="eKH0j0sYXbTiSddl+h3PMxh2yaYuj0Aj7i8XzT9bYLYwcT9/U7jebphc9ZM/C2isq3JI4XNELVFD2YdlJLuwmj982hM2NwYfLk2YnELHVjPFF+Q44qGI90i0BJ/lzBlrOLOjWIqh7Y/Oqmc1HegGvA==" />
										<input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
									</form>
									<p id="twentyFiveDollarBTC">Loading BTC Exchange rate...</p>
									
							</div>
						</div>
						<!--<ul class="actions">
							<li><a href="about-us.html" class="button">Learn More</a></li>
						</ul>-->
					</section>
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
			<script src="assets/js/bitcoinPrice.js"></script>

	</body>
</html>