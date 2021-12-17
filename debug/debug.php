<?php
// Additional documentation on using the debug bar can be found here:
// http://phpdebugbar.com/docs/base-collectors.html#messages

//Collects and show Config Site Data
$debugbar->addCollector(new DebugBar\DataCollector\ConfigCollector($site,"Config"));

//Collects and show Config Company Data
$debugbar->addCollector(new DebugBar\DataCollector\ConfigCollector($company,"Company"));

/*
//Debug Bar Examples

//Debug Message Example
$debugbar["messages"]->addMessage("Debugging is the BEST bug!");

//Debug timer example
$debugbar['time']->startMeasure('longop', 'My long operation');
    //sleep(1);
$debugbar['time']->stopMeasure('longop');

//Debug timer in a function example
$debugbar['time']->measure('Function wrapped operation', function() {
    //sleep(1);
}); 


//Debug Exception Example
try {
    throw new Exception('foobar');
} catch (Exception $e) {
    $debugbar['exceptions']->addException($e);
}
*/


//Render the debug bar
echo $debugbarRenderer->render();


?>