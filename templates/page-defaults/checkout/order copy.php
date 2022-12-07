<?php

//Provide a session start time for timers
//Reset the session if it has been more than 24 hours (86400 seconds)
if (!isset($_SESSION['start_time']) || $_SESSION['start_time'] + 86400 <= time())
{
    $str_time = time();
    $_SESSION['start_time'] = $str_time;
}

$currentDate = date("m/d/Y H:i:s");
$futureDate = date("m/d/Y H:i:s", ($_SESSION['start_time'] + 900));
$sessionDate = date("m/d/Y H:i:s", $_SESSION['start_time']);
$dateString = intval($futureDate); //add 900 seconds to the session start timestamp.
$displayDeadline = date("j, Y, g:i a", $dateString);

debugMessage('Session Date: ' . $sessionDate);
debugMessage('Current Date: ' . $currentDate);
debugMessage('Future Expire Date: ' . $futureDate);
// from assessment
// age: 35-44
// weeklysex: 1-3
// stayhard: 30-60m
// customer_email: test@test.com
// submit: Next Step

if( isset($_SESSION['assessment']) ) {
    $assessment = unserialize($_SESSION['assessment']);
    if( isset($assessment['customer_email']) && filter_var($assessment['customer_email'], FILTER_VALIDATE_EMAIL) ) {
        $logger->info('Attempting to add ' . $assessment['customer_email'] . 'to Maropost');
        $maropost = new Maropost($site['maropostApiKey'], $site['maropostApiUrl'], null);
        if( $maropost->CheckEmailValid($assessment['customer_email']) ) {
            $newContact = [
                'list_id' => 117,
                'contact' => [
                    'email' => $assessment['customer_email'],
                    'custom_field' => [
                        'age' => $assessment['age'],
                        'ws' => $assessment['weeklysex'],
                        'sh' => $assessment['stayhard'],
                        'referring_page_url' => @$_SERVER['HTTP_REFERER'],
                        'cake_id' => $_SESSION['affid']
                    ],
                    'subscribe' => true
                ]
            ];
            $postedNewContact = $maropost->post_new_contact_into_list($newContact, true);
            $logger->info(json_encode($postedNewContact));
        } else {
            $logger->info($assessment['customer_email'] . ' not valid - Error: 829619');
            error_log("Maropost::CheckEmailValid('{$assessment['customer_email']}') not valid " . __FILE__ . ":" . __LINE__);
        }
    } else {
        $logger->info($assessment['customer_email'] . ' not valid - Error: 825927');
        error_log("'customer_email' not valid in \$_SESSION['assessment'] " . __FILE__ . ":" . __LINE__);
    }
}


// this affiliate is naughty
// @ Suppress warning if Session S1 does not exist
if ((@$_SESSION['s1'] == '335059') || (@$_SESSION['s1'] == '704154')) {
    http_response_code(404);
    die;
}


//Setup Countdown Timer
$timerCheck = time() - $_SESSION['timer-gm'];
if ($timerCheck < 0) {
    $_SESSION['timer-gm'] = time();
}
if (!isset($_SESSION['timer-gm'])) {
    $_SESSION['timer-gm'] = time();
}
$timerDelay = time() - $_SESSION['timer-gm'];

//CS Hours Logic
//Decline Message Logic
$timenow = date("H:i:s");
$timeopen = date("08:00:00");
$timeclosed = date("20:00:00");
$dayname = date("l");
$daysclosed = array("Saturday", "Sunday");

if (isset($_GET['setDate']))
{
    $setDate = new DateTime($_GET['setDate']);
}

