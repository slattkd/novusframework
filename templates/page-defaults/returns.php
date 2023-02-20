

<!DOCTYPE html>
<html>



<head>
  <?php template('includes/header'); ?>	
  <title><?php echo $company['name'] ?> | Privacy Policy</title>
</head>

<body>
<?php template('includes/basicHeader'); ?>

  <div class="container container-vsl mx-auto py-20 px-5 md:px-8" style="min-height: 100vh">
    <div class="content px-2 text-left">

      <h1 class="">Return Policy</h1>

      <h2>Supplement Products</h2>
      <p>All of our products are supplements with shipping.<br>
        We issue refunds for supplement products within 90 days of the original purchase of the product.<br>
        The credit card or form of payment will be directly refunded once requested.<br>
        We recommend contacting us for assistance if you experience any issues.<br>
      </p>

      <h2>Contact Us</h2>
      <p>If you have any questions about our Return Policy, please contact us:
        – By visiting this page on our website: <a href="//<?= $_SERVER['HTTP_HOST'];?>/support"
          target="_blank">Support</a>
      </p>


    </div>
  </div>

  <?php template('includes/footer'); ?>

  <?php if ($site['debug'] == true) {
			template('debug', null, null, 'debug');
	} ?>

</body>
</html>