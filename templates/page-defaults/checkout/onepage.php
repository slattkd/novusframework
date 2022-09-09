<?php

header("Cache-Control: max-age=300, must-revalidate");

$kount_session = str_replace('.', '', microtime(true));

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


if (isset($_SESSION['a'])) {
    $affid = $_SESSION['a'];
} else {
    $affid = $_COOKIE['affid'] ?? '';
}

$hasCoupon = false;
if (isset($_GET['coupon']) && $_GET['coupon'] == 1) {
    $hasCoupon = true;
}

if (isset($_GET['s1'])) {
    $c1 = $_GET['s1'];
} elseif (isset($_GET['utm_source'])) {
    $c1 = $_GET['utm_source'];
} else {
    $c1 = '';
}

if (isset($_GET['post'])) {
    $c2 = $_GET['post'];
} elseif (isset($_GET['s3'])) {
    $c2 = $_GET['s3'];
} elseif (isset($_GET['utm_medium'])) {
    $c2 = $_GET['utm_medium'];
} else {
    $c2 = '';
}

if (isset($_GET['blog'])) {
    $c3 = $_GET['blog'];
} elseif (isset($_GET['s4'])) {
    $c3 = $_GET['s4'];
} elseif (isset($_GET['utm_campaign'])) {
    $c3 = $_GET['utm_campaign'];
} else {
    $c3 = '';
}

$clickid = $_COOKIE['cidcookie'] ?? '';
if ($clickid == '') {
    $clickid = @$_GET['cid'];
}


if ($_POST) {
    $pid = $_POST['pid'] ?? '952';
    $add1 = $_POST['add1']; //superlube
    $add2 = $_POST['add2'];  //37 Sex Positions
    $_SESSION['pid'] = $pid;
    $_SESSION['add1'] = $add1;
    $_SESSION['add2'] = $add2;
} else {
    $pid = $_SESSION['pid'] ?? '';
    $add1 = $_SESSION['add1'] ?? '';
    $add2 = $_SESSION['add2'] ?? '';
}

if (@$_SESSION['a'] == 1798) {
    $mailer = 1;
    if ($pid == 9) {
        $pid = 451;
    }
}

$_SESSION['pid'] = $pid;

$formID = 1;

$s = 1;
$customLabel = '';
$untaxableAmount = 0;
switch($pid) {
    case 4: //1 month
        $month = '1';
        $price = '69.95';
        $finalPrice = '76.90';
        $ship  = '<p class="price-sum"><span id="shipsum">$6.95</span></p>';
        $shippingId = '3';
        $discount = '61';
        $_SESSION['core'] = '1v';
        break;
    case 5:  //3 month auto
        $month = '3';
        $price = '179.00';
        $finalPrice = '179.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '67';
        $_SESSION['core'] = '3v';
        break;
    case 8:  //3 month one time
        $month = '3';
        $price = '179.00';
        $finalPrice = '179.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '67';
        $_SESSION['core'] = '3';
        break;
    case 662:  //6 month one time
        $month = '6';
        $price = '297.00';
        $finalPrice = '297.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '72';
        $_SESSION['core'] = '6';
        break;
    case 451:  //6 month one time - for mailer
        $month = '6';
        $price = '297.00';
        $finalPrice = '297.00';
        $ship  = '<p class="price-sum"><strike>$7.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '71';
        $_SESSION['core'] = '6';
        break;
    case 254:
        $month = '4';
        $price = '197.00';
        $finalPrice = '197.00';
        $ship  = '<p class="price-sum"><span id="shipsum"><strike>$6.95</strike> <span class="price-free">FREE!</span></span></p>';
        $shippingId = '5';
        $discount = '73';
        $customLabel = 'Buy 3 Get 1 Free';
        $_SESSION['core'] = '3';
        break;
    case 255:
        $month = '7';
        $price = '317.00';
        $finalPrice = '317.00';
        $ship  = '<p class="price-sum"><span id="shipsum"><strike>$6.95</strike> <span class="price-free">FREE!</span></span></p>';
        $shippingId = '5';
        $discount = '75';
        $customLabel = 'Buy 5 Get 2 Free';
        $_SESSION['core'] = '6';
        break;
    case 260:
        $month = '4';
        $price = '197.00';
        $finalPrice = '197.00';
        $ship  = '<p class="price-sum"><span id="shipsum"><strike>$6.95</strike> <span class="price-free">FREE!</span></span></p>';
        $shippingId = '5';
        $discount = '73';
        $customLabel = 'Buy 3 Get 1 Free';
        $_SESSION['core'] = '3';
        break;
    //BOGO - gm974/gm975
    case 952: //v1 - 1x Auto
        $month = '1';
        $price = '69.95';
        $finalPrice = '76.90';
        $ship  = '<p class="price-sum"><span id="shipsum">$6.95</span></p>';
        $shippingId = '3';
        $discount = '61';
        $_SESSION['core'] = '1v';
        $customLabel = 'Buy 1 Get 1 Free';
        break;

    case 953:  //v1 - 3x
        $month = '3';
        $price = '179.00';
        $finalPrice = '179.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '67';
        $_SESSION['core'] = '3';
        $customLabel = 'Buy 3 Get 3 Free';
        break;

    case 954:  //v1 - 3x Auto
        $month = '3';
        $price = '179.00';
        $finalPrice = '179.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '67';
        $_SESSION['core'] = '3v';
        $customLabel = 'Buy 3 Get 3 Free';
        break;

    case 955:  //v1 - 6x
        $month = '6';
        $price = '297.00';
        $finalPrice = '297.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '72';
        $_SESSION['core'] = '6';
        $customLabel = 'Buy 6 Get 6 Free';
        break;

    case 956: //v2 - 1x Auto
        $month = '1';
        $price = '69.95';
        $finalPrice = '76.90';
        $ship  = '<p class="price-sum"><span id="shipsum">$6.95</span></p>';
        $shippingId = '3';
        $discount = '61';
        $_SESSION['core'] = '1v';
        $customLabel = 'Buy 1 Get 1 Free';
        break;

    case 957:  //v2 - 3x
        $month = '3';
        $price = '179.00';
        $finalPrice = '179.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '67';
        $_SESSION['core'] = '3';
        $customLabel = 'Buy 3 Get 1 Free';
        break;

    case 958:  //v2 - 3x Auto
        $month = '3';
        $price = '179.00';
        $finalPrice = '179.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '67';
        $_SESSION['core'] = '3v';
        $customLabel = 'Buy 3 Get 1 Free';
        break;

    case 959:  //v2 - 6x
        $month = '6';
        $price = '297.00';
        $finalPrice = '297.00';
        $ship  = '<p class="price-sum"><strike>$6.95</strike> <span class="price-free">FREE!</span></p>';
        $shippingId = '5';
        $discount = '72';
        $_SESSION['core'] = '6';
        $customLabel = 'Buy 6 Get 3 Free';
        break;

    default:
        $month = '1';
        $price = '69.95';
        $finalPrice = '76.90';
        $ship  = '<p class="price-sum">$6.95</p>';
        $shippingId = '3';
        $discount = '61';
        $_SESSION['core'] = '3';
        break;
}
if (@$_SESSION['a'] == 1798) {
    if ($pid == 4) {
        $shippingId = '12';
        $ship  = '<p class="price-sum"><span id="shipsum"><strike>$7.95</strike> <span class="price-free">FREE!</span></span></p>';
    }
}
switch ($add1) {  //superlube
    case 0:
        $superlube = '';
        $slPrice = '';
        $add1pid = '';
        break;
    case 1:
        $superlube = '<p class="orders">Super Lube</p><hr>';
        $slQty = '1';
        $slTotal = 14.95 * $slQty;
        $slPrice = '<p class="price-sum">$<span id="superlube">' . number_format($slTotal, 2, '.', '') . '</span></p><hr>';
        $add1pid = ',81';
        break;
    case 2:
        $superlube = '<p class="orders">Super Lube</p><hr>';
        $slQty = '2';
        $slTotal = 14.95*$slQty;
        $slPrice = '<p class="price-sum">$<span id="superlube">' . number_format($slTotal, 2, '.', '') . '</span></p><hr>';
        $add1pid = ',82';
        break;
    case 3:
        $superlube = '<p class="orders">Super Lube</p><hr>';
        $slQty = '3';
        $slTotal = 14.95*$slQty;
        $slPrice = '<p class="price-sum">$<span id="superlube">'.number_format($slTotal, 2, '.', '').'</span></p><hr>';
        $add1pid = ',83';
        break;
    default:
        $superlube = '';
        $slPrice = '';
        $add1pid = '';
        break;
}

