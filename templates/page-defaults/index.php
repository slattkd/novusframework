<html>
    <head>
        <?php template('header'); ?>
    </head>
    <body class="bg-blue"> 
        <?php template('navigation'); ?>
        <?php template('body'); ?>
        <?php template('footer'); ?>
        <?php if ($site['debug'] == true) {template('debug', 'debug'); } ?>
    </body>
</html>
