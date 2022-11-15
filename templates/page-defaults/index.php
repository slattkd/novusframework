<?php
date_default_timezone_set( "America/New_York" );
// error_reporting(0);
//require_once($_SERVER['DOCUMENT_ROOT'].'/shared-gm/site.php');
	// include('config.php');
	// include('inc/class.cart.php');

$_SESSION['o'] = $_GET['o'];
$_SESSION['r'] = $_GET['r'];
$_SESSION['affid'] = $_GET['a'];
$_SESSION['blog'] = $_GET['blog'];
$_SESSION['post'] = $_GET['post'];
$_SESSION['s'] = $_GET['s'];
$_SESSION['s1'] = $_GET['s1'];
$_SESSION['s2'] = $_GET['s2'];
$_SESSION['s3'] = $_GET['s3'];
$_SESSION['s4'] = $_GET['s4'];
$_SESSION['utm_source'] = $_GET['utm_source'];
$_SESSION['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utm_campaign'] = $_GET['utm_campaign'];
$_SESSION['utm_term'] = $_GET['utm_term'];
$_SESSION['utm_content'] = $_GET['utm_content'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php template("includes/header"); ?>
  <title><?php echo $company->name; ?></title>


  <style>
    .bg-image {
      background-color: #cccccc;
      background-image: url("https://5gmale.com/images/home.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      min-height: 500px;
    }

    .circle-image {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      overflow: hidden;
    }
  </style>
</head>
<body>
<?php template("includes/basicHeader"); ?>

<div class="">
	<div class="flex justify-center md:justify-end bg-image">
		<div class="flex flex-col justify-center md:w-1/2 text-center p-3 md:p-0 md:text-left">
			<div class="bg-gray-600 font-bold text-3xl text-white p-3 px-4">BECOME SUPERNATURAL</div>
			<div class="font-semibold text-xl text-white py-5">SUPERIOR NATURAL ENERGY FOR TODAY’S MAN</div>
			<div>
				<a href="/sl-5gmale.php">
				<button class="w-auto bg-black border border-transparent py-2 px-3 text-base text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 hover:bg-gray-800">
              SHOP NOW</button>
					</a>
			</div>

		</div>
	</div>
</div>
<div class="container container-md mx-auto">
	<section aria-labelledby="policy-heading" class="my-12 lg:my-20">
        <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8">
          <div class="flex flex-col">
            <div class="flex justify-center">
              <img class="circle-image" src="https://5gmale.com/images/icons/about-icon.png" alt="">
            </div>

            <h3 class="mt-3 text-center text-lg font-bold text-gray-900">ABOUT</h3>
            <p class="mt-3 text-base text-gray-300 text-center">
              Learn about Supernatural Man
            </p>
				 <a href="/about.php" class="flex justify-center underline text-gray-500 text-center clickable pt-4 mt-auto">LEARN MORE</a>
          </div>

          <div class="flex flex-col">
            <div class="flex justify-center">
              <img class="circle-image" src="https://5gmale.com/images/icons/help-icon.png" alt="">
            </div>

            <h3 class="mt-3 text-center text-lg font-bold text-gray-900">HOW WE HELP</h3>
            <p class="mt-3 text-base text-gray-300 text-center">
              We have helped thousands of men with these issues.
            </p>
				 <a href="/about.php" class="flex justify-center underline text-gray-500 text-center clickable pt-4 mt-auto">LEARN MORE</a>
          </div>

			  <div class="flex flex-col">
            <div class="flex justify-center">
              <img class="circle-image" src="https://5gmale.com/images/icons/product-icon.png" alt="">
            </div>

            <h3 class="mt-3 text-center text-lg font-bold text-gray-900">PRODUCTS</h3>
            <p class="mt-3 text-base text-gray-300 text-center">
              We have a variety of products that can help your needs.
            </p>
				 <a href="/sl-5gmale.php" class="flex justify-center underline text-gray-500 text-center clickable pt-4 mt-auto">LEARN MORE</a>
          </div>

          <div class="flex flex-col">
            <div class="flex justify-center">
              <img class="circle-image" src="https://5gmale.com/images/icons/support-icon.png" alt="">
            </div>

            <h3 class="mt-3 text-center text-lg font-bold text-gray-900">SUPPORT</h3>
            <p class="mt-3 text-base text-gray-300 text-center">
              We’re here to Help.
            </p>
				 <a href="/support.php" class="flex justify-center underline text-gray-500 text-center clickable pt-4 mt-auto">LEARN MORE</a>
          </div>
        </div>
      </section>
		<section>
			<div class="flex justify-center my-12 lg:my-20">
				<div class="flex flex-col">
					<h3 class="text-3xl font-semibold text-center">Here is Out Top Product</h3>
					<img class="mt-6 mx-auto" style="max-width: 500px" src="https://5gmale.com/images/products/5g.png" alt="5g male product bottle">
					<p class="text-center text-xl mb-6">5G MALE</p>
					<div class="flex justify-center w-2/3 md:w-1/2 mx-auto" style="max-width: 80ch">
						<p>These statements have not been evaluated by the Food and Drug Administration. These products are not intended to treat, cure or prevent any disease. Results may vary from person to person.</p>
					</div>

				</div>
			</div>

		</section>
</div>

<?php template("includes/footer"); ?>
</body>
</html>