<?php


$product1 = $products['products']['1083'];

$product2 = $products['products']['1084'];

$product3 = $products['products']['1085'];

function savedAmt($retail, $price)
{
    $saved = round($retail - $price, 2);
    return abs($saved);
}

function monthAmt($price, $month)
{
    return round($price / $month, 2);
}

function percentOff($price, $retail)
{
    return round(($retail - $price) / $retail * 100, 0);
}

function perBottle($price, $qty)
{
    return round($price / $qty, 2);
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
            margin-top: 1.5rem;
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
            padding: 20px;
            cursor: pointer;
        }

        .vipwrap #vip {
            -webkit-appearance: none;
            background-color: #fafafa;
            border: 3px solid #c10e0e;
            box-shadow: 0 1px 2px rgb(0 0 0 / 5%), inset 0px -15px 10px -12px rgb(0 0 0 / 5%);
            display: inline-block;
            width: 30px;
            height: 30px;
        }

        .vip2 {
            display: inline-block;
            color: #c10e0e;
            font-size: 17px;
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
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
            min-width: 350px;
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
            margin-bottom: 2rem;
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
            border: 4px solid #007fbd;
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

        .txt-blue {
            color: #0085c6;
        }
        .cta-button {
            min-width: 320px;
        }
        .cta-button:hover {
            border-color: #000;
            box-shadow: none;
        }
    </style>


</head>

<body class="bg-gray-100" style="height: 100vh;">
    <div class="w-full header-strip pr-2 md:pr-4 text-sm py-1 md:py-0">
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
    </div>
    <div class="container container-sm mx-auto py-8 px-2 md:px-0">

        <div class="flex">
            <div class="w-1/4 hidden md:flex">
                <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/rp-bottle.png" class="mx-auto w-full" style="max-width: 100%; height: auto; margin-top: -10%;object-fit: cover;">
            </div>
            <div class="w-full md:w-3/4">
                <div class="flex flex-wrap">
                    <div class="flex w-full text-3xl font-semibold text-red-700 mb-8 text-center justify-center md:justify-start">
                        Step 1: Get My Discount Below Now...
                    </div>
                    <div class="flex flex-col items-center md:items-start w-full md:w-1/2 mx-auto">
                        <div class="bull blue-q">
                            <div class="mb-5">
                                <div class="check">Helps reduce calorie absorption*</div>
                            </div>
                            <div class="mb-5">
                                <div class="check">Helps reduce hunger cravings*</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center md:items-start w-full md:w-1/2 mx-auto">
                        <div class="bull blue-q">
                            <div class="mb-5">
                                <div class="check">Helps support energy and focus*</div>
                            </div>
                            <div class="mb-5">
                                <div class="font-semibold check">AVAILABILITY: <span class="bg-green-600 py-2 px-3 ml-2 text-white rounded-lg">IN STOCK!</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center border-y-2 py-3 mt-8">
                    <div class="mr-3">
                        <img class="truck" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/icon-shipping-truck-green.png" style="width: 100px; height:auto;">
                    </div>
                    <p>Shipping Not Impacted By Supply Chain Issues! Ultra-fast delivery straight to your door.</p>
                </div>

            </div>
        </div>
        <div class="vipwrap">
            <div class="float-text">LIMITED TIME OFFER!</div>
            <label for="vip" class="flex flex-col p-3 pb-2 w-full">
                <div class="flex items-start py-3">
                    <div class="check-box" style="position:relative;">
                        <input type="checkbox" id="vip" name="vip">
                        <span class="checked hidden"><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png" alt="checked" class="vipimg"></span>
                    </div>
                    <div class="flex flex-col -mt-2 ml-2">
                        <div class="vip2">Get a Free Bottle of Vitamin D3, an Extra 10% OFF, &amp; Free Newsletter</div>
                    </div>
                </div>
                <p class="click-offer mb-3">Click the checkbox to get the offer and sign up for easy auto shipments.</p>
                <p class="legal"><em>Hassle-Free Guarantee: You are always notified before each shipment so you can skip, pause, cancel, or swap out products.</em></p>
            </label>

        </div><!-- end .vipwrap -->
        <div class="pop-container">
            <div class="vip-pop">
                <p>By checking the sign up box, you agree to receive a shipment of Floraspring each month. You are authorizing us to charge your credit card monthly, matching the package you have selected. You can stop shipments at any time by calling our customer support team at 1-800-253-8173. Agents are standing by 7 days a week, 24 hours per day, to assist you.</p>
            </div>
        </div>

        <div class="flex justify-center my-4 mt-8">
            <div class="font-bold text-4xl txt-blue">Choose Your Discount</div>
        </div>

        <div class="flex flex-col w-full">
            <!-- card 1 -->
            <div class="order-option-box selected fs-2 w-full shadow-lg mb-5">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col p-5 md:p-8 grow md:w-1/2">
                        <h5 class="text-xl md:text-2xl txt-blue ls10">
                            DOCTOR RECOMMENDED
                        </h5>
                        <p class="flair-subhead mt0 mb3 hidden md:block">Take Multiple Capsules Per Day to Boost Your Results</p>

                        <h1 class="text-black text-4xl md:text-5xl font-bold my-3">
                            <?= $product2['product_qty']; ?> Bottle Supply
                        </h1>

                        <div class="limited-offer py-3 pt-0 hidden">
                            <span class="text-red-700 text-xl font-semibold">LIMITED TIME OFFER:</span>
                            <p class="text-red-700 font-semibold">1 Free Bottle of Vitamin D3 with Purchase!</p>
                        </div>

                        <div class="flex justify-between border-y-2 py-3">
                            <div>
                                <span class="text-gray-600">Retail Price: <span class="line-through">
                                        $<?= $product2['product_retail']; ?>
                                    </span></span>
                            </div>
                            <div>
                                You Pay Just <span id="main-price2">$<?= $product2['product_price']; ?></span>
                            </div>

                        </div>
                        <h3 class="text-red-700 font-semibold text-2xl md:text-3xl mt-2">
                            YOU SAVE <span id="save-price2">$<?= percentOff($product2['product_retail'], $product2['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow 5 md:p-8 flex-col items-center text-center">
                        <h3 class="ctr mt-0 mb-1 txt-blue text-3xl">
                            Just <span id="bottle-price2">$<?= perBottle($product2['product_price'], $product2['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <form id="orderform3" method="post" action="<?= $discountlink; ?>">
                            <input type="hidden" id="item-name3" name="item-name3" value="Floraspring - 3x">
                            <input type="hidden" id="prod-cost" name="prod-cost" value="<?= $product2['product_price']; ?>">
                            <input type="hidden" id="product-id" name="pid" value="<?= $product2['product_id']; ?>">
                            <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable" onclick="addProdToCart(<?= $product2['product_id'] . ',3,' . $product2['product_price']; ?>);return false;"><em>Secure My Order</em></button></span>
                        </form>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3"><span id="off-price2"><?= percentOff($product2['product_price'], $product2['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16  ">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="order-option-box fs-2 w-full mb-5 border">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col grow md:w-1/2 p-5 md:p-8">
                        <h5 class="text-xl md:text-2xl txt-blue ls10">
                            DOCTOR RECOMMENDED
                        </h5>
                        <p class="flair-subhead mt0 mb3 hidden">Take Multiple Capsules Per Day to Boost Your Results</p>

                        <h1 class="text-black text-4xl md:text-5xl font-bold my-3">
                            <?= $product3['product_qty']; ?> Bottle Supply
                        </h1>

                        <div class="limited-offer py-3 pt-0 hidden">
                            <span class="text-red-700 text-xl font-semibold">LIMITED TIME OFFER:</span>
                            <p class="text-red-700 font-semibold">2 Free Bottles of Vitamin D3 with Purchase!</p>
                        </div>

                        <div class="flex justify-between border-y-2 py-3">
                            <div>
                                <span class="text-gray-600">Retail Price: <span class="line-through">
                                        $<?= $product3['product_retail']; ?>
                                    </span></span>
                            </div>
                            <div>
                                You Pay Just <span id="main-price2">$<?= $product3['product_price']; ?></span>
                            </div>

                        </div>
                        <h3 class="text-red-700 font-semibold text-2xl md:text-3xl mt-2">
                            YOU SAVE <span id="save-price2">$<?= percentOff($product3['product_retail'], $product3['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow p-3 md:p-8 flex-col items-center text-center">
                        <h3 class="ctr mt-0 mb-1 txt-blue text-3xl">
                            Just <span id="bottle-price2">$<?= perBottle($product3['product_price'], $product3['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <form id="orderform3" method="post" action="<?= $discountlink; ?>">
                            <input type="hidden" id="item-name3" name="item-name3" value="Floraspring - 3x">
                            <input type="hidden" id="prod-cost" name="prod-cost" value="<?= $product3['product_price']; ?>">
                            <input type="hidden" id="product-id" name="pid" value="<?= $product3['product_id']; ?>">
                            <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable" onclick="addProdToCart(<?= $product3['product_id'] . ',3,' . $product3['product_price']; ?>);return false;"><em>Secure My Order</em></button></span>
                        </form>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3"><span id="off-price2"><?= percentOff($product3['product_price'], $product3['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16  ">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="order-option-box fs-2 w-full mb-5 border">
                <div class="order-option-row flex flex-wrap">
                    <div class="order-details-col grow md:w-1/2 p-5 md:p-8">
                        <h5 class="text-xl md:text-2xl txt-blue ls10">
                            DOCTOR RECOMMENDED
                        </h5>
                        <p class="flair-subhead mt0 mb3 hidden">Take Multiple Capsules Per Day to Boost Your Results</p>

                        <h1 class="text-black text-4xl md:text-5xl font-bold my-3">
                            <?= $product1['product_qty']; ?> Bottle Supply
                        </h1>

                        <div class="limited-offer py-3 pt-0 hidden">
                            <span class="text-red-700 text-xl font-semibold">LIMITED TIME OFFER:</span>
                            <p class="text-red-700 font-semibold">1 Free Bottle of Vitamin D3 with Purchase!</p>
                        </div>

                        <div class="flex justify-between border-y-2 py-3">
                            <div>
                                <span class="text-gray-600">Retail Price: <span class="line-through">
                                        $<?= $product1['product_retail']; ?>
                                    </span></span>
                            </div>
                            <div>
                                You Pay Just <span id="main-price2">$<?= $product1['product_price']; ?></span>
                            </div>

                        </div>
                        <h3 class="text-red-700 font-semibold text-2xl md:text-3xl mt-2">
                            YOU SAVE <span id="save-price2">$<?= percentOff($product1['product_retail'], $product1['product_price']); ?></span> TODAY!
                        </h3>
                    </div>
                    <div class="order-cta-col flex justify-center grow p-3 md:p-8 flex-col items-center text-center">
                        <h3 class="ctr mt-0 mb-1 txt-blue text-3xl">
                            Just <span id="bottle-price2">$<?= perBottle($product1['product_price'], $product1['product_qty']); ?></span> Per Bottle
                        </h3>

                        <!-- <div class="cta-button"> -->
                        <form id="orderform3" method="post" action="<?= $discountlink; ?>">
                            <input type="hidden" id="item-name3" name="item-name3" value="Floraspring - 3x">
                            <input type="hidden" id="prod-cost" name="prod-cost" value="<?= $product1['product_price']; ?>">
                            <input type="hidden" id="product-id" name="pid" value="<?= $product1['product_id']; ?>">
                            <span id="button-two"><button id="btn-two" class="cta-button text-3xl clickable" onclick="addProdToCart(<?= $product1['product_id'] . ',3,' . $product1['product_price']; ?>);return false;"><em>Secure My Order</em></button></span>
                        </form>
                        <!-- </div> -->

                        <h4 class="font-semibold text-2xl mb-3"><span id="off-price2"><?= percentOff($product1['product_price'], $product1['product_retail']); ?>%</span> OFF + FREE SHIPPING</h4>
                        <p class="ctr mt3 mb0 fs16  ">90-DAY MONEY BACK GUARANTEE</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        const pop = document.querySelector('.vip-pop');
        const vip = document.querySelector('.vipwrap');
        const vipInput = document.getElementById('vip');
        const check = document.querySelector('.checked');

        vip.addEventListener('mouseover', () => {
            pop.classList.add('is-open');
        })
        vip.addEventListener('mouseleave', () => {
            pop.classList.remove('is-open');
        })
        vipInput.addEventListener('change', () => {
            if (vipInput.checked) {
                check.classList.remove('hidden');
                showOffers(true);
            } else {
                check.classList.add('hidden');
                showOffers(false);
            }
        })

        function showOffers(bool) {
        const limitedOffers = document.querySelectorAll('.limited-offer');
        console.log(limitedOffers);
        limitedOffers.forEach(offer => {
            console.log(offer);
            bool ? offer.classList.remove('hidden') : offer.classList.add('hidden');
        })

        }
    </script>

    <?php if ($site['debug'] == true) {
        // Show Debug bar only on whitelisted domains.
        template('debug', null, null, 'debug');
    } ?>
</body>

</html>