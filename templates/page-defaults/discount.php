<?php

$next_link = 'checkout/step1';

// if ($_POST) {
//   $pid = $_POST['pid'];
// } else {
//   $pid = $_SESSION['pid'];
// }

$pid = 1083; //testing for now

// todo: match pid of product
switch ($pid) {
  case 1083:
    $month = 1;
    $qty = 2;
    $price = 39.95;
    $retail = 59.95;
    $save = $retail - $price;
    $per_month = $price / $month;
    $percent_off = round($save / $retail * 100, 0);
    $ship  = 6.95;
    break;
  case 1084:
    $month = 3;
    $qty = 6;
    $price = 97.00;
    $retail = 179.85;
    $save = $retail - $price;
    $per_month = $price / $month;
    $percent_off = round($save / $retail * 100, 0);
    $ship  = 0;
    break;
  case 1085:
    $month = 3;
    $qty = 6;
    $price = 167.00;
    $retail = 359.70;
    $save = $retail - $price;
    $per_month = $price / $month;
    $percent_off = round($save / $retail * 100, 0);
    $ship  = 0;
    break;
}

$totalPrice = intval($price) + intval($ship);

switch ($pid) {
  case 1083:
    $up_pid = 1086;
    $up_month = 1;
    $up_qty = 2;
    $up_price = 35.95;
    $up_retail = 59.95;
    $up_save = $up_retail - $up_price;
    $up_per_month = $up_price / $up_month;
    $up_percent_off = round($up_save / $up_retail * 100, 0);
    $up_ship  = 6.95;
    break;
  case 1084:
    $up_pid = 1088;
    $up_month = 3;
    $up_qty = 6;
    $up_price = 87.30;
    $up_retail = 179.85;
    $up_save = $up_retail - $up_price;
    $up_per_month = $up_price / $up_month;
    $up_percent_off = round($up_save / $up_retail * 100, 0);
    $up_ship  = 0;
    break;
  case 1085:
    $up_pid = 1090;
    $up_month = 3;
    $up_qty = 6;
    $up_price = 150.28;
    $up_retail = 359.70;
    $up_save = $up_retail - $up_price;
    $up_per_month = $up_price / $up_month;
    $up_percent_off = round($up_save / $up_retail * 100, 0);
    $up_ship  = 0;
    break;
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
			padding: 0px 5px;
			border: dashed #ff0000 6px;
		}
		.ywa-10000 { display: none; }
		.discount-wrap h2 {
			color: #d90000;
			font-weight: bolder;
			text-align: center;
			font-size: 2.9rem;
			padding-top: 5px;
			transform: scaleX(1.1);
		}
		
		.discount-wrap .subhead {
			text-align: center;
			padding: 0px 90px;
			line-height: 1.4rem;
			letter-spacing: .5px;
			font-weight: 400;
			transform: none;
		}
		
		.button-wrap #submitdiscount {
			max-width: 400px;
			display: block;
			margin: 0 auto;
			background: #e20000;
			text-align: center;
			margin-top: 20px;
			margin-bottom: 10px;
			border: none;
			padding: 15px 40px 15px 40px;
			color: #fff;
			text-decoration: none;
			font-size: 1.6rem;
			font-weight: bold;
		}
		
		.discount-wrap p {
			text-align: center;
			font-size: 1.23rem;
			font-weight: 300;
			transform: scaleY(.9);
		}
		
		.skip-wrap #submitskip {
			width: 100%;
			height: 100%;
			border: none;
			background-color: transparent;
			margin-top: 18px;
			display: block;
			color: #686868;
			text-decoration: underline;
			text-align: center;
			font-size: 1.6rem;
			font-weight: 300;
			font-family: 'Open Sans', sans-serif;
			transform: scaleY(.9);
		}
		
		.skip-wrap p {
			text-align: center;
			color: #686868;
			margin-top: 10px;
			letter-spacing: .5px;
			font-family: 'Open Sans', sans-serif;
			transform: scaleY(.9);
		}
  </style>

</head>
<body>  
<div class="container container-vsl mx-auto py-5">
	<div class="">

			<h1 class="text-3xl font-semibold text-center py-5">Before You Continue&hellip;</h1>
			<div class="discount-wrap">
				<h2>10% OFF INSTANTLY!</h2>
				<p class="subhead">Get <b>10% OFF FOR LIFE</b> on all orders and easy monthly auto refills plus FREE printed monthly newsletter <b>
			
					<form id="discountform" name="discountform" class="button-wrap" method="post" action="<?php echo $next_link; ?>">
						<input type="hidden" id="item-name" name="item-name" value="<?= $up_product['product_description'];?>">
						<input type="hidden" id="prod-cost" name="prod-cost" value="<?= $up_product['product_price']; ?>">
						<input type="hidden" id="product-id" name="pid" value="<?= $up_product['product_id']; ?>">
						<input type="submit" id="submitdiscount" name="btnSubmit" value="ACTIVATE COUPON NOW!" class="goal5 clickable">
					</form>
				<p>Recommended For All New Customers<br><b>(Limited Time Only)</b></p>
				<p class="grey">No Hassle Guarantee - You are always notified before each shipment so you can skip, pause, cancel, or swap out products.</p>
			</div>
			
			<div class="skip-wrap">
				
				<form id="skipform" name="skipform" method="post" action="<?php echo $next_link; ?>">
					<input type="hidden" id="item-name" name="item-name" value="<?= $current_product['product_description'];?>">
					<input type="hidden" id="prod-cost" name="prod-cost" value="<?= $up_product['product_price']; ?>">
          <input type="hidden" id="product-id" name="pid" value="<?= $current_product['product_id']; ?>">
					<input type="submit" id="submitskip" name="submit" class="clickable" value="Skip This - I do NOT want 10% OFF my order">
				</form>
				<p>(Note, once you skip this offer, you cannot request this discount again)</p>
			</div>

	</div>
</div>
</body>
</html>