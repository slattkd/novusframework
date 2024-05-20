<?php
// error_reporting(0);
$_SESSION['pageType'] = 'onepage';
$nextlink = '/process.php' . $querystring;
$kount_session = str_replace('.', '', microtime(true));

if ($_POST) {
  if (isset($_POST['product_id'])){
    $_SESSION['pid'] = $_POST['product_id'];
  } else if (isset($_POST['pid'])){
    $_SESSION['pid'] = $_POST['pid'];
  } 
} else {
	$_SESSION['pid'] = $products['product_default'];
}

$pid = $_SESSION['pid'];
$product = $products['products'][$pid];

$product_upsell = null;
$upsell_pid = (!isset($product['product_is_sub']) || !$product['product_is_sub']) 
  ? $products['upsell'][$pid] 
  : null;
if ($upsell_pid ) {
  $product_upsell = $products['products'][$upsell_pid];
}
$product_json = json_encode($product);
$product_upsell_json = $product_upsell ? json_encode($product_upsell) : null;


// TODO: handle for multiple products
$multiple_products = [$pid, 130, 811];

$price = $product['product_price'];
$ship = $product['product_ship'];
$sub_total = $product['product_price'];
$total = $product['product_price'] + $ship;

$shippingId = $product['product_ship'] > 0 ? $site['shippingUs'] : $site['shippingFree'];

switch ($product['product_qty']) {
  case 1:
      $product_image = "//" . $_SERVER['HTTP_HOST'] . "/images/tbb-1bottle.png";
      break;
  case 3:
      $product_image = "//" . $_SERVER['HTTP_HOST'] . "/images/tbb-3bottles.png";
      break;
  case 6:
      $product_image = "//" . $_SERVER['HTTP_HOST'] . "/images/tbb-6bottles.png";
      break;
}

