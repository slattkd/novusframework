<?php
error_reporting(0);
session_start();
require_once('../../ll/settings.php');
require_once '../../mobile-detect/Mobile_Detect.php';
$detect = new Mobile_Detect;

$firedl = 0;

if($_SESSION['step_3']){ 	
	$firedl = 1;	
	if($_SESSION['step_3'] == 1){
		$uporderid = $_SESSION['step_3_orderId'];	
		$uporderamt = '227.00';
		$upsku = 24;
		$upname = 'GTMUpsell2';
	}
	if($_SESSION['step_3'] == 2){
		$uporderid = $_SESSION['step_3_orderId'];	
		$uporderamt = '454.00';
		$upsku = 734;
		$upname = 'GTMUpsell2';
	}
}

if($_SESSION['step_31']){ 	
	$firedl = 1;	
	if($_SESSION['step_31'] == 1){
		$uporderid = $_SESSION['step_31_orderId'];	
		$uporderamt = '99.95';
		$upsku = 736;
		$upname = 'GTMDownsell2';
	}
	if($_SESSION['step_31'] == 2){
		$uporderid = $_SESSION['step_31_orderId'];	
		$uporderamt = '224.95';
		$upsku = 738;
		$upname = 'GTMDownsell2';
	}
}

$retail = 540;
$just = '227.95';
$supply = 6;
$normally = '539.70';
$savings = 58;
$saveprice = '312.05';
$bottleprice = '37.99';
$newflow = 0;

if (isset($_SESSION['core']) && ($_SESSION['core'] == 6)) {
	$newflow = 1;
	$retail = '1,079.40';
	$just = '455.90';
	$supply = 12;
	$normally = '1,079.40';
	$savings = 58;
	$saveprice = '623.50';
	$bottleprice = '37.99';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php if ($firedl): ?>
         <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': '<?php echo $upname; ?>',
                'transactionId': '<?php echo $uporderid; ?>',
                'transactionTotal': '<?php echo $uporderamt; ?>',
                'transactionAffiliation': '<?php echo @$_SESSION['affid']; ?>',
                'transactionProducts': [{ 
                    'sku': '<?php echo $upsku; ?>', 
                    'name': '<?php echo $upname; ?>', 
                    'price': '<?php echo $uporderamt; ?>', 
                    'quantity': 1
                }]
            });
        </script>
    <?php endif; ?>
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
        
                
        
		<link rel="icon" type="image/png" href="/favicon.png">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon-16x16.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
			<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Cardo:400,400italic,700' rel='stylesheet' type='text/css' />
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,800" rel="stylesheet">
			<script src="https://cdn.tailwindcss.com"></script>
			<link href="../../shared/css/base.css" rel="stylesheet">

		<!-- modal functionality -->
		<script src="../../v/shared/basic_modal.js"></script>

