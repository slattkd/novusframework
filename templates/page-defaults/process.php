<?php
// error_reporting(0);
$logger->info('Processing Checkout');
debugMessage("Processing Checkout");

unset($_SESSION['formError']);
unset($_SESSION['llerrorcode']);
unset($_SESSION['llerror']);
unset($_SESSION['formerrors']);

$sessionFields = [ 'firstName', 'lastName', 'email', 'phone', 'shippingAddress1',
                    'shippingCountry', 'shippingState', 'shippingZip', 'billingSameAsShipping',
                    'billingAddress1', 'billingCountry', 'billingCity', 'billingState', 'billingZip', 'tax_pct' ];

foreach ($sessionFields as $sessionField) {
    $_SESSION[$sessionField] = $_POST[$sessionField];
}

$gender = '';
if (isset($_SESSION['gender'])){
    $gender = $_SESSION['gender'];
} else {
    if (isset($_SESSION['firstName'])){
        $gender = getGender($_SESSION['firstName']);
        $gender = $gender[0]['gender'];
        if ($gender == 'unknown'){
            $gender = '';
        }
    } if (isset($_POST['firstName'])){
        $gender = getGender($_POST['firstName']);
        $gender = $gender[0]['gender'];
        if ($gender == 'unknown'){
            $gender = '';
        }
    }
    $_SESSION['gender'] = $gender;
}

//Add me some Maropost
if (isset($_SESSION['joinTextAlerts']) && $_SESSION['joinTextAlerts'] == 'checked') {
    if (isset($_SESSION['email']) && filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
        $logger->info('Attempting to add ' . $_SESSION['email'] . ' to Maropost');
        $maropost = new Maropost($site['maropostApiKey'], $site['maropostApiUrl'], null);
        if ($maropost->CheckEmailValid($_SESSION['email'])) {
            $newContact = [
                'list_id' => $site['maropostListId'],
                'contact' => [
                    'email' => $_SESSION['email'],
                    'custom_field' => [
                        'gender' => $gender,
                        'referring_page_url' => @$_SERVER['HTTP_REFERER'],
                        'cake_id' => $_SESSION['affid']
                    ],
                    'subscribe' => true
                ]
            ];
            $postedNewContact = $maropost->postNewContactIntoList($newContact, true);
            $logger->info(json_encode($postedNewContact));
        } else {
            $logger->info($_SESSION['email'] . ' not valid - Error: 829619');
            error_log("Maropost::CheckEmailValid('{$_SESSION['email']}') not valid " . __FILE__ . ":" . __LINE__);
        }
    } else {
        $logger->info($_SESSION['email'] . ' not valid - Error: 825927');
        error_log("'customer_email' not valid in \$_SESSION['assessment'] " . __FILE__ . ":" . __LINE__);
    }
}


//Remove PII from known array values before writing to log
$postArray = $_POST;
$postArray['creditCardNumber'] = 'XXXX-XXXX-XXXX-' . substr($postArray['creditCardNumber'], -4);
$postArray['cvv'] = 'XXX';
$postArray = print_r($postArray, true);
$logger->info('Posted Values: ' . $postArray);

$sticky = new sticky();

$response = $sticky->newOrder($_POST);
$logger->info('Sticky New Order Response: ' . json_encode($response));

$res = explode('&', $response);

