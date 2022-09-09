<html>

<?php

$one = [
    'price' => '49.95',
    'ppb' => '49.95',
    'oneship' => '+ $8.95 SHIPPING',
];
$three = [
    'price' => '129.00',
    'ppb' => '43.00',
];
$six = [
    'price' => '197.00',
    'ppb' => '32.83',
];
$oneauto = [
    'price' => '44.95',
    'ppb' => '44.95',
    'oneship' => 'FREE U.S. SHIPPING',
];
$threeauto = [
    'price' => '116.10',
    'ppb' => '38.70',
];
$sixauto = [
    'price' => '177.30',
    'ppb' => '29.55',
];

$viparr = [768,769,770];

if(in_array(@$_SESSION['product_id'], $viparr)){
	$vip = 1;
}else{
	$vip = 0;
}

?>
<head>
    <?php template('includes/header'); ?>
    <title>Harvard-Trained Doctor Discovers 10-Second Egyptian Ritual</title>

    <style>
        .vipwrap {
            width: 100%;
            max-width: 879px;
            margin: 0 auto;
            position: relative;
            margin-bottom: 0px;
            border: 3px dashed #e00000;
            padding: 5px 5px 35px;
            font-family: Lato, sans-serif;

        }

        .viphead {
            font-weight: bold;
            font-size: 22px;
            text-align: center;
        }

        .vipwrap label {
            display: inline-block;
            padding-left: 10px;
            position: relative;
            top: 32px;
            font-size: 16px;
            width: 88%;
        }

        .vipwrap #vip {
            -webkit-appearance: none;
            background-color: #fafafa;
            border: 3px solid #ff0000;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
            display: inline-block;
            width: 30px;
            height: 30px;
            display: inline-block;
            position: relative;
            top: 3px;
            margin-left: 7px;
        }

        .vipwrap label {
            font-weight: normal !important;
            font-size: 19px;
            line-height: 21px;
            margin-top: -34px;
        }

        .vipwrap .vipimg {
            width: 30px !important;
            height: auto;
            position: absolute;
            left: -33px !important;
            top: -3px;
            bottom: 58px !important;
            display: none;
        }

        .vip1 {
            display: block;
            color: red;
            font-size: 17px;
            font-weight: bold;
            margin-top: -34px;
        }

        .vip2 {
            display: block;
            color: red;
            font-size: 23px;
            line-height: 24px;
            font-weight: normal;
            letter-spacing: 1px;
            position: relative;
            top: -3px;
        }

        @charset "UTF-8";

        hr {
            border-top: 1px solid #d5d5d5;
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: rgb(213, 213, 213);
            margin: 0;
        }

        body {
            /*font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;*/
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            line-height: 22px;
            color: #000;
            margin: 0;
        }

        p {
            font-size: 16px;
            /*font-family: 'Helvetica New', sans-serif;*/
            font-family: 'Roboto', sans-serif;
            margin-top: 4px;
            margin-bottom: 4px;
            margin-left: 0px;
            margin-right: 0px;
            line-height: 115%;
        }

        header {
            background-color: #fff;
            padding: 10px 0 10px;
            box-shadow: 0 3px 10px -2px rgba(0, 0, 0, .75);
            margin-bottom: 20px;
            height: 58px;
        }

        .pageContainerHeader {
            width: 992px;
            margin: 0 auto;
            position: relative;
        }

        .headerimglogo {
            max-width: 27%;
            position: relative;
            top: 15px;
        }

        .headerimgflag {
            max-width: 25%;
            float: right;
            padding-top: 10px;
        }

        header .logo {
            display: block;
            text-align: center;
            margin: 0;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        header .logo img {
            height: 70px;
        }

        .centered {
            margin: 0 auto !important;
            float: none !important;
        }

        .pageContainer {
            width: 960px;
            margin: 0 auto;
            position: relative;
        }

        h1 {
            color: #333333;
            font-size: 34px;
            font-weight: 700;
        }

        h2 {
            color: #ed3237;
            font-size: 30px;
            font-weight: 600;
        }

        h3 {
            color: #333333;
        }

        .headline {
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 42px;
            font-weight: 500;
        }

        .bestseller {
            color: red;
            font-style: italic;
            font-weight: bold;
            font-size: 150%;
            line-height: 10px;
            padding-bottom: 10px;
        }

        .h1center {
            font-size: 46px;
            font-weight: 700;
            padding-top: 40px;
        }

        .h2center {
            font-size: 42px;
            font-weight: 600;
        }

        .h3moneyback {
            font-size: 100%;
        }

        .h3moneybackcenter {
            font-size: 120%;
        }

        .h3freeShipping {
            color: #000066;
            font-weight: 400;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .ccimg {
            padding-top: 10px;
            width: 45%;
        }

        .ccimgcenter {
            padding-top: 10px;
            width: 35%;
        }

        .moneybackimg {
            width: 260px;
            margin-bottom: 10px;
        }

        .moneybackimgcenter {
            width: 330px;
            margin-bottom: 10px;
        }

        .addtocartimg {
            width: 230px;
            cursor: pointer;
        }

        .addtocartimgcenter {
            width: 280px;
            cursor: pointer;
        }

        .leftDiv {
            min-height: 510px;
            height: auto;
            float: left;
            width: 30%;
            margin-top: 80px;
            padding-top: 20px;
            border-top-left-radius: 40px;
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-style: solid;
            border-top-width: 2px;
            border-right-color: initial;
            border-right-style: initial;
            border-right-width: 0px;
            border-bottom-style: solid;
            border-bottom-width: 4px;
            border-left-style: solid;
            border-left-width: 2px;
            background-color: #fff;
            border-color: #000000;
        }

        .rightDiv {
            min-height: 510px;
            height: auto;
            float: right;
            width: 30%;
            margin-top: 60px;
            padding-top: 20px;
            border-top-left-radius: 0px;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-style: solid;
            border-top-width: 2px;
            border-right-style: solid;
            border-right-width: 2px;
            border-bottom-style: solid;
            border-bottom-width: 4px;
            border-left-color: initial;
            border-left-style: initial;
            border-left-width: 0px;
            background-color: #fff;
            border-color: #000000;
        }

        .centerDiv {
            min-height: 630px;
            height: auto;
            overflow: hidden;
            width: 40%;
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-top-style: solid;
            border-top-width: 2px;
            border-right-style: solid;
            border-right-width: 2px;
            border-bottom-style: solid;
            border-bottom-width: 4px;
            border-left-style: solid;
            border-left-width: 2px;
            background-color: #fff;
            border-color: #000000;
        }


        .leftDiv:before,
        .rightDiv:before {
            content: "";
            position: absolute;
        }

        .centerDiv:before {
            content: "";
            position: absolute;
            top: -1px;
            left: -10px;
            background: url(//s3.amazonaws.com/secretfatlosstrick/best-seller2-min.png) no-repeat;
            width: 121px;
            height: 116px;
        }

        .leftDiv,
        .rightDiv,
        .centerDiv {
            vertical-align: middle;
            text-align: center;
            position: relative;
        }

        .onebottlesimg {
            width: 39%;
        }

        .threebottlesimg {
            width: 80%;
        }

        .sixbottlesimg {
            width: 95%;
        }

        .vsl-headline {
            font-size: 36px;
            font-weight: bold;
            line-height: 80%;
        }

        .vsl-subheadline {
            font-size: 120%;
            padding-top: 10px;
        }

        .video {
            width: 100%;
        }

        .btnNextStep {
            background: #ff9100;
            background-image: -webkit-linear-gradient(top, #ff9100, #db6300);
            background-image: -moz-linear-gradient(top, #ff9100, #db6300);
            background-image: -ms-linear-gradient(top, #ff9100, #db6300);
            background-image: -o-linear-gradient(top, #ff9100, #db6300);
            background-image: linear-gradient(to bottom, #ff9100, #db6300);
            -webkit-border-radius: 4;
            -moz-border-radius: 4;
            border-radius: 4px;
            font-family: Arial;
            color: #ffffff;
            font-size: 20px;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
            width: 150px;
            text-align: center;
            cursor: pointer;
            margin: 0 auto;
            box-shadow: 2px 2px #888888;
        }

        .btnNextStep:hover {
            background: #ff9100;
            background-image: -webkit-linear-gradient(top, #ff9100, #ff7300);
            background-image: -moz-linear-gradient(top, #ff9100, #ff7300);
            background-image: -ms-linear-gradient(top, #ff9100, #ff7300);
            background-image: -o-linear-gradient(top, #ff9100, #ff7300);
            background-image: linear-gradient(to bottom, #ff9100, #ff7300);
            text-decoration: none;
        }

        .guarantee-box {
            border: 1px solid;
            border-color: #000;
            border-bottom-style: solid;
            border-bottom-width: 4px;
            padding: 8px 8px 8px 8px;
            background-color: #fff;
            margin-top: 40px;
        }

        .guarantee-box::AFTER {
            content: "";
            display: table;
            clear: both;
        }

        .guarantee-title {
            font-weight: bold;
            font-size: 160%;
            padding-bottom: 5px;
        }

        .guarantee-left {
            width: 20%;
            float: left;
        }

        .guarantee-right {
            width: 78%;
            float: left;
            font-size: 16px;
            padding-top: 20px;
        }

        .guarantee-text {
            font-size: 108%;
            line-height: 130%;
        }

        footer {
            display: block;
            background: #fff;
            padding: 40px 0;
            text-align: center;
            font-size: 12px;
        }

        footer p {
            font-size: 12px;
        }

        footer .copyright {
            color: #000;
            text-align: center
        }

        footer ul.links {
            list-style: none;
            display: block;
            float: none;
            margin: 0 0 12px
        }

        footer ul.links li {
            display: inline-block;
            padding: 0 8px;
            text-align: center
        }

        footer ul.links li a {
            text-transform: uppercase;
            color: #000066;
        }

        footer ul.links li a:hover {
            text-decoration: underline;
            color: #703314
        }

        .sixbottlesimg {
            width: 100% !important;
        }

        @media only screen and (min-width: 1px) and (max-width: 808px) {
            header {
                text-align: center;
            }

            .pageContainerHeader {
                max-width: 100%;
                margin: 0 auto;
                position: relative;
                font-family: Arial;
            }

            .headerimglogo {
                max-width: 170px;
            }

            .headerimgflag {
                display: none;
            }

            .pageContainer {
                width: 100%;
            }

            .vsl-headline {
                text-align: center;
            }

            .vsl-subheadline {
                text-align: center;
            }

            .headline {
                padding-top: 0px;
                padding-bottom: 0px;
                padding-left: 25px;
                padding-right: 25px;
                line-height: 120%;
                font-size: 180%;
            }

            .h2center {
                font-size: 180%;
            }

            .leftDiv {
                height: auto;
                float: none;
                margin: 0 auto;
                width: 85%;
                margin-top: 20px;
                padding-top: 20px;
                border-top-right-radius: 40px;
                border-right-style: solid;
                border-right-width: 2px;
            }

            .rightDiv {
                height: auto;
                float: none;
                margin: 0 auto;
                width: 85%;
                margin-top: 50px;
                padding-top: 20px;
                border-top-left-radius: 40px;
                border-left-style: solid;
                border-left-width: 2px;
            }

            .centerDiv {
                height: auto;
                float: none;
                margin: 0 auto;
                overflow: hidden;
                width: 85%;
                margin-top: 50px;
                padding-top: 20px;
                min-height: 580px;
            }

            #product1,
            #product6,
            #product3 {
                margin: 0 auto;
            }

            .moneybackimg {
                margin-bottom: 10px;
            }

            .moneybackimgcenter {
                width: 260px;
                margin-bottom: 10px;
            }

            .addtocartimgcenter {
                width: 230px;
            }

            .guarantee-box {
                width: 85%;
                margin: 0 auto;
                margin-top: 50px;
                padding: 0 0 0 0;
            }

            .sealimg {
                padding-top: 10px;
            }

            .guarantee-title {
                text-align: center;
                font-size: 130%;
                padding-bottom: 15px;
            }

            .guarantee-left {
                float: none;
                width: 90%;
                margin: 0 auto;
                padding-top: 5px;
            }

            .guarantee-right {
                float: none;
                width: 90%;
                margin: 0 auto;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;
            }

            footer ul.links {
                padding-left: 0px;
            }
        }

        .mcafeesecure-body-noscroll {
            overflow: hidden !important;
        }

        .button,
        button,
        input[type=button],
        input[type=submit] {
            padding-top: 0;
            padding-bottom: 0;
            margin: 0 auto;
        }
    </style>
</head>

<body class="bg-white">
    <?php template('includes/navigation-presale'); ?>
    <section class="max-w-5xl mx-auto bg-white mt-16 mg-0">
        <h1>PRODUCT PAGE</h1>
        <a href="/coupon/">Next Page</a>
        <a href="/">Previous Page</a>

        <div class="flex flex-wrap">
            <div class="w-full md:w-full p-4">
                <div class="pageContainer">
                    <h1 class="headline">CHOOSE YOUR DISCOUNTED PACKAGE</h1>
                    <div class="vipwrap">
                        <input type="checkbox" id="vip" name="vip">

                        <label for="vip">
                            <span class="check"><img src="https://s3.amazonaws.com/5gm/checkout/orange-check.png" alt="checked" class="vipimg"></span>

                            <span class="vip2">Get an <b>Extra 10% OFF</b></span>
                            Click here to get 10% OFF with easy monthly autoshipments
                            <br><span class="grey" style="font-size:14px; color: #666!important;">Hassle Free Guarantee - You are always notified before each shipment so you can skip, pause, cancel, or swap out products.</span>
                        </label>
                    </div><!-- end .vipwrap -->

                    <form id="order1" action="<?php echo $discountlink; ?>" method="POST">
                        <input type="hidden" name="prodtype" id="oneprod" value="1">

                        <div class="leftDiv flex flex-wrap justify-center text-center">
                            <h1 class="mt-10">1 BOTTLE</h1>
                            <h2>FOR JUST $<span id="oneprice"><?php echo $one['price']; ?></span></h2>
                            <img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/rs_1.png" alt="1bottles" class="onebottlesimg">
                            <h1>$<span id="oneppb"><?php echo $one['ppb']; ?></span> / bottle</h1>
                            <button type="submit" id="product1" style="text-decoration: none; border:0; background: transparent;"><img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/add_cart_new.png" alt="addtocart" class="addtocartimg"></button>


                            <h3 class="h3freeShipping" id="oneship">+ $8.95 SHIPPING</h3>


                        </div>
                    </form>
                    <form id="order3" action="<?php echo $discountlink; ?>" method="POST">
                        <input type="hidden" name="prodtype" id="threeprod" value="3">
                        <div class="rightDiv flex flex-wrap justify-center text-center">
                            <h1 class="mt-10">3 BOTTLES</h1>
                            <h2>FOR JUST $<span id="threeprice"><?php echo $three['price']; ?></span></h2>
                            <img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/rs_3.png" alt="3bottles" class="threebottlesimg">
                            <h1>$<span id="threeppb"><?php echo $three['ppb']; ?></span> / bottle</h1>
                            <button type="submit" id="product3" style="text-decoration: none; border:0; background: transparent;"><img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/add_cart_new.png" alt="addtocart" class="addtocartimg"></button>


                            <h3 class="h3freeShipping">FREE U.S. SHIPPING</h3>


                        </div>
                    </form>
                    <form id="order6" action="<?php echo $discountlink; ?>" method="POST">
                        <input type="hidden" name="prodtype" id="sixprod" value="6">
                        <div class="centerDiv flex flex-wrap justify-center text-center">
                            <h1 class="h1center mt-10">6 BOTTLES</h1>
                            <h2 class="h2center">FOR JUST $<span id="sixprice"><?php echo $six['price']; ?></span></h2>
                            <img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/rs_6.png" alt="6bottles" class="sixbottlesimg">
                            <h1>$<span id="sixppb"><?php echo $six['ppb']; ?></span> / bottle</h1>
                            <button type="submit" id="product6" style="text-decoration: none; border:0; background: transparent;"><img src="//<?php echo $_SERVER['HTTP_HOST']; ?>/images/add_cart_new.png" alt="addtocart" class="addtocartimgcenter"></button>


                            <h3 class="h3freeShipping">FREE U.S. SHIPPING</h3>


                        </div>
                    </form>

                    <div class="guarantee-box">
                        <div class="guarantee-left">
                            <center><img src="<?php echo $site['imgpath']; ?>seal.png" alt="seal" class="sealimg"></center>
                        </div>
                        <div class="guarantee-right">
                            <div class="guarantee-title"><span style="color: #000066;">INCLUDES A 60 DAY</span> 100% MONEY BACK GUARANTEE</div>
                            <p class="guarantee-text">Release Switch Advanced comes with a 60 Day, 100% Money Back Guarantee. That means if you change your mind about this decision at any point in the next two months all you need to do is email us, and we'll refund your purchase. Plus, you don't need to return the bottle.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php template('includes/footer'); ?>
    <?php if ($site['debug'] == true) {
        template('debug', 'debug');
    } ?>
</body>

</html>