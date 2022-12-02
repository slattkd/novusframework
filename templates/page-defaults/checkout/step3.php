<?php

$nextlink = '/thank-you' . $querystring;

// required PID from post
if ($_POST) {
  $_SESSION['pid'] = $_POST['product_id'];
}
$pid = $_SESSION['pid'];

$current_product = $products['products'][$pid];

?>

<!DOCTYPE html>
<html lang="en" style="max-height: 100vh">


<head>
  <!-- CSS -->
  <?php template("includes/header"); ?>
        <title>Total Brain boost - Secure Order</title>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <style type="text/css">



.chev-right {
  width: 24px;
  height: 60%;
  margin-right: -10px;
  background-size: contain;
  background-repeat: no-repeat;
  background-image: url("data:image/svg+xml,%3Csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 63.9 122.88' style='enable-background:new 0 0 63.9 122.88' xml:space='preserve'%3E%3Cstyle type='text/css'%3E.st0%7Bfill-rule:evenodd;clip-rule:evenodd;%7D%3C/style%3E%3Cg%3E%3Cpolygon fill='%23333' class='st0' points='63.9,61.44 0,122.88 0,0 63.9,61.44'/%3E%3C/g%3E%3C/svg%3E");
}

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
<h1 class="text-3xl font-semibold py-0">You’re 1 Step Away From the Body You Want…</h1>
</div>

<div class="flex my-8">
  <?php
  $current_step = 3;
  template("includes/step_bar2");
  ?>
</div>


<div class="card bg-white rounded-xl shadow-lg border mt-5 p-5">
  <div class="flex justify-center text-center mb-3">
    <h3 class="text-xl font-semibold">Confirm Your Payment Information</h3>
  </div>
  <div class="flex justify-center text-center items-center text-gray-600 text-base mb-3">
    <div><i class="fas fa-lock"></i> Your order will be processed on our 256-bit secure server</div>
  </div>

  <div class="flex">
    <form id="step-1" class="mb-0" method="post" action="<?php echo $nextlink; ?>" style="max-width: 100%;">
						
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full mb-3">
                <div class="w-full w-1/3">
                    <label for="creditCardNumber" class="text-sm text-gray-600 hidden md:block">Credit Card Number:</label>
                </div>
								<input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" maxlength="16" name="creditCardNumber" placeholder="Credit Card Number" value="" required="required">
              </div>
              <div class="w-full columns-2 gap-3">
                  <div class="w-full mb-3">
                      <div class="w-full w-1/3">
                          <label for="lastName" class="text-sm text-gray-600 hidden md:block">Last Name:</label>
                      </div>
                      <!-- <input class="w-full px-1 py-2 rounded " type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                      <select class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="cc_exp_mo" name="expMonth">
                          <option value="01" selected>01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                      </select>
                  </div>
                  <div class="w-full mb-3">
                    <div class="w-full w-1/3">
                        <label for="lastName" class="text-sm text-gray-600 hidden md:block">Last Name:</label>
                    </div>
                      <!-- <input class="w-full px-1 py-2 rounded " type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                      <select class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="cc_exp_yr" name="expYear">
                          <option value="22" selected>2022</option>
                          <option value="23">2023</option>
                          <option value="24">2024</option>
                          <option value="25">2025</option>
                          <option value="26">2026</option>
                          <option value="27">2027</option>
                          <option value="28">2028</option>
                          <option value="29">2029</option>
                          <option value="30">2030</option>
                          <option value="31">2031</option>
                          <option value="32">2032</option>
                      </select>
                  </div>
              </div>
							<div class="w-full mb-3">
                <div class="w-full w-1/3">
                    <label for="cvv" class="text-sm text-gray-600 hidden md:block">CCV: <a class="text-xs no-underline" href="//<?= $_SERVER['HTTP_HOST'];?>/card-help" target="_blank">what's this?</a> </label>
                </div>
								<input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="cvv" placeholder="CCV" value="" required="required">
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

      <!-- hidden form fields required for submit -->
      <input type="hidden" name="previous_page" value="checkout/step2"> 
      <input type="hidden" name="current_page" value="/checkout/step3">
      <input type="hidden" name="next_page" id="next-page" value="<?php echo $nextlink; ?>">
      <input type="hidden" name="form_id" value="step_<?php echo $_SESSION['s']; ?>">
      <input type="hidden" name="step" value="<?php echo $_SESSION['s']; ?>">
      <input type="hidden" name="AFFID" value="<?php echo $_SESSION['affid']; ?>">
      <input type="hidden" name="AFID" value="<?php echo $_SESSION['vwovar']; ?>">
      <input type="hidden" name="C1" value="<?php echo $_SESSION['c1']; ?>">
      <input type="hidden" name="C2" value="<?php echo $_SESSION['c2']; ?>">
      <input type="hidden" name="C3" value="<?php echo $_SESSION['c3']; ?>">
      <input type="hidden" name="utm_source" value="<?php echo $_SESSION['utm_source']; ?>">
      <input type="hidden" name="utm_medium" value="<?php echo $_SESSION['utm_medium']; ?>">
      <input type="hidden" name="utm_campaign" value="<?php echo $_SESSION['utm_campaign']; ?>">
      <input type="hidden" name="utm_term" value="<?php echo $_SESSION['utm_term']; ?>">
      <input type="hidden" name="utm_content" value="<?php echo $_SESSION['utm_content']; ?>">
      <input type="hidden" name="click_id" value="<?php echo $_SESSION['clickid']; ?>">
      <input type="hidden" name="notes" value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>">
      <input type="hidden" name="shippingId" id="shippingId" value="<?php echo $shippingId; ?>">
      <input type="hidden" name="newform" value="yes">
      <input type="hidden" name="upsellProductIds" id="upsellProductIds" value="">
      <input type="hidden" name="upsellCount" value="0">
      <input type="hidden" name="customer_time" id="customer_time"  value="">
      <input type="hidden" name="eftid" id="eftid"  value="">
      <input type="hidden" name="sessionId" value="<?php echo $kount_session; ?>">
      <input type="hidden" name="fid" id="fid" value="<?php echo $formID; ?>" class="hidden" />
      <input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo $site['campaign']; ?>">
      <input type="hidden" name="37positions" id="37positions" value="<?php echo $thirtyseven; ?>">
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
<?php template("includes/rpFooter"); ?>

<script>
  const isMobile = Math.min(window.innerWidth) < 769;
  // || navigator.userAgent.indexOf("Mobi") > -1

  if(!isMobile) {
      const placeholderElements = document.querySelectorAll('input');
      placeholderElements.forEach(el => {
          if (el.hasAttribute('placeholder')) {
              el.removeAttribute('placeholder');
          }

      })
  }
</script>
</body>