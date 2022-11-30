<?php
error_reporting(0);
//Page Specific Variables
$vidcode = "dksEdGiUwKrKHKPq";
$droptime = "2444";
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
            cursor: pointer;
            transition: 200ms ease-in-out;
            padding: 0px 6px;
        }

        li a:hover, span.link:hover {
            color: #333;
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
            background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/animated-button+test.png');
            background-position: 0 0;
            background-repeat: no-repeat;
            margin-top: 35px;
        }

        .button-seal {
            width: 120px;
            height: 120px;
            transform: translateX(-2vw);
        }

        @media screen and (min-width: 769px) {
            .button-seal {
                margin: 0;
                margin-top: 1rem;
                margin-left: -120px;
            }
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
        background: url('//<?= $_SERVER["HTTP_HOST"];?>/images/5gsciencecomp.jpg') repeat!important;
        background-size: cover!important;
        background-position: top!important;
        padding-top: 40px;
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

<div id="container-buy-secure" class="hidden md:block">
    <ul>
        <li>
            <img src="//<?= $_SERVER['HTTP_HOST'];?>/images/seal-min.png" width="122" height="85" id="buy-secure-seal" alt="seal" />
			<ul>
				<li>
					<img src="//<?= $_SERVER['HTTP_HOST'];?>/images/popup.png" width="230" height="281" id="buy-secure-popup" alt="secure" />
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="container-md mx-auto mt-22" style="background-color: #C90000;">
    <?php video('includes/player-noembed', $vidcode, $droptime, "https://s3.amazonaws.com/flora-spring/thumb6.jpg");?>
</div>

<div class="container-md mx-auto md:mt-8 md:p-5 pb-5 bg-red md:bg-white ">

    <div class="flex flex-col md:flex-row items-center">
        <a id="container-buy" class="col-md-8 img-link hidden" href="assessment" target="_blank" onclick="hideTimerPopup()">
            <img class="mx-auto hidden md:block" style="width: 100%;max-width: calc(450px + 10vw);" src="//<?= $_SERVER['HTTP_HOST'];?>/images/animated-button+test.png" alt="see if you qualify">
            <img class="mx-auto block md:hidden" style="width: 100%;max-width: calc(450px + 10vw);" src="//<?= $_SERVER['HTTP_HOST'];?>/images/tanimated1.gif" alt="see if you qualify">
        </a>
        <img id="90-day-seal" class="d-none md-d-block button-seal hidden " src="//<?= $_SERVER['HTTP_HOST'];?>/images/90-day-icon.png" alt="90 day guarantee" style="width: 120px;height: 120px;">
    </div>


    <div class="mt-5 p-4">
        <p class="text-center text-black-500 md:text-gray-500 text-xs">
            These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.
            <br>
            The information contained in this video is not intended as medical advice. Consult your physician before adding any dietary supplements to your diet.
        </p>
    </div>
    <div class="mt-5">
        <ul class="links text-black md:text-black-400 underline hover:no-underline
           text-black-600 hover:text-black-800
           visited:text-black-500 text-sm uppercase">
            <li><a href="//<?= $_SERVER['HTTP_HOST'];?>/support" target="_blank">Support</a></li>
            <li><a href="//<?= $_SERVER['HTTP_HOST'];?>/privacy" target="_blank">Privacy Policy</a></li>
            <li><a href="//<?= $_SERVER['HTTP_HOST'];?>/terms" target="_blank">Terms and Conditions</a></li>
            <li><a href="https://partners.pineapple.co/affiliate-signup/" target="_blank">Affiliate Signup</a></li>
            <li class="md:hidden"><a href="//<?= $_SERVER['HTTP_HOST'];?>/references" id="reftrigger" onclick="showRef(event);">Click Here to Read References</a></li>
        </ul>
        <p class="mt-5 text-black md:text-black-400 text-xs text-center" >
          &copy; <?php echo $company['name'] . ' ' . date("Y"); ?> All rights reserved.
      </p>
    </div>
    <div id="references" class="mt-5 bg-white p-10 text-xs break-all hidden">
        <ul>
            <li class="mt-2">https://www.researchgate.net/publication/26337074_Aged_garlic_extract_supplemented_with_B_vitamins_folic_acid_and_L-arginine_retards_the_progression_of_subclinical_atherosclerosis_A_randomized_clinical_trial</li>
            <li class="mt-2">http://jn.nutrition.org/content/early/2016/01/13/jn.114.202424.short?rss=1&related-urls=yes&legid=nutrition;jn.114.202424v1</li>
            <li class="mt-2">https://www.ncbi.nlm.nih.gov/pubmed/12394711</li>
            <li class="mt-2">https://www.ncbi.nlm.nih.gov/pubmed/16855773</li>
            <li class="mt-2">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3861174/</li>
            <li class="mt-2">https://www.ncbi.nlm.nih.gov/pubmed/9611693</li>
            <li class="mt-2">http://www.ncbi.nlm.nih.gov/pubmed/15613983</li>
            <li class="mt-2">http://press.endocrine.org/doi/full/10.1210/endo.141.3.7368</li>
            <li class="mt-2">https://www.ncbi.nlm.nih.gov/pubmed/15947695</li>
            <li class="mt-2">https://www.ncbi.nlm.nih.gov/pubmed/11336572</li>
            <li class="mt-2">http://well.blogs.nytimes.com/2015/11/17/federal-officials-target-dietary-supplement-makers/</li>
            <li class="mt-2">https://www.washingtonpost.com/news/morning-mix/wp/2015/02/03/gnc-target-wal-mart-walgreens-accused-of-selling-fake-herbals</li>
            <li class="mt-2">http://cms.herbalgram.org/herbalgram/issue56/article2333.html?ts=1483025280&signature=54f025e7c9545b5692bb1c4eb8aedfac</li>
            <li class="mt-2">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3861174/</li>
            <li class="mt-2">Saratikov AS, Krasnov EA. Chapter VIII: Clinical studies of Rhodiola. In: Saratikov AS, Krasnov EA, editors. Rhodiola rosea is a valuable medicinal plant (Golden Root). Tomsk, Russia: Tomsk State University Press; 1987. p. 216-27.</li>
        </ul>
    </div>
</div>

    <?php
		$modal_id = 'exitModal';
		$modal_title = 'WAIT! BEFORE YOU GO...';
		$modal_body = "<h3>READ THE SHOCKING FREE REPORT INSTEAD OF WATCHING THIS VIDEO NOW...</h3>";
		$modal_footer = "<div class='stay-btn-cont flex justify-center w-full'>
		<a href='" . $exitlink . "'>
		<button id='stay-btn' class='focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-green-600 bg-green-600 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm'>CLICK HERE NOW</button>
		</a>
		</div>";
        modal("includes/basicModal", $modal_id, $modal_title, $modal_body, $modal_footer);
	?>

<script>


    // modal on mouseleave
    document.body.addEventListener('mouseleave', () => {
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


  function showRef(event) {
    event.preventDefault();
    references.classList.remove('hidden');
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
    const seal = document.getElementById('90-day-seal');
    seal.classList.remove('hidden');
</script>


<?php } elseif ($_SESSION["a"] == 456) { ?>
<script>
    fadeInDelay = <?php echo ((int) $_GET["debug"]) ? "1000" : "10000"; ?>; //30sec
    fadeInDiv = '#container-buy, #90-day-seal, #top-btn';
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