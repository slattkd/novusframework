<?php


// Logging with Monolog

// https://github.com/Seldaek/monolog
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

debugTimerStart('logger', 'Starting up logger');
	$logger = new Logger('System');
	$logger->pushHandler(new StreamHandler('../log/system.log', Logger::INFO));

	$logger->info('Testing Empty logging folder creation');  
debugTimerEnd('logger');

//TODO: Add Sticky API Functions
 /* 
    Username: pineappleapi
    Pass: nWsw3BzrhnFBkJ
 */

//TODO: Add Maropost API Functions 

//TODO: Add Cake "API" functions
function download_page($path){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$path);
    curl_setopt($ch, CURLOPT_FAILONERROR,1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $retValue = curl_exec($ch);          
    curl_close($ch);
    return $retValue;
}


function sendCakeConversion()
{
    /*
    Sends a conversion event to CAKE

    https://support.getcake.com/support/solutions/articles/13000068564

    Call using funtion // sendCakeConversion();
    */

    global $site;
    
    $cakeApiUrl = 'https://demo-new.cakemarketing.com/api/3/track.asmx/MassConversionInsert?api_key=3YmDJeT3VHTFhDqAjr2OlQ&conversion_date=2%2F14%2F14&affiliate_id=3692&campaign_id=8496&sub_affiliate=%5BEmpty%5D&creative_id=1131916&total_to_insert=4&payout=40&received=43.75&note=Advertiser+did+not+place+conversion+pixel&transaction_ids=TID1%2CTID2%2CTID3&unpaid_disposition_id=0';
    $request =  $site['cakeApiUrl'].'api/3/track.asmx/MassConversionInsert?api_key='.$site['cakeApiKey'].'&conversion_date='.date('Y-m-d').'&affiliate_id=424&campaign_id=1&sub_affiliate=%5BEmpty%5D&creative_id=1131916&total_to_insert=4&payout=40&received=43.75&note=Advertiser+did+not+place+conversion+pixel&transaction_ids=TID1%2CTID2%2CTID3&unpaid_disposition_id=0';

    debugTimerStart('cakeRequest', 'Send Cake Conversion');
        debugMessage("Cake Request URL: ".$request);
        $sXML = download_page($request);
    debugTimerEnd('cakeRequest');
    
    $oXML = new SimpleXMLElement($sXML);

    print_r($oXML);
    
    foreach($oXML->entry as $oEntry){
        echo $oEntry->success . "\n";
        echo $oEntry->message . "\n";
    }
}


//TODO: Add helper functions 

function setParameters($param)
{
    
}

function validateUrl()
{
    /*
    This function should take a decoded URL and verify it is valid, 
    if not it should redirect to the standard complaint version of the funnel
    */
}


function obfuscateString($s) 
{
    global $site;
    debugTimerStart('encoding', 'Encoding URL');
        $secretHash = $site['urlkey'];
        $iv = $site['iv'];
        debugMessage("Initialization Vector: ".$iv);
        return openssl_encrypt($s, 'AES-256-OFB', $secretHash, 0, $iv);
    debugTimerEnd('encoding');
}

function unobfuscateString($s)
{
    global $site;
    debugTimerStart('decoding', 'Decoding URL');
        $secretHash = $site['urlkey'];
        $iv = $site['iv'];
        return openssl_decrypt($s, 'AES-256-OFB', $secretHash, 0, $iv);
    debugTimerEnd('decoding');
}

//TODO: Add developer / debug

/*
These three helper debug funtions essentially extend the debugbar to 
check if the site is in debugmode for measurements and debug messages. 
It also simplfies the code on all pages.

The three functions include; debugTimerStart, debugTimerEnd, debugMessage
*/

function debugTimerStart($id, $message)
{
    global $site;
    global $debugbar;
    if ($site['debug'] == true) {$debugbar['time']->startMeasure($id, $message);}
}

function debugTimerEnd($id)
{
    global $site;
    global $debugbar;
    if ($site['debug'] == true) {  $debugbar['time']->stopMeasure($id); }
}

function debugMessage($message)
{
    global $site;
    global $debugbar;
    if ($site['debug'] == true) {$debugbar["messages"]->addMessage("Cake Request URL: ".$message);}
}

//TODO: Template Functions

/*
Extends the template based on paths to easily add new versions for A/B testing.
*/
function template($template, $templatePath = 'page-defaults', $vwoVariable = null) {
    global $site;
    global $company;
    global $debugbarRenderer;
    global $debugbar;

    require_once ('../'.$templatePath.'/'.$template.'.php');
}