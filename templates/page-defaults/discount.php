<?php
var_dump($_POST);

$nextlink = 'checkout/step1' . $querystring;

if ($_POST) {
  $_SESSION['pid'] = $_POST['product_id'];
}
$pid = $_SESSION['pid'];

$totalPrice = intval($price) + intval($ship);

switch ($pid) {
  case 1083:
    $up_pid = 1086;
    break;
  case 1084:
    $up_pid = 1088;
    break;
  case 1085:
    $up_pid = 1090;
}

$up_totalPrice = intval($up_price) + intval($up_ship);

$current_product = $products['products'][$pid];
$up_product = $products['products'][$up_pid];

?>

<!DOCTYPE html>
<html lang="en" style="max-height: 100vh">


<head>
  <!-- CSS -->
  <?php template("includes/header"); ?>
        <title>Total Brain boost - Secure Order</title>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <style type="text/css">

.discount-wrap { 
			max-width: 550px;
			margin: 0 auto;
			padding: 1rem;;
			border: dashed #ff0000 6px;
		}
		.ywa-10000 { display: none; }
		.discount-wrap h2 {
			color: #d90000;
			font-weight: bolder;
			text-align: center;
		}
		
		.discount-wrap .subhead {
			text-align: center;
			line-height: 1.4rem;
			letter-spacing: .5px;
			font-weight: 400;
			transform: none;
		}
		
		.button-wrap #submitdiscount {
			max-width: 100%;
			display: block;
			margin: 0 auto;
			background: #e20000;
			text-align: center;
			margin-top: 20px;
			margin-bottom: 20px;
			border: none;
			color: #fff;
			text-decoration: none;
			font-size: 1.4rem;
			font-weight: bold;
		}
		
		.discount-wrap p {
			text-align: center;
			font-size: 1.1em;
			font-weight: 200;
			line-height: 1.4;
		}
		
		.skip-wrap #submitskip {
			width: 100%;
			border: none;
			background-color: transparent;
			display: block;
			text-decoration: underline;
			text-align: center;
			font-weight: 300;
			font-family: 'Open Sans', sans-serif;
		}
		
		.skip-wrap p {
			text-align: center;
			color: #686868;
			margin-top: 10px;
			letter-spacing: .5px;
			font-family: 'Open Sans', sans-serif;
		}
  </style>

</head>
<body>  
<div class="container container-vsl mx-auto py-5">
	<div class="">

			<h1 class="text-2xl md:text-3xl font-semibold text-center py-4">Before You Continue&hellip;</h1>
			<div class="discount-wrap">
				<h2 class="text-3xl md:text-4xl mb-3" style="line-height: 1.1;">10% OFF INSTANTLY!</h2>
				<p class="subhead">Get <b>10% OFF FOR LIFE</b> on all orders and easy monthly auto refills plus FREE printed monthly newsletter <b>
			
					<form id="discountform" name="discountform" class="button-wrap w-full mb-0" method="post" action="<?php echo $nextlink; ?>">
						<input type="hidden" name="previous_page" value="checkout/order">
						<input type="hidden" name="current_page" value="/discount">
						<input type="hidden" name="next_page" id="next-page" value="<?php echo $nextlink; ?>">
						<input type="hidden" id="product_id" name="product_id" value="<?= $up_product['product_id']; ?>">
						<input type="submit" id="submitdiscount" name="btnSubmit" value="ACTIVATE COUPON NOW!" class="goal5 px-3 py-2 clickable">
					</form>
				<p>Recommended For All New Customers<br><b>(Limited Time Only)</b></p>
				<p class="bg-gray-500 pb-0 mt-4">No Hassle Guarantee - You are always notified before each shipment so you can skip, pause, cancel, or swap out products.</p>
			</div>
			
			<div class="skip-wrap">
				<form id="skipform" name="skipform" class="w-full mb-0 mt-3" method="post" action="<?php echo $nextlink; ?>">
					<input type="hidden" name="previous_page" value="checkout/order"> 
					<input type="hidden" name="current_page" value="/discount">
					<input type="hidden" name="next_page" id="next-page" value="<?php echo $nextlink; ?>">
          <input type="hidden" id="product_id" name="product_id" value="<?= $current_product['product_id']; ?>">
					<input type="submit" id="submitskip" name="submit" class="clickable text-xl md:text-2xl text-gray-400 px-4" value="Skip This - I do NOT want 10% OFF my order" style="white-space: break-spaces">
				</form>
				<p class="font-normal">(Note, once you skip this offer, you cannot request this discount again)</p>
			</div>

	</div>
</div>


<?php if ($site['debug'] == true) {
        // Show Debug bar only on whitelisted domains.
        template('debug', null, null, 'debug');
    } ?>
</body>
</html>