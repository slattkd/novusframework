<?php

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

if(isset($site['maropostAcctId']) && $_SESSION['pageType'] !== 'receipt' && isset($_SESSION['email'])){


    if (!empty($_SESSION['pid'])){
        $product = $products['products'][$_SESSION['pid'][0]];
        $productName = $product['product_name'];
    } else {
        $_SESSION['pid'] = $products['default_product'];
        $product = $products['products'][$_SESSION['pid']];
        $productName = $product['product_name'];
    }
    
    
    $url = str_replace('index.php', '', $_SERVER['HTTP_HOST']);
    $page = str_replace('index.php', '', $_SERVER['PHP_SELF']);

    //  add a timer here
    if (isset($_SESSION['maropostTableData'])){
        $_SESSION['maropostTableData']['lastKnownLocation'] = 'http://'.$url.$page;
    } else {
        $_SESSION['maropostTableData'] = array();
        $_SESSION['maropostTableData']['lastKnownLocation'] = 'http://'.$url.$page;
    }

    $newRecord = [
        'record' => [
            'first_name' => @$_SESSION['firstName'],
            'last_name' => @$_SESSION['lastName'],
            'email' => @$_SESSION['email'],
            'page_last_seen' => $_SESSION['maropostTableData']['lastKnownLocation'],
            'product_id' => $_SESSION['pid'],
            'product_name' => $productName,
            'is_iOS' => $_SESSION['isIOS'],
            'is_mobile' => $_SESSION['isMobile'],
            'aff_id' => $_SESSION['affid'],
            'eftid' => @$_SESSION['eftid'],
            'r' => @$_SESSION['r'],
            'utm_medium' => @$_SESSION['utm_medium'],
            'utm_source' => @$_SESSION['utm_source'],
            'utm_campaign' => @$_SESSION['utm_campaign'],
            'utm_content' => @$_SESSION['utm_content'],
            'utm_term' => @$_SESSION['utm_term']
        ]
    ];

    $tableData = json_encode($newRecord);
?>
    
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Adds eamil to abandoned cart list
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "/updateMaropostRelTable.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 || this.status === 200){ 
                console.log(this.responseText); // echo from php
            }       
        };
        xmlhttp.send("data=" + JSON.stringify(<?php echo $tableData;?>));
    });
  </script>

