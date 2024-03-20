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

debugTimerStart("pixel-logger", "Starting up pixel logger");
$loggerPixel = new Logger("Pixel");
//$loggerPixel->pushProcessor(new \Monolog\Processor\GitProcessor());
$loggerPixel->pushProcessor(new \Monolog\Processor\WebProcessor());
$stream_handler_px = new RotatingFileHandler(
    "../log/pixel.log",
    0,
    Logger::INFO,
    true,
    0664
);
$stream_handler_px->setFilenameFormat("{date}_{filename}", "Y-m-d");
$output = "%level_name% | %datetime% > %message% | %context% %extra%\n";
$dateFormat = "Y-n-j g:i:s a";
$formatter_px = new LineFormatter(
    $output, // Format of message in log
    $dateFormat, // Datetime format
    true, // allowInlineLineBreaks option, default false
    true // discard empty Square brackets in the end, default false
);
$stream_handler_px->setFormatter($formatter_px);
$loggerPixel->pushHandler($stream_handler_px);
debugTimerEnd("pixel-logger");

if (
    isset($site["maropostAcctId"]) &&
    $_SESSION["pageType"] !== "receipt" &&
    isset($_SESSION["email"])
) {

    if (!empty($products["products"][$_SESSION["pid"]])) {
        $productName = $products["products"][$_SESSION["pid"]];
    } else {
        $productName = "";
    }

    $url = str_replace("index.php", "", $_SERVER["HTTP_HOST"]);
    $page = str_replace("index.php", "", $_SERVER["PHP_SELF"]);
    //  add a timer here
    if (isset($_SESSION["maropostTableData"])) {
        $_SESSION["maropostTableData"]["lastKnownLocation"] =
            "http://" . $url . $page;
    } else {
        $_SESSION["maropostTableData"] = [];
        $_SESSION["maropostTableData"]["lastKnownLocation"] =
            "http://" . $url . $page;
    }
    $newRecord = [
        "record" => [
            "first_name" => $_SESSION["firstName"],
            "last_name" => $_SESSION["lastName"],
            "email" => $_SESSION["email"],
            "page_last_seen" =>
                $_SESSION["maropostTableData"]["lastKnownLocation"],
            "product_id" => $_SESSION["pid"],
            "product_name" => $productName["product_name"],
            "is_iOS" => $_SESSION["isIOS"],
            "is_mobile" => $_SESSION["isMobile"],
            "aff_id" => $_SESSION["affid"],
            "eftid" => $_SESSION["eftid"],
            "r" => $_SESSION["r"],
            "utm_medium" => $_SESSION["utm_medium"],
            "utm_source" => $_SESSION["utm_source"],
            "utm_campaign" => $_SESSION["utm_campaign"],
            "utm_content" => $_SESSION["utm_content"],
            "utm_term" => $_SESSION["utm_term"],
        ],
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
    if (this.readyState === 4 || this.status === 200) {
      console.log(this.responseText); // echo from php
    }
  };
  xmlhttp.send("data=" + JSON.stringify(<?php echo $tableData; ?>));
});
</script>

