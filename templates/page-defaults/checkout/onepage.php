<?php

$next = '/process.php' ;
$kount_session = str_replace('.', '', microtime(true));

$currentDate = date("m/d/Y H:i:s");
$futureDate = date("m/d/Y H:i:s", $_SESSION['start_time'] + 900);

if (date('H') < 16) {
    $shipTodayDate = new DateTime('today 1PM');
} else {
    $shipTodayDate = new DateTime('tomorrow 1PM');
}
$shipTodayDate = $shipTodayDate->format('m/d/Y H:i:s');
$dateString = intval($futureDate); //add 900 seconds to the session start timestamp.
$displayDeadline = date('F j, Y', strtotime("+90 days"));
//$displayDeadline->format("j, Y, g:i a");

$hasCoupon = false;
if (isset($_GET['coupon']) && $_GET['coupon'] == 1) {
    $hasCoupon = true;
}

if ($_POST) {
    $_SESSION['pid']  = $_POST['pid']; //126 127 128 1021 1022 1023
    $_SESSION['add1'] = (isset($_POST['add1']) && $_POST['add1'] !== 0) ? $_POST['add1'] : 0; //superlube 84
    $_SESSION['add2'] = isset($_POST['add2']) ? $_POST['add2'] : 0;  //37 Sex Positions 81 82 83
}

$pid = $_SESSION['pid'];
$add1 = $_SESSION['add1'] ?? 0;
$add2 = $_SESSION['add2'] ?? 0;

var_dump($pid);

$product1 = $products['products']['126'];
$product2 = $products['products']['127'];
$product3 = $products['products']['128'];

// VIP autopay
$product4 = $products['products']['1021'];
$product5 = $products['products']['1022'];
$product6 = $products['products']['1023'];

$formID = 1;
$s = 1;
$customLabel = '';
$untaxableAmount = 0;

$product = $products['products'][$pid];

$month = $product['product_month'];
$price = $product['product_price'];
$finalPrice = $product['product_price'] + $product['product_ship'];
$ship  = '<p class="price-sum"><span id="ship-price-country">$' . $product['product_ship'] . '</span></p>';
$shippingId = $product['product_ship'] > 0 ? $site['shippingUs'] : $site['shippingFree'];
$discount =  savedAmt($product['product_retail'], $product['product_price']);
$_SESSION['core'] = $_SESSION['core'] = $pid == '955';

$superlube = '<p class="orders">Super Lube</p><hr>';
switch ($add1) {  //superlube
    case 0:
        $superlube = '';
        $slQty = '0';
        $slTotal = 0;
        $slPrice = '';
        $add1pid = 0;
        break;
    case 1:
        $sl_product = $products['products'][81];
        $slQty = $sl_product['product_qty'];
        $slTotal = $sl_product['product_price'];
        $slPrice = '<p class="price-sum">$<span id="superlube">' . number_format($slTotal, 2, '.', '') . '</span></p><hr>';
        $add1pid = $sl_product['product_id'];
        break;
    case 2:
        $sl_product = $products['products'][82];
        $slQty = $sl_product['product_qty'];
        $slTotal = $sl_product['product_price'];
        $slPrice = '<p class="price-sum">$<span id="superlube">' . number_format($slTotal, 2, '.', '') . '</span></p><hr>';
        $add1pid = $sl_product['product_id'];
        break;
    case 3:
        $sl_product = $products['products'][83];
        $slQty = $sl_product['product_qty'];
        $slTotal = $sl_product['product_price'];
        $slPrice = '<p class="price-sum">$<span id="superlube">' . number_format($slTotal, 2, '.', '') . '</span></p><hr>';
        $add1pid = $sl_product['product_id'];
        break;
    default:
        $superlube = '';
        $slQty = '0';
        $slTotal = 0;
        $slPrice = '';
        $add1pid = 0;
        break;
}

// should we show autoship option in label?
$productLabel = $month . '/mo Supply';
if ($customLabel != '') $productLabel = $customLabel;

switch ($add2) {   //37 Sex Positions
    case 0:
        $threeSex = '';
        $threePrice = '';
        $threeTotal = 0;
        $thirtyseven = 0;
        $add2pid = 0;
        break;
    case 1:
        $three7_product = $products['products'][84];
        $threeSex = '<p class="orders">37 Sex Positions</p><hr>';
        $threeTotal = $three7_product['product_price'];
        $threePrice = '<p class="price-sum">$<span id="sexpositions">' . $threeTotal . '</span></p><hr>';
        $thirtyseven = 1;
        $add2pid = $three7_product['product_id'];
        $untaxableAmount = $three7_product['product_price'];
        break;
    default:
        $threeSex = '';
        $threeTotal = 0;
        $threePrice = '';
        $thirtyseven = 0;
        $add2pid = 0;
        break;
}


$totalPrice = intval($price) + intval($ship) + $slTotal + $threeTotal;

//Decline Message Logic
$timenow = date("H:i:s");
$timeopen = date("08:00:00");
$timeclosed = date("20:00:00");
$dayname = date("l");
$daysclosed = array("Saturday", "Sunday");

if (in_array($dayname, $daysclosed)) {
    $csactive = 0;
} else {
    if ($timenow < $timeclosed && $timenow > $timeopen) {
        $csactive = 1;
    } else {
        $csactive = 0;
    }
}

if (!isset($_SESSION['timer-gm'])) {
    $_SESSION['timer-gm'] = time();
}

$timerDelay = time() - $_SESSION['timer-gm'];

?>
<!DOCTYPE html>
<html lang="en" style="max-height: 100vh">

