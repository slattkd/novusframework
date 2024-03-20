<?php

// PHP URL Router Functions

function getFileListAsArray($dir, $recursive = true, $basedir = '', $include_dirs = false)
{
    if ($dir == '') {
        return array();
    } else {
        $results = array();
        $subresults = array();
    }
    if (!is_dir($dir)) {
        $dir = dirname($dir);
    } // so a files path can be sent
    if ($basedir == '') {
        $basedir = realpath($dir) . DIRECTORY_SEPARATOR;
    }

    $files = scandir($dir);
    foreach ($files as $key => $value) {
        if (($value != '.') && ($value != '..')) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (is_dir($path)) {
                // optionally include directories in file list
                if ($include_dirs) {
                    $subresults[] = str_replace($basedir, '', $path);
                }
                // optionally get file list for all subdirectories
                if ($recursive) {
                    $subdirresults = getFileListAsArray($path, $recursive, $basedir, $include_dirs);
                    $results = array_merge($results, $subdirresults);
                }
            } else {
                // strip basedir and add to subarray to separate file list
                $subresults[] = str_replace($basedir, '', $path);
            }
        }
    }
    // merge the subarray to give the list of files then subdirectory files
    if (count($subresults) > 0) {
        $results = array_merge($subresults, $results);
    }
    return $results;
}

// Logging with Monolog

// https://github.com/Seldaek/monolog
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;

debugTimerStart('logger', 'Starting up logger');
    $logger = new Logger('System');
    //$logger->pushProcessor(new \Monolog\Processor\GitProcessor());
    $logger->pushProcessor(new \Monolog\Processor\WebProcessor());
    $stream_handler = new RotatingFileHandler('../log/system.log', 0, Logger::INFO, true, 0664);
    $stream_handler->setFilenameFormat('{date}_{filename}', 'Y-m-d');
    $output = "%level_name% | %datetime% > %message% | %context% %extra%\n";
    $dateFormat = "Y-n-j g:i:s a";
    $formatter = new LineFormatter(
        $output, // Format of message in log
        $dateFormat, // Datetime format
        true, // allowInlineLineBreaks option, default false
        true  // discard empty Square brackets in the end, default false
    );
    $stream_handler->setFormatter($formatter);
    $logger->pushHandler($stream_handler);
    //$logger->pushHandler(new StreamHandler('../log/' . date('Y-m-d') . '_system.log', Logger::INFO));
debugTimerEnd('logger');

/*
debugTimerStart('pixel-logger', 'Starting up pixel logger');
    $loggerPixel = new Logger('Pixel');
    $loggerPixel->pushHandler(new StreamHandler('../log/' . date('Y-m-d') . '_pixel.log', Logger::INFO));
debugTimerEnd('pixel-logger');
*/

debugTimerStart('404-logger', 'Starting up logger');
    $loggerNotFound = new Logger('404');
    //$logger->pushProcessor(new \Monolog\Processor\GitProcessor());
    $loggerNotFound->pushProcessor(new \Monolog\Processor\WebProcessor());
    $stream_handler_nf = new RotatingFileHandler('../log/404.log', 0, Logger::INFO, true, 0664);
    $stream_handler_nf->setFilenameFormat('{date}_{filename}', 'Y-m-d');
    $output = "%level_name% | %datetime% > %message% | %context% %extra%\n";
    $dateFormat = "Y-n-j g:i:s a";
    $formatter_nf = new LineFormatter(
        $output, // Format of message in log
        $dateFormat, // Datetime format
        true, // allowInlineLineBreaks option, default false
        true  // discard empty Square brackets in the end, default false
    );
    $stream_handler_nf->setFormatter($formatter_nf);
    $loggerNotFound->pushHandler($stream_handler_nf);
debugTimerEnd('404-logger');


debugTimerStart('pixel-logger', 'Starting up pixel logger');
    $loggerPixel = new Logger('Pixel');
    //$loggerPixel->pushProcessor(new \Monolog\Processor\GitProcessor());
    $loggerPixel->pushProcessor(new \Monolog\Processor\WebProcessor());
    $stream_handler_px = new RotatingFileHandler('../log/pixel.log', 0, Logger::INFO, true, 0664);
    $stream_handler_px->setFilenameFormat('{date}_{filename}', 'Y-m-d');
    $output = "%level_name% | %datetime% > %message% | %context% %extra%\n";
    $dateFormat = "Y-n-j g:i:s a";
    $formatter_px = new LineFormatter(
        $output, // Format of message in log
        $dateFormat, // Datetime format
        true, // allowInlineLineBreaks option, default false
        true  // discard empty Square brackets in the end, default false
    );
    $stream_handler_nf->setFormatter($formatter_px);
    $loggerPixel->pushHandler($stream_handler_px);
debugTimerEnd('pixel-logger');

//TODO: Add Sticky API Functions
 /*
    Username: pineappleapi
    Pass: nWsw3BzrhnFBkJ
 */

//TODO: Add Maropost API Functions

