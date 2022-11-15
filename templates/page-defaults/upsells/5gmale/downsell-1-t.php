<?php
error_reporting(0);
require_once('../../ll/settings.php');

$querystring = "";
  if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
	$querystring = "?".$_SERVER['QUERY_STRING'];
  }
  
$arr_browsers = ["Firefox", "Chrome", "Safari", "Opera","MSIE", "Trident", "Edge"];
$agent = $_SERVER['HTTP_USER_AGENT'];
                        
$user_browser = '';
foreach ($arr_browsers as $browser) {
    if (strpos($agent, $browser) !== false) {
        $user_browser = $browser;						
        break;						
    }  					
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>100% SECURE - Supernatural Man LLC Checkout</title>
		<link rel="shortcut icon" href="https://s3.amazonaws.com/sec-image/upsells/skeletonkey/lock.png" type="image/png" />
		<meta name="generator" content="GDC" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- modal functionality -->
		<script src="../../v/shared/basic_modal.js"></script>
        
        <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T7RRXPJ');</script>
	<!-- End Google Tag Manager -->
        
        
	<link rel="icon" type="image/png" href="/favicon.png">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
		<link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon-16x16.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Cardo:400,400italic,700' rel='stylesheet' type='text/css' />
		<script src="https://cdn.tailwindcss.com"></script>
		<link href="../../shared/css/base.css" rel="stylesheet">

		<!-- modal functionality -->
		<script src="../../v/shared/basic_modal.js"></script>
		

    <!-- Start Visual Website Optimizer Synchronous Code -->
    <script type='text/javascript'>
    var _vis_opt_account_id = 2887;
    var _vis_opt_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://');
    document.write('<s' + 'cript src="' + _vis_opt_protocol +
    'dev.visualwebsiteoptimizer.com/deploy/js_visitor_settings.php?v=1&a='+_vis_opt_account_id+'&url='
    +encodeURIComponent(document.URL)+'&random='+Math.random()+'" type="text/javascript">' + '<\/s' + 'cript>');
    </script>

    <script type='text/javascript'>
    if(typeof(_vis_opt_settings_loaded) == "boolean") { document.write('<s' + 'cript src="' + _vis_opt_protocol +
    'd5phz18u4wuww.cloudfront.net/vis_opt.js" type="text/javascript">' + '<\/s' + 'cript>'); }
    /* if your site already has jQuery 1.4.2, replace vis_opt.js with vis_opt_no_jquery.js above */
    </script>

    <script type='text/javascript'>
    if(typeof(_vis_opt_settings_loaded) == "boolean" && typeof(_vis_opt_top_initialize) == "function") {
            _vis_opt_top_initialize(); vwo_$(document).ready(function() { _vis_opt_bottom_initialize(); });
    }
    </script>
    <!-- End Visual Website Optimizer Synchronous Code -->

<!--Start SNM Google Analytics-->
<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');	
		  ga('create', 'UA-85129020-1', 'auto');
		  ga('send', 'pageview');	
		</script>
<!--End SNM Google Analytics-->
		
	<style>
		.p1, .color-black {
				font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif !important;
			}
		
			.p1, .color-black {
				font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif !important;
			}
		
			.p4 {
				font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;
				font-size: 26px;
				font-weight: 400;
			}
			
			.p3 {
				font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;
			}
			
			#cboxOverlay {
				background: #000 !important;
			}
			
			#cboxClose{
				top: 0px;
				    background: url(../../upsells/5gmale/colorbox/images/controls.png) no-repeat -25px 0 !important;
			}
			
			.buy_button {
					font-weight: bold;
				    background-color: #82c213;
				    color: #fff;
				    font-size: 25px;
				    border: 1px solid #000;
				    padding: 15px 10px;
				    border-radius: 4px;
				    text-shadow: 1px 1px #000;
				    box-shadow: 1px 1px 2px #888888;
				    text-decoration: none;
			}
			
			.buy_button:hover {
				background-color: transparent;
				    border: 2px solid #82c213;
				    color: #82c213;
				    text-decoration: none;
				    text-shadow: none;
			}
			
			.main-pop h1 {
				color: #cc0300;
				font-size: 60px;
				text-align: center;
				margin-top: -20px;
				margin-bottom: 5px;
			}
			.modal-title {
				position: relative;
				padding: 12px !important;
			}
			p#close-btn {
				position: absolute;
				top: 3px;
				right: 8px;
				color: #fff;
				font-weight: bold;
				font-size: 17px;
				cursor: pointer
			}
			.main-pop h3 {
				text-align: center;
				font-size: 27px !important;
				line-height: 37px;
				font-weight: normal;
				margin-top: -15px;
				color: #000 !important;
			}
			.stay-btn-cont, .leave-btn-cont {
				width: 48%;
				float: left;
			}
			#stay-btn, #leave-btn {
				font-size: 30px;
				font-weight: bold;
				color: #fff;
				border: none;
				background: green;
				padding: 12px 25px;
				margin-top: 15px;
				width: 90%;
				cursor: pointer;
			}
			#leave-btn {
				margin-left: 20px;
				background: #cc0300;
			}
			#ouibounce-modal .modal-footer {
				border-top: none !important;
			}
			.options {
				width: 100%;
				float: left;
				border: 3px dashed red;
				padding-bottom: 35px;
				padding-top: 15px;
			}
			.option2 {
				margin-top: 30px;
			}
          
			@media(max-width:767px){
				.lefts {
					width:100%
				}
				
				.guarantee {
					margin-top: 20px;
				}
				
				.buy_button {
					font-size: 23px;
				}

                .fancybox-opened {
                    width: 90% !important;
                }
			}
		
	</style>
