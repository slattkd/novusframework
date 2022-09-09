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
$firedl = 0;
	//datalayer
	//downsell
	if($_SESSION['step_22']){ 	
		$firedl = 1;	
		if($_SESSION['step_22'] == 1){
			$uporderid = $_SESSION['step_22_orderId'];	
			$uporderamt = '49.00';
			$upsku = 10;
			$upname = 'GTMDownsell1';
		}
		if($_SESSION['step_22'] == 2){ //1x
			$uporderid = $_SESSION['step_22_orderId'];	
			$uporderamt = '97.00';
			$upsku = 455;
			$upname = 'GTMDownsell1';
		}
	}
		
	//upsell1
	if($_SESSION['step_2']){ 	
		$firedl = 1;
		if($_SESSION['step_2'] == 1){ 
			$uporderid = $_SESSION['step_2_orderId'];	
			$uporderamt = '179.69';
			$upsku = 11;
			$upname = 'GTMUpsell1';
		}
		if($_SESSION['step_2'] == 2){ 
			$uporderid = $_SESSION['step_2_orderId'];	
			$uporderamt = '197.00';
			$upsku = 783;
			$upname = 'GTMUpsell1';
		}
		if($_SESSION['step_2'] == 3){ 
			$uporderid = $_SESSION['step_2_orderId'];	
			$uporderamt = '297.00';
			$upsku = 250;
			$upname = 'GTMUpsell1';
		}	
		if($_SESSION['step_2'] == 4){ 
			$uporderid = $_SESSION['step_2_orderId'];	
			$uporderamt = '109.00';
			$upsku = 461;
			$upname = 'GTMUpsell1';
		}	
	}

	$retail = '540.00';
	$just = '227.00';
	$supply = 6;
	$save = '313.00';
	$perbottle = '37.83';
	$newflow = 0;

	if (isset($_SESSION['core']) && ($_SESSION['core'] == 6)) {
		$newflow = 1;
		$retail = '1,080';
		$just = '454.00';
		$supply = 12;
		$save = '626.00';
		$perbottle = '37.83';
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
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,800" rel="stylesheet">
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
			body {
				font-family: 'Times New Roman', sans-serif;
				background-color: #000;
			}

			h2.text-2xl {
				font-size: 26px;
				line-height: 1.4em;
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
<!-- HTML code from Bootply.com editor -->



<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7RRXPJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container-vsl mx-auto py-8" style="max-width: 680px;">
		<div class="content mx-1">
			<section>
			<?php 
			$current_step = 2;
			include($_SERVER['DOCUMENT_ROOT'] . '/v/shared/step_bar.php'); ?>
			</section>

			<div class="bg-white rounded p-3 md:p-5 lg:p-10">
				<div class="flex flex-col w-full mb-7">
					<h2 class="text-red-600 text-5xl text-center"><strong>BLOW HER AWAY</strong></h2>
					<h2 class="text-red-600 text-3xl text-center">By Shooting Powerful LOADS of CUM Up To <strong>4X BIGGER!</strong></h2>
				</div>
			
				<h2 class="text-2xl text-center my-5">
				"You’ll Leave Your Girl <strong>Shocked</strong> And Begging For MORE… When You Drench Her With A Shockingly <strong>HUGE LOAD</strong> To Finish Off The Night…
				</h2>
				<h2 class="text-2xl text-center my-5">
				And You’ll Surprise Yourself When You Feel Significantly <strong>Longer</strong> And <strong>More Intense</strong> Orgasms… That Shoot Up Your Spine, Down Your Legs, Into Your Toes And Throughout Your Entire Body!”
				</h2>

				<div class="flex flex-col w-full">
					<p class="w-full pb-4">Hey it's Ryan Masters again...</p>
					<p class="w-full pb-4">And I’ll tell you first hand, the <strong>last thing</strong> you want when you’ve got a girl really worked up and horny because of how thick and hard your cock is…</p>
					<p class="w-full pb-4">Is to have a <strong style="color: #D81E00;">weak finish</strong>… </p>
					<p class="w-full pb-4">Any famous actor will tell you, it’s how you <strong>END</strong> the show that matters… </p>
					<p class="w-full pb-4">That’s what people are going to remember.</p>
					<p class="w-full pb-4">And when your girl is begging for you to finish inside her (or in her mouth… or on her tits… or anywhere else) she’s expecting a BIG FINISH from you!</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				"The 2 BIG REASONS Why Women Love BIG LOADS So Much…"
				</h2>

				<div class="flex flex-col w-full">
					<p class="w-full pb-4"><strong>REASON #1:</strong> First, big loads are the ULTIMATE sign of <strong>masculinity.</strong></p>
					<p class="w-full pb-4">When a woman decides to sleep with a you… whether it’s a hookup or her husband of 25 years… she’s going to get turned on by certain <strong>genetic factors</strong> that tell her you’re good “father material” and will produce strong kids…</p>
					<p class="w-full pb-4">And she’s going to be more attracted, loving and loyal towards you…</p>
					<p class="w-full pb-4">And even if she doesn’t want kids…she’s STILL going to look for these same factors...</p>
					<p class="w-full pb-4">And OBVIOUSLY a huge load size is a big indicator of your strength and reproductive power as a man… because a big load is way MORE LIKELY to produce kids…</p>
					<p class="w-full pb-4"><strong>REASON #2:</strong> The SECOND reason women LOVE big loads… is because they see it as a sign of how much you like them… and how turned on you are by them.</p>
					<p class="w-full pb-4">If your load is small, she’s going to think you’re not into her… or you don’t love her…</p>
					<p class="w-full pb-4">Or WORSE… that you’re thinking about other women… or even cheating on her!</p>
					<p class="w-full pb-4">This may sound extreme, but this is EXACTLY how women think!</p>
					<p class="w-full pb-4">So big loads are <strong>very</strong> important.</p>
					<p class="w-full pb-4">And perhaps the <strong>best reason</strong> of all to shoot bigger loads…</p>
					<p class="w-full pb-4">Is because BIG LOADS will give <strong><u>YOU</u></strong> more intense, longer orgasms for yourself (more on this in just a second)…</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				“Women Don’t Just Love HUGE LOADS… They CRAVE And OBSESS Over Them…”
				</h2>

				<div class="flex flex-col w-full">
					<p class="w-full pb-4">Here’s the <strong>TRUTH</strong> about what women REALLY think about load size… </p>
					<p class="w-full pb-4">One recent survey done by BlueLight found that <strong>76.5% want BIG LOADS</strong> instead of small loads.</p>
					<p class="w-full pb-4">And here’ are some of the <strong>shocking reasons</strong> why women say they love BIG LOADs…</p>
				</div>

				<div class="flex flex-col w-4/5 text-center my-5 mx-auto">
					<p class="w-full pb-1"><strong>BIG LOAD CONFESSION #1:</strong></p>
					<p class="w-full pb-5" style="color:#696969;"><em>"I love big loads because I feel like I really got the guy off. <strong>I just feel so satisfied</strong> after seeing that it makes me feel like the sexiest woman alive!"</em></p>
					<p class="w-full pb-1"><strong>BIG LOAD CONFESSION #2:</strong></p>
					<p class="w-full pb-5" style="color:#696969;"><em>"I NEED my guy to shoot a big load in order for me to orgasm. I just find it so <strong>incredibly</strong> hot to see him do it. It's not the end of the world if his load isn't big, it's just a <strong>little disappointing.</strong>"</em></p>
					<p class="w-full pb-1"><strong>BIG LOAD CONFESSION #3:</strong></p>
					<p class="w-full pb-5" style="color:#696969;"><em>“My husband has average sized loads that are easy to swallow, but every once in a while his cock will just keep shooting it out and shooting it out. A few times he's <strong>filled my mouth to overflowing</strong> and I had to start swallowing before he was even done cumming. It was <strong>sexy as heck!</strong>”</em></p>
					<p class="w-full pb-1"><strong>BIG LOAD CONFESSION #4:</strong></p>
					<p class="w-full pb-5" style="color:#696969;"><em>“Whenever he shoots out only a little, it's <strong>totally anticlimactic</strong>. Like, is that all? The size and the quality of his load is really important to me.”</em></strong></p>
				</div>

				<div class="flex flex-col w-full">
					<p class="w-full pb-4">Frankly, I was shocked to hear these stories…</p>
					<p class="w-full pb-4">I never knew how IMPORTANT this was to women…</p>
					<p class="w-full pb-4">Or that it turned them on SO MUCH…</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				“If You Cum Inside Her, BIGGER Loads Can Trigger BIGGER Orgasms Too…”
				</h2>

				<div class="flex flex-col w-full">
					<p class="w-full pb-4">Many women like their man to finish inside them… 
					<p class="w-full pb-4">And vagina has more nerve endings than any other area of a woman’s body… </p>
					<p class="w-full pb-4">So when you cum inside her… she’s going to feel it <strong>A LOT!</strong></p>
					<p class="w-full pb-4">If your load is BIG and shoots out HARD… it will create an <strong>intense</strong> feeling for her… and she will feel like you’re REALLY turned on by her… </p>
					<p class="w-full pb-4">This can trigger <strong>BIGGER and LONGER</strong> orgasms inside her…</p>
					<p class="w-full pb-4">And the <strong>BEST part</strong> of shooting a big load is the incredible pleasure <strong><u>YOU</u></strong> will feel when you orgasm now…</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				“Just Imagine Doubling, Tripling Or Even QUADRUPLING The <strong>Length</strong> AND The <strong>Intensity</strong> Of Your Orgasms!”
				</h2>

				<div class="flex flex-col w-full">
				<p class="w-full pb-4">The <strong>longer</strong> you cum and the <strong>more</strong> you come… the longer your body will stay in <strong>“orgasm mode”</strong> when you finish…</p>
				<p class="w-full pb-4">Just imagine feeling <strong>lightning bolts</strong> of pleasure shoot down your cock…</p>
				<p class="w-full pb-4">Up your spine…</p>
				<p class="w-full pb-4">Through the muscles in your legs… and into your toes…</p>
				<p class="w-full pb-4">It feels fucking incredible…</p>
				<p class="w-full pb-4">I guarantee, you have never felt <strong>ANY</strong> orgasm like this before…</p>
				<p class="w-full pb-4">Until you felt on orgasm with a SUPERSIZED LOAD!</p>
				<p class="w-full pb-4">And BIG LOADS will also make you look and feel like more of a <strong>MAN…</strong> </p>
				<p class="w-full pb-4">You’ll have more <strong>CONFIDENCE</strong>…</p>
				<p class="w-full pb-4">You’ll know you’re performing at the TOP of your game…</p>
				<p class="w-full pb-4">And you’ll know other women are talking about you… and your performance in bed…</p>
				<p class="w-full pb-4">How they’d never seen… or FELT… anything like it before…</p>
				<p class="w-full pb-4">And how other men just <strong>can’t measure up!</strong></p>
				<p class="w-full pb-4">Which means she’s going to chose YOU over other men…</p>
				<p class="w-full pb-4">Stay deeply loving, loyal and committed to you.</p>
				<p class="w-full pb-4">And that’s the reason male porn stars get paid the <strong>big bucks</strong> to shoot BIG LOADS in porn movies that millions of people are going to watch...</p>
				<p class="w-full pb-4">Because EVERYONE loves big loads.</p>
				<p class="w-full pb-4">Women love them… and men want to achieve them!</p>
				<p class="w-full pb-4">However, recently there’s been a <strong style="color:#D81E00;">BIG CRISIS</strong> threatening your load size… </p>	
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				Over The Last 25 Years, The Average Man’s Healthy Load Size Has <strong>Dropped In <u>HALF</u>!</strong>
				</h2>

				<div class="flex flex-col w-full">
				<p class="w-full pb-4">According to a research study published in the Wall Street Journal… </p>
				<p class="w-full pb-3 centered" style="font-size:19px;">“Today’s man has less than <strong>HALF</strong> the semen volume that a 
				man the same age had back in 1989...”</p>
				<p class="w-full pb-4">Is so bad… and some men’s semen volume is <strong style="color:#D81E00;">SO LOW…</strong> that they are unable to father children due to infertility… and this has become a SERIOUS concern world-wide.</p>
				<p class="w-full pb-4">Scientists now know WHY this is happening…</p>
				<p class="w-full pb-4">See, due to <strong>changes in our environment</strong> and the food we eat… toxins are now entering our bodies that are robbing us of the nutrients needed to produce strong volumes of semen…</p>
				<p class="w-full pb-4">It’s KILLING our load…</p>
				<p class="w-full pb-4">And you DO NOT want to let yourself fall <strong>victim</strong> to this ugly, man-crippling risk…</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				The Good News Is, There’s A EASY Way To Fix This And MULTIPLY Your Load Size Many Times Over!
				</h2>

				<div class="flex flex-col w-full">
					<p class="w-full pb-4">Scientists have discovered a few powerful, rare, all-natural ingredients that not only improve semen volume… but can <strong>increase it up to 4X</strong> what it is now!</p>
					<p class="w-full pb-4">Imagine next time you’re in bed with a girl… she’s begging you to cum inside her… </p>
					<p class="w-full pb-4">And you fill her with the <strong>biggest</strong>, <strong>thickest</strong> and most <strong>powerful</strong> load you’ve ever shot…</p>
					<p class="w-full pb-4">You feel it <strong>surge</strong> out of you… </p>
					<p class="w-full pb-4">You know it’s <strong>HUGE</strong>…</p>
					<p class="w-full pb-4">And you feel her pussy shake with <strong>pleasure</strong>… as she moans in <strong>ecstasy</strong>… </p>
					<p class="w-full pb-4">She feels like you’re just SO <strong>turned on</strong> by her… </p>
					<p class="w-full pb-4">And feels like you’re such a <strong>MAN</strong> for cumming so MUCH inside her…</p>
					<p class="w-full pb-4">You’ve now got a VERY POWERFUL tool to give women <strong>intense pleasure</strong> during sex… </p>
					<p class="w-full pb-4">And any time you want, you can BLAST a big load… and leave her gasping in a pool of pleasure…</p>
					<p class="w-full pb-4">And the second she gets home, she’s going to call her hot girlfriends… and tell them exactly what happened… how good you were… how HOT the sex was… </p>
					<p class="w-full pb-4">And once word gets out… you’re going to start getting A LOT <strong>more attention</strong> from women…</p>
					<p class="w-full pb-4">Maybe even find yourself in the middle of a <strong>threesome</strong>… or a love triangle too… </p>
					<p class="w-full pb-4">It wouldn’t be the first time I’ve seen it happen!</p>
					<p class="w-full pb-4">Because most men just can’t perform like this… and most women have never seen anything like this before…</p>
					<p class="w-full pb-4">In fact, most girls just don’t think it’s POSSIBLE for a guy to cum to like this…</p>
					<p class="w-full pb-4">And once you do this one… two… three times in bed with women… and it starts to become the norm…</p>
					<p class="w-full pb-4">You’re going to feel A LOT more <strong>confidence</strong> in bed…</p>
					<p class="w-full pb-4">Even when you’re just hanging out at a bar… or just making eye contact with a cute girl… you’re going to feel more confident… and women are going to sense it too… </p>
					<p class="w-full pb-4">They can just TELL you’re going to be <strong>good in bed</strong>…</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				These Rare “Genesis” Ingredients Will Make Your Load HUGE…
				</h2>
				

				<div class="flex flex-col w-full">
					<div>
					<img class="float-right mb-5 ml-5 w-full mx-auto md:w-1/2" style="max-width: 350px;" src="https://s3.amazonaws.com/5gmale/male-repro.jpg" alt="male reproductive diagram" />
					<p class=" pb-3">These <strong>“Genesis”</strong> ingredients are the ingredients that help your body create more semen.</p>
					<p class=" pb-3">If your body is lacking these ingredients, then your load size can a FRACTION of what it could be (<strong style="#D81E00">as low at 10%</strong>)… </p>
					<p class=" pb-3">Resulting in a <strong>measly dribble</strong> when you finish…</p>
					<p class=" pb-3">Once the “Genesis” ingredients enter your body… and are absorbed into your blood steam… they are then used by your testicles to fuel <strong>MASSIVE semen production</strong>…</p>
					</div>
				<p class="w-full pb-4">This creates a HUGE reservoir of cum… that is ready to blast out of you at any second… with MAXIMUM <strong>volume</strong> and <strong>force</strong>…</p>
				<p class="w-full pb-4">A load SO BIG it will leave any girl drenched… in a daze of <strong>pure shock and satisfaction</strong>…</p>
				<p class="w-full pb-4">And you’ll feel like a fucking <strong>super hero!</strong></p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				And Now, This Pill Will Even Enhance How Good Your Cum TASTES Too…
				</h2>

				<div class="flex flex-col w-full">
				<p class="w-full pb-4">We found through multiple studies and surveys that women love it when you cum in their mouths… and so they want your cum to TASTE GOOD!</p>				
				<p class="w-full pb-4">When your cum tastes good… women are more likely to want to give you a blow job… and way more likely to want to swallow your load when you cum...</p>				
				<p class="w-full pb-4">And good tasting cum is just a basic courtesy – it’s like wearing deodorant during sex!</p>				
				<p class="w-full pb-4">That why we added a new, simple combination of ingredients to greatly improve the <strong>way your load TASTES</strong> in her mouth… leaving it sweet… and even “delicious” as some women say…</p>				
				<p class="w-full pb-4">It’s the ultimate <strong>oral sex booster</strong> and just one more thing you can do to put yourself on top of her “best sex” list… <strong>miles ahead</strong> of the other guys she’s been with… </p>				
				<p class="w-full pb-4">Leaving her <strong>clinging</strong> to you… and begging for more… because the experience you provide is just that damn GOOD in bed!</p>					
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				Just Check Out These <strong>POWERFUL</strong> Results…
				</h2>

				<section>
				<div class="text-center my-3">
				Here are some the fast, powerful results you can see in <strong>as little as 30 days</strong>…
				</div>
				<div class="flex w-full justify-center mb-7">
				<img class="mx-auto" src="https://s3.amazonaws.com/5gmale/natural.jpg" alt="results chart"/>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				<strong>100% Natural</strong>. NO Prescription Needed!
				</h2>
				<div class="flex w-full justify-center text-center">
				ALL NATURAL. Non-GMO, Gluten FREE, GMP certified and more…
				</div>
				<div class="flex w-full justify-center mb-7">
				<img class="mx-auto" src="https://s3.amazonaws.com/5gmale/powerful.jpg" alt="ease of use images" />
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				Secure Your Special <strong>“Members Only”</strong> Discount…
				</h2>
				</section>

				<div class="flex flex-col w-full">
				<p class="w-full pb-4">Volumizer&trade; is a “high end” product and is for serious men only… </p>
				<p class="w-full pb-4">It normally sells for $<?php echo $retail; ?> retail.</p>
				<p class="w-full pb-4">But today, because you’re a new member, you’re going to get a one-time-only discount…</p>
				</div>
				<div class="flex flex-col w-full text-center my-7">
				<p class="w-full pb-3 text-lg">And you’re only going to pay just $<?php echo $just; ?></p>
				<p class="w-full pb-3 text-lg"><strike style="color:gray;">Normally: $<?php echo $retail; ?></strike> &nbsp;  <strong style="color:#D81E00;">Today Just: $<?php echo $just; ?></strong></p>
				</div>
				<div class="flex flex-col w-full">
					<p class="w-full pb-4">That’s more than <strong>HALF OFF</strong> the price! </p>
					<p class="w-full pb-4">But this discount is <strong>ONLY available</strong> on this page, right here, <strong><u>right now</u></strong>.</p>
					<p class="w-full pb-4">Once you leave this page, this discount is <strong>gone for <u>GOOD</u></strong>.</p>
					<p class="w-full pb-4">You cannot email us… or call… or visit any page on our website to get this discount again.</p>
					<p class="w-full pb-4">You will ONLY find it on this webpage here.</p>
					<p class="w-full pb-4">If you choose to give this deal up and come back another time… you will be forced to pay <strong>full price</strong> like every other man.</p>
				</div>
				<h2 class="text-red-600 text-2xl text-center my-7">
				Try It Out For 90 Days On Me <strong>I <u>GUARANTEE</u> You’ll Love It</strong>…
				</h2>

				<section>
					<div class="flex flex-wrap">
						<div class="w-full md:w-1/3 mb-4">
						<img class="mx-auto" src='https://s3.amazonaws.com/5gmale/90-guarantee.jpg' id='guarantee-image-2' alt="guarantee emblem" />
						</div>
						<div class="w-full md:w-2/3">
						<p class="w-full pb-4">Every man I’ve shared this with has LOVED shooting bigger loads… the excitement it gives women… and the more intense orgasms you will feel for YOURSELF.</p>
						<p class="w-full pb-4">I am <strong>so convinced</strong> that you’ll love Volumizer that I’ll let you try it for 90 full days (that’s THREE whole months!)…</p> 
						</div>
					</div>
				</section>

				<div class="flex flex-col w-full">
				<p class="w-full pb-4">And if you’re not crazy about it, just contact my support team and you’ll get a FULL, instant refund. No questions asked and no hassles.</p>
				<p class="w-full pb-4">There’s no way I could afford to make a promise like this if it didn’t work every bit as well as I say it does.</p>
				</div>
				<h2 class="text-red-600 text-3xl text-center my-7">
				<strong>WARNING:</strong> Very Limited Supply Left! 
				</h2>
				<div class="flex justify-center text-center">
				Due to high demand, there is very limited supply left.
				</div>

				<div class="flex flex-wrap justify-center items-center w-full border border-black p-4 my-5 lg:w-2/3 mx-auto text-xl">
					<div class="mr-2 font-bold">UPDATE:</div>
					<div class="flex flex-nowrap whitespace-nowrap items-center">There are <span class="bg-yellow-400 py-1 px-2 mx-2 font-bold underline">only 21 bottles</span> left</div>
				</div>
				<h2 class="text-red-600 text-2xl text-center mb-5">
				<strong>Here's What To Do Next:</strong>
				</h2>
				
				<div class="flex flex-col w-full text-center">
				<p class="w-full pb-4">Just choose one of the three, easy discount options by clicking below… </p>
				<p class="w-full pb-4">(The more you get, the more you save!) </p>
				</div>

				<section class="processblock">
						<div class="flex flex-col w-full md:mx-auto">
							<div class="flex flex-wrap md:flex-nowrap justify-between bg-yellow-50 border border-orange-400 border-4 sans">
								<div class="p-3 w-full md:w-auto text-center md:text-left">
									<p class="text-lg text-orange-500 font-semibold">RECOMMENDED DISCOUNT</p>
									<p class="text-2xl text-black font-extrabold my-2"><?php echo $supply; ?> MONTH SUPPLY</p>
									<div class="flex flex-wrap justify-around md:justify-between text-sm">
										<div><span class="text-gray-400 line-through">Retail Price: $<?php echo $retail; ?></div>
										<div><span class="text-black">You Pay Just $<?php echo $just; ?></span></div>
									</div>
									<p class="text-2xl mt-2 text-red-500 font-semibold">You Save $<?php echo $save; ?> Today!</p>
								</div>

								<div class="p-3 text-center bg-yellow-100 w-full md:w-auto">
									<p class="text-green-400 font-semibold mb-4 text-lg">JUST $<?php echo $perbottle; ?> PER BOTTLE</p>
									<?php if($newflow) { ?>
										<a id="btn-two" class="split-buy processlink takebtn" href="/OCUS/?id=4&buy=2&vwoupvar=gm968control" onclick="exit=false;">
									<?php } else { ?>
										<a id="btn-two" class="split-buy processlink takebtn" href="/OCUS/?id=4&buy=1&vwoupvar=gm968control" onclick="exit=false;">
									<?php } ?>
									<img src="https://5gm.s3.amazonaws.com/yes-secure-my-discount.png" style="display: block; margin: 0px auto; width: 100%; max-width: 240px;padding: 10px 0 7px;" alt="secure my discount">
									</a>
									<p class="percentoff mt-4"><span class="text-red-400 font-semibold">58% OFF</span> <span class="text-green-400 font-semibold"> + FREE SHIPPING</span></p>
								</div>

							</div>
						</div>
					</section>

				<div class="flex w-full justify-center py-7">
					<p class='text-center px-5 split-non-buy processlink text-gray-500 text-sm'><a href="downsell-3.php" style="color: #8C8C8C; text-decoration:underline;" onclick="exit=false;">Skip This</a> - Yes, Ryan, I understand this deep discount is only available on this page and once I leave it will be gone for good. Please give my discount away to another man.</p>
				</div>
				<div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-10 pt-3 sans uppercase"> Supernatural Man LLC </div>
			</div>
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $( document ).ready(function() {
        (function titleScroller(text) {
            document.title = text;
            setTimeout(function () {
                titleScroller(text.substr(1) + text.substr(0, 1));
            }, 400);
        }(" Before you go...Choose Your Option Now... Action Needed...Choose Your Upgrade Now... "));
    });
</script>

<script>
	var exit = true;	
	window.onbeforeunload = function(e) { 
		if( exit == true ) { 
			exit = false;
			setTimeout("window.location.href = 'upsell-2-blow-her-away.php<?php echo trim($querystring); ?>';", 1);
			return ""; 
		} 
	}
</script>


<script type='text/javascript'>

$(document).ready(function() {
    $('div#popup').colorbox({width: '70%'});

});
</script>
<script>
	$( ".processlink" ).on("click", function(e){
		$('.processblock').hide();
	});
</script>
<script>
function submitForm() {
var el = $('#btn-one');
var el1 = $('#btn-two');
var el2 = $('#btn-three');
		
			if ( $('#option-one').prop('checked') ) {
				if (el.val() === "No Auto-ship") {
					$('#ocus').val('sYqwTaY3gRWc');
				} else {
					$('#ocus').val('9pqp9g84nNTe');		
				}
			} 
			
			else if ( $('#option-two').prop('checked') ) {
				if (el1.val() === "No Auto-ship") {
					$('#ocus').val('y6AuS9nE3v8X');
				} else {
					$('#ocus').val('TnxqWNQ6Cxha');		
				}
			} 
			
			else if ( $('#option-three').prop('checked') ) {
				if (el2.val() === "No Auto-ship") {
					$('#ocus').val('Uc6WYCQS7gEN');
				} else {
					$('#ocus').val('XXtA3p5QB2yh');		
				}
			} 
			
			return true;
		}

</script>

<!-- JavaScript jQuery code from Bootply.com editor  -->


<script type='text/javascript'>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>


</body>

</html>