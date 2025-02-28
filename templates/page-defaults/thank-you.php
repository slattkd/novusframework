<?php
$_SESSION['pageType'] = 'receipt';

unset($_SESSION['declineup']);

$orderid = $_SESSION['orderId'] ?? 0;
$customerid = $_SESSION['customerId'] ?? 0;

//include('../ll2/llapi.php');

$sticky = new sticky();

$complete = array(
    'method' => 'order_find',
    'start_date' => date('m/d/Y', mktime(0, 0, 0, date("m"), date("d") - 1, date("Y"))),
    'end_date' => date('m/d/Y'),
    'criteria' => 'customer_id=' . (int)$customerid . ',approved',
    'return_type' => 'order_view',
    'search_type' => 'all'
);

$completeArray = print_r($complete, true);
$logger->info('Thank You Receipt Post: ' . $completeArray);

//Allow more than one campaign to display
$complete['campaign_id'] = $site['campaign'];
$results = $sticky->api(2, $complete);

$resultsArray = print_r($results, true);
$logger->info('Thank You Receipt: ' . $resultsArray);
$products = $results['data'] ?? [];

$items = json_decode($results['data'], true);
$info = $items[$orderid];

//no additional project logic

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
            display: inline-block;
            background: transparent;
            padding: 13px;
            /* outline: 3px solid #14a536; */
            box-shadow: 0px 0px 0px 3px #14a536 inset;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            -ms-transform: rotate(45deg) scale(1.5);
            -webkit-transform: rotate(45deg) scale(1.5);
            transform: rotate(45deg) scale(1.5);
        }

        @media screen and (max-width: 768px) {
            .checkmark {
                transform: rotate(45deg) scale(1.2);
            }
        }

        .checkmark:before {
            content: "";
            position: absolute;
            width: 4px;
            height: 11px;
            background-color: #14a536;
            left: 13px;
            top: 7px;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            width: 8px;
            height: 4px;
            background-color: #14a536;
            left: 9px;
            top: 15px;
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

        p.copy {
            font-size: 14px;
        }

    </style>
</head>

<body class="bg-gray-100">

    <div class="container container-vsl mx-auto py-4 md:py-20 px-2 md:px-5 md:px-8 min-h-screen">
        <div class="">
            <div class="flex items-center justify-center mb-0 md:mb-4">
                <h1 class="flex items-center text-base md:text-2xl font-semibold pb-0 text-tygreen">
                <span class="checkmark mr-1 md:mr-2" aria-hidden="true"></span> Thank you, Your Order is Now Complete!
                </h1>
            </div>

            <div class="flex w-full flex-col bg-white border rounded-lg border-2 border-tygreen">
                    <div class="flex justify-center items-center rounded-t py-2 md:py-3 pr-3 md:pr-6 text-white bg-tygreen">
                        <div class="w-1/5 mx-3">
                            <img class="truck max-h-8 object-contain text-right w-full" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/icon-shipping-truck-green.png" style="height:auto;filter: brightness(2);">
                        </div>
                        <div class="leading-5 text-sm md:text-lg">Your Order Will Be Shipped The Next Business Day At 9AM</div>
                    </div>
                <div class="p-4 px-6">
                    <div class="flex">
                        <h3 class="text-2xl font-bold mb-4">Order Information</h3>
                    </div>

                <?php
                    $grand_total = 0;
                    $sum_total = 0;
                    $blocked_skus = array('gift_stick', 'trial_stick', 'research_letter', 'discount_stick', '5gm_auto_stick', '5GPC', '5GPCnoship');

                if (isset($items)) {
                    foreach ($items as $o => $item) {

                        if (!in_array($item['products[0][sku]'], $blocked_skus)) {
                            $product = $item['products']['0'];
                            $stuff = '';
                            $stuff .= "nsOrderItems.push('{{" . $product['name'] . "}}{{" . $product['price'] . "}}{{1}}');\n";
                            echo '
                            <div class="flex justify-between px-3 py-1">
                            <div class="text">' . $product['name'] . '</div>
                            <div class="price text-right">$ ' . number_format((float)$product['price'], 2, '.', '') . '</div>
                            </div>
                            ';

                            $grand_total += $item['order_total'];
                            $sum_total += $product['price'];
                        }
                    }
                }

                $shippingCost = $_SESSION['shippingCost'] ?? 0;

                $ordertotal = number_format($sum_total + $shippingCost, 2);
                $shipping = number_format($shippingCost, 2);
                $tax_total = taxAmt($sum_total);
                $final_total = number_format($sum_total + $shipping + $tax_total, 2);
                ?>

                <div class="flex justify-between px-4 py-1">
                    <div class="text">Shipping</div>
                    <!-- number_format((float)$grand_total, 2, '.', '') -->
                    <!-- money_format('%i', $grand_total) -->
                    <div class="price text-right">$ <?= $shipping; ?></div>
                </div>
                <div class="flex justify-between px-4 py-1">
                    <div class=" flex flex-nowrap items-center" style="white-space:nowrap">Sales Tax
                    <?php if (isset($_SESSION['tax_pct'])): ?>
                    <div class="text-sm text-gray-400 ml-2">(<?= $_SESSION['tax_pct']; ?>%)</div>
                    <?php endif; ?>
                    </div>
                    <div class="price text-right">$ <?= $tax_total; ?></div>
                </div>
                <div class="flex justify-between px-4 py-2">
                    <div class="text">Total</div>
                    <div class="price text-right ext-xl font-bold">$ <?= $final_total; ?></div>
                </div>

                <div class="border-b flex px-4 py-2 text-gray-500">
                    <p>All charges will appear on your credit card statement as "<?= $company['billedAs']; ?>"</p>
                </div>
                
                <div class="flex mt-6">
                    <h3 id="customer" class="text-2xl font-bold mb-0 mt-6">Customer information</h3>
                </div>
                <div class="columns-3xs">
                    <div class="flex flex-col p-3">
                        <h4 class=" text-xl font-semibold">Shipping Address</h4>
                        <?php echo @$items[$orderid]['shipping_street_address']; ?><br>
                        <?php if (isset($items[$orderid]['shipping_street_address2'])) {
                            echo @$items[$orderid]['shipping_street_address2'] . '<br>' . '';
                        } ?>
                        <?php echo @$items[$orderid]['shipping_city']; ?>,
                        <?php echo @$items[$orderid]['shipping_state']; ?>
                        <?php echo @$items[$orderid]['shipping_postcode']; ?>
                    </div>
                    <div class="flex flex-col p-3">
                        <h4 class=" text-xl font-semibold">Billing Address</h4>
                        <?php echo @$items[$orderid]['billing_street_address']; ?><br>
                        <?php if (isset($items[$orderid]['billing_street_address2'])) {
                            echo @$items[$orderid]['billing_street_address2'] . '<br>' . '';
                        } ?>
                        <?php echo @$items[$orderid]['billing_city']; ?>,
                        <?php echo @$items[$orderid]['billing_state']; ?>
                        <?php echo @$items[$orderid]['billing_postcode']; ?>
                    </div>
                </div>
                <div class="flex-flex-col px-3">
                    <h4 class=" text-xl font-semibold">Email</h4>
                    <p><?php echo @$_SESSION['email']; ?></p>
                </div>
                

                <!-- <div class="flex justify-center py-7 text-3xl text-red-700 text-center font-semibold hidden">
				<h2>"Last Chance! Add These Recommended Products For Free Shipping!"</h2>
				</div> -->

				<section>
					<div class="flex w-full flex-col">
						<div class="title text-center text-red-700 font-semibold font-2xl">
						</div>
					</div>
				</section>

                <!-- <div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-4 sans uppercase"> <?php echo $company['name']; ?> </div> -->
            </div>
                <div class="flex flex-col items-center text-center bg-tygreen text-white p-3">
                    <div class="img"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/icon-customer-service.png" alt=""></div>
                    <div class="text-xl my-3">
                        Want to add or change your order or need help?
                    </div>
                    <div class="text-lg">
                        Email <span class="font-semibold"><?= $company['email']; ?></span>
                        or call <span class="font-semibold"><?= $company['phone']; ?></span> now to speak to a customer service representative 24/7!
                    </div>

                </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center md:justify-between items-center mt-3">
            <div class="w-full md:w-auto text-center mb-2 md:mb-0 hidden">
                <span class="question text-sm" aria-hidden="true"></span>
                Need help? <a class="clickable underline" href="<?php echo ($site['contactlink'])?>" target="_blank">Contact us</a>
            </div>
            <div class="flex justify-center mx-auto w-full">
                  <?php legalLinks("includes/legalLinks");?>
            </div>
        </div>
    </div>

<?php
// declare modal variables (requires basic_modal.js)
    $modal_id = 'declineModal';
    $modal_title = "This Payment Was Not Processed";
    $modal_body = '
    <div class="text-sm text-center my-2">
    Sorry but unfortunately this payment method was declined. To get this amazing deal, please call our customer support line at <strong><?= $company["phone"]; ?></strong> to try alternate payment options.
    </div>
    ';
    modal("includes/basicModal", $modal_id, $modal_title, $modal_body);
?>

    <script>
        

		// hide or show content with fade in out
		function display(element, show) {
			if (show) {
				element.classList.remove('hide');
				element.classList.add('show');
			} else {
				element.classList.remove('show');
				element.classList.add('hide');
			}
		}
    </script>

    <?php if ($site['debug'] == true) {
      // Show Debug bar only on whitelisted domains.
      template('debug', null, null, 'debug');
  } ?>
</body>

</html>