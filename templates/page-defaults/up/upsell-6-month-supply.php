<?php
header("Cache-Control: max-age=300, must-revalidate");
//include '../../includes/CakePost.inc.php';
//CakePost::post($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

$cookie_name = "returning_userup1";
$cookie_value = "yes";
$videoid = "jSBtEwenrKwiOeKu";
$droptime = "45";

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

    <?php if ($firedl) : ?>
        <script>
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': '<?php echo $dataLayer['event']; ?>',
                'transactionId': '<?php echo $dataLayer['transactionId']; ?>',
                'transactionTotal': '<?php echo $orderamt; ?>',
                'transactionAffiliation': '<?php echo @$_SESSION['affid']; ?>',
                'transactionProducts': [{
                    'sku': '<?php echo $gtmsku; ?>',
                    'name': '<?php echo $gtmname; ?>',
                    'price': '<?php echo $orderamt; ?>',
                    'quantity': 1
                }]
            });
        </script>
    <?php endif; ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T7RRXPJ');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Ads: 688388232 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-688388232"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-688388232');
    </script>
    <!-- Event snippet for Website sale conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-688388232/z6adCLjjyLYBEIjxn8gC',
            'transaction_id': '<?php echo $_SESSION['step_1_orderId']; ?>'
        });
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 761912273 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-761912273"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-761912273');
    </script>


	<?php template("includes/header"); ?>
    <title>100% SECURE - Supernatural Man LLC Checkout</title>
    <link rel="shortcut icon" href="https://s3.amazonaws.com/sec-image/upsells/skeletonkey/lock.png" type="image/png" />
    <link rel="icon" type="image/png" href="/favicon.png">

    <style>
        body {
            background-color: #e3e3e3;
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
        <div class="content px-1 md:px-5">
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
                <div class="flex justify-center w-full my-5">
                    <div id="vidalytics_embed_jSBtEwenrKwiOeKu" style="width: 100%; position:relative; padding-top: 56.25%;"></div>
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
                        })(window, document, 'Vidalytics', 'vidalytics_embed_jSBtEwenrKwiOeKu', 'https://quick.vidalytics.com/embeds/KwmJQD4K/jSBtEwenrKwiOeKu/');
                    </script>

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
                                <a href="/OCUS/?id=2&buy=1" id="upsell-buy" class="buy_button processlink" rel="samewin" onclick="exit=false;"><img class="mx-auto" src="//5gm.s3.amazonaws.com/yes-secure-my-discount.png" alt="Yes, Secure My Discount" style="max-width: 300px" /></a>
                                </div>

                            </div>
                            <div class="flex flex-col justify-around p-4">
                                <p class="text-center" style="font-size:28px !important; font-weight:bold;margin-bottom:5px;">12 Month Supply</p>
                                <p class="text-center" style="padding-bottom:5px;"><strike style="font-size:25px; color:gray;">Normally: $839.40</strike></p>
                                <p class="text-center" style="padding-bottom:5px;"><strong style="font-size:27px; color:#D81E00;">Today Just $297</strong></p>
                                <p class="text-center" style="font-weight:600; color:#D81E00; font-size:15px;">(A WHOPPING 65% Savings!)</p>
                                <div class="flex justify-center mt-3">
                                <a href="/OCUS/?id=2&buy=1" id="upsell-buy" class="buy_button processlink" rel="samewin" onclick="exit=false;"><img class="mx-auto" src="//5gm.s3.amazonaws.com/yes-secure-my-discount.png" alt="Yes, Secure My Discount" style="max-width: 300px" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center my-4"><span><img class="guarantee" src="https://s3.amazonaws.com/5gmale/90-guarantee.jpg" style="width:114px; height:112px;margin-top:20px;"></span></div>
                        <div class="flex justify-center my-4 font-bold text-center" style="font-size: 20px;"><em>(It's Recommended You Take This One-Time Discount)</em></div>
                    </div>

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
        $(document).ready(function() {
            (function titleScroller(text) {
                document.title = text;
                setTimeout(function() {
                    titleScroller(text.substr(1) + text.substr(0, 1));
                }, 400);
            }(" Before you go...Choose Your Option Now... Action Needed...Choose Your Upgrade Now... "));
        });
    </script>


    <script type="text/javascript">
        $("#qualify-btn").click(function() {
            var elem = document.getElementById("progress-bar");
            var width = 1;
            var id = setInterval(frame, 10);
            $('.light-grey').show();

            function frame() {
                if (width >= 100) {
                    clearInterval(id);

					var qualifyButton = document.getElementById("qualify-btn");
					var qualifyContainer = document.getElementById("qualify-container");
					var qualifyBarContainer = document.getElementById("container-buy");
					var orderSection = document.getElementById("order-section");
					qualifyButton.classList.remove('opacity-0');
					qualifyButton.classList.remove('h-0');
					qualifyButton.classList.add('hidden');
					qualifyBarContainer.classList.remove('opacity-0');
					qualifyBarContainer.classList.remove('h-0');
					qualifyBarContainer.classList.add('hidden');
					orderSection.classList.remove('hidden');
					//qualifyButton.classList.add('opacity-100');

                } else {
                    width++;
                    elem.style.width = width + '%';
                }
            }
        });
    </script>
    <script>
        $(".processlink").on("click", function(e) {
            $('.processlink').hide();
        });
    </script>
    <script type="text/javascript">

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
                var scroll = $('.container-video').offset().top;
                $('html, body').animate({
                    scrollTop: scroll
                }, 2000);
            }, 2000);
        </script>

    <?php } ?>
    <script src="/shared/js/fadeIn.js"></script>

</body>
<?php if ($site['debug'] == true) {
	// Show Debug bar only on whitelisted domains.
	template('debug', null, null, 'debug');
} ?>
</html>