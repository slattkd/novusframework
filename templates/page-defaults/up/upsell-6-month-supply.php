<?php
$cookie_name = "returning_userup1";
$cookie_value = "yes";
$vidcode = "jSBtEwenrKwiOeKu";
$droptime = "45";

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
$_SESSION['pageType'] = 'up1';

setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/");

$firedl = 0;
if (isset($_SESSION['step_1_orderId'])) {

    $firedl = 1;
    $dataLayer = [
        'event' => 'GTMCore',
        'transactionId' => $_SESSION['step_1_orderId'],
        'transactionTotal' => '',
        'price' => '',
        'sku' => '',
        'name' => ''
    ];


    switch ($_SESSION['pid']) {
        case 4:
            $gtmsku = '4';
            $orderamt = '76.90';
            $gtmname = '5G Male 1x Auto';
            break;
        case 5:
            $gtmsku = '5';
            $orderamt = '179.00';
            $gtmname = '5G Male 3x Auto';
            break;
        case 8:
            $gtmsku = '8';
            $orderamt = '179.00';
            $gtmname = '5G Male 3x';
            break;
        case 451:
            $gtmsku = '451';
            $orderamt = '297.00';
            $gtmname = '5G Male 6x';
            break;
        case 9:
            $gtmsku = '9';
            $orderamt = '179.00';
            $gtmname = '5G Male 6x';
            break;
        case 662:
            $gtmsku = '662';
            $orderamt = '297.00';
            $gtmname = '5G Male 6x';
            break;
        case 144:
            $gtmsku = '144';
            $orderamt = '23.95';
            $gtmname = '5G Male Payment Plan';
            break;
            //BOGO - gm974 and gm975
        case 952: //v1 - 1x Auto
            $gtmsku = '952';
            $orderamt = '76.90';
            $gtmname = '5G Male 1x Auto';
            break;
        case 953: //v1 - 3x
            $gtmsku = '953';
            $orderamt = '179.00';
            $gtmname = '5G Male 3x';
            break;
        case 954: //v1 - 3x Auto
            $gtmsku = '954';
            $orderamt = '179.00';
            $gtmname = '5G Male 3x Auto';
            break;
        case 955: //v1 - 6x
            $gtmsku = '955';
            $orderamt = '297.00';
            $gtmname = '5G Male 6x';
            break;

        case 956: //v2 - 1x Auto
            $gtmsku = '956';
            $orderamt = '76.90';
            $gtmname = '5G Male 1x Auto';
            break;
        case 957: //v2 - 3x
            $gtmsku = '957';
            $orderamt = '179.00';
            $gtmname = '5G Male 3x';
            break;
        case 958: //v2 - 3x Auto
            $gtmsku = '958';
            $orderamt = '179.00';
            $gtmname = '5G Male 3x Auto';
            break;
        case 959: //v2 - 6x
            $gtmsku = '959';
            $orderamt = '297.00';
            $gtmname = '5G Male 6x';
            break;
    }
    if (($gtmsku == 952 || $gtmsku == 956) && ($_SESSION['shippingcountry'] != 'US')) {
        $orderamt = '84.90';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php template("includes/header"); ?>
    <link rel="shortcut icon" href="https://s3.amazonaws.com/sec-image/upsells/skeletonkey/lock.png" type="image/png" />

    <style>
        body {
			background-color: #e3e3e3;
		}

		#progress-bar {
			width: 0;
		}

		#progress-bar.grow {
			transition: width 1s ease-in-out;
			animation: grow 1s ease-in;
		}
		@keyframes grow {
			0% {
				width: 0;
			}
			100% {
				width: 100%;
			}
		}
    </style>

    <!-- Start Visual Website Optimizer Asynchronous Code -->
    <script type='text/javascript'>
        var _vwo_code = (function() {
            var account_id = 2887,
                settings_tolerance = 5000,
                library_tolerance = 5000,
                use_existing_jquery = false,
                /* DO NOT EDIT BELOW THIS LINE */
                f = false,
                d = document;
            return {
                use_existing_jquery: function() {
                    return use_existing_jquery;
                },
                library_tolerance: function() {
                    return library_tolerance;
                },
                finish: function() {
                    if (!f) {
                        f = true;
                        var a = d.getElementById('_vis_opt_path_hides');
                        if (a) a.parentNode.removeChild(a);
                    }
                },
                finished: function() {
                    return f;
                },
                load: function(a) {
                    var b = d.createElement('script');
                    b.src = a;
                    b.type = 'text/javascript';
                    b.innerText;
                    b.onerror = function() {
                        _vwo_code.finish();
                    };
                    d.getElementsByTagName('head')[0].appendChild(b);
                },
                init: function() {
                    settings_timer = setTimeout('_vwo_code.finish()', settings_tolerance);
                    var a = d.createElement('style'),
                        b = 'body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',
                        h = d.getElementsByTagName('head')[0];
                    a.setAttribute('id', '_vis_opt_path_hides');
                    a.setAttribute('type', 'text/css');
                    if (a.styleSheet) a.styleSheet.cssText = b;
                    else a.appendChild(d.createTextNode(b));
                    h.appendChild(a);
                    this.load('//dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&r=' + Math.random());
                    return settings_timer;
                }
            };
        }());
        _vwo_settings_timer = _vwo_code.init();
    </script>
    <!-- End Visual Website Optimizer Asynchronous Code -->
