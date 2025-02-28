<?php
error_reporting(0);
//Page Specific Variables
$video_id = "7meKmRPVlkYdple_";
$drop_time = "2444";
$overlay = "//s3.amazonaws.com/flora-spring/animatedposter.gif";
$cookie_name = "returning_user";
$cookie_value = "yes";


$exitlink = 'sl-5gmale.php'.$querystring;

//PageType Override
$_SESSION['pageType'] = 'vsl';

?>
<head>
    <?php template("includes/header"); ?>
    <title>Free Video - Limited Time Only!</title>

    <!-- might be for modal, might not be needed -->
	  <script>
        fadeInDelay = 0;
        fadeInDiv = '#container-buy';
    </script>

    <style>
        body {
            background-color: #C90000;
            position: relative;
        }

        .banner {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: #000;
            min-height: 45px;
            border-top: 2px solid white;
            border-bottom: 2px solid white;
            color: white;
            font-size: 24px;
        }

        li a, span.link {
            color: #737373;
                cursor: pointer;
            text-decoration: underline;
            transition: 200ms ease-in-out;
            padding: 10px 18px;
        }

        li a:hover, span.link:hover {
            color: #013288;
        }

        .video-container {
            position: relative;
            border: 1px solid grey;
            aspect-ratio: 16/9;
            width: 100%;
        }

        .click-to-play {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 10;
            width: 100%;
            height: 100%;
            cursor: pointer;
            transition: all 200ms ease-in-out;
        }

        .click-to-play:hover {
            outline: 3px solid rgba(250,250,250,0.75);
            outline-offset: -3px;
        }

        a.img-link {

            justify-content: center;
            width: 100%;
        }

        a.img-link img {
            transition: all 200ms ease-in-out;
            max-width: 400px;
            min-width: 300px;
            padding: 1rem;
        }
        a.img-link img:hover {
            filter: brightness(1.1);
        }

        ul.links {
            display: flex;

            justify-content: center;
            flex-wrap: wrap;
            list-style: none;
            text-align: center;
            columns: 1;
            -webkit-columns: 1;
            -moz-columns: 1;
        }

        .left-of-button {
            display: none;
            width: 140px;
            height: 140px;
            align-self: center;
            margin-left: -140px;
        }

        @media screen and (min-width: 769px) {
            .left-of-button {
                display: flex;
            }
        }

        #guarantee {
            clear: right;
            float: right;
            width: 143px;
            height: 167px;
            background-image: url(/images/animated-button+test.png);
            background-position: 0 0;
            background-repeat: no-repeat;
            margin-top: 35px;
        }

        #container-buy-secure{z-index:100;position:fixed;bottom:0;left:0;width:122px;height:85px}
        #container-buy-secure ul{display:block;width:122px;height:85px;margin:0;padding:0;list-style-type:none}
        #container-buy-secure ul li{display:block;width:122px;height:85px;margin:0;padding:0;cursor:pointer}
        #container-buy-secure ul li ul{z-index:-1;display:none;position:absolute;width:230px;height:281px;top:-255px;left:91px}
        #container-buy-secure ul li ul li{width:230px;height:281px}
        #container-buy-secure ul li:hover ul{display:block}
     </style>
</head>

<body>

<?php if ($_SESSION["a"] == 1125) { ?>
<style>
    body {
        background: url('https://s3.amazonaws.com/5gm/5gsciencecomp.jpg') repeat!important;
        background-size: cover!important;
        background-position: top!important;
        padding-top: 40px;
    }
</style>
<?php } ?>

<?php if ($_SESSION["a"] == 40) { ?>
<style>
    body {
         background: #000;
    }
</style>
<?php } ?>
<div class="main_container">

<?php if ($_SESSION["a"] == 79) { ?>
    <div class="gabwrap">
        <!-- <img src="//s3.amazonaws.com/5gm/gmoorebanner.jpg" alt="banner"> -->
		<?php template("includes/timer.php"); ?>
    </div><!-- end .gabwrap -->
<?php } ?>

