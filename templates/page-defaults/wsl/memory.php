<?php
  $nextlink = $nextlink = '/checkout/order' . $querystring;
  $_SESSION['pageType'] = 'wsl';
?>

<html lang="en">

<head>
  <?php template('includes/header'); ?>
  <title>This Secret Boosts Your Memory And Focus</title>
  <style type="text/css">
    .wsl p, h1, h2 {
      margin-bottom: 20px;
    }

    .wsl h1, .wsl h2 {
      font-weight: 600;
      scroll-margin-top: 60px;
    }

    .wsl h1 {
      font-size: 34px;
    }
    .wsl h2 {
      font-size: 22px;
    }
    .wsl p {
      font-size:18px;
    }
    @media screen and (min-width: 769px) {
      .wsl p {
        font-size: 20px;
      }
      .wsl h1 {
        font-size: 54px;
      }
      .wsl h2 {
        font-size: 32px;
      }
    }

    .wsl li {
      list-style: none;
      padding: 10px 30px;
      background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/check-green.png');
      background-repeat: no-repeat;
      background-position: left center;
      background-size: 20px;
    }

    .table-contents {
      flex-direction: column;
      position: fixed;
      left: calc(50vw - 550px);
      top: 64px;
      width: 150px;
      font-size: 12;
    }

  .table-contents ul li {
    list-style: auto;
    padding: 5px 0;
    padding-left: 0.25rem;
    margin-left: 0.5rem;
    background-image: none;
  }

  </style>
</head>