</head>
<!-- HTML code from Bootply.com editor -->

<body class="serif">
    <div class="container-vsl mx-auto py-8" style="max-width: 950px">
        <div class="conten px-1 md:px-5">
            <section>
                <?php
                $current_step = 2;
				        template('includes/step_bar', null, $current_step);
				        ?>
            </section>
            <div class="flex flex-col w-full rounded p-5 bg-white rounded border border-black">
                <div class="w-full pb-4 text-center">
                    <h2 class="font-bold text-2xl text-red-500">WARNING: <u>Do Not</u> Leave This Page Yet, Your Order Is Not Complete!</h2>
                </div>
                <p class="w-full pb-3 text-center text-3xl">Watch This Short Presentation To Get Started With 5G Male And Secure An <strong>Additional 65% OFF</strong>…</p>
                <!-- <p class="w-full pb-3 text-center text-lg">Tap The Video Below To Play</p> -->
                <div class="flex flex-col justify-center w-full my-5 upsell">
                      <?php video('includes/player', $vidcode, $droptime);?>
                </div>
                <div class="w-full pb-3 text-center">
                    <h2 class="font-bold text-2xl text-red-500">Click The Button Below Now To See If You Qualify For This Discount</h2>
                </div>
                <div class="flex justify-center w-full">
                    <img id="qualify-btn" class="mx-auto w-full clickable transition-all duration-500 ease-in-out" style="max-width: 350px" src="//5gm.s3.amazonaws.com/see-if-you-qualify.png" alt="See If You Qualify">
                </div>


                <!-- expand qualify content -->
                <section>
                    <div id="container-buy" class="qualify-container my-3">
                        <div class="light-grey" style="display:none;background-color: #e1e1e1; width:70%; margin: 0 auto;">
                            <div id="progress-bar" class="green" style="height:10px;width:0;background-color:#40A900;"></div>
                        </div>
                    </div>
                    <div id="order-section" class="hidden transition-all duration-500 ease-in-out">
                        <div class="flex justify-center text-center sans my-3 font-bold" style="font-size:30px;">Congratulations! You Qualify For This Exclusive Discount:</div>
                        <div class="flex justify-center text-center sans my-3 font-bold"  style="font-size:25px;">Choose Your Discount Now:</div>
                        <div class="flex w-full flex-wrap justify-around border-2 border-red-600 border-dashed" >
                            <div class="flex flex-col justify-around p-4">
                                <p class="text-center" style="font-size:28px !important; font-weight:bold;margin-bottom:5px;">6 Month Supply</p>
                                <p class="text-center" style="padding-bottom:5px;"><strike style="font-size:25px; color:gray;">Normally: $419.67</strike></p>
                                <p class="text-center" style="padding-bottom:5px;"><strong style="font-size:27px; color:#D81E00;">Today Just $179.69</strong></p>
                                <p class="text-center" style="font-weight:600; color:#D81E00; font-size:15px;">(A MASSIVE 57% Savings!)</p>
                                <div class="flex justify-center mt-3">
                                <a href="/process-up/?pid=11&buy=1&up=upsell-2-blow-her-away" id="upsell-buy" class="buy_button processlink" rel="samewin" onclick="exit=false;"><img class="mx-auto" src="//5gm.s3.amazonaws.com/yes-secure-my-discount.png" alt="Yes, Secure My Discount" style="max-width: 300px" /></a>
                                </div>

                            </div>
                            <div class="flex flex-col justify-around p-4">
                                <p class="text-center" style="font-size:28px !important; font-weight:bold;margin-bottom:5px;">12 Month Supply</p>
                                <p class="text-center" style="padding-bottom:5px;"><strike style="font-size:25px; color:gray;">Normally: $839.40</strike></p>
                                <p class="text-center" style="padding-bottom:5px;"><strong style="font-size:27px; color:#D81E00;">Today Just $297</strong></p>
                                <p class="text-center" style="font-weight:600; color:#D81E00; font-size:15px;">(A WHOPPING 65% Savings!)</p>
                                <div class="flex justify-center mt-3">
                                <a href="/process-up/?pid=250&buy=1&up=upsell-2-blow-her-away" id="upsell-buy" class="buy_button processlink" rel="samewin" onclick="exit=false;"><img class="mx-auto" src="//5gm.s3.amazonaws.com/yes-secure-my-discount.png" alt="Yes, Secure My Discount" style="max-width: 300px" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center my-4"><span><img class="guarantee" src="https://s3.amazonaws.com/5gmale/90-guarantee.jpg" style="width:114px; height:112px;margin-top:20px;"></span></div>
                        <div class="flex justify-center my-4 font-bold text-center" style="font-size: 20px;"><em>(It's Recommended You Take This One-Time Discount)</em></div>
                    </div>

                    <p class="centered p8" style="font-size: 15px; color: #8C8C8C;"><a href="popupa" class="fancybox fancybox.ajax" style="color: #8C8C8C; text-decoration:underline;" onclick="exit=false;">Skip This</a> - Ryan, give my one-time-only discount away to another man. I understand I will NOT get access to this discount again under any circumstances.</p>

                </section>


                <div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-11 sans uppercase"> <?php echo $company['name'] ?></div>

            </div>
        </div>
    </div>


    <?php
    // declare modal variables (requires basic_modal.js)
    $modal_id = 'exitModal';
    $modal_title = "WAIT! DO NOT LEAVE THIS PAGE!";
    $modal_body = '
    <div class="modalsubheader text-center my-2">IT COULD CAUSE ERRORS IN YOUR ORDER</div>
    <div class="text-sm text-center my-2">Do not hit the back button or close your browser.
    <br>Click <span class="font-bold">"FINISH MY ORDER"</span> below and <span style="text-decoration: underline;font-weight:bold;">make your decision on this page</span>.</div>
    ';
    $modal_footer = '<button id="modalbutton" type="button" class="modalbutton w-full bg-blue-600 p-3 rounded text-white">FINISH MY ORDER</button>';
    modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer);
    ?>