<div id="container-buy-secure">
    <ul>
        <li>
            <img src="/images/seal-min.png" width="122" height="85" id="buy-secure-seal" alt="seal" />
			<ul>
				<li>
					<img src="/images/popup.png" width="230" height="281" id="buy-secure-popup" alt="secure" />
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="container-md mx-auto mt-22" style="background-color: #C90000;">
    <?php video('includes/player', $video_id, $drop_time, $overlay);?>
</div>

<div class="container-md mx-auto mt-8 p-5 pb-5 bg-white">

    <div class="flex">
    <a id="container-buy" class="col-md-8 img-link mt-5 hidden" href="assessment" target="_blank" onclick="hideTimerPopup()">
        <img class="mx-auto" style="width: 100%;max-width: 400px;" src="/images/animated-button+test.png" alt="see if you qualify">
    </a>
    <img class="left-of-button" src="/images/90-day-icon.png" alt="90 day guarantee">
    </div>
    
    
    <div class="mt-5 p-4">
        <p class="text-center text-gray-500 text-xs">
            These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.
            <br>
            The information contained in this video is not intended as medical advice. Consult your physician before adding any dietary supplements to your diet.
        </p>
    </div>
    <div class="mt-5">
        <ul class="links">
            <li><a href="//supernaturalman.com/support" target="_blank">Support</a></li>
            <li><a href="/policy/privacy_policy" target="_blank">Privacy Policy</a></li>
            <li><a href="/step/terms.html" target="_blank">Terms and Conditions</a></li>
            <li><span id="afflink" style="display: inline-block;">
                    <a href="https://partners.pineapple.co/affiliate-signup/" target="_blank">Affiliate Signup</a></span>
</li>
            <li>
                <span id="click-ref" class="link">References</span>


            </li>
        </ul>
        <p class="mt-5" style="text-align: center; font-size: 12px; color: #737373;">
          &copy; <?php echo $company['name'] . ' ' . date("Y"); ?> All rights reserved.
      </p>
    </div>
</div>

    <?php
		$modal_id = 'exitModal';
		$modal_title = 'WAIT! BEFORE YOU GO...';
		$modal_body = "<h3>READ THE SHOCKING FREE REPORT INSTEAD OF WATCHING THIS VIDEO NOW...</h3>";
		$modal_footer = "<div class='stay-btn-cont flex justify-center w-full'>				    
		<a href='" . $exitlink . "'>
		<button id='stay-btn' class='focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-green-600 bg-green-500 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm'>CLICK HERE NOW</button>
		</a>
		</div>";
        modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer);
	?>

<script>


    // modal on mouseleave
    document.body.addEventListener('mouseleave', () => {
        const modalExit = document.getElementById('exitModal');
        console.log('modal?', modalExit);
        window.modalHandler('exitModal', true);
    })

    // modal on navigate away
    window.addEventListener('popstate', function(e) {
        window.modalHandler('exitModal', true);
    });
    

    function display(element, show) {
		if (show) {
			element.classList.remove('hide');
			element.classList.add('show');
		} else {
			element.classList.remove('show');
			element.classList.add('hide');
		}
	}
</script>






<!-- To fade in a form, enter the time in milliseconds and the id of the <div> to fade in -->
<!-- @sheena - any idea what this does? -->

<?php if (@$_COOKIE[$cookie_name] == "yes") { ?>
<script>
    fadeInDelay =0;
    fadeInDiv = '#container-buy, #top-btn';
    fadeOutDiv = '#main-hdl, #sub-hdl';
    sessionStorage.setItem("is_timer_complete", "no");
    popButton();
</script>


<?php } elseif ($_SESSION["a"] == 456) { ?>
<script>
    fadeInDelay = <?php echo ((int) $_GET["debug"]) ? "1000" : "10000"; ?>; //30sec
    fadeInDiv = '#container-buy, #top-btn';
    fadeOutDiv = '#main-hdl, #sub-hdl';
</script>

<?php } else { ?>
<script>
    //add cookie/session logic for button pop
    //doStart1();
    document.cookie = "<?php echo $cookie_name ?>=yes; max-age=" + 3600;
</script>
<?php } ?>


<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</body>
</html>