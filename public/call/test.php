<?php

$request = curl_init('https://novusframework.test/call');

curl_setopt($request, CURLOPT_HTTPHEADER, array(
    'Proxy-Auth: KucdYRAJ23QF5EE6Kjm7v7G8',
    'Proxy-Target-URL: https://gdc.sticky.io/admin/membership.php?username=pineappleapi&password=nWsw3BzrhnFBkJ&method=validate_credentials'
));

curl_exec($request);

echo $request;
