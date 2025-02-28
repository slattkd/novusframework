<?php

$sticky_api_username = $site['stickyApi'];
$sticky_api_password = $site['stickyPass'];
$sticky_api_instance = $site['stickyUrl'];

class sticky
{
    public $sticky_username;
    public $sticky_password;
    public $sticky_instance;

    public function __construct()
    {

    //sticky API Credentials
        global $sticky_api_username;
        global $sticky_api_password;
        global $sticky_api_instance;

        $this->sticky_username = $sticky_api_username;
        $this->sticky_password = $sticky_api_password;
        $this->sticky_instance = $sticky_api_instance;
    }

    public function newOrder($posted)
    {
        global $product;

        $campaign_id = (isset($posted['campaign_id'])) ? $posted['campaign_id'] : '';
        $productId = (isset($posted['product_id'])) ? $posted['product_id'] : '';
        $product_qty = (isset($posted['product_qty'])) ? $posted['product_qty'] : '1';
        $shippingId = (isset($posted['shippingId'])) ? $posted['shippingId'] : '';

        $fields_fname = (isset($posted['firstName'])) ? $posted['firstName'] : '';
        $fields_lname = (isset($posted['lastName'])) ? $posted['lastName'] : '';

        $shippingAddress1 = (isset($posted['shippingAddress1'])) ? $posted['shippingAddress1'] : '';
        $shippingAddress2 = (isset($posted['shippingAddress2'])) ? $posted['shippingAddress2'] : '';
        $shippingCity = (isset($posted['shippingCity'])) ? $posted['shippingCity'] : '';
        $shippingState = (isset($posted['shippingState'])) ? $posted['shippingState'] : '';
        $shippingZip = (isset($posted['shippingZip'])) ? $posted['shippingZip'] : '';
        $shippingCountry = (isset($posted['shippingCountry'])) ? $posted['shippingCountry'] : '';

        $address1 = (isset($posted['billingAddress1'])) ? $posted['billingAddress1'] : '';
        $address2 = (isset($posted['billingAddress2'])) ? $posted['billingAddress2'] : '';
        $city = (isset($posted['billingCity'])) ? $posted['billingCity'] : '';
        $state = (isset($posted['billingState'])) ? $posted['billingState'] : '';
        $zip = (isset($posted['billingZip'])) ? $posted['billingZip'] : '';
        $country = (isset($posted['billingCountry'])) ? $posted['billingCountry'] : '';

        $fields_phone = (isset($posted['phone'])) ? $posted['phone'] : '';
        $fields_email = (isset($posted['email'])) ? $posted['email'] : '';

        $creditCardType = $this->detectCardType($posted['creditCardNumber']);
        $creditCardNumber = (isset($posted['creditCardNumber'])) ? $posted['creditCardNumber'] : '';
        $expirationDate = (isset($posted['expMonth']) && isset($posted['expYear'])) ? $posted['expMonth'] . $posted['expYear'] : '';
        $cvv = (isset($posted['cvv'])) ? $posted['cvv'] : '';
        $utm_source = (isset($posted['utm_source'])) ? $posted['utm_source'] : '';
        $utm_medium = (isset($posted['utm_medium'])) ? $posted['utm_medium'] : '';
        $utm_campaign = (isset($posted['utm_campaign'])) ? $posted['utm_campaign'] : '';
        $utm_term = (isset($posted['utm_term'])) ? $posted['utm_term'] : '';
        $utm_content = (isset($posted['utm_content'])) ? $posted['utm_content'] : '';

        $sessionId = (isset($posted['sessionId'])) ? $posted['sessionId'] : '';
        $upsellCount = (isset($posted['upsellCount'])) ? $posted['upsellCount'] : 0;
        $upsellId = (isset($posted['upsellId'])) ? $posted['upsellId'] : '';
        $billingSameAsShipping = (isset($posted['billingSameAsShipping'])) ? $posted['billingSameAsShipping'] : '';
        $AFID = (isset($posted['AFID'])) ? $posted['AFID'] : '';
        $SID = (isset($posted['SID'])) ? $posted['SID'] : '';
        $AFFID = (isset($posted['AFFID'])) ? $posted['AFFID'] : '';
        $C1 = (isset($posted['C1'])) ? $posted['C1'] : '';
        $C2 = (isset($posted['C2'])) ? $posted['C2'] : '';
        $C3 = (isset($posted['C3'])) ? $posted['C3'] : '';
        $AID = (isset($posted['AID'])) ? $posted['AID'] : '';
        $OPT = (isset($posted['OPT'])) ? $posted['OPT'] : '';
        $click_id = (isset($posted['click_id'])) ? $posted['click_id'] : '';
        $notes = (isset($posted['notes'])) ? $posted['notes'] : '';
        $upsellProductIds = (isset($posted['upsellProductIds'])) ? $posted['upsellProductIds'] : '';
        $upsellCount = (isset($posted['upsellCount'])) ? $posted['upsellCount'] : '';
        $eftid = (isset($posted['eftid'])) ? $posted['eftid'] : '';

        //Add new session variables for comprehensive API tracking
        $_SESSION['orderProductId'] = $productId;
        $_SESSION['orderProductQty'] = $product_qty;
        $_SESSION['orderIP'] = urlencode($_SERVER['REMOTE_ADDR']);
        $_SESSION['orderUA'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['orderEmail'] = strtolower($fields_email);
        $_SESSION['orderPhone'] = strtolower($fields_phone);
        $_SESSION['orderCity'] = strtolower($city);
        $_SESSION['orderState'] = strtolower($state);
        $_SESSION['orderZip'] = strtolower($zip);
        $_SESSION['orderCountry'] = strtolower($country);
        $_SESSION['orderFirstName'] = strtolower($fields_fname);
        $_SESSION['orderLastName'] = strtolower($fields_lname);
        $_SESSION['orderUrl'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';


        $fields1 = array('username'  =>   $this->sticky_username,
                     'password'  =>  $this->sticky_password,
                     'method' =>  'NewOrder',
                     'campaignId' =>  $campaign_id,
                     'firstName' =>  trim($fields_fname),
                     'lastName' =>  trim($fields_lname),
                     'billingAddress1' =>  trim($address1),
                     'billingAddress2' =>  trim($address2),
                     'billingCity' =>  trim($city),
                     'billingState' =>  trim($state),
                     'billingCountry' =>  trim($country),
                     'billingZip' =>  trim($zip),
                     'shippingAddress1' =>  trim($shippingAddress1),
                     'shippingAddress2' =>  trim($shippingAddress2),
                     'shippingCity' =>  trim($shippingCity),
                     'shippingState' =>  trim($shippingState),
                     'shippingZip' =>  trim($shippingZip),
                     'shippingCountry' =>  $shippingCountry,
                     'phone' =>  trim($fields_phone),
                     'email' =>  trim($fields_email),
                     'creditCardType' =>  $creditCardType,
                     'creditCardNumber' =>  $creditCardNumber,
                     'expirationDate' =>  $expirationDate, //mmyy
                     'CVV' =>  $cvv,
                     'sessionId' =>  $sessionId,
                     'tranType' =>  'Sale',
                     'productId' =>  $productId,
                     'shippingId' =>  $shippingId,
                     'upsellCount' =>  $upsellCount,
                     'upsellProductIds' =>  $upsellProductIds,
                     'billingSameAsShipping' =>  $billingSameAsShipping,
                     'product_qty_' . $productId =>  $product_qty,
                     'AFID' =>  trim($AFID),
                     'SID' =>  trim($SID),
                     'AFFID' =>  trim($AFFID),
                     'C1' =>  trim($C1),
                     'C2' =>  trim($C2),
                     'C3' =>  trim($C3),
                     'AID' =>  trim($AID),
                     'OPT' =>  trim($OPT),
                     'click_id' =>  trim($click_id),
                     'utm_source' =>  trim($utm_source),
                     'utm_medium' =>  trim($utm_medium),
                     'utm_campaign' =>  trim($utm_campaign),
                     'utm_term' =>  trim($utm_term),
                     'utm_content' =>  trim($utm_content),
                     'notes' =>  $notes,
                     'eftid' => $eftid,
                     'custom_fields' => [array( 'id' => '4' , 'value' => $eftid)],
                     'ipAddress' =>  urlencode($_SERVER['REMOTE_ADDR']));

        $Curl_Session = curl_init();
        curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
        curl_setopt($Curl_Session, CURLOPT_POST, 1);
        curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields1));
        curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
        return $content = curl_exec($Curl_Session);
    }

