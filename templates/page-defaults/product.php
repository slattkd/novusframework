<?php
date_default_timezone_set("America/New_York");
// error_reporting(0);
// include('config.php');
// include('inc/class.cart.php');	
$subscriptdisclaim = 1;
$shipdisclaim = 1;

// foreach($products as $product) {
//   var_dump($product);
// }

$products_json = json_encode($products);

?>

<html lang="en">

<head>
  <?php template("includes/header"); ?>
  <title>5G - Product Details</title>

  <style>
    .head-wrap {
      width: 100%;
      background: #313B3D;
      z-index: 99;
    }

    @keyframes append-animate {
      from {
        transform: scaleY(0);
        opacity: 0;
      }

      to {
        transform: scaleY(1);
        opacity: 1;
      }
    }

    #drop-menu {
      height: auto;
      transform-origin: 50% 0;
      animation: append-animate 250ms ease-in-out;
      transition: all 250ms ease-in-out;
    }

    #drop-menu.hidden {
      height: 0;
    }

    label.cursor-pointer:hover {
      background-color: #fbfbfb;
      border: 2px solid gray;
    }
    label.cursor-pointer radio:checked {
      border: 2px solid gray;
    }

    label.cursor-pointer input ~ svg {
      visibility: hidden;
    }

    label.cursor-pointer input:checked ~ svg {
      visibility: visible;
    }

  </style>
</head>

