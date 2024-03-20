<?php

/*
The director.php routes urls to their destinations, including any
redirects of fallbacks for improperly formatted URLS

This all happens before any analytics, events, or pixels are sent
*/


//print_r($getFileListAsArray('../page-tests', true, '', true));

/*
a=  The "a=" parameter defines the CAKE Affiliate ID and answers
#1; Who the Affiliate that generated the click is. In our example above,
a=1 is referencing Affiliate ID 1.

c=  What Campaign is this click and potential conversion related to?
In our example, c=1 means that this particular Unique Link is referencing creative ID 1.

s1= The s1 Parameter, or Sub ID parameter, is all too often misunderstood.
Since CAKE has 5 Sub ID parameters, the s1 parameter should only be populated
with real SubAffiliate or source ID's as opposed to unique click ID's that CAKE
will only see once. If unique values are placed in the s1 parameter by your
affiliate, CAKE will soon ignore these values as that is not the intended use
of this feature. It is also important to note that the character length for
"s1=" is 50 characters.
*/


// get url slugs and look if it matches path or route, else return 404.
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$slug = trim(parse_url($url, PHP_URL_PATH), '/');
$querystring = "";
if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
    $querystring = "?" . $_SERVER['QUERY_STRING'];
    $_SESSION['querystring'] = $querystring;
}
$_SESSION['url']      = $url;
$_SESSION['slug']     = $slug;
$_SESSION['pageType'] = pathinfo($slug, PATHINFO_FILENAME);
// $_SESSION['last']     = $_SESSION['url']; //<-- this will redirect to the process.php as it stands, and causes a loop ooops.
$_SESSION['last']     = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "";

	
//Add session start time, useful for only firing functions once per session.
// Set the session start time if not already set
if (!isset($_SESSION['session_start_time'])) {
    $_SESSION['session_start_time'] = time();
}

// Check if 'next-page' was posted
if (isset($_POST['next_page'])) {
    // Save it to the session
    $_SESSION['next'] = $_POST['next_page'];
}

$eventTimestamp = time();
$_SESSION['event_id'] = session_id() . '.' . pathinfo($slug, PATHINFO_FILENAME) . '.' . $eventTimestamp;

// Include and instantiate the class.
require_once '../vendor/mobiledetect/mobiledetectlib/src/MobileDetect.php';
// Any mobile device (phones or tablets).
$detect = new \Detection\MobileDetect;
$_SESSION['isMobile'] = $detect->isMobile();
$_SESSION['isIOS'] = $detect->isiOS();

// Pull Affiliate Id from cookie
if (isset($_COOKIE['affid'])) {
    $_SESSION['affid'] = $_COOKIE['affid'];
    $_SESSION['a']     = $_COOKIE['affid'];
} else {
    $_SESSION['affid'] = $site['defaultAffId'];
    $_SESSION['a']     = $site['defaultAffId'];
}

//Globally set session variables if they are not previously set
$_SESSION['email'] ??= '';
$_SESSION['productId'] ??= 0;

