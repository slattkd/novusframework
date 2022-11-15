<?php

$logger->info('Processing Upsell Checkout');
debugMessage("Processing Upsell Checkout");

unset($_SESSION['formError']);
unset($_SESSION['llerrorcode']);
unset($_SESSION['llerror']);
unset($_SESSION['formerrors']);



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

    //echo '<pre>'; print_r($res); die();


    if ($res[1] == 'responseCode=100') {
        //The order was successful. Save the order ID
        $oid_res    = explode("=", $res[5]);
       // $_SESSION['step_' . $_SESSION['pid'] . '_orderId'] = $oid_res[1];
       // $_SESSION['step_' . $_SESSION['pid']] = $_GET['buy'];
        $getid = 'bought_' . $_SESSION['pid'];
        $_SESSION[$getid] = 1;
        $_SESSION['lastOrderId'] = $oid_res[1];

        //Process to the next page in the funnel regardless of InsureShip success
        $logger->info('Order Success - sending to next page:' . $_GET['next']);
        header("location: " . $_SESSION['next']);
        exit();
    } else {
        $_SESSION['declineup'] = 1;
        //The order was declined. Return the customer to the last page
        $logger->info('Order Declined Reason:' . $response);
        $logger->info('Order Declined - sending back to:' . $_SESSION['last']);
        header("location: " . $_SESSION['last']);
        exit();
    }
} else {
    header("location: " . $_SESSION['last']);
    exit();
}
