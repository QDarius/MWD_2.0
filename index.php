<!DOCTYPE html>

<html>
	<head>
		<?php include('php/resources.php'); ?>

		<title>Mild West Designs</title>
	</head>

	<body>
		<?php include('php/header.php') ?>

		<div id="main" class="row">
			<div class="col-5 desktop">
			</div>

			<div class="col-7 stretch-12">
					<h2 class="center">
						We Build 
					</h2>
					<div id="main_changer" class="center">
						Websites
					</div>
				<div class="center">
					<a href="contact.php">Request a Quote</a>
				</div>
			</div>
		</div>

		<div id="services" class="dark row">
			<div class="col-2 stretch-12">
				<img src="imgs/brand.png" class="row" alt="Multiple documents from a brand"/>
				
				<h3>Branding</h3>

				<P>
					Make a great first impression and attract new customers with our professional branding services.
				</p>
			</div>

			<div class="col-2 stretch-12">
				<img src="imgs/design.png" class="row" alt="A pencil"/>
				
				<h3>Design</h3>

				<P>
					Our high quality designs will help your business stand out in the marketplace.		
				</p>
			</div>

			<div class="col-2 stretch-12">
				<img src="imgs/development.png" class="row" alt="A gear"/>
				
				<h3>Development</h3>
				
				<p>
					With years of experience, we'll use the latest web technologies to deliver you a high quality site. 
				</p>
			</div>
		</div>

		<div id="testimonials" class="row">
			<div class="col-6 center stretch-12">
				&ldquo;As a small business I was very lucky to have Paul work for me &#8230; I would recommend Paul to anyone!&rdquo;

			</div>
			<div class="col-6 center stretch-12">
				- Dann Rogers,
			</div>
			<div class="col-6 center stretch-12">
				Musician
			</div>
		</div>

		<?php
			include('php/contact_form2.php')
		?>
	</body>
</html>