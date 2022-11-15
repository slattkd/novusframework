<?php
$product = reset($products['products']);
?>
<html>
    <head>
        <?php template('includes/header'); ?>
        <title>Harvard-Trained Doctor Discovers 10-Second Egyptian Ritual</title>
    </head>
    <body class="bg-blue"> 
        <?php template('includes/navigation'); ?>
        <section class="max-w-5xl mx-auto bg-white shadow-md mt-6">
            <h1>UP2</h1>
            <a href="/up3">Next Page</a>
            <a href="/up1">Previous Page</a>

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 p-4">
                    <h2>A Special Deal For New Customers Only!</h2>
                    <?php echo $product['product_name'];?>
                    <img src="/images/releaseswitchadvanced-6bottle.png" alt="Release Switch Advanced - 6 Bottles">
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <h2>Stock Up On ​Release Switch Advanced Now...</h2>

                    <p class="leading-relaxed text-base">For Just $19.00 Per Bottle

                    This is the absolute lowest price you’ll ever
                    see for Release Switch Advanced…

                    It protects you from future price increases, as
                    well as out of stocks…

                    Savings: $785.94

                    Keep reading for all of the details. 

                    </p>
                </div>
            </div>
        </section>
        
        <?php template('includes/footer'); ?>
        <?php if ($site['debug'] == true) {
        // Show Debug bar only on whitelisted domains.
        template('debug', null, null, 'debug');
        } ?>
    </body>
</html>

