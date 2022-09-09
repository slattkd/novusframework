<?php

require '../vendor/autoload.php';

use Enqueue\Fs\FsConnectionFactory;

$connectionFactory = new FsConnectionFactory([
    'path' => './queue',
    'pre_fetch_count' => 1,
]);
$context = $connectionFactory->createContext();

//


$fooQueue = $context->createQueue('aQueue');
$consumer = $context->createConsumer($fooQueue);

// process a message
$message = $consumer->receive();

echo ('we consumed the queue');

$consumer->acknowledge($message);
// $consumer->reject($message);
