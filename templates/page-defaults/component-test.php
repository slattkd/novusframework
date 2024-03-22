<?php
$_SESSION['pageType'] = 'wsl';
$current_step = 1;

$video_url = 'https://customer-fu1clsqwpnozbg2f.cloudflarestream.com/7a51c265a9816554550b5bff797ebf40/manifest/video.m3u8';
$video_id = "7a51c265a9816554550b5bff797ebf40";
$drop_time = "2459";
$square = false;
$controls = true;
$overlay = "//s3.amazonaws.com/flora-spring/animatedposter.gif";
?>

<head>
    <?php template("includes/header"); ?>
    <title>Test Page</title>

    <!-- required for review slider -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">


    <style>
        /* video player aspect ratio */
    <?php if($square): ?>
        #video-wrapper {
            aspect-ratio: 1/1;
        }
    <?php endif; ?>
    /* video player controls hide/show */
    <?php if($controls): ?>
        #video-element.vjs-has-started.vjs-user-inactive.vjs-playing .vjs-control-bar {
            visibility: visible;
            opacity: 1;
            transition: visibility 1s, opacity 1s;
            user-select:auto;
        }
    <?php else: ?>
        #video-element.video-js.vjs-controls-enabled .vjs-control-bar {
            visibility: hidden;
            opacity: o;
            transition: visibility 1s, opacity 1s;
            user-select:auto;
        }
    <?php endif; ?>

    /* hide big play button */
    #video-element.video-js .vjs-big-play-button {
        opacity: 0;
        visibility: hidden;
        display: none;
        pointer-events: none !important;
    }
    /* #video-element.vjs-has-started.vjs-playing {
        pointer-events: none !important;
    } */

    #video-wrapper.flex.w-full {
        max-width: 768px;
        max-height: 90vh;
    }

    /* splider css */
    #slider-testimonials .splide__list {
      height: auto;
    }
    #slider-testimonials .splide__arrow {
      top: unset;
      bottom: -4.5rem;
      translate: none;
    }

    #slider-testimonials .splide__arrow--prev {
      left: 25%
    }
    #slider-testimonials .splide__arrow--next {
      right: 25%;
    }

    #slider-testimonials .splide__pagination {
      bottom: -3rem;
    }
    </style>
</head>
<body>
<div class="container mx-auto" style="padding: 3rem 0">
    <div class="flex w-full">
    <?php rpheader("includes/rpHeader", true, true, 'between' ); ?>
    </div>

    <div class="flex w-full mt-11">
    <?php step("includes/step_bar", $current_step ); ?>
    </div>

    <div class="flex w-full mt-11">
    <?php step("includes/step_bar2", $current_step ); ?>
    </div>

    <div class="flex w-full mt-ll">
        <div class="w-full md:w-1/2">
            <div class="flex relative">
                <?php address("includes/addressSimple", 'billing', 1);?>
            </div>
        </div>
        <div class="flex justify-center w-full md:w-1/2">
            <div class="flex flex-col justify-center">
            <?php template("includes/spinner"); ?>
                <!-- exp date and month -->
                <section>
                    <h2 class="text-lg font-bold mb-1">Payment</h2>
                    <p class="mb-5">All purchases are secured and encrypted.</p>
                    <div class="flex mb-3">
                    <?php creditCardInput("includes/creditCardInput", 'credit-card');?>
                    </div>
                    <div class="flex w-full -mt-3">
                    <div class="w-1/3 mr-3 mt-[20px]">
                        <select id="cc-exp-month" class="w-full p-2 rounded border border-gray-300" style="padding:0.6rem" placeholder="Exp. Month">
                        <!-- Options for Exp. Month -->
                        <optgroup id="cc-exp-month-options" label="Exp. Month">
                        <?php 
                            for ($x = 1; $x <= 12; $x++) {
                            $num = sprintf("%02d", $x);
                            echo '<option value="' . $num . '">' . $num . '</option>';
                            }
                        ?>
                        </optgroup>
                        </select>
                    </div>
                    <div class="w-1/3 mr-3 mt-[20px]">
                        <select id="cc-exp-year" class="w-full p-2 rounded border border-gray-300" style="padding:0.6rem" placeholder="Exp. Day">
                        <!-- Options for Exp. Day -->
                        <option class="text-gray-300" value="" disabled>Exp. Year</option>
                        <?php 
                            $this_year = date('Y');
                            for ($y = $this_year; $y <= $this_year + 10; $y++) {
                            echo '<option class="text-gray-300" value="' . $y . '">' . $y . '</option>';
                            }
                        ?>
                        </select>
                    </div>
                    <div class="input w-1/3">
                        <div class="w-full z-10 invisible">
                        <label for="ccv" class="text-sm text-gray-600 hidden md:block rounded">CCV#</label>
                        </div>
                        <input id="ccv" name="ccv" class="w-full p-2 rounded border border-gray-300" placeholder="CCV#"
                        data-pristine-minlength-message="Too short"
                        minlength="3" maxlength="3" required></input>
                    </div>
                    </div>
                </section>
                <!-- end exp date and month -->
            </div>
        </div>
    </div>

    <div class="flex w-full justify-center mt-11">
    <?php videoJS('includes/videojs-player', $video_id, $video_url, $drop_time, $overlay, $controls, $square);?>
    </div>

    <!-- reviews splide slider -->
    <?php if (isset($reviews)): ?>
      <section>
        <div class="slider-container mt-11">
          <div id="slider-testimonials" style="visibility: visible;" class="splide max-w-full md:max-w-screen-sm xl:max-w-screen-md mx-auto mb-16" role="group">
          <div class="splide__track">
            <ul class="splide__list">
              <?php foreach($reviews['reviews'] as $obj): ?>
              <li class="splide__slide">
                <div class=" flex flex-col items-center">
                  
                  <div class="flex inline-flex items-center stars">
                    <img class="scale-75 mb-2 title" src="//<?= $_SERVER["HTTP_HOST"];?>/images/order-boost/5_stars.png"
                      alt="5 stars">
                  </div>
                  <div class="inline-flex text-sm text-fs-blue uppercase">
                    <div class="icons badge-check mr-2"></div> Verified buyer | <?php echo date('F d, Y'); ?>
                  </div>
                  <h3 class="title text-2xl text-fs-blue font-semibold my-6 text-center uppercase">
                    <?= $obj['title']; ?>
                  </h3>
                  <p class="">
                  <?= $obj['copy']; ?>
                  </p>
                  <div class="font-semibold title text-fs-blue mt-4"><?= $obj['name']; ?>, <?= $obj['location']; ?></div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        </div>
      </section>
    <?php endif; ?>
    <!-- end reviews splide slider -->

    
</div>

    
    <?php template("includes/rpFooter"); ?>
    
    <!-- required for review slider -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        // slider
        var splide = new Splide('.splide');
        new Splide('#slider-testimonials').mount();

        // hide show input labels
        const placeholderElements = document.querySelectorAll('.input input');
        placeholderElements.forEach(pl => {
            pl.addEventListener('focus', ()=> {
                pl.previousElementSibling.classList.add('fade-in-element');
                pl.previousElementSibling.classList.remove('invisible');
            })
            pl.addEventListener('blur', ()=> {
                if (!pl.value) {
                pl.previousElementSibling.classList.add('invisible');
                pl.previousElementSibling.classList.remove('fade-in-element');
                }
            })
        })

        // controls for remaining CC months
        const ccYear = document.getElementById('cc-exp-year');
        const ccMonth = document.getElementById('cc-exp-month');
        const ccMonthOptionsGroup = document.getElementById('cc-exp-month-options');
        const months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        var selectedMonthValue = ccMonthOptionsGroup.children[0].value;
        var currentYear = new Date().getFullYear().toString();
        ccYear.addEventListener('change', ()=> {
            if (currentYear.includes(ccYear.value)) {
            remainingMonths();
            } else {
            updateMonthOptions(months);
            }
        })
        ccYear.selectedIndex = 1;
        remainingMonths();

        ccMonth.addEventListener('change', ()=> {
            selectedMonthValue = ccMonth.value;
        })

        function remainingMonths() {
            let d = new Date();
            let remaining = months.slice(d.getMonth());
            updateMonthOptions(remaining);
        }

        function updateMonthOptions(monthArr) {
            let tempCC = selectedMonthValue;
            ccMonthOptionsGroup.innerHTML = '';
            monthArr.forEach((month) => {
            var opt = document.createElement('option');
            opt.value = month;
            opt.innerHTML = month;
            ccMonthOptionsGroup.appendChild(opt);
            })
            
            let optArr = Array.from(ccMonthOptionsGroup.children);

            optArr.forEach((op) => {
            if (op.value == tempCC) {
                op.selected = true;
            }
            })
        }
    </script>
    
    <!-- include for multiple gmaps location components -->
    <script>
        if(typeof window.google !== 'object' && typeof window.google?.maps !== 'object') {
            const newScript = document.createElement("script");
            newScript.setAttribute('defer','');
            document.head.appendChild(newScript);
            newScript.src = 'https://maps.googleapis.com/maps/api/js?key=' + '<?= $site['gmapsApi']; ?>' + '&libraries=places&callback=initAutoComplete';
        }
    </script>

</body>