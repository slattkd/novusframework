<!DOCTYPE html>
<html>
<head>
		<?php template('includes/header'); ?>
		<?php template('includes/basicHeader'); ?>
    <title><?php echo $company['name'] ?> Privacy Policy</title>
</head>

<body>

	<div class="container container-vsl mx-auto py-20 px-5 md:px-8" style="min-height: 100vh">
	<?php template("privacy-body"); ?>
	</div>

	<?php template('includes/footer'); ?>
	<?php if ($site['debug'] == true) {
			template('debug', 'debug');
	} ?>

</body>
