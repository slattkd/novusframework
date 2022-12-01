<?php

$nextlink = '/step2' . $querystring;

// required PID from post
if ($_POST) {
  $pid = $_POST['pid'];
} else {
  $pid = $_SESSION['pid'];
}

$current_product = $products['products'][$pid];

var_dump($current_product);

?>

<!DOCTYPE html>
<html lang="en" style="max-height: 100vh">


<head>
  <!-- CSS -->
  <?php template("includes/header"); ?>
        <title>Total Brain boost - Secure Order</title>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <style type="text/css">

.protection-header h5 span {
  -webkit-flex: 0 1 auto;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  padding-left: 20px;
  padding-right: 20px;
  color: #006894;
}

.protection-header h5:after, .protection-header h5:before {
    height: 1px;
    content: " ";
    -webkit-flex: 1 0 auto;
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
    background-color: #006894;
}

.bull.blue-q div {
    background-image: url("//<?= $_SERVER['HTTP_HOST'];?>/images/shield.png");
    background-size: 22px auto;
    background-position: left 2px;
    padding-left: 36px;
    background-repeat: no-repeat;
}

.bull.blue-q div p {
    margin-top: 0;
    line-height: 1.4;
    font-size: 17px
}

.bull.blue-q div h6 {
    text-align: left;
    font-size: 18px;
    padding-top: 0;
    padding-bottom: 0;
}

  </style>
</head>

<body class=" bg-gray-100">
<?php template("includes/rpHeader"); ?>
<div class="container container-vsl mx-auto c8 doc-content py-4 px-2 md:px-0">

<div class="flex justify-center mt-8">
<h1 class="text-3xl font-semibold py-0">You’re 3 Steps Away From the Body You Want…</h1>
</div>

<div class="flex my-8">
  <?php
  $current_step = 1;
  template("includes/step_bar2");
  ?>
</div>


<div class="card bg-white rounded-xl shadow-lg border mt-5 p-5">
  <div class="flex justify-center text-center mb-4">
    <h3 class="text-xl font-semibold">Enter Your Contact Information</h3>
  </div>

  <div class="flex">
  <form class="mb-0" id="orderForm" name="orderForm" method="POST" action="/step2" >
						
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full mb-3">
                <div class="w-full w-1/3">
                    <label for="email" class="text-sm text-gray-600 hidden md:block">Email:</label>
                </div>
								<input class="border border-gray-400 rounded w-full p-2 text-lg" type="email" name="email" placeholder="Email Address" value="" required="required">
							</div>
							<div class="w-full mb-3">
                <div class="w-full w-1/3">
                    <label for="firstName" class="text-sm text-gray-600 hidden md:block">First Name:</label>
                </div>
								<input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="firstName" placeholder="First Name" value="" required="required">
							</div>
							<div class="w-full mb-3">
                <div class="w-full w-1/3">
                    <label for="lastName" class="text-sm text-gray-600 hidden md:block">Last Name:</label>
                </div>
								<input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="lastName" placeholder="Last Name" value="" required="required">
							</div>

              <!-- hidden fields -->
              <!-- <input type="hidden" name="campaign_id" value="5"> -->
              <input type="hidden" name="product-id" value="<?= $current_product['product_id']; ?>">

              <div class="flex justify-center w-full">
                <button type="submit" id="secureButton" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2 md:py-3">Next Step <span class="chev-right ml-2"></span></button>
              </div>

              <div class="flex justify-center w-full mt-3">
                <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/sec-icons-new.png" style="max-width: 600px;">
              </div>
						</div>
  </form>
  </div>

  
  

</div>

  <div class="flex flex-wrap items-center my-11">
    <div class="w-full md:w-1/3">
      <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/90-day-icon.png" class="seal fs-3 mx-auto md:mx-0" width="175px" height="175px">
    </div>
    <div class="flex flex-col w-full md:w-2/3 -md:ml-11">
      <div class="flex">
        <h4 class="text-center md:text-left font-semibold text-2xl">
          Your Purchase Today is Fully Protected By Our <span class="nw">90-Day Money Back Guarantee</span>
        </h4>
      </div>
      <div class="flex">
        <p class="text-center md:text-left mt-2">
          We want to make 100% sure that you love Floraspring, which is why you get to try it completely risk free for three full months and make sure you love it. Any time you want, you can contact support to request a refund, no questions asked!
        </p>
      </div>
      
      
    </div>
  </div>

  <div class="protection-header my-4">
    <h5 class="flex items-center text-xl"><span><?= $company['billedAs']; ?> Buyer Protection</span></h5>
  </div>

  
  <div class="protection-grid flex flex-wrap w-full my-11">

				<div class="flex flex-col w-full md:w-1/2 p-2 mx-auto">
				  <div class="bull blue-q">
						<div class="mb-5">
							<h6><strong>Fast Shipping:</strong></h6>
							<p>3-Day DHL for USA, 8-Day Worldwide</p>
						</div>
						<div class="mb-5">
							<h6><strong>24/7 Live Phone Help</strong></h6>
							<p>Talk to a real, live customer support specialist at any time</p>
						</div>	
					</div>
				</div>
				<div class="flex flex-col w-full md:w-1/2 p-2 mx-auto">
				  <div class="bull blue-q">
						<div class="mb-5">
							<h6><strong>Privacy Guaranteed</strong></h6>
							<p>Your information is safe and is never shared</p>
						</div>
						<div class="mb-5">
							<h6><strong>Lowest Price Guaranteed</strong></h6>
							<p>You will never see this at a lower price, guaranteed.</p>
						</div>
					</div>
				</div>

		</div>
  </div>

</body>