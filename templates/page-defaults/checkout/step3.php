<?php

$nextlink = '/thank-you' . $querystring;
$kount_session = str_replace('.', '', microtime(true));

// required PID from post
if ($_POST) {
  $_SESSION["phone"] = $_POST['phone'];
  $_SESSION["shippingAddress1"] = $_POST['shippingAddress1'];
  $_SESSION["shippingCountry"] = $_POST['shippingCountry'];
  $_SESSION["shippingCity"] = $_POST['shippingCity'];
  $_SESSION["shippingState"] = $_POST['shippingState'];
  $_SESSION["shippingZip"] = $_POST['shippingZip'];
  $_SESSION["billingSame"] = isset($_POST['billingSame']) ? 1 : 0;
  $_SESSION["billingAddress1"] = $_POST['billingAddress1'];
  $_SESSION["billingCountry"] = $_POST['billingCountry'];
  $_SESSION["billingCity"] = $_POST['billingCity'];
  $_SESSION["billingState"] = $_POST['billingState'];
  $_SESSION["billingZip"] = $_POST['billingZip'];
  $_SESSION["shippingId"] = $_POST['shippingId'];
  $_SESSION["shippingCost"] = $_POST['shippingCost'];
  $_SESSION["joinTextAlerts"] = isset($_POST['joinTextAlerts']) ? $_POST['joinTextAlerts'] : 0;
  $_SESSION["tax_pct"] = $_POST['tax_pct'];
  if ($_SESSION["tax_pct"] !== 0) {
    $_SESSION['tax_msg'] = '+ ' . $_SESSION['tax_pct'] . '%  ' . $_SESSION['billingState'] . ' Sales Tax';
  } else {
    $_SESSION['tax_msg'] = '+ Applicable Sales Tax';
  }
}
$pid = $_SESSION['pid'];

$current_product = $products['products'][$pid];
?>

<!DOCTYPE html>
<html lang="en" style="max-height: 100vh">


<head>
  <!-- CSS -->
  <?php template("includes/header"); ?>
  <title><?= $company['billedAs']; ?> - Secure Order</title>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <style type="text/css">
    .seal {
      max-width: 175px;
    }
  </style>
</head>

