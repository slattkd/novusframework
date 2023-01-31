<?php

// Standard one time payment
$product1 = $products['products']['1083'];
$product2 = $products['products']['1084'];
$product3 = $products['products']['1085'];

// VIP autopay
$product4 = $products['products']['1086'];
$product5 = $products['products']['1088'];
$product6 = $products['products']['1090'];

$_SESSION['pageType'] = 'order';

function savedAmt($retail, $price)
{
    $saved = abs($retail - $price);
    $saved = number_format($saved, 2, '.', '');
    return $saved;
}

function monthAmt($price, $month)
{
    return number_format($price / $month, 2);
}

function percentOff($price, $retail)
{
    return round(($retail - $price) / $retail * 100, 0);
}

function perBottle($price, $qty)
{
    return round($price / $qty, 2);
}

if (!isset($_SESSION['vip_discount'])) {
    $_SESSION['vip_discount'] = 0;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php template("includes/header"); ?>
    <title>Total Brain Boost- Secure Order</title>

    <style>
        .header-strip {
            background-color: #006894;
            color: white;
        }

        .check {
            background-image: url("//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png");
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: left 0;
            background-size: 24px 24px;
            padding-left: 30px;
        }

        .vipwrap {
            position: relative;
            display: flex;
            border: 3px dashed #e00000;
        }

        .float-text {
            position: absolute;
            top: -24px;
            left: 30px;
            text-transform: uppercase;
            color: #c10e0e;
            font-weight: 600;
            background-color: #f8f4f4;
            font-size: 1.75em;
            padding: 5px;
            width: auto;
            white-space: break-spaces;
        }

        .vipwrap label {
            font-weight: normal !important;
            font-size: 15px;
            cursor: pointer;
        }

        .vipwrap #vip {
            -webkit-appearance: none;
            background-color: #fafafa;
            border: 2px solid #c10e0e;
            box-shadow: 0 1px 2px rgb(0 0 0 / 5%), inset 0px -15px 10px -12px rgb(0 0 0 / 5%);
            display: inline-block;
            width: 30px;
            height: 30px;
        }

        .vip2 {
            color: #c10e0e;
            line-height: 1.3;
        }

        .checked {
            position: absolute;
            top: 2px;
            left: 2px;
            width: 30px;
            height: 30px;
        }

        .legal {
            font-size: 13px;
            color: gray;
        }

        .vip-pop {
            display: flex;
            justify-content: center;
            margin: 0 10%;
            height: 0;
            opacity: 0;
            padding: 0;
            margin: unset;
            transform: translateY(-5px);
            transition: 300ms cubic-bezier(.27, .21, .2, 1.02);
            visibility: hidden;
            line-height: 1.3em;
            overflow: hidden;
        }

        .vip-pop {
            /* display: none; */
            min-width: 300px;
            max-width: 100%;
            width: 80ch;
            border: 1px solid #777;
            border-radius: 6px;
            padding: 0 1rem;
            background: #fff;
            margin: 0 auto;
        }

        .vip-pop.is-open {
            opacity: 1;
            height: auto;
            visibility: visible;
            padding: 1rem !important;
            margin-top: 1rem;
            transform: translateY(0px);
            pointer-events: none;
        }

        .vip-pop p {
            font-size: 13px !important;
            padding-bottom: 0;
            margin-bottom: 0;
        }


        .order-option-box {
            margin-left: 10px;
            margin-right: 10px;
            background-color: #fff;
            border-radius: 10px;
        }

        .order-option-box {
            margin-left: auto;
            margin-right: auto;
        }

        .order-option-box.selected {
            border: 4px solid #01699c;
        }

        .order-option-box .order-option-row {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-flow: auto;
            -ms-flex-flow: auto;
            flex-flow: auto
        }

        .order-option-box .order-details-col {
            border-radius: 5px 0 0 5px;
        }

        .order-option-box .order-cta-col {
            background-color: #f9f9f9;
            border-left: 1px solid #e6e6e6;
            border-radius: 0 5px 5px 0;
            max-width: 100%;
        }

        .order-option-box .flair {
            margin-top: 0;
            margin-bottom: 0
        }

        .order-option-box .price-details {
            margin-top: 8px;
            padding-top: 5px;
            padding-bottom: 8px;
            margin-bottom: 8px;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd
        }

        .save-title {
            font-size: 22px
        }

        .save-subhead {
            font-size: 17px;
            margin-top: -2px
        }

        .order-option-footer {
            padding: 10px 20px
        }

        .order-option-footer .yt {
            color: #fff56c !important
        }

        /* .text-rpblue {
            color: #0085c6;
        }

        .bg-rpblue {
            background-color: #0085c6;
        } */

        button.cta-button {
            padding: 8px 20px;
        }

        .cta-button:hover {
            border-color: #000;
            box-shadow: none;
        }

        #prod-select {
            -webkit-appearance: none;
            background-color: #fafafa;
            border: 2px solid #000;
            box-shadow: 0 1px 2px rgb(0 0 0 / 5%), inset 0px -15px 10px -12px rgb(0 0 0 / 5%);
            display: inline-block;
            width: 30px;
            height: 30px;
        }

        #prod-select + .checked {
            top: 5px;
            left: 3px;
        }

        .bottle-img {
            max-width: 100%;
        }

        .strike:after {
            content: ' ';
            position: absolute;
            width: 100%;
            border-top: 2px solid #c10e0e;
            left: 0;
            top: 50%;
            color: #c10e0e;
            -webkit-transform: rotate(-4deg);
            -ms-transform: rotate(-4deg);
            transform: rotate(-4deg);
        }


        .wsl p, .wsl h1, .wsl h2 {
          margin-bottom: 20px;
        }

        .wsl h1, .wsl h2 {
          font-weight: 600;
        }

        .wsl h1 {
          line-height: 35px;
          line-height: 1.3;
        }

        h1.text-4xl {
            font-size: 2.5rem;
        }

        .wsl li {
        list-style: none;
        padding: 6px 25px;
        background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/check-green.png');
        background-repeat: no-repeat;
        background-position: left center;
        background-size: 18px;
        }

    </style>

