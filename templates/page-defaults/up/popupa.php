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
$_SESSION['pageType'] = 'dn0';

$next = '/up/upsell-2-blow-her-away';
$product1 = $products['products']['127'];
$product2 = $products['products']['128'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php template("includes/header"); ?>
    <link rel="shortcut icon" href="https://s3.amazonaws.com/sec-image/upsells/skeletonkey/lock.png" type="image/png" />

    <style>
		.wait {font-size: 118px;}
		.popup-btn{
			
			background: none!important;
			border: none!important;
			box-shadow: none!important;
		}
		
		.popup-btn img{
			width: 95%;
			max-width: 288px;
		}
		.headline {
			font-size: 28px !important;
		}

			
			.buttons-wrap {
				width: 100%;
				padding: 0px;
				margin: 0 auto;
			}
			
			.buttons-left {
				width: 47%;
				float: left;
			}
			.buttons-right {
				width: 47%;
				float: right;
			}
			
			.clear { clear: both; }
			
			.button-wrap img {
				display: block;
			}
			
			.w100 {
				width: 100%;
			}
			
			.buttons-left a:hover, .buttons-right a:hover {
				 color: #82c213 !important;
				 text-decoration: none;
			}
			
			.buttons-left a {
				display: block;
				margin-bottom: 20px;
			}
			
			
			.buttons-right a {
				display: block;
				margin-bottom: 20px;
				}

            .price {
                padding-bottom: 15px;
                font-size: 20px;
                color: red;
                font-weight: bold;
            }

            .letter-body {
                border-width: 0;
                border-style: none;
            }
		@media(max-width:767px){
				.lefts {
					width:100%
				}
				.popup-btn{ position: relative; left: -10px; }
				.wait{
					font-size: 50px!important;
					margin-top: 15px;
					}
				.color-black, .buy_button {
					font-size: 20px !important;
				}

				
			.buttons-left {
				width: 100%;
				float: none;
			}
			.buttons-right {
				width: 100%;
				float: none;
			}
			.buttons-left a {
				display: inline;
				margin-bottom: 0px;
			}
			.buttons-right a {
				display: inline;
				margin-bottom: 0px;
				}
			}
			
			@media(max-width:370px){
				.buttons-wrap p {
					padding-bottom: 20px;
				}
				
				.guarantee {
					padding-top: 20px;
				}
			}

			input[type="checkbox"] {
				filter: unset;
			}

			input[type="checkbox"]:checked {
				filter: brightness(120%) hue-rotate(-51deg) saturate(53%) contrast(300%);
            }
            
            /* condensed upsell css */
            body{padding:0;margin:0;color:#000;background-color:#eee}.main_container{padding:0;margin:25px auto;overflow:auto;width:680px}.slpage{padding:0 0 20px 0;overflow:hidden;width:100%}.letter-body{position:relative;clear:both;padding:15px 50px;margin:15px auto;float:none;border-radius:5px;border-width:3px 1px 1px;border-style:solid;border-color:#d81e00 #000 #000;background-color:#fff}p{margin:0;padding:0}.p1{font-family:Arial,Verdana,sans-serif;color:#000;text-align:center;font-size:16px;margin:20px 0}.p3{font-family:Arial,sans-serif;font-size:14px;line-height:130%;text-indent:0!important}.p4{font-weight:700;font-size:20px;color:#d81e00}.centered{text-align:center}.color-black{color:#000}#guarantee-image-2{float:left;margin-right:20px}.buy_box{border:4px dashed #c90000;width:80%;margin:40px auto;float:none}#letter_body{margin:0;padding:10px 0}@media (max-width:800px){.letter-body{padding:20px}.p1{text-indent:0}}@media (max-width:460px){.p3{font-size:22px}.main_container{padding:0;padding-top:10px;width:100%;margin:0}.letter-body{margin:0;padding:4px;width:100%}.slpage{padding:20px 0 20px 0;width:100%;float:none;margin:0}.buy_box{width:95%}}@media (max-width:920px){.main_container{width:96%;margin:0 auto}.buy_box{width:90%}}
			
	</style>
</head>

<body>
<div class="main_container" style="max-width: 680px!important;">
    <div class="slpage">

            <section>
            <?php
                $current_step = 2;
                template('includes/step_bar', null, $current_step);
            ?>
            </section>

        <div id="letter_body" class="pr-4 pl-42 md:w-full pr-4 pl-42 mt-6 flex flex-wrap">

            <div class="letter-body">

        <p class="headline p4 centered flex-growor-black">
             <span class="wait" style="color: red;">WAIT!</span><br>
            <span style="display: block; color: red; line-height: 33px!important;">Due To High Demand And Limited Availability You <em>Must</em> Confirm That You Are Permanently Giving Up Your Claim On This One-Time Only Deal:
</span><br>

        </p>

        <p>&nbsp;</p>

        <p style="margin: 0px 20px; font-size: 16px;">
            <input type="checkbox" name="go_check" id="go_check9">&nbsp; I understand that this deal on <b> 5G Male,</b> including <b>2 exclusive bonuses</b> is ONLY offered to new customers of <b>5G Male</b> and is not available ANYWHERE but here. I also understand this deal is backed by an unheard of 90-day guarantee. I accept that by declining this offer I will give up my opportunity to access this discount for good.

        </p>

        <p>&nbsp;</p>
        <p class="headline centered"style="color: red; font-weight: bold;">ONLY <u>42 BOTTLES</u> LEFT</span></p>
        <p>&nbsp;</p>
        <div class = 'centered' >
        <p><a href="//<?php echo $_SERVER['HTTP_HOST']?>/dn/downsell-1" style="color: black; text-decoration: underline;font-weight:400;font-size: 14px;line-height:20px;" onClick="exit=false; var input = document.getElementById ('go_check9'); if (!input.checked ) alert('Please check the checkbox to continue.'); return input.checked;">Give My Reserved Space Away To Another Customer</a></p>
        </div>

        <p>&nbsp;</p>


                <div class="buttons-wrap">

                        <div class="buttons-left centered">
                            <p class="p3 centered" style="font-size:28px !important; font-weight:bold;margin-bottom:10px;">3 Bottle Discount</p>
                            <p class="price">Price $109</p>
                            <span><a href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up.php?pid=<?= $product1['product_id']; ?>&next=<?= $next; ?>" id="upsell-buy" class="processlink" rel="samewin" onclick="exit=false;">
                            <img class="w100" src="//<?php echo $_SERVER['HTTP_HOST']?>/images/Yes-Ill-TakeIt.png" alt="Yes, I'll Take It!" /></a></span>
                            <img class="guarantee mx-auto" src="//<?php echo $_SERVER['HTTP_HOST']?>/images/90-day-icon.png" style="width:114px; height:112px;">
                        </div><!-- end .buttons-left -->

                        <div class="buttons-right centered">
                            <p class="p3 centered" style="font-size:28px !important; font-weight:bold;margin-bottom:10px;">6 Bottle Discount</p>
                            <p class="price">Price $179.69</p>
                            <a href="//<?php echo $_SERVER['HTTP_HOST']?>/process-up.php?pid=<?= $product2['product_id']; ?>&next=up<?= $next; ?>" id="upsell-buy2" class="border-0 processlink" rel="samewin" onclick="exit=false;">
                            <img class="w100" src="//<?php echo $_SERVER['HTTP_HOST']?>/images/Yes-Ill-TakeIt.png" alt="Yes, I'll Take It!" /></a>
                            <img class="guarantee mx-auto" src="//<?php echo $_SERVER['HTTP_HOST']?>/images/90-day-icon.png" style="width:114px; height:112px;">
                        </div><!-- end .buttons-right -->

                </div><!-- end .buttons-wrap -->
        <div class="clear"></div>
        </div>
         </div>
      </div>
    </div>


<script type="text/javascript">
    document.querySelector(".processlink").addEventListener('click', function(e) {
      document.querySelector('.processlink').classList.add('disabled');
    });
</script>
</body>
<?php if ($site['debug'] == true) {
	// Show Debug bar only on whitelisted domains.
	template('debug', null, null, 'debug');
} ?>
</html>