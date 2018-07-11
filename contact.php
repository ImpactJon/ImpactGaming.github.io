<!DOCTYPE html>

<html>

	<head>
		<link rel="icon" type="image/png" sizes="32x32" href="resources/images/favicon-16x16.png">
		<title>Impact Gaming</title>

		<link rel="stylesheet" type="text/css" href="resources/css/style-otherpages.css">
		<link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
		<link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,300,300i,400" rel="stylesheet"> 
		<script src="resources/js/script.js"></script>
	</head>


	<body>


		<header class="teams"> 
			<nav>
				<div class="row">
					<a href="index.html"><img src="resources/images/LogoWhite.png" alt="White Logo" class="logo"></a>
					<ul class="main-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="teams.html">Teams</a></li>
						<li><a href="#">News Room</a></li>
						<li><a href="sponsors.html">Sponsors</a></li>
						<li><a href="https://electronicgamersleague.com/collections/Impact-Gaming" target="_blank">Store</a></li>
					</ul>

					<ul class="nav-social">
						<li><a href="https://twitter.com/ImpactGaming" target="_blank" class="ion-social-twitter"></a></li>
						<li><a href="https://www.twitch.tv/team/impactgaming" target="_blank" class="ion-social-twitch"></a></li>
						<li><a href="https://www.youtube.com/user/SFCRAFTLV" target="_blank" class="ion-social-youtube"></a></li>
					</ul>
				</div>
			</nav>
		</header> 




		<section class="section-form" id="form">
			<div clas="row">
				<h2>Contact Us</h2>
			</div>

			<div class="row">
				<form method="post" action="mailer-new.php" class="contact-form">

					<div clas="row">
						
						<?php
						
						if($GET_['success'] ==1) {
						
						echo "<div class=\"form-messages success\">
							Thankyou! your message has been sent
						</div>";
						}

						if($GET_['success'] ==-1) {
						
						echo "<div class=\"form-messages error\">
							Message not sent.
						</div>";
						}
	
						?>
					</div>

					<div class="row">
						<div class="col span-1-of-4">
							<label for="name">Name</label>
						</div>

						<div class="col span-3-of-4">
							<input type="text" name="name" id="name" placeholder="Your Name" required>
						</div>
					</div>

					<div class="row">
						<div class="col span-1-of-4">
							<label for="email">e-Mail</label>
						</div>

						<div class="col span-3-of-4">
							<input type="email" name="name" id="email" placeholder="Your e-Mail" required>
						</div>
					</div>

					<div class="row">
						<div class="col span-1-of-4">
							<label for="subject">Subject</label>
						</div>

						<div class="col span-3-of-4">
							<input type="subject" name="name" id="subject" placeholder="Subject" required>
						</div>
					</div>

					<div class="row">
						<div class="col span-1-of-4">
							<label>Message</label>
						</div>

						<div class="col span-3-of-4">
							<textarea name="message" placeholder="Your message"></textarea>
						</div>
					</div>

					<div class="row">
						<div class="col span-1-of-4">
							<label>&nbsp;</label>
						</div>

						<div class="col span-3-of-4">
							<input type="submit" value="Send">
						</div>
					</div>
				</form>
			</div>
		</section>

		<section class="contact-banner">
		</section>

		<footer>
			<div class="row">
				<div class="col span-1-of-2">
					<ul class="footer-nav">
						<li><a href="about.html">About us</a></li>
						<li><a href="teams.html">Teams</a></li>
						<li><a href="#">News Room</a></li>
						<li><a href="sponsors.html">Sponsors</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="https://electronicgamersleague.com/collections/Impact-Gaming">Store</a></li>
					</ul>
				</div>

				<div class="col span-1-of-2">
					<ul class="social-icon">
						<li><a href="https://twitter.com/ImpactGaming" target="_blank" class="ion-social-twitter"></a></li>
						<li><a href="https://www.twitch.tv/team/impactgaming" target="_blank" class="ion-social-twitch"></a></li>
						<li><a href="https://www.youtube.com/user/SFCRAFTLV" target="_blank" class="ion-social-youtube"></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<p>
					Copyright &copy; 2018 by Impact Gaming. All rights reserved.
				</p>
			</div>
		</footer>

	</body>

</html>