<?php if ($site['debug'] == true) {
    echo $debugbarRenderer->renderHead();
}?>

<link rel="shortcut icon" href="//<?php echo $_SERVER['HTTP_HOST']?>/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="180x180" href="//<?php echo $_SERVER['HTTP_HOST']?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="//<?php echo $_SERVER['HTTP_HOST']?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="//<?php echo $_SERVER['HTTP_HOST']?>/favicon-16x16.png">
<link rel="manifest" href="//<?php echo $_SERVER['HTTP_HOST']?>/site.webmanifest">
<link rel="mask-icon" href="//<?php echo $_SERVER['HTTP_HOST']?>/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#cccccc">
<meta name="theme-color" content="#ffffff">

<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- double check if needed -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge"><!-- double check if needed -->
<meta name="format-detection" content="telephone=no"><!-- double check if needed -->

<meta name="google-site-verification" content="<?php echo $site['googleSiteVerification']?>" />

<?php if ($site['debug'] !== true) { //Don't need to run this on local?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo $site['GTMContainer']?>');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $site['GTMContainer']?>"
        height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<?php } ?>

<!-- Javascript -->
<script src="//unpkg.com/alpinejs" defer></script>
<!-- <script src="//<?php echo $_SERVER['HTTP_HOST']?>/js/jquery.js"></script> -->
<!--<script src="//<?php echo $_SERVER['HTTP_HOST']?>/js/jquery-ui.min.js"></script>-->
<!--<script src="//<?php echo $_SERVER['HTTP_HOST']?>/js/fadeInOut-gm601.js"></script>-->
<script src="//<?php echo $_SERVER['HTTP_HOST']?>/js/pristine.min.js" defer></script>
<script src="/js/basic-modal.js"></script>
<!--<script src="//<?php echo $_SERVER['HTTP_HOST']?>/js/jquery.fancybox.pack.js"></script>-->
<!--<script src="//<?php echo $_SERVER['HTTP_HOST']?>/js/stop-pop.js"></script>-->

<!-- CSS -->
<script src="https://cdn.tailwindcss.com"></script>  <!-- Should not be needed for production -->
<link rel="stylesheet" href="/css/base.css" media="print" onload="this.media='all'">

<!-- Next 4 from order.php -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" media="print" onload="this.media='all'">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,600,700,800" rel="stylesheet" media="print" onload="this.media='all'">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" media="print" onload="this.media='all'">
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|Cardo:400,400italic,700' rel='stylesheet' type='text/css'  media="print" onload="this.media='all'"/>

<!--<link rel="stylesheet" href="/css/jquery.fancybox.css">-->

<!--<link href="//<?php echo $_SERVER['HTTP_HOST']?>/css/buy-safe.css" rel="stylesheet"> -->
<!-- <link href="//<?php echo $_SERVER['HTTP_HOST']?>/css/main.css" rel="stylesheet" media="print" onload="this.media='all'"> -->
<!-- <link href="//<?php echo $_SERVER['HTTP_HOST']?>/css/upsell.css" rel="stylesheet" media="print" onload="this.media='all'" > -->

<!-- PIXELS -->
<?php
// Different environments have a trailing slash in the apache config, this fixes it!
require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/\\' ) . '../../include/customPixels.php');
?>

<style>
h1 {
    font-size: 30px;
}
</style>






