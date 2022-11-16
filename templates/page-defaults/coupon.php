

<html>
<head>
    <?php template('includes/header'); ?>
    <title>10% Off Coupon, One Chance Offer</title>
    <style>
        .discount-wrap { 
			max-width: 550px;
			margin: 0 auto;
			padding: 0px 5px;
			border: dashed #ff0000 6px;
        }
    </style>
</head>

<body class="bg-white">
    
    <section class="max-w-5xl mx-auto bg-white text-center content-center">
        <h1>COUPON PAGE!</h1>
        <a href="/checkout/">Next Page</a>
        <a href="/product">Previous Page</a>

        <div class="flex max-w-xl mx-auto">
            <div class="w-full md:w-full">
                <h1 class="text-center mt-14 mb-14 font-medium ">Before You Continue&hellip;</h1>
                <div class="border-dashed border-6 border-red-600 p-2">
                    <h2 class="text-red-600 text-5xl text-center font-bold">10% OFF INSTANTLY!</h2>
                    <p class="text-xl mx-16 mt-4 mb-4">Get <b>10% OFF FOR LIFE</b> on all orders and easy monthly auto-refills <b>
                        (limited to the first 25 buyers)</b></p>
                
                        <form id="discountform" name="discountform" class="button-wrap" method="post" action="<?php echo $nextlink; ?>">
                            <input type="hidden" id="prodtype" name="prodtype" value="<?php echo $prodtype; ?>a">
                            <input type="submit" id="submitdiscount" name="submit" value="ACTIVATE COUPON NOW!" class="goal5 clickable p-5 px-8 bg-red-600 text-white font-bold text-2xl">
                        </form>
                    <p class="font-light mb-3">Recommended For All New Customers</p>
                    
                </div><!-- end .discount-wrap -->
                
                <div class="skip-wrap">
                    
                    <form id="skipform" name="skipform" method="post" action="<?php echo $nextlink; ?>">
                        <input type="hidden" id="prodtype" name="prodtype" value="<?php echo $prodtype; ?>">
                        <input type="submit" id="submitskip" name="submit" value="Skip This - I do NOT want 10% OFF my order" class="text-2xl text-slate-600 mt-6 underline clickable">

                    </form>
                    <p>(Note, once you skip this one-time offer, you cannot request this discount again)</p>
                </div><!-- end .skip-wrap -->
            </div>
        </div>
    </section>

</body>

</html>