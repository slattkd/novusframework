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
$_SESSION['pageType'] = 'dn2';
?>




 <?php


 $alot = 227;
 $normally = 270;
 $price = '99.95';
 $supply = 3;
 $savings = '63';
 $newflow = 0;

 if (isset($_SESSION['core']) && ($_SESSION['core'] == 6)) {
     $newflow = 1;
     $alot = 454;
     $normally = 540;
     $price = '224.95';
     $supply = 6;
     $savings = '58';
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
        <?php template("includes/header"); ?>
        <title>100% SECURE - Supernatural Man LLC Checkout</title>
        <link rel="shortcut icon" href="https://s3.amazonaws.com/sec-image/upsells/skeletonkey/lock.png" type="image/png" />

         <style>
             .p1, .color-black {
                 font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif !important;
             }

             .p1, .color-black {
                 font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif !important;
             }

             .p4 {
                 font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;
                 font-size: 26px;
                 font-weight: 400;
             }

             .p3 {
                 font-family: 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif;
             }

             #cboxOverlay {
                 background: #000 !important;
             }

             #cboxClose{
                 top: 0px;
                     background: url(../../upsells/5gmale/colorbox/images/controls.png) no-repeat -25px 0 !important;
             }

             .buy_button {
                     font-weight: bold;
                     background-color: #82c213;
                     color: #fff;
                     font-size: 25px;
                     border: 1px solid #000;
                     padding: 15px 10px;
                     border-radius: 4px;
                     text-shadow: 1px 1px #000;
                     box-shadow: 1px 1px 2px #888888;
                     text-decoration: none;
             }

             .buy_button:hover {
                 background-color: transparent;
                     border: 2px solid #82c213;
                     color: #82c213;
                     text-decoration: none;
                     text-shadow: none;
             }

             .main-pop h1 {
                 color: #cc0300;
                 font-size: 60px;
                 text-align: center;
                 margin-top: -20px;
                 margin-bottom: 5px;
             }
             .modal-title {
                 position: relative;
                 padding: 12px !important;
             }
             p#close-btn {
                 position: absolute;
                 top: 3px;
                 right: 8px;
                 color: #fff;
                 font-weight: bold;
                 font-size: 17px;
                 cursor: pointer
             }
             .main-pop h3 {
                 text-align: center;
                 font-size: 27px !important;
                 line-height: 37px;
                 font-weight: normal;
                 margin-top: -15px;
                 color: #000 !important;
             }
             .stay-btn-cont, .leave-btn-cont {
                 width: 48%;
                 float: left;
             }
             #stay-btn, #leave-btn {
                 font-size: 30px;
                 font-weight: bold;
                 color: #fff;
                 border: none;
                 background: green;
                 padding: 12px 25px;
                 margin-top: 15px;
                 width: 90%;
                 cursor: pointer;
             }
             #leave-btn {
                 margin-left: 20px;
                 background: #cc0300;
             }
             #ouibounce-modal .modal-footer {
                 border-top: none !important;
             }
             .options {
                 width: 100%;
                 float: left;
                 border: 3px dashed red;
                 padding-bottom: 35px;
                 padding-top: 15px;
             }
             .option2 {
                 margin-top: 30px;
             }
             @media(max-width:767px){
                 .lefts {
                     width:100%
                 }


                 .guarantee {
                     margin-top: 20px;
                 }

                 .buy_button {
                     font-size: 23px;
                 }

                 .fancybox-opened {
                     width: 90% !important;
                 }
             }

             .buy_button {
			font-weight: bold;
			background-color: #82c213;
			color: #fff;
			font-size: 25px;
			border: 1px solid #000;
			padding: 15px 10px;
			border-radius: 4px;
			text-shadow: 1px 1px #000;
			box-shadow: 1px 1px 2px #888888;
			text-decoration: none;
			transform: all 200ms ease-in-out;
		}
		
		.buy_button:hover {
			background-color: transparent;
			border: 2px solid #82c213;
			color: #82c213;
			text-decoration: none;
			text-shadow: none;
		}

         </style>
     </head>
 <!-- HTML code from Bootply.com editor -->

 <body>

 <div class="container container-vsl mx-auto py-8">
		<div class="conten px-1">
            <section>
                <?php
                     $current_step = 2;
                     template('includes/step_bar', null, $current_step);
                ?>
             </section>



			<div class="flex-flex-col w-full p-3 md:p-5 lg:p-10 bg-white rounded border border-black">
				<p class="w-full text-center text-5xl text-red-500 mb-6">Take Just 6 Bottles And Get An Even <strong>BIGGER Discount…</strong></p>
				<div class="flex flex-col w-full">
					<p class="w-full pb-4">Hey, it’s Ryan again…</p>
					<p class="w-full pb-4">I understand that $<?php echo $alot; ?> is a lot, but I don’t want you to leave empty handed.</p>
					<p class="w-full pb-4">I really want to make sure you can shoot thick, roping loads that hot girls absolutely LOVE&hellip; that will keep them coming back for more again and again&hellip;</p>
					<p class="w-full pb-4">So right now, today only…</p>
					<p class="w-full pb-4">I’ll send you a smaller, three-bottle supply of Supernatural Man’s Volumizer and give you an <strong><em>even bigger discount</em></strong>.</p>
					<p class="w-full pb-4">On the last page, you got a 58% OFF discount&hellip;</p>
				</div>

				<?php if($newflow) { ?>
					<h2 class="text-red-600 text-2xl text-center my-7">Now I’ll Drop The Price EVEN MORE… And Give You A <strong>WHOPPING <?php echo $savings; ?>% OFF!</strong></h2>
				<?php } else { ?>
						<h2 class="text-red-600 text-2xl text-center my-7">Now I’ll Drop The Price EVEN MORE&hellip; And Give You <strong>3 Bottles of Volumizer for just $33.32 each!</strong></h2>
				<?php } ?>

				<div class="flex flex-col w-full">
					<p class="w-full pb-4">You heard right!
					<p class="w-full pb-4">My marketing department is going to be furious about this… </p>
					<p class="w-full pb-4">But because you’re a new customer I want to make sure you’re taken care of… and I know you’re going to be ordering A LOT more of this because I’ve seen how it works…</p>
					<p class="w-full pb-4">And I’d really be disappointed if you started getting all these killer results… </p>
					<p class="w-full pb-4">And then, your supply ran out!</p>
					<p class="w-full pb-4">But this is ONLY available today, <strong>right here</strong> on this page, because you’re a new customer.</p>
					<p class="w-full pb-4">Once you leave this page, this deal is <strong>gone for good!</strong></p>
					<p class="w-full pb-4">Make sure you secure your <strong>EXTREME DISCOUNT</strong> now…</p>
				</div>
				<h2 class="text-red-600 text-3xl text-center my-7">
				Secure Your <strong>EXTREME DISCOUNT</strong> On A <?php echo $supply; ?>-Month Supply of Supernatural Man’s Volumizer And <strong>Get <?php echo $savings; ?>% OFF!</strong>
				</h2>
				<div class="text-black text-lg text-center my-5">
				Click The Button Below To Get Started Now…
				</div>

				<section class="processblock">
					<div class="flex-flex-col w-full p-4 border-dashed border-2 border-red-500">
						<div class="flex flex-col w-auto mx-auto bottle-wrap text-center mb-8">
							<div class="text-2xl font-bold font-black"><?php echo $supply; ?> Bottle Discount</div>
							<div class="strike text-gray-400 text-xl line-through">Normally: $<?php echo $normally; ?></div>
							<div class="text-red-400 text-2xl font-semibold">Today Just $<?php echo $price; ?></div>
							<div class="text-black text-sm">(A MASSIVE <?php echo $savings; ?>% Savings!)</div>

								<div class="flex justify-center mx-auto mt-6"><span><a href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up.php?pid=736&buy=1&next=up/upsell-testosterone" id="upsell-buy2" class="buy_button processlink" rel="samewin">Yes, Secure My Discount!</a></span></div>

						</div>
					</div>
                </section>
                <!-- <section class="processblock mt-5">
					<div class="flex-flex-col w-full p-4 border-dashed border-2 border-red-500">
						<div class="flex flex-col w-auto mx-auto bottle-wrap text-center mb-8">
							<div class="text-2xl font-bold font-black"><?php echo $supply; ?> Bottle Discount</div>
							<div class="strike text-gray-400 text-xl line-through">Normally: $<?php echo $normally; ?></div>
							<div class="text-red-400 text-2xl font-semibold">Today Just $<?php echo $price; ?></div>
							<div class="text-black text-sm">(A MASSIVE <?php echo $savings; ?>% Savings!)</div>

								<div class="flex justify-center mx-auto mt-6"><span><a href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up.php?pid=738&buy=1&next=up/upsell-testosterone" id="upsell-buy2" class="buy_button processlink" rel="samewin">Yes, Secure My Discount!</a></span></div>

						</div>
					</div>
				</section> -->
				<div class="flex justify-center my-10">
					<img class="mx-auto" src="https://s3.amazonaws.com/5gmale/90-guarantee.jpg" style="max-width: 250px">
				</div>
				<div class="flex justify-center w-full text-center text-xl font-bold text-black">
					<em>(It's Recommended You Take This One-Time Discount)</em>
				</div>
				<div class="flex w-full justify-center py-7">
					<p class='text-center px-5 split-non-buy processlink text-gray-500 text-sm'><a href="/OCUS/?id=31&buy=0" style="color: #8C8C8C; text-decoration:underline;" onclick="exit=false;">Skip This</a> - No, Ryan I don’t want this, I understand what a great deal this is and I am giving up my chance to have it, please give my discount to the man in line.</p>
				</div>
				<div id="footer" class="flex w-full justify-center text-gray-300 border-t mt-10 pt-3 sans uppercase"> Supernatural Man LLC </div>

			</div>
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


 <script>
     document.querySelector( ".processlink" ).addEventListener('click', function(e){
         document.querySelector('.processblock').style.display = 'none';
     });

     //exit intent
         document.body.addEventListener('mouseleave', function () {
             console.log('left');
                 modalHandler('mouseModal', true);
         });

     //back button
     <?php if($detect->isMobile()) { ?>
         var stateObj = { };
         history.pushState(stateObj, "100% SECURE - Supernatural Man LLC Checkout", "downsell-2-t.php<?php echo $querystring;?>");
         window.addEventListener('popstate', function(e) {
                     modalHandler('mouseModal', true);

                         const finishButton = document.getElementById('finish-btn');
             finishButton.addEventListener('click', function(e) {
                             modalHandler('mouseModal', false);
             });
         });
     <?php } ?>
 </script> <!-- Triggers Exit-intent -->

 <script>
     var specialOffer = 'downsell-2-t.php<?php echo trim($querystring); ?>';
 </script>


 </body>
 <?php if ($site['debug'] == true) {
      // Show Debug bar only on whitelisted domains.
      template('debug', null, null, 'debug');
  } ?>
 </html>
