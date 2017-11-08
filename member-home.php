<?php

session_start();

if (!$_SESSION['user']) {
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
							<p>Welcome, <?php echo $_SESSION['firstname'] ?>! Look below to see our subscriptions.</p>

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
									<li><a class="icon fa-gear" href="settings.html"><span>My Account</span></a></li>
									<li><a class="icon fa-sign-out" href="logout.php"><span>Logout</span></a></li>
									<li><a class="icon fa-phone" href="contact-us.html"><span>Contact Us</span></a></li>
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
										<input type="hidden" name="data" value="eKH0j0sYXbTiSddl+h3PMxh2yaYuj0Aj7i8XzT9bYLYwcT9/U7jebphc9ZM/C2isEnYKUq1EEiXuTuphg5zVe4Y/pAAhf6HC8jEzanwn/PjrMCI69DPa+fKe5EkDkt9Nogde5yf7X+eU0aGuOnjc1DABODfAk6RhR2dFx6icdoWay4vO7xSLLp08rquOdZ4kallztylW15jxFaml3l57zg==" />
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
										<p>If one avo a week isn't enough for you, the variety pack is a great option. With this subscription we send you two avocados a week, a total of </p>
									</section>
									<form action="https://test.bitpay.com/checkout" method="post" >
										<input type="hidden" name="action" value="checkout" />
										<input type="hidden" name="posData" value="" />
										<input type="hidden" name="data" value="eKH0j0sYXbTiSddl+h3PMxh2yaYuj0Aj7i8XzT9bYLYwcT9/U7jebphc9ZM/C2isI3/vHnryE9Or1wUZQd2gQ2j4vtIBuqRzvwuxGq0KLsi5fLg5EsizeyF/NWvb3QtKkRquMt2m7SuHVFmlHkYXoA1YN5/RarqhOznPSIDB3zethSrJ0i0K8AgEYnRe5RtXMyde2jlBBiWQgyBoPFpfUw==" />
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
										<p>You don't have to be Ina Garten to cook with avocados! Each avocado delivery includes a variety of recipes using seasonal ingredients that you can find at any farmer's market or grocery store.</p>
									</section>
									<form action="https://test.bitpay.com/checkout" method="post" >
										<input type="hidden" name="action" value="checkout" />
										<input type="hidden" name="posData" value="" />
										<input type="hidden" name="data" value="eKH0j0sYXbTiSddl+h3PMxh2yaYuj0Aj7i8XzT9bYLYwcT9/U7jebphc9ZM/C2isxEtLe6c9ZEoaDcD/D08C0oXxi9zLZ/9Ceku5Q0tPKPaPR9BHkNXuerw9lAPCjeAwUm17Jd/oa7KB45QPIAeU86Jnk7T82qPHi+kFTonujn1/+do47XpKAr+g3jPnmj+OANt6Ty3NZ3BA9yKEI9m0mg==" />
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