    public function newProspect($posted)
    {
        global $product;

        $campaign_id = (isset($posted['campaign_id'])) ? $posted['campaign_id'] : '';
        $fields_fname = (isset($posted['firstName'])) ? $posted['firstName'] : '';
        $fields_lname = (isset($posted['lastName'])) ? $posted['lastName'] : '';
        $address1 = (isset($posted['address'])) ? $posted['address'] : '';
        $address2 = (isset($posted['address2'])) ? $posted['address2'] : '';
        $city = (isset($posted['city'])) ? $posted['city'] : '';
        $state = (isset($posted['state'])) ? $posted['state'] : '';
        $zip = (isset($posted['zip'])) ? $posted['zip'] : '';
        $country = (isset($posted['country'])) ? $posted['country'] : '';
        $fields_phone = (isset($posted['phone'])) ? $posted['phone'] : '';
        $fields_email = (isset($posted['email'])) ? $posted['email'] : '';
        $AFID = (isset($posted['AFID'])) ? $posted['AFID'] : '';
        $SID = (isset($posted['SID'])) ? $posted['SID'] : '';
        $AFFID = (isset($posted['AFFID'])) ? $posted['AFFID'] : '';
        $C1 = (isset($posted['C1'])) ? $posted['C1'] : '';
        $C2 = (isset($posted['C2'])) ? $posted['C2'] : '';
        $C3 = (isset($posted['C3'])) ? $posted['C3'] : '';
        $AID = (isset($posted['AID'])) ? $posted['AID'] : '';
        $OPT = (isset($posted['OPT'])) ? $posted['OPT'] : '';
        $click_id = (isset($posted['click_id'])) ? $posted['click_id'] : '';
        $notes = (isset($posted['notes'])) ? $posted['notes'] : '';

        $fields = array('username' =>  $this->sticky_username,
                    'password' =>  $this->sticky_password,
                    'method' =>  'NewProspect',
                    'campaignId' =>  $campaign_id,
                    'firstName' =>  trim($fields_fname),
                    'lastName' =>  trim($fields_lname),
                    'address1' =>  trim($address1),
                    'address2' =>  trim($address2),
                    'city' =>  trim($city),
                    'state' =>  trim($state),
                    'zip' =>  trim($zip),
                    'country' =>  $country,
                    'phone' =>  trim($fields_phone),
                    'email' =>  trim($fields_email),
                    'AFID' =>  trim($AFID),
                    'SID' =>  trim($SID),
                    'AFFID' =>  trim($AFFID),
                    'C1' =>  trim($C1),
                    'C2' =>  trim($C2),
                    'C3' =>  trim($C3),
                    'AID' =>  trim($AID),
                    'OPT' =>  trim($OPT),
                    'click_id' =>  trim($click_id),
                    'notes' =>  $notes,
                    'ipAddress' =>  urlencode($_SERVER['REMOTE_ADDR']));

        $Curl_Session = curl_init();
        curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
        curl_setopt($Curl_Session, CURLOPT_POST, 1);
        curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields));
        curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
        return $content = curl_exec($Curl_Session);

        curl_close($Curl_Session);
    }

    public function newOrderWithProspect($posted)
    {
        global $product;

        $prospectId = (isset($posted['prospect_id'])) ? $posted['prospect_id'] : '';
        $campaign_id = (isset($posted['campaign_id'])) ? $posted['campaign_id'] : '';
        $productId = (isset($posted['product_id'])) ? $posted['product_id'] : '';
        $product_qty = (isset($posted['product_qty'])) ? $posted['product_qty'] : '1';
        $shippingId = (isset($posted['shippingId'])) ? $posted['shippingId'] : '';

        $fields_fname = (isset($posted['first_name'])) ? $posted['first_name'] : '';
        $fields_lname = (isset($posted['last_name'])) ? $posted['last_name'] : '';

        $shippingAddress1 = (isset($posted['shippingAddress1'])) ? $posted['shippingAddress1'] : '';
        $shippingAddress2 = (isset($posted['shippingAddress2'])) ? $posted['shippingAddress2'] : '';
        $shippingCity = (isset($posted['shippingCity'])) ? $posted['shippingCity'] : '';
        $shippingState = (isset($posted['shippingState'])) ? $posted['shippingState'] : '';
        $shippingZip = (isset($posted['shippingZip'])) ? $posted['shippingZip'] : '';
        $shippingCountry = (isset($posted['shippingCountry'])) ? $posted['shippingCountry'] : '';

        $address1 = (isset($posted['billingAddress1'])) ? $posted['billingAddress1'] : '';
        $address2 = (isset($posted['billingAddress2'])) ? $posted['billingAddress2'] : '';
        $city = (isset($posted['billingCity'])) ? $posted['billingCity'] : '';
        $state = (isset($posted['billingState'])) ? $posted['billingState'] : '';
        $zip = (isset($posted['billingZip'])) ? $posted['billingZip'] : '';
        $country = (isset($posted['billingCountry'])) ? $posted['billingCountry'] : '';

        $fields_phone = (isset($posted['phone'])) ? $posted['phone'] : '';
        $fields_email = (isset($posted['email'])) ? $posted['email'] : '';

        $creditCardType = $this->detect_card_type($posted['creditCardNumber']);
        $creditCardNumber = (isset($posted['creditCardNumber'])) ? $posted['creditCardNumber'] : '';
        $expirationDate = (isset($posted['expmonth']) && isset($posted['expyear'])) ? $posted['expmonth'] . $posted['expyear'] : '';
        $cvv = (isset($posted['cvv'])) ? $posted['cvv'] : '';
        $utm_source = (isset($posted['utm_source'])) ? $posted['utm_source'] : '';
        $utm_medium = (isset($posted['utm_medium'])) ? $posted['utm_medium'] : '';
        $utm_campaign = (isset($posted['utm_campaign'])) ? $posted['utm_campaign'] : '';
        $utm_term = (isset($posted['utm_term'])) ? $posted['utm_term'] : '';
        $utm_content = (isset($posted['utm_content'])) ? $posted['utm_content'] : '';

        $sessionId = (isset($posted['sessionId'])) ? $posted['sessionId'] : '';
        $upsellCount = (isset($posted['upsellCount'])) ? $posted['upsellCount'] : 0;
        $upsellId = (isset($posted['upsellId'])) ? $posted['upsellId'] : '';
        $billingSameAsShipping = (isset($posted['billings'])) ? $posted['billings'] : '';
        $AFID = (isset($posted['AFID'])) ? $posted['AFID'] : '';
        $SID = (isset($posted['SID'])) ? $posted['SID'] : '';
        $AFFID = (isset($posted['AFFID'])) ? $posted['AFFID'] : '';
        $C1 = (isset($posted['C1'])) ? $posted['C1'] : '';
        $C2 = (isset($posted['C2'])) ? $posted['C2'] : '';
        $C3 = (isset($posted['C3'])) ? $posted['C3'] : '';
        $AID = (isset($posted['AID'])) ? $posted['AID'] : '';
        $OPT = (isset($posted['OPT'])) ? $posted['OPT'] : '';
        $click_id = (isset($posted['click_id'])) ? $posted['click_id'] : '';
        $notes = (isset($posted['notes'])) ? $posted['notes'] : '';
        $upsellProductIds = (isset($posted['upsellProductIds'])) ? $posted['upsellProductIds'] : '';
        $upsellCount = (isset($posted['upsellCount'])) ? $posted['upsellCount'] : '';
        $eftid = (isset($posted['eftid'])) ? $posted['eftid'] : '';

        if (($billingSameAsShipping == '1') || ($billingSameAsShipping == 'yes')) {
            $billingSameAsShipping = 'YES';
            $address1 = $shippingAddress1;
            $address2 = $shippingAddress2;
            $city = $shippingCity;
            $country = $shippingCountry;
            $state = $shippingState;
            $zip = $shippingZip;
        } else {
            $billingSameAsShipping = 'NO';
        }

        //Add new session variables for comprehensive API tracking
        $_SESSION['orderProductId'] = $productId;
        $_SESSION['orderProductQty'] = $product_qty;
        $_SESSION['orderIP'] = urlencode($_SERVER['REMOTE_ADDR']);
        $_SESSION['orderUA'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['orderEmail'] = strtolower($fields_email);
        $_SESSION['orderPhone'] = strtolower($fields_phone);
        $_SESSION['orderCity'] = strtolower($city);
        $_SESSION['orderState'] = strtolower($state);
        $_SESSION['orderZip'] = strtolower($zip);
        $_SESSION['orderCountry'] = strtolower($country);
        $_SESSION['orderFirstName'] = strtolower($fields_fname);
        $_SESSION['orderLastName'] = strtolower($fields_lname);
        $_SESSION['orderUrl'] = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

        $fields = array('username' =>  $this->sticky_username,
                     'password' =>  $this->sticky_password,
                     'method' =>  'NewOrderWithProspect',
                     'prospectId' =>  $prospectId,
                     'firstName' =>  trim($fields_fname),
                     'lastName' =>  trim($fields_lname),
                     'billingAddress1' =>  trim($address1),
                     'billingAddress2' =>  trim($address2),
                     'billingCity' =>  trim($city),
                     'billingState' =>  trim($state),
                     'billingCountry' =>  trim($country),
                     'billingZip' =>  trim($zip),
                     'shippingAddress1' =>  trim($shippingAddress1),
                     'shippingAddress2' =>  trim($shippingAddress2),
                     'shippingCity' =>  trim($shippingCity),
                     'shippingState' =>  trim($shippingState),
                     'shippingZip' =>  trim($shippingZip),
                     'shippingCountry' =>  $shippingCountry,
                     'phone' =>  trim($fields_phone),
                     'email' =>  trim($fields_email),
                     'creditCardType' =>  $creditCardType,
                     'creditCardNumber' =>  $creditCardNumber,
                     'expirationDate' =>  $expirationDate, //mmyy
                     'CVV' =>  $cvv,
                     'sessionId' =>  $sessionId,
                     'tranType' =>  'Sale',
                     'productId' =>  $productId,
                     'campaignId' =>  $campaign_id,
                     'shippingId' =>  $shippingId,
                     'upsellCount' =>  $upsellCount,
                     'upsellProductIds' =>  $upsellProductIds,
                     'billingSameAsShipping' =>  $billingSameAsShipping,
                     'product_qty_' . $productId =>  $product_qty,
                     'AFID' =>  trim($AFID),
                     'SID' =>  trim($SID),
                     'AFFID' =>  trim($AFFID),
                     'C1' =>  trim($C1),
                     'C2' =>  trim($C2),
                     'C3' =>  trim($C3),
                     'AID' =>  trim($AID),
                     'OPT' =>  trim($OPT),
                     'click_id' =>  trim($click_id),
                     'utm_source' =>  trim($utm_source),
                     'utm_medium' =>  trim($utm_medium),
                     'utm_campaign' =>  trim($utm_campaign),
                     'utm_term' =>  trim($utm_term),
                     'utm_content' =>  trim($utm_content),
                     'notes' =>  $notes,
                     'custom_fields' => [array( 'id' => '4' , 'value' => $eftid)],
                     'ipAddress' =>  urlencode($_SERVER['REMOTE_ADDR']));

        $Curl_Session = curl_init();
        curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
        curl_setopt($Curl_Session, CURLOPT_POST, 1);
        curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields));
        curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
        return $content = curl_exec($Curl_Session);
    }

    public function newOrderCardOnFile($posted)
    {
        global $site;

        //print_r($posted);
        //echo $posted['pid'];

        $vwoUpsellvar = (isset($_SESSION['vwoupvar'])) ? $_SESSION['vwoupvar'] : 'none';
        $campaign_id     = $site['campaign'];
        $orderId         = (isset($_SESSION['orderId'])) ? $_SESSION['orderId'] : $_COOKIE['step_1_orderId'];
        $shipping_id     = $site['freeship'];
        $product_id      = $posted['pid'];
        //$product_price   = $step[$posted['step']]->option[$posted['buy']]->ll_product_price;
        //$product_qty     = $step[$posted['step']]->option[$posted['buy']]->ll_product_qty;


        $fields = array('username'                             => $this->sticky_username,
                        'password'                             => $this->sticky_password,
                        'method'                               => 'NewOrderCardOnFile',
                        'previousOrderId'                      => $orderId,
                        'productId'                            => $product_id,
                        'campaignId'                           => $campaign_id,
                        'shippingId'                           => $shipping_id,
                        //'dynamic_product_price_' . $product_id => $product_price,
                        'product_qty_' . $product_id           => 1,
                        'afid'                                 => $vwoUpsellvar
                        );

        $Curl_Session = curl_init();
        curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
        curl_setopt($Curl_Session, CURLOPT_POST, 1);
        curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields));
        curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
        return $content = curl_exec($Curl_Session);
    }

    public function detectCardType($number)
    {
        switch (substr($number, 0, 1)) {
            case '3':
                return 'amex';
            case '4':
                return 'visa';
            case '5':
                return 'master';
            case '6':
                return 'discover';
            case '1':
                return 'visa';
            default:
                return false;
        }
    }

    public function api($type = null, $api = null)
    {
        global $site;

        /*
        $api['username'] = $sticky_api_username;
        $api['password'] = $sticky_api_password;

        echo $sticky_api_username;

        foreach ($api as $key => $value) {
            //$append . = '&' . $key . '=' . $value
        }
        $append = rtrim($append, '&');

        if ($type <= '1' || !$type) {
            $type = 'transact.php'
        } else {
            $type = 'membership.php'
        }
        $url = $sticky_api_instance . '/admin/' . $type;
        */

        $api['username'] = $site['stickyApi'];
        $api['password'] = $site['stickyPass'];

        $append = '';
        foreach($api as $key => $value) { $append .= '&'.$key.'='.$value; }
        $append = rtrim($append,'&');

        if( $type <='1'||!$type) $type='transact.php';
        else $type='membership.php';
        $url = 'https://' . $this->sticky_instance . '/admin/' . $type;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $api);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

        $buffer = curl_exec($ch);
        curl_close($ch);
        if (empty($buffer)) {
            return "Api Error";
        } else {
            $return = explode('&', $buffer);
            foreach ($return as $line) {
                $line = explode('=', $line);
                $results[$line[0]] = urldecode($line[1]);
            }
        }
        if (@$results['errorFound'] == 1 && !$_SESSION['customer']['transactionId']) {
            if ($results['responseCode'] == 500) {
                return array('error' => $results['responseCode'] . "-" . $results['declineReason']);
            } else {
                return array('error' => $results['responseCode'] . "-" . $results['errorMessage']);
            }
            exit;
        }
        return $results;
    }

}
