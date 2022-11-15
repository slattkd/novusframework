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

var_dump($complete);
var_dump($results);

echo $_SESSION['orderId'].'<br>';
echo $_SESSION['customerId'];
echo "<pre>";
echo json_encode(json_decode($results['data']), JSON_PRETTY_PRINT);
echo "</pre>";
print_r($results);

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
                        <?php echo $items[$orderid]['shippingAddress']; ?><br>
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

                            $stuff .= "nsOrderItems.push('{{" . $item['products[0][name]'] . "}}{{" . $item['products[0]price'] . "}}{{1}}');\n";
                            echo '
                            <div class="flex justify-between px-3 py-2">
                            <div class="text">' . $item['products[0][name]'] . '</div>
                            <div class="price text-right">$ ' . number_format((float)$item['products[0][price]'], 2, '.', '') . '</div>
                            </div>
                            ';

                            $total_sum += $item['products[0][price]'];
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

                <div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-11 sans uppercase"> Supernatural Man LLC </div>
            </div>
        </div>

        <div class="flex flex-wrap justify-center md:justify-between items-center mt-3">
            <div class="w-full md:w-auto text-center">
                <span class="question text-sm" aria-hidden="true"></span>
                Need help? <a class="clickable underline" href="mailto:support@5gmale.com" target="_blank">Contact us</a>
            </div>
            <div class="flex">
                    <!-- <div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/refund_policy.php" target="_blank">Refund Policy</a></div>
                    <div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/privacy_policy.php" target="_blank">Privacy Policy</a></div>
                    <div class="px-2 text-sm underline"><a href="http://www.5gmale.com/policy/terms_of_service.php" target="_blank">Terms of service</a></div> -->
                    <?php legalLinks("includes/legalLinks");?>
            </div>
        </div>
    </div>
</body>
<?php template("includes/footer"); ?>

</html>