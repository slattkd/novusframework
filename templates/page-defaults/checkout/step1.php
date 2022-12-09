<?php

$nextlink = '/checkout/step2' . $querystring;
$current_step = 1;

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
    .seal {
      max-width: 175px;
    }
  </style>
</head>

<body class=" bg-gray-100">
  <?php template("includes/rpHeader"); ?>
  <div class="container container-vsl mx-auto c8 doc-content pb-4 px-2 md:px-0">

    <div class="flex justify-center mt-0 md:mt-8">
      <h1 class="text-2xl md:text-3xl text-center font-bold py-0"><?php echo $company['checkoutHeadline1']; ?></h1>
    </div>

    <div class="flex my-4 md:my-8">
      <?php
      template("includes/step_bar2", null, 1);
      ?>
    </div>


    <div class="card bg-white rounded-xl shadow-lg border mt-5 p-5 md:px-8">
      <div class="flex justify-center text-center mb-4">
        <h3 class="text-xl md:text-2xl font-semibold">Enter Your Contact Information</h3>
      </div>

      <div class="flex">
        <form id="step-1" class="mb-0 w-full" method="post" action="<?php echo $nextlink; ?>">

          <div class="flex flex-wrap items-center mb-4">
            <div class="input w-full mb-3 md:mb-2 md:px-4">
              <div class="w-full invisible">
                <label for="email" class="text-sm text-gray-600 hidden md:block">Email:</label>
              </div>
              <input class="border border-gray-400 rounded w-full p-2 text-lg" type="email" name="email" placeholder="Email Address" value="<?php echo @$_SESSION['email']; ?>" required>
            </div>
            <div class="input w-full mb-3 md:mb-2 md:px-4">
              <div class="w-full invisible">
                <label for="firstName" class="text-sm text-gray-600 hidden md:block">First Name:</label>
              </div>
              <input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="firstName" placeholder="First Name" value="<?php echo @$_SESSION['firstName']; ?>" required>
            </div>
            <div class="input w-full mb-3 md:mb-2 md:px-4">
              <div class="w-full invisible">
                <label for="lastName" class="text-sm text-gray-600 hidden md:block">Last Name:</label>
              </div>
              <input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="lastName" placeholder="Last Name" value="<?php echo @$_SESSION['lastName']; ?>" required>
            </div>

            <!-- hidden fields -->
            <!-- <input type="hidden" name="campaign_id" value="5"> -->
            <input type="hidden" name="product_id" value="<?= $current_product['product_id']; ?>">

            <div class="flex justify-center w-full">
              <button type="button" id="secure-button" class="cta-button clickable w-full md:w-auto text-3xl py-2 md:py-3">Next Step <span class="chev-right ml-2"></span></button>
            </div>

            <div class="flex justify-center w-full mt-3">
              <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/sec-icons-new.png" style="max-width: 600px;">
            </div>
          </div>
          <input type="hidden" name="previous_page" value="">
          <input type="hidden" name="current_page" value="/checkout/step1">
          <input type="hidden" name="next_page" id="next-page" value="<?php echo $nextlink; ?>">
        </form>

      </div>




    </div>

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


  <?php template("includes/rpFooter"); ?>
<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>

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
      const form = document.getElementById('step-1');
      const pristine = new Pristine(form, defaultConfig);
      var formValid = false;
      var firstSubmit = false;

      submitBtn.addEventListener('click', (e)=> {
        e.preventDefault();
        firstSubmit = true;
        formValid = pristine.validate();
        if(formValid) {
          form.submit();
        }
      })

      form.addEventListener("input", function () {
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
  </script>

</body>
</html>