//TODO: Add Cake "API" functions
function download_page($path)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $path);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

    Call using function // sendCakeConversion();
    */

    global $site;

    //$cakeApiUrl = 'https://demo-new.cakemarketing.com/api/3/track.asmx/MassConversionInsert?api_key=3YmDJeT3VHTFhDqAjr2OlQ&conversion_date=2%2F14%2F14&affiliate_id=3692&campaign_id=8496&sub_affiliate=%5BEmpty%5D&creative_id=1131916&total_to_insert=4&payout=40&received=43.75&note=Advertiser+did+not+place+conversion+pixel&transaction_ids=TID1%2CTID2%2CTID3&unpaid_disposition_id=0';
    $request =  $site['cakeApiUrl'] . 'api/3/track.asmx/MassConversionInsert?api_key=' . $site['cakeApiKey'] . '&conversion_date=' . date('Y-m-d') . '&affiliate_id=424&campaign_id=1&sub_affiliate=%5BEmpty%5D&creative_id=1131916&total_to_insert=4&payout=40&received=43.75&note=Advertiser+did+not+place+conversion+pixel&transaction_ids=TID1%2CTID2%2CTID3&unpaid_disposition_id=0';

    debugTimerStart('cakeRequest', 'Send Cake Conversion');
        debugMessage("Cake Request URL: " . $request);
        $sXML = download_page($request);
    debugTimerEnd('cakeRequest');

    $oXML = new SimpleXMLElement($sXML);

    print_r($oXML);

    foreach ($oXML->entry as $oEntry) {
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
    //TODO: Add URL Validation
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
        debugMessage("Initialization Vector: " . $iv);
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
    if ($site['debug'] == true) {
            $debugbar['time']->startMeasure($id, $message);
    }
}

function debugTimerEnd($id)
{
    global $site;
    global $debugbar;
    if ($site['debug'] == true) {
        $debugbar['time']->stopMeasure($id);
    }
}

function debugMessage($message)
{
    global $site;
    global $debugbar;
    if ($site['debug'] == true) {
        $debugbar["messages"]->addMessage($message);
    }
}

//TODO: Template Functions

/*
Extends the template based on paths to easily add new versions for A/B testing.
*/
function template($template, $vwoVariable = null, $current_step = null, $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;
    global $products;
    global $debugbarRenderer;
    global $debugbar;

    require('../' . $templatePath . '/' . $template . '.php');
}

/*
Extends the template based on paths to easily add new versions for A/B testing.
*/
function video($template, $video_id = null, $drop_time = null, $overlay = null, $vwoVariable = null, $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;
    global $products;
    global $debugbarRenderer;
    global $debugbar;

    require('../' . $templatePath . '/' . $template . '.php');
}

function videoJS($template, $video_id = null, $video_url = null, $drop_time = null, $overlay = null, $controls = null, $square = null,  $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;
    global $products;
    global $debugbarRenderer;
    global $debugbar;

    require('../' . $templatePath . '/' . $template . '.php');
}

// generic modal component with customization for title, body, footer, etc.
function modal($template, $modal_id = null, $modal_title = null, $modal_body = null, $modal_footer = null, $max_width = null, $height = null, $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;
    global $products;
    global $debugbarRenderer;
    global $debugbar;

    require('../' . $templatePath . '/' . $template . '.php');
}

// bottom fixed button to scroll to cta section
function floatButton($template, $top_content, $button_text = null, $scroll_start = null, $scroll_id = null, $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;

    require('../' . $templatePath . '/' . $template . '.php');
}

// opens models for applicable content
function legalLinks($template, $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;

    require('../' . $templatePath . '/' . $template . '.php');
}

// opens models for applicable content
function rpHeader($template, $show_phone = null, $show_secure = null, $justify = null, $container = null, $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;

    require('../' . $templatePath . '/' . $template . '.php');
}

// exit intent, pass in a modal_id or default to window alert/confirm
function exitIntent($template, $modal_id = null, $templatePath = 'templates/page-defaults')
{
    global $site;
    global $company;

    require('../' . $templatePath . '/' . $template . '.php');
}

/*
function pixelEvent($template, $event, $affid = null)
{
    global $site;
    global $company;
    global $products;
    global $debugbarRenderer;
    global $debugbar;
    $templatePath = 'templates/page-defaults';

    require('../' . $templatePath . '/' . $template . '.php');
}
*/

// version control for css/js added to header src
function get_that_filetime($file_url = false) {
    if (!file_exists($file_url)) {
        return '';
    }
    return filemtime($file_url);
}

/*
 calculate display prices and amounts with product data from product.json
 requires numerical values for these fields:
     "product_month"
     "product_qty"
     "product_price"
     "product_retail"
     "product_ship"
*/
function savedAmt($retail, $price) {
    $saved = abs($retail - $price);
    return number_format($saved, 2);
}

function monthAmt($price, $month) {
    return number_format($price / $month, 2);
}

function percentOff($price, $retail) {
    $diff = ($retail - $price) * 100;
    return round($diff / $retail, 0);
}

function perBottle($price, $qty) {
    return number_format($price / $qty, 2);
}

function taxAmt($price) {
    $tax_pct = isset($_SESSION['tax_pct']) ? $_SESSION['tax_pct'] : 0;
    if ($tax_pct == 0) {
        return 0;
    }
    return number_format($tax_pct / 100 * $price, 2);
}