<!-- VisiSmart Code - DO NOT MODIFY--><script async type='text/javascript'>window.visiopt_code=window.visiopt_code||(function(){var visi_wid=513,visi_pid=32,visi_flicker_time=4000,visi_flicker_element='html',c=false,d=document,visi_fn={begin:function(){var a=d.getElementById('visi_flicker');if(!a){var a=d.createElement('style'),b=visi_flicker_element?visi_flicker_element+'{opacity:0!important;background:none!important;}':'',h=d.getElementsByTagName('head')[0];a.setAttribute('id','visi_flicker');a.setAttribute('type','text/css');if(a.styleSheet){a.styleSheet.cssText=b;}else{a.appendChild(d.createTextNode(b));}h.appendChild(a);}},complete:function(){c=true;var a=d.getElementById('visi_flicker');if(a){a.parentNode.removeChild(a);}},completed:function(){return c;},pack:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){visi_fn.complete();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){visi_fn.begin();setTimeout(function(){visi_fn.complete()},visi_flicker_time);this.pack('https://visiopt.com/client/js_test/test.'+visi_wid+'.'+visi_pid+'.js');return true;}};window.visiopt_code_status=visi_fn.init();return visi_fn;}());</script><!--End Of VisiSmart Code -->
</head>

<body class="bg-gray-100" style="height: 100vh;">
    <?php template("includes/rpHeader"); ?>
    <!-- <div class="w-full header-strip pr-2 md:pr-4 text-sm py-1 md:py-0">
        <div class="container container-sm mx-auto flex justify-between items-center">
            <div class="flex justify-center w-full md:w-auto hidden md:flex" style="margin-left: -15px;">
                <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/rp-logo.png" class="mx-auto" style="max-width:250px;filter: brightness(2);">
            </div>
            <div class="mx-auto text-center">
                <span class="lock-icon"><i class="fas fa-lock"></i></span>
                <strong class="black">SECURE</strong>&nbsp;|&nbsp;256-Bit Secure Order
            </div>
            <div class="flex justify-center items-center w-full md:w-auto hidden md:flex">
                <div class="">
                    <i class="fas fa-phone-square-alt phone-ico"></i> Call
                    <a href="tel:<?= $company['phone']; ?>"><?= $company['phone']; ?></a> <span class="lg-up"> for a Product Specialist!</span>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container container-sm mx-auto py-4 px-2 md:px-0">
        <div class="wsl">
            <div class="flex flex-wrap-reverse mb-4">
                <div class="flex flex-col justify-center w-full md:w-3/4 text-center md:text-left">
                    <h1 class="text-3xl md:text-5xl text-tygreen mb-4 md:mb-6 leading-6 title">Boost Memory, Focus & Mood With This Powerful <span style="white-space:nowrap">6-Part</span>&nbsp;Formula</h1>
                    <div class="text-2xl text-rpblue font-semibold mb-0">Guaranteed To Work — Or Your Money&nbsp;Back</div>
                </div>
                <picture class="flex flex-col shrink justify-center w-full md:w-1/4">
                    <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/rp-bottle.avif" type="image/avif">
                    <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/rp-bottle.jpg" alt="brain boost bottle" class="h-full mx-auto w-full bottle-img object-contain w-1/3 md:w-full md:translate-y-8" style="mix-blend-mode: multiply;object-fit:contain">
                </picture>
            </div>


            <ul class="list-disc pl-8 text-lg md:text-xl text-gray-500 mt-0 lg:-mt-8">
                <li class="font-semibold">Clinically proven to aid memory</li>
                <li class="font-semibold">Improve working memory and sustained attention in as little as 1 hour</li>
                <li class="font-semibold">Improved mood: less stressed, confused, angry, or upset</li>
                <li class="font-semibold">Enhanced brain functioning and cognition</li>
                <li class="font-semibold">Featured on CBS, NBC, ABC, Fox, Reuters, WebMD, LA Times, & more.</li>
            </ul>

            <h2 class="text-3xl md:text-4xl text-rpblue mb-4 leading-9 title text-center md:text-left mt-8 md:mt-11">The Difference? Our Ingredients.</h2>

            <p class="text-gray-500">Revival Point™, uses the power of nature combined with cutting-edge science to boost energy, fitness, mental sharpness and overall health. That’s why we formulate with the help of leading MDs using the highest quality ingredients backed by strong, double-blind studies. Only these highly-vetting ingredients should be trusted and are most likely to be effective for you.</p>

            <p class="text-gray-500">Total Brand Boost ingredients far exceed those of other brands. Find out why ours are superior:</p>

            <div class="text-2xl text-tygreen font-semibold mb-3">Clinically Studied Ingredients for Better Memory</div>

            <h3 class="text-xl font-semibold">CurcuRouge® Bio-Optimized Curcumin </h3>
            <p class="text-gray-500">Shown to be absorbed 93 times better by the body thanks to its unique “polymer matrix” technology, CurcuRouge® is able to cross the blood-brain barrier and deliver curcumin’s health-boosting directly to your brain to help fight memory loss, brain fog and depression.</p>

            <h3 class="text-xl font-semibold">Trans-Resveratrol</h3>
            <p class="text-gray-500">A polyphenol found in Red Wine—boosts circulation in the brain, flooding brain cells with the oxygen-rich blood they need for optimal function. </p>

            <h3 class="text-xl font-semibold">Magnesium BisGlycinate </h3>
            <p class="text-gray-500">Restores signaling speed for sharper thinking and faster memory recall. </p>

            <h3 class="text-xl font-semibold">Vitamins B12, D, and Folate </h3>
            <p class="text-gray-500">Essential vitamin-complex for boosting energy metabolism and fighting cognitive decline.</p>

            <h2 class="text-3xl md:text-4xl text-rpblue mb-3 leading-9 title text-center md:text-left mt-8 md:mt-11" style="margin-bottom: 0.5rem;">Better Memory... or Your Money&nbsp;Back</h2>
            <div class="text-2xl text-2xl text-green-600 font-semibold text-center md:text-left">If You Don’t Love The Results, You Won’t Pay A&nbsp;Dime</div>
        </div>

        <div class="wsl flex md:flex flex-col md:flex-row">
            <div class="w-full md:w-1/4 md:flex display">
                <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/90-day-seal-3-x.png" class="mx-auto w-full bottle-img pr-4 max-h-36 mt-8 object-contain">
            </div>
            <div class="w-full md:w-3/4">
                <div class="mt-6">
                    <span class="font-bold">Total Brain Boost</span> comes with our 100% money-back guarantee, including shipping and tax, but we don't stop there…

                    We are so confident in this product and the amazing results you will experience that we want it to be absolutely risk-free for you. If after 3 months you find yourself not completely satisfied, we'll give you your money back — no questions asked.

                    There are absolutely no strings attached, no forms to fill out, and nothing to prove.

                    <!--
                    <div class="flex w-full text-4xl font-semibold mb-2 text-red-700 text-center justify-center md:justify-start">
                        Better Memory... or Your Money Back
                    </div>
                    <p class="text-2xl text-gray-400 mb-6">If You Don’t Love The Results, You Won’t Pay A Dime</p>
                    <div class="flex flex-col items-center md:items-start w-full md:w-1/2 mx-auto">
                        <div class="bull blue-">
                            <div class="mb-5">
                                <div class="check">Helps reduce calorie absorption*</div>
                            </div>
                            <div class="mb-5">
                                <div class="check">Helps reduce hunger cravings*</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center md:items-start w-full md:w-1/2 mx-auto">
                        <div class="bull blue-">
                            <div class="mb-5">
                                <div class="check">Helps support energy and focus*</div>
                            </div>
                            <div class="mb-5">
                                <div class="font-semibold check">AVAILABILITY: <span class="bg-green-600 py-2 px-3 ml-2 text-white rounded-lg">IN STOCK!</span></div>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>

        </div>

        <div class="flex justify-center items-center border-y-2 py-3 mt-8 mb-10">
            <div class="mr-3">
                <img class="truck max-h-8 object-contain text-right" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/icon-shipping-truck-green.png" style="width: 100px; height:auto;">
            </div>
            <p class="leading-6 pt-4">Shipping Not Impacted By Supply Chain Issues! Ultra-fast delivery straight to your&nbsp;door.</p>
        </div>

        <div class="flex flex-col items-center justify-center text-center mb-4 md:hidden" style="max-width: 100vw;">
            <div class="font-bold text-4xl text-red-700 condensed">Choose Your Discount:</div>
            <div class="font-semibold">(The More You Buy, The More You Save!)</div>
        </div>

        <div class="vipwrap bg-yellow-100 md:bg-transparent px-0 md:px-5 md:pt-5 rounded-md md:rounded-none">
            <div class="float-text hidden md:block">LIMITED TIME OFFER!</div>
            <label for="vip" class="flex flex-col p-3 pb-2 w-full">
                <div class="flex items-start py-1 md:py-3">
                    <div class="check-box" style="position:relative;">
                        <input type="checkbox" id="vip" name="vip" style="filter:none" onchange="<?php $_SESSION['vip_discount'] = $_SESSION['vip_discount'] == 0 ? 1 : 0; ?>">
                        <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                    </div>
                    <div class="flex flex-col -mt-2 ml-2">
                        <div class="vip2 mb-0 text-xl hidden md:block">Get an Extra 10% OFF, &amp; Free Newsletter</div>
                        <div class="vip2 mb-0 text-red-700 text-lg font-bold md:hidden uppercase">Special Coupon Offer <br> <span class="text-black text-sm">Get an Extra 10% OFF Your Order</span></div>
                        <p class="click-offer mb-3 hidden md:block">Click the checkbox to get the offer and sign up for easy auto shipments.</p>

                    </div>
                </div>
                <p class="click-offer mb-3 md:hidden">Tap here and get an extra 10% off your order with easy monthly refills and free shipping – pause or cancel anytime!</p>

            </label>

        </div><!-- end .vipwrap -->
        <div class="flex my-3">
            <p class="legal"><em>Hassle-Free Guarantee: You are always notified before each shipment so you can skip, pause, cancel, or swap out products.</em></p>
        </div>
        <div class="pop-container flex justify-center mx-8 md:mx-0">
            <div class="vip-pop">
                <p>By checking the sign up box, you agree to receive a shipment of <?= $company['featuredProduct']; ?> each month. You are authorizing us to charge your credit card monthly, matching the package you have selected. You can stop shipments at any time by calling our customer support team at 1-800-253-8173. Agents are standing by 7 days a week, 24 hours per day, to assist you.</p>
            </div>
        </div>

        <div class="flex justify-center my-4 mt-8 hidden md:flex">
            <div class="font-bold text-4xl text-rpblue">Choose Your Discount</div>
        </div>

        <div id="single-pay" class="flex flex-col w-full mt-4 md:mt-0">
            <!-- single card 1 -->
            <div id="first-card" class="order-option-box selected fs-2 w-full shadow-lg mb-5" onclick="prodSelect(event, <?= $product2['product_id']; ?>, <?= savedAmt($product2['product_retail'], $product2['product_price']); ?>, <?= percentOff($product2['product_price'], $product2['product_retail']); ?>)">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col px-4 md:px-8 py-3 grow md:w-1/2 pt-0 md:pt-4">
                        <div class="flex flex-col items-center flex-wrap justify-center md:justify-start md:items-start bg-rpblue md:bg-white rounded-t text-xl font-semibold ls10 -mx-5 md:mx-0 p-2 md:p-1 text-white md:text-rpblue">
                            <div>DOCTOR RECOMMENDED</div>
                            <div class="md:hidden text-sm font-normal">Take 2-3X The Dose To Boost Results…</div>
                        </div>
                        <p class="flair-subhead mt0 mb3 hidden md:block">Take Multiple Capsules Per Day to Boost Results</p>

                        <h1 class="text-black text-4xl md:text- font-bold mb-3 hidden md:block">
                            3 Month Supply
                        </h1>
                        <h1 class="flex items-center mb-0 flex-nowrap text-black text-4xl md:text- font-bold my-3 md:hidden">
                            <div class="check-box mr-2" style="position:relative;">
                                <input type="checkbox" id="prod-select" name="prod-select" style="pointer-events:none">
                                <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                            </div>
                            <!-- <?= $product2['product_qty']; ?> Bottles -->
                            <?= $product2['product_month']; ?> Months
                        </h1>

                        <div class="flex flex-nowrap md:justify-between md:border-y-2 md:py-3">
                            <div class="flex flex-nowrap text-gray-600 hidden md:flex">
                                <div>Retail Price: </div>
                                <div class="relative ml-1"><span class="strike">$<?= number_format($product2['product_retail'], 2); ?></span></div>
                            </div>
                            <div class="text-gray-600 mr-4 md:hidden" style="margin-left: 3rem; position:relative;">
                                <span class="strike">$<?= number_format($product2['product_retail'], 2); ?></span>
                            </div>
                            <div class="hidden md:block">
                                You Pay Just <span id="main-price2">$<?= number_format($product2['product_price'],2); ?></span>
                            </div>
                            <div class="md:hidden">
                            <span id="main-price2">Just $<?= monthAmt($product2['product_price'], $product2['product_month']); ?> per month!</span>
                            </div>

                        </div>
                        <h4 class="font-semibold text-lg mb-0 text-rpblue md:text-black md:hidden" style="margin-left: 3rem;"><span id="off-price2"><?= percentOff($product2['product_price'], $product2['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <h3 class="text-red-700 font-semibold text-2xl mt-2 hidden md:block">
                            YOU SAVE <span id="save-price2">$<?= savedAmt($product2['product_retail'], $product2['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow 5 md:p-8 flex-col items-center text-center hidden md:flex">
                        <h3 class="ctr mt-0 mb-1 text-rpblue text-2xl hidden md:block">
                            Just <span id="bottle-price2">$<?= perBottle($product2['product_price'], $product2['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable hidden md:block" onclick="addProduct(<?= $product2['product_id']; ?>)"><em>Secure My Order</em></button></span>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3 text-rpblue md:text-black"><span id="off-price2"><?= percentOff($product2['product_price'], $product2['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16 hidden md:block">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
            <!-- single card 2 -->
            <div class="order-option-box fs-2 w-full mb-5 border-4" onclick="prodSelect(event, <?= $product3['product_id']; ?>, <?= savedAmt($product3['product_retail'], $product3['product_price']); ?>, <?= percentOff($product3['product_price'], $product3['product_retail']); ?>)">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col grow md:w-1/2 px-4 md:px-8 py-3 pt-0 md:pt-4">
                        <div class="flex justify-center md:justify-start bg-stone-400 md:bg-white rounded-t-md text-xl font-semibold ls10 -mx-4 md:mx-0 p-1 text-white md:text-gray-500">
                            BIGGEST DISCOUNT
                        </div>
                        <p class="flair-subhead mt0 mb3 hidden">Take Multiple Capsules Per Day to Boost Results</p>

                        <h1 class="text-black text-4xl md:text- font-bold mb-3 hidden md:block">
                            6 Month Supply
                        </h1>
                        <h1 class="flex items-center mb-0 flex-nowrap text-black text-4xl md:text- font-bold my-3 md:hidden">
                            <div class="check-box mr-2" style="position:relative;">
                                <input type="checkbox" id="prod-select" name="prod-select" style="pointer-events:none">
                                <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                            </div>
                            <!-- <?= $product3['product_qty']; ?> Bottles -->
                            <?= $product3['product_month']; ?> Months
                        </h1>

                        <div class="flex md:justify-between md:border-y-2 md:py-3">
                        <div class="flex flex-nowrap text-gray-600 hidden md:flex">
                            <div>Retail Price: </div>
                                <div class="relative ml-1"><span class="strike">$<?= number_format($product3['product_retail'], 2); ?></span></div>
                            </div>
                            <div class="text-gray-600 mr-4 md:hidden" style="margin-left: 3rem; position:relative;">
                                <span class="strike">$<?= number_format($product3['product_retail'], 2); ?></span>
                            </div>
                            <div class="">
                                You Pay Just <span id="main-price2">$<?= number_format($product3['product_price'],2); ?></span>
                            </div>
                            <!-- <div class="md:hidden">
                            Just <span id="main-price2"><?= monthAmt($product3['product_price'], $product3['product_month']); ?> per month!</span>
                            </div> -->

                        </div>
                        <h4 class="font-semibold text-lg mb-0 text-rpblue md:text-black md:hidden" style="margin-left: 3rem;"><span id="off-price2"><?= percentOff($product3['product_price'], $product3['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <h3 class="text-red-700 font-semibold text-2xl mt-2 hidden md:block">
                            YOU SAVE <span id="save-price2">$<?= savedAmt($product3['product_retail'], $product3['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow p-3 md:p-8 flex-col items-center text-center hidden md:flex">
                        <h3 class="ctr mt-0 mb-1 text-rpblue text-2xl hidden md:block">
                            Just <span id="bottle-price2">$<?= perBottle($product3['product_price'], $product3['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable hidden md:block" onclick="addProduct(<?= $product3['product_id']; ?>)"><em>Secure My Order</em></button></span>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3 text-rpblue md:text-black"><span id="off-price2"><?= percentOff($product3['product_price'], $product3['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16 hidden md:block">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
            <!-- single card 3 -->
            <div class="order-option-box fs-2 w-full mb-5 border-4" onclick="prodSelect(event, <?= $product1['product_id']; ?>, <?= savedAmt($product1['product_retail'], $product1['product_price']); ?>, <?= percentOff($product1['product_price'], $product1['product_retail']); ?>)">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col grow md:w-1/2 px-4 md:px-8 py-3 pt-0 md:pt-4">
                        <div class="flex justify-center md:justify-start bg-stone-400 md:bg-white rounded-t-md text-xl font-semibold ls10 -mx-4 md:mx-0 p-1 text-white md:text-gray-500">
                            STARTER OPTION
                        </div>

                        <p class="flair-subhead mt0 mb3 hidden">Take Multiple Capsules Per Day to Boost Your Results</p>

                        <h1 class="text-black text-4xl md:text- font-bold mb-3 hidden md:block">
                            1 Month Supply
                        </h1>
                        <h1 class="flex items-center mb-0 flex-nowrap text-black text-4xl md:text- font-bold my-3 md:hidden">
                            <div class="check-box mr-2" style="position:relative;">
                                <input type="checkbox" id="prod-select" name="prod-select" style="pointer-events:none">
                                <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                            </div>
                            <!-- <?= $product1['product_qty']; ?> Bottles -->
                            <?= $product1['product_month']; ?> Months
                        </h1>

                        <div class="flex md:justify-between md:border-y-2 md:py-3">
                            <div class="flex flex-nowrap text-gray-600 hidden md:flex">
                                <div>Retail Price: </div>
                                <div class="relative ml-1"><span class="strike">$<?= number_format($product1['product_retail'], 2); ?></span></div>
                            </div>
                            <div class="text-gray-600 mr-4 md:hidden" style="margin-left: 3rem; position:relative;">
                                <span class="strike">$<?= number_format($product1['product_retail'], 2); ?></span>
                            </div>
                            <div class="">
                                You Pay Just <span id="main-price2">$<?= number_format($product1['product_price'],2); ?></span>
                            </div>
                            <!-- <div class="md:hidden">
                            Just <span id="main-price2"><?= monthAmt($product1['product_price'], $product1['product_month']); ?> per month!</span>
                            </div> -->

                        </div>
                        <h4 class="font-semibold text-lg mb-0 text-rpblue md:text-black md:hidden" style="margin-left: 3rem;"><span id="off-price2"><?= percentOff($product1['product_price'], $product1['product_retail']); ?>%</span> OFF + $6.95 US Shipping</h4>
                        <h3 class="text-red-700 font-semibold text-2xl mt-2 hidden md:block">
                            YOU SAVE <span id="save-price2">$<?= savedAmt($product1['product_retail'], $product1['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow p-3 md:p-8 flex-col items-center text-center hidden md:flex">
                        <h3 class="ctr mt-0 mb-1 text-rpblue text-2xl hidden md:block">
                            Just <span id="bottle-price2">$<?= perBottle($product1['product_price'], $product1['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable hidden md:block" onclick="addProduct(<?= $product1['product_id']; ?>)"><em>Secure My Order</em></button></span>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3 text-rpblue md:text-black"><span id="off-price2"><?= percentOff($product1['product_price'], $product1['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16 hidden md:block">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="auto-pay" class="flex flex-col w-full hidden mt-4 md:mt-0">
            <!-- auto card 1 -->
            <div id="first-card" class="order-option-box selected fs-2 w-full shadow-lg mb-5" onclick="prodSelect(event, <?= $product5['product_id']; ?>, <?= savedAmt($product5['product_retail'], $product5['product_price']); ?>, <?= percentOff($product5['product_price'], $product5['product_retail']); ?>)">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col px-4 md:px-8 py-3 grow md:w-1/2 pt-0 md:pt-4">
                        <div class="flex flex-col items-center flex-wrap justify-center md:justify-start md:items-start bg-rpblue md:bg-white rounded-t text-xl font-semibold ls10 -mx-5 md:mx-0 p-2 md:p-1 text-white md:text-rpblue">
                            <div>DOCTOR RECOMMENDED</div>
                            <div class="md:hidden text-sm font-normal">Take 2-3X The Dose To Boost Results…</div>
                        </div>
                        <p class="flair-subhead mt0 mb3 hidden md:block">Take Multiple Capsules Per Day to Boost Results</p>

                        <h1 class="text-black text-4xl md:text- font-bold mb-3 hidden md:block">
                            3 Month Supply
                        </h1>
                        <h1 class="flex items-center mb-0 flex-nowrap text-black text-4xl md:text- font-bold my-3 md:hidden">
                            <div class="check-box mr-2" style="position:relative;">
                                <input type="checkbox" id="prod-select" name="prod-select" style="pointer-events:none">
                                <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                            </div>
                            <!-- <?= $product5['product_qty']; ?> Bottles -->
                            <?= $product5['product_month']; ?> Months
                        </h1>

                        <div class="flex md:justify-between md:border-y-2 md:py-3">
                            <div class="flex flex-nowrap text-gray-600 hidden md:flex">
                                <div>Retail Price: </div>
                                <div class="relative ml-1"><span class="strike">$<?= number_format($product5['product_retail'], 2); ?></span></div>
                            </div>
                            <div class="text-gray-600 mr-4 md:hidden" style="margin-left: 3rem; position:relative;">
                                <span class="strike">$<?= number_format($product5['product_retail'], 2); ?></span>
                            </div>
                            <div class="">
                                You Pay Just <span id="main-price2">$<?= number_format($product5['product_price'],2); ?></span>
                            </div>
                            <!-- <div class="md:hidden">
                            Just <span id="main-price2"><?= monthAmt($product5['product_price'], $product5['product_month']); ?> per month!</span>
                            </div> -->

                        </div>
                        <h4 class="font-semibold text-lg mb-0 text-rpblue md:text-black md:hidden" style="margin-left: 3rem;"><span id="off-price2"><?= percentOff($product5['product_price'], $product5['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <h3 class="text-red-700 font-semibold text-2xl mt-2 hidden md:block">
                            YOU SAVE <span id="save-price2">$<?= savedAmt($product5['product_retail'], $product5['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow 5 md:p-8 flex-col items-center text-center hidden md:flex">
                        <h3 class="ctr mt-0 mb-1 text-rpblue text-2xl hidden md:block">
                            Just <span id="bottle-price2">$<?= perBottle($product5['product_price'], $product5['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable hidden md:block" onclick="addProduct(<?= $product5['product_id']; ?>)"><em>Secure My Order</em></button></span>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3 text-rpblue md:text-black"><span id="off-price2"><?= percentOff($product5['product_price'], $product5['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16 hidden md:block">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
            <!-- auto card 2 -->
            <div class="order-option-box fs-2 w-full mb-5 border-4" onclick="prodSelect(event, <?= $product6['product_id']; ?>, <?= savedAmt($product6['product_retail'], $product6['product_price']); ?>, <?= percentOff($product6['product_price'], $product6['product_retail']); ?>)">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col grow md:w-1/2 px-4 md:px-8 py-3 pt-0 md:pt-4">
                        <div class="flex justify-center md:justify-start bg-stone-400 md:bg-white rounded-t-md text-xl font-semibold ls10 -mx-4 md:mx-0 p-1 text-white md:text-gray-500">
                            BIGGEST DISCOUNT
                        </div>
                        <p class="flair-subhead mt0 mb3 hidden">Take Multiple Capsules Per Day to Boost Your Results</p>

                        <h1 class="text-black text-4xl md:text- font-semibold mb-3 hidden md:block">
                            <!-- <?= $product6['product_qty']; ?> Bottle Supply -->
                            <?= $product6['product_month']; ?> Month Supply
                        </h1>
                        <h1 class="flex items-center mb-0 flex-nowrap text-black text-4xl md:text- font-bold my-3 md:hidden">
                            <div class="check-box mr-2" style="position:relative;">
                                <input type="checkbox" id="prod-select" name="prod-select" style="pointer-events:none">
                                <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                            </div>
                            <!-- <?= $product6['product_qty']; ?> Bottles -->
                            <?= $product6['product_month']; ?> Months
                        </h1>

                        <div class="limited-offer py-3 pt-0 hidden md:block">
                            <span class="text-red-700 text-xl font-semibold">LIMITED TIME OFFER:</span>
                            <p class="text-red-700 font-semibold">2 Free Bottles of Vitamin D3 with Purchase!</p>
                        </div>

                        <div class="flex md:justify-between md:border-y-2 md:py-3">
                            <div class="flex flex-nowrap text-gray-600 hidden md:flex">
                                <div>Retail Price: </div>
                                <div class="relative ml-1"><span class="strike">$<?= number_format($product6['product_retail'], 2); ?></span></div>
                            </div>
                            <div class="text-gray-600 mr-4 md:hidden" style="margin-left: 3rem; position:relative;">
                                <span class="strike">$<?= number_format($product6['product_retail'], 2); ?></span>
                            </div>
                            <div class="">
                                You Pay Just <span id="main-price2">$<?= number_format($product6['product_price'],2); ?></span>
                            </div>
                            <!-- <div class="md:hidden">
                            Just <span id="main-price2"><?= monthAmt($product6['product_price'], $product6['product_month']); ?> per month!</span>
                            </div> -->

                        </div>
                        <h4 class="font-semibold text-lg mb-0 text-rpblue md:text-black md:hidden" style="margin-left: 3rem;"><span id="off-price2"><?= percentOff($product6['product_price'], $product6['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <h3 class="text-red-700 font-semibold text-2xl mt-2 hidden md:block">
                            YOU SAVE <span id="save-price2">$<?= savedAmt($product6['product_retail'], $product6['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow p-3 md:p-8 flex-col items-center text-center hidden md:flex">
                        <h3 class="ctr mt-0 mb-1 text-rpblue text-2xl hidden md:block">
                            Just <span id="bottle-price2">$<?= perBottle($product6['product_price'], $product6['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable hidden md:block" onclick="addProduct(<?= $product6['product_id']; ?>)"><em>Secure My Order</em></button></span>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3 text-rpblue md:text-black"><span id="off-price2"><?= percentOff($product6['product_price'], $product6['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16 hidden md:block">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
            <!-- auto card 3 -->
            <div class="order-option-box fs-2 w-full mb-5 border-4" onclick="prodSelect(event, <?= $product4['product_id']; ?>, <?= savedAmt($product4['product_retail'], $product4['product_price']); ?>, <?= percentOff($product4['product_price'], $product4['product_retail']); ?>)">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col grow md:w-1/2 px-4 md:px-8 py-3 pt-0 md:pt-4">
                        <div class="flex justify-center md:justify-start bg-stone-400 md:bg-white rounded-t-md text-xl font-semibold ls10 -mx-4 md:mx-0 p-1 text-white md:text-gray-500">
                            STARTER OPTION
                        </div>
                        <p class="flair-subhead mt0 mb3 hidden">Take Multiple Capsules Per Day to Boost Your Results</p>

                        <h1 class="text-black text-4xl md:text- font-bold mb-3 hidden md:block">
                            <?= $product4['product_qty']; ?> Month Supply
                        </h1>
                        <h1 class="flex items-center mb-0 flex-nowrap text-black text-4xl md:text- font-bold my-3 md:hidden">
                            <div class="check-box mr-2" style="position:relative;">
                                <input type="checkbox" id="prod-select" name="prod-select" style="pointer-events:none">
                                <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                            </div>
                            <!-- <?= $product4['product_qty']; ?> Bottles -->
                            <?= $product4['product_month']; ?> Months
                        </h1>



                        <div class="flex md:justify-between md:border-y-2 md:py-3">
                            <div class="flex flex-nowrap text-gray-600 hidden md:flex">
                                <div>Retail Price: </div>
                                <div class="relative ml-1"><span class="strike">$<?= number_format($product4['product_retail'], 2); ?></span></div>
                            </div>
                            <div class="text-gray-600 mr-4 md:hidden" style="margin-left: 3rem; position:relative;">
                                <span class="strike">$<?= number_format($product4['product_retail'], 2); ?></span>
                            </div>
                            <div class="">
                                You Pay Just <span id="main-price2">$<?= number_format($product4['product_price'],2); ?></span>
                            </div>
                            <!-- <div class="md:hidden">
                            Just <span id="main-price2"><?= monthAmt($product4['product_price'], $product4['product_month']); ?> per month!</span>
                            </div> -->

                        </div>
                        <h4 class="font-semibold text-lg mb-0 text-rpblue md:text-black md:hidden" style="margin-left: 3rem;"><span id="off-price2"><?= percentOff($product4['product_price'], $product4['product_retail']); ?>%</span> OFF + $6.95 US Shipping</h4>
                        <h3 class="text-red-700 font-semibold text-2xl mt-2 hidden md:block">
                            YOU SAVE <span id="save-price2">$<?= savedAmt($product4['product_retail'], $product4['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow p-3 md:p-8 flex-col items-center text-center hidden md:flex">
                        <h3 class="ctr mt-0 mb-1 text-rpblue text-2xl hidden md:block">
                            Just <span id="bottle-price2">$<?= perBottle($product4['product_price'], $product4['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable hidden md:block" onclick="addProduct(<?= $product4['product_id']; ?>)"><em>Secure My Order</em></button></span>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3 text-rpblue md:text-black"><span id="off-price2"><?= percentOff($product4['product_price'], $product4['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16 hidden md:block">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container container-vsl flex flex-col bg-white border-t border-b pt-3 md:hidden" style="max-width:3000px">
        <div class="flex justify-center mt-2">
            <h3 class="text-red-700 font-semibold text-2xl md:text-3xl md:hidden">You Save <span id="save-price-final">...</span></h3>
        </div>
        <div class="flex justify-center mb-2">
            <button id="btn-mobile" class="cta-button text-3xl clickable hidden md:block" onclick="submitMobileProduct()" style="margin-top: 0.5rem"><em>Secure My Order</em></button>
        </div>
    </div>

    <div class="container container-vsl flex flex-col items-center justify-center w-full py-3 px-2 mt-3 md:hidden">
        <div class="flex justify-center text-center py-3">
            Certified As Secure & Trustworthy By The Leading Companies:
        </div>
        <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/sec-icons-new.png" style="max-width: 600px;mix-blend-mode: multiply;">
    </div>

    <div class="flex flex-col py-4 border-t border-b items-center bg-white" style="padding: 2.5rem 0.5rem;">
            <div class="container container-sm flex">
                <div class="gbox flex flex-col w-full md:w-3/5">
                    <div class="gseal fs-2" id="scroll-trigger">
                        <img src="https://s3.amazonaws.com/5gm/checkout/90-day-icon.gif" class="seal">
                    </div>
                    <h4 class="text-center text-lg">Your Purchase Today Is Fully Protected By Our</h4>
                    <h1 class="text-center text-4xl font-bold text-rpblue condensed">90-DAY MONEY BACK GUARANTEE</h1>
                    <p class="my-4">We want to make 100% sure that you love <?php echo $company['featuredProduct']; ?>, which is why you get to try it completely risk free for 90 days – that’s <strong>THREE FULL MONTHS</strong> – and make sure you love&nbsp;it. </p>
                    <p>Any time you want, you can call support at <strong>800-253-8173</strong> or email <strong><?php echo $company['email']; ?>,</strong> 24 hours a day, 7 days a week to request a refund, with no questions asked and no hassles!
                    </p>
                    <div class="flex flex-col md:flex-row items-center justify-center mt-5">
                        <div class="flex justify-center">
                            <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/robertallen.png">
                        </div>
                        <div class="text-center md:text-left">
                            <p class="text-sm">Robert Allen, Head of Research <br> at <span class="nw-all"><?php echo $company['name']; ?></span></p>
                        </div>
                    </div>


                </div>

                <div class="flex flex-col px-8 py-4 buyer-protection hidden w-2/5 md:flex bg-gray-100 border border-l">
                    <h5 class="text-rpblue text-2xl font-semibold text-center uppercase mb-4">Buyer Protection</h5>

                    <div class="bull blue-q pad20">
                        <div class="mb-5">
                            <h6><span class="font-semibold">Fast Shipping</span></h6>
                            <p>Your order ships ASAP with tracking info</p>
                        </div>

                        <div class="mb-5">
                            <h6 class="font-semibold">24/7 Live Phone Help
                        </h6>
                            <p>Talk to a real, live customer support specialist at any time</p>
                        </div>

                        <div class="mb-5">
                            <h6 class="font-semibold">Credit Card charged as "REVIVAL POINT"
                        </h6>
                            <p>Know who’s charging your&nbsp;card</p>
                        </div>
                        <div class="mb-5">
                            <h6 class="font-semibold">Privacy Guaranteed
                        </h6>
                            <p>Your information is safe with us and is never shared</p>
                        </div>
                        <div class="mb-5">
                            <h6 class="font-semibold">Lowest Price Guaranteed
                        </h6>
                            <p>You will never see this at a lower price, guaranteed.</p>
                        </div>

                    </div>

                </div>
            </div>
            <h2 class="text-rpblue font-semibold text-2xl text-center mt-3 md:hidden">3-Day DHL Guaranteed <br> for USA Orders</h2>
            <h5 class="text-rpblue text-center md:hidden" >(6-8 Days For All Other Countries)</h5>
    </div>

    <div class="flex container container-vsl py-3 justify-center mx-auto">
    <button id="btn-two" class="cta-button text-3xl clickable hidden md:block" onclick="scrollToCTA();"><em>Secure My Order</em></button>
    </div>

    <!-- hidden inputs -->
    <form id="order-form" method="post" action="/discount">
        <input type="hidden" name="previous_page" value="">
        <input type="hidden" name="current_page" value="/checkout/order">
        <input type="hidden" name="next_page" id="next-page" value="/discount">
        <input type="hidden" name="product_id" id="product_id" value='<?= $_SESSION["pid"]; ?>'>
    </form>

    <script>
        const isMobile = Math.min(window.innerWidth) < 769;

        const pop = document.querySelector('.vip-pop');
        const vip = document.querySelector('.vipwrap');
        const vipInput = document.getElementById('vip');
        const check = document.querySelector('.checked');

        if (!isMobile) {
            vip.addEventListener('mouseover', () => {
                pop.classList.add('is-open');
            })
            vip.addEventListener('mouseleave', () => {
                pop.classList.remove('is-open');
            })
        }


        vipInput.addEventListener('change', () => {
            if (vipInput.checked) {
                check.classList.remove('hidden');
                if (isMobile) {
                    pop.classList.add('is-open');
                }
                showOffers(true);
            } else {
                check.classList.add('hidden');
                if (isMobile) {
                    pop.classList.remove('is-open');
                }
                showOffers(false);
            }
            let firstCard = document.getElementById('first-card');
            firstCard.click();
        })
        const firstProdCard = document.getElementById('first-card');
        document.addEventListener('DOMContentLoaded', ()=> {
            firstProdCard.click();
        })

        const form = document.getElementById('order-form');
        const singleCards = document.getElementById('single-pay');
        const autoCards = document.getElementById('auto-pay');

        function showOffers(bool) {
            const limitedOffers = document.querySelectorAll('.limited-offer');
            const nextPage = document.getElementById('next-page');
            if (bool) {
                singleCards.classList.add('hidden');
                autoCards.classList.remove('hidden');
                nextPage.value = '/checkout/step1';
                form.action = '/checkout/step1';

            } else {
                singleCards.classList.remove('hidden');
                autoCards.classList.add('hidden');
                nextPage.value = '/discount';
                form.action = '/discount';
            }

        }

        const pidInput = document.getElementById('product_id');

        function addProduct(pid) {
            pidInput.value = pid;
            form.submit();
        }

        const prodChecks = document.querySelectorAll('#prod-select');
        const finalSaveText = document.getElementById('save-price-final');
        function prodSelect(event, id, save, percentOff) {
            if (isMobile) {
                Array.from(prodChecks).forEach(chk => chk.nextElementSibling.classList.add('hidden'));
                const element = event.currentTarget.querySelector('.checked');
                element.classList.remove('hidden');
                pidInput.value = id;
                finalSaveText.innerText = `$ ${save} (${percentOff}% OFF)`;
            } else {
                //console.log('do nothing');
            }


        }

        function submitMobileProduct() {
            if (pidInput.value !== '' && pidInput.value !== null && pidInput.value !== undefined) {
                form.submit();
            }
        }

        function scrollToCTA() {
            const ctaArea = document.querySelector('.vipwrap');
            ctaArea.scrollIntoView({behavior: "smooth", block: "start"});
        }


    </script>


    <?php template("includes/rpFooter"); ?>
    <?php if ($site['debug'] == true) {
        // Show Debug bar only on whitelisted domains.
        template('debug', null, null, 'debug');
    } ?>
</body>

</html>