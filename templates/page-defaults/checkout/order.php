<?php
error_reporting(0);
if( isset($_SESSION['assessment']) ) {
    $assessment = unserialize($_SESSION['assessment']);
    if( isset($assessment['customer_email']) && filter_var($assessment['customer_email'], FILTER_VALIDATE_EMAIL) ) {
        $logger->info('Attempting to add ' . $assessment['customer_email']. 'to Maropost');
        $maropost = new Maropost($site['maropostApiKey'], $site['maropostApiUrl'], null);
        if( $maropost->CheckEmailValid($assessment['customer_email']) ) {
            $newContact = [
                'list_id' => 117,
                'contact' => [
                    'email' => $assessment['customer_email'],
                    'custom_field' => [
                        'age' => $assessment['age'],
                        'ws' => $assessment['weeklysex'],
                        'sh' => $assessment['stayhard'],
                        'referring_page_url' => @$_SERVER['HTTP_REFERER'],
                        'cake_id' => $_SESSION['affid']
                    ],
                    'subscribe' => true
                ]
            ];
            $postedNewContact = $maropost->post_new_contact_into_list($newContact, true);
            $logger->info(json_encode($postedNewContact));
        } else {
            $logger->info($assessment['customer_email'] . ' not valid - Error: 829619');
            error_log("Maropost::CheckEmailValid('{$assessment['customer_email']}') not valid " . __FILE__ . ":" . __LINE__);
        }
    } else {
        $logger->info($assessment['customer_email'] . ' not valid - Error: 825927');
        error_log("'customer_email' not valid in \$_SESSION['assessment'] " . __FILE__ . ":" . __LINE__);
    }
}


// this affiliate is naughty
// @ Suppress warning if Session S1 does not exist
if ((@$_SESSION['s1'] == '335059') || (@$_SESSION['s1'] == '704154')) {
    http_response_code(404);
    die;
}


//Setup Countdown Timer
$timerCheck = time() - $_SESSION['timer-gm'];
if ($timerCheck < 0) {
    $_SESSION['timer-gm'] = time();
}
if (!isset($_SESSION['timer-gm'])) {
    $_SESSION['timer-gm'] = time();
}
$timerDelay = time() - $_SESSION['timer-gm'];


//CS Hours Logic
//Decline Message Logic
$timenow = date("H:i:s");
$timeopen = date("08:00:00");
$timeclosed = date("20:00:00");
$dayname = date("l");
$daysclosed = array("Saturday", "Sunday");

if (isset($_GET['setDate']))
{
    $setDate = new DateTime($_GET['setDate']);
}

