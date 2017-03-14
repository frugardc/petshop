<!DOCTYPE HTML>

<html>
	<head>
		<title>Sandy's Pet Shop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
		<?php
			include('header.php');
		?>

		<!-- Menu -->
				<?php
			include('menu.php');
		?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Grooming Appointments</h1>
						<p>For Employees Only</p>
					</header>
					<div class="image fit">
						<img src="images/pic06.jpg" alt="" />
					</div>
					<p>Update, view and edit all appointments</p>
					<p>Please keep all entries up to date</p>
						<!-- Form -->
		<a href="list.php" class="button special big">View Customer Appointment</a>
        <a href="new.php" class="button special big">New Customer Appointment</a>
        <a href="edit.php" class="button special big">Edit Customer Appointment</a>
        <a href="delete.php" class="button special big">Delete Customer Appointment</a>
				</div>
			</section>
			
		


		<!-- Footer -->
				<?php
			include('footer.php');
		?>

	</body>
</html>