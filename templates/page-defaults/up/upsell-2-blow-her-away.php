<?php
//PageTypes dictate what pixels are bing fired, options should be limited to:
/*
  1. vsl
  2. wsl
  3. assessemnt
  4. order
  5. onepage
  6. step1, step2, step3
  7. up1, up2, up3, up4
  8. dn1, dn2, dn3
  9. receipt
*/
$_SESSION['pageType'] = 'up2';

$next = '/up/upsell-testosterone';
$pid1 = '24';
$pid2 = '734';

$product = $products['products'][$pid1];
if(isset($_SESSION['core']) && $_SESSION['core']) {
	$product = $products['products'][$pid2];
}

$retail = $product['product_retail'];
$just = $product['product_price'];
$supply = $product['product_month'];;
$save = savedAmt($product['product_retail'], $product['product_price']);
$perbottle = perBottle($product['product_price'], $product['product_qty']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php template("includes/header"); ?>
		<title><?php echo $company['name']; ?> - blow Her Away</title>

        <style>
            body {
                background-color: #000;
            }

            h2 {
                line-height: 1.2;
            }

            .hide {
                opacity: 0;
                display: none;
                visibility: none;
                transition: all 200ms ease-in-out;
            }

            .show {
                opacity: 1;
                display: inherit;
                visibility: unset;
                transition: all 200ms ease-in-out;
            }

        </style>
    </head>

<body>

<div class="wsl container container-vsl mx-auto py-8">
		<div class=" mx-1">
            <section>
            <?php
                $current_step = 2;
                template('includes/step_bar', null, $current_step);
            ?>
            </section>

			<div class="bg-white rounded p-3 md:p-5 lg:p-10 mt-6">
				<div class="flex flex-col w-full mb-6">
					<h1 class="text-red-600 text-5xl text-center"><strong>BLOW HER AWAY</strong></h1>
					<h2 class="text-red-600 text-3xl text-center">By Shooting Powerful LOADS of CUM Up To <strong>4X&nbsp;BIGGER!</strong></h2>
				</div>
			
				<h3 class="text-2xl text-center mb-6">
				"You’ll Leave Your Girl <strong>Shocked</strong> And Begging For MORE… When You Drench Her With A Shockingly <strong>HUGE LOAD</strong> To Finish Off The Night…
				<br>
				<br>
				And You’ll Surprise Yourself When You Feel Significantly <strong>Longer</strong> And <strong>More Intense</strong> Orgasms… That Shoot Up Your Spine, Down Your Legs, Into Your Toes And Throughout Your Entire Body!”
				</h3>

				<div class="flex flex-col w-full">
					<p>Hey it's Ryan Masters again...</p>
					<p>And I’ll tell you first hand, the <strong>last thing</strong> you want when you’ve got a girl really worked up and horny because of how thick and hard your cock is…</p>
					<p>Is to have a <strong class="text-red-600">weak finish</strong>… </p>
					<p>Any famous actor will tell you, it’s how you <strong>END</strong> the show that matters… </p>
					<p>That’s what people are going to remember.</p>
					<p>And when your girl is begging for you to finish inside her (or in her mouth… or on her tits… or anywhere else) she’s expecting a BIG FINISH from you!</p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				"The 2 BIG REASONS Why Women Love BIG LOADS So Much…"
				</h2>

				<div class="flex flex-col w-full">
					<p><strong>REASON #1:</strong> First, big loads are the ULTIMATE sign of <strong>masculinity.</strong></p>
					<p>When a woman decides to sleep with a you… whether it’s a hookup or her husband of 25 years… she’s going to get turned on by certain <strong>genetic factors</strong> that tell her you’re good “father material” and will produce strong kids…</p>
					<p>And she’s going to be more attracted, loving and loyal towards you…</p>
					<p>And even if she doesn’t want kids…she’s STILL going to look for these same factors...</p>
					<p>And OBVIOUSLY a huge load size is a big indicator of your strength and reproductive power as a man… because a big load is way MORE LIKELY to produce kids…</p>
					<p><strong>REASON #2:</strong> The SECOND reason women LOVE big loads… is because they see it as a sign of how much you like them… and how turned on you are by them.</p>
					<p>If your load is small, she’s going to think you’re not into her… or you don’t love her…</p>
					<p>Or WORSE… that you’re thinking about other women… or even cheating on her!</p>
					<p>This may sound extreme, but this is EXACTLY how women think!</p>
					<p>So big loads are <strong>very</strong> important.</p>
					<p>And perhaps the <strong>best reason</strong> of all to shoot bigger loads…</p>
					<p>Is because BIG LOADS will give <strong><u>YOU</u></strong> more intense, longer orgasms for yourself (more on this in just a second)…</p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				“Women Don’t Just Love HUGE LOADS… They CRAVE And OBSESS Over Them…”
				</h2>

				<div class="flex flex-col w-full">
					<p>Here’s the <strong>TRUTH</strong> about what women REALLY think about load size… </p>
					<p>One recent survey done by BlueLight found that <strong>76.5% want BIG LOADS</strong> instead of small loads.</p>
					<p>And here’ are some of the <strong>shocking reasons</strong> why women say they love BIG LOADs…</p>
				</div>

				<div class="flex flex-col w-4/5 text-center my-5 mx-auto">
					<p class="w-full pb-1 text-xl md:text-2xl"><strong>BIG LOAD CONFESSION #1:</strong></p>
					<p class="w-full pb-5 mb-3 text-lg text-gray-500"><em>"I love big loads because I feel like I really got the guy off. <strong>I just feel so satisfied</strong> after seeing that it makes me feel like the sexiest woman alive!"</em></p>
					<p class="w-full pb-1 text-xl md:text-2xl"><strong>BIG LOAD CONFESSION #2:</strong></p>
					<p class="w-full pb-5 mb-3 text-lg text-gray-500"><em>"I NEED my guy to shoot a big load in order for me to orgasm. I just find it so <strong>incredibly</strong> hot to see him do it. It's not the end of the world if his load isn't big, it's just a <strong>little disappointing.</strong>"</em></p>
					<p class="w-full pb-1 text-xl md:text-2xl"><strong>BIG LOAD CONFESSION #3:</strong></p>
					<p class="w-full pb-5 mb-3 text-lg text-gray-500"><em>“My husband has average sized loads that are easy to swallow, but every once in a while his cock will just keep shooting it out and shooting it out. A few times he's <strong>filled my mouth to overflowing</strong> and I had to start swallowing before he was even done cumming. It was <strong>sexy as heck!</strong>”</em></p>
					<p class="w-full pb-1 text-xl md:text-2xl"><strong>BIG LOAD CONFESSION #4:</strong></p>
					<p class="w-full pb-5 mb-3 text-lg text-gray-500"><em>“Whenever he shoots out only a little, it's <strong>totally anticlimactic</strong>. Like, is that all? The size and the quality of his load is really important to me.”</em></strong></p>
				</div>

				<div class="flex flex-col w-full">
					<p>Frankly, I was shocked to hear these stories…</p>
					<p>I never knew how IMPORTANT this was to women…</p>
					<p>Or that it turned them on SO MUCH…</p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				“If You Cum Inside Her, BIGGER Loads Can Trigger BIGGER Orgasms Too…”
				</h2>

				<div class="flex flex-col w-full">
					<p>Many women like their man to finish inside them… 
					<p>And vagina has more nerve endings than any other area of a woman’s body… </p>
					<p>So when you cum inside her… she’s going to feel it <strong>A LOT!</strong></p>
					<p>If your load is BIG and shoots out HARD… it will create an <strong>intense</strong> feeling for her… and she will feel like you’re REALLY turned on by her… </p>
					<p>This can trigger <strong>BIGGER and LONGER</strong> orgasms inside her…</p>
					<p>And the <strong>BEST part</strong> of shooting a big load is the incredible pleasure <strong><u>YOU</u></strong> will feel when you orgasm now…</p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				“Just Imagine Doubling, Tripling Or Even QUADRUPLING The <strong>Length</strong> AND The <strong>Intensity</strong> Of Your Orgasms!”
				</h2>

				<div class="flex flex-col w-full">
				<p>The <strong>longer</strong> you cum and the <strong>more</strong> you come… the longer your body will stay in <strong>“orgasm mode”</strong> when you finish…</p>
				<p>Just imagine feeling <strong>lightning bolts</strong> of pleasure shoot down your cock…</p>
				<p>Up your spine…</p>
				<p>Through the muscles in your legs… and into your toes…</p>
				<p>It feels fucking incredible…</p>
				<p>I guarantee, you have never felt <strong>ANY</strong> orgasm like this before…</p>
				<p>Until you felt on orgasm with a SUPERSIZED LOAD!</p>
				<p>And BIG LOADS will also make you look and feel like more of a <strong>MAN…</strong> </p>
				<p>You’ll have more <strong>CONFIDENCE</strong>…</p>
				<p>You’ll know you’re performing at the TOP of your game…</p>
				<p>And you’ll know other women are talking about you… and your performance in bed…</p>
				<p>How they’d never seen… or FELT… anything like it before…</p>
				<p>And how other men just <strong>can’t measure up!</strong></p>
				<p>Which means she’s going to chose YOU over other men…</p>
				<p>Stay deeply loving, loyal and committed to you.</p>
				<p>And that’s the reason male porn stars get paid the <strong>big bucks</strong> to shoot BIG LOADS in porn movies that millions of people are going to watch...</p>
				<p>Because EVERYONE loves big loads.</p>
				<p>Women love them… and men want to achieve them!</p>
				<p>However, recently there’s been a <strong class="text-red-600">BIG CRISIS</strong> threatening your load size… </p>	
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				Over The Last 25 Years, The Average Man’s Healthy Load Size Has <strong>Dropped In <u>HALF</u>!</strong>
				</h2>

				<div class="flex flex-col w-full">
				<p>According to a research study published in the Wall Street Journal… </p>
				<p class="w-full pb-3 centered">“Today’s man has less than <strong>HALF</strong> the semen volume that a 
				man the same age had back in 1989...”</p>
				<p>Is so bad… and some men’s semen volume is <strong class="text-red-600">SO LOW…</strong> that they are unable to father children due to infertility… and this has become a SERIOUS concern world-wide.</p>
				<p>Scientists now know WHY this is happening…</p>
				<p>See, due to <strong>changes in our environment</strong> and the food we eat… toxins are now entering our bodies that are robbing us of the nutrients needed to produce strong volumes of semen…</p>
				<p>It’s KILLING our load…</p>
				<p>And you DO NOT want to let yourself fall <strong>victim</strong> to this ugly, man-crippling risk…</p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				The Good News Is, There’s A EASY Way To Fix This And MULTIPLY Your Load Size Many Times Over!
				</h2>

				<div class="flex flex-col w-full">
					<p>Scientists have discovered a few powerful, rare, all-natural ingredients that not only improve semen volume… but can <strong>increase it up to 4X</strong> what it is now!</p>
					<p>Imagine next time you’re in bed with a girl… she’s begging you to cum inside her… </p>
					<p>And you fill her with the <strong>biggest</strong>, <strong>thickest</strong> and most <strong>powerful</strong> load you’ve ever shot…</p>
					<p>You feel it <strong>surge</strong> out of you… </p>
					<p>You know it’s <strong>HUGE</strong>…</p>
					<p>And you feel her pussy shake with <strong>pleasure</strong>… as she moans in <strong>ecstasy</strong>… </p>
					<p>She feels like you’re just SO <strong>turned on</strong> by her… </p>
					<p>And feels like you’re such a <strong>MAN</strong> for cumming so MUCH inside her…</p>
					<p>You’ve now got a VERY POWERFUL tool to give women <strong>intense pleasure</strong> during sex… </p>
					<p>And any time you want, you can BLAST a big load… and leave her gasping in a pool of pleasure…</p>
					<p>And the second she gets home, she’s going to call her hot girlfriends… and tell them exactly what happened… how good you were… how HOT the sex was… </p>
					<p>And once word gets out… you’re going to start getting A LOT <strong>more attention</strong> from women…</p>
					<p>Maybe even find yourself in the middle of a <strong>threesome</strong>… or a love triangle too… </p>
					<p>It wouldn’t be the first time I’ve seen it happen!</p>
					<p>Because most men just can’t perform like this… and most women have never seen anything like this before…</p>
					<p>In fact, most girls just don’t think it’s POSSIBLE for a guy to cum to like this…</p>
					<p>And once you do this one… two… three times in bed with women… and it starts to become the norm…</p>
					<p>You’re going to feel A LOT more <strong>confidence</strong> in bed…</p>
					<p>Even when you’re just hanging out at a bar… or just making eye contact with a cute girl… you’re going to feel more confident… and women are going to sense it too… </p>
					<p>They can just TELL you’re going to be <strong>good in bed</strong>…</p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				These Rare “Genesis” Ingredients Will Make Your Load&nbsp;HUGE…
				</h2>
				

				<div class="flex flex-col w-full">
					<div>
					<img class="float-right mb-5 ml-5 w-full mx-auto md:w-1/2" style="max-width: 350px;" src="https://s3.amazonaws.com/5gmale/male-repro.jpg" alt="male reproductive diagram" />
					<p class=" pb-3">These <strong>“Genesis”</strong> ingredients are the ingredients that help your body create more semen.</p>
					<p class=" pb-3">If your body is lacking these ingredients, then your load size can a FRACTION of what it could be (<strong class="text-red-600">as low at 10%</strong>)… </p>
					<p class=" pb-3">Resulting in a <strong>measly dribble</strong> when you finish…</p>
					<p class=" pb-3">Once the “Genesis” ingredients enter your body… and are absorbed into your blood steam… they are then used by your testicles to fuel <strong>MASSIVE semen production</strong>…</p>
					</div>
				<p>This creates a HUGE reservoir of cum… that is ready to blast out of you at any second… with MAXIMUM <strong>volume</strong> and <strong>force</strong>…</p>
				<p>A load SO BIG it will leave any girl drenched… in a daze of <strong>pure shock and satisfaction</strong>…</p>
				<p>And you’ll feel like a fucking <strong>super hero!</strong></p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				And Now, This Pill Will Even Enhance How Good Your Cum TASTES Too…
				</h2>

				<div class="flex flex-col w-full">
				<p>We found through multiple studies and surveys that women love it when you cum in their mouths… and so they want your cum to TASTE GOOD!</p>				
				<p>When your cum tastes good… women are more likely to want to give you a blow job… and way more likely to want to swallow your load when you cum...</p>				
				<p>And good tasting cum is just a basic courtesy – it’s like wearing deodorant during sex!</p>				
				<p>That why we added a new, simple combination of ingredients to greatly improve the <strong>way your load TASTES</strong> in her mouth… leaving it sweet… and even “delicious” as some women say…</p>				
				<p>It’s the ultimate <strong>oral sex booster</strong> and just one more thing you can do to put yourself on top of her “best sex” list… <strong>miles ahead</strong> of the other guys she’s been with… </p>				
				<p>Leaving her <strong>clinging</strong> to you… and begging for more… because the experience you provide is just that damn GOOD in bed!</p>					
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				Just Check Out These <strong>POWERFUL</strong> Results…
				</h2>

				<section>
				<div class="text-center my-3">
				Here are some the fast, powerful results you can see in <strong>as little as 30 days</strong>…
				</div>
				<div class="flex w-full justify-center mb-7">
				<img class="mx-auto" src="https://s3.amazonaws.com/5gmale/natural.jpg" alt="results chart"/>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				<strong>100% Natural</strong>. NO Prescription Needed!
				</h2>
				<div class="flex w-full justify-center text-center">
				ALL NATURAL. Non-GMO, Gluten FREE, GMP certified and more…
				</div>
				<div class="flex w-full justify-center mb-7">
				<img class="mx-auto" src="https://s3.amazonaws.com/5gmale/powerful.jpg" alt="ease of use images" />
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				Secure Your Special <strong>“Members Only”</strong>&nbsp;Discount…
				</h2>
				</section>

				<div class="flex flex-col w-full">
				<p>Volumizer&trade; is a “high end” product and is for serious men only… </p>
				<p>It normally sells for $<?php echo $retail; ?> retail.</p>
				<p>But today, because you’re a new member, you’re going to get a one-time-only discount…</p>
				</div>
				<div class="flex flex-col w-full text-center my-7">
				<p class="w-full pb-3 text-xl md:text-2xl">And you’re only going to pay just $<?php echo $just; ?></p>
				<p class="w-full pb-3 text-xl md:text-2xl"><strike style="color:gray;">Normally: $<?php echo $retail; ?></strike> &nbsp;  <strong class="text-red-600">Today Just: $<?php echo $just; ?></strong></p>
				</div>
				<div class="flex flex-col w-full">
					<p>That’s more than <strong>HALF OFF</strong> the price! </p>
					<p>But this discount is <strong>ONLY available</strong> on this page, right here, <strong><u>right now</u></strong>.</p>
					<p>Once you leave this page, this discount is <strong>gone for <u>GOOD</u></strong>.</p>
					<p>You cannot email us… or call… or visit any page on our website to get this discount again.</p>
					<p>You will ONLY find it on this webpage here.</p>
					<p>If you choose to give this deal up and come back another time… you will be forced to pay <strong>full price</strong> like every other man.</p>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				Try It Out For 90 Days On Me <strong>I <u>GUARANTEE</u> You’ll Love It</strong>…
				</h2>

				<section>
					<div class="flex flex-wrap">
						<div class="w-full md:w-1/3 mb-4">
						<img class="mx-auto" src='https://s3.amazonaws.com/5gmale/90-guarantee.jpg' id='guarantee-image-2' alt="guarantee emblem" />
						</div>
						<div class="w-full md:w-2/3">
						<p>Every man I’ve shared this with has LOVED shooting bigger loads… the excitement it gives women… and the more intense orgasms you will feel for YOURSELF.</p>
						<p>I am <strong>so convinced</strong> that you’ll love Volumizer that I’ll let you try it for 90 full days (that’s THREE whole months!)…</p> 
						</div>
					</div>
				</section>

				<div class="flex flex-col w-full">
				<p>And if you’re not crazy about it, just contact my support team and you’ll get a FULL, instant refund. No questions asked and no hassles.</p>
				<p>There’s no way I could afford to make a promise like this if it didn’t work every bit as well as I say it does.</p>
				</div>
				<h2 class="text-red-600 text-3xl text-center my-11">
				<strong>WARNING:</strong> Very Limited Supply Left! 
				</h2>
				<p class="flex justify-center text-center text-lg md:text-xl">
				Due to high demand, there is very limited supply left.
					</p>

				<div class="flex flex-wrap justify-center items-center w-full border border-black p-4 my-5 lg:w-2/3 mx-auto text-xl">
					<div class="mr-2 font-bold">UPDATE:</div>
					<div class="flex flex-nowrap whitespace-nowrap items-center">There are <span class="bg-yellow-400 py-1 px-2 mx-2 font-bold underline">only 21 bottles</span> left</div>
				</div>
				<h2 class="text-red-600 text-2xl md:text-3xl text-center my-11">
				<strong>Here's What To Do Next:</strong>
				</h2>
				
				<div class="flex flex-col w-full text-center">
				<p>Just choose one of the three, easy discount options by clicking below… </p>
				<p>(The more you get, the more you save!) </p>
				</div>

				<section class="processblock">
						<div class="flex flex-col w-full md:mx-auto">
							<div class="flex flex-wrap md:flex-nowrap justify-between bg-yellow-50 border border-orange-400 border-4 sans">
								<div class="flex flex-col justify-between p-3 w-full md:w-auto text-center md:text-left">
									<div class="text-lg text-orange-500 font-semibold">RECOMMENDED DISCOUNT</div>
									<div class="text-3xl text-black font-extrabold my-2"><?php echo $supply; ?> MONTH SUPPLY</div>
									<div class="flex flex-wrap justify-around md:justify-between text-sm">
										<div><span class="text-gray-400 line-through">Retail Price: $<?php echo $retail; ?></div>
										<div><span class="text-black">You Pay Just $<?php echo $just; ?></span></div>
									</div>
									<div class="text-2xl mt-2 text-red-500 font-semibold">You Save $<?php echo $save; ?> Today!</div>
								</div>

								<div class="p-3 text-center bg-yellow-100 w-full md:w-auto">
									<p class="text-green-400 font-semibold mb-4 text-lg">JUST $<?php echo $perbottle; ?> PER BOTTLE</p>
									
									<a href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up.php?pid=<?= $product['product_id']; ?>&next=<?= $next; ?>"
										class="cta-link"
										id="upsell-buy" 
										class="processlink clickable" 
										 
										onclick="exit=false;">
											<button class="cta-button">Secure My Discount</button>
									</a>
									<p class="percentoff mt-4"><span class="text-red-400 font-semibold">58% OFF</span> <span class="text-green-400 font-semibold"> + FREE SHIPPING</span></p>
								</div>

							</div>
						</div>
					</section>

				<div class="flex w-full justify-center py-7">
                <div class='text-center px-5 split-non-buy processlink text-gray-500 text-sm'><a href="//<?php echo $_SERVER['HTTP_HOST']?>/dn/downsell-3" class="underline clickable" onclick="exit=false;">Skip This</a> - Yes, Ryan, I understand this deep discount is only available on this page and once I leave it will be gone for good. Please give my discount away to another man.</div>
				</div>
				<div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-10 pt-3 sans uppercase"> <?php echo $company['name']; ?> </div>
			</div>
		</div>
</div>


<?php
	// declare modal variables (requires basic_modal.js)
	$modal_id = 'exitModal';
	$max_width = 'md';
	$modal_title = "WAIT! DO NOT LEAVE THIS PAGE!";
	$modal_body = '
	<div class="modalsubheader text-center my-2">IT COULD CAUSE ERRORS IN YOUR ORDER</div>
	<div class="text-sm text-center my-2">Do not hit the back button or close your browser.
	<br>Click <span class="font-bold">"FINISH CUSTOMIZING MY ORDER"</span> below and <span style="text-decoration: underline;font-weight:bold;">make your decision on this page</span>.</div>
	';
	$modal_footer = '<button id="modalbutton" type="button" class="modalbutton w-full bg-blue-600 p-3 rounded text-white">FINISH CUSTOMIZING MY ORDER</button>';
	modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer, $max_width);
?>
<?php exitIntent("includes/exitIntent", 'exitModal'); ?>


<script src="//<?php echo $_SERVER['HTTP_HOST'];?>/public/js/cta-buttons.js" type="text-javascript"></script>
<script type='text/javascript'>
    document.addEventListener('contextmenu', event => event.preventDefault());
		document.querySelector(".processlink").addEventListener('click', function(e) {
      document.querySelector('.processlink').classList.add('disabled');
    });
</script>


</body>
<?php if ($site['debug'] == true) {
	// Show Debug bar only on whitelisted domains.
	template('debug', null, null, 'debug');
} ?>
</html>