<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
    var _vwo_code=(function(){
    var account_id=2887,
    settings_tolerance=5000,
    library_tolerance=5000,
    use_existing_jquery=false,
    /* DO NOT EDIT BELOW THIS LINE */
    f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
    </script>
<!-- End Visual Website Optimizer Asynchronous Code -->

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
	body {
		background-color: #000;
	}

	
</style>
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
    </head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7RRXPJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="container-vsl mx-auto py-8 serif" style="max-width: 680px">
		<div class="content px-1">
			<?php 
				$current_step = 2;
			?>
			<section>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/v/shared/step_bar.php'); ?>
			</section>
			<section>
				<div class="p-3 md:p-5 bg-white rounded">
					<h2 class="text-red-600 text-4xl text-center">This Astonishing Secret Allows Even Average And Old Guys To <strong>TRIPLE</strong> Your Sex Drive So You Have The Desire, Strength, Confidence And Unbridled Lust You Had When You Were In High School And Wanted To Fuck Every Girl You Saw…</h2>
					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3"> Hey its Ryan Masters… </p>
					<p class="w-full pb-3">The good news is that with 5G Male PLUS, you’re going to have the most intense, jaw-dropping erections of your life… </p>
					<p class="w-full pb-3">You’re going to find yourself lying in bed, staring at your cock, wondering if it’s ever going to go down! </p>
					<p class="w-full pb-3">Yet after selling 5G Male to <strong>thousands</strong> of men… I’ve discovered one shocking thing… </p>
					<p class="w-full pb-3">Which is that just because you’ve got a giant hard-on doesn’t mean that you’re <strong><em>actually horny…</em></strong></p>
					<p class="w-full pb-3">Sure, your cock may be hard… </p>
					<p class="w-full pb-3">But the lust and desire that makes you want to tear a girls clothes off the second she walks by you on the street… or fuck your wife on the spot the second she comes home… might not always be there…</p>
					<p class="w-full pb-3">This sucks, because most women PREFER the experience and control of an older man…</p> 
					<p class="w-full pb-3">Yet the older you get, the more unpredictable your desire becomes!</p>
					<p class="w-full pb-3">The Kinsey Institute found that a sexually healthy man should think about sex <strong style="color:#D81E00;">19 TIMES a day!</strong></p>
					<p class="w-full pb-3">And if you’re not, then your desire and energy levels have likely taken a hit.</p>
					<p class="w-full pb-3">And it’s a <strong style="color:red;">dangerous problem</strong> that can destroy your sex life, relationships and marriage…</p>
					</div>
					<h2 class="text-red-600 text-4xl text-center my-6">
						<strong>THE #1 PROBLEM</strong> Women Report About Their Husbands As They Get Older Is <strong>NOT</strong> A Lack Of Erections, <strong><em>It’s A Lack of DESIRE!</em></strong>
					</h2>
					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3">If your animalistic urges have faded, then your wife or girlfriend likely won’t see you as manly as she once did… </p>
					<p class="w-full pb-3">And to her... your sexual desire is the <strong>PRIMARY SIGN</strong> that you actually love her!</p>
					<p class="w-full pb-3">If you’re not regularly initiating sex like a sex-crazed caveman… </p>
					<p class="w-full pb-3">She may feel unwanted and unloved. </p>
					<p class="w-full pb-3">This leads to <strong>frustration</strong> that boils over into other areas of your relationship… eventually <strong>destroying</strong> it…</p>
					</div>
					<h2 class="text-red-600 text-4xl text-center my-6">“You’re HALF The Man Your Father Was”…</h2>

					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3">Scientists have discover a reason most men suddenly have such a LOW sex drive…</p>
					<p class="w-full pb-3">Over last 30 years… the average man’s testosterone levels have dropped 33% compared to men their same age back in 1987…</p>
					<p class="w-full pb-3">That means you’ve <strong>got 1/3rd less testosterone</strong> than your dad had when he was your age…</p> 
					<p class="w-full pb-3"><strong>1/3rd less energy</strong> than your dad…</p>
					<p class="w-full pb-3">You’re <strong>1/3rd less of a man</strong> than your father was.</p>
					<p class="w-full pb-3">Testosterone is the hormone that gives your body all of it’s manliness.</p>
					<p class="w-full pb-3">It gives you more sexual desire… more confidence and dominance… more endurance and more energy… more strength… more muscle mass…</p>
					<p class="w-full pb-3">And now almost all men’s testosterone levels are quickly draining…</p>
					<p class="w-full pb-3">It’s NOT your fault…</p>
					</div>

					<h2 class="text-red-600 text-4xl text-center my-6">Scientists Have Found <strong>Toxins</strong> In The Food We Eat That Are Causing This Shocking Problem…</h2>
					
					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3">These toxins include…</p>
					<ul class="my-5 mx-10" style="list-style: unset">
						<li><p class="w-full"><strong>Pesticides</strong> in our fruits and vegetables… 70% of the pesticides we use contain testosterone-draining toxins…</p> </li><br>
						<li><p class="w-full"><strong>Hormones</strong> in our meat… and concentrated pesticides from the food the animals eat… </p></li><br>
						<li><p class="w-full">And <strong>chemicals</strong> in our drinking water from prescription pills and other waste… and even from the plastics in bottled water (such as BPA and other plastics)…</p></li>
					</ul>	
					</div>

					<h2 class="text-red-600 text-4xl text-center my-6">The Good News, Is There Is An EASY Solution…</h2>
					<div class="flex flex-col justify-center">
					<img class="mx-auto" src="image/paul-clayton.png" alt="doctor paul clayton"/>
					<p id="sub-txt" class="py-3 text-center" style="color: gray;font-size: 18px !important;">“T3 Multiplier” can DOUBLE your free testosterone right away…</p>
					</div>

					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3">Dr. Paul Clayton, a Royal Society of Medicine fellow, has done research that lead to a powerful formula called <strong>T3 Multiplier.</strong></p>
					<p class="w-full pb-3"><strong>T3 Multiplier</strong> is the ONLY formula designed to DOUBLE your “FREE” testosterone…</p> 
					<p class="w-full pb-3">“FREE” Testosterone is the only type of testosterone your body can <strong>actually use!</strong></p>
					<p class="w-full pb-3">T3 Multiplier also <strong>BLOCKS estrogen</strong>, a hormone that lowers your sex drive…</p>
					<p class="w-full pb-3">And uses <strong>vitamin therapy</strong> to BOOST your testosterone levels back… </p>
					<p class="w-full pb-3">Because optimal vitamin levels can help boost testosterone back to normal even more!</p>
					<img class="mx-auto pb-3" src="image/before-after1.jpg" style="width:100%;" alt="testosterone slide illustration" />
					</div>
					<h2 class="text-red-600 text-4xl text-center my-6">You’ve Never REALLY Experienced What Great Sex Is Like Until You’ve Tried This…</h2>
					
					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3"><strong>T3 Multiplier</strong> gives you more desire and drive… so you can fuck for hours… and have sex like you’ve only seen in movies!</p>
					<p class="w-full pb-3">Higher testosterone makes you SEXIER and gives you that “wolfish” kind of attitude and <strong>masculine power</strong> that women, frankly, find irresistible… </p>
					<p class="w-full pb-3">You’ll also enjoy a huge boost of <strong>energy</strong> and <strong>stamina</strong> to keep fucking for hours…</p>
					<p class="w-full pb-3">So you can give your girl <strong>orgasm after orgasm…</strong> even after she’s quivering, sweating, squirting and begging you to stop…</p>
					<p class="w-full pb-3">It even makes you <strong>SMELL SEXIER!</strong></p>
					<p class="w-full pb-3">Multiple studies prove men with higher levels of testosterone smell sexier to women – even if they thought found these men unattractive before!</p>
					</div>
					<h2 class="text-red-600 text-4xl text-center my-6">Get A One-Time-Only, “New Member” Discount Now…</h2>

					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3"><strong>“T3 Multiplier”</strong> normally sells for $<?php echo $retail; ?>.</p>
					<p class="w-full pb-3">But today, because you’re a new member, you’re going to get a <strong>one-time-only discount…</strong></p>
					<p class="w-full pb-3">You’re only going to pay just $<?php echo $just; ?></p>
					</div>

					<div class="flex flex-col my-5 text-center justify-center">
					<p class="w-full pb-3" style="font-size:25px !important;"> <strike style="color:gray;">Normally: $<?php echo $normally; ?></strike>  <strong style="color:red;">Today Just: $<?php echo $just; ?></strong> </p>
					<p class="w-full pb-3"> That’s more than HALF OFF the price! </p>
					<p class="w-full pb-3" style="font-size:25px !important; text-decoration:underline;"> <a href="#button1">Click Here To Secure Your Discount Now…</a></p>
					</div>

					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3">This discount is <strong>ONLY available</strong> on this page, right here, <strong><u>right now</u></strong>.</p>
					<p class="w-full pb-3">Once you leave this page, this discount is <strong>gone for <u>GOOD</u></strong>.</p>
					<p class="w-full pb-3">You cannot email us… or call… or visit any page on our website to get this discount again.</p>
					<p class="w-full pb-3">You will ONLY find it on this page right here.</p>
					<p class="w-full pb-3">If you choose to give this deal up and come back another time… you will be forced to pay <strong>full price</strong> like every other man.</p>
					</div>
					<h2 class="text-red-600 text-4xl text-center my-6"><strong>GUARANTEED</strong> To Work Or It’s FREE!</h2>
					<div class="flex flex-col my-5 text-lg">
						<img class="mx-auto" src='https://s3.amazonaws.com/5gmale/90_day_Satisfaction_Guarantee_med.png' alt="guarantee emblem"/>
					</div>
					<div class="flex flex-col my-5 text-lg">
					<p class="w-full pb-3"> Every man I’ve personally shared this with has enjoyed a STRONGER sex drive, more energy, prowess and confidence in bed. </p><br>
					<p class="w-full pb-3"> It gives your relationship that spark back... </p>
					<p class="w-full pb-3"> It sexually excites women… </p>
					<p class="w-full pb-3"> And it give YOU the energy and drive you had when you were younger… </p>
					<p class="w-full pb-3">So you’re eager to fuck almost all the time… ready to seduce the next girl who walks in the room… ready to perform… and ready to keep fucking for hours!</p>
					<p class="w-full pb-3">I am <strong>so convinced</strong> that you’ll love this…</p>
					<p class="w-full pb-3">That I’ll give you <strong>90 FULL DAYS</strong> (that’s THREE whole months!) to try this out… </p>
					<p class="w-full pb-3">And if you’re not blown away, then just contact my support team… which is available by phone and email 24/7, every day of the week… and you’ll get a <strong>FULL, instant refund</strong>.</p> 
					<p class="w-full pb-3">No questions asked and no hassles.</p>
					<p class="w-full pb-3">There’s no way I could afford to make a promise like this if I wasn’t <strong>SURE</strong> this was going to work for you  every bit as well as I say it does.</p>
					</div>
					<h2 class="text-red-600 text-4xl text-center my-6">Secure Your Massive Discount Below NOW…</h2>
					<div class="flex flex-col justify-center text-center">
					<p class="w-full pb-3 text-center" style="font-size:23px !important;">(IMPORTANT: Once You Leave This Page This Deal Is Gone For GOOD!)</p>
					<p class="w-full pb-3 text-center"><strong style="color:red; font-size:27px;"> Here's What To Do Next:</strong> </p>
					<p class="w-full pb-3 text-center">Just click the “Secure My Order” button below to instantly get your exclusive New Member discount on T3 Formula now:</p>
					</div>

					<section>
						<div class="flex flex-col w-full lg:w-2/3 lg:mx-auto">
							<div class="flex flex-wrap md:flex-nowrap justify-between bg-yellow-50 border border-orange-400 border-4 sans">
								<div class="p-3 w-full md:w-auto text-center md:text-left">
									<p class="text-lg text-orange-500 font-semibold">NEW MEMBER DISCOUNT</p>
									<p class="text-2xl text-black font-extrabold my-2"><?php echo $supply; ?> MONTH SUPPLY</p>
									<div class="flex justify-around md:justify-between text-sm">
										<div><span class="text-gray-400 line-through">Retail Price: $<?php echo $retail; ?></div>
										<div><span class="text-black">You Pay Just $<?php echo $just; ?></span></div>
									</div>
									<p class="text-2xl mt-2 text-red-500 font-semibold">You Save $<?php echo $saveprice; ?> Today!</p>
								</div>

								<div class="p-3 text-center bg-yellow-100 w-full md:w-auto">
									<p class="text-green-400 font-semibold mb-4 text-lg">JUST $<?php echo $bottleprice; ?> PER BOTTLE</p>
									<?php if($newflow) { ?>
										<a id="btn-two" class="split-buy processlink takebtn" href="/OCUS/?id=4&buy=2&vwoupvar=gm968control" onclick="exit=false;">
									<?php } else { ?>
										<a id="btn-two" class="split-buy processlink takebtn" href="/OCUS/?id=4&buy=1&vwoupvar=gm968control" onclick="exit=false;">
									<?php } ?>
									<img src="https://5gm.s3.amazonaws.com/secureorder.gif" style="display: block; margin: 0px auto; width: 100%; max-width: 240px;padding-top: 3px;" alt="cta">
									</a>
									<p class="percentoff mt-4"><span class="text-red-400 font-semibold"><?php echo $savings; ?>% OFF</span> <span class="text-green-400 font-semibold"> + FREE SHIPPING</span></p>
								</div>

							</div>
						</div>
					</section>




					<div class="flex w-full justify-center py-7">
					<p class='text-center px-5 split-non-buy processlink text-gray-500 font-sm'><a href="downsell-3.php" style="color: #8C8C8C; text-decoration:underline;" onclick="exit=false;">Skip This</a> - Yes, Ryan, I understand this deep discount is only available on this page and once I leave it will be gone for good. Please give my discount away to another man.</p>
					</div>
					<div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-10 pt-3 sans uppercase"> Supernatural Man LLC </div>
				</div>
			</section>
		</div>
</div>

<?php 
// declare modal variables (requires basic_modal.js)
	$modal_id = 'mouseModal';
	$modal_title = "WAIT! DO NOT LEAVE THIS PAGE!";
	$modal_body = '
	<div class="modalsubheader text-center my-2">IT COULD CAUSE ERRORS IN YOUR ORDER</div>
	<div class="text-sm text-center my-2">Do not hit the back button or close your browser.
	<br>Click <span class="font-bold">"FINISH CUSTOMIZING MY ORDER"</span> below and <span style="text-decoration: underline;font-weight:bold;">make your decision on this page</span>.</div>
	';
	$modal_footer = '<button id="modalbutton" type="button" class="modalbutton w-full bg-blue-600 p-3 rounded text-white">FINISH CUSTOMIZING MY ORDER</button>';
	include($_SERVER['DOCUMENT_ROOT'] . '/v/shared/basic_modal.php');
?>


<script type='text/javascript' src="/js_code/jquery.js"></script>

<script>
	$( ".processlink" ).on("click", function(e){
		$('.processblock').hide();
	});
</script>
<script>
	$( document ).ready(function() {

		$('.ui.agreement.form')
			.form({
			button: {
				identifier: 'button',
				rules: [
			{
				type: 'checked',
				prompt: 'Please select one of the above options'
			}
				]
			}
			});
			$('.ui.checkbox').checkbox();
		});
	<?php if(!$detect->isMobile()): ?>
	    $(document).mouseleave(function(){
	        // $('#mousemodal').show();
					// $('body').css('overflow','hidden');
					modalHandler('mouseModal', true);
	    });
	    $('#modalbutton').on('click', function(){
				modalHandler('mouseModal', false);
	        // $('#mousemodal').hide();
	        // $('body').css('overflow','scroll');
	    });
    <?php else: ?>
 //   	var stateObj = { };
        history.pushState(stateObj, "100% SECURE - Supernatural Man LLC Checkout", "upsell-testosterone.php<?php echo $querystring;?>");
        window.addEventListener('popstate', function(e) {
          //   $('#mousemodal').show();
					// $('body').css('overflow','hidden');
					modalHandler('mouseModal', true);
		    $('#modalbutton').on('click', function(){
						modalHandler('mouseModal', false);
		        // $('#mousemodal').hide();
		        // $('body').css('overflow','scroll');
		    });
        });
    <?php endif; ?>
</script>

<script type='text/javascript'>

$(document).ready(function() {
    var checkBoxes = $("input[type='radio']");
	checkBoxes.change(function () {
	    $("#main-button").prop('disabled', checkBoxes.filter(':checked').length < 1);
	    
	    if ($("#main-button").prop('disabled') == false ) {
		$("#main-button").removeAttr( "title" );
	    } else if ($("#main-button").prop('disabled') == true ) {
	    	$("#main-button").attr( "title", "Please select one of the options above to continue" );
	    }
	});
$("input[type='radio']").change();
});
</script>



<script type='text/javascript'>

$(document).ready(function() {
    $('a#popup').colorbox({width: '70%'});

});
</script>

<!-- JavaScript jQuery code from Bootply.com editor  -->

<script>
//var exit = true;	
//window.onbeforeunload = function(e) { 
//	if( exit == true ) { 
//		exit = false;
//		setTimeout("window.location.href = 'upsell-testosterone.php<?php echo trim($querystring); ?>';", 1);
//		return ""; 
//	} 
//}
</script>
<script type='text/javascript'>
    document.addEventListener('contextmenu', event => event.preventDefault());
    
</script>

</body>

</html>