<head>
  <?php template("includes/header"); ?>
  <title>5GMALE - Secure Checkout</title>

  <style>
  body {
    background-color: white;
  }

  .condensed {
    font-family: 'Open Sans Condensed', sans-serif;
  }

  #btn-one,
  #btn-two,
  #btn-three,
  #btn-four {
    font-family: HelveticaNeueLTStd-HvCnO, sans-serif;
    background: #ffffce;
    background: -moz-linear-gradient(top, #ffffce 0, #fbba1d 14%, #fc9900 40%, #e75f01 100%);
    background: -webkit-linear-gradient(top, #ffffce 0, #fbba1d 14%, #fc9900 40%, #e75f01 100%);
    background: linear-gradient(to bottom, #ffffce 0, #fbba1d 14%, #fc9900 40%, #e75f01 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffce', endColorstr='#e75f01', GradientType=0);
    border: solid 3px #994000;
    font-size: 30px;
    text-shadow: 0.5px 0.9px 1px #fffa65;
    color: #10284c;
    border-radius: 6px;
    margin-top: 15px;
    line-height: 1;
    padding: 18px 12px 18px;
    font-style: italic;
    font-weight: bold;
    margin: 10px 0px 0px 0px;
    text-align: center;
    cursor: pointer !important;
  }

  .truck {
    width: 40px;
    height: 40px;
    object-fit: contain;
  }

  .card.selected {
    background-color: #fffee6;
    margin-left: 0.5rem;
    margin-right: 0.5rem;
    border: 5px solid #f16521;
  }

  .card.selected select {
    display: flex;
    margin-right: auto;
    width: auto;
  }

  .card.selected .bg-gray-100 {
    background-color: #fdfac3;
  }

  .card.selected .gradient {
    display: flex;
  }

  .card.selected .option-txt {
    color: #f26522;
  }

  .button_buy {
    color: #fefefe;
    font-size: 36px;
    line-height: 1.176;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0;
    border-radius: 4em;
    padding: 15px 0px;
    margin: 1em 0;
    background-color: #62b218 !important;
    min-width: 290px;
    min-height: 60px;
    outline: none !important;
    display: block;
    max-width: 245px;
    margin: 0 auto;
    text-align: center;
    border: 1px solid #62b218;
  }

  .bogo {
    position: relative;
    background-color: #FDD20EFF;
    margin: 1rem -1rem;
    padding: 0.5rem;
  }

  .bogo span {
    font-size: 27px;
    color: #E10600;
    text-align: center;
    font-weight: bold;
  }

  #bogo-1 img {
    max-height: 120px;
    max-width: 30%;
    position: absolute;
    bottom: 0px;
    right: 0px;
    left: unset;
    top: unset;
    z-index: 1;
    transform: translateY(15%);
    object-fit: contain;
  }

  #bogo-1 img.bottle-1 {
    width: 15%;
    bottom: 5px;
  }

  #bogo-1 img.bottle-3 {
    width: 25%;
    bottom: 8px;
  }

  #bogo-1 img.bottle-6 {
    width: 28%;
    bottom: 4px;
  }

  .gradient {
    background: linear-gradient(to right, rgba(252, 244, 173, 1) 0%, rgba(249, 224, 101, 1) 32%, rgba(246, 209, 45, 1) 51%, rgba(246, 210, 45, 1) 71%, rgba(246, 210, 45, 1) 100%);
  }

  .protection-list p {
    background: url('//<?= $_SERVER["HTTP_HOST"];?>/images/blue-check.png') no-repeat;
    padding-left: 30px;
    font-size: 18px;
    color: #000;
    line-height: 18px;
    margin-left: 10px;
    margin-bottom: 13px;
    font-weight: 500;
  }

  .protect-title {
    font-size: 30px;
    line-height: 33px;
    padding-left: 16px;
    font-weight: bold;
    color: #348FD4;
    padding-top: 3px;
  }

  .phone {
    background-image: url("data:image/svg+xml,%3Csvg width='50px' height='50px' version='1.1' viewBox='0 0 752 752' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m194.68 332.62s-12.801-39.82-5.6875-78.219c5.6875-36.977 25.598-51.199 31.289-55.465 5.6875-2.8438 14.223-8.5312 14.223-8.5312s9.957-9.957 21.332 2.8438c11.379 11.379 63.996 65.418 63.996 65.418s9.957 11.379 1.4219 22.754c-8.5312 9.957-38.398 39.82-38.398 39.82 12.801 48.355 99.551 135.11 147.91 147.91 0 0 29.867-28.441 41.242-36.977 9.957-8.5312 21.332 1.4219 21.332 1.4219s54.043 51.199 66.84 62.574c11.379 12.801 1.4219 21.332 1.4219 21.332s-4.2656 9.957-8.5312 14.223c-2.8438 5.6875-18.488 25.598-55.465 32.711-36.977 5.6875-78.219-7.1094-78.219-7.1094-85.328-34.133-190.57-137.95-224.7-224.7z' fill-rule='evenodd'/%3E%3C/svg%3E%0A");
    background-size: contain;
    background-position: center center;
    background-repeat: no-repeat;
    width: 35px;
    height: 35px;
  }

  #countdown {
    padding: 0 16px;
    border: none;
  }

  .newbuy {
    color: #fefefe !important;
    font-size: 24px !important;
    line-height: 1.5 !important;
    text-decoration: none !important;
    text-transform: uppercase !important;
    font-weight: 700 !important;
    letter-spacing: 0 !important;
    border-radius: 4em !important;
    padding: 15px 20px !important;
    margin: 1em 0 !important;
    background-color: #62b218 !important;
    /* min-width: 400px!important; */
    max-width: 450px;
    /* min-height: 81px!important; */
    outline: none !important;
    justify-content: center;
    text-align: center;
    margin: 0 auto !important;
    text-align: center !important;
    border: 1px solid #62b218 !important;
    margin-bottom: 9px !important;
  }

  @media screen and (min-width: 769px) {
    .newbuy {
      font-size: 34px !important;
    }
  }

  #countdown {
    padding: 0 16px;
    border: none;
  }

  #runOutModal .modal-headline {
    color: #ff0000 !important;
    text-align: left;
    background: url('//<?= $_SERVER["HTTP_HOST"];?>/images/popup-timer.gif') no-repeat;
    font-weight: bold !important;
    padding-left: 138px;
    margin-left: 0;
    padding-bottom: 22px;
    padding-top: 22px;
    background-position: 45px;
    line-height: 1.3em;
    font-size: 34px;
  }

  @media screen and (min-width: 769px) {
    #runOutModal .modal-headline {
      margin-left: 35px;
    }
  }

  .out-of-time {
    background: url('//<?= $_SERVER["HTTP_HOST"];?>/images/popup-timer.gif') no-repeat;
    background-position: center;
    background-size: contain;
    height: 85px;
    width: 85px;
  }

  #modal-button {
    float: none !important;
    opacity: 1 !important;
    font-family: HelveticaNeueLTStd-HvCnO, sans-serif;
    background: #ff0000;
    background: -moz-linear-gradient(top, #ff0000 0, #f94242 40%, #ef8282 100%);
    background: -webkit-linear-gradient(top, #ff0000 0, #f94242 40%, #ef8282 100%);
    background: linear-gradient(to bottom, #ff0000 0, #f94242 40%, #ef8282 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0000', endColorstr='#fff', GradientType=0);
    border: solid 3px #994000;
    font-size: 30px;
    text-shadow: 0.5px 0.9px 1px #fffa65;
    color: #10284c;
    border-radius: 6px;
    margin-top: 15px;
    line-height: 1;
    padding: 18px 15px 18px;
    font-style: italic;
    font-weight: bold;
    margin: 10px 0px 0px 0px;
  }

  .phone {
    background-image: url("data:image/svg+xml,%3Csvg width='50px' height='50px' version='1.1' viewBox='0 0 752 752' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m194.68 332.62s-12.801-39.82-5.6875-78.219c5.6875-36.977 25.598-51.199 31.289-55.465 5.6875-2.8438 14.223-8.5312 14.223-8.5312s9.957-9.957 21.332 2.8438c11.379 11.379 63.996 65.418 63.996 65.418s9.957 11.379 1.4219 22.754c-8.5312 9.957-38.398 39.82-38.398 39.82 12.801 48.355 99.551 135.11 147.91 147.91 0 0 29.867-28.441 41.242-36.977 9.957-8.5312 21.332 1.4219 21.332 1.4219s54.043 51.199 66.84 62.574c11.379 12.801 1.4219 21.332 1.4219 21.332s-4.2656 9.957-8.5312 14.223c-2.8438 5.6875-18.488 25.598-55.465 32.711-36.977 5.6875-78.219-7.1094-78.219-7.1094-85.328-34.133-190.57-137.95-224.7-224.7z' fill-rule='evenodd'/%3E%3C/svg%3E%0A");
    background-size: contain;
    background-position: center center;
    background-repeat: no-repeat;
    width: 35px;
    height: 35px;
  }

  .has-danger .border-gray-400 rounded {
    border: 1px solid red;
  }

  .letter-seal {
    width: auto;
    max-width: 175px;
    float: right;
    margin: 0;
  }

  @media screen and (max-width: 769px) {
    .letter-seal {
      float: unset;
      margin: 1rem auto;
    }
  }

  .order-last {
    order: 999;
  }

  @media screen and (min-width: 769px) {
    .order-last {
      order: -999 !important;
    }
  }

  .ryan-yellow {
    background-color: #FFFDBE;
  }

  .pristine-error {
    margin-bottom: 4px;
  }

  /* for float labels */
  label {
    position: relative;
    transform: translate(10px, 7px);
    background-color: white;
    display: inline-block;
    padding: 0 5px;
    width: auto;
    box-shadow: 0 2px 9px rgb(250 250 250 / 80%);
    transition: all 200ms ease-in-out;
  }

  @media screen and (min-width: 769px) {
    label {
      background-color: transparent;
    }
  }
  </style>
</head>



<body style="height: 100vh">
  <div id="countdown-banner" class="flex justify-center flex-nowrap bg-redish text-white p-3 text-center text-sm hidden"
    style="position: sticky;top: 0;z-index: 1000; filter: saturate(1.8)">
    <div class="flex flex-wrap text-center justify-center">
      <div class="flex flex-nowrap">
        Your Discount Is Being Held For
        <span id="countdown-timer" class="ml-1">
          <div id="clock1" class="font-bold text-white">[clock1]</div>
        </span>
      </div>
      Until It Is Given To The Next Man Waiting&nbsp;In&nbsp; Line
    </div>
  </div>
  <header class="flex justify-center bg-lime-600 p-2">
    <div
      class="flex flex-wrap bg-white rounded px-2 md:px-4 py-1 text-greenish items-center text-center text-sm md:text-base">
      <div class="flex flex-nowrap items-center mx-auto">
        <img class="mr-2" src="//<?= $_SERVER['HTTP_HOST'];?>/images/green-lock-icon.gif" width="20px" height="20px" />
        <div>SECURE | </div>
      </div>
      <div class="mx-auto ml-1 grow hidden md:block">You Are On A 256-Bit Secure Order Page</div>
      <div class="mx-auto ml-1 grow md:hidden">256-Bit Secure Order Page</div>
    </div>
  </header>
  <div class="container container-md mx-auto pt-3 md:py-6" style="max-width: 960px !important">
    <div class="conten px-2 md:px-5">
      <div class="flex justify-center w-full">
        <div class="flex flex-wrap items-center">
          <img class="mx-auto" src="//<?= $_SERVER['HTTP_HOST'];?><?= $site['logo']; ?>" style="height: 25px" />
          <?php if ($csactive == 1) : ?>
          <div class="flex flex-nowrap mx-auto items-center mt-2 md:mt-0">
            <!-- <div class="phone ml-2"></div> -->
            <img class="-m-1 md:mx-0" src="//<?= $_SERVER['HTTP_HOST'];?>/images/phone.png" alt="phone icon">
            <span class="text-xs md:text-base">Call&nbsp;<a href="tel:<?= $company['phone_specialist']; ?>"
                class="no-underline"><?= $company['phone_specialist']; ?></a>&nbsp;Now To Speak To A Product
              Specialist!</span>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="flex justify-center w-full mt-4 text-center">
        <h1 class="text-redish text-5xl font-bold condensed hidden md:block">Step 2: This Massive Discount Is
          Almost&nbsp;Yours...</h1>
        <h1 class="text-redish text-5xl font-bold condensed md:hidden">It's Almost Yours!</h1>
      </div>
      <div class="text-center mb-1 md:mb-3 text-xl">
        <h2 class="condensed text-4xl mt-2 hidden md:block">Just Enter Your Billing Details In The Secure
          Form&nbsp;Below…</h2>
        <h2 class="condensed text-4xl my-2 md:hidden">Enter Your <strong>Billing</strong> Info...</h2>
      </div>
      <div class="flex flex-col w-full mb-0 lg:w-1/2 lg:ml-auto text-redish">
        <h3 class="flex justify-center font-bold text-4xl mb-1 hidden md:flex">GET STARTED</h3>
        <div class="flex justify-center md:hidden"><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/red-arrow.png"
            style="z-index: 10;" /></div>
        <div class="flex justify-center hidden md:flex" style="margin-bottom: -28px"><img
            src="//<?= $_SERVER['HTTP_HOST'];?>/images/red-arrow.png" style="z-index: 10;" /></div>
      </div>
      <!-- <section class="flex flex-wrap md:flex-nowrap w-full columns-1 md:columns-2 gap-5 mt-5"> -->
      <section class="grid grid-cols-1 lg:grid-cols-2 gap-x-3 items-stretch mt-0 md:mt-5">

        <div class="w-full px-0 md:px-4 my-4 lg:my-0 min-h-full order-last md:order-first">
          <div class="border border-black p-4 px-5">
            <div class="flex justify-center text-2xl font-bold mb-4 text-center">YOUR ORDER SUMMARY</div>
            <ul class="w-full" style="padding-left: 0">
              <li class=" flex justify-between items-center text-gray-500 font-semibold text-xl">
                <div>PRODUCT</div>
                <div class="" style="margin-right: 3.5rem">PRICE</div>
              </li>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2"><?= $company['featuredProduct']; ?> PLUS
                  (<?php echo $productLabel; ?>)</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold">$<?php echo $price; ?><span
                    class="text-greenish font-bold ml-2 invisible">FREE!</span></div>
              </li>
              <?php if($add1pid !== 0): ?>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">Super Lube (<?= $slQty; ?>)</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold">$<?= $slTotal; ?> <span
                    class="text-greenish font-bold ml-2 invisible">FREE!</span></div>
              </li>
              <?php endif; ?>
              <?php if($add2pid !== 0): ?>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">37 Sex Positions</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold">$19.95 <span
                    class="text-greenish font-bold ml-2 invisible">FREE!</span></div>
              </li>
              <?php endif; ?>
              <!-- TODO hasGifts -->
              <?php if(hasGifts($pid, $products['hasGifts'])): ?>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">5G Enhancement Bible</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold"><strike>$19.95</strike> <span
                    class="text-greenish font-bold ml-2">FREE!</span></div>
              </li>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">The Multiplier Method</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold"><strike>$49.00</strike> <span
                    class="text-greenish font-bold ml-2">FREE!</span></div>
              </li>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">The XXL Formula</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold"><strike>$79.95</strike> <span
                    class="text-greenish font-bold ml-2">FREE!</span></div>
              </li>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">Magic Words That Drive Her Wild</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold"><strike>$39.00</strike> <span
                    class="text-greenish font-bold ml-2">FREE!</span></div>
              </li>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">"Text To Sex" Course</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold"><strike>$39.00</strike> <span
                    class="text-greenish font-bold ml-2">FREE!</span></div>
              </li>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">Become Supernatural</div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold"><strike>$39.95</strike> <span
                    class="text-greenish font-bold ml-2">FREE!</span></div>
              </li>
              <?php endif; ?>
              <li class="flex justify-between items-center border-b flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">Shipping</div>
                <!-- shipping price updates with JS logic on render and shipping country change-->
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold"><span id="ship-price-display">6.95
                  </span> <span class="text-greenish font-bold ml-2" id="ship-free2">FREE!</span></div>
              </li>
              <li class="flex justify-between items-center border-b-0 flex-nowrap md:flex-wrap py-2">
                <div class="w-full md:w-2/3 mr-2">Sales Tax <span id="tax-pct" class="text-sm">(Estimated)</span></div>
                <div class="flex flex-nowrap text-lg text-gray-400 font-semibold">$ <span id="tax-amt">0.00</span><span
                    class="text-greenish font-bold ml-2 invisible">FREE!</span></div>
              </li>
              <?php if(hasGifts($pid, $products['hasGifts'])): ?>
              <li class="flex justify-center items-center py-4 mt-4 hidden md:flex">
                <div class="flex justify-center flex-wrap md:flex-nowrap text-lg font-semibold mx-auto md:mx-0">That's
                  $266.86 of Bonus Gifts, <span class="text-greenish fw-bold mx-auto md:ml-2"> YOURS FREE!</span></div>
              </li>
              <?php endif; ?>
              <li class="flex justify-between items-center flex-wrap py-3 border-t">
                <div class="orders font-semibold ">Today You Pay Only</div>
                <!-- final price updates with shipping country info -->
                <div class="font-bold text-redish">$<span id="final-price"><?= $totalPrice; ?></span></div>
              </li>
              <?php if(hasGifts($pid, $products['hasGifts'])): ?>
              <li class="flex justify-center items-center py-4 md:hidden">
                <div class="flex justify-center flex-wrap md:flex-nowrap text-xl font-semibold mx-auto md:mx-0">That's
                  $266.86 of Bonus Gifts, <span class="text-greenish fw-bold mx-auto md:ml-2"> YOURS FREE!</span></div>
              </li>
              <?php endif; ?>
            </ul>
          </div>

          <div class="flex items-center mb-3 hidden md:flex">
            <div class="icon mr-3">
              <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/truch-icon-green.png" alt="truck"
                style="object-fit: contain; width: 70px; height: 70px;">
            </div>
            <div class="text-greenish mt-4 grow">
              <div class="">
                <div>
                  Order In The Next
                </div>

                <div id="clock2" class="font-bold ml-1">[clock2]</div>
              </div>


              To Be Shipped
              <?php if (date('H') >= 16) {
                                    echo 'First thing 9AM tomorrow!';
                                } else {
                                    echo 'Today!';
                                } ?>
            </div>


          </div>
          <div class="flex items-center border-t hidden md:flex">
            <div class="icon mr-3">
              <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/90-day-green.png" alt="90 day seal"
                style="object-fit: contain; width: 90px; height: 90px;">
            </div>
            <div class="text-greenish" style="color: #40a900!important;">
              Try <?= $company['featuredProduct']; ?> PLUS <strong>Risk FREE</strong> Until
              <strong><?php echo $displayDeadline; ?></strong> With Our 90-Day Guarantee
            </div>
          </div>
          <div class="flex flex-col w-full text-center my-3 condensed hidden md:flex"
            style="font-size: 28px;line-height: 1.3em;">
            Your Purchase Today Is Fully Protected By Our
            </br>
            <strong> 90-DAY MONEY BACK GUARANTEE!</strong>
          </div>

          <div class="w-full ryan-yellow border p-5 my-5">

            <div class="flex flex-col">
              <p class="guarantee-txts">
                I understand that I have 90 days - thats <strong>THREE FULL MONTHS</strong>
                <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/90-day-icon.png" alt="90 day guarantee"
                  class="w-5/12 md:w-auto -mb-22 md:mb-0 hidden md:block" style="max-width: 300px; float: right;">
                - to try out <?= $company['featuredProduct']; ?> PLUS and make sure I love it. And any time I want, I
                can call support at <strong><?= $company['phone']; ?></strong> or email
                <strong><?= $company['email']; ?></strong>, 24 hours a day, 7 days a week to request a refund, with no
                questions asked and no hassles!
                <br> <strong id="guarantee">GUARANTEED BY:</strong>
                <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/90-day-icon.png" alt="90 day guarantee"
                  class="w-5/12 md:w-auto -mb-22 md:mb-0 md:hidden" style="max-width: 300px; float: right;">
                <br> <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/ryan-sign.png" alt="ryan signature"
                  class="w-50 md:w-auto mt-8 " style="max-width: 200px;mix-blend-mode: darken;">
                Ryan Masters, Head of Research at <?php echo $company['name']; ?>
              </p>
            </div>

          </div>
          <div class="w-auto pl-5  my-5 mt-11 mx-auto hidden md:block">
            <div class="flex flex-col w-auto protection-section">
              <div class="flex mb-2" style="width:58px; height: auto">
                <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/blue-shield.png" style="width: 58px;height: 70px;">
                <p class="protect-title">BUYER<br>PROTECTION</p>
              </div>

              <div class="protection-list" style="clear:both;">
                <p class="font-semibold">Fast Shipping <br><span class="text-sm text-gray-400 font-normal">Your order
                    ships ASAP with tracking info</span></p>
                <p class="font-semibold">24/7 Live Phone Help <br><span class="text-sm text-gray-400 font-normal">Talk
                    to a real, live person any time</span></p>
                <p class="font-semibold">Billed As "<?php echo $company['billedAs']; ?>" <br><span
                    class="text-sm text-gray-400 font-normal">Discreet billing for your privacy</span></p>
                <p class="font-semibold">Privacy Guaranteed <br><span class="text-sm text-gray-400 font-normal">Your
                    information is never shared</span></p>
                <p class="last-list font-semibold">Lowest Price Guaranteed <br><span
                    class="text-sm text-gray-400 font-normal">You will never see this at a lower price</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full my-4 md:my-0">
          <div class="flex flex-col bg-white md:bg-gray-100  border-0 md:border px-0 md:px-4">
            <div class="flex justify-center text-2xl font-semibold my-4 hidden md:flex">Enter Your<span
                class="underline font-bold mx-2">BILLING</span> Address...</div>
            <?php
                        if (isset($_SESSION['formerrors'])) {
                                ?>
            <div class="bg-red-100 border border-red-400 text-redish px-4 py-3 mb-5 rounded relative" role="alert">
              <strong class="font-bold">Whoops, something didn't go right - Error Code:
                <?php echo $_SESSION['llerrorcode'] ?></strong>
              <span class="block sm:inline"><?php echo $_SESSION['formError'] ?></span>
            </div>
            <?php } ?>
            <form action="/process.php<?php echo trim(@$querystring); ?>" method='POST' id="step_1" class="col-sm-12">
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="FirstName" class="text-sm text-gray-600">First Name:</label>
                </div>
                <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="text"
                  name="firstName" id="FirstName" placeholder="First Name" required
                  value="<?php echo @$_SESSION["firstName"]; ?>" onchange="">

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="LastName" class="text-sm text-gray-600">Last Name:</label>
                </div>

                <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="text"
                  name="lastName" id="LastName" placeholder="Last Name" value="<?php @$_SESSION["lastName"]; ?>"
                  onchange="">

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="Email" class="text-sm text-gray-600">Email:</label>
                </div>

                <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="email"
                  name="email" id="Email" placeholder="Email" value="<?php echo @$_SESSION["email"]; ?>" onchange="">

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="Phone" class="text-sm text-gray-600">Phone:</label>
                </div>

                <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="tel"
                  name="phone" id="Phone" placeholder="Phone" value="<?php echo @$_SESSION["phone"]; ?>" onchange="">

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="billingAddress1" class="text-sm text-gray-600">Address:</label>
                </div>

                <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg"
                  name="billingAddress1" type="text" id="billingAddress1" placeholder="Address 1"
                  value="<?php echo @$_SESSION["billingAddress1"]; ?>" onchange="">

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="billingAddress2" class="text-sm text-gray-600">Address Cont'd:</label>
                </div>

                <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" name="billingAddress2"
                  type="text" id="billingAddress2" placeholder="Address 2"
                  value="<?php echo @$_SESSION["billingAddress2"]; ?>" onchange="">

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="billingCity" class="text-sm text-gray-600">City:</label>
                </div>

                <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg"
                  name="billingCity" type="text" id="billingCity" placeholder="City"
                  value="<?php echo @$_SESSION["billingCity"]; ?>" onchange="">

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="billingState" class="text-sm text-gray-600">State/Province:</label>
                </div>

                <!-- <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="text" name="first_name" id="FirstName" placeholder="FirstName" value="" onchange=""> -->
                <select class="inf-select bg-white default-input sale-text w-full md:w-2/3 px-1 py-2 border border-gray-400 rounded "
                  id="billingState" name="billingState" value="<?php echo @$_SESSION['billingState']; ?>"
                  data-selected="<?php echo @$_SESSION["billingState"]; ?>">
                  <?php foreach ($usStates as $key => $value) : ?>
                  <option value="<?= $key;?>"> <?= $value; ?> </option>
                  <?php endforeach; ?>
                </select>

              </div>
              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="billingCountry" class="text-sm text-gray-600">Country:</label>
                </div>

                <!-- <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                <select class="inf-select bg-white default-input sale-text w-full md:w-2/3 px-1 py-2 border border-gray-400 rounded "
                  id="billingCountry" name="billingCountry" data-toggle-element="billingState"
                  value="<?php echo @$_SESSION['billingCountry']; ?>" onchange="solvePrice()">
                  <option selected value="US">United States</option>
                  <?php foreach ($countries as $key => $value) : ?>
                  <option value="<?= $key;?>"> <?= $value; ?> </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="flex flex-wrap items-center mb-4">
                <div class="w-full w-1/3 invisible md:visible">
                  <label for="billingZip" class="text-sm text-gray-600">Postal Code:</label>
                </div>

                <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg"
                  name="billingZip" type="text" id="billingZip" placeholder="Postal Code"
                  value="<?php echo @$_SESSION['billingZip']; ?>" onchange="">

              </div>



              <div class="flex flex-col">
                <!-- credit card block -->
                <section class="order-last md:order-first">
                  <div class="flex justify-center text-2xl mb-3 text-center md:hidden"
                    style="font-size: 1.4rem; line-height: 1.2">Enter Your<strong>&nbsp;Credit Card&nbsp;</strong>Info:
                  </div>
                  <div class="flex flex-col w-full my-5 mt-1">
                    <p class="text-center text-sm hidden md:hidden">Certified As Secure &amp; Trustworthy By The Leading
                      Companies:</p>
                    <p class="text-center text-base hidden md:block">All major credit cards accepted:</p>
                    <div class="flex justify-center my-3">
                      <div class="credit-card visa mr-3"></div>
                      <div class="credit-card mc mr-3"></div>
                      <div class="credit-card disc mr-3"></div>
                      <div class="credit-card amex"></div>
                    </div>
                    <p class="text-center text-sm mt-2 hidden md:block">Credit Card charged as
                      <strong>"<?= $company['billedAs']; ?>"</strong>
                    </p>
                  </div>
                  <div class="flex flex-wrap items-center mb-4">
                    <div class="w-full w-1/3 invisible md:visible">
                      <label for="cc_no" class="text-sm text-gray-600">Card Number:</label>
                    </div>

                    <input required data-private
                      class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="text"
                      onkeyup="this.value=this.value.replace(/[^\d]/,'')"
                      maxlength="16" max="9999999999999999" name="creditCardNumber" id="cc_no" placeholder="Credit Card Number"
                      value="<?php echo @$_SESSION['creditCardNumber']; ?>" onchange="">

                  </div>
                  <div class="flex flex-wrap items-center mb-4">
                    <div class="w-full w-1/3 invisible md:visible">
                      <label for="cc_exp_mo" class="text-sm text-gray-600">Exp Date:</label>
                    </div>
                    <div class="w-full md:w-2/3 ">
                      <div class="w-full columns-2 gap-3">
                        
                          <!-- <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                          <select class="input bg-white border border-gray-400 rounded w-full p-2 text-lg"
                            id="cc_exp_mo" name="expMonth">
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
                        
                        
                          <!-- <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                          <select class="input bg-white border border-gray-400 rounded w-full p-2 text-lg"
                            id="cc_exp_yr" name="expYear">
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
                  </div>
                  <div class="flex flex-wrap items-center mb-4">
                  <div class="w-full w-1/3 invisible md:visible">
                      <label for="cvv" class="text-sm text-gray-600">CVV: <a class="text-xs"
                          href="//<?= $_SERVER['HTTP_HOST'];?>/card-help" target="_blank">what's this?</a></label>
                    </div>

                    <input required class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg"
                        onkeyup="this.value=this.value.replace(/[^\d]/,'')"
                        type="text" maxlength="4" max="9999" pattern="\d*" name="cvv" id="cvv" placeholder="CVV" value="" onchange="">

                  </div>

                </section>

                <!-- desktop shipping -->
                <section>
                  <div class="flex flex-wrap items-center my-4 mb-1 text-center justify-center hidden md:flex">
                    <p class="text-2xl font-semibold" style="margin-bottom: 0.5rem">Enter Your <span
                        class="underline font-bold mx-2">SHIPPING</span> Address...</p>
                  </div>
                  <div class="flex flex-nowrap items-start justify-center w-full my-5 mt-3 ml-1">
                    <input type="checkbox" checked name="billingSameAsShipping" id="bill-same"
                      style="outline: 1px solid gray; margin-top: 0.25rem"
                      value="<?php echo @$_SESSION['billingSameAsShipping']; ?>" />
                    <label class="ml-2 hidden md:inline-block">Shipping address same as billing?</label>
                    <label class="ml-2 md:hidden">My Shipping Address is the same as the billing address above.</label>
                  </div>
                  <div id="shipping-address-container" class="shipping-address hide">

                    <div class="flex flex-wrap items-center mb-4">
                      <div class="w-full w-1/3 invisible md:visible">
                        <label for="shipingAddress1" class="text-sm text-gray-600">Address:</label>
                      </div>

                      <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg"
                        placeholder="Address 1" name="shippingAddress1" type="text" id="shippingAddress1"
                        placeholder="Address 1" value="<?php echo @$_SESSION["shippingAddress1"]; ?>">

                    </div>
                    <div class="flex flex-wrap items-center mb-4">
                      <div class="w-full w-1/3 invisible md:visible">
                        <label for="shippingAddress2" class="text-sm text-gray-600">Address Cont'd:</label>
                      </div>

                      <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg"
                        placeholder="Address 2" name="shippingAddress2" type="text" id="shippingAddress2"
                        placeholder="Address 2" value="<?php echo @$_SESSION["shippingAddress2"]; ?>">

                    </div>
                    <div class="flex flex-wrap items-center mb-4">
                      <div class="w-full w-1/3 invisible md:visible">
                        <label for="shippingCity" class="text-sm text-gray-600">City:</label>
                      </div>

                      <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" placeholder="City"
                        name="shippingCity" type="text" id="shippingCity" placeholder="City" size="25"
                        value="<?php echo @$_SESSION["shippingCity"]; ?>">

                    </div>
                    <div class="flex flex-wrap items-center mb-4">
                      <div class="w-full w-1/3 invisible md:visible">
                        <label for="shippingState" class="text-sm text-gray-600">State/Province:</label>
                      </div>

                      <!-- <input class="w-full px-1 py-2 rounded rounded" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                      <select class="inf-select bg-white default-input sale-text w-full md:w-2/3 px-1 py-2 border border-gray-400 rounded "
                        id="shippingState" name="shippingState" value="<?php echo @$_SESSION["shippingState"]; ?>"
                        data-selected="<?php echo @$_SESSION["shippingState"]; ?>">
                        <?php foreach ($usStates as $key => $value) : ?>
                        <option value="<?= $key;?>"> <?= $value; ?> </option>
                        <?php endforeach; ?>
                      </select>

                    </div>
                    <div class="flex flex-wrap items-center mb-4">
                      <div class="w-full w-1/3 invisible md:visible">
                        <label for="shippingCountry" class="text-sm text-gray-600">Country:</label>
                      </div>

                      <!-- <input class="w-full px-1 py-2 rounded rounded" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                      <select class="inf-select bg-white default-input sale-text w-full md:w-2/3 px-1 py-2 border border-gray-400 rounded "
                        id="shippingCountry" name="shippingCountry" data-toggle-element="shippingState"
                        onchange="solvePrice()">
                        <option selected value="US">United States</option>
                        <?php foreach ($countries as $key => $value) : ?>
                        <option value="<?= $key;?>"> <?= $value; ?> </option>
                        <?php endforeach; ?>
                        ?>
                      </select>
                    </div>
                  <div class="flex flex-wrap items-center mb-4">
                    <div class="w-full w-1/3 invisible md:visible">
                        <label for="billingZip" class="text-sm text-gray-600">Postal Code:</label>
                    </div>

                    <input class="input border border-gray-400 rounded w-full md:w-2/3 p-2 text-lg" placeholder="Postal Code"
                      name="shippingZip" type="text" id="shippingZip"
                      value="<?php echo @$_SESSION["shippingZip"]; ?>">

                </div>
                </div>
            </section>
    </div>


    <section>
      <div class="text-xl text-gray-600 md:hidden my-4 mb-1">
        <p class="mb-2">Subtotal &nbsp; $<?php echo number_format($totalPrice, 2, '.', ''); ?></p>
        <p class="mb-2">Bonuses &nbsp; <strike id="bonuses">$266.85</strike> <span id="p2-free"
            class="text-greenish">FREE!</span></p>
        <p class="flex flex-nowrap mb-2">Shipping &nbsp; <span id="ship-price-display2">6.95 </span> <span
            id="ship-free" class="text-greenish ml-1" style="display: none">FREE!</span></p>
        <p class="mb-2">Tax Est. &nbsp; <span>$</span><span id="tax-amt-m">0.00</span></p>
      </div>

      <div class="flex flex-col w-full items-center py-3">

        <div id="totalPricePay"
          class="flex w-full text-2xl items-center justify-center px-2 md:justify-between mb-4 md:mb-1"
          style="max-width: 450px;">
          <div class="font-semibold md:hidden">You Pay</div>
          <div class="font-semibold hidden md:block">You Pay Just</div>
          <div class="flex items-center">
            <div id="totalPricePayValue" class=" text-redish font-semibold mx-2 md:hidden" style="color: #e36500">Just
              $<span id="total-mobile"><?php echo $totalPrice; ?></span> <span class="text-black">Today!</span></div>
            <div id="totalPricePayValue" class="font-semibold mx-2 hidden md:block">$<span
                id="total-desktop"><?php echo $totalPrice; ?></span></div>
            <div id="totalDiscount" class="hidden font-semibold text-redish md:block text-lg">
              (<?php echo $discount; ?>% OFF)</div>
          </div>

        </div>

        <p id="terms" class="text-sm text-center text-gray-400 mb-2 mt-4 hidden md:block">By clicking the
          order button I accept the <a target="_blank" class="underline"
            href="//<?= $_SERVER['HTTP_HOST'];?>/terms">Terms and Conditions</a></p>
        <div class="flex w-full justify-center">
          <button type=name="next-button" id="next-button" class="w-full newbuy text-3xl hidden md:block"
            value="COMPLETE PURCHASE">Complete Purchase</button>
          <button type=name="next-button" id="next-button" class="w-full md:hidden" value="COMPLETE PURCHASE">
            <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/buynow.gif" alt="buy now button">
          </button>
        </div>

        <div class="flex flex-col w-full mt-3 md:hidden">
          <p class="text-center text-sm text-gray-400">Certified As Secure &amp; Trustworthy By The Leading
            Companies:</p>
          <div class="flex mt-3">
            <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/sec-icons-new.png"
              style="max-width: 800px;">
          </div>
        </div>
        <div class="flex flex-col justify-center text-xl my-3 text-center md:hidden">Credit Card Charged As
          <br> <strong>"<?= $company['name']; ?>"</strong>
        </div>

        <p id="terms" class="text-base text-center text-gray-400 my-5 mt-0 md:hidden">By clicking the order
          button I accept the <a target="_blank" class="underline" href="//<?= $_SERVER['HTTP_HOST'];?>/terms">Terms and
            Conditions</a></p>

        <div class="flex justify-center text-2xl font-bold mb-3 text-center md:hidden"
          style="font-size: 1.4rem; line-height: 1.2">ORDER RISK FREE WITH A 90 DAY MONEY BACK GUARANTEE!
        </div>

        <div class="flex justify-center md:hidden">
          <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/90-day-icon.png" alt="90 day guarantee" class="letter-seal">
        </div>

        <div class="flex w-full justify-center items-center text-center hidden md:flex" style="color:#3fa900">
          <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/lock-green-step2.png" alt="lock icon"></div>
          <div class="ml-2 text-greenish text-xl font-semibold"> 256-BIT Secure Transaction</div>
        </div>
        <div class="flex w-full text-center justify-center mt-3 hidden md:flex">
          <p class="bit-secure-txt">Please click the order button <strong>ONLY ONCE</strong><br> and do not
            refresh the page</p>
        </div>
        <!-- <div id="sales-tax-notice" class="text-center hidden">
                                    * NY sales tax up to 8.875% based on the county of the ship-to address
                                </div> -->
      </div>
    </section>
  </div>
  <div class="flex justify-center my-4 mt-6 hidden md:flex">
    <div class="flex w-full">
      <img class="w-auto mx-auto" src="//<?= $_SERVER['HTTP_HOST'];?>/images/norton-guarantee-large.gif"
        alt="Norton Shopping Guarantee">
    </div>
  </div>
  <div class="flex justify-center my-3 hidden md:flex">
    <div class="flex w-2/3">
      <img class="w-full mx-auto" src="//<?= $_SERVER['HTTP_HOST'];?>/images/BBB-icon.png?ver=1" alt="BBB"
        style="max-width: 300px">
    </div>
  </div>

  <div class="flex justify-center my-3 hidden md:flex">
    <div class="flex px-4 text-center font-semibold">
      <p>Top Rated By The Better Business Bureau!</p>
    </div>
  </div>
  <div class="flex justify-center my-2 hidden md:flex">
    <div class="flex px-4 text-center text-sm">
      <p>Buy with <strong>confidence</strong>. See real, <strong>positive</strong> reviews from customers who
        love <?= $company['featuredProduct']; ?>. We’re <strong>top-rated</strong> with over 30,000 happy
        customers around the world!</p>
    </div>
  </div>

  </div>
  </section>

  <div class="flex flex-col w-full mt-11 hidden md:flex">
    <p class="text-center text-base md:text-sm text-gray-400">Certified As Secure &amp; Trustworthy By The Leading
      Companies:</p>
    <div class="flex mt-3">
      <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/security-icons.gif"
        style="max-width: 800px;">
    </div>
  </div>

  <div class="flex justify-center flex-wrap text-center mt-0 bg-black md:bg-white p-3 py-6 md:pb-8 mb-0"
    style="margin-left: -12px; margin-right: -12px;">
    <p class="text-center md:hidden py-3 text-gray-500">*These statements have not been evaluated by the Food and
      Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.
      <?= $company['featuredProduct']; ?> should be used as a supplement to your active lifestyle.</p>
    <p class="text-center w-full  md:hidden text-gray-500 py-3">© 2022 <?= $company['name']; ?></p>
    <!-- <a class="mx-3" style="color:#000;text-decoration:underline;" class="fancybox" href="/tailwind/terms">Terms and Conditions</a> &nbsp;
                <a class="mx-3" style="color:#000;text-decoration:underline;" class="fancybox" href="/tailwind/privacy">Privacy Policy</a> &nbsp;
                <a class="mx-3" href="#" style="color:#000;text-decoration:underline;" onclick="return (function(){zE.activate();return false;})()">Contact Us</a> -->
    <?php legalLinks("includes/legalLinks");?>
  </div>
  </div>
  </div>

  <!-- hidden inputs -->
  <!-- /process-up/?pid=#&next=url -->
  <input type="hidden" name="previous_page" value="checkout/order">
  <input type="hidden" name="current_page" value="/checkout/onepage">
  <input type="hidden" name="next_page" value="/up/upsell-6-month-supply">
  <input type="hidden" name="product_id" id='product_id' value="<?php echo @$_SESSION['pid']; ?>">
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
  <input type="hidden" name="click_id" value="<?php echo @$_SESSION['clickid']; ?>">
  <input type="hidden" name="notes" value="<?php echo @$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>">
  <input type="hidden" name="shippingId" id="shippingId" value="<?php echo @$shippingId; ?>">
  <input type="hidden" id="shippingCost" name="shippingCost" value="0">
  <input type="hidden" id="tax_pct" name="tax_pct" value="0">
  <input type="hidden" name="newform" value="yes">
  <input type="hidden" name="upsellProductIds" id="upsellProductIds"
    value="87,102,265,142,<?php echo $add1pid; ?>,<?php echo $add2pid; ?> ">
  <input type="hidden" name="upsellCount" value="1">
  <input type="hidden" name="customer_time" id="customer_time" value="">
  <input type="hidden" name="eftid" id="eftid" value="<?php echo @$_SESSION['eftid']; ?>">
  <input type="hidden" name="sessionId" value="<?php echo $kount_session; ?>">
  <input type="hidden" name="fid" id="fid" value="<?php echo $formID; ?>" class="hidden" />
  <input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo $site['campaign']; ?>">
  <input type="hidden" name="37positions" id="37positions" value="<?php echo $thirtyseven; ?>">
  </form>


  <?php
    // declare modal variables (requires basic_modal.js)
    $modal_id = 'runOutModal';
    $modal_title = "IMPORTANT:";
    $modal_body = '
    <div class="flex flex-col md:flex-row content-center items-center mb-2">
        <div class="out-of-time"></div>
        <div>
            <h1 class="text-redish text-3xl font-bold">Time Has Expired!</h1>
        </div>
    </div>
    <p class="">Your <?= $company["featuredProduct"]; ?> discount is no longer being held! Please <strong>choose your
    discount package now</strong> before your spot is given away to the next man in line...</p>
  ';
  $modal_footer = '
  <div id="modalButton" class="w-full text-center"><button id="modal-button" onclick="closeAll()">YES, Complete My
      Order!</button></div>
  ';
  modal('includes/basicModal', $modal_id, $modal_title, $modal_body, $modal_footer);
  ?>

  <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/js/regions.js"></script>
  <script>
  var hasScrolledToError = false;
  document.addEventListener('DOMContentLoaded', function() {
    solvePrice();

    //show or hide shipping address
    const billSame = document.getElementById("bill-same");
    const shipAdd = document.getElementById('shipping-address-container');

    billSame.addEventListener('change', () => {
      if (billSame.checked) {
        display(shipAdd, false);
      } else {
        display(shipAdd, true);
      }
    })


    const city = document.getElementById("shippingCity");
    city.addEventListener('keyup', function() {
      document.getElementById("shippingCity").textContent = city.value;
    });

    document.getElementById('modalButton').addEventListener('click', function() {
      document.getElementById("step_1").scrollIntoView({
        behavior: "smooth",
        block: "start",
        inline: "nearest"
      });
      if (window.modalHandler) {
        modalHandler('runOutModal', false);
      }

    });

  });

  const isMobile = window.matchMedia("(max-width: 768px)").matches;
  // || navigator.userAgent.indexOf("Mobi") > -1

  if (!isMobile) {
    const placeholderElements = document.querySelectorAll('input');
    placeholderElements.forEach(el => {
      if (el.hasAttribute('placeholder')) {
        el.removeAttribute('placeholder');
      }

    })
  }
  </script>


  <!--KOUNT PIXEL-->
  <iframe width=1 height=1 frameborder=0 scrolling=no
    src="https://gdc.sticky.io/pixel.php?t=htm&campaign_id=1&sessionId=<?= $kount_session ?>">
    <img width=1 height=1 src="https://gdc.sticky.io/pixel.php?t=gif&campaign_id=1&sessionId=<?= $kount_session ?>>" />
  </iframe>
  <!--/KOUNT PIXEL-->

  <script>
  var _orderSubTotal = 0;
  var _shippingPrice = 0;
  var _untaxable = <?php echo $untaxableAmount; ?>;

  function solvePrice() {
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

    var productId = document.getElementById('product_id').value;

    // qty 1 = shipping not frameElement

    const billSame = document.getElementById("bill-same");
    const billCountry = document.getElementById("billingCountry");
    const shipCountry = document.getElementById("shippingCountry");
    const shipPrice = document.getElementById("ship-price-display");
    const shipFree = document.getElementById("ship-free");
    const shipPrice2 = document.getElementById("ship-price-display2");
    const shipFree2 = document.getElementById("ship-free2");
    const shipId = document.getElementById("shippingId");
    const shipCost = document.getElementById("shippingCost");
    const upsellIds = document.getElementById("upsellProductIds");
    const finalPrice = document.getElementById('final-price');
    const finalPriceMobile = document.getElementById('total-mobile');
    const finalPriceDesktop = document.getElementById('total-desktop');
    if ((billSame.checked && billingCountry.value == 'US') || (!billSame.checked && shipCountry.value == 'US')) {
      shipPrice.innerText = '$<?= $site['shippingUsCost']; ?>';
      shipPrice2.innerText = '$<?= $site['shippingUsCost']; ?>';
      upsellIds.value = '87,102,265';
      shipId.value = '<?= $site['shippingUs']; ?>';
      shipCost.value = <?= $site['shippingUsCost']; ?>;
    } else {
      shipPrice.innerText = '$<?= $site['shippingIntlCost']; ?>';
      shipPrice2.innerText = '$<?= $site['shippingIntlCost']; ?>';
      shipId.value = '<?= $site['shippingIntl']; ?>';
      shipCost.value = <?= $site['shippingIntlCost']; ?>;
    }
    if (productId !== '952') {
      shipFree.style.display = 'block';
      shipPrice.style.textDecoration = 'line-through';
      shipFree2.style.display = 'block';
      shipPrice2.style.textDecoration = 'line-through';
      shipCost.value = <?= $site['shippingFreeCost']; ?>;
      shipId.value = <?= $site['shippingFree']; ?>;
    } else {
      shipFree2.classList.add('invisible');
    }
    var total = parseFloat(<?php echo $totalPrice; ?>) + parseFloat(shipCost.value);
    finalPrice.innerText = total.toFixed(2);
    finalPriceMobile.innerText = total.toFixed(2);
    finalPriceDesktop.innerText = total.toFixed(2);
  }

  //   input placeholder functionality
  const placeholderElements = document.querySelectorAll('input.input');
  // hide show input labels
  placeholderElements.forEach(pl => {
    if (isMobile) {
      pl.addEventListener('focus', () => {
        pl.previousElementSibling.classList.add('fade-in-element');
        pl.previousElementSibling.classList.remove('invisible');
        pl.placeholder
      })
      pl.addEventListener('blur', () => {
        pl.previousElementSibling.classList.add('invisible');
        pl.previousElementSibling.classList.remove('fade-in-element');
      })
    }
  })

  document.addEventListener("DOMContentLoaded", function() {
    const coupon = document.getElementById('applyCoupon');
    if (coupon) {
      coupon.addEventListener('click', function() {
        var couponText = coupon.value;
        if (couponText.trim().toLowerCase() == 'youtube') {
          document.getElementById('couponCode').value = 'youtube';
          display(document.getElementById('couponSuccess'), true);
          display(document.getElementById('couponError'), false);
          display(document.getElementById('couponField'), false);

          var productId = document.getElementById('product_id');

          switch (productId) {
            case '4':
              productId.value = 373;
              break;
            case '9':
              productId.value = 378;
              break;
            case '5':
              productId.value = 374;
              break;
            case '8':
              productId.value = 377;
              break;
          }
          //if the case is qty1 (either pid 4 or 373) you need to add tax/shipping into the grand total - subtotal looks good - this is in solvePrice() - harness that for this
          document.getElementById('subtotalPrice').textContent = (parseFloat(document.getElementById(
            'subtotalPrice').textContent) * .85).toFixed(2);
          solvePrice();
        } else {
          display(document.getElementById('couponSuccess'), false);
          display(document.getElementById('couponError'), true);
        }
      });
    }

  });

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
  </script>


  <?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>

  <!-- Novus Script -->
  <script type="text/javascript">
  window.onload = function() {
    // Prsitine Config
    let defaultConfig = {
      // class of the parent element where the error/success class is added
      classTo: 'flex',
      errorClass: 'has-danger',
      successClass: 'has-success',
      // class of the parent element where error text element is appended
      errorTextParent: 'flex',
      // type of element to create for the error text
      errorTextTag: 'div',
      // class of the error text element
      errorTextClass: 'text-help text-redish font-medium text-sm'
    };
    var form = document.getElementById("step_1");
    var pristine = new Pristine(form, defaultConfig);
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      var checkout = document.getElementById('next-button');
      checkout.disabled = true;
      checkout.innerText = "Processing...";
      copyBillingInputValue();

      var valid = pristine.validate(); // returns true or false
      if (!valid) {
        var firstError = document.querySelector('.has-danger');
        firstError.scrollIntoView({
          behavior: "smooth",
          block: "center"
        });
        checkout.disabled = false;
        checkout.innerText = "Complete Purchase";
        return false;
      } else {
        form.submit();
      }

    });
  };

  function copyBillingInputValue() {
    // Check to Copy values to billing
    const billingSame = document.getElementById('bill-same');
    isChecked = billingSame.checked;
    if (isChecked) { //checked

      let billingAddress1 = document.getElementById('billingAddress1').value;
      document.getElementById('shippingAddress1').value = billingAddress1;
      let billingAddress2 = document.getElementById('billingAddress2').value;
      document.getElementById('shippingAddress2').value = billingAddress2;
      let billingCity = document.getElementById('billingCity').value;
      document.getElementById('shippingCity').value = billingCity;
      let billingCountry = document.getElementById('billingCountry').value;
      document.getElementById('shippingCountry').value = billingCountry;
      // new event to fire region js function
      document.getElementById('shippingCountry').dispatchEvent(new Event('change'));
      let billingState = document.getElementById('billingState').value;
      document.getElementById('shippingState').value = billingState;
      let billingZip = document.getElementById('billingZip').value;
      document.getElementById('shippingZip').value = billingZip;
    } else { //unchecked
      return;
    }
  }
  </script>
  <!-- END Novus Script -->

  <script language="JavaScript">
  var modalCanOpen = false
  setTimeout(() => {
    modalCanOpen = true
  }, 5000);


  timer1('<?php echo $futureDate; ?>', function(timeRemaining) {
    if (timeRemaining.days == 0 &&
      timeRemaining.hours == 0 &&
      timeRemaining.minutes == 0 &&
      timeRemaining.seconds == 0) {
      //timer expired, do things.
      var clock1 = document.querySelector('#clock1');
      clock1.textContent = "EXPIRED";
      const banner = document.getElementById('countdown-banner');
      banner.style.display = 'none';

      if (modalCanOpen) {
        window.modalHandler('runOutModal', true);
      }
    } else {
      //Update timers on screen
      var clock1 = document.querySelector('#clock1');
      clock1.textContent = zeroPad(timeRemaining.minutes, 2) + ':' + zeroPad(timeRemaining.seconds, 2) + ' ,';
    }
  });

  timer2('<?php echo $shipTodayDate; ?>', function(timeRemaining) {
    if (timeRemaining.days == 0 &&
      timeRemaining.hours == 0 &&
      timeRemaining.minutes == 0 &&
      timeRemaining.seconds == 0) {
      //timer expired, do things.
      var clock2 = document.querySelector('#clock2');
      clock2.textContent = 'Your order will ship first thing tomorrow!';
    } else {
      //Update timers on screen
      var clock2 = document.querySelector('#clock2');
      clock2.textContent = timeRemaining.hours + ' hours, ' + timeRemaining.minutes + ' minutes , ' + timeRemaining
        .seconds + ' seconds ';
    }
  });

  // calculate sales tax
  // if billing country state zip are all filled out
  // or if either of them changes
  // make api call
  // return data to update tax and total
  // if error then message (+ sales tax where applicable)

  const billCountry = document.getElementById('billingCountry');
  const billState = document.getElementById('billingState');
  const billZip = document.getElementById('billingZip');
  var taxPercent = 0;
  var taxAmount = 0;

  billZip.addEventListener('blur', () => {
    if (billZip.value && billZip.value.length == 5) {
      getTaxData();
    }
  })

  billState.addEventListener('change', () => {
    getTaxData();
  })

  billCountry.addEventListener('change', () => {
    getTaxData();
  })

  //  $site['campaign']?>  $shippingId; ?>   $pid; ?>
  // values are updated by bill Country State Zip
  var taxData = {
    "campaign_id": 1,
    "shipping_id": 5,
    "use_tax_provider": 1,
    "products": [{
      "id": "<?= $pid; ?>",
      "quantity": "1"
    }],
    "location": {
      "state": "AL",
      "country": "US",
      "postal_code": 72110
    }
  };

  function getTaxData() {
    var credentials = btoa("<?php echo $site['stickyApi']; ?>:<?php echo $site['stickyPass']; ?>");
    // if (<?= $add1; ?> !== 0) {
    //     let product1 = {"id":"<?= $add1pid; ?>","quantity":"1"};
    //     taxData.products.push(product1);
    // }
    // if (<?= $add2; ?> !== 0) {
    //     let product2 = {"id":"<?= $add2pid; ?>","quantity":"1"};
    //     taxData.products.push(product2);
    // }
    taxData.products = taxData.products.filter((v, i, a) => a.findIndex(v2 => (v2.id === v.id)) === i);
    taxData.location.country = billCountry.value;
    taxData.location.state = billState.value;
    taxData.location.postal_code = Number(billZip.value);
    taxData.shipping_id = <?= $shippingId; ?>;
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
        console.log(data.data);
        if (data.data) {
          var taxData = data.data.tax;
          var taxPercent = taxData.pct ? parseFloat(taxData.pct) : 0;
          var taxAmount = taxData.total ? parseFloat(taxData.total) : 0;
          var shipping = data.data.shipping ? parseFloat(data.data.shipping) : 0;
          var total = parseFloat(data.data.total);
          document.getElementById('tax_pct').value = taxPercent;
          document.getElementById('tax-amt').innerHTML = taxAmount.toFixed(2);
          document.getElementById('tax-amt-m').innerHTML = taxAmount.toFixed(2);
          document.getElementById('tax-pct').innerHTML = taxPercent > 0 ? `(${taxPercent}%)` : '(Estimated)';
          document.getElementById('final-price').innerHTML = (total).toFixed(2);
          document.getElementById('total-mobile').innerHTML = (total).toFixed(2);
          document.getElementById('total-desktop').innerHTML = (total).toFixed(2);

        }
      })
      .catch(function(error) {
        console.log(error);
      });
  }
  </script>



</body>

</html>