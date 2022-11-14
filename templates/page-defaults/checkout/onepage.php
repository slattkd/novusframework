<?php
error_reporting(0);

$nextlink = '../process.php' . $querystring;
$next_page = '/up1.php';
$kount_session = str_replace('.', '', microtime(true));
$prodtype = 6;


$dateInFuture = strtotime("2022-11-13");
$dateString = intval($dateInFuture);
$futureDate = date("m/d/Y", $dateString);
$displayDeadline = date("F j, Y, g:i a", $dateString);

header("Cache-Control: max-age=300, must-revalidate");
date_default_timezone_set("America/New_York");

$querystring = "";
if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
        $querystring = "?" . $_SERVER['QUERY_STRING'];
}

$kount_session = str_replace('.', '', microtime(true));

$_SESSION['o'] = $_GET['o'];
$_SESSION['r'] = $_GET['r'];
$_SESSION['affid'] = $_GET['a'];
$_SESSION['blog'] = $_GET['blog'];
$_SESSION['post'] = $_GET['post'];

$_SESSION['s'] = $_GET['s'];
$_SESSION['s1'] = $_GET['s1'];
$_SESSION['s2'] = $_GET['s2'];
$_SESSION['s3'] = $_GET['s3'];
$_SESSION['s4'] = $_GET['s4'];

if (isset($_GET['a'])) {
	$affid = $_GET['a'];
} else {
	$affid = $_COOKIE['affid'];
}

$hasCoupon = false;
if (isset($_GET['coupon']) && $_GET['coupon'] == 1) {
	$hasCoupon = true;
}

if (isset($_GET['s1'])) {
	$c1 = $_GET['s1'];
} else if (isset($_GET['utm_source'])) {
	$c1 = $_GET['utm_source'];
} else {
	$c1 = '';
}

if (isset($_GET['post'])) {
	$c2 = $_GET['post'];
} else if (isset($_GET['s3'])) {
	$c2 = $_GET['s3'];
} else if (isset($_GET['utm_medium'])) {
	$c2 = $_GET['utm_medium'];
} else {
	$c2 = '';
}

if (isset($_GET['blog'])) {
	$c3 = $_GET['blog'];
} else if (isset($_GET['s4'])) {
	$c3 = $_GET['s4'];
} else if (isset($_GET['utm_campaign'])) {
	$c3 = $_GET['utm_campaign'];
} else {
	$c3 = '';
}

if ($_POST) {
	$pid = $_POST['pid'];
	$add1 = $_POST['add1']; //superlube
	$add2 = $_POST['add2'];  //37 Sex Positions
	$_SESSION['pid'] = $pid;
	$_SESSION['add1'] = $add1;
	$_SESSION['add2'] = $add2;
} else {
	$pid = $_SESSION['pid'];
	$add1 = $_SESSION['add1'];
	$add2 = $_SESSION['add2'];
}

$_SESSION['pid'] = $pid;

$formID = 1;


$s = 1;
$customLabel = '';
$untaxableAmount = 0;
switch ($pid) {
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

$totalPrice = intval($price) + intval($ship);

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
		$slTotal = 14.95 * $slQty;
		$slPrice = '<p class="price-sum">$<span id="superlube">' . number_format($slTotal, 2, '.', '') . '</span></p><hr>';
		$add1pid = ',82';
		break;
	case 3:
		$superlube = '<p class="orders">Super Lube</p><hr>';
		$slQty = '3';
		$slTotal = 14.95 * $slQty;
		$slPrice = '<p class="price-sum">$<span id="superlube">' . number_format($slTotal, 2, '.', '') . '</span></p><hr>';
		$add1pid = ',83';
		break;
	default:
		$superlube = '';
		$slPrice = '';
		$add1pid = '';
		break;
}

$productLabel = $month . '/mo Supply';
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
</head>

