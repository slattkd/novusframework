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
$_SESSION['pageType'] = 'dn1';
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

         </style>
     </head>
 <!-- HTML code from Bootply.com editor -->

 <body>

 <div class="main_container">
     <div class="slpage">

             <section>
                <?php
                    $current_step = 2;
                    template('includes/step_bar', null, $current_step);
                ?>
             </section>

         <div id="letter_body" class=" pr-4 pl-42  md:w-full pr-4 pl-42 flex flex-wrap">

             <div class="letter-body">

                 <!-- PASTE LETTER HERE -->

                     <!--p class="p4 flex-growor-black"><b><span id="upSellName" style="font-size: 17px;"><strong style="color: #D81E00;">WARNING:</strong> <u>Do Not</u> Leave This Page Yet, Your Order Is Not Complete!</span></b></p-->
                     <p class="p2"><br></p>

                     <p class="p4 centered" style="font-size:55px; line-height: 58px;">Take Just 3 Or 6 Bottles And Get An Even <strong>BIGGER Discount…</strong></p>

                     <p class="p2"><br></p>
                     <p class="p3">Hey, it’s Ryan again…</p>
                     <p class="p2"><br></p>

                     <p class="p3">I understand that $177 is a lot, but I don’t want you to leave empty handed.</p>
                     <p class="p2"><br></p>
                     <p class="p3">Like I said before I really want to make sure you’ve got those thick, rock-hard erections for AS LONG as you want them!</p>
                     <p class="p2"><br></p>
                     <p class="p3">So right now, today only…</p>
                     <p class="p2"><br></p>
                     <p class="p3">I’ll send you a smaller, three-bottle supply and give you an <strong><em>even bigger discount</em></strong>.</p>
                     <p class="p2"><br></p>
                     <p class="p3">Or an extra 6 bottles at a rock bottom crazy discount.</p3>
                     <p class="p2"><br></p>
                     <p class="p3">And YES – I’ll still throw in those <strong>two FREE bonus gifts</strong> as well!</p>
                     <p class="p2"><br></p>
                     <p class="p3">On the last page, you got a 57% OFF discount…</p>
                     <p class="p2"><br></p>
                     <p class="p4 centered">Now I’ll Drop The Price EVEN MORE… And Give You A <strong>WHOPPING 76% OFF!</strong></p>
                     <p class="p2"><br></p>
                     <p class="p3">You heard right!
                     <p class="p2"><br></p>
                     <p class="p3">My marketing department is going to be furious about this… </p>
                     <p class="p2"><br></p>
                     <p class="p3">But because you’re a new customer I want to make sure you’re taken care of… and I know you’re going to be ordering A LOT more of this because I’ve seen how it works…</p>
                     <p class="p2"><br></p>
                     <p class="p3">And I’d really be disappointed if you started getting all these killer results… </p>
                     <p class="p2"><br></p>
                     <p class="p3">And then, your supply ran out!</p>
                     <p class="p2"><br></p>
                     <p class="p3">But this is ONLY available today, <strong>right here</strong> on this page, because you’re a new customer.</p>
                     <p class="p2"><br></p>
                     <p class="p3">Once you leave this page, this deal is <strong>gone for good!</strong></p>
                     <p class="p2"><br></p>
                     <p class="p3">Make sure you secure your <strong>EXTREME DISCOUNT</strong> now…</p>

 <p class="p2"><br></p>

 <p class="p4 centered" style="font-size:35px;">Secure Your <strong>EXTREME DISCOUNT</strong> On A 3 Or 6-Month Supply of 5G Male PLUS And <strong>Get 78% OFF!</strong></p>
 <p class="p2"><br></p>
 <p class="p3 centered" style="font-size:23px;">Click The Button Below To Get Started Now…</p>
 <p class="p2"><br></p>

     <div class="processblock">
     <div id="container-buy" style="">
             <div class="options">
                 <div class="option1">
                     <p class="p3 centered" style="font-size:28px !important; font-weight:bold;margin-bottom:5px;">3 Bottle Discount</p>
                     <p class="p3 centered" style="padding-bottom:5px;"><strike style="font-size:25px; color:gray;">Normally: $209.85</strike></p>
                     <p class="p3 centered" style="padding-bottom:5px;"><strong style="font-size:27px; color:#D81E00;">Today Just $49</strong></p>
                     <p class="p3 centered" style="font-weight:600; color:#D81E00; font-size:15px;">(A MASSIVE 76% Savings!)</p>
                     <p class="p2"><br></p>
                     <div class="centered" id="buy-btn2">
                     <center><span><a href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up?pid=10&buy=1&next=up/upsell-2-blow-her-away" id="upsell-buy2" class="buy_button processlink" rel="samewin">Yes, Secure My Discount!</a></span></center>
                     </div>
                 </div>


                 <div class="option2">
                     <p class="p3 centered" style="font-size:28px !important; font-weight:bold;margin-bottom:5px;">6 Bottle Discount</p>
                     <p class="p3 centered" style="padding-bottom:5px;"><strike style="font-size:25px; color:gray;">Normally: $419.70</strike></p>
                     <p class="p3 centered" style="padding-bottom:5px;"><strong style="font-size:27px; color:#D81E00;">Today Just $97</strong></p>
                     <p class="p3 centered" style="font-weight:600; color:#D81E00; font-size:15px;">(A WHOPPING 78% Savings!)</p>
                     <p class="p2"><br></p>
                     <div class="centered">
                     <center><span><a href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up?pid=455&buy=1&next=up/upsell-2-blow-her-away" id="upsell-buy" class="buy_button processlink" rel="samewin">Yes, Secure My Discount!</a></span></center>
                     </div>
                 </div>
             </div>

                     <div style="clear:both;"></div>
                     <p class="centered flex justify-center"><span><img class="guarantee" src="//<?php echo $_SERVER['HTTP_HOST']?>/images/90-day-icon.png" style="width:114px; height:112px;margin-top:20px;"></span></p>
                     <p class="p7 centered" style="font-size: 20px; font-weight:bold;margin-top: 20px;"><em>(It's Recommended You Take This One-Time Discount)</em>
                     </p>
 </div>

 <p class="p2"><br></p>
 <p class="p2"><br></p>

                     <p class = 'centered p8' style="font-size: 13px; color: #8C8C8C;"><a href="//<?php echo $_SERVER['HTTP_HOST']?>/thank-you" style="color: #8C8C8C; text-decoration:underline;" class="processlink">Skip This</a> - No, Ryan I don’t want this, I understand what a great deal this is and I am giving up my chance to have it, please give my discount to the man in line. </p>
     </div><!-- end .processblock -->
                     <div id="footer"> Supernatural Man LLC </div>


                 <!-- // PASTE LETTER HERE -->

             </div>

         </div>

     </div>

 </div><!-- /.container -->

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
         history.pushState(stateObj, "100% SECURE - Supernatural Man LLC Checkout", "downsell-1-t.php<?php echo $querystring;?>");
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
     var specialOffer = 'downsell-1-t.php<?php echo trim($querystring); ?>';
 </script>


 </body>
 <?php if ($site['debug'] == true) {
      // Show Debug bar only on whitelisted domains.
      template('debug', null, null, 'debug');
  } ?>
 </html>