if ($res[1] == 'responseCode=100') { // was prospect api call a success?
    debugMessage("Order Processed " . json_encode($response));

    $oid_res        = explode("=", $res[5]);
    $cus_res        = explode("=", $res[3]);
    $test_order     = explode("=", $res[9]);
    $order_total    = explode("=", $res[6]);
    $product_id     = explode("=", $res[12]);
    $product_name   = explode("=", $res[12]);
    $product_price    = explode("=", $res[6]);
    $_SESSION['orderId']        = $oid_res[1];
    $_SESSION['order_id']       = $oid_res[1];
    $_SESSION['customerId']     = $cus_res[1];
    $_SESSION['orderTest']      = $test_order[1];
    $_SESSION['orderTotal']     = $order_total[1];
    $_SESSION['productId']      = $product_id[1];
    $_SESSION['productName']    = $product_name[1];
    $_SESSION['productPrice']   = $product_price[1];


    $logger->info('Order ID: ' . $oid_res[1]);
    $logger->info('Customer ID: ' . $cus_res[1]);
    $logger->info('Is this a Test Order: ' . $test_order[1]);

    $url = $_POST['next_page'];
    header("Location: " . $url);
    exit();
} else {
    if (isset($_SESSION['attemptNum'])) {
        $_SESSION['attemptNum']++;
    } else {
        $_SESSION['attemptNum'] = 1;
    }

    if ($res[0] == 'errorFound=1') {
        $_SESSION['llerror'] = 1;
        $errorMsg = explode("=", $res[2]);
        $_SESSION['formError'] = utf8_decode(urldecode($errorMsg[1]));
        $logger->info($_SESSION['formError']);
    }


    $_SESSION['llerrorcode'] = str_replace("responseCode=", "", $res[1]);
    $_SESSION['respn'] = $response;
    $_SESSION['product_id'] = $_POST['product_id'];
    $_SESSION['formpost'] = serialize($_POST);

    switch ($_SESSION['llerrorcode']) {
        case 342:
            $_SESSION['formerrors'] = ["The credit card has expired"];
            break;
        case 123:
            $_SESSION['formerrors'] = ["Prepaid Credit Cards Are Not Accepted"];
            break;
        case 200:
            $_SESSION['formerrors'] = ["Invalid login credentials"];
            break;
        case 304:
            $_SESSION['formerrors'] = ["Invalid first name"];
            break;
        case 305:
            $_SESSION['formerrors'] = ["Invalid last name"];
            break;
        case 306:
            $_SESSION['formerrors'] = ["Invalid shipping address"];
            break;
        case 307:
            $_SESSION['formerrors'] = ["Invalid shipping city"];
            break;
        case 308:
            $_SESSION['formerrors'] = ["Invalid shipping state"];
            break;
        case 309:
            $_SESSION['formerrors'] = ["Invalid shipping zip"];
            break;
        case 310:
            $_SESSION['formerrors'] = ["Invalid shipping country"];
            break;
        case 311:
            $_SESSION['formerrors'] = ["Invalid billing address"];
            break;
        case 312:
            $_SESSION['formerrors'] = ["Invalid billing city"];
            break;
        case 313:
            $_SESSION['formerrors'] = ["Invalid billing state"];
            break;
        case 314:
            $_SESSION['formerrors'] = ["Invalid billing zip"];
            break;
        case 315:
            $_SESSION['formerrors'] = ["Invalid billing country"];
            break;
        case 316:
            $_SESSION['formerrors'] = ["Invalid phone number"];
            break;
        case 317:
            $_SESSION['formerrors'] = ["Invalid email address"];
            break;
        case 318:
            $_SESSION['formerrors'] = ["Invalid credit card type"];
            break;
        case 319:
            $_SESSION['formerrors'] = ["Invalid credit card number"];
            break;
        case 320:
            $_SESSION['formerrors'] = ["Invalid expiration date"];
            break;
        case 321:
            $_SESSION['formerrors'] = ["Invalid IP address"];
            break;
        case 322:
            $_SESSION['formerrors'] = ["Invalid shipping id"];
            break;
        case 323:
            $_SESSION['formerrors'] = ["CVV is required"];
            break;
        case 324:
            $_SESSION['formerrors'] = ["Supplied CVV has an invalid length"];
            break;
        case 325:
            $_SESSION['formerrors'] = ["Shipping state must be 2 characters for a shipping country of US"];
            break;
        case 326:
            $_SESSION['formerrors'] = ["Billing state must be 2 characters for a billing country of US"];
            break;
        case 327:
            $_SESSION['formerrors'] = ["Invalid payment type"];
            break;
        case 328:
            $_SESSION['formerrors'] = ["Expiration month must be between 01 and 12"];
            break;
        case 329:
            $_SESSION['formerrors'] = ["Expiration date must be 4 digits long"];
            break;
        case 333:
            $_SESSION['formerrors'] = ["Order has been black listed"];
            break;
        case 334:
            $_SESSION['formerrors'] = ["The credit card number or email address has already purchased this product"];
            break;
        case 668:
            $_SESSION['formerrors'] = ["Unauthorized IP Address"];
            break;
        case 700:
            $_SESSION['formerrors'] = ["Invalid method supplied"];
            break;
        case 800:
            $reason1 = str_replace("errorMessage=", "", $res[3]);
            $reason2 = preg_replace('/[\s\+\%]/', " ", $reason1);
            $_SESSION['formerrors'] = [$reason2];
            break;
        default:
            $_SESSION['formerrors'] = ["Transaction was declined"];
            break;
    }




    $url = $_POST['current_page'];
    header("Location: " . $url);
    exit();
}
