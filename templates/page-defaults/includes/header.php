<?php if ($site['debug'] == true) {
    echo $debugbarRenderer->renderHead();
}?>

<?php
//temporary log rocket tracking
if ($_SERVER['HTTP_HOST'] == $site['logRocketDomain']) {
    ?>
    <!--
    <script src="https://cdn.lr-in-prod.com/LogRocket.min.js" crossorigin="anonymous"></script>
    <script>window.LogRocket && window.LogRocket.init('<?php echo $site['logRocketTracking'] ?>');</script>
    -->
<?php } ?>

<?php if ($_SESSION['slug'] == 'checkout/order' || $_SESSION['slug'] == 'checkout/onepage') { ?>
<link rel="shortcut icon" href="//<?php echo $_SERVER['HTTP_HOST'];?>/norton-favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="//<?php echo $_SERVER['HTTP_HOST'];?>/norton-apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="//<?php echo $_SERVER['HTTP_HOST'];?>/norton-favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="//<?php echo $_SERVER['HTTP_HOST'];?>/norton-favicon-16x16.png">
<link rel="manifest" href="//<?php echo $_SERVER['HTTP_HOST'];?>/norton-site.webmanifest">
<link rel="mask-icon" href="//<?php echo $_SERVER['HTTP_HOST'];?>/norton-safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="theme-color" content="#ffffff">
<?php } else { ?>
<link rel="shortcut icon" href="//<?php echo $_SERVER['HTTP_HOST'];?>/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="//<?php echo $_SERVER['HTTP_HOST'];?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="//<?php echo $_SERVER['HTTP_HOST'];?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="//<?php echo $_SERVER['HTTP_HOST'];?>/favicon-16x16.png">
<link rel="manifest" href="//<?php echo $_SERVER['HTTP_HOST'];?>/site.webmanifest">
<link rel="mask-icon" href="//<?php echo $_SERVER['HTTP_HOST'];?>/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#cccccc">
<meta name="theme-color" content="#ffffff">
<?php } ?>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no">
<meta name="google-site-verification" content="<?php echo $site['googleSiteVerification'];?>" />

<!-- CSS with version control -->
<!-- <script src="https://cdn.tailwindcss.com"></script>  <!-- Should not be needed for production -->
<link   href='//<?php echo $_SERVER['HTTP_HOST'];?>/css/main.css?ver=<?php echo get_that_filetime($_SERVER['DOCUMENT_ROOT'] . '/css/main.css'); ?>'
        rel='stylesheet'
        type='text/css'
        media='all' />
<link   href='//<?php echo $_SERVER['HTTP_HOST'];?>/css/legal-copy.css?ver=<?php echo get_that_filetime($_SERVER['DOCUMENT_ROOT'] . '/css/legal-copy.css'); ?>'
        rel='stylesheet'
        type='text/css'
        media='all' />
<link   href='//<?php echo $_SERVER['HTTP_HOST'];?>/css/base.css?ver=<?php echo get_that_filetime($_SERVER['DOCUMENT_ROOT'] . '/css/base.css'); ?>'
        rel='stylesheet'
        type='text/css'
        media='all' />

<?php if ($site['debug'] !== true) { //Don't need to run this on local?>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo $site['GTMContainer'];?>');</script>

<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $site['GTMContainer'];?>"
        height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<?php } ?>

<script src="//unpkg.com/alpinejs@3.10.5/dist/cdn.min.js" defer></script>
<script src="//<?php echo $_SERVER['HTTP_HOST'];?>/js/pristine.min.js" defer></script>
<script src="//<?php echo $_SERVER['HTTP_HOST'];?>/js/basic-modal.js" defer></script>
<script src="//<?php echo $_SERVER['HTTP_HOST'];?>/js/countdown.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" media="print" onload="this.media='all'">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,700i,800" rel="stylesheet" media="print" onload="this.media='all'">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" media="print" onload="this.media='all'">

<!-- PIXELS -->
<?php
// Different environments have a trailing slash in the apache config, this fixes it!
require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/\\' ) . '../../include/customPixels.php');
?>
