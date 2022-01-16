<?php
/*
The director.php routes urls to their destinations, including any 
redirects of fallbacks for improperly formatted URLS

This all happens before any analytics, events, or pixels are sent
*/


//print_r($getFileListAsArray('../page-tests', true, '', true));




/*
a=  The "a=" parameter defines the CAKE Affiliate ID and answers #1; Who the Affiliate that generated the click is. In our example above, a=1 is referencing Affiliate ID 1.
c=  What Campaign is this click and potential conversion related to? In our example, c=1 means that this particular Unique Link is referencing creative ID 1.
s1= The s1 Parameter, or Sub ID parameter, is all too often misunderstood. Since CAKE has 5 Sub ID parameters, the s1 parameter should only be populated with real SubAffiliate or source ID's as opposed to unique click ID's that CAKE will only see once. If unique values are placed in the s1 parameter by your affiliate, CAKE will soon ignore these values as that is not the intended use of this feature. It is also important to note that the character length for "s1=" is 50 characters.
*/


// only start a new session if a session does not exist.
if (!isset($_SESSION)) session_start(['read_and_close' => true]);



function setSessionVars($encryptedData = null) {
    //Check for allowed querystring keys, reduces attempts on invalid data.
    $whitelistKeys = ['a','o','r','s1','s2','s3','s4','s5','reqid','fbclid','blog','post','offer'];
    $allowedData = array_intersect_key($encryptedData, array_flip($whitelistKeys));

    foreach ($allowedData as $queryString => $value) {
        // us $queryString to reset values to different session varaibles or match to querystring value 
        if ($queryString == 'a'){
            $_SESSION['affid'] = $value;
        } else {
            $_SESSION[$queryString] = $value;
        }  
    }
}

//TODO:
/* Add the ability to include URLs


//TODO: Add ability to decode string to url variables: DONE!
/*
This was brought over from the old funnel not ure if it is needed yet... 1/7/2022
It creates a $querystring variable for use on passing to new pages, 
encoded URL might be the better option as our ucstomers or fraudsters wont be
able to adjust or modify parameters
*/

$querystring    = "";
$encryptedData  = [];

if( isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']) ) {
    $querystring = "?".$_SERVER['QUERY_STRING'];
}

if ($querystring !== ""){
    debugMessage("QueryString: ".$querystring);
    $encodedUrl = obfuscateString($querystring);

    debugMessage("Encoded URL: "."http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . "/?offer=".$encodedUrl);
    debugMessage("Encoded Length: ".strlen($encodedUrl));

    if (!isset($_GET['offer']) ){
        //Forward page to encrypted URL
        if ($site['debug'] !== true) {
            header("Location: http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . "/?offer=".$encodedUrl);   
        }

        $decodedUrl = unobfuscateString($encodedUrl);
    } else {
        // Capture and decode encrypted URL
        if (isset($_GET['offer']) && $_GET['offer'] !== ""){
            $decodedUrl = unobfuscateString($_GET['offer']);
        }
    }

    //Check for Validity
    debugMessage("Decoded URL: ".$_SERVER['HTTP_HOST']."/".$decodedUrl);
    $decodedUrl = str_replace('?','',$decodedUrl);

    parse_str($decodedUrl, $encryptedData);
    debugMessage("Decoded Querystring: ".$decodedUrl);

    //Grab and process session variables
    setSessionVars($encryptedData);
    
}


//TODO: Change currency display based on physical Location or currency Data
