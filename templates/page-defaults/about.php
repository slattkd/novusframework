<?php
session_start();
date_default_timezone_set( "America/New_York" );
error_reporting(0);
	include('config.php');
	include('inc/class.cart.php');	
?>
<!DOCTYPE html>
<html>
<head>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/pixelhead.php'); ?>
<meta charset="UTF-8">
<title><?php echo $company->name; ?> | About</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,800" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link href="../shared/css/base.css" rel="stylesheet">
<link href="../shared/css/legal-copy.css" rel="stylesheet">
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7RRXPJ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/pixelbody.php'); ?>	
<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>

<div class="container mx-auto py-8">	
		<div class="content px-5">	

		<h1 class="">ABOUT US</h1>
			
			<h2 class="mb-6" style="margin-top: 1.5rem"><?php echo $company->name; ?>'s Story</h2>
			
			<p>Supernatural Man was founded in 2016 in New York City, where we found men were feeling less drive and intensity than they used to. We decided to create a natural formula with top quality ingredients to supercharge the energy of guys like you.</p>

			<p>We researched hundreds of ingredients from all over the world to find what we believe is the absolute best combination for men looking for a long-term performance edge, or who just want to get back in the zone.</p>

			<p>Our main ingredients are the highest quality, specially sourced Ginkgo Biloba, Green Tea Extract and Ginseng, which have been used in Asia for thousands of years to impart vigor and male health, so you feel powerful and relaxed, an inner glow of focus and energy that carries through to all the day’s activities.</p>

			<p>We’ve helped many of our members regain their passion for life and now we’ve taken it online to reach the world!</p>
			
			<h2>Supernatural Man’s Initiative To Help Men Better Themselves</h2>

			<p>Here at Becoming Supernatural we are constantly striving to make the most effective, healthy and useful products for men. We put forth our best effort to meet the needs of our customers. This is done by consolidating years of experience, research and data to provide the highest quality of product for our clients.</p>

			<h2>Frustration Free Lives</h2>

			<p>Once a guy hits middle age, he can feel a loss of the vitality he remembers from his youth. But if you ever heard the saying “When you fall off the horse, you have to get back on,” well we firmly believe in that phrase at Becoming Supernatural. We help men naturally and effectively get back to that place of positive momentum rather than just giving up and quitting.</p>

			<h2>Improving Men’s Confidence and Self-Image</h2>

			<p>Let’s be honest here, feeling low energy isn’t fun for any guy – it isn’t fun for you, your romantic partner, and anyone else in your family, career or social life. Suffering from a lack of confidence due to decreased masculine vitality is a very hard thing to deal with in everyday life that can be emotionally crippling and lead to poor self-esteem or even depression. The first step is to admit that you suffer from these things and our customers have taken that step and we reward them heavily with great products to improve their life as a whole.</p>

			<p>So how nice would it be to feel that energy and clarity return. We provide that with top quality ingredients that have been custom formulated to provide a healthy boost to get you through your days and nights. Instead of waking up and dreading another day of feeling weak and “less than a man”, you wake up with the thoughts of endless opportunities that this day could hold for you.</p>
			
			<h2>Our Mission</h2>
			
			<p>To provide a combination of the best ingredients at the best price to help men everywhere. It often only takes a little bit more vitality to create a chain reaction that can energize a guy’s whole life. There’s no reason for any man to be stuck feeling frustrated and unmotivated about life and love!</p>
			
			<h2>Delivery Methods</h2>
			<p>We deliver throughout the United States using USPS. Please allow 3 to 7 days for delivery. You will receive an email within one business day confirming your delivery and providing a tracking number. Please feel free to reach out to our customer care team at <?php echo $support->phone; ?> for any delivery-related questions.</p>

	</div>	
	
</div><!-- end .container -->

<?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
