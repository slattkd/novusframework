<?php
error_reporting(0);
require_once('../../ll/settings.php');
$firedl = 0;

if($_SESSION['step_4']){ 	
	$firedl = 1;	
	if($_SESSION['step_4'] == 1){
		$uporderid = $_SESSION['step_4_orderId'];	
		$uporderamt = '227.95';
		$upsku = 21;
		$upname = 'GTMUpsell3';
	}
    if($_SESSION['step_4'] == 2){
		$uporderid = $_SESSION['step_4_orderId'];	
		$uporderamt = '455.90';
		$upsku = 739;
		$upname = 'GTMUpsell3';
	}
}

if($_SESSION['step_41']){ 	
	$firedl = 1;	
	if($_SESSION['step_41'] == 1){
		$uporderid = $_SESSION['step_41_orderId'];	
		$uporderamt = '97.95';
		$upsku = 751;
		$upname = 'GTMDownsell3';
	}
    if($_SESSION['step_41'] == 2){
		$uporderid = $_SESSION['step_41_orderId'];	
		$uporderamt = '219.95';
		$upsku = 752;
		$upname = 'GTMDownsell3';
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php if ($firedl){ ?>
	    <script>
		window.dataLayer = window.dataLayer || [];
			window.dataLayer.push({
				'user_email': '<?php echo $_SESSION['email']; ?>',
				'event': '<?php echo $upname; ?>',
				'transactionId': '<?php echo $uporderid; ?>',
				'transactionTotal': '<?php echo $uporderamt; ?>',
				'transactionProducts': [{ 
				'sku': '<?php echo $upsku; ?>', 
				'name': '<?php echo $upsku; ?>', 
				'price': '<?php echo $uporderamt; ?>', 
				'quantity': 1
			}]
     	});
		</script>
	<?php } ?>	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7RRXPJ');</script>
<!-- End Google Tag Manager -->

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>100% SECURE - Supernatural Man LLC Checkout</title>
    <link rel="shortcut icon" href="https://s3.amazonaws.com/sec-image/upsells/skeletonkey/lock.png" type="image/png" />    
    <meta name="generator" content="GDC" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noindex,nofollow">
    
    <link href="https://fonts.googleapis.com/css?family=Teko:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,800" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../shared/css/base.css" rel="stylesheet">
    
<style>
    body {
        background: #000;
    }
    /* color:#66667d; */
    
</style>
<!-- Start VWO Async Smartcode -->
<script type='text/javascript'>
window._vwo_code = window._vwo_code || (function(){
var account_id=2887,
settings_tolerance=4000,
library_tolerance=5000,
use_existing_jquery=false,
is_spa=1,
hide_element='body',

/* DO NOT EDIT BELOW THIS LINE */
f=false,d=document,code={use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){
window.settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b=hide_element?hide_element+'{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}':'',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('https://dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&f='+(+is_spa)+'&r='+Math.random());return settings_timer; }};window._vwo_settings_timer = code.init(); return code; }());
</script>
<!-- End VWO Async Smartcode -->    
</head>
    
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7RRXPJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="container-vsl mx-auto py-8 serif mt-10" style="max-width: 680px">
	<div class="content px-1 sans">
        <div class="flex flex-column flex-wrap bg-white p-5 text-center">
            <div class="flex w-full justify-center text-red-500 mb-5 text-4xl uppsercase" style="font-family:'Teko'">
                <h1>Last Chance!!!</h1>
            </div>
            <div class="flex w-full text-red-500 text-3xl mb-5">
            Choose One of These 2 Free Options to Continue...
            </div>
            <div class="flex w-full justify-center text-gray-400 mb-5 text-sm">
                <a class="underline hover:text-gray-300" href="http://members.supernaturalman.com/login">continue to the members area to start viewing your digital content...</a>
            </div>
            <div class="flex w-full justify-center text-red-500 text-sm mb-5">
            or....
            </div>
            <div class="flex w-full text-blue-600 text-2xl mb-3">
                <a class="underline hover:text-blue-500 font-semibold" href="../../OCUS/?id=5&buy=0">Click Here Now To Get One FINAL HUGE Discount Because You're A New Member Today...</a>
            </div>
            <div class="flex justify-center w-full font-bold">(One Time Only - Ends TODAY!)</div>
        </div>

    </div>
</div>

</body>
</html>