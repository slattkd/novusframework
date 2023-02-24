<?php
$cookie_name = "returning_userup1";
$cookie_value = "yes";
$video_id = "jSBtEwenrKwiOeKu";
$drop_time = "45";

$next = '/up/upsell-2-blow-her-away';
$pid1 = '127';
$pid2 = '128';

$product1 = $products['products'][$pid1];
$product2 = $products['products'][$pid2];

$_SESSION['pageType'] = 'up1';

setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/");

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php template("includes/header"); ?>
    <title><?php echo $company['name']; ?> - Monthly Supply</title>

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

</head>

<body>
    <div class="wsl container container-sm mx-auto py-8">
        <div class="conten px-1 md:px-5">
            <section>
                <?php
                    $current_step = 2;
                    template('includes/step_bar', null, $current_step);
                ?>
            </section>
            <div class="flex flex-col w-full rounded p-5 bg-white rounded border border-black mt-6">
                <div class="w-full pb-4 text-center">
                    <h1 class="font-bold text-red-600 text-center text-3xl md:text-4xl leading-6 title">WARNING: <u>Do Not</u> Leave This Page Yet, Your Order Is Not Complete!</h1>
                </div>
                <p class="w-full pb-3 text-center text-3xl">Watch This Short Presentation To Get Started With 5G Male And Secure An <strong>Additional 65%&nbsp;OFF</strong>…</p>
                <!-- <p class="w-full pb-3 text-center text-lg">Tap The Video Below To Play</p> -->
                <div class="flex flex-col justify-center w-full my-5 upsell">
                      <?php video('includes/player', $video_id, $drop_time);?>
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
                                <p class="text-center" style="font-size:28px !important; font-weight:bold;margin-bottom:5px;"><?= $product1['product_month']; ?> Month Supply</p>
                                <p class="text-center" style="padding-bottom:5px;"><strike style="font-size:25px; color:gray;">Normally: $<?= $product1['product_retail']; ?></strike></p>
                                <p class="text-center" style="padding-bottom:5px;"><strong style="font-size:27px; color:#D81E00;">Today Just $<?= $product1['product_price']; ?></strong></p>
                                <p class="text-center" style="font-weight:600; color:#D81E00; font-size:15px;">(A MASSIVE <?= percentOff($product1['product_price'], $product1['product_retail']); ?>% Savings!)</p>
                                <div class="flex justify-center mt-3">
                                <a class="cta-link" href="/process-up.php?pid=<?= $pid1; ?>&next=<?= $next; ?>" id="upsell-buy" class="processlink clickable" rel="samewin" onclick="exit=false;">
                                    <button class="cta-button">Secure My Discount</button>
                                </a>
                                </div>

                            </div>
                            <div class="flex flex-col justify-around p-4">
                            <p class="text-center" style="font-size:28px !important; font-weight:bold;margin-bottom:5px;"><?= $product2['product_month']; ?> Month Supply</p>
                                <p class="text-center" style="padding-bottom:5px;"><strike style="font-size:25px; color:gray;">Normally: $<?= $product2['product_retail']; ?></strike></p>
                                <p class="text-center" style="padding-bottom:5px;"><strong style="font-size:27px; color:#D81E00;">Today Just $<?= $product2['product_price']; ?></strong></p>
                                <p class="text-center" style="font-weight:600; color:#D81E00; font-size:15px;">(A MASSIVE <?= percentOff($product2['product_price'], $product2['product_retail']); ?>% Savings!)</p>
                                <div class="flex justify-center mt-3">
                                <a class="cta-link" href="/process-up.php?pid=<?= $pid2; ?>&next=<?= $next; ?>" id="upsell-buy" class="processlink clickable" rel="samewin" onclick="exit=false;">
                                    <button class="cta-button">Secure My Discount</button>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center my-4"><span><img class="guarantee" src="https://s3.amazonaws.com/5gmale/90-guarantee.jpg" style="width:114px; height:112px;margin-top:20px;"></span></div>
                        <div class="flex justify-center my-4 font-bold text-center" style="font-size: 20px;"><em>(It's Recommended You Take This One-Time Discount)</em></div>
                    </div>

                    <p class="text-center p8" style="font-size: 15px; color: #8C8C8C;"><a href="popupa" class="fancybox fancybox.ajax" style="color: #8C8C8C; text-decoration:underline;" onclick="exit=false;">Skip This</a> - Ryan, give my one-time-only discount away to another man. I understand I will NOT get access to this discount again under any circumstances.</p>

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
                qualify.style.display = 'none';
				order.style.display = 'block';
			}, "1000")
		})

		// modal on mouseleave
		document.documentElement.addEventListener('mouseleave', () => {
			window.modalHandler('exitModal', true);
		})

		// modal on navigate away
		window.addEventListener('popstate', function(e) {
			window.modalHandler('exitModal', true);
		});


        // disable cta buttons on click
        const allCTA = document.querySelectorAll('a.cta-link');

        allCTA.forEach((cta)=> {
            cta.addEventListener('click', (event)=> {
                cta.classList.add('processing')
                cta.querySelector('button.cta-button').innerText = 'Processing...';
                disableCTAButtons();
            })
        })

        function disableCTAButtons() {
            allCTA.forEach((cta)=> {
                cta.style.pointerEvents = 'none';
                cta.querySelector('button.cta-button').classList.add('disabled');
            })
        }

    </script>


    <?php if ($_COOKIE[$cookie_name] == 'yes') { ?>
        <script>
            fadeInDelay = 0;
            fadeInDiv = '#container-buy';
            var scroll = document.querySelector('.video-container');
            scroll.scrollIntoView({
                behavior: "smooth",
                block: "start",
                inline: "nearest"
            });
        </script>

    <?php } ?>


</body>
<?php if ($site['debug'] == true) {
	// Show Debug bar only on whitelisted domains.
	template('debug', null, null, 'debug');
} ?>
</html>