<style>
body {
	background-color: white;
}
    .condensed {
				font-family: 'Open Sans Condensed', sans-serif;
			}
			#btn-one, #btn-two, #btn-three, #btn-four {
				font-family: HelveticaNeueLTStd-HvCnO,sans-serif;
				background: #ffffce;
				background: -moz-linear-gradient(top,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
				background: -webkit-linear-gradient(top,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
				background: linear-gradient(to bottom,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
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
				cursor: pointer!important;
		}
		.protection-list p {
    	margin-left: 0;
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
			background: linear-gradient(to right, rgba(252,244,173,1) 0%, rgba(249,224,101,1) 32%, rgba(246,209,45,1) 51%, rgba(246,210,45,1) 71%, rgba(246,210,45,1) 100%);
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
			background-repeat:no-repeat;
			width: 35px;
			height: 35px;
		}
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
		#countdown {
			padding: 0 16px;
			border: none;
		}

		.newbuy {
			color: #fefefe !important;
			font-size: 36px !important;
			line-height: 1.176 !important;
			text-decoration: none !important;
			text-transform: uppercase !important;
			font-weight: 700 !important;
			letter-spacing: 0 !important;
			border-radius: 4em !important;
			padding: 15px 20px !important;
			margin: 1em 0 !important;
			background-color: #62b218 !important;
			min-width: 400px !important;
			min-height: 81px !important;
			outline: none !important;
			display: flex !important;
			justify-content: center;
			text-align: center;
			margin: 0 auto !important;
			text-align: center !important;
			border: 1px solid #62b218 !important;
			margin-bottom: 9px !important;
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

		.modal-headline {
			color: #ff0000 !important;
			text-align: left;
			background: url(https://s3.amazonaws.com/sec-image/sec_checkout/popup-timer.gif) no-repeat;
			font-weight: bold !important;
			padding-left: 138px;
			/* margin-left: 35px; */
			margin-bottom: 30px;
			padding-bottom: 22px;
			padding-top: 22px;
			background-position: 45px;
			background-size: contain;
		}

		#modalbutton {
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

		.hide {
			opacity: 0;
			display: none;
			visibility: none;
			transition: all 200ms ease-in-out;
		}

		.show {
			opacity: 1;
			display: inherit;
			visibility: unset;
			transition: all 200ms ease-in-out;
		}
	</style>

<body>
<div class="flex justify-center flex-nowrap bg-red-900 text-white p-3 text-center text-sm" style="position: sticky;top: 0;z-index: 1000; filter: saturate(1.8)">
		<div class="flex">Your Discount Is Being Held For 
			<span id="countdown-timer" class="ml-1">
				<div id="clock1" class="font-bold text-white">[clock1]</div>
			</span>
		, Until It Is Given To The Next Man Waiting In Line
		</div>
	</div>
	<header class="flex justify-center bg-lime-600 p-2">
		<div class="flex flex-wrap bg-white rounded px-4 py-1 text-lime-600 items-center text-center text-lg">
			<div class="flex flex-nowrap items-center mx-auto">
				<img class="mr-2 mb-1" src="/images/green-lock-icon.gif" width="20px" height="20px" />
				<div>SECURE | </div>
			</div>
			<div class="mx-auto ml-1 grow">You Are On A 256-Bit Secure Order Page</div>
			</span>
		</div>
	</header>
	<div class="container container-md mx-auto py-6" style="max-width: 960px !important">
		<div class="content px-5">
			<div class="flex justify-center w-full">
				<div class="flex flex-wrap items-center">
					<img class="mx-auto" src="/images/snm-logo.gif" style="height: 25px" />
					<?php if ($csactive == 1) : ?>
						<div class="flex flex-nowrap mx-auto items-center">
							<!-- <div class="phone ml-2"></div> -->
							<img class="ml-2" src="../images/phone.png" alt="phone icon">
							<span style="font-size: 18px;">Call <a href="tel:1-800-214-5604">1-800-214-5604</a> Now To Speak To A Product Specialist!</span>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="flex justify-center w-full mt-5 text-center">
				<h1 class="text-red-700 text-5xl font-bold condensed">Step 2: This Massive Discount Is Almost Yours</h1>
			</div>
			<div class="text-center mb-3 text-xl">
				<h2 class="condensed text-3xl mt-2">Just Enter Your Billing Details In The Secure Form Below…</h2>
			</div>
			<div class="flex flex-col w-full mt-7 -mb-5 lg:w-1/2 lg:ml-auto text-red-700">
				<h3 class="flex justify-center font-bold text-4xl mb-1">GET STARTED</h3>
				<div class="flex justify-center"><img src="/images/black-arrow.png" /></div>
			</div>
			<!-- <section class="flex flex-wrap md:flex-nowrap w-full columns-1 md:columns-2 gap-5 mt-5"> -->
			<section class="grid grid-cols-1 lg:grid-cols-2 gap-x-3 items-stretch mt-5">

				<div class="w-full px-4 my-4 lg:my-0 min-h-full ">
					<div class="border border-black p-4 px-5">
						<div class="flex justify-center text-2xl font-bold mb-4 text-center">YOUR ORDER SUMMARY</div>
						<ul class="w-full" style="padding-left: 0">
							<!-- <li class=" flex justify-between items-center text-gray-400 font-bold">
							<div>PRODUCT</div>
							<div class="mr-5">PRICE</div>
						</li> -->
							<li class="flex justify-between items-center border-b flex-wrap py-2">
								<div class="w-full md:w-2/3">5G Male PLUS (<?php echo $productLabel; ?>)</div>
								<div class="text-lg text-gray-300 font-semibold">$<?php echo $price; ?><span class="text-lime-500 font-bold ml-2 invisible">FREE!</span></div>
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
								<div class="text-lg font-semibold">That's $266.50 of Bonus Gifts, <span class="text-lime-500 fw-bold ml-2">YOURS FREE!</span></div>
							</li>
							<li class="flex justify-between items-center flex-wrap py-3">
								<div class="orders font-semibold ">Today You Pay Only</div>
								<div class="font-bold">$<?php echo $finalPrice; ?></div>
							</li>
						</ul>
					</div>

					<div class="flex items-center mb-3">
						<div class="icon mr-3">
							<img src="/images/truch-icon-green.png" alt="truck" style="object-fit: contain; width: 70px; height: 70px;">
						</div>
						<div class="text-lime-500 mt-4 grow">
						<div class="flex">
							<div>
								Order In The Next
							</div>
							
							<div id="clock2" class="font-bold ml-1">[clock2]</div> 
						</div>
							 
							 
							 To Be Shipped 
							 <?php if (date('H') >= 16) {
									echo 'First Thing 9AM Tomorrow!';
								} else {
									echo 'Today!';
								} ?>
						</div>

						
					</div>
					<div class="flex items-center border-t">
						<div class="icon mr-3">
							<img src="/images/90-day-green.png" alt="90 day seal" style="object-fit: contain; width: 100px; height: 100px;">
						</div>
						<div class="text-lime-500 mt-4" style="color: #40a900!important;">
							Try 5G Male PLUS <strong>Risk FREE</strong> Until <strong><?php echo $displayDeadline; ?></strong> With Our 90-Day Guarantee
						</div>
					</div>

					<div class="flex flex-col w-full text-center text-3xl my-3 condensed">
						Your Purchase Today Is Fully Protected By Our
						</br>
						<strong> 90-DAY MONEY BACK GUARANTEE!</strong>
					</div>

					<div class="w-full bg-yellow-100 border p-5 my-5">
						<div class="flex flex-wrap-reverse lg:flex-nowrap">
							<div class="flex flex-col">
								<p class="guarantee-txts">
									I understand that I have 90 days - thats <strong>THREE FULL MONTHS</strong> - to try out 5G Male PLUS and make sure I love it.
									<img src="/images/90-day-icon.png" alt="90 day guarantee" class="pt-3" style="width: auto; max-width: 175px;float:right">
									And any time I want, I can call support at <strong>1-800-251-9316</strong> or email <strong>support@5gmale.com</strong>, 24 hours a day, 7 days a week to request a refund, with no questions asked and no hassles!<br><strong id="guarantee">GUARANTEED BY:</strong>
								</p>
								<img src="/images/ryan-sign.png" alt="ryan signature" style="max-width: 175px;mix-blend-mode: multiply;">
							</div>
							<!-- <div class="flex flex-col justify-center mx-auto mb-4">
							<img src="/images/90-day-icon.png" alt="90 day guarantee" style="width: auto; max-width: 200px;">
							</div> -->
						</div>
						<div class="flex justify-center">
							<p class="ryan-txt">Ryan Masters, Head of Research at Supernatural Man LLC</p>
						</div>
					</div>
					<div class="w-auto pl-5  my-5 mx-auto">
						<div class="flex flex-col w-auto protection-section">
							<div class="flex mb-2" style="width:58px; height: auto">
								<img src="/images/blue-shield.png" style="width: 58px;height: 70px;">
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
				<form action="../process.php<?php echo trim(@$querystring); ?>"  method='POST' id="step_1" class="col-sm-12">

					<div class="flex flex-col bg-gray-100 border px-4">
						<div class="flex justify-center text-2xl font-semibold my-4">Enter <span class="underline font-bold mx-2">BILLING</span> Address</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="FirstName" class="text-sm">First Name:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" type="text" name="firstName" id="FirstName" value="" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="LastName" class="text-sm">Last Name:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" type="text" name="lastName" id="LastName" value="<?php if (@$_SESSION["lastName"]) echo @$_SESSION["lastname"]; ?>" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="Email" class="text-sm">Email:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" type="email" name="email" id="Email" value="<?php echo @$_SESSION["email"]; ?>" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="Phone" class="text-sm">Phone:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" type="tel" name="phone" id="Phone" value="<?php echo @$_SESSION["phone"]; ?>" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="StreetAddress1" class="text-sm">Address:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" name="billingAddress1" type="text" id="StreetAddress1" value="<?php echo @$_SESSION["billingAddress1"]; ?>" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="FirstName" class="text-sm">Address Cont'd:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" name="billingAddress2" type="text" id="StreetAddress2" value="<?php echo @$_SESSION["billingAddress2"]; ?>" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="FirstName" class="text-sm">City:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" name="billingCity" type="text" id="City" value="<?php echo @$_SESSION["billingCity"]; ?>" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="FirstName" class="text-sm">State/Province:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
								<select class="inf-select default-input sale-text w-full px-1 py-2" id="State" name="billingState" value="<?php echo @$_SESSION['billingState']; ?>" data-selected="<?php echo @$_SESSION["billingState"]; ?>">
									<?php foreach ($usStates as $key => $value) : ?>
										<option value="<?= $key;?>"> <?= $value; ?> </option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="FirstName" class="text-sm">Country:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
								<select class="inf-select default-input sale-text w-full px-1 py-2" id="Country" data-toggle-element="State" name="billingCountry" value="<?php echo @$_SESSION['billingCountry']; ?>" onchange="solveprice()">
									<option selected value="US">United States</option>
									<?php foreach ($countries as $key => $value) : ?>
										<option value="<?= $key;?>"> <?= $value; ?> </option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="PostalCode" class="text-sm">Postal Code:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" name="billingZip" type="text" id="PostalCode" maxlength="12" value="<?php echo @$_SESSION['billingZip']; ?>" onchange="">
							</div>
						</div>
						<div class="flex flex-col w-full my-5">
							<p class="text-center text-sm">Certified As Secure &amp; Trustworthy By The Leading Companies:</p>
							<div class="flex justify-center my-3">
								<div class="credit-card visa mr-3"></div>
								<div class="credit-card mc mr-3"></div>
								<div class="credit-card disc mr-3"></div>
								<div class="credit-card amex"></div>
							</div>
							<p class="text-center text-sm mt-2">Credit Card charged as <strong>"SUPERNATURAL MAN"</strong></p>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="cc_no" class="text-sm">Card Number:</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" type="text" name="creditCardNumber" id="cc_no" maxlength="19" value="" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-full w-1/3">
								<label for="cc_exp_mo" class="text-sm">Exp Date:</label>
							</div>
							<div class="w-full md:w-2/3 ">
								<div class="w-full columns-2 gap-3">
									<div class="w-full border border-gray-400">
										<!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
										<select class="w-full px-1 py-2" id="cc_exp_mo" name="expMonth">
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
									<div class="w-full border border-gray-400">
										<!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
										<select class="w-full px-1 py-2" id="cc_exp_yr" name="expYear">
											<option value="02">2022</option>
											<option value="03">2023</option>
											<option value="04">2024</option>
											<option value="05">2025</option>
											<option value="06">2026</option>
											<option value="07">2027</option>
											<option value="08">2028</option>
											<option value="09">2029</option>
											<option value="10">2030</option>
											<option value="11">2031</option>
											<option value="12">2032</option>
										</select>
									</div>
								</div>

							</div>
						</div>
						<div class="flex flex-wrap items-center mb-4">
							<div class="w-1/3">
								<label for="ccv" class="text-sm">CVV(<a class="text-xs" href="https://5gmale.com/step/cardHelp.html" target="_blank">what's this?</a> ):</label>
							</div>
							<div class="w-full md:w-2/3 border border-gray-400">
								<input class="w-full px-1 py-2" type="text" name="ccv" id="ccv" value="" onchange="">
							</div>
						</div>
						<div class="flex flex-wrap items-center my-4 text-center justify-center">
							<p class="text-2xl font-semibold" style="margin-bottom: 0.5rem">Enter Your <span class="underline font-bold mx-2">SHIPPING</span> Adress</p>
							<div class="flex flex-nowrap justify-center">
								<input type="checkbox" checked name="billingSameAsShipping" id="bill-same" value="<?php echo @$_SESSION['billingSameAsShipping']; ?>"/>
								<label class="ml-2">Shipping address same as billing address?</label>
							</div>

						</div>
						<section>
							<div class="shipping-address hide">

								<div class="flex flex-wrap items-center mb-4">
									<div class="w-full w-1/3">
										<label for="Address2Street1" class="text-sm">Address:</label>
									</div>
									<div class="w-full md:w-2/3 border border-gray-400">
										<input class="w-full px-1 py-2" name="shippingAddress1" type="text" id="Address2Street1" value="<?php echo @$_SESSION["shippingAddress1"]; ?>">
									</div>
								</div>
								<div class="flex flex-wrap items-center mb-4">
									<div class="w-full w-1/3">
										<label for="Address2Street2" class="text-sm">Address Cont'd:</label>
									</div>
									<div class="w-full md:w-2/3 border border-gray-400">
										<input class="w-full px-1 py-2" name="shippingAddress2" type="text" id="Address2Street2" value="<?php echo @$_SESSION["shippingAddress2"]; ?>">
									</div>
								</div>
								<div class="flex flex-wrap items-center mb-4">
									<div class="w-full w-1/3">
										<label for="City2" class="text-sm">City:</label>
									</div>
									<div class="w-full md:w-2/3 border border-gray-400">
										<input class="w-full px-1 py-2" name="shippingCity" type="text" id="City2" size="25" value="<?php echo @$_SESSION["shippingCity"]; ?>">
									</div>
								</div>
								<div class="flex flex-wrap items-center mb-4">
									<div class="w-full w-1/3">
										<label for="State2" class="text-sm">State/Province:</label>
									</div>
									<div class="w-full md:w-2/3 border border-gray-400">
										<!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
										<select class="inf-select default-input sale-text w-full px-1 py-2" id="State2" name="shippingState" data-selected="<?php echo @$_SESSION["shippingState"]; ?>">
										<?php foreach ($usStates as $key => $value) : ?>
											<option value="<?= $key;?>"> <?= $value; ?> </option>
										<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="flex flex-wrap items-center mb-4">
									<div class="w-full w-1/3">
										<label for="Country2" class="text-sm">Country:</label>
									</div>
									<div class="w-full md:w-2/3 border border-gray-400">
										<!-- <input class="w-full px-1 py-2" type="text" name="first_name" id="FirstName" value="" onchange=""> -->
										<select class="inf-select default-input sale-text w-full px-1 py-2" id="Country2" data-toggle-element="State2" name="shippingCountry" onchange="solveprice()">
											<option selected value="US">United States</option>
											<?php foreach ($countries as $key => $value) : ?>
												<option value="<?= $key;?>"> <?= $value; ?> </option>
											<?php endforeach; ?>
											?>
										</select>
									</div>
								</div>
								<div class="flex flex-wrap items-center mb-4">
									<div class="w-full w-1/3">
										<label for="PostalCode2" class="text-sm">Postal Code:</label>
									</div>
									<div class="w-full md:w-2/3 border border-gray-400">
										<input class="w-full px-1 py-2" type="text" name="shippingZip" type="text" id="PostalCode2" value="<?php echo @$_SESSION["shippingZip"]; ?>">
									</div>
								</div>

							</div>
						</section>
						<section>
							<div class="flex flex-col w-full items-center py-4">
								<div id="totalPricePay" class="flex w-full items-center justify-around">
									<div class="text-xl font-semibold">You Pay Just</div>
									<div class="flex items-center">
										<div id="totalPricePayValue" class="text-xl font-semibold mr-2">$<?php echo number_format($totalPrice, 2, '.', ''); ?></div>
										<div id="totalDiscount">(<?php echo $discount; ?>% OFF)</div>
									</div>

								</div>

								<p id="terms" class="text-sm text-center text-gray-400 mb-2 mt-4">By clicking the order button I accept the <a target="_blank" class="underline" href="terms.php">Terms and Conditions</a></p>
								<div class="flex w-full justify-center">
									<button name="next-button" id="next-button" class="w-full newbuy text-3xl" onclick="validateForm();" value="COMPLETE PURCHASE">Complete Purchase</button>
								</div>

								<div class="flex w-full justify-center items-center text-center" style="color:#3fa900">
									<div><img src="/images/lock-green-step2.png" alt="lock icon"></div>
									<div class="ml-2 text-lime-600 text-xl font-semibold"> 256-BIT Secure Transaction</div>
								</div>
								<div class="flex w-full text-center justify-center mt-3">
									<p class="bit-secure-txt">Please click the order button <strong>ONLY ONCE</strong><br> and do not refresh the page</p>
								</div>
								<div id="sales-tax-notice" class="text-center hidden">
									* NY sales tax up to 8.875% based on the county of the ship-to address
								</div>
							</div>
						</section>
					</div>
					<div class="flex justify-center my-4 mt-6">
						<div class="flex w-full">
							<img class="w-auto mx-auto" src="/images/norton-guarantee-large.gif" alt="Norton Shopping Guarantee">
						</div>
					</div>
					<div class="flex justify-center my-3">
						<div class="flex w-2/3">
							<img class="w-full" src="https://flora-spring.s3.amazonaws.com/BBB-Icon.jpg" alt="BBB">
						</div>
					</div>

					<div class="flex justify-center my-3">
						<div class="flex px-4 text-center font-semibold">
							<p>Top Rated By The Better Business Bureau!</p>
						</div>
					</div>
					<div class="flex justify-center my-2">
						<div class="flex px-4 text-center text-sm">
							<p>Buy with <strong>confidence</strong>. See real, <strong>positive</strong> reviews from customers who love 5G Male. We’re <strong>top-rated</strong> with over 30,000 happy customers around the world!</p>
						</div>
					</div>

				</div>
			</section>

			<div class="flex flex-col w-full mt-11">
				<p class="text-center text-sm text-gray-400">Certified As Secure &amp; Trustworthy By The Leading Companies:</p>
				<div class="flex mt-3">
					<img class="mx-auto w-full" src="/images/security-icons.gif" style="max-width: 800px;">
				</div>
			</div>

			<div class="flex justify-center flex-wrap mb-4 text-center mt-11">
				<!-- <a class="mx-3" style="color:#000;text-decoration:underline;" class="fancybox" href="/tailwind/terms.php">Terms and Conditions</a> &nbsp;
				<a class="mx-3" style="color:#000;text-decoration:underline;" class="fancybox" href="/tailwind/privacy.php">Privacy Policy</a> &nbsp;
				<a class="mx-3" href="#" style="color:#000;text-decoration:underline;" onclick="return (function(){zE.activate();return false;})()">Contact Us</a> -->
				<?php legalLinks("includes/legalLinks");?>
			</div>
		</div>
	</div>

		<!-- hidden inputs -->
		<input type="hidden" name="previous_page" value="checkout/order">
		<input type="hidden" name="current_page" value="/checkout/onepage">
		<input type="hidden" name="next_page" value="/up/upsell-6-month-supply">
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
		<input type="hidden" name="fid" id="fid" value="<?php echo $formID; ?>" class="hidden" />
		<input type="hidden" name="campaign_id" id="campaign_id" value="<?php echo $site['campaign'] ?>">
		<input type="hidden" name="37positions" id="37positions" value="<?php echo $thirtyseven; ?>">
	</form>


<?php
// declare modal variables (requires basic_modal.js)
$modal_id = 'timerModal';
$modal_title = "IMPORTANT:";
$modal_body = '
	<h1 class="font-bold text-2xl modal-headline">Time Has Expired!</h1>
	<p>Your 5G Male discount is no longer being held! Please <strong>secure your discount package now</strong> before your spot is given away to the next man in line...</p>
	';
$modal_footer = '<button id="modalbutton" onclick="closeAll()" class="clickable w-full bg-blue-600 p-3 rounded text-white" aria-hidden="true">YES, Complete My Order!</button>';
modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer);
?>

<script>
	var hasScrolledToError = false;
	document.addEventListener('DOMContentLoaded', function() {
		solveprice();
		setupFormValidation();

		//show or hide shipping address
		const billingSame = document.getElementById("bill-same");
		
		billingSame.addEventListener('change', function() {
		
			const shipAdd = document.querySelector('.shipping-address');
			if (billingSame.checked) {
				display(shipAdd, false);
			} else {
				display(shipAdd, true);
			}
		});

		function copyBillingInputValue() {
			// Check to Copy values to billing
			var isChecked = billingSame.checked;
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
				return;
			}
		}


		const city = document.getElementById("City");
		city.addEventListener('keyup', function() {
			document.getElementById("City").textContent = city.value;
		});

		document.getElementById('modalbutton').addEventListener('click', function() {
			document.getElementById("step_1").scrollIntoView({
				behavior: "smooth",
				block: "start",
				inline: "nearest"
			});
			// document.getElementById('runOutModal').modal('hide');
			if (window.modalHandler) {
				modalHandler('timerModal', flase);
			}

		});

		// When the country changes, state is changed to/from a textbox / dropdown and events must be re-bound
		document.getElementById("Country").addEventListener('change', function() {
			setTimeout(rebindStateEvents, 100);
		});
		document.getElementById("Country2").addEventListener('change', function() {
			setTimeout(rebindStateEvents, 100);
		});
		setTimeout(rebindStateEvents, 100);
	});

	function rebindStateEvents() {
		document.getElementById("State").addEventListener('change', function() {
			calculateTax();
		});
		document.getElementById("State2").addEventListener('change', function() {
			calculateTax();
		});
		calculateTax();
	}

	function calculateTax() {
		// bypass for testing
		return;
		// let estRate = 0.08875;
		let estRate = 0;
		let state = (document.getElementById("bill-same").checked) ? document.getElementById("State").value : document.getElementById("State2").value;
		let country = (document.getElementById("bill-same").checked) ? document.getElementById("Country").value : document.getElementById("Country2").value;

		if (state == "NY" && country == "US") {
			let taxTotal = parseFloat(((_orderSubTotal - _untaxable) * estRate)).toFixed(2);
			let totalPrice = (parseFloat(_orderSubTotal) + parseFloat(taxTotal)).toFixed(2);
			document.getElementById("sales-tax-value").textContent = "$" + (taxTotal / 1).toFixed(2) + "*";
			document.getElementById("totalsum").textContent = totalPrice;
			document.getElementById("totalPricePayValue").textContent = totalPrice;

			// document.getElementById("sales-tax-notice").show();
		} else {
			document.getElementById("sales-tax-value").textContent = "$0.00";
			let totalPrice = ((_orderSubTotal) / 1).toFixed(2);
			document.getElementById("totalsum").textContent = totalPrice;
			document.getElementById("totalPricePayValue").textContent = totalPrice;
			display(document.getElementById("sales-tax-notice"), false);
		}
	}

	function setupFormValidation() {
		window.validateForm = function() {
			var ok = true;
			var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			hasScrolledToError = false;

			document.querySelector('.error-missing').remove();
			var firstName = document.getElementById('FirstName');
			
			if ($.trim(firstName.value) == "") {
				ok = false;
				addErrorMessageAbove(firstName, "Please enter a valid first name");
				firstName.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			var lastName = document.getElementById('LastName');
			if ($.trim(lastName.value) == "") {
				ok = false;
				addErrorMessageAbove(lastName, "Please enter a valid last name");
				lastName.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			var phone = document.getElementById('Phone');
			if ($.trim(phone.value) == "") {
				ok = false;
				addErrorMessageAbove(phone, "Please enter a valid phone number");
				phone.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			var email = document.getElementById('Email');
			var emailcheck = email.value;
			if ($.trim(email.value) == "") {
				ok = false;
				addErrorMessageAbove(email, "Please enter a valid email");
				email.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			if (!emailcheck.match(re)) {
				ok = false;
				addErrorMessageAbove(email, "Please enter a valid email");
				email.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}

			var streetAddress1 = document.getElementById('StreetAddress1');
			if ($.trim(streetAddress1.value) == "") {
				ok = false;
				addErrorMessageAbove(streetAddress1, "Please enter a valid street address");
				streetAddress1.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			var city = document.getElementById('City');
			if ($.trim(city.value) == "") {
				ok = false;
				addErrorMessageAbove(city, "Please enter a valid city");
				city.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			var state = document.getElementById('State');
			if ($.trim(state.value) == "") {
				ok = false;
				addErrorMessageAbove(state, "Please enter a valid state");
				state.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			var postalCode = document.getElementById('PostalCode');
			if ($.trim(postalCode.value) == "") {
				ok = false;
				addErrorMessageAbove(postalCode, "Please enter a valid zip code");
				postalCode.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}


			var ccNo = document.getElementById('cc_no');
			if ($.trim(ccNo.value) == "") {
				ok = false;
				addErrorMessageAbove(ccNo, "Please enter a valid credit card number");
				ccNo.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}
			var cvv = document.getElementById('cvv');
			if ($.trim(cvv.value) == "") {
				ok = false;
				addErrorMessageAbove(cvv, "Please enter a valid CVV");
				cvv.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
			}



			if (ok) {
				StopExit = true;
				display(document.getElementById('next-button'), false);
				console.log(ok);
				// document.getElementById("step_1").submit();
				return true;
			} else {
				display(document.querySelector('.error-missing'), true);
				display(document.getElementById('next-button'), true);
				return false;
			}
		}
	}

	function addErrorMessageAbove(target, message) {
		target.after("<p class='error-missing' style='display: block;'>" + message + "</p>");
	}

</script>


<!--KOUNT PIXEL-->
<iframe width=1 height=1 frameborder=0 scrolling=no src="https://gdc.sticky.io/pixel.php?t=htm&campaign_id=1&sessionId=<?= $kount_session ?>">
	<img width=1 height=1 src="https://gdc.sticky.io/pixel.php?t=gif&campaign_id=1&sessionId=<?= $kount_session ?>>" />
</iframe>
<!--/KOUNT PIXEL-->

<script>
	var _orderSubTotal = 0;
	var _shippingPrice = 0;
	var _untaxable = <?php echo $untaxableAmount; ?>;

	function solveprice() {
		// bypass for testing
		return;
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

		var productId = document.getElementById('product-id').value;
		
		if (productId == 4 || productId == 373 || productId == 952 || productId == 956) {
			if (document.getElementById("bill-same").checked) {
				if (document.getElementById("Country").value != 'US') {
					document.getElementById("shipsum").textContent = "$14.95";
					document.getElementById("shippingId").value = "4";
					document.getElementById("upsellProductIds").value = "87,102,265";
					_shippingPrice = 14.95;
				} else {
					document.getElementById("shipsum").innerHTML = "$<?php if ($mailer) {
																															echo '7.95';
																														} else {
																															echo '6.95';
																														} ?>";
					document.getElementById("shippingId").value = <?php if ($mailer) {
																													echo '12';
																												} else {
																													echo '3';
																												} ?>;
					_shippingPrice = <?php if ($mailer) {
															echo '7.95';
														} else {
															echo '6.95';
														} ?>;

				}
			} else {

				if (document.getElementById("Country2").value != 'US') {
					document.getElementById("shipsum").textContent = "$14.95";
					document.getElementById("shippingId").value = "4";
					document.getElementById("upsellProductIds").value = "87,102,265";
					_shippingPrice = 14.95;
				} else {
					document.getElementById("shipsum").innerHTML = "$<?php if ($mailer) {
																															echo '7.95';
																														} else {
																															echo '6.95';
																														} ?>";
					document.getElementById("shippingId").value = <?php if ($mailer) {
																													echo '12';
																												} else {
																													echo '3';
																												} ?>;
					_shippingPrice = <?php if ($mailer) {
															echo '7.95';
														} else {
															echo '6.95';
														} ?>;
				}
			}
			shippingCost = _shippingPrice;
		}

		_orderSubTotal = (parseFloat(subtotal) + parseFloat(sexPositions) + parseFloat(superLube) + parseFloat(shippingCost)).toFixed(2);

		if (productId == 373 || productId == 5 || productId == 374 || productId == 8 || productId == 377 || productId == 9 || productId == 378) {
			if (document.getElementById("bill-same").checked) {
				if (document.getElementById("Country").value != 'US') {

				} else {}
			} else {

				if (document.getElementById("Country2").value != 'US') {} else {}
			}
		}

	}

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

					var productId = document.getElementById('product-id');

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
					//if the case is qty1 (either pid 4 or 373) you need to add tax/shipping into the grand total - subtotal looks good - this is in solveprice() - harness that for this  
					document.getElementById('subtotalPrice').textContent = (parseFloat(document.getElementById('subtotalPrice').textContent) * .85).toFixed(2);
					solveprice();
					calculateTax();
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


	window.onload = ()=> {

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
				//sessionStorage.setItem("customer_email", $(this).value);
		});
	};

	
</script>


<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>

</body>
<script language="JavaScript">

// set individual clock values here
  StartCountDown("clock1","<?php echo $futureDate; ?> 04:00 PM UTC-0500 ")
  StartCountDown("clock2","<?php echo $futureDate; ?> 04:00 PM UTC-0500 ")
  
  /*
  	Author:		Robert Hashemian (http://www.hashemian.com/)
  	Modified by:	Munsifali Rashid (http://www.munit.co.uk/)
  	Modified by:	Tilesh Khatri
  */
  
  function StartCountDown(myDiv,myTargetDate) {
    var dthen	= new Date(myTargetDate);
    var dnow	= new Date();
    ddiff		= new Date(dthen-dnow);
    gsecs		= Math.floor(ddiff.valueOf()/1000);
    CountBack(myDiv,gsecs);
  }
  
  function Calcage(secs, num1, num2) {
    s = ((Math.floor(secs/num1))%num2).toString();
    if (s.length < 2) 
    {	
      s = num1 != 86400 ? "0" + s : s;
    }
    return (s);
  }
  
  function CountBack(myDiv, secs) {
    var DisplayStr;
    var DisplayFormat = "%%D%% Days %%H%%:%%M%%:%%S%%";
    DisplayStr = DisplayFormat.replace(/%%D%%/g,	Calcage(secs,86400,100000));
    DisplayStr = DisplayStr.replace(/%%H%%/g,		Calcage(secs,3600,24));
    DisplayStr = DisplayStr.replace(/%%M%%/g,		Calcage(secs,60,60));
		DisplayStr = DisplayStr.replace(/%%S%%/g,		Calcage(secs,1,60));
		const insertElement = document.getElementById(myDiv);
		// if (insertElement) {
			if(secs > 0) {	
				insertElement.innerHTML = DisplayStr;
				setTimeout("CountBack('" + myDiv + "'," + (secs-1) + ");", 990);
			} 
			else {
				insertElement.innerHTML = "EXPIRED";
			}
		
  }

</script>
</html>