<script>
        window.onload = function() {
			(function titleScroller(text) {
					document.title = text;
					setTimeout(function () {
							titleScroller(text.substr(1) + text.substr(0, 1));
					}, 400);
			}(" Before you go...Choose Your Option Now... Action Needed...Choose Your Upgrade Now... "));
		}

		const qualify = document.getElementById('qualify-btn');
		const buy = document.getElementById('container-buy');
		const order = document.getElementById('order-section');
		const green = document.getElementById('progress-bar');
		qualify.addEventListener('click', ()=> {
			buy.style.display = 'block';
			document.querySelector('.light-grey').style.display = 'block';
			green.classList.add('grow');

			setTimeout(() => {
				document.querySelector('.light-grey').style.display = 'none';
				order.style.display = 'block';
			}, "1000")
		})

		const process = document.querySelector('.processlink');
		process.addEventListener('click', ()=> {
			process.classList.add('hidden');
		})

		// modal on mouseleave
		document.documentElement.addEventListener('mouseleave', () => {
			window.modalHandler('exitModal', true);
		})

		// modal on navigate away
		window.addEventListener('popstate', function(e) {
			window.modalHandler('exitModal', true);
		});

    </script>


    <?php if ($_COOKIE[$cookie_name] == 'yes') { ?>
        <script>
            fadeInDelay = 0;
            fadeInDiv = '#container-buy';
            setTimeout(function() {
                var scroll = document.querySelector('.video-container');
                scroll.scrollIntoView({
					behavior: "smooth",
					block: "start",
					inline: "nearest"
				});
            }, 2000);
        </script>

    <?php } ?>


</body>
<?php if ($site['debug'] == true) {
	// Show Debug bar only on whitelisted domains.
	template('debug', null, null, 'debug');
} ?>
</html>