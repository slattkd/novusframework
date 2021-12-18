<?php

//https://github.com/php-enqueue/enqueue-dev/blob/master/docs/transport/filesystem.md
//https://github.com/php-enqueue/enqueue-dev/blob/master/docs/concepts.md



use Enqueue\Fs\FsConnectionFactory;
$connectionFactory = new FsConnectionFactory([
    'path' => './queue',
    'pre_fetch_count' => 1,
]);
$context = $connectionFactory->createContext();

$fooQueue = $context->createQueue('aQueue');
$message = $context->createMessage('Hello world!'.time());

$context->createProducer()->send($fooQueue, $message);



//TODO: PHP Queue Manager 
//Possibly- https://github.com/fordnox/php-queue-manager

//require 'vendor/autoload.php';

/*
// this cookie is set when not present
$cookieName = 'visitor';

// retrieve visitor id from cookie
$visitorId = array_key_exists($cookieName, $_COOKIE) ? $_COOKIE[$cookieName] : null;

if (!$visitorId) {
    // visitor cookie not set. Use session id as visitor ID
    $visitorId = sha1(uniqid(s::id(), true));

    setcookie($cookieName, $visitorId,
        time() + (2 * 365 * 24 * 60 * 60), '/',
        'project-a.com', false, true);
}

$request = kirby()->request();

// the payload to log
$event = [
    'visitor_id' => $visitorId,
    'session_id' => s::id(),
    'timestamp' => date('c'),
    'ip' => $request->__debuginfo()['ip'],
    'url' => $request->url(),
    'host' => $_SERVER['SERVER_NAME'],
    'path' => $request->path()->toArray(),
    'query' => $request->query()->toArray(),
    'referrer' => visitor::referer(),
    'language' => visitor::acceptedLanguageCode(),
    'ua' => visitor::userAgent()
];

$firehoseClient = new \Aws\Firehose\FirehoseClient([
    // secrets
]);

// asynchronically publish message to firehose delivery stream
$promise = $firehoseClient->putRecordAsync([
    'DeliveryStreamName' => 'kinesis-firehose-stream-123',
    'Record' => ['Data' => json_encode($event)]
]);

register_shutdown_function(function () use ($promise) {
    $promise->wait();
});
*/