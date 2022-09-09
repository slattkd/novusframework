<?php

//header("Content-Security-Policy: default-src 'self' https://cdn.tailwindcss.com/");
//
require '../vendor/autoload.php';

//TODO: Add all config variables to customize the site

// Debug Toggle
// TODO: Add ability to securely enable debug through a cookie.

$debugCookie = $_COOKIE['debug'] ?? 'no';


if (
    $_SERVER['HTTP_HOST'] == 'novusframework.test' ||
    $_SERVER['HTTP_HOST'] == 'yourlocalurl.test' ||
    $debugCookie == 'js6^g1hks92'
) {
    $site['debug'] = true;
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    $site['debug'] = false;
}

// Require the Composer autoloader, if not already loaded
use DebugBar\StandardDebugBar;

if ($site['debug'] == true) {
    $debugbar = new StandardDebugBar();
    $debugbarRenderer = $debugbar->getJavascriptRenderer();
}

if ($site['debug'] == true) {
    $debugbar['time']->startMeasure('collectvars', 'Collecting variables from config');
}

//Cake Redirect Toggle
$site['useCake'] = true;
$site['useEverflow'] = true;


//Campaign Settings
$site['campaign'] = 22;
$site['freeship'] = 5;
$site['defaultAffId'] = 2126;

// Tracking
$site['GTMContainer'] = 'GTM-T7RRXPJ';
$site['googleSiteVerification'] = 'MtiLf9dEfLrFvmiovviCmLHIx4Cc0uD2RGsA72oC29E';

// This URL Key is used to decode the obfuscated URL
$site['urlkey']     = 'PXTfHbayAvPnBkp4UYx5eS88qwccEwr7Pc5hPLKq';
$site['iv']         = '4AI9kpWvjsKTDsYW';
$site['proxyKey']   = 'hsjdh772hjaklh28P8ENDJKJUKJDBAHJ2UBSKJjksjjs';

$site['cakeApiUrl'] = 'https://gdc.network-stats.com/';
$site['cakeApiKey'] = 'QeTXa9UguH3vekAtU5Ttq9V6LWAaGB';

$site['maropostApiKey'] = 'UrxhFyQYEmFCLGT8oVTthbUfmJeXzGsKrcgjK4ctQtzZEUT0BdBTrg';
$site['maropostApiUrl'] = 'https://api.maropost.com/accounts/2161/';

$site['stickyApi']  = 'pineappleapi';
$site['stickyPass'] = 'nWsw3BzrhnFBkJ';
$site['stickyUrl']  = 'gdc.sticky.io';
/*
$limelight_api_username     = '5gmale-funnel';
$limelight_api_password     = 'MAzpqTRAXa4Dvk';
$limelight_api_instance     = 'gdc.sticky.io';
*/

// Company Variables
$company['name'] = 'Supernatural Man LLC';
$company['email'] = 'support@claritynaturalsstore.com';
$company['phone'] = '(855) 665-0715';
$company['address1'] = '5136 W Clifton St';
$company['address2'] = '';
$company['city'] = 'Tampa';
$company['state'] = 'FL';
$company['zip'] = '33634';

$site['logo'] = '/images/claritynaturals_logo_horizontal.png';
$site['imgpath'] = '//s3.amazonaws.com/secretfatlosstrick/';
$site['contactlink'] = 'mailto:help@revivalpointllc.com';

if ($site['debug'] == true) {
    $debugbar['time']->stopMeasure('collectvars');
}

// Does this need to live in the config, it's a constant and should never change
$usStates = [
'AL' => 'Alabama',
'AK' => 'Alaska',
'AS' => 'American Samoa',
'AZ' => 'Arizona',
'AR' => 'Arkansas',
'AA' => 'Armed Forces Americas',
'AE' => 'Armed Forces Middle East',
'AP' => 'Armed Forces Pacific',
'CA' => 'California',
'CO' => 'Colorado',
'CT' => 'Connecticut',
'DE' => 'Delaware',
'DC' => 'District of Columbia',
'FM' => 'Federated States of Micronesia',
'FL' => 'Florida',
'GA' => 'Georgia',
'GU' => 'Guam',
'HI' => 'Hawaii',
'ID' => 'Idaho',
'IL' => 'Illinois',
'IN' => 'Indiana',
'IA' => 'Iowa',
'KS' => 'Kansas',
'KY' => 'Kentucky',
'LA' => 'Louisiana',
'ME' => 'Maine',
'MD' => 'Maryland',
'MA' => 'Massachusetts',
'MI' => 'Michigan',
'MN' => 'Minnesota',
'MS' => 'Mississippi',
'MO' => 'Missouri',
'MT' => 'Montana',
'NE' => 'Nebraska',
'NV' => 'Nevada',
'NH' => 'New Hampshire',
'NJ' => 'New Jersey',
'NM' => 'New Mexico',
'NY' => 'New York',
'NC' => 'North Carolina',
'ND' => 'North Dakota',
'MP' => 'Northern Mariana Islands',
'OH' => 'Ohio',
'OK' => 'Oklahoma',
'OR' => 'Oregon',
'PA' => 'Pennsylvania',
'PR' => 'Puerto Rico',
'MH' => 'Republic of Marshall Islands',
'RI' => 'Rhode Island',
'SC' => 'South Carolina',
'SD' => 'South Dakota',
'TN' => 'Tennessee',
'TX' => 'Texas',
'UT' => 'Utah',
'VT' => 'Vermont',
'VI' => 'Virgin Islands of the U.S.',
'VA' => 'Virginia',
'WA' => 'Washington',
'WV' => 'West Virginia',
'WI' => 'Wisconsin',
'WY' => 'Wyoming'
];




