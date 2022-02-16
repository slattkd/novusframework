<?php

$sticky_api_username 	= '5gmale-funnel';
$sticky_api_password 	= 'MAzpqTRAXa4Dvk';
$sticky_api_instance 	= 'gdc.sticky.io';

/*
** DEFINE OBJECTS
*/

$campaign[1] 						= new stdClass();
$campaign[1]->campid				= 24;

$freeshipping[1] 					= new stdClass();
$freeshipping[1]->freeshipid		= 5;

//Main Product
$product[1] 					= new stdClass();
$product[1]->option[1] 			= new stdClass(); // qty1
$product[1]->option[3] 			= new stdClass(); // qty3
$product[1]->option[6] 			= new stdClass(); // qty6

//Qty1
$product[1]->option[1]->sticky_product_id			= 356;

//Qty3
$product[1]->option[3]->sticky_product_id			= 357;

//Qty6
$product[1]->option[6]->sticky_product_id			= 358;

/*
** DEFINE OBJECTS - UPSELLS
*/

//************************ Release Switch Advanced - Upsell 1
//Desktop
$up[1] 						= new stdClass();
$up[1]->option[6] 			= new stdClass(); 
//Mobile
$up[51] 					= new stdClass();
$up[51]->option[6] 			= new stdClass(); 

//************************ Release Switch Advanced - Downsell
//Desktop
$up[2] 						= new stdClass();
$up[2]->option[3] 			= new stdClass(); 
//Mobile
$up[52] 					= new stdClass();
$up[52]->option[3] 			= new stdClass();

//************************ Active BF - Upsell 2
//Desktop
$up[3] 						= new stdClass();
$up[3]->option[3] 			= new stdClass();
//Mobile
$up[53] 					= new stdClass();
$up[53]->option[3] 			= new stdClass();

//************************ Flavo-Trim - Upsell 3
//Desktop
$up[4] 						= new stdClass();
$up[4]->option[3] 			= new stdClass();
//Mobile
$up[54] 					= new stdClass();
$up[54]->option[3] 			= new stdClass();


/*
** DEFINE PID AND PATHING
*/

//************************ PureFX - Upsell 1
$up[1]->option[6]->sticky_product_id			= 681; //qty6
$up[51]->option[6]->sticky_product_id			= 681; //qty6

$up[1]->previous_page		= '/v/dcustom1.php';
$up[1]->current_page		= '/v/dcustom1.php';
$up[1]->next_page			= '/v/dcustom2.php'; 
$up[51]->previous_page		= '/v/mcustom1.php';
$up[51]->current_page		= '/v/mcustom1.php';
$up[51]->next_page			= '/v/mcustom2.php'; 

//************************ PureFX - Downsell 1
$up[2]->option[3]->sticky_product_id			= 682;  //qty3
$up[52]->option[3]->sticky_product_id			= 682;  //qty3

$up[2]->previous_page		= '/v/dcustom1.php';
$up[2]->current_page		= '/v/ddown1.php';
$up[2]->next_page			= '/v/dcustom2.php';
$up[52]->previous_page		= '/v/mcustom1.php';
$up[52]->current_page		= '/v/mdown1.php';
$up[52]->next_page			= '/v/mcustom2.php';


//************************ Active BF - Upsell 2
$up[3]->option[3]->sticky_product_id			= 456;  //qty3
$up[53]->option[3]->sticky_product_id			= 456;  //qty3

$up[3]->previous_page		= '/v/dcustom1.php';
$up[3]->current_page		= '/v/dcustom2.php';
$up[3]->next_page			= '/v/dcustom3.php';
$up[53]->previous_page		= '/v/mcustom1.php';
$up[53]->current_page		= '/v/mcustom2.php';
$up[53]->next_page			= '/v/mcustom3.php';

//Flavo-Trim - Upsell 3
$up[4]->option[3]->sticky_product_id			= 457;//qty3
$up[54]->option[3]->sticky_product_id			= 457;//qty3

