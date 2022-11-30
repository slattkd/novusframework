<html>
    <head>
        <?php template('includes/header'); ?>
    </head>
    <body class="bg-blue"> 
        <?php template('includes/navigation'); ?>
        <?php template('includes/body'); ?>
        <?php template('includes/footer'); ?>
        <?php if ($site['debug'] == true) {template('debug', 'debug'); } ?>
    </body>
</html>

