<?php

//header("Content-Security-Policy: default-src 'self' https://cdn.tailwindcss.com/");
//
require '../vendor/autoload.php';

//TODO: Add all config variables to customize the site

// Debug Toggle
// TODO: Add ability to securely enable debug through a cookie.

$debugCookie = $_COOKIE['debug'] ?? 'no';


if (
     $_SERVER['HTTP_HOST'] == 'totalbrainboost.test' ||
    $_SERVER['HTTP_HOST'] == 'yourlocalurl.test' ||
    $debugCookie == 'js6^g1hks92%ks7392hald81^11'
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
$site['campaign'] = 5;
$site['freeship'] = 5;
$site['defaultAffId'] = 2126;

// Tracking
$site['GTMContainer'] = 'GTM-WDLKMTB'; //TODO: update to total brain boost id
$site['googleSiteVerification'] = 'MtiLf9dEfLrFvmiovviCmLHIx4Cc0uD2RGsA72oC29E';

$site['logRocketDomain'] = 'totalbrainboost.com';
$site['logRocketTracking'] = 'hvwc5v/tbb';


// This URL Key is used to decode the obfuscated URL
$site['urlkey']     = 'PXTfHbayAvPnBkp4UYx5eS88qwccEwr7Pc5hPLKq';
$site['iv']         = '4AI9kpWvjsKTDsYW';
$site['proxyKey']   = 'hsjdh772hjaklh28P8ENDJKJUKJDBAHJ2UBSKJjksjjs';

$site['cakeApiUrl'] = 'https://gdc.network-stats.com/';
$site['cakeApiKey'] = 'QeTXa9UguH3vekAtU5Ttq9V6LWAaGB';

$site['maropostApiKey'] = 'UrxhFyQYEmFCLGT8oVTthbUfmJeXzGsKrcgjK4ctQtzZEUT0BdBTrg';
$site['maropostApiUrl'] = 'https://api.maropost.com/accounts/2161/';
$site['maropostListId'] = 244;

$site['stickyApi']  = 'pineappleapi';
$site['stickyPass'] = 'nWsw3BzrhnFBkJ';
$site['stickyUrl']  = 'gdc.sticky.io';

$site['logo'] = '/images/rp-logo.png';
$site['imgpath'] = '//s3.amazonaws.com/5gmale/';
$site['contactlink'] = 'mailto:support@revivalpoint.com';

$site['orderComplete'] = 'thank-you';

$site['shippingUs'] = 3;
$site['shippingUsCost'] = 6.95;
$site['shippingIntl'] = 4;
$site['shippingIntlCost'] = 14.95;
$site['shippingFree'] = 5;
$site['shippingFreeCost'] = 0;

/*
$limelight_api_username     = '5gmale-funnel';
$limelight_api_password     = 'MAzpqTRAXa4Dvk';
$limelight_api_instance     = 'gdc.sticky.io';
*/

// Company Variables
$company['name'] = 'Revival Point LLC';
$company['billedAs'] = 'Total Brain Boost';
$company['featuredProduct'] = 'Total Brain Boost';
$company['email'] = 'support@revivalpoint.com';
$company['phone'] = '1-800-253-8173';
$company['address1'] = '13423 Blanco Rd PMB 8024';
$company['address2'] = '';
$company['city'] = 'San Antonio';
$company['state'] = 'TX';
$company['zip'] = '78216';
$company['checkoutHeadline1'] = 'You’re 3 Steps Away From <br class="md:hidden"> Improving yourself…';
$company['checkoutHeadline2'] = 'You’re 2 Steps Away From <br class="md:hidden"> Improving yourself…';
$company['checkoutHeadline3'] = 'You’re 1 Steps Away From <br class="md:hidden"> Improving yourself…';


if ($site['debug'] == true) {
    $debugbar['time']->stopMeasure('collectvars');
}


// Get products from JSON file
if ($site['debug'] == true) {
    $debugbar['time']->startMeasure('longop', 'Get Products JSON');
}

//$productsJson = file_get_contents("../include/products.json");
//$site['products'] = $someArray = json_decode($productsJson, true);

//Add JSON products to Products global variable
// Read the JSON file
$productsJson = file_get_contents('../include/products.json');

// Decode the JSON file
$productsData = json_decode($productsJson, true);

// Display data
//print_r($productsData);

$products = $productsData;

if ($site['debug'] == true) {
    $debugbar['time']->stopMeasure('longop');
}


// Does this need to live in the config, it's a constant and should never change
$countries = [
    "AF" => 'Afghanistan',
    "AL" => 'Albania',
    "AS" => 'American Samoa',
    "AD" => 'Andorra',
    "AI" => 'Anguilla',
    "AQ" => 'Antarctica',
    "AG" => 'Antigua and Barbuda',
    "AR" => 'Argentina',
    "AM" => 'Armenia',
    "AW" => 'Aruba',
    "AU" => 'Australia',
    "AT" => 'Austria',
    "AX" => 'Åland Islands',
    "AZ" => 'Azerbaijan',
    "BH" => 'Bahrain',
    "BD" => 'Bangladesh',
    "BB" => 'Barbados',
    "BY" => 'Belarus',
    "BE" => 'Belgium',
    "BZ" => 'Belize',
    "BJ" => 'Benin',
    "BT" => 'Bhutan',
    "BA" => 'Bosnia and Herzegovina',
    "BV" => 'Bouvet Island',
    "BR" => 'Brazil',
    "IO" => 'British Indian Ocean Territory',
    "KH" => 'Cambodia',
    "CM" => 'Cameroon',
    "CA" => 'Canada',
    "CV" => 'Cape Verde',
    "CF" => 'Central African Republic',
    "CX" => 'Christmas Island',
    "CC" => 'Cocos (Keeling) Islands',
    "CO" => 'Colombia',
    "KM" => 'Comoros',
    "CK" => 'Cook Islands',
    "CR" => 'Costa Rica',
    "HR" => 'Croatia',
    "CY" => 'Cyprus',
    "CI" => "Côte D'Ivoire",
    "DK" => 'Denmark',
    "DM" => 'Dominica',
    "DO" => 'Dominican Republic',
    "SV" => 'El Salvador',
    "GQ" => 'Equatorial Guinea',
    "ER" => 'Eritrea',
    "EE" => 'Estonia',
    "FK" => 'Falkland Islands',
    "FO" => 'Faroe Islands',
    "FI" => 'Finland',
    "FR" => 'France',
    "GF" => 'French Guiana',
    "TF" => 'French Southern Territories',
    "GE" => 'Georgia',
    "DE" => 'Germany',
    "GI" => 'Gibraltar',
    "GR" => 'Greece',
    "GL" => 'Greenland',
    "GD" => 'Grenada',
    "GP" => 'Guadeloupe',
    "GU" => 'Guam',
    "HT" => 'Haiti',
    "HM" => 'Heard and McDonald Islands',
    "VA" => 'Holy See (Vatican City State)',
    "HU" => 'Hungary',
    "IS" => 'Iceland',
    "IM" => 'Isle of Man',
    "IT" => 'Italy',
    "JP" => 'Japan',
    "JE" => 'Jersey',
    "JO" => 'Jordan',
    "KZ" => 'Kazakhstan',
    "KI" => 'Kiribati',
    "KG" => 'Kyrgyzstan',
    "LV" => 'Latvia',
    "LS" => 'Lesotho',
    "LR" => 'Liberia',
    "LI" => 'Liechtenstein',
    "MK" => 'Republic of Macedonia',
    "MW" => 'Malawi',
    "MT" => 'Malta',
    "MH" => 'Marshall Islands',
    "MQ" => 'Martinique',
    "MU" => 'Mauritius',
    "YT" => 'Mayotte',
    "MX" => 'Mexico',
    "FM" => 'Federated States of Micronesia',
    "MC" => 'Monaco',
    "MS" => 'Montserrat',
    "NR" => 'Nauru',
    "NL" => 'Netherlands',
    "AN" => 'Netherlands Antilles',
    "NZ" => 'New Zealand',
    "NI" => 'Nicaragua',
    "NU" => 'Niue',
    "NF" => 'Norfolk Island',
    "MP" => 'Northern Mariana Islands',
    "NO" => 'Norway',
    "OM" => 'Oman',
    "PW" => 'Palau',
    "PN" => 'Pitcairn',
    "PL" => 'Poland',
    "PT" => 'Portugal',
    "PR" => 'Puerto Rico',
    "QA" => 'Qatar',
    "RE" => 'Réunion',
    "SH" => 'St. Helena, Ascension and Tristan Da Cunha',
    "PM" => 'St. Pierre And Miquelon',
    "VC" => 'St. Vincent And The Grenedines',
    "SM" => 'San Marino',
    "ST" => 'Sao Tome and Principe',
    "SC" => 'Seychelles',
    "SL" => 'Sierra Leone',
    "SG" => 'Singapore',
    "SK" => 'Slovakia',
    "SI" => 'Slovenia',
    "SB" => 'Solomon Islands',
    "GS" => 'South Georgia and the South Sandwich Islands',
    "ES" => 'Spain',
    "SJ" => 'Svalbard And Jan Mayen',
    "SZ" => 'Swaziland',
    "SE" => 'Sweden',
    "CH" => 'Switzerland',
    "SY" => 'Syrian Arab Republic',
    "TW" => 'Taiwan',
    "TJ" => 'Tajikistan',
    "TH" => 'Thailand',
    "TG" => 'Togo',
    "TK" => 'Tokelau',
    "TO" => 'Tonga',
    "TM" => 'Turkmenistan',
    "TC" => 'Turks and Caicos Islands',
    "TV" => 'Tuvalu',
    "UG" => 'Uganda',
    "AE" => 'United Arab Emirates',
    "GB" => 'United Kingdom',
    "US" => 'United States',
    "UM" => 'US Minor Outlying Islands',
    "UY" => 'Uruguay',
    "UZ" => 'Uzbekistan',
    "VU" => 'Vanuatu',
    "VE" => 'Venezuela',
    "VN" => 'Vietnam',
    "VG" => 'Virgin Islands, British',
    "VI" => 'Virgin Islands, U.S.',
    "YE" => 'Yemen'
];


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
