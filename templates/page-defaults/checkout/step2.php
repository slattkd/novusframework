<?php

error_reporting(0);

$nextlink = '/checkout/step3' . $querystring;
$_SESSION['pageType'] = 'order';

// required PID from post
if ($_POST) {
  $_SESSION['pid'] = $_POST['product_id'];
  //$_SESSION['productId'] = $_POST['product_id'];
  //$_SESSION['customerEmail'] = $_POST['email'];
  $_SESSION["email"] = $_POST['email'];
  $_SESSION["firstName"] = $_POST['firstName'];
  $_SESSION["lastName"] = $_POST['lastName'];
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
      <h1 class="text-2xl md:text-3xl text-center font-bold py-0"><?php echo $company['cehckoutHeadline2']; ?></h1>
    </div>

    <div class="flex my-4 md:my-8">
      <?php
      template("includes/step_bar2", null, 2);
      ?>
    </div>


    <div class="card bg-white rounded-xl shadow-lg border mt-5 p-5">
      <div class="flex justify-center text-center mb-4">
        <h3 class="text-xl md:text-2xl font-semibold">Enter Your Billing Information</h3>
      </div>

  <div class="flex">
    <form id="step-2" class="mb-0 w-full" method="post" action="<?php echo $nextlink; ?>">

          <div class="flex flex-wrap items-center mb-4">
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
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                    <label for="phone" class="text-sm text-gray-600 hidden md:block">Phone:</label>
                </div>
								<input required class="border border-gray-400 rounded w-full p-2 text-lg" type="tel" name="phone" placeholder="Phone" value="<?php echo @$_SESSION['phone']; ?>">
              </div>
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                    <label for="billingAddress1" class="text-sm text-gray-600 hidden md:block">Address 1:</label>
                </div>
								<input required class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="billingAddress1" placeholder="Address 1" value="<?php echo @$_SESSION['billingAddress1']; ?>">
              </div>
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                    <label for="billingAddress2" class="text-sm text-gray-600 hidden md:block">Address 2:</label>
                </div>
								<input class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="billingAddress2" placeholder="Address 2" value="<?php echo @$_SESSION['billingAddress2']; ?>">
              </div>
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                    <label for="billingZip" class="text-sm text-gray-600 hidden md:block">Zip Code:</label>
                </div>
								<input required class="border border-gray-400 rounded w-full p-2 text-lg" type="text" id="billingZip" name="billingZip" placeholder="Zip Code" value="<?php echo @$_SESSION['billingZip']; ?>">
              </div>
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                    <label for="billingCity" class="text-sm text-gray-600 hidden md:block">City:</label>
                </div>
								<input required class="border border-gray-400 rounded w-full p-2 text-lg" type="text" name="billingCity" placeholder="City" value="<?php echo @$_SESSION['billingCity']; ?>">
              </div>
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                    <label for="billingCountry" class="text-sm text-gray-600 hidden md:block">Country:</label>
                </div>
								<select required class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="billingCountry" name="billingCountry" data-toggle-element="billingState"  value="<?php echo @$_SESSION['billingCountry']; ?>" onchange="solveprice()">
                    <option selected value="US">United States</option>
                    <?php foreach ($countries as $key => $value) : ?>
                        <option value="<?= $key;?>"> <?= $value; ?> </option>
                    <?php endforeach; ?>
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/html/billing-countries.php'); ?>
                </select>
              </div>
              <div class="input w-full mb-3 md:mb-2 md:px-4">
                <div class="w-full invisible">
                    <label for="billingState" class="text-sm text-gray-600 hidden md:block">State/Province:</label>
                </div>
								<select required class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="billingState" name="billingState" value="<?php echo @$_SESSION['billingState']; ?>" data-selected="<?php echo @$_SESSION["billingState"]; ?>">
                  <?php foreach ($usStates as $key => $value) : ?>
                      <option value="<?= $key;?>"> <?= $value; ?> </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="flex flex-nowrap items-center w-full my-3  md:px-4">
                  <input type="checkbox" checked name="billingSameAsShipping" id="bill-same" value="<?php echo @$_SESSION['billingSameAsShipping']; ?>" style="filter: none;"/>
                  <label class="ml-2 text-base">Shipping address same as billing?</label>
              </div>
              <div class="flex flex-nowrap items-start w-full my-3  md:px-4">
                  <input type="checkbox" name="joinTextAlerts" id="join-text-alerts" value="0" style="filter: none;"/>
                  <label class="ml-2 text-base -mt-1"> Join Revival Point text alerts to get the latest discounts, order updates, and special offers**</label>
              </div>
              <div class="flex text-sm text-gray-500 my-3  md:px-4">
              **I agree to receive recurring text messages from Revival Point LLC. Message & Data Rates Apply. Text HELP for Info. Text STOP to opt out. No purchase necessary. Please read our Privacy Policy and Terms.
              </div>

              <!-- hide/show shipping -->
              <div class="shipping-address w-full hide">
                <div class="flex justify-center text-center mb-4">
                  <h3 class="text-xl font-semibold">Enter Your Shipping Information</h3>
                </div>
                  <div class="input w-full mb-3 md:mb-2 md:px-4">
                    <div class="w-full invisible">
                          <label for="shipingAddress1" class="text-sm text-gray-600 hidden md:block">Address 1:</label>
                      </div>

                      <input class="border border-gray-400 rounded w-full p-2 text-lg" placeholder="Address 1" name="shippingAddress1" type="text" id="shippingAddress1" placeholder="Address 1" value="<?php echo @$_SESSION["shippingAddress1"]; ?>">
                  </div>
                  <div class="input w-full mb-3 md:mb-2 md:px-4">
                      <div class="w-full invisible">
                          <label for="shippingAddress2" class="text-sm text-gray-600 hidden md:block">Address 2:</label>
                      </div>
                      <input class="border border-gray-400 rounded w-full p-2 text-lg" placeholder="Address 2" name="shippingAddress2" type="text" id="shippingAddress2" placeholder="Address 2" value="<?php echo @$_SESSION["shippingAddress2"]; ?>">
                  </div>
                  <div class="input w-full mb-3 md:mb-2 md:px-4">
                      <div class="w-full invisible">
                          <label for="shippingCity" class="text-sm text-gray-600 hidden md:block">City:</label>
                      </div>

                      <input class="border border-gray-400 rounded w-full p-2 text-lg" placeholder="City" name="shippingCity" type="text" id="shippingCity" placeholder="City" size="25" value="<?php echo @$_SESSION["shippingCity"]; ?>">
                  </div>
                  <div class="input w-full mb-3 md:mb-2 md:px-4">
                      <div class="w-full invisible">
                          <label for="shippingCountry" class="text-sm text-gray-600 hidden md:block">Country:</label>
                      </div>

                          <select class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="shippingCountry" name="shippingCountry" value="<?php echo @$_SESSION["shippingCountry"]; ?>" data-toggle-element="shippingState" onchange="solveprice()">
                              <option selected value="US">United States</option>
                              <?php foreach ($countries as $key => $value) : ?>
                                  <option value="<?= $key;?>"> <?= $value; ?> </option>
                              <?php endforeach; ?>
                              ?>
                          </select>

                  </div>
                  <div class="input w-full mb-3 md:mb-2 md:px-4">
                      <div class="w-full invisible">
                          <label for="shippingState" class="text-sm text-gray-600 hidden md:block">State/Province:</label>
                      </div>

                          <select class="border border-gray-400 rounded w-full p-2 py-3 text-lg" id="shippingState" name="shippingState" value="<?php echo @$_SESSION["shippingState"]; ?>" data-selected="<?php echo @$_SESSION["shippingState"]; ?>">
                          <?php foreach ($usStates as $key => $value) : ?>
                              <option value="<?= $key;?>"> <?= $value; ?> </option>
                          <?php endforeach; ?>
                          </select>

                  </div>
                  <div class="input w-full mb-3 md:mb-2 md:px-4">
                      <div class="w-full invisible">
                          <label for="shippingZip" class="text-sm text-gray-600 hidden md:block">Zip Code:</label>
                      </div>
                      <input class="border border-gray-400 rounded w-full p-2 text-lg" placeholder="Zip Code" type="text" name="shippingZip" type="text" id="shippingZip" value="<?php echo @$_SESSION["shippingZip"]; ?>">
                  </div>

              </div>


              <!-- hidden fields -->
              <!-- <input type="hidden" name="campaign_id" value="5"> -->
              <input id="product_id" type="hidden" name="product_id" value="<?= $current_product['product_id']; ?>">

              <div class="flex justify-center w-full">
                <button type="button" id="secure-button" class="cta-button clickable w-full md:w-auto text-3xl py-2 md:py-3">Next Step <span class="chev-right ml-2"></span></button>
              </div>

              <div class="flex justify-center w-full mt-3">
                <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/sec-icons-new.png" style="max-width: 600px;">
              </div>
						</div>

            <!-- email alerts value to post? -->
      <input type="hidden" name="previous_page" value="checkout/step1">
      <input type="hidden" name="current_page" value="/checkout/step2">
      <input type="hidden" name="next_page" id="next-page" value="<?php echo $nextlink; ?>">
      <input type="hidden" id="shippingId" name="shippingId" value="<?= $site['shippingUs']; ?>">
      <input type="hidden" id="tax_pct" name="tax_pct" value="0">
      <input type="hidden" id="lastName" name="lastName" value="<?= $_SESSION['lastName']; ?>">
      <!-- <input type="hidden" id="shippingState" name="shippingState" value="<?= $_SESSION['shippingState']; ?>"> -->
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

<script src="//<?php echo $_SERVER['HTTP_HOST'];?>/js/regions.js"></script>
<script>

  //show or hide shipping address
  const billSame = document.getElementById("bill-same");
  const shipAdd = document.querySelector('.shipping-address');

  const billCountry = document.getElementById("billingCountry");
  const shipCountry = document.getElementById("shippingCountry");

  const billState = document.getElementById("billingState");
  const shipState = document.getElementById("shippingState");

  const shipId = document.getElementById("shippingId");

  billCountry.addEventListener('change', ()=> {
    billState.selectedIndex = 0;
  })

  shipCountry.addEventListener('change', ()=> {
    shipState.selectedIndex = 0;
  })

  billSame.addEventListener('change', ()=> {
      if (billSame.checked) {
          display(shipAdd, false);
      } else {
          display(shipAdd, true);
      }
  })

  // replacement for .show() .hide()
  function display(element, show) {
    if (element) {
        if (show) {
            element.classList.remove('hide');
            element.classList.add('show');
        } else {
            element.classList.remove('show');
            element.classList.add('hide');
        }
    }
  }

  const isMobile = Math.min(window.innerWidth) < 769;
  // || navigator.userAgent.indexOf("Mobi") > -1
  const placeholderElements = document.querySelectorAll('.input input');

  // hide show input labels
  placeholderElements.forEach(pl => {
      pl.addEventListener('focus', ()=> {
        pl.previousElementSibling.classList.add('fade-in-element');
        pl.previousElementSibling.classList.remove('invisible');
        pl.placeholder
      })
      pl.addEventListener('blur', ()=> {
        pl.previousElementSibling.classList.add('invisible');
        pl.previousElementSibling.classList.remove('fade-in-element');
      })
    })

    function solveprice() {
        // bypass for testing
        // return;
        // var subtotal = parseFloat(document.getElementById('subtotalPrice').textContent).toFixed(2);
        var superLube = 0;
        if (document.getElementById('superlube')) {
            superLube = parseFloat(document.getElementById('superlube').textContent);
        }
        var sexPositions = 0;
        if (document.getElementById('sexpositions')) {
            sexPositions = parseFloat(document.getElementById('sexpositions').textContent);
        }
        var shippingCost = 0;
        var productId = document.getElementById('product_id').value;

        if ((billSame.checked && billingCountry.value == 'US') || (!billSame.checked && shipCountry.value == 'US')) {
            shipId.value = '<?= $site['shippingUs']; ?>';
            _shippingPrice = <?= $site['shippingUsCost']; ?>;
        } else {
            shipId.value = '<?= $site['shippingIntl']; ?>';
            _shippingPrice = <?= $site['shippingIntlCost']; ?>;
        }
        var total = parseFloat(<?php echo $price; ?>) + parseFloat(_shippingPrice);
        shippingCost = _shippingPrice;

        // _orderSubTotal = (parseFloat(<?php echo number_format($totalPrice, 2, '.', ''); ?>) + parseFloat(sexPositions) + parseFloat(superLube) + parseFloat(shippingCost)).toFixed(2);
        copyBillingInputValue();

    }

    function copyBillingInputValue() {
        // Check to Copy values to billing
        if(billSame.checked){ //checked
                let billingAddress1 = document.getElementsByName('billingAddress1')[0].value;
                document.getElementsByName('shippingAddress1')[0].value = billingAddress1;
                let billingAddress2 = document.getElementsByName('billingAddress2')[0].value;
                document.getElementsByName('shippingAddress2')[0].value = billingAddress2;
                let billingCity = document.getElementsByName('billingCity')[0].value;
                document.getElementsByName('shippingCity')[0].value = billingCity;
                let billingState = document.getElementsByName('billingState')[0].value;
                document.getElementsByName('shippingState')[0].value = billingState;
                let billingCountry = document.getElementsByName('billingCountry')[0].value;
                document.getElementsByName('shippingCountry')[0].value = billingCountry;
                let billingZip = document.getElementsByName('billingZip')[0].value;
                document.getElementsByName('shippingZip')[0].value = billingZip;
        }else{ //unchecked
            return;
        }
    }

    const joinAlerts = document.getElementById('join-text-alerts');
    joinAlerts.addEventListener('change', ()=> {
      joinAlerts.value = joinAlerts.checked ? 1 : 0;
      console.log(joinAlerts.value);
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
      const form = document.getElementById('step-2');
      const pristine = new Pristine(form, defaultConfig);
      var formValid = false;
      var firstSubmit = false;

      submitBtn.addEventListener('click', (e)=> {
        e.preventDefault();
        firstSubmit = true;
        copyBillingInputValue();
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


    var taxData = {
        "campaign_id": 1,
        "shipping_id": 5,
        "use_tax_provider":1,
        "products":[
            {
                "id":"4",
                "quantity":"1"
            }
        ],
        "location":{
            "state":"AL",
            "country":"US",
            "postal_code": 72110
        }
    };

    function getTaxData() {
        var credentials = btoa("<?php echo $site['stickyApi']; ?>:<?php echo $site['stickyPass']; ?>");
        fetch('https://gdc.sticky.io/api/v2/order_total/calculate', {
            method: "POST",
            headers: new Headers({
                "Authorization": `Basic ${credentials}`,
                'Content-Type': 'application/json'
            }),
            // Set the post data
            body: JSON.stringify(taxData),
        })
        .then(function (response) {
            return response.json();
        }) 
        .then(function (data) {
            console.log(data.data);
            if (data.data && data.data.tax) {
              var taxData = data.data.tax;
              taxPercent = parseFloat(taxData.pct);
              document.getElementById('tax_pct').value = taxPercent;
            }
        })
        .catch(function (error){
            console.log(error);
        });
    }


    const billZip = document.getElementById('billingZip');
    var taxPercent = 0;
    var taxAmount = 0;

    billState.addEventListener('change', ()=> {
      taxData.location.country = 'US';
      taxData.location.state = billState.value;
      taxData.location.postal_code = Number(billZip.value);
      getTaxData();
    })

    billZip.addEventListener('blur', ()=> {
      if (billZip.value && billZip.value.length == 5) {
          taxData.location.country = 'US';
          taxData.location.state = billState.value;
          taxData.location.postal_code = Number(billZip.value);
          getTaxData();
      }
    })
</script>

</body>
</html>