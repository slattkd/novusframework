<?php
error_reporting(0);
// this affiliate is naughty
if ($_GET['a'] == '1283') {
	http_response_code(404);
	die;
}
session_start();
//unset($_SESSION['vwovar']);
$_SESSION['o'] = $_GET['o'];
$_SESSION['r'] = $_GET['r'];
$_SESSION['affid'] = $_GET['a'];
$_SESSION['blog'] = $_GET['blog'];
$_SESSION['post'] = $_GET['post'];

$_SESSION['vwovar'] = '';

$querystring = "";
if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
	$querystring = "?" . $_SERVER['QUERY_STRING'];
}

date_default_timezone_set("America/New_York");

$arr_browsers = ["Firefox", "Chrome", "Safari", "Opera", "MSIE", "Trident", "Edge"];
$agent = $_SERVER['HTTP_USER_AGENT'];

$user_browser = '';
foreach ($arr_browsers as $browser) {
	if (strpos($agent, $browser) !== false) {
		$user_browser = $browser;
		break;
	}
}

$videoid2 = 'kLl4EmM5IQiVXJmG';
$videoid = '4s1zPOYQz7PkCfgF';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<?php template("includes/header"); ?>
        <title>5GMALE - Special Discount</title>

	<style>
		.letter-body {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			background-image: url(//5gm.s3.amazonaws.com/bg/paper-800w.jpg);
			background-size: contain;
			background-repeat: no-repeat;
			width: 100%;
			height: 560px;
			z-index: 0;
		}
	</style>
</head>

<body class="bg-black"">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=" https://www.googletagmanager.com/ns.html?id=GTM-T7RRXPJ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div class="container container-vsl mx-auto py-8 sans" style="max-width: 880px;">
		<div class="content mx-1 bg-white rounded border p-3 md:p-6">
			<div class="flex justify-center text-center font-bold text-3xl">
				WAIT! Before You go...
			</div>
			<div class="flex justify-center text-center text-4xl text-red-600 my-5">
				Here Are The 5 Erection “Super Foods” Dave Discovered In The Jungles of Vietnam…
			</div>
			<div class="flex justify-center text-center text-3xl my-5 condensed">
				These Foods Can Quickly And Easily Get You Harder, Thicker Erections… That Stay Hard For HOURS!
			</div>

			<!-- video section -->
			<section id="video-block">

				<div id="vidalytics_embed_<?php echo $videoid; ?>" style="width: 100%; position:relative; padding-top: 56.25%;"></div>

				<script type="text/javascript">
					(function(v, i, d, a, l, y, t, c, s) {
						y = '_' + d.toLowerCase();
						c = d + 'L';
						if (!v[d]) {
							v[d] = {};
						}
						if (!v[c]) {
							v[c] = {};
						}
						if (!v[y]) {
							v[y] = {};
						}
						var vl = 'Loader',
							vli = v[y][vl],
							vsl = v[c][vl + 'Script'],
							vlf = v[c][vl + 'Loaded'],
							ve = 'Embed';
						if (!vsl) {
							vsl = function(u, cb) {
								if (t) {
									cb();
									return;
								}
								s = i.createElement("script");
								s.type = "text/javascript";
								s.async = 1;
								s.src = u;
								if (s.readyState) {
									s.onreadystatechange = function() {
										if (s.readyState === "loaded" || s.readyState == "complete") {
											s.onreadystatechange = null;
											vlf = 1;
											cb();
										}
									};
								} else {
									s.onload = function() {
										vlf = 1;
										cb();
									};
								}
								i.getElementsByTagName("head")[0].appendChild(s);
							};
						}
						vsl(l + 'loader.min.js', function() {
							if (!vli) {
								var vlc = v[c][vl];
								vli = new vlc();
							}
							vli.loadScript(l + 'player.min.js', function() {
								var vec = v[d][ve];
								t = new vec();
								t.run(a);
							});
						});
					})(window, document, 'Vidalytics', 'vidalytics_embed_<?php echo $videoid; ?>', 'https://quick.vidalytics.com/embeds/KwmJQD4K/<?php echo $videoid; ?>/');
				</script>

			</section>

			<div class="flex flex-col w-full pt-12 px-8 serif" style="position: relative;">
				<div class="letter-body hidden md:block"></div>
				<div class="flex flex-col p-3 text-xl" style="z-index: 5; margin-top: 4rem;">
					<p class="text-center mb-3">Hey, I’m Ryan Masters, the researcher whose been working with Dave…</p>

					<p class="text-center mb-3">A couple years ago, I was looking online for some studies… </p>

					<p class="text-center mb-3">When I came across a video of a guy talking about how he could stay hard for hours and have all this sex all the time at a really old age and not use <strong>ANY prescription pills</strong>.</p>

					<p class="text-center mb-3">At first I thought he must be <strong>lying</strong>!</p>

					<p class="text-center mb-3">Yet as I continued watching, I became so <strong>intrigued</strong> with what I heard, that I ended up getting in touch with him.</p>

					<p class="text-center mb-3">And that man was Dave – who is the oldest adult film star in the world!</p>

					<p class="text-center mb-3">And when I met Dave, I was <strong>blown away</strong>… </p>

					<p class="text-center mb-3">Because, genetically speaking, he’s really just an <strong>AVERAGE GUY</strong>…</p>

					<p class="text-center mb-3">In fact, he’s one of the most <strong>average</strong> guys I’ve ever seen!</p>

					<p class="text-center mb-3">It wasn’t until I looked as his diet and some of the foods he’s been eating, that I discovered what was <strong>really</strong> happening.</p>

					<p class="text-center mb-3">And how to REPLICATE IT in the bodies of men like you.</p>

					<p class="text-center mb-3">So you can have the absolute <strong>hardest cock</strong> in bed and the <strong>thickest, longest-lasting</strong> erections possible…</p>

					<p class="text-center mb-3">Erections that will leave your wife, girlfriend or any woman you sleep with totally satisfied, <strong>begging</strong> for more and <strong>raving</strong> about you to their girlfriends!</p>
				</div>


				<div class="flex flex-col w-full px-2 text-xl text-center">
					<p class="mt-4 mb-6 text-red-600 text-3xl">
						When These <strong>5 Specific Foods</strong> Dave’s Been Eating Get Into Your System, It’s Like Steroids For Your Cock…
					</p>

					<p class="mb-3 text-center">It can activate a <strong>primal hunger</strong> in you that you haven’t felt in years! </p>

					<p class="mb-3 text-center">Next time you see some hot girl at the supermarket, you’ll find yourself embarrassingly standing behind your shopping cart with your jacket draped over your cock… </p>

					<p class="mb-3 text-center">Because you don’t want everyone to see how rock hard you are!</p>

					<div class="">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/dave-vids.jpg" alt="dave adult movies">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">Dave Has To Stay Hard A LOT – He’s Shot Over 300 Movies And Still Have Time For His Girlfriends And Swinger Parties</div>
						</div>
						And Dave says, thanks to these foods, he’s having more sex in a <strong>single week</strong> than most men have in an entire year!
						<div class="mb-3"></div>
						He’s shooting up to <strong class="text-red-600">5 scenes per week</strong>...
						<div class="mb-3"></div>
						And he’s still dating and sleeping with other women, sometimes <strong class="text-red-600">multiple times</strong> per week…
						<div class="mb-3"></div>
						And he goes to swingers parties, where’s he’s probably having sex a few more hours each night…
						<div class="mb-3"></div>
						And then on top of <strong><em>all that</em></strong>…
						<div class="mb-3"></div>
						He still watches good ol’ internet porn a few times a week…!
						<div class="mb-3"></div>
						I Tracked Dave’s Sexual Activity For <strong>Six Months Straight</strong> And Found That He’s Having Sex Or Some Sort Of Release Anywhere From 18 To <strong>30 Times Per Week!</strong>
						<div class="mb-3"></div>
						The average guy Dave’s age is only having sex <strong>less than once a year</strong>.
						<div class="mb-3"></div>
						And he’s maintaining an erection for sometimes <strong class="text-red-600"><em>4-6 hours in a day!</em></strong>
						<div class="mb-3"></div>
						And the guy’s almost <strong>70 years old!</strong>
						<div class="mb-3"></div>
						And he’s doing it under <strong>serious pressure</strong>…
						<div class="mb-3"></div>
						The porn sets he films on are busy, hot and loud…
						<div class="mb-3"></div>
						He still watches good ol’ internet porn a few times a week…!
						</p>
					</div>

					<p class="mt-4 mb-6 text-3xl text-red-600 text-center">I Tracked Dave’s Sexual Activity For <strong>Six Months Straight</strong> And Found That He’s Having Sex Or Some Sort Of Release Anywhere From 18 To <strong>30 Times Per Week!</strong></p>

					<div class="flex flex-col text-center">
						<p class="mb-3 w-full text-center">The average guy Dave’s age is only having sex <strong>less than once a year</strong>.</p>
						<p class="mb-3 w-full text-center">And he’s maintaining an erection for sometimes <strong class="text-red-600"><em>4-6 hours in a day!</em></strong></p>
						<p class="mb-3 w-full text-center">And the guy’s almost <strong>70 years old!</strong></p>
						<p class="mb-3 w-full text-center">And he’s doing it under <strong>serious pressure</strong>…</p>
						<p class="mb-3 w-full text-center">The porn sets he films on are busy, hot and loud…</p>
						<p class="mb-3 w-full text-center">Dave has to <strong>get hard</strong> and he’s got to <strong>keep it hard</strong> for long stretches at a time…</p>
						<p class="mb-3 w-full text-center">Under <strong>hot lights</strong> with a bunch of sweaty men standing around…</p>
						<p class="mb-3 w-full text-center">And he’s got to do it the <strong>second</strong> the director yells the word “action”…</p>
						<p class="mb-3 w-full text-center">Or he’ll get fired. <strong>Seriously!</strong></p>
						<p class="mb-3 w-full text-center">Any mistakes he makes are going to show up in front of <strong>millions</strong> of people on the internet.</p>
						<p class="mb-3 w-full text-center">Yet despite all this…</p>
						<p class="mb-3 w-full text-center">Dave maintains some of the <strong>hardest</strong> erections people have ever seen…</p>
						<p class="mb-3 w-full text-center">And he does it almost <strong>on command</strong>…</p>
						<p class="mb-3 w-full text-center">And he’s staying hard, sometimes <strong>all day</strong>, just to get a shoot done on time…</p>

						<div class="">
							<p class="mb-3 text-center">
							<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
								<img src="/images/img1.png" class="border" alt="article headline about ED dependency among male performers">
								<div class="mb-3 text-center text-sm my-2 italic text-gray-400">Many Men In The Porn Industry Have Been Hospitalized And Forced To Retired Because of Dangerous Prescription Drugs</div>
							</div>
							Many Men In The Porn Industry Have Been Hospitalized And Forced To Retired Because of Dangerous Prescription Drugs
							<div class="mb-3"></div>
							And again, I’ve made sure of this, Dave <strong>DOES NOT</strong> take any prescription pills or do any injections to get hard…
							<div class="mb-3"></div>
							In fact, he’s <strong class="text-red-600">AGAINST IT!</strong>
							<div class="mb-3"></div>
							Dave’s seen too many guys end up in the <strong class="text-red-600">emergency room</strong> with <strong class="text-red-600">serious heart issues</strong>…
							<div class="mb-3"></div>
							<strong>Losing sensitivity</strong> in their dickspenis…
							<div class="mb-3"></div>
							Even becominge <strong>totally impotent</strong>…
							<div class="mb-3"></div>
							So many guys in the porn industry have performance problems from using these pills…
							<div class="mb-3"></div>
							That a lot of times, Dave has to come in and finish a scene, because some guy just can’t keep it up anymore…
							<div class="mb-3"></div>
							These pills can really, permanently <strong>mess you up</strong> and you want to <strong class="text-red-600">AVOID</strong> them!
							<div class="mb-3"></div>
							The <strong>good news</strong> is, Dave’s got an <strong>incredible</strong> solution and it’s <strong>100% natural</strong>, so you don’t have to risk any of these <strong class="text-red-600">dangerous</strong> options.
							<div class="mb-3"></div>
							It works by activating your body’s own <strong>natural ability</strong> to generate rock hard erections… like back when you were 18…
							<div class="mb-3"></div>
							So you get them <strong>right</strong> when you want them…
							<div class="mb-3"></div>
							And you can do it without <strong class="text-red-600">harmful</strong> drugs or prescriptions…
							<div class="mb-3"></div>
							And it all goes back to these <strong>5 foods</strong> Dave’s been eating…
							</p>
						</div>
					</div>

					<p class="mt-4 mb-6 text-3xl text-red-600 text-center">Dave Accidentally Discovered These “Erection Super Foods” In The Jungles of Vietnam…</p>

					<div class="flex-flex-col w-full md:w-4/5 mx-auto my-4">
						<img class="" src="/images/new/kontum-vietnam.jpg" alt="landscape of vietnam">
						<p class="text-sm italic text-gray-400 mt-2 text-center">It Was Here That Dave First Discovered The 5 “Erection Super Foods”</p>
					</div>



					<div class="flex flex-col text-center">
						<p class="mb-3 w-full text-center text-xl">For 18 Long Months, Dave <strong class="text-red-600"><em>Fought For His Life</em></strong>, Under Heavy Rocket And Mortar Attacks From The Enemy…</p>
					</div>

					<div class="">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/bronzestar.jpg" class="" alt="dave bronze star">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">Dave Was Awarded A Bronze Star For His Bravery In Battle</div>
						</div>
						In the end, he and his men prevailed.
						<div class="mb-3"></div>
						<p>And only one man in Dave’s company was hurt and his injuries were minor.</p>
						<div class="mb-3"></div>
						<p>Dave was awarded a <strong>Bronze Star</strong> for his bravery in battle.</p>
						<div class="mb-3"></div>
						<p>Yet while he was stuck in the jungle, he was forced to eat some new and unusual foods…</p>

						</p>
					</div>

				</div>

			</div>
			<!-- end of clip paper background container -->

			<div class="text-center my-3 text-xl serif">
				<p class="mb-3 text-center">
				<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
					<img src="/images/xao-toi-black-white.jpg" class="border" alt="plate of Xao Toi">
					<div class="mb-3 text-center text-sm my-2 italic text-gray-400">This Is The Powerful, Erection Enhancing Dish Date Would Eat In Vietnam</div>
				</div>
				And this is where Dave discovered the dish that contains the <strong>5 Foods</strong> that have been providing him the <strong>jaw-dropping</strong> erections…
				<div class="mb-3"></div>
				And <strong>mind-blowing</strong> stamina...
				<div class="mb-3"></div>
				That keep him going for <strong>hours</strong>… all day… every day…
				<div class="mb-3"></div>
				The name of the dish Dave would eat, is called <strong>Xao Toi</strong>…
				<div class="mb-3"></div>
				And this dish contained many erection-enhancing benefits…
				</p>

				<div class="w-full flex flex-col pt-5">
					<p class="text-lg font-semibold">ERECTION SUPERFOOD #1</p>
					<p class="mt-4 mb-6 text-3xl text-red-600 text-center">The FIRST “Erection Superfood” Found Hidden In The Vietnamese Dish Xao Toi Is…</p>
				</div>

				<div class="flex flex-col">
					<div class="w-full my-3">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/vietnamese_garlic.jpg" class="border" alt="vietnamese garlic">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">The Garlic Found In Vietnam Is Extremely Potent And Can Improve Duration And Strength of Erections</div>
						</div>
						<strong>Garlic!</strong> Xao Toi is absolutely loaded <strong>garlic</strong>...
						<div class="mb-3"></div>
						<strong>Garlic</strong> is so popular in Vietnam that they actually named an entire island after it that they call the <strong>Kingdom of Garlic</strong>…
						<div class="mb-3"></div>
						The key ingredient in this type of garlic Dave was eating, is called <strong>allicin</strong>…
						</p>
					</div>
				</div>


				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/A-Garlic-Field-in-ly-son-island-vietnam-kingdom-of-garlic.jpg" class="border" alt="vietnamese garlic field">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">The Vietnamese Grow Their Powerful Garlic On A Special Island Nick Named “Kindom of Garlic</div>
						</div>
						<strong>Allicin</strong> helps keep the inside of your blood vessels and arteries clean, which can <strong><em>vastly</em></strong> improve blood flow to your penis…
						<div class="mb-3"></div>
						Which means you can get <strong>harder, longer lasting</strong> erections…
						<div class="mb-3"></div>
						Now Vietnamese garlic is different than the garlic you and I would normally eat…
						<div class="mb-3"></div>
						And in many ways, its considered much more <strong>potent</strong>…
						<div class="mb-3"></div>
						How <strong>potent</strong>?
						</p>
					</div>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/https---cdn.evbuc.com-images-17968977-60001499863-1-original.png" class="" alt="LA Bio Med logo">

						</div>
						<p class="mb-3 w-full">Well, one study done by <strong>LA Biomedical Research Institute</strong> at UCLA on mice…</p>
						<p class="mb-3 w-full">Found garlic was able to help <strong>clear out</strong> blood vessels so blood can <span class="bg-yellow-300 p-1"><strong>flow better</strong> to the body and to your penis</span>…</p>
						<p class="mb-3 w-full">Which is <strong>HUGE</strong>, if you want <span class="bg-yellow-300 p-1"><strong>harder</strong> and <strong>longer</strong> erections</span>…</p>
						<p class="mb-3 w-full">Another study at UCLA found that Garlic <strong>helped keep arteries clear in humans</strong>…</p>
						<p class="mb-3 w-full">Garlic also releases a <strong>powerful</strong> enzyme, which reduces the stress on blood vessels…</p>
						<p class="mb-3 w-full">And supports <span class="bg-yellow-300 p-1">blood to flow to your penis <strong>faster</strong> and to stay there for <strong>longer</strong></span>...</p>
						<p class="mb-3 w-full">Which means you can get hard <strong>easier</strong> and keep KEEP it hard…!</p>
						<p class="mb-3 w-full">There are tons of <strong>incredible</strong> testimonials out there about garlic and how it makes erections <strong>harder</strong> and <strong>longer</strong>…</p>
						<p class="mb-3 w-full">And garlic is just really good for your <strong>overall health</strong>, especially the <strong>health</strong> of your <strong>heart</strong>…</p>
						</p>
					</div>
					<p class="mb-3 w-full">I would say just go out and try to get your hands on some Vietnamese garlic right now, except there are a few reason you <strong>DO NOT</strong> want to do this… </p>
					<p class="mb-3 w-full"><strong>First</strong>, as we all know, garlic makes your breath smell <strong><em>really bad</em></strong> - and no girl is gonna want to get near you.</p>
					<p class="mb-3 w-full">The good news is, I’ve got a <strong>really good</strong> solution for this that I’ll tell you about in just a bit…</p>
					<p class="mb-3 w-full">And <strong>second</strong>, there’s an <strong>important vitamin</strong> you want take with garlic, .</p>
					<p class="mb-3 w-full">But before we get into that, let’s get into… </p>
				</div>


				<div class="w-full flex flex-col pt-5">
					<p class="text-lg font-semibold">ERECTION SUPERFOOD #2</p>
					<p class="mt-4 mb-6 text-3xl text-red-600 text-center">The SECOND “Erection Superfood” Found In The Dish Dave Started Eating Back In Vietnam Is...</p>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/Ginseng_benefits.jpg" class="border" alt="Ginsing root">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">Men Who Took Ginseng Reported Bigger, Stronger Erections And More “Sexual Satisfaction</div>
						</div>
						<p class="mb-3 w-full"><strong>Ginseng!</strong> Now Ginseng might not be as well-known as garlic, but it’s very popular in Vietnam…</p>
						<p class="mb-3 w-full">It’s grown in huge quantities in the Quang Nom province and Dave and his platoon ate this plant raw for months...</p>
						<p class="mb-3 w-full"><strong>Ginseng</strong> also happens to be another key ingredient in Xao Toi, the dish Dave ate in Vietnam…</p>
						<p class="mb-3 w-full">Now there have been some incredible discoveries about <strong>ginseng</strong> over the years…</p>
						<p class="mb-3 w-full">And how it can help make your erections <span class="bg-yellow-300 p-1"><strong>thicker</strong>, <strong>harder</strong> and more <strong>frequent</strong></span>…</p>

						</p>
					</div>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/JU_logo.jpg" class="" alt="Journal of Urology">

						</div>
						<p class="mb-3 w-full">In one double-blind, placebo-controlled study found that in 45 men who said they were suffering from “<strong>moderate to severe</strong> [performance issues]”…</p>
						<p class="mb-3 w-full">Reported <span class="bg-yellow-300 p-1"><strong>bigger, stronger erections</strong> and more “<strong>sexual satisfaction</strong>”</span> after taking ginseng… </p>
						<p class="mb-3 w-full">In another study this time with 60 men who said they suffered from issues with sexual performance…</p>
						</p>
					</div>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/asian-journal-logo.png" class="" alt="Asian Journal">

						</div>
						<p class="mb-3 w-full">Also said they experienced a <span class="bg-yellow-300 p-1"><strong>sudden surge</strong> in erection strength, penetration <strong>power</strong> and <strong>duration</strong> of erections</span> after taking ginseng</p>

						<p class="mb-3 w-full">And, to top it off, 5 studies on over 300 men have shown that ginseng can increase your sperm count, which means you can shoot <strong>bigger</strong> loads… </p>

						<p class="mb-3 w-full">Which is something most women <strong>love</strong> and bigger loads can give you <strong>longer</strong> more <strong>intense orgasms</strong>, which will <strong>FEEL</strong> great for you!</p>

						<p class="mb-3 w-full">Now there are some <strong>incredible</strong> success stories about ginseng out there, as you can see, but before you run out and buy some, I’ve got to <strong class="text-red-600 font-semibold">warn you</strong>…</p>

						<p class="mb-3 w-full">There are actually <strong>11 different types</strong> of ginseng out there that you can get and you need to make sure you take the <strong>right one</strong>… in the <strong>right amounts</strong>… at <strong>right time</strong>… </p>

						<p class="mb-3 w-full">Or else you might not get <strong>any results</strong> at all.</p>

						<p class="mb-3 w-full">I’ll tell you the <strong>exact</strong> right type of ginseng to get in <strong>just a second</strong>… </p>

						<p class="mb-3 w-full">But for now let’s keep moving and get to the <strong>third food</strong> in Dave’s dish in Vietnam…</p>
						</p>
					</div>
				</div>

				<div class="w-full flex flex-col pt-5">
					<p class="text-lg font-semibold">ERECTION SUPERFOOD #3</p>
					<p class="mt-4 mb-6 text-3xl text-red-600 text-center">The THIRD “Erection Superfood” Found In The Dish Dave Started Eating Back In Vietnam Is...</p>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/ginkgo-biloba-leaves-img.jpg" class="" alt="Ginko leaves">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">Ginko Can Help Blood Flow Faster To The Penis Which Can Help Give More Frequent, Faster Erections</div>
						</div>
						<p class="mb-3 w-full"><strong>Ginko leaves!</strong> Dave would sprinkle these leaves on top of his dish and he’d mix them in his tea…</p>
						<p class="mb-3 w-full">One study done by University of California found that ginkgo leaves can <strong>improve blood flow</strong> to your penis by expanding your blood vessels… </p>

						</p>
					</div>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/po_brand_a_masterlogo_1.png" class="border" alt="University of California logo">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">Second Study in UCSF</div>
						</div>
						<p class="mb-3 w-full">A second study found that an ingredient in ginko leaves, called <strong>terpenoids</strong>, can make your blood “less sticky”…</p>
						<p class="mb-3 w-full">Helping it flow <span class="bg-yellow-300 p-1"><strong>faster</strong> to your penis</span>… </p>
						<p class="mb-3 w-full">Which could help give you <span class="bg-yellow-300 p-1"><strong>more frequent</strong> and <strong>faster</strong> erections.</span>… </p>
						<p class="mb-3 w-full">Ginko leaves also releases <strong>nitric oxide</strong> into your blood, which can further <strong>strengthen</strong> blood flow…</p>
						</p>
					</div>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left -mt-4">
							<img src="/images/Columbia_University_Logo.jpg" class="" alt="Columbia University logo">

						</div>
						<p class="mb-3 w-full">A well known doctor, named Dr. Richard P. Brown, a professor at <strong>Columbia University</strong>, said… </p>
						<p class="text-gray-400 italic ml-3 mb-3">“[Ginko] leaf extract is being used to <strong>[improve performance]</strong> in men…
							Increasing the body's ability to achieve and <span class="bg-yellow-300 p-1"><strong>maintain an erection</strong></span> during sexual stimulation…
							<br>[It] also enhances the effects of nitric oxide…
							Which helps relax artery walls, allowing <span class="bg-yellow-300 p-1"><strong>more blood flow into the penis</strong></span>…
						</p>
						<p class="mb-3 w-full">And just in case Dr. Brown’s word isn’t enough… </p>
						<p class="mb-3 w-full">There are tons success stories out from guys who have used Ginko to get harder, longer-lasting erections…</p>
						<p class="mb-3 w-full">Now, before you run out and buy some ginkgo leaves… </p>
						<p class="mb-3 w-full">You’ll want to make sure you get a <strong>specific extract</strong> that has the highest percentage of both terpenoids and flavonoids…</p>
						<p class="mb-3 w-full">I’ll tell you why these two things are important…</p>
						<p class="mb-3 w-full">As well as the <strong>exact</strong> extract you want to use in just a bit…</p>
						<p class="mb-3 w-full">And now let’s get to the <strong>fourth food</strong> in Dave’s dish…</p>
						</p>
					</div>
				</div>

				<div class="w-full flex flex-col pt-5">
					<p class="text-lg font-semibold">ERECTION SUPERFOOD #4</p>
					<p class="mt-4 mb-6 text-3xl text-red-600 text-center">The FOURTH “Erection Superfood” Found In The Dish Dave Started Eating Back In Vietnam Is...</p>
				</div>

				<div class="flex flex-col">
					<div class="w-full">
						<p class="mb-3 text-center">
						<div class="image flex flex-col w-2/3 md:w-1/3 mx-auto md:mx-0 md:mr-3 md:float-left">
							<img src="/images/Ginger-Root.png" class="border mb-3" alt="Ginger root">
							<img src="/images/Dr%2BLindsey%2BGenesis%2BToday.jpg" class="" alt="Lindsey Duncan">
							<div class="mb-3 text-center text-sm my-2 italic text-gray-400">Lindsey Duncan</div>
						</div>

						<p class="mb-3 w-full"><strong>Ginger!</strong> Ginger is an extremely common ingredient in Vietnamese food.</p>
						<p class="mb-3 w-full">And naturopathic doctor and certified nutritionist Lindsey Duncan, from the Dr. Oz Show, says</p>
						<p class="mb-3 w-full">And a study at Aga Khan University <strong>Medical College</strong> found ginger may act as a vasodilator, <span class="bg-yellow-300 p-1"><strong>expanding</strong> your blood vessels to help blood flow <strong>faster</strong> to your penis</span>…</p>
						<p class="mb-3 w-full">Now again, before you run out and buy some fresh ginger or ginger extract…</p>
						<p class="mb-3 w-full">There are a few more things that you need to know…</p>
						<p class="mb-3 w-full">And before we get into that… </p>
						<p class="mb-3 w-full">Let me show you the <strong>fifth</strong> and <strong>final</strong> food Dave would eat…</p>
						<p class="mb-3 w-full">This one is actually not a food, but a drink, he’d have his meal… and one that he still drinks to this day…</p>
						</p>
					</div>
				</div>

				<div class="w-full flex flex-col pt-5">
					<p class="text-lg font-semibold">ERECTION SUPERFOOD #5</p>
					<p class="mt-4 mb-6 text-3xl text-red-600 text-center">The FIFTH And Final Food In The Dish Dave Started Eating Back In Vietnam Is...</p>
				</div>
<!-- stopped properly formatting and just adjusted current code -->
				<div class="w-full">
					<p class="mb-3 w-full">It’s <strong>green tea!</strong> You’ve probably seen all the amazing health benefits of <strong>green tea</strong> online, on TV or in magazines…</p>

					<div class="image-cont float-left pr-4 w-full md:w-1/3">
						<img class="mx-auto" src="/images/tea-leaves.jpg" alt="tea leaves">
					</div>

					<p class="mb-3 w-full">And green tea can also be really great at <span class="bg-yellow-300 p-1"><strong>enhancing erections</strong></span>… </p>

					<p class="mb-3 w-full">It contains any ingredient known as EGCG, which can be great at <strong>strengthening</strong> the blood vessels in your penis…</p>

					<p class="mb-3 w-full">And can also help more blood to flow to your penis, making it harder and keeping it hard…</p>

					<p class="mb-3 w-full">One Boston University School of Medicine study found anti-oxidant rich foods like green tea gave men stronger erections...</p>

					<div class="image-cont float-left pr-4 w-full md:w-1/3">
						<img class="mx-auto" src="/images/boston-univ.jpg" alt="boston university">
					</div>

					<p class="mb-3 w-full">Green tea also contains nitric oxide, which Dr. J Cartledge at St James's University Hospital says is the…</p>

					<p class=" ml-3"><em>“principle agent responsible for relaxation of penile smooth tissue”…</em></p>

					<p class="mb-3 w-full">In other words, it’s <span class="bg-yellow-300 p-1"><strong>main thing</strong> that gets you hard</span>.</p>

					<p class="mb-3 w-full">Drinking the right amount of green tea can have a HUGE impact on your erection strength and there are plenty of success stories out there to back it up…</p>
				</div>


				<div class="text-center">
					<p class="mb-3 w-full">And green tea can also be <strong>incredible</strong> for your overall health…</p>

					<p class="mb-3 w-full">One study done on over 15,000 men found that those who drink multiple cups of green tea a day not only <strong>live longer</strong>, but are more likely to have <strong>healthier hearts</strong>…</p>

					<p class="mb-3 w-full">Now great tea is pretty <strong>impressive</strong> and before run out and buy some…</p>

					<p class="mb-3 w-full">Lets recap all the <strong>5 foods</strong> Dave’s was eating in his meals in Vietnam real quick…</p>

					<p class="mb-3 w-full">We’ve got garlic, ginseng, ginko leaves, ginger and green tea…</p>

					<center><img src="/images/5g-ingredients.jpg"></center>
					<!--[show the image w arrows and labels pointing to each]-->
					<br>
					<p class="mb-3 w-full">And as you might have noticed… , each of those foods starts with the letter “G”… </p>

					<p class="mb-3 w-full">Which is why we call them <strong>“The “5Five G’s.”</strong></p>

					<p class="mb-3 w-full">And the power of <strong>“The 5 Five G’s”</strong> goes way beyond just a few simple foods…</p>

					<p class="mt-4 mb-5 text-red-600 text-3xl text-center">There Is Something Unique That Can Happen When The <strong>Right Ingredients</strong> Are Combined Together…</p>

					<p class="mb-3 w-full">First, the active ingredients in each of these foods, on it’s own, each works <strong>increase</strong> blood flow to the body and, of course, to the erectile tissue in the corpus cavernosum of your penis…
						<!--[IMAGE: medical erection image]-->
					</p>

					<p class="mb-3 w-full">This is what actually makes your penis hard by allowing your blood flow <strong>faster, easier</strong> and in <strong>larger quantities</strong> to the erectile tissue… </p>

					<p class="mb-3 w-full">This can help you naturally get erections <strong>faster</strong> and <strong>easier</strong> and they can be a heck of a lot <strong>harder</strong>… and can stay hard for <strong>longer</strong>…</p>

					<p class="mb-3 w-full">My team speculates that…</p>

					<p class="mt-4 mb-5 text-red-600 text-3xl text-center">The Five G’s Work As A Highly Efficient Team To <strong>Strengthen</strong> And <strong>Optimize</strong> Your Entire “Erection System”…</p>

					<p class="mb-3 w-full">They can help clean it out, improve it and remove any weaknesses…</p>

					<p class="mb-3 w-full">Until you’re getting the <strong><em>best erections possible!</em></strong></p>

					<p class="mb-3 w-full">The second thing we believe the 5Gs can do, is they may work together in a team to create what doctors call a <strong>“synergistic effect.”</strong></p>

					<p class="mb-3 w-full">A “synergistic effect” means that… </p>
				</div>


				<div class="text-center">
					<p class="mt-4 mb-5 text-red-600 text-3xl text-center" style="margin-top: 10px; margin-bottom: 10px;"> The Ingredients <strong>Multiply In Power</strong> When They Are Combined Together…</p>

					<p class="mb-3 w-full">And can sometimes add up to be <strong>TWICE as powerful</strong> as the original ingredients taken individually. <strong>Seriously!</strong></p>

					<p class="mb-3 w-full">This “synergistic effect” is <strong>well proven</strong> in the medical field, where world-class doctors and <strong>scientists</strong> have been using it for years to prescribe pills in a combination called a “cocktail”… </p>

					<p class="mb-3 w-full">Where the “cocktail” combines pills together to make them more powerful…</p>

					<p class="mb-3 w-full">Now I’ll bet by this point, you’re probably ready to make some of that Xao Toi dish Dave was eating and have a glass of green tea to go with it… </p>

					<p class="mb-3 w-full">But keep in mind…</p>

					<p class="mb-3 w-full">First, Dave ate this dish A LOT… 2… sometimes <u>3 times</u> a day…</p>

					<p class="mb-3 w-full">That’s <strong>A LOT</strong> of Vietnamese food to have to eat all day…</p>

					<p class="mb-3 w-full">And the other issue is finding the right ingredients…</p>

					<p class="mb-3 w-full">Because what you’ll find here in the US… is not always the same as what you’d find in Vietnam…</p>

					<p class="mb-3 w-full">When Dave first came back to the United States, he had a hard time find these foods and getting the right types…</p>

					<p class="mb-3 w-full">And the right types can sometimes be 3-4X more powerful than the <strong>wrong</strong> types…</p>

					<p class="mb-3 w-full">That’s why I’ve spent so long working with Dave… </p>

					<p class="mb-3 w-full">Calling tons of international resellers…</p>

					<p class="mb-3 w-full">Even calling up individual farms in Vietnam, where I’d speak to some lady’s son, where their family has owned the farm for generations…</p>
				</div>


				<div class="text-center">
					<p class="mb-3 w-full">And reviewing tons of tests done by third parties to confirm the purity of ingredients…</p>

					<p class="mb-3 w-full">I spent thousands of hours and <strong>thousands of dollars</strong> in my own money…</p>

					<p class="mb-3 w-full">To finding not just “good,” but the <strong>BEST</strong> ingredients possible… </p>

					<p class="mb-3 w-full">And not only that, my team and I went one step further…</p>

					<div class="image-cont float-left pr-4 w-full md:w-1/3">
						<img class="mx-auto" src="/images/test_machine.jpg" alt="lab testing">
					</div>

					<p class="mb-3 w-full">To figure out the best <strong>ratios</strong> to take these ingredients in…</p>

					<p class="mb-3 w-full">And the best <strong>times</strong> eat them…</p>

					<p class="mb-3 w-full">It was a lot of work…</p>

					<p class="mb-3 w-full">We had many sleepless nights and spent countless hours researching…</p>

					<div class="image-cont float-left pr-4 w-full md:w-1/3">
						<img class="mx-auto" src="/images/testing_machine2.jpg" alt="lab test machine">
					</div>

					<p class="mb-3 w-full">Yet in the end, it was worth it.</p>

					<p class="mb-3 w-full">We took all these ingredients we found… </p>

					<p class="mb-3 w-full">Brought them right here to the United States…</p>


					<p class="mb-3 w-full">Put it through an incredible process called <strong>spectroscopic testing</strong>…</p>

					<p class="mb-3 w-full">Which ensures all the ingredients are <strong>exactly</strong> what they should be...</p>

					<div class="image-cont float-left pr-4 w-full md:w-1/3">
						<img class="mx-auto" src="/images/gmp-cert.jpg">
					</div>

					<p class="mb-3 w-full">Then something called a C&amp;I evaluation…. </p>

					<p class="mb-3 w-full">Which ensures every ingredient is the highest level of <strong>potency</strong> and <strong>purity</strong>…</p>

					<p class="mb-3 w-full">Then three separate additional quality checks…</p>

					<p class="mb-3 w-full">And then a final on-site GMP certification…</p>
				</div>


				<div class="text-center">
					<p class="mt-4 mb-5 text-red-600 text-3xl text-center">We Put Into One <strong>All-Natural, Easy-To-Take Pill</strong>. It’s That Easy!</p>

					<div class="image-cont float-left pr-4 w-full md:w-1/3">
						<img class="mx-auto border" src="/images/small-pill.jpg" class="pill">
					</div>

					<p class="mb-3 w-full">Because we wanted to bring the power that Dave’s been using for years…</p>

					<p class="mb-3 w-full">To the guys out there like you, who can now benefit from it…</p>

					<p style="class="w-full mb-3 text-2xl"">Let Me Formally Introduce Myself…</p>

					<p class="mb-3 w-full">As I said before, name is Ryan Masters </p>

					<p class="mb-3 w-full">A team of some of the smartest, brightest people devoted to <strong>one thing</strong>… and one thing <strong>only</strong>… </p>

					<p class="mb-3 w-full">Finding a way to make your erections and your sexual performance so <strong>damn good</strong> it feels <strong>supernatural</strong>…</p>

					<p class="mb-3 w-full">And we call this potent combination of ingredients I’ve share with you here today 5G Male…</p>

					<p class="mb-3 w-full">This is the complete <strong>“done for you”</strong> solution...</p>

					<p class="mt-4 mb-5 text-red-600 text-3xl text-center">5G Male Is The <strong><u>ONLY</u></strong> All-Natural, Erection Enhancing, Stamina Increasing Formula, That Creates A <strong>Tidal Wave</strong> Of Blood Flow To The Corpora Cavernosa In Your Penis To Finally Give You Those Natural, Effortless, Rock Hard Erections, <strong>On Command</strong>…</p>

					<p class="mb-3 w-full">Erections <strong>exactly</strong> when you want them... and <strong>exactly</strong> when you should be having them… </p>

					<p class="mb-3 w-full">So that next time you’re with a girl, you go into the bedroom with <strong>complete confidence</strong>, knowing your performance will be <strong>top notch</strong>…</p>

					<p class="mb-3 w-full">And it’s all thanks to <strong>100% natural</strong> ingredients that are fresh, healthy and Non-GMO…</p>

					<p class="mb-3 w-full">So you can avoid those <strong class="text-red-600 font-semibold">dangerous</strong> pills and <strong class="text-red-600 font-semibold">expensive</strong> injections that could send you to the <strong class="text-red-600 font-semibold">emergency room</strong> with a serious heart issue… </p>

				<p class="mb-3 w-full">Or leave your penis <strong class="text-red-600 font-semibold">limp</strong> and <strong class="text-red-600 font-semibold">lifeless!</strong></p>

				<p class="mb-3 w-full">5G Male takes a <strong>very unique</strong> approach supporting your body’s natural flow of blood to your penis… </p>

				<p class="mb-3 w-full">And supporting your body’s natural ability to generate <strong>rock hard</strong> erections when you want them… <strong>any time</strong> you want… </p>

				<p class="mb-3 w-full">And that’s not all… </p>

				<p class="mb-3 w-full">Many men report that the 5Gs could actually make your <strong>flaccid hang</strong> better… </p>

				<p class="mb-3 w-full">And by that, I mean they say…</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center"> It Could Actually Make Your Dick <strong>Look A Bit Bigger</strong> While It’s Hanging There… </p>

				<p class="mb-3 w-full">What many guys don’t know, is that the men with the <strong>larger penis sizes</strong> are ones who are getting a literal “penis workout” while they sleep…</p>

				<p class="mb-3 w-full">It’s getting hard… going soft… getting hard… going soft… </p>

				<p class="mb-3 w-full">And when this is happening more frequently, don’t be surprised if your dick looks a little bit <strong>thicker</strong> and <strong>bigger</strong>… </p>

				<p class="mb-3 w-full">Especially when its flaccid and you’re just walking around the bedroom… </p>

				<p class="mb-3 w-full">And it’s because its getting more of a <strong>workout</strong> at night while you’re asleep…</p>

				<p class="mb-3 w-full">Now as you know by now, there are other options out there…</p>

				<p class="mb-3 w-full">Like prescription pills… like the little blue pill…</p>

				<p class="mb-3 w-full">But let’s face it,t… we all know that <strong>doesn’t</strong> fix the problem for good…</p>

				<p class="mb-3 w-full">And it poses serious risks to the health of your <strong>heart</strong>… </p>

				<p class="mb-3 w-full">And can even lead to loss of sensitivity in your penis…</p>
				<!--[show quote]-->

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center"> You’ve Seen The <strong>Health Risks</strong> All Over The Ads… And They’re NOT Good…</p>

				<div class="image-cont float-left pr-4 w-full md:w-1/3">
					<img class="mx-auto" src="/images/warning.jpg" alt="health risks warning">
				</div>

				<p class="mb-3 w-full">And, this prescription stuff is frickn’ <strong>expensive</strong>… up to $27.50 per pill!</p>

				<p class="mb-3 w-full">Another option men ask me about is testosterone injections… </p>

				<p class="mb-3 w-full">And what they don’t tell you is that testosterone is not usually a solution for a harder dick…</p>

				<p class="mb-3 w-full">And it <strong class="text-red-600 font-semibold">harms</strong> your body’s ability produce testosterone naturally on it’s own…</p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">Meaning you can get <strong class="text-red-600 font-semibold">dependently stuck</strong> on it…</p>

				<p class="mb-3 w-full">And these injections are <strong class="text-red-600 font-semibold">expensive</strong> too… up to <strong>$200 per injection</strong>… </p>

				<p class="mb-3 w-full">Which can add up to over a <strong>$1,000</strong> a month.…</p>

				<p class="mb-3 w-full">And doctors usually want you get <strong>2-3 months’</strong> worth…</p>

				<p class="mb-3 w-full">And there’s a lot of <strong class="text-red-600 font-semibold">lawsuits</strong> going on around this too…</p>

				<p class="mb-3 w-full">Many places that do these injections have been sued because of the <strong class="text-red-600 font-semibold">dangerous</strong> side effects they caused…</p>

				<p class="mb-3 w-full">And you don’t want to <strong>risk</strong> that… trust me…!</p>

				<p class="mb-3 w-full">And that’s why,… until now,… there haven’t really been any good options… </p>

				<p class="mb-3 w-full">Especially not any <strong>“all natural”</strong> options… </p>

				<p class="mb-3 w-full">That can support your bodies <strong>natural ability</strong> to get hard…</p>

				<p class="mb-3 w-full">This would really be the <strong>holy grail</strong> for men…</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center"> This Is Why 5G Male Is Such A <strong>Breakthrough</strong>…</p>

				<div class="image-cont float-left pr-4 w-full md:w-1/2">
					<img class="mx-auto" src="/images/logo%2Bmade%2Bin%2Busa.png">
				</div>

				<p class="mb-3 w-full">It’s not just another over-hyped, “too good to be true” mix of herbs you’d find at your local gas station… </p>

				<p class="mb-3 w-full">This is made <strong>right here in the US</strong>…

				</p>
				<p class="mb-3 w-full">There’s a huge problem going on in this world today…</p>

				<p class="mb-3 w-full">And that’s that a lot of these big companies are now making everything in China to save money…</p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">Even vitamins you take every day may be made in China…</p>
				<!--[show logos blurred]-->

				<p class="mb-3 w-full">And the <strong class="text-red-600 font-semibold">scary thing</strong> is, the Chinese government gives almost <strong>no oversight</strong> over these things…</p>

				<p class="mb-3 w-full">These guys can basically put <strong>ANYTHING</strong> they want in them - even if it’s not healthy!</p>

				<p class="mb-3 w-full">There is literally almost <strong class="text-red-600 font-semibold">ZERO regulation</strong> going on.</p>

				<p class="mb-3 w-full">A shocking story posted in the New York Times just a few months ago showed the FDA found that many well-known brands now make their stuff in China…</p>

				<div class="image-cont float-left pr-4 w-full md:w-1/3">
					<img class="mx-auto border" src="/images/nytimes.png">
				</div>

				<p class="mb-3 w-full">And they found many of these pills, even big name pills from GNC, were stuffed with fillers like ground up rice and house plants that did <strong>absolutely nothing</strong> for your health…</p>

				<p class="mb-3 w-full">And, much worse, many of the “sex enhancing” pills sold were found to contain <strong class="text-red-600 font-semibold">illegal doses</strong> of prescription drugs… and they don’t tell you about this on the packaging…</p>

				<p class="mb-3 w-full">And that’s why so many guys are ending up in the <strong class="text-red-600 font-semibold">hospital</strong> because of these things…</p>

				<p class="mb-3 w-full">The truth is, in today’s world, you really should not trust <strong>ANYTHING</strong> unless it’s made here in the US…</p>

				<div class="image-cont float-left pr-4 w-full md:w-1/2">
					<img class="mx-auto" src="/images/logo%2Bmade%2Bin%2Busa.png">
				</div>

				<p class="mb-3 w-full">And 5G Male is proud to be manufactured right here in the USA… </p>

				<p class="mb-3 w-full">And we also just wanted to bring back home to those jobs and not ship them off to China like everyone else is doing…</p>

				<p class="mb-3 w-full">Where they’re just going to put sketchy and potentially dangerous stuff in your supplements that can put your health at risk.</p>

				<p class="mb-3 w-full">So you’re probably wondering how to get your hands on the <strong>jaw-dropping</strong> power of 5G Male too…</p>
			</div>

			<div class="text-center">
				<p class="mt-4 mb-5 text-red-600 text-3xl text-center" style="margin-top:10px;"> Now Here’s The Reason We REFUSE To sell Sell <strong>5G Male</strong> Through Retail Stores… </p>

				<p class="mb-3 w-full">Retail stores never tell you that they mark up the price of their prices up A LOT!</p>

				<p class="mb-3 w-full">If we sold 5G Male through these stores, a bottle cost $150 to $160… possibly even more!</p>

				<p class="mb-3 w-full">I was worried that at that price, the men who really <strong>need this</strong> might not be able to afford it…</p>

				<p class="mb-3 w-full">So what we decided to do is… </p>

				<p style="class="w-full mb-3 text-2xl"">We Cut Out The Middleman And Decided To Sell <strong>Straight To You</strong>…</p>

				<p class="mb-3 w-full">Directly through the internet…</p>

				<p class="mb-3 w-full">You won’t have to get u to go to any store or have to ask some store clerk to get you product…</p>

				<p class="mb-3 w-full">And more importantly… </p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center">Cutting Out The Stores Allows Us To Drop The Price <strong>BIG TIME</strong>…</p>

				<p class="mb-3 w-full">Which means that today, you won’t have to pay the normal $160 “retail” price you would in stores…</p>

				<p class="mb-3 w-full">You won’t have to pay $140… or even $120…</p>

				<p class="mb-3 w-full">You’re going to get 5G Male PLUS for <strong>just $69.95</strong>…</p>

				<p style="text-align:center; color: green; font-size: 19px;">Normally $160 - TODAY JUST $69.95</p>

				<!--<a href="../agreement.php?e=&c=&r=&o=&a=&s=&campaign=&s2=&s3=&s4=&cr=&blog=&post=&sentemail=" target="_blank"><center><img src="/images/buy1.png" /></center></a>-->

				<center>
					<form accept-charset="UTF-8" action="order.php<?php echo trim($querystring); ?>" class="infusion-form" method="POST">
						<div class="infusion-field">
							<input class="infusion-field-input-container" id="inf_field_Email" name="email" type="text" placeholder="Enter Your Primary Email Address">
						</div>
						<input type="hidden" name="a" value="">
						<input type="hidden" name="s1" value="">
						<input type="hidden" name="c" value="">
						<input type="hidden" name="e" value="">
						<input type="hidden" name="o" value="">
						<input type="hidden" name="r" value="">
						<input type="hidden" name="s2" value="">
						<input type="hidden" name="s3" value="">
						<input type="hidden" name="s4" value="">
						<input type="hidden" name="cr" value="">
						<input type="hidden" name="campid" value="">
						<input type="hidden" name="campaign" value="">
						<input type="hidden" name="blog" value="">
						<input type="hidden" name="post" value="">
						<input type="hidden" name="sentemail" value="">

						<div class="infusion-submit flex justify-center my-5">
							<input type="image" name="infu_submit" id="infu_submit" class="w-auto mx-auto" src="/images/buy1.png" style="max-width: 450px; min-width: 300px">
						</div>
					</form>
				</center>

				<p style="text-align:center;">That’s Massive <strong class="text-red-600 font-semibold">50% OFF!</strong></p>

				<p class="mb-3 w-full"> And no, that’s NOT a payment plan… </p>

				<p class="mb-3 w-full">It’s just $69.95 <strong>period</strong>.</p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">NO taxes and NO hidden fees.</p>

				<p class="mb-3 w-full">All you have to do to get secure your bottle is just <strong>click the button above</strong> and see if you qualify.</p>

				<p class="mb-3 w-full">Now, there is some <strong>bad news</strong>…</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center">Unfortunately, There Is Only A <strong>Limited Supply</strong> Of 5G Male Left…</p>

				<p class="mb-3 w-full">Due to <strong>limited quantities</strong> of some of the ingredients we use we were only able to produce 3,500 orders in this batch…</p>

				<p class="mb-3 w-full">The last batch of 3,500 sold out in <strong>less than 20 days</strong>…</p>

				<p class="mb-3 w-full">So by the time you’re reading this, this batch may already be close to <strong>gone</strong>…</p>

				<p class="mb-3 w-full">So if you want to secure your order today, I recommend you place your order <strong>now</strong>…</p>

				<p class="mb-3 w-full">Because once we sell out… it can take 3… even 6 months to restock…</p>

				<p class="mb-3 w-full">Now I realize this is an inconvenience…</p>

				<p class="mb-3 w-full">And a lot of men will be <strong>locked out</strong>… and unable to order…</p>

				<p class="mb-3 w-full">And I’m not happy about that…</p>

				<p class="mb-3 w-full">So to help make up for this, I’ve decided to do three things…</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center"> I’m Going To Upgrade Your Order To 5G Male PLUS, Our Newest Version Of 5G Male, At <strong>No Cost</strong>…</p>

				<p class="mb-3 w-full">The retail value of 5G Male PLUS is $180, but I’m upgrading you for <strong>FREE.</strong></p>

				<p class="mb-3 w-full">Here are the impressive enhancements inside 5G Male PLUS…</p>

				<ul>
					<li>Contains a powerful vitamin, that is found to <strong>DOUBLE</strong> the power of the nitric oxide in garlic… </li>
					<li>Features a deodorized garlic to keep your breath fresh…</li>
					<li>Uses American Ginseng, which is <strong>healthier</strong> for your heart…</li>
					<li>Features a new, breakthrough ingredient called <strong>rhodiola rosea</strong>…</li>
				</ul>

				<p class="mb-3 w-full">What is rhodiola rosea?</p>

				<div class="image-cont float-left pr-4 w-full md:w-1/3">
					<img class="mx-auto" class="mx-auto" src="/images/rhodiola.jpg">
				</div>

				<p class="mb-3 w-full">If 5G Male works on your penis, <strong>rhodiola rosea</strong> works on the brain…</p>

				<p class="mb-3 w-full">This is important because your brain is the <strong>firing mechanism</strong> for your erections...</p>

				<p class="mb-3 w-full">Your brain is what tells your penis to <strong>get hard</strong>... </p>

				<p class="mb-3 w-full">And if making your brain get aroused faster and easier... </p>
			</div>

			<div class="text-center">

				<p class="mb-3 w-full">Flooding it with a chemical called <strong>dopamine</strong>… </p>

				<p class="mb-3 w-full">This can allow you to get <span class="bg-yellow-300 p-1">harder even <strong>quicker</strong> and more <strong>frequently</strong></span> too than the already-powerful 5G Male original version does…</p>

				<p class="mb-3 w-full"><strong>Rhodiola rosea</strong> has been a real <strong>breakthrough</strong>… </p>

				<p class="mb-3 w-full">The <strong>power</strong> of this plant was kept a <strong>secret</strong> until just a few years ago…</p>

				<p class="mb-3 w-full">When studies on it in Russian scientific journals were finally translated to English …</p>

				<p class="mb-3 w-full">Since then, many doctors have commented on it, including Dr. Philip R. Muskin,</p>

				<div class="image-cont float-left pr-4 w-full md:w-1/3 -mt-4">
					<img class="mx-auto" src="/images/Columbia_University_Logo.jpg" alt="columbia university">
				</div>

				<p class="mb-3 w-full">Who says rhodiola appears to be amazing at <span class="bg-yellow-300 p-1">“enhancing sexual function”</span>…</p>

				<p class="mb-3 w-full">And "improves satisfaction, pleasure, erections and response to orgasms"…</p>

				<p class="mb-3 w-full">In one study, done on 35 men, who said they were suffering from sexual performance issues…</p>

				<p class="mb-3 w-full">74% said they saw <span class="bg-yellow-300 p-1"><strong>significant improvement</strong></span> in sexual function after taking rhodiola…</p>

				<p class="mb-3 w-full">So you can see <strong>5G Male PLUS</strong> is a BIG upgrade and you’re getting that for <strong>FREE</strong>… </p>

				<p class="mb-3 w-full">And second, I’d like to give you $305.90 worth of FREE bonus gifts…</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center">I’ve Tapped My Personal Network Of Authors, Experts And Coaches And Got You Some Extra, <strong>FREE Bonus Gifts</strong> With Your Order Today…</p>

				<p style="text-align:center;font-size:25px;"> FREE BONUS GIFT #1: The Enhancement Bible… </p>

				<p class="mb-3 w-full">This is <strong>ONLY</strong> available to 5G Male buyers and it cannot be purchased <strong>anywhere</strong> else…</p>

			</div>

			<div class="text-center">
				<p class="mb-3 w-full">This book includes every tip, trick and technique we’ve developed to give you the absolute hardest, longest lasting erections possible while using 5G Male…</p>

				<p class="mb-3 w-full">Inside, you’ll discover… </p>

				<ul>
					<li>
						<p class="mb-3 w-full"><strong>The Secret to “Cycling.”</strong> This is technique a simply technique to better time your doses so you get the MAXIMUM power out of 5G Male. </p>

						<p class="mb-3 w-full">It essentially “tricks” your body into being more responsive to the formula this is a technique that professional body builders and professional athletes use to get even better, faster results from their supplements… </p>
					</li>

					<li>
						<p class="mb-3 w-full"><strong>The 14 “Booster” Foods</strong> to eat while 5G Male can you give those massive… long lasting erections. These 14 foods work on other areas of your body, increasing your sex-drive, orgasm strength and even the size of your load when you cum…</p>
						<p class="mb-3 w-full">

						</p>
						<p class="mb-3 w-full">These foods can also give you more energy in bed so you can go longer before you get tired…</p>
					</li>

					<li>
						<p class="mb-3 w-full"><strong>The “Danger List”</strong> of foods to avoid. These are foods that can damage your penis weaken your erections and kill your energy as a man. Avoid these foods at all costs!</p>
					</li>
				</ul>

				<p class="mb-3 w-full">This book is normally sells to members for $19.95, but you’re going to get it today for <strong>FREE</strong>!</p>

				<p style="text-align:center;font-size:25px;"> FREE BONUS GIFT #2: The Multiplier Method… </p>

				<p class="mb-3 w-full">Most doctors agree that the effects of ingredients, like those in 5G Male, can be <strong><em>even more effective</em></strong> when combined with the right exercise…</p>

				<p class="mb-3 w-full">And no, I’m not talking about going to the gym every day for hours on end…</p>

				<p class="mb-3 w-full">I’m just talking about a few, specific exercises that you can literally do in as little as 5 <strong>minutes a day</strong> - and they can make a <strong><em>massive difference!</em></strong></p>

				<p class="mb-3 w-full">We worked for years to put the power of 5G Male into a single pill...</p>

				<p class="mb-3 w-full">And we wanted to do the same thing here… </p>

				<p class="mb-3 w-full">So we studied the work of several leading urologists and doctors who specialize in cardio health… </p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">And we created a <strong>powerful</strong> combination of easy exercises… designed give you the <strong>MOST</strong> impact…</p>

				<p class="mb-3 w-full">There are just <strong>4 key exercises</strong> you can do…</p>

				<p class="mb-3 w-full">These will get you 80% of the way there and if you decide you’d like to go more <strong>in-depth</strong>, the advanced version of the workout can be done in <strong>just 25 minutes</strong>…</p>

				<p class="mb-3 w-full">You won’t need any fancy equipment… or any gym membership to do this…</p>

				<p class="mb-3 w-full">You can do it all <strong>right at home</strong>… </p>

				<p class="mb-3 w-full">These are all the shortest, most direct and <strong>powerful</strong> exercises you can do to <strong>multiply</strong> your sexual performance even more and even faster…</p>

				<p class="mb-3 w-full">And these exercises are not just great for your erections, they are also GREAT at <strong>burning fat</strong>… giving you more <strong>energy</strong> in bed… increasing your overall health… and making you <strong>feel better</strong> throughout the day…</p>

				<p class="mb-3 w-full">The <strong>“Multiplier Method”</strong> usually sells for $49, but today you’re going to get it for <strong>FREE</strong>…</p>

				<p class="mb-3 w-full text-2xl">FREE BONUS GIFT #3: The XXL Formula…</p>

				<p class="mb-3 w-full">This is the ultimate <strong>penis lengthening</strong> formula to get you real, long lasting <strong>size enhancement</strong>…</p>

				<p class="mb-3 w-full">If getting hard and staying hard is the <strong>most important</strong> thing in your sex life… </p>

				<p class="mb-3 w-full">Then <strong>increasing</strong> the size of your penis is easily the <strong>second</strong> most important thing you can do…</p>

				<p class="mb-3 w-full">Now I know a lot of men who have tried to do this… </p>

				<p class="mb-3 w-full">They tried all kinds of different exercises… and techniques… even pills… </p>

				<p class="mb-3 w-full">And they got <strong>no results</strong>.…</p>

				<p class="mb-3 w-full">I also know there are a lot of guys out there who think it’s not possible to increase the size of your penis…</p>

				<p class="mb-3 w-full">At least… not without hurting yourself.</p>

				<p class="mb-3 w-full">But the truth is, <strong>it IS possible</strong> and it can be done relatively <strong>quickly</strong>.</p>

				<p class="mb-3 w-full">I connected with a group of researchers who have spent almost a decade compiling research on penis growth… both increasing length and girth…</p>

			</div>


			<div class="text-center">
				<p class="mb-3 w-full">And they I put it all into a guide called the <strong>XXL Formula</strong>…</p>

				<p class="mb-3 w-full">Inside the <strong>XXL formula</strong> you’ll discover…</p>

				<ul>
					<li>
						<p class="mb-3 w-full">The <strong>best</strong> foods, exercises, techniques to increase the size of your penis fast… </p>
					</li>
				</ul>

				<p class="mb-3 w-full">The <strong>7 “Deadly” exercises</strong> you MUST avoid that can <strong class="text-red-600 font-semibold">damage</strong> your penis and even leave it <strong><em>deformed</em></strong>… </p>

				<ul>
					<li>
						<p class="mb-3 w-full">The <strong>5 “penis shrinking”</strong> foods that can actually decrease the size of your cock…</p>
					</li>
					<li>
						<p class="mb-3 w-full">The <strong>5 “penis shrinking”</strong> foods that can actually decrease the size of your cock…</p>
					</li>
				</ul>

				<p class="mb-3 w-full">And most importantly, you will get a proven, three-step formula you can follow to quickly and easily get real, long-lasting penis size increases…</p>

				<p class="mb-3 w-full">No matter how hopeless you might feel about it now…</p>

				<p class="mb-3 w-full">This formula works… and there is tons of real research to back it up…!</p>

				<p class="mb-3 w-full">You’ll be blown away by how <strong>easy</strong> this is and how <strong>safely</strong> you can do it… </p>

				<p class="mb-3 w-full">Many men have followed these <strong>exact steps</strong> before…</p>

				<p class="mb-3 w-full">And there have been a ton of success stories… </p>

				<p class="mb-3 w-full">The XXL Formula sells for $79, but today you’re getting it <strong>for FREE!</strong></p>

				<p class="mb-3 w-full text-2xl"> FREE BONUS GIFT #4: Magic Words That Drive Her Wild… </p>

				<p class="mb-3 w-full">This is the <strong>ultimate</strong> bedroom companion and it should really come with a <strong class="text-red-600 font-semibold">warning label!</strong></p>

				<p class="mb-3 w-full">This “black book of sex” contains some of the dirtiest, most unthinkable and most seductive “dirty talk” lines you’ve ever heard… </p>

				<p class="mb-3 w-full">And women absolutely <strong><em>love them!</em></strong></p>

				<p class="mb-3 w-full">These are things you would <strong>NEVER</strong> think of saying to a woman, yet these drive them absolutely <strong>WILD</strong>.</p>

				<p class="mb-3 w-full">Dirty Talk expert Glenn Pearce is giving you his most powerful “x-rated” words, lines and phrases to drive your girl absolutely insane…</p>

				<p class="mb-3 w-full">These are words will get her in the mood for sex <strong>fast</strong>… many times in just minutes… </p>

				<p class="mb-3 w-full">And you’ll be able to turn your girl on more and make her more <strong>sexually satisfied</strong> than you ever have before… </p>

				<p class="mb-3 w-full">As best-selling author Isebella Illiendez says, when it comes to a woman’s mind the “G spot is between the ears”…</p>

				<p class="mb-3 w-full">Unlike men, what really turns a woman on is <strong><em>mental stimulation</em></strong>… </p>

				<p class="mb-3 w-full">And these magic phrases are designed to give your girl more <strong>intense</strong> orgasms… <strong>longer lasting</strong> orgasms… and make her louder and more <strong>ecstatic</strong> in bed than you’ve ever seen!</p>

				<p class="mb-3 w-full">And best of all… these phrases can get your girl to start to reveal her <strong>dirty side</strong>… </p>

			</div>


			<div class="text-center">
				<p class="mb-3 w-full">Her secret desires… fantasies… the things she really wants in bed…</p>

				<p class="mb-3 w-full">Inside “Words That Drive Her Wild,” you’ll get…</p>

				<ul>
					<li>
						<p class="mb-3 w-full"><strong>The “Boiling Point” Phrases</strong> to tell your girl, throughout the day, even while she’s at work, that will make her vividly fantasize about passionate, sweaty sex with you… so that the second she gets home… she just can’t help but drag you to the bedroom…</p>
					</li>
				</ul>

				<p class="mb-3 w-full"><strong>Glenn’s “Sexual Power Words”</strong> to turn up the heat while you’re on date night and turn things towards sex of <strong>raw, hot sex</strong>. She may even get so horny that she will want to find the closest bathroom and get down to business!</p>

				<p class="mb-3 w-full"><strong>The Dirty Talk “Escalation Ladder.”</strong> These phrases crank up the intensity of sex for her… and make her cum harder and faster…</p>

				<p class="mb-3 w-full"><strong>The 7 “dominance” phrases.</strong> These are phrases that make your girl more submissive and more likely to want to try new things in bed…</p>

				<p class="mb-3 w-full">This course usually sells for $39, but I’ve talked Glenn into giving it to you <strong>absolutely FREE</strong> today!</p>

				<p class="mb-3 w-full text-2xl"> FREE BONUS GIFT #5: The “Text to Sex” Course… </p>

				<p class="mb-3 w-full">This is a step-by-step blueprint to use text messages get your wife or girlfriend so <strong><em>turned on</em></strong>… and so incredibly <strong><em>horny</em></strong>… </p>

				<p class="mb-3 w-full">She’s practically begging you to come home from work early to satisfy her…</p>

				<p class="mb-3 w-full">This includes <strong>word-for-word</strong> text messages you can send your girl… </p>

				<p class="mb-3 w-full">And <strong>Step-by-step</strong> walkthroughs of real text message conversations that Glenn and his clients have had with women, so you can see the <strong>exact messages</strong> he sent them and see <strong>exactly</strong> what they wrote back… </p>

				<p class="mb-3 w-full">You’ll see how <strong>damn horny</strong> they get once they read the messages…</p>

				<p class="mb-3 w-full">I guarantee you, you’ve never seen anything like this…</p>

				<p class="mb-3 w-full">The <strong>“Text 2 Sex”</strong> course is usually $39, but again, today, you’re going to get it for FREE!</p>

				<p class="mb-3 w-full text-2xl"> FREE BONUS GIFT #6: Female Confessions </p>

				<p class="mb-3 w-full">Female Confessions is features the <strong>raw, uncensored</strong> truth about what women really want in bed…</p>

				<p class="mb-3 w-full">Their secret <strong>fantasies</strong>… their hidden <strong>sexual desires</strong>…</p>

				<p class="mb-3 w-full">Most women don’t feel comfortable admitting what they really want… </p>

				<p class="mb-3 w-full">They are too worried you won’t be into it or might get turned off by it…</p>

				<p class="mb-3 w-full">Sex expert Craig Miller has the solution…</p>

				<p class="mb-3 w-full">He did an experiment where interviewed 8 different women out at a bar…</p>

				<p class="mb-3 w-full">These were very sexual… very open women… </p>

			</div>


			<div class="text-center">
				<p class="mb-3 w-full">And he asked them all about their dirtiest… most secret sex fantasies…</p>

				<p class="mb-3 w-full">He asked them what the men did who <strong><em>turned them on</em></strong> the most…</p>

				<p class="mb-3 w-full">and he was them the <strong>secret fantasies</strong> that they had… </p>

				<p class="mb-3 w-full">Things they’d always wished men would do, but never did…</p>

				<p class="mb-3 w-full">And he boiled all of these fantasies down into a blueprint he calls the “Female Fantasy Blueprint”…</p>

				<p class="mb-3 w-full">This includes the <strong>13 Female Fantasies</strong> that almost all women have, many of which are <strong>extremely controversial</strong>… </p>

				<p class="mb-3 w-full">And fantasies about being tied up… being forced into sex… being manhandled… having sex in public… or with other women…</p>

				<p class="mb-3 w-full">It’s very shocking. </p>

				<p class="mb-3 w-full">And it may change the way you think about women forever…</p>

				<p class="mb-3 w-full">But it will give you a <strong>HUGE advantage</strong>…</p>

				<p class="mb-3 w-full">Knowing a woman’s private fantasies… will allow you to give her <strong>extreme</strong> amounts of pleasure…</p>

				<p class="mb-3 w-full">Pleasure that most other men can’t…</p>

				<p class="mb-3 w-full">And if you know her fantasies… and you can bring them to life… </p>

				<p class="mb-3 w-full">She will <strong>love you</strong> for it! </p>

				<p class="mb-3 w-full">She will brag to all her friends about you… </p>

				<p class="mb-3 w-full">She won’t even be able to look at another guy… </p>

				<p class="mb-3 w-full">You’ll also discover…</p>

				<ul>
					<li>
						<p class="mb-3 w-full">The <strong class="text-red-600 font-semibold">12 Biggest Mistakes</strong> men make and how to avoid them…</p>
					</li>
					<li>
						<p class="mb-3 w-full"> The <strong><em>right way</em></strong> to take control and be dominant… while still being loving and respectful of her… </p>
					</li>
				</ul>

				<p class="mb-3 w-full">3 easy ways to get a girl to try new things in bed… even if she said she was “not interested” in something in the past…</p>

				<p class="mb-3 w-full">7 easy ways to <strong>“spice things up”</strong> in the bedroom… keep your sex life exciting… and really surprise your girl…</p>

				<p class="mb-3 w-full">And much, much more!</p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">you’ll also get the <strong>raw, uncensored</strong> “confession” videos Craig taped, so you can hear <strong>word-for-word</strong> what each girl said…</p>

				<p class="mb-3 w-full">What her desires are and what she secretly wishes men would do…</p>

				<p class="mb-3 w-full">Female Confessions usually sells for $69.95 but I’ve arrange for you to get it <strong>for FREE</strong> today!</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center">So Let Me Add Up All Your Bonus Gifts Today For You…</p>

				<ul style="list-style:none;" class="flex flex-col my-5">
					<li class="flex items-center mx-auto mb-3">
						<span><img src="/images/check.png" width="20"></span>
						A Free Upgrade to a 30 Day Supply of 5G Male PLUS ($180 Value)
					</li>

					<li class="flex items-center mx-auto mb-3">
						<span><img src="/images/check.png" width="20"></span>
						5G Enhancement Book ($19.95 Value)
					</li>

					<li class="flex items-center mx-auto mb-3">
						<span><img src="/images/check.png" width="20"></span>
						Multiplier Method ($49 Value)
					</li>

					<li class="flex items-center mx-auto mb-3">
						<span><img src="/images/check.png" width="20"></span>
						XXL Formula: Size Enhancement Process ($79 Value)
					</li>

					<li class="flex items-center mx-auto mb-3">
						<span><img src="/images/check.png" width="20"></span>
						Words That Drive Her Wild ($49 Value)
					</li>

					<li class="flex items-center mx-auto mb-3">
						<span><img src="/images/check.png" width="20"></span>
						Text 2 Text ($39 Value)
					</li>

					<li class="flex items-center mx-auto mb-3">
						<span><img src="/images/check.png" width="20"></span>
						Female Confessions ($69.95 Value)
					</li>

					<li class="flex items-center mx-auto ">
						<span><img src="/images/check.png" width="20"></span>
						All tax waived on your order today
					</li>
				</ul>

				<p class="mb-3 w-full"> Normally this would cost $497.89, but again, you’re going to pay just $69.95.</p>

				<p class="mb-3 w-full">All you have to do to get started is <strong>click the button below</strong> now to see if you quality…</p>

				<!--<a href="../agreement.php?e=&c=&r=&o=&a=&s=&campaign=&s2=&s3=&s4=&cr=&blog=&post=&sentemail=" target="_blank"><center><img src="/images/buy1.png" /></center></a>-->
				<center>
					<form accept-charset="UTF-8" action="order.php<?php echo trim($querystring); ?>" class="infusion-form" method="POST">
						<div class="infusion-field">
							<input class="infusion-field-input-container" id="inf_field_Email" name="email" type="text" placeholder="Enter Your Primary Email Address">
						</div>
						<input type="hidden" name="a" value="">
						<input type="hidden" name="s1" value="">
						<input type="hidden" name="c" value="">
						<input type="hidden" name="e" value="">
						<input type="hidden" name="o" value="">
						<input type="hidden" name="r" value="">
						<input type="hidden" name="s2" value="">
						<input type="hidden" name="s3" value="">
						<input type="hidden" name="s4" value="">
						<input type="hidden" name="cr" value="">
						<input type="hidden" name="campid" value="">
						<input type="hidden" name="campaign" value="">
						<input type="hidden" name="blog" value="">
						<input type="hidden" name="post" value="">
						<input type="hidden" name="sentemail" value="">

						<div class="infusion-submit flex justify-center my-5">
							<input type="image" name="infu_submit" id="infu_submit" class="w-auto mx-auto" src="/images/buy1.png" style="max-width: 450px; min-width: 300px">
						</div>
					</form>
				</center>

				<p class="mb-3 w-full">And again, remember… </p>

				<p class="mb-3 w-full">The 5G Male Plus upgrade and the free bonus gifts are only for a <strong>limited time</strong>…</p>

				<p class="mb-3 w-full">Now there’s still <strong>one</strong> last thing… and you might think I’m crazy for it…</p>

				<p class="mb-3 w-full">But if you’re a first time buyer… </p>

				<p class="w-full mb-3">I Want To Completely <strong>ELIMINATE</strong> Any Risk You Might Feel…</p>
			</div>


			<div class="text-center">
				<p class="mt-4 mb-5 text-red-600 text-3xl text-center mt-2">You’re Going To Get <strong>90 FULL DAYS</strong> To Try 5G Male Plus Risk FREE...</p>

				<p class="mb-3 w-full">You’re going to get <strong>three FULL months</strong> to try this out, make sure it works for you and if you’re not absolutely <strong>blown away</strong> by the results, you’ll get a full refund.</p>

				<p class="mb-3 w-full">If you don’t feel like your erections are… </p>

				<ul style="list-style:none;" class="flex flex-col my-5">
					<li class="flex mx-auto items-center mb-3">
						<span><img src="/images/check.png" width="20"></span>
						Significantly <strong>harder</strong>…
					</li>

					<li class="flex mx-auto items-center mb-3">
						<span><img src="/images/check.png" width="20"></span>
						Significantly more <strong>frequent</strong>…
					</li>

					<li class="flex mx-auto items-center">
						<span><img src="/images/check.png" width="20"></span>
						And significantly <strong>longer lasting</strong>…
					</li>
				</ul>

				<p class="mb-3 w-full">Then just call or email us 24 hours a day, 7 days a week and we’ll give you your money back right on the stock…</p>

				<img class="float-right" src="/images/90-guarantee.jpg">

				<!--[IMAGE: seal image]-->

				<p class="mb-3 w-full">No questions. No hassles. No “restocking” fees or any tricks like that!</p>

				<p class="mb-3 w-full">There is no way we could afford to make a promise like this if we weren’t absolutely certain the effects that 5G Male can have for you today.</p>

				<p class="mb-3 w-full">All you have to do to get started is just <strong>click the button below</strong> and see if you qualify…</p>

				<!--<center><a href="../agreement.php?e=&c=&r=&o=&a=&s=&campaign=&s2=&s3=&s4=&cr=&blog=&post=&sentemail=" target="_blank"><img src="/images/buy1.png" /></a></center>-->

				<center>
					<form accept-charset="UTF-8" action="order.php<?php echo trim($querystring); ?>" class="infusion-form" method="POST">
						<div class="infusion-field">
							<input class="infusion-field-input-container" id="inf_field_Email" name="email" type="text" placeholder="Enter Your Primary Email Address">
						</div>
						<input type="hidden" name="a" value="">
						<input type="hidden" name="s1" value="">
						<input type="hidden" name="c" value="">
						<input type="hidden" name="e" value="">
						<input type="hidden" name="o" value="">
						<input type="hidden" name="r" value="">
						<input type="hidden" name="s2" value="">
						<input type="hidden" name="s3" value="">
						<input type="hidden" name="s4" value="">
						<input type="hidden" name="cr" value="">
						<input type="hidden" name="campid" value="">
						<input type="hidden" name="campaign" value="">
						<input type="hidden" name="blog" value="">
						<input type="hidden" name="post" value="">
						<input type="hidden" name="sentemail" value="">

						<div class="infusion-submit flex justify-center my-5">
							<input type="image" name="infu_submit" id="infu_submit" class="w-auto mx-auto" src="/images/buy1.png" style="max-width: 450px; min-width: 300px">
						</div>
					</form>
				</center>
				<script type="text/javascript" src="https://wp330.infusionsoft.com/app/webTracking/getTrackingCode"></script>

				<p class="mb-3 w-full">Now what’s going to happen after you click the button below? </p>

				<p class="mb-3 w-full">Well, assuming you qualify… and assuming there are still supplies left…</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center" style="margin-top: 30px;">You’ll Asked To Agree To A Few Simple Ground Rules…</p>

				<div class="image-cont float-left pr-4 w-full md:w-1/2">
					<img class="mx-auto" src="images/box.png" alt="boxes">
					<p class="mt-2 italic text-gray-400 mb-1" >Your Package Will Be Shipped In A Discrete, Unmarked Envelope For Your Privacy</p>
				</div>

				<p class="mb-3 w-full">This includes a <strong>strict limit</strong> on the number of bottles you can order… due to the <strong>very low</strong> quantities we have left…</p>


				<p class="mb-3 w-full">Then you’ll be taken to our <strong>256-Bit secure</strong> order page to complete your order…</p>

				<p class="mb-3 w-full">This is the same technology that companies like Google, Microsoft and Apple use…</p>

				<p class="mb-3 w-full">Once your order is complete… your bottle of 5G Male PLUS will be shipped to you <strong>ASAP</strong>… </p>

				<p class="mb-3 w-full">And I’ve made sure your package will be <strong>completely discrete</strong>…</p>

			</div>


			<div class="text-center">

				<div class="image-cont pr-4 float-left w-full md:w-1/2">
					<img class="mx-auto" src="/images/5gmale-bottles.jpg" alt="bottles">
					<p class="mt-2 italic text-gray-400 mb-1">5G Male PLUS Comes In A Discrete Bottle With No Mention of Sex Or Erections Whatsoever!</p>
				</div>

				<p class="mb-3 w-full">The bottle itself is <strong>totally discreet</strong>, and as you can see, there’s nothing embarrassing on it…</p>

				<p class="mb-3 w-full">And <strong>nothing</strong> about erections or sex.</p>

				<p class="mb-3 w-full">It’s designed to look like just any other supplement you’d have on your counter…</p>

				<p class="mb-3 w-full">And, we’ve also made sure the billing on your credit card statement is <strong>completely discrete</strong> too… it will appear simply as “SUPERNATURAL MAN”…</p>

				<p class="mb-3 w-full">And as for your free bonus gifts, these will be sent to you right away, <strong>digitally</strong>, which means you get <strong>instant access</strong> to them… </p>

				<p class="mb-3 w-full">So you can start getting some of the powerful erection enhancing benefits, size enhancements techniques and sex-life-boosting tricks<strong> right away!</strong></p>

				<p class="mb-3 w-full">Now at this point, I’ve told you almost everything I can, so…</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center"> You’ve Got A Couple Decisions To Make… </p>

				<p class="mb-3 w-full">One of the decisions is <strong>really simple</strong>… </p>

				<p class="mb-3 w-full">You want a harder dick and for that, you want 5G Male.</p>

				<p class="mb-3 w-full">But there’s another decision that we haven’t really touched on because frankly… </p>

				<p class="mb-3 w-full">I’d rather focus over how much more <strong>pleasure</strong> and how much more <strong>fun</strong> and <strong>confidence</strong> you’ll have in your life…</p>

				<p class="mb-3 w-full">But I feel like I’d also be doing you a disservice if I didn’t also tell you this… </p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">It’s true that a lot of men come to us when it’s <strong class="text-red-600 font-semibold">“too late”</strong>… </p>

				<p class="mb-3 w-full">And by <strong class="text-red-600 font-semibold">“too late”</strong>… I mean they’ve already <strong class="text-red-600 font-semibold">lost</strong> their wife or their girlfriend… </p>

				<p class="mb-3 w-full">And believe it or not… it happens <strong>all the time</strong>… </p>

				<p class="mb-3 w-full">Very rarely will a woman tell you what she’s <strong>truly</strong> thinking… </p>

				<p class="mb-3 w-full">Even if she tells you she “doesn’t care”… </p>

				<p class="mb-3 w-full">And one day you may just find out…</p>

				<p class="mb-3 w-full">She’s having an affair… or even that she’s leaving…</p>

				<p class="mb-3 w-full">And even when she leaves…</p>

				<p class="mb-3 w-full">She’ll make it out to be about something else…</p>

				<p class="mb-3 w-full">Like “you don’t make enough money”… </p>

				<p class="mb-3 w-full">Or “we argue too much”… </p>

				<p class="mb-3 w-full">Or differences in raising kids… </p>

				<p class="mb-3 w-full">In reality, if you are sexually pleasing your woman the way she wants to be pleased… </p>

				<p class="mb-3 w-full">Most of those problems will go away… </p>

				<p class="mb-3 w-full">I’m not saying all your problems will <strong>go away</strong>… </p>

				<p class="mb-3 w-full">We’ve got some customers who now perform so good in bed…</p>

				<p class="mb-3 w-full">That they end up leaving their wives because they find younger ones… </p>

				<p class="mb-3 w-full">Or sometimes they just don’t get along…</p>

				<p class="mb-3 w-full">But if you’re having performance problems and you’re not going to do anything about it… </p>

				<p class="mb-3 w-full">You may want to look very seriously at marriage or relationship counseling… </p>
			</div>

			<div class="text-center">
				<p class="mb-3 w-full">Because things can almost certainly get <strong>rocky</strong>… </p>

				<p class="mb-3 w-full">And honestly, in my experience, if she’s tells you that she “doesn’t care” about your performance issues… </p>

				<p class="mb-3 w-full">I’d expect her to leave… or be having an affair within 6 months…</p>

				<p class="mb-3 w-full">Seriously….</p>

				<p class="mt-4 mb-5 text-red-600 text-3xl text-center"> Check Out Some Of These Statistics… </p>

				<p class="w-full mb-3"><strong class="bg-yellow-300 p-1">90%</strong> Of Women Say They Consider Sex To Be <strong>“Very Important”</strong> In A Relationship… </p>
				<!--[Add source here – Doug has it]-->

				<p class="w-full mb-3">Nearly <strong class="bg-yellow-300 p-1">HALF</strong> Of Women Say They Would Consider Leaving Their Partner If He Was Having Trouble Performing In Bed </p>

				<p class="w-full mb-3"> And <strong>Didn’t Get The Situation Handled</strong>… </p>
				<!--[Add source here – Doug has it]-->

				<p class="mb-3 w-full">And in many states, failure to get an erection is actually a LEGAL GROUNDS FOR DIVORCE… </p>
				<!--[Add source here – Doug has it]-->

				<p class="mb-3 w-full">And science has proven again and again that great sex and frequent sex just keeps women happy!</p>

				<p class="mb-3 w-full">This is a big deal to women - no matter what they say.</p>

				<p class="mb-3 w-full">And even if you don’t want to fix things for your lover…</p>

				<p class="mb-3 w-full">At least do it for <strong>yourself</strong>.…</p>

				<p class="mb-3 w-full">You don’t want to live out your last days with a <strong>limp dick</strong>… </p>

				<p class="mb-3 w-full">You know what I’m saying?</p>

				<p class="mb-3 w-full">They released a shocking study the other week…</p>

				<p class="w-full mb-3"><strong class="bg-yellow-300 p-1">80% Of Men</strong> Never Go To A Doctor And Get Help With Their Performance Problems…</p>
				<!--[name source – ask Doug]-->

				<p class="mb-3 w-full">Most men think that if they wait… , things will get better on their own.…</p>

				<p class="mb-3 w-full">Either that, or… they desperately want to do something about it.… </p>

				<p class="mb-3 w-full">But they just don’t know what to do….</p>

				<p class="mb-3 w-full">They don’t know about 5G Male yet…</p>

				<p class="mb-3 w-full">And so you’re in a <strong>rare position</strong> today…</p>

				<p class="mb-3 w-full">You can <strong>take action</strong> on this now and get this <strong>incredible formula</strong>…</p>

				<p class="mb-3 w-full">And you can finally feel like a <strong>real man</strong> in the bedroom again… </p>

				<p class="mb-3 w-full">Get stronger erections …</p>

				<p class="mb-3 w-full">Screw like you’re a teenager again…</p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">Drive your girl wild… </p>

				<p class="mb-3 w-full">And finally have the <strong>RED HOT</strong> sex together again that you’ve probably been missing for <strong><em>so long!</em></strong></p>

				<p class="mb-3 w-full">Imaging the confidence <strong>surging</strong> back into your body… and your cock…</p>

				<p class="mb-3 w-full">You feel like the <strong><em>fucking man!</em></strong> </p>

				<p class="mb-3 w-full">Imagine in just a <strong>short time</strong> from now, you’re in bed with your girl… </p>

				<p class="mb-3 w-full">And she looks down and sees your <strong>massive</strong>, new, harder-than-steel erection <strong>bulging</strong> through your boxers…</p>

				<p class="mb-3 w-full">She’s so <strong>turned on</strong>… you can see it in her face… and she bites her lip out of <strong>anticipation</strong> and <strong>excitement</strong>…</p>

				<p class="mb-3 w-full">Soon, she just can’t keep her hands off it any longer…</p>

				<p class="mb-3 w-full">she just goes straight for your cock… and she’s loving it!</p>

				<p class="mb-3 w-full">She’s blown away by <strong><em>how hard</em></strong> you are…</p>

				<p class="mb-3 w-full">And when she you finally takes it out your pants…</p>

				<p class="mb-3 w-full">Your… super-hard… , super-thick cock… stands straight in front of her like a soldier…</p>

				<p class="mb-3 w-full">Her hungry eyes are focus on it…… her face is red with <strong>lust</strong>…</p>

				<p class="mb-3 w-full">You haven’t seen her like this in <strong><em>years</em></strong>… maybe not ever!</p>

				<p class="mb-3 w-full">And it’s not too long before she’s begging you to put it inside her…</p>

				<p class="mb-3 w-full">It’s thicker and harder than its ever been… </p>

				<p class="mb-3 w-full">And she wants it... <strong><em>bad!</em></strong></p>

				<p class="mb-3 w-full">As you slide your new, massively hard cock inside her… </p>

				<p class="mb-3 w-full">You know with <strong>complete confidence</strong> nothing is go flat… </p>

				<p class="mb-3 w-full">Your dick is not going to deflate… or go limp…</p>
			</div>


			<div class="text-center">
				<p class="mb-3 w-full">And you can finally stop worry about all that…</p>

				<p class="mb-3 w-full">And look into your girl’s eyes with complete confidence… </p>

				<p class="mb-3 w-full">And truly enjoy yourself…</p>

				<p class="mb-3 w-full">You watch her eyes close in enjoyment…</p>

				<p class="mb-3 w-full">And you hear her moan in <strong>pleasure</strong> and <strong>satisfaction</strong>…</p>

				<p class="mb-3 w-full">You can tell how much more she is enjoying this…</p>

				<p class="mb-3 w-full">You’re just getting lost in the moment… how <strong>incredible</strong> it you feel…</p>

				<p class="mb-3 w-full">And after a while… you look over at the clock… </p>

				<p class="mb-3 w-full">And 10… 20… even 30 minutes have gone by… and you’re <strong><em>still going</em></strong>… </p>

				<p class="mb-3 w-full">Just as hard… just as <strong>thick</strong> as when you started…</p>

				<p class="mb-3 w-full">Maybe even a little <strong>harder!</strong></p>

				<p class="mb-3 w-full">And see the <strong>admiration</strong> and <strong>devotion</strong> in her eyes…</p>

				<p class="mb-3 w-full">And you know what you’ve been missing all this time…</p>

				<p class="mb-3 w-full">And this is what I really want for you…</p>

				<p class="mb-3 w-full">And that moment… </p>

				<p class="mb-3 w-full">When you’ve been having so much <strong>great sex</strong>…</p>

				<p class="mb-3 w-full">That you don’t even think about “if” you’ll get hard anymore…</p>

				<p class="mb-3 w-full">Or “if” you’ll stay hard…</p>

				<p class="mb-3 w-full">Or “if” you’re going to be able to go a <strong>second time</strong>… </p>

				<p class="mb-3 w-full"><strong>Everything</strong> just works…</p>

				<p class="mb-3 w-full">And you feel <strong>great</strong>…</p>

				<p class="mb-3 w-full">The answer is in front of you <strong>right now</strong>…</p>

				<div id="dashed-cont" class="border border-4 border-dashed mx-auto mt-6 mb-4 border-red-600" >
					<div class="m-4">
						<p id="secure-title" class="text-5xl font-semibold mb-5"> Secure Your Order Now Before Supplies Run Out… </p>

						<p class="mb-3 w-full"></p>
						<div class="text-2xl text-center w-full"> If You Order Today, You’re Going To Get… </div>
						<p class="mb-3 w-full"></p>

						<div style="margin: 0 20px;">
							<ul style="list-style:none;" class="flex flex-col">
								<li class="flex justify-center mb-3">
								<span><img src="/images/check.png" width="20"></span> A FREE upgrade to 5G Male PLUS ($180 Value)…

								</li>

								<li class="flex justify-center mb-3">
								<span><img src="/images/check.png" width="20"></span> 6 FREE bonus gifts ($305.90 Value)…
								</li>

								<li class="flex justify-center mb-3">
								<span><img src="/images/check.png" width="20"></span> 90 FULL days to try this out…
								</li>

								<li class="flex justify-center">
								<span><img src="/images/check.png" width="20"></span> Zero tax!

								</li>

							</ul>
						</div><br>
						<p class="w-full mb-3"> <strike style="color:#555;">Normally $497.89</strike> Today Just $69.95</p>

						<p style="text-align:center;"> To Get Started, Just Click The Button Below Now… </p>

						<center>

							<center>
								<form accept-charset="UTF-8" action="order.php<?php echo trim($querystring); ?>" class="infusion-form" method="POST">
									<div class="infusion-field">
										<input class="infusion-field-input-container" id="inf_field_Email" name="email" type="text" placeholder="Enter Your Primary Email Address">
									</div>
									<input type="hidden" name="a" value="">
									<input type="hidden" name="s1" value="">
									<input type="hidden" name="c" value="">
									<input type="hidden" name="e" value="">
									<input type="hidden" name="o" value="">
									<input type="hidden" name="r" value="">
									<input type="hidden" name="s2" value="">
									<input type="hidden" name="s3" value="">
									<input type="hidden" name="s4" value="">
									<input type="hidden" name="cr" value="">
									<input type="hidden" name="campid" value="">
									<input type="hidden" name="campaign" value="">
									<input type="hidden" name="blog" value="">
									<input type="hidden" name="post" value="">
									<input type="hidden" name="sentemail" value="">

									<div class="infusion-submit flex justify-center my-5">
										<input type="image" name="infu_submit" id="infu_submit" class="w-auto mx-auto" src="/images/buy1.png" style="max-width: 450px; min-width: 300px">
									</div>

								</form>
							</center>
						</center>
					</div>
				</div>

			</div>




			</div>
			<!-- end -->



		</div>
	</div>

	<?php
	$scroll_id = 'video-block';
	include($_SERVER['DOCUMENT_ROOT'] . '/tailwind/shared/components/float_button.php');
	?>

	<?php
	// declare modal variables (requires basic_modal.js)
	$modal_id = 'mouseOutModal';
	$modal_title = "WAIT! DO NOT LEAVE THIS PAGE!";
	$modal_body = '
	<div class="modalsubheader text-center my-2">IT COULD CAUSE ERRORS IN YOUR ORDER</div>
	<div class="text-sm text-center my-2">Do not hit the back button or close your browser.
	<br>Click <span class="font-bold">"FINISH CUSTOMIZING MY ORDER"</span> below and <span style="text-decoration: underline;font-weight:bold;">make your decision on this page</span>.</div>
	';
	$modal_footer = '<button id="modalbutton" type="button" class="modalbutton w-full bg-blue-600 p-3 rounded text-white">FINISH CUSTOMIZING MY ORDER</button>';
	include($_SERVER['DOCUMENT_ROOT'] . '/tailwind/shared/components/basic_modal.php');
	?>

	<script>
		const desk2 = document.getElementById('desktop2');
		desk2.addEventListener('contextmenu', ()=> {
			return false;
		})

		const clickRef = document.getElementById('click-ref');
		const ref = document.getElementById('reference');
		clickRef.addEventListener('click', ()=> {
			ref.style.display = 'block';
			ref.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
		})

	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/postscribe/2.0.6/postscribe.min.js"></script>


	<script src="../js/verify.js"></script>
	<script>
		emailInput = "#inf_field_Email";
	</script>


	<script>


		// modal on navigate away
		window.addEventListener('popstate', function(e) {
			window.modalHandler('mouseOutModal', true);
		});
	</script>

	<script>
		var exit = true;
		window.onbeforeunload = function(e) {
			if (exit == true) {
				exit = false;
				setTimeout("window.location.href = 'sl-5gmale.php<?php echo trim($querystring); ?>';", 1);
				return "";
			}
		}


		const buy = document.getElementById('bottomBuy');
		document.addEventListener('scroll', ()=> {
			if (window.innerHeight + window.scrollY > document.body.clientHeight) {
				buy.style.display = 'none';
			} else {
				buy.style.display = 'inherit';
			}
		})
	</script>

</body>

</html>