$up[4]->previous_page		= '/v/dcustom2.php';
$up[4]->current_page		= '/v/dcustom3.php';
$up[4]->next_page			= '/v/dreceipt.php'; 
$up[54]->previous_page		= '/v/mcustom2.php';
$up[54]->current_page		= '/v/mcustom3.php';
$up[54]->next_page			= '/v/mreceipt.php'; 

class sticky
{
	public $sticky_username;
	public $sticky_password;
	public $sticky_instance;

	function __construct()
	{

		//sticky API Credentials
		global $sticky_api_username;
		global $sticky_api_password;
		global $sticky_api_instance;

		$this->sticky_username = $sticky_api_username;
		$this->sticky_password = $sticky_api_password;
		$this->sticky_instance = $sticky_api_instance;
	}

	function newOrder($posted)
	{

		global $product;

		$campaign_id 			= (isset($posted['campaign_id'])) ? $posted['campaign_id'] : '';
		$productId 				= (isset($posted['product_id'])) ? $posted['product_id'] : '';
		$product_qty 			= (isset($posted['product_qty'])) ? $posted['product_qty'] : '';
		$shippingId 			= (isset($posted['shipping_id'])) ? $posted['shipping_id'] : '';

		$fields_fname 			= (isset($posted['first_name'])) ? $posted['first_name'] : '';
		$fields_lname 			= (isset($posted['last_name'])) ? $posted['last_name'] : '';

		$shippingAddress1 		= (isset($posted['shippingAddress1'])) ? $posted['shippingAddress1'] : '';
		$shippingAddress2		= (isset($posted['shippingAddress2'])) ? $posted['shippingAddress2'] : '';
		$shippingCity			= (isset($posted['shippingCity'])) ? $posted['shippingCity'] : '';
		$shippingState 			= (isset($posted['shippingState'])) ? $posted['shippingState'] : '';
		$shippingZip			= (isset($posted['shippingZip'])) ? $posted['shippingZip'] : '';
		$shippingCountry		= (isset($posted['shippingCountry'])) ? $posted['shippingCountry'] : '';

		$address1 				= (isset($posted['billingAddress1'])) ? $posted['billingAddress1'] : '';
		$address2				= (isset($posted['billingAddress2'])) ? $posted['billingAddress2'] : '';
		$city 					= (isset($posted['billingCity'])) ? $posted['billingCity'] : '';
		$state 					= (isset($posted['billingState'])) ? $posted['billingState'] : '';
		$zip 					= (isset($posted['billingZip'])) ? $posted['billingZip'] : '';
		$country 				= (isset($posted['billingCountry'])) ? $posted['billingCountry'] : '';

		$fields_phone 			= (isset($posted['phone'])) ? $posted['phone'] : '';
		$fields_email 			= (isset($posted['email'])) ? $posted['email'] : '';

		$creditCardType 		= $this->detect_card_type($posted['creditCardNumber']);
		$creditCardNumber 		= (isset($posted['creditCardNumber'])) ? $posted['creditCardNumber'] : '';
		$expirationDate 		= (isset($posted['expmonth']) && isset($posted['expyear'])) ? $posted['expmonth'] . $posted['expyear'] : '';
		$cvv 					= (isset($posted['cvv'])) ? $posted['cvv'] : '';
		$utm_source				= (isset($posted['utm_source'])) ? $posted['utm_source'] : '';
		$utm_medium				= (isset($posted['utm_medium'])) ? $posted['utm_medium'] : '';
		$utm_campaign			= (isset($posted['utm_campaign'])) ? $posted['utm_campaign'] : '';
		$utm_term				= (isset($posted['utm_term'])) ? $posted['utm_term'] : '';
		$utm_content			= (isset($posted['utm_content'])) ? $posted['utm_content'] : '';

		$sessionId				= (isset($posted['sessionId'])) ? $posted['sessionId'] : '';
		$upsellCount 			= (isset($posted['upsellCount'])) ? $posted['upsellCount'] : 0;
		$upsellId 				= (isset($posted['upsellId'])) ? $posted['upsellId'] : '';
		$billingSameAsShipping 	= (isset($posted['billingSameAsShipping'])) ? $posted['billingSameAsShipping'] : '';
		$AFID 					= (isset($posted['AFID'])) ? $posted['AFID'] : '';
		$SID 					= (isset($posted['SID'])) ? $posted['SID'] : '';
		$AFFID 					= (isset($posted['AFFID'])) ? $posted['AFFID'] : '';
		$C1 					= (isset($posted['C1'])) ? $posted['C1'] : '';
		$C2 					= (isset($posted['C2'])) ? $posted['C2'] : '';
		$C3 					= (isset($posted['C3'])) ? $posted['C3'] : '';
		$AID 					= (isset($posted['AID'])) ? $posted['AID'] : '';
		$OPT 					= (isset($posted['OPT'])) ? $posted['OPT'] : '';
		$click_id 				= (isset($posted['click_id'])) ? $posted['click_id'] : '';
		$notes 					= (isset($posted['notes'])) ? $posted['notes'] : '';
		$upsellProductIds		= (isset($posted['upsellProductIds'])) ? $posted['upsellProductIds'] : '';
		$upsellCount			= (isset($posted['upsellCount'])) ? $posted['upsellCount'] : '';

		if (($billingSameAsShipping == '1') || ($billingSameAsShipping == 'yes')) {
			$billingSameAsShipping = 'YES';
			$address1				= $shippingAddress1;
			$address2				= $shippingAddress2;
			$city					= $shippingCity;
			$country				= $shippingCountry;
			$state 					= $shippingState;
			$zip					= $shippingZip;
		} else {
			$billingSameAsShipping = 'NO';
		}

		$fields1 = array(
			'username' => $this->sticky_username,
			'password' => $this->sticky_password,
			'method' => 'NewOrder',
			'campaignId' => $campaign_id,
			'firstName' => trim($fields_fname),
			'lastName' => trim($fields_lname),
			'billingAddress1' => trim($address1),
			'billingAddress2' => trim($address2),
			'billingCity' => trim($city),
			'billingState' => trim($state),
			'billingCountry' => trim($country),
			'billingZip' => trim($zip),
			'shippingAddress1' => trim($shippingAddress1),
			'shippingAddress2' => trim($shippingAddress2),
			'shippingCity' => trim($shippingCity),
			'shippingState' => trim($shippingState),
			'shippingZip' => trim($shippingZip),
			'shippingCountry' => $shippingCountry,
			'phone' => trim($fields_phone),
			'email' => trim($fields_email),
			'creditCardType' => $creditCardType,
			'creditCardNumber' => $creditCardNumber,
			'expirationDate' => $expirationDate, //mmyy 
			'CVV' => $cvv,
			'sessionId' => $sessionId,
			'tranType' => 'Sale',
			'productId' => $productId,
			'shippingId' => $shippingId,
			'upsellCount' => $upsellCount,
			'upsellProductIds' => $upsellProductIds,
			'billingSameAsShipping' => $billingSameAsShipping,
			'product_qty_' . $productId => $product_qty,
			'AFID' => trim($AFID),
			'SID' => trim($SID),
			'AFFID' => trim($AFFID),
			'C1' => trim($C1),
			'C2' => trim($C2),
			'C3' => trim($C3),
			'AID' => trim($AID),
			'OPT' => trim($OPT),
			'click_id' => trim($click_id),
			'utm_source' => trim($utm_source),
			'utm_medium' => trim($utm_medium),
			'utm_campaign' => trim($utm_campaign),
			'utm_term' => trim($utm_term),
			'utm_content' => trim($utm_content),
			'notes' => $notes,
			'ipAddress' => urlencode($_SERVER['REMOTE_ADDR'])
		);

		$Curl_Session = curl_init();
		curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
		curl_setopt($Curl_Session, CURLOPT_POST, 1);
		curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields1));
		curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
		return $content = curl_exec($Curl_Session);
	}

	function newProspect($posted)
	{

		global $product;

		$campaign_id 		= (isset($posted['campaign_id'])) ? $posted['campaign_id'] : '';
		$fields_fname		= (isset($posted['firstName'])) ? $posted['firstName'] : '';
		$fields_lname 		= (isset($posted['lastName'])) ? $posted['lastName'] : '';
		$address1 			= (isset($posted['address'])) ? $posted['address'] : '';
		$address2			= (isset($posted['address2'])) ? $posted['address2'] : '';
		$city 				= (isset($posted['city'])) ? $posted['city'] : '';
		$state 				= (isset($posted['state'])) ? $posted['state'] : '';
		$zip 				= (isset($posted['zip'])) ? $posted['zip'] : '';
		$country 			= (isset($posted['country'])) ? $posted['country'] : '';
		$fields_phone 		= (isset($posted['phone'])) ? $posted['phone'] : '';
		$fields_email 		= (isset($posted['email'])) ? $posted['email'] : '';
		$AFID 				= (isset($posted['AFID'])) ? $posted['AFID'] : '';
		$SID 				= (isset($posted['SID'])) ? $posted['SID'] : '';
		$AFFID 				= (isset($posted['AFFID'])) ? $posted['AFFID'] : '';
		$C1 				= (isset($posted['C1'])) ? $posted['C1'] : '';
		$C2 				= (isset($posted['C2'])) ? $posted['C2'] : '';
		$C3 				= (isset($posted['C3'])) ? $posted['C3'] : '';
		$AID 				= (isset($posted['AID'])) ? $posted['AID'] : '';
		$OPT 				= (isset($posted['OPT'])) ? $posted['OPT'] : '';
		$click_id 			= (isset($posted['click_id'])) ? $posted['click_id'] : '';
		$notes				= (isset($posted['notes'])) ? $posted['notes'] : '';

		$fields = array(
			'username' => $this->sticky_username,
			'password' => $this->sticky_password,
			'method' => 'NewProspect',
			'campaignId' => $campaign_id,
			'firstName' => trim($fields_fname),
			'lastName' => trim($fields_lname),
			'address1' => trim($address1),
			'address2' => trim($address2),
			'city' => trim($city),
			'state' => trim($state),
			'zip' => trim($zip),
			'country' => $country,
			'phone' => trim($fields_phone),
			'email' => trim($fields_email),
			'AFID' => trim($AFID),
			'SID' => trim($SID),
			'AFFID' => trim($AFFID),
			'C1' => trim($C1),
			'C2' => trim($C2),
			'C3' => trim($C3),
			'AID' => trim($AID),
			'OPT' => trim($OPT),
			'click_id' => trim($click_id),
			'notes' => $notes,
			'ipAddress' => urlencode($_SERVER['REMOTE_ADDR'])
		);

		$Curl_Session = curl_init();
		curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
		curl_setopt($Curl_Session, CURLOPT_POST, 1);
		curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields));
		curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
		return $content = curl_exec($Curl_Session);

		curl_close($Curl_Session);
	}

	function newOrderWithProspect($posted)
	{

		global $product;

		$prospectId				= (isset($posted['prospect_id'])) ? $posted['prospect_id'] : '';
		$campaign_id 			= (isset($posted['campaign_id'])) ? $posted['campaign_id'] : '';
		$productId 				= (isset($posted['product_id'])) ? $posted['product_id'] : '';
		$product_qty 			= (isset($posted['product_qty'])) ? $posted['product_qty'] : '';
		$shippingId 			= (isset($posted['shipping_id'])) ? $posted['shipping_id'] : '';

		$fields_fname 			= (isset($posted['first_name'])) ? $posted['first_name'] : '';
		$fields_lname 			= (isset($posted['last_name'])) ? $posted['last_name'] : '';

		$shippingAddress1 		= (isset($posted['shippingAddress1'])) ? $posted['shippingAddress1'] : '';
		$shippingAddress2		= (isset($posted['shippingAddress2'])) ? $posted['shippingAddress2'] : '';
		$shippingCity			= (isset($posted['shippingCity'])) ? $posted['shippingCity'] : '';
		$shippingState 			= (isset($posted['shippingState'])) ? $posted['shippingState'] : '';
		$shippingZip			= (isset($posted['shippingZip'])) ? $posted['shippingZip'] : '';
		$shippingCountry		= (isset($posted['shippingCountry'])) ? $posted['shippingCountry'] : '';

		$address1 				= (isset($posted['billingAddress1'])) ? $posted['billingAddress1'] : '';
		$address2				= (isset($posted['billingAddress2'])) ? $posted['billingAddress2'] : '';
		$city 					= (isset($posted['billingCity'])) ? $posted['billingCity'] : '';
		$state 					= (isset($posted['billingState'])) ? $posted['billingState'] : '';
		$zip 					= (isset($posted['billingZip'])) ? $posted['billingZip'] : '';
		$country 				= (isset($posted['billingCountry'])) ? $posted['billingCountry'] : '';

		$fields_phone 			= (isset($posted['phone'])) ? $posted['phone'] : '';
		$fields_email 			= (isset($posted['email'])) ? $posted['email'] : '';

		$creditCardType 		= $this->detect_card_type($posted['creditCardNumber']);
		$creditCardNumber 		= (isset($posted['creditCardNumber'])) ? $posted['creditCardNumber'] : '';
		$expirationDate 		= (isset($posted['expmonth']) && isset($posted['expyear'])) ? $posted['expmonth'] . $posted['expyear'] : '';
		$cvv 					= (isset($posted['cvv'])) ? $posted['cvv'] : '';
		$utm_source				= (isset($posted['utm_source'])) ? $posted['utm_source'] : '';
		$utm_medium				= (isset($posted['utm_medium'])) ? $posted['utm_medium'] : '';
		$utm_campaign			= (isset($posted['utm_campaign'])) ? $posted['utm_campaign'] : '';
		$utm_term				= (isset($posted['utm_term'])) ? $posted['utm_term'] : '';
		$utm_content			= (isset($posted['utm_content'])) ? $posted['utm_content'] : '';

		$sessionId				= (isset($posted['sessionId'])) ? $posted['sessionId'] : '';
		$upsellCount 			= (isset($posted['upsellCount'])) ? $posted['upsellCount'] : 0;
		$upsellId 				= (isset($posted['upsellId'])) ? $posted['upsellId'] : '';
		$billingSameAsShipping 	= (isset($posted['billings'])) ? $posted['billings'] : '';
		$AFID 					= (isset($posted['AFID'])) ? $posted['AFID'] : '';
		$SID 					= (isset($posted['SID'])) ? $posted['SID'] : '';
		$AFFID 					= (isset($posted['AFFID'])) ? $posted['AFFID'] : '';
		$C1 					= (isset($posted['C1'])) ? $posted['C1'] : '';
		$C2 					= (isset($posted['C2'])) ? $posted['C2'] : '';
		$C3 					= (isset($posted['C3'])) ? $posted['C3'] : '';
		$AID 					= (isset($posted['AID'])) ? $posted['AID'] : '';
		$OPT 					= (isset($posted['OPT'])) ? $posted['OPT'] : '';
		$click_id 				= (isset($posted['click_id'])) ? $posted['click_id'] : '';
		$notes 					= (isset($posted['notes'])) ? $posted['notes'] : '';
		$upsellProductIds		= (isset($posted['upsellProductIds'])) ? $posted['upsellProductIds'] : '';
		$upsellCount			= (isset($posted['upsellCount'])) ? $posted['upsellCount'] : '';

		if (($billingSameAsShipping == '1') || ($billingSameAsShipping == 'yes')) {
			$billingSameAsShipping = 'YES';
			$address1				= $shippingAddress1;
			$address2				= $shippingAddress2;
			$city					= $shippingCity;
			$country				= $shippingCountry;
			$state 					= $shippingState;
			$zip					= $shippingZip;
		} else {
			$billingSameAsShipping = 'NO';
		}



		$fields = array(
			'username' => $this->sticky_username,
			'password' => $this->sticky_password,
			'method' => 'NewOrderWithProspect',
			'prospectId' => $prospectId,
			'firstName' => trim($fields_fname),
			'lastName' => trim($fields_lname),
			'billingAddress1' => trim($address1),
			'billingAddress2' => trim($address2),
			'billingCity' => trim($city),
			'billingState' => trim($state),
			'billingCountry' => trim($country),
			'billingZip' => trim($zip),
			'shippingAddress1' => trim($shippingAddress1),
			'shippingAddress2' => trim($shippingAddress2),
			'shippingCity' => trim($shippingCity),
			'shippingState' => trim($shippingState),
			'shippingZip' => trim($shippingZip),
			'shippingCountry' => $shippingCountry,
			'phone' => trim($fields_phone),
			'email' => trim($fields_email),
			'creditCardType' => $creditCardType,
			'creditCardNumber' => $creditCardNumber,
			'expirationDate' => $expirationDate, //mmyy 
			'CVV' => $cvv,
			'sessionId' => $sessionId,
			'tranType' => 'Sale',
			'productId' => $productId,
			'campaignId' => $campaign_id,
			'shippingId' => $shippingId,
			'upsellCount' => $upsellCount,
			'upsellProductIds' => $upsellProductIds,
			'billingSameAsShipping' => $billingSameAsShipping,
			'product_qty_' . $productId => $product_qty,
			'AFID' => trim($AFID),
			'SID' => trim($SID),
			'AFFID' => trim($AFFID),
			'C1' => trim($C1),
			'C2' => trim($C2),
			'C3' => trim($C3),
			'AID' => trim($AID),
			'OPT' => trim($OPT),
			'click_id' => trim($click_id),
			'utm_source' => trim($utm_source),
			'utm_medium' => trim($utm_medium),
			'utm_campaign' => trim($utm_campaign),
			'utm_term' => trim($utm_term),
			'utm_content' => trim($utm_content),
			'notes' => $notes,
			'ipAddress' => urlencode($_SERVER['REMOTE_ADDR'])
		);

		$Curl_Session = curl_init();
		curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
		curl_setopt($Curl_Session, CURLOPT_POST, 1);
		curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields));
		curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
		return $content = curl_exec($Curl_Session);
	}

	function newOrderCardOnFile($posted)
	{

		global $product;
		global $up;
		global $freeshipping;
		global $campaign;

		$campaign_id 	= $campaign[1]->campid;
		$orderId 		= $_SESSION['order_id'];
		$shipping_id 	= $freeshipping[1]->freeshipid;
		$product_id 	= $up[$posted['up']]->option[$posted['buy']]->sticky_product_id;



		$fields = array(
			'username' => $this->sticky_username,
			'password' => $this->sticky_password,
			'method' => 'NewOrderCardOnFile',
			'previousOrderId' => $orderId,
			'productId' => $product_id,
			'campaignId' => $campaign_id,
			'shippingId' => $shipping_id,
			'product_qty_' . $product_id => 1
		);


		$Curl_Session = curl_init();
		curl_setopt($Curl_Session, CURLOPT_URL, 'https://' . $this->sticky_instance . '/admin/transact.php');
		curl_setopt($Curl_Session, CURLOPT_POST, 1);
		curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($fields));
		curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);
		return $content = curl_exec($Curl_Session);
	}

	function detect_card_type($number)
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
}