<!-- Start VWO Async SmartCode -->
    <script type='text/javascript' id='vwoCode'>
    window._vwo_code = window._vwo_code || (function() {
    var account_id = 2887,
        version = 1.4,
        settings_tolerance = 2000,
        library_tolerance = 2500,
        use_existing_jquery = false,
        is_spa = 1,
        hide_element = 'body',
        /* DO NOT EDIT BELOW THIS LINE */
        f = false,
        d = document,
        vwoCodeEl = document.querySelector('#vwoCode'),
        code = {
        use_existing_jquery: function() {
            return use_existing_jquery
        },
        library_tolerance: function() {
            return library_tolerance
        },
        finish: function() {
            if (!f) {
            f = true;
            var e = d.getElementById('_vis_opt_path_hides');
            if (e) e.parentNode.removeChild(e)
            }
        },
        finished: function() {
            return f
        },
        load: function(e) {
            var t = d.createElement('script');
            t.fetchPriority = 'high';
            t.src = e;
            t.type = 'text/javascript';
            t.innerText;
            t.onerror = function() {
            _vwo_code.finish()
            };
            d.getElementsByTagName('head')[0].appendChild(t)
        },
        getVersion: function() {
            return version
        },
        getMatchedCookies: function(e) {
            var t = [];
            if (document.cookie) {
            t = decodeURIComponent(document.cookie).match(e) || []
            }
            return t
        },
        getCombinationCookie: function() {
            var e = code.getMatchedCookies(/(vis_opt_exp_\d*._combi=[\d,]+)/g);
            var i = [];
            e.forEach(function(e) {
            var t = e.match(/([\d,]+)/g);
            i.push(t.join('-'))
            });
            return i.join('|')
        },
        init: function() {
            window.settings_timer = setTimeout(function() {
            _vwo_code.finish()
            }, settings_tolerance);
            var e = d.createElement('style'),
            t = hide_element ? hide_element +
            '{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}' : '',
            i = d.getElementsByTagName('head')[0];
            e.setAttribute('id', '_vis_opt_path_hides');
            vwoCodeEl && e.setAttribute('nonce', vwoCodeEl.nonce);
            e.setAttribute('type', 'text/css');
            if (e.styleSheet) e.styleSheet.cssText = t;
            else e.appendChild(d.createTextNode(t));
            i.appendChild(e);
            var n = this.getCombinationCookie();
            this.load('https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d
            .URL) + '&f=' + +is_spa + '&vn=' + version + (n ? '&c=' + n : ''));
            return settings_timer
        }
        };
    window._vwo_settings_timer = code.init();
    return code;
    }());
    </script>
<!-- End VWO Async SmartCode -->

<?php
/*
echo $_SESSION['url'] . '<br>';
echo $_SESSION['slug'] . '<br>';
echo $_SESSION['pageType'] . '<br>';
*/
$pageType = $_SESSION["pageType"] ?? "default";
$pixelsFired = [];

function pixelLogging($loggerPixel, $pixelsFired)
{
    $email = $_SESSION["email"] ?? "n/a";
    $session = session_id();
    $pageType = $_SESSION["pageType"] ?? "default";
    $pixelsFired = implode(",", $pixelsFired);
    $pixelLog =
        $session . " || " . $email . " || " . $pageType . " || " . $pixelsFired;
    $loggerPixel->info("Pixel Log: " . $pixelLog);
}
?>

<!-- disable fb pixels for ios devices - isIOS from director.php-->
<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
! function(f, b, e, v, n, t, s) {
  if (f.fbq) return;
  n = f.fbq = function() {
    n.callMethod ?
      n.callMethod.apply(n, arguments) : n.queue.push(arguments)
  };
  if (!f._fbq) f._fbq = n;
  n.push = n;
  n.loaded = !0;
  n.version = '2.0';
  n.queue = [];
  t = b.createElement(e);
  t.async = !0;
  t.src = v;
  s = b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t, s)
}(window, document, 'script',
  'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?php echo $site["fbPixelId"]; ?>');
