<?php
/*
The director.php routes urls to their destinations, including any 
redirects of fallbacks for improperly formatted URLS

This all happens before any analytics, events, or pixels are sent
*/




//TODO: Add Session handling - Change to reflect decoded session object instead of $_GET

// only start a new session if a session does not exist.
if (!isset($_SESSION)) session_start();

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

//TODO: Add ability to decode string to url variables
// encoded string to debug bar
$url = $_SERVER['REQUEST_URI'];
$querystring = "";
if( isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']) ) {
    $querystring = "?".$_SERVER['QUERY_STRING'];
}

if ($site['debug'] == true) {
    
    $encodedUrl = obfuscateString($querystring);
    $debugbar["messages"]->addMessage("Encoded URL: ".$_SERVER['HTTP_HOST']."/?offer=".$encodedUrl);
    $debugbar["messages"]->addMessage("Encoded Length: ".strlen($encodedUrl));

    $decodedUrl = unobfuscateString($encodedUrl);
    $debugbar["messages"]->addMessage("Decoded URL: ".$_SERVER['HTTP_HOST']."/".$decodedUrl);

} else {
    //redirect site to encoded string
    $encodedUrl = obfuscateString($querystring);
    header("Location: ".$_SERVER['HTTP_HOST']."/?offer=".$encodedUrl); 

}

//TODO: Change currency display based on physical Location or currency Data
