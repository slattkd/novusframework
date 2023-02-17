<?php

session_start();
date_default_timezone_set("America/New_York");

require_once('../include/config.php');
require_once('../include/functions.php');
require_once('../include/director.php');
//require_once('../include/event-capture.php');
require_once('../include/stickylegacy.php');
require_once('../include/OrderValidation.php');
require_once('../include/curlWrapper.php');
require_once('../include/maropost.php');
//require_once('../include/productSettings.php');

// TODO Add Template loading, subtemplate, ab templates and paths.
$templatesTest      = getFileListAsArray('../templates/page-tests', true, '', true);
$templatesDefault   = getFileListAsArray('../templates/page-defaults', true, '', true);

// Masley affID = 1342

/*
echo "<h2>Template Overrides</h2>";
foreach ($templatesTest as &$value) {
    echo $value . '<br>';
}

echo "<h2>Template Defaults</h2>";
foreach ($templatesDefault as &$value) {
    echo $value . '<br>';
}
*/


//Allows the index.php not to be included in the url if it is a folder path

// TODO: Add Query variable to show default page example: vwo=c
if (!str_ends_with($slug, '.php')) {
    if (str_ends_with($slug, '/index.php') || $slug == null) {
        $slug = $slug . 'index.php';
    } else {
        if (!str_ends_with($slug, '.php')) {
            $slug = $slug . '.php';
            //echo '<br>SLUG1:'.$slug;
        } else {
            //this is the root directory, lookup main index file.
            $slug = $slug . '/index.php';
        }
    }
}

//echo '<br>SLUG:'.$slug;

//check in slug for page-test override
if (in_array($slug, $templatesTest)) {
    //if the slug matches, override the template being loaded.
    debugMessage("Loaded from 'page-tests' folder");
    require_once('../templates/page-tests/' . $slug);
} elseif (in_array($slug, $templatesDefault)) {
    //Load the default url
    debugMessage("Loaded from 'page-defaults' folder");
    require_once('../templates/page-defaults/' . $slug);
} else {
    //redirect to 404
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    $loggerNotFound->error('404 Error accessed: ' . $slug);
    exit();
}

//or use default






//This is the demo for the Queue system.
//$fooTopic = $context->createTopic('aTopic2');
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
