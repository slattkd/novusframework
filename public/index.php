<?php

require_once ('../include/config.php');
require_once ('../include/functions.php');
require_once ('../include/director.php');
require_once ('../include/event-capture.php'); 


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

<html>
    <head>
        <?php template('header'); ?>
    </head>
    <body class="bg-blue"> 
        <?php template('navigation'); ?>
        <?php template('body'); ?>
        <?php template('footer'); ?>
        <?php if ($site['debug'] == true) {template('debug', 'debug'); } ?>
    </body>
</html>