<body class="bg-gray-100">
  <?php
  $container = 'container-vsl';
  ?>
  <?php template("includes/rpHeader"); ?>

  <div class="wsl container-vsl mx-auto my-2 bg-white border-2 p-4 md:p-8 mt-6 mb-11 rounded-lg text-gray-600" style="position:relative">

  <div class="table-contents rounded flex flex-column bg-white shadow border hidden lg:flex">
    <div class="header bg-rpblue text-white font-semibold p-2 rounded-t">IN THIS ARTICLE</div>
    <ul class="p-3">
      <li class="clickable" onclick="scrollToId('memory-loss')">New Memory Loss Study</li>
      <li class="clickable" onclick="scrollToId('super-agers')">The Secret To Razor Sharp Memory</li>
      <li class="clickable" onclick="scrollToId('brain-decline')">Brain Health Discovery</li>
      <li class="clickable" onclick="scrollToId('nutrients')">6 Nutrients for Better Memory</li>
      <li class="clickable" onclick="scrollToId('powerful-formula')">The Most Powerful Brain Boosting Formula </li>
    </ul>
  </div>

  <h1 class="text-3xl md:text-5xl text-tygreen leading-6 title">This Indian &ldquo;Super-Ager&rdquo; Secret Boosts Your Memory And Focus, Keeping You Razor Sharp Well Into Your 70s, 80s and&nbsp;90s&hellip;</h1>
  <div class="text-xl md:text-2xl text-rpblue font-semibold mb-4 md:mb-6" >While Helping to Fight Off Memory Loss And Brain Decline As You&nbsp;Age&hellip; </div>
  <picture class="flex justify-center mb-4">
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/lady-hands.avif" type="image/avif">
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/lady-hands.jpg" alt="lady face in hands">
  </picture>


  <p>If you are finding it more difficult to recall simple things&mdash;names of friends and coworkers, words and important dates, even how to perform basic tasks that once came easily&hellip; </p>

  <p><span class="font-semibold">You are not alone.</span>&nbsp;According to experts, memory decline it now worse amount adults than at any point in recorded history&hellip; </p>

  <p>And yet <span class="font-semibold">82% of Americans are aware of this or think it&#39;s just part of &ldquo;normal aging&rdquo;. </p>

  <p>But this &ldquo;mental crisis&rdquo; &nbsp;is far from normal and experts say these &ldquo;forgetful moments&rdquo; are the first warning sign of much more serious metal issues to come and even death&hellip;</p>

  <h2 id="memory-loss" class="text-2xl md:text-4xl text-rpblue mb-4 leading-9 title text-center md:text-left mt-6 md:mt-11">1 in 3 Seniors Dies From Some Form of Memory&nbsp;Loss</h2>

  <div>
    <p>Surveys show it&rsquo;s <span class="font-semibold">the scariest condition facing mankind today.</span>&nbsp;We not only lose our identity and independence, but become a burden to our loved ones.</p>
    <p>Imagine being unable to feed yourself or use the bathroom without help. Losing your train of thought every minute, unable to remember people&rsquo;s names of what your wife, children and friends told you even just an hour earlier&hellip;</p>
    <p>Imagine ending up a vegetable in a wheelchair&hellip; or dying alone and afraid in a nursing home with no idea where you are, how you got there or who anyone around you is&hellip; terrified and confused&hellip;</p>
    <picture class="float-right md:ml-4 mb-3 w-full md:w-1/2">
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/hospital-bed.avif" type="image/avif">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/hospital-bed.jpg" alt="doctor hospital bed" loading="lazy">
    </picture>
    <p>This horrifying scenario is becoming more and more likely for Americans as brain&nbsp;health-related conditions and deaths skyrocket&hellip; </p>
    <p>Brain conditions are now <span class="font-semibold">the 6th leading cause of death in the U.S., killing 1 out of 3 seniors every year. </p>
    <p>But one well-known Florida medical doctor might have found a solution to help&hellip;</p>
    <div style="clear:both"></div>
  </div>

  <h2 id="super-agers" class="text-2xl md:text-4xl text-rpblue mb-4 leading-9 title text-center md:text-left mt-6 md:mt-11">Indian &ldquo;Super Agers&rdquo; Might Unlock The Secret To Razor Sharp Memory At Any Age</h2>

  <p>Dr. Steven Masley, MD traveled to India to help treat the poor and underprivileged. Here he discovered a group of &ldquo;Super Agers&rdquo;&mdash;<span class="font-semibold">men and women whose memory and focus was razor sharp into their 70s, 80s and even 90s.&nbsp;</p>

  <p>He also found India&rsquo;s rates of brain decline are remarkably low compared to the United States, despite India being a much poorer country and with much worse health care.</p>

  <div>
    <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/basil-ginger-cumin.avif" type="image/avif">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/basil-ginger-cumin.jpg" alt="herbal ingredients" class="float-left md:mr-4 mb-3 w-full md:w-1/2" loading="lazy">
    </picture>
    <p>He found the source of their mental powers hidden in a drink that almost all Indian people drink daily, called Golden Milk.</p>
    <p>Golden Milk contains a nutrient called curcumin that boost memory, mood and attention by reducing inflammation in the brain. </p>
    <p>However, Dr. Masley found the human body cannot absorb curcumin without help...</p>
    <div style="clear:both"></div>
  </div>
  


  <h2 id="brain-decline" class="text-2xl md:text-4xl text-rpblue mb-4 leading-9 title text-center md:text-left mt-6 md:mt-11">The Discovery of A Radical New Weapon Against Chronic Brain&nbsp;Decline</h2>

  <p>After extensive research with Dr. Masley, Revival Point found a powerful, patented Curcumin extract called <span class="font-semibold">CurcuRouge&reg;&nbsp;<span class="font-semibold">Bio-Optimized Curcumin&nbsp;that is absorbed 93 times better by the body&hellip; </p>

  <p>Thanks to <span class="font-semibold">its unique &ldquo;polymer matrix&rdquo; technology,</span> CurcuRouge&reg; is able to cross the blood-brain barrier and deliver curcumin&rsquo;s health-boosting directly to your brain to help fight memory loss, brain fog and depression.</p>

  <p>CurcuRouge&reg; Bio-Optimized Curcumin is able to help improve cognitive function by: </p>

  <ul class="start my-4 list-disc list-inside text-gray-600 pl-3 md:pl-6">
    <li class="font-semibold">Decreasing toxic buildup in the brain</li>
    <li class="font-semibold">Reducing brain inflammation </li>
    <li class="font-semibold">Protecting your brain from oxidative stress </li>
    <li class="font-semibold">Increasing production of a brain hormone that can rebuild brain cells</li>
    <li class="font-semibold">Boosting overall mental energy and brain function</li>
  </ul>
  <p class="1"></p>
  <p>That means a sharper mind, stronger memory, more mental energy, and a better mood&hellip; <span class="font-semibold">so you can enjoy a vibrant, happy, independent life for years to come.&nbsp;</p>

  <p>But Revival Point didn&rsquo;t stop there&hellip; </p>

  <picture class="flex justify-center">
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/dr-computer.avif" type="image/avif">
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/dr-computer.jpg" alt="doctors research" loading="lazy">
  </picture>



  <h2 id="nutrients" class="text-2xl md:text-4xl text-rpblue mb-4 leading-9 title text-center md:text-left mt-6 md:mt-11">Plus These 5 Brain-Boosting Nutrients Make CucuRouge&reg;&nbsp;Even More Powerful</h2>

  <p>With Dr. Masley&rsquo;s help, Revival Point conducted extensive research into brain health, looking at the best scientific journals and clinical studies around the world. </p>

  <div>
    <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/grapes-wine.avif" type="image/avif">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/grapes-wine.jpg" alt="grapes and wine" class="float-left md:mr-4 mb-3 w-full md:w-1/2" loading="lazy">
    </picture>
    <p>They found that <span class="font-semibold">Trans-Resveratrol</span>&mdash;a polyphenol found in Red Wine&mdash;boosts circulation in the brain, flooding brain cells with the oxygen-rich blood they need for optimal function. </p>
    <p>And that <span class="font-semibold">Magnesium BisGlycinate</span>&nbsp;restores signaling speed for sharper thinking and faster memory recall. </p>
    <p>And that <span class="font-semibold">Vitamins B12, D</span>, and<span class="font-semibold">&nbsp;Folate</span>&nbsp;form an essential vitamin complex for boosting energy metabolism and fighting cognitive decline. </p>
    <p>They combined all these ingredients together to create a powerful formula that boosts brain health with a multi-pronged approach&hellip;</p>
    <div style="clear:both"></div>
  </div>
  

  <h2 id="powerful-formula" class="text-2xl md:text-4xl text-rpblue mb-4 leading-9 title text-center md:text-left mt-6 md:mt-11">Total Brain Boost&reg;: A Powerful Formula Using 6 Best, Scientifically-Backed Brain-Boosting Nutrients Known To Man</h2>

  <p>The researchers at Revival Point created this powerful formula because they couldn&rsquo;t find anything else on the market that contained all of these ingredients in the exact ratios known to be more effective - including patented absorbable curcumin.</p>

  <div>
    <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/age-couple.avif" type="image/avif">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/age-couple.jpg" alt="couple relationship" class="float-right md:ml-4 mb-3 w-full md:w-1/2" loading="lazy">
    </picture>
    <p>
    <span class="font-semibold">Total Brain Boost&reg; by Revival Point&nbsp;</span>is the first, and only, brain health supplement of its kind to combine these 6 powerful ingredients, all backed by double-blind placebo-controlled studies.
    </p>
    <p>All with the help of a world-renowned medical doctor, this revolutionary, one-of-a-kind formula is designed to boost brain health at any age.</p>
    <p>If you&rsquo;re suffering from memory issues, this is your chance to try something truly revolutionary. Plus, with the added benefit of our 
      <span class="font-semibold">90-day money-back guarantee</span>, your only risk is <span class="font-semibold">better memory.</span>&nbsp;
    </p>
    <p>Click below to start your journey to better brain health today.</p>
    <div style="clear:both"></div>
  </div>

  <div class="flex justify-center my-4">
    <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2" style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
  </div>


  <div class="mt-4 ml-8 flex flex justify-center italic">
    <ul class="list-disc text-gray-600">
      <li><!--<img class="inline" src="//<?= $_SERVER['HTTP_HOST'];?>/images/check-green.png"> -->Try It Risk-Free With Revival Point&#39;s 90-Day Money-Back Guarantee</li>
      <li><!--<img class="inline" src="//<?= $_SERVER['HTTP_HOST'];?>/images/check-green.png"> -->97% Said They Would Purchase Again</li>
    </ul>
  </div>

  <div class="flex justify-center mt-4">
    <img class="w-full md:w-2/3" src="//<?= $_SERVER['HTTP_HOST'];?>/images/sec-icons-new.png" style="max-width: 600px" alt="security icons">
  </div>

</div>
<?php template("includes/rpFooter"); ?>
<?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>

<script>
  const wslBtn = document.getElementById('wsl-btn');
  wslBtn.addEventListener('click', ()=> {
    window.location = '<?= $nextlink; ?>';
  })

  function scrollToId(id) {
    document.getElementById(id).scrollIntoView({behavior: "smooth"});
  }
</script>
</body>

</html>