</script>
<script>
fbq('trackSingle', '<?= $site["fbPixelId"]; ?>', 'PageView', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=PageView&eid=<?= $_SESSION["event_id"]; ?>&noscript=1" /></noscript>
<?php endif; ?>

//
<!-- removed from case: order, onepage, step1, step2, step3 -->
<!-- <script src="https://cdn.lr-ingest.com/LogRocket.min.js" crossorigin="anonymous"></script>
    <script>window.LogRocket && window.LogRocket.init('tgpuh6/novus');</script> -->
<?php
// logging with capi api
include "capi-page.php";
include "capi-purchase.php";

switch ($pageType) { // Landing Pages
    //
    case "lp": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php
callCAPIPage("PageView");
break;
// Mini VSL Pages
    //
    case "msl": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php
callCAPIPage("PageView");
break;
// Written Sales Letter Pages
    //
    case "wsl": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php
callCAPIPage("PageView");
break;
// Video Sales Letter Pages
    //
    case "vsl": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php
callCAPIPage("PageView");
break;
// Assessment Pages
    //
    case "assessment": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>',
    'ContentViewAssessment', {eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=ContentViewAssessment&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPage("PageView");
callCAPIPage("ContentViewAssessment");
break;
// Order Pages
    //
    case "order": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'ProductView', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=ProductView&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPage("PageView");
callCAPIPage("ProductView");
break;
// Discount Pages
    //
    case "discount": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>

<?php
callCAPIPage("PageView");
break;
// Onepage Checkout
    //
    case "onepage": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'InitiateCheckout', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=InitiateCheckout&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddToCart', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddToCart&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPage("PageView");
callCAPIPage("InitiateCheckout");
callCAPIPage("AddToCart");
break;
// 3 Step Checkout - Step 1
    //
    case "step1": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddToCart', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddToCart&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPage("PageView");
callCAPIPage("AddToCart");
break;
// 3 Step Checkout - Step 2
    //
    case "step2": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'InitiateCheckout', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=InitiateCheckout&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>
<?php // Potentially add trigger that if "Join Revival Point text alerts to get the latest // discounts, order updates, and special offers**" is checked to track "lead" fbq('track', 'Lead');
        // Potentially add trigger that if "Join Revival Point text alerts to get the latest
        // discounts, order updates, and special offers**" is checked to track "lead" fbq('track', 'Lead');

callCAPIPage("PageView");
callCAPIPage("InitiateCheckout");
break;
case "step3": ?> // 3 Step Checkout - Step 3 //
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php
callCAPIPage("PageView");
break;
case "up1": ?> // Upsell 1 - ALSO Hero Conversion Page // // NOTICE: order ID is appended to event_id for purchaes here.
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': <?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>
});
</script>

<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
callCAPIPage("AddPaymentInfo"); // Set the sigle order session fire to true and close conditional
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
// Upsell 2 //
    case "up2": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
// Upsell 3 //
    case "up3": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>

<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>
<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
// Upsell 4 //
    case "up4": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
// Upsell Interstitial
    //
    case "upinterstitial": ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
case "dn0": ?> // Downsell 0 //
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
case "dn1": ?> // Downsell 1
    //
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
case "dn2": ?> // Downsell 2 //
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_id': '<?= $_SESSION["event_id"]; ?>'
});
</script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
  'event': 'GTM_<?php echo $pageType; ?>',
  'event_category': 'Ecommerce',
  'event_action': 'Purchase',
  'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? "" ?>',
  'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
  'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
  'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
  'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
  'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
  'transactionProducts': [{
    'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
    'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
    'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
    'quantity': 1
  }]
});
</script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
  value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
  currency: 'USD',
  contents: [{
    id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
    quantity: 1
  }],
  content_type: 'product',
  content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
  eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
});
</script>