if (in_array($dayname, $daysclosed)) {
    $csactive = 0;
} else {
    if ($timenow < $timeclosed && $timenow > $timeopen) {
        $csactive = 1;
    } else {
        $csactive = 0;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<?php template("includes/header"); ?>
        <title>5GMALE - Secure Order</title>

        <style>
            body {
                background-color: white;
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
                background: url(https://s3.amazonaws.com/5gm/checkout/blue-check.png) no-repeat;
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

        .check-list {
            background: transparent;
            padding-left: 0px;
        }
        </style>

    </head>

<body>
    <header class="flex justify-center bg-green-500 p-2" style="background: #40A900;">
        <div class="flex flex-wrap bg-white rounded px-4 py-2 text-green-500 items-center text-center">
                <div class="flex flex-nowrap items-center mx-auto text-lg">
                    <img class="mr-2 mb-1" src="/images/green-lock-icon.gif" width="20px" height="20px"/>
                    <div>SECURE | </div>
                </div>
                <div class="mx-auto ml-1 grow text-xl">You Are On A 256-Bit Secure Order Page</div>
            </span>
        </div>
    </header>
    <div class="container container-md mx-auto py-8" style="max-width: 960px !important">
        <div class="content px-5">
        <section class="flex flex-column w-full flex-wrap">
				<div class="flex justify-center w-full text-center" style="z-index: 10">
					<div class="flex flex-wrap items-center">
						<img class="mx-auto" src="https://s3.amazonaws.com/5gm/checkout/snm-logo.gif" style="height: 25px"/>
						<?php if($csactive == 1): ?>
							<div class="flex justify-center text-center flex-nowrap mx-auto items-center w-full">
							<!-- <div class="phone"></div> -->
							<img class="ml-2" src="../images/phone.png" alt="phone icon">
							<span class="" style="font-size: 18px;">Call <a href="tel:1-800-214-5604">1-800-214-5604</a> Now To Speak To A Product Specialist!</span>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="flex flex-wrap md:flex-nowrap w-full mt-4">
					<div class="flex-none w-full md:w-auto mt-0 md:-mt-11">
					<img class="w-auto mx-auto" src="../images/bottle-image-90days.gif" alt="">
					</div>
					
					<div class="flex grow lg:pl-12">
						<div class="flex flex-col mx-auto">
							<div class="text-center md:-ml-28 mb-2">
								<h1 class="text-red-700 text-5xl font-bold condensed">Step 1: Get My Discount Now</h1>
							</div>
							<div class="text-center md:-ml-28 mb-3 text-3xl condensed">
								<h2 style="margin-top: 0">The More You Buy The More You Save!</h2>
							</div>
							<div class="flex flex-col md:flex-row w-auto mx-auto flex-wrap check-list my-4 md:my-0">
								<p class="flex items-center mb-2 md:w-1/2">
								 <img class="mr-2" src="https://s3.amazonaws.com/5gm/checkout/check-green.png" alt="check">
								Get Harder, Longer Lasting Erections</p>
								<p class="flex items-center mb-2 md:w-1/2">
								<img class="mr-2" src="https://s3.amazonaws.com/5gm/checkout/check-green.png" alt="check">
								Feel Incredible In Bed</p>
								<p class="flex items-center mb-2 md:w-1/2">
								<img class="mr-2" src="https://s3.amazonaws.com/5gm/checkout/check-green.png" alt="check">
								Regain Energy, Stamina, & Sex Drive</p>
								<p class="flex items-center mb-2 md:w-1/2">
								<img class="mr-2" src="https://s3.amazonaws.com/5gm/checkout/check-green.png" alt="check">
								Go All Night & Drive Any Woman Wild!</p>
							</div>
							<div class="flex justify-around flex-wrap mt-0 items-center text-left text-center md:text-left">
								<div class="w-full md:w-1/2 stock-container">
									<div class="text-sm">
										<strong>AVAILABILITY:</strong> <span class="bg-lime-600 text-white px-2 py-1">IN STOCK!</span>
									</div>
								</div>
								<div class="w-full md:w-1/2 font-bold">
									<div class="flex items-center justify-center md:justify-start mt-2">
										<span class="text-s mr-2" style="white-space: nowrap">Your spot is held for:</span>
										<div class="flex">
											<span id="countdown" class="border border-2 border-red-600 text-red-600 text-2xl px-4 py-1 mr-2">00:<span id="ms">00</span></span>
											<img src="https://s3.amazonaws.com/5gm/checkout/red-clock.gif" alt="clock" style="object-fit: contain;" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="flex flex-col w-full mt-6 md:-mt-4 mb-0">
					<h3 class="flex justify-center font-extrabold text-4xl mb-0 condensed">Choose Your Discount</h3>
					<div class="flex justify-center mb-1 text-lime-600 text-lg items-center">
						<img class="mr-2 truck" src="https://s3.amazonaws.com/5gm/checkout/truck-green.gif" />
						Ultra-Fast Shipping Within Just 12 Hours On Week Days
					</div>
					<div class="flex justify-center"><img src="https://s3.amazonaws.com/5gm/checkout/black-arrow.gif" /></div>
				</div>
			</section>
            <section id="cta" class="flex flex-col w-full flex-wrap justify-center mt-2 discount-section">
				<!-- card one -->
				<div class="card flex flex-wrap md:flex-nowrap border border-gray-300 mx-10">
					<div class="w-full md:w-auto grow flex flex-col justify-between p-4">
						<p class="option-txt text-gray-400 text-lg font-bold">STARTER OPTION</p>
						<p class="text-4xl font-bold" style="color:#000">1 MONTH SUPPLY</p>
						<div id="bogo-1" class="bogo pl-5">
							<span>LIMITED TIME OFFER:</span> 
							<p>1 FREE BOTTLE WITH PURCHASE!</p>
                            <img src="../../../images/5GM1x-m.png" alt="1 bottle" class="hidden sm:block bottle-1">
						</div>
						<div class="flex justify-between text-xl">
							<p class="text-gray-400"><strike>Retail: $180.00</strike></p>
							<p>You Pay $69.95</p>
						</div>
						<p class="text-3xl text-red-500 font-semibold my-2">Save $110.05 Today!</p>
						<select name="pmt_plan" id="select-ship" data-ce-key="81" class="border px-2 py-2 hidden">
							<option value="4" data-ce-key="82">90 Day Auto-Refill</option>
							<option value="3" data-ce-key="83">One-Time Purchase</option>
						</select>
					</div>
					<div class="w-full md:w-auto grow-0 flex flex-col justify-around bg-gray-100 p-4 text-center">
						<div class="text-center w-full text-lime-600 font-bold text-2xl">JUST $69.95 PER BOTTLE!</div>
						<form action="/checkout/onepage.php" method="POST">
							<input type="hidden" id="pid1" name="prodtype" value="1">
							<input type="hidden" class="add1" id="add1" name="add1" value="0">
							<input type="hidden" class="add2" id="add2" name="add2" value="0">
							<input class="button_buy" type="submit" class="clickable" value="CHOOSE">
						</form>
						<p class="text-xl font-bold text-lime-600 mt-3"><span class="text-red-400">61% OFF</span> + $6.95 USA Shipping</p>
						<p class="text-gray-600">(With 30-Day Auto Ship)</p>
						<div class="flex mt-4 items-center -mr-4 gradient p-2 hidden">
							<img class="mr-2" src="https://s3.amazonaws.com/5gm/checkout/head-icon.png" alt="person icon">
							<span>63 other men grabbed this deal today</span>
						</div>
					</div>
				</div>
				<!-- card two -->
				<div class="card selected flex flex-wrap md:flex-nowrap border-2 border-gray-300 mx-10">
					<div class="w-full md:w-auto grow flex flex-col justify-between p-4">
						<p class="option-txt text-gray-400 text-lg font-bold">MOST POPULAR</p>
						<p class="text-4xl font-bold" style="color:#000">3 MONTH SUPPLY</p>
						<div id="bogo-1" class="bogo pl-5">
							<span>LIMITED TIME OFFER:</span> 
							<p>3 FREE BOTTLES WITH PURCHASE!</p>
							<img src="../../../images/5GM3x-m.png" alt="3 bottle" class="hidden sm:block bottle-3">
						</div>
						<div class="flex justify-between text-xl">
							<p class="text-gray-400"><strike>Retail: $540.00</strike></p>
							<p>You Pay $179.00</p>
						</div>
						<p class="text-3xl text-red-500 font-semibold my-2">Save $361.00 Today!</p>
						<select name="pmt_plan" id="select-ship" data-ce-key="81" class="border px-2 py-2 hidden">
							<option value="4" data-ce-key="82">90 Day Auto-Refill</option>
							<option value="3" data-ce-key="83">One-Time Purchase</option>
						</select>
					</div>
					<div class="w-full md:w-auto grow-0 flex flex-col justify-around bg-gray-100 p-4 text-center">
						<div class="text-center w-full text-lime-600 font-bold text-2xl">JUST $59.67 PER BOTTLE!</div>
						<form action="/checkout/onepage.php" method="POST">
							<input type="hidden" id="pid1" name="prodtype" value="1">
							<input type="hidden" class="add1" name="add1" value="0">
							<input type="hidden" class="add2" name="add2" value="0">
							<input class="button_buy" type="submit" class="clickable" value="CHOOSE">
						</form>
						<p class="text-xl font-bold text-lime-600 mt-3"><span class="text-red-400">67% OFF</span> + FREE Shipping</p>
						<p class="text-gray-600">(With 30-Day Auto Ship)</p>
						<div class="flex mt-4 items-center -mr-4 gradient p-2 hidden">
							<img class="mr-2" src="https://s3.amazonaws.com/5gm/checkout/head-icon.png" alt="person icon">
							<span>63 other men grabbed this deal today</span>
						</div>
					</div>
				</div>
				<!-- card three -->
				<div class="card flex flex-wrap md:flex-nowrap border border-gray-300 mx-10">
					<div class="w-full md:w-auto grow flex flex-col justify-between p-4">
						<p class="option-txt text-gray-400 text-lg font-bold">BIGGEST DISCOUNT</p>
						<p class="text-4xl font-bold" style="color:#000">6 MONTH SUPPLY</p>
						<div id="bogo-1" class="bogo pl-5">
							<span>LIMITED TIME OFFER:</span> 
							<p>6 FREE BOTTLES WITH PURCHASE!</p>
							<img src="../../../images/5GM6x-m.png" alt="6 bottle" class="hidden sm:block bottle-6">
						</div>
						<div class="flex justify-between text-xl">
							<p class="text-gray-400"><strike>Retail: $1080.00</strike></p>
							<p>You Pay $297.00</p>
						</div>
						<p class="text-3xl text-red-500 font-semibold my-2">Save $783.00 Today!</p>
						<select name="pmt_plan" id="select-ship" data-ce-key="81" class="border px-2 py-2 hidden">
							<option value="4" data-ce-key="82">90 Day Auto-Refill</option>
							<option value="3" data-ce-key="83">One-Time Purchase</option>
						</select>
					</div>
					<div class="w-full md:w-auto grow-0 flex flex-col justify-around bg-gray-100 p-4 text-center">
						<div class="text-center w-full text-lime-600 font-bold text-2xl">JUST $49.50 PER BOTTLE!</div>
						<form action="/checkout/onepage.php" method="POST">
							<input type="hidden" id="pid1" name="prodtype" value="1">
							<input type="hidden" class="add1" name="add1" value="0">
							<input type="hidden" class="add2" name="add2" value="0">
							<input class="button_buy" type="submit" class="clickable" value="CHOOSE">
						</form>
						<p class="text-xl font-bold text-lime-600 mt-3"><span class="text-red-400">72% OFF</span> + FREE Shipping</p>
						<p class="text-gray-600">(With 30-Day Auto Ship)</p>
						<div class="flex mt-4 items-center -mr-4 gradient p-2 hidden">
							<img class="mr-2" src="https://s3.amazonaws.com/5gm/checkout/head-icon.png" alt="person icon">
							<span>63 other men grabbed this deal today</span>
						</div>
					</div>
				</div>
			</section>
            <div class="flex justify-center mt-11">
                <p class="text-3xl text-center mb-4 condensed">
                Get A Special <strong>One-Time Only Discount</strong> On These Recommended Upgrades & Give Her <strong>Even Better Orgasms</strong>
                </p>
            </div>
            <section class="flex flex-column w-full flex-wrap bg-yellow-100 p-3 border border-black rounded">
                <div class="flex flex-wrap p-4">
                    <div class="w-1/6 text-center">
                        <select class="border" name="add1" id="addon1">
                            <option value="0" selected="">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="w-5/6">
                        <p><strong>Super Lube To Give Her Ultra Intense Orgasms.</strong> This is HIGHLY recommended for any 5G Male PLUS users. It's proven that good, high quality lubricant makes it WAY easier for women to orgasm. A hard cock is a HUGE turn-on for women, but the thickness and rigidity can be painful without good lube. "Super Lube" is the best sex lubricant out there. It's safe, works amazing and I highly recommend it. You get HALF OFF if you add it to your order today. <span style="color:#d70000;" data-ce-key="110"><strong>(SAVE 50%. Normally $29.95, today just $14.95)</strong></span> <strong>Strict limit of 3 bottles per customer. One-time-only deal.</strong></p>
                    </div>
                </div>
                <div class="flex flex-wrap p-4">
                    <div class="w-1/6 text-center">
                        <input class="addOns" type="checkbox" name="add2" id="addon2" value="1">
                    </div>
                    <div class="w-5/6">
                    <p><strong>37 Sex Positions That Give Her Explosive Orgasms.</strong> This X-rated blackbook of sex positions will show you the BEST positions to make your girl orgasm HARD, including positions for G-Spot AND squirting orgasms. Most men have no idea about these positions, so women will be THRILLED when you try them. This master class comes complete with video demonstrations on real girls, so you can see step-by-step exactly what to do and have your girl screaming your name in bed all night! You get HALF off it you add it to your order today. <span style="color:#d70000;"><strong>(SAVE 66%. Normally $60.00, today just $19.95)</strong></span> <strong>One-time-only deal.</strong></p>
                    </div>
                </div>
            </section>
            <div class="flex justify-content-center">
				<div class="flex flex-col">
					<p class="text-lg text-center my-5">
					Each bottle contains 30 capsules. While 1 capsule per day will deliver strong results, it’s recommended you take 2-3 capsules per day if you want even stronger results.
					</p>
					<div class="mt-7 text-4xl text-center">
					<h3>Your Purchase Today Is Fully Protected By Our<br> <strong>90-DAY MONEY BACK GUARANTEE!</strong></h3>
					</div>
				</div>
			</div>
            <section class="flex w-full flex-wrap my-7">
                <div class="w-full md:w-2/3 bg-yellow-100 border p-5">
                    <div class="flex flex-wrap-reverse md:flex-nowrap">
                        <div class="flex flex-col pr-5">
                            <p class="guarantee-txts">I understand that I have 90 days - thats <strong>THREE FULL MONTHS</strong> - to try out 5G Male PLUS and make sure I love it. And any time I want, I can call support at <strong>1-800-251-9316</strong> or email <strong>support@5gmale.com</strong>, 24 hours a day, 7 days a week to request a refund, with no questions asked and no hassles!<br><strong id="guarantee">GUARANTEED BY:</strong></p>
                            <img src="/images/ryan-sign.gif" alt="ryan signature" style="max-width: 200px;">
                        </div>
                        <div class="flex flex-col justify-cente mx-auto mb-4">
                        <img src="/images/90-day-icon.gif" alt="90 day guarantee" style="width: auto; max-width: 300px;">
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <p class="ryan-txt">Ryan Masters, Head of Research at Supernatural Man LLC</p>
                    </div>
                </div>
                <div class="w-auto md:w-1/3 pl-0 md:pl-5 my-5 md:my-0 mx-auto">
                    <div class="flex flex-col w-full protection-section">
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

            </section>
            <div class="flex w-fll justify-center text-center text-3xl mb-5 mt-11">
                <h3 class="condensed">You Also Get These <strong>6 FREE Bonus Gifts</strong> When You Order Today..</h3>
            </div>
            <section class="flex flex-col w-full mt-7">
                <div class="flex flex-col bonus-section flex border border-black py-5 px-7" style="background-color: #ecffe7;">
                    <div class="flex flex-wrap md:flex-nowrap py-3 border-y border-t-0 border-gray-100">
                        <div class="grow pr-5">
                            <p><strong>5G Enhancement Bible.</strong> Every bonus tip, trick and technique we’ve developed to give you the absolute hardest, longest lasting erections possible with 5G Male, as well as increase orgasm strength and load size.</p>
                        </div>
                        <div class="w-2/5 mt-2 md:mt-0 md:text-right">
                            <p><strike>$19.95</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap md:flex-nowrap py-3 border-y border-gray-100">
                        <div class="grow pr-5">
                            <p><strong>The Multiplier Method.</strong> 5 minutes a day exercises to multiply your sexual performance even more. These exercises are not just great for your erections, but great at burning fat, increasing your overall health, giving you more energy in bed and making you feel better throughout your day.</p>
                        </div>
                        <div class="w-2/5 mt-2 md:mt-0 md:text-right">
                            <p><strike>$49.00</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-y border-gray-100">
                        <div class="grow pr-5">
                            <p><strong>The XXL Formula.</strong> The ultimate penis lengthening formula to get you real, long lasting size enhancement. You’ll discover the best foods, exercises, techniques to increase the size of your penis fast, as well as foods and exercises to AVOID that can damage your penis. You’ll be blown away by how easy this is.</p>
                        </div>
                        <div class="w-2/5 mt-2 md:mt-0 md:text-right">
                            <p><strike>$79.95</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-y border-gray-100">
                        <div class="grow pr-5">
                            <p><strong>Magic Words That Drive Her Wild.</strong> This “black book of sex” contains the dirtiest, most unthinkable, most seductive “dirty talk” lines you’ve ever heard - and women love them! These magic phrases are designed to give your girl more intense, longer lasting orgasms and make her louder and more ecstatic than you’ve ever seen. Finally get your girl to reveal her dirtiest side.</p>
                        </div>
                        <div class="w-2/5 mt-2 md:mt-0 md:text-right">
                            <p><strike>$39.00</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-y border-gray-100">
                        <div class="grow pr-5">
                            <p><strong>“Text To Sex” Course.</strong> A step-by-step blueprint of the EXACT messages to send your wife or girlfriend to get her turned on and so incredibly horny she’s practically dragging you into bed the second you get home! Includes word-for-word text messages you can send your girl as well as a step-by-step walkthrough of real text message conversations with women.</p>
                        </div>
                        <div class="w-2/5 mt-2 md:mt-0 md:text-right">
                            <p><strike>$39.00</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-y border-gray-100">
                        <div class="grow pr-5">
                            <p><strong>Female Confessions.</strong> Live, raw and uncensored video confessions about what women really want in bed. Discover their secret fantasies and hidden sexual desires. 8 women come clean and tell the raw truth – just make sure you’re ready to hear it, because it may be shocking to you! Discover the “13 Female Fantasies,” the 12 big mistakes men make and much more in this juicy hidden-camera video course.</p>
                        </div>
                        <div class="w-2/5 mt-2 md:mt-0 md:text-right">
                            <p><strike>$69.95</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-y border-gray-100 border-b-0">
                        <div class="grow pr-5">
                            <p><strong>Become Supernatural: Extreme Sexual Performance Secrets</strong> with Playboy Radio host and sex expert, the super-hot Jessica J. This includes the top secrets from hot women and sex experts to turn your lover on and make sure you’re the best in bed she’s ever had! Discover the dirty truth about what really works in bed and tricks always perform your BEST. This series is only for the most ambitious men who are really motivated to take their sex life to the highest level possible. You’ll get three FREE modules over the next 14 days and if you chose to continue, it’s just $19.98 per week billed monthly after that.</p>
                        </div>
                        <div class="w-2/5 mt-2 md:mt-0 md:text-right">
                            <p><strike>$39.96</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center items-center mb-7">
						<div class="text-3xl text-center text-gray-400 mx-3"><strike>Total Value: $336.50</strike></div>
						<div class="text-3xl font-semibold text-center text-lime-600 mx-3">All This Is Yours <u>FREE</u> Today!</div>
					</div>

                </div>
            </section>
            <section class="flex flex-col w-full mt-7">
                <div class="">
                    <p class="text-center text-sm text-gray-400 mb-2">Certified As Secure &amp; Trustworthy By The Leading Companies:</p>
                    <div class="flex">
                        <img class="mx-auto w-full" src="https://s3.amazonaws.com/5gm/sec-icons-new.jpg" style="max-width: 600px;">
                    </div>
                    <div class="flex justify-center text-4xl mt-8 mb-4 text-center condensed">
                        <h3>Top Rated By The Better Business Bureau!</strong></h3>
                    </div>
                    <p class="text-center text-sm my-2">Buy with <strong>confidence</strong>. See real, <strong>positive</strong> reviews from customers who love 5G Male. We’re <strong>top-rated</strong> with over 30,000 happy customers around the world.</p>
                    <div class="flex">
                        <img class="mx-auto w-full" src="https://flora-spring.s3.amazonaws.com/BBB-Icon.jpg" alt="bbb logo" style="max-width: 400px;">
                    </div>
                </div>
                <div class="flex justify-center text-3xl mt-7 mb-4 text-center">
                    <h3>Top Reviews of 5G Male From <strong>Recent Buyers...</strong></h3>
                </div>
                <div class="flex flex-column">
                <div class="top-reviewers">
                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">Dan P., Portland, OR</div>
                            </div>

                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“I Feel Like I Have My Mojo Back”</strong></div>
                            </div>
                            <p class="text-sm">
                                July 21, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p>Your stuff is awesome! I’m 62 and I’ve only been taking this for a week or two and I am already getting random erections throughout the day and they are staying hard for a long time too! Feels awesome. Ordering more today before it runs out.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">Paul S., Phoenix, AZ</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“Haven't Felt This Way Since High School”</strong></div>
                            </div>
                            <p class="text-sm">
                                July 19, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p class="">This really works!! I started a week ago and WOW! Rock hard penis whenever I get in the mood. Even at work when I’m stressed out I sometimes get an erection. The percent of hardness increase HUGE! It’s amazing. I even get erections while driving from the vibrations on the seat. Last time I can remember this happening is when I was in high school. I was in doubt at first, but now I’d recommend this to any man.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">Mike R., Gary, IN</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“Wife Can't Figure Out Why Sex Got So Much Better”</strong></div>
                            </div>
                            <p class="text-sm">
                                July 15, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p class="">Was at dinner w my wife and she asks: “so have you gotten bigger?” I haven’t told her yet what I’ve been taking, but it’s obviously working when your wife of 10+ years asks you if your penis is so hard now it looks like it has actually grown in size!</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">John M., Lubbock, TX</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“Could Last In Bed... Then Was Ready For Round 2!”</strong></div>
                            </div>
                            <p class="text-sm">
                                July 10, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p class="">I’ve been taking this for about 10 days. Last night, I come home and have great sex with my wife for 45 minutes – WAY longer than normal. Everything just works. It was awesome. Then I swear to God, I wake up about 4 hours later, with a boner that was so hard it actually felt borderline uncomfortable! I had to wake the wife up for round two and she loved it. I used to get these types of boners in 9th grade when girls would sit on my lap at parties. This stuff is crazy and it WORKS!</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">Brian K., Orlando, FL</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“Waking Up With Hard Wood Again”</strong></div>
                            </div>
                            <p class="text-sm">
                                July 06, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p class="">I’ve been taking this religiously for the past 2-3 weeks after a close friend recommended it to me. Today I woke up with the hardest erection I've had in months. By the time I got to work I was still hard! I also feel way more desire for sex. I am extremely happy and relieved about this.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">Robert A., Charlotte, NC</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“Girlfriend Says She's Never Felt So Turned On”</strong></div>
                            </div>
                            <p class="text-sm">
                                July 01, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p class="">Been using 5G male for almost a month and am definitely having harder and more frequent erections, but the biggest thing is what my girlfriend tells me! She says I've never felt so hard inside her, that it’s such a turn on and… she’s having way better orgasms now! This is a great feeling. There is anything more important to a man than satisfying his woman.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">Chris V., Los Angeles, CA</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“Feeling So Unbelievably Relieved”</strong></div>
                            </div>
                            <p class="text-sm">
                                June 24, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p class="">I found this product by a stroke of luck. I've been dealing with ED now for a few years and I have no idea what to do to help it besides maybe tadafil. I'm 58 years old, healthy, no heart issues or diseases and this has totally turned things around for me in bed. Honestly, as long as I’m taking this, I don't even have to think about "if" I'm going to get hard anymore!</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap mb-2 items-center">
                            <div><img src="/images/gray-user-icon.gif" alt="avatar"></div>
                            <div class="text-gray-400 text-bold ml-2">Greg I., Boulder, CO</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-2">
                            <div><img src="/images/star-icon.gif" alt="stars"></div>
                            <div class="text-lg"><strong>“Girlfriend Giving Me A Huge Ego Boost”</strong></div>
                            </div>
                            <p class="text-sm">
                                June 20, 2022
                                &nbsp; | &nbsp; <strong class="text-red-400">Verified Purchase</strong>
                            </p>
                            <p class="">My girlfriend says (during sex) "You're so HARD!!! Stop moving for a moment... it's too much. And stop pulsing!" Hah. that made me laugh. She also commented while we were in the shower together and I was hard, she said (while grabbing it) "you're really hard you know". And that's what you call ego boost!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
				<div class="hidden md:flex justify-center text-center">
				<h3 class="condensed text-3xl mb-5">A Part of Your Order Is Donated To These Brave Veterans</h3>
				</div>
				<p class="hidden md:flex md:flex-col w-full text-center my-3 text-sm">Part of your 5G Male order today will be donated to The Wounded Warrior Project to help support a veteran like Dave. <br> <span class="veteran-link w-full mx-auto text-center" style="cursor:pointer;"><u>Click Here To Order Now</u>.</span></p>
				<div class="hidden md:flex justify-center px-20">
					<img class="w-auto" src="https://5gm.s3.amazonaws.com/veteran-warriors.jpg" alt="Wounded Warrior Project">
				</div>
			</section>
            <section class="flex flex-col w-full mt-11">
            <div class="flex justify-center text-center text-3xl condensed"> <h2 class="mt-0">Here Are The Most <strong>Frequently Asked Questions</strong> We Get...</h2> </div>
            <?php template("includes/basicFaq"); ?>

            </section>
            <div class="flex justify-center flex-wrap my-7 text-center">
                <a class="hover:font-blue-400 text-3xl underline" href="" id="click-to-choose" style="color: #003dea;">Click Here To Choose Your Discount Package And Continue With Your Order</a>
            </div>

            <div class="flex justify-center flex-wrap mb-4 text-center">
                    <a class="mx-3 clickable" style="color:#000;text-decoration:underline;" target="_blank" href="terms.php">Terms and Conditions</a> &nbsp;
                    <a class="mx-3 clickable" style="color:#000;text-decoration:underline;" target="_blank" href="privacy.php">Privacy Policy</a> &nbsp;
                    <a class="mx-3 clickable" href="#" style="color:#000;text-decoration:underline;" onclick="return (function(){zE.activate();return false;})()">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="flex justify-center sticky-timer" style="display:none;">
        <p>Your Discount Is Being Held For <span id="countdown-sticky"></span><span id="ms"></span>, Until It Is Given To The Next Man Waiting In Line</p>
    </div>


    





                <!-- id secure-scroll -->
    <!-- <div id="floatButton" class="flex justify-center md:justify-end w-full p-3 floating-btn">
        <span id="buy-btn" style="display: none;" class="button w-auto">
            Secure My Order
        </span>
    </div> -->

    <?php
    $button_text = 'Secure My Order';
    $scroll_id = 'cta';
	floatButton('includes/floatButton',$button_text,$scroll_id);
	?>


    <?php
    // declare modal variables (requires basic_modal.js)
    $modal_id = 'runOutModal';
    $modal_title = "IMPORTANT:";
    $modal_body = '
    <h1 class="modal-headline">Time Has Expired!</h1>
    <p>Your 5G Male discount is no longer being held! Please <strong>choose your discount package now</strong> before your spot is given away to the next man in line...</p>
    ';
    $modal_footer = '
    <div id="modalButton" class="w-full text-center"><button style="font-size: 30px;font-weight: bold;color: #fff;border: none;background-color: #78A300;padding: 5px 25px;margin-top:15px;">YES, Complete My Order!</button></div>
    ';
    modal('includes/basicModal', $modal_id, $modal_title, $modal_body, $modal_footer);
    ?>


    <?php
    // declare modal variables (requires basic_modal.js)
    $modal_id = 'mouseModal';
    $modal_title = "WAIT!";
    $modal_body = '
        <h3 style="text-align:center;font-size:28px;line-height:34px;font-weight:normal;margin-top:-15px;color:#000;">
            There&apos;s <strong>A SPECIAL DEAL</strong> For You! Pay just <strong>$23.95 today</strong> or pay using <strong>PayPal</strong>.
        </h3>
        <h4 style="text-align:center;font-weight:normal;margin-top: 15px;font-size:18px;">Just click the button below to continue...</h4>
        <div class="text-center my-2" <strong>A SPECIAL DEAL</strong> For You! Pay just <strong>$23.95 today</strong> or pay using <strong>PayPal</strong>.</div>
    ';
    $modal_footer = '
    <div class="w-full text-center"><a href="order.php<?php echo trim(@$querystring); ?>"><button class="clickable" style="font-size: 30px;font-weight: bold;color: #fff;border: none;background-color: #78A300 !important;padding: 5px 25px;margin-top:15px;">CONTINUE</button></a></div>
    ';
    modal('includes/basicModal', $modal_id, $modal_title, $modal_body, $modal_footer);
    ?>

    <!-- modal and floating button functionality -->
    <script>
        

        // modal on mouseleave
        window.addEventListener('mouseleave', () => {
            window.modalHandler('mouseModal', true);
        })

        // modal on navigate away
        window.addEventListener('popstate', function(e) {
            window.onbeforeunload = function() { return "Your work will be lost."; };
            window.modalHandler('mouseModal', true);
        });
        window.onbeforeunload = function() {
            window.onbeforeunload = function() { return "Your work will be lost."; };
            window.modalHandler('mouseModal', true);
        }

    window.addEventListener("DOMContentLoaded", function() {

        const discountSection = document.getElementById("cta");
        // const email = document.querySelector(".customer_email");
        // email.val(sessionStorage.getItem("customer_email"));

        // no btn-four id on any element


        document.getElementById("click-to-choose").addEventListener('click', function(e){
            e.preventDefault();
            window.scrollTo({top: discountSection.offsetTop});
        });

        document.querySelector(".veteran-link").addEventListener('click', function() {
            window.scrollTo({top: discountSection.offsetTop});
        });

        document.getElementById("six-package").addEventListener('click', function() {
            window.scrollTo({top: discountSection.offsetTop});
        });

        
        window.addEventListener('scroll', function(){
            var container = document.querySelector(".stock-container");
            let sc = (window.scrollTop > (container.offsetTop + container.offsetHeight));
            document.querySelector(".sticky-timer").style.display = sc ? 'flex' : 'none';
        });

        const addOns = document.querySelector(".addOns");
        addOns.addEventListener('change', function() {
            if(document.getElementById('addon2').checked) {
                document.querySelector(".add2").value = '1';
            }else{
                document.querySelector(".add2").value = '0';
            }
            if(document.getElementById("addon1").value == '1'){
                document.querySelector(".add1").value = '1';
            }
            if(document.getElementById("addon1").value == '2'){
                document.querySelector(".add1").value = '2';
            }
            if(document.getElementById("addon1").value == '3'){
                document.querySelector(".add1").value = '3';
            }
            if(document.getElementById("addon1").value == '0'){
                document.querySelector(".add1").value = '0';
            }
        })

          const ship = document.getElementById("select-ship");
          ship.addEventListener('change', function(){
            if(ship.value == '2'){
                document.getElementById("pid2").value = '954';
            }
            if(ship.value == '3'){
                document.getElementById("pid2").value = '953';
            }
        });

        // TODO: replace with modal (need lg option)
        // const popup = document.querySelector('.fancybox');
        // popup.fancybox({
        //     'width': 560,
        //     'height': 340,
        //     'autoDimensions': false
        // });

        <?php if($timerCheck < 0) { ?>
            console.log("timer is < 0");
        <?php } else { ?>
            console.log("timer is > 0");
        <?php } ?>
    });
    </script>

    <script>

        var WARNING_THRESHOLD = 1 * 60 * 1000; //1 minute (in milliseconds)

        function doStart() {
            // todo: get this to start from time left from other page
            var id = "countdown";
            var i = 900 - <?php echo $timerDelay; ?>; //duration in seconds (10 minutes)

            ActivateCountDown(id, i);
        }

        function doStart1() {
            // todo: get this to start from time left from other page
            var id = "countdown-sticky";
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
                $_countDownContainer = document.getElementById(strContainerID);
                //the ATimer below works with time values in milliseconds
                //the "20" will update display ever 20 milliseconds, as fast as screen refreshes
                $_countDownContainer.classList.remove("warn");

                var timerID = new ATimer(initialValue * 1000, 20, CountDownComplete, CountDownTick);
                timerID.start();
            }

            function CountDownComplete() {
                //alert("Your time is up!");
                // $('#noise').get(0).pause();
                // $("#runOutModal").modal('show');
                // new modal
                _countDownContainer.innerHTML = "00:00";
                setTimeout(() => {
                    window.modalHandler('runOutModal', true);
                }, "1000")
                
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
            document.getElementById("countdown").innerHTML = "00:00";
            document.getElementById("countdown-sticky").innerHTML = "00:00";
            // $("#runOutModal").modal('show');
            window.modalHandler('runOutModal', true);
        } else {
            doStart();
            doStart1();
        }

        window.addEventListener("DOMContentLoaded", function() {
            var modalButton = document.getElementById("modalbutton");
            var outModal = document.getElementById("runOutModal");
            if (modalButton) {
                modalButton.addEventListener('click', (e) => {
                    window.scrollToTop();
                    outModal.modal('hide');
                });
            }
            
        });

        

    </script>



<?php if(@$_GET['voltrk']) { ?>
<script>

function createCookie(name, cid, days) {
    var name = 'cidcookie';
    var cid = dtpCallback.getClickID();
    var days = 45;
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + cid + expires + "; path=/";
}


function cidgrab() {
    var cid = dtpCallback.getClickID();
    var name = 'cidcookie';
    var days = 45;
    console.log(cid);
    createCookie(name, cid, days);
}
<?php if(isset($_GET['cpid'])) { ?>
    setTimeout("cidgrab()", 3000);
<?php } ?>

</script>
<?php } ?>


	<!-- Start of gothamclub Zendesk Widget script -->
	<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="gothamclub.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
	/*]]>*/</script>
	<!-- End of gothamclub Zendesk Widget script -->

    <?php if ($site['debug'] == true) {
        // Show Debug bar only on whitelisted domains.
        template('debug', null, null, 'debug');
    } ?>
    </body>
</html>