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
$_SESSION['pageType'] = 'receipt';

$orderid = $_SESSION['orderId'];
//$cid = $_SESSION['customerID'];

//include('../ll2/llapi.php');

$sticky = new sticky();

$complete = array(
    'method' => 'order_find',
    'start_date' => date('m/d/Y', mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"))),
    'end_date' => date('m/d/Y'),
    'criteria' => 'customer_id=' . (int)$_SESSION['customerId'] . ',approved',
    'return_type' => 'order_view',
    'search_type' => 'all'
);

//Allow more than one campaign to display
$complete['campaign_id'] = $site['campaign'];
$results = $sticky->api(2, $complete);
$products = $results['data'];

$items = json_decode($results['data'], true);
$info = $items[$orderid];
$mailer = 0;

if ($_SESSION['affid'] == 1798) {
    $mailer = 1;
}

$firedl = 0;



?>
<!DOCTYPE>
<html>

<head>
    <?php template("includes/header"); ?>
    <title>Thank You!</title>

    <style>
        h1 {
            text-align: center;
            margin-top: 0 !important;
        }

        a {
            color: #e44848;
        }

        a:hover {
            color: #e45548;
        }

        #customer {
            margin-top: 5px;
        }

        #order {
            padding-top: 20px;
        }

        .right {
            text-align: right;
        }

        #total {
            font-size: 1.14em;
            font-weight: 400;
            padding-top: 5px;
            padding-left: 30px;
        }

        .shiptax {
            font-weight: 400 !important;
        }

        #totalVal {
            font-size: 1.71429em;
            font-weight: 500;
        }

        ul {
            text-align: right;
        }

        ul li {
            display: inline-block;
            padding-right: 20px;
            font-size: 12px;
            list-style: none;
        }

        @media(max-width: 798px) {
            #footer-menu {
                margin-top: 10px;
            }

            ul {
                text-align: left;
                margin-top: 10px;
            }

            h1 {
                font-size: 25px;
                margin-bottom: 15px;
            }

            .slpage {
                padding-top: 0 !important
            }
        }

        .question:before {
            content: '?';
            display: inline-block;
            font-family: sans-serif;
            font-weight: 500;
            text-align: center;
            width: 1.1rem;
            height: 1.075rem;
            font-size: 14px;
            line-height: 1.8ex;
            border-radius: 1rem;
            margin-right: 0;
            padding: 3px;
            color: white;
            background: black;
            text-decoration: none;
        }

        .checkmark {
            display:inline-block;
            background: gray;
            width: 22px;
            height:22px;
            border-radius:50%;
            -ms-transform: rotate(45deg) scale(1.5); /* IE 9 */
            -webkit-transform: rotate(45deg) scale(1.5); /* Chrome, Safari, Opera */
            transform: rotate(45deg) scale(1.5);
        }

        .checkmark:before{
            content: "";
            position: absolute;
            width: 2px;
            height: 11px;
            background-color: #fff;
            left: 12px;
            top: 4px;
        }

        .checkmark:after{
            content: "";
            position: absolute;
            width: 7px;
            height: 2px;
            background-color: #fff;
            left: 7px;
            top: 13px;
        }

        h4 {
            font-size: 23px;
            line-height: 27px;
            margin: 1rem 0;
            font-weight: 600;
        }

        .red {
            color: #b60000;
        }

        .main-button button {
            background: #ffffce;
            background: -moz-linear-gradient(top,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
            background: -webkit-linear-gradient(top,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
            background: linear-gradient(to bottom,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffce', endColorstr='#e75f01', GradientType=0);
            border: solid 3px #994000;
            font-size: 20px;
            text-shadow: 0.5px 0.9px 1px #fffa65;
            color: #10284c;
            border-radius: 6px;
            margin-top: 15px;
            line-height: 1;
            padding: 14px 12px;
            font-weight: 600;
        }

    </style>
</head>

<body class="bg-gray-100">

    <div class="container container-vsl mx-auto py-20 px-5 md:px-8 min-h-screen">
        <div class="content">
            <div class="flex justify-center mb-3">
                <h1 class="text-gray-500 text-2xl font-bold"><span class="checkmark mr-2"aria-hidden="true"></span> Thank you <?php echo $_SESSION["first_name"]; ?>!</h1>
            </div>

            <div class="flex w-full flex-col bg-white p-4 px-6 border rounded border-black">
                <div class="flex">
                    <h3 id="customer" class="text-2xl font-bold mb-4">Customer information</h3>
                </div>
                <div class="columns-3xs ...">
                    <div class="flex flex-col p-3">
                        <h4 class=" text-xl font-semibold">Shipping Address</h4>
                        <?php echo $items[$orderid]['shipping_street_address']; ?><br>
                        <?php if ($items[$orderid]['shipping_street_address2'] != "") {
                            echo $items[$orderid]['shipping_street_address2'] . '<br>' . '';
                        } ?>
                        <?php echo $items[$orderid]['shipping_city']; ?>,
                        <?php echo $items[$orderid]['shipping_state']; ?>
                        <?php echo $items[$orderid]['shipping_postcode']; ?>
                    </div>
                    <div class="flex flex-col p-3">
                        <h4 class=" text-xl font-semibold">Billing Address</h4>
                        <?php echo $items[$orderid]['billing_street_address']; ?><br>
                        <?php if ($items[$orderid]['billing_street_address2'] != "") {
                            echo $items[$orderid]['billing_street_address2'] . '<br>' . '';
                        } ?>
                        <?php echo $items[$orderid]['billing_city']; ?>,
                        <?php echo $items[$orderid]['billing_state']; ?>
                        <?php echo $items[$orderid]['billing_postcode']; ?>
                    </div>
                </div>
                <div class="flex-flex-col px-3">
                    <h4 class=" text-xl font-semibold">Email</h4>
                    <p><?php echo $_SESSION['email']; ?></p>
                </div>
                <div class="flex">
                    <h3 id="customer" class="text-2xl font-bold mb-4 pt-6">Order Information</h3>
                </div>

                <?php
                    $total_tax = 0;
                    $grand_total = 0;
                    $blocked_skus = array('gift_stick', 'trial_stick', 'research_letter', 'discount_stick', '5gm_auto_stick', '5GPC', '5GPCnoship');

                if (isset($items)) {
                    foreach ($items as $o => $item) {

                        if (!in_array($item['products[0][sku]'], $blocked_skus)) {
                            $product = $item['products']['0'];
                            $stuff = '';
                            $stuff .= "nsOrderItems.push('{{" . $product['name'] . "}}{{" . $product['price'] . "}}{{1}}');\n";
                            echo '
                            <div class="flex justify-between px-3 py-2">
                            <div class="text">' . $product['name'] . '</div>
                            <div class="price text-right">$ ' . number_format((float)$product['price'], 2, '.', '') . '</div>
                            </div>
                            ';

                            $total_sum = 0;
                            $total_sum += $product['price'];
                            $total_tax += (float)$item['order_sales_tax_amount'];
                            $grand_total += (float)$item['order_total'];
                        }
                    }
                }

                if ($items[$orderid]['shipping_country'] == 'US') {
                    if ($mailer) {
                        $shippingTotal1 = 7.95;
                    } else {
                        $shippingTotal1 = 6.95;
                    }
                } else {
                    $shippingTotal1 = 14.95;
                }

                if (isset($_SESSION['pid'])) {
                    if ($_SESSION['pid'] != '4' && $_SESSION['pid'] != 1 && $_SESSION['pid'] != 952 && $_SESSION['pid'] != 956) {
                        $shippingTotal1 = 0.00;
                    }
                }

                if ($_SESSION['add1'] == 1) { echo '
                    <div class="flex justify-between px-3 py-2">
                    <div class="text">Super Lube</div>
                    <div class="price text-right">$14.95</div>
                    </div>
                    ';
                    $total_sum += 14.95;
                }

                if ($_SESSION['add1'] == 2) { echo '
                    <div class="flex justify-between px-3 py-2">
                    <div class="text">Super Lube</div>
                    <div class="price text-right">$29.90</div>
                    </div>
                    ';
                    $total_sum += 29.90;
                }

                if ($_SESSION['add1'] == 3) { echo '
                    <div class="flex justify-between px-3 py-2">
                    <div class="text">Super Lube</div>
                    <div class="price text-right">$44.85</div>
                    </div>
                    ';
                    $total_sum += 44.85;
                }

                if ($_SESSION['add2'] == 1) { echo '
                    <div class="flex justify-between px-3 py-2">
                    <div class="text">Sex Positions</div>
                    <div class="price text-right">$19.95</div>
                    </div>
                    ';
                    $total_sum += 19.95;
                }

                $ordertotal = $total_sum + $shippingTotal1 + (float)$total_tax;
                ?>

                <div class="flex justify-between px-3 py-2">
                    <div class="text">Shipping</div>
                    <!-- number_format((float)$grand_total, 2, '.', '') -->
                    <!-- money_format('%i', $grand_total) -->
                    <div class="price text-right">$ <?php echo number_format((float)$shippingTotal1, 2, '.', ''); ?></div>
                </div>
                <div class="flex justify-between px-3 py-2">
                    <div class="text">Sales Tax</div>
                    <div class="price text-right">$ <?php echo number_format((float)$total_tax, 2, '.', ''); ?></div>
                </div>
                <div class="flex justify-between px-3 py-2">
                    <div class="text">Total</div>
                    <div class="price text-right ext-xl font-semibold">$ <?php echo number_format((float)$grand_total, 2, '.', ''); ?></div>
                </div>

                <div class="w-full py-2 text-right"><a href="http://members.supernaturalman.com/login" target="_blank">Click Here to Members Area</a></div>
                <div class="w-full pb-2 text-right">Username:  <?php echo $_SESSION['email']; ?></div>

                <div class="flex justify-center py-7 text-3xl text-red-600 text-center font-semibold hidden">
				<h2>"Last Chance! Add These Recommended Products For Free Shipping!"</h2>
				</div>

				<section>
					<div class="flex w-full flex-col">
						<div class="title text-center text-red-600 font-semibold font-2xl">
						</div>
					</div>	
				</section>

				<section>
				<div class="additional-products">
				<div class="prod1">
					<h4 class="red text-center">
						
                        <em>"Cum On Me, Please!!"</em>
                        <br>
                        Hot Girls Secretly LOVE Big Loads… Do NOT Disappoint Her!
                        <br>
                        Shoot 4x Bigger Loads With Volumizer
                    
					</h4>

					<div class="float-left w-full md:w-3/5 p-r md:pr-4">
						<p class="copy">Supernatural Man’s Volumizer <strong>safely</strong> creates more, better-tasting semen in your body so you’ll shower her in <strong>super sized loads</strong> for multiple rounds. Volumizer sweetens your cum with a fruity candy-like taste… and awakens a cum fetish in even the prudest girls!</p>

						<p  class="copy">This luxury formula normally costs $270.00 for a 3-month’s supply but you can get it for only $119.95 on this page and I’ll add it to your order so there’s no shipping cost.</p>

						<p  class="copy">Last chance to click the button below to secure your savings--you won’t see a price this low on Volumizer again…</p>
					</div>

					<div class="float-right w-full md:w-2/5"><img class="mx-auto md:m-0" src="//5gm.s3.amazonaws.com/new/volumizer+250+px.jpg"></div>
					
					<div class="bottom w-full">
						<div class="main-button text-center pb-3">
							<button id="prod1-btn" class="w-full">Yes, turn her into your personal cumslut now!</button>
						</div>
						<center><div class="sk-chase spinner1">
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
						</div></center>
						<p class="ty1 ty green text-center hide">Thank You! 3 Bottles of Volumizer Have Been Added to Your Order…</p>
					</div>
				</div>
				<hr class="clearfix">
				<div class="clearfix"></div>
				<div class="prod2">
					<h4 class="red text-center">
						New Research Proves Testosterone Levels Dropping To ‘Unsaveable’ Levels In Men Born Between 1942-1980
						<br>
						However, there’s still hope…
					</h4>

					<div class="float-left w-full md:w-3/5 p-r md:pr-4">
						<p class="copy">Dr. Clayton Paul’s pioneering research has resulted in the ‘T3 Multiplier’ - a formula that eliminates the excess estrogen and saves dying testosterone in men over 40.</p>

						<p  class="copy">T3 Multiplier allows testosterone to ‘regroup & rebuild’ stronger than ever. Experience your prime youth again with increased energy, sex drive, and muscle mass. </p>

						<p  class="copy">Click the button below to get 3 bottles of ‘T3 Multiplier’ for only $117.95 (regular price is $269.85) and I’ll ship it to you for free.</p>

						<p class="copy">You will never see this offer again so do not miss out. </p>
					</div>
					<div class="float-right w-full md:w-2/5"><img class="mx-auto md:m-0" src="//5gm.s3.amazonaws.com/new/t3+250+px.jpg"></div>
					
					<div class="bottom w-full">
						<div class="main-button text-center pb-3">
							<button id="prod2-btn" class="w-full">Yes, I want to experience my prime again!</button>
						</div>
						<center><div class="sk-chase spinner2">
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
						</div></center>
						<p class="ty2 ty green text-center hide">Thank You! 3 Bottles of T3 Multiplier Have Been Added To Your Order...</p>
					</div>
				</div>
				<hr class="clearfix">
				<div class="clearfix"></div>
				<div class="prod3">
					<h4 class="red text-center">
						Get Complete Control Over Her Orgasms When You Turn Your Dick Into A ‘Living Vibrator’
						<br>
						Rub O.X Gel On Your Dick And Create A Tingling, Pulsing Sensation Inside Her
						<br>
						<strong>~Makes <em>Her</em> Prematurely Climax!~</strong>
					</h4>

					<div class="float-left w-full md:w-3/5 p-r md:pr-4">
						<p class="copy">Doctor formulated O.X Gel creates a pulsing sensation that makes her uncontrollably cum - without making your dick feel too sensitive. She’ll be begging for anal when it drips to her ass <em>(even if she’s sworn off ass play before!)</em></p>

						<p class="copy"><strong>This is your last chance to get O.X Gel at a fraction of the price everyone else pays.</strong></p>

						<p class="copy">Click the button below and get 3 Bottles of O.X Gel for a mere $59.95 (She’ll be thankful you stocked up). This is the lowest price you’ll see on O.X. Gel from now on… and you’ll <em>never</em> see a price this low again:</p>
					</div>
					
					<div class="float-right w-full md:w-2/5"><img class="mx-auto md:m-0" src="//5gm.s3.amazonaws.com/new/ox+gel+250+px.jpg"></div>

					<div class="bottom w-full">
						<div class="main-button text-center pb-3">
							<button id="prod3-btn" class="w-full">Yes, I want complete control over her orgasms!</button>
						</div>
						<center><div class="sk-chase spinner3">
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
							<div class="sk-chase-dot"></div>
						</div></center>
						<p class="ty3 ty green text-center hide">Thank You! 3 Bottles of O.X. Gel Have Been Added To Your Order...</p>
					</div>
				</div>
			</div>
				</section>

                <div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-4 sans uppercase"> Supernatural Man LLC </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center md:justify-between items-center mt-3">
            <div class="w-full md:w-auto text-center">
                <span class="question text-sm" aria-hidden="true"></span>
                Need help? <a class="clickable underline" href="mailto:support@5gmale.com" target="_blank">Contact us</a>
            </div>
            <div class="flex">
                    <!-- <div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/refund_policy" target="_blank">Refund Policy</a></div>
                    <div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/privacy_policy" target="_blank">Privacy Policy</a></div>
                    <div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/terms_of_service" target="_blank">Terms of service</a></div> -->
                    <?php legalLinks("includes/legalLinks");?>
            </div>
        </div>
    </div>
</body>

</html>