<script>
fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
  eventID: '<?= $_SESSION["event_id"]; ?>'
});
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
case "dn3": ?> // Downsell 3 //
    <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
    'event': 'GTM_<?php echo $pageType; ?>',
    'event_id': '<?= $_SESSION["event_id"]; ?>'
    });
    </script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
    <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'GTM_<?php echo $pageType; ?>',
        'event_category': 'Ecommerce',
        'event_action': 'Purchase',
        'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ??
            "" ?>',
        'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
        'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
        'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
        'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
        'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
        'transactionProducts': [{
            'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
            'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
            'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
            'quantity': 1
        }]
    });
    </script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
    <script>
    fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
        value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
        currency: 'USD',
        contents: [{
            id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
            quantity: 1
        }],
        content_type: 'product',
        content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
        eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
    });
    </script>

    <script>
    fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
        eventID: '<?= $_SESSION["event_id"]; ?>'
    });
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
case "dn4": ?> // Downsell 4 //
    <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'GTM_<?php echo $pageType; ?>',
        'event_id': '<?= $_SESSION["event_id"]; ?>'
    });
    </script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
    <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'GTM_<?php echo $pageType; ?>',
        'event_category': 'Ecommerce',
        'event_action': 'Purchase',
        'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ??
            "" ?>',
        'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
        'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
        'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
        'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
        'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
        'transactionProducts': [{
            'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
            'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
            'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
            'quantity': 1
        }]
    });
    </script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
    <script>
    fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
        value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
        currency: 'USD',
        contents: [{
            id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
            quantity: 1
        }],
        content_type: 'product',
        content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
        eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
    });
    </script>

    <script>
    fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
        eventID: '<?= $_SESSION["event_id"]; ?>'
    });
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
// Reciept / Thank You Page //
    case "receipt": ?>
    <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'GTM_<?php echo $pageType; ?>',
        'event_id': '<?= $_SESSION["event_id"]; ?>'
    });
    </script>
<?php // Only allow this to fire once per order.
        // Only allow this to fire once per order.

if (!isset($_SESSION[$_SESSION["orderId"] . "_fired"])) { ?>
    <script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'GTM_<?php echo $pageType; ?>',
        'event_category': 'Ecommerce',
        'event_action': 'Purchase',
        'event_id': '<?= $_SESSION["event_id"] . "." . $_SESSION["orderId"] ??
            "" ?>',
        'event_label': 'Order ID: <?php echo $_SESSION["orderId"] ?? ""; ?> ',
        'event_value': '<?php echo $_SESSION["orderTotal"] ?? ""; ?>',
        'transactionId': '<?php echo $_SESSION["orderId"] ?? ""; ?>',
        'transactionTotal': <?php echo $_SESSION["orderTotal"] ?? ""; ?>,
        'transactionAffiliation': '<?php echo $_SESSION["a"] ?? ""; ?>',
        'transactionProducts': [{
            'sku': '<?php echo $_SESSION["productId"] ?? ""; ?>',
            'name': '<?php echo $_SESSION["productName"] ?? ""; ?>',
            'price': '<?php echo $_SESSION["productPrice"] ?? ""; ?>',
            'quantity': 1
        }]
    });
    </script>

<?php if (isset($_SESSION["isIOS"]) && !$_SESSION["isIOS"]): ?>
    <script>
    fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'Purchase', {
        value: <?php echo $_SESSION["productPrice"] ?? ""; ?>,
        currency: 'USD',
        contents: [{
            id: '<?php echo $_SESSION["productId"] ?? ""; ?>',
            quantity: 1
        }],
        content_type: 'product',
        content_name: '<?php echo $_SESSION["productName"] ?? ""; ?>',
        eventID: '<?php echo $_SESSION["event_id"] . "." . $_SESSION["orderId"] ?? ""; ?>'
    });
    </script>

    <script>
    fbq('trackSingle', '<?php echo $site["fbPixelId"]; ?>', 'AddPaymentInfo', {
        eventID: '<?= $_SESSION["event_id"]; ?>'
    });
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo $site[
        "fbPixelId"
    ]; ?>&ev=AddPaymentInfo&eid=<?= $_SESSION[
    "event_id"
]; ?>&noscript=1" /></noscript>
<?php endif; ?>

<?php
callCAPIPurchase();
$_SESSION[$_SESSION["orderId"] . "_fired"] = true;
}
callCAPIPage("PageView");
break;
default:
    //the default action, if any.
} //Add Pixel Fired event for each page type
$pixelsFired[] = "GTM_" . $pageType; //fire the logging pixel with corresponding event data
pixelLogging($loggerPixel, $pixelsFired);

} /*
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