<body class=" bg-gray-100">
  <?php 
    $container = 'container-vsl';
    template("includes/rpHeader"); 
  ?>
  <div class="container container-vsl mx-auto c8 doc-content pb-4 px-2 md:px-0">

    <div class="flex justify-center mt-0 md:mt-8">
      <h1 class="text-2xl md:text-3xl text-center font-bold py-0"><?php echo $company['checkoutHeadline3']; ?></h1>
    </div>

    <div class="flex my-4 md:my-8">
      <?php
      template("includes/step_bar2", null, 3);
      ?>
    </div>


    <div class="card bg-white rounded-xl shadow-lg border mt-5 p-5">
      <div class="flex justify-center text-center mb-3">
        <h3 class="text-xl md:text-2xl font-semibold">Confirm Your Payment Info</h3>
      </div>
      <div class="flex items-center text-gray-600 text-base py-4 mt-4 md:mx-4 md:px-0 border-t">
        <div><i class="fas fa-lock"></i> Your order will be processed on our 256-bit secure server</div>
      </div>
      <?php
      if (isset($_SESSION['formerrors'])) {
      ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative" role="alert">
          <strong class="font-bold">Whoops, something didn't go right - Error Code: <?php echo $_SESSION['llerrorcode'] ?></strong>
          <span class="block sm:inline"><?php echo $_SESSION['formError'] ?></span>
        </div>
      <?php } ?>

      <div class="flex">
        <form id="step-3" class="mb-0 w-full" method="post" action="//<?= $_SERVER['HTTP_HOST']; ?>/process.php" style="max-width: 100%;">

          <div class="flex flex-wrap items-center mb-4">
            <div class="input w-full mb-3 md:mb-2 md:px-4">
              <div class="w-full invisible">
                <label for="creditCardNumber" class="text-sm text-gray-600 hidden md:block">Credit Card Number:</label>
              </div>
              <input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" maxlength="16" name="creditCardNumber" placeholder="Credit Card Number" value="" required="required" data-private>
            </div>
            <div class="w-full columns-2 gap-3 mb-3 md:mb-2 md:px-4">
              <div class="w-full">
                <div class="input w-full">
                  <label for="cc_exp_mo" class="text-sm text-gray-600 hidden md:block">Exp Month:</label>
                </div>
                <!-- <input class="w-full px-1 py-2 rounded " type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                <select class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="cc_exp_mo" name="expMonth" data-private>
                  <option value="01">01</option>
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
              <div class="w-full">
                <div class="input w-full">
                  <label for="cc_exp_yr" class="text-sm text-gray-600 hidden md:block">Exp Year:</label>
                </div>
                <!-- <input class="w-full px-1 py-2 rounded " type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                <select class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="cc_exp_yr" name="expYear" data-private>
                  <option value="23" selected>2023</option>
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
            <div class="flex w-full columns-2 gap-3 items-center">
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                  <label for="cvv" class="text-sm text-gray-600 hidden md:block">CVV:</label>
                </div>
                <input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="cvv" placeholder="CVV" value="" required="required" data-private>
              </div>
              <div class="w-full mb-1 md:px-4 pl-0 mt-3">
                <div class="text-sm text-rpblue no-underline md:mt-4 clickable" onclick="getPage('card-help.php')">What is a CVV?</div>
              </div>

            </div>

          </div>


          <!-- hidden fields -->
          <!-- <input type="hidden" name="campaign_id" value="5"> -->
          <input type="hidden" name="product-id" value="<?= @$current_product['product_id']; ?>">

          <div class="flex justify-center w-full">
            <button type="button" id="secure-button" class="cta-button clickable w-full md:w-auto text-3xl py-2 md:py-3">Next Step <span class="chev-right ml-2"></span></button>
          </div>

          <div class="flex justify-center w-full mt-3">
            <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/sec-icons.png" style="max-width: 600px;">
          </div>

          <div class="border p-8 mt-8 md:mx-4 hidden">
            <div class="flex justify-center text-center">
              <div class="flex flex-col items-center">
                <div class="text-2xl font-light">Your Order Summary</div>
                <div class="font-semibold my-2 text-xl"><?= $current_product['product_name']; ?></div>
              </div>
            </div>
            <div class="flex justify-between w-full mt-6">
              <div class="">Retial Price</div>
              <div class="line-through">$<?= number_format($current_product['product_retail'],2); ?></div>
            </div>
          
            <div class="flex justify-between w-full mt-2 border-b pb-2">
              <div class="">Your Price</div>
              <div class="line-through">$<?= number_format($current_product['product_price'],2); ?></div>
            </div>
            <div class="flex justify-between w-full mt-2">
              <?php if (isset($_SESSION['tax_pct'])): ?>
                <div class="">Tax <span class="text-sm">(<?= $_SESSION['tax_pct']?>%)</span></div>
                <div class="">$<?php echo taxAmt($current_product['product_price']); ?></div>
              <?php else: ?>
              <div class="">Tax <span class="text-sm">(Estimated)</span></div>
              <div class="">$0.00</div>
              <?php endif; ?>
            </div>
            <div class="flex justify-between w-full mt-2 pb-2 border-b">
              <div class="">Shipping</div>
              <div class="flex flex-nowrap">
                <div class="<?php echo $shipping_cost == 0 ? 'line-through' : ''; ?>">$<?= number_format($shipping_cost, 2); ?> </div>
                <?php if ($shipping_cost == 0): ?>
                <span class="text-rpblue font-semibold ml-2">FREE</span>
                <?php endif; ?>
              </div>
            </div>
            <div class="flex justify-between w-full mt-2">
              <div class="font-semibold">Today You Pay Only</div>
              <div class="">$<?= number_format($current_product['product_price'] + $shipping_cost + taxAmt($current_product['product_price']),2); ?></div>
            </div>
          </div>

      </div>

    </div>

      <!-- hidden form fields required for submit -->
      <input type="hidden" name="firstName" id="FirstName" value="<?php echo @$_SESSION["firstName"]; ?>">
      <input type="hidden" name="lastName" id="LastName" value="<?php echo @$_SESSION["lastName"]; ?>">
      <input type="hidden" name="email" id="Email" value="<?php echo @$_SESSION["email"]; ?>">
      <input type="hidden" name="phone" id="Phone" value="<?php echo @$_SESSION["phone"]; ?>">
      <input type="hidden" name="billingAddress1" id="billingAddress1" value="<?php echo @$_SESSION["billingAddress1"]; ?>">
      <input type="hidden" name="billingAddress2" id="billingAddress2" value="<?php echo @$_SESSION["billingAddress2"]; ?>">
      <input type="hidden" name="billingCity" id="billingCity" value="<?php echo @$_SESSION["billingCity"]; ?>">
      <input type="hidden" name="billingState" id="billingState" value="<?php echo @$_SESSION["billingState"]; ?>">
      <input type="hidden" name="billingCountry" id="billingCountry" value="<?php echo @$_SESSION["billingCountry"]; ?>">
      <input type="hidden" name="billingZip" type="text" id="billingZip" placeholder="Postal Code" maxlength="12" value="<?php echo @$_SESSION['billingZip']; ?>">
      <input type="hidden" name="shippingAddress1" type="text" id="shippingAddress1" placeholder="Address 1" value="<?php echo @$_SESSION["shippingAddress1"]; ?>">
      <input type="hidden" name="shippingAddress2" type="text" id="shippingAddress2" placeholder="Address 2" value="<?php echo @$_SESSION["shippingAddress2"]; ?>">
      <input type="hidden" name="shippingCity" type="text" id="shippingCity" placeholder="City" size="25" value="<?php echo @$_SESSION["shippingCity"]; ?>">
      <input type="hidden" name="shippingState" id="shippingState" value="<?php echo @$_SESSION["shippingState"]; ?>">
      <input type="hidden" name="shippingCountry" id="shippingCountry" value="<?php echo @$_SESSION["shippingCountry"]; ?>">
      <input type="hidden" name="shippingZip" id="shippingZip" value="<?php echo @$_SESSION["shippingZip"]; ?>">


      <input type="hidden" name="previous_page" value="//<?= $_SERVER['HTTP_HOST']; ?>/checkout/step2">
      <input type="hidden" name="current_page" value="//<?= $_SERVER['HTTP_HOST']; ?>/checkout/step3">
      <input type="hidden" name="next_page" id="next-page" value="/thank-you">
      <input type="hidden" name="product_id" id='product_id' value="<?php echo @$_SESSION['pid']; ?>">
      <input type="hidden" name="form_id" value="step_<?php echo @$_SESSION['s']; ?>">
      <input type="hidden" name="step" value="<?php echo @$_SESSION['s']; ?>">
      <input type="hidden" name="AFFID" value="<?php echo @$_SESSION['affid']; ?>">
      <input type="hidden" name="AFID" value="<?php echo @$_SESSION['vwovar']; ?>">
      <input type="hidden" name="C1" value="<?php echo @$_SESSION['s1']; ?>">
      <input type="hidden" name="C2" value="<?php echo @$_SESSION['s2']; ?>">
      <input type="hidden" name="C3" value="<?php echo @$_SESSION['s3']; ?>">
      <input type="hidden" name="o" value="<?php echo @$_SESSION['o']; ?>">
      <input type="hidden" name="utm_source" value="<?php echo @$_SESSION['utm_source']; ?>">
      <input type="hidden" name="utm_medium" value="<?php echo @$_SESSION['utm_medium']; ?>">
      <input type="hidden" name="utm_campaign" value="<?php echo @$_SESSION['utm_campaign']; ?>">
      <input type="hidden" name="utm_term" value="<?php echo @$_SESSION['utm_term']; ?>">
      <input type="hidden" name="utm_content" value="<?php echo @$_SESSION['utm_content']; ?>">
      <input type="hidden" name="click_id" value="<?php echo @$_SESSION['clickid']; ?>">
      <input type="hidden" name="notes" value="<?php echo @$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
      <input type="hidden" name="shippingId" id="shippingId" value="<?php echo @$_SESSION['shippingId']; ?>">
      <input type="hidden" name="shippingCost" id="shippingCost" value="<?php echo @$_SESSION['shippingCost']; ?>">
      <input type="hidden" name="tax_pct" id='tax_pct' value="<?php echo $_SESSION['tax_pct']; ?>">
      <input type="hidden" name="newform" value="yes">
      <input type="hidden" name="upsellProductIds" id="upsellProductIds" value="1086,1088,1090">
      <input type="hidden" name="upsellCount" value="0">
      <input type="hidden" name="customer_time" id="customer_time"  value="">
      <input type="hidden" name="eftid" id="eftid"  value="<?php echo @$_SESSION['eftid']; ?>">
      <input type="hidden" name="sessionId" value="<?php echo @$kount_session; ?>">
      <input type="hidden" name="fid" id="fid" value="<?php echo @$formID; ?>" class="hidden" />
      <input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo @$site['campaign']; ?>">
      <input type="hidden" name="37positions" id="37positions" value="<?php echo @$thirtyseven; ?>">
      </form>


  <div class="flex flex-wrap md:flex-nowrap items-center my-11">
    <div class="flex mx-auto pr-0 md:pr-8 mb-4 md:mb-0">
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/90-day-icon.png" class="seal fs-3 mx-auto md:mx-0 w-1/2 md:w-full">
    </div>
    <div class="flex flex-col w-full md:w-4/5 -md:ml-11">
      <div class="flex">
        <h4 class="text-center md:text-left text-xl">
          Your Purchase Today is Fully Protected By Our <span class="nw">90-Day Money Back Guarantee</span>
        </h4>
      </div>
      <div class="flex">
        <p class="text-center md:text-left mt-3">
          We want to make 100% sure that you love <?php echo $company['featuredProduct']; ?>, which is why you get to try it completely risk free for three full months and make sure you love it. Any time you want, you can contact support to request a refund, no questions asked!
        </p>
      </div>


    </div>
  </div>

  <div class="protection-header my-4">
    <h5 class="flex items-center text-xl"><span><?= $company['billedAs']; ?> <br class="md:hidden"> Buyer Protection</span></h5>
  </div>


  <div class="protection-grid flex flex-wrap w-full my-6 md:my-11">

    <div class="flex flex-col w-full md:w-1/2 p-2 mx-auto">
      <div class="bull blue-q">
        <div class="mb-5">
          <h6><span class="font-semibold">Fast Shipping:</span></h6>
          <p>3-Day DHL for USA, 8-Day Worldwide</p>
        </div>
        <div class="mb-5">
          <h6><span class="font-semibold">24/7 Live Phone Help</span></h6>
          <p>Talk to a real, live customer support specialist at any time</p>
        </div>
      </div>
    </div>
    <div class="flex flex-col w-full md:w-1/2 p-2 mx-auto">
      <div class="bull blue-q">
        <div class="mb-5">
          <h6><span class="font-semibold">Privacy Guaranteed</span></h6>
          <p>Your information is safe and is never shared</p>
        </div>
        <div class="mb-5">
          <h6><span class="font-semibold">Lowest Price Guaranteed</span></h6>
          <p>You will never see this at a lower price, guaranteed.</p>
        </div>
      </div>
    </div>

  </div>

  </div>

  <?php
  // declare modal variables (requires basic_modal.js)
  $modal_id = 'cvvModal';
  $modal_title = "";
  $max_width = '4xl';
  $height = 'full';
  $modal_body = '
		<div id="cvv-copy"></div>
		';
  $modal_footer = '';
  modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer, $max_width, $height);
  ?>

  <?php template("includes/rpFooter"); ?>

  <script>
    const isMobile = Math.min(window.innerWidth) < 769;
    // || navigator.userAgent.indexOf("Mobi") > -1

    const placeholderElements = document.querySelectorAll('.input input');

    // hide show input labels
    placeholderElements.forEach(pl => {
      pl.addEventListener('focus', ()=> {
        pl.previousElementSibling.classList.add('fade-in-element');
        pl.previousElementSibling.classList.remove('invisible');
      })
      pl.addEventListener('blur', ()=> {
        pl.previousElementSibling.classList.add('invisible');
        pl.previousElementSibling.classList.remove('fade-in-element');
      })
    })

    // input validation
    window.onload = function() {
      // Prsitine Config
      let defaultConfig = {
        // class of the parent element where the error/success class is added
        classTo: 'input',
        // class of the parent element where error text element is appended
        errorTextParent: 'input',
        // type of element to create for the error text
        errorTextTag: 'div',
        // class of the error text element
        errorTextClass: 'text-help text-red-700 border-red-600 font-medium text-sm'
      };
      const submitBtn = document.getElementById('secure-button');
      const form = document.getElementById('step-3');
      const pristine = new Pristine(form, defaultConfig);
      var formValid = false;
      var firstSubmit = false;

      submitBtn.addEventListener('click', (e) => {
        e.preventDefault();
        firstSubmit = true;
        formValid = pristine.validate();
        if (formValid) {
          submitBtn.disabled = true;
          submitBtn.innerHTML = "Processing..."
          form.submit();

          // After 10 seconds, rest form submit button
          setTimeout(function(){
              submitBtn.disabled = false;
              submitBtn.innerHTML = 'Next Step <span class="chev-right ml-2"></span>';
          }, 10000);
        }
      })

      form.addEventListener("input", function() {
        if (firstSubmit) {
          handleValidation();
        }
      });

      function handleValidation() {
        formValid = pristine.validate(); // returns true or false
        if (!formValid) {
          // submitBtn.disabled = true;
          var firstError = document.querySelector('.has-danger');
          firstError.scrollIntoView({
            behavior: "smooth",
            block: "end"
          });
        } else {
          // submitBtn.disabled = false;
        }
      }
    };


    const cvvModalBody = document.getElementById('cvv-copy');
    var htmlElement = '';

    var pageData = null;
    var isLoading = false;

    function getPage(pageName) {
      isLoading = true;
      fetch(`/${pageName}`)
        .then(response => response.text())
        .then((data) => {
          isLoading = false;
          if (data && data !== '') {
            pageData = data;
            window.modalHandler('cvvModal', true);
            cvvModalBody.innerHTML = pageData;
          } else {
            cvvModalBody.innerHTML = '<div class="text-center">Content is unavailable at this time.</div>';
          }
        })
    }
  </script>

<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</body>
</html>