// Get products from JSON file
if ($site['debug'] == true) {
    $debugbar['time']->startMeasure('longop', 'Get Products JSON');
}

$productsJson = file_get_contents("../include/products.json");
$site['products'] = $someArray = json_decode($productsJson, true);

if ($site['debug'] == true) {
    $debugbar['time']->stopMeasure('longop');
}




/*
<script type="text/javascript">
// Transaction variables
var product_id      = "<?php echo isset($_SESSION['product_id']) ? $_SESSION['product_id'] : '' ?>";
var product_ids     = "<?php echo isset($_SESSION['product_ids']) ? $_SESSION['product_ids'] : ''  ?>"; //array of all product ids in collection
var category        = "<?php echo isset($_SESSION['category']) ? $_SESSION['category'] : ''  ?>"; //optional
var categories      = "<?php echo isset($_SESSION['categories']) ? $_SESSION['categories'] : ''  ?>"; // array of categories of all products in collection
var variant         = "<?php echo isset($_SESSION['variant']) ? $_SESSION['variant'] : ''  ?>"; //product variant
var product_name    = "<?php echo isset($_SESSION['product_name']) ? $_SESSION['product_name'] : ''  ?>";
var product_names   = "<?php echo isset($_SESSION['product_names']) ? $_SESSION['product_names'] : ''  ?>"; // array of titles of all products
var price           = "<?php echo isset($_SESSION['baseprice']) ? $_SESSION['baseprice'] : ''  ?>";
var price_total     = "<?php echo isset($_SESSION['orderTotal']) ? $_SESSION['orderTotal'] : ''  ?>"; // sum of value of all products in collection
var tax             = "<?php echo isset($_SESSION['orderSalesTaxAmount']) ? $_SESSION['orderSalesTaxAmount'] : '0'  ?>";
var shipping        = "<?php echo isset($_SESSION['shippingCost']) ? $_SESSION['shippingCost'] : '0'  ?>";
var currency        = "<?php echo isset($_SESSION['currency']) ? $_SESSION['currency'] : 'USD'  ?>"; // 3 digit currency code
var item_count      = "<?php echo isset($_SESSION['item_count']) ? $_SESSION['iten_count'] : '1'  ?>"; // count of products in collection
var transaction_id  = "<?php echo isset($_SESSION['order_id']) ? $_SESSION['order_id'] : ''  ?>";
var coupon          = "<?php echo isset($_SESSION['coupon']) ? $_SESSION['coupon'] : ''  ?>";  // optional
var affiliation     = "<?php echo isset($_SESSION['affSubId']) ? $_SESSION['affSubId'] : ''  ?>"; // affiliate data??? $affid_subId
var content         = "<?php echo isset($_SESSION['content']) ? $_SESSION['content'] : ''  ?>";

// Customer variables
var uid             = "<?php echo isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : '' ?>";
var email           = "<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''  ?>";
var mobile          = "<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ''  ?>";
var firstname       = "<?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : ''  ?>";
var lastname        = "<?php echo isset($_SESSION['last_name']) ? $_SESSION['last_name'] : ''  ?>";
var address         = "<?php echo isset($_SESSION['shippingAddress1']) ? $_SESSION['shippingAddress1'] : ''  ?>";
var city            = "<?php echo isset($_SESSION['shippingCity']) ? $_SESSION['shippingCity'] : ''  ?>";
var state           = "<?php echo isset($_SESSION['shippingState']) ? $_SESSION['shippingState'] : ''  ?>";
var country         = "<?php echo isset($_SESSION['shippingCountry']) ? $_SESSION['shippingCountry'] : ''  ?>";
var zip             = "<?php echo isset($_SESSION['shippingZip']) ? $_SESSION['shippingZip'] : ''  ?>";
var acceptsmarketing= "<?php echo isset($_SESSION['acceptsMarketing']) ? $_SESSION['acceptsMarketing'] : '1'  ?>";

</script>
*/
