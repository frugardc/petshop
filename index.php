<!DOCTYPE HTML>

<html>
	<head>
		<title>Sandy's Pet Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->

		<?php
			include('header.php');
		?>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">About Us</a></li>
					<li><a href="location.html">Store Location</a></li>
					<li><a href="grooming.html">Grooming</a></li>
				</ul>
				<ul class="actions vertical">

				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Sandy's Pet Shop</h1>
					<p>The best pets and pet care in the area!<br />Schedule your pet's next grooming!</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Learn More</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>About Us</h3>
							<p>We love animals and caring for them.<br /> We've been caring for your pets for over 50 years!</p>
						</div>
						<div>
							<h3>Fur Treatments</h3>
							<p>We specialize in pets with lots of tangles!<br /> Our secret shampoo leaves your pets fur soft and cuddly.</p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Your Satisfaction is our Guarentee!</h3>
							<p>We care about our customers<br /> If you are not happy with your experience we offer a full refund!</p>
						</div>
						<div>
							<h3>No animal left behind</h3>
							<p>From dogs to bunnies<br /> we will groom any animal with fur! (Sorry snakes)</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Customer Testimonials</h2>
					<figure>
					    <blockquote>
					        "Sandy's Pet Shop is the best of it's kind! My Daisy came in looking a tangled mess<br /> and came out a new puppy!"
					    </blockquote>
					    <footer>
					        <cite class="author">John Smith</cite>
					        <cite class="company">Holmdel, NJ</cite>
					    </footer>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic02.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Adoptions</h3>
							<p>Come check out our available pets for adoption!</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Grooming</h3>
							<p>Schedule your pet's next grooming session today!</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic04.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Location</h3>
							<p>Come stop by!</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
		<?php
			include('footer.php');
		?>
	</body>
</html>
