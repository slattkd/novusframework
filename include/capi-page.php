<?php

// Add facebook API / CAPI conversion.

function callCAPIPage($event_type) {
  $date = new DateTime();
  $curl = curl_init();

  // https://graph.facebook.com/{API_VERSION}/{PIXEL_ID}/events?access_token={TOKEN}.
  $fbApiVerison = "12.0"; //number only
  require('config.php');
  $fbPixelId = $site['fbPixelId'];
  $fbToken = $site['fbToken'];
  $fbCurlUrl = "https://graph.facebook.com/v".$fbApiVerison."/".$fbPixelId."/events";

  $array = [
      "data" => [
          "event_name" => $event_type,
          "event_time" => $date->getTimestamp(),
          "action_source" => 'website',
          "event_id" => $_SESSION['event_id'],
          "event_source_url" => "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
          "user_data" => [
              "client_ip_address" => urlencode($_SERVER['REMOTE_ADDR']),
              "client_user_agent" => $_SERVER['HTTP_USER_AGENT'],
              "em" => hash('sha256', trim($_SESSION['email'])),
          ],
          "custom_data" => [
              "page_type" => $_SESSION['pageType'],
          ],
      ],
      "access_token" => $fbToken,
  ];

  // Conditioanlly add product ID to CAPI array
  if ($_SESSION['productId'] != 0) {
      $array["data"]["custom_data"]["contents"] = [
          [
              "id" => $_SESSION['productId'], 
              "quantity" => 1,
          ],
      ];
  }

  // conditionally add fb
  // https://developers.facebook.com/docs/marketing-api/conversions-api/parameters/fbp-and-fbc
  if (isset($_SESSION['fbclid'])) {
    $array['data']['user_data']['fbc'] = 'fb.1.'.$_SESSION['fbclidCreationTime'].'.'.$_SESSION['fbclid'];
    // $array['data']['user_data']['fbp'] = null;
  }

// print("<pre>".print_r(json_encode($array, JSON_PRETTY_PRINT),true)."</pre>");

  debugTimerStart('capiPage', 'Start CAPI ' . $event_type . ' call');
  // reset data to array type for api
  $array['data'] = array($array['data']);
  curl_setopt_array($curl, array(
    CURLOPT_URL => $fbCurlUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($array),
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json'
    ),
  ));


  $response = curl_exec($curl);
  curl_close($curl);

  //print("<pre>".print_r($response,true)."</pre>");

  //Capture CAPI result and save to log
  $log  = "User: ".$_SERVER['REMOTE_ADDR'].' - '.date("F j, Y, g:i a").PHP_EOL.
  "Payload: ".json_encode($array, JSON_PRETTY_PRINT).PHP_EOL.
  "JSON Response: ".$response.PHP_EOL.
  "-------------------------".PHP_EOL;
  //Save string to log, use FILE_APPEND to append.
  file_put_contents('../log/log_capi_'.date("Y-m-d").'.log', $log, FILE_APPEND);
  debugTimerEnd('capiPage');
}

?>