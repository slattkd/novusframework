<?php
//PageTypes dictate what pixels are bing fired, options should be limited to:
/*
  1. vsl
  2. wsl
  3. assessemnt
  4. order
  5. onepage
  6. step1, step2, step3
  7. up1, up2, up3, up4
  8. dn1, dn2, dn3
  9. receipt
*/
$_SESSION['pageType'] = 'dn1';
$next = '/up/upsell-2-blow-her-away.php';

// Include PID of product to process-up here
$product1 = $products['products']['1023'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php template("includes/header"); ?>
  <title><?= $company['name']; ?> - 100% Secure Checkout</title>

  <style>

  </style>
</head>
<!-- HTML code from Bootply.com editor -->

<body class="bg-gray-100 py-6 md:py-11">

  <div>
    <div class="container-vsl mx-auto">
      <section>
        <?php
                    $current_step = 2;
                    template('includes/step_bar', null, $current_step);
                ?>
      </section>

      <div class="wsl container-vsl mx-auto my-2 bg-white border-2 p-4 md:p-8 mt-6 mb-11 rounded-lg text-gray-600 shadow">

        <!-- PASTE LETTER HERE -->

        <!--p class="p4 flex-growor-black"><b><span id="upSellName" style="font-size: 17px;"><strong style="color: #D81E00;">WARNING:</strong> <u>Do Not</u> Leave This Page Yet, Your Order Is Not Complete!</span></b></p-->


        <h1 class="mb-5 text-center text-red-600">Take Just 3 Or 6 Bottles And Get An Even <strong>BIGGER
            Discount…</strong></h1>


        <p class="pb-4 text-lg md:text-xl">Hey, it’s Ryan again…</p>


        <p class="pb-4 text-lg md:text-xl">I understand that $177 is a lot, but I don’t want you to leave empty handed.
        </p>

        <p class="pb-4 text-lg md:text-xl">Like I said before I really want to make sure you’ve got those thick,
          rock-hard erections for AS LONG as you want them!</p>

        <p class="pb-4 text-lg md:text-xl">So right now, today only…</p>

        <p class="pb-4 text-lg md:text-xl">I’ll send you a smaller, three-bottle supply and give you an <strong><em>even
              bigger discount</em></strong>.</p>

        <p class="pb-4 text-lg md:text-xl">Or an extra 6 bottles at a rock bottom crazy discount.</p3>

        <p class="pb-4 text-lg md:text-xl">And YES – I’ll still throw in those <strong>two FREE bonus gifts</strong> as
          well!</p>

        <p class="pb-4 text-lg md:text-xl">On the last page, you got a 57% OFF discount…</p>

        <h2 class="p4 text-center text-red-600">Now I’ll Drop The Price EVEN MORE… And Give You A <strong>WHOPPING 76%
            OFF!</strong></h2>

        <p class="pb-4 text-lg md:text-xl">You heard right!

        <p class="pb-4 text-lg md:text-xl">My marketing department is going to be furious about this… </p>

        <p class="pb-4 text-lg md:text-xl">But because you’re a new customer I want to make sure you’re taken care of…
          and I know you’re going to be ordering A LOT more of this because I’ve seen how it works…</p>

        <p class="pb-4 text-lg md:text-xl">And I’d really be disappointed if you started getting all these killer
          results… </p>

        <p class="pb-4 text-lg md:text-xl">And then, your supply ran out!</p>

        <p class="pb-4 text-lg md:text-xl">But this is ONLY available today, <strong>right here</strong> on this page,
          because you’re a new customer.</p>

        <p class="pb-4 text-lg md:text-xl">Once you leave this page, this deal is <strong>gone for good!</strong></p>

        <p class="pb-4 text-lg md:text-xl">Make sure you secure your <strong>EXTREME DISCOUNT</strong> now…</p>



        <h2 class="p4 text-center text-red-600">Secure Your <strong>EXTREME DISCOUNT</strong> On A 3 Or 6-Month Supply
          of 5G Male PLUS And <strong>Get 78% OFF!</strong></h2>

        <p class="pb-4 text-lg md:text-xl text-center" style="font-size:23px;">Click The Button Below To Get Started
          Now…</p>


        <div class="processblock">
          <div id="container-buy">
            <div class="options">
              <div class="option1 border-4 border-dashed border-red-600 p-3 md:p-5">
                <div class="text-3xl md:text-4xl text-center font-bold">3 Bottle Discount</div>
                <div class="text-lg md:text-xl text-center text-gray-400" style="padding-bottom:5px;"><strike>Normally:
                    $<?= $product1['product_retail']; ?></strike></div>
                <div class="text-lg md:text-xl text-center mt-3"><strong style="font-size:27px; color:#D81E00;">Today
                    Just $<?= $product1['product_price']; ?></strong></div>
                <div class="pb-2 text-lg md:text-xl text-center text-red-600">(A MASSIVE
                  <?= percentOff($product1['product_price'], $product1['product_retail']); ?>% Savings!)</div>
                <p class="sales-tax"><?= $tax_msg; ?></p>

                <div class="text-center" id="buy-btn2">
                  <div class="flex justify-center mx-auto mt-6">
                    <a href="/process-up.php?pid=<?= $product1['product_id']; ?>&next=<?= $next; ?>" id="upsell-buy2"
                      class="buy_button processlink clickable" style="min-width: 320px;" >Yes, Secure My Discount!</a>
                  </div>
                </div>
              </div>

            </div>

            <div style="clear:both;"></div>
            <p class="text-center flex justify-center"><span><img class="guarantee" src="/images/90-day-icon.png"
                  style="width:114px; height:112px;margin-top:20px;"></span></p>
            <p class="p7 text-center" style="font-size: 20px; font-weight:bold;margin-top: 20px;margin-bottom: 0">
              <em>(It's Recommended You Take This One-Time Discount)</em>
            </p>
          </div>




          <p class="text-center py-6 text-gray-400 mx-auto" style="font-size: 13px; width: 80ch;"><a href="/thank-you"
              style="color: #8C8C8C; text-decoration:underline;" class="processlink">Skip This</a> - No, Ryan I don’t
            want this, I understand what a great deal this is and I am giving up my chance to have it, please give my
            discount to the man in line. </p>
        </div><!-- end .processblock -->
        <div id="footer" class="text-center border-t pt-3"> <?= $company['name']; ?> </div>


        <!-- // PASTE LETTER HERE -->

      </div>


    </div><!-- /.container -->

    <?php
 // declare modal variables (requires basic_modal.js)
     $modal_id = 'mouseModal';
     $modal_title = "WAIT! DO NOT LEAVE THIS PAGE!";
     $modal_body = '
     <div class="modalsubheader text-center my-2">IT COULD CAUSE ERRORS IN YOUR ORDER</div>
     <div class="text-sm text-center my-2">Do not hit the back button or close your browser.
     <br>Click <span class="font-bold">"FINISH CUSTOMIZING MY ORDER"</span> below and <span style="text-decoration: underline;font-weight:bold;">make your decision on this page</span>.</div>
     ';
     $modal_footer = '<button id="modalbutton" type="button" class="modalbutton w-full bg-blue-600 p-3 rounded text-white">FINISH CUSTOMIZING MY ORDER</button>';
     modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer);
 ?>


    <script>
    document.querySelector(".processlink").addEventListener('click', function(e) {
      document.querySelector('.processlink').classList.add('disabled');
      document.querySelector('.processlink').innerText = 'Processing...';
    });
    </script> <!-- Triggers Exit-intent -->


</body>
<?php if ($site['debug'] == true) {
      // Show Debug bar only on whitelisted domains.
      template('debug', null, null, 'debug');
  } ?>

</html>