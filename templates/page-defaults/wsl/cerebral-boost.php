<?php
  $nextlink = $nextlink = '/checkout/order' . $querystring;
  $_SESSION['pageType'] = 'wsl';
?>

<html lang="en">

<head>
  <?php template('includes/header'); ?>
  <style type="text/css">
  .wsl p,
  h1,
  h2 {
    margin-bottom: 20px;
  }

  .wsl h1,
  .wsl h2 {
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
    background-image: url('//<?= $_SERVER['HTTP_HOST']; ?>/images/check-green.png');
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 20px;
  }

  .wsl li.red-x {
    background-image: url('//<?= $_SERVER['HTTP_HOST']; ?>/images/red-x.png');
  }

  .wsl li.arrow-right {
    background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/arrow-right.png');
 }

 .wsl li.basic {
   background-image: none;
   list-style: initial;
   padding-left: 15px;
 }

  .table-contents {
    flex-direction: column;
    position: fixed;
    left: calc(50vw - 550px);
    top: 64px;
    
    font-size: 12;
  }

  .table-contents ul li {
    list-style: auto;
    padding: 5px 0;
    padding-left: 0.25rem;
    margin-left: 0.5rem;
    background-image: none;
  }

  .font-bold {
    font-weight: bold;
  }
  </style>
</head>

