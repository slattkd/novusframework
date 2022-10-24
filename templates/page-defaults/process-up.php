<?php

$logger->info('Processing Upsell Checkout');
debugMessage("Processing Upsell Checkout");

unset($_SESSION['formError']);
unset($_SESSION['llerrorcode']);
unset($_SESSION['llerror']);
unset($_SESSION['formerrors']);

$postArray = print_r($_GET, true);
$logger->info('Posted Values: ' . $postArray);


if ($_GET['buy'] != 0) {
    $params = array(
        'pid' => $_GET['pid'],
        'buy'  => $_GET['buy']
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
        $_SESSION['step_' . $_GET['pid'] . '_orderId'] = $oid_res[1];
        $_SESSION['step_' . $_GET['pid']] = $_GET['buy'];
        $getid = 'bought_' . $_GET['pid'];
        $_SESSION[$getid] = 1;

        //Process to the next page in the funnel regardless of InsureShip success
        $logger->info('Order Success - sending to next page:' . $_GET['id']);
        //header("location: " . $_SESSION['up']);
        exit();
    } else {
        $_SESSION['declineup'] = 1;
        //The order was declined. Return the customer to the last page
        $logger->info('Order Declined - sending back to:' . $_GET['id']);
        //header("location: " . $_SESSION['up']);
        exit();
    }
} else {
    //header("location: " . $_SESSION['last']);
    exit();
}
