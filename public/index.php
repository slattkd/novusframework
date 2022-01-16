<?php

require_once ('../include/config.php');
require_once ('../include/functions.php');
require_once ('../include/director.php');
require_once ('../include/event-capture.php'); 

// TODO Add Template loading, subtemplate, ab templates and paths.
$templatesTest      = getFileListAsArray('../templates/page-tests', true, '', true);
$templatesDefault   = getFileListAsArray('../templates/page-defaults', true, '', true);

//Masely affID = 1342

/*
foreach ($templatesTest as &$value) {
    echo $value.'<br>';
}

foreach ($templatesDefault as &$value) {
    echo $value.'<br>';
}
*/


// get url slugs and look if it matches path or route, else return 404.
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$slug = trim(parse_url($url, PHP_URL_PATH), '/');

//This allows the index.php not to be included in the url.
if (!str_ends_with($slug, '.php')) {
    if (str_ends_with($slug, '/index.php') || $slug == null) {
        $slug = $slug.'index.php';
    } else {
        $slug = $slug.'/index.php';
    }
}


//check in slug for page-test override
if (in_array($slug, $templatesTest)) {
    //if the slug matches, override the template being loaded.
    debugMessage("Loaded from 'page-tests' folder");
    require_once ('../templates/page-tests/'.$slug);
} elseif (in_array($slug, $templatesDefault)) {
    //Load the default url
    debugMessage("Loaded from 'page-defaults' folder");
    require_once ('../templates/page-defaults/'.$slug);
} else {
    //redirect to 404
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    exit();
}

//or use default







//$fooTopic = $context->createTopic('aTopic');
//$message = $context->createMessage('Hello world!');

//$context->createProducer()->send($fooTopic, $message);

/*

*/

/* 

$fooQueue = $context->createQueue('aQueue');
$consumer = $context->createConsumer($fooQueue);

$message = $consumer->receive();

// process a message

$consumer->acknowledge($message);
print_r ($consumer);
// $consumer->reject($message);
*/

//Create template overrides for AB testing
//require_once ('page-defaults/body.php');

?>