function setSessionVars($encryptedData = null)
{
    //Check for allowed query string keys, reduces attempts on invalid data.
    $whitelistKeys = [
        'a','o','r','s','s1','s2','s3','s4','s5','reqid','fbclid','blog','post','offer','voltrk',
        'cpid','cid','cep','utm_medium','utm_source','utm_campaign','utm_content','utm_term',
        'alink','debug','coupon','vwovar','pid','up','dn','add1','add2','add3',"buy",
        "id","pid","last","tid","eftid","next","c1","c2","c3","clickid","qa", "email", "isMobile","cd","st","qa"];
    $allowedData = array_intersect_key($encryptedData, array_flip($whitelistKeys));

    // TODO: for $site variables
    foreach ($allowedData as $queryString => $value) {
        // use $queryString to reset values to different session variables or match to query string value
        if ($queryString == 'a') {
            //This will override the previous cookie affid
            $_SESSION['affid'] = $value ?? $site['defaultAffId'];
            $_SESSION['a'] = $value ?? $site['defaultAffId'];
            setCookie('affid', $_SESSION['a'], time() + ( 60 * 60 * 24 * 45 ), '/');
        }
        if ($queryString == 'pid') {
            $_SESSION['pid'] = $value ?? null;
        }
        if ($queryString == 'up') {
            $_SESSION['up'] = $value ?? null;
        }
        if ($queryString == 'dn') {
            $_SESSION['dn'] = $value ?? null;
        }
        if ($queryString == 'add1') {
            $_SESSION['add1'] = $value ?? null;
        }
        if ($queryString == 'add2') {
            $_SESSION['add2'] = $value ?? null;
        }
        if ($queryString == 'add3') {
            $_SESSION['add3'] = $value ?? null;
        }
        if ($queryString == 'o') {
            $_SESSION['o'] = $value ?? null;
        }
        if ($queryString == 's') {
            $_SESSION['s'] = $value ?? null;
        }
        if ($queryString == 's1') {
            $_SESSION['s1'] = $value ?? null;
        }
        if ($queryString == 's2') {
            $_SESSION['s2'] = $value ?? null;
        }
        if ($queryString == 's3') {
            $_SESSION['s3'] = $value ?? null;
        }
        if ($queryString == 's4') {
            $_SESSION['s4'] = $value ?? null;
        }
        if ($queryString == 'voltrk') {
            $_SESSION['voltrk'] = $value ?? null;
        }
        if ($queryString == 'cpid') {
            $_SESSION['cpid'] = $value ?? null;
        }
        if ($queryString == 'cid') {
            $_SESSION['cid'] = $value ?? null;
            setCookie('cid', $value);
        }
        if ($queryString == 'cep') {
            $_SESSION['cep'] = $value ?? null;
        }
        if ($queryString == 'alink') {
            $_SESSION['alink'] = $value ?? null;
        }
        if ($queryString == 'reqid') {
            $_SESSION['reqid'] = $value ?? null;
        }
        if ($queryString == 'fbclid') {
            $_SESSION['fbclid'] = $value ?? null;
            $date = new DateTime();
            $_SESSION['fbclidCreationTime'] = $date->getTimestamp();
        }
        if ($queryString == 'blog') {
            $_SESSION['blog'] = $value ?? null;
        }
        if ($queryString == 'post') {
            $_SESSION['post'] = $value ?? null;
        }
        if ($queryString == 'coupon') {
            $_SESSION['coupon'] = $value ?? null;
        }
        if ($queryString == 'debug') {
            if ($value == 'js6^g1hks92%ks7392hald81^11') {
                setCookie('debug', $value, time() + 128000, "/");
            } else {
                setCookie('debug', "no", time() - 3600, "/");
            }
        }
        if ($queryString == 'vwovar') {
            $_SESSION['vwovar'] = $value ?? null;
        }
        if ($queryString == 'up') {
            $_SESSION['up'] = 'https://' . $_SERVER['HTTP_HOST'] . '/up/' . $value ?? 'https://' . $_SERVER['HTTP_HOST'] . '/thankyou/';
        }
        if ($queryString == 'buy') {
            $_SESSION['buy'] = $value ?? null;
        }
        if ($queryString == 'next') {
            $_SESSION['next'] = $value ?? null;
        }
        if ($queryString == 'last') {
            $_SESSION['last'] = $value ?? $_SESSION['url'];
        }
        if ($queryString == 'c1') {
            $_SESSION['c1'] = $value ?? null;
        }
        if ($queryString == 'c2') {
            $_SESSION['c2'] = $value ?? null;
        }
        if ($queryString == 'c3') {
            $_SESSION['c3'] = $value ?? null;
        }
        if ($queryString == 'utm_source') {
            $_SESSION['utm_source'] = $value ?? null;
        }
        if ($queryString == 'utm_medium') {
            $_SESSION['utm_medium'] = $value ?? null;
        }
        if ($queryString == 'utm_campaign') {
            $_SESSION['utm_campaign'] = $value ?? null;
        }
        if ($queryString == 'utm_term') {
            $_SESSION['utm_term'] = $value ?? null;
        }
        if ($queryString == 'utm_content') {
            $_SESSION['utm_content'] = $value ?? null;
        }
        if ($queryString == 'clickid') {
            $_SESSION['clickid'] = $value ?? null;
        }
        if ($queryString == 'r') {
            $_SESSION['r'] = $value ?? null;
            $_SESSION['eftid'] = $value ?? null;
        }
        if ($queryString == 'qa') {
            $_SESSION['qa'] = $value ?? null;
        }
       // $_SESSION[$queryString] = $value
    }
}


// only start a new session if a session does not exist.
if (!isset($_SESSION)) {
    session_start(['read_and_close' => true]);
}


// Set Voluum Variables and Exit Links
$voluum = 0;
if (isset($_SESSION['voltrk'])) {
    if ((isset($_SESSION['cpid'])) || (isset($_SESSION['cid'])) || (isset($_SESSION['cep']))) {
        $voluum = 1;
    }
}

if ($voluum) {
    $nextlink = 'https://treach-tutters.com/click' . $querystring;
    $exitlink = 'https://treach-tutters.com/click' . $querystring;
}


//TODO:
/* Add the ability to include URLs


//TODO: Add ability to decode string to url variables: DONE!
/*
This was brought over from the old funnel not sure if it is needed yet... 1/7/2022
It creates a $querystring variable for use on passing to new pages,
encoded URL might be the better option as our ucstomers or fraudsters wont be
able to adjust or modify parameters
*/

$querystring    = "";
$encryptedData  = [];

if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
    //TODO: Remove UTM from QueryString Variable
    $querystring = "?" . $_SERVER['QUERY_STRING'];
}

if ($querystring !== "") {
    debugMessage("QueryString: " . $querystring);
    $encodedUrl = obfuscateString($querystring);

    debugMessage("Encoded URL: " . "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . "/?offer=" . $encodedUrl);
    debugMessage("Encoded Length: " . strlen($encodedUrl));

    if (!isset($_GET['offer'])) {
        //Forward page to encrypted URL
        //Change this to get encrypted URL in test.
        if ($site['debug'] !== true) {
            //Disabled for initial A/B test (shows all of the Querystrings)
            //header("Location: http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . "/?offer=" . $encodedUrl);
        }
        $decodedUrl = unobfuscateString($encodedUrl);
    } else {
        // Capture and decode encrypted URL
        if (isset($_GET['offer']) && $_GET['offer'] !== "") {
            $decodedUrl = unobfuscateString($_GET['offer']);
        }
    }

    //Check for Validity
    debugMessage("Decoded URL: " . $_SERVER['HTTP_HOST'] . "/" . $decodedUrl);
    $decodedUrl = str_replace('?', '', $decodedUrl);

    parse_str($decodedUrl, $encryptedData);
    debugMessage("Decoded Querystring: " . $decodedUrl);

    //Grab and process session variables
    setSessionVars($encryptedData);
}


//TODO: Change currency display based on physical Location or currency Data