<?php }


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
    case "lp":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "msl":
            ?>
            <script>
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'GTM_<?php echo $pageType;?>'
                });
            </script>
            <?php
            break;
    case "msl":
            ?>
            <script>
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'GTM_<?php echo $pageType;?>'
                });
            </script>
            <?php
            break;
    case "wsl":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "vsl":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "assessment":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "order":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <script src="https://cdn.lr-ingest.com/LogRocket.min.js" crossorigin="anonymous"></script>
        <script>window.LogRocket && window.LogRocket.init('tgpuh6/novus');</script>

        <?php
        break;
    case "onepage":

        if (!empty($products['products'][$_SESSION['pid']])){
            $productName = $products['products'][$_SESSION['pid']];
        } else {
            $productName = '';
        }
        $url = str_replace('index.php', '', $_SERVER['HTTP_HOST']);
        $page = str_replace('index.php', '', $_SERVER['PHP_SELF']);
    
        //  add a timer here
        if (isset($_SESSION['maropostTableData'])){
            $_SESSION['maropostTableData']['lastKnownLocation'] = 'http://'.$url.$page;
        } else {
            $_SESSION['maropostTableData'] = array();
            $_SESSION['maropostTableData']['lastKnownLocation'] = 'http://'.$url.$page;
        }
    
        $newRecord = [
            'record' => [
                'first_name' => $_SESSION['firstName'],
                'last_name' => $_SESSION['lastName'],
                'email' => $_SESSION['email'],
                'page_last_seen' => $_SESSION['maropostTableData']['lastKnownLocation'],
                'product_id' => $_SESSION['pid'],
                'product_name' => $productName['product_name'],
                'is_iOS' => $_SESSION['isIOS'],
                'is_mobile' => $_SESSION['isMobile'],
                'aff_id' => $_SESSION['affid'],
                'eftid' => $_SESSION['eftid'],
                'r' => $_SESSION['r'],
                'utm_medium' => $_SESSION['utm_medium'],
                'utm_source' => $_SESSION['utm_source'],
                'utm_campaign' => $_SESSION['utm_campaign'],
                'utm_content' => $_SESSION['utm_content'],
                'utm_term' => $_SESSION['utm_term']
            ]
        ];

        $tableData = json_encode($newRecord);?>

        <script>

            // Counter to keep track of changed inputs
            let changedCount = 0;

            // Function to call when inputs have been changed
            function inputsChanged(event) {
                const inputId = event.target.id;
                changedCount += (inputId === "FirstName" || inputId === "LastName" || inputId === "Email") ? 1 : 0;
                
                if (changedCount === 3) {
                    updateMaropostRelationalTable();
                }
            }

            window.addEventListener("DOMContentLoaded", (event) => {
                // Get specific input elements by ID
                const firstName = document.getElementById('FirstName');
                const lastName = document.getElementById('LastName');
                const email = document.getElementById('Email');

                // Add event listener to each specific input
                firstName.addEventListener('change', inputsChanged);
                lastName.addEventListener('change', inputsChanged);
                email.addEventListener('change', inputsChanged);
            });



            function updateMaropostRelationalTable() {

                let firstName = document.getElementById('FirstName');
                let lastName = document.getElementById('LastName');
                let email = document.getElementById('Email');

                if (isNotEmpty(firstName.value) && isNotEmpty(lastName.value) && isNotEmpty(email.value)) {
                    
                    var data = <?php echo $tableData;?>
                    
                    data.record['first_name'] = firstName.value;
                    data.record['last_name'] = lastName.value;
                    data.record['email'] = email.value;
                    

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("POST", "/updateMaropostRelTable.php", true);
                    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState === 4 || this.status === 200){ 
                            // console.log(this.responseText);
                        }       
                    };
                    xmlhttp.send("data=" + JSON.stringify(data));

                }
            }
        </script>


        
        
        <script>
    
            document.addEventListener("DOMContentLoaded", function() {
                // Adds eamil to abandoned cart list
                
            });
        
        </script>


        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <script src="https://cdn.lr-ingest.com/LogRocket.min.js" crossorigin="anonymous"></script>
        <script>window.LogRocket && window.LogRocket.init('tgpuh6/novus');</script>

        <?php
        break;
    case "step1":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <script src="https://cdn.lr-ingest.com/LogRocket.min.js" crossorigin="anonymous"></script>
        <script>window.LogRocket && window.LogRocket.init('tgpuh6/novus');</script>

        <?php
        break;
    case "step2":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <script src="https://cdn.lr-ingest.com/LogRocket.min.js" crossorigin="anonymous"></script>
        <script>window.LogRocket && window.LogRocket.init('tgpuh6/novus');</script>
        <?php
        break;
    case "step3":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <script src="https://cdn.lr-ingest.com/LogRocket.min.js" crossorigin="anonymous"></script>
        <script>window.LogRocket && window.LogRocket.init('tgpuh6/novus');</script>
        <?php
        break;
    case "up1":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_Core',
                'event_category': 'Ecommerce',
                'event_action': 'Purchase',
                'event_label': 'Order ID: <?php echo $_SESSION['lastOrderId'] ?? ''; ?> ',
                'event_value': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
                'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
                'transactionTotal': <?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>,
                'transactionAffiliation': '<?php echo $_SESSION['a'] ?? ''; ?>',
                'transactionProducts': [{
                    'sku': '<?php echo $_SESSION['productId'] ?? ''; ?>',
                    'name': '<?php echo $_SESSION['productName'] ?? ''; ?>',
                    'price': '<?php echo $_SESSION['productPrice'] ?? ''; ?>',
                    'quantity': 1
                }]
            });
        </script>
        <script src="https://cdn.lr-ingest.com/LogRocket.min.js" crossorigin="anonymous"></script>
        <script>window.LogRocket && window.LogRocket.init('tgpuh6/novus');</script>

        <?php
        break;
    case "up2":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'GTM_<?php echo $pageType;?>',
            'event_category': 'Ecommerce',
            'event_action': 'Purchase',
            'event_label': 'Order ID: <?php echo $_SESSION['lastOrderId'] ?? ''; ?> ',
            'event_value': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
            'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
            'transactionTotal': <?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>,
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
                'event': 'GTM_<?php echo $pageType;?>',
                'event_category': 'Ecommerce',
                'event_action': 'Purchase',
                'event_label': 'Order ID: <?php echo $_SESSION['lastOrderId'] ?? ''; ?> ',
                'event_value': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
                'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
                'transactionTotal': <?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>,
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
            'event': 'GTM_<?php echo $pageType;?>',
            'event_category': 'Ecommerce',
            'event_action': 'Purchase',
            'event_label': 'Order ID: <?php echo $_SESSION['lastOrderId'] ?? ''; ?> ',
            'event_value': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
            'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
            'transactionTotal': <?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>,
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
        'event': 'GTM_<?php echo $pageType;?>',
        'event_category': 'Ecommerce',
        'event_action': 'Purchase',
        'event_label': 'Order ID: <?php echo $_SESSION['lastOrderId'] ?? ''; ?> ',
        'event_value': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
        'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
        'transactionTotal': <?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>,
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
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "dn1":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "dn2":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "dn3":
        ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "dn4":
    ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'GTM_<?php echo $pageType;?>'
            });
        </script>
        <?php
        break;
    case "receipt":
        ?>
        <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'GTM_<?php echo $pageType;?>',
            'event_category': 'Ecommerce',
            'event_action': 'Purchase',
            'event_label': 'Order ID: <?php echo $_SESSION['lastOrderId'] ?? ''; ?> ',
            'event_value': '<?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>',
            'transactionId': '<?php echo $_SESSION['lastOrderId'] ?? ''; ?>',
            'transactionTotal': <?php echo $_SESSION['lastOrderTotal'] ?? ''; ?>,
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
    default:
        //the default action, if any.
}

//Add Pixel Fired event for each page type
$pixelsFired[] = 'GTM_' . $pageType;

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
