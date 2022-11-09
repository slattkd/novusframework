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
$_SESSION['pageType'] = 'up4';

$retail = '239.70';
$just = '97.95';
$supply = 6;
$normally = '39.95';
$savings = 59;
$saveprice = '141.75';
$bottleprice = '16.33';
$uses = 120;
$newflow = 0;

if (isset($_SESSION['core']) && ($_SESSION['core'] == 6)) {
    $newflow = 1;
    $retail = '479.70';
    $just = '195.90';
    $supply = 12;
    $normally = '479.70';
    $savings = 59;
    $saveprice = '283.50';
    $bottleprice = '16.32';
    $uses = 240;
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php template("includes/header"); ?>
         <title>100% SECURE - Supernatural Man LLC Checkout</title>
        <style>
            body {
                background: #000;
            }
            /* color:#66667d; */
        </style>
    </head>
<body>

<style>
    body {
        background: #000;
    }

    h2.text-2xl {
        font-size: 30px;
        line-height: 1.4em;
    }

    h2.text-5xl,
    h2.text-4xl {
        line-height: 1.2;
    }

    .link-blue {
        color: #428bca;
    }

    p.w-full.pb-4 {
        font-size: 18px;
    }

    .floating-btn {
        text-align: right;
        position: fixed;
        bottom: 0;
    right: 0;
        width: auto;
        max-width: 100vw;
    }

    .floating-btn .button {
        background: rgb(255,98,0);
        background: linear-gradient(0deg, rgba(255,98,0,1) 0%, rgba(255,132,0,1) 26%, rgba(255,153,0,1) 49%, rgba(255,165,0,1) 63%, rgba(255,201,33,1) 89%, rgba(255,234,161,1) 100%);
        font-size: 26px;
        padding: 8px 16px;
        border: 2px solid #ab3600;
        border-radius: 10px;
        font-family: 'Oswald', sans-serif;
        font-style: italic;
        font-weight: bold;
        color: #00234c;
        cursor: pointer;
        transition: all 200ms ease-in-out;
        white-space: nowrap;
    }

    @media only screen and (min-width: 769px) {
        .floating-btn .button {
            font-size: 36px;
        }
    }
</style>

<body>
    <div class="container-vsl mx-auto py-8 serif" style="max-width: 680px;">
        <div class="content mx-1">
            <section>
                <?php
                    $current_step = 2;
                    template('includes/step_bar', null, $current_step);
                ?>
            </section>

            <h2 class="text-white text-3xl font-bold text-center mb-3 -mt-4 uppercase sans">
                YOUR FINAL NEW MEMBERS DISCOUNT
            </h2>

            <div class="bg-white rounded p-3 md:p-5 lg:p-10">
                <div class="flex flex-col w-full mb-7">
                    <h2 class="w-full text-black font-bold uppercase text-xl text-center mb-7">BEFORE YOU GET STARTED – USE THIS TRICK:</h2>
                    <h2 class="text-red-600 text-5xl text-center">
                        Make Any Woman Have The Most Explosive, Toe Curling, Slut-Triggering Orgasm Of Her Life… Even The Biggest Ice Queen Or Your Wife Who Hasn’t Touched You In 3 Years…
                        <br>
                        <div class="w-full my-7 text-4xl">And Get Her To Do It In </br> <strong>5 Minutes Or LESS!</strong></div>
                    </h2>
                    <div class="text-center w-full text-black text-3xl">
                    This Even Works If Your Dick Is Only 4 Inches Long, Even If You’re 30 Years Past Your Prime, Even If You Have A Giant Beer Gut And Your Breath Smells Bad…
                    </div>
                </div>

                <div class="flex flex-col w-full">
                    <p class="w-full pb-4">Hey, it’s Ryan Masters again…</p>
                    <p class="w-full pb-4">Now that you’re cock is going to be ultra-thick and harder than steel from using 5G Male PLUS… </p>
                    <p class="w-full pb-4">I want to share one final <strong>“insider secret”</strong> that you can use to give almost ANY woman the most <strong>explosive orgasms</strong> of her life…</p>
                    <p class="w-full pb-4"> Even if she’s NEVER had an orgasm before… </p>
                    <p class="w-full pb-4">Even if she finds you totally unattractive or “not her type”…</p>
                    <p class="w-full pb-4">Even if she’s the shyest, most prude girl on the planet…</p>
                    <p class="w-full pb-4">I promise you, you will make her cum… and cum A LOT!</p>
                    <p class="w-full pb-4">Your hard-on isn’t going to survive your orgasm.</p>
                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                SHOCKING FACT: 82% Of Women <strong>FAKE</strong> Their Orgasms…
                </h2>

                <div class="flex flex-col w-full">
                <p class="w-full pb-4">Even if you think you’re good in bed now…</p>
                    <p class="w-full pb-4">A study by CBS News and Dr. Gayle Brewer found that <strong>82% of women FAKE their orgasms!</strong></p>
                    <p class="w-full pb-4">Most do it because sex is too boring and they want to stop…</p>
                    <p class="w-full pb-4">Or because they’re afraid they won’t cum and are embarrassed about it…</p>
                    <p class="w-full pb-4">There is only one way to <strong>MAKE SURE</strong> she 100% cums… and cums HARD…</p>
                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                That’s Why A Doctor Developed A Powerful Formula To Give Women Fast, Deep “G-Spot” Orgasms…
                </h2>


                <div class="flex flex-col w-full">
                <p class="w-full pb-4">A new formula, called <strong>“O.X. Gel”</strong> triggers deep g-spot orgasms from inside her pussy!</p>
                    <p class="w-full pb-4">“G-Spot” orgasms are the most intense type of orgasm a woman can have…</p>
                    <p class="w-full pb-4">It affects her entire body…</p>

                    <p class="w-full pb-4">And it’s the “holy grail” of orgasms that women rave about to their friends and desperately want to have while they’re masturbating…</p>
                    <p class="w-full pb-4">All you have to do to give her one of these amazing orgasms is just rub some <strong>“O.X. Gel”</strong> on your cock…</p>
                    <p class="w-full pb-4">Or inside her before sex… </p>
                    <p class="w-full pb-4">And it will turn her pussy into an ultra-sensitive, ultra-tight orgasm machine that CUMS and CUMS again for you… and ONLY you!</p>
                    <p class="w-full pb-4"><strong>“O.X. Gel”</strong> is so powerful, she will <strong>not be able to resist</strong> cumming once you’re inside her.</p>
                    <p class="w-full pb-4">She will be HELPLESS to resist you… and you’ll turn her into a ravenous slut… making her feel so incredibly good that she starts to worship your cock… and thinks the sun rises and sets in your pants…</p>
                    <p class="w-full pb-4">She’ll beg to have you inside her every night… </p>
                    <p class="w-full pb-4">And eagerly fantasize about you penetrating her… while she’s at work… out with her friends… or shopping for groceries… </p>
                    <p class="w-full pb-4">She won’t be able to think about <strong>anything else…</strong> </p>
                    <p class="w-full pb-4">She simply HAS to have you… </p>
                    <p class="w-full pb-4">And she won’t get relief until she <strong>rides your cock again!</strong></p>

                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                If Your Cock Is Under 6.4 Inches Long, You NEED This!
                </h2>


                <div class="flex flex-col w-full">
                <p class="w-full pb-4">Women polled in Marie Claire magazine said the PERFECT penis size was <strong>6.4 inches.</strong></p>
                    <p class="w-full pb-4">And even if you are lucky enough to have a huge cock…</p>
                    <p class="w-full pb-4"><strong>“O.X. Gel”</strong> is your STILL secret weapon to make your cock feel <strong>EVEN BIGGER</strong> inside her!</p>
                    <p class="w-full pb-4"><strong>“O.X. Gel”</strong> helps to swell the inside of her pussy and making it <strong>tighter</strong> and more <strong>sensitive…</strong></p>
                    <p class="w-full pb-4">This will makes your cock feel <strong>TWICE AS BIG</strong> inside her… even if you’re small or you’re not happy with your size…</p>
                    <p class="w-full pb-4">Once her pussy is tighter… it allows you to put more pressure on her “G Spot”… which will trigger DEEP “G Spot” orgasms…</p>

                    <p class="w-full pb-4">Making her entire body shake… making her squirt all over your bed… on having her on her knees, begging you to fuck her harder and harder…</p>

                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                <strong>Scientifically Proven</strong> to Make Her Cum Harder And More Intensely Than She Ever Has Before…
                </h2>

                <div class="flex flex-col w-full">
                <p class="w-full pb-4">Nearly five years of research went in to testing the powerful ingredients inside “O.X. Gel” and it allows you to give her more intense and more frequent orgasms in three ways… </p>

                    <ul class="ml-5" style="list-style: unset;">
                        <li><p class="w-full pb-4"><strong>You’ll make her clit and pussy so sensitive</strong>, she cums just as you’re rubbing the head of your cock against the entrance to her and slowly starting to push in… and you’ll trigger DEEP “G Spot” orgasms once you’re inside her… even if she’s never had one before in her life!</p></li>

                        <li><p class="w-full pb-4"><strong>Make her pussy super wet like a waterslide</strong>, gushing so much that you’ll have to put down rubber sheets! Her pussy will feel so good and slippery when you put your cock inside her - it will be the best thing you’ve ever felt! And when she touches herself, she will be shocked at how drenched her pussy is for you! And you will literally NEVER have to stop sex again to get lube!</p></li>

                        <li><p class="w-full pb-4"><strong>Make her pussy an incredibly durable “super pussy”</strong> so she can fuck you for hours. If you’re a guy, you’ve probably had that disappointing feeling as a woman looks at you and says “sorry honey, I’m just too sore to keep going!”… but this allows you to stop that from ever happening!</li>
                    </ul>

                    <p class="w-full pb-4">“O.X. Gel” is so powerful, it can make some women orgasm <strong><em>without any choice whatsoever!</em></strong> </p>
                    <p class="w-full pb-4">And it works even if you’re not a physically attractive guy.</p>
                    <p class="w-full pb-4">There’s a good chance, that if you use “O.X. Gel,” you may be the <strong>VERY FIRST MAN</strong> to give her multiple orgasms… or a G Spot orgasm…</p>
                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                Be The “One Guy” She Can’t Stop Thinking About No Matter How Many Men She Sleeps With…
                </h2>

                <div class="flex flex-col w-full">
                    <p class="w-full pb-4"> Once you give a woman orgasms this good… you’d better be prepared… </p>
                    <p class="w-full pb-4">Because you may be the guy she’s calling up before her wedding night… begging you to fuck her just one LAST TIME… because you were that damn good in bed!</p>

                    <p class="w-full pb-4">You may be the guy she can’t stop telling her friends about… </p>
                    <p class="w-full pb-4">And soon you’re getting a “reputation” around town… </p>
                    <p class="w-full pb-4">Women are coming to you for sex… even threesomes…</p>
                    <p class="w-full pb-4">That’s why “O.X. Gel” is one of the MOST IMPORTANT sexual secret weapons I’ve ever discovered…</p>
                    <p class="w-full pb-4">That’s why I’m sharing it with you today…</p>
                    <p class="w-full pb-4">And I’ve arranged for you to get a very rare discount on it…</p>
                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                Your Special “New Members” Discount…
                </h2>

                <div class="flex flex-col w-full">
                    <p class="w-full pb-4">“O.X. Gel” normally sells for $<?php echo $normally; ?>...</p>
                    <p class="w-full pb-4">But today, because you’re a new member, you’re going to get a one-time-only discount…</p>
                    <p class="w-full pb-4">You’re only going to pay just $<?php echo $just; ?>.</p>
                    <p class="w-full pb-4">This is a massive <?php echo $savings; ?>% OFF!</p>
                    <div class="flex justify-center w-full pb-4 text-center" >
                        <a class="text-xl underline link-blue clickable" href="#button1">Click Here To Secure Your Discount Now</a>
                    </div>
                    <p class="w-full pb-4"><strong>IMPORTANT:</strong> This deal is only available right here, right now, on this page.</p>
                    <p class="w-full pb-4">Once you leave this page, <strong class="bg-yellow-300 px-2 py-1">this deal is gone for GOOD</strong>… you will not be able to get it again under any circumstances… and your only choice will be to pay FULL price for it like everyone else.</p>

                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                Guaranteed To Work Or It’s <strong>FREE!</strong>
                </h2>

                <section>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/3 mb-4">
                        <img class="mx-auto" src='https://s3.amazonaws.com/5gmale/90-guarantee.jpg' id='guarantee-image-2' alt="guarantee emblem" />
                        </div>
                        <div class="w-full md:w-2/3">
                        <p class="pb-4">I’ll give you a <strong>FULL 90 DAYS</strong> to try this out – that’s three whole months… </p>
                        <p class="pb-4"> And if you’re not blown away by how much more your wife or lover is orgasming… how much more “cock crazy” she’s become… and how much more sexually “in demand” you are… then I’ll give you your <strong>money back in FULL!</strong></p>
                        </div>
                    </div>
                </section>

                <div class="flex flex-col w-full">
                    <p class="w-full pb-4">There is NO WAY I could afford to make a promise like this if I wasn’t <strong>100% SURE</strong> this was going to work for you. </p>
                    <p class="w-full pb-4"> You can just call or email my support team… 24/7, any day of the week… and get a FULL refund. No questions asked and no hassles!</p>
                </div>
                <h2 class="text-red-600 text-2xl text-center my-6">
                Women And Men Absolutely LOVE “O.X. Gel”…
                </h2>

                <div class="flex flex-col w-full">
                    <p class="w-full pb-4"> Amazing praise from men… </p>
                    <p class="w-full pb-2 text-gray-400 px-4 text-lg"><em>“Women are definitely more vocal about how big I feel! I took one girl to a concert and later that night she says “wow your cock feels better than the lead singer of that band would!” And that guy is famous and way better looking than I am.</em></p>
                    <p class="w-full pb-4 text-gray-400 px-4">- Dave G.</p>
                    <p class="w-full pb-2 text-gray-400 px-4 text-lg"><em> “This stuff is so easy to put on. You just do it quick in the middle of foreplay, she won’t even notice and it will give her way bigger orgasms!”</em></p>
                    <p class="w-full pb-4 text-gray-400 px-4">- Matthew K.</p>

                    <p class="w-full pb-4">And from women…</p>
                    <p class="w-full pb-2 text-gray-400 px-4 text-lg"><em>“I had no idea my husband was using this! It’s incredible. The spark is back and the sex is red hot! I’ve never thought I’d have so many orgasms in one night. It’s like we’re newly weds again.”</em></p>
                    <p class="w-full pb-4 text-gray-400 px-4">- Rachael D.</p>
                    <p class="w-full pb-2 text-gray-400 px-4 text-lg"><em>“This hits my g-spot every time and it makes me cum so hard. My man feel BIGGER and thicker inside me. Five stars!”</em></p>
                    <p class="w-full pb-4 text-gray-400 px-4">- Joanne M.</p>
                    <p class="w-full pb-4">With “O.X. Gel,” you can take even the coldest, least sexual girl… or a girl who has hardly any interest in you at all…</p>
                    <p class="w-full pb-4">And turn her into a screaming, ravenous slut who is begging you to fuck her harder… begging for your cum… and screaming she’s wants to have your baby…</p>

                </div>
                <h2 class="text-red-600 text-5xl text-center my-6">
                Secure Your Massive Discount NOW…
                </h2>

                <div class="flex flex-col w-full text-center">
                    <p class="w-full pb-4 text-lg">(IMPORTANT: Once You Leave This Page This Deal Is Gone For GOOD!)</p>
                    <p class="w-full pb-4 text-red-400 text-lg"><strong> Here's What To Do Next:</strong> </p>
                    <p class="w-full pb-4">Just choose the easy discount option below and start giving the woman you’re with pleasure and orgasms she’s never experienced before right away…</p>
                    <p class="w-full pb-4"> (The more you get, the more you save! However, due to the large discount, orders are <strong>strictly limited</strong> to just <?php echo $supply; ?> bottles of “O.X. Gel” per customer.) </p>
                </div>

                <section id="processBlock" class="processblock">
                        <div class="flex flex-col w-full md:mx-auto">
                            <div class="flex flex-wrap md:flex-nowrap justify-between bg-yellow-50 border border-orange-400 border-4 sans">
                                <div class="p-3 w-full md:w-auto text-center md:text-left">
                                    <p class="text-lg text-orange-500 font-semibold">NEW MEMBER DISCOUNT</p>
                                    <p class="text-2xl text-black font-extrabold my-2"><?php echo $supply; ?> BOTTLES (<?php echo $uses; ?> USES)</p>
                                    <div class="flex flex-wrap justify-around md:justify-between text-sm">
                                        <div><span class="text-gray-400 line-through">Retail Price: $<?php echo $retail; ?></div>
                                        <div><span class="text-black">You Pay Just $<?php echo $just; ?></span></div>
                                    </div>
                                    <p class="text-2xl mt-2 text-red-500 font-semibold">You Save $<?php echo $saveprice; ?> Today!</p>
                                </div>

                                <div class="p-3 text-center bg-yellow-100 w-full md:w-auto">
                                    <p class="text-green-400 font-semibold mb-4 text-lg">JUST $<?php echo $bottleprice; ?> PER BOTTLE</p>
                                    <?php if($newflow) { ?>
                                        <a id="btn-two" class="split-buy processlink takebtn" href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up?pid=18&buy=1&next=thank-you" onclick="exit=false;">
                                    <?php } else { ?>
                                        <a id="btn-two" class="split-buy processlink takebtn" href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up?pid=753&buy=1&next=thank-you" onclick="exit=false;">
                                    <?php } ?>
                                    <img src="https://5gm.s3.amazonaws.com/secureorder.gif" style="display: block; margin: 0px auto; width: 100%; max-width: 240px;padding-top: 3px;" alt="secure my order button">
                                    </a>
                                    <p class="percentoff mt-4"><span class="text-red-400 font-semibold"><?php echo $savings; ?>% OFF</span> <span class="text-green-400 font-semibold"> + FREE SHIPPING</span></p>
                                </div>

                            </div>
                        </div>
                    </section>

                    <div class="flex flex-col w-full text-center mt-4">
                    <p class="w-full pb-4 text-lg">All orders are protected by a <strong>90-Day Guarantee</strong>. These discounts are <strong>ONLY</strong> available on this page, right now. Once you leave, these new-member discounts are gone for good.</p>
                    </div>

                    <div class="flex w-full justify-center py-7">
                    <p class='text-center px-5 split-non-buy processlink text-gray-500 text-sm'><a href="//<?php echo $_SERVER['HTTP_HOST']?>/dn/downsell-4.php" style="color: #8C8C8C; text-decoration:underline;" onclick="exit=false;">Skip This</a> - Yes, Ryan, I understand this deep discount is only available on this page and once I leave it will be gone for good. Please give my discount away to another man.</p>
                    </div>
                    <div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-10 pt-3 sans uppercase"> Supernatural Man LLC </div>


            </div>
        </div>
    </div>


    <div id="floatButton" class="flex justify-center md:justify-end w-full p-3 floating-btn">
        <span id="buy-btn" style="display: none;" class="button w-auto">
            Yes, Give Me This Now!
        </span>
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


    <script>

        var scrollPos = window.pageYOffset;
        const docHeight = document.documentElement.scrollHeight;
        const windowHeight = window.innerHeight;
        // element to scroll to
        const scrollElement = document.getElementById('processBlock');
        // flaoting button to hide/show on scroll
        const dynamicElement = document.getElementById('buy-btn');
        window.onscroll = ()=> {
            let currentScrollPos = window.pageYOffset;
            let viewportOffset = scrollElement.getBoundingClientRect();
            let elTop = viewportOffset.top;
            let elScrollTop = scrollElement.scrollTop;
            if (elTop < windowHeight) {
                dynamicElement.style.display = "none";
            } else {
                dynamicElement.style.display = "block";
            }
        }

        // scroll to element via floating button
        dynamicElement.addEventListener('click', function() {
            scrollElement.scrollIntoView({ behavior: 'smooth', block: 'end'});
        })
    </script>


</body>
<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</html>