if (in_array($dayname, $daysclosed)) {
    $csactive = 0;
} else {
    if ($timenow < $timeclosed && $timenow > $timeopen) {
        $csactive = 1;
    } else {
        $csactive = 0;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php template("includes/header"); ?>
        <title>5GMALE - Secure Order</title>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@800&display=swap" rel="stylesheet">

        <style>
          body {
            color: #000;
            font-family: "Trebuchet MS";
          }

          .condensed-bold {
            font-family: 'Work Sans', sans-serif;
            font-weight: 900;
            transform: scaleX(0.85);
            margin-left: -25px;
            white-space: nowrap;
          }
          #btn-one, #btn-two, #btn-three, #btn-four {
            font-family: HelveticaNeueLTStd-HvCnO,sans-serif;
            background: #ffffce;
            background: -moz-linear-gradient(top,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
            background: -webkit-linear-gradient(top,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
            background: linear-gradient(to bottom,#ffffce 0,#fbba1d 14%,#fc9900 40%,#e75f01 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffce', endColorstr='#e75f01', GradientType=0);
            border: solid 3px #994000;
            font-size: 30px;
            text-shadow: 0.5px 0.9px 1px #fffa65;
            color: #10284c;
            border-radius: 6px;
            margin-top: 15px;
            line-height: 1;
            padding: 18px 12px 18px;
            font-style: italic;
            font-weight: bold;
            margin: 10px 0px 0px 0px;
            text-align: center;
            cursor: pointer!important;
        }

            .truck {
                width: 40px;
                height: 40px;
                object-fit: contain;
            }
            .card.selected {
                background-color: #fffee6;
                                margin-left: 0.5rem;
                margin-right: 0.5rem;
                border: 5px solid #f16521;
            }
            .card.selected select {
                display: flex;
                margin-right: auto;
                width: auto;
            }
            .card.selected .bg-gray-100 {
                background-color: #fdfac3;
            }
            .card.selected .gradient {
                display: flex;
            }
            .card.selected .option-txt {
                color: #f26522;
            }
            .button_buy {
                color: #fefefe;
                font-size: 36px;
                line-height: 1.176;
                text-decoration: none;
                text-transform: uppercase;
                font-weight: 600;
                letter-spacing: 0;
                border-radius: 4em;
                padding: 15px 0px;
                margin: 1em 0;
                background-color: #62b218 !important;
                min-width: 290px;
                min-height: 60px;
                outline: none !important;
                display: block;
                max-width: 245px;
                margin: 0 auto;
                text-align: center;
                border: 1px solid #62b218;
            }
            .bogo {
                position: relative;
                background-color: #FDD20EFF;
                margin: 1rem -1rem;
                padding: 0 0.75rem;
            }
            .bogo span {
                font-size: 30px;
                color: #E10600;
                text-align: center;
                font-weight: bold;
            }
            #bogo-1 img {
                /* max-height: 120px; */
                /* max-width: 30%; */
                position: absolute;
                bottom: 0px;
                /* right: -20px; */
                left: unset;
                top: unset;
                z-index: 1;
                transform: translateY(15%);
                object-fit: contain;
            }

            @media screen and (max-width: 501px) {
                #bogo-1 img.bottle-1 {
                    visibility: hidden;
                }
                #bogo-1 img.bottle-3 {
                    visibility: hidden;
                }
                #bogo-1 img.bottle-6 {
                    visibility: hidden;
                }
            }

            #bogo-1 img.bottle-1 {
                width: 18%;
                height: auto;
                bottom: -1px;
                right: 7px;
            }
            #bogo-1 img.bottle-3 {
                width: 28%;
                bottom: 13px;
                right: -7px;
            }
            #bogo-1 img.bottle-6 {
                width: 36%;
                bottom: -9px;
                right: 10px;
            }

            @media screen and (min-width: 530px) {
                #bogo-1 img.bottle-3 {
                    width: 27vw;
                    bottom: 1vw;
                    right: 2px;
                }
            }

            @media screen and (min-width: 580px) {
                #bogo-1 img.bottle-3 {
                    width: 32vw;
                    bottom: 0vw;
                    right: -2px;
                }
                #bogo-1 img.bottle-6 {
                    width: calc( 2 * 19vw);
                    right: 6px;
                    bottom: -1vw;
                }
            }

            @media screen and (min-width: 768px) {
                #bogo-1 img.bottle-1 {
                    visibility: hidden;
                }
                #bogo-1 img.bottle-3 {
                    visibility: hidden;
                }
                #bogo-1 img.bottle-6 {
                    visibility: hidden;
                }
            }

            @media screen and (min-width: 850px) {
                #bogo-1 img.bottle-1 {
                    visibility: visible;
                    width: 16%;
                    height: auto;
                    bottom: -2px;
                    right: -19px;
                }
                #bogo-1 img.bottle-3 {
                    visibility: visible;
                    width: 32%;
                    bottom: 1px;
                    right: -30px;
                }
                #bogo-1 img.bottle-6 {
                    visibility: visible;
                    width: 40%;
                    bottom: calc(-40px + 3vw);
                    right: -15px;
                }
            }

            .gradient {
                background: linear-gradient(to right, rgba(252,244,173,1) 0%, rgba(249,224,101,1) 32%, rgba(246,209,45,1) 51%, rgba(246,210,45,1) 71%, rgba(246,210,45,1) 100%);
            }
            .protection-list p {
                background: url('//<?= $_SERVER["HTTP_HOST"];?>/images/blue-check.png') no-repeat;
                padding-left: 30px;
                font-size: 18px;
                color: #000;
                line-height: 18px;
                margin-left: 10px;
                margin-bottom: 13px;
                font-weight: 500;
            }
            .protect-title {
                font-size: 30px;
                line-height: 33px;
                padding-left: 16px;
                font-weight: bold;
                color: #348FD4;
                padding-top: 3px;
            }
            .phone {
                background-image: url("data:image/svg+xml,%3Csvg width='50px' height='50px' version='1.1' viewBox='0 0 752 752' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m194.68 332.62s-12.801-39.82-5.6875-78.219c5.6875-36.977 25.598-51.199 31.289-55.465 5.6875-2.8438 14.223-8.5312 14.223-8.5312s9.957-9.957 21.332 2.8438c11.379 11.379 63.996 65.418 63.996 65.418s9.957 11.379 1.4219 22.754c-8.5312 9.957-38.398 39.82-38.398 39.82 12.801 48.355 99.551 135.11 147.91 147.91 0 0 29.867-28.441 41.242-36.977 9.957-8.5312 21.332 1.4219 21.332 1.4219s54.043 51.199 66.84 62.574c11.379 12.801 1.4219 21.332 1.4219 21.332s-4.2656 9.957-8.5312 14.223c-2.8438 5.6875-18.488 25.598-55.465 32.711-36.977 5.6875-78.219-7.1094-78.219-7.1094-85.328-34.133-190.57-137.95-224.7-224.7z' fill-rule='evenodd'/%3E%3C/svg%3E%0A");
                background-size: contain;
                background-position: center center;
                background-repeat:no-repeat;
                width: 35px;
                height: 35px;
            }

            #runOutModal .modal-headline {
                color: #ff0000 !important;
                text-align: left;
                background: url('//<?= $_SERVER["HTTP_HOST"];?>/images/popup-timer.gif') no-repeat;
                font-weight: bold !important;
                padding-left: 138px;
                margin-left: 35px;
                padding-bottom: 22px;
                padding-top: 22px;
                background-position: 45px;
                line-height: 1.3em;
                font-size: 34px;
            }

            #modal-button {
                float: none!important;
                opacity: 1!important;
                font-family: HelveticaNeueLTStd-HvCnO,sans-serif;
                background: #ff0000;
                background: -moz-linear-gradient(top,#ff0000 0,#f94242 40%,#ef8282 100%);
                background: -webkit-linear-gradient(top,#ff0000 0,#f94242 40%,#ef8282 100%);
                background: linear-gradient(to bottom,#ff0000 0,#f94242 40%,#ef8282 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0000', endColorstr='#fff', GradientType=0);
                border: solid 3px #994000;
                font-size: 30px;
                text-shadow: 0.5px 0.9px 1px #fffa65;
                color: #10284c;
                border-radius: 6px;
                margin-top: 15px;
                line-height: 1;
                padding: 18px 15px 18px;
                font-style: italic;
                font-weight: bold;
                margin: 10px 0px 0px 0px;
            }

            /* mobile cards */
            .checkbox {
                position: relative;
                width: 24px;
                height: 24px;
                border: 1px solid gray;
                background-color: white;
                cursor: pointer;
                transition: al 250ms ease-in-out;
            }

            .check {
                position: absolute;
                transform: scale(1.3) translate(2px, -3px);
            }

            .mb-card {
                border: 1px solid gray;
                cursor: pointer;
                transition: all 250ms ease-in-out;
            }

            .mb-card .head {
                border-radius: 4px 4px 0 0;
            }

            .mb-card.selected {
                border-width: 3px;
                border-color: #eb9500;
                background-color: #fff4d1;
            }

            .mb-card.selected .check {
                display: block;
            }

            .mb-card.selected .title {
                color: #eb9500;
            }
            .mb-card.selected .head {
                background-color: #eb9500;
            }

            .ryan-yellow {
                background-color: #FFFDBE;
            }

            .float-btn-wrapper div.float-btn.clickable {
                padding: 8px 16px;
            }

            .view-more {
                text-decoration:underline;
                cursor: pointer;
                transition: all 200ms ease-in-out;
                font-weight: 300;
                color: gray;
                white-space: nowrap;
            }
            .view-more:hover {
                opacity: 0.8;
            }

        </style>


    </head>

<body>
    <div id="countdown-banner" class="flex justify-center flex-nowrap bg-red-900 text-white p-3 text-center text-sm" style="position: sticky;top: 0;z-index: 1000; filter: saturate(1.8)">
        <div class="flex flex-wrap text-center justify-center">Your Discount Is Being Held For
            <span id="countdown-timer" class="ml-1">
                <div id="clock1" class="font-bold text-white">[clock1]</div>
            </span>
        , Until It Is Given To The Next Man Waiting In Line
        </div>
    </div>
    <header class="flex justify-center bg-green-600 p-2" style="background: #40A900;">
        <div class="flex flex-wrap bg-white rounded px-2 md:px-4 py-1 text-green-600 items-center text-center text-sm md:text-base">
            <div class="flex flex-nowrap items-center mx-auto">
                <img class="mr-2 mb-1" src="//<?= $_SERVER['HTTP_HOST'];?>/images/green-lock-icon.gif" width="20px" height="20px"/>
                <div>SECURE | </div>
            </div>
            <div class="mx-auto ml-1 grow">You Are On A 256-Bit Secure Order Page</div>
        </div>
    </header>
    <div class="container container-md mx-auto py-8 pt-4 pb-20" style="max-width: 960px !important">
        <div class="conten px-3 md:px-5">
        <section class="flex flex-column w-full flex-wrap">
        <div class="flex justify-center w-full text-center" style="z-index: 10">
          <div class="flex flex-wrap items-center">
            <img class="mx-auto md:pl-10" src="//<?= $_SERVER['HTTP_HOST'];?>/images/snm-logo-gray.gif" style="height: 25px"/>
            <?php if($csactive == 1): ?>
              <div class="flex flex-nowrap mx-auto items-center mt-2 md:mt-0">
                                <!-- <div class="phone ml-2"></div> -->
                                <img class="-m-1 md:mx-0" src="//<?= $_SERVER['HTTP_HOST'];?>/images/phone.png" alt="phone icon">
                                <span class="text-xs md:text-base">Call <a href="tel:<?= $company['phone']; ?>" class="no-underline"><?= $company['phone']; ?></a> Now To Speak To A Product Specialist!</span>
                            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="flex flex-wrap md:flex-nowrap w-full mt-4 hidden md:flex">
          <div class="flex-none w-full md:w-auto mt-0 md:-mt-11">
          <img class="w-auto mx-auto" src="//<?= $_SERVER['HTTP_HOST'];?>/images/bottle-image-90days.png" alt="">
          </div>

          <div class="flex grow lg:pl-12">
            <div class="flex flex-col mx-auto">
              <div class="text-center md:-ml-28 mb-1">
                <h1 class="text-red-700 text-5xl font-bold condensed">Step 1: Get My Discount Below Now...</h1>
              </div>
              <div class="text-center md:-ml-28 mb-3 condensed">
                <h2 style="margin-top: 0; font-size: 28px;">The More You Buy The More You Save!</h2>
              </div>
              <div class="flex flex-col md:flex-row w-auto mx-auto flex-wrap check-list my-4 md:my-0">
                <p class="flex items-start mb-1 md:w-1/2">
                 <img class="mr-1" src="//<?= $_SERVER['HTTP_HOST'];?>/images/check-green.png" alt="check" style="align-self: flex-start;">
                Get Harder, Longer Lasting Erections</p>
                <p class="flex items-start mb-1 md:w-1/2">
                <img class="mr-1" src="//<?= $_SERVER['HTTP_HOST'];?>/images/check-green.png" alt="check" style="align-self: flex-start;">
                Regain Energy, Stamina, & Sex Drive</p>
                <p class="flex items-start mb-1 md:w-1/2">
                <img class="mr-1" src="//<?= $_SERVER['HTTP_HOST'];?>/images/check-green.png" alt="check" style="align-self: flex-start;">
                Feel Incredible In Bed</p>
                <p class="flex items-start mb-1 md:w-1/2">
                <img class="mr-1" src="//<?= $_SERVER['HTTP_HOST'];?>/images/check-green.png" alt="check" style="align-self: flex-start;">
                Go All Night & Drive Any Woman Wild!</p>
              </div>
              <div class="flex justify-around flex-wrap mt-0 items-center text-left text-center md:text-left">
                <div class="w-full md:w-1/2 stock-container">
                  <div class="text-sm">
                    <strong>AVAILABILITY:</strong> <span class="bg-lime-600 text-white px-2 py-1">IN STOCK!</span>
                  </div>
                </div>
                <div class="w-full md:w-1/2 font-bold">
                  <div class="flex items-center justify-center md:justify-start mt-2">
                    <span class="text-s mr-2" style="white-space: nowrap">Your spot is held for:</span>
                    <div class="flex">
                      <span id="countdown" class="border border-3 border-red-600 text-red-700 text-2xl mr-2" style="padding: 0.25rem 1.25rem 0;"> <div id="clock2"></div></span>
                      <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/red-clock.png" alt="clock" style="object-fit: contain;filter: brightness(0.8);" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col w-full mt-0 md:-mt-4 mb-0">
          <h3 class="flex justify-center font-extrabold text-4xl md:text-black text-red-700 mb-0 condensed" style="font-size: 40px;">Choose Your Discount</h3>
          <div class="flex justify-center mb-1 text-green-600 text-lg items-center hidden md:flex">
            <img class="mr-2 truck" src="//<?= $_SERVER['HTTP_HOST'];?>/images/truck-green.png" />
            Ultra-Fast Shipping Within Just 12 Hours On Week Days
                    </div>
                    <div class="flex justify-center text-center text-black md:text-red-700 text-2xl condensed md:hidden" style="font-size: 26px;">(The More You Buy The More You Save!)</div>
          <div class="flex justify-center flex md:hidden py-1"><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/red-arrow.png" /></div>
          <div class="flex justify-center hidden md:flex"><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/black-arrow.png" /></div>
        </div>
            </section>
            <!-- mobile cards -->
            <section id="cta" class="flex flex-col w-full flex-wrap md:hidden">
            <div class="mb-card bg-gray-100 border border-1 rounded-lg mb-4" onclick="mobileUpdatePID(952)">
                <!-- <div class="head p-1 flex justify-center rounded-t-lg text-white text-2xl font-semibold condensed">MOST POPULAR</div> -->
                <div class="flex items-center px-2 py-4">
                    <div class="checkbox mr-3">
                        <img class="check hidden" src="//s3.amazonaws.com/the5gsecret/orange-check.png" alt="checked">
                    </div>
                    <div class="title text-4xl condensed-bold font-extrabold text-gray-500">1 MONTH SUPPLY</div>
                </div>
                <div class="body flex flex-col text-red-700 bg-yellow-300 p-3 font-semibold">
                    <div class="text-2xl font-semibold mb-1">Limited Time BOGO Sale!</div>
                    <div class="text-lg font-semibold" style="font-size: 17px">1 EXTRA BOTTLE FREE WITH PURCHASE</div>
                    <div>Total Bottles Today: 2</div>
                </div>
                <div class="p-3">
                    <div class="ml-8 font-semibold text-gray-500"><strike class="text-red-700">$360</strike> Just <span class="text-green-600">$69.95!</span></div>
                </div>
            </div>

            <div class="mb-card bg-gray-100 selected border border-1 rounded-lg mb-4" onclick="mobileUpdatePID(0)">
                <div class="head p-1 flex justify-center rounded-t-lg text-white bg-yellow-300 text-2xl font-semibold condensed">MOST POPULAR</div>
                <div class="flex items-center px-2 py-4">
                    <div class="checkbox mr-3">
                        <img class="check hidden" src="//s3.amazonaws.com/the5gsecret/orange-check.png" alt="checked">
                    </div>
                    <div class="title text-4xl condensed-bold font-extrabold text-gray-500">3 MONTH SUPPLY</div>
                </div>
                <div class="body flex flex-col text-red-700 bg-yellow-300 p-3 font-semibold">
                    <div class="text-2xl font-semibold mb-1">Limited Time BOGO Sale!</div>
                    <div class="text-lg font-semibold" style="font-size: 17px">3 EXTRA BOTTLES FREE WITH PURCHASE</div>
                    <div>Total Bottles Today: 6</div>
                </div>
                <div class="p-3">
            <div class="ml-8 font-semibold text-gray-500"><strike class="text-red-700">$1,080</strike> Just <span class="text-green-600">$179! + FREE SHIPPING</span></div>
                </div>
            </div>

            <div class="mb-card bg-gray-100 border border-1 rounded-lg mb-4" onclick="mobileUpdatePID(955)">
                <!-- <div class="head p-1 flex justify-center rounded-t-lg text-white bg-green-600 text-2xl font-semibold condensed">MOST POPULAR</div> -->
                <div class="flex items-center px-2 py-4">
                    <div class="checkbox mr-3">
                        <img class="check hidden" src="//s3.amazonaws.com/the5gsecret/orange-check.png" alt="checked">
                    </div>
                    <div class="title text-4xl condensed-bold font-extrabold text-gray-500">6 MONTH SUPPLY</div>
                </div>
                <div class="body flex flex-col text-red-700 bg-yellow-300 p-3 font-semibold">
                    <div class="text-2xl font-semibold mb-1">Limited Time BOGO Sale!</div>
                    <div class="text-lg font-semibold" style="font-size: 17px">6 EXTRA BOTTLES FREE WITH PURCHASE</div>
                    <div>Total Bottles Today: 12</div>
                </div>
                <div class="p-3">
            <div class="ml-8 font-semibold text-gray-500"><strike class="text-red-700">$2,160</strike> Just <span class="text-green-600">$297! + FREE SHIPPING</span></div>
                </div>
            </div>
            </section>
            <!-- desktop cards -->
            <section id="cta" class="flex flex-col w-full flex-wrap justify-center mt-2 discount-section hidden md:flex">
        <!-- card one -->
        <div class="card flex flex-wrap md:flex-nowrap border border-gray-300 mx-3 md:mx-10">
          <div class="w-full md:w-auto grow flex flex-col justify-between p-4">
            <p class="option-txt text-gray-400 text-lg font-bold">STARTER OPTION</p>
            <p class="text-4xl font-bold" style="color:#000">1 MONTH SUPPLY</p>
            <div id="bogo-1" class="bogo pl-5">
              <span class="condensed">LIMITED TIME BOGO OFFER:</span>
              <p class="text-red-700">1 FREE BOTTLE WITH PURCHASE!</p>
                            <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/5GM1x-m.png" alt="1 bottle" class="bottle-1">
            </div>
            <div class="flex text-xl">
              <p class="text-gray-400 pr-4"><strike>Retail: $360.00</strike></p>
              <p>You Pay Just $69.95</p>
            </div>
            <p class="text-3xl text-red-700 font-semibold my-2">You Save $290.05 Today!</p>
          </div>
          <div class="w-full md:w-auto grow-0 flex flex-col justify-center bg-gray-100 p-4 text-center">
            <div class="text-center w-full text-green-600 font-bold text-2xl mb-3">JUST $34.97 PER BOTTLE!</div>
            <form action="/checkout/onepage" id="product-form" method="POST">
              <input type="hidden" id="pid-input" name="prodtype" value="4">
              <input class="button_buy clickable" type="button" onclick="updatePID(952)" value="CHOOSE">
            <p class="text-xl font-bold mt-3"><span class="text-red-700">81% OFF</span> + $6.95 USA Shipping</p>
            <p class="text-gray-400">(With 30-Day Auto Ship)</p>
            <div class="flex mt-4 items-center -mr-4 gradient p-2 hidden">
              <img class="mr-2" src="//<?= $_SERVER['HTTP_HOST'];?>/images/head-icon.png" alt="person icon">
              <span>63 other men grabbed this deal today</span>
            </div>
          </div>
        </div>
        <!-- card two -->
        <div class="card selected flex flex-wrap md:flex-nowrap border-2 border-gray-300 mx-3 md:mx-10">
          <div class="w-full md:w-auto grow flex flex-col justify-between p-4">
                        <p class="option-txt text-gray-400 text-xl font-bold">MOST POPULAR</p>
                        <p class="text-sm font-semibold" style="color: #f26522"> TAKE MULTIPLE CAPSULES PER DAY TO BOOST YOUR RESULTS</p>
            <p class="text-4xl font-bold" style="color:#000">3 MONTH SUPPLY</p>
            <div id="bogo-1" class="bogo pl-5">
              <span class="condensed">LIMITED TIME BOGO OFFER:</span>
              <p class="text-red-700">3 FREE BOTTLES WITH PURCHASE!</p>
              <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/5GM3x-m.png" alt="3 bottle" class="bottle-3">
            </div>
            <div class="flex text-xl">
              <p class="text-gray-400 pr-4"><strike>Retail: $1,080.00</strike></p>
              <p>You Pay Just $179.00</p>
            </div>
            <p class="text-3xl text-red-700 font-semibold my-2">You Save $901.00 Today!</p>
            <select name="pmt_plan" id="select-ship" data-ce-key="81" class="border px-4 py-2 hidden">
                <!-- select change options value 4 and 3 -->
                <option value="954" data-ce-key="82">90 Day Auto-Refill</option>
                <option value="953" data-ce-key="83">One-Time Purchase</option>
            </select>
          </div>
          <div class="w-full md:w-auto grow-0 flex flex-col justify-center bg-gray-100 p-4 text-center">
                        <!-- update price on select change -->
            <div class="text-center w-full text-green-600 font-bold text-2xl mb-3">JUST $29.83 PER BOTTLE!</div>
                            <input class="button_buy clickable" type="button" onclick="updatePID(0)" value="CHOOSE">
                        <!-- update % off on select change ? -->
                        <p class="text-xl font-bold text-green-600 mt-3"><span class="text-red-700">83% OFF</span> + FREE Shipping</p>
                        <!-- update desc on select change -->
            <div class="flex mt-4 items-center -mr-4 gradient p-2 hidden">
              <img class="mr-2" src="//<?= $_SERVER['HTTP_HOST'];?>/images/head-icon.png" alt="person icon">
              <span>63 other men grabbed this deal today</span>
            </div>
          </div>
        </div>
        <!-- card three -->
        <div class="card flex flex-wrap md:flex-nowrap border border-gray-300 mx-3 md:mx-10">
          <div class="w-full md:w-auto grow flex flex-col justify-between p-4">
            <p class="option-txt text-gray-400 text-lg font-bold">BIGGEST DISCOUNT</p>
            <p class="text-4xl font-bold" style="color:#000">6 MONTH SUPPLY</p>
            <div id="bogo-1" class="bogo pl-5">
              <span class="condensed">LIMITED TIME BOGO OFFER:</span>
              <p class="text-red-700">6 FREE BOTTLES WITH PURCHASE!</p>
              <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/5GM6x-m.png" alt="6 bottle" class="bottle-6">
            </div>
            <div class="flex text-xl">
              <p class="text-gray-400 pr-4"><strike>Retail: $2,160.00</strike></p>
              <p>You Pay Just $297.00</p>
            </div>
            <p class="text-3xl text-red-700 font-semibold my-2">You Save $901.00 Today!</p>
            <select name="pmt_plan" id="select-ship" data-ce-key="81" class="border px-2 py-2 hidden">
              <option value="954" data-ce-key="82">90 Day Auto-Refill</option>
              <option value="953" data-ce-key="83">One-Time Purchase</option>
            </select>
          </div>
          <div class="w-full md:w-auto grow-0 flex flex-col justify-center bg-gray-100 p-4 text-center">
            <div class="text-center w-full text-green-600 font-bold text-2xl mb-3">JUST $24.75 PER BOTTLE!</div>
                            <input class="button_buy clickable" type="button" onclick="updatePID(955)" value="CHOOSE">

            <p class="text-xl font-bold text-green-600 mt-3"><span class="text-red-700">86% OFF</span> + FREE Shipping</p>
            <p class="text-gray-400">(One Time Payment)</p>
            <div class="flex mt-4 items-center -mr-4 gradient p-2 hidden">
              <img class="mr-2" src="//<?= $_SERVER['HTTP_HOST'];?>/images/head-icon.png" alt="person icon">
              <span>63 other men grabbed this deal today</span>
            </div>
          </div>
        </div>
            </section>
            <p class="flex justify-center text-center text-lg text-red-700 mt-0 font-semibold md:hidden"  style="font-size: 20px">
                <strong id="952" style="display: none;">You Save <span class="text-green-600" id="save-price">$290.05</span> - That's <span id="off-price">81%</span> OFF!</strong>
                <strong id="0" style="display: block;">You Save <span class="text-green-600" id="save-price">$901.00</span> - That's <span id="off-price">83%</span> OFF!</strong>
                <strong id="955" style="display: none;">You Save <span class="text-green-600" id="save-price">$1,863.00</span> - That's <span id="off-price">86%</span> OFF!</strong>
            </p>
            <div id="ship-wrap" class="flex justify-center mt-4 md:hidden">
                <select name="pmt_plan" id="select-ship" data-ce-key="81" class="border px-4 py-3">
                    <!-- select change options value 4 and 3 -->
                    <option value="954" data-ce-key="82">90 Day Auto-Refill</option>
                    <option value="953" data-ce-key="83">One-Time Purchase</option>
                </select>
            </div>
            <div class="flex justify-center">
            <button class="my-5 clickable md:hidden" type="button" onclick="submitForm()" >
                <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/continue.gif" style="max-width:200px;">
            </button>
            </div>
            <p class="text-center text-gray-500 md:hidden">
            Certified As Secure & Trustworthy By The Leading&nbsp;Companies:
            </p>
            <div class="w-full flex md:hidden">
                <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/sec-icons-new.png" style="max-width: 600px;">
            </div>
            <div class="flex justify-center mt-7">

                <p class="text-4xl text-center mb-6 condensed hidden md:block" style="max-width: 50ch">
                Get A Special <strong>One-Time Only Discount</strong> On These Recommended Upgrades & Give Her <strong>Even Better Orgasms</strong>
                </p>
                <p class="text-3xl mb-4 font-bold text-center condensed md:hidden">Get A Special One-Time Only Discount On These Recommended Upgrades</p>
            </div>
            <section class="flex flex-column w-full flex-wrap bg-yellow-100 p-3 border border-black rounded">
                <div class="flex flex-wrap p-4">
                    <div class="w-1/6">
                        <select class="border" name="add1" id="addon1">
                            <option value="0" selected="">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="w-5/6 text-sm">
                        <p><strong>Super Lube To Give Her Ultra Intense Orgasms.</strong> This is HIGHLY recommended for any 5G Male PLUS users. It's proven that good, high quality lubricant makes it WAY easier for women to orgasm. A hard cock is a HUGE turn-on for women, but the thickness and rigidity can be painful without good lube. "Super Lube" is the best sex lubricant out there. It's safe, works amazing and I highly recommend it. You get HALF OFF if you add it to your order today. <span style="color:#d70000;" data-ce-key="110"><strong>(SAVE 50%. Normally $29.95, today just $14.95)</strong></span> <strong>Strict limit of 3 bottles per customer. One-time-only deal.</strong></p>
                    </div>
                </div>
                <div class="flex flex-wrap p-4">
                    <div class="w-1/6">
                        <input class="addOns" type="checkbox" name="add2" id="addon2" value="0" style="outline: 1px solid gray;">
                    </div>
                    <div class="w-5/6 text-sm">
                    <p><strong>37 Sex Positions That Give Her Explosive Orgasms.</strong> This X-rated blackbook of sex positions will show you the BEST positions to make your girl orgasm HARD, including positions for G-Spot AND squirting orgasms. Most men have no idea about these positions, so women will be THRILLED when you try them. This master class comes complete with video demonstrations on real girls, so you can see step-by-step exactly what to do and have your girl screaming your name in bed all night! You get HALF off it you add it to your order today. <span style="color:#d70000;"><strong>(SAVE 66%. Normally $60.00, today just $19.95)</strong></span> <strong>One-time-only deal.</strong></p>
                    </div>
                </div>
                </form>
            </section>
            <div class="flex justify-content-center">
        <div class="flex flex-col">
          <p class="text-lg text-center my-5 hidden md:flex">
          Each bottle contains 30 capsules. While 1 capsule per day will deliver strong results, it’s recommended you take 2-3 capsules per day if you want even stronger results.
          </p>
          <div class="mt-7 text-4xl text-center condensed">
                    <h3 class="hidden md:block">Your Purchase Today Is Fully Protected By Our<br> <strong>90-DAY MONEY BACK GUARANTEE!</strong></h3>
                    <h3 class="text-center md:hidden"><strong>YOUR 90-DAY MONEY BACK GUARANTEE!</strong></h3>
          </div>
        </div>
      </div>
            <section class="flex w-full flex-wrap my-7">
                <div class="w-full md:w-2/3 ryan-yellow border p-5">
                    <div class="flex flex-wrap-reverse md:flex-nowrap">
                        <div class="flex flex-col pr-5">
                            <p class="guarantee-txts">I understand that I have 90 days - thats <strong>THREE FULL MONTHS</strong> - to try out 5G Male PLUS and make sure I love it. And any time I want, I can call support at <strong>1-800-251-9316</strong> or email <strong>support@5gmale.com</strong>, 24 hours a day, 7 days a week to request a refund, with no questions asked and no hassles!<br><strong id="guarantee">GUARANTEED BY:</strong></p>
                            <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/ryan-sign.png" alt="ryan signature" style="max-width: 200px;mix-blend-mode: darken;">
                        </div>
                        <div class="flex flex-col justify-cente mx-auto mb-4">
                        <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/90-day-icon.png" alt="90 day guarantee" style="width: auto; max-width: 300px;">
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <p class="ryan-txt">Ryan Masters, Head of Research at <?php echo $company['name']; ?></p>
                    </div>
                </div>
                <div class="w-auto md:w-1/3 pl-0 md:pl-5 my-5 md:my-0 mx-auto hidden md:flex">
                    <div class="flex flex-col w-full protection-section">
                        <div class="flex mb-2" style="width:58px; height: auto">
                                <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/blue-shield.png" style="width: 58px;height: 70px;">
                            <p class="protect-title">BUYER<br>PROTECTION</p>
                        </div>

                        <div class="protection-list" style="clear:both;">
                            <p class="font-semibold">Fast Shipping <br><span class="text-sm text-gray-400 font-normal" style="font-size: 13.5px;">Your order ships ASAP with tracking info</span></p>
                            <p class="font-semibold">24/7 Live Phone Help <br><span class="text-sm text-gray-400 font-normal" style="font-size: 13.5px;">Talk to a real, live person any time</span></p>
                            <p class="font-semibold">Billed As "<?= $company['billedAs']; ?>"<br><span class="text-sm text-gray-400 font-normal" style="font-size: 13.5px;">Discreet billing for your privacy</span></p>
                            <p class="font-semibold">Privacy Guaranteed <br><span class="text-sm text-gray-400 font-normal" style="font-size: 13.5px;">Your information is never shared</span></p>
                            <p class="last-list font-semibold">Lowest Price Guaranteed <br><span class="text-sm text-gray-400 font-normal" style="font-size: 13.5px;">You will never see this at a lower price</span></p>
                        </div>
                    </div>
                </div>

            </section>
            <div class="flex w-fll justify-center text-center text-4xl mb-5 mt-8 md:mt-11">
                <h3 class="condensed hidden md:flex">You Also Get These <strong>&nbsp;6 FREE Bonus Gifts&nbsp;</strong> When You Order Today...</h3>
                <h3 class="text-center condensed md:hidden"><strong>YOUR FREE BONUS GIFTS!</strong></h3>
            </div>
            <section class="flex flex-col w-full mt-7">
                <div class="flex flex-col bonus-section flex border border-black py-5 px-3 md:px-7 bg-yellow-100" style="background-color: #ecffe7">
                    <div class="flex flex-wrap md:flex-nowrap py-3 border-b border-t-0 border-gray-400">
                        <div class="grow pr-5">
                            <p>
                                <strong>5G Enhancement Bible. </strong>
                                <span class="view-more md:hidden">view more</span>
                                <span class="hidden md:block">
                                Every bonus tip, trick and technique we’ve developed to give you the absolute hardest, longest lasting erections possible with 5G Male, as well as increase orgasm strength and load size.
                                </span>
                            </p>
                        </div>
                        <div class="flex justify-end w-full md:w-2/5 mt-2 md:mt-0">
                            <p class="hidden md:block"><strike>$19.95</strike><br> <strong>INCLUDED</strong></p>
                            <p class="md:hidden"><strike>$19.95</strike> <strong class="text-green-600 ml-2">FREE</strong></p>
                        </div>
                    </div>
                    <div class="flex flex-wrap md:flex-nowrap py-3 border-b border-gray-400">
                        <div class="grow pr-5">
                            <p>
                                <strong>The Multiplier Method. </strong>
                                <span class="view-more md:hidden">view more</span>
                                <span class="hidden md:block">
                                5 minutes a day exercises to multiply your sexual performance even more. These exercises are not just great for your erections, but great at burning fat, increasing your overall health, giving you more energy in bed and making you feel better throughout your day.
                                </span>
                            </p>
                        </div>
                        <div class="flex justify-end w-full md:w-2/5 mt-2 md:mt-0">
                            <p class="hidden md:block"><strike>$49.00</strike><br> <strong>INCLUDED</strong></p>
                            <p class="md:hidden"><strike>$19.00</strike> <strong class="text-green-600 ml-2">FREE</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-b border-gray-400">
                        <div class="grow pr-5">
                            <p>
                                <strong>The XXL Formula. </strong>
                                <span class="view-more md:hidden">view more</span>
                                <span class="hidden md:block">
                                The ultimate penis lengthening formula to get you real, long lasting size enhancement. You’ll discover the best foods, exercises, techniques to increase the size of your penis fast, as well as foods and exercises to AVOID that can damage your penis. You’ll be blown away by how easy this is.
                                </span>
                            </p>
                        </div>
                        <div class="flex justify-end w-full md:w-2/5 mt-2 md:mt-0">
                            <p class="hidden md:block"><strike>$79.95</strike><br> <strong>INCLUDED</strong></p>
                            <p class="md:hidden"><strike>$79.95</strike> <strong class="text-green-600 ml-2">FREE</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-b border-gray-400">
                        <div class="grow pr-5">
                            <p>
                                <strong>Magic Words That Drive Her Wild. </strong>
                                <span class="view-more md:hidden">view more</span>
                                <span class="hidden md:block">
                                This “black book of sex” contains the dirtiest, most unthinkable, most seductive “dirty talk” lines you’ve ever heard - and women love them! These magic phrases are designed to give your girl more intense, longer lasting orgasms and make her louder and more ecstatic than you’ve ever seen. Finally get your girl to reveal her dirtiest side.
                                </span>
                            </p>
                        </div>
                        <div class="flex justify-end w-full md:w-2/5 mt-2 md:mt-0">
                            <p class="hidden md:block"><strike>$39.00</strike><br> <strong>INCLUDED</strong></p>
                            <p class="md:hidden"><strike>$39.00</strike> <strong class="text-green-600 ml-2">FREE</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-b border-gray-400">
                        <div class="grow pr-5">
                            <p>
                                <strong>“Text To Sex” Course. </strong>
                                <span class="view-more md:hidden">view more</span>
                                <span class="hidden md:block">
                                A step-by-step blueprint of the EXACT messages to send your wife or girlfriend to get her turned on and so incredibly horny she’s practically dragging you into bed the second you get home! Includes word-for-word text messages you can send your girl as well as a step-by-step walkthrough of real text message conversations with women.
                                </span>
                            </p>
                        </div>
                        <div class="flex justify-end w-full md:w-2/5 mt-2 md:mt-0">
                            <p class="hidden md:block"><strike>$39.00</strike><br> <strong>INCLUDED</strong></p>
                            <p class="md:hidden"><strike>$39.00</strike> <strong class="text-green-600 ml-2">FREE</strong></p>
                        </div>
                    </div>

                    <!-- <div class="flex flex-wrap md:flex-nowrap py-3 border-b border-gray-400">
                        <div class="grow pr-5">
                            <p>
                            <strong>Female Confessions. </strong>
                            <span class="view-more md:hidden">view more</span>
                            <span class="hidden md:block">
                             Live, raw and uncensored video confessions about what women really want in bed. Discover their secret fantasies and hidden sexual desires. 8 women come clean and tell the raw truth – just make sure you’re ready to hear it, because it may be shocking to you! Discover the “13 Female Fantasies,” the 12 big mistakes men make and much more in this juicy hidden-camera video course.
                             </span>
                            </p>
                        </div>
                        <div class="flex justify-end w-full md:w-2/5 mt-2 md:mt-0">
                            <p><strike>$69.95</strike><br> <strong>INCLUDED</strong></p>
                        </div>
                    </div> -->

                    <div class="flex flex-wrap md:flex-nowrap py-3 border-b border-gray-400 border-b-0">
                        <div class="grow pr-5">
                            <p>
                                <strong>Become Supernatural: Extreme Sexual Performance Secrets </strong>
                                <span class="view-more md:hidden">view more</span>
                                <span class="hidden md:block">
                                with Playboy Radio host and sex expert, the super-hot Jessica J. This includes the top secrets from hot women and sex experts to turn your lover on and make sure you’re the best in bed she’s ever had! Discover the dirty truth about what really works in bed and tricks always perform your BEST. This series is only for the most ambitious men who are really motivated to take their sex life to the highest level possible. You’ll get three FREE modules over the next 14 days and if you chose to continue, it’s just $19.98 per week billed monthly after that.
                                </span>
                            </p>
                        </div>
                        <div class="flex justify-end w-full md:w-2/5 mt-2 md:mt-0">
                            <p class="hidden md:block"><strike>$39.96</strike><br> <strong>INCLUDED</strong></p>
                            <p class="md:hidden"><strike>$39.96</strike> <strong class="text-green-600 ml-2">FREE</strong></p>
                        </div>
                    </div>

                    <div class="flex flex-wrap justify-center items-center mb-5 hidden md:block">
                        <div class="text-3xl text-center text-gray-500 mr-4"><strike>Total Value: $266.86</strike> <span class="text-green-600 font-semibold ml-4">All This Is Yours <u>FREE</u> Today!</span></div>
                    </div>
                    <div class="flex justify-center items-center text-center mb-0 md:hidden">
                        <div class="text-2xl">Total $236.86 <span class="font-semibold text-green-600 uppercase">- Yours Free!</span></div>
                    </div>

                </div>
            </section>
            <section class="flex flex-col w-full mt-7">
                <div class="hidden md:block">
                    <p class="text-center text-sm text-gray-400 mb-2">Certified As Secure &amp; Trustworthy By The Leading Companies:</p>
                    <div class="flex">
                        <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/sec-icons-new.png" style="max-width: 700px;">
                    </div>
                    <div class="flex justify-center text-4xl mt-8 mb-4 text-center condensed">
                        <h3>Top Rated By The Better Business Bureau!</strong></h3>
                    </div>
                    <p class="text-center text-sm my-2">Buy with <strong>confidence</strong>. See real, <strong>positive</strong> reviews from customers who love 5G Male. We’re <strong>top-rated</strong> with over 30,000 happy customers around the world.</p>
                    <div class="flex">
                        <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/bbb-icon.png?ver=1" alt="bbb logo" style="max-width: 300px;">
                    </div>
                </div>
                <div class="flex justify-center text-4xl mt-7 mb-4 text-center condensed hidden md:flex">
                    <h3>Top Reviews of 5G Male From <strong>Recent Buyers...</strong></h3>
                </div>
                <h3 class="text-center text-4xl condensed my-3 md:hidden"><strong>TOP REVIEWS</strong></h3>
                <div class="flex justify-center md:hidden">
                    <img class="mx-auto w-full" src="//<?= $_SERVER['HTTP_HOST'];?>/images/5GM1x-m.png" alt="5g bottle" style="max-width: 100px;">
                </div>
                <div class="flex flex-column">
                <div class="top-reviewers">
                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">Dan P., Portland, OR</div>
                            </div>

                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“I Feel Like I Have My Mojo Back”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                July 21, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg  md:hidden"><strong>“I Feel Like I Have My Mojo Back”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">Your stuff is awesome! I’m 62 and I’ve only been taking this for a week or two and I am already getting random erections throughout the day and they are staying hard for a long time too! Feels awesome. Ordering more today before it runs out.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">Paul S., Phoenix, AZ</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“Haven't Felt This Way Since High School”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                July 19, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg  md:hidden"><strong>“Haven't Felt This Way Since High School”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">This really works!! I started a week ago and WOW! Rock hard penis whenever I get in the mood. Even at work when I’m stressed out I sometimes get an erection. The percent of hardness increase HUGE! It’s amazing. I even get erections while driving from the vibrations on the seat. Last time I can remember this happening is when I was in high school. I was in doubt at first, but now I’d recommend this to any man.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">Mike R., Gary, IN</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“Wife Can't Figure Out Why Sex Got So Much Better”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                July 15, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg  md:hidden"><strong>“Wife Can't Figure Out Why Sex Got So Much Better”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">Was at dinner w my wife and she asks: “so have you gotten bigger?” I haven’t told her yet what I’ve been taking, but it’s obviously working when your wife of 10+ years asks you if your penis is so hard now it looks like it has actually grown in size!</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">John M., Lubbock, TX</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“Could Last In Bed... Then Was Ready For Round 2!”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                July 10, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg  md:hidden"><strong>“Could Last In Bed... Then Was Ready For Round 2!”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">I’ve been taking this for about 10 days. Last night, I come home and have great sex with my wife for 45 minutes – WAY longer than normal. Everything just works. It was awesome. Then I swear to God, I wake up about 4 hours later, with a boner that was so hard it actually felt borderline uncomfortable! I had to wake the wife up for round two and she loved it. I used to get these types of boners in 9th grade when girls would sit on my lap at parties. This stuff is crazy and it WORKS!</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">Brian K., Orlando, FL</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“Waking Up With Hard Wood Again”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                July 06, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg  md:hidden"><strong>“Waking Up With Hard Wood Again”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">I’ve been taking this religiously for the past 2-3 weeks after a close friend recommended it to me. Today I woke up with the hardest erection I've had in months. By the time I got to work I was still hard! I also feel way more desire for sex. I am extremely happy and relieved about this.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">Robert A., Charlotte, NC</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“Girlfriend Says She's Never Felt So Turned On”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                July 01, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg md:hidden"><strong>“Girlfriend Says She's Never Felt So Turned On”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">Been using 5G male for almost a month and am definitely having harder and more frequent erections, but the biggest thing is what my girlfriend tells me! She says I've never felt so hard inside her, that it’s such a turn on and… she’s having way better orgasms now! This is a great feeling. There is anything more important to a man than satisfying his woman.</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">Chris V., Los Angeles, CA</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“Feeling So Unbelievably Relieved”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                June 24, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg md:hidden"><strong>“Feeling So Unbelievably Relieved”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">I found this product by a stroke of luck. I've been dealing with ED now for a few years and I have no idea what to do to help it besides maybe tadafil. I'm 58 years old, healthy, no heart issues or diseases and this has totally turned things around for me in bed. Honestly, as long as I’m taking this, I don't even have to think about "if" I'm going to get hard anymore!</p>
                        </div>

                        <div class="mb-11">
                            <div class="flex flex-nowrap items-center">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/gray-user-icon.png" alt="avatar"></div>
                            <div class="text-gray-500 text-bold ml-2">Greg I., Boulder, CO</div>
                            </div>
                            <div class="flex flex-wrap md:flex-nowrap mb-0">
                            <div><img src="//<?= $_SERVER['HTTP_HOST'];?>/images/star-icon.png" class="mr-3" alt="stars"></div>
                            <div class="text-lg hidden md:block"><strong>“Girlfriend Giving Me A Huge Ego Boost”</strong></div>
                            </div>
                            <p class="text-sm mb-2">
                                June 20, 2022
                                &nbsp; | &nbsp; <strong class="text-red-700">Verified Purchase</strong>
                            </p>
                            <div class="text-lg md:hidden"><strong>“Girlfriend Giving Me A Huge Ego Boost”</strong></div>
                            <p class="text-base text-gray-500 md:text-black">My girlfriend says (during sex) "You're so HARD!!! Stop moving for a moment... it's too much. And stop pulsing!" Hah. that made me laugh. She also commented while we were in the shower together and I was hard, she said (while grabbing it) "you're really hard you know". And that's what you call ego boost!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
        <div class="hidden md:flex justify-center text-center">
        <h3 class="condensed text-4xl mb-5">A Part of Your Order Is Donated To These Brave Veterans</h3>
        </div>
        <p class="hidden md:flex md:flex-col w-full text-center my-3 text-sm">Part of your 5G Male order today will be donated to The Wounded Warrior Project to help support a veteran like Dave. <br> <span class="veteran-link w-full mx-auto text-center" style="cursor:pointer;"><u>Click Here To Order Now</u>.</span></p>
        <div class="hidden md:flex justify-center px-20">
          <img class="w-auto" src="//<?= $_SERVER["HTTP_HOST"];?>/images/veteran-warriors.jpg" alt="Wounded Warrior Project">
        </div>
      </section>
            <section class="flex flex-col w-full mt-5 md:mt-11">
            <div class="flex justify-center text-center text-4xl mb-5 condensed hidden md:flex"> <h2 class="mt-0">Here Are The Most <strong>Frequently Asked Questions</strong> We Get...</h2> </div>
            <h3 class="text-center text-4xl condensed mb-3 md:hidden"><strong>FREQUENTLY ASKED QUESTIONS</strong></h3>
            <?php template("includes/basicFaq"); ?>

            </section>
            <div class="flex justify-center flex-wrap mt-0 md:mt-6 mb-11 text-center">
            <a class="hover:font-blue-400 text-4xl underline hidden md:block" href="" id="click-to-choose" style="color: #003dea;max-width: 40ch;line-height: 1.3em;">
                <span class="hidden md:block">
                Click Here To Choose Your Discount Package And Continue With Your Order
                </span>
                <span class="md:hidden">
                Click Here To Choose Your Discount Package Now!
                </span>
            </a>
            </div>

            <div class="flex justify-center flex-wrap mb-22 md:mb-0 text-center">
                    <!-- <a class="mx-3 clickable" style="color:#000;text-decoration:underline;" target="_blank" href="terms">Terms and Conditions</a> &nbsp;
                    <a class="mx-3 clickable" style="color:#000;text-decoration:underline;" target="_blank" href="privacy">Privacy Policy</a> &nbsp;
                    <a class="mx-3 clickable" href="#" style="color:#000;text-decoration:underline;" onclick="return (function(){zE.activate();return false;})()">Contact Us</a> -->
                    <?php legalLinks("includes/legalLinks");?>
            </div>
        </div>
    </div>


    <?php
    $button_text = 'Secure My Order';
    $scroll_id = 'cta';
    $top_content = '
    <div id="clock3" class="w-full text-green-600 text-center md:hidden"></div>

    ';
    floatButton('includes/floatButton',$top_content,$button_text,$scroll_id);
  ?>


    <?php
    // declare modal variables (requires basic_modal.js)
    $modal_id = 'runOutModal';
    $modal_title = "IMPORTANT:";
    $modal_body = '
    <h1 class="modal-headline">Time Has Expired!</h1>
    <p>Your 5G Male discount is no longer being held! Please <strong>choose your discount package now</strong> before your spot is given away to the next man in line...</p>
    ';
    $modal_footer = '
    <div class="w-full text-center"><button id="modal-button" onclick="closeAll()">YES, Complete My Order!</button></div>
    ';
    modal('includes/basicModal', $modal_id, $modal_title, $modal_body, $modal_footer);
    ?>


    <?php
    // declare modal variables (requires basic_modal.js)
    $modal_id = 'mouseModal';
    $modal_title = "WAIT!";
    $modal_body = '
        <h3 style="text-align:center;font-size:28px;line-height:34px;font-weight:normal;margin-top:-15px;color:#000;">
            There&apos;s <strong>A SPECIAL DEAL</strong> For You! Pay just <strong>$23.95 today</strong> or pay using <strong>PayPal</strong>.
        </h3>
        <h4 style="text-align:center;font-weight:normal;margin-top: 15px;font-size:18px;">Just click the button below to continue...</h4>
        <div class="text-center my-2" <strong>A SPECIAL DEAL</strong> For You! Pay just <strong>$23.95 today</strong> or pay using <strong>PayPal</strong>.</div>
    ';
    $modal_footer = '
    <div class="w-full text-center"><a href="order.php<?php echo trim(@$querystring); ?>"><button class="clickable" style="font-size: 30px;font-weight: bold;color: #fff;border: none;background-color: #78A300 !important;padding: 5px 25px;margin-top:15px;">CONTINUE</button></a></div>
    ';
    modal('includes/basicModal', $modal_id, $modal_title, $modal_body, $modal_footer);
    ?>

    <!-- modal and floating button functionality -->
    <script>


        // modal on mouseleave
        window.addEventListener('mouseleave', ()=> {
            window.modalHandler('mouseModal', true);
        })

        // modal on navigate away
        window.addEventListener('popstate', function(e) {
            window.onbeforeunload = function() { return "Your work will be lost."; };
            window.modalHandler('mouseModal', true);
        });
        window.onbeforeunload = function() {
            window.onbeforeunload = function() { return "Your work will be lost."; };
            window.modalHandler('mouseModal', true);
        }


        const form = document.getElementById('product-form');
        function updatePID(pid) {
            const pidInput = document.getElementById('pid-input');
            const selectType = document.getElementById('select-ship');
            // change pid to auto or single value from select
            pidInput.value = pid == 0 ? selectType.value : pid;
            window.onbeforeunload = null;
            form.submit();
        }

        function mobileUpdatePID(pid) {
            const pidInput = document.getElementById('pid-input');
            const selectType = document.getElementById('select-ship');
            // change pid to auto or single value from select
            pidInput.value = pid == 0 ? selectType.value : pid;
            // update style for card

            const totalText1 = document.getElementById('952');
            const totalText2 = document.getElementById('0');
            const totalText3 = document.getElementById('955');
            totalText1.style.display = 'none';
            totalText2.style.display = 'none';
            totalText3.style.display = 'none';

            if (pid == 952) {
                const shipWrap = document.getElementById('ship-wrap');
                shipWrap.style.display = 'none';
                totalText1.style.display = 'block';
            }
            else if (pid == 0) {
                const shipWrap = document.getElementById('ship-wrap');
                shipWrap.style.display = 'flex';
                totalText2.style.display = 'block';
            } else if (pid == 955) {
                const shipWrap = document.getElementById('ship-wrap');
                shipWrap.style.display = 'none';
                totalText3.style.display = 'block';
            }
        }

        function submitForm() {
            form.submit();
        }

        const mobileCards = document.querySelectorAll('.mb-card');
        mobileCards.forEach(card => {
            card.addEventListener('click', (event)=> {
                mobileCards.forEach(singleCard => {
                    singleCard.classList.remove('selected');
                })
                card.classList.add('selected');
            })
        })


        window.addEventListener("scroll", function() {
            var elementTarget = document.getElementById("cta");
            const countBanner = document.getElementById("countdown-banner");

            if (window.scrollY > (elementTarget.offsetTop + elementTarget.offsetHeight)) {
                countBanner.classList.remove('hidden');
            } else {
                countBanner.classList.add('hidden');
            }
        });

    window.addEventListener("DOMContentLoaded", function() {

        const discountSection = document.getElementById("cta");
        // const email = document.querySelector(".customer_email");
        // email.val(sessionStorage.getItem("customer_email"));

        // no btn-four id on any element


        document.getElementById("click-to-choose").addEventListener('click', function(e){
            e.preventDefault();
            window.scrollTo({top: discountSection.offsetTop});
        });

        document.querySelector(".veteran-link").addEventListener('click', function() {
            window.scrollTo({top: discountSection.offsetTop});
        });

        document.getElementById("six-package").addEventListener('click', function() {
            window.scrollTo({top: discountSection.offsetTop});
        });

        const addOns = document.querySelector(".addOns");
        addOns.addEventListener('change', function() {
            const addOn2 = document.getElementById('addon2');
            if(addOn2.checked) {
                addOn2.value = '1';
            }else{
                addOn2.value = '0';
            }
        })

        const mobileBonusView = document.querySelectorAll('.view-more');
        mobileBonusView.forEach(bon => {
            bon.addEventListener('click', ()=> {
                if(bon.innerText = 'view more') {
                    bon.nextElementSibling.classList.remove('hidden');
                    bon.remove();
                }

            })
        })

    });


function createCookie(name, cid, days) {
    var name = 'cidcookie';
    var cid = dtpCallback.getClickID();
    var days = 45;
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + cid + expires + "; path=/";
}


function cidgrab() {
    var cid = dtpCallback.getClickID();
    var name = 'cidcookie';
    var days = 45;
    //console.log(cid);
    createCookie(name, cid, days);
}
<?php if(isset($_GET['cpid'])) { ?>
    setTimeout("cidgrab()", 3000);
<?php } ?>


  var modalCanOpen = false
    setTimeout(()=> {
        modalCanOpen = true
    }, 5000);


timer1('<?php echo $futureDate; ?>', function(timeRemaining) {
    if (timeRemaining.days == 0 &&
        timeRemaining.hours == 0 &&
        timeRemaining.minutes == 0 &&
        timeRemaining.seconds == 0)
      {
        //timer expired, do things.
        var clock1 = document.querySelector('#clock1');
        clock1.textContent = "EXPIRED";
        const banner = document.getElementById('countdown-banner');
        banner.style.display = 'none';

        if (modalCanOpen) {
            window.modalHandler('runOutModal', true);
        }
    } else {
        //Update timers on screen
        var clock1 = document.querySelector('#clock1');
        clock1.textContent = zeroPad(timeRemaining.minutes, 2) + ':' + zeroPad(timeRemaining.seconds, 2);
    }
});

timer2('<?php echo $futureDate; ?>', function(timeRemaining) {
    if (timeRemaining.days == 0 &&
        timeRemaining.hours == 0 &&
        timeRemaining.minutes == 0 &&
        timeRemaining.seconds == 0)
      {
        //timer expired, do things.
        var clock2 = document.querySelector('#clock2');
        clock2.textContent = '00:00';
    } else {
        //Update timers on screen
        var clock2 = document.querySelector('#clock2');
        $seconds = timeRemaining.seconds;
        //$seconds = str_pad(timeRemaining.seconds, 2, '0', STR_PAD_LEFT);
        clock2.textContent = zeroPad(timeRemaining.minutes, 2) + ':' + zeroPad(timeRemaining.seconds, 2);
    }
});

// timer for float button
timer3('<?php echo $futureDate; ?>', function(timeRemaining) {
    if (timeRemaining.days == 0 &&
        timeRemaining.hours == 0 &&
        timeRemaining.minutes == 0 &&
        timeRemaining.seconds == 0)
      {
        //timer expired, do things.
        var clock3 = document.querySelector('#clock3');
            clock3.remove();
        const fullyG = document.getElementById('fully-guaranteed');
        fullyG.remove();

    } else {
        //Update timers on screen
        var clock3 = document.querySelector('#clock3');
        clock3.textContent = timeRemaining.hours + ' hours, ' + timeRemaining.minutes + ' minutes , ' + timeRemaining.seconds + ' seconds ';
    }
});

</script>

    <?php if ($site['debug'] == true) {
        // Show Debug bar only on whitelisted domains.
        template('debug', null, null, 'debug');
    } ?>
</body>

</html>