<body>
  <?php template('includes/basicHeader'); ?>

  <div class="bg-gray-50">

    <main>
      <!-- Product -->
      <div class="bg-white">
        <div class="container container-md mx-auto py-20 px-5 md:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
          <!-- Product details -->
          <div class="lg:max-w-lg lg:self-end">

            <div class="mt-4">
              <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:tracking-tight sm:text-4xl">5G Male</h1>
            </div>

            <section aria-labelledby="information-heading" class="mt-4">
              <h2 id="information-heading" class="sr-only">Product information</h2>


              <div class="mt-4 space-y-6">
                <p class="text-base text-gray-500">
                  5G Male is a male health product. This supplement contains herbal and natural plants which have all been widely acknowledged in the scientific community as having the potential to enhance blood flow and heart health.
                </p>
              </div>

              <div class="mt-6 flex items-center">
                <!-- Heroicon name: solid/check -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                <p class="ml-2 text-sm text-gray-500">In stock and ready to ship</p>
              </div>
            </section>
          </div>

          <!-- Product image -->
          <div class="mt-10 lg:mt-0 lg:col-start-2 lg:row-span-2 lg:self-center">
            <div class=" overflow-hidden">
              <img id="image-product" class="mx-auto border rounded-lg" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/5g.png" alt="single bottle of product">
            </div>
          </div>

          <!-- Product form -->
          <div class="mt-10 lg:max-w-lg lg:col-start-1 lg:row-start-2 lg:self-start">
            <section aria-labelledby="options-heading">
              <h2 id="options-heading" class="sr-only">Product options</h2>

              <form id="form-product" action="/checkout/onepage" method="post">
                <div class="sm:flex sm:justify-between">
                  <!-- Size selector -->
                  <fieldset>
                    <legend class="block text-sm font-medium text-gray-700">Size</legend>
                    <div class="mt-1 grid grid-cols-1 gap-3 sm:grid-cols-2">

                      <label id="product-1" onclick="selectProduct(1)" class="relative bg-white border border-2 rounded-lg  p-4 flex cursor-pointer focus:outline-none">
                        <input type="radio" name="product-size" value="4" class="sr-only" aria-labelledby="prod-label" aria-describedby="prod-description-0 prod-description-1">
                        <span class="flex-1 flex">
                          <span class="flex flex-col">
                            <span id="prod-label" class="block font-semibold text-2xl"> 1 month supply </span>
                            <span id="prod-description-1" class="mt-1 flex items-center text-sm text-gray-500"> single bottle of 5G Male </span>
                            <span id="prod-price-1" class="mt-6 font-medium"> $69.95 </span>
                          </span>
                        </span>
                        <!--
                          Not Checked: "hidden"
                          Heroicon name: solid/check-circle
                        -->
                        <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
                      </label>
                      <label id="product-2" onclick="selectProduct(2)" class="relative bg-white border border-2 rounded-lg  p-4 flex cursor-pointer focus:outline-none">
                        <input type="radio" name="product-size" value="8" class="sr-only" aria-labelledby="prod-label" aria-describedby="prod-description-0 prod-description-1" checked>
                        <span class="flex-1 flex">
                          <span class="flex flex-col">
                            <span id="prod-label" class="block font-semibold text-2xl"> 3 month supply </span>
                            <span id="prod-description-2" class="mt-1 flex items-center text-sm text-gray-500"> three bottles of 5G Male </span>
                            <span id="prod-price-2" class="mt-6 font-medium"> $179.00 </span>
                          </span>
                        </span>
                        <!--
                          Not Checked: "hidden"
                          Heroicon name: solid/check-circle
                        -->
                        <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
                      </label>
                      <label id="product-3" onclick="selectProduct(3)" class="relative bg-white border border-2 rounded-lg  p-4 flex cursor-pointer focus:outline-none" style="display: none">
                        <input type="radio" name="product-size" value="662" class="sr-only" aria-labelledby="prod-label" aria-describedby="prod-description-0 prod-description-1">
                        <span class="flex-1 flex">
                          <span class="flex flex-col">
                            <span id="prod-label" class="block font-semibold text-2xl"> 6 month supply </span>
                            <span id="prod-description-3" class="mt-1 flex items-center text-sm text-gray-500"> six bottles of 5G Male </span>
                            <span id="prod-price-3" class="mt-6 font-medium "> $297.00 </span>
                          </span>
                        </span>
                        <!--
                          Not Checked: "hidden"
                          Heroicon name: solid/check-circle
                        -->
                        <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <!--
                          Active: "border", Not Active: "border-2"
                          Checked: "border-indigo-500", Not Checked: "border-transparent"
                        -->
                        <span class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></span>
                      </label>

                    </div>
                  </fieldset>
                </div>
                <!-- popuover option is hidden -->
                <div class="mt-4">
                  <a href="#" class="group inline-flex text-sm text-gray-500 hover:text-gray-700 hidden">
                    <span>What size should I buy?</span>
                    <!-- Heroicon name: solid/question-mark-circle -->
                    <svg class="flex-shrink-0 ml-2 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                    </svg>
                  </a>
                </div>
                <div class="p-4 text-md mt-4">
                  <label for="subscribe">
                    <input type="checkbox" value="1" id="subscribe" name="subscribe" class="clickable" checked> I would like to make this a recurring order.<br>
                  </label>
                  <p class="text-sm text-gray-600 mt-1">Your Card Will Be Billed As Supernaturalman</p>
                </div>
                <div class="mt-6">
                  <button type="submit" class="w-full bg-green-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Add to Cart</button>
                </div>
                <input type="hidden" id="pid-input" name="prodtype" value="4">
                <input type="hidden"  name="add1" id="addon1" value="0">
                <input type="hidden"  name="add2" id="addon2" value="0">
              </form>
            </section>
          </div>
        </div>
      </div>

      <div class="max-w-2xl mx-auto px-4 py-16 sm:px-6 md:py-20 lg:max-w-7xl lg:px-8">
        <!-- Details section -->
        <section aria-labelledby="details-heading">
          <div class="flex flex-col items-center text-center">
            <h2 id="details-heading" class="text-3xl font-bold tracking-tight text-gray-900 sm:tracking-tight sm:text-4xl mt-5">Product Details</h2>
          </div>

          <div class="mt-16 grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-8">
            <div>
              <div class="w-full rounded-lg bg-white p-3">
                <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/5g-label.png" alt="nutrition facts">
              </div>
              <ul class="text-sm text-gray-400 my-4 ">
                <li class="mb-2"><sup>1 </sup><a class="underline clickable" href="https://www.menshealth.com/sex-women/a19519129/garlic-and-sex/" target="_blank">Can Eating More Garlic Improve Your Sex Life?</a></li>
                <li class="mb-2"><sup>2 </sup><a class="underline clickable" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4712861/" target="_blank">The Benefits Of Boron | Boron And Testosterone</a></li>
                <li class="mb-2"><sup>3 </sup><a class="underline clickable" href="https://www.askmen.com/sports/foodcourt/gingko-biloba-benefits-for-men.html" target="_blank">Gingko Biloba Benefits For Men</a></li>
                <li class="mb-2"><sup>4 </sup><a class="underline clickable" href="https://www.livestrong.com/article/496243-ginger-benefits-for-men/" target="_blank">Ginger Benefits for Men</a></li>
                <li class=""><sup>5 </sup><a class="underline clickable" href="https://prostate.net/articles/7-benefits-of-green-tea-for-men/" target="_blank">7 Benefits of Green Tea For Men</a></li>
              </ul>

            </div>
            <div>
              <p class=" text-base text-gray-500">This supplement was developed specifically for men 35+. Generally, over age 35, a man’s blood flow starts to breakdown or decrease. This can due to diet, smoking, physical activity, lifestyle and age. The ingredients which are used in the 5G formula all have the potential to help as men age. The “5G’s” are the five key ingredients and are listed below...</p>
              <p class="text-lg font-semibold mt-6">These ingredients being:</p>
              <div class="my-3">
                <ul class="pl-6" style="list-style: unset;">
                  <li class="">Garlic<sup><a href="#citations">1</a></sup> - assist in better blood flow throughout the body</li>
                  <li class="mt-3">Ginseng<sup><a href="#citations">2</a></sup> - assist in boosting energy levels as well as boost mental and physical performances</li>
                  <li class="mt-3">Ginkgo Biloba Leaves<sup><a href="#citations">3</a></sup> - assist in improving concentration as well as enhancing an individual's physical performance</li>
                  <li class="mt-3">Ginger Root Extract<sup><a href="#citations">4</a></sup> - assist in combating infertility</li>
                  <li class="mt-3">Decaf Green Tea Leaf extract<sup><a href="#citations">5</a></sup> - promotes a healthy prostate</li>
                </ul>
              </div>

            </div>
          </div>
        </section>

        <!-- Policies section -->
        <section aria-labelledby="policy-heading" class="mt-12 lg:mt-20 pb-20">
          <h2 id="policy-heading" class="sr-only">Our policies</h2>
          <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
            <div>
              <div class="flex justify-center text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-green-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                </svg>
              </div>

              <h3 class="mt-3 text-center text-base font-medium text-gray-900">SHIPPING</h3>
              <p class="mt-3 text-base text-gray-500">
                All products ship within 24 hours or at 9am Eastern on Monday if ordered during the weekend. Shipments to US and Canada take 2-3 days and international shipments take 14 days. You will be provided a tracking number by email shortly after you order.
              </p>
            </div>

            <div>
              <div class="flex justify-center text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-green-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
              </div>

              <h3 class="mt-3 text-center text-base font-medium text-gray-900">CUSTOMER SERVICE</h3>
              <p class="mt-3 text-base text-gray-500">
                You can reach out to customer service 24/7 either by phone or by email. Just write to <a href="mailto:support@5gmale.com">support@5gmale.com</a> or call us at 1-800-251-9316 to talk to someone.
              </p>
            </div>

            <div>
              <!-- <img src="https://tailwindui.com/img/ecommerce/icons/icon-fast-checkout-light.svg" alt="" class="h-24 w-auto"> -->
              <div class="flex justify-center text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-green-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.563 9.75a12.014 12.014 0 00-3.427 5.136L9 12.75m3-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286z" />
                </svg>
              </div>


              <h3 class="mt-3 text-center text-base font-medium text-gray-900">GUARANTEE</h3>
              <p class="mt-3 text-base text-gray-500">
                All products come with a 90 day guarantee. You'll be able to get your money back any time within the next 90 days by calling or emailing our support staff. This is a full refund and includes both shipping, tax and the entire cost of the product. Reach out to us any time.
              </p>
            </div>

            <div>
              <div class="flex justify-center text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-green-600">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
              </div>

              <h3 class="mt-3 text-center text-base font-medium text-gray-900">SUBSCRIPTION</h3>
              <p class="mt-3 text-base text-gray-500">
                If you choose any of the auto-ship options above, a new supply of this product will be mailed to your door every 30 days. If you'd like to cancel, you can do so at any time. Just email or call customer service with the contact instructions provided below.
              </p>
            </div>
          </div>
        </section>
      </div>

    </main>

  </div>

  <script>
    var products = [{
      "pid": "7",
      "description": "1 Bottle of 5G Male",
      "price": "$69.95",
      "hold": true
    }, {
      "pid": "8",
      "description": "3 Bottles of 5G Male ",
      "price": "$179.00"
    }, {
      "pid": "662",
      "description": "6 Bottles of 5G Male ",
      "price": "$297.00"
    }, {
      "pid": "4",
      "description": "1 Bottle of 5G Male - Monthly Autoship",
      "price": "$69.95",
      "auto" : true
    }, {
      "pid": "5",
      "description": "3 Bottles of 5G Male - Quarterly Autoship",
      "price": "$179.00",
      "auto" : true
    }, {
      "pid": "01234",
      "description": "6 Bottles of 5G Male - Bi-Anual Autoship",
      "price": "$297.00",
      "hold" : true,
      "auto" : true
    }];

    var selectedIndex = 4;
    var selectedProduct = products[selectedIndex];
    

    const label1 = document.getElementById('product-1');
    const label2 = document.getElementById('product-2');
    const label3 = document.getElementById('product-3');

    const desc1 = document.getElementById('prod-description-1');
    const desc2 = document.getElementById('prod-description-2');
    const desc3 = document.getElementById('prod-description-3');

    const price1 = document.getElementById('prod-price-1');
    const price2 = document.getElementById('prod-price-2');
    const price3 = document.getElementById('prod-price-3');
    

    var isSubscribed = true;
    const form = document.getElementById('form-product');

    // pidInput.value = pid;
    // window.onbeforeunload = null;
    // form.submit();


    const pidInput = document.getElementById('pid-input');
    function selectProduct(num) {
      selectedIndex = isSubscribed ? num + 2 : num - 1;
      selectedProduct = products[selectedIndex];
      
      pidInput.value = selectedProduct.pid;
    }

    var productRadios = document.getElementsByName('productSize');

    var sub = document.getElementById('subscribe');
    sub.addEventListener('change', () => {
      isSubscribed = sub.checked;
      selectedIndex = selectedIndex < 3 ? selectedIndex + 3 : selectedIndex - 3;
      selectedProduct = products[selectedIndex];
      // change value of 3 and 6 inputs to auto ship pid
      // update prices for 3 and 6
      if (isSubscribed) {
        desc1.innerText = products[0].description;
        desc2.innerText = products[1].description;
        desc3.innerText = products[2].description;
        label1.style.display = 'unset';
        label3.style.display = 'none';
      } else {
        desc1.innerText = products[3].description;
        desc2.innerText = products[4].description;
        desc3.innerText = products[5].description;
        label1.style.display = 'none';
        label3.style.display = 'unset';
      }
      pidInput.value = selectedProduct.pid;
    })

  </script>

  <?php template('includes/footer'); ?>
  <?php if ($site['debug'] == true) {
    template('debug', null, null, 'debug');
  } ?>
</body>

</html>