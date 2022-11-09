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
$_SESSION['pageType'] = 'up3';

$firedl = 0;
$retail = 540;
$just = '227.95';
$supply = 6;
$normally = '539.70';
$savings = 58;
$saveprice = '312.05';
$bottleprice = '37.99';
$newflow = 0;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php template("includes/header"); ?>
        <title>100% SECURE - Supernatural Man LLC Checkout</title>
        <link rel="shortcut icon" href="https://s3.amazonaws.com/sec-image/upsells/skeletonkey/lock.png" type="image/png" />



        <style>
            body {
                background-color: #000;
            }
        </style>

    </head>




<div class="container container-vsl mx-auto min-h-screen py-8 serif" style="max-width: 680px">
        <div class="content px-1">
            <section>
                <?php
                    $current_step = 2;
                    template('includes/step_bar', null, $current_step);
                ?>
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
                    <img class="mx-auto" src="//<?php echo $_SERVER['HTTP_HOST']?>/images/paul-clayton.png" alt="doctor paul clayton"/>
                    <p id="sub-txt" class="py-3 text-center" style="color: gray;font-size: 18px !important;">“T3 Multiplier” can DOUBLE your free testosterone right away…</p>
                    </div>

                    <div class="flex flex-col my-5 text-lg">
                    <p class="w-full pb-3">Dr. Paul Clayton, a Royal Society of Medicine fellow, has done research that lead to a powerful formula called <strong>T3 Multiplier.</strong></p>
                    <p class="w-full pb-3"><strong>T3 Multiplier</strong> is the ONLY formula designed to DOUBLE your “FREE” testosterone…</p>
                    <p class="w-full pb-3">“FREE” Testosterone is the only type of testosterone your body can <strong>actually use!</strong></p>
                    <p class="w-full pb-3">T3 Multiplier also <strong>BLOCKS estrogen</strong>, a hormone that lowers your sex drive…</p>
                    <p class="w-full pb-3">And uses <strong>vitamin therapy</strong> to BOOST your testosterone levels back… </p>
                    <p class="w-full pb-3">Because optimal vitamin levels can help boost testosterone back to normal even more!</p>
                    <img class="mx-auto pb-3" src="//<?php echo $_SERVER['HTTP_HOST']?>/images/before-after1.jpg" style="width:100%;" alt="testosterone slide illustration" />
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
                                        <a id="btn-two" class="split-buy processlink takebtn" href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up?pid=21&buy=1&next=up/upsell-final-offer" onclick="exit=false;">
                                    <?php } else { ?>
                                        <a id="btn-two" class="split-buy processlink takebtn" href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up?pid=739&buy=1&next=up/upsell-final-offer" onclick="exit=false;">
                                    <?php } ?>
                                    <img src="https://5gm.s3.amazonaws.com/secureorder.gif" style="display: block; margin: 0px auto; width: 100%; max-width: 240px;padding-top: 3px;" alt="cta">
                                    </a>
                                    <p class="percentoff mt-4"><span class="text-red-400 font-semibold"><?php echo $savings; ?>% OFF</span> <span class="text-green-400 font-semibold"> + FREE SHIPPING</span></p>
                                </div>

                            </div>
                        </div>
                    </section>




                    <div class="flex w-full justify-center py-7">
                    <p class='text-center px-5 split-non-buy processlink text-gray-500 font-sm'><a href="//<?php echo $_SERVER['HTTP_HOST']?>/dn/downsell-3.php" style="color: #8C8C8C; text-decoration:underline;">Skip This</a> - Yes, Ryan, I understand this deep discount is only available on this page and once I leave it will be gone for good. Please give my discount away to another man.</p>
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
    modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer);
?>


<script type='text/javascript'>
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>

</body>
<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</html>