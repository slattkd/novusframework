<?php
//Page Specific Variables
$vidcode = "7meKmRPVlkYdple_";
$droptime = "2444";
$cookie_name = "returning_user";
$cookie_value = "yes";

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
     </style>
</head>

<body>

<?php if ($_SESSION["a"] == 1125) { ?>
<style>
    body {
        background: url('https://s3.amazonaws.com/5gm/5gsciencecomp.jpg') repeat!important;
        background-size: cover!important;
        background-position: top!important;
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
            <img src="https://s3.amazonaws.com/5gm/seal-min.png" width="122" height="85" id="buy-secure-seal" alt="seal" />
            <ul>
                <li>
                    <img src="https://s3.amazonaws.com/5gm/popup.png" width="230" height="281" id="buy-secure-popup" alt="secure" />
                </li>
            </ul>
        </li>
    </ul>
</div>

<div class="container-md mx-auto" style="background-color: #C90000;">
    <?php video('includes/player', $vidcode, $droptime, "//s3.amazonaws.com/flora-spring/animatedposter.gif");?>
</div>

<div class="container mx-auto mt-8 p-5 pb-5 bg-white">
    <a id="container-buy" class="img-link mt-5 hidden" href="assessment.php" target="_blank" onclick="hideTimerPopup()">
        <img class="mx-auto" style="max-width: 350px;" src="/images/animated-button+test.png" alt="">
    </a>
    <div class="mt-5 p-4">
        <p class="text-center text-gray-500 text-xs">
            These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease.
            <br>
            The information contained in this video is not intended as medical advice. Consult your physician before adding any dietary supplements to your diet.
        </p>
    </div>
    <div class="mt-5">
        <ul class="links">
            <li><a href="//supernaturalman.com/support.php" target="_blank">Support</a></li>
            <li><a href="/policy/privacy_policy.php" target="_blank">Privacy Policy</a></li>
            <li><a href="/step/terms.html" target="_blank">Terms and Conditions</a></li>
            <li><span id="afflink" style="display: inline-block;">
                    <a href="https://partners.pineapple.co/affiliate-signup/" target="_blank">Affiliate Signup</a></span>
            </li>
            <li>
                <span id="click-ref" class="link">References</span>


            </li>
        </ul>
        <p class="mt-5" style="text-align: center; font-size: 12px; color: #737373;">
          &copy; <?php echo $company['name'] ?> All rights reserved.
      </p>
    </div>
</div>

<script>
//possible exit intent replacement
/*
window.history.pushState({page: 1}, "", "");

window.onpopstate = function(event) {
    if(event){
        window.location.href = '<?php echo $exitlink; ?>';
        // Code to handle back button or prevent from navigation
    }
}

// This only work once there has ben an interaction on the page - a background, click, video play, etc...
window.onbeforeunload = function() {
    //ajax load exit page in module (it will show behind the exit prompt dialog)
    //Placing the actin first will continue loading after the dialog has been addressed.
    //document.getElementById("container-buy").innerHTML='<object type="text/html" data="privacy.php" ></object>';
    return "Your work will be lost.";
};
*/
//end possible exit intent replacement
</script>

<script type="text/javascript">
    $("#myVid").on("contextmenu",function(e){
        return false;
    });
</script>


<script>
$( document ).ready(function() {
    //remove timer popup
    window.hideTimerPopup = function() {
        $('#runOutModal').remove();
    }

    window.closeTimerPopup = function() {
        $('#runOutModal').modal('hide');
        $("body").removeClass("modal-open");
    }
});
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



<!-- Briteverify, verifies that email is valid/exists, include script & enter id of the email text box -->
<script>
    emailInput = "#inf_field_Email";
</script>
<!-- Buy Safe Script -->

<script>
<?php
if (isset($_SESSION["alink"])) {
    if ($_SESSION["alink"] == 'off') {
        echo(`$("#afflink").css('display','none')`);
    } else {
        echo(`$("#afflink").css('display','inline-block')`);
    }
}
?>
</script>



<?php
if ($_SESSION["a"] == 496) { ?>
<script>
  $("#disclaimer").css('display','block');
</script>
<?php } else { ?>
<script>
  $("#disclaimer").css('display','none');
</script>
<?php }

?>

<!--
<script type='text/javascript'>
    $(document).ready(function(){
        setInterval(function(){
            $.get( "/session_keep.php", function( data ) {});
        }, (1000 * 60 * 5)) // 1 second * 60 * 5 = 5 minutes

    });
</script>
-->




<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</body>
</html>