<?php
	// $headers = query show header/footer
?>

<!DOCTYPE html>
<html>



<head>
    <?php template('includes/header'); ?>
    <title><?php echo $company['name'] ?> Privacy Policy</title>
</head>

<body>


	<div class="container container-vsl mx-auto py-20 px-5 md:px-8" style="min-height: 100vh">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/page-defaults/returns-body.php'); ?>
	</div>

	<?php template('includes/footer'); ?>
	<?php if ($site['debug'] == true) {
			template('debug', 'debug');
	} ?>

</body>
</html>