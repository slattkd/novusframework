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
$_SESSION['pageType'] = 'upinterstitial';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php template("includes/header"); ?>
         <title>100% SECURE - Supernatural Man LLC Checkout</title>
        <style>
            body {
                background: #000;
            }
            /* color:#66667d; */
        </style>
    </head>
<body>
<div class="container-vsl mx-auto py-8 serif mt-10" style="max-width: 680px">
    <div class="content px-1 sans">
        <div class="flex flex-column flex-wrap bg-white p-5 text-center">
            <div class="flex w-full justify-center text-red-500 mb-5 text-4xl uppsercase" style="font-family:'Teko'">
                <h1>Last Chance!!!</h1>
            </div>
            <div class="flex w-full text-red-500 text-3xl mb-5">
            Choose One of These 2 Free Options to Continue...
            </div>
            <div class="flex w-full justify-center text-gray-400 mb-5 text-sm">
                <a class="underline hover:text-gray-300" href="https://members.supernaturalman.com/login">continue to the members area to start viewing your digital content...</a>
            </div>
            <div class="flex w-full justify-center text-red-500 text-sm mb-5">
            or....
            </div>
            <div class="flex w-full text-blue-600 text-2xl mb-3">
                <a class="underline hover:text-blue-500 font-semibold" href="//<?php echo $_SERVER['HTTP_HOST']?>/up/upsell-female-cream">Click Here Now To Get One FINAL HUGE Discount Because You're A New Member Today...</a>
            </div>
            <div class="flex justify-center w-full font-bold">(One Time Only - Ends TODAY!)</div>
        </div>

    </div>
</div>

</body>
<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</html>



