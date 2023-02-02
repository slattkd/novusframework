<?php
  $nextlink = $nextlink = '/checkout/order' . $querystring;
  $_SESSION['pageType'] = 'wsl';
?>

<html lang="en">

<head>
  <?php template('includes/header'); ?>
  <title>Cerebral Boost</title>
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
    line-height: 35px;
    line-height: 1.3;
  }

  .wsl li {
    list-style: none;
    padding: 10px 30px;
    background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/check-green.png');
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 20px;
  }

  .wsl li.red-x {
    background-image: url('//<?= $_SERVER["HTTP_HOST"];?>/images/red-x.png');
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

<body class="bg-gray-100 wsl">

  <?php 
  $container = 'container-vsl';
  template("includes/rpHeader"); ?>

  <div class="container-vsl mx-auto my-2 bg-white border-2 p-4 md:p-8 mt-6 mb-11 rounded-lg text-gray-600"
    style="position:relative">

    <h1 class="text-3xl md:text-5xl text-tygreen leading-6 title">This Florida MD&rsquo;s 20-Second &ldquo;<span class="font-bold">Cerebral
      Boost</span>&rdquo; Strengthens Your Memory And Focus, Keeping You
      Razor Sharp Well Into Your 50s, 60s, 70s, and even 80s&hellip;</h1>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">While Helping To Fight Off Memory Loss, Brain
      Fog, And Cognitive Decline At The Source&hellip;</h3>

    <picture class="flex justify-center mb-4">
      <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image37.jpg" type="image/jpg">
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image37.jpg" alt="happy couple riding bikes">
    </picture>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image16.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image16.jpg" alt="dr masley"
          class="float-right md:ml-4 mb-3 w-full md:w-2/5" loading="lazy">
      </picture>
      <p>Hi, I&rsquo;m <span class="font-bold">Dr. Steven Masley, MD, FAHA, FACN, CNS</span></p>

      <p>Today I&rsquo;m going to share my breakthrough method to boost your memory, focus, and help you feel sharper at
        any age&hellip;</p>
      <p>I call it my <span class="font-bold">&ldquo;Cerebral Boost&rdquo; Method</span>.</p>
      <p>It takes just 20 seconds&hellip; and it's fast and easy to do.</p>
      <div style="clear:both"></div>
    </div>

    <p>I developed it at my clinic in St Petersburg, Florida&hellip;</p>
    <p>Where I&rsquo;ve seen firsthand how it has <span class="font-bold">completely transformed</span> my life for the
      better and the lives of my
      patients as well:</p>
    <ul class="p-3">
      <li>Helping us remember names, people, places, and things better &hellip;</li>

      <li>Sharpening our <span class="font-bold">focus</span>&hellip; to get more done in less time&hellip;</li>

      <li>And helping us feel <span class="font-bold">more confident, able, and energized</span>&hellip;</li>
    </ul>
    <p>This simplemethod works by activating a very specificpart of the brain that has the biggest impact
      when it comes to memory, brainfunction, and focus&hellip;</p>
    <p>And I believe boosting this area of the brain is one of the most important things you can do for your happiness,
      mental edge, and even your overall health in many ways&hellip;</p>
    <p>I&rsquo;ve seen how it can turn someone who feels forgetful, sluggish, and weighed down&hellip;</p>
    <p>Into a more vibrant, mentally sharper, and happier version of themselves.</p>
    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">And The Best Part Is,
      This &ldquo;Cerebral Boost&rdquo; Method Is Completely Natural And Starts Working Almost
      Instantly&hellip;</h2>
    <p class="font-bold">And it <span class="underline">doesn&rsquo;t</span> involve:</p>
    <ul class="p-3">
      <li class="red-x">Drugs or medical procedures.</li>

      <li class="red-x">Caffeine or energy drinks&hellip;</li>

      <li class="red-x">Crazy eating plans or exercises&hellip;</li>
    </ul>
    <p>And it can help no matter your age or how hopeless you feel.</p>
    <p>All you need is <span class="font-bold">just 20 seconds</span> seconds each morning before you eat
      breakfast&hellip;</p>
    <p>And once again before bed&mdash;plus a bonus few, easy-to-follow lifestyle tips&mdash;and you will feel more
      <span class="font-bold">focused, sharper, and mentally energized</span> than you have in years.</p>
    <p>In some cases, it can start working within a <span class="font-bold">couple hours</span>.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Imagine your mind buzzingwith newfound
      sharpness, focus, and mental energy&hellip;</h3>

    <div>
      <picture>
        <source srcset="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image5.jpg" type="image/jpg">
        <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image5.jpg" alt="dancing girl and grandmother"
          class="float-left md:mr-4 mb-3 w-full md:w-1/2" loading="lazy">
      </picture>
      <p>Remembering the simple things that used to slip your memory&hellip;</p>
      <p>Thinking <span class="font-bold">sharper and faster</span>&hellip;</p>
      <p>Feeling more capable and confident in yourself&hellip;</p>
      <p>Feeling more alive, mentally quicker, and ready to do more&hellip;</p>
      <p>Less like you want to go home and pass out after work&hellip;</p>
      <p>And more like you want to go out and live your <span class="font-bold">life to the fullest</span>.</p>
      <div style="clear:both"></div>
    </div>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Imagine thinking <span
        class="font-bold">clearer</span> and being more <span class="font-bold">focused</span>&hellip;</h3>
    <p><span class="font-bold">Remembering</span> more from your life&hellip;</p>
    <p>Stories, places, things, and people&rsquo;s names&hellip;</p>
    <p>Where you put your keys and your glasses&hellip;</p>
    <p>What you need to get done&hellip;</p>
    <p>Even making better decisions&hellip;</p>
    <p>Like making healthier eating choices</p>
    <p>And solving problems faster</p>
    <p>And feeling more mentally <span class="font-bold">alive and happier</span> than you have in ages.</p>
    <p>I know you might feel a bit skeptical now&hellip;</p>
    <p>And in today&rsquo;s world, being skeptical is a GOOD THING.</p>
    <p>Many of my most successful patients felt the same way&hellip;</p>
    <p>Until they experienced this amazing transformation for themselves.</p>
    <p>Over the last three decades&hellip;</p>

    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">I&rsquo;ve Been Able
      To Help <span class="font-bold">Thousands</span> Of Men And Women Strengthen Their Memory, Feel More <span class="font-bold">Focused</span>, Think
      <span class="font-bold">Faster</span>, And Feel Ready To Take On The World&hellip; 
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image35.jpg" /></h2>

    <p>&hellip;even when other doctors couldn&rsquo;t help.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">When <span class="font-bold">Grace</span> first came to see me, she was <span class="font-bold">becoming a burden on her loving husband</span>&hellip;</h3>
    <p>She was only in her 50s but she was so tired every day she had to drag herself out of bed each morning&hellip;</p>
    <p>Her memory and focus had gotten worse and she told me it felt impossible to get anything done.</p>
    <p>Her husband was really concerned.</p>
    <p>He had seen her memory declining for almost a year&hellip;</p>
    <p>He was scared and didn&rsquo;t know what to do&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">But no matter what she tried, Grace just
      couldn&rsquo;t fend off the <span class="font-bold">chronic exhaustion, memory lapses,</span> and
      <span class="font-bold">brain fog</span> she felt all day long&hellip;</h3>
    
    
    <div>
      <!-- img float right -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image10.jpg" /></p>
    <p>Worse, her friends had started to avoid her&hellip;</p>
    <p>Because she was tired, forgetful, and in a bad mood around them all the time.</p>
    <p>Grace tried coffee, some vitamins, and getting more sleep to get her life back on track</p>
    <p>But <span class="font-bold">nothing worked</span>.</p>
    <p>So I had Grace follow a few, very specific steps&hellip;</p>
    <p>And weeks later she said she felt like a <span class="font-bold">new woman</span>.</p>
    <p>She was mentally sharper, more focused, and had a stronger memory.</p>
    <p>She was <span class="font-bold">getting things done</span> around the house.</p>
    <p>She was sleeping better and bouncing out of bed in the morning&hellip;</p>
    <p>She remembered things better and was able to focus and pay attention better to conversations.</p>
    <p>With her new found focus she was even able to be more active socially&hellip;</p>
    <p>And even take up yoga and tennis&hellip;</p>
    <p>She was more social and in a good mood around her friends again.</p>
    <p>Even the romance heated back up with her husband.</p>
    <div style="clear:both"></div>
    </div>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">When another woman, named <span class="font-bold">Sally</span>,came to see
      me, she was afraid of <span class="font-bold">losing her job</span>&hellip;</h3>
    <p>She felt exhausted&hellip;</p>
    <p>Couldn&rsquo;t focus at work&hellip;</p>
    
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">She <span class="font-bold">couldn&rsquo;t think straigh</span> tand could
      barely keep her eyes open after lunch, <span class="font-bold">no matter how much she slept </span>the night before&hellip;</h3>

      <!-- img full width -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image15.jpg" /></p>
    <p>And she was forgetting assignments and making silly mistakes on tasks she used to do with ease.</p>
    <p>And she felt embarrassed around her coworkers because of it.</p>
    <p>So I had her follow a few <span class="font-bold">specific steps</span>&hellip;</p>
    <p>Steps I&rsquo;ll share with you shortly&hellip;</p>
    <p>And just <span class="font-bold">30 days later</span> she told me&hellip;</p>
    <p>She felt like <span class="font-bold">Superwoman</span>.</p>
    <p>She was <span class="font-bold">re-energized</span>&hellip;</p>
    <p>More <span class="font-bold">mentally alert, focused, and sharp</span>&hellip;</p>
    <p>Checking off all her assignments and multi-tasking with ease&hellip;</p>
    <p>Getting her work done <span class="font-bold">early</span>.</p>
    <p>Even helping her coworkers solve tough problems.</p>
    <p>And now she was in line for a nice promotion.</p>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Then there&rsquo;s Dale&hellip;</h3>

    <div>
    <!-- img float left -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image2.jpg" /></p>
    <p>He had been a highly-successful CEO for a local company for nearly 10 years.</p>
    <p>But when he came to see me, he was afraid he was losing his mind.</p>
    <p>He couldn't remember the names of staff he had known for years&hellip;</p>
    <p>Or a seven digit phone number for long enough to dial it.</p>
    <p>Every task felt like twice as much work.</p>
    <p>He felt exhausted all day&hellip;</p>
    <p>He was missing out on his kids' games and award ceremonies because he had to work extra hours to get his work
      done
      because he just couldn&rsquo;t focus.</p>
    <p>And he&rsquo;d lost the desire to be with his wife intimately.</p>
    <p>And because he was so <span class="font-bold">miserable</span>&hellip;</p>
    <p>He started drinking.</p>
    <p>So I gave him a <span class="font-bold">few simple steps</span> to follow&hellip;</p>
    <div style="clear:both"></div>
    </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">And when he came
      back, he told me he felt like he&rsquo;d <span class="font-bold">turned back the clock 20 years</span>&hellip;</h2>
    <p>He thanked me for giving him his life back.</p>
    <p>His memory was sharper</p>
    <p>He was thinking clearer&hellip; and his brain wasn&rsquo;t completely &lsquo;sapped&rsquo; after work anymore.</p>
    <p>Now he had the <span class="font-bold">energy</span> to go swimming and water skiing with his kids on the weekends&hellip;</p>
    <p>He <span class="font-bold">lost weight</span> from being so much more active and getting back to the gym&hellip;</p>
    <p>He was <span class="font-bold">intimate</span> again with his wife&hellip;</p>
    <p>And felt like he was back on top of the world.</p>
    <p>And these are just a few of the life-transforming success stories I&rsquo;ve been lucky enough to be a part
      of&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Now, I Want To Show
      You How You Can <span class="font-bold">Boost</span> Your Memory And Sharpen Your Mind Too, Using This &ldquo;<span class="font-bold">Cerebral
      Boost</span>&rdquo; Method I Mentioned Earlier&hellip;</h2>
    <p>To help you enjoy some of these same benefits for yourself.</p>
    <p>I&rsquo;m going to show you exactly how this <span class="font-bold">20 second</span> method works&hellip;</p>
    <p>How I discovered it&hellip;</p>
    <p>The research I and others have done that shows just how powerful it is&hellip;</p>
    <p>And how you can start using it for yourself, from the comfort of your own home, as soon as this week to start
      seeing great results, too.</p>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">I&rsquo;ll also give you my top <span class="font-bold">Brain-Boosting
      afternoon snack recipe</span>&hellip; 
    </h3>
      
    <div>
      <!-- img float right -->
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image38.jpg" />

    <p>One that I&rsquo;ve been eating daily myself for nearly 25 years&hellip;</p>
    <p>And can help keep you more mentally sharp and focused throughout your day.</p>
    <p>I&rsquo;m going to tell you everything you need to know today.</p>
    <div style="clear:both"></div>
    </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">I've Helped Hundreds
      of Men &amp; Women Boost Their Memory, Focus, And Cognition Speed At My Clinic In St.
      Petersburg, FL&hellip;</h2>

    <div>
      <!-- img float right -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image39.jpg" /></p>
    <p>Now, as I said before, my name is <span class="font-bold">Dr. Steven Masley</span>&hellip;</p>

    <p>I&rsquo;ve been a MD physician, medical researcher, certified nutritionist, and trained chef for nearly three
      decades.</p>
    <p>And l am a Fellow with the American Heart Association and the American College of Nutrition.</p>
    <p>I&rsquo;ve written five best-selling books.</p>
    <p>Appeared on national TV, the Discovery Channel&hellip;</p>
    <p>And created one of the top health shows on PBS.</p>
    <p>I am also a university professor, and have lectured to over 30,000 doctors and medical providers across the globe.</p>
    <p>But at the age of 43, after residency, and working for ten years as a physician&hellip;</p>
    <div style="clear:both"></div>
  </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11"><span class="font-bold">Something Terrible Happened</span> 
  That Changed The Course Of My Life And My Career Forever&hellip;</h2>

    <!-- img full width -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image12.jpg" /></p>

    <p>And eventually led me to discover my &ldquo;Cerebral Boost&rdquo; Method.</p>
    <p>See when I was a teenager, my step-dad Chuck was a wonderful support in my life, and later when I had two young
      boys, he and my mom were a terrific help again.</p>
    <p>The day he retired, Chuck said his doctor gave him a clean bill of health.</p>
    <p>And he made a list of 100 things he wanted to do with the rest of his life.</p>
    <p>Chuck was a super-sharp, active guy.</p>
    <p>He loved walking around downtown Seattle&hellip;</p>
    <p>Taking my mom out on the town&hellip;</p>
    <p>And playing with his grandchildren.</p>
    <p>But the first week into his retirement&hellip;</p>
    <p>He was walking to a community meeting&hellip;</p>
    <p>And he got this chest pain&hellip;</p>
    <p>And was <span class="font-bold">rushed to the hospital</span>&hellip;</p>
    <p>Where they took him to the cath lab, and during the procedure they accidentally <span class="font-bold">sent a massive clot</span> towards
      Chuck&rsquo;s brain.</p>
    <p>Half of Chuck&rsquo;s <span class="font-bold">brain died</span>, deprived of oxygen.</p>
    <p>Now he couldn't dress himself&hellip;</p>
    <p>He couldn't feed himself&hellip;</p>
    <p>And he could barely talk.</p>
    <p>The man I knew and loved was <span class="font-bold">gone</span>.</p>
    <p>Instead of our fun conversations&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Chuck Now Just Sat In
      A Recliner Like A Vegetable, <span class="font-bold">Suffering</span>&hellip; In <span class="font-bold">Misery</span>&hellip;</h2>

    <p>And it tore me up inside.</p>
    <p>I saw first hand how debilitating <span class="font-bold">damage</span> to the brain could be&hellip;</p>
    <p>How a loss in brain function could rob someone of their life and independence, and how he had become a burden on
      my mom&mdash;something he never wanted.</p>
    <p>And the worst part was&hellip;</p>
    <p>Despite years of medical training at one of the best universities in the country&hellip;</p>
    <p>There was <span class="font-bold">nothing</span> I knew of to fix this.</p>



<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Modern, traditional
      medicine provided <span class="font-bold">no solution</span> to Chuck&rsquo;s ailments&hellip;</h2>

    <div>
      <!-- img float right -->
<img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image31.jpg" />
    
    <p>I felt completely powerless&hellip;</p>
    <p>The man I loved was <span class="font-bold">fading away</span>&hellip;</p>
    <p>And all I could do was watch.</p>
    <p>Years later, Chuck was in hospice, <span class="font-bold">dying in a coma</span>.</p>
    <p>My mom called me and said, <i>"Hey, if you want to say goodbye, this is your chance."</i></p>
    <p>So I hopped on a plane and flew from Florida back to Seattle to say goodbye to him.</p>
    <div style="clear:both"></div>
  </div>

    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">And when I arrived,
      he miraculously sat up in bed, took my hand, looked me in the eyes and said <span class="font-bold">"Please, don't let
      this happen to others!"</span>
    </h2>
    <p>It was so moving&hellip;</p>
    <p>That it completely changed the course of my professional life&hellip;</p>
    <p>And I made it my mission to find out what really causes certain health issues for people.</p>
    <p>Whether it's heart problems, memory loss, brain fog, or an inability to focus&hellip;</p>
    <p>This eventually led me to discover my <span class="font-bold">&ldquo;Cerebral Boost&rdquo;</span> Method that I&rsquo;m going to share
      with you today.</p>
    <p>But as I began my journey&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">I Quickly Realized
      How Many Things Were <span class="font-bold">Wrong</span> With The Medical Industry&hellip;</h2>
    <p>People really wanted to get healthy&hellip;</p>
    <p>To boost their memory, mental energy, and focus&hellip; and to be active and independent&hellip;</p>
    <p>But doctors weren&rsquo;t giving them the <span class="font-bold">right tools</span>.</p>
    <p>They were too focused on giving people drugs and surgery&hellip;</p>
    <p>Rather than trying to find the <span class="font-bold">real cause</span> of a person&rsquo;s problems.</p>
    <p>Then one day, by chance at a nutritional conference, I met the founder of an amazing movement called Functional
      Medicine.</p>
    <p>Functional Medicine is all about treating people's problems at the source.</p>
    <p>So instead of giving people prescriptions or sending them for surgery&hellip;</p>
    <p>You look at what they're eating&hellip; their nutrient intake&hellip; how active they are&hellip; their stress
      levels&hellip; and if they're exposed to any toxins&hellip;</p>
    <p>And you find out what's <span class="font-bold">REALLY causing</span> their memory loss, or lack of focus, or low libido &hellip;or whatever
      their specific problem is.</p>
    <p>And you address what's causing it.</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">This Led To A
<span class="font-bold">Shocking Discovery</span> About What Really Causes Mental Fatigue, Brain Fog, And Memory Loss As You
      Age&hellip;</h2>
      <!-- img full width -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image21.jpg" /></p>
    <p>This led me to start doing my own research at my own clinic&hellip;</p>
    <p>To find solutions for problems that the mainstream medical world wasn&rsquo;t addressing, like memory loss, brain
      fog, heart problems, fatigue, and low libido.</p>
    <p>And by far&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">One of the
<span class="font-bold">mostoverlooked</span> causes of memory loss and lack of focus&hellip; is in an area of the brain
      called the <span class="font-bold">forebrain</span>&hellip;</h2>
    <p>Which is made up of the frontal, parietal,</p>
    <p>and temporal lobes.</p>
    <p>The <span class="font-bold">forebrain</span> makes <span class="font-bold">learning</span> and <span class="font-bold">memory</span> possible.</p>
    <p>This region of the brain also helps you make <span class="font-bold">wise choices</span>, rather than impulsive reactions&hellip;</p>
    <p>Such as eating more vegetables and fruits instead of eating a candy bar.</p>
    <p>Your forebrain essentially controls <span class="font-bold">how you live and think</span>&hellip;</p>
    <p>Including yourmental energylevels, attention, and focus.</p>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">When the <span class="font-bold">&ldquo;forebrain&rdquo; slows down</span>,
      so do many critical functions in the body along with it&hellip;</h3>

    <p>And you will feel:</p>
    <ul class="p-3">
      <!-- TODO: arrow icon -->
      <li class="arrow-right">More sluggish</li>

      <li class="arrow-right">Less focused</li>

      <li class="arrow-right">Less alert</li>

      <li class="arrow-right">Remember less</li>

      <li class="arrow-right">Have less self-control.</li>
    </ul>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">This Decrease In
      Brain Processing Speed Is Something I Call <span class="font-bold">&ldquo;Synaptic Slowdown&rdquo;</span>&hellip;</h2>

  <div>    
    <!-- img float right -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image33.jpg" /></p>
    <p>The term <span class="font-bold">&ldquo;synaptic slowdown&rdquo;</span> comes from the term &ldquo;synapses&rdquo;&hellip;</p>
    <p>Which are connections between brain cells that pass information and control processing speed&hellip;</p>
    <p>And if your synapses slow down, your brain slows down too&hellip;</p>
    <p>As a result, it takes you <span class="font-bold">longer</span> to get things done&hellip;</p>
    <p>You&rsquo;re more likely to <span class="font-bold">forget</span> things, like your to-do list and people&rsquo;s names&hellip;</p>
    <p>And you&rsquo;re more likely to make poor choices at work, with your money, and you may even eat less
      healthy&hellip;
    </p>
    <p>After researching the impact of nutrition on heart and brain health for over three decades&hellip;</p>
    <div style="clear:both"></div>
  </div>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">I&rsquo;ve found that &ldquo;Synaptic
      Slowdown&rdquo; is usually <span class="font-bold">caused by two things</span>&hellip;</h3>

      <!-- img full width -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image7.jpg" /></p>
    <p>Both are related to recent changes to our life and environment&hellip;</p>
    <p>And perhaps the most important of these is the food we eat.</p>
    <p>The brain relies on nutrients from the food we eatto process information quickly.</p>
    <p>But over the last 70 years&hellip;</p>
    <p>Our food has become significantly <span class="font-bold">less nutritious</span>.</p>
    <p>Because of <span class="font-bold">soil degradation</span> from modern farming&hellip;</p>
    <p>Many fruits, vegetables, and grains growntoday&hellip;</p>
    <p>Have up to <span class="font-bold">38% less</span> vitamins and minerals&hellip;</p>
    <p>And notably less Calcium, Vitamins C, B, A (and more) than it did 70-years ago.<sup>12</sup></p>
    <p>Even worse, our food often contains record levels of toxinslike pesticides, preservatives, additives, and
      processed sugars.</p>
    <p>And these toxinscause havocwith our brain&hellip;</p>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Leading brain cells to <span class="font-bold">lose function and die</span>.
    </h3>

    <div>
      <!-- img float right -->
    <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image34.jpg" />
    <p>And when you combine the <span class="font-bold">damage</span> from these toxins and nutrient deficiencies&hellip;</p>
    <p>Along with a natural drop from <span class="font-bold">aging</span> and unmanaged <span class="font-bold">stress</span> in your life&hellip;</p>
    <p>The brain can start to deteriorate at a <span class="font-bold">very fast rate</span>.</p>
    <p>It literally <span class="font-bold">shrinks</span> as can be seen with MRI scanning&hellip;</p>
    <p><span class="font-bold">Robbing</span> you of your memories, mental energy, focus, and brain vitality.</p>
    <p>The <span class="font-bold">good news</span> is there is something you can do about it&hellip;</p>
    <div style="clear:both"></div>
  </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">The
<span class="font-bold">Breakthrough</span> Brain-Boosting Discovery Many Doctors Thought Was <span class="font-bold">&ldquo;Impossible&rdquo;</span>&hellip;</h2>
<!-- img full width -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image27.jpg" /></p>
    <p>As I mentioned before&hellip;</p>
    <p>I have spent the last <span class="font-bold">three decades</span> researching how to optimize heart and brain function&hellip;</p>
    <p>And how you can boost your performance.</p>
    <p>I wrote several books about how to optimize your health, including a best-selling book and public television show
      called: <i>The Better Brain Solution</i>.</p>
    <p>Plus, I have lectured to over 30,000 physicians and medical providers around the world, sharing data collected at
      my
      clinic.</p>
    <p>Sadly, I&rsquo;ve found that many doctors don&rsquo;t believe what I&rsquo;m about to tell you is possible.</p>
    <p>They believe that as we age, thebrain starts to wither and decay&hellip;</p>
    <p>And that there is <span class="font-bold">nothing you can do about it</span>.</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">That&rsquo;s Why I
      Took Matters Into My Own Hands&hellip;</h2>
    <p>In 2008&hellip; I conducted my own 10-week randomized clinical studyat my
      clinic, The Masley Optimal Health Center&hellip;</p>
    <p>To try to boost the brain NATURALLY.</p>
    <p>I had 56 participants&hellip; both young and old&hellip;</p>
    <p>And had them make a few simple changes to their diet and lifestyle&hellip;</p>
    <p>Such as eating specific foods and nutrients each day.</p>
    <p>And to my surprise&hellip;</p>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Participants were able to <span class="font-bold">boost</span> their brain
      speed by an amazing <span class="font-bold">average of 24.6%</span>&hellip;</h3>

    <p>That means that they were able to:</p>
    <ul class="p-3">
      <li>Remember things almost <span class="font-bold">25% better</span>&hellip;</li>

      <li>Answer questions and solve problems almost <span class="font-bold">25% faster</span>&hellip;</li>

      <li>Be <span class="font-bold">25% more focused and alert</span>.</li>
    </ul>
    <p>To give you an idea of just how significant this is:</p>
    <p>Imagine, if you work an 8 hour day now&hellip;</p>
    <p>Getting all that work done in just 6 hours&hellip;</p>
    <p>And then having tons of focus and energy to do whatever you want after that.</p>
    <p><span class="font-bold">That is how big the difference can be!</span></p>
    <p>In fact, I was so <span class="font-bold">impressed</span> by the results&hellip;</p>
    <p>That I conducted 7 additional studies over the next decade&hellip;</p>
    <p>On more than one thousand men and women&hellip;</p>
    <p>To see if I could <span class="font-bold">boost</span> the brain even more.</p>
    <p>And many participants reported they felt much more mentally energetic&hellip;</p>
    <p><span class="font-bold">Sharper</span>&hellip;</p>
    <p>And more <span class="font-bold">focused</span>.</p>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">And in many cases they saw some of these
      benefitswithin the first few daysof starting my program..</h3>

  <div>
    <!-- img float left -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image28.jpg" /></p>
    <p>I know this because every year I tested brain performance on all the patients in my clinic.</p>
    <p>I measured brain processing speed, <span class="font-bold">memory</span>, and attention in healthy adults.</p>
    <p>I took into account what foods they ate, supplements they took, and how active they were&hellip;</p>
    <p>Along with hundreds of factors from their lab tests&hellip;</p>
    <p>And I saw dramatic improvements in people who ate the right foods and nutrients.</p>
    <p>And I analyzed and published my results in peer-reviewed scientific journals.</p>
    <p>In fact, the improvement was so fast and significant&hellip;</p>
    <p>That now&hellip;</p>
    <p>When a person is complaining about memory loss, low mental energy, brain fog, and an inability to focus&hellip;</p>
    <p>The <span class="font-bold">first place I start</span> is with solutions that <span class="font-bold">boost the brain</span>.</p>
    <p>There are many tools I&rsquo;ve found over the years to help do this&hellip;</p>
    <p>But there is <span class="font-bold">nothing more critical</span> than getting the brain the <span class="font-bold">nutrients</span> it needs to perform at its best.</p>
    <p>These are many of the same <span class="font-bold">nutrients</span> that have been drained from our food supply.</p>
    <p>These <span class="font-bold">nutrients</span> can help reduce the damaging effect of toxins on the brain.</p>
  </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Over The Years
      I&rsquo;ve Identified <span class="font-bold">6 Nutrients</span> I Believe Boost The Brain The Best</h2>
      <!-- img full width -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image13.jpg" /></p>
    <p>I call the daily preparation and taking of these essential nutrients a critical part of my <span class="font-bold">&ldquo;Cerebral
      Boost&rdquo;</span> Method.</p>
    <p>And I&rsquo;ve seen that it cannot only help <span class="font-bold">boost</span> your memory, mental <span class="font-bold">energy, focus, and sharpness</span>&hellip;</p>
    <p>But it can also boost your <span class="font-bold">performance</span> at work&hellip;</p>
    <p>Make you more upbeat and fun around your friends&hellip;</p>
    <p>Allow you to be more active&hellip;</p>
    <p>Make better eating choices&hellip;</p>
    <p>Which in turn will boost your <span class="font-bold">libido</span> and <span class="font-bold">romantic function</span>.</p>
    <p>All of which can help you live a <span class="font-bold">happier, longer, and more fulfilling</span> life.</p>
    <p>Along with a healthy lifestyle, I&rsquo;ve recommended these same nutrients to <span class="font-bold">hundreds</span> of my patients.</p>
    <p>Many came back to me saying they didn&rsquo;t realize just how slow and <span class="font-bold">foggy</span> their brain had been&hellip;</p>
    <p>How <span class="font-bold">low</span> their mental energy was&hellip;</p>
    <p>And how much more <span class="font-bold">alive</span> and <span class="font-bold">focused</span> they feel now&hellip;</p>
    <p>And as a result of their <span class="font-bold">better brain function</span>, they now take <span class="font-bold">better care</span> of themselves</p>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">This often leads them to become more <span class="font-bold">active,
      fit,</span> and to make <span class="font-bold">better eating choices</span>&hellip;</h3>

  <div>
    <!-- img float left -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image17.jpg" /></p>
    <p>And now they&rsquo;re so <span class="font-bold">happy</span> because of it.</p>
    <p>Many said, &ldquo;Thank you for giving me my life back!&rdquo;</p>
    <p>Even their friends and family notice a difference.</p>
    <p>Their spouse may say they seem more <span class="font-bold">alive&mdash;</span> a <span class="font-bold">better version</span> of themselves.</p>
    <p>And their romance often improves as their libido picks up.</p>
    <p>Their friends enjoy spending more time with them because they <span class="font-bold">listen better, remember more,</span> and are in a <span class="font-bold">better mood</span>.</p>
    <p>People would say things to them like:</p>
    <p><span class="font-bold">"Wow, you are so much sharper! What changed?"</span></p>
    <p>And I can say that I&rsquo;ve seen the results <span class="font-bold">first-hand</span>.</p>
    <p>After making better food choices and taking these nutrients myself, I&rsquo;ve felt my mental sharpness and
    <span class="font-bold">focus</span> improve, and I'm in a <span class="font-bold">better mood all day long</span>&hellip;</p>
      <div style="clear:both"></div>
  </div>

    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">I can honestly say that today, at 67 years
      old, I feel <span class="font-bold">great</span></h3>

  <div>
    <!-- img float left -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image11.jpg" /></p>
    <p>I&rsquo;ve got the <span class="font-bold">energy to travel</span>&hellip;</p>

    <p>Go <span class="font-bold">sailing</span> with my wife, Nicole&hellip;</p>
    <p>Spend plenty of <span class="font-bold">time with my family</span>&hellip; our grandkids.</p>
    <p>And I <span class="font-bold">lecture</span> to groups of doctors and continue my work to transform people&rsquo;s lives.</p>
    <p>To be honest, I couldn&rsquo;t have accomplished half of what I&rsquo;ve done without following my own methods.
    </p>
    <p>As I said before, there are <span class="font-bold">6 nutrients</span> that I found to be the <span class="font-bold">best</span> at <span class="font-bold">boosting</span> the brain.</p>
    <p>I want to share <span class="font-bold">exactly</span> what they are with you right now&hellip;</p>
    <p>So you can use them for yourself&hellip;</p>
    <p>And get a chance to feel these same <span class="font-bold">powerful benefits</span>&hellip;</p>
    <div style="clear:both"></div>
  </div>

    
<!-- NUTRIENTS START-->
<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Brain-Boosting
      Nutrient #1: Curcumin</h2>
      <!-- img flaot right -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image8.jpg" /></p>
    <p><strong>Curcumin</strong> is at the top of my list of brain nutrients because it helps <strong>
      reduce inflammation</strong> and <strong>oxidation</strong> in the brain.</p>

    <p>Studies show people who take the right form of curcumin see signiﬁcant improvements in brain speed, attention,
      and memory.</p>
    <p>In one study&hellip; participants saw&ldquo;significantly improved
      performance&rdquo;in attention and memory afterjust 3 hours&hellip;</p>
    <p>And after 4 weeks&hellip; cognitive function and memory not only continued to improve&hellip;</p>
    <p>But subjects also reported more energyand less anxiety.</p>
    <p>Studies have shown that curcumin decreasesproduction of beta amyloid in the brain; keep in mind that beta
      amyloid formation is associated with memory loss.</p>
    <p>Curcumin can also increase growth factors that help grow brain cells.</p>
    <p>Growing new brain cellsis something that many researchers thought was impossible&hellip;</p>
    <p>But now, thanks to this new research, we know it&rsquo;s very feasible.</p>
    <p>And as curcumin lowers inflammation, curcumin supplementation has also been shown to reduce joint pain symptoms.
    </p>
    <p>One significant problem with curcumin is that many forms of curcumin, including turmeric, won&rsquo;t be absorbed
      properly.</p>
    <p>Poorly absorbed curcumin can also cause GI distress, something you clearly want to avoid!</p>
    <p>There is a new type of curcuminthat can be absorbed far better&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">One study suggests up to 90 times
      betterabsorption than another.</h3>
    <p>I&rsquo;ll tell you where to get this new version in just a second.</p>
    <p>But first&hellip; let me tell you about the second smart nutrient&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Brain-Boosting
      Nutrient #2: Resveratrol</h2>
      <!-- img flaot left -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image9.jpg" /></p>
    <p>Resveratrolis a compound that is naturally found in red grapesand blueberries.</p>
    <p>And has been shown to help increase blood flowto the brain&hellip;</p>
    <p>Lower inflammation&hellip;</p>
    <p>And help reduce blood sugar levels.</p>
    <p>Several studieshave found that taking
      Resveratrol is linked to significant improvementin cognitive scores in postmenopausal women.</p>
    <p>They showed both fasterand more accuratebrain processing speed and better memoryscores, too.</p>
    <p>And as a bonus, new pilot studyresearch on overweight men and women shows
      that Resveratrol can &ldquo;induce the same metabolic changes you might expect from a month of calorie-restricted
      dieting.&rdquo;</p>
    <p>If the drug companies could patent Resveratrol and sell it, they would probably charge a fortune for it.</p>
    <p>But like every &ldquo;brain booster&rdquo; I&rsquo;m sharing with you today&hellip;</p>
    <p>It's all-natural, so they can&rsquo;t.</p>
    <p>The best and most physiologically active type of resveratrol is called Trans-Resveratrol.</p>
    <p>Unlike ordinary resveratrol&hellip;</p>
    <p>Trans-Resveratrol has 100% active ingredients whereas regular Resveratrol is closer to only 50% active.</p>
    <p>To give you the most brain benefits&hellip;</p>
    <p>I&rsquo;ll tell you where to get Trans-resveratrol in just a second.</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Brain-Boosting
      Nutrient #3: Magnesium</h2>
      <!-- img flaot right -->
    <p>Magnesium is essentialfor messaging to occur between brain cells&hellip; 
<img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image32.jpg" /></p>

    <p>And brain synapse connections slow down if your magnesium levels are low.</p>
    <p>Unfortunately, according to research by the National Institutes of Health68% of
      Americans are low in magnesium.</p>
    <p>Magnesium also has many other health benefits&hellip;</p>
    <p>Including aiding muscle cramps and constipation&hellip;</p>
    <p>And helping you relaxand sleep.</p>
    <p>The best way to get your magnesium levels up is by taking a well-absorbed type of magnesium called Magnesium
      Chelate.
    </p>
    <p>I&rsquo;ll show you my top source of high-quality Magnesium Chelate in just a second.</p>
    <p>For now, let&rsquo;s move on to our fourth smart nutrient:</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Brain-Boosting
  <!-- img flaot left -->
      Nutrient #4: Vitamin B12</h2>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image4.jpg" /></p>
    <p>You&rsquo;ve probably heard of Vitamin B12before.</p>

    <p>But you might not know that it helps brain cells produce energy.</p>
    <p>And studies link lower B12 levels to a decline in both learning ability and memory &hellip;</p>
    <p>Another studyshowed B12 dramatically reduced brain shrinkage in the area
      of the brain most affected by memory loss.</p>
    <p>Vitamin B12 deficiency is more common today than ever because of an increase in drugs that block stomach acid.
    </p>
    <p>Vitamin B12 deficiency can cause permanent, irreversible memory lossif it&rsquo;s not dealt with.</p>
    <p>This is why this is perhaps thesingle most important nutrient deficiency that you should avoid.</p>
    <p>I&rsquo;ll tell you the best way to boost your B12 levels in just a second.</p>
    <p>Lastly, there are two additional brain-boosting nutrients you&rsquo;ll want to add to the list if you want the
      best
      benefits possible&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Brain-Boosting
      Nutrient #5: Folate</h2>
      <!-- img flaot right -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image24.jpg" /></p>
    <p>Folatehelps repair our DNA and remove toxins, which is essential for us to stay healthy.</p>

    <p>People with folate deficiency are at elevated risk for heart problems, depression, and difficulties with
      concentration and memory.</p>
    <p>You want to make sure you take a metabolically-active form of folate.</p>
    <p>I&rsquo;ll share with you my recommended source below. But first&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Brain-Boosting
      Nutrient #6: Vitamin D</h2>
      <!-- img flaot left -->
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image22.jpg" /></p>
    <p>Despite its popularity as a supplement, 50% of Americans are thought to be vitamin D deficient.</p>

    <p>Vitamin D is essential for many aspects of your health&hellip; from having healthy bones to boosting the immune
      system.</p>
    <p>People with higher vitamin D levels appear to have larger brains than people with low vitamin D levels.</p>
    <p>This is because vitamin D stimulates brain cell growth, especially in the memory center of the brain.</p>
    <p>Now each of these ingredients individually can have a powerful benefit&hellip;</p>
    <p>But when you mix all 6 of them together with the right dosage of each&hellip;</p>
    <p>You get an even more powerful combination&hellip;</p>
    <p>To enhance the brain in multiple ways&hellip;</p>
    <p>Boosting memory, mental energy, focus, and overall brain function.</p>
    <p>However&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">After prescribing many of these nutrients to
      my patients for years, I found that it was difficult to find the
      qualitythat I was looking for&hellip;</h3>
    <p>And there were no products on the market that contained all these nutrients in the ratios I recommended&hellip;
    </p>
    <p>Nor at a price that my patients could afford.</p>
    <p>After much searching&hellip;</p>
    <p>I eventually came across a trustworthy manufacturer called Revival Point&hellip;</p>
    <p>Who was able to put all six of these potent, brain-boosting nutrients together&hellip;</p>
    <p>In the exact doses I wanted&hellip;</p>
    <p>In one, small, easy-to-take capsule&hellip;</p>
    <p>That you can take with a glass of water.</p>
    <p>Thanks to this breakthrough&hellip;</p>
    <p>These six &ldquo;brain boosters&rdquo; are no longer just for my private patients</p>
    <p>Starting today&hellip;</p>
    <p>You can now get these same nutrients&hellip;</p>
    <p>At a fraction of the cost that it would take to buy them separately.</p>
    <p>They&rsquo;re available for the first time in a one-of-a-kind product by Revival Point called: Total Brain Boost.
    </p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Total Brain
      Boost&reg;: A Powerful Formula Using 6 of the Best, Scientifically-Backed, Brain-Boosting Nutrients
      I&rsquo;ve Found Over 30 Years of Research&hellip; &hellip;</h2>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image19.jpg" /></p>
    <p>Total Brain Boostis the only health supplement that contains all 6 of these top brain-enhancing nutrients I
      discovered in my last 30 years of research&hellip;</p>

    <p>All in theexact dosesthat are shown to be most effective in the clinical studies you saw earlier&hellip;
    </p>
    <p>And have been shown to safelyand effectivelyhelp people boost brain healthat almost any age.</p>
    <p>These 6 &ldquo;brain boosters&rdquo; are naturally occurring&hellip;</p>
    <p>Which means no prescription required.</p>
    <p>Just imagine how good it would feel to wake up&hellip;</p>
    <p>Excitedabout the day ahead.</p>
    <p>Your mind is sharp.</p>
    <p>And you&rsquo;re not only getting more things done&hellip;</p>
    <p>You&rsquo;re getting them done faster&hellip;</p>
    <p>And with fewer mistakes.</p>
    <p>What if instead of crashing in the afternoon&hellip;</p>
    <p>Or needing caffeine or an energy drink just to get through the day&hellip;</p>
    <p>You naturally got the things you wanted done quickly, with great focus and extra energy to spare?</p>
    <p>And when you feel better like this, it&rsquo;s easier to make better eating choices too.</p>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image3.jpg" /></p>
    <p>Imagine focusing, listening, and socializing better with your family and friends&hellip;</p>

    <p>Perhaps everyone will be pleasantly surprisedby how sharp and &lsquo;on the ball&rsquo; you are..</p>
    <p>Maybe you evenfeel younger because you have better focus and memory.</p>
    <p>You finish your work day fasterand easier.</p>
    <p>And remember more details from conversation and things you read.</p>
    <p>This doesn&rsquo;t have to be a dream.</p>
    <p>Mental sharpness can improve</p>
    <p>And these 6 nutrients&mdash;when combined with simple lifestyle changes&mdash;have helped me.</p>
    <p>They&rsquo;ve helped hundreds of my patients&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">And I believe this could help you too.</h3>
    <p>It all starts with Total Brain Boost.</p>
    <p>If you&rsquo;ve been struggling with memory loss, brain fog, and have felt mentally tired</p>
    <p>Losing your place more while talking</p>
    <p>Can&rsquo;t remember where you put things</p>
    <p>Or what people said just days earlier</p>
    <p>Remember:</p>
    <p>It&rsquo;s not your fault.</p>
    <p>And until now, you probably didn&rsquo;t know why this was happening&hellip;</p>
    <p>Or even that there was anything you could do about it.</p>
    <p>The good news is there is a solution in front of you.</p>
    <p>Now you might be wondering how much this all costs and how you can get started.</p>
    <p>Well, if you were to buy all 6 of these nutrients separately&hellip;</p>
    <p>From your local or online retailer&hellip;</p>
    <p>They would cost you about$100 per monthif you bought them from a trusted brand&hellip;</p>
    <p>And you&rsquo;d have to take 6 different capsules twice per day.</p>
    <p>And you would not know if the quality or the dose was even right.</p>
    <p>But today&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">With Total Brain
      Boost You Won&rsquo;t Have To Pay Anywhere Near This Price Tag&hellip;</h2>
    <p>And you won&rsquo;t have to take all these capsules per day, either.</p>
    <p>And you won&rsquo;t even have to pay $90 dollars&hellip; or even $80 dollars.</p>
    <p>Today you&rsquo;re going to get Total Brain Boost forjust $69.95for a 30-day supply.</p>
    <p>That&rsquo;s 28% OFFthe estimated retail brand&rsquo;s cost&hellip;</p>
    <p>And a$27 savings.</p>
    <p>And that&rsquo;s just$69.95 period&mdash;combined in one easy-to-takepill.</p>
    <p>No hidden fees or billings.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">All you need to claim this discount is to
      click the button below&hellip;</h3>
    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Ordering Is
      Easy&hellip;</h2>
    <p>You don&rsquo;t need a prescription.</p>
    <p>You only need to want to transform your life for the better.</p>
    <p>And if you want to save even more&hellip;</p>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image40.jpg" /></p>
    <p>You can get either the recommended 3 or 6-month packages.</p>

    <p>These discount packages allow you to take Total Brain Boost with your husband, wife, family, or friends&hellip;
    </p>
    <p>So you and your loved ones can boost your brain power together.</p>
    <p>Also, most of the scientific studies I showed you earlier were done over 2 to 3 months or longer</p>
    <p>So I recommend taking Total Brain Boost for 3 months or longerto get the best results&hellip;</p>
    <p>By choosing the 3 Month discount package you pay just $59.95 per month.</p>
    <p>That&rsquo;s 38% OFFthe estimated retail price.</p>
    <p>And you get free shipping.</p>
    <p>The 90-day supply also helps make sure you don&rsquo;t run out if this batch sells out&hellip;</p>
    <p>Because you don&rsquo;t want to be stuck waiting for your next bottle when you&rsquo;re already seeing great
      results&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">So click here to secure your discount package
      now.</h3>
    <p>And when you do&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">You&rsquo;ll Also Get
      A 90-Day Money Back Guarantee With Your Order Today&hellip;</h2>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image29.jpg" /></p>
    <p>So if you&rsquo;re not happy with your results for any reason&hellip;</p>

    <p>If you don&rsquo;t feel mentally sharper, quicker, and more focused&hellip;</p>
    <p>Then you can just call Revival Pointto get your money back any day of the week</p>
    <p>They&rsquo;ve got US-based reps waiting 24/7</p>
    <p>Even at 2 AM in the morning.</p>
    <p>All you need to do is call or email within 90 days and say, &ldquo;I want to use my money-back guarantee.&rdquo;
      <img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image18.jpg" /></p>
    <p>And that&rsquo;s it - you&rsquo;ll get your money back in full&hellip;</p>

    <p>Including taxes and shipping&hellip;</p>
    <p>No questionsaskedand no hassles.</p>
    <p>There is no way anyone could afford to make a promise like this if their product didn&rsquo;t work every bit as
      well
      as they say it does.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">All you need to do to claim your discount and
      your 90-day money back guarantee is click the button below&hellip;
    </h3>
    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>
    <p>And to make Total Brain Boost even more effective&hellip;</p>
    <p>Today when you order, Revival Point will also make sure&hellip;</p>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">You Get 5 Free Bonus
      GiftsFilled With Tips To Further Boost Your Results&hellip;</h2>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Bonus Gift #1:The Total Brain Booster Guide.
    </h3>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image36.jpg" /></p>
    <p>This digital guide shows you exactly how to get the most out of Total Brain Boost, including:</p>

    <ul class="p-3">
      <li>When to take it&hellip;</li>

      <li>What to take it with to increase its power and the speed of your results&hellip;</li>

      <li>Including 3 delicious foods that can increase the effectiveness of Total Brain Boost&hellip;</li>

      <li>Plus, how to follow the ideal 3-6 month regimen for best results&hellip;</li>
    </ul>
    <p>And a whole lot more!</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Bonus Gift #2:The Better Brain Cookbook</h3>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image14.jpg" /></p>
    <p>Next&hellip; one thing I discovered that helps people boost their brain power&hellip;</p>

    <p>Is to eat brain-healthy foods that also taste incredible.</p>
    <p>If the food you eat tastes great, you&rsquo;re more likely to keep eating it.</p>
    <p>That&rsquo;s why I took a year to get certified as a trained chef at the Four Seasons restaurant in
      Seattle&hellip;
    </p>
    <p>Created a series of brain-healthy recipes&hellip;</p>
    <p>And put all of them into a short ebook called the &ldquo;Better Brain Cookbook&rdquo;</p>
    <p>This digital ebook is filled with fast, simple, and hassle-free recipes for delicious meals, snacks, sides, and
      even
      desserts that can help skyrocket your memory, energy, focus, and concentration.</p>
    <ul class="p-3">
      <li>These foods help boost your brain so you feel more focused, alert, and energized&hellip;</li>

      <li>You&rsquo;ll get 14 delicious and easy recipes for meals and snacks to fuel your day&hellip;</li>

      <li>You&rsquo;ll also get my &ldquo;brain-boosting snack&rdquo; recipe, the one I mentioned earlier. The recipe
        for
        this is so simple&mdash;I&rsquo;ll share it with you right now: In a bowl, combine blueberries, low-fat, organic
        plain yogurt (no sweetener or sugar added), with sliced almonds, and a dash of cinnamon. It&rsquo;s easy and
        delicious. The probiotics in the yogurt and the nutrients in the blueberries enhance brain function&hellip;</li>

      <li>And the instant &ldquo;brain-boosting&rdquo; shake you can make for fast focus and energy whenever
        you&rsquo;re
        feeling tired and don&rsquo;t want to drink a coffee&hellip;</li>
    </ul>
    <p>You&rsquo;ll get all this and much more.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Bonus Gift #3:Brain Draining Foods to Avoid
    </h3>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image30.jpg" /></p>
    <p>You&rsquo;re also going to get the &ldquo;Brain-Draining Foods To Avoid&rdquo;digital ebook.</p>

    <p>In this guide, I&rsquo;ll reveal the 21 worst foods you absolutely must avoid when it comes to your memory,
      energy
      levels, and focus.</p>
    <p>Some of these foods have falsely been called &ldquo;healthy&rdquo; by other experts.</p>
    <p>I&rsquo;ll also give you delicious replacements for these foods that energize and support your brain.</p>
    <p>In this book, you&rsquo;ll discover:</p>
    <ul class="p-3">
      <li>The #1 food you&rsquo;ll want to avoid at all costs when grocery shopping&mdash;make sure you look for this on
        the
        label and do not buy foods that contain it&hellip;</li>

      <li>Toxic sweeteners - which sweeteners to avoid that can cause elevated blood sugar and headaches, and damage the
        gut
        microbiome&hellip; including the two so-called &ldquo;all natural&rdquo; sweeteners&hellip;</li>
      <li>Which cooking oils to avoid, plus the natural, delicious, and healthy alternatives to use instead&hellip;</li>
      <li>The 5 worst sauces you could ever eat that are loaded with brain-draining ingredients and the 5 best ones that
        I
        recommend instead&hellip;</li>
      <li>Foods that contain the worst and highest levels of toxins you want to avoid&hellip;</li>

      <li>And lastly, I&rsquo;ll also tell you the 3 foods you should never eat for breakfast&hellip;</li>
    </ul>
    <p>I&rsquo;ll tell you what these are right now:</p>
    <p>They are cereal, muffins, and concentrated fruit juice&hellip;</p>
    <p>Grain cereals are often packed with sugar and wheat, which may cause inflammation in the brain&hellip;</p>
    <p>In this ebook, I&rsquo;ll give you my favorite replacements for these foods, as well as a healthier way to cook
      that
      is better for your brain and your overall health.</p>
    <p>And much more.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Bonus Gift #4:Simple Brain-Boosting Exercises
    </h3>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image6.jpg" /></p>
    <p>Next, you&rsquo;ll also get my &ldquo;Simple Brain-Boosting Exercises&rdquo;digital ebook.</p>

    <p>The exercises in this book are designed to be short&hellip;</p>
    <p>Easy&hellip;</p>
    <p>And help you multiply your results from Total Brain Boost.</p>
    <p>In it you&rsquo;ll discover:</p>
    <ul class="p-3">
      <li>3 quick, easy, physical exercises to boost your mental clarity, energy, and focus even more&hellip; while also
        boosting your physical fitness as well. (Studies show these exercises can improve function in the hippocampus,
        the
        part of the brain that&rsquo;s responsible for learning and verbal memory)</li>

      <li>The special mid-day walking technique you can do in the morning, after work, or on your lunch
        break&hellip;that boosts blood flow to the brain for enhanced focus and mental energywhile fighting off
        afternoon crashes&hellip;</li>
      <li>The simple &ldquo;milk jug&rdquo; technique that studies show can provide the same brain-boosting benefits in
        one
        third of the time as you would get from exercising 30 minutes a day, 5 days a week&hellip;</li>
    </ul>
    <p>And much more.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Bonus Gift #5:Simple Stress Management</h3>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image1.jpg" /></p>
    <p>And finally, you&rsquo;ll also get my &ldquo;SimpleStress Management&rdquo;digital ebook.</p>

    <p>This guide will show you how to minimize stress in as little as one minute per day.</p>
    <p>As a result, you&rsquo;ll notice less anxiety, more mental clarity, and even some potentially more profound
      effects
      as your hormones become more naturally balanced.</p>
    <p>Inside you&rsquo;ll discover:</p>
    <ul class="p-3">
      <li>The simple 1-minute &ldquo;chair meditation&rdquo; you can do anywhere to center yourself and clear your mind
        when
        things get crazy (it&rsquo;s like an instant &ldquo;pick-me-up&rdquo; for mood and concentration)&hellip;</li>

      <li>An ancient &ldquo;counting breaths&rdquo; technique that lowers stress hormone levels and restores balance to
        your
        body&mdash;try it 10-minutes before bed to turn off a &ldquo;busy brain&rdquo; and fall into a deeper, more
        peaceful
        sleep&hellip;</li>
      <li>Then try this A.M &ldquo;body scan&rdquo; while lying in bed to target and remove areas of tension that are
        holding you back and weighing down your body and mind. (This helps you start your day with more energy, ease and
        focus.)</li>
      <li>Plusthe easy &ldquo;Total Calmness&rdquo; exercise to calm your mind in as little as 3 minutes &ndash;
        Stress wreaks havoc on the brain and this simple exercise reduces stress while boosting focus, energy, and
        mood&hellip; leaving you feeling refreshed and recharged&hellip;</li>
    </ul>
    <p>You&rsquo;ll get all this and much more!</p>
    <p>All for free.</p>
    <p>And to be clear, these are the same tips that I have given my own patients for years&mdash;empowering them to
      achieve
      awesome benefits.</p>
    <p>And you&rsquo;ll get instant access to these digital books the second you order&hellip;</p>
    <p>So you can start enhancing your brain and overall health immediately.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">All you need to do is to click the button
      below:</h3>
    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Total Brain BoostIs
      Formulated With Ingredients You Can Trust&hellip;</h2>
    <p>I also want to take a second to talk about the qualityof the ingredients used in Total Brain Boost.</p>
    <p>I&rsquo;ve heard horror storiesfrom patients&hellip;</p>
    <p>About supplements that didn&rsquo;t work&hellip;</p>
    <p>And manufacturers that actually lied about the ingredients in their product.</p>
    <p>I&rsquo;m not going to name names&hellip;</p>
    <p>But a general rule of thumb is to avoid common drugstore and &ldquo;supermarket&rdquo; brands.</p>
    <p>I tell my patients: never buy a supplement unless you are 100% certain</p>
    <ol>
      <li>It&rsquo;s made in a GMP-certifiedfacility</li>
    </ol>
    <ol>
      <li>It&rsquo;s been third party testedby a reputable company</li>
    </ol>
    <ol>
      <li>You know exactlywhere the product is manufactured</li>
    </ol>
    <ol>
      <li>You are sure that it contains ingredients that are safeand have been provento work</li>
    </ol>
    <p>I made sure Total Brain Boost meets all of these requirements and more.</p>
    <p>Total Brain Boost is filled, bottled, packaged, and shipped right here in the United States.</p>
    <p>It&rsquo;s put through a thorough series of lab tests by a trusted third party lab. 
<img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image26.jpg" /></p>
    <p>Including &ldquo;atomic absorption spectroscopy&rdquo; and &ldquo;liquid chromatography&rdquo; testing.</p>
    <p>This testing can cost up to ten thousand dollars per batch or more&hellip;</p>
    <p>And requires a team of at least 10 people to document, test, and review everything to make sure the product is
      top
      quality&hellip;</p>
    <p>And that you get the purest and most potent dosage in each and every capsule.</p>
    <p>Total Brain Boost is also allergen free&hellip; gluten free&hellip; and lactose free.</p>
    <p>As I said before&hellip;</p>
    <p>If you don&rsquo;t love this, if you don&rsquo;t feel it&rsquo;s working every bit as great for you as you
      expected&hellip;</p>
    <p>Just call or email Revival Point any time within the next 90 days and get a full refund.</p>
    <p>No pharmaceutical company would ever do this&hellip; right?</p>
    <p>After all, when was the last time you got a refund if your medication didn&rsquo;t work?</p>
    <p>The next step is easy&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">Just click the button belowto continue to the
      secure order page:</h3>
    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>


    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Here&rsquo;s What
      Happens Next&hellip;</h2>
    <p>Once you get to the order page&hellip;</p>
    <p>Just choose your discount package.</p>
    <p>You&rsquo;ll get the biggest savingsif you choose the three or six month packages.</p>
    <p>Just click the button to continue to the checkout to enter your payment information.</p>
    <p>The site uses 256-Bit Secure SSL technology&hellip;</p>
    <p>Which is the top-of-the-line security technology to protect your data.</p>
    <p>Your information is never shared with anyone, under any circumstances.</p>
    <p>Revival Point uses the same 256-Bit SSL technology as companies like Google and Amazon &hellip;</p>
    <p>Once your order is complete&hellip;</p>
    <p>Your order will be processed the same day&hellip;
<img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image23.jpg" /></p>
    <p>You will get a tracking number by email within 24 business hours.</p>

    <p>If you&rsquo;re in the USA, your package will be sent via DHL&rsquo;s 3-Day Guaranteed Shippingstraight to the
      address you provide.</p>
    <p>If you&rsquo;re overseas, your package will take just 6-8 dayson average to arrive.</p>
    <p>You can follow your order every step of the way with your tracking code.</p>
    <p>Or call or email Revival Point&rsquo;s 24-hour customer serviceteam any time if you have questions.</p>
    <p>And last but not least&hellip;</p>
    <p>Today, when you place your order&hellip;</p>
    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">A Portion Of Your
      Purchase Will Be Donated To The Vitamin Angels Charity</h2>
    <p>This charity helps get vitamins to an impoverished child living in a third-world country&hellip;</p>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image41.jpg" /></p>
    <p>While I was traveling to many of these countries, helping impoverished people, I saw first hand just how big of
      an
      impact these donations can make.</p>

    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image20.jpg" /></p>
    <p>The vitamins we can get with the money from your order today will give multiple kids a better chance to grow
      uphealthy and strong, and allow them to lead much better lives&hellip;</p>
    <p>And so if you order, I will thank you personallyfor your gift today.</p>
    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">There Are Really Only
      Two PlacesLeft To Go From Here&hellip;</h2>
    <p>First, you can leave this page and keep doing what you&rsquo;ve been doing.</p>
    <p>But if you&rsquo;re anything like the hundreds of patients who have come to my clinic dealing with memory loss,
      brand
      fog, and lack of focus&hellip;</p>
    <p>Things may only continue to get worse.</p>
    <p>You may become even more forgetful and unfocused&hellip;</p>
    <p>You may feel embarrassed around your friends and family&hellip;</p>
    <p>You may start to scare your husband or wife&hellip;</p>
    <p>You may even feel like you&rsquo;re losing your mind&hellip;</p>
    <p>And on top of that, it may become harder to get things done&hellip;</p>
    <p>Harder to read, remember, and learn things&hellip;</p>
    <p>And as I said before, when a patient walks into my clinic with concerns about memory and brain fog&hellip;</p>
    <p>I take it very seriously.</p>
    <p>And thefirst place I usually startis the right food and nutrientsto feed their brain.</p>
    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">Most Experts And
      Doctors Won&rsquo;t Tell You What I&rsquo;ve Told You Here Today&hellip;</h2>
    <p>That you can not only boost the brain&hellip;</p>
    <p>But can grow new neuronsand pathways&hellip;</p>
    <p>Helping you to feel more mentally energized, focused,and youthful.</p>
    <p>You have knowledge that most others don&rsquo;t have.</p>
    <p>You&rsquo;ve seen the research showing that boosting the brain is not only possible&hellip;</p>
    <p>But effective&hellip;</p>
    <p>And easyto do.</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">All you need to get started is to click the
      button below:</h3>
    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>
    <p>The nutrients in Total Brain Boost are linked to a stronger, healthierbrain&hellip;</p>
    <p>But also to a stronger memory, more mental energy, focus,and being more capable&hellip;</p>
    <p>Allowing people to live a more active, independentand fulfillinglife.</p>
    <p>A life where you may feel sharper than you have in years&hellip;</p>
    <p>You&rsquo;ve got more confidence that you can count on your brain to remember what matters most</p>
    <p>If you&rsquo;ve been struggling with forgetfulness, mental fatigue, and brain fog&hellip;</p>
    <p>If you&rsquo;ve been feeling tired and unfocused&hellip;</p>
    <p>If you sometimes forget things in just minutes&hellip; or seconds after they are said</p>
    <p>If you are having a harder time remembering words, names, people, places, appointments&hellip;</p>
    <p>If you lose your place when speaking&hellip;</p>
    <p>Mix up letters and numbers&hellip;</p>
    <p>Or need to read everything twice to understand it&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">I believe this can beone of the most
      important thingsyou do for your health&hellip;</h3>
    <p>Because, as I said before, the forebrain is like the control center of the body.</p>
    <p>It impacts your ability to be activeand make smart decisions&hellip;</p>
    <p>Not only for your health, but for your finances, job, and relationships.</p>
    <p>And without the forebrain healthy and working at its best&hellip;</p>
    <p>It can feel impossible to think straight or get things done.</p>
    <p>Work can be exhausting, you move slowly, lose your place, and everything gets done late.</p>
    <p>You may remember lessabout what people say.</p>
    <p>You feel tiredand areunable to focus when people are talking to you.</p>
    <p>I&rsquo;ve seen how big of a strugglethis is for many of my patients.</p>
    <p>And it led me to develop the solution I have for you today.</p>
    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">There Is No Reason
      For You To Spend The Next 5 Or 10 Years (Or Longer) Dealing WithBrain Fog, Feeling
      Forgetful, And Worn DownIf You Don't Have To&hellip;</h2>
    <p><img src="//<?= $_SERVER['HTTP_HOST']; ?>/images/wsl/image25.jpg" /></p>
    <p>You have a solutionin front of you right now that can help change this.</p>
    <p>Try out Total Brain Boost now, risk free.</p>
    <p>And see just how big the difference can be.</p>
    <p>This is an opportunity to have more brain vitality and greater health for years to come.</p>
    <p>I think back to how mainstream medicine failed my stepdad, Chuck.</p>
    <p>He was told he had a clean bill of health by his doctor.</p>
    <p>And yet just a week later&hellip;</p>
    <p>He had a serious and sudden health event that left him with brain damage so severe&hellip;</p>
    <p>He couldn&rsquo;t talk or dress himself.</p>
    <p>It robbed him of his life and his future.</p>
    <p>I told you Chuck made a list of 100 things he wanted to do with the rest of his life.</p>
    <p>Maybe you have a list of things you want to do with the rest of your life, too.</p>
    <p>Maybe you want to spend more timewith your friends and family.</p>
    <p>Have more engaging conversations.</p>
    <p>Listen better and remember more.</p>
    <p>Be more involved in your kids&rsquo; or grandkids' lives.</p>
    <p>Have the memory andfocusto support them and show them you care.</p>
    <p>Maybe you want to enjoy more quality or intimate time with your husband or wife.</p>
    <p>To have stronger attentionwhen you&rsquo;re alone together.</p>
    <p>It took me nearly 20 years of research just to find out this was even possible&hellip;</p>
    <p>Another ten years to find the best, brain-boosting nutrients&hellip;</p>
    <p>And put them into this product&hellip;</p>
    

<h2 class="text-2xl md:text-4xl text-rpblue mb-4 title text-center md:text-left mt-6 md:mt-11">All the work has been
      done for you.</h2>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">All you need to do now is just click the
      button below:</h3>
    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>
    <p>This is something that is so new, that even just 5 years ago, it just wasn&rsquo;t possible&hellip;</p>
    <p>Because all the research wasn&rsquo;t done yet.</p>
    <p>But now, we know it&rsquo;s not only possible&hellip;</p>
    <p>But it takes less than a minute of your time each day to get started.</p>
    <p>All you need to do is click the button belownow</p>
    <p>And if for any reason you&rsquo;re not happy with the results&hellip;</p>
    <p>You can call or email Revival Point any time in the next 90 days&hellip;</p>
    <p>And get your money back in full, including tax and shipping.</p>
    <p>I told you earlier about when my patient, Grace, first came to see me&hellip;</p>
    <p>She thought she was out of options.</p>
    <p>Yet after trying my advice, she felt like a brand new woman.</p>
    <p>She was more focused and had a stronger memory.</p>
    <p>She was thinking clearer, making smarter choices for her life, and was sleeping better.</p>
    <p>She regained her confidence and was spending more quality time with her family&hellip;</p>
    <p>Her friends couldn&rsquo;t believe how much sharper, more focused, and positive she was.</p>
    <p>And Grace is just one of many success stories I&rsquo;ve seen.</p>
    <p>And these improvements aren&rsquo;t fleeting&hellip;</p>
    <p>In patients I&rsquo;ve tracked over the years, changes have lasted as long as they&rsquo;ve stuck with the
      regimen&hellip;</p>
    <h3 class="text-xl md:text-3xl  mb-4 title text-center  my-6 md:my-11">And change can happen at any age</h3>
    <p>Even if you feel you&rsquo;re too old, too forgetful, too tired, or out of options and ready to give up&hellip;
    </p>
    <p>I believe if you try this today&hellip;</p>
    <p>You can start to feel a bit better each day.</p>
    <p>And before long you&rsquo;ll be amazed at how you feel.</p>
    <p>The opportunity is right here in front of you</p>
    <p>All you have to do is take it.</p>
    <p>You&rsquo;ve got a big discount</p>
    <p>Five free bonus gifts</p>
    <p>And a 90-Day money back guarantee</p>
    <p>All you need to do now is click the button below</p>
    <p>I&rsquo;m Dr. Steven Masley. I wish you the best of health&hellip;</p>
    <p>And I hope to see you on the next page&hellip;</p>

    <div class="flex justify-center my-4">
      <button id="wsl-btn" class="cta-button clickable w-full md:w-auto text-2xl md:text-3xl py-2"
        style="padding: 10px 20px;">LEARN MORE <span class="chev-right ml-2"></button>
    </div>




  </div>


  <script>
  const wslBtn = document.getElementById('wsl-btn');
  wslBtn.addEventListener('click', () => {
    window.location = '<?= $nextlink; ?>';
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