<body class="bg-gray-100">

  <?php 
  $container = 'container-vsl';
  template("includes/rpHeader"); ?>

  <div class="wsl container-vsl mx-auto my-2 bg-white border-2 p-4 md:p-8 mt-6 mb-11 rounded-lg text-gray-600"
    style="position:relative">

    <h1 class="text-3xl md:text-5xl text-tygreen leading-6 title" id="h.gjdgxs">This Florida MD&rsquo;s 20-Second
      <span class="font-bold">&ldquo;Cerebral Boost&rdquo;</span> Strengthens Your Memory
        And Focus, Keeping You Razor Sharp Well Into Your 50s, 60s, 70s, and even&nbsp;80s&hellip;</h1>


    <h3 class="text-center text-lg md:text-2xl mb-4 md:mb-8" id="h.30j0zll"><span>While Helping To Fight Off Memory
        Loss, Brain Fog, And Cognitive Decline
        At The Source</span><span>&hellip; </span></h3>

    <picture>
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image37.jpg" type="image/jpg">
      <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image37.png"
        style="  " class="md:ml-4 mb-3 w-full mx-auto" title="">
    </picture>


    <div class="pt-4">
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image16.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image16.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>Hi, I&rsquo;m </span><span class="font-bold">Dr. Steven Masley</span><span class="font-bold">,
        </span><span class="  font-bold">MD, FAHA, FACN, CNS</span><span class="font-bold">&nbsp;</span></p>


      <p><span>Today I&rsquo;m going to share my </span><span class=" font-bold">breakthrough
          method</span><span>&nbsp;to boost your memory, focus,</span><span>&nbsp;</span><span>and
          help you feel sharper at any age&hellip; </span></p>


      <p><span>I call it my </span><span class="font-bold">&ldquo;Cerebral Boost&rdquo; Method</span><span>.
        </span></p>


      <p><span>It takes just 20 seconds&hellip; and it&#39;s fast and easy to do.</span></p>


      <p><span>I developed it at my clinic in St Petersburg, Florida&hellip;</span></p>

      <div style="clear:both"></div>
    </div>


    <p><span>Where I&rsquo;ve seen firsthand how it has </span><span class="font-bold">completely
        transformed</span><span>&nbsp;my life for the better and the lives of my patients as well:</span></p>


    <ul class="p-3 lst-kix_list_11-0 start">
      <li class="   li-bullet-0"><span>Helping us remember names, people, places, and things better
          &hellip;</span></li>

      <li class="   li-bullet-0"><span>Sharpening our </span><span class="font-bold">focus</span><span>&hellip; to get
          more done in less time&hellip; </span></li>

      <li class="   li-bullet-0"><span>And helping us feel </span><span class="font-bold">more confident, able, and
          energized</span><span>&hellip; &nbsp;</span></li>
    </ul>


    <p><span>This </span><span class="font-bold">simple</span><span>&nbsp;method works by activating a </span><span
        class="font-bold">very</span><span>&nbsp;</span><span class="font-bold">specific</span><span>&nbsp;part of the
        brain that has
        the biggest impact when it comes to memory, brain</span><span>&nbsp;function, </span><span>and
        focus&hellip;</span></p>


    <p><span>And I believe boosting this area of the brain is one of the most important things you
        can do for your happiness, mental edge, and even your overall health in many ways&hellip; </span></p>


    <p><span>I&rsquo;ve seen how it can turn someone who feels forgetful, sluggish, and weighed down&hellip;
      </span></p>


    <p><span>Into a more </span><span class="font-bold">vibrant, mentally sharper, and
        happier</span><span>&nbsp;version of themselves.</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.1fob9te">
      <span>And The Best Part Is, This </span><span>&ldquo;Cerebral Boost&rdquo; Method
      </span><span>Is Completely Natural And Starts Working Almost Instantly&hellip; </span>
    </h2>
    <p><span class="font-bold">And it </span><span class=" font-bold">doesn&rsquo;t</span><span
        class="  font-bold">&nbsp;involve:</span></p>


    <ul class="p-3 lst-kix_list_14-0 start">
      <li class=" red-x li-bullet-0"><span>Drugs or medical procedures.</span></li>

      <li class=" red-x li-bullet-0"><span>Caffeine or energy drinks&hellip;</span></li>

      <li class=" red-x li-bullet-0"><span>Crazy eating plans or exercises&hellip; </span></li>
    </ul>


    <p><span>And it can help no matter your age or how hopeless you feel.</span></p>


    <p><span>All you need is</span><span class="font-bold">&nbsp;just 20 seconds</span><span>&nbsp;each
        morning before you eat breakfast&hellip; </span></p>


    <p><span>And once again before bed&mdash;plus a bonus few, easy-to-follow lifestyle tips&mdash;and you will
        feel more </span><span class="font-bold">focused, sharper, and mentally energized</span><span>&nbsp;than you
        have in years. &nbsp;</span></p>


    <p><span>In some cases, it can start working within a </span><span class="  font-bold">couple hours.</span>
    </p>
    <p><span class="  font-bold"></span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.3znysh7"><span>Imagine your mind </span><span
        class="font-bold">buzzing</span><span>&nbsp;with newfound
        sharpness, focus, and </span><span class="font-bold">mental energy</span><span>&hellip; </span></h3>


    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image5.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image5.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>
      <p><span>Remembering the simple things that used to slip your memory&hellip;</span></p>


      <p><span>Thinking </span><span class="font-bold">sharper</span><span>&nbsp;and </span><span
          class="font-bold">faster</span><span>&hellip; </span></p>


      <p><span>Feeling more capable and confident in yourself&hellip;&hellip; </span></p>


      <p><span>Feeling more alive, mentally quicker, and ready to do more&hellip; </span></p>


      <p><span>Less like you want to go home and pass out after work&hellip;</span></p>


      <p><span>And more like you want to go out and live your </span><span class="font-bold">life to the fullest.</span>
      </p>
      <div style="clear:both"></div>
    </div>

    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.2et92p0"><span>Imagine thinking </span><span
        class="font-bold">clearer</span><span>&nbsp;and being more
      </span><span class="font-bold">focused</span><span class=" ">&hellip; &nbsp;</span></h3>


    <p><span class="font-bold">Remembering</span><span>&nbsp;more from your life&hellip; </span></p>


    <p><span>Stories, places, things, and people&rsquo;s names&hellip; </span></p>


    <p><span>Where you put your keys and your glasses&hellip;</span></p>


    <p><span>What you need to get done&hellip;</span></p>


    <p><span>Even making better decisions&hellip;</span></p>


    <p><span>Like making healthier eating choices</span></p>


    <p><span>And solving problems faster</span></p>


    <p><span>And feeling more mentally </span><span class="font-bold">alive</span><span>&nbsp;and </span><span
        class="font-bold">happier</span><span>&nbsp;than you have in ages.</span></p>


    <p><span>I know you might feel a bit skeptical now&hellip; </span></p>


    <p><span>And in today&rsquo;s world, being skeptical is a GOOD THING. </span></p>


    <p><span>Many of my most successful patients felt the same way&hellip;</span></p>


    <p><span>Until they experienced this amazing transformation for themselves. &nbsp;</span></p>
    <p><span class="  "></span></p>
    <p><span>Over the last three decades&hellip;</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.tyjcwt">
      <span>I&rsquo;ve Been Able To Help </span><span class="font-bold">Thousands</span><span>&nbsp;Of Men And Women
        Strengthen Their Memory, Feel More </span><span class="font-bold">Focused</span><span>, Think </span><span
        class="font-bold">Faster</span><span>, And Feel Ready To Take On The
        World&hellip; </span><span>
        <picture>
          <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image35.jpg" type="image/jpg">
          <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image35.png"
            style="  " class=" mb-3 w-full" title="">
        </picture>
      </span>
    </h2>

    <p><span>&hellip;even when other doctors couldn&rsquo;t help.</span></p>


    <p><span>When </span><span class=" font-bold">Grace</span><span>&nbsp;first came to
        see me, she was </span><span class=" font-bold">becoming a burden on her loving husband&hellip; </span></p>


    <p><span>She was only in her 50s but she was so tired every day she had to drag herself out of
        bed each morning&hellip;</span></p>


    <p><span>Her memory and focus had gotten worse and she told me it felt impossible to get
        anything done.</span></p>


    <p><span>Her husband was really concerned.</span></p>


    <p><span>He had seen her memory declining for almost a year&hellip;</span></p>


    <p><span>He was scared and didn&rsquo;t know what to do&hellip;</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.3dy6vkm"><span>But no matter what she tried, Grace
        just couldn&rsquo;t fend off the </span><span class="font-bold">chronic exhaustion, memory
        lapses,</span><span>&nbsp;and </span><span class="font-bold">brain fog</span><span class=" ">&nbsp;she felt all
        day long&hellip; </span></h3>

    <div>

      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image10.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image10.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>Worse, her friends had started to avoid her&hellip; </span></p>
      


      <p><span>Because she was tired, forgetful, and in a bad mood around them all the time.</span>
      </p>


      <p><span>Grace tried coffee, some vitamins, and getting more sleep to get her life back on
          track</span></p>


      <p><span>But </span><span class="font-bold">nothing worked.</span><span>&nbsp; </span></p>


      <p><span>So I had Grace follow a few, very specific steps&hellip; </span></p>


      <p><span>And weeks later she said she felt like a </span><span class="font-bold">new woman. </span></p>


      <p><span>She was mentally sharper, more focused, and had a stronger memory.</span></p>


      <p><span>She was </span><span class="font-bold">getting things done</span><span>&nbsp;around the
          house.</span></p>


      <p><span>She was sleeping better and bouncing out of bed in the morning&hellip; </span></p>


      <p><span>She remembered things better and was able to focus and pay attention better to
          conversations.</span></p>


      <p><span>With her new found focus she was even able to be more active socially&hellip;</span></p>

      <p><span>And even take up yoga and tennis&hellip;</span></p>


      <p><span>She was more social and in a good mood around her friends again.</span></p>

      <p><span>Even the romance heated back up with her husband.</span></p>
      <div style="clear:both"></div>
    </div>

    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.xw2vwr9mkn4s"><span>When another woman, named
      </span><span class="font-bold">Sally,</span><span>&nbsp;came to see me, she was afraid of</span><span
        class="font-bold">&nbsp;losing her
        job</span><span class=" ">&hellip;</span></h3>


    <p><span>She felt exhausted&hellip; &nbsp;</span></p>


    <p><span>Couldn&rsquo;t focus at work&hellip; </span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.1t3h5sf"><span>She </span><span
        class="font-bold">couldn&rsquo;t think straight</span><span>&nbsp;and
        could barely keep her eyes open after lunch, </span><span class="font-bold">no matter how much she
        slept</span><span class=" ">&nbsp;the night before&hellip; </span></h3>


    <picture>
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image15.jpg" type="image/jpg">
      <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image15.png"
        style="  " class=" mb-3 w-full" title="">
    </picture>



    <p><span>And she was forgetting assignments and making silly mistakes on tasks she used to do
        with ease. </span></p>


    <p><span>And she felt embarrassed around her coworkers because of it.</span></p>


    <p><span>So I had her follow a few </span><span class="font-bold">specific steps</span><span>&hellip;
      </span></p>


    <p><span>Steps I&rsquo;ll share with you shortly&hellip;</span></p>


    <p><span>And just </span><span class="font-bold">30 days later</span><span>&nbsp;she told me&hellip;
      </span></p>


    <p><span>She felt like </span><span class="font-bold">Superwoman</span><span>. </span></p>


    <p><span>She was </span><span class="font-bold">re-energized</span><span>&hellip; </span></p>


    <p><span>More </span><span class="font-bold">mentally</span><span>&nbsp;</span><span class="font-bold">alert,
        focused,</span><span>&nbsp;and </span><span class="font-bold">sharp</span><span>&hellip; </span></p>


    <p><span>Checking off all her assignments and multi-tasking with ease&hellip;</span></p>


    <p><span>Getting her work done </span><span class="font-bold">early</span><span>.</span></p>


    <p><span>Even helping her coworkers solve tough problems. </span></p>


    <p><span>And now she was in line for a nice promotion.</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.m3fbvzvv5tq"><span>Then there&rsquo;s Dale&hellip;</span></h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image2.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image2.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="dale">
      </picture>
      </span></p>
      <p><span>He had been a </span><span>highly-successful CEO for a local company</span><span>&nbsp;for nearly 10
          years.
        </span></p>

      <p class=" "><span>But when he came to see me, he was afraid he was losing his mind. </span></p>

      <p class=" "><span>He couldn&#39;t remember the names of staff he had known for years&hellip;</span>
      </p>

      <p class=" "><span>Or a seven digit phone number for long enough to dial it. </span></p>

      <p class=" "><span>Every task felt like twice as much work.</span></p>

      <p class=" "><span>He felt exhausted all day&hellip;</span></p>


      <p><span>He was missing out on his kids&#39; games and award ceremonies because he had to work
          extra hours to get his work done because he just couldn&rsquo;t focus.</span></p>


      <p><span>And he&rsquo;d lost the desire to be with his wife intimately.</span></p>


      <p><span>And because he was so </span><span class="font-bold">miserable</span><span>&hellip; </span>
      </p>


      <p><span>He started drinking.</span></p>
      <p id="h.4d34og8"></p>
      <p><span>So I gave him a </span><span class="font-bold">few simple steps</span><span>&nbsp;to
          follow&hellip; </span></p>

      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11"><span>And when he
        came back, he told me he felt like he&rsquo;d </span><span class="font-bold">turned back
        the clock&nbsp;20&nbsp;years</span><span class=" ">&hellip; </span></h2>


    <p><span>He thanked me for giving him his life back.</span></p>


    <p><span>His memory was sharper</span></p>


    <p><span>He was thinking clearer&hellip; and his brain wasn&rsquo;t completely
        &lsquo;sapped&rsquo; after work anymore. </span></p>


    <p><span>Now he had the </span><span class="font-bold">energy</span><span>&nbsp;to go swimming and
        water skiing with his kids on the weekends&hellip; </span></p>


    <p><span>He </span><span class="font-bold">lost weight</span><span>&nbsp;from being so much more active
        and getting back to the gym&hellip;</span></p>


    <p><span>He was </span><span class="font-bold">intimate</span><span>&nbsp;again with his
        wife&hellip;</span></p>


    <p><span>And felt like he was back on top of the world</span><span>.</span></p>


    <p><span>And these are just a few of the life-transforming success stories I&rsquo;ve been lucky enough to
        be a part of&hellip; </span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.2s8eyo1">
      <span>Now, I Want To Show You How You Can </span><span class="font-bold">Boost</span><span>&nbsp;Your Memory And
        Sharpen Your Mind Too, Using This </span><span class="font-bold">&ldquo;Cerebral Boost&rdquo;</span><span
        class=" ">&nbsp;Method I Mentioned Earlier&hellip;
      </span>
    </h2>


    <p><span>To help you enjoy some of these same benefits for yourself.</span></p>


    <p><span>I&rsquo;m going to show you exactly how this </span><span class=" font-bold">20
        second</span><span class=" ">&nbsp;method works&hellip;</span></p>


    <p><span class=" ">How I discovered it&hellip; </span></p>


    <p><span>The research I and others have </span><span>done that shows</span><span class=" ">&nbsp;just how powerful
        it is&hellip; </span></p>


    <p><span class=" ">And how you can start using it for yourself, from the comfort of your own home, as
        soon as this week to start seeing great results, too.</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8"><span>I&rsquo;ll also give you my top</span><span
        class=" font-bold">&nbsp;Brain-Boosting
        afternoon snack&nbsp;recipe&hellip; </span>
    </h3>

    <div>

      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image38.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image38.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>
      <p><span class=" ">One that I&rsquo;ve been eating daily myself for nearly 25 years&hellip;</span></p>
      <p><span class="   font-bold"></span></p>
      <p><span class=" ">And can help keep you more mentally sharp and focused throughout your day.</span>
      </p>


      <p><span class=" ">I&rsquo;m going to tell you everything you need to know today. </span></p>
      <div style="clear:both"></div>
    </div>


    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.17dp8vu"><span
        class=" ">I&#39;ve Helped Hundreds of Men &amp; Women Boost Their Memory,
        Focus, And Cognition Speed At My Clinic In St. Petersburg, FL&hellip;</span></h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image39.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image39.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-1/2" title="">
      </picture>
      </span></p>
      <p><span>Now, as I said before, my name is</span><span class="font-bold">&nbsp;Dr. Steven
          Masley</span><span>&hellip; &nbsp;</span></p>


      <p><span>I&rsquo;ve been a MD physician, medical researcher, certified nutritionist, and trained
          chef for nearly three decades. </span></p>


      <p><span>And l am a Fellow with the American Heart Association and the American College of
          Nutrition.<br></span></p>
      <p><span>I&rsquo;ve written five best-selling books.</span></p>


      <p><span>Appeared on national TV, the Discovery Channel&hellip;</span></p>


      <p><span>And created one of the top health shows on PBS.</span></p>


      <p><span>I am also a university professor, and have lectured to over 30,000 doctors and medical providers
          across the globe.</span></p>


      <p><span>But at the age of 43, after residency, and working for ten years as a physician&hellip;
        </span></p>
      <div style="clear:both"></div>
    </div>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.3rdcrjn"><span
        class="font-bold">Something Terrible Happened</span><span class=" ">&nbsp;That
        Changed The Course Of My Life And My Career Forever&hellip; </span></h2>


    <p><span
        style="  ">
        <picture>
          <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image12.jpg" type="image/jpg">
          <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image12.png"
            style="  " class=" mb-3 w-full " title="">
        </picture>
      </span></p>


    <p><span>And eventually led me to discover my &ldquo;Cerebral Boost&rdquo; Method.</span></p>


    <p><span>See when I was a teenager, my step-dad Chuck </span><span>was a wonderful support in my life, and
        later when I had two young boys, he and my mom were a terrific help again.</span></p>


    <p><span>The day he retired, Chuck said his doctor gave him a clean bill of health. </span></p>


    <p><span>And he made a list of 100 things he wanted to do with the rest of his life. </span></p>


    <p><span>Chuck was a super-sharp, active guy.</span></p>


    <p><span>He loved walking around downtown Seattle&hellip; </span></p>


    <p><span>Taking my mom out on the town&hellip; </span></p>


    <p><span>And playing with his grandchildren.</span></p>


    <p><span>But the first week into his retirement&hellip; </span></p>


    <p><span>He was walking to a community meeting&hellip; </span></p>


    <p><span>And he got this chest pain&hellip;</span></p>


    <p><span>And was </span><span class="font-bold">rushed to the hospital</span><span>&hellip; </span></p>


    <p><span>Where they took him to the cath lab, and during the procedure they accidentally </span><span
        class="font-bold">sent a massive clot </span><span>towards Chuck&rsquo;s brain. </span></p>


    <p><span>Half of Chuck&rsquo;s </span><span class="font-bold">brain died</span><span>, deprived of
        oxygen.</span></p>


    <p><span>Now he couldn&#39;t dress himself&hellip;</span></p>


    <p><span>He couldn&#39;t feed himself&hellip; </span></p>


    <p><span>And he could barely talk. </span></p>


    <p><span>The man I knew and loved was </span><span class="  font-bold">gone.</span></p>


    <p><span>Instead of our fun conversations&hellip; </span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.26in1rg">
      <span>Chuck Now Just Sat In A Recliner Like A Vegetable, </span><span
        class="font-bold">Suffering</span><span>&hellip; In </span><span class="font-bold">Misery</span><span
        class=" ">&hellip;</span>
    </h2>


    <p><span>And it tore me up inside.</span></p>


    <p><span>I saw first hand how debilitating </span><span class="font-bold">damage</span><span>&nbsp;to
        the brain could be&hellip; </span></p>


    <p><span>How a loss in brain function could rob someone of their life and independence, and how
        he had become a burden on my mom&mdash;something he never wanted.</span></p>


    <p><span>And the worst part was&hellip; </span></p>


    <p><span>Despite years of medical training at one of the best universities in the
        country&hellip;</span></p>


    <p><span>There was </span><span class="font-bold">nothing</span><span>&nbsp;I knew of to fix
        this.</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11"><span>Modern,
        traditional medicine provided </span><span class="font-bold">no solution</span><span class=" ">&nbsp;to
        Chuck&rsquo;s ailments&hellip;</span>
    </h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image31.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image31.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>


      <p id="h.lnxbz9"><span>I felt completely powerless&hellip;</span></p>


      <p><span>The man I loved was </span><span class="font-bold">fading away</span><span>&hellip;</span></p>

      
      <p><span>And all I could do was watch.</span></p>


      <p><span>Years later, Chuck was in hospice, </span><span class="  font-bold">dying in a coma. </span></p>


      <p><span>My mom called me and said, </span><span class="  font-bold">&quot;Hey, if you want to say goodbye,
          this is your chance.&quot; </span></p>


      <p><span>So I hopped on a plane and flew from Florida back to Seattle to say goodbye to him.
        </span></p>

      <div style="clear:both"></div>
    </div>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11"><span>And when I
        arrived, he miraculously sat up in bed, &nbsp;took my hand, looked me in the eyes and
        said </span><span class="  text-blue font-bold">&quot;Please, don&#39;t let this happen to others!&quot; </span>
    </h2>


    <p><span>It was so moving&hellip; </span></p>


    <p><span>That it completely changed the course of my professional life&hellip; &nbsp;</span></p>


    <p><span>And I made it my mission to find out what really causes certain health issues for
        people.</span></p>


    <p><span>Whether it&#39;s heart problems, memory loss, brain fog, or an inability to
        focus&hellip; </span></p>


    <p><span>This eventually led me to discover my</span><span class="font-bold">&nbsp;&ldquo;Cerebral
        Boost&rdquo;</span><span>&nbsp;Method that I&rsquo;m going to share with you today. </span></p>


    <p><span>But as I began my journey&hellip; &nbsp;</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11"><span>I Quickly
        Realized How Many Things Were </span><span class="font-bold">Wrong</span><span class=" ">&nbsp;With The Medical
        Industry&hellip; </span></h2>
    <p><span>People really wanted to get healthy&hellip; </span></p>


    <p><span>To boost their memory, mental energy, and focus&hellip; and to be active and
        independent&hellip;</span></p>


    <p><span>But doctors weren&rsquo;t giving them the </span><span class="  font-bold">right tools.</span></p>


    <p><span>They were too focused on giving people drugs and surgery&hellip; </span></p>


    <p><span>Rather than trying to find the </span><span class="font-bold">real cause</span><span>&nbsp;of
        a person&rsquo;s problems.</span></p>


    <p><span>Then one day, by chance at a nutritional conference, I met the founder of an amazing
        movement called Functional Medicine. </span></p>


    <p><span>Functional Medicine is all about treating people&#39;s problems at the </span><span
        class="font-bold">source</span><span>. </span></p>


    <p><span>So instead of giving people prescriptions or sending them for surgery&hellip; </span>
    </p>


    <p><span>You look at what they&#39;re eating&hellip; their nutrient intake&hellip; how active
        they are&hellip; their stress levels&hellip; and if they&#39;re exposed to any toxins&hellip; </span></p>


    <p><span>And you find out what&#39;s </span><span class="font-bold">REALLY causing</span><span>&nbsp;their memory
        loss, or lack of focus, or low libido &hellip;or whatever their specific problem
        is.</span></p>


    <p><span>And you address what&#39;s causing it.</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.35nkun2">
      <span>This Led To A </span><span class="font-bold">Shocking Discovery</span><span class=" ">&nbsp;About What
        Really Causes Mental Fatigue, Brain Fog, And Memory Loss As You Age&hellip;
      </span>
    </h2>
    <p><span
        style="  ">
        <picture>
          <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image21.jpg" type="image/jpg">
          <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image21.png"
            style="  " class=" mb-3 w-full " title="">
        </picture>
      </span></p>


    <p><span>This led me to start doing my own research at my own clinic&hellip; </span></p>


    <p><span>To find solutions for problems that the mainstream medical world wasn&rsquo;t
        addressing, like memory loss, brain fog, heart problems, fatigue, and low libido.</span></p>


    <p><span>And by far&hellip; </span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11"><span>One of the
      </span><span class="font-bold">most</span><span>&nbsp;</span><span
        class="font-bold">overlooked</span><span>&nbsp;causes of memory loss and lack of focus&hellip; &nbsp;is in an
        area of the
        brain called the </span><span class="font-bold">forebrain</span><span class=" ">&hellip; &nbsp;</span></h2>


    <p><span>Which is made up of the frontal, parietal, </span></p>
    <p><span>and temporal lobes.</span></p>


    <p><span>The </span><span class="font-bold">forebrain</span><span>&nbsp;makes </span><span
        class="font-bold">learning</span><span>&nbsp;and </span><span
        class="font-bold">memory</span><span>&nbsp;possible.</span></p>


    <p><span>This region of the brain also helps you make </span><span class="font-bold">wise choices</span><span>,
        rather than impulsive reactions&hellip; </span></p>


    <p><span>Such as eating more vegetables and fruits instead of eating a candy bar.</span></p>


    <p><span>Your forebrain essentially controls </span><span class="font-bold">how you live and
        think</span><span>&hellip;</span></p>


    <p><span>Including your</span><span class="font-bold">&nbsp;mental energy</span><span>&nbsp;levels, </span><span
        class="font-bold">attention</span><span>, and focus. </span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.1ksv4uv"><span>When the </span><span
        class="font-bold">&ldquo;forebrain&rdquo; slows down</span><span class=" ">, so do many critical functions in
        the body along with it&hellip; &nbsp;</span></h3>

    <p><span class=" ">And you will feel: </span></p>


    <ul class="p-3 lst-kix_list_7-0 start">
      <li class="arrow-right">More sluggish</li>

      <li class="arrow-right">Less focused</li>

      <li class="arrow-right">Less alert</li>

      <li class="arrow-right">Remember less</li>

      <li class="arrow-right">Have less self-control.</li>
    </ul>


    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.44sinio">
      <span>This Decrease In Brain Processing Speed Is Something I Call </span><span class="font-bold">&ldquo;Synaptic
        Slowdown&rdquo;</span><span class=" ">&hellip; </span>
    </h2>


    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image33.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image33.png" class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>The term</span><span class="font-bold">&nbsp;&ldquo;synaptic slowdown&rdquo;</span><span>&nbsp;comes from
          the term &ldquo;synapses&rdquo;&hellip;</span></p>


      <p><span>Which are connections between brain cells that pass information and control processing
          speed&hellip;</span></p>


      <p><span>And if your synapses slow down, your brain slows down too&hellip;</span></p>
      <p><span class="  "></span></p>
      <p><span>As a result, it takes you </span><span class="font-bold">longer</span><span>&nbsp;to get
          things done&hellip;</span></p>


      <p><span>You&rsquo;re more likely to </span><span class="font-bold">forget</span><span>&nbsp;things,
          like your to-do list and people&rsquo;s names&hellip;</span></p>


      <p><span>And you&rsquo;re more likely to make poor choices at work, with your money, and you may
          even eat less healthy&hellip;</span></p>

      <p><span>After researching the impact of nutrition on heart and brain health for over three
          decades&hellip; </span></p>

      <div style="clear:both"></div>
    </div>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.2jxsxqh"><span>I&rsquo;ve found that &ldquo;Synaptic
        Slowdown&rdquo; is usually </span><span class="font-bold">caused by two </span><span
        class="font-bold">things&hellip;</span><span class="   font-bold">&nbsp; </span>
    </h3>



    <picture>
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image7.jpg" type="image/jpg">
      <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image7.png"
        style="  " class=" mb-3 w-full" title="">
    </picture>



    <p><span>Both are related to recent changes to our life and environment&hellip; </span></p>


    <p><span>And perhaps the most important of these is the food we eat. </span></p>


    <p><span>The brain relies on nutrients from the food we eat</span><span class="font-bold">&nbsp;</span><span>to
        process information quickly.</span></p>


    <p><span>But over the last 70 years&hellip;</span></p>


    <p><span>Our food has become significantly </span><span class="font-bold">less nutritious</span><span>.</span></p>


    <p><span>Because of </span><span class=" font-bold">soil degradation</span><span class=" ">&nbsp;from modern
        farming&hellip; </span></p>

    <p><span>Many fruits, vegetables, and </span><span>grains grown</span><span class=" ">&nbsp;today&hellip; </span>
    </p>

    <p><span>Have up to </span><span class=" font-bold">38% less</span><span class=" ">&nbsp;vitamins and
        minerals&hellip; &nbsp;</span></p>

    <p><span>And notably less Calcium, Vitamins C, B, A (and more) than it did 70-years
        ago.</span><sup class=" "><a href="#ftnt1" id="ftnt_ref1">[1]</a></sup><sup class=" "><a href="#ftnt2"
          id="ftnt_ref2">[2]</a></sup></p>

    <p><span>Even worse, our food often contains </span><span class=" font-bold">record levels of
        toxins</span><span class=" ">&nbsp;like pesticides, preservatives, additives, and processed sugars.</span>
    </p>

    <p><span>And these toxins</span><span class=" font-bold">&nbsp;cause havoc</span><span>&nbsp;with our
        brain&hellip;</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.z337ya"><span>Leading brain cells to </span><span
        class=" font-bold">lose function </span><span class="font-bold">and</span><span
        class=" font-bold">&nbsp;die.</span><span class="   ">&nbsp;</span></h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image34.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image34.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>
      <p><span>And when you combine the </span><span class=" font-bold">damage</span><span class=" ">&nbsp;from these
          toxins and nutrient deficiencies&hellip; &nbsp;</span></p>

      <p><span>Along with </span><span>a natural drop from </span><span class="font-bold">aging</span><span>&nbsp;and
          unmanaged </span><span class="font-bold">stress</span><span>&nbsp;in
          your life&hellip;</span></p>


      <p><span>The brain can start to deteriorate at a </span><span class="font-bold">very fast rate</span><span>.
        </span>
      </p>


      <p><span>It literally </span><span class="font-bold">shrinks</span><span>&nbsp;as can be seen with MRI
          scanning&hellip;</span></p>


      <p><span class="font-bold">Robbing</span><span>&nbsp;you of your memories, mental energy, focus, and
          brain vitality. </span></p>


      <p><span>The</span><span class="font-bold">&nbsp;good news </span><span>is there is something you can do about
          it&hellip; </span></p>

      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.3j2qqm3">
      <span>The </span><span class="font-bold">Breakthrough</span><span>&nbsp;Brain-Boosting
        Discovery Many Doctors Thought Was </span><span class="font-bold">&ldquo;Impossible&rdquo;</span><span
        class=" ">&hellip; </span>
    </h2>
    <p>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/dr-computer.avif" type="image/avif">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/dr-computer.png"
          style="  " class="mb-3 w-full " title="">
      </picture>
    </p>
    <p><span>As I mentioned before&hellip; &nbsp;</span></p>


    <p><span>I have spent the last</span><span class="font-bold">&nbsp;three
        decades</span><span>&nbsp;researching</span>&nbsp;<span>how to optimize heart
        and brain function&hellip; </span></p>


    <p><span>And how you can boost your performance.</span></p>


    <p><span>I wrote several books about how to optimize your health, including a best-selling book and public
        television show called: </span><span class="font-bold">The Better Brain Solution</span><span>.</span></p>


    <p><span>Plus, I have lectured to over 30,000 physicians and medical providers around the world,
        sharing data collected at my clinic.</span></p>


    <p><span>Sadly, I&rsquo;ve found that many doctors don&rsquo;t believe what I&rsquo;m about to tell you is
        possible.</span></p>


    <p><span>They believe that as we age, the</span>&nbsp;<span>brain
        starts to wither and decay&hellip; </span></p>


    <p><span>And that there is </span><span class=" font-bold ">nothing you can do about it.</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.1y810tw"><span
        class=" ">That&rsquo;s Why I Took Matters Into My Own Hands&hellip;</span>
    </h2>

    <p><span>In 2008&hellip; I conducted my own 10-week randomized clinical study</span><sup class=" "><a href="#ftnt3"
          id="ftnt_ref3">[3]</a></sup><span>&nbsp;at my clinic, </span><span class=" font-bold">The Masley Optimal
        Health Center</span><span class=" ">&hellip; </span></p>

    <p><span class=" ">To try to boost the brain NATURALLY.</span></p>

    <p><span class=" ">I had 56 participants&hellip; both young and old&hellip;</span></p>

    <p><span class=" ">And had them make a few simple changes to their diet and lifestyle&hellip; </span>
    </p>

    <p><span class=" ">Such as eating specific foods and nutrients each day.</span></p>

    <p><span>And to my surprise&hellip; </span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.4i7ojhp"><span>Participants were able to </span><span
        class="font-bold">boost</span><span>&nbsp;their
        brain speed by an amazing </span><span class="font-bold">average of 24.6%</span><span class=" ">&hellip;</span>
    </h3>


    <p><span>That means that they were able to: </span></p>


    <ul class="p-3 lst-kix_list_1-0 start">
      <li class="  li-bullet-0"><span>Remember </span><span>things almost</span><span>&nbsp;</span><span
          class="font-bold">25% better</span><span>&hellip; </span></li>

      <li class="  li-bullet-0"><span>Answer questions and solve problems almost </span><span class="font-bold">25%
          faster</span><span>&hellip; </span></li>

      <li class="  li-bullet-0"><span>Be </span><span class="font-bold">25% more focused and alert.</span></li>
    </ul>


    <p><span>To give you an idea of just how significant this is: </span></p>


    <p><span>Imagine, if you work an 8 hour day now&hellip; </span></p>


    <p><span>Getting all that work done in just 6 hours&hellip; </span></p>


    <p><span>And then having tons of focus and energy to do whatever you want after that.</span></p>


    <p><span class="  font-bold">That is how big the difference can be!</span></p>


    <p><span>In fact, I was so </span><span class="font-bold">impressed</span><span>&nbsp;by the
        results&hellip; </span></p>


    <p><span>That I conducted 7 additional studies over the next decade&hellip; &nbsp;</span></p>


    <p><span>On more than one thousand men and women&hellip; </span></p>


    <p><span>To see if I could </span><span class="font-bold">boost</span><span>&nbsp;the brain even
        more.</span></p>


    <p><span>And many participants reported they felt much more mentally </span><span
        class="font-bold">energetic</span><span>&hellip; </span></p>


    <p><span class="font-bold">Sharper</span><span>&hellip;</span></p>


    <p><span>And more </span><span class="font-bold">focused</span><span>.</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.2xcytpi"><span>And in many cases they saw some of
        these </span><span class="font-bold">benefits</span><span>&nbsp;within the </span><span class="font-bold">first
        few days</span><span class=" ">&nbsp;of starting my program...</span></h3>

    <div>

      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image28.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image28.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>I know this because every year I tested brain performance on all the patients in my
          clinic. </span></p>

      
      <p><span>I measured brain processing speed, </span><span class="font-bold">memory</span><span>, and
          attention in healthy adults. </span></p>


      <p><span>I took into account what foods they ate, supplements they took, and how active they
          were&hellip;</span></p>


      <p><span>Along with hundreds of factors from their lab tests&hellip; </span></p>


      <p><span>And I saw dramatic improvements in people who ate the right foods and nutrients.</span>
      </p>


      <p><span>And I analyzed and published my results in peer-reviewed scientific journals.</span>
      </p>


      <p><span>In fact, the improvement was so fast and significant&hellip; &nbsp;</span></p>


      <p><span>That now&hellip; </span></p>


      <p><span>When a person is complaining about memory loss, low mental energy, brain fog, and an
          inability to focus&hellip; &nbsp;</span></p>


      <p><span>The</span><span class="font-bold">&nbsp;first place I start</span><span>&nbsp;is with solutions that
        </span><span class="font-bold">boost the brain</span><span>.</span></p>


      <p><span>There are many tools I&rsquo;ve found over the years to help do this&hellip; </span>
      </p>


      <p><span>But there is </span><span class="font-bold">nothing more critical </span><span>than getting the brain the
        </span><span class="font-bold">nutrients</span><span>&nbsp;it needs to perform at its best. </span></p>


      <p><span>These are many of the same </span><span class="font-bold">nutrients</span><span>&nbsp;that
          have been drained from our food supply.</span></p>


      <p><span>These </span><span class="font-bold">nutrients</span><span>&nbsp;can help reduce the damaging
          effect of toxins on the brain.</span></p>

      <div style="clear:both"></div>
    </div>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.1ci93xb">
      <span>Over The Years I&rsquo;ve Identified </span><span class="font-bold">6
        Nutrients</span><span class=" ">&nbsp;I Believe Boost The Brain The Best</span>
    </h2>

    <picture>
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image13.jpg" type="image/jpg">
      <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image13.png"
        style="  " class="mb-3 w-full" title="">
    </picture>


    <p><span>I call the daily preparation and taking of these essential nutrients a critical part of my
      </span><span class="font-bold">&ldquo;</span><span class=" font-bold">Cerebral Boost</span><span
        class="font-bold">&rdquo;</span><span>&nbsp;Method.</span></p>


    <p><span>And I&rsquo;ve seen that it cannot only help </span><span class="font-bold">boost</span><span>&nbsp;your
        memory, mental </span><span class="font-bold">energy</span><span>, </span><span
        class="font-bold">focus</span><span>, and
      </span><span class="font-bold">sharpness</span><span>&hellip; </span></p>


    <p><span>But it can also boost your </span><span class="font-bold">performance</span><span>&nbsp;at
        work&hellip; &nbsp;</span></p>


    <p><span>Make you more upbeat and fun around your friends&hellip; </span></p>


    <p><span>Allow you to be more active&hellip; &nbsp;</span></p>


    <p><span>Make better eating choices&hellip; </span></p>


    <p><span>Which in turn will boost your </span><span class="font-bold">libido</span><span>&nbsp;and </span><span
        class="font-bold">romantic function</span><span>.</span></p>


    <p><span>All of which can help you live a </span><span class="font-bold">happier</span><span>, </span><span
        class="font-bold">longer</span><span>, and more </span><span
        class="font-bold">fulfilling</span><span>&nbsp;life.
      </span></p>


    <p><span>Along with a healthy lifestyle, I&rsquo;ve recommended these same nutrients to </span><span
        class="font-bold">hundreds</span><span>&nbsp;of my patients.</span></p>


    <p><span>Many came back to me saying they didn&rsquo;t realize just how slow and </span><span
        class="font-bold">foggy</span><span>&nbsp;their brain had been&hellip; </span></p>


    <p><span>How </span><span class="font-bold">low</span><span>&nbsp;their mental energy
        was&hellip;</span></p>


    <p><span>And how much more </span><span class="font-bold">alive</span><span>&nbsp;and </span><span
        class="font-bold">focused</span><span>&nbsp;they feel now&hellip; </span></p>


    <p><span>And as a result of their </span><span class="font-bold">better brain function</span><span>, they now take
      </span><span class="font-bold">better care</span><span>&nbsp;of themselves</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.3whwml4"><span>This often leads them to become
      </span><span class="font-bold">more active</span><span>,
      </span><span class="font-bold">fit</span><span>, and to make </span><span class="font-bold">better eating
        choices&hellip;</span><span class=" ">&nbsp;</span></h3>


    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image17.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image17.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>And now they&rsquo;re so </span><span class="font-bold">happy</span><span>&nbsp;because of it.
        </span></p>

      
      <p><span>Many said, &ldquo;Thank you for giving me my life back!&rdquo;</span></p>


      <p><span>Even their friends and family notice a difference.</span></p>


      <p><span>Their spouse may say they seem more </span><span class="font-bold">alive</span><span>&mdash;a
        </span><span class="font-bold">better version </span><span>of themselves. </span></p>


      <p><span>And their romance often improves as their </span><span class="font-bold">libido picks up</span><span>.
        </span></p>


      <p><span>Their friends enjoy spending more time with them because they</span><span class="font-bold">&nbsp;listen
          better</span><span>, </span><span class="font-bold">remember more</span><span>, and are in a </span><span
          class="font-bold">better mood</span><span>.</span></p>


      <p><span>People would say things to them like: </span></p>


      <p><span class="  font-bold">&quot;Wow, you are so much sharper! What changed?&quot;</span></p>


      <p><span>And I can say that I&rsquo;ve seen the results </span><span
          class="font-bold">first-hand</span><span>.</span></p>


      <p><span>After making better food choices and taking these nutrients myself, I&rsquo;ve felt my mental
          sharpness and </span><span class="font-bold">focus</span><span>&nbsp;improve, and I&#39;m in a </span><span
          class="font-bold">better mood all day long</span><span>&hellip;</span></p>

      <div style="clear:both"></div>
    </div>

    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.2bn6wsx"><span>I can honestly say that today, at 67
        years old, I feel </span><span class="   font-bold">great</span></h3>


    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image11.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image11.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>I&rsquo;ve got the </span><span class="font-bold">energy to travel</span><span>&hellip;
        </span></p>

      
      <p><span>Go </span><span class="font-bold">sailing</span><span>&nbsp;with my wife,
          Nicole&hellip;</span></p>


      <p><span>Spend plenty of </span><span class="font-bold">time with my family</span><span>&hellip; our
          grandkids.</span></p>


      <p><span>And I </span><span class="font-bold">lecture</span><span>&nbsp;to groups of doctors and
          continue my work to transform people&rsquo;s lives.</span></p>


      <p><span>To be honest, I couldn&rsquo;t have accomplished half of what I&rsquo;ve done without
          following my own methods.</span></p>


      <p><span>As I said before, there are</span><span class="font-bold">&nbsp;6 nutrients </span><span>that I found to
          be the </span><span class="font-bold">best</span><span>&nbsp;at </span><span class="font-bold">boosting the
          brain</span><span>.</span></p>


      <p><span>I want to share </span><span class="font-bold">exactly</span><span>&nbsp;what they are with
          you right now&hellip; </span></p>


      <p><span>So you can use them for yourself&hellip;</span></p>


      <p><span>And get a chance to feel these same </span><span class="font-bold">powerful
          benefits</span>&hellip;</p>

      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.qsh70q"><span
        class=" ">Brain-Boosting Nutrient #1: Curcumin</span></h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image8.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image8.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span class="font-bold">Curcumin</span><span>&nbsp;is at the top of my list of brain nutrients because it helps
        </span><span class="font-bold">reduce inflammation</span><span>&nbsp;and </span><span
          class="font-bold">oxidation</span><span>&nbsp;in the brain. </span></p>


      <p><span>Studies show people who take the right form of curcumin see </span><span
          class="font-bold">signi&#64257;cant improvements in brain speed</span><sup class=" font-bold"><a href="#ftnt4"
            id="ftnt_ref4">[4]</a></sup><span class="  font-bold">, attention, and memory. </span></p>


      <p><span>In one study</span><span>&hellip;
          &nbsp;participants saw</span><span class="font-bold">&nbsp;</span><span
          class="font-bold ">&ldquo;significantly
          improved
          performance&rdquo;</span><span>&nbsp;in attention and memory </span><span>after</span><span
          class="font-bold">&nbsp;just 3 hours</span><span>&hellip; </span></p>


      <p><span>And after 4 weeks&hellip; cognitive function and memory not only continued to
          improve&hellip; </span></p>


      <p><span>But subjects also reported </span><span class="font-bold">more energy</span><span>&nbsp;and </span><span
          class="font-bold">less anxiety</span><span>.</span></p>

      <p><span>Studies have shown that curcumin </span><span class="font-bold">decreases</span><span>&nbsp;production of
          beta amyloid in the brain; keep in mind that beta amyloid formation is associated with </span><span
          class="font-bold">memory loss</span><span>.</span></p>


      <p><span>Curcumin can also increase growth factors that </span><span class="font-bold">help grow brain
          cells</span><span>.</span></p>


      <p><span>Growing </span><span class="font-bold">new brain cells</span><span>&nbsp;is something that many
          researchers thought was </span><span class="font-bold">impossible</span><span>&hellip; </span></p>


      <p><span>But now, thanks to this new research, we know it&rsquo;s very feasible.</span></p>


      <p><span>And as curcumin </span><span class="font-bold">lowers inflammation</span><span>, curcumin
          supplementation has also been shown to reduce joint pain symptoms. &nbsp;</span></p>

      <p><span>One significant problem with curcumin is that many forms of curcumin, including turmeric,
        </span><span class="font-bold">won&rsquo;t be absorbed properly</span><span>.</span></p>


      <p><span>Poorly absorbed curcumin can also cause GI distress, something you clearly want to
          avoid! </span></p>


      <p><span>There is a </span><span class="font-bold">new type of curcumin</span><span>&nbsp;that can be absorbed far
          better&hellip; &nbsp;</span></p>

      <div style="clear:both"></div>
    </div>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.3as4poj"><span>One study suggests </span><span
        class="font-bold">up to 90 times
        better</span><span>&nbsp;absorption than another.</span></h3>


    <p><span>I&rsquo;ll tell you where to get this new version in just a second. </span></p>


    <p><span>But first&hellip; &nbsp;let me tell you about the second smart nutrient&hellip; </span></p>


    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.1pxezwc"><span
        class=" ">Brain-Boosting Nutrient #2: Resveratrol</span></h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image9.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image9.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span class="font-bold">Resveratrol</span><span>&nbsp;is a compound that is naturally found in red </span><span
          class="font-bold">grapes</span><span>&nbsp;and </span><span
          class="font-bold">blueberries</span><span>.</span></p>


      <p><span>And has been shown to help </span><span class="font-bold">increase blood flow</span><span>&nbsp;to the
          brain</span><span>&hellip; </span></p>


      <p><span>Lower inflammation</span><span>&hellip; </span></p>


      <p><span>And help reduce blood sugar levels</span><span>.
        </span></p>


      <p><span>Several studies</span><span>&nbsp;have found that taking Resveratrol is
          linked to </span><span class="font-bold">significant improvement</span><span>&nbsp;in cognitive scores in
          postmenopausal women. </span></p>


      <p><span>They showed both </span><span class="font-bold">faster</span><span>&nbsp;and </span><span
          class="font-bold">more
          accurate</span><span>&nbsp;brain processing speed and </span><span class="font-bold">better
          memory</span><span>&nbsp;scores, too.</span></p>


      <p><span>And as a bonus, new pilot study</span><span>&nbsp;research on overweight men and women shows that Resveratrol
          can &ldquo;induce the same metabolic changes you might expect from a month of calorie-restricted
          dieting.&rdquo;</span></p>


      <p><span>If the drug companies could patent Resveratrol and sell it, they would probably charge
          a fortune for it. </span></p>


      <p><span>But like every &ldquo;brain booster&rdquo; I&rsquo;m sharing with you today&hellip;
        </span></p>


      <p><span>It&#39;s all-natural, so they can&rsquo;t.</span></p>


      <p><span>The best and most physiologically active type of resveratrol is called </span><span
          class="  font-bold">Trans-Resveratrol. </span></p>


      <p><span>Unlike ordinary resveratrol&hellip; </span></p>


      <p><span>Trans-Resveratrol has 100% active ingredients whereas regular Resveratrol is closer to
          only 50% active.</span></p>


      <p><span>To give you the most brain benefits&hellip; &nbsp;</span></p>


      <p><span>I&rsquo;ll tell you where to get Trans-resveratrol in just a second.</span></p>

      <div style="clear:both"></div>
    </div>


    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.49x2ik5">
      <span>Brain-Boosting Nutrient #3: Magnesium</span>
    </h2>


    <p><span>Magnesium is </span><span class="font-bold">essential</span><span>&nbsp;for messaging to occur between
        brain cells&hellip; </span></p>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image32.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image32.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>



      <p><span>And brain synapse connections slow down if your magnesium levels are low. &nbsp;</span>
      </p>


      <p><span>Unfortunately, according to research by the National Institutes of Health</span><span class="  font-bold">68% of Americans are low in
          magnesium. </span></p>


      <p><span>Magnesium also has many other health benefits&hellip; </span></p>


      <p><span>Including aiding muscle cramps and constipation&hellip;</span></p>


      <p><span>And helping you </span><span class="font-bold">relax</span><span>&nbsp;and </span><span
          class="font-bold">sleep</span><span>.</span></p>


      <p><span>The best way to get your magnesium levels up is by taking a well-absorbed type of magnesium called
        </span><span class="font-bold text-blue">Magnesium Chelate</span><span>.</span></p>


      <p><span>I&rsquo;ll show you my top source of high-quality Magnesium Chelate in just a second.
        </span></p>


      <p><span>For now, let&rsquo;s move on to our fourth smart nutrient:</span></p>
      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.2p2csry">
      <span>Brain-Boosting Nutrient #4: Vitamin&nbsp;B12</span>
    </h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image4.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image4.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>You&rsquo;ve probably heard of Vitamin B12</span><span class=" ">&nbsp;before.</span></p>
      
      <p><span>But you might not know that it </span><span class=" font-bold">helps brain cells produce
          energy</span><sup class=" "><a href="#ftnt19" id="ftnt_ref19">[19]</a></sup><span>.</span><span>&nbsp;</span>
      </p>


      <p><span>And studies link lower B12 levels to a decline in both learning ability and memory </span><span>&hellip;
        </span></p>


      <p><span>Another study</span><span>&nbsp;showed B12
          dramatically reduced brain shrinkage in the area of the brain most affected by memory
          loss.</span></p>


      <p><span>Vitamin B12 deficiency is more common today than ever because of an increase in drugs
          that block stomach acid. </span></p>


      <p><span>Vitamin B12 deficiency can cause </span><span class="font-bold">permanent, irreversible memory
          loss</span><span>&nbsp;if it&rsquo;s not dealt with. </span></p>


      <p><span>This is why this is perhaps the</span><span class="font-bold">&nbsp;single most important
        </span><span>nutrient deficiency that you should avoid.</span></p>


      <p><span>I&rsquo;ll tell you the best way to boost your B12 levels in just a second.</span></p>


      <p><span>Lastly, there are two additional brain-boosting nutrients you&rsquo;ll want to add to the list if
          you want the best benefits possible&hellip; </span></p>

      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.147n2zr">
      <span>Brain-Boosting Nutrient #5: Folate</span>
    </h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image24.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image24.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span class="font-bold">Folate</span><span>&nbsp;helps repair our DNA and remove toxins, which is essential for
          us to stay healthy.</span></p>


      <p><span>People with folate deficiency are at </span><span class="font-bold">elevated risk </span><span>for heart
          problems, depression, and difficulties with concentration and memory. </span></p>

      <p><span>You want to make sure you take a metabolically-active form of folate.</span></p>

      <p><span>I&rsquo;ll share with you my recommended source below. But first&hellip; </span></p>
      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.3o7alnk">
      <span>Brain-Boosting Nutrient #6: Vitamin&nbsp;D</span>
    </h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image22.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image22.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>Despite its popularity as a supplement, </span><span class="font-bold">50% of Americans are thought to be
          vitamin D deficient. </span></p>


      <p><span>Vitamin D is essential for many aspects of your health&hellip; from having healthy
          bones to boosting the immune system.</span></p>


      <p><span>People with higher vitamin D levels appear to have larger brains than people with low
          vitamin D levels. </span></p>


      <p><span>This is because vitamin D stimulates brain cell growth, especially in the memory center
          of the brain. &nbsp;</span></p>


      <p><span>Now each of these ingredients individually can have a </span><span class="font-bold">powerful
          benefit</span><span>&hellip; </span></p>


      <p><span>But when you mix all 6 of them together with the right dosage of each&hellip;</span>
      </p>


      <p><span>You get an even more powerful combination&hellip;</span></p>


      <p><span>To enhance the brain in multiple ways&hellip; &nbsp;</span></p>


      <p><span>Boosting memory, mental energy, focus, and overall brain function. </span></p>


      <p><span>However&hellip;</span></p>
      <div style="clear:both"></div>
    </div>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.23ckvvd"><span>After prescribing many of these
        nutrients to my patients for years, I found that
        it was </span><span class="font-bold">difficult to find the quality</span><span class=" ">&nbsp;that I was
        looking
        for&hellip; </span></h3>


    <p><span>And there were no products on the market that contained all these nutrients in the
        ratios I recommended&hellip; </span></p>


    <p><span>Nor at a price that my patients could afford. </span></p>


    <p><span>After much searching&hellip; </span></p>


    <p><span>I eventually came across a trustworthy manufacturer called Revival Point&hellip;
      </span></p>


    <p><span>Who was able to put all six of these potent, brain-boosting nutrients together&hellip;
      </span></p>


    <p><span>In the exact doses I wanted&hellip; </span></p>


    <p><span>In one, small, easy-to-take capsule&hellip; </span></p>


    <p><span>That you can take with a glass of water.</span></p>


    <p><span>Thanks to this breakthrough&hellip;</span></p>


    <p><span>These six &ldquo;brain boosters&rdquo; are no longer just for my private patients
      </span></p>


    <p><span>Starting today&hellip; </span></p>


    <p><span>You can now get these same nutrients&hellip; </span></p>


    <p><span>At a fraction of the cost that it would take to buy them separately. </span></p>


    <p><span>They&rsquo;re available for the first time in a one-of-a-kind product by Revival Point called:
      </span><span class="font-bold">Total Brain Boost.</span></p>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.ihv636"><span
        class="font-bold">Total Brain Boost&reg;</span><span class=" ">: A Powerful
        Formula Using 6 of the Best, Scientifically-Backed, Brain-Boosting Nutrients I&rsquo;ve Found Over 30 Years of
        Research&hellip;</span>
    </h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image19.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image19.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span class="font-bold">Total Brain Boost</span><span>&nbsp;is the only health supplement that contains all 6
          of these top brain-enhancing nutrients I discovered in my last 30 years of research&hellip; </span></p>


      <p><span>All in the</span><span class="font-bold">&nbsp;exact doses</span><span>&nbsp;that are shown to
          be most effective in the clinical studies you saw earlier&hellip;</span></p>


      <p><span>And have been shown to </span><span class="font-bold">safely</span><span>&nbsp;and </span><span
          class="font-bold">effectively</span><span>&nbsp;help people </span><span class="font-bold">boost brain
          health</span><span>&nbsp;at almost any age. </span></p>


      <p><span>These </span><span class="font-bold">6 &ldquo;brain boosters&rdquo; </span><span>are naturally
          occurring&hellip; </span></p>


      <p><span>Which means </span><span class="  font-bold">no prescription required.</span></p>

      <p><span>Just imagine how good it would feel to wake up&hellip; </span></p>


      <p><span class="font-bold">Excited</span><span>&nbsp;about the day ahead.</span></p>


      <p><span>Your mind is </span><span class="font-bold">sharp</span><span>.</span></p>


      <p><span>And you&rsquo;re not only getting </span><span class="font-bold">more things done</span><span>&hellip;
        </span></p>


      <p><span>You&rsquo;re getting them done </span><span class="font-bold">faster</span><span>&hellip; </span>
      </p>


      <p><span>And with </span><span class="font-bold">fewer mistakes</span><span>. </span></p>


      <p><span>What if instead of crashing in the afternoon&hellip; </span></p>


      <p><span>Or needing caffeine or an energy drink just to get through the day&hellip; </span></p>


      <p><span>You naturally got the things you wanted done quickly, with great focus and extra energy
          to spare?</span></p>


      <p><span>And when you feel better like this, it&rsquo;s easier to make better eating choices
          too.</span></p>
      <div style="clear:both"></div>
    </div>


    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image3.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image3.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>Imagine focusing, listening, and socializing better with your family and friends&hellip; </span>
      </p>


      <p><span>Perhaps everyone will be pleasantly </span><span class="font-bold">surprised</span><span>&nbsp;by how
          sharp
          and &lsquo;on the ball&rsquo; you are.. </span></p>


      <p><span>Maybe you even</span><span class="font-bold">&nbsp;feel younger </span><span>because you have
          better focus and memory. </span></p>


      <p><span>You finish your work day </span><span class="font-bold">faster</span><span>&nbsp;and </span><span
          class="font-bold">easier</span><span>.</span></p>


      <p><span>And remember more details from conversation and things you read. </span></p>

      <p><span>This doesn&rsquo;t have to be a dream. </span></p>


      <p><span>Mental sharpness can improve</span></p>


      <p><span>And these 6 nutrients&mdash;when combined with simple lifestyle changes&mdash;have
          helped me.</span></p>


      <p><span>They&rsquo;ve helped hundreds of my patients&hellip;</span></p>
      <div style="clear:both"></div>
    </div>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.32hioqz"><span class=" ">And I believe this could
        help you too.</span></h3>


    <p><span>It all starts with </span><span class="font-bold">Total Brain Boos</span><span>t. </span></p>


    <p><span>If you&rsquo;ve been struggling with memory loss, brain fog, and have felt mentally
        tired </span></p>


    <p><span>Losing your place more while talking</span></p>


    <p><span>Can&rsquo;t remember where you put things</span></p>


    <p><span>Or what people said just days earlier</span></p>


    <p><span>Remember: </span></p>


    <p><span>It&rsquo;s not your fault. </span></p>


    <p><span>And until now, you probably didn&rsquo;t know why this was happening&hellip; </span>
    </p>


    <p><span>Or even that there was anything you could do about it.</span></p>


    <p><span>The good news is there is a solution in front of you.</span></p>


    <p><span>Now you might be wondering how much this all costs and how you can get started.</span>
    </p>


    <p><span>Well, if you were to buy all 6 of these nutrients separately&hellip; </span></p>


    <p><span>From your local or online retailer&hellip; </span></p>


    <p><span>They would cost you about</span><span class="font-bold">&nbsp;$100 per month</span><span>&nbsp;if you
        bought them from a trusted brand&hellip; </span></p>


    <p><span>And you&rsquo;d have to take 6 different capsules twice per day. </span></p>


    <p><span>And you would not know if the quality or the dose was even right.</span></p>


    <p><span>But today&hellip; </span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.1hmsyys"><span
        class=" ">With Total Brain Boost You Won&rsquo;t Have To Pay Anywhere Near
        This Price Tag&hellip;</span></h2>


    <p><span>And you won&rsquo;t have to take all these capsules per day, either.</span></p>


    <p><span>And </span><span>y</span><span>ou won&rsquo;t even have to pay $90
        dollars&hellip; or even $80 dollars.</span></p>


    <p><span>Today you&rsquo;re going to get Total Brain Boost for</span><span class=" font-bold">&nbsp;just
        $69.95</span><span>&nbsp;for a 30-day supply. </span></p>


    <p><span>That&rsquo;s </span><span class=" font-bold">28% </span><span class="font-bold">OFF</span><span>&nbsp;the
        estimated retail brand&rsquo;s cost</span><span>&hellip;</span></p>


    <p><span>And a</span><span class="  font-bold">&nbsp;$27 savings.</span></p>


    <p><span>And that&rsquo;s just</span><span class=" font-bold">&nbsp;$69.95
        period</span><span>&mdash;</span><span>combined in one </span><span>easy-to-take</span><span>&nbsp;pill.</span>
    </p>


    <p><span class="font-bold">No hidden fees or billings.</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.41mghml"><span class=" ">All you need to claim this
        discount is to click the button
        below&hellip; </span></h3>


    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>


    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11"><span>Ordering Is
      </span><span class="font-bold">Easy</span><span class=" ">&hellip;</span></h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image40.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image40.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>
      <p><span>You don&rsquo;t need a prescription.</span></p>


      <p><span>You only need to want to transform your life for the </span><span
          class="font-bold">better</span><span>.</span></p>


      <p><span>And if you want to save even more&hellip; &nbsp;</span></p>

      <p><span>You can get either the recommended </span><span class="font-bold">3 or 6-month packages.</span></p>
      

      <p><span>These discount packages allow you to take Total Brain Boost with your husband, wife,
          family, or friends&hellip;</span></p>

      <p><span>So you and your loved ones can boost your brain power together.</span></p>

      <p><span>Also, most of the scientific studies I showed you earlier were done over 2 to 3 months
          or longer</span></p>

      <p><span>So I recommend taking Total Brain Boost for </span><span class="font-bold">3 months or
          longer</span><span>&nbsp;to get the best results&hellip; </span></p>


      <p><span>By choosing the 3 Month discount package you pay </span><span class="text-blue font-bold">just $59.95 per
          month</span><span>. </span></p>
      <p><span class=" font-bold "></span></p>
      <p><span>That&rsquo;s </span><span class="text-blue font-bold">38% OFF</span><span>&nbsp;the estimated retail
          price.</span></p>


      <p><span>And you get </span><span class="  font-bold">free shipping.</span></p>


      <p><span>The 90-day supply also helps make sure you don&rsquo;t run out if this batch sells
          out&hellip; </span></p>


      <p><span>Because you don&rsquo;t want to be stuck waiting for your next bottle when you&rsquo;re
          already seeing great results&hellip; </span></p>
      <div style="clear:both"></div>
    </div>

    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8 clickable underline id=" h.vx1227">
      <span id="wsl-btn" class=" text-blue  font-bold">So click here to secure your discount package now.
      </span>
    </h3>


    <p><span>And when you do&hellip; </span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.3fwokq0">
      <span>You&rsquo;ll Also Get A </span><span class="font-bold">90-Day Money Back Guarantee
      </span><span class=" ">With Your Order Today&hellip;</span>
    </h2>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/90-day-seal-3-x.png" type="image/png">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/90-day-seal-3-x.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-1/4" title="">
      </picture>

      <p><span>So if you&rsquo;re not happy with your results for any reason&hellip; </span></p>

      
      <p><span>If you don&rsquo;t feel mentally sharper, quicker, and more focused&hellip;</span></p>


      <p><span>Then you can just call </span><span class="font-bold">Revival Point</span><span>&nbsp;to get
          your money back any day of the week</span></p>


      <p><span>They&rsquo;ve got US-based reps waiting 24/7</span></p>


      <p><span>Even at 2 AM in the morning.</span></p>
      <div style="clear:both"></div>
    </div>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image18.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image18.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>All you need to do is call or email within 90 days and say, &ldquo;I want to use my
          money-back guarantee.&rdquo; </span></p>


      <p><span>And that&rsquo;s it - you&rsquo;ll get your </span><span class="font-bold">money back in
          full</span><span>&hellip;</span></p>


      <p><span class="  font-bold">Including taxes and shipping&hellip;</span></p>


      <p><span class="font-bold">No questions</span><span>&nbsp;</span><span
          class="font-bold">asked</span><span>&nbsp;and
        </span><span class="font-bold">no hassles</span><span>.</span></p>

      <p><span>There is no way anyone could afford to make a promise like this if their product
          didn&rsquo;t work every bit as well as they say it does. </span></p>
      <div style="clear:both"></div>
    </div>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.1v1yuxt"><span class=" ">All you need to do to claim
        your discount and your 90-day money
        back guarantee is click the button below&hellip; </span></h3>


    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>


    <p><span>And to make Total Brain Boost even more effective&hellip;</span></p>


    <p><span>Today when you order, Revival Point will also make sure&hellip; </span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.4f1mdlm">
      <span>You Get </span><span class="font-bold">5 Free Bonus Gifts</span><span>&nbsp;Filled With
        Tips To Further Boost Your&nbsp;Results&hellip;</span>
    </h2>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.477wsv67uk7z"><span class="font-bold">Bonus Gift
        #1:</span><span class=" ">&nbsp;The Total Brain
        Booster Guide. </span></h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image36.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image36.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>This digital guide shows you exactly how to get the most out of Total Brain Boost,
          including:</span></p>


      <ul class="p-3 ml-4 lst-kix_list_2-0 start">
        <li class="  li-bullet-0 basic"><span>When to take it&hellip; </span></li>

        <li class="  li-bullet-0 basic"><span>What to take it with to increase its power and the
            speed of your
            results&hellip; &nbsp;</span></li>

        <li class="  li-bullet-0 basic"><span>Including 3 delicious foods that can increase the
            effectiveness of
            Total Brain Boost&hellip; </span></li>

        <li class="  li-bullet-0 basic"><span>Plus, how to follow the ideal 3-6 month regimen for
            best
            results&hellip;</span></li>
      </ul>


      <p><span>And a whole lot more!</span></p>
      <div style="clear:both"></div>
    </div>

    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.19 font-bold y18"><span class="font-bold">Bonus Gift
        #2:</span><span class=" ">&nbsp;The Better Brain
        Cookbook</span></h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image14.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image14.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>Next&hellip; one thing I discovered that helps people boost their brain power&hellip;
        </span></p>

      
      <p><span>Is to eat brain-healthy foods that also taste incredible.</span></p>


      <p><span>If the food you eat tastes great, you&rsquo;re more likely to keep eating it.</span>
      </p>


      <p><span>That&rsquo;s why I took a year to get certified as a trained chef at the Four Seasons
          restaurant in Seattle&hellip;</span></p>


      <p><span>Created a series of brain-healthy recipes&hellip;</span></p>


      <p><span>And put all of them into a short ebook called the </span><span class="font-bold">&ldquo;Better Brain
          Cookbook&rdquo;</span></p>


      <p><span>This digital ebook is filled with fast, simple, and hassle-free recipes for delicious
          meals, snacks, sides, and even desserts that can help skyrocket your memory, energy, focus, and
          concentration.</span></p>


      <ul class="p-3 ml-4 lst-kix_list_8-0 start">
        <li class="  li-bullet-0 basic"><span>These foods help boost your brain so you feel more
            focused, alert,
            and energized&hellip; </span></li>

        <li class="  li-bullet-0 basic"><span>You&rsquo;ll get 14 delicious and easy recipes for
            meals and snacks
            to fuel your day&hellip; </span></li>

        <li class="  li-bullet-0 basic"><span>You&rsquo;ll also get my &ldquo;brain-boosting
            snack&rdquo; recipe,
            the one I mentioned earlier. The recipe for this is so simple&mdash;I&rsquo;ll share it with you right now:
            &nbsp;In a bowl, combine blueberries, low-fat, organic plain yogurt (no sweetener or sugar added), with
            sliced
            almonds, and a dash of cinnamon. It&rsquo;s easy and delicious. The probiotics in the yogurt and the
            nutrients
            in the blueberries enhance brain function&hellip; </span></li>

        <li class="  li-bullet-0 basic"><span>And the instant &ldquo;brain-boosting&rdquo; shake
            you can make for
            fast focus and energy whenever you&rsquo;re feeling tired and don&rsquo;t want to drink a coffee&hellip;
          </span>
        </li>
      </ul>


      <p><span>You&rsquo;ll get all this and much more.</span></p>
      <div style="clear:both"></div>
    </div>

    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.3tbugp1"><span class="font-bold">Bonus Gift
        #3:</span><span class=" ">&nbsp;Brain Draining Foods
        to Avoid</span></h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image30.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image30.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>You&rsquo;re also going to get the </span><span class="font-bold">&ldquo;Brain-Draining Foods To
          Avoid&rdquo;</span><span>&nbsp;digital ebook.</span></p>

      
      <p><span>In this guide, I&rsquo;ll reveal the 21 worst foods you absolutely must avoid when it
          comes to your memory, energy levels, and focus.</span></p>


      <p><span>Some of these foods have falsely been called &ldquo;healthy&rdquo; by other
          experts.</span></p>


      <p><span>I&rsquo;ll also give you delicious replacements for these foods that energize and
          support your brain.</span></p>

      <div style="clear:both"></div>
    </div>


    <p><span>In this book, you&rsquo;ll discover:</span></p>


    <ul class="p-3 ml-4 lst-kix_list_9-0 start">
      <li class="  li-bullet-0 basic"><span>The #1 food you&rsquo;ll want to avoid at all costs
          when grocery
          shopping&mdash;make sure you look for this on the label and do not buy foods that contain it&hellip; </span>
      </li>

      <li class="  li-bullet-0 basic"><span>Toxic sweeteners - which sweeteners to avoid that can
          cause elevated blood
          sugar and headaches, and damage the gut microbiome&hellip; including the two so-called &ldquo;all
          natural&rdquo;
          sweeteners</span><span>&hellip; </span>
      </li>
      <li class="  li-bullet-0 basic"><span>Which cooking oils to avoid, plus the natural,
          delicious, and
          healthy alternatives to use instead&hellip; </span></li>
      <li class="  li-bullet-0 basic"><span>The 5 worst sauces you could ever eat that are loaded
          with
          brain-draining ingredients and the 5 best ones that I recommend instead&hellip; </span></li>
      <li class="  li-bullet-0 basic"><span>Foods that contain the worst and highest levels of
          toxins you want
          to avoid&hellip; </span></li>

      <li class="  li-bullet-0 basic"><span>And lastly, I&rsquo;ll also tell you the 3 foods you
          should never
          eat for breakfast&hellip; </span></li>
    </ul>
    <p><span>I&rsquo;ll tell you what these are right now: </span></p>
    <p><span>They are cereal, muffins, and concentrated fruit juice&hellip;</span></p>


    <p><span>Grain cereals are often packed with sugar and wheat, which may cause inflammation in the
        brain&hellip;</span><span>&nbsp;</span></p>


    <p><span>In this ebook, I&rsquo;ll give you my favorite replacements for these foods, as well
        as a healthier way to cook that is better for your brain and your overall health.</span></p>
    <p><span>And much more. </span></p>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.28h4qwu"><span class="font-bold">Bonus Gift
        #4:</span><span class=" ">&nbsp;Simple Brain-Boosting
        Exercises</span></h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image6.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image6.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>Next</span><span>, you&rsquo;ll also get my </span><span>&ldquo;</span><span class=" font-bold">Simple
          Brain-Boosting Exercises</span><span class="font-bold">&rdquo;</span><span>&nbsp;digital ebook.&nbsp;</span>
      </p>
      
      <p><span>The exercises in this book are designed to be short</span><span>&hellip;</span></p>
      <p><span>E</span><span>asy</span>&hellip;</p>
      <p><span>A</span><span>nd help you multiply your results from Total Brain Boost.&nbsp;</span>
      </p>
      <p><span>In it you&rsquo;ll discover:</span></p>
      <ul class="p-3 ml-4 lst-kix_list_4-0 start">
        <li class="  li-bullet-0 basic"><span>3 quick, easy, physical exercises to boost your
            mental
            clarity</span><span>, </span><span>energy</span><span>, a</span><span>nd focus even
            more&hellip; while also boosting your physical fitness as well</span><span>. (</span><span>Studies
            show these exercises can improve function in the hippocampus, the part of the brain that&rsquo;s responsible
            for
            learning and verbal memory</span><span>)</span></li>

        <li class="  li-bullet-0 basic"><span>T</span><span>he special mid-day walking technique
            you can do in
            the morning, after work, or on your lunch break</span><span>&hellip;</span><span>&nbsp;that boosts
            blood flow to the brain for enhanced focus and mental energy</span><span>&nbsp;</span><span>while
            fighting off afternoon crashes</span><span>&hellip; </span></li>
        <li class="  li-bullet-0 basic"><span>T</span><span>he simple &ldquo;milk jug&rdquo;
            technique that
            studies show can provide the same brain</span><span>-</span><span>boosting benefits in one third of
            the time as you would get from exercising 30 minutes a day, 5 days a week&hellip;</span></li>
      </ul>

      <p><span>And much more. </span></p>

      <div style="clear:both"></div>
    </div>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.nmf14n"><span class="font-bold">Bonus Gift
        #5:</span><span class=" ">&nbsp;Simple Stress
        Management</span></h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image1.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image1.png"
          style="  " class="float-left md:mr-4 mb-3 w-full md:w-2/5" title="">
      </picture>

      <p><span>And finally, you&rsquo;ll also get my &ldquo;</span><span
          class="font-bold">Simple</span><span>&nbsp;</span><span class="font-bold">Stress
          Management&rdquo;</span><span>&nbsp;digital
          ebook.&nbsp;</span></p>
      <p><span>This guide will show you how to minimize stress in as little as one minute per
          day.</span></p>
      <p><span>As a result, you&rsquo;ll notice less anxiety, more mental clarity, and even some
          potentially more profound effects as your hormones become more naturally balanced.&nbsp;</span></p>
      <p><span>Inside you&rsquo;ll discover:</span></p>
      <ul class="p-3 ml-4 lst-kix_list_4-0">
        <li class="  li-bullet-0 basic"><span>The simple 1-minute &ldquo;chair meditation&rdquo;
            you can do
            anywhere to center yourself and clear your mind when things get crazy (it&rsquo;s like an instant
            &ldquo;pick-me-up&rdquo; for mood and concentration)&hellip;</span></li>

        <li class="  li-bullet-0 basic"><span>An ancient &ldquo;counting breaths&rdquo; technique
            that lowers
            stress hormone levels and restores balance to your body&mdash;try it 10-minutes before bed to turn off a
            &ldquo;busy brain&rdquo; and fall into a deeper, more peaceful sleep&hellip; &nbsp;</span></li>
        <li class="  li-bullet-0 basic"><span>Then try this A.M &ldquo;body scan&rdquo; while lying
            in bed to
            target and remove areas of tension that are holding you back and weighing down your body and mind. (This
            helps
            you start your day with more energy, ease and focus.) </span></li>
        <li class="  li-bullet-0 basic"><span>Plus</span><span>&nbsp;the easy &ldquo;Total
            Calmness&rdquo;
            exercise to calm your mind in as little as 3 minutes &ndash; Stress wreaks havoc on the brain and this
            simple
            exercise reduces stress while boosting focus, energy, and mood&hellip; leaving you feeling refreshed and
            recharged</span>&hellip;</li>
      </ul>
      <p><span>You&rsquo;ll get all this and much more!</span></p>
      <div style="clear:both"></div>
    </div>


    <p><span>All for free.</span></p>


    <p><span>And to be clear, these are the same tips that I have given my own patients for
        years&mdash;empowering them to achieve awesome benefits.</span></p>


    <p><span>And you&rsquo;ll get instant access to these digital books the second you
        order&hellip;</span></p>


    <p><span>So you can start enhancing your brain and overall health immediately.</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.37m2jsg"><span class="   font-bold">All you need to
        do is to click the button below:</span>
    </h3>


    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>
    <p><span class="  font-bold"></span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.1mrcu09"><span
        class="font-bold">Total Brain Boost</span><span>&nbsp;Is Formulated With Ingredients You
        Can </span><span class="font-bold">Trust</span><span class=" ">&hellip;</span></h2>


    <p><span>I also want to take a second to talk about the </span><span class="font-bold">quality</span><span>&nbsp;of
        the ingredients used in Total Brain Boost.</span></p>


    <p><span>I&rsquo;ve heard </span><span class="font-bold">horror stories</span><span>&nbsp;from
        patients&hellip;</span></p>


    <p><span>About supplements that didn&rsquo;t work&hellip;</span></p>


    <p><span>And manufacturers that actually lied about the ingredients in their product. </span>
    </p>


    <p><span>I&rsquo;m not going to name names&hellip; </span></p>


    <p><span>But a general rule of thumb is to avoid common drugstore and &ldquo;supermarket&rdquo;
        brands.</span></p>


    <p><span>I tell my patients: never buy a supplement unless you are 100% certain</span></p>


    <ol class="p-3 ml-4 lst-kix_list_10-0 start" start="1">
      <li class="  li-bullet-0" style="list-style:decimal; padding-left:10px; background-image: none"><span>It&rsquo;s made in a </span><span
          class="font-bold">GMP-certified</span><span>&nbsp;facility</span></li>

      <li class="  li-bullet-0" style="list-style:decimal; padding-left:10px; background-image: none"><span>It&rsquo;s been </span><span
          class="font-bold">third party
          tested</span><span>&nbsp;by a reputable company</span></li>

      <li class="  li-bullet-0" style="list-style:decimal; padding-left:10px; background-image: none"><span>You know </span><span
          class="font-bold">exactly</span><span>&nbsp;where the
          product is manufactured</span></li>

      <li class="  li-bullet-0" style="list-style:decimal; padding-left:10px; background-image: none"><span>You are sure that it contains
          ingredients that are </span><span class="font-bold">safe</span><span>&nbsp;and have been </span><span
          class="font-bold">proven</span><span>&nbsp;to
          work</span></li>
    </ol>


    <p><span>I made sure Total Brain Boost meets all of these requirements and more.</span></p>


    <p><span>Total Brain Boost is filled, bottled, packaged, and shipped right here in the </span><span
        class="font-bold">United States</span><span>.</span></p>



    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image26.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image26.png"
          style="  " class="float-right md:ml-4 mb-3 w-full md:w-2/5" title="">
      </picture>
      <p><span>It&rsquo;s put through a thorough series of lab tests by a trusted third party lab.</span>


      <p><span>Including &ldquo;atomic absorption spectroscopy&rdquo; and &ldquo;liquid
          chromatography&rdquo; testing.</span></p>


      <p><span>This testing can cost up to ten thousand dollars per batch or more&hellip; </span></p>


      <p><span>And requires a team of at least 10 people to document, test, and review everything to
          make sure the product is top quality&hellip; </span></p>


      <p><span>And that you get the purest and most potent dosage in each and every capsule.</span>
      </p>


      <p><span>Total Brain Boost is also </span><span class="font-bold">allergen free</span><span>&hellip; </span><span
          class="font-bold">gluten free</span><span>&hellip; and </span><span class="font-bold">lactose
          free</span><span>.</span></p>


      <p><span>As I said before&hellip;</span></p>


      <p><span>If you don&rsquo;t love this, if you don&rsquo;t feel it&rsquo;s working every bit as
          great for you as you expected&hellip;</span></p>


      <p><span>Just call or email Revival Point any time within the next 90 days and get a </span><span
          class="font-bold">full refund</span><span>.</span></p>


      <p><span>No pharmaceutical company would ever do this&hellip; right?</span></p>


      <p><span>After all, when was the last time you got a refund if your medication didn&rsquo;t
          work?</span></p>


      <p><span>The next step is easy&hellip;</span></p>
      <div style="clear:both"></div>
    </div>

    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.46r0co2"><span>Just </span><span
        class="font-bold">click the button below</span><span class=" ">&nbsp;to continue to the secure order
        page:</span></h3>


    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>


    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.2lwamvv"><span
        class=" ">Here&rsquo;s What Happens Next&hellip;</span></h2>


    <p><span>Once you get to the order page&hellip; </span></p>


    <p><span>Just choose your discount package.</span></p>


    <p><span>You&rsquo;ll get the </span><span class="font-bold">biggest savings</span><span>&nbsp;if you
        choose the three or six month packages.</span></p>


    <p><span>Just click the button to continue to the checkout to enter your payment
        information.</span></p>


    <p><span>The site uses </span><span class="font-bold">256-Bit Secure SSL technology</span><span>&hellip; </span></p>


    <p><span>Which is the top-of-the-line security technology to protect your data.</span></p>


    <p><span>Your information is never shared with anyone, under any circumstances.</span></p>


    <p><span>Revival Point uses the same 256-Bit SSL technology as companies like Google and Amazon
        &hellip;</span></p>


    <p><span>Once your order is complete&hellip; </span></p>


    <p><span>Your order will be processed the same day&hellip;</span></p>

    <div>

      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image23.jpg" type="image/jpg">
        <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image23.png"
          class="float-left md:mr-4 mb-3 w-full md:w-1/4" title="">
      </picture>

      <p><span>You will get a tracking number by email within </span><span class="font-bold">24 business
          hours</span><span>.</span></p>

      
      <p><span>If you&rsquo;re in the USA, your package will be sent via </span><span class="font-bold">DHL&rsquo;s
          3-Day Guaranteed Shipping</span><span>&nbsp;straight to the address you provide.</span></p>


      <p><span>If you&rsquo;re overseas, your package will take </span><span class="font-bold">just 6-8
          days</span><span>&nbsp;on average to arrive.</span></p>


      <p><span>You can follow your order every step of the way with your tracking code. </span></p>


      <p><span>Or call or email Revival Point&rsquo;s </span><span class="font-bold">24-hour customer
          service</span><span>&nbsp;team any time if you have questions.</span></p>
      <p><span>And last but not least&hellip; </span></p>


      <p><span>Today, when you place your order&hellip;</span></p>
      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.111kx3o">
      <span>A Portion Of Your Purchase Will Be Donated To The </span><span class="  text-blue font-bold">Vitamin Angels&nbsp;Charity</span>
    </h2>

    <div>
      <div class="flex flex-col float-right md:ml-4 mb-3 w-full md:w-2/5">
        <picture>
          <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image41.jpg" type="image/jpg">
          <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image41.png" title="">
        </picture>
        <picture>
          <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image20.jpg" type="image/jpg">
          <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image20.png" class="border m-1"
            style="margin-top: -10px;width: 97%;margin-left: auto;margin-right: auto;" title="">
        </picture>
      </div>
      <p><span>This charity helps get vitamins to an impoverished child living in a third-world
          country&hellip;</span></p>


      <p><span>While I was traveling to many of these countries, helping impoverished people, I saw first hand
          just how big of an impact these donations can make.</span></p>
      <p><span>The vitamins we can get with the money from your order today will give multiple kids a
        </span><span class="font-bold">better chance to grow up</span><span class="font-bold">&nbsp;</span><span
          class="font-bold">healthy and
          strong</span><span>, and allow them to lead much better lives&hellip;</span></p>


      <p><span>And so if you order, I will </span><span class="font-bold">thank you personally</span><span>&nbsp;for
          your
          gift today.</span></p>
      <div style="clear:both"></div>
    </div>

    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.3l18frh">
      <span>There Are Really Only </span><span class="font-bold">Two Places</span><span class=" ">&nbsp;Left To Go From
        Here&hellip;</span>
    </h2>


    <p><span>First, you can leave this page and keep doing what you&rsquo;ve been doing.</span></p>


    <p><span>But if you&rsquo;re anything like the hundreds of patients who have come to my clinic
        dealing with memory loss, brand fog, and lack of focus&hellip;</span></p>


    <p><span>Things may only continue to get worse.</span></p>


    <p><span>You may become even more forgetful and </span><span class="font-bold">un</span><span>focused&hellip;</span>
    </p>


    <p><span>You may feel embarrassed around your friends and family&hellip; </span></p>


    <p><span>You may start to scare your husband or wife&hellip; </span></p>


    <p><span>You may even feel like you&rsquo;re losing your mind&hellip;</span></p>


    <p><span>And on top of that, it may become harder to get things done&hellip;</span></p>


    <p><span>Harder to read, remember, and learn things&hellip;</span></p>


    <p><span>And as I said before, when a patient walks into my clinic with concerns about memory
        and brain fog&hellip; </span></p>


    <p><span>I take it very seriously.</span></p>


    <p><span>And the</span><span class="font-bold">&nbsp;first place I usually start</span><span>&nbsp;is the right
        food and </span><span class="font-bold">nutrients</span><span>&nbsp;to feed their brain.</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.206ipza"><span
        class=" ">Most Experts And Doctors Won&rsquo;t Tell You What I&rsquo;ve
        Told You Here Today&hellip; </span></h2>


    <p><span>That you can not only boost the brain&hellip; </span></p>


    <p><span>But can </span><span class="font-bold">grow new neurons</span><span>&nbsp;and </span><span
        class="font-bold">pathways</span><span>&hellip; </span></p>


    <p><span>Helping you to </span><span class="font-bold">feel more mentally energized</span><span>, </span><span
        class="font-bold">focused,</span><span>&nbsp;and </span><span class="font-bold">youthful</span><span>.</span>
    </p>


    <p><span>You have knowledge that most others don&rsquo;t have.</span></p>


    <p><span>You&rsquo;ve seen the research showing that boosting the brain is not only
        possible&hellip;</span></p>


    <p><span>But </span><span class="font-bold">effective</span><span>&hellip;</span></p>


    <p><span>And </span><span class="font-bold">easy</span><span>&nbsp;to do.</span></p>


    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.4k668n3"><span class=" ">All you need to get started
        is to click the button below:</span>
    </h3>


    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>




    <p><span>The nutrients in Total Brain Boost are linked to a </span><span class="font-bold">stronger</span><span>,
      </span><span class="font-bold">healthier</span><span>&nbsp;brain&hellip;</span></p>


    <p><span>But also to a stronger memory, more </span><span class="font-bold">mental energy</span><span>,
      </span><span class="font-bold">focus,</span><span>&nbsp;and being </span><span class="font-bold">more
        capable</span><span>&hellip;</span></p>


    <p><span>Allowing people to live a more </span><span class="font-bold">active, independent</span><span>&nbsp;and
      </span><span class="font-bold">fulfilling</span><span>&nbsp;life. </span></p>


    <p><span>A life where you may feel sharper than you have in years&hellip;</span></p>


    <p><span>You&rsquo;ve got more confidence that you can count on your brain to remember what
        matters most</span></p>


    <p><span>If you&rsquo;ve been struggling with forgetfulness, mental fatigue, and brain
        fog&hellip; </span></p>


    <p><span>If you&rsquo;ve been feeling tired and unfocused&hellip; </span></p>


    <p><span>If you sometimes forget things in just minutes&hellip; or seconds after they are
        said</span></p>


    <p><span>If you are having a harder time remembering words, names, people, places,
        appointments&hellip;</span></p>


    <p><span>If you lose your place when speaking&hellip; </span></p>


    <p><span>Mix up letters and numbers&hellip; </span></p>


    <p><span>Or need to read everything twice to understand it&hellip;</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.2zbgiuw"><span>I believe this can be</span><span
        class="font-bold">&nbsp;one of the most important
        things</span><span class=" ">&nbsp;you do for your health&hellip;</span></h3>


    <p><span>Because, as I said before, the forebrain is like the control center of the body.</span>
    </p>


    <p><span>It impacts your ability to be </span><span class="font-bold">active</span><span>&nbsp;and make
      </span><span class="font-bold">smart decisions</span><span>&hellip;</span></p>


    <p><span>Not only for your health, but for your finances, job, and relationships. </span></p>


    <p><span>And without the forebrain healthy and working at its best&hellip; </span></p>


    <p><span>It can feel impossible to think straight or get things done. </span></p>


    <p><span>Work can be </span><span class="font-bold">exhausting</span><span>, you move slowly, lose your
        place, and everything gets done late.</span></p>


    <p><span>You may </span><span class="font-bold">remember less</span><span>&nbsp;about what people
        say.</span></p>


    <p><span>You feel </span><span class="font-bold">tired</span><span>&nbsp;and are</span><span
        class="font-bold">&nbsp;unable to focus </span><span>when people are talking to you.</span></p>


    <p><span>I&rsquo;ve seen how big of a </span><span class="font-bold">struggle</span><span>&nbsp;this is
        for many of my patients.</span></p>


    <p><span>And it led me to develop the solution I have for you today.</span></p>


    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.1egqt2p">
      <span>There Is </span><span class="font-bold">No Reason </span><span>For You To Spend The Next
        5 Or 10 Years (Or Longer) Dealing With</span><span class="font-bold">&nbsp;Brain Fog</span><span>, Feeling
      </span><span class="font-bold">Forgetful</span><span>, And </span><span class="font-bold">Worn Down</span><span
        class=" ">&nbsp;If You
        Don&#39;t Have To&hellip;</span>
    </h2>


    <picture>
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image25.jpg" type="image/jpg">
      <img alt="" src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image25.png"
        style="  " class=" mb-3 w-full" title="">
    </picture>



    <p><span>You have a </span><span class="font-bold">solution</span><span>&nbsp;in front of you right now
        that can help change this.</span></p>


    <p><span class="  font-bold">Try out Total Brain Boost now, risk free.</span></p>


    <p><span>And see just how big the difference can be.</span></p>

    <p><span>This is an opportunity to have more brain vitality and greater health for years to
        come.</span></p>


    <p><span>I think back to how mainstream medicine failed my stepdad, Chuck.</span></p>


    <p><span>He was told he had a clean bill of health by his doctor.</span></p>


    <p><span>And yet just a week later&hellip; </span></p>


    <p><span>He had a serious and sudden health event that left him with brain damage so
        severe&hellip;</span></p>


    <p><span>He couldn&rsquo;t talk or dress himself.</span></p>


    <p><span>It robbed him of his life and his future.</span></p>


    <p><span>I told you Chuck made a list of 100 things he wanted to do with the rest of his
        life.</span></p>


    <p><span>Maybe you have a list of things you want to do with the rest of your life, too.</span>
    </p>


    <p><span>Maybe you want to spend </span><span class="font-bold">more time</span><span>&nbsp;with your
        friends and family.</span></p>


    <p><span>Have more engaging conversations.</span></p>


    <p><span>Listen better and remember more.</span></p>


    <p><span>Be more involved in your kids&rsquo; or grandkids&#39; lives.</span></p>


    <p><span>Have the memory and</span><span class="font-bold">&nbsp;focus</span><span>&nbsp;to support
        them and show them you care.</span></p>


    <p><span>Maybe you want to enjoy more quality or intimate time with your husband or wife.</span>
    </p>


    <p><span>To have </span><span class="font-bold">stronger </span><span>attention</span><span
        class="font-bold">&nbsp;</span><span>when you&rsquo;re alone together.</span></p>


    <p><span>It took me nearly 20 years of research just to find out this was even possible&hellip;
      </span></p>


    <p><span>Another ten years to find the best, brain-boosting nutrients&hellip; </span></p>


    <p><span>And put them into this product&hellip;</span></p>
    <h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11" id="h.3ygebqi">
      <span>All the work has been done for you.</span>
    </h2>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.sfh926oxyqo9"><span class="   font-bold">All you need
        to do now is just click the button
        below:</span></h3>


    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>




    <p><span>This is something that is so new, that even just 5 years ago, it just wasn&rsquo;t
        possible&hellip; </span></p>


    <p><span>Because all the research wasn&rsquo;t done yet.</span></p>


    <p><span>But now, we know it&rsquo;s not only possible&hellip;</span></p>


    <p><span>But it takes less than a minute of your time each day to get started.</span></p>


    <p><span>All you need to do is </span><span class="font-bold">click the button below</span><span>&nbsp;now </span>
    </p>


    <p><span>And if for any reason you&rsquo;re not happy with the results&hellip;</span></p>

    <p><span>You can call or email Revival Point any time in the next 90 days&hellip; &nbsp;</span>
    </p>


    <p><span>And get your money back in full, including tax and shipping.</span></p>


    <p><span>I told you earlier about when my patient, Grace, first came to see me&hellip;</span>
    </p>


    <p><span>She thought she was out of options.</span></p>


    <p><span>Yet after trying my advice, she felt like a brand new woman. </span></p>


    <p><span>She was more focused and had a stronger memory.</span></p>


    <p><span>She was thinking clearer, making smarter choices for her life, and was sleeping better.
      </span></p>


    <p><span>She regained her confidence and was spending more quality time with her family&hellip;
      </span></p>


    <p><span>Her friends couldn&rsquo;t believe how much sharper, more focused, and positive she
        was.</span></p>


    <p><span>And Grace is just one of many success stories I&rsquo;ve seen.</span></p>


    <p><span>And these improvements aren&rsquo;t fleeting&hellip;</span></p>


    <p><span>In patients I&rsquo;ve tracked over the years, changes have lasted as long as they&rsquo;ve stuck
        with the regimen&hellip;</span></p>
    <h3 class="text-center text-lg md:text-2xl my-4 md:my-8" id="h.2dlolyb"><span class="   font-bold">And change can
        happen at any age</span></h3>
    <p><span class="  "></span></p>
    <p><span>Even if you feel you&rsquo;re too old, too forgetful, too tired, or out of options and
        ready to give up&hellip;</span></p>


    <p><span>I believe if you try this today&hellip;</span></p>


    <p><span>You can start to feel a bit better each day.</span></p>


    <p><span>And before long you&rsquo;ll be amazed at how you feel.</span></p>


    <p><span>The opportunity is right here in front of you</span></p>


    <p><span>All you have to do is take it. </span></p>


    <p><span>You&rsquo;ve got a big discount</span></p>


    <p><span>Five free bonus gifts</span></p>


    <p><span>And a 90-Day money back guarantee</span></p>


    <p><span>All you need to do now is </span><span class="  font-bold">click the button below</span></p>


    <p><span>I&rsquo;m Dr. Steven Masley. I wish you the best of health&hellip;</span></p>


    <p><span>And I hope to see you on the next page&hellip;</span></p>


    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>


  </div>
  </div>


  <script>
  const wslBtn = document.querySelectorAll('#wsl-btn');
  wslBtn.forEach(btn => {
    btn.addEventListener('click', () => {
      window.location = '<?= $nextlink; ?>';
    })
  })
  

  function scrollToId(id) {
    document.getElementById(id).scrollIntoView({
      behavior: "smooth"
    });
  }
  </script>

  <?php template("includes/rpFooter"); ?>
  <?php if ($site['debug'] == true) {
    // Show Debug bar only on whitelisted domains.
    template('debug', null, null, 'debug');
} ?>
</body>

</html>