$today = date("F d, Y"); // for testimonials
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php template("includes/header"); ?>
  <title><?php echo $company['billedAs']; ?> - Secure Checkout</title>

  <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

  <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/js/regions.js"></script>

  <style>

  @font-face {
      font-family: 'Nexa';
      src: url('//<?= $_SERVER['HTTP_HOST']; ?>/fonts/Nexa.woff2') format('woff2'),
          url('//<?= $_SERVER['HTTP_HOST']; ?>/fonts/Nexa.woff') format('woff');
      font-weight: 400;
      font-style: normal;
      font-display: swap;
  }

  @font-face {
      font-family: 'Nexa-Light';
      src: url('//<?= $_SERVER['HTTP_HOST']; ?>/fonts/NexaLight.woff2') format('woff2'),
          url('//<?= $_SERVER['HTTP_HOST']; ?>/fonts/NexaLight.woff') format('woff');
      font-weight: 300;
      font-style: normal;
      font-display: swap;
  }

  @font-face {
      font-family: 'Nexa-Bold';
      src: url('//<?= $_SERVER['HTTP_HOST']; ?>/fonts/NexaBold.woff2') format('woff2'),
          url('//<?= $_SERVER['HTTP_HOST']; ?>/fonts/NexaBold.woff') format('woff');
      font-weight: 700;
      font-style: normal;
      font-display: swap;
  }
    body {
      position: relative;
      max-height: 100vh;
      max-width: 100vw;
      overflow-y: auto;
      overflow-x: hidden;
      font-family: 'Nexa-Light', sans-serif;
      font-weight: normal;
      font-size: 16px;
      line-height: 1.5;
    }

    .title {
      font-family: 'Nexa', monospace !important;
    }

    @media screen and (min-width: 1025px) {
      .bg-split {
        background-image: linear-gradient(to right,
            #fff,
            #fff 50%,
            #ECF5FA 50%,
            #ECF5FA 100%);
      }
    }
    

    .hr-break {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      display: none;
    }
    .hr-break:before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      border-top: 1px solid #e3e3e3;
      width: 100%;
      transform: translateY(-50%);
      z-index: 0;
    }

    #slider-testimonials .splide__list {
      height: auto;
    }
    #slider-testimonials .splide__arrow {
      top: unset;
      bottom: -4.5rem;
      translate: none;
    }

    #slider-testimonials .splide__arrow--prev {
      left: 25%
    }
    #slider-testimonials .splide__arrow--next {
      right: 25%;
    }

    #slider-testimonials .splide__pagination {
      bottom: -3rem;
    }

    .icons {
      width: 35px;
      height: 35px;
      background-position: center;
      background-size: contain;
      background-repeat: no-repeat;
    }
    .badge-check {
      background-image: url("data:image/svg+xml,%3Csvg width='29' height='28' viewBox='0 0 29 28' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg clip-path='url(%23clip0_108_1257)'%3E%3Cpath d='M14.5 28C12.603 28 10.8133 27.167 9.59067 25.7145C7.794 25.9198 5.9425 25.242 4.60083 23.9003C3.26033 22.5587 2.58367 20.7037 2.74583 18.8113C1.333 17.6867 0.5 15.897 0.5 14C0.5 12.103 1.333 10.3133 2.78667 9.09067C2.5825 7.2975 3.25917 5.4425 4.60083 4.10083C5.9425 2.75917 7.794 2.079 9.68867 2.24583C10.8133 0.834167 12.603 0 14.5 0C16.397 0 18.1867 0.833 19.4093 2.2855C21.2083 2.08367 23.0575 2.758 24.3992 4.09967C25.7397 5.44133 26.4163 7.29633 26.2542 9.18867C27.667 10.3133 28.5 12.103 28.5 14C28.5 15.897 27.667 17.6867 26.2133 18.9093C26.4175 20.7025 25.7408 22.5575 24.3992 23.8992C23.0563 25.2408 21.2013 25.9128 19.3113 25.7542C18.1867 27.1658 16.397 28 14.5 28ZM9.68517 23.422C10.3397 23.422 10.9463 23.7032 11.3745 24.2107C12.1538 25.1358 13.2925 25.6667 14.5 25.6667C15.7075 25.6667 16.8462 25.1358 17.6255 24.2107C18.0957 23.6518 18.7805 23.3695 19.5108 23.429C20.7172 23.5305 21.8955 23.1023 22.7495 22.2483C23.6023 21.3955 24.0328 20.2148 23.9302 19.0097C23.8672 18.2817 24.1518 17.5945 24.7118 17.1232C25.6358 16.345 26.1667 15.2052 26.1667 13.9988C26.1667 12.7925 25.6358 11.6527 24.7118 10.8745C24.153 10.4043 23.8672 9.716 23.9302 8.988C24.0328 7.78283 23.6035 6.60217 22.7495 5.74933C21.8955 4.8965 20.7102 4.473 19.512 4.56867C18.7817 4.634 18.0957 4.34583 17.6255 3.78817C16.8462 2.863 15.7075 2.33217 14.5 2.33217C13.2925 2.33217 12.1538 2.863 11.3745 3.78817C10.9032 4.347 10.216 4.627 9.48917 4.56983C8.277 4.46483 7.1045 4.8965 6.2505 5.7505C5.39767 6.60333 4.96717 7.784 5.06983 8.98917C5.13283 9.71717 4.84817 10.4043 4.28817 10.8757C3.36417 11.6538 2.83333 12.7937 2.83333 14C2.83333 15.2063 3.36417 16.3462 4.28817 17.1243C4.847 17.5945 5.13283 18.2828 5.06983 19.0108C4.96717 20.216 5.3965 21.3967 6.2505 22.2495C7.1045 23.1023 8.29567 23.527 9.488 23.4302C9.5545 23.4243 9.61983 23.422 9.68517 23.422ZM15.4345 17.6575L20.9633 12.3282C21.4265 11.8813 21.4405 11.1417 20.9925 10.6785C20.5457 10.2153 19.8072 10.2013 19.3428 10.6482L13.7988 15.9927C13.3427 16.4488 12.6065 16.4488 12.1188 15.9635L9.46117 13.4937C8.99217 13.0562 8.2525 13.0818 7.81267 13.5543C7.374 14.0257 7.40083 14.7642 7.87333 15.2028L10.5007 17.6435C11.1843 18.3272 12.0838 18.669 12.981 18.669C13.8735 18.669 14.7613 18.3318 15.4357 17.6587L15.4345 17.6575Z' fill='%232A9DCC'/%3E%3C/g%3E%3Cdefs%3E%3CclipPath id='clip0_108_1257'%3E%3Crect width='28' height='28' fill='%232A9DCC' transform='translate(0.5)'/%3E%3C/clipPath%3E%3C/defs%3E%3C/svg%3E");
      width: 18px;
      height: 18px;
    }

    .pristine-error {
      display: flex;
      float: right;
      justify-content: flex-end;
      width: 100%;
      height: 0;
      animation: fadeIn 200ms;
      margin: -1px auto;
      border-width: 1px 0 0 0;
      font-size: 12px;
      z-index: 10;
    }

    div.has-danger input {
      background-color: #ffefef;
      border: 1px solid red;
    }

    div.has-danger label {
      background: #FFFFFF;
      background: linear-gradient(to bottom, #FFFFFF 60%, #ffefef 75%);
    }

    ::placeholder {
      color: #aaa !important;
      font-weight: 400;
      opacity: 1; /* Firefox */
    }

    ::-ms-input-placeholder { /* Edge 12 -18 */
      color: #aaa !important;
      font-weight: 400;
    }
    input {
      font-weight: 600;
      letter-spacing: 1px;
    }
  </style>
</head>

<body class="bg-split">
  <div class="flex justify-center bg-rpt-blue-1 py-4">
    <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/fs-new/rp-logo-light-trans.png" alt="revival point logo"
      style="width:auto; height:30px">
  </div>

  <div class="container container-md mx-auto flex flex-wrap lg:flex-nowrap justify-center mobile-column">
    
    <!-- First Column -->
    <div class="w-full lg:w-1/2 p-4 lg:p-8 lg:min-w-[50%] lg:max-w-[50%]">

      <!-- start of form -->
<form action="//<?= $_SERVER['HTTP_HOST']; ?>/process.php" method='POST' id="order-form" onsubmit="return false;">

      <section class="mb-6 md:mb-11">
        <h2 class="text-lg font-bold mb-1">Contact</h2>
        <div class="input w-full mb-0 ">
          <div class="w-full z-10 invisible">
            <label for="email" class="text-sm text-gray-600 hidden md:block rounded">Email</label>
          </div>
          <input id="email" name="email"
            placeholder="Email"
            data-valid="false"
            data-pristine-type="email"
            data-pristine-email-message="Not a valid email"
            required
            data-pristine-required-message="Email is required"
            class="flex p-2 rounded border border-gray-300">
        </div>

        <div class="input w-full ">
          <div class="w-full z-10 invisible">
            <label for="phone" class="text-sm text-gray-600 hidden md:block rounded">Phone</label>
          </div>
          <input id="phone" name="phone" type="text" placeholder="Phone" required
            data-pristine-required-message="Phone is required" 
            class="flex p-2 rounded border border-gray-300">
        </div>

        <div class="flex flex-nowrap items-start w-full mt-4">
            <label class="flex items-center clickable">
              <input type="checkbox" name="joinTextAlerts" id="join-text-alerts" class="mr-2">
              Join Revival Point text alerts to get the latest news and offers.
            </label>
        </div>
      </section>

      <section class="mb-6 md:mb-11">
        <h2 class="text-lg font-bold mb-1">Billing</h2>
        <div class="flex w-available mb-0">
          <div class="input w-full w-1/2 pr-2">
            <div class="w-full z-10 invisible">
              <label for="first-name" class="text-sm text-gray-600 hidden md:block rounded">First Name</label>
            </div>
            <input id="first-name" name="firstName" type="text" placeholder="First Name" class="flex p-2 rounded border border-gray-300" 
              required
              data-pristine-required-message="First Name is required"
              >
          </div>
          <div class="input w-full w-1/2 pl-2">
            <div class="w-full z-10 invisible">
              <label for="last-name" class="text-sm text-gray-600 hidden md:block rounded">Last Name</label>
            </div>
            <input id="last-name" name="lastName" type="text" placeholder="Last Name" class="flex p-2 rounded border border-gray-300" 
              required
              data-pristine-required-message="Last Name is required"
              >
          </div>
        </div>
        <div class="flex relative">
        <?php address("includes/addressSimple", 'billing', 1);?>
        </div>
      </section>

      <section class="mb-6 md:mb-11">
        <h2 class="text-lg font-bold mb-2">Shipping</h2>
        <label class="flex items-center clickable">
          <input id="bill-same" type="checkbox" class="mr-2" checked>
          Shipping address same as Billing
        </label>
        <div id="shipping-container" class="flex w-full hidden">
          <div class="flex w-full relative">
          <?php address("includes/addressSimple", 'shipping', 1);?>
          </div>
        </div>
      </section>

      <section>
        <h2 class="text-lg font-bold mb-1">Payment</h2>
        <p class="mb-5">All purchases are secured and encrypted.</p>
        <div class="flex mb-3">
        <?php creditCardInput("includes/creditCardInput", 'credit-card');?>
        </div>
        <div class="flex w-full items-center -mt-3">
          <div class="input w-full w-1/3 mr-3 mt-[20px]">
            <select id="cc-exp-month" name="expMonth" class="flex p-2 py-3.5 rounded border border-gray-300" style="padding:0.6rem" placeholder="Exp. Month">
              <!-- Options for Exp. Month -->
              <optgroup id="cc-exp-month-options" label="Exp. Month">
              <?php 
                for ($x = 1; $x <= 12; $x++) {
                $num = sprintf("%02d", $x);
                echo '<option value="' . $num . '">' . $num . '</option>';
                }
              ?>
              </optgroup>
            </select>
          </div>
          <div class="input w-full w-1/3 mr-3 mt-[20px]">
            <select id="cc-exp-year" name="expYear" class="flex p-2 py-3.5 rounded border border-gray-300" style="padding:0.6rem" placeholder="Exp. Day">
              <!-- Options for Exp. Day -->
              <option class="text-gray-300" value="" disabled>Exp. Year</option>
              <?php 
                $this_year = date('Y');
                for ($y = $this_year; $y <= $this_year + 10; $y++) {
                $short_year = $y - 2000;
                echo '<option class="text-gray-300" value="' . $short_year . '">' . $y . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="input w-full w-1/3">
            <div class="w-full z-10 invisible">
              <label for="cvv" class="text-sm text-gray-600 hidden md:block rounded">CVV#</label>
            </div>
            <input id="cvv" name="cvv" class="flex p-2 rounded border border-gray-300" placeholder="CVV#"
              data-pristine-minlength-message="Too short"
              minlength="3" maxlength="4"
              required
              data-pristine-required-message="CVV is required"
              ></input>
          </div>
        </div>
        <button id="submit-btn" class="w-full mt-6 py-2 pt-3 px-8 bg-greenish text-white border border-greenish clickable text-xl rounded-full uppercase font-bold title mt-8">
          Secure My Order
        </button>
        <div class="flex justify-center mt-3">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/securites.png" alt="norton securities" style="max-width: 320px;">
        </div>
      </section>
    </div>

    <!-- Second Column -->
    <div class="w-full lg:w-1/2 p-4 lg:p-8 lg:max-w-[50%]">
      <section class="mb-6 md:mb-8">
        <h2 class="text-lg font-bold mb-3">Order Summary</h2>

        <?php if($product_upsell): ?>
        <div id="subscribe" class="flex justify-between items-center flex-nowrap  bg-white title rounded border py-2 px-2 md:px-4 mb-4">
          <div class="flex justify-center items-center text-center">
            <input id="sub" type="checkbox" value="1"
              data-prod="<?= htmlspecialchars($product_json); ?>"
              data-sub="<?= htmlspecialchars($product_upsell_json); ?>"
              class="w-4 h-4 bg-gray-100 border-gray-300 rounded mr-2">
            <label for="sub" class="ml-3 text-left text-base sans clickable" style="line-height: 1.2;">
              Subscribe monthly for 20% OFF <br class="hidden lg:block">+ <strong>FREE</strong> Bottle of Vitamin D3
            </label>
          </div>
          <img loading="lazy" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/fs-new/seal-d3.png" alt="guarantee seal" class="w-14 scale-x-110 pl-3">
        </div>
        <?php endif; ?>

        <div class="flex justify-between items-center mb-4">
          <div class="flex items-center">
            <div class="product-image w-12 mr-3">
              <img src="<?= $product_image; ?>" alt="product image">
            </div>
            <div id="product-description" class="text-sm"><?= $product['product_description']; ?>
            </div>
          </div>
          <div class="flex flex-col justify-center text-right">
            <div class="font-bold">
              $<span id="per-bottle"><?= perBottle($product['product_price'], $product['product_qty']); ?></span>
            </div>
            <div class="text-sm">each</div>
          </div>
        </div>
        <div class="flex justify-between">
          <div>
            <p>Subtotal</p>
            <p>Shipping</p>
            <p>Sales Tax <span id="tax-pct" class="text-sm text-gray-400">(estimated)</span></p>
            <p class="font-bold mt-3">Total</p>
          </div>
          <div>
            <p class="text-right">$<span id="sub-amt"><?= number_format($sub_total,2); ?></span></p>
            <p class="text-right">$<span id="ship-amt"><?= number_format($ship,2); ?></span></p>
            <p class="text-right">$<span id="tax-amt">0.00</span></p>
            <p class="font-bold mt-3 text-right">$<span id="total-amt"><?= number_format($total, 2); ?></span></p>
          </div>
        </div>
      </section>

      <hr class="my-6">

      <?php if (isset($reviews)): ?>
      <section>
        <div class="slider-container mt-6">
          <div id="slider-testimonials" class="splide w-full max-w-[100%] mx-auto mb-16" role="group">
          <div class="splide__track">
            <ul class="splide__list">
              <?php foreach($reviews['reviews'] as $obj): ?>
              <li class="splide__slide">
                <div class=" flex flex-col items-center">
                  
                  <div class="flex inline-flex items-center stars">
                    <img class="scale-75 mb-2 title" src="//<?= $_SERVER["HTTP_HOST"];?>/images/order-boost/5_stars.png"
                      alt="5 stars">
                  </div>
                  <div class="inline-flex text-sm text-fs-blue uppercase">
                    <div class="icons badge-check mr-2"></div> Verified buyer | <?php echo date('F d, Y'); ?>
                  </div>
                  <h3 class="title text-2xl text-fs-blue font-semibold my-6 text-center uppercase">
                    <?= $obj['title']; ?>
                  </h3>
                  <p class="">
                  <?= $obj['copy']; ?>
                  </p>
                  <div class="font-semibold title text-fs-blue mt-4"><?= $obj['name']; ?>, <?= $obj['location']; ?></div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        </div>
      </section>
      <?php endif; ?>
    </div>

  </div>

  <!-- hidden inputs -->
  <!-- /process-up/?pid=#&buy=1&next=url -->
  <input type="hidden" name="previous_page" value="/checkout/order">
  <input type="hidden" name="current_page" value="/checkout/step1-tbb41159625v1">
  <input type="hidden" name="next_page" value="/up/upsell-1">
  <input type="hidden" name="product_id" id='product_id' value="<?php echo $_SESSION['pid']; ?>">
  <input type="hidden" name="form_id" value="step_<?php echo @$_SESSION['s']; ?>">
  <input type="hidden" name="step" value="<?php echo @$_SESSION['s']; ?>">
  <input type="hidden" name="AFFID" value="<?php echo @$_SESSION['affid']; ?>">
  <input type="hidden" name="AFID" value="<?php echo @$_SESSION['vwovar']; ?>">
  <input type="hidden" name="C1" value="<?php echo @$_SESSION['s1']; ?>">
  <input type="hidden" name="C2" value="<?php echo @$_SESSION['s2']; ?>">
  <input type="hidden" name="C3" value="<?php echo @$_SESSION['s3']; ?>">
  <input type="hidden" name="utm_source" value="<?php echo @$_SESSION['utm_source']; ?>">
  <input type="hidden" name="utm_medium" value="<?php echo @$_SESSION['utm_medium']; ?>">
  <input type="hidden" name="utm_campaign" value="<?php echo @$_SESSION['utm_campaign']; ?>">
  <input type="hidden" name="utm_term" value="<?php echo @$_SESSION['utm_term']; ?>">
  <input type="hidden" name="utm_content" value="<?php echo @$_SESSION['utm_content']; ?>">
  <input type="hidden" name="click_id" value="<?php echo @$_SESSION['cid']; ?>">
  <input type="hidden" name="notes" value="<?php echo @$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>">
  <input type="hidden" name="shippingId" id="shippingId" value="<?php echo @$shippingId; ?>">
  <input type="hidden" id="shippingCost" name="shippingCost" value="0">
  <input type="hidden" id="tax_pct" name="tax_pct" value="0">
  <input type="hidden" name="newform" value="yes">
  <input type="hidden" name="upsellProductIds" id="upsellProductIds" value="">
  <input type="hidden" name="upsellCount" value="0">
  <input type="hidden" name="customer_time" id="customer_time" value="">
  <input type="hidden" name="eftid" id="eftid" value="<?php echo @$_SESSION['eftid']; ?>">
  <input type="hidden" name="sessionId" value="<?php echo @$kount_session; ?>">
  <input type="hidden" name="fid" id="fid" value="<?php echo @$formID; ?>" class="hidden" />
  <input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo @$site['campaign']; ?>">
</form>

<footer>
    <div class="flex flex-col w-full justify-center items-center border-t-4 border-rpt-blue-1 bg-white">
      <div class="py-11">
        <img loading="lazy" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/fs-new/logo-rp.png" alt="revival point logo"
          style="max-width: 220px">
      </div>
      <div class="flex justify-center w-full text-center bg-rpt-blue-1 text-white py-8 md:py-4 font-semibold">
        For Help Ordering Call &nbsp;<a href="tel:<?= $company['phone_specialist']; ?>"><?= $company['phone_specialist']; ?></a>
      </div>
      <div class="py-11 text-sm text-gray-500 text-center px-4">
        <p class="mb-11 mx-auto" style="max-width: 100ch">Dr. Steven Masley is a hired consultant for and endorser of
          <?= $company ['featuredProduct']; ?>. The product is not created by Dr. Masley and Dr. Masley does not work for Revival Point LLC, the
          company that has developed <?= $company ['featuredProduct']; ?>. These statements have not been evaluated by the Food and Drug
          Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
          <p>© <?= $company['name']; ?> <?= date("Y"); ?>. All Rights Reserved <?= $company['address1']; ?>, <?= $company['city']; ?>, <?= $company['state']; ?> <?= $company['zip']; ?></p>
        <div class="flex justify-center">
          <?php legalLinks("includes/legalLinks");?>
        </div>
      </div>

    </div>
  </footer>



<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<!-- included once for multiple address conponents -->
<script>
  if(typeof window.google !== 'object' && typeof window.google?.maps !== 'object') {
    const newScript = document.createElement("script");
    newScript.setAttribute('defer','');
    newScript.src = 'https://maps.googleapis.com/maps/api/js?key=' + '<?= $site['gmapsApi']; ?>' + '&loading=async&libraries=places&callback=initAutoComplete';
    newScript.loading = 'async';
    document.head.appendChild(newScript);
  }
</script>
<script src="//<?php echo $_SERVER['HTTP_HOST'];?>/js/location-cp.js"></script>
<!--KOUNT PIXEL-->
<iframe width=1 height=1 frameborder=0 scrolling=no
  src="https://gdc.sticky.io/pixel.php?t=htm&campaign_id=1&sessionId=<?= $kount_session ?>">
  <img width=1 height=1 src="https://gdc.sticky.io/pixel.php?t=gif&campaign_id=1&sessionId=<?= $kount_session ?>>" />
</iframe>
<!--/KOUNT PIXEL-->
<script>
  const placeholderElements = document.querySelectorAll('.input input');
  // hide show input labels
  placeholderElements.forEach(pl => {
    pl.addEventListener('focus', ()=> {
      pl.previousElementSibling.classList.add('fade-in-element');
      pl.previousElementSibling.classList.remove('invisible');
    })
    pl.addEventListener('blur', ()=> {
      if (!pl.value) {
        pl.previousElementSibling.classList.add('invisible');
        pl.previousElementSibling.classList.remove('fade-in-element');
      }
    })
  })

  // Prsitine Config
  let defaultConfig = {
    // class of the parent element where the error/success class is added
    classTo: 'input',
    errorClass: 'has-danger',
    successClass: 'has-success',
    // class of the parent element where error text element is appended
    errorTextParent: 'input',
    // type of element to create for the error text
    errorTextTag: 'div',
    // class of the error text element
    errorTextClass: 'text-help text-redish font-medium text-sm'
  };

  var form = document.getElementById('order-form');
  var pristine = new Pristine(form, defaultConfig);

  var formValid = false;
  var firstSubmit = false;

  const submitBtn = document.getElementById('submit-btn');
  submitBtn.addEventListener('click', (e) => {
    e.preventDefault();
    firstSubmit = true;
    handleValidation();
    if (firstSubmit && formValid) {
      processForm();
    }
  })

  form.addEventListener("input", function(event) {
    // a good place to look for all input events
    if (firstSubmit) {
      debounce(() => handleValidation())
    }
  });

  function handleValidation() {
    formValid = pristine.validate(); // returns true or false
    if (!formValid) {
      submitBtn.disabled = true;
      <?php if($_SESSION['isMobile']): ?>
        var firstError = document.querySelector('.has-danger');
        firstError.scrollIntoView({
          behavior: "smooth",
          block: "end"
        });
      <?php endif; ?>
    } else {
      submitBtn.disabled = false;
    }
  }

  function processForm() {
    submitBtn.disabled = true;
    submitBtn.innerHTML = "Processing...";
    // remove spaces from CC masking
    creditInput.value = creditInput.value.replace(/[\s]/g,'');
    if (billingSame) {
      copyBillingInputValue()
    }
    form.submit();

    // After 10 seconds, reset form submit button
    setTimeout(function(){
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Complete Purchase';
    }, 10000);
  }

  // custom CC validation
  // cardNumberTest function is on component script
  // const creditInput = document.getElementById('credit-card-input');
  Pristine.addValidator(creditInput, function(value) {
    // check data attribute valid after keyup
    setTimeout(function(){
      if (creditInput.pristine?.errors == undefined) creditInput.pristine.errors = [];
      const errorElement = document.querySelector('#cc-input-wrap ~ div.pristine-error');
      const parentWrap = document.querySelector('.input.has-danger');
      let isCCValid = creditInput.dataset.valid;
      // manually add and remove error message
      if (isCCValid == 'true') {
        creditInput.pristine.errors = [];
        creditInput.pristine.messages = {};
        if (errorElement) { errorElement.classList.add('invisible'); }
        return true;
      }
      if (errorElement) { errorElement.classList.remove('invisible'); }
      return false;
    }, 200);
    return creditInput.dataset.valid === 'true';
  }, "Not a valid credit card",1,false);


  // slider
  <?php if(!empty($reviews)): ?>
  var splide = new Splide('.splide');
  new Splide('#slider-testimonials').mount();
  <?php endif; ?>

  const shippingContainer = document.getElementById('shipping-container');
  const billingSame = document.getElementById('bill-same');

  billingSame.addEventListener('change', ()=> {
    if (billingSame.checked) {
      shippingContainer.classList.add('hidden');
      copyBillingInputValue();
    } else {
      shippingContainer.classList.remove('hidden');
    }
  })

  function copyBillingInputValue() {
    let shippingContainer = document.getElementById('shipping-container');
    isChecked = billingSame.checked;
    if (isChecked) {
      document.getElementById('location-shipping').value = document.getElementById('location-billing').value;
      ['Address1', 'Address2', 'City', 'Country', 'State', 'Zip'].forEach(field => {
        document.getElementById(`shipping${field}`).value = document.getElementById(`billing${field}`).value;
        // Trigger validation for each shipping input field after updating its value
        pristine.validate(document.getElementById(`shipping${field}`));
      });
      document.getElementById('shippingCountry').dispatchEvent(new Event('change'));
      getTaxData();
    }
  }


  var isSubscribed = <?= $product['product_is_sub']; ?> == 0;
const subscribeBtn = document.getElementById('sub');
const productDescription = document.getElementById('product-description');

if (subscribeBtn) {
  var productJSON = subscribeBtn.dataset.prod;
  var singleProduct = JSON.parse(productJSON);
  var subJSON = subscribeBtn.dataset.sub;
  var subProduct = JSON.parse(subJSON);
  sub.addEventListener('change', ()=> {
    isSubscribed = sub.checked;
    let product = isSubscribed ? subProduct : singleProduct;
    document.getElementById('product_id').value = product['product_id'];
    productDescription.innerText = isSubscribed ? 
      '<?= $product_upsell['product_description']; ?>' : 
      '<?= $product['product_description']; ?>';
    getTaxData();
  });
}


  // controls for remaining CC months
  const ccYear = document.getElementById('cc-exp-year');
  const ccMonth = document.getElementById('cc-exp-month');
  const ccMonthOptionsGroup = document.getElementById('cc-exp-month-options');
  const months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
  var selectedMonthValue = ccMonthOptionsGroup.children[0].value;
  var currentYear = new Date().getFullYear().toString();
  ccYear.addEventListener('change', ()=> {
    if (currentYear.includes(ccYear.value)) {
      remainingMonths();
    } else {
      updateMonthOptions(months);
    }
  })
  ccYear.selectedIndex = 1;
  remainingMonths();

  ccMonth.addEventListener('change', ()=> {
    selectedMonthValue = ccMonth.value;
  })

  function remainingMonths() {
    let d = new Date();
    let remaining = months.slice(d.getMonth());
    updateMonthOptions(remaining);
  }

  function updateMonthOptions(monthArr) {
    let tempCC = selectedMonthValue;
    ccMonthOptionsGroup.innerHTML = '';
    monthArr.forEach((month) => {
      var opt = document.createElement('option');
      opt.value = month;
      opt.innerHTML = month;
      ccMonthOptionsGroup.appendChild(opt);
    })
    
    let optArr = Array.from(ccMonthOptionsGroup.children);

    optArr.forEach((op) => {
      if (op.value == tempCC) {
        op.selected = true;
      }
    })
  }

  // TAX DATA STUFF

  document.getElementById('billingZip').addEventListener('input', () => {
    if (billingSame) {
      copyBillingInputValue();
    }
    debounce(() => getTaxData());
  })

  document.getElementById('shippingZip').addEventListener('input', () => {
    debounce(() => getTaxData());
  })

  var taxPercent = 0;
  var taxAmount = 0;

  // values are updated by bill Country State Zip
  var taxData = {
    "campaign_id": <?= $site ['campaign']; ?>,
    "shipping_id": 5,
    "use_tax_provider": 1,
    "products": [{
      "id": "<?= $pid; ?>",
      "quantity": "1"
    }],
    "location": {
      "state": "AL",
      "country": "US",
      "postal_code": 35242
    }
  };

  var finalTotal = null;

  function hasAllTaxData() {
    return taxData.shipping_id && taxData.location.state && taxData.location.country && taxData.location.postal_code;
  }

  function getTaxData() {
    var credentials = btoa("<?php echo $tax_id; ?>:<?php echo $tax_api_key; ?>");
    taxData.products[0].id = document.getElementById('product_id').value;
    // TODO: handle for multiple products
    // taxData.products = taxData.products.filter((v, i, a) => a.findIndex(v2 => (v2.id === v.id)) === i);
    taxData.location.country = document.getElementById('billingCountry').value;
    taxData.location.state = document.getElementById('billingState').value;
    taxData.location.postal_code = document.getElementById('billingZip').value || 35242;
    //free or us/international shipping
    var shippingCountry = document.getElementById('shippingCountry').value;
    // free or us
    taxData.shipping_id = <?= $site['shippingFree']; ?>;
    // TODO: should not be hardcoded product id
    if (document.getElementById('product_id').value == '1083') {
      taxData.shipping_id = (shippingCountry === 'US') ? <?= $site['shippingUs']; ?> : <?= $site['shippingIntl']; ?>;
    }
    document.getElementById('shippingId').value = taxData.shipping_id;

    if (!hasAllTaxData()) {
      return false;
    }
    
    fetch('https://gdc.sticky.io/api/v2/order_total/calculate', {
        method: "POST",
        headers: new Headers({
          "Authorization": `Basic ${credentials}`,
          'Content-Type': 'application/json'
        }),
        // Set the post data
        body: JSON.stringify(taxData),
      })
      .then(function(response) {
        return response.json();
      })
      .then(function(data) {
        console.log("returned tax data: ", data.data);
        if (data.data) {
          var taxData = data.data.tax;
          var taxPercent = taxData && taxData.pct ? parseFloat(taxData.pct).toFixed(2) : parseFloat(0).toFixed(2);
          var taxAmount = taxData && taxData.total ? parseFloat(taxData.total).toFixed(2) : parseFloat(0).toFixed(2);
          var shipping = data.data.shipping ? parseFloat(data.data.shipping).toFixed(2) : parseFloat(0).toFixed(2);
          var subTotal = data.data.subtotal ? parseFloat(data.data.subtotal).toFixed(2) : parseFloat(0).toFixed(2);
          finalTotal = parseFloat(data.data.total).toFixed(2);
          // document.getElementById('tax-pct').innerHTML = taxPercent > 0 ? `(${taxPercent}%)` : '(Estimated)';
          document.getElementById('sub-amt').innerHTML = subTotal;
          document.getElementById('per-bottle').innerHTML = (subTotal / <?= $product['product_qty']?>).toFixed(2);
          document.getElementById('ship-amt').innerHTML = shipping;
          document.getElementById('shippingCost').value = shipping;
          document.getElementById('tax-amt').innerHTML = taxAmount;
          document.getElementById('tax-pct').innerHTML = '(' + taxPercent + '%)';
          document.getElementById('tax_pct').value = taxPercent;
          document.getElementById('total-amt').innerHTML = finalTotal;

        }
      })
      .catch(function(error) {
        console.log(error);
      });
  }

  const billState = document.getElementById('billingState');
  const billCountry = document.getElementById('billingCountry');
  billState.addEventListener('change', ()=> {
    if (billingSame) {
      copyBillingInputValue();
    }
    debounce(() => getTaxData());
  })
  billCountry.addEventListener('change', ()=> {

  })
  shippingCountry.addEventListener('change', ()=> {
    getTaxData();
  })

  function debounce(func, timeout = 150){
    let timer;
    return (...args) => {
      clearTimeout(timer);
      timer = setTimeout(() => { func.apply(this, args); }, timeout);
    };
  }

  // TODO: Applepay work - https://support.sticky.io/en/articles/5212697-applepay-for-braintree
  // TODO: amazon pay work - https://support.sticky.io/en/articles/3727268-amazon-pay
  // TODO: google pay work - https://support.sticky.io/en/articles/5189091-googlepay-for-braintree
  // TODO: affirm pay work - https://support.sticky.io/en/articles/3727264-affirm-gateway

</script>
<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</body>

</html>