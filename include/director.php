<?php
/*
The director.php routes urls to their destinations, including any 
redirects of fallbacks for improperly formatted URLS

This all happens before any analytics, events, or pixels are sent
*/




//TODO: Add Session handling - Change to reflect decoded session object instead of $_GET


/*
a=  The "a=" parameter defines the CAKE Affiliate ID and answers #1; Who the Affiliate that generated the click is. In our example above, a=1 is referencing Affiliate ID 1.
c=  What Campaign is this click and potential conversion related to? In our example, c=1 means that this particular Unique Link is referencing creative ID 1.
s1= The s1 Parameter, or Sub ID parameter, is all too often misunderstood. Since CAKE has 5 Sub ID parameters, the s1 parameter should only be populated with real SubAffiliate or source ID's as opposed to unique click ID's that CAKE will only see once. If unique values are placed in the s1 parameter by your affiliate, CAKE will soon ignore these values as that is not the intended use of this feature. It is also important to note that the character length for "s1=" is 50 characters.
*/


// only start a new session if a session does not exist.
if (!isset($_SESSION)) session_start(['read_and_close' => true]);

if (isset($_GET['o']) && $_GET['o'] !== ""){
    $_SESSION['o'] = $_GET['o'];
}
if (isset($_GET['r']) && $_GET['r'] !== ""){
    $_SESSION['r'] = $_GET['r'];
}
if (isset($_GET['a']) && $_GET['a'] !== ""){
    $_SESSION['affid'] = $_GET['a'];
}
if (isset($_GET['blog']) && $_GET['blog'] !== ""){
    $_SESSION['blog'] = $_GET['blog'];
}
if (isset($_GET['post']) && $_GET['post'] !== ""){
    $_SESSION['post'] = $_GET['post'];
}
if (isset($_GET['s']) && $_GET['s'] !== ""){
    $_SESSION['s'] = $_GET['s'];
}
if (isset($_GET['s1']) && $_GET['s1'] !== ""){
    $_SESSION['s1'] = $_GET['s1'];
}
if (isset($_GET['s2']) && $_GET['s2'] !== ""){
    $_SESSION['s2'] = $_GET['s2'];
}
if (isset($_GET['s3']) && $_GET['s3'] !== ""){
    $_SESSION['s3'] = $_GET['s3'];
}
if (isset($_GET['s4']) && $_GET['s4'] !== ""){
    $_SESSION['s4'] = $_GET['s4'];
}
if (isset($_GET['offer']) && $_GET['offer'] !== ""){
    //AES 256 encoding strinf with offer tracking values
    $_SESSION['offer'] = $_GET['offer'];
}
if (isset($_GET['reqid']) && $_GET['reqid'] !== ""){
    //request id for serverside tracking
    $_SESSION['reqid'] = $_GET['reqid'];
}

//TODO: Add ability to decode string to url variables
// encoded string to debug bar 

/*
This was brought over from teh old funnel not ure if it is needed yet... 1/7/2022
It creates a $querystring variable for use on passing to new pages, 
encoded URL might be the better option as our ucstomers or fraudsters wont be
able to adjust or modify parameters
*/
$url = $_SERVER['REQUEST_URI'];
$querystring = "";
if( isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']) ) {
    $querystring = "?".$_SERVER['QUERY_STRING'];
}

if ($site['debug'] == true) {
    
    $encodedUrl = obfuscateString($querystring);
    debugMessage("Encoded URL: ".$_SERVER['HTTP_HOST']."/?offer=".$encodedUrl);
    debugMessage("Encoded Length: ".strlen($encodedUrl));

    $decodedUrl = unobfuscateString($encodedUrl);
    debugMessage("Decoded URL: ".$_SERVER['HTTP_HOST']."/".$decodedUrl);

} else {
    //redirect site to encoded string
    /*
    if (!isset($_GET['offer']) ){
        $encodedUrl = obfuscateString($querystring);
        header("Location: https://".$_SERVER['HTTP_HOST']."?offer=".$encodedUrl); 
    }\*/
}

//TODO: Change currency display based on physical Location or currency Data