</head>
<!-- HTML code from Bootply.com editor -->

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7RRXPJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



	<div class="container-vsl mx-auto py-8" style="max-width: 680px">
		<div class="content px-1">
			<?php 
				$current_step = 2;
			?>
			<section>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/v/shared/step_bar.php'); ?>
			</section>



			<div class="flex-flex-col w-full p-3 md:p-5 lg:p-10 bg-white rounded border border-black">
				<p class="w-full text-center text-5xl text-red-500 mb-6">Take Just 3 Or 6 Bottles And Get An Even <strong>BIGGER Discount…</strong></p>
				<div class="flex flex-col w-full">
					<p class="w-full pb-4">Hey, it’s Ryan again…</p>
					<p class="w-full pb-4">I understand that $177 is a lot, but I don’t want you to leave empty handed.</p>
					<p class="w-full pb-4">Like I said before I really want to make sure you’ve got those thick, rock-hard erections for AS LONG as you want them!</p>
					<p class="w-full pb-4">So right now, today only…</p>
					<p class="w-full pb-4">I’ll send you a smaller, three-bottle supply and give you an <strong><em>even bigger discount</em></strong>.</p>
					<p class="w-full pb-4">Or an extra 6 bottles at a rock bottom crazy discount.</p>
					<p class="w-full pb-4">And YES – I’ll still throw in those <strong>two FREE bonus gifts</strong> as well!</p>
					<p class="w-full pb-4">On the last page, you got a 57% OFF discount…</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				Now I’ll Drop The Price EVEN MORE… And Give You A <strong>WHOPPING 76% OFF!</strong>
				</h2>

				<div class="flex flex-col w-full">
						<p class="w-full pb-4">You heard right!
						<p class="w-full pb-4">My marketing department is going to be furious about this… </p>
						<p class="w-full pb-4">But because you’re a new customer I want to make sure you’re taken care of… and I know you’re going to be ordering A LOT more of this because I’ve seen how it works…</p>
						<p class="w-full pb-4">And I’d really be disappointed if you started getting all these killer results… </p>
						<p class="w-full pb-4">And then, your supply ran out!</p>
						<p class="w-full pb-4">But this is ONLY available today, <strong>right here</strong> on this page, because you’re a new customer.</p>
						<p class="w-full pb-4">Once you leave this page, this deal is <strong>gone for good!</strong></p>
						<p class="w-full pb-4">Make sure you secure your <strong>EXTREME DISCOUNT</strong> now…</p>
				</div>
				<h2 class="text-red-600 text-3xl text-center my-7">
				Secure Your <strong>EXTREME DISCOUNT</strong> On A 3 Or 6-Month Supply of 5G Male PLUS And <strong>Get 78% OFF!</strong>
				</h2>
				<div class="text-black text-lg text-center my-5">
				Click The Button Below To Get Started Now…
				</div>

				<section class="processblock">
					<div class="flex-flex-col w-full p-4 border-dashed border-2 border-red-500">
						<div class="flex flex-col w-auto mx-auto bottle-wrap text-center mb-8">
							<div class="text-2xl font-bold font-black">3 Bottle Discount</div>
							<div class="strike text-gray-400 text-xl line-through">Normally: $209.85</div>
							<div class="text-red-400 text-2xl font-semibold">Today Just $49</div>
							<div class="text-black text-sm">(A MASSIVE 76% Savings!)</div>
							<div class="flex justify-center mx-auto mt-6"><span><a href="/OCUS/?id=21&buy=2" id="upsell-buy" class="buy_button processlink" rel="samewin">Yes, Secure My Discount!</a></span></div>
						</div>
						<div class="flex flex-col w-auto mx-auto bottle-wrap text-center mb-5">
							<div class="text-2xl font-bold font-black">6 Bottle Discount</div>
							<div class="strike text-gray-400 text-xl line-through">Normally: $419.70</div>
							<div class="text-red-400 text-2xl font-semibold">Today Just $97</div>
							<div class="text-black text-sm">(A MASSIVE 78% Savings!)</div>
							<div class="flex justify-center mx-auto mt-6"><span><a href="/OCUS/?id=21&buy=2" id="upsell-buy" class="buy_button processlink" rel="samewin">Yes, Secure My Discount!</a></span></div>
						</div>
					</div>
				</section>
				<div class="flex justify-center my-10">
					<img class="mx-auto" src="https://s3.amazonaws.com/5gmale/90-guarantee.jpg" style="max-width: 250px">
				</div>
				<div class="flex justify-center w-full text-center text-xl font-bold text-black">
					<em>(It's Recommended You Take This One-Time Discount)</em>
				</div>
				<div class="flex w-full justify-center py-7">
					<p class='text-center px-5 split-non-buy processlink text-gray-500 text-sm'><a href="downsell-3.php" style="color: #8C8C8C; text-decoration:underline;" onclick="exit=false;">Skip This</a> - No, Ryan I don’t want this, I understand what a great deal this is and I am giving up my chance to have it, please give my discount to the man in line.</p>
				</div>
				<div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-10 pt-3 sans uppercase"> Supernatural Man LLC </div>

			</div>
		</div>
	</div>

	


<?php 
// declare modal variables (requires basic_modal.js)
	$modal_id = 'exitModal';
	$modal_title = "WAIT! DO NOT LEAVE THIS PAGE!";
	$modal_body = '
	<div class="modalsubheader text-center my-2">IT COULD CAUSE ERRORS IN YOUR ORDER</div>
	<div class="text-sm text-center my-2">Do not hit the back button or close your browser.
	<br>Click <span class="font-bold">"FINISH CUSTOMIZING MY ORDER"</span> below and <span style="text-decoration: underline;font-weight:bold;">make your decision on this page</span>.</div>
	';
	$modal_footer = '<button id="modalbutton" type="button" onclick="closeAll()" class="modalbutton w-full bg-blue-600 p-3 rounded text-white">FINISH CUSTOMIZING MY ORDER</button>';
	include($_SERVER['DOCUMENT_ROOT'] . '/v/shared/basic_modal.php');
?>

<script type='text/javascript' src="../../js_code/jquery.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
	$( ".processlink" ).on("click", function(e){
		$('.processblock').hide();
	});
</script>
<script>
		//exit intent
		
		// $(document).mouseleave(function () {
		// 	modalHandler('exitModal', true);
		// });

		//back button
		var stateObj = { };
		// history.pushState(stateObj, "100% SECURE - Supernatural Man LLC Checkout", "downsell-1.php<?php echo $querystring;?>");
		window.addEventListener('popstate', function(e) {
			modalHandler('exitModal', true);
		});


    

</script> <!-- Triggers Exit-intent -->
		
<script>
    var specialOffer = 'downsell-1-t.php<?php echo trim($querystring); ?>';
</script>	

<script>
//specialOffer = 'upsell-2-blow-her-away.php';
</script>


</body>

</html>
