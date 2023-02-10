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

  .wsl h1 {
    font-weight: 600;
    hyphens: none;
  }

  .wsl h1 {
    line-height: 35px;
    line-height: 1.3
  }

  .wsl li {
    list-style: none;
    padding: 10px 30px 10px 1.75em;
    background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/tick.webp');
    background-repeat: no-repeat;
    background-position: left 11px;
    background-size: 1.4rem;
  }

  #progress-bar,
  #second-progress-bar,
  #third-progress-bar {
    width: 0;
  }

  #progress-bar.grow,
  #second-progress-bar.grow,
  #third-progress-bar.grow {
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
    color: #ccc;
    text-align: center;
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
    padding: 5px 0
  }

  /* progress bar */
  #progress_wrapper,
  #second-progress_wrapper,
  #third-progress_wrapper {
    position: relative;
    overflow: auto;
    cursor: default;
    font-family: "Lato", sans-serif;
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
    -webkit-filter: drop-shadow(0 3px 4px rgba(95, 197, 134, 0.075)) drop-shadow(0 3px 4px rgba(95, 197, 134, 0.15)) drop-shadow(0 2px 3px rgba(95, 197, 134, 0.2));
    filter: drop-shadow(0 3px 4px rgba(95, 197, 134, 0.075)) drop-shadow(0 3px 4px rgba(95, 197, 134, 0.15)) drop-shadow(0 2px 3px rgba(95, 197, 134, 0.2));
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

  @-webkit-keyframes activate {
    from {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 0.5;
    }

    to {
      -webkit-transform: scale(1.4);
      transform: scale(1.4);
      opacity: 0;
    }
  }

  @keyframes activate {
    from {
      -webkit-transform: scale(1);
      transform: scale(1);
      opacity: 0.5;
    }

    to {
      -webkit-transform: scale(1.4);
      transform: scale(1.4);
      opacity: 0;
    }
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

  .progress_fill,
  .progress_fill {
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
    filter: brightness(0) invert(1);
    width: 16px;
    height: 16px;
    transform: translate(8px, 9px);
  }

  .hi {
    background-color: #fefd54;
    padding: 2px;
    border-radius: 2px;
    font-weight: 600;
  }

  a .cta-button.btn-2 {
    padding: 10px 20px;
    max-width: 200px;
    width: auto;
    text-decoration: none !important;

    margin: 0 auto;
  }

  .container {
    max-width: 770px !important;
  }

  @media (min-width: 768px) {
    h2 {
      font-size: 1.875rem;
      line-height: 2.25rem;
    }

    .md\:w-1\/2 {
      width: 48%;
    }

    p,
    .wsl p,
    .wsl ul li {
      font-size: 20px;
    }
  }

  .text-6xl {
    font-size: 3.75rem !important;
    line-height: 1 !important;
  }

  .fs-green {
    -webkit-animation: green-glow-large 3s infinite;
    animation: green-glow-large 3s infinite;
    border-color: #01b38d;
  }

  @keyframes green-glow-large {
    0% {
      -webkit-filter: drop-shadow(0 20px 50px rgba(89, 184, 125, 0.05)) drop-shadow(0 15px 30px rgba(89, 184, 125, 0.075)) drop-shadow(0 4px 3px rgba(89, 184, 125, 0.1));
      filter: drop-shadow(0 20px 50px rgba(89, 184, 125, 0.05)) drop-shadow(0 15px 30px rgba(89, 184, 125, 0.075)) drop-shadow(0 4px 3px rgba(89, 184, 125, 0.1));
      border-color: #01b38d;
    }

    50% {
      -webkit-filter: drop-shadow(0 20px 50px rgba(89, 184, 125, 0.1)) drop-shadow(0 15px 30px rgba(89, 184, 125, 0.125)) drop-shadow(0 4px 3px rgba(89, 184, 125, 0.2));
      filter: drop-shadow(0 20px 50px rgba(89, 184, 125, 0.1)) drop-shadow(0 15px 30px rgba(89, 184, 125, 0.125)) drop-shadow(0 4px 3px rgba(89, 184, 125, 0.2));
      border-color: #04c39a;
    }

    100% {
      -webkit-filter: drop-shadow(0 20px 50px rgba(89, 184, 125, 0.05)) drop-shadow(0 15px 30px rgba(89, 184, 125, 0.075)) drop-shadow(0 4px 3px rgba(89, 184, 125, 0.1));
      filter: drop-shadow(0 20px 50px rgba(89, 184, 125, 0.05)) drop-shadow(0 15px 30px rgba(89, 184, 125, 0.075)) drop-shadow(0 4px 3px rgba(89, 184, 125, 0.1));
      border-color: #01b38d;
    }
  }

  .text-blue {
    color: #00B1E1;
  }

  .sub-title,
  .title,
  .whop {
    margin-bottom: 0 !important;
  }

  .mb-15 {
    margin-bottom: 3.75rem;
  }

  .font-semibold {
    font-weight: 600;
  }

  h1+p,
  h2+p,
  h3+p,
  h4+p,
  h5+p,
  h6+p {
    margin-top: 32px;
    margin-top: 2rem;
  }

  ol.citations li {
    font-size: 12px;
    margin-bottom: 0.5em;
    background-image: none;
    padding: unset;
    list-style: auto;
  }

  .font-gray-600 p {
    font-size: unset;
  }

  @media (min-width: 1px) and (max-width: 767px) {
    .text-base {
      font-size: 24px !important;
      margin: 5px;
      line-height: 2rem;
    }

    .fs-green {
      animation: none;
    }
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
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="c8 wsl">

  <div class="container-sm mx-auto flex my-4 md:my-8">

    <div id="progress_wrapper" class="w-full">
      <div class="progress_step progress_1 progress_complete">
        <div class="progress_number"><img class="prog-check"
            src="//<?= $_SERVER["HTTP_HOST"];?>/images/check-green.png"></div>
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
  <div class="container-sm mx-auto my-2 p-2 mt-6 mb-11 content-center">

    <div class="flex flex-col justify-center">

      <h1 class="text-center text-red-600 font-bold text-6xl md:text-4xl md:mt-8" style="font-weight: bold">Don&rsquo;t
        Leave This Page Just&nbsp;Yet!</h1>

      <h2 class="text-center text-xl md:text-2xl mb-11">Here&rsquo;s An Easy Way To <span
          class="font-bold">Boost&nbsp;Your&nbsp;Memory, Focus</span> And Mental <span class="font-bold">Energy</span>
        &nbsp;Even&nbsp;Further&hellip;</span>
      </h2>


      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/image2.png" type="image/png">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/image2.jpg" alt="dr masley"
          style="mix-blend-mode: multiply;" class="float-left md:mr-6 mb-3 w-full md:w-1/2" width="287" height="179"
          loading="lazy">
      </picture>

      <p><span>Hey, Dr. Masley here.</span></p>

      <p><span>I want to </span><span class="font-bold">congratulate</span>&nbsp;you on your purchase
        of Total Brain Boost today&hellip;</p>

      <p><span>Because you&rsquo;re making a huge investment in your </span><span
          class="font-bold">memory</span><span>&nbsp;and </span><span
          class="font-bold">brain&nbsp;health</span><span>.</span>
      </p>

      <p><span>And not just now, but for years to&nbsp;come.</span></p>

      <p><span>I cannot wait to hear about your </span><span class="font-bold">results</span><span>&nbsp;from
          using Total Brain Boost. </span></p>

      <p><span>If you have time, please write to Revival Point about your results.</span></p>

      <p><span>If you really love what you feel and see, tell us what you love&hellip;</span></p>

      <p><span>And if you&rsquo;ve seen a significant transformation&hellip; </span></p>

      <p><span>Then please feel free to send photos or videos if you&rsquo;re comfortable!</span></p>
      <div style="clear:both"></div>

      <p><span>I cannot tell you how much we love hearing about people&rsquo;s </span><span
          class="font-bold">success</span><span>&hellip; </span></p>

      <ul class="my-4 list-disc list-inside">
        <li class="  li-bullet-0"><span>Whether it&rsquo;s becoming mentally sharper and more focused&hellip;</span>
        </li>

        <li class="  li-bullet-0"><span>Building a stronger memory&hellip; </span></li>

        <li class="  li-bullet-0"><span>Or just feeling healthier and happier.</span></li>
      </ul>

      <p><span>But</span><span>&nbsp;don&rsquo;t leave this page just yet&hellip;</span></p>

      <p><span>There are a few important details I need to go over with you.</span></p>

      <p><span>That can help further </span><span class="font-bold">boost your memory, focus, and mental
          energy</span><span>&hellip;</span></p>

      <p><span>And increase your brain health even more&hellip;</span></p>

      <p><span>Giving you </span><span class="font-bold text-red-600">much longer-lasting results</span><span>.</span>
      </p>

      <p><span>On top of this&hellip; </span></p>

      <h2 id="start-float-btn" class="text-center font-semibold text-xl md:text-3xl mb-4">I Also Want To Share An <span
          class="font-bold">Easy</span>&nbsp;Way To Save An <span class="font-bold">Additional </span><span
          class="text-red-600">52%</span>&nbsp;On Total Brain Boost&nbsp;Today&hellip;</span>
      </h2>

      <p><span class="hi text-red-600">This is something that will <span class="underline">only</span>&nbsp;be shared
          on this page.</span></p>

      <p><span>Now first, let&rsquo;s talk about your order:</span></p>

      <p><span>Your order will ship today if you ordered before 5pm Eastern. </span></p>

      <p><span>If not, then it will ship the next week day, first thing, at 9am.</span></p>

      <p><span>Your order should arrive at your door no more than three days after it ships&hellip;
          &nbsp;</span></p>

      <p><span>Thanks to DHL 3-Day Guaranteed Shipping.</span></p>

      <p><span>Or if you&rsquo;re outside the USA and Canada, it will take 8-10 days for
          shipping.</span></p>

      <p><span>You&rsquo;ll get an email confirmation that looks like this, confirming your order has been
          placed&hellip;</span></p>

      <p><span>Once it ships, we will send you the tracking number and delivery date and time.</span></p>

      <div class="flex justify-center">
        <img class="w-full md:w-2/3 mx-auto" alt="email confirmation"
          src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/email-confirmation.webp" title="" loading="lazy">
      </div>

      <p><span>This means you&rsquo;re literally just days away from having Total Brain Boost in your
          hands.</span></p>

      <h2 class="text-center font-semibold text-xl md:text-3xl mb-4">And That Means You&rsquo;re Days Away From
        Starting To <span class="font-bold">&nbsp;Think Sharper </span>With A <span class="font-bold">Stronger
          Memory</span>&nbsp;- And Feeling <span class="font-bold">Better </span>And<span class="font-bold">&nbsp;More
          Confident </span> In Everything You Do&hellip;</span>
      </h2>

      <p><span>Giving you an advantage you never had before:</span></p>

      <div class="my-5">
        <ul class=" lst-kix_3ydq7y3f71fk-0 start">
          <li class="  li-bullet-0"><span>Boosting your </span><span class="font-bold">brain
              health</span><span>&hellip;</span></li>
        </ul>

        <ul class=" lst-kix_3ydq7y3f71fk-0">
          <li class="  li-bullet-0"><span>Helping you strengthen your </span><span class=" font-bold">memory</span>
          </li>
        </ul>

        <ul class=" lst-kix_3ydq7y3f71fk-0">
          <li class="  li-bullet-0"><span>Sharpen your thinking and </span><span
              class="font-bold">focus</span><span>&hellip;</span></li>
        </ul>

        <ul class=" lst-kix_3ydq7y3f71fk-0">
          <li class="  li-bullet-0"><span>And increase </span><span class="font-bold">mental
              energy</span><span>&nbsp;and boost your </span><span class="font-bold">mood</span><span>. </span></li>
        </ul>
      </div>
      <p><span>With this, you&rsquo;ll feel so much healthier, and more energized and happy.</span>
      </p>

      <p><span>And it can be much easier to be active and&nbsp;productive&hellip;</span></p>

      <p><span>And get in great shape.</span></p>

      <p><span>In fact, I think you&rsquo;ll love Total Brain Boost so&nbsp;much&hellip;</span></p>

      <p><span>You&rsquo;ll see it as essential to your health.</span></p>

      <p><span>It might even feel as important as brushing your teeth every morning. </span></p>

      <p><span>And if you get used to the results:</span></p>

      <div class="my-5">
        <ul class=" lst-kix_vhcb0jjjy2ct-0 start">
          <li class="  li-bullet-0"><span>The </span><span class="font-bold">stronger
              memory</span><span>&hellip;</span>
          </li>
        </ul>

        <ul class=" lst-kix_vhcb0jjjy2ct-0">
          <li class="  li-bullet-0"><span>The </span><span class="font-bold">clearer
              thinking</span><span>&hellip;</span>
          </li>
        </ul>

        <ul class=" lst-kix_vhcb0jjjy2ct-0">
          <li class="  li-bullet-0"><span>The </span><span class="font-bold">sharper focus </span><span>and increased
              mental energy&hellip;</span></li>
        </ul>
      </div>
      <h2 class="text-center font-semibold text-xl md:text-3xl mb-2">You&rsquo;ll Feel So <span
          class="font-bold">Good</span><span>&nbsp;</span></h2>
      <h2 class="text-center font-semibold text-xl md:text-3xl mb-4">You&rsquo;ll Want To Stay Like This <span
          class="font-bold">Forever</span></h2>


      <p><span>Which is why you&rsquo;ll want to take Total Brain Boost not just for one month or a
          few months&hellip; </span></p>

      <p><span>But ideally for 6-12 months or longer for </span><span class=" font-bold">the longest-lasting
          results.</span></p>

      <p><span>Think of Total Brain Boost as an essential part of your new active and healthy
          lifestyle.</span></p>

      <p><span>And something you take each day </span><span class="font-bold">to stay sharp</span><span>&nbsp;- just
          as
          you would a multivitamin. </span></p>

      <p><span>Because like an expensive car, your brain functions best when it gets only </span><span
          class="font-bold">premium&nbsp;fuel</span><span>. </span></p>

      <p><span>The ingredients in Total Brain Boost are that premium fuel.</span></p>

      <h2 class="text-center font-semibold text-xl md:text-3xl mb-4">And You Want To Keep Taking Total Brain
        Boost&nbsp;Daily To Help Your Mind Stay Sharp, Focused, Energetic, And Healthy&hellip; For Years To&nbsp;Come
      </h2>

      <p><span>One study</span><sup><a href="#ftnt1" id="ftnt_ref1">[1]</a></sup><span>&nbsp;showed
          that when people were taking just one of the nutrients in Total Brain Boost daily for 18
          months&hellip;</span>
      </p>

      <p><span>Their memory continued to improve over that entire period of time:</span></p>

      <div class="flex justify-center">
        <img class="w-full md:w-2/3 mx-auto" alt=""
          src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/curcumin-graph.jpg" title="" loading="lazy">
      </div>

      <p><span>Which means taking Total Brain Boost long term is most likely</span><span class="font-bold">&nbsp;the
          best way to achieve longer-lasting results</span><span>.</span></p>

      <p><span>And most of the studies I showed you on these ingredients are done over a longer period
          of 3 to 6 months &hellip; which led participants to see significant results.</span></p>

      <h2 class="text-center font-semibold text-xl md:text-3xl mb-0">These Longer Regimens&nbsp; </h2>
      <h2 class="text-center font-semibold text-xl md:text-3xl mb-4">Will Give You The <span
          class="font-bold">Longest-Lasting&nbsp;Results</span></h2>

      <p><span>Now, I know there was a strict limit on the amount of Total Brain Boost you could order
          on the previous page&hellip; </span></p>

      <p><span>You were limited to just </span><span class="hi ">a 6-month supply.</span></p>

      <p><span>So to help you achieve </span><span class="font-bold">longer-lasting</span><span>&nbsp;goals</span></p>

      <p><span>I&rsquo;ve asked Revival Point to do something special&nbsp;here</span></p>

      <p><span>Because you&rsquo;re a new customer&hellip;</span></p>

      <p><span>And you&rsquo;ve shown interest in improving your&nbsp;health</span></p>

      <p><span>I&rsquo;ve asked that, in order to help you succeed&hellip;</span></p>

      <p><span>Revival Point give you a special, one-time discount on this page today so you can buy
          extra bottles of Total Brain Boost and take it long term</span></p>

      <h2 class="text-center font-semibold text-xl md:text-3xl mb-4">Get An Additional 6 or 12 Month Supply of Total
        Brain Boost At A
        <span class="font-bold">Highly Discounted</span>&nbsp;Rate&hellip;
      </h2>

      <p><span>On the previous page and on the Revival Point website, one bottle of Total Brain Boost
          costs&nbsp;$19.98. </span></p>

      <p><span>But because you&rsquo;re a new customer today&hellip; </span></p>

      <p><span class="">You&rsquo;re going to pay just <span class="text-red-600 font-semibold">$16.42</span>&nbsp;per
          bottle for a six month supply of
          Total Brain Boost.</span></p>

      <p><span class="">That&rsquo;s a <span class="text-red-600 font-semibold">45%</span>&nbsp;discount.</span></p>

      <p><span class="">And a <span class="text-red-600 font-semibold">$162.70</span>&nbsp;total
          savings.</span></p>

      <p><span>And if you get the 12 month supply you&rsquo;ll pay just <span
            class="text-red-600 font-semibold">$14.46</span>&nbsp;per bottle&hellip; </span></p>

      <p><span>That&rsquo;s <span class="text-red-600 font-semibold">52%</span>&nbsp;off and a <span
            class="text-red-600 font-semibold">$372.40</span>&nbsp;total savings.</span></p>

      <p><span>These deeply-discounted packages are designed to ensure you have the best chance at
          long-lasting results with Total Brain Boost&hellip;</span></p>

      <p><span>And so you can stock up to make sure you don&rsquo;t run out</span></p>

      <p><span>There is no need to worry if these bottles will&nbsp;expire</span></p>

      <p><span>They are guaranteed to stay fresh for a minimum of two years without any special storage or
          refrigeration needed.</span></p>

      <p><span>Just place them in any cabinet or anywhere at room temperature away from direct
          sunlight.</span></p>

      <p><span>However&hellip; </span></p>

      <h2 class="text-center font-semibold text-xl md:text-3xl mb-4">There&rsquo;s Just<span
          class="font-bold">&nbsp;One&nbsp;Catch</span>&hellip;</h2>

      <p><span>Which is, Revival Point doesn&rsquo;t want too many people finding out about it.
        </span></p>

      <p><span>So I&rsquo;ll politely ask you to please not mention this anywhere online. </span></p>

      <p><span>Because I don&rsquo;t want tons of men and women calling Revival Point customer
          service&hellip; </span></p>

      <p><span>Saying they heard about some way to get Total Brain Boost cheaper&hellip; </span></p>

      <p><span>Revival Point is only offering this </span><span class="font-bold">one-time
          discount</span><span>&nbsp;to
          you right now because:</span></p>

      <p><span>I know you&rsquo;re serious about boosting your memory and focus. &nbsp;</span></p>

      <p><span>And I want to make sure you have </span><span class=" font-bold">the best opportunity for long-term
          results</span></p>

      <p><span>And you&rsquo;re only getting access to this discount right now while you&rsquo;re on
          this page.</span></p>

      <p><span>Again, it will only be available on this page right here, right now.</span></p>

      <h2 class="text-center font-semibold text-xl md:text-3xl mb-0">Once You Leave This Page,</h2>
      <h2 class="text-center font-semibold text-xl md:text-3xl mb-4">This Deal Will Be<span
          class=" font-bold">&nbsp;Gone For Good</span></h2>

      <p><span>You cannot email, call, or visit any other web page to get this discount again.</span>
      </p>

      <p><span>And if you go to the Revival Point website you&rsquo;ll see Total Brain Boost for sale
          at full price.</span></p>

      <p><span>Which is more than twice the price that you&rsquo;ll pay per bottle on this page if you buy the
          largest package. </span></p>

      <div class="flex justify-center">
        <img class="w-full mx-auto mb-4" alt="product page"
          src="//<?= $_SERVER['HTTP_HOST']; ?>/images/upsell1/product-page.webp" title="" loading="lazy">
      </div>

      <p><span>All you need to do now is </span><span class="font-bold">click the button below to see
          if you
          qualify</span><span>&nbsp;for your additional discount.</span></p>

      <!-- wrap for float button scroll to -->
      <div id="scroll-to-cta">    
      <div id="qualify-wrap" class="w-full">
        <div class="flex flex-col justify-center items-center border border-4 fs-green p-3 md:py-5 mb-5">

          <button id="qualify-btn" class="mx-auto cta-button clickable w-full md:w-auto text-3xl md:text-4xl py-2"
            style="padding: 15px 40px;">See If You Qualify...</span></button>
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
          <div class="flex flex-col justify-center items-center border border-4 fs-green p-4 md:py-5 mb-5">
            <div class="w-full">
              <h2 id="cta"
                class="flex justify-center font-bold text-center text-blue text-3xl md:text-5xl uppercase mb-0">
                Congratulations!</h2>
              <p class="flex justify-center text-center mb-6 text-tygreen text-base md:text-2xl mt-0">You Qualify For
                This Exclusive Discount of Total Brain Boost</p>
              <div class="gap-4 columns-1 md:columns-2">
                <div class="flex flex-col text-center justify-center mb-6 md:mb-0">

                  <!-- to space the second column -->
                  <div class="hidden md:block" style="width: 100%; height:20px"></div>
                  <p class="title font-semibold text-lg md:text-2xl">So you'll get a 6-month supply <br> for just
                    $<?= $product1['product_price']; ?> Today!</p>

                  <p class="sales-tax"><?= $tax_msg; ?></p>
                  <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?pid=<?= $product1['product_id']; ?>&buy=1&next=<?= $nextlink; ?>"
                    class="w-full" style="text-decoration: none;">
                    <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes!
                      I'll Take It</button>
                  </a>
                  <p class="whop text-blue mt-2 font-semibold">That's <span class="underline">45% OFF</span> the
                    retail price!</p>
                </div>
                <div class="flex w-full border-b mb-4 md:hidden"></div>
                <div class="flex flex-col text-center justify-center">
                  <div class="sub-title">Even Bigger Discount (Limited Time Only)</div>
                  <p class="title font-semibold text-lg md:text-2xl">Get a <?= $product2['product_month']; ?>-month
                    supply <br> for just $<?= $product2['product_price']; ?> Today!</p>

                  <p class="sales-tax"><?= $tax_msg; ?></p>
                  <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?pid=<?= $product2['product_id']; ?>&buy=1&next=<?= $nextlink; ?>"
                    class="w-full" style="text-decoration: none;">
                    <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes!
                      I'll Take It</button>
                  </a>
                  <p class="whop text-blue mt-2 font-semibold">That's <span class="underline">52% OFF</span> the
                    retail price!</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- end expand-content -->


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

      <p><span>Just click the button below and grab this deal while it&rsquo;s still available on this page.</span>
      </p>

      <div id="second-qualify-wrap" class="w-full">
        <div class="flex flex-col justify-center items-center border border-4 fs-green p-3 md:py-5 mb-5">

          <button id="second-qualify-btn"
            class="mx-auto cta-button clickable w-full md:w-auto text-3xl md:text-4xl py-2"
            style="padding: 15px 40px;">See If You Qualify...</span></button>
          <div class="s-light-grey" style="background-color: transparent; width:70%; margin: 0 auto;">
            <div id="second-progress-bar" class="green" style="height:10px;width:0;background-color:#40A900;"></div>
          </div>
        </div>
      </div>

      <!-- SECURE ORDER CONTENT -->
      <!-- SECURE ORDER CONTENT -->
      <!-- SECURE ORDER CONTENT -->
      <div id="second-expand-content" class="hidden">

        <div class="w-full">
          <div class="flex flex-col justify-center items-center border border-4 fs-green p-4 md:py-5 mb-5">
            <div class="w-full">
              <h2 id="second-cta"
                class="flex justify-center font-bold text-center text-blue text-3xl md:text-5xl uppercase mb-0">
                Congratulations!</h2>
              <p class="flex justify-center text-center mb-6 text-tygreen text-base md:text-2xl mt-0">You Qualify For
                This Exclusive Discount of Total Brain Boost</p>
              <div class="gap-4 columns-1 md:columns-2">
                <div class="flex flex-col text-center justify-center mb-6 md:mb-0">

                  <!-- to space the second column -->
                  <div class="hidden md:block" style="width: 100%; height:20px"></div>
                  <p class="title font-semibold text-lg md:text-2xl">So you’ll get a 6-month supply <br> for just
                    $<?= $product1['product_price']; ?> Today!</p>

                  <p class="sales-tax"><?= $tax_msg; ?></p>
                  <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?pid=<?= $product1['product_id']; ?>&buy=1&next=<?= $nextlink; ?>"
                    class="w-full" style="text-decoration: none;">
                    <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes!
                      I'll Take It</button>
                  </a>
                  <p class="whop text-blue mt-2 font-semibold">That's <span class="underline">45% OFF</span> the
                    retail price!</p>
                </div>
                <div class="flex w-full border-b mb-4 md:hidden"></div>
                <div class="flex flex-col text-center justify-center">
                  <div class="sub-title">Even Bigger Discount (Limited Time Only)</div>
                  <p class="title font-semibold text-lg md:text-2xl">Get a <?= $product2['product_month']; ?>-month
                    supply <br> for just $<?= $product2['product_price']; ?> Today!</p>

                  <p class="sales-tax"><?= $tax_msg; ?></p>
                  <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?pid=<?= $product2['product_id']; ?>&buy=1&next=<?= $nextlink; ?>"
                    class="w-full" style="text-decoration: none;">
                    <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes!
                      I'll Take It</button>
                  </a>
                  <p class="whop text-blue mt-2 font-semibold">That's <span class="underline">52% OFF</span> the
                    retail price!</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- end expand-content -->


      <p><span>Once you leave this page, this deal will be gone for good.</span></p>

      <p><span>So make sure you are stocked up on Total Brain Boost.</span></p>

      <p><span>And make sure you take Total Brain Boost for the recommended </span><span class="hi ">6 or 12
          month</span><span>&nbsp;regimen for </span><span class="font-bold">the longest-lasting
          results</span><span>.</span></p>

      <p><span>Just click the button below and see if you qualify for your additional discount
          now.</span></p>

      <p><span>I can&rsquo;t wait to hear about the positive changes I hope you experience. </span></p>
    </div>
  </div>

  <div id="third-qualify-wrap" class="w-full">
    <div class="flex flex-col justify-center items-center border border-4 p-3 md:py-5 fs-green">
      <div class="text-center text-2xl md:text-3xl font-semibold md:w-4/5">Click The Button Below Now To See If You
        Qualify For This Discount</div>
      <button id="third-qualify-btn" class="mx-auto cta-button clickable w-full md:w-auto text-3xl md:text-4xl py-2"
        style="padding: 15px 40px;">See If You Qualify...</span></button>
      <div class="t-light-grey" style="background-color: transparent; width:70%; margin: 0 auto;">
        <div id="third-progress-bar" class="green" style="height:10px;width:0;background-color:#40A900;"></div>
      </div>
    </div>
  </div>





  <!-- SECURE ORDER CONTENT -->
  <!-- SECURE ORDER CONTENT -->
  <!-- SECURE ORDER CONTENT -->
  <div id="third-expand-content" class="hidden">

    <div class="w-full">
      <div class="flex flex-col justify-center items-center border border-4 fs-green p-4 md:py-5 mb-5">
        <div class="w-full">
          <h2 id="cta" class="flex justify-center font-bold text-center text-blue text-3xl md:text-5xl uppercase mb-0">
            Congratulations!</h2>
          <p class="flex justify-center text-center mb-6 text-tygreen text-base md:text-2xl mt-0">You Qualify For This
            Exclusive Discount of Total Brain Boost</p>
          <div class="gap-4 columns-1 md:columns-2">
            <div class="flex flex-col text-center justify-center mb-6 md:mb-0">

              <!-- to space the second column -->
              <div class="hidden md:block" style="width: 100%; height:20px"></div>
              <p class="title font-semibold text-lg md:text-2xl">So you’ll get a 6-month supply <br> for just
                $<?= $product1['product_price']; ?> Today!</p>

              <p class="sales-tax"><?= $tax_msg; ?></p>
              <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?pid=<?= $product1['product_id']; ?>&buy=1&next=<?= $nextlink; ?>"
                class="w-full" style="text-decoration: none;">
                <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes!
                  I'll Take It</button>
              </a>
              <p class="whop text-blue mt-2 font-semibold">That's <span class="underline">45% OFF</span> the retail
                price!</p>
            </div>
            <div class="flex w-full border-b mb-4 md:hidden"></div>
            <div class="flex flex-col text-center justify-center">
              <div class="sub-title">Even Bigger Discount (Limited Time Only)</div>
              <p class="title font-semibold text-lg md:text-2xl">Get a <?= $product2['product_month']; ?>-month supply
                <br> for just $<?= $product2['product_price']; ?> Today!
              </p>

              <p class="sales-tax"><?= $tax_msg; ?></p>
              <a href="//<?php echo $_SERVER['HTTP_HOST'];?>/process-up.php?pid=<?= $product2['product_id']; ?>&buy=1&next=<?= $nextlink; ?>"
                class="w-full" style="text-decoration: none;">
                <button class="cta-button mx-auto clickable w-full md:w-auto text-2xl md:text-3xl py-2 btn-2">Yes!
                  I'll Take It</button>
              </a>
              <p class="whop text-blue mt-2 font-semibold">That's <span class="underline">52% OFF</span> the retail
                price!</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- closing div for float button scroll to wrap  -->
  </div>

  <!-- end expand-content -->
  <div class="flex flex-col items-center justify-center w-full md:w-3/4 mx-auto mt-11">
    <div id="wsl-btn" class="p-4 border-2 clickable hover:bg-gray-100 mb-4 rounded-lg">
      Skip This - I understand I will NOT get access to this one-time deal again.
    </div>
    <div class="text-sm text-center mb-4 w-4/5">Please remember that once you leave this page, this deal is gone for
      good, you cannot call or email to get this deal again.</div>
    <div class="font-semibold text-center text-gray-500 mb-4">FREE Shipping on this order upgrade</div>
    <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/images/90-day-icon.png" alt="90 day guarantee" style="width:120px;">
  </div>

  </div>
  </div>

  <?php
    $button_text = 'Yes, Give Me This Now!';
    $scroll_start = 'start-float-btn';
    $scroll_id = 'scroll-to-cta';
    $top_content = '';
    floatButton('includes/floatButton',$top_content,$button_text,$scroll_start,$scroll_id);
  ?>

  <script>
  const wslBtn = document.getElementById('wsl-btn');
  wslBtn.addEventListener('click', () => {
    window.location = '<?= $nextlink; ?>';
  })

  const qualifyButton = document.getElementById('qualify-btn');
  const qualifyWrap = document.getElementById('qualify-wrap');
  const buy = document.getElementById('container-buy');
  const progress = document.getElementById('progress-bar');
  const expandContent = document.getElementById('expand-content');
  qualifyButton.addEventListener('click', () => {
    qualifyButton.classList.add('disable');
    document.querySelector('.light-grey').style.backgroundColor = '#e1e1e1';
    progress.classList.add('grow');

    setTimeout(() => {
      qualifyWrap.style.display = 'none';
      expandContent.style.display = 'block';
    }, "1000")
  })
  </script>
  <script>
  const qualifyButtonSecond = document.getElementById('second-qualify-btn');
  const qualifyWrapSecond = document.getElementById('second-qualify-wrap');
  const buySecond = document.getElementById('second-container-buy');
  const progressSecond = document.getElementById('second-progress-bar');
  const expandContentSecond = document.getElementById('second-expand-content');
  qualifyButtonSecond.addEventListener('click', () => {
    qualifyButtonSecond.classList.add('disable');
    document.querySelector('.s-light-grey').style.backgroundColor = '#e1e1e1';
    progressSecond.classList.add('grow');

    setTimeout(() => {
      qualifyWrapSecond.style.display = 'none';
      expandContentSecond.style.display = 'block';
    }, "1000")
  })
  </script>
  <script>
  const qualifyButtonThird = document.getElementById('third-qualify-btn');
  const qualifyWrapThird = document.getElementById('third-qualify-wrap');
  const buyThird = document.getElementById('third-container-buy');
  const progressThird = document.getElementById('third-progress-bar');
  const expandContentThird = document.getElementById('third-expand-content');
  qualifyButtonThird.addEventListener('click', () => {
    qualifyButtonThird.classList.add('disable');
    document.querySelector('.t-light-grey').style.backgroundColor = '#e1e1e1';
    progressThird.classList.add('grow');

    setTimeout(() => {
      qualifyWrapThird.style.display = 'none';
      expandContentThird.style.display = 'block';
    }, "1000")
  })
  </script>
  <script>
  function scrollToId(id) {
    const scrollElement = document.getElementById(id);
    scrollElement.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  }
  </script>

  <?php template("includes/rpFooter"); ?>



  <div class="flex flex-col justify-center items-center text-sm py-4" style="margin-bottom: 80px">
    <div class="text-lg mb-2 font-semibold">CITATIONS</div>
    <ol class="num-list citations">
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
    </ol>
  </div>

  <?php if ($site['debug'] == true) {
      // Show Debug bar only on whitelisted domains.
      template('debug', null, null, 'debug');
  } ?>
</body>

</html>