<?php
// for myemailverifier api
// https://client.myemailverifier.com/verifier/validate_single/example@example.com/API_KEY

$email = isset($_POST['email']) ? $_POST['email'] : '';
$token = 'IHA5ZELDFBZAQKP2';
$url = 'https://client.myemailverifier.com/verifier/validate_single/';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $time_start = microtime(true);

    $ch = curl_init();

    $encoded_email = urlencode($email);

    curl_setopt_array($ch, [
    CURLOPT_URL => $url . $encoded_email . '/' . $token,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET"
    ]);

    $response = curl_exec($ch);
    $err = curl_error($ch);

    $time_end = microtime(true);
    $execution_time = ($time_end - $time_start)/60;

    $array = json_decode($response, true);
    $array['Time'] = $execution_time;
    $newJsonString = json_encode($array);
    // echo $response;
    echo $newJsonString;

    curl_close($ch);
}

?>