$productLabel = $month.'/mo Supply';
if ($customLabel != '') $productLabel = $customLabel;

switch ($add2) {   //37 Sex Positions
    case 0:
        $threeSex = '';
        $threePrice = '';
        $thirtyseven = 0;
        $add2pid = '';
        break;
    case 1:
        $threeSex = '<p class="orders">37 Sex Positions</p><hr>';
        $threeTotal = 19.95;
        $threePrice = '<p class="price-sum">$<span id="sexpositions">' . $threeTotal . '</span></p><hr>';
        $thirtyseven = 1;
        $add2pid = ',84';
        $untaxableAmount = 19.95;
        break;
    default:
        $threeSex = '';
        $threePrice = '';
        $thirtyseven = 0;
        $add2pid = '';
        break;
}

//Affiliate Pixel - Optimize Bros
if (@$_SESSION['a'] == '186') {
    header("Content-Length: " . ob_get_length());
    header("Connection: close");
    ob_end_flush();
    ob_flush();
    flush();

    if (isset($_GET['s2']) && $_GET['s2'] != '') {
        $url = 'https://hlrke.voluumtrk2.com/postback?cid=' . $_GET['s2'] . '&txid=GDC-35&et=cart';

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        //curl_setopt($ch,CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

        //execute post
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);
    }
}
//End Affiliate Pixel

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
<html lang="en">
    <head>
        <?php template("includes/header"); ?>
        <title>5GMALE - Secure Checkout</title>


        <style>
            #countdown {
                padding: 0 16px;
                border: none;
            }

            .newbuy {
                color: #fefefe!important;
                font-size: 36px!important;
                line-height: 1.176!important;
                text-decoration: none!important;
                text-transform: uppercase!important;
                font-weight: 700!important;
                letter-spacing: 0!important;
                border-radius: 4em!important;
                padding: 15px 20px!important;
                margin: 1em 0!important;
                background-color: #62b218!important;
                min-width: 400px!important;
                min-height: 81px!important;
                outline: none !important;
                display: flex!important;
                justify-content: center;
                text-align: center;
                margin: 0 auto!important;
                text-align: center!important;
                border: 1px solid #62b218!important;
                margin-bottom: 9px!important;
            }
            .protect-title {
                    font-size: 30px;
                    line-height: 33px;
                    padding-left: 16px;
                    font-weight: bold;
                    color: #348FD4;
                    padding-top: 3px;
            }
            .protection-list p {
                    background: url(/images/blue-check.png) no-repeat;
                    padding-left: 30px;
                    font-size: 18px;
                    color: #000;
                    line-height: 18px;
                    margin-left: 22px;
                    margin-bottom: 13px;
            }
        </style>
    </head>

    <body>
    <div class="flex justify-center flex-nowrap bg-red-700 text-white p-3 text-center" style="position: sticky;top: 0;">
        <div>Your Discount Is Being Held For <span id="countdown-timer" class="ml-2"></span><span id="ms"></span>, Until It Is Given To The Next Man Waiting In Line</div>
    </div>
    <header class="flex justify-center bg-green-500 p-2">
        <div class="flex flex-wrap bg-white rounded px-4 py-2 text-green-500 items-center text-center">
                <div class="flex flex-nowrap items-center mx-auto">
                    <img class="mr-2 mb-1" src="/images/green-lock-icon.gif" width="20px" height="20px"/>
                    <div>SECURE | </div>
                </div>
                <div class="mx-auto ml-1 grow">You Are On A 256-Bit Secure Order Page</div>
            </span>
        </div>
    </header>
    <div class="container-md mx-auto py-8">
        <div class="content px-5">
            <div class="flex justify-center w-full">
                <div class="flex flex-wrap">
                    <img class="mx-auto" src="/images/snm-logo.gif" style="height: 30px"/>
                    <?php if ($csactive == 1) { ?>
                        <div class="flex flex-nowrap mx-auto">
                        <img src="/images/phone.png" alt="phone" style="margin-left: -8px; height: 30px">
                        <span style="font-size: 18px;">Call <a href="tel:1-800-214-5604">1-800-214-5604</a> Now To Speak To A Product Specialist!</span>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="flex justify-center w-full mt-7 text-center">
                <h1 class="text-red-700 text-5xl font-bold condensed">Step 2: This Massive Discount Is Almost Yours</h1>
            </div>
            <div class="text-center mb-3 text-xl">
                <h2 class="condensed" style="margin-top: 0">Just Enter Your Billing Details In The Secure Form Below…</h2>
            </div>
            <div class="flex flex-col w-full mt-7 text-red-500">
                <h3 class="flex justify-center font-extrabold text-3xl mb-2">GET STARTED</h3>
                <div class="flex justify-center"><img src="/images/black-arrow.gif" /></div>
            </div>
            <!-- <section class="flex flex-wrap md:flex-nowrap w-full columns-1 md:columns-2 gap-5 mt-5"> -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-x-3 items-stretch mt-5">

                <div class="w-full px-4 my-4 md:my-0 min-h-full ">
                <div class="border border-black p-4 px-5">
                    <div class="flex justify-center text-2xl font-bold mb-4">YOUR ORDER SUMMARY</div>
                    <ul class="w-full" style="padding-left: 0">
                        <!-- <li class=" flex justify-between items-center text-gray-400 font-bold">
                            <div>PRODUCT</div>
                            <div class="mr-5">PRICE</div>
                        </li> -->
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">5G Male PLUS (<?php echo $productLabel; ?>)</div>
                        <div class="text-lg text-gray-300 font-semibold">$69.95<span class="text-lime-500 font-bold ml-2 invisible">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">5G Enhancement Bible</div>
                        <div class="text-lg text-gray-300 font-semibold"><strike>$19.95</strike> <span class="text-lime-500 font-bold ml-2">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">The Multiplier Method</div>
                        <div class="text-lg text-gray-300 font-semibold"><strike>$49.00</strike> <span class="text-lime-500 font-bold ml-2">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">The XXL Formula</div>
                        <div class="text-lg text-gray-300 font-semibold"><strike>$79.95</strike> <span class="text-lime-500 font-bold ml-2">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">Magic Words That Drive Her Wild</div>
                        <div class="text-lg text-gray-300 font-semibold"><strike>$39.00</strike> <span class="text-lime-500 font-bold ml-2">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">"Text To Sex" Course</div>
                        <div class="text-lg text-gray-300 font-semibold"><strike>$39.00</strike> <span class="text-lime-500 font-bold ml-2">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">Become Supernatural</div>
                        <div class="text-lg text-gray-300 font-semibold"><strike>$39.95</strike> <span class="text-lime-500 font-bold ml-2 invisible">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b flex-wrap py-2">
                        <div class="w-full md:w-2/3">Shipping</div>
                        <div class="flex flex-nowrap text-lg text-gray-300 font-semibold"><?php echo $ship; ?><span class="text-lime-500 font-bold ml-2 invisible mr-1">FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center border-b-0 flex-wrap py-2">
                        <div class="w-full md:w-2/3">Sales Tax <span class="text-sm">(Estimated)</span></div>
                        <div class="text-lg text-gray-300 font-semibold">$0.00 <span class="text-lime-500 font-bold ml-2 invisible">FREE!</span></div>
                        </li>
                        <li class="flex justify-center items-center border-b flex-wrap py-4 mt-4">
                        <div class="text-lg font-semibold"><strong>That's $266.50 of Bonus Gifts,</strong> <span class="text-lime-500 font-bold ml-2">YOURS FREE!</span></div>
                        </li>
                        <li class="flex justify-between items-center flex-wrap py-3">
                        <div class="orders font-bold ">Today You Pay Only</div>
                        <div class=""><strong>$69.95</strong></div>
                        </li>
                        </ul>
                    </div>

                        <div class="flex items-center mb-3">
                            <div class="icon mr-3">
                                <img src="/images/truch-icon-green.gif" alt="truck" style="object-fit: contain; width: 60px; height: 60px;">
                            </div>
                            <div class="text-lime-500 mt-4">
                            <p class="delivery-truck" style="color: #40a900!important;">

                             <script language="JavaScript">
                                    TargetDate = "<?php echo date("m/d/Y"); ?> 04:00 PM UTC-0500 ";
                                    BackColor = "transparent";
                                    ForeColor = "#40a900";
                                    CountActive = true;
                                    CountStepper = -1;
                                    LeadingZero = true;
                                    DisplayFormat ="Order In The Next %%H%% Hours, %%M%% Minutes, %%S%% Seconds";
                                    FinishMessage = "<strong>After 4PM (EST)</strong>";
                                 </script>
                                 <script language="JavaScript" src="//scripts.hashemian.com/js/countdown.js"></script>

                             To Be Shipped <strong><?php if (date('H') >= 16) { echo 'First Thing 9AM Tomorrow!';}else{echo 'Today!';}?></strong></p>
                            </div>
                        </div>
                        <div class="flex items-center border-t">
                            <div class="icon mr-3">
                                <img src="/images/90-day-green.gif" alt="90 day seal" style="object-fit: contain; width: 60px; height: 60px;">
                            </div>
                            <div class="text-lime-500 mt-4" style="color: #40a900!important;">
                            Try 5G Male PLUS <strong>Risk FREE</strong> Until <strong>Thursday, November 10th, 2022</strong> With Our 90-Day Guarantee
                            </div>
                        </div>

                        <div class="flex flex-col w-full text-center text-2xl my-3 condensed">
                        Your Purchase Today Is Fully Protected By Our
                        </br>
                        <strong> 90-DAY MONEY BACK GUARANTEE!</strong>
                        </div>

                    <div class="w-full bg-yellow-100 border p-5 my-5">
                        <div class="flex flex-wrap-reverse lg:flex-nowrap">
                            <div class="flex flex-col pr-5">
                                <p class="guarantee-txts">I understand that I have 90 days - thats <strong>THREE FULL MONTHS</strong> - to try out 5G Male PLUS and make sure I love it. And any time I want, I can call support at <strong>1-800-251-9316</strong> or email <strong>support@5gmale.com</strong>, 24 hours a day, 7 days a week to request a refund, with no questions asked and no hassles!<br><strong id="guarantee">GUARANTEED BY:</strong></p>
                                <img src="/images/ryan-sign.gif" alt="ryan signature" style="max-width: 200px;">
                            </div>
                            <div class="flex flex-col justify-cente mx-auto mb-4">
                            <img src="/images/90-day-icon.gif" alt="90 day guarantee" style="width: auto; max-width: 200px;">
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <p class="ryan-txt">Ryan Masters, Head of Research at Supernatural Man LLC</p>
                        </div>
                    </div>
                    <div class="w-auto pl-5  my-5 mx-auto">
                        <div class="flex flex-col w-auto protection-section">
                            <div class="flex mb-2" style="width:58px; height: auto">
                                    <img src="/images/blue-shield.gif" style="width: 58px;height: 70px;">
                                <p class="protect-title">BUYER<br>PROTECTION</p>
                            </div>

                            <div class="protection-list" style="clear:both;">
                                <p class="font-bold">Fast Shipping <br><span class="text-sm text-gray-400 font-normal">Your order ships ASAP with tracking info</span></p>
                                <p class="font-bold">24/7 Live Phone Help <br><span class="text-sm text-gray-400 font-normal">Talk to a real, live person any time</span></p>
                                <p class="font-bold">Billed As SNM8002519316 <br><span class="text-sm text-gray-400 font-normal">Discreet billing for your privacy</span></p>
                                <p class="font-bold">Privacy Guaranteed <br><span class="text-sm text-gray-400 font-normal">Your information is never shared</span></p>
                                <p class="last-list font-bold">Lowest Price Guaranteed <br><span class="text-sm text-gray-400 font-normal">You will never see this at a lower price</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full my-4 md:my-0">

                    <div class="flex flex-col bg-gray-100 border px-4">
                    <div class="flex justify-center text-2xl font-semibold my-4">Enter <span class="underline font-bold mx-2">BILLING</span> Address</div>
                        <?php
                        if (isset($_SESSION['formerrors'])) {
                            ?>
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative" role="alert">
                              <strong class="font-bold">Whoops, something didn't go right - Error Code: <?php echo $_SESSION['llerrorcode'] ?></strong>
                              <span class="block sm:inline"><?php echo $_SESSION['formError'] ?></span>
                            </div>
                        <?php } ?>
                        <form action="/process.php<?php echo trim(@$querystring); ?>"  method='POST' onSubmit="getDate();" id="step_1" class="col-sm-12">
                            <input type="hidden" name="previous_page" value="checkout/order">
                            <input type="hidden" name="current_page" value="/checkout/onepage">
                            <input type="hidden" name="next_page" value="/up1/upsell-6-month-supply">
                            <input type="hidden" name="product_id" id='product_id'  value="<?php echo $pid; ?>">
                            <input type="hidden" name="form_id" value="step_<?php echo $s; ?>">
                            <input type="hidden" name="step" value="<?php echo $s; ?>">
                            <input type="hidden" name="AFFID" value="<?php echo $affid; ?>">
                            <input type="hidden" name="AFID" value="<?php echo @$_SESSION['vwovar']; ?>">
                            <input type="hidden" name="C1" value="<?php echo @$c1; ?>">
                            <input type="hidden" name="C2" value="<?php echo @$c2; ?>">
                            <input type="hidden" name="C3" value="<?php echo @$c3; ?>">
                            <input type="hidden" name="utm_source" value="<?php echo @$_GET['utm_source']; ?>">
                            <input type="hidden" name="utm_medium" value="<?php echo @$_GET['utm_medium']; ?>">
                            <input type="hidden" name="utm_campaign" value="<?php echo @$_GET['utm_campaign']; ?>">
                            <input type="hidden" name="utm_term" value="<?php echo @$_GET['utm_term']; ?>">
                            <input type="hidden" name="utm_content" value="<?php echo @$_GET['utm_content']; ?>">
                            <input type="hidden" name="click_id" value="<?php echo @$clickid; ?>">
                            <input type="hidden" name="notes" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>">
                            <input type="hidden" name="shipping_id" id="shipping_id" value="<?php echo $shippingId; ?>">
                            <input type="hidden" name="newform" value="yes">
                            <input type="hidden" name="upsellProductIds" id="upsellProductIds" value="87,102,265,142<?php echo $add1pid;?><?php echo $add2pid;?>">
                            <input type="hidden" name="upsellCount" value="1">
                            <input type="hidden" name="customer_time" id="customer_time"  value="">
                            <input type="hidden" name="eftid" id="eftid"  value="">
                            <input type="hidden" name="sessionId" value="<?php echo $kount_session; ?>">
                            <input id="fid" name="fid" type="hidden" value="<?php echo $formID; ?>" class="hidden" />
                            <input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo $site['campaign'] ?>">
                            <input type="hidden" name="37positions" id="37positions" value="<?php echo $thirtyseven; ?>">

                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="FirstName" class="text-sm">First Name:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" type="text" required name="first_name" id="FirstName" value="<?php echo $_SESSION["firstname"] ?? '' ?>">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="LastName" class="text-sm">Last Name:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" type="text"  name="last_name" id="LastName" required value="<?php echo $_SESSION["lastname"] ?? '' ?>">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="Email" class="text-sm">Email:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" type="email" required name="email" id="Email" value="<?php echo $_SESSION["customerEmail"] ?? '' ?>">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="Phone" class="text-sm">Phone:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" type="tel" required name="phone" id="Phone" value="<?php echo $_SESSION["phone"] ?? '' ?>">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="StreetAddress1" class="text-sm">Address:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" name="billingAddress1" required type="text" id="StreetAddress1" value="<?php echo $_SESSION["billingaddress1"] ?? '' ?>">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="FirstName" class="text-sm">Address Cont'd:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" name="billingAddress2" type="text" id="StreetAddress2" value="<?php echo $_SESSION["billingaddress2"] ?? '' ?>">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="FirstName" class="text-sm">City:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" name="billingCity" type="text" required id="City" value="<?php echo $_SESSION["billingcity"] ?? '' ?>" onchange="">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="FirstName" class="text-sm">State/Province:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                                <select class="inf-select default-input sale-text w-full px-1 py-2" required id="State" name="billingState" data-selected="<?php echo @$_SESSION["shippingstate"]; ?>"></select>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="FirstName" class="text-sm">Country:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                                <select class="inf-select default-input sale-text w-full px-1 py-2" required id="Country" data-toggle-element="State" name="billingCountry" onchange="solveprice()">
                                    <?php template("includes/billingCountries"); ?>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="PostalCode" class="text-sm">Postal Code:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" name="billingZip" type="text" required id="PostalCode" maxlength="12" value="<?php echo @$_SESSION['billingpostal']; ?>" onchange="">
                            </div>
                        </div>
                        <div class="flex flex-col w-full my-5">
                            <p class="text-center text-sm">Certified As Secure &amp; Trustworthy By The Leading Companies:</p>
                            <div class="flex">
                                <img class="mx-auto w-full" src="/images/creditcards2.png" alt="credit cards" style="max-width: 200px;">
                            </div>
                            <p class="text-center text-sm mt-2">Credit Card charged as <strong>"SUPERNATURAL MAN"</strong></p>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="FirstName" class="text-sm">Card Number:</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" type="text" name="creditCardNumber" required id="cc_no" value="" onchange="" autocomplete="off">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-full w-1/3">
                                <label for="FirstName" class="text-sm">Exp Date:</label>
                            </div>
                            <div class="w-full md:w-2/3 ">
                                <div class="w-full columns-2 gap-3">
                                    <div class="w-full border">
                                    <!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                                        <select class="w-full px-1 py-2" required id="cc_exp_mo" name="expmonth">
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
                                    <div class="w-full border">
                                    <!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                                    <select class="w-full px-1 py-2" required id="cc_exp_yr" name="expyear">
                                            <option value="22">2022</option>
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

                            </div>
                        </div>
                        <div class="flex flex-wrap items-center mb-4">
                            <div class="w-1/3">
                                <label for="FirstName" class="text-sm">CVV(<a class="text-xs" href="https://5gmale.com/step/cardHelp.html" target="_blank">what's this?</a> ):</label>
                            </div>
                            <div class="w-full md:w-2/3 border">
                                <input class="w-full px-1 py-2" required type="text" name="cvv" id="cvv" value="" onchange="">
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center my-4 text-center justify-center">
                                    <p class="text-2xl font-semibold" style="margin-bottom: 0.5rem">Enter Your <span class="underline font-bold mx-2">SHIPPING</span> Address</p>
                                    <div class="flex flex-nowrap justify-center">
                                        <input type="checkbox" checked name="billingSameAsShipping" id="bill_same" onchange="solveprice()"/>
                                        <label class="ml-2">Shipping address same as billing address?</label>
                                    </div>

                        </div>
                        <section>
                        <div class="shipping-address" style="display:none;">

                                <div class="flex flex-wrap items-center mb-4">
                                    <div class="w-full w-1/3">
                                        <label for="Address2Street1" class="text-sm">Address:</label>
                                    </div>
                                    <div class="w-full md:w-2/3 border">
                                        <input class="w-full px-1 py-2" name="shippingAddress1" type="text" id="Address2Street1" value="<?php echo @$_SESSION["shippingaddress1"]; ?>">
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center mb-4">
                                    <div class="w-full w-1/3">
                                        <label for="Address2Street2" class="text-sm">Address Cont'd:</label>
                                    </div>
                                    <div class="w-full md:w-2/3 border">
                                        <input class="w-full px-1 py-2" name="shippingAddress2" type="text" id="Address2Street2" value="<?php echo @$_SESSION["shippingaddress2"]; ?>">
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center mb-4">
                                    <div class="w-full w-1/3">
                                        <label for="City2" class="text-sm">City:</label>
                                    </div>
                                    <div class="w-full md:w-2/3 border">
                                        <input class="w-full px-1 py-2" name="shippingCity" type="text" id="City2" size="25" value="<?php echo @$_SESSION["shippingcity"]; ?>">
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center mb-4">
                                    <div class="w-full w-1/3">
                                        <label for="State2" class="text-sm">State/Province:</label>
                                    </div>
                                    <div class="w-full md:w-2/3 border">
                                        <!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                                        <select class="inf-select default-input sale-text w-full px-1 py-2" id="State2" name="shippingState" data-selected="<?php echo @$_SESSION["shippingstate"]; ?>"></select>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center mb-4">
                                    <div class="w-full w-1/3">
                                        <label for="Country2" class="text-sm">Country:</label>
                                    </div>
                                    <div class="w-full md:w-2/3 border">
                                        <!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
                                        <select class="inf-select default-input sale-text w-full px-1 py-2" id="Country2" data-toggle-element="State2" name="shippingCountry" onchange="solveprice()">
                                            meh?
                                            <?php template("includes/billingCountries"); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center mb-4">
                                    <div class="w-full w-1/3">
                                        <label for="PostalCode2" class="text-sm">Postal Code:</label>
                                    </div>
                                    <div class="w-full md:w-2/3 border">
                                        <input class="w-full px-1 py-2" type="text" name="shippingZip" type="text" id="PostalCode2" value="<?php echo @$_SESSION["shippingzip"]; ?>">
                                    </div>
                                </div>

                        </div>
                        </section>
                        <section>
                            <div class="flex flex-col w-full items-center py-4">
                                    <div id="totalPricePay" class="flex w-full items-center justify-around">
                                            <div class="text-xl font-semibold">You Pay Just</div>
                                            <div class="flex items-center">
                                                <div id="totalPricePayValue" class="text-xl font-semibold mr-2">$<?php echo number_format($finalTotalPrice, 2, '.', ''); ?></div>
                                                <div id="totalDiscount">(<?php echo $discount; ?>% OFF)</div>
                                            </div>

                                    </div>

                                    <p id="terms" class="text-sm text-center text-gray-400 mb-2 mt-4">By clicking the order button I accept the <a target="_blank" class="underline" href="/step/terms.html">Terms and Conditions</a></p>
                                    <div class="flex w-full justify-center">
                                        <button name="next-button" id="next-button" type="submit" class="w-full newbuy text-3xl" value="COMPLETE PURCHASE">Complete Purchase</button>
                                    </div>

                                    <div class="flex w-full justify-center items-center text-center" srtyle="color:#3fa900">
                                        <div><img src="/images/lock-green-step2.png" alt="lock icon"></div>
                                        <div class="ml-2 text-green-500 text-2xl"> 256-BIT Secure Transaction</div>
                                    </div>
                                    <div class="flex w-full text-center justify-center mt-3">
                                        <p class="bit-secure-txt">Please click the order button <strong>ONLY ONCE</strong><br> and do not refresh the page</p>
                                    </div>
                                    <div id="sales-tax-notice" class="text-center">
                                            * NY sales tax up to 8.875% based on the county of the ship-to address
                                    </div>
                            </div>
                        </section>
						</form>
                    </div>
                    <div class="flex justify-center my-4">
                        <div class="flex w-full">
                            <img class="w-full" src="/images/norton-guarantee-large.gif" alt="Norton Shopping Guarantee">
                        </div>
                    </div>
                    <div class="flex justify-center my-4">
                        <div class="flex w-2/3">
                            <img class="w-full" src="https://flora-spring.s3.amazonaws.com/BBB-Icon.jpg" alt="BBB">
                        </div>
                    </div>

                    <div class="flex justify-center my-2">
                        <div class="flex px-4 text-center font-semibold">
                            <p>Top Rated By The Better Business Bureau!</p>
                        </div>
                    </div>
                    <div class="flex justify-center my-2">
                        <div class="flex px-4 text-center text-sm">
                            <p>Buy with confidence. See real, positive reviews from customers who love 5G Male. We’re top-rated with over 30,000 happy customers around the world!</p>
                        </div>
                    </div>



                </div>
            </section>

            <div class="flex flex-col w-full mt-11">
                <p class="text-center">Certified As Secure &amp; Trustworthy By The Leading Companies:</p>
                <div class="flex">
                    <img class="mx-auto w-full" src="/images/security-icons.gif" style="max-width: 800px;">
                </div>
            </div>

            <div class="flex justify-center flex-wrap mb-4 text-center mt-11">
                    <a class="mx-3" style="color:#000;text-decoration:underline;" class="fancybox fancybox.ajax" href="terms.php">Terms and Conditions</a> &nbsp;
                    <a class="mx-3" style="color:#000;text-decoration:underline;" class="fancybox fancybox.ajax" href="privacy.php">Privacy Policy</a> &nbsp;
                    <a class="mx-3" href="#" style="color:#000;text-decoration:underline;" onclick="return (function(){zE.activate();return false;})()">Contact Us</a>
            </div>
        </div>
    </div>



    </body>

        <!-- Novus Script -->
        <script type="text/javascript">
            window.onload = function () {



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
                    errorTextClass: 'text-help text-red-600 font-medium text-sm'
                };

                var form = document.getElementById("step_1");
                var pristine = new Pristine(form, defaultConfig);

                form.addEventListener('submit', function (e) {
                    // disable checkout button
                    var checkout = document.getElementById('next-button');
                    checkout.disabled = true;
                    checkout.innerText = "Confirming Payment...";

                    // Check to copy values
                    copyBillingInputValue();

                    var valid = pristine.validate(); // returns true or false

                    if(!pristine.validate()){
                      e.preventDefault();
                      var firstError = document.querySelector('.has-danger');
                      firstError.scrollIntoView({behavior: "smooth", block: "end"});
                      checkout.disabled = false;
                      checkout.innerText = "Complete Purchase";
                    }




                    //var age = document.querySelector('input[name="age"]:checked').value;
                    //var weeklysex = document.querySelector('input[name="weeklysex"]:checked').value;
                    //var stayhard = document.querySelector('input[name="stayhard"]:checked').value;
                    //sessionStorage.setItem("customer_email", $(this).val());
                });
            };
        </script>

        <script>
        function copyBillingInputValue() {
            // Check to Copy values to billing
            var isBillingSame = document.getElementById('bill_same');

            var isChecked = isBillingSame.checked;
              if(isChecked){ //checked
                 let billingAddress1 = document.getElementById('StreetAddress1').value;
                 document.getElementById('Address2Street1').value = billingAddress1;
                 let billingAddress2 = document.getElementById('StreetAddress2').value;
                 document.getElementById('Address2Street2').value = billingAddress2;
                 let billingCity = document.getElementById('City').value;
                 document.getElementById('City2').value = billingCity;
                 let billingState = document.getElementById('State').value;
                 document.getElementById('State2').value = billingState;
                 let billingCountry = document.getElementById('Country').value;
                 document.getElementById('Country2').value = billingCountry;
                 let billingPostal = document.getElementById('PostalCode').value;
                 document.getElementById('PostalCode2').value = billingPostal;
              }else{ //unchecked

              }
        }
        </script>
        <!-- END Novus Script -->



      <script>
        var hasScrolledToError = false;
          $( document ).ready(function() {
            solveprice();
            //setupFormValidation();

            //show or hide shipping address
            $( "#bill-same" ).change(function() {
                if(document.getElementById('bill-same').checked){
                    $('.shipping-address').hide();
                } else {
                    $('.shipping-address').show();
                }
            });

            $(".fancybox").fancybox({
                'width': 560,
                'height': 340,
                'autoDimensions': false,
                'margin': [60, 20, 20, 20]
            });

            $("#City").keyup(function() {
                $("#order-city").text($("#City").val());
            });

            //floating red bar
            $(window).scroll(function(){
                if ($(this).scrollTop() > 50) {
                $('.sticky-timer').addClass('scroll');
                } else {
                $('.sticky-timer').removeClass('scroll');
                }
            });

            $('#modalbutton').on('click', function(){
                $('html,body').animate({
                    scrollTop: $("#step_1").offset().top},
                    'slow');
                // $('#runOutModal').modal('hide');

                if(window.modalHandler) {
                    modalHandler('timerModal', false);
                }
            });

            // When the country changes, state is changed to/from a textbox / dropdown and events must be re-bound
            $("#Country").change(function() { setTimeout(rebindStateEvents, 100); });
            $("#Country2").change(function() { setTimeout(rebindStateEvents, 100); });
            setTimeout(rebindStateEvents, 100);
        });

        function rebindStateEvents() {
            $("#State").change(function() { calculateTax(); });
            $("#State2").change(function() { calculateTax(); });
             calculateTax();
        }

        function calculateTax() {
           // let estRate = 0.08875;
            let estRate = 0;
            let state = ($("#bill-same").prop('checked') === true) ? $("#State").val() : $("#State2").val();
            let country = ($("#bill-same").prop('checked') === true) ? $("#Country").val() : $("#Country2").val();

            if(state == "NY" && country == "US") {

                let taxTotal = parseFloat(((_orderSubTotal-_untaxable) * estRate)).toFixed(2);
                let totalPrice = (parseFloat(_orderSubTotal) + parseFloat(taxTotal)).toFixed(2);
                $("#sales-tax-value").text("$" + (taxTotal/1).toFixed(2) + "*");
                $("#totalsum").text(totalPrice);
                $("#totalPricePayValue").text(totalPrice);

               // $("#sales-tax-notice").show();
            } else {
                $("#sales-tax-value").text("$0.00");
                let totalPrice = ((_orderSubTotal)/1).toFixed(2);
                $("#totalsum").text(totalPrice);
                $("#totalPricePayValue").text(totalPrice);

                $("#sales-tax-notice").hide();
            }
        }



        function getDate() {
            var now     = new Date();
            var year    = now.getFullYear();
            var month   = now.getMonth()+1;
            var day     = now.getDate();
            var hour    = now.getHours();
            var minute  = now.getMinutes();
            var second  = now.getSeconds();

            if ( month.toString().length == 1 ) {
                var month = '0' + month;
            }
            if ( day.toString().length == 1 ) {
                var day = '0' + day;
            }
            if ( hour.toString().length == 1 ) {
                var hour = '0' + hour;
            }
            if ( minute.toString().length == 1 ) {
                var minute = '0' + minute;
            }
            if ( second.toString().length == 1 ) {
                var second = '0' + second;
            }
            var dateTime = year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second;
            document.getElementById('customer_time').value = dateTime;
        }


    </script>

    <!-- countdown timer -->
    <script>

    var WARNING_THRESHOLD = 1 * 60 * 1000; //1 minute (in milliseconds)

    function doStart() {
        // todo: get this to start from time left from other page
        var id = "countdown-timer";
        var i = 900 - <?php echo $timerDelay; ?>; //duration in seconds (10 minutes)

        ActivateCountDown(id, i);
    }

    function ActivateCountDown(strContainerID, initialValue) {
        var _countDownContainer = document.getElementById(strContainerID);
        var $_countDownContainer;

        if (!_countDownContainer) {
            console.log("count down error: container does not exist: " + strContainerID +
                    "\nmake sure html element with this ID exists");
        } else {
            $_countDownContainer = $(document.getElementById(strContainerID));
            //the ATimer below works with time values in milliseconds
            //the "20" will update display ever 20 milliseconds, as fast as screen refreshes
                    $_countDownContainer.removeClass("warn");
            var timerID = new ATimer(initialValue * 1000, 20, CountDownComplete, CountDownTick);
            timerID.start();
        }

        function CountDownComplete() {
            //alert("Your time is up!");
            // $('#noise').get(0).pause();
            // $("#runOutModal").modal('show');
            if (window.modalHandler) {
                modalHandler('timerModal', true);
            }
            _countDownContainer.innerHTML = "00:00";
        }

        var flag = 'no';

        function CountDownTick(remaining) {
           //console.log(flag);
            if(flag == 'no'){
            if (remaining < WARNING_THRESHOLD) {
                //$("#runOutModal").modal('show');
                // document.getElementById('noise').play();
                flag = 'yes';
                //console.log(flag);
            }}
            SetCountdownText(remaining);
        }

        function SetCountdownText(remaining) {
            _countDownContainer.innerHTML = remaining.millisecondsToHundredthsString();
        }
    }

    //(2) Helpers
    Number.prototype.millisecondsToHundredthsString = function () {
        /// <summary>Convert number of milliseconds into text with format MM:SS:hh</summary>
        /// <param name="this">Number of milliseconds</param>
        /// <returns type="Text" >Duration, text in format MM:SS:hh</<returns>
        var partMultipliers = [{ d: 60000, p: 100 }, { d: 1000, p: 100 }];
        var remainder = parseInt(this);
        return partMultipliers.reduce(function (prev, m, idx) {
            var quotient = Math.floor(remainder / m.d); //m.d is divisor
            remainder -= (quotient * m.d);
            return prev + ((idx == 0) ? "" : ":") + (quotient + m.p).toString().substr(1);  //m.p is a framer
        }, "");
    };

    String.prototype.toMilliseconds = function () {
        /// <summary>Convert from string to number of milliseconds</summary>
        /// <param name="this">Duration, text in format MM:SS:mmm (mmm is milliseconds)</param>
        /// <returns type="Number">Number of milliseconds</returns>
        var partMultipliers = [1, 1000];
        var parts = this.split(":").reverse();
        return milliseconds = parts.reduce(function (prev, part, idx) {
            var res = (parseInt(part) * partMultipliers[idx]);
            return prev + res;
        }, 0);
    };

    //(3) Custom "ATimer" Class
    function ATimer(milliseconds, optionalPeriod, optionalCallback, optionalUpdateCallback) {
        //ensure this runs as a new instance upon each instantiation
        if (typeof ATimer != "function") return new ATimer.call(this, arguments);

        //PRIVATE properties...
        var timerInstance, duration = milliseconds, period = 20, count = 0, chunks, completer, updater;
        var self = this;
        if (typeof optionalPeriod == "number") {
            period = optionalPeriod;
            completer = optionalCallback;
            updater = optionalUpdateCallback;
        } else {
            completer = arguments[1];
            updater = arguments[2];
        }
        chunks = Math.floor(duration / period);

        //PRIVATE functions...
        function chunkComplete() {
            if (count++ >= chunks) {
                if (completer) completer.call(self, chunks, count); //do callback, if supplied
            } else {
                var curr = new Date().getTime();
                var diff = (curr - start) - (count * period);
                var remaining = Math.max(0, (duration - (curr - start)));
                timerInstance = window.setTimeout(chunkComplete, (period - diff));
                if (updater) updater.call(self, remaining); //do callback, if supplied
            }
        }
        return {

            //PUBLIC functions...
            start: function () {
                timerInstance = window.setTimeout(chunkComplete, period);
                start = new Date().getTime();
            },
            cancel: function () {
                if (timerInstance) window.clearTimeout(timerInstance);
            }
        };
    }

    if(sessionStorage.getItem("is_timer_complete") == "yes") {
            document.getElementById("countdown-timer").innerHTML = "00:00";
            // $("#runOutModal").modal('show');
            modalHandler('timerModal', true);
    } else {
        doStart();
    }

    </script>

<!--KOUNT PIXEL-->
<iframe width=1 height=1 frameborder=0 scrolling=no src="https://gdc.sticky.io/pixel.php?t=htm&campaign_id=1&sessionId=<?=$kount_session?>">
    <img width=1 height=1 src="https://gdc.sticky.io/pixel.php?t=gif&campaign_id=1&sessionId=<?=$kount_session?>>"/>
</iframe>

<!--/KOUNT PIXEL-->
    <script src="/js/regions.js"></script>
    <script>
        var _orderSubTotal = 0;
        var _shippingPrice = 0;
        var _untaxable = <?php echo $untaxableAmount;?>;

        function solveprice(){
            var subtotal = parseFloat($('#subtotalPrice').text()).toFixed(2);
            var superLube = 0;
            if ($('#superlube').length)
            {
                superLube = parseFloat($('#superlube').text());
            }
            var sexPositions = 0;
            if ($('#sexpositions').length)
            {
                sexPositions = parseFloat($('#sexpositions').text());
            }
            var shippingCost = 0;

            var productId = $('#product-id').val();
            // console.log('productid: ' + productId);
            if (productId == 4 || productId == 373 || productId == 952 || productId == 956) {
                if($("#bill-same").prop('checked') == true){
                    if($("#Country").val() != 'US'){
                        $("#shipsum").text("$14.95");
                        $("#shippingId").val("4");
                        $("#upsellProductIds").val("87,102,265");
                        _shippingPrice = 14.95;
                    }else{
                        $("#shipsum").html("$6.95");
                        $("#shippingId").val("3");
                        _shippingPrice = 6.95;
                    }
                }else{
                    if($("#Country2").val() != 'US'){
                        $("#shipsum").text("$14.95");
                        $("#shippingId").val("4");
                        $("#upsellProductIds").val("87,102,265");
                        _shippingPrice = 14.95;
                    }else{
                       $("#shipsum").html("$6.95");
                       $("#shippingId").val("3");
                       _shippingPrice = 6.95;
                    }
                }
                shippingCost = _shippingPrice;
            }

        _orderSubTotal = (parseFloat(subtotal) + parseFloat(sexPositions) + parseFloat(superLube) + parseFloat(shippingCost)).toFixed(2);

         if (productId == 373 || productId == 5 || productId == 374 || productId == 8 || productId == 377 || productId == 9 || productId == 378) {
          if($("#bill-same").prop('checked') == true){
               if($("#Country").val() != 'US'){

                }else{
                }
            }else{

                if($("#Country2").val() != 'US'){
                }else{
                }
            }
        }

           }
       </script>



       <script>

    </script>

    <script>
    //TODO Setup Exit intent for Checkout
    var specialOffer = 'alt-checkout-5gm.php<?php echo trim($querystring); ?>';
    </script>

<script type="text/javascript">

    $(document).on('ready', function(){
        $('#applyCoupon').on('click', function(){
            var couponText = $('#couponCode').val();
            if (couponText.trim().toLowerCase() == 'youtube')
            {
                $('#couponCode').val('youtube');
                $('#couponSuccess').show();
                $('#couponError').hide();
                $('#couponField').hide();
                var productId = $('#product-id').val();

                switch(productId)
                {
                    case '4':
                        $('#product-id').val(373);
                        break;
                    case '9':
                        $('#product-id').val(378);
                        break;
                    case '5':
                        $('#product-id').val(374);
                        break;
                    case '8':
                        $('#product-id').val(377);
                        break;
                }
                //if the case is qty1 (either pid 4 or 373) you need to add tax/shipping into the grand total - subtotal looks good - this is in solveprice() - harness that for this
                $('#subtotalPrice').text((parseFloat($('#subtotalPrice').text()) * .85).toFixed(2));
                solveprice();
                calculateTax();
            }

            else
            {
                $('#couponSuccess').hide();
                $('#couponError').show();
            }
        });
    });

</script>


<!-- Start of Pineapple Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="revivalpointllc.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
<!-- End of Pineapple Zendesk Widget script -->


<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', 'debug');
} ?>
</html>