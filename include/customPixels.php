<?php

//
/*
If a client requests custom pixels to be added to the site, include them here.
This should be fired on every page, so via a proxy cron, through the queue manager
it will not load or show in the source. Variables will need to passed with the pixel.
*/

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\LineFormatter;

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
    $stream_handler_px->setFormatter($formatter_px);
    $loggerPixel->pushHandler($stream_handler_px);
debugTimerEnd('pixel-logger');


// TODO: Add functionality to prevent test orders from firing custom pixels (IE Taboola+Outbrain Issue)
?>

<!-- Start VWO Async SmartCode -->
<script type='text/javascript' id='vwoCode'>
window._vwo_code=window._vwo_code || (function() {
var account_id=2887,
version=1.4,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
is_spa=1,
hide_element='body',
/* DO NOT EDIT BELOW THIS LINE */
f=false,d=document,vwoCodeEl=document.querySelector('#vwoCode'),code={use_existing_jquery:function(){return use_existing_jquery},library_tolerance:function(){return library_tolerance},finish:function(){if(!f){f=true;var e=d.getElementById('_vis_opt_path_hides');if(e)e.parentNode.removeChild(e)}},finished:function(){return f},load:function(e){var t=d.createElement('script');t.fetchPriority='high';t.src=e;t.type='text/javascript';t.innerText;t.onerror=function(){_vwo_code.finish()};d.getElementsByTagName('head')[0].appendChild(t)},getVersion:function(){return version},getMatchedCookies:function(e){var t=[];if(document.cookie){t=decodeURIComponent(document.cookie).match(e)||[]}return t},getCombinationCookie:function(){var e=code.getMatchedCookies(/(vis_opt_exp_\d*._combi=[\d,]+)/g);var i=[];e.forEach(function(e){var t=e.match(/([\d,]+)/g);i.push(t.join('-'))});return i.join('|')},init:function(){window.settings_timer=setTimeout(function(){_vwo_code.finish()},settings_tolerance);var e=d.createElement('style'),t=hide_element?hide_element+'{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}':'',i=d.getElementsByTagName('head')[0];e.setAttribute('id','_vis_opt_path_hides');vwoCodeEl&&e.setAttribute('nonce',vwoCodeEl.nonce);e.setAttribute('type','text/css');if(e.styleSheet)e.styleSheet.cssText=t;else e.appendChild(d.createTextNode(t));i.appendChild(e);var n=this.getCombinationCookie();this.load('https://dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+ +is_spa+'&vn='+version+(n?'&c='+n:''));return settings_timer}};window._vwo_settings_timer = code.init();return code;}());
</script>
<!-- End VWO Async SmartCode -->

<?php

/*
echo $_SESSION['url'] . '<br>';
echo $_SESSION['slug'] . '<br>';
echo $_SESSION['pageType'] . '<br>';
*/
$pageType = $_SESSION['pageType'] ?? 'default';
$pixelsFired = array();


function pixelLogging($loggerPixel, $pixelsFired)
{
    $email = $_SESSION['email'] ?? 'n/a';
    $session = session_id();
    $pageType = $_SESSION['pageType'] ?? 'default';
    $pixelsFired = implode(',', $pixelsFired);
    $pixelLog = $session . ' || ' . $email . ' || ' . $pageType . ' || ' . $pixelsFired;
    $loggerPixel->info('Pixel Log: ' . $pixelLog);
}




switch ($pageType) {
    case "vsl":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "wsl":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "assessment":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "order":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "onepage":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "step1":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "step2":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "step3":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "up1":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTMCore',
                'transactionId': '<?php echo $_SESSION['orderId'] ?? ''; ?>',
                'transactionTotal': '<?php echo $_SESSION['orderTotal'] ?? ''; ?>',
                'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
                'transactionProducts': [{
                    'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
                    'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
                    'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
                    'quantity': 1
                }]
            });
        </script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-688388232"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-761912273"></script>

        <!-- Event snippet for Website sale conversion page -->
        <!--
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-688388232/z6adCLjjyLYBEIjxn8gC',
                'transaction_id': '<?php echo $_SESSION['orderId']; ?>'
            });
        </script>
        -->

        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'AW-688388232');
        </script>

        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'AW-761912273');
        </script>
        <?php

        //upsell 1 fire
        //cakePixel($_SESSION['r']);
        //everflowPixel($_SESSION['eftid']);
        //taboola();
        //gtmEvent('up01');
        //dataLayerPurchase("GTMCore", $dataLayer['transactionId'], $_SESSION['affid'], $orderamt);
        /*
        <iframe src="https://safetrkpro.com/p.ashx?o=35&e=1&fb=1&t=<?php echo $_SESSION['step_1_orderId']; ?>&r=<?php echo $_GET['r']; ?>" height="1" width="1" frameborder="0"></iframe>
        <img src='http://api.content.ad/Lib/TrackConversion.aspx?aid=aa28b4f6-81b8-48dd-ae8a-f1529865501d' width='1' height='1' />
        */
        break;
    case "up2":
        ?>
        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'GTM<?php echo $pageType;?>',
            'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
            'transactionTotal': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
            'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
            'transactionProducts': [{
                'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
                'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
                'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
                'quantity': 1
            }]
        });
        </script>
        <?php
        break;
    case "up3":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>',
                'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
                'transactionTotal': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
                'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
                'transactionProducts': [{
                    'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
                    'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
                    'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
                    'quantity': 1
                }]
            });


        </script>

        <?php
        break;
    case "up4":
        ?>
        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'GTM<?php echo $pageType;?>',
            'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
            'transactionTotal': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
            'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
            'transactionProducts': [{
                'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
                'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
                'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
                'quantity': 1
            }]
        });
        </script>


        <?php
        break;
    case "upinterstitial":
    ?>
    <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'GTM<?php echo $pageType;?>',
        'transactionId': '<?php echo $_SESSION['orderId'] ?? ''; ?>',
        'transactionTotal': '<?php echo $_SESSION['orderTotal'] ?? ''; ?>',
        'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
        'transactionProducts': [{
            'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
            'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
            'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
            'quantity': 1
        }]
    });
    </script>
    <?php
    break;
    case "dn0":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "dn1":
        ?>
        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'GTM<?php echo $pageType;?>',
            'transactionId': '<?php echo $_SESSION['orderId'] ?? ''; ?>',
            'transactionTotal': '<?php echo $_SESSION['orderTotal'] ?? ''; ?>',
            'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
            'transactionProducts': [{
                'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
                'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
                'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
                'quantity': 1
            }]
        });
        </script>

        <!-- TruConversion for 5gmale.com -->
        <script type="text/javascript">
            var _tip = _tip || [];
            (function(d,s,id){
              var js, tjs = d.getElementsByTagName(s)[0];
              if(d.getElementById(id)) { return; }
              js = d.createElement(s); js.id = id;
              js.async = true;
              js.src = d.location.protocol + '//app.truconversion.com/ti-js/8480/80413.js';
              tjs.parentNode.insertBefore(js, tjs);
            }(document, 'script', 'ti-js'));
        </script>
        <?php
        break;
    case "dn2":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "dn3":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "dn4":
    ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "receipt":
        ?>
        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'GTM<?php echo $pageType;?>',
            'transactionId': '<?php echo $_SESSION['orderId'] ?? ''; ?>',
            'transactionTotal': '<?php echo $_SESSION['orderTotal'] ?? ''; ?>',
            'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
            'transactionProducts': [{
                'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
                'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
                'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
                'quantity': 1
            }]
        });
        </script>

        <!-- TruConversion for 5gmale.com -->
        <script type="text/javascript">
            var _tip = _tip || [];
            (function(d, s, id) {
                var js, tjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.async = true;
                js.src = d.location.protocol + '//app.truconversion.com/ti-js/8480/80413.js';
                tjs.parentNode.insertBefore(js, tjs);
            }(document, 'script', 'ti-js'));
        </script>
        <?php
        break;
    default:
        //the default action, if any.
}

//Add Pixel Fired event for each page type
$pixelsFired[] = 'GTM' . $pageType;

//fire the logging pixel with corresponding event data
pixelLogging($loggerPixel, $pixelsFired);

/*
// GA4 variables needed to add
// Transaction variables
var product_id;
var product_ids; //array of all product ids in collection
var category; //optional
var categories; // array of categories of all products in collection
var variant; //product variant
var product_name;
var product_names; // array of titles of all products
var price;
var price_total; // sum of value of all products in collection
var tax;
var shipping;
var currency; // 3 digit currency code
var item_count; // count of products in collection
var transaction_id;
var coupon;  // optional
var affiliation; // affiliate data??? $affid_subId

// Customer variables
var uid;
var email;
var mobile;
var firstname;
var lastname;
var address;
var city;
var state;
var country;
var zip;
var acceptsmarketing;

// When main shop listing is viewed
dataLayer.push({
'event': 'view_item_list',
'conversion': {
'action': 'view_item_list',
'collection': 'main'
}
});

// When product is viewed
dataLayer.push({
'event': 'view_item',
'conversion': {
'action': 'view_item',
'product_id': product_id,
'category': category,
'product_name': product_name,
'value': price,
'currency': currency
},
'ecommerce': {
'currencyCode': currency,
'detail': {
'products': [{
'name': product_name,
'id': product_id,
'price': price,
'category': category
}]
}
}
});

// When a product is added to cart
dataLayer.push({
'event':'add_to_cart',
'conversion' : {
'action': 'add_to_cart',
'value': price,
'category': category,
'currency': currency
},
'ecommerce': {
'currencyCode': currency,
'add': {
'products': [{
'name': product_name,
'id': product_id,
'price': price,
'brand': brand,
'category': category,
'variant': variant,
'quantity': item_count
}]
}
}
});

// When cart is viewed. Contains an array one or more products.
dataLayer.push({
'event':'view_cart',
'conversion' : {
'action': 'view_cart',
'value': price_total,
'currency': currency,
'category': categories,
'product_ids': product_ids,
'items': item_count
}
});

*
// When beginning checkout. Contains an array one or more products.*
dataLayer.push({
'event':'begin_checkout',
'conversion' : {
'action': 'begin_checkout',
'value': price_total,
'currency': currency,
'category': categories,
'product_ids': product_ids,
'items': item_count
},
'ecommerce': {
'checkout': {
'products': [ // array of product(s)
{
'name': product_name,
'id': product_id,
'price': price,
'category': category,
'variant': variant,
'quantity': item_count
}
]
}
}
});

// When a purchase is made
dataLayer.push({
'event':'purchase',
'customer': {
'id': uid;
'email': email,
'mobile': mobile,
'firstname': firstname,
'lastname': lastname,
'address': address,
'city': city,
'state': state,
'country': country,
'zip': zip,
'acceptsmarketing': acceptsmarketing
},
'conversion' : {
'action': 'purchase',
'product_ids': product_ids,
'value': price_total,
'category': category,
'content': content,
'currency': currency
},
'ecommerce': {
'currencyCode': currency,
'purchase': {
'actionField': {
'id': transaction_id,
'revenue': price_total,
'tax': tax,
'shipping': shipping,
'affiliation': affiliation,
'coupon': coupon
},
'products': [ // array of product(s)
{
'name': product_name,
'id': product_id,
'price': price,
'category': category,
'variant': variant,
'quantity': item_count,
'coupon': coupon
}
]
}
}
});

*/
