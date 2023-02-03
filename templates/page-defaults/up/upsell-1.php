<?php
  $nextlink = '/thank-you';
  $_SESSION['pageType'] = 'wsl';

  $product1 = $products['products']['1147'];
  $product2 = $products['products']['1148'];

?>
<!DOCTYPE html>
<html>

<head>
  <?php template('includes/header'); ?>
  <title>Boost Your Memory</title>
  <style>
  .wsl p,
  h1,
  h2 {
    margin-bottom: 20px;
  }

  .wsl h1,
  .wsl h2 {
    font-weight: 600;
    hyphens: none;
  }

  .wsl h1 {
    line-height: 35px;
    line-height: 1.3
  }

  .wsl li {
    list-style: none;
    padding: 10px 30px;
    background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/check-green.png');
    background-repeat: no-repeat;
    background-position: left 10px;
    background-size: 20px;
  }

  #progress-bar {
    width: 0;
  }

  #progress-bar.grow {
    transition: width 1s ease-in-out;
    animation: grow 1s ease-in;
  }
  @keyframes grow {
    0% {
      width: 0;
    }
    100% {
      width: 100%;
    }
  }

  .sales-tax {
    font-size: 12px;
    color: #ddd;
    text-align:center;
  }

  .icon-list p {
    padding-left: 3.25em;
    background-size: 2.5em 2.5em;
    background-position: left 1px;
    background-repeat: no-repeat;
  }

  ul.num-list li {
    list-style: auto;
    background-image: unset;
    padding:5px 0
  }

  /* progress bar */
  #progress_wrapper {
  position: relative;
  overflow: auto;
  cursor: default;
  font-family: "Lato",sans-serif;
}

.progress_step {
  float: left;
  width: 33.33%;
  position: relative;
}

.progress_1 {
  text-align: left;
}

.progress_2 {
  text-align: center;
  position: relative;
  z-index: 5;
}

.progress_2 .progress_number {
  -webkit-filter: drop-shadow(0 3px 4px rgba(95,197,134,0.075)) drop-shadow(0 3px 4px rgba(95,197,134,0.15)) drop-shadow(0 2px 3px rgba(95,197,134,0.2));
          filter: drop-shadow(0 3px 4px rgba(95,197,134,0.075)) drop-shadow(0 3px 4px rgba(95,197,134,0.15)) drop-shadow(0 2px 3px rgba(95,197,134,0.2));
}

.progress-blinker:after {
  content: '';
  position: absolute;
  width: 40px;
  mix-blend-mode: soft-light;
  height: 40px;
  left: calc(50% - 20px);
  border-radius: 50%;
  background: #59B87D;
  background: #00ffc9;
  display: block;
  -webkit-animation: activate 2s infinite;
          animation: activate 2s infinite;
  top: 0;
  z-index: 4;
}

.progress_3 {
  text-align: right;
}

.progress_number {
  text-align: center;
  font-size: 17px;
  width: 40px;
  height: 40px;
  line-height: 32px;
  border-radius: 50px;
  margin: 0 auto;
  position: relative;
  z-index: 5;
}

.progress_label {
  text-align: center;
  font-size: 12px;
  line-height: 15px;
  color: #777;
}

.progress_fill,.progress_fill {
  width: 100%;
  height: 6px;
  background: #333;
  position: absolute;
  margin-left: 50%;
  top: 17px;
  z-index: 2;
}

.progress_tip {
  display: none;
  background: #333;
  border-radius: 5px;
  padding: 23px 0;
  color: #fff;
  position: absolute;
  z-index: 51;
  left: 0;
  width: 100%;
  text-align: center;
  font-size: 16px;
  line-height: 19px;
}

.progress_complete .progress_number {
  background: #59B87D;
  color: #fff;
  border: 3px solid transparent;
}

.progress_current .progress_number {
  background: #59B87D;
  color: #fff;
  border: 4px solid #5fc586;
  position: relative;
}

.progress_upcoming .progress_number {
  background: #fff;
  color: #d4d4d4;
  border: 4px solid transparent;
}

.progress_upcoming .progress_number:before {
  content: "";
  display: block;
  width: 40px;
  height: 40px;
  border: 1px solid #d4d4d4;
  border-radius: 50px;
  position: absolute;
  margin-top: -4px;
  margin-left: -4px;
}

