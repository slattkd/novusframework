<?php

$logger->info('Processing Upsell Checkout');
debugMessage("Processing Upsell Checkout");

unset($_SESSION['formError']);
unset($_SESSION['llerrorcode']);
unset($_SESSION['llerror']);
unset($_SESSION['formerrors']);
unset($_SESSION['declineup']);



/*
//Check for allowed query string keys, reduces attempts on invalid data.
$whitelistKeys = ["buy","pid","next"];
$allowedData = array_intersect_key($encryptedData, array_flip($whitelistKeys));

foreach ($allowedData as $queryString => $value) {
    // use $queryString to reset values to different session variables or match to query string value
    if ($queryString == 'buy') {
        $_SESSION['buy'] = $value ?? null;
    }
    if ($queryString == 'next') {
        $_SESSION['next'] = $value ?? null;
    }
    if ($queryString == 'pid') {
        $_SESSION['pid'] = $value ?? null;
    }
}
*/

if (empty($_GET['buy'])) {
    $logger->info('Missing "Buy" variable of 1');
    header($_SERVER["SERVER_PROTOCOL"] . " 400 Bad Request", true, 400);
    exit;
}

if (empty($_GET['pid'])) {
    $logger->info('Missing PID for upsell');
    header($_SERVER["SERVER_PROTOCOL"] . " 400 Bad Request", true, 400);
    exit;
}

if (empty($_GET['next'])) {
    $logger->info('No upsell provided, setting next to the thank you page in site config');
    $_SESSION['next'] = 'https://' . $_SERVER['HTTP_HOST'] . '/' . $site['orderComplete'];
}

if (!empty($_GET['json'])) {
    $logger->info('JSON declared, spitting back JSON instead');
    $jsonResponse = 1;
}

$postArray = print_r($_GET, true);
$logger->info('Posted Values: ' . $postArray);


if ($_SESSION['buy'] == 1) {
    $params = array(
        'pid' => $_SESSION['pid'],
        'buy'  => $_SESSION['buy'],
        'next' => $_SESSION['next']
    );
    unset($_SESSION['vwoupvar']);
    $vwoupvar = $_GET['vwoupvar'] ?? '';
    $_SESSION['vwoupvar'] = $vwoupvar;

    $sticky      = new sticky();
    $response    = $sticky->newOrderCardOnFile($params);
    $res         = explode('&', $response);

    /*
    0 errorFound=0
    1 &responseCode=100
    2 &transactionID=Not Available
    3 &customerId=282249
    4 &authId=Not Available
    5 &orderId=52821677
    6 &orderTotal=297.00
    7 &orderSalesTaxPercent=0.00&
    8 orderSalesTaxAmount=0.00
    9 &test=1
    10 &gatewayId=22
    11 &prepaid_match=0
    12 &line_items[0][product_id]=250
    13 &line_items[0][variant_id]=0
    14 &line_items[0][quantity]=1
    15 &line_items[0][subscription_id]=7724f989ca9e1ccc4d6d82e1bfb55876
    16 &gatewayCustomerService=800-253-8173
    17 &gatewayDescriptor=Revival Point
    18 &subscription_id[250]=7724f989ca9e1ccc4d6d82e1bfb55876
    19 &resp_msg=Approved
    */

    $logger->info('Upsell Response: ' . print_r($response, true));

    if ($res[1] == 'responseCode=100') {
        //The order was successful. Save the order ID
        $oid_res    = explode("=", $res[5]);
        $oid_tot    = explode("=", $res[6]);
       // $_SESSION['step_' . $_SESSION['pid'] . '_orderId'] = $oid_res[1];
       // $_SESSION['step_' . $_SESSION['pid']] = $_GET['buy'];
        $getid = 'bought_' . $_SESSION['pid'];
        $_SESSION[$getid] = 1;
        $_SESSION['lastOrderId'] = $oid_res[1];
        $_SESSION['lastOrderTotal'] = $oid_tot[1];

        //Process to the next page in the funnel regardless of InsureShip success
        if ($jsonResponse) {
            $logger->info('Order Success - Giving back JSON string');
            $data = array("orderId" => $oid_res[1], "orderTotal" => $oid_tot[1], "response" => $res[1]);
            header("Content-Type: application/json");
            echo json_encode($data);
            exit();
        } else {
            $logger->info('Order Success - sending to next page:' . $_GET['next']);
            header("location: " . $_SESSION['next']);
            exit();
        }
    } else {
        $_SESSION['declineup'] = 1;
        //The order was declined. Return the customer to the last page
        $logger->info('Order Declined - sending back to:' . $_SESSION['next']);
        header("location: " . $_SESSION['next']);
        exit();
    }
} else {
    header("location: " . $_SESSION['last']);
    exit();
}