.progress_fill_empty {
  background: #fff;
  border-top: 1px solid #d4d4d4;
  border-bottom: 1px solid #d4d4d4;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.progress_fill_filling {
  background: #59B87D;
  background: -webkit-gradient(linear, left top, right top, from(#59B87D), to(#5fc586));
  background: -o-linear-gradient(left, #59B87D 0%, #5fc586 100%);
  background: linear-gradient(to right, #59B87D 0%, #5fc586 100%);
}

.progress_fill_full {
  background: #59B87D;
}

.progress_upcoming .progress_label {
  color: #c4c4c4;
}
.prog-check {
  filter: brightness(10) saturate(0);
  width: 16px;
  height: 16px;
  transform: translate(8px, 9px);
}
.hi {
  background-color: #fefd54;
  padding: 2px;
  color: black;
  border-radius: 2px;
}

a .cta-button.btn-2 {
  padding: 10px 20px;
  max-width: 200px;
  width: auto;
  text-decoration: none!important;
  font-style: none;
  min-width: 250px;
  margin: 0 auto;
}
  </style>
  <!-- VisiSmart Code - DO NOT MODIFY-->
  <script async type='text/javascript'>
  window.visiopt_code = window.visiopt_code || (function() {
    var visi_wid = 513,
      visi_pid = 31,
      visi_flicker_time = 4000,
      visi_flicker_element = 'html',
      c = false,
      d = document,
      visi_fn = {
        begin: function() {
          var a = d.getElementById('visi_flicker');
          if (!a) {
            var a = d.createElement('style'),
              b = visi_flicker_element ? visi_flicker_element +
              '{opacity:0!important;background:none!important;}' : '',
              h = d.getElementsByTagName('head')[0];
            a.setAttribute('id', 'visi_flicker');
            a.setAttribute('type', 'text/css');
            if (a.styleSheet) {
              a.styleSheet.cssText = b;
            } else {
              a.appendChild(d.createTextNode(b));
            }
            h.appendChild(a);
          }
        },
        complete: function() {
          c = true;
          var a = d.getElementById('visi_flicker');
          if (a) {
            a.parentNode.removeChild(a);
          }
        },
        completed: function() {
          return c;
        },
        pack: function(a) {
          var b = d.createElement('script');
          b.src = a;
          b.type = 'text/javascript';
          b.innerText;
          b.onerror = function() {
            visi_fn.complete();
          };
          d.getElementsByTagName('head')[0].appendChild(b);
        },
        init: function() {
          visi_fn.begin();
          setTimeout(function() {
            visi_fn.complete()
          }, visi_flicker_time);
          this.pack('https://visiopt.com/client/js_test/test.' + visi_wid + '.' + visi_pid + '.js');
          return true;
        }
      };
    window.visiopt_code_status = visi_fn.init();
    return visi_fn;
  }());
  </script>
  <!--End Of VisiSmart Code -->
</head>

<body class="bg-gray-100 c8 wsl">

  <div class="container-vsl mx-auto flex my-4 md:my-8">
    
    <div id="progress_wrapper" class="w-full"">
        <div class="progress_step progress_1 progress_complete">
            <div class="progress_number"><img class="prog-check" src="//<?= $_SERVER["HTTP_HOST"];?>/images/check-green.png"></div>
            <div class="progress_label mt-1">Order Approved</div>
            <div class="progress_fill progress_fill_filling"></div>
        </div>
        <div class="progress_step progress_2 progress_current">
            <div class="progress_number">2</div>
            <div class="progress_label mt-1 str">Customize Order</div>
            <div class="progress-blinker"></div>
            <div class="progress_fill progress_fill_empty"></div>
        </div>
        <div class="progress_step progress_3 progress_upcoming">
            <div class="progress_number">3</div>
            <div class="progress_label mt-1">Final Confirmation</div>
        </div>
        
    </div>
  </div>
  <div class="container-vsl mx-auto my-2 p-2 md:p-8 mt-6 mb-11 content-center text-gray-600 bg-white border shadow rounded">

    <div class="flex flex-col items-center justify-center">
      <h6 class="text-white md:text-lg p-2 py-1 mb-4 rounded" style="background:#EB873D">FREE BONUS REPORT FROM DR. MASLEY</h6>
    

      <h1 class="text-3xl text-black md:text-5xl leading-6 title condensed text-center">
        This <strong>“Secret Fuel”</strong> Turbo&shy;charges Your Microbes &amp; Allows You&nbsp;to Melt Fat Off Your
        Body <strong class="">EVEN&nbsp;FASTER…</strong>
      </h1>

      <h2 class="text-center font-semibold text-lg md:text-xl mt-2 mb-8">While further <strong>reducing cravings,</strong> <strong>boosting energy
          levels,</strong> and <strong>eliminating <em class="text-rpblue">up to 5 pounds</em> of toxic sludge</strong> from
        your body… cleaning it out so it <span class="nw">burns fat</span> like an 8-cylinder engine in a Ferrari <span
          class="nw-all">at full speed!</span></h2>
    </div>


    <div class="">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/masley.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/masley.jpg" alt="dr masley" class="float-left md:mr-6 mb-3 w-full md:w-1/4 rounded border border-white shadow" width="150" height="175">
      </picture>
      <p>Hi, it’s Dr. Steven Masley again.</p>
      <p><strong>Congratulations</strong> on your order of Floraspring…</p>
      <p>As you know, Floraspring contains 5 “super strains” that reduce calorie absorption, while shutting down your
        cravings and reducing inflammation, all which lead to fat loss…</p>
      <p>And it does this while also <strong>boosting</strong> your energy, mood and metabolism at the same time…</p>


      <p>This way you don’t just <em>look</em> fantastic, you <em>feel</em> fantastic too…</p>
      <p>And today, because you’re a new customer, I’d like to let you in on <strong class="nw">a members‑only secret</strong>, which is that…</p>
      <div style="clear:both"></div>
    </div>

    <h2 class="text-center font-semibold text-lg md:text-xl mt-2 mb-6">The 5 “super strains” in Floraspring can help you lose fat even faster once they are 
          combined with a <span class="text-blue italic">secret fuel…</span></h2>

    <div class="w770 fw fix">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01a.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01a.jpg" alt="woman on scale" class="float-right md:ml-6 mb-3 w-full md:w-2/5 rounded border border-white shadow" width="330" height="450" loading="lazy">
      </picture>
      <!-- <div class="flrt imgwrap imgfx pull-120 mtlg0 radius mdw280 mbmd4 mh250 smw240">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01a.jpg" width="330" height="450" />
      </div> -->
      <p>I recommend this secret fuel to all of my patients who are looking to lose weight.</p>
      <p>Most Americans have <strong>no idea</strong> this fuel exists, or know about its hidden fat-fighting power…</p>
      <p>Imagine the 5 “super strains” in Floraspring suddenly working <strong>MUCH HARDER</strong> to help you lose
        weight…</p>
      <p>Working all day and all night… even while you’re sleeping or at work or relaxing at home…</p>
      <p>And on top of that, this fuel has its own, additional fat-reducing power…</p>
      <p><strong>This fuel is called <span class="hi">“prebiotic” fuel…</span></strong></p>
      <p>And while <em>“probiotic”</em> strains live in your gut… <em>“prebiotics”</em> is what helps feed them…</p>

      <h2 class="text-center font-semibold text-lg md:text-xl mb-5">This “Prebiotic” fuel helps you lose fat in 3 very important ways:</h2>

      <div class="icon-list">
        <p style="background-image: url(//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/ico-1.png)" id="floating-button-trigger">First, it <strong>feeds the
            “good” microbes</strong> in Floraspring so they increase in number and work harder and for longer…</p>
        <p style="background-image: url(//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/ico-2.png)">Second, it further <strong>reduces hunger cravings</strong>
          by expanding in your stomach, so you eat much less without even noticing…</p>
        <p style="background-image: url(//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/ico-3.png)">Third, it <strong>flushes your bowels</strong> more
          regularly, making you feel lighter throughout the&nbsp;day…</p>
      </div>

      <p>And, on top of all that, this fuel can even help <strong>lower blood sugar and cholesterol levels…</strong></p>
      <p>Plus block sugar spikes and insulin spikes…</p>
      <p>Unfortunately, your body has very likely been <strong>starved</strong> of this important fat-burning fuel,
        because…</p>
        <div style="clear:both"></div>
    </div>

    <h2 class="text-center font-semibold text-orange text-lg md:text-xl mt-2 mb-6">This Secret Fat-Burning Fuel Has Been Pulled Out of Our Food Supply (and from your body) by <span
          class="nw-all">Big Corporations</span></h2>

    <div class="w770 fw fix">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01b.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01b.jpg" alt="harvester in field" class="float-left md:mr-6 mb-3 w-full md:w-1/3 rounded border border-white shadow" width="280" height="370" loading="lazy">
      </picture>
      <!-- <div class="fllt imgwrap imgfx pull-100 mtlg0 radius mdw260 mbmd4 smw300">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01b.jpg" width="280" height="370" />
      </div> -->
      <p>Hundreds of years ago, we lived off the land and gathered food from the wild.</p>
      <p>During a single week, you could eat up to <strong>200 different types</strong> of fruits, vegetables, plants
        and grains and get tons of this “prebiotic” fuel…</p>
      <p>However, <strong>since big corporations took over our food supply,</strong> they’ve processed and eliminated
        many of the diverse and healthy nutrients from our food, often in the name of profit…</p>
      <p>Now the average American only gets a <strong>fraction</strong> of the “prebiotic” fuel they desperately need…
      </p>

      <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">Doctors and experts agree <strong>you likely need 3-4 TIMES <em>MORE</em> <span
            class="nw">prebiotic fuel</span></strong> to burn fat and stay&nbsp;healthy…</h2>

      <p>Now when I saw that Americans were in <strong>desperate</strong> need of this fuel, I searched for foods that
        are the best sources of it.</p>
      <p>I started recommending these foods to all my patients, and the ones who ate these foods every day saw <strong class="hi font-bold">a <em>huge</em> benefit…</strong></p>
      <ul class="p-3">
        <li>My patients saw extra fat disappear from their entire body, <strong>including typical <em>“harder to
              lose”</em> areas </strong>like their belly, arms, legs, thighs and waist…</li>
        <li><strong>They saw the results</strong> on the scale and in the mirror…</li>
        <li>Their friends (and husbands and wives) <strong>noticed</strong> the difference…</li>
        <li>Their love life and intimate life <strong>heated up…</strong></li>
        <li>They felt <strong>healthier</strong> and <strong>more energetic…</strong></li>
        <li>And their <strong>cholesterol and blood sugar control</strong> improved as well…</li>
        </ul>

      <p>And it’s not just my patients who see these results…</p>
      <p><strong>This fuel is <em class="text-blue">scientifically proven</em> to work for nearly anyone.</strong></p>
      <p>If you think you’re “too old” to lose the weight… or if you think genetics, hormones or a slow metabolism are
        holding you back…</p>

      <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">Here Are 4 Studies That Scientifically Prove That This Fuel Can Burn Off Your Unwanted Fat</h2>

      <p>Scientists have been studying this “prebiotic” fuel even longer than the 5 super strains in Floraspring.</p>
      <p>Here are the 4 incredible studies that prove how well it works:</p>
      <div style="clear:both"></div>
    </div>

    <div class="w770 fw fix">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01c.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01c.jpg" alt="doctor and patient" class="float-right md:ml-6 mb-3 w-full md:w-1/3 rounded border border-white shadow" width="300" height="420" loading="lazy">
      </picture>
      <!-- <div class="flrt imgwrap imgfx pull-120 mtlg0 radius mdw280 mbmd4 mh280 smw240">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01c.jpg" width="300" height="420" />
      </div> -->
      <ul class="p-3 pt-0">
        <li>The American Society for Nutrition found that those who ate this fuel for 6&nbsp;months lost <strong>an
            average of 16&nbsp;pounds and</strong> <strong class="text-blue">as much as 33.8 pounds</strong><sup>[1]</sup></li>
        <li>A UK study found people <strong><span class="text-blue">lost 5% of their body weight</span> in just 9 weeks</strong>
          after taking this “fuel” and lost “significantly more belly fat, total body fat and total weight” than those
          who didn’t take it.<sup>[2]</sup></li>
        <li>The National Weight Control Registry found that <strong>this “fuel” is <span class="text-blue">the biggest
              predictor</span> of “successful” weight loss</strong> after studying thousands of people who lost weight
          and kept it off…</li>
        <li>Another study found people who eat this “fuel” are up to <strong class="text-blue">30% less likely to die
            early</strong>…</li>
        </ul>
      <p class="fix font-bold">So this fuel can not only flatten your belly… <em>it can extend your life!</em></p>
      <p>So here’s what I did next:</p>

      <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">I Found the 4 Most Powerful Sources of this Prebiotic Fuel and Put Them Together to Form a <span class="text-blue">“Super Fuel”</span></h2>
      <p>I worked with the research team at Revival Point, the makers of Floraspring, to find the very best sources of
        prebiotic fuel…</p>
      <p class="str">These are the <strong class="hi">4 best sources</strong> of prebiotic fuel:</p>
      <div style="clear:both"></div>
    </div>

    <div class="mb-4 md:mb-6">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01d.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01d.jpg" class="float-none md:float-right md:ml-6 mb-3 w-1/2 mx-auto md:w-1/3 rounded border border-white shadow" width="240" height="260" loading="lazy">
      </picture>
      <!-- <div class="imgwrap mtsm4 imgfx flrt pull-60 mtlg0 smw180 radius">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01d.jpg" width="240" height="260" />
      </div> -->
      <h4 class="ing-title text-fbgreen border-b-2 border-fbgreen text-center md:text-left mb-4 pb-1 text-2xl md:text-3xl font-bold">Inulin Mix</h4>
      <p>This comes from the agave plant and Jerusalem artichokes.</p>
      <p>A London study found <strong>those who took this lost 7.6% of their body weight</strong><sup>[3]</sup>.</p>
      <p>Another study saw a “reduction in body weight” and more fullness after meals.<sup>[4]</sup></p>
      <div style="clear:both"></div>
    </div>

    <div class="mb-4 md:mb-6">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01e.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01e.jpg" class="float-none md:float-right md:ml-6 mb-3 w-1/2 mx-auto md:w-1/3 rounded border border-white shadow" width="240" height="260" loading="lazy">
      </picture>
      <!-- <div class="imgwrap imgfx flrt pull-60 mtlg0 smw180 mtsm3 mbmd4 mtmd1 radius">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01e.jpg" width="240" height="260" />
      </div> -->
      <h4 class="ing-title text-fbgreen border-b-2 border-fbgreen text-center md:text-left mb-4 pb-1 text-2xl md:text-3xl font-bold">Glucomannan</h4>
      <p>This ingredient comes from the konjac root, found in Southeast Asia.</p>
      <p><strong>14 different studies show that this “significantly lowers” body weight.<sup>[5]</sup></strong></p>
      <p>And led to “significant weight loss in overweight and obese individuals”<sup>[6]</sup>…</p>
      <p>Consuming glucomannan will also improve your blood sugar and <span class="nw">cholesterol levels.</span></p>
      <div style="clear:both"></div>
    </div>

    <div class="mb-4 md:mb-6">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01f.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01f.jpg" class="float-none md:float-right md:ml-6 mb-3 w-1/2 mx-auto md:w-1/3 rounded border border-white shadow" width="240" height="260" loading="lazy">
      </picture>
      <!-- <div class="imgwrap imgfx flrt pull-60 mtlg0  smw180 mtsm3 radius">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01f.jpg" width="240" height="260" />
      </div> -->
      <h4 class="ing-title text-fbgreen border-b-2 border-fbgreen text-center md:text-left mb-4 pb-1 text-2xl md:text-3xl font-bold">Oligosaccharides</h4>
      <p>Oligosaccharides come from the chicory root, grown in ancient Egypt…</p>
      <p>This reduced appetite, food intake and inflammation in overweight adults<sup>[7]</sup>…</p>
      <p>And studies show that it helps <strong>“promote long-term weight loss”</strong><sup>[8]</sup></p>
      <div style="clear:both"></div>
    </div>

    <div class="mb-4 md:mb-6">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01g.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01g.jpg" class="float-none md:float-right md:ml-6 mb-3 w-1/2 mx-auto md:w-1/3 rounded border border-white shadow" width="240" height="260" loading="lazy">
      </picture>
      <!-- <div class="imgwrap imgfx flrt pull-60  smw180 mtsm3 mbmd4 mtmd1 mtlg0 radius">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/s01g.jpg" width="240" height="260" />
      </div> -->
      <h4 class="ing-title text-fbgreen border-b-2 border-fbgreen text-center md:text-left mb-4 pb-1 text-2xl md:text-3xl font-bold">Guar Gum</h4>
      <p>Guar gum is found in an Indian bean called a cluster bean.</p>
      <p>This bean <strong>shuts down cravings</strong> by slowing digestion and making you feel full<sup>[9]</sup>…</p>
      <p>And another study found it decreased snacking between meals by 20%<sup>[10]</sup></p>


      <p>These are the four best sources of this “prebiotic fuel”.</p>
      <p>The best part of about these four sources is that they are not truly digested and absorbed like food, so they
        essentially provide <strong>zero calories…</strong> and are totally fat free.</p>

        <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">Now, in order to get all these nutrients, you would need to eat up to <em class="text-orange">five&nbsp;pounds</em> of
        prebiotic vegetables and fruits every week…</h2>

      <p>I’ve found it’s very difficult for most of my patients to eat all this food every week…</p>
      <p>This is why I worked with Revival Point <strong>to create <span class="hi">a potent extract</span> of the four
          best sources of prebiotic fuel…</strong></p>
      <p>Just a <em>single spoonful</em> per day is enough…</p>
      <p>And contains a <strong>MEGA DOSE</strong> of this fat-fighting fuel that would normally take you hours of
        exhausting work to find, buy, prepare and eat every single week…</p>
      <p>Now you can get the same potent, doctor-recommended dose <strong>in just <span class="nw">one
            minute!</span></strong></p>
      <p>It’s all backed by the science I showed you earlier…</p>
      <p>And this extract costs <strong>a <em>fraction</em> of the price</strong> of buying all those exotic foods…</p>
      <div style="clear:both"></div>
    </div>

    <div class="w770 fw fix">
      <picture class="hidden md:block">
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/floraboost.png" type="image/png">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/floraboost.jpg" alt="floraboost" class="float-none md:float-right md:ml-6 mb-3 w-3/4 mx-auto md:w-2/5" width="380" height="340" loading="lazy">
      </picture>
      <!-- <div class="imgwrap mb5 flrt pull-100 mdw320 mtmd2 g20 smhide">
        <img class="rounded border border-white shadow" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/floraboost.png" width="380" height="340" />
      </div> -->
      <h5 class="text-center md:text-left smh6 reg">This extract is called&hellip;</h5>
      <p class="text-center md:text-left text-6xl md:text-7xl font-bold text-fbgreen" style="letter-spacing: -2px;">Floraboost</p>
      <picture class="md:hidden">
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/floraboost.png" type="image/png">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/floraboost.jpg" alt="floraboost" class="float-none md:float-right md:ml-6 mb-3 w-3/4 mx-auto md:w-2/5" width="380" height="340" loading="lazy">
      </picture>
      <h5 class="text-lg text-center md:text-left mb-4">Floraboost combines the four most potent sources of prebiotic fuel
        into one powerful, easy supplement that you can take just <span style="white-space: nowrap;">once per day…</span></h5>
      <p>This Super Fuel is designed to enhance the power of Floraspring by making its fat-burning power <em>even
          stronger…</em> while giving you additional fat-burning benefits.</p>
      <p>To make it even easier to get those fat-burning benefits, we’re including a <strong>22&nbsp;ounce shaker
          bottle</strong> with a convenient flip top and, one of the best inventions ever, a mixing ball. With the
        mixing ball, your drinks will be smooth, clump-free and delicious in just a few shakes.</p>
      <p>So mix up your Floraboost and take it anywhere… home, office or the gym. You never have to miss a dose.</p>
      <div style="clear:both"></div>
    </div>

    <div class="mt-2 mb-6 md:w-4/5 mx-auto">
      <h5 class="text-center text-lg">Because you’re a new customer today, I’ve got one more special surprise for you…</h5>
      <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">To Help Make Sure You Succeed, You May Qualify for a Special 
        <span class="text-blue">One-Time-Only <span class="nw">“New Members”</span> Discount</span></h2>
    </div>

    <div class="w770 fw fix">
      <p>Floraboost is for those who are <strong>serious</strong> about taking their fat burning to the next level…</p>
      <p>If you’ve been overweight or obese for longer than one year…</p>
      <p>OR you want to lose fat faster…</p>
      <p>It is <strong>highly recommended</strong> that you take Floraboost in combination with Floraspring to boost
        your results…</p>
      <p>Floraboost normally sells for $479.70 retail…</p>
      <!-- odd placement for cta scroll to -->
      <p id="cta"><strong>But today, because you’re a new member, you may qualify for a special 
        <!-- <span class="hi bg-yellow-400 px-1 mt-1">“Members&nbsp;Only”&nbsp;discount…</span></strong> -->
        “Members&nbsp;Only”&nbsp;discount…</strong>
      </p>

    </div>


    <div id="qualify-wrap" class="w-full">
      <div class="flex flex-col justify-center items-center border border-3 border-lime-500 shadow p-3 md:py-5">
        <div class="text-center text-2xl md:text-3xl font-semibold md:w-4/5">Click The Button Below Now To See If You Qualify For This Discount</div>
        <button id="qualify-btn" class="mx-auto cta-button clickable w-full md:w-auto text-3xl md:text-4xl py-2"
        style="padding: 15px 40px;min-width: 250px;">See If You Qualify...</span></button>
        <div class="light-grey" style="background-color: transparent; width:70%; margin: 0 auto;">
            <div id="progress-bar" class="green" style="height:10px;width:0;background-color:#40A900;"></div>
        </div>
      </div>
    </div>





    <!-- SECURE ORDER CONTENT -->
    <!-- SECURE ORDER CONTENT -->
    <!-- SECURE ORDER CONTENT -->
    <div id="expand-content" class="hidden">

    <div class="w-full">
		  <div class="flex flex-col justify-center items-center border border-3 border-lime-500 shadow p-4 md:py-5">
			  <div class="w-full">
          <div class="flex justify-center font-bold text-center text-blue text-3xl md:text-4xl uppercase">Congratulations!</div>
          <div class="flex justify-center text-center mb-6 text-tygreen text-base">You Qualify For This Exclusive Discount of Total Brain Boost</div>
        <div class="gap-4 columns-1 md:columns-2">
          <div class="flex flex-col text-center justify-center mb-6 md:mb-0">
            <div class="sub-title"><?= $product1['product_qty']; ?> Bottle Discount</div>
            <div class="title font-semibold text-lg md:text-2xl">So you’ll get a 6-month supply for just $<?= $product1['product_price']; ?> Today!</div>
            
            <p class="sales-tax"><?= $tax_msg; ?></p>
            <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?pid=<?= $product1['product_id']; ?>&buy=1&next=<?= $nextlink; ?>" class="w-full" style="text-decoration: none;">
                <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes! I'll Take It</button>
            </a>
            <div class="whop text-blue mt-2 font-semibold">That's <span class="underline">45% OFF</span> the retail price!</div>
          </div>
          <div class="flex w-full border-b mb-4 md:hidden"></div>
          <div class="flex flex-col text-center justify-center">
            <div class="sub-title">Even Bigger Discount (Limited Time Only)</div>
            <div class="title font-semibold text-lg md:text-2xl">Get a <?= $product2['product_month']; ?>-month supply for just $<?= $product2['product_price']; ?> Today!</div>
            
            <p class="sales-tax"><?= $tax_msg; ?></p>
            <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?<?= $product2['product_id']; ?>&buy=1&next=<?= $nextlink; ?>" class="w-full" style="text-decoration: none;">
                <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes! I'll Take It</button>
            </a>
            <div class="whop text-blue mt-2 font-semibold">That's <span class="underline">52% OFF</span> the retail price!</div>
          </div>
          
        </div>
      </div>
		</div>
    
    <p class="text-center text-red-600 font-bold text-2xl md:text-4xl mt-8">Don&rsquo;t Leave This Page Just Yet!</p>
    
    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">
      Here&rsquo;s An Easy Way To <span class="font-bold'">Boost&nbsp;Your&nbsp;Memory, Focus</span> 
      And Mental <span class="font-bold">Energy</span><span>&nbsp;Even Further&hellip;</span>
    </h2>
    

    <div>
    <picture>
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/image2.png" type="image/png">
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/image2.jpg" alt="dr masley" style="mix-blend-mode: multiply;" class="float-left md:mr-6 mb-3 w-full md:w-1/2" width="287" height="179" loading="lazy">
    </picture>
    
    <p><span>Hey, Dr. Masley here.</span></p>

    <p><span>I want to </span><span class="font-bold">congratulate</span><span>&nbsp;you on your purchase
        of Total Brain Boost today&hellip; &nbsp;</span></p>

    <p><span>Because you&rsquo;re making a huge investment in your </span><span
        class="font-bold">memory</span><span>&nbsp;and </span><span class="font-bold">brain health</span><span>.</span>
    </p>

    <p><span>And not just now, but for years to come.</span></p>

    <p><span>I cannot wait to hear about your </span><span class="font-bold">results</span><span>&nbsp;from
        using Total Brain Boost. </span></p>

    <p><span>If you have time, please write to Revival Point about your results.</span></p>

    <p><span>If you really love what you feel and see, tell us what you love&hellip;</span></p>

    <p><span>And if you&rsquo;ve seen a significant transformation&hellip; </span></p>

    <p><span>Then please feel free to send photos or videos if you&rsquo;re comfortable!</span></p>
    <div style="clear:both"></div>
    </div>

    <p><span>I cannot tell you how much we love hearing about people&rsquo;s </span><span
        class="font-bold">success</span><span>&hellip; </span></p>

    <ul class="my-4 list-disc list-inside pl-3 md:pl-6">
      <li class="  li-bullet-0"><span>Whether it&rsquo;s becoming mentally sharper and more focused&hellip;</span></li>

      <li class="  li-bullet-0"><span>Building a stronger memory&hellip; </span></li>

      <li class="  li-bullet-0"><span>Or just feeling healthier and happier.</span></li>
    </ul>

    <p><span>But</span><span>&nbsp;don&rsquo;t leave this page just yet&hellip;</span></p>

    <p><span>There are a few important details I need to go over with you.</span></p>

    <p><span>That can help further </span><span class="font-bold">boost your memory, focus, and mental
        energy</span><span>&hellip;</span></p>

    <p><span>And increase your brain health even more&hellip;</span></p>

    <p><span>Giving you </span><span class="font-bold ">much longer-lasting results</span><span>.</span>
    </p>

    <p><span>On top of this&hellip; </span></p>

    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4"><span class="font-bold">I Also Want To Share An </span><span>Easy</span><span
        class="font-bold">&nbsp;Way To </span><span class="font-bold">Save An </span><span>Additional
      </span><span>XX%</span><span class="font-bold">&nbsp;On Total Brain Boost&nbsp;Today&hellip;</span>
    </h2>

    <p><span class="hi">This is something that will <span class="underline">only</span>&nbsp;be shared on this page.</span></p>

    <p><span>Now first, let&rsquo;s talk about your order:</span></p>

    <p><span>Your order will ship today if you ordered before 5pm Eastern. </span></p>

    <p><span>If not, then it will ship the next week day, first thing, at 9am.</span></p>

    <p><span>Your order should arrive at your door no more than three days after it ships&hellip;
        &nbsp;</span></p>

    <p><span>Thanks to DHL 3-Day Guaranteed Shipping.</span></p>

    <p><span>Or if you&rsquo;re outside the USA and Canada, it will take 8-10 days for
        shipping.</span></p>

    <p><span>You&rsquo;ll get an email confirmation that looks like this, confirming your order
        shipped&hellip;</span></p>

    <p><span>Along with the tracking number and delivery date and time.</span></p>

    <p><span class=" font-bold">[note to editor: include image]</span></p>

    <p><span>This means you&rsquo;re literally just days away from having Total Brain Boost in your
        hands.</span></p>

      <h2 class="text-center font-semibold text-xl md:text-2xl mb-4"><span class="font-bold">And That Means You&rsquo;re Days Away From Starting
        To</span><span>&nbsp;Think Sharper </span><span class="font-bold">With A </span><span>Stronger
        Memory</span><span class="font-bold">&nbsp;- And </span><span class="font-bold">Feeling</span><span
        class="font-bold">&nbsp;</span><span>Better
      </span><span class="font-bold">And</span><span>&nbsp;More Confident </span><span class="font-bold">In Everything
        You
        Do&hellip;</span><span class=" font-bold">&nbsp; </span>
      </h2>

    <p><span>Giving you an advantage you never had before:</span></p>

    <ul class=" lst-kix_3ydq7y3f71fk-0 start">
      <li class="  li-bullet-0"><span>Boosting your </span><span class="font-bold">brain
          health</span><span>&hellip;</span></li>
    </ul>

    <ul class=" lst-kix_3ydq7y3f71fk-0">
      <li class="  li-bullet-0"><span>Helping you strengthen your </span><span class=" font-bold">memory</span></li>
    </ul>

    <ul class=" lst-kix_3ydq7y3f71fk-0">
      <li class="  li-bullet-0"><span>Sharpen your thinking and </span><span
          class="font-bold">focus</span><span>&hellip;</span></li>
    </ul>

    <ul class=" lst-kix_3ydq7y3f71fk-0">
      <li class="  li-bullet-0"><span>And increase </span><span class="font-bold">mental energy</span><span>&nbsp;and
          boost
          your </span><span class="font-bold">mood</span><span>. </span></li>
    </ul>

    <p><span>With this, you&rsquo;ll feel so much healthier, and more energized and happy.</span>
    </p>

    <p><span>And it can be much easier to be active and productive&hellip;</span></p>

    <p><span>And get in great shape.</span></p>

    <p><span>In fact, I think you&rsquo;ll love Total Brain Boost so much&hellip;</span></p>

    <p><span>You&rsquo;ll see it as essential to your health.</span></p>

    <p><span>It might even feel as important as brushing your teeth every morning. </span></p>

    <p><span>And if you get used to the results:</span></p>

    <ul class=" lst-kix_vhcb0jjjy2ct-0 start">
      <li class="  li-bullet-0"><span>The </span><span class="font-bold">stronger memory</span><span>&hellip;</span>
      </li>
    </ul>

    <ul class=" lst-kix_vhcb0jjjy2ct-0">
      <li class="  li-bullet-0"><span>The </span><span class="font-bold">clearer thinking</span><span>&hellip;</span>
      </li>
    </ul>

    <ul class=" lst-kix_vhcb0jjjy2ct-0">
      <li class="  li-bullet-0"><span>The </span><span class="font-bold">sharper focus </span><span>and increased
          mental energy&hellip;</span></li>
    </ul>

    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4"><span class="font-bold">You&rsquo;ll Feel So </span><span>Good</span><span>&nbsp;</span>
    <span class="font-bold">You&rsquo;ll Want To Stay Like This </span><span>Forever</span>
    </h2>

    <p><span>Which is why you&rsquo;ll want to take Total Brain Boost not just for one month or a
        few months&hellip; </span></p>

    <p><span>But ideally for 6-12 months or longer for </span><span class=" font-bold">the longest-lasting
        results.</span></p>

    <p><span>Think of Total Brain Boost as an essential part of your new active and healthy
        lifestyle.</span></p>

    <p><span>And something you take each day </span><span class="font-bold">to stay sharp</span><span>&nbsp;- just as
        you would a multivitamin. </span></p>

    <p><span>Because like an expensive car, your brain functions best when it gets only </span><span
        class="font-bold">premium fuel</span><span>. </span></p>

    <p><span>The ingredients in Total Brain Boost are that premium fuel.</span></p>

    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4"><span class="font-bold">And You Want To Keep Taking Total Brain </span><span
        class="font-bold">Boost</span><span>&nbsp;Daily To Help Your Mind Stay Sharp, Focused, Energetic, And
        Healthy&hellip; For Years To Come</span>
    </h2>

    <p><span>One study</span><sup><a href="#ftnt1" id="ftnt_ref1">[1]</a></sup><span>&nbsp;showed
        that when people were taking just one of the nutrients in Total Brain Boost daily for 18 months&hellip;</span>
    </p>

    <p><span>Their memory continued to improve over that entire period of time:</span></p>

    <div class="flex justify-center">
      <img class="w-full md:w-2/3 mx-auto" alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/curcumin-graph.jpg" title="" loading="lazy">
    </div>

    <p><span>Which means taking Total Brain Boost long term is most likely</span><span class="font-bold">&nbsp;the
        best way to achieve longer-lasting results</span><span>.</span></p>

    <p><span>And most of the studies I showed you on these ingredients are done over a longer period
        of 3 to 6 months &hellip; which led participants to see significant results.</span></p>

    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">These Longer Regimens&nbsp;
    Will Give You The <span class=" font-bold">Longest-Lasting&nbsp;Results</span>
    </h2>

    <p><span>Now, I know there was a strict limit on the amount of Total Brain Boost you could order
        on the previous page&hellip; </span></p>

    <p><span>You were limited to just </span><span class="hi">a 6-month supply.</span></p>

    <p><span>So to help you achieve </span><span class="font-bold">longer-lasting</span><span>&nbsp;goals</span></p>

    <p><span>I&rsquo;ve asked Revival Point to do something special here</span></p>

    <p><span>Because you&rsquo;re a new customer&hellip;</span></p>

    <p><span>And you&rsquo;ve shown interest in improving your health</span></p>

    <p><span>I&rsquo;ve asked that, in order to help you succeed&hellip;</span></p>

    <p><span>Revival Point give you a special, one-time discount on this page today so you can buy
        extra bottles of Total Brain Boost and take it long term</span></p>

    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">Get An Additional 6 or 12 Month Supply of Total Brain Boost At A 
      <span class="font-bold">Highly Discounted</span>&nbsp;Rate&hellip;
    </h2>

    <p><span>On the previous page and on the Revival Point website, one bottle of Total Brain Boost
        costs $19.98. </span></p>

    <p><span>But because you&rsquo;re a new customer today&hellip; </span></p>

    <p><span class="hi">You&rsquo;re going to pay just $16.42&nbsp;per bottle for a six month supply of
        Total Brain Boost.</span></p>

    <p><span class="hi">That&rsquo;s a 45%&nbsp;discount.</span></p>

    <p><span class="hi">And a $162.70&nbsp;total
        savings.</span></p>

    <p><span class="hi">And if you get the 12 month supply you&rsquo;ll pay just $14.46&nbsp;per
        bottle&hellip; </span></p>

    <p><span class="hi">That&rsquo;s 52%&nbsp;off and a
      $372.40&nbsp;total savings.</span></p>

    <p><span>These deeply-discounted packages are designed to ensure you have the best chance at
        long-lasting results with Total Brain Boost&hellip;</span></p>

    <p><span>And so you can stock up to make sure you don&rsquo;t run out</span></p>

    <p><span>There is no need to worry if these bottles will expire</span></p>

    <p><span>They are guaranteed to stay fresh for a minimum of two years without any special storage or
        refrigeration needed.</span></p>

    <p><span>Just place them in any cabinet or anywhere at room temperature away from direct
        sunlight.</span></p>

    <p><span>However&hellip; </span></p>

    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4">There&rsquo;s Just<span class="font-bold">&nbsp;One&nbsp;Catch</span>&hellip;</h2>

    <p><span>Which is, Revival Point doesn&rsquo;t want too many people finding out about it.
      </span></p>

    <p><span>So I&rsquo;ll politely ask you to please not mention this anywhere online. </span></p>

    <p><span>Because I don&rsquo;t want tons of men and women calling Revival Point customer
        service&hellip; </span></p>

    <p><span>Saying they heard about some way to get Total Brain Boost cheaper&hellip; </span></p>

    <p><span>Revival Point is only offering this </span><span class="font-bold">one-time discount</span><span>&nbsp;to
        you right now because:</span></p>

    <p><span>I know you&rsquo;re serious about boosting your memory and focus. &nbsp;</span></p>

    <p><span>And I want to make sure you have </span><span class=" font-bold">the best opportunity for long-term
        results</span></p>

    <p><span>And you&rsquo;re only getting access to this discount right now while you&rsquo;re on
        this page.</span></p>

    <p><span>Again, it will only be available on this page right here, right now.</span></p>

    <h2 class="text-center font-semibold text-xl md:text-2xl mb-4"><span>Once You Leave This Page, </span>
    This Deal Will Be<span class=" font-bold">&nbsp;Gone For Good</span></h2>

    <p><span>You cannot email, call, or visit any other web page to get this discount again.</span>
    </p>

    <p><span>And if you go to the Revival Point website you&rsquo;ll see Total Brain Boost for sale
        at full price.</span></p>

    <p><span>Which is more than twice the price that you&rsquo;ll pay per bottle on this page if you buy the
        largest package. </span><span class="font-bold ">[show image]</span></p>

    <p><span>All you need to do now is </span><span class="font-bold">click the button below to see if you
        qualify</span><span>&nbsp;for your additional discount.</span></p>

    <div class="flex justify-center my-2">
      <button id="wsl-btn" onclick="scrollToId('cta')" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">Yes! I'll Take It</button>
    </div>


    <p><span>And to make sure you feel </span><span class="font-bold">totally safe</span><span>&nbsp;with
        this upgrade&hellip;</span></p>

    <p><span>You&rsquo;re also going to get the same </span><span class="font-bold">90-day money back
        guarantee</span><span>&nbsp;with this order that you got with your original purchase of Total Brain
        Boost.</span></p>

    <p><span>This means you have 90 full days to try this out.</span></p>

    <p><span>And if you don&rsquo;t absolutely love the </span><span class="font-bold">improved memory and mental
        energy</span><span>&nbsp;you see&hellip; </span></p>

    <p><span>If you don&rsquo;t feel </span><span class="font-bold">mentally sharper</span><span>, don&rsquo;t feel
        yourself becoming </span><span class="font-bold">more confident</span><span>&nbsp;in your abilities and in a
      </span><span class="font-bold">better mood</span><span>&hellip; &nbsp;</span></p>

    <p><span>Just shoot Revival Point support staff a quick email or call.</span></p>

    <p><span>They&rsquo;re open 24 hours a day.</span></p>

    <p><span>And you&rsquo;ll get a full, instant refund&hellip; </span></p>

    <p><span>No questions asked and no hassles. </span></p>

    <p><span>Just click the button below and grab this deal while it&rsquo;s still available on this page.</span></p>

    <div class="flex justify-center my-2">
      <button id="wsl-btn" onclick="scrollToId('cta')" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">Yes! I'll Take It</button>
    </div>


    <p><span>Once you leave this page, this deal will be gone for good.</span></p>

    <p><span>So make sure you are stocked up on Total Brain Boost.</span></p>

    <p><span>And make sure you take Total Brain Boost for the recommended </span><span class="hi">6 or 12
        month</span><span>&nbsp;regimen for </span><span class="font-bold">the longest-lasting
        results</span><span>.</span></p>

    <p><span>Just click the button below and see if you qualify for your additional discount
        now.</span></p>

    <div class="flex justify-center my-2">
      <button id="wsl-btn" onclick="scrollToId('cta')" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">Yes! I'll Take It</button>
    </div>


    <p><span>I can&rsquo;t wait to hear about the positive changes I hope you experience. </span>
    </p>
  </div> 
  <!-- end expand-content -->

  </div>

  <?php
    $button_text = 'Yes, Give Me This Now!';
    $scroll_id = 'cta';
    $top_content = '';
    floatButton('includes/floatButton',$top_content,$button_text,$scroll_id);
  ?>

<script>
  const wslBtn = document.getElementById('wsl-btn');
  wslBtn.addEventListener('click', ()=> {
    window.location = '<?= $nextlink; ?>';
  })

  const qualifyButton = document.getElementById('qualify-btn');
  const qualifyWrap = document.getElementById('qualify-wrap');
  const buy = document.getElementById('container-buy');
  const progress = document.getElementById('progress-bar');
  const expandContent = document.getElementById('expand-content');
  qualifyButton.addEventListener('click', ()=> {
    qualifyButton.classList.add('disable');
    document.querySelector('.light-grey').style.backgroundColor = '#e1e1e1';
    progress.classList.add('grow');

    setTimeout(() => {
      qualifyWrap.style.display = 'none';
      expandContent.style.display = 'block';
    }, "1000")
  })

  function scrollToId(id) {
    const scrollElement = document.getElementById(id);
    scrollElement.scrollIntoView({ behavior: 'smooth', block: 'start'});
  }
</script>

<?php template("includes/rpFooter"); ?>
</div>


<div class="flex flex-col justify-center items-center text-sm py-4" style="margin-bottom: 80px">
  <div class="text-lg mb-2 font-semibold">CITATIONS</div>
  <ul class="num-list">
    <li>https://www.ncbi.nlm.nih.gov/pubmed/31174214</li>
    <li>https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4619305/</li>
    <li>https://www.ncbi.nlm.nih.gov/pubmed/26500686</li>
    <li>https://www.ncbi.nlm.nih.gov/pubmed/19386741</li>
    <li>https://www.ncbi.nlm.nih.gov/pubmed/16320857</li>
    <li>https://www.ncbi.nlm.nih.gov/pubmed/18842808</li>
    <li>https://pubmed.ncbi.nlm.nih.gov/19386741/</li>
    <li>https://pubmed.ncbi.nlm.nih.gov/26180243/</li>
    <li>https://www.ncbi.nlm.nih.gov/pubmed/25851425</li>
    <li>https://www.ncbi.nlm.nih.gov/pubmed/27317834</li>
  </ul>
</div>

  <?php if ($site['debug'] == true) {
      // Show Debug bar only on whitelisted domains.
      template('debug', null, null, 'debug